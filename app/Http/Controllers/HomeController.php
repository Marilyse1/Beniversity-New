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

    public function donation()
    {
        return view('donation');
    }

    public function donation_details()
    {
        return view('donation-details');
    }

    public function donate_now()
    {
        return view('donate-now');
    }

    public function donation_carousel()
    {
        return view('donation-carousel');
    }

    public function donation_list()
    {
        return view('donation-list');
    }

    public function events()
    {
        return view('events');
    }

    public function event_details()
    {
        return view('event-details');
    }

    public function events_carousel()
    {
        return view('events-carousel');
    }

    public function faq()
    {
        return view('faq');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
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
