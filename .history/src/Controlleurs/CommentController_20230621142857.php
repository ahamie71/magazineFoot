<?Php

namespace Foot\Controlleurs;;
use Foot\Model\PostRepository;

session_start();

Class CommentController 
{

    public function addComment()
    {
      
        if(isset($_POST['content'])){
    
        
            $text= $_POST['content'];
            $user_id = $_SESSION['user']->getId();
            $id_post= $_GET['id'];
            $postRepo= new PostRepository();
            $comment= $postRepo->createComment($id_post, $user_id, $text);
            
        
        }

    }
}
