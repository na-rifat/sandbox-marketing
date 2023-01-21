<?php

namespace App\Http\Controllers;

class FrontendController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view( 'pages.home' );
    }

    public function about() {
        return view( 'pages.about' );
    }

    public function services() {
        return view( 'pages.services' );
    }

    public function contact_us() {
        return view( 'pages.contact-us' );
    }

    public function shop() {
        return view( 'pages.shop' );
    }

    public function blog() {
        return view( 'pages.blog' );
    }

    public function login() {
        return view( 'user.login' );
    }

    public function register() {
        return view( 'user.register' );
    }
}
