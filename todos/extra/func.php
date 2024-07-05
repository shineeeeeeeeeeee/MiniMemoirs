
<?php
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";

     public $mysqli;

      public function _construction(){
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);

     }
      public function contact_us($data){
        $fname=$data['name'];
        $lname=$data['lname'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['msg'];
        $q="insert into contact_us set first_name='$fname', last_name='$lname', email='$email', phone='$phone', message='$message' ";
        return $this->mysqli->query($q);
        
      }
}

?>
