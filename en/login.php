<?php 
    include('assets/layouts/head.php');
    include('assets/layouts/header.php');
?>
<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Login</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Login</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <p>welcome back! Please enter your username and password to register.</p>

            <form method='POST' action='do_login.php'>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            User Account
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Exhibition account
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>account First name</label>
                    <input type="text" class="form-control" id='accountname' name='name'>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id='password' name='password'>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkme">
                            <label class="form-check-label" for="checkme">Remember me</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                        <a href="forgot.php" class="lost-your-password">Forgot your password?</a>
                    </div>
                </div>

                <button type="submit" class="default-btn loginbtn">
                    Login
                    <span class='result'></span>
                </button>
            </form>
        </div>
    </div>
</section>
<!-- End Login Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>