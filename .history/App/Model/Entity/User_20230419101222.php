<?

 class User{


    private $id ;

    private $username ;

    private $email ;

    private $password ;

    private $admin;


    public function getTitle() {

        return  $this->title;
     }
 
     public function setTitle($title) {     
      
         $this->title = $title;
 
         return $this;
 }

}

