<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tailor;

class TailorController extends Controller
{
    public function index()
    {
        $tailors = Tailor::all();

        return view('admin.jahitan.index', compact('tailors'));
    }
}
