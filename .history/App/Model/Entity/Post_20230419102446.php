<?

class Post{
    private $id;
    private $title;
    private $content;
    private $image;
    private $createdAt;

    public function getId():int{

        return $this->id;
    }
    
}