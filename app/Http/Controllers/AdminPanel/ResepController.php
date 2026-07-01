<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        return view('admin-panel.resep.index');
    }

    public function showCreate()
    {
        return view('admin-panel.resep.create');
    }
}
