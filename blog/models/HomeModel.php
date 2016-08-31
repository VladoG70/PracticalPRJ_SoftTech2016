<?php

class HomeModel extends BaseModel
{
    // your database access functions for the home page will come here ...
    function getLastPosts (int $maxCount = 5) : array
    {
        /*$query = self::$db->query("SELECT posts.id, title, content, date, full_name FROM posts
JOIN users on posts.user_id = users.id
ORDER BY date DESC");*/

        // With WRAP-text ...
        $statement = self::$db->query(
            "SELECT posts.id, title, content, date, full_name ".
            "FROM posts JOIN users on posts.user_id = users.id ".
            "ORDER BY date DESC LIMIT ".$maxCount);
        return $statement ->fetch_all(MYSQLI_ASSOC);
    } // END function get

    public function getPostById (int $id)
    {
        $statement = self::$db->prepare(
            "SELECT posts.id, title, content, date, full_name ".
            "FROM posts LEFT JOIN users ON posts.user_id = users.id ".
            "WHERE posts.id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }


} // End class HomeModel

?>