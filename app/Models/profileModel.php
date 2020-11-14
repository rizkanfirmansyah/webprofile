<?php

namespace App\Models;

use CodeIgniter\Model;

class profileModel extends Model
{
    protected $table = 'profile';
    // protected $useTimestamps = true; 
    protected $primaryKey = true;
    protected $allowedFields = ['name', 'description', 'information', 'image'];


    public function updateData($data, $table = 'profile')
    {
        $query = $this->db->table($table)->update($data);
        return $query;
    }
}
