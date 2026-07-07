<?php

namespace App\Http\Controllers;

class InstallerController extends Controller
{
    public function index()
    {
        return view('installer.index');
    }

    public function install()
    {
        return redirect()
            ->route('login')
            ->with('success','Installation Completed');
    }
}