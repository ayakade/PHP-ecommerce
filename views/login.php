<div class="login form">
    <h2>Login</h2>
    <form id="login" method="post" action="index.php">
        <input type="hidden" name="controller" value="user" />
		<input type="hidden" name="action" value="doLogin" />

        <div class="fieldgroup required">
            <label>Email address</label>
            <input type="text" name="strEmail" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Password</label>
            <input type="password" name="strPassword" value="" />
        </div><!-- .fieldgroup -->

        <div class="btn"><input class="cta-secondary" type="submit" value="Login"></div>
    </form>

    <p>Need an account? <strong><a href="index.php?controller=public&action=signup">Sign up now</a></strong></p>

</div><!-- .login / login.php -->

