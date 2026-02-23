<?php

namespace App\Http\Controllers;


use App\Models\Inquiry;


class AdminInquiryController extends Controller
{
    // Sabhi inquiries dikhane ke liye
    public function index()
    {
        $inquiries = Inquiry::latest()->get();
        return view('admin.inquiries.index', compact('inquiries'));
    }

    // Status toggle karne ke liye (Read/Unread)
    public function toggleStatus($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->is_read = !$inquiry->is_read;
        $inquiry->save();
        return back()->with('success', 'Status updated!');
    }
    public function show($id)
    {
        $inquiry = Inquiry::findOrFail($id);

        // Jab user details dekhe, toh use 'Read' mark kar dein automatically
        $inquiry->update(['is_read' => 1]);

        return view('admin.inquiry-details', compact('inquiry'));
    }
    public function destroy($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();

        // Delete karne ke baad dashboard par wapas bhejein aur message dikhayein
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry successfully deleted!');
    }
    
}
