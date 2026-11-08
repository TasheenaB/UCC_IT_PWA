<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        // get everyone from the database ordered by name
        $staff = Staff::orderBy('name')->get();

        return view('directory', ['staff' => $staff]);
    }
}
