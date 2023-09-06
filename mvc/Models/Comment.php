<?php

// front/pluton/mvc/Models/Comment.php

class Comment {
    private $id;
    private $content;
    private $created_at;
    private $updated_at;
    
    // Define the foreign keys
    private $article_id;
    private $user_id;

    // Constructor
    public function __construct($id, $content, $created_at, $updated_at, $article_id, $user_id) {
        $this->id = $id;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->article_id = $article_id;
        $this->user_id = $user_id;
    }

    // Getters and setters for id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getters and setters for content
    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    // Getters and setters for created_at
    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    // Getters and setters for updated_at
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    // Getters and setters for article_id
    public function getArticleId() {
        return $this->article_id;
    }

    public function setArticleId($article_id) {
        $this->article_id = $article_id;
    }

    // Getters and setters for user_id
    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }
}


?>