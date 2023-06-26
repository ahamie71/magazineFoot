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
            $CommentRepo= new CommentRepository();
            $comment= $CommentRepo->createComment($id_post, $user_id, $text);
            header('location:index.php?action=DisplayOnePost&id='.$id_post);
        
        }

        else{
                
            require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php'); 
        }

    }

   public function getComment()

{  
   
  $commentRepo= new CommentRepository();
  $comments= $commentRepo->getComments($_GET['id']);
  require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php');
}

}

