<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo view('Template/header.php');
        echo view('Home/home_view.php');
        echo view('Template/footer.php');
    }

    public function cs() {
      echo view('Template/header.php');
      echo view('Home/home_view.php');
      echo view('Template/footer.php');
    }
}
