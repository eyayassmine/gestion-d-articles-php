<?php
// Include the necessary files and establish a database connection
require_once('../shared/config/database.php');
require_once('../Article.php');
require_once('../../../config.php');

class CommentController {


    public function addComment($articleId, $userId, $content) {
        
        
        
   public function createArticle($article)
   {
       
       
       // Hash the password securely
       //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

       $sql = "INSERT INTO articles ( title, description, author_id, image, content) 
           VALUES (:content, :content)";
       $db = config::connect();
       try {
        get article_id
           $query = $db->prepare($sql);
           $query->execute([
               'content' => $article->getContent()

           ]);
           //	header('Location: afficherarticle.php');
           $message = " Nouvel commentaire ajouté !";
           echo "<script type='text/javascript'>alert('$message');</script>";	
           }
       catch (Exception $e) {
           echo 'Erreur: ' . $e->getMessage();
       }

   }
        
        /// Implement code to add a comment to the article with ID $articleId by user with ID $userId
        // Example code:
        $comment = new Comment(null, $content, null, null, $articleId, $userId);
        $result = $comment->save($this->conn);
        if ($result) {
            echo "Comment added successfully.";
        } else {
            echo "Failed to add the comment.";
        }
    }

    public function deleteComment($commentId) {
        // Implement code to delete the comment with ID $commentId (only for administrators)
        // Example code:
        if ( user->role == 'administrator' /* Check if the user is an administrator */) {
            $result = Comment::deleteCommentById($this->conn, $commentId);
            if ($result) {
                echo "Comment deleted successfully.";
            } else {
                echo "Failed to delete the comment.";
            }
        } else {
            echo "You do not have permission to delete comments.";
        }
    }
}

?>
