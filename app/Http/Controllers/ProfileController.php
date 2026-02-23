<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile', compact('profile'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email',
            'company_phone' => 'required|string|max:20',
            'gstin' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        Profile::updateOrCreate(['id' => 1], $validated);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}

   

