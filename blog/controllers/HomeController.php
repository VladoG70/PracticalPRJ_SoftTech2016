<?php

class HomeController extends BaseController
{
    function index() {
        // TODO: Load posts to be displayed here ...
        $lastPosts = $this -> model -> getLastPosts(5);
        $this -> posts = array_slice($lastPosts,0,3);
        $this -> sidebarPosts = $lastPosts;
    }

    function viewDate(){

    }
	
	function view($id) {
        // TODO: Load a post to be displayed here ...
        $this->post = $this->model->getPostById($id);
    }
}
