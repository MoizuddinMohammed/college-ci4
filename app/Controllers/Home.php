<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        $data = ['title' => 'Login'];
        return view('login',$data);
    }
    public function dashboard(){
        echo view('templates/header')
        .view('pages/dashboard')
        .view('templates/footer');
    }
    public function blank(){
        return view('templates/header')
        .view('blank')
        .view('templates/footer');
    }
    
}
