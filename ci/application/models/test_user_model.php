<?php 
 
 class Test_user_model extends CI_Model {

  public function get_users($user_id,$username){

/*  	$config['hostname']='localhost';
  	$config['username']='root';
  	$config['password']='';
  	$config['database']='errand_db';
    
    $this->load->database($config);

    $this->db->query('SELECT * FROM users');
*/

   $this->db->where([
    
    'id'=>$user_id,
    'username' => $username

   ]);

  

   $query = $this->db->get('users');

    return $query-> result();




        //$this->db->where('id', $user_id);



    //$query = $this->db->query("SELECT * FROM users");
   
  // return $query->num_fields();

  // return $query->num_rows();  	


  }


  public function insert_users( $data ) {

  	$this->db->insert('users', $data );


  }




  public function update_users( $data, $user_id ) {
    
    $this->db->where([ 'id' => $user_id ]);
  	$this->db->update('users', $data );


  }



  public function delete_user( $user_id ) {
    
    $this->db->where(['id' => $user_id ]);
  	$this->db->delete('users');


  }


 }
?>