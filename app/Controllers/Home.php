<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class Home extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
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
          $data['msg'] = "Vaše rezervace byla odeslána! Děkuji a budu se těšit!";
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
      $param['lname'] = $this->request->getPost('lname');
      $param['fname'] = $this->request->getPost('fname');
      $param['email'] = $this->request->getPost('email');
      $param['reason'] = $this->request->getPost('reason');
      $param['phone'] = $this->request->getPost('phone');
      $param['cnt'] = intval($this->request->getPost('cnt'));
      if (filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {
		    $this->home_mod->reserve_en($param);
        $data['msg'] = "Your reservation was sent! Thank you and I am looking forward meeting you!";
        $data['flag'] = TRUE;
		  }
      else {
        $data['msg'] = "Unfortunately, your reservation was not sent due to invalid email or other errors.";
        $data['flag'] = FALSE;
      }
      echo view('Template/header.php');
      echo view('Home/home_view_en.php', $data);
      echo view('Template/footer.php');
    }

    public function send_msg_en() {
      $param['fname'] = $this->request->getPost('fname');
      $param['lname'] = $this->request->getPost('lname');
      $param['email'] = $this->request->getPost('email');
      $param['msg'] = $this->request->getPost('msg');
      $param['subject'] = $this->request->getPost('subj');

      if (filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {
		    $this->home_mod->send_msg_en($param);
        $data['msg'] = "Your message was sent. Thank you!";
        $data['flag'] = TRUE;
		  }
      else {
        $data['msg'] = "Your message was not sent due to wrong email and/or other errors.";
        $data['flag'] = FALSE;
      }
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

    public function change_user_pass() {
    		echo view('template/header');
    		$param['flag'] = TRUE;
    		$param['email_key'] = $this->uri->getSegment(2);
    		$param['pass'] = $this->request->getPost('pass');
    		$param['pass2'] = $this->request->getPost('pass2');
    		$param['username'] = strtolower($this->request->getPost('username'));
    		$flags_arr = $this->user_mod->change_user_pass($param);
    		if($flags_arr['flag']) {
    			$data['title'] = 'Your Password Was Successfully Changed!';
    			$data['msg'] = 'Now you can go back to home page and login with your new password.';
    			echo view('status/status_view', $data);
    		}
    		else {
    			$data['msg'] = 'Please, fix the following error(s):<br>';
    			$data['id_user'] = $flags_arr['id_user'];
    			if($data['id_user'] > 0) {
    				if(!($flags_arr['pass_match'])) $data['msg'] .= '<p style="color:red;">Passwords do not match</p>';
      			if(!($flags_arr['usr_chk'])) $data['msg'] .= '<p style="color:red;">You entered a wrong username. Please, enter your correct username.</p>';
    				if(!($flags_arr['pass_comp'])) $data['msg'] .= '<p style="color:red;">Password complexity requirement not met. Password needs to contain at least two uppercase letters, two lowercase letters, two numbers and two special characters (!@#$%^&*()\-_+.]) in addition to be at least 8 characters long.</p>';
    				$data['email_key'] = $flags_arr['email_key'];
    				echo view('public/change_pass_view', $data);
    			}
    			else {
    				$data['title'] = 'Error!';
    				$data['msg'] = 'There was an error processing your data. <br><br>You can check your username and try again or contact the administrator. <br><br>';
            foreach($flags_arr as $key => $value) {
              //$value ? $data['msg'] .= $key . ' ' . 'OK<br>' : $data['msg'] .= $key . ' ' . 'Not OK<br>';
            }
    				echo view('status/status_view', $data);
    			}
    		}

    		echo view('Template/footer');
    	}

      public function upload() {
        echo view('Template/header.php');
        echo view('Home/upload_view.php', ['errors' => []]);
        echo view('Template/footer');
      }

      public function do_upload() {
      echo view('Template/header.php');
      $img = $this->request->getFile('userfile');
      if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = ['uploaded_fileinfo' => new File($filepath)];
            echo view('Home/file_success_view.php', $data);
        }

      echo view('Template/footer');
    }
}
