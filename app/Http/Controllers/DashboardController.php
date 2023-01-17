<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $last_project = DB::table('projects')
        ->count();
        $numerOfCategories = DB::table('categories')
            ->count();


        return view('admin.dashboard', compact('last_project','numerOfCategories'));
    }
}
