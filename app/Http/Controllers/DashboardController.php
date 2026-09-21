<?php

namespace App\Http\Controllers;

use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $projectCount = Project::count();

        return view('dashboard', compact('projectCount'));
    }
}