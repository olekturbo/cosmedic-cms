<?php

namespace App\Http\Controllers;

use App\Image;
use App\PriceCategory;
use App\PriceSubcategory;
use App\Service;
use App\Worker;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request) {
        $services = Service::paginate(6);
        $price_categories = PriceCategory::all();
        $workers = Worker::all();
        $images = Image::all();

        return view('welcome', compact('services', 'price_categories', 'workers', 'images'));
    }
}
