<?Php

namespace Foot\Controlleurs;;
use Foot\Model\PostRepository;


Class CommentController 
{

    public function addComment()
    {
      
        if(isset($_POST['content'])){
    
            $id= $_GET['id'];
        
            $text= $_POST['content'];
            
            $user_id = $_SESSION['user']->getId();
            $id_post= $_GET['id'];
          
            $postRepo= new PostRepository();
            
            createComment($id_post, $user_id, $text);
            header('location:index.php?action=displayonepost&id='.$id_post);
            exit();
            
        
            
          
        
        
        }

    }
}

