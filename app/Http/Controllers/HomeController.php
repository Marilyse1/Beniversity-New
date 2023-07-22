<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function donations()
    {
        return view('donations');
    }

    public function donation_details()
    {
        return view('donation-details');
    }

    public function donate_now()
    {
        return view('donate-now');
    }

    public function events()
    {
        return view('events');
    }

    public function blog()
    {
        return view('blog');
    }

    public function trainings()
    {
        return view('trainings');
    }

    public function event_details()
    {
        return view('event-details');
    }

<<<<<<< HEAD
=======
    public function blog_details()
    {
        return view('blog-details');
    }

    public function become_volunteer()
    {
        return view('become-volunteer');
    }

>>>>>>> main
    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function training()
    {
        return view('training');
    }

    public function departements()
    {
        return view('departements');
    }

    public function departement_details()
    {
        return view('departement-details');
    }
}
