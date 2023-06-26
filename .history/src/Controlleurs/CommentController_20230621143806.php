<?Php

namespace Foot\Controlleurs;;
use Foot\Model\PostRepository;

session_start();

Class CommentController 
{

    public function addComment()
    {
      
        if(isset($_POST['content'])){
    
        
            $text= $_POST['text'];
            $user_id = $_SESSION['user']->getId();
            $id_post= $_GET['id'];
            $postRepo= new PostRepository();
            $comment= $postRepo->createComment($id_post, $user_id, $text);
            
        
        }

    }

   public function getcomment()

{  
  $coms= afficheComment($_GET['id']);
  require_once(dirname(__FILE__, 2) . '/View/Posts/Display.php');
}

}

