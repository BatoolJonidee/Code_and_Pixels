<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Employees;
use App\Models\Reservation;
use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PhotographersController extends Controller
{
    public function index()
    {
        $categoryId = Categories::where('name', 'Photographers')->value('id');
        $photographers = Employees::where('category_id', $categoryId)->orderBy('created_at', 'desc')->get();
        return view('admin.photographers', compact('photographers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'email|required',
            'password' => 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/ |string|min:8|max:32|required',
            'conf-password' => 'same:password|required',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'session_type' => 'required',
        ], [
            'fname' => 'First Name Required.',
            'lname' => 'Last name Required.',
            'email.email' => 'The email address is not valid.',
            'password.regex' => 'Password must be 8-32 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character',
            'conf-password.same' => 'Password confirmation must match with password.',
            'price' => 'Price Required and must be muneric number',
            'description' => 'Description Required',
            'session_type' => 'Session type required',
        ]);
        $categoryId = Categories::where('name', 'Photographers')->value('id');
        // dd($categoryId);
        $photoPath = 'images/photographer-default-image.png';
        $photographer = Employees::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'session_type' => $request->input('session_type'),
            'category_id' => $categoryId,
            'photo' => $photoPath
        ]);
        if($photographer){
            return back()->with('success', 'Photographer created successfully.');
        }else{
            return back()->with('error', 'Failed to create Photographer.');
        }
    }
    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {
            // dd($request->photo);
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif',
            ], [
                'photo' => 'The image must be in (jpeg, png, jpg, gif) format',
            ]);
            $photoPath = $request->file('photo')->store('images', 'public');
            $photographer = Employees::findorFail($id);
            $photographer->fname = $request->fname;
            $photographer->lname = $request->lname;
            $photographer->email = $request->email;
            $photographer->price = $request->price;
            $photographer->description = $request->description;
            $photographer->session_type = $request->session_type;
            $photographer->photo = $photoPath;
        } else {
            $photographer = Employees::findorFail($id);
            $photographer->fname = $request->fname;
            $photographer->lname = $request->lname;
            $photographer->email = $request->email;
            $photographer->price = $request->price;
            $photographer->description = $request->description;
            $photographer->session_type = $request->session_type;
        }
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Photogrpher Info updated successfully');
        }else{
            return back()->with('error', 'Filed to update Photographer Info.');
        }   
    }
    public function destroy($id)
    {
        Employees::findorFail($id)->delete();
        return back()->withErrors(['success' => 'Photographer Deleted successfully.']);
    }


    //////////////// user side /////////////////
    //////////////// user side /////////////////
    //////////////// user side /////////////////
    public function photographersPageUser()
    {

        $categoryId = Categories::where('name', 'Photographers')->value('id');
        $photographers = Employees::where('category_id', $categoryId)->get();
        return view('user.photographers', compact('photographers'));
    }
    public function photographerDetails($id)
    {
        $photographer = Employees::findOrFail($id);
        $schedules = Schedules::where('emplyee_id', $id)
            ->whereDate('date', '>=', now()->toDateString())
            ->get();
        $scheduleCount=$schedules->count();
        $availableDates = Schedules::where('emplyee_id', $id)
            ->whereDate('date', '>=', now()->toDateString())
            ->distinct('date')
            ->orderBy('date', 'asc')
            ->pluck('date');
        return view('user.photographer', compact('photographer', 'schedules', 'availableDates', 'scheduleCount'));
    }
    public function search(Request $request)
    {
        $search = $request->input('name');
        $photographers = Employees::where('fname','LIKE',"%$search%")->orWhere("lname","LIKE","%$search%")->get();

        if($photographers->count() > 0){
            return view("user.photographers", compact("photographers"));
        }else{
            session()->put("search","no");
            return view('user.not-found');
        }
        
    }


    /////////////////// photographer side //////////////////////
    /////////////////// photographer side //////////////////////
    /////////////////// photographer side //////////////////////
    public function homePage()
    {
        $lastLogin = session('last_login');
        if($lastLogin==null){
            $reservation=0;
            $sessions = Reservation::where('employee_id', session('user_id'))
                ->orderBy('created_at', 'desc')->get();
        }else{
            $reservation = Reservation::where('created_at', '>', $lastLogin)
                ->where('employee_id', session('user_id'))->count();
            $sessions = Reservation::where('employee_id', session('user_id'))
                ->orderBy('created_at', 'desc')->get();
            }
            return view('employee.home', compact('sessions', 'reservation'));
    }
    public function profilePage()
    {
        $photographer = Employees::where('id', session('user_id'))->first();
        return view('employee.profile', compact('photographer'));
    }
    public function schedulePage()
    {
        $photographer = Employees::findOrFail(session('user_id'));
        $schedules = $photographer->schedule()->orderBy('date','desc')->get();
        return view('employee.schedule', compact('schedules'));
    }
    public function storeSchedulePage(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'times' => 'required|array|min:1|in:09:00,10:00,11:00,12:00,13:00,14:00,15:00,16:00,17:00,18:00,19:00,20:00,21:00,22:00,23:00',
        ],[
            'times'=> "You can't add Schedule without choosing the time",
        ]);

        $selectedTimes = $request->input('times');
        foreach ($selectedTimes as $selectedTime) {
            $schedule = Schedules::create([
                'emplyee_id' => $id,
                'date' => $request->input('date'),
                'time' => $selectedTime,
            ]);
        }

        return redirect()->back()->with('success', 'Schedule saved successfully');
    }
    public function destroySchedule($id)
    {
        Schedules::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Schedule deleted successfully');
    }



    ////////////////////Photographer Profile////////////////////
    ////////////////////Photographer Profile////////////////////
    ////////////////////Photographer Profile////////////////////
    public function fnameEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->fname = $request->fname;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'First Name updated successfully');
        }else{
            return back()->with('error', 'Filed to update First Name.');
        }   
    }
    public function lnameEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->lname = $request->lname;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Last Name updated successfully');
        }else{
            return back()->with('error', 'Filed to update Last Name.');
        }   
    }
    public function emailEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->email = $request->email;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Email updated successfully');
        }else{
            return back()->with('error', 'Filed to update Email.');
        }   
    }
    public function passwordEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        if (Hash::check($request->input('password'), $photographer->password)) {
            $photographer->password = Hash::make($request->input('newPassword'));
            $photographer->update();
            if($photographer){
                return back()->with('success', 'Password updated successfully');
            }else{
                return back()->with('error', 'Filed to update Password.');
            }   
        } else {
            return back()->with('error', 'Old Password incorrect!! Please try again');
        }
    }
    public function descriptionEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->description = $request->description;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Description updated successfully');
        }else{
            return back()->with('error', 'Filed to update Description.');
        }   
    }
    public function priceEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->price = $request->price;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Price updated successfully');
        }else{
            return back()->with('error', 'Filed to update Price.');
        }   
    }
    public function profilePicEdit(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif',
        ],[
            'photo' => 'The image must be in (jpeg, png, jpg, gif) format',
        ]);
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = null;
        }
        $photographer = Employees::find($request->id);
        $photographer->photo = $imagePath;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Profile Picture updated successfully');
        }else{
            return back()->with('error', 'Filed to update Profile Picture.');
        }   
    }
    public function sessionTypeEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->session_type = $request->session_type;
        $photographer->update();
        if($photographer){
            return back()->with('success', 'Session Type updated successfully');
        }else{
            return back()->with('error', 'Filed to update Session Type.');
        }   
    }
}
