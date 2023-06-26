<?Php

namespace Foot\Controlleurs;;
use Foot\Model\PostRepository;
use Foot\Model\CommentRepository;

session_start();

if (!$_SESSION['user']) {
  header('location:index.php?action=Login');
}
Class CommentController 
{

    public function addComment()
    {
      
        if(isset($_POST['text'])){
    
        
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



 public function MoveComments()
 {

    $id= $_GET["id"];
    $commentRepo=new CommentRepository();
    $comment= $commentRepo->getCommentBYId($_GET['id'])  ;
    if($comment->getUserId()=== $_SESSION['user']->getId()){

        $comment= $commentRepo->DeleteComments($id);
        header('location:index.php?action=DisplayOnePost&id='.$);
        exit();
    }
    else {

        echo "mais tu joues a quoi";
    }
   
 }
}

