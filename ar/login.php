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
                    <h2>تسجيل دخول</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>تسجيل دخول</span></li>
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
            <h2>تسجيل دخول</h2>
            <p>مرحبًا بعودتك! من فضلك أدخل إسم المستخدم و كلمة المرور الخاصة بك للتسجيل.</p>

            <form>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            حساب مستخدم
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            حساب معرض
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>اسم الحساب</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="text" class="form-control">
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkme">
                            <label class="form-check-label" for="checkme">تذكرني</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                        <a href="forgot.php" class="lost-your-password">نسيت كلمة المرور؟</a>
                    </div>
                </div>

                <button type="submit" class="default-btn">
                    تسجيل دخول
                    <span></span>
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