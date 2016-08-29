<?php $this->title = 'Register New User'; ?>

    <h1 class="register-title"><?= htmlspecialchars($this->title) ?></h1>

    <!-- register form will come here ... -->
    <div class="user-login-block">
        <form method="post">
            <div><label class="title-form" for="username">Username:</label></div>
            <input id="username" type="text" placeholder="Enter Username" name="username" required />
            <div><label class="title-form" for="password">Password:</label></div>
            <input id="password" placeholder="Enter Password" type="password" name="password" required />
            <div><label class="title-form" for="full_name">Full name:</label></div>
            <input id="full_name" placeholder="Enter Full Name" type="text" name="full_name" />
            <div><input class="form-submit" type="submit" value="Register" />
                    <a class="form-link" href="<?=APP_ROOT?>/users/login/"><br><br>
                        [Go to Login]</a></div>
        </form>
    </div>
