<?php $this->title = 'Login'; ?>

<h1 class="login-title"><?= htmlspecialchars($this->title) ?></h1>

<!-- Login form will come here ... -->
    <div class="user-login-block">
        <form method="post">
            <div><label class="title-form" for="username">Username:</label></div>
            <input id="username" type="text" placeholder="Enter Username" name="username" />
            <div><label class="title-form" for="password">Password:</label></div>
            <input id="password" type="password" placeholder="Enter Password" name="password" />
            <div><input class="form-submit" type="submit" value="Log In" />
            <a class="form-link" href="<?=APP_ROOT?>/users/register/"><br><br>
                [Go to Register]</a></div>
        </form>
    </div>