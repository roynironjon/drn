<?php
    include_once 'main_header.php';
?>
<section class="winter-header-section" style="padding-bottom:0px;">
    <div class="container">
        <div class="header">
            <a href="index.php"><i class="fa-solid fa-house"></i> home <i class="fa-solid fa-angle-right"></i></a>
            <p>My account</p>
        </div>
        <div class="header-contnet">
            <h2>My account</h2>
        </div>
    </div>
</section>
    <section class="account-section">
        <div class="container">
            <div class="main-col">
                <div class="flex-col">
                    <h2>Login</h2>
                    <form action="#">
                        <div class="name">
                            <label for="name">Username or email address</label>
                            <input type="text" name="username">
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="check_box">
                            <input type="checkbox" require>
                            <p>Remember me</p>
                        </div>
                        <div class="login-btn">
                            <a href="#">Log in</a>
                        </div>
                        <div class="lost-password">
                            <a href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
                <div class="flex-col">
                    <h2>Register</h2>
                    <form action="#">
                        <div class="name">
                            <label for="name">Username</label>
                            <input type="text" name="username">
                        </div>
                        <div class="email" style="padding-top:20px;" >
                            <label for="email">Email address</label>
                            <input type="email" name="username">
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="password-2">
                            <p style="font-size:16px; font-weight:500; color:gray;">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                        </div>
                        <div class="login-btn">
                            <a href="#">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!--arrial section end-->
<?php
    include_once 'main_footer.php';
?>