<?

 class User{


    private $id ;

    private $username ;

    private $email ;

    private $password ;

    private $admin;


    public function getId():int  {

        return  $this->id;
     }
 
     public function setUsername($username):string {     
      
         $this->username = $username;
 
         
     public function getUsername() {

        return $this->username;
 
     }

     public function setEmail($email) {

        $this->email = $email;

        return $this;   
     }

     public function getEmail() {

        return $this->email;
     }

     public function setPassword($password) {

        $this->password = $password;

        return $this;
     }

     public function getPassword() {

        return $this->password;

     }

     public function setAdmin($admin) {

        $this->admin = $admin;

        return $this;
     }

     public function getAdmin() {

        return $this->admin;
     }

}

