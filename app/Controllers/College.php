<?php

namespace App\Controllers;
use App\Models\CollegeModel;

class College extends BaseController
{
    public function index(){
        $model = new CollegeModel();
        $data['college'] = $model->getCollege();        
        return view('templates/header')
        .view('pages/college/index',$data)
        .view('templates/footer');
    }
    public function create(){
        return view('templates/header')
        .view('pages/college/create')
        .view('templates/footer');
    }
    public function save(){
        $model = new CollegeModel();
        //print_r($_POST);
        $data =[
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'created_date' => date('Y-m-d h:i:s'),
        ];
        //print_r($data);
        $result = $model->saveCollege($data);
        //echo $result;
        if($result){
            return redirect()->to('/college');
        }else{
            return redirect()->to('/college/create');
        }

    }
    public function edit($id){
        $model = new CollegeModel();
        $data['college'] = $model->getCollege($id)->getRow();
        return view('templates/header')
        .view('pages/college/edit',$data)
        .view('templates/footer');
    }

    public function update(){
        $model = new CollegeModel();
        print_r($_POST);
        $id = $this->request->getPost('id');
        $data =[
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'created_date' => date('Y-m-d h:i:s'),
        ];
        $result = $model->updateCollege($id,$data);
        if($result){
            return redirect()->to('/college');
        }else{
            return redirect()->to('/college/edit');
        }
    }
    public function delete($id){
        $model = new CollegeModel();
        $result = $model->deleteCollege($id);
        return redirect()->to('/college');        
    }
}