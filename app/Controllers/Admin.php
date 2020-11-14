<?php

namespace App\Controllers;


class Admin extends BaseController
{

    protected $helpers;

    public function __construct()
    {
        $helpers = ['url', 'file', 'url_helper'];
    }

    public function index()
    {
        echo view('admin/view/index');
    }

    public function profile()
    {
        echo view('admin/view/profile/index');
    }


    //--------------------------------------------------------------------

}
