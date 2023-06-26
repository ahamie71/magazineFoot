<?Php

namespace Foot\Controlleurs;


use Foot\Services\Tokenhandler;
use Foot\Model\CommentRepository;

session_start();

if (!$_SESSION['user']) {
    header('location:index.php?action=Login');
}
class CommentController
{
    public function addComment()
    {
        if (isset($_POST['text'])) {
            $text = $_POST['text'];
            $user_id = $_SESSION['user']->getId();
            $id_post = $_GET['id'];
            $CommentRepo = new CommentRepository();
            $comment = $CommentRepo->createComment($id_post, $user_id, $text);
            header('location:index.php?action=DisplayOnePost&id=' . $id_post);
        } else {
            require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php');
        }
    }

    public function getComment()
    {
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getComments($_GET['id']);
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php');
    }

    public function RemoveComments()
    {
        $id = $_GET["id"];
        // le terner
        $token = isset($_GET['token']) ? $_GET['token'] : null;
        $commentRepo = new CommentRepository();
        $comment = $commentRepo->getCommentBYId($_GET['id']);
        $tokenHandler = new TokenHandler();
        if (
            $comment->getUserId() === $_SESSION['user']->getId() && $tokenHandler->verifyToken($token)
            && $token
        ) {
            $commentRepo->DeleteComments($id);
            header('location:index.php?action=DisplayOnePost&id=' . $comment->getIdPost());
            exit();
        } else {
            echo "mais tu joues a quoi";
        }
    }
}