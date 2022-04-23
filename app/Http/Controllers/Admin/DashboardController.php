<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $countCustomer = User::whereHas('roles', function ($q) {
                $q->where('name', 'buyer');
            })->get();

            return view('pages.dashboard.index')->with('countCustomer', $countCustomer);
        } elseif (Auth::user()->hasRole('buyer')) {
            return view('pages.store.dashboard-user.index');
        } else {
            return view('auth.login');
        }
    }
}
