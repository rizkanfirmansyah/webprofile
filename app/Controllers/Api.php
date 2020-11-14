<?php

namespace App\Controllers;

use App\Models\profileModel;

class Api extends BaseController
{
    protected $profileModel;
    // protected $servicesModel;
    protected $helpers;

    public function __construct()
    {
        $helpers = ['url', 'file', 'url_helper'];
        $this->profileModel = new profileModel();
    }

    public function get($param)
    {
        if ($this->request->isAJAX()) {
            if ($param == 'profile') {
                $data = $this->profileModel->first();
                echo json_encode($data);
            } elseif ($param == 'services') {
                $services = new \App\Models\servicesModel();
                $data = $services->findAll();
                echo json_encode($data);
            }
        } else {
            echo 'Bukan Ajax';
        }
    }


    //--------------------------------------------------------------------

}
