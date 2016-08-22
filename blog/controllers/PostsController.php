<?php

/**
 * Created by PhpStorm.
 * User: Vlado Genoff
 * Date: 22.8.2016 г.
 * Time: 00:35 ч.
 */
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
        // TODO: CREATE NEW POST
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
                if ($this->model->create($title,$content,$userId)){
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
        // TODO: EDIT POST by given ID
    }

    public function delete(int $di)
    {
        // TODO: DELETE post by given ID
    }

}