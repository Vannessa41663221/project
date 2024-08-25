<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function profile()
    {
        if (!auth()->guard('student')->check()) {
            return redirect()->route('login')->withErrors('You must be logged in to access this page.');
        }

        $student = auth()->guard('student')->user();
        return view('profile', ['student' => $student]);
    }
    public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $student = auth()->guard('student')->user();

        if ($request->profile_picture) {
            $profileImage = $request->profile_picture;
            $profileImageName = time().'.'.$profileImage->extension();
            $profileImage->move(public_path('images'), $profileImageName);

            $student->profile_picture = 'images/'.$profileImageName;
            $student->save();
        }

//        return redirect()->back()->with('success', 'Profile picture updated successfully.');
        return redirect()->route('profile');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
