<?php

class PostsController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }

    public function index()
    {
        $this->posts = $this->model->getAll();
    }

    public function create()
    {
        // CREATE NEW POST
        if ($this->isPost){
            $title = $_POST['post_title'];
            if (strlen($title) < 1){
                $this->setValidationError("post_title","Title cannot to be empty!");
            }
            $content = $_POST['post_content'];
            if (strlen($content) < 1){
                $this->setValidationError("post_content","Content cannot to be empty!");
            }
            if ($this->formValid()){
                $userId = $_SESSION['user_id'];
                //var_dump($userId);
                //die("PostController: BEFORE func CREATE");
                if ($this->model->create($title, $content, $userId)){
                    $this->addInfoMessage("Post created!");
                    $this->redirect("posts");
                } else {
                    $this->addErrorMessage("EROR: Cannot create post!");
                }
            }
        }
    }

    public function edit(int $id)
    {
        // EDIT POST by given ID
        if ($this->isPost){
            $title = $_POST['post_title'];
            if (strlen($title) < 1){
                $this->setValidationError("post_title","Title cannot be empty!");
            }
            $content = $_POST['post_content'];
            if (strlen($content) < 1){
                $this->setValidationError("post_content","Content cannot be empty!");
            }
            $date = $_POST['post_date'];
            $dateRegex = '/^\d{2,4}-\d{1,2}-\d{1,2}( \d{1,2}:\d{1,2}(:\d{1,2})?)?$/';
            if (!preg_match($dateRegex,$date)){
                $this->setValidationError("post_date","Invalid date!");
            }
            $user_id = $_POST['user_id'];
            if ($user_id <= 0 || $user_id >= 1000000){
                $this->setValidationError("user_id","Invalid author user ID!");
            }

            if ($this->formValid()){
                if ($this->model->edit($id,$title,$content,$date,$user_id)){
                    $this->addInfoMessage("Post edited!");
                } else {
                    $this->addErrorMessage("ERROR: Cannot edit post!");
                }
                $this->redirect('posts');
            }
        }
        // ????????????????????????????
        $post = $this->model->getById($id);
        if (!$post){
            $this->addErrorMessage("ERROR: Post does not exist!");
            $this->redirect('posts');
        }
        $this->post = $post;
        // Get Post's Author Full Name
        $userAuth = $this->model->getUserById($post['user_id']);
        $this->userAuth = $userAuth;
    }

    public function delete(int $id)
    {
        // If HTTP POST - DELETE post by given ID
        //var_dump($id);
        //die("PostController: $id");
        if ($this->isPost){
            if ($this->model->delete($id)){
                $this->addInfoMessage("Post deleted!");
            } else {
                $this->addErrorMessage("ERROR: Cannot delete the post!");
            }
            $this->redirect('posts');
        } else {
            // If HTTP GET
            // Show confirm delete FORM
            $post = $this->model->getById($id);
            if (!$post){
                $this->addErrorMessage("ERROR: Post does not exist!");
                $this->redirect('posts');
            }
            $this->post = $post;
        }
    }

}
?>