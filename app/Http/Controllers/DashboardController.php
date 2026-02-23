<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
class DashboardController extends Controller
{
    public function index()
    {
        // Sirf latest 5 ya 10 invoices fetch karein dashboard ke liye
        $invoices = Invoice::latest()->take(5)->get();

        // Stats ke liye data (Optional, dashboard cards ke liye)
        $totalRevenue = Invoice::sum('grand_total');
        $pendingAmount = Invoice::where('status', 'DUE')->sum('grand_total');
        $totalInvoices = Invoice::count();

        return view('admin.dashboard', compact('invoices', 'totalRevenue', 'pendingAmount', 'totalInvoices'));
    }
}
