<?php
// front/pluton/mvc/Models/Article.php

class Article {
    private $id;
    private $title;
    private $description;
    private $created_at;
    private $updated_at	;
    private $image;
    private $content;
    private $author_id;//foreign key



    function __construct( $titre, $description, $author_id, $created_at, $updated_at = null, $image = null, $content){
        $this->title=$title;
        $this->description=$description;
        $this->author_id=$author_id;
        $this->created_at=$created_at;
        $this->updated_at=$updated_at;
        $this->image=$image;
        $this->content=$content;    
    }
     // Getters and setters for title
     public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    
    // Getters and setters for description
    public function getDescription() {
        return $this->description;
    }
        
    public function setDescription($description) {
        $this->description = $description;
    }

    // Getters and setters for created_at
    public function getCreated_at() {
        return $this->created_at;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    // Getters and setters for updated_at
    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    // Getters and setters for image
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    // Getters and setters for content
    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    // Getters and setters for author_id
    public function getAuthorId() {
        return $this->author_id;
    }

    public function setAuthorId($author_id) {
        $this->author_id = $author_id;
    }

}





?>