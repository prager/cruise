<?php namespace App\Models;

use CodeIgniter\Model;

class Home_model extends Model {

  var $db;

  public function __construct()  {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

  public function reserve($param) {
    $db      = \Config\Database::connect();
    $builder = $db->table('reservations');
    $builder->resetQuery();
    $builder->insert($param);

    $recipient = 'jkulisek.us@gmail.com';
      $subject = 'Rezervace plavby';
      $message = 'Potvrzení účasti dne 27. 5. 2023 na výletu lodí Jan Plezier. Údaje účastníka: ' . "\n" . $param['fname'] . ' ' . $param['lname'] . "\n".
   	        ' Phone: ' . $param['phone'] . ' | Email: ' . $param['email'] . ' | ' . 'Počet hostů: ' . $param['cnt'] . "\n" .
            'Hostitel děkuje za zájem a velmi se těší na vaši účast!';

 	    mail($recipient, $subject, $message);

      $recipient = $param['email'];
      $subject = 'Potvrzeni rezervace';
      $message = 'Potvrzení účasti dne 27. 5. 2023 na výletu lodí Jan Plezier.'. "\n".
      'Více informací na webu https://plavbanavltave.info' . "\n" .
      ' Údaje účastníka: ' . "\n" . $param['fname'] . ' ' . $param['lname'] . "\n".
   	        ' Phone: ' . $param['phone'] . ' | Email: ' . $param['email'] . ' | ' . 'Počet hostů: ' . $param['cnt'] . "\n" .
            'Hostitel děkuje za zájem a velmi se těší na vaši účast!';

   	  mail($recipient, $subject, $message);
  }

  public function send_msg($param) {
    $db      = \Config\Database::connect();
    $builder = $db->table('msg');
    $builder->resetQuery();
    $builder->insert($param);
    $recipient = 'jkulisek.us@gmail.com';
      $subject = 'Vzkaz o plavbe';
      $message = $param['fname'] . ' ' . $param['lname'] . "\n".
 	        "\n". 'Email: ' . $param['email'] . "\n" .
          $param['msg'];

 	   mail($recipient, $subject, $message);
  }

}
