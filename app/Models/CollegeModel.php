<?php

namespace App\Models;

use CodeIgniter\Model;

class CollegeModel extends Model
{
    protected $table = 'college';    

    public function getCollege($id = false){
        if($id==false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }
        
    }
    public function saveCollege($data){
        return $this->db->table($this->table)->insert($data);
    }
    public function updateCollege($id, $data){
        return $this->db->table($this->table)->where(['id'=>$id])->update($data);
    }
    public function deleteCollege($id){
        return $this->db->table($this->table)->where(['id'=>$id])->delete();
    }
    
}