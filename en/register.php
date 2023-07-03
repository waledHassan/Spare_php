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
                    <h2>New Account</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>New Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Register Area -->
<section class="register-area ptb-100">
    <div class="container">
        <div class="register-form">
            <h2>New Account</h2>
            <p>Create a new account today to reap the benefits</p>
            <form method="POST" action='do_register.php'>
                 <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            user account
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            exhibition account
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>First  name</label>
                    <input type="text" class="form-control" name='firstname' id='firstname'>
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name='lastname' id='lastname'>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name='email' id='email'>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" class="form-control" name='password1' id='password'>
                </div>
                <div class="form-group">
                    <label>confirm password</label>
                    <input type="password" class="form-control" name='password2' id='password2'>
                </div>
                <p class="description">Password must be at least eight characters long. To make it stronger, use uppercase and lowercase letters, numbers, and symbols like ! $%^&)</p>
                <button type="submit" id='btn-submit' class="default-btn">
                    Register now
                    <span span='error'></span>
                </button>
            </form>
        </div>
    </div>
</section>
<!-- End Register Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>

