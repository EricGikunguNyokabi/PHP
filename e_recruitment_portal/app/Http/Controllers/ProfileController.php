<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Ensure the User model is imported

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone' => 'nullable|string|max:20',
        //     'address' => 'nullable|string|max:255',
        //     'date_of_birth' => 'nullable|date',
        //     'gender' => 'nullable|string|in:male,female,other',
        // ]);
        
        
        $user = Auth::user(); // This should be an instance of the User model
        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        // dd($request->all());

        $user->save(); // The save() method should work fine here

        return redirect()->route('applicant.personal_profile')->with('success', 'Profile updated successfully!');
    }
}
