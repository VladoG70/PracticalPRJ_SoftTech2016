<?php

class HomeController extends BaseController
{
    function index() {
        // Load posts to be displayed here ...
        $lastPosts = $this -> model -> getLastPosts(5);
        $this -> posts = array_slice($lastPosts,0,5);
        $this -> sidebarPosts = $lastPosts;
    }
	
	function view(int $id) {
        // Load a post to be displayed here ...
        //$this->post = $this->model->getPostById($id);
        $post = $this->model->getPostById($id);
        if (!$post){
            $this->addErrorMessage("ERROR: Invalid post ID!");
            $this->redirect('');
        }
        $this->post = $post;
    }
}

?>