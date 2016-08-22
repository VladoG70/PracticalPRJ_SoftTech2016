<?php

class PostsModel extends BaseModel
{
    public function getAll() : array
    {
        // TODO: Get all posts from DB ...
        $statement = self::$db->query("SELECT * FROM posts ORDER BY date DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById (int $id)
    {
        // TODO: Get particular post from DB by given ID
    }

    public function create (string $title, string $content, int $user_id) : bool
    {
        // TODO: Create post and put it in DB
        $statement = self::$db->prepare("INSERT INTO posts(title,content,user_id) VALUES (?, ?, ?)");
        $statement->bind_param("ssi",$title,$content,$user_id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function edit (string $id, string $title, string $content, string $date, int $user_id) : bool
    {
        // TODO: Edit a post by given ID
    }

    public function delete (int $id) : bool
    {
        // TODO: Delete a post by given ID
    }
} // End CLASS PostModel