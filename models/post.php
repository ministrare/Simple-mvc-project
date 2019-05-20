<?php

require_once "models.php";

class Post extends Models {

    protected $title;
    protected $text;
    protected $table = 'posts';

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    public function validate() {
        return true;
    }

    public function save() {
        return false;
    }
}