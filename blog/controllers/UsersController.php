<?php

class UsersController extends BaseController
{
    public function register()
    {
		// your user registration functionality will come here ...
        if ($this->isPost){
            $username = $_POST['username'];
            if (strlen($username) < 2 || strlen($username) > 50){
                $this->setValidationError("username","Invalid Username!");
            }
            $password = $_POST['password'];
            if (strlen($password) < 2 || strlen($password) > 50){
                $this->setValidationError("password","Invalid Password!");
            }
            $full_name = $_POST['full_name'];
            if (strlen($full_name) > 200){
                $this->setValidationError("full_name","Invalid full name!");
            }
            if ($this->formValid()){
                $userId = $this->model->register($username,$password,$full_name);
                if ($userId){
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $this->addInfoMessage("Registration successful!");
                    $this->redirect("posts");
                }
                else {
                    $this->addErrorMessage("ERROR: User registration failed!");
                }
            }
        } // END IF isPOST


    }

    public function login()
    {
		// TODO: your user login functionality will come here ...
        if ($this->isPost){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loggedUserId = $this->model->login($username,$password);
            if ($loggedUserId){
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $loggedUserId;
                $this->addInfoMessage('Log In successful!');
                return $this->redirect("posts");
            }
            else {
                $this->addErrorMessage("ERROR: Log In failed!");
            }
        }
    }

    public function logout()
    {
		// TODO: your user logout functionality will come here ...
        session_destroy();
        $this->addInfoMessage("Log Out successful!");
        $this->redirect("");
    }
}
