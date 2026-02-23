<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'file' => 'nullable|mimes:pdf,doc,docx,jpg,png|max:2048'
        ]);

        // 2. File Upload Handle karna
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('inquiry_files', 'public');
        }

        // 3. Database me store karna
        DB::table('inquiries')->insert([
            'name' => $request->name,
            'country_code' => $request->countryCode,
            'phone' => $request->phone,
            'email' => $request->email,
            'budget' => $request->budget,
            'file_path' => $filePath,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Inquiry sent successfully!');
    }


    public function stores(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'project' => 'required',
            'demo_date' => 'required|date',
            'demo_time' => 'required',
            'description' => 'nullable'
        ]);

        Schedule::create($data);

        return back()->with('success', 'Aapka demo schedule ho gaya hai!');
    }
}
