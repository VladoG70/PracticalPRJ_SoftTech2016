<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="<?=APP_ROOT?>/content/reset-styles.css" /> -->
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/form-style.css" />
    <!-- TAB's ICON -->
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<div class="wrapper">
<header class="headbar">
    <!-- site's LOGO -->
    <a href="<?=APP_ROOT?>"><img src="<?=APP_ROOT?>/content/images/site-logo.png"></a>  &nbsp
    <a class="single-menu-element-link" href="<?=APP_ROOT?>/">Home</a>  &nbsp  &nbsp
    <?php if ($this->isLoggedIn) : ?>
        <!-- Displayes AFTER Login ONLY !!!!! -->
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/posts">Posts</a>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/posts/create">Create Post</a>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/users">Users</a>
        <!-- END check for isLogin: Displayes AFTER Login ONLY !!!!! -->
    <?php else: ?>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/users/login">Log In</a>  &nbsp  &nbsp
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/users/register">Register</a>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
        <div id="logged-in-info">
            <span>Logged In as <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
            <form method="post" action="<?=APP_ROOT?>/users/logout">
                <input type="submit" value="Log Out"/>
            </form>
        </div>
    <?php endif; ?>
</header>

<?php require_once('show-notify-messages.php'); ?>
