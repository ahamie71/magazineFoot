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
 
     public function getUsername($title) {     
      
         $this->title = $title;
 
         return $this;
 }

}

