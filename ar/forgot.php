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
                    <h2>نسيت كلمة المرور؟</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>نسيت كلمة المرور؟</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Forgot Password Area -->
<section class="reset-password-area ptb-100">
    <div class="container">
        <div class="reset-password-form">
            <h2>إعادة تعيين كلمة المرور</h2>
            <form>
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="text" class="form-control">
                </div>

                <button type="submit" class="default-btn">
                   إرسال
                    <span></span>
                </button>
            </form>
        </div>
    </div>
</section>
<!-- End Forgot Password Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>