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
    
    public function setTitle($title){

        $this->title = $title;

        return $this;
    }

    public function getTitle():string{
        
        return $this->title;
    }

    public function setContent($content){

        $this->content = $content;

        return $this;
    }

    public function getContent():string{

        re

    }
}
