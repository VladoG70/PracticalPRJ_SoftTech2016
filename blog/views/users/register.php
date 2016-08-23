<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<!-- TODO: register form will come here ... -->

<form method="post">
    <div><label for="username">Username:</label></div>
    <input id="username" type="text" name="username" required />
    <div><label for="password">Password:</label></div>
    <input id="password" type="password" name="password" required />
    <div><label for="full_name">Full name:</label></div>
    <input id="full_name" type="text" name="full_name" />
    <div><input type="submit" value="Register" />
        <a href="<?=APP_ROOT?>/users/login/"><br><br>
            [Go to Login]</a></div>
</form>
