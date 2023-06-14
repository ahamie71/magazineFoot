<?php

namespace Foot\Controlleurs;

Class HomeController
{

     public function Home()
     {
          require('./../src/View/HomePage.php');
          
          require('./../src/View/Navbar.php');
     }


    

}