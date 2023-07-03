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
                    <h2>السيارات المفضلة</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>السيارات المفضلة</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Dashboard Area -->
<div class="dashboard-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="dashboard-profile">
                    <div class="profile-box">
                        <div class="profile-icon">
                            <i class='bx bxs-user'></i>
                        </div>
                    </div>

                    <div class="profile-info">
                        <ul class="info-list">
                            <li>
                                <a href="add-ads.php">إضافة إعلان جديد</a>
                            </li>
                             <li>
                                <a href="my-ads.php" >إعلاناتي</a>
                            </li>
                            <li>
                                <a href="favorites.php">السيارات المفضلة</a>
                            </li>
                            <li>
                                <a href="account-details.php" class="active">بيانات الحساب</a>
                            </li>
                            <li>
                                <a href="login.php">الخروج</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="dashboard-title">
                    <h3>بيانات الحساب</h3>
                </div>

                <div class="dashboard-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>تغير صورة الحساب</label>
                                    <input type="file" class="form-control-file">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label> اسم البائع / اسم المعرض</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>البريد الإلكتروني</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>رقم الهاتف</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>رقم الواتس اب</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>نوع البائع</label>
                                    <select>
                                        <option>نوع البائع</option>
                                        <option>معرض</option>
                                        <option>بائع شخصي</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>الوصف</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="default-btn">
                            حفظ البيانات
                            <span></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Dashboard Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>