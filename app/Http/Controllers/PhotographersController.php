<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PhotographersController extends Controller
{
    public function index()
    {
        $categoryId= Categories::where('name', 'Photographers')->value('id');
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
            'description' => 'required',
        ], [
            'fname' => 'First Name Required.',
            'lname' => 'Last name Required.',
            'email.email' => 'The email address is not valid.',
            'password.regex' => 'Password must be 8-32 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character',
            'conf-password.same' => 'Password confirmation must match with password.',
            'description' => 'Description Required'
        ]);
        $categoryId = Categories::where('name', 'Photographers')->value('id');
        // dd($categoryId);
        $photoPath='images/photographer-default-image.png';
        $photographer = Employees::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'description' => $request->input('description'),
            'category_id' => $categoryId,
            'photo' => $photoPath
        ]);
        // dd ($user);
        if ($photographer) {
            return back()->withErrors(['success' => 'Photographer created successfully.']);
        }
        if (!($photographer)) {
            return back()->withError(['error' => 'Failed to create Photographer.']);
        }
    }
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
            $photographer = Employees::findorFail($id);
            $photographer->fname = $request->fname;
            $photographer->lname = $request->lname;
            $photographer->email = $request->email;
            $photographer->description = $request->description;
            $photographer->photo = $photoPath;
        }else{
            $photographer = Employees::findorFail($id);
            $photographer->fname = $request->fname;
            $photographer->lname = $request->lname;
            $photographer->email = $request->email;
            $photographer->description = $request->description;
        }
        $photographer->update();
        return back()->withErrors(['success' => 'Photographer info updated successfully.']);
    }
    public function destroy($id)
    {
        Employees::findorFail($id)->delete();
        return back()->withErrors(['success' => 'Photographer Deleted successfully.']);
    }


    //////////////// user side /////////////////
    public function photographersPageUser(){

        $categoryId= Categories::where('name', 'Photographers')->value('id');
        $photographers = Employees::where('category_id', $categoryId)->get();
        return view('user.photographers', compact('photographers'));
    }
    public function photographerDetails($id){
        $photographer= Employees::findorFail($id);
        return view('user.photographer', compact('photographer'));
    }


    /////////////////// photographer side //////////////////////
    public function homePage(){
        return view('employee.home');
    }
    public function profilePage(){
        $photographer=Employees::where('id',session('user_id'))->first();
        return view('employee.profile', compact('photographer'));
    }

    ////////////////////Photographer Profile////////////////////
    public function fnameEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->fname = $request->fname;
        $photographer->update();
        return back()->with('success', 'First Name changed successfully');
    }
    public function lnameEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->lname = $request->lname;
        $photographer->update();
        return back()->with('success', 'Last Name changed successfully');
    }
    public function emailEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        $photographer->email = $request->email;
        $photographer->update();
        return back()->with('success', 'Email changed successfully');
    }
    public function passwordEdit(Request $request)
    {
        $photographer = Employees::find($request->id);
        if (Hash::check($request->input('password'), $photographer->password)) {
            $photographer->password = Hash::make($request->input('newPassword'));
            $photographer->update();
            return back()->with('success', 'Password changed successfully');
        } else {
            return back()->with('error', 'Old Password incorrect!! Please try again');
        }
    }
    public function descriptionEdit(Request $request){
        // dd($request->id);
        $photographer = Employees::find($request->id);
        // dd($photographer);
        $photographer->description = $request->description;
        $photographer->update();
        return back()->with('success', 'Description changed successfully');
    }
    public function profilePicEdit(Request $request){
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        // check if there is a img and save the path for it
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = null;
        }
        $photographer = Employees::find($request->id);
        $photographer->photo = $imagePath;
        $photographer->update();
        return back()->with('success', 'Profile Picture changed successfully');
    }
}
