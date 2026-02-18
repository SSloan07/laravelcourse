<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CreateProductController extends Controller

{

    public function index(): View
    {

        return view('home.contact');

    }

}