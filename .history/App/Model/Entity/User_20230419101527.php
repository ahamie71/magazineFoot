<?

 class User{


    private $id ;

    private $username ;

    private $email ;

    private $password ;

    private $admin;


    public function getId() {

        return  $this->id;
     }
 
     public function setUsername($username) {     
      
         $this->username = $username;
 
         return $this;
 }
     public function getUsername() {

        return $this->username;
 
     }

     public function setEmail($email) {

        $this->email = $email;

        return $this;   
     }

     public function getEmail() {
}

