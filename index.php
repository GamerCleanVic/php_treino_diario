<?php
     class Post{
          private int $id;
          private int $likes;
          private array $comments = [];
          private string $author;

          public function setAuthor($nome){
               $this->author = ucfirst($nome);
          }
          public function getAuthor(){
               return $this->author;
          }

          public function setLikes($liked){
               $this->likes = $liked;
          }
          public function getLikes(){
               return $this->likes;
          }

          public function setId($fnId){
               $this->id = $fnId;
          }
          public function getId(){
               return $this->id;
          }
     }

     $post1 = new Post();
     $post1->setAuthor('fulano');
     $post1->setId(1);
     $post1->setLikes(12);

     $post2 = new Post();
     $post2->setAuthor('Cicrano');
     $post2->setId(2);
     $post2->setLikes(7);

     echo "Id".$post1->getId()." - Author - ".$post1->getAuthor()." - Comments - ".$post1->getLikes()."<br />";
     echo "Id".$post2->getId()." - Author - ".$post2->getAuthor()." - Comments - ".$post2->getLikes()."<br />";
