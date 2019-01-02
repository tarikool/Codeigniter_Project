<?php

class Testusers extends CI_Controller{


public function show($user_id,$username){




  $data['results'] =  $this->test_user_model->get_users($user_id, $username);
  $data['welcome'] = "welcome To my page";

     $this->load->view('user_view',$data);




   }


   public function insert( $username, $password ) {
   
   $this->test_user_model->insert_users([

   	'username' => $username,
   	'password' => $password

   ]);

   }


   public function update( $user_id ) {
   
   $username = 'Lilli';
   $password = 'Where do i go';

   $this->test_user_model->update_users([

   	'username' => $username,
   	'password' => $password

   ] , $user_id );

   }


   public function delete( $user_id ) {

   	$this->test_user_model->delete_user( $user_id );

   }


}


?>