<?

 class User{


    private $id ;

    private $username ;

    private $email ;

    private $password ;

    private $admin;


    public function get() {

        return  $this->title;
     }
 
     public function setTitle($title) {     
      
         $this->title = $title;
 
         return $this;
 }

}

