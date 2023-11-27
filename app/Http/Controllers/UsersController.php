<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Reservation;
use App\Models\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::orderBy('created_at', 'desc')->get();

        return view('admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $findUser = Users::where('email', $request->input('email'))->first();
        if ($findUser) {

            // dd($findUser);
            return back()->withErrors(['error' => 'Invalid Email. Try Registration again.']);
        } else {
            $request->validate([
                'fname' => 'alpha|required',
                'lname' => 'alpha|required',
                'email' => 'email|required',
                'password' => 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/ |string|min:8|max:32|required',
                'conf-password' => 'same:password|required',
                'phone' => 'numeric|digits:10|required',
                'gender' => 'in:Male,Female|required',
                'city' => "required|in:Amman,Ajloun,Aqaba,Balqa,Irbid,Jerash,Karak,Ma'an,Madaba,Mafraq,Tafilah,Zarqa",
                'address' => 'required',
            ], [
                'fname.alpha' => 'Must contain letters only.',
                'lname.alpha' => 'Must contain letters only.',
                'email.email' => 'The email address is not valid.',
                'password.regex' => 'Password must be 8-32 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character',
                'conf-password.same' => 'Password confirmation must match with password.',
                'phone.numeric' => 'Phone must be a valid number with 10 digits.',
                'gender.in' => 'Please select the gender.',
                'city.in' => 'Please select your city.',
            ]);
            $user = Users::create([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'phone' => $request->input('phone'),
                'gender' => $request->input('gender'),
                'city' => $request->input('city'),
                'address' => $request->input('address'),
            ]);
        }

        if ($user) {
            return back()->withErrors(['success' => 'User Created Successfully.']);
        } else {
            return back()->withErrors(['error' => 'Failed to create user.']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'hhhhhhhhhhhhhhhh';
        // dd($request);
        $request->validate([
            'fname' => 'alpha|required',
            'lname' => 'alpha|required',
            'email' => 'email|required',
            'password' => 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/ |string|min:8|max:32|required',
            'conf-password' => 'same:password|required',
            'phone' => 'numeric|digits:10|required',
            'gender' => 'in:Male,Female|required',
            'city' => "required|in:Amman,Ajloun,Aqaba,Balqa,Irbid,Jerash,Karak,Ma'an,Madaba,Mafraq,Tafilah,Zarqa",
            'address' => 'required',
            'is_admin' => 'required'
        ], [
            'fname.alpha' => 'Must contain letters only.',
            'lname.alpha' => 'Must contain letters only.',
            'email.email' => 'The email address is not valid.',
            'password.regex' => 'Password must be 8-32 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character',
            'conf-password.same' => 'Password confirmation must match with password.',
            'phone.numeric' => 'Phone must be a valid number with 10 digits.',
            'gender.in' => 'Please select the gender.',
            'city.in' => 'Please select your city.',
            'is_admin' => 'Please select the status'
        ]);
        $user = Users::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'is_admin' => $request->input('is_admin')
        ]);
        // dd ($user);
        if ($user) {
            return back()->withErrors(['success' => 'User created successfully.']);
        }
        if (!($user)) {
            return back()->withError(['error' => 'Failed to create user.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        $user = Users::find(session()->get('user_id'));
        $reservations= $user->reservation;
        return view('user.profile', compact('user','reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if ($request->hasFile('photo')) {
            // dd($request->photo);
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif',
            ],[
                'photo' => 'The image must be in (jpeg, png, jpg, gif) format',
            ]);
            $photoPath = $request->file('photo')->store('images', 'public');
            $user = User::findorFail($id);
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            $user->city = $request->city;
            $user->address = $request->address;
            $user->is_admin = $request->is_admin;
            $user->photo = $photoPath;
        }else{
            $user = User::findorFail($id);
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            $user->city = $request->city;
            $user->address = $request->address;
            $user->is_admin = $request->is_admin;
        }
        $user->update();
        return back()->withErrors(['success' => 'User info updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Users::findorFail($id)->delete();
        return back()->withErrors(['success' => 'User Deleted successfully.']);
    }
    ///////////////////////login/////////////////////////////////
    ///////////////////////login/////////////////////////////////
    ///////////////////////login/////////////////////////////////
    ///////////////////////login/////////////////////////////////
    public function login(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);
        $user = Users::where('email', $request->input('Email'))->first();
        if ($user) {
            if (Hash::check($request->input('Password'), $user->password)) {
                // session()->put('name', $user->fname);

                session()->put('user_id', $user->id);
                session()->put('user_name', $user->fname . ' ' . $user->lname);
                session()->put('is_admin', $user->is_admin);
                session()->put('user_email', $user->email);
                if ($user->is_admin == 0) {
                    return redirect()->intended('/');
                } else if ($user->is_admin == 2) {
                    return redirect()->intended('/dashboard');
                } else {
                }
            } else {
                return back()->withErrors(['msg' => 'Invalid email or password']);
            }
        }

        $Photographer = Employees::where('email', $request->input('Email'))->first();
        if($Photographer){
            if (Hash::check($request->input('Password'), $Photographer->password)) {
                // session()->put('name', $user->fname);

                session()->put('user_id', $Photographer->id);
                session()->put('user_name', $Photographer->fname . ' ' . $Photographer->lname);
                session()->put('is_admin', 1);
                session()->put('user_email', $Photographer->email);
                return redirect()->intended('/Photographer-dashboard');
            } else {
                return back()->withErrors(['msg' => 'Invalid email or password']);
            }
        }
        return back()->withErrors(['msg' => 'Invalid email or password']);
    }
    ///////////////////Logout///////////////////////////////
    ///////////////////Logout///////////////////////////////
    ///////////////////Logout///////////////////////////////
    ///////////////////Logout///////////////////////////////
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
    ///////////////////edit profile/////////////////////////
    ///////////////////edit profile/////////////////////////
    ///////////////////edit profile/////////////////////////
    ///////////////////edit profile/////////////////////////
    public function fnameEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->fname = $request->fname;
        $user->update();
        return redirect()->route('profile');
    }
    public function lnameEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->lname = $request->lname;
        $user->update();
        return redirect()->route('profile');
    }
    public function emailEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->email = $request->email;
        $user->update();
        return redirect()->route('profile');
    }
    public function passwordEdit(Request $request)
    {
        $user = Users::find($request->id);
        if (Hash::check($request->input('password'), $user->password)) {
            $user->password = Hash::make($request->input('newPassword'));
            $user->update();
            return back()->with('success', 'Password changed successfully');
        } else {
            return back()->with('error', 'Old Password incorrect!!');
        }
    }
    public function phoneEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->phone = $request->phone;
        $user->update();
        return redirect()->route('profile');
    }
    public function genderEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->gender = $request->gender;
        $user->update();
        return redirect()->route('profile');
    }
    public function cityEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->city = $request->city;
        $user->update();
        return redirect()->route('profile');
    }
    public function addressEdit(Request $request)
    {
        $user = Users::find($request->id);
        $user->address = $request->address;
        $user->update();
        return redirect()->route('profile');
    }
    public function profilePictureEdit(Request $request)
    {

        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        // check if there is a img and save the path for it
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = null;
        }
        $user = Users::find($request->id);
        $user->photo = $imagePath;
        $user->update();
        return redirect()->route('profile');
    }
}
