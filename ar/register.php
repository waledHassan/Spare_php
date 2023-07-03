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
                    <h2>حساب جديد</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>حساب جديد</span></li>
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
            <h2>حساب جديد</h2>
            <p>قم بإنشاء حساب جديد اليوم لجني الفوائد</p>

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
                    <label>البريد الإلكتروني</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>تأكيد كلمة المرور</label>
                    <input type="text" class="form-control">
                </div>
                <p class="description">يجب أن تتكون كلمة المرور من ثمانية أحرف على الأظقل. لجعلها أقوى ، استخدم الأحرف الكبيرة والصغيرة والأرقام والرموز مثل ! "؟ $٪ ^ &)</p>
                <button type="submit" class="default-btn">
                    سجل الان
                    <span></span>
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