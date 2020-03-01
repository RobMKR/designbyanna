<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
class HomeController extends BaseController
{
    public function index()
    {
        return view('pages.index');
    }

    public function indexPost()
    {
        return view('pages.index')->with([
            'status' => 'requested'
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function service3d()
    {
        return view('pages.3d_service');
    }

    public function serviceInt()
    {
        return view('pages.interior_service');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function properties()
    {
        return view('pages.properties');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost(Request $request)
    {
        session()->flash('success', 'ok');

        return redirect()->back();
    }
}
