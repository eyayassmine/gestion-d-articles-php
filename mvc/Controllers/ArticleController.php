<?php
// Include the necessary files and establish a database connection

require_once('../../../config.php');

Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{id}', 'ArticleController@show');
Route::post('/articles', 'ArticleController@create');

class ArticleController {
   //private $conn;
   public function listArticles()
   {
       $sql = "SELECT * FROM articles"; //declaration requête sql
       $db = config::connect();
       try {
           $liste = $db->query($sql);
           require_once '../Views/articles/list.php';
           return $liste;
       } catch (Exception $e) {
           die('Erreur:' . $e->getMessage());
       }

   }

   public function rechercheArticle($id, $title)  ///najem nzidha authorname njib maw aandi authorid leghadi nejbed articlename w hedheka authorname
   {
       $sql = "SELECT * FROM articles where id like '" . $id . "' or title like '" . $title . "'";
       $db = config::connect();

       try {

           $liste = $db->query($sql);
           return $liste;
       } catch (Exception $e) {
           die('Erreur:' . $e->getMessage());
       }
   }

   public function createArticle($article)
        {
            
            
            // Hash the password securely
            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO articles ( title, description, author_id, image, content) 
                VALUES (:title, :description, :author_id, :image, content)";
            $db = config::connect();
            try {
                $query = $db->prepare($sql);
                $query->execute([
    
                    'title' => $article->getTitle(),
                    'description' => $article->getDescription(),
                    'author_id' => $article->getAuthor_id(),
                    'image' => $article->getImage(),
                    'content' => $article->getContent()
    
                ]);
                //	header('Location: afficherarticle.php');
                $message = " Nouvel article ajouté !";
                echo "<script type='text/javascript'>alert('$message');</script>";	
                }
            catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }

        }
        
    public function modifierArticle($article, $id)
    {
        try {
            $db = config::connect();

            //$nom, $prenom, $role, $email, $tel, $password
            $sql = "UPDATE articles SET title= :title, description= :description, author_id= :author_id, image= :image, content= :content WHERE id= :id";
            $db = config::connect();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->bindValue(':title', $article->getTitle());
            $req->bindValue(':description', $article->getDescription());
            $req->bindValue(':content', $article->getContent());
            $req->execute();
            //	echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function supprimerArticle($id)
	{
		$sql = "DELETE FROM articles WHERE id=:id";
		$db = config::connect();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function recupererArticle($id)
	{
		$sql = "SELECT * from articles where id=$id";
		$db = config::connect();
		try {
			$query = $db->prepare($sql);
			$query->execute();

            require_once '../Views/articles/show.php';
			$user = $query->fetch();
            
			return $article;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

}

?>
