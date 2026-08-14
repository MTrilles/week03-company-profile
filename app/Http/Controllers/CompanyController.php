<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }
}