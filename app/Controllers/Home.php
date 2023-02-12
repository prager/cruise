<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        $data['msg'] = "";
        echo view('Template/header.php');
        echo view('Home/home_view.php', $data);
        echo view('Template/footer.php');
    }

    public function cs() {
      $data['msg'] = "";
      echo view('Template/header.php');
      echo view('Home/home_view.php', $data);
      echo view('Template/footer.php');
    }

    public function en() {
      $data['msg'] = "";
      echo view('Template/header.php');
      echo view('Home/home_view_en.php', $data);
      echo view('Template/footer.php');
    }

    public function send_res() {

      $param['lname'] = $this->request->getPost('lname');
      $param['fname'] = $this->request->getPost('fname');
      $param['email'] = $this->request->getPost('email');
      $param['reason'] = $this->request->getPost('reason');
      $param['phone'] = $this->request->getPost('phone');
      $param['cnt'] = intval($this->request->getPost('cnt'));
      if (filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {
  		    $this->home_mod->reserve($param);
          $data['msg'] = "Váš vzkaz byl odeslán. Děkuji!";
          $data['flag'] = TRUE;
		  }
      else {
        $data['msg'] = "Váš vzkaz bohužel nebyl odeslán kvůli špatnému emailu.";
        $data['flag'] = FALSE;
      }
      $data['msg'] = "Rezervace byla odeslána! Prosím, zkonrolujte si potvrzení rezervace ve vašem emailu.";
      echo view('Template/header.php');
      echo view('Home/home_view.php', $data);
      echo view('Template/footer.php');
    }

    public function send_res_en() {
      $data['msg'] = "Your reservation was sent! Please, check your reservation in your email.";
      echo view('Template/header.php');
      echo view('Home/home_view_en.php', $data);
      echo view('Template/footer.php');
    }

    public function send_msg_en() {
      $data['msg'] = "Your message was sent. Thank you!";
      echo view('Template/header.php');
      echo view('Home/home_view_en.php', $data);
      echo view('Template/footer.php');
    }

    public function send_msg() {
      $param['fname'] = $this->request->getPost('fname');
      $param['lname'] = $this->request->getPost('lname');
      $param['email'] = $this->request->getPost('email');
      $param['msg'] = $this->request->getPost('msg');
      $param['subject'] = $this->request->getPost('subj');

      if (filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {
  		    $this->home_mod->send_msg($param);
          $data['msg'] = "Váš vzkaz byl odeslán. Děkuji!";
          $data['flag'] = TRUE;
		  }
      else {
        $data['msg'] = "Váš vzkaz bohužel nebyl odeslán kvůli špatnému emailu.";
        $data['flag'] = FALSE;
      }

      echo view('Template/header.php');
      echo view('Home/home_view.php', $data);
      echo view('Template/footer.php');
    }
}
