<?php

namespace App\Http\Controllers;
use App\Models\menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return View('dashboard.index', [
            'menu' => menu::all()
        ]);
      
    }
}
