<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $services = Service::paginate(6);

        return view('welcome', compact('services'));
    }
}
