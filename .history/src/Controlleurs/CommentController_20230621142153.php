<?Php

namespace Foot\Controlleurs;;


Class CommentController 
{

    public function CreateComment()
    {
      
        if(isset($_POST['content'])){
    
            $id= $_GET['id'];
        
            $comment= $_POST['content'];
            
            $user_id = $_SESSION['user']['id'];
            $id_post= $_GET['id'];
          
            createComment($id_post, $user_id,$comment,$created_at);
            header('location:index.php?action=displayonepost&id='.$id_post);
            exit();
            
        
            
          
        
        
        }

    }
}

