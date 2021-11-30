<?php

namespace App;

use Database;

class Post
{
    public function getPosts()
    {
        $connection = (new Database())->getConnection();

        return $connection->query('SELECT * FROM post');
    }

    public function getPost(int $postId)
    {
        $connection = (new Database())->getConnection();

        $prep = $connection->prepare('SELECT * FROM post WHERE id = :postId');
        $prep->execute([':postId' => $postId]);
        
        return $prep->fetch();
    }
}