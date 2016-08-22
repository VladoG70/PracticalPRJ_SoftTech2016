<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<!-- TODO: login form will come here ... -->
<form method="post">
    <div><label for="username">Username:</label></div>
    <input id="username" type="text" name="username" />
    <div><label for="password">Password:</label></div>
    <input id="password" type="password" name="password" />
    <div><input type="submit" value="Log In" />
    <a href="<?=APP_ROOT?>/users/register/"><br><br>
        [Go to Register]</a></div>
</form>
