<?Php

namespace Foot\Controlleurs;;
use Foot\Model\PostRepository;
use Foot\Model\CommentRepository;

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

   public function getComment()

{  
   
  $commentRepo= new CommentRepository();
  $commentaires= $postRepo->afficheComment($_GET['id']);
  require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php');
}

}

