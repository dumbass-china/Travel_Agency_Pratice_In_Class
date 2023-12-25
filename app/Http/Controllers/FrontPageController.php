<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\Process;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $data['services'] = Service::get();
        $data['processes'] = Process::get();
        $data['guides'] = Guide::get();
        return view('index', $data);
    }
    public function about()
    {
        $data['title'] = "About";
        $data['guides'] = Guide::get();
        return view('front_about', $data);
    }
    public function services()
    {
        $data['title'] = "Services";
        $data['services'] = Service::get();
        $data['guides'] = Guide::get();
        return view('front_services', $data);
    }
    public function packages()
    {
        $data['title'] = "Packages";
        $data['guides'] = Guide::get();
        return view('front_packages', $data);
    }
    public function destination()
    {
        $data['title'] = "Destination";
        $data['guides'] = Guide::get();
        return view('front_destination', $data);
    }

    public function booking()
    {
        $data['title'] = "Booking";
        $data['processes'] = Process::get();
        $data['guides'] = Guide::get();
        return view('front_Booking', $data);
    }

    public function guides()
    {
        $data['title'] = "Guides";
        $data['guides'] = Guide::get();
        return view('front_guides', $data);
    }

    public function testimonial()
    {
        $data['title'] = "Testimonial";
        $data['guides'] = Guide::get();
        return view('front_testimonial', $data);
    }

    public function page404()
    {
        $data['title'] = "Not Found";
        return view('front_page404', $data);
    }

    public function contact()
    {
        $data['title'] = "Contact";
        return view('front_contact', $data);
    }
}
