<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index(){
        $data = ['title' => 'Login'];
        return view('login',$data);
    }
    public function register(){
        $data = ['title' => 'Login'];
        return view('register',$data);
    }
    public function createUser(){
        $session = session();
        $model = new AuthModel();
        $data =[
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_date' => date('Y-m-d h:i:s'),
        ];
        $result = $model->createUser($data);
        if($result){
            $session->setFlashdata('status', 'success');
            $session->setFlashdata('message', 'Account created succesfully');
            return redirect()->to(base_url());
        }else{
            $session->setFlashdata('status', 'failed');
            $session->setFlashdata('message', 'something went wrong');
            return redirect()->to('/register');
        }

    }

    public function login(){
        $session = session();
        $model = new AuthModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $verify = password_verify($password, $data['password']);
            if($verify){
                $ses_set = [
                    'user_id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'logged_in'=> TRUE
                ];
                $session->set($ses_set);
                // print_r($_SESSION);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('status', 'failed');
                $session->setFlashdata('message', 'Password is wrong');
                return redirect()->to(base_url());
            }
        }else{
            $session->setFlashdata('status', 'failed');
            $session->setFlashdata('message', 'Email not found');
            return redirect()->to(base_url());
        }

    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
    
}
