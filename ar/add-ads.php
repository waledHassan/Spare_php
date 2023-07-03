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
                    <h2>إضافة إعلان</h2>

                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>إضافة إعلان</span></li>
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
                            <img src="assets/images/add.jpg" alt="add" />
                        </div>
                    </div>
                    <div class="profile-info">
                        <ul class="info-list">
                            <li>
                                <a href="#add-ads" class="active">إضافة إعلان</a>
                            </li>
                            <li>
                                <a href="#ad-specifications">مواصفات الإعلان</a>
                            </li>
                            <li>
                                <a href="#payment">الدفع</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="dashboard-form">
                    <form>
                        <div class="dashboard-title" id="add-ads">
                            <h3>إضافة إعلان </h3>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>اسم الإعلان</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>وصف الإعلان</label>
                                        <textarea name="message" class="form-control"></textarea>
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
                                        <label>رقم الواتس اب ( WhatsApp )</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>قسم الإعلان</label>
                                        <select>
                                            <option>حدد قسم الأعلان</option>
                                            <option>خليجي</option>
                                            <option>وارد</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>تصنيف قسم الإعلان</label>
                                        <select>
                                            <option>حدد تصنيف قسم الأعلان</option>
                                            <option>الوكالة</option>
                                            <option>مستعمل</option>
                                            <option>سكراب</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>صور المنتج (يمكنك إضافة أكتر من صورة)</label>
                                        <input type="file" class="form-control-file" multiple>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="package-box">
                                        <p>اختر باقتك من الباقات التالية:</p>

                                        <div class="package-method">
                                            <p>
                                                <input type="radio" id="package1" name="radio-group" checked>
                                                <label for="package1">باقة متقدمة</label>
                                                <span>تتميز الباقة بوجود إعلانك في أول عشرين سيارة</span>
                                            </p>
                                            <p>
                                                <input type="radio" id="package2" name="radio-group">
                                                <label for="package2">باقة متميزة</label>
                                                 <span>تتميز الباقة بوجود إعلانك في أول خمسة سيارة</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <p>مدة الإعلان (يحدد سعر الإعلان حسب مدته)</p>
                                    <div class="form-group">
                                        <select>
                                            <option>1-3 يوم</option>
                                            <option>7 أيام</option>
                                            <option>30 يوم</option>
                                            <option>سنة </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="calculator-payment">
                                    <p>سعر مدة الإعلان المحددة</p>
                                    <h3>$645</h3>
                                    <p>مدة الإعلان المحددة : 30 يوم</p>
                                </div>
                            </div>
                        </div>

                        <hr class="hr">

                        <div class="dashboard-title" id="ad-specifications">
                            <h3>مواصفات إعلان </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>نوع السيارة</label>
                                        <input type="text" placeholder="Mecedes benz E 400" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>الموديل *</label>
                                        <select>
                                            <option>E-400</option>
                                            <option>E-400</option>
                                            <option>E-400</option>
                                            <option>E-400</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>الحالة *</label>
                                        <select>
                                            <option>خليجي</option>
                                            <option>وارد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>مكان تواجد السيارة *</label>
                                        <select>
                                            <option>الكويت</option>
                                            <option>الإمارات</option>
                                            <option>السعودية</option>
                                            <option>البحرين</option>
                                            <option>قطر</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>تاريخ الصناعة *</label>
                                        <select>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>مكان مقود السيارة *</label>
                                        <select>
                                            <option>يمين</option>
                                            <option>يسار</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>الناقل *</label>
                                        <select>
                                            <option>قير عادي</option>
                                            <option>أوتوماتيك</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>نوع الوقود *</label>
                                        <select>
                                            <option>بنزين</option>
                                            <option>كهرباء هايبرد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>نوع البائع *</label>
                                        <select>
                                            <option>معرض</option>
                                            <option>بائع شخصي</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>ممشي عداد السيارة *</label>
                                        <select>
                                            <option>2000km</option>
                                            <option>1800km</option>
                                            <option>1600km</option>
                                            <option>1500km</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>السليندرات*</label>
                                        <select>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>لون السيارة *</label>
                                        <select>
                                            <option>أبيض</option>
                                            <option>أسود</option>
                                            <option>أخضر</option>
                                            <option>إصفر</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>حجم السيارة *</label>
                                        <select>
                                            <option>صالون</option>
                                            <option>فورويل</option>
                                            <option>كووب</option>
                                            <option>سيدان</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>رقم الشاصي</label>
                                        <input type="text" placeholder="123xxxxxxxxxxxxx" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>المواصفات الخاصة</label>
                                        <textarea name="message3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>الضمان *</label>
                                        <select>
                                            <option>يوجد ضمان</option>
                                            <option>لا يوجد ضمان</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>مدة الضمان (سنوات) *</label>
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>الأعطال أوخدوش أو حوادث (إن وجدت) </label>
                                        <textarea name="message2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>سعر السيارة (كاش)</label>
                                        <input type="text" placeholder="$$$" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>حساب التمويل *</label>
                                        <select>
                                            <option>يوجد دفعة أولي</option>
                                            <option>لا يوجد دفعة أولي</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>قيمة الدفعة الأولي</label>
                                        <input type="text" placeholder="$$$" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="dashboard-title" id="payment">
                            <h3>دفع قيمة الإعلان</h3>
                            <div class="order-details">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="cart-totals">
                                            <h3>ملخص الدفع</h3>
                                            <ul>
                                                <li><span>$599.00</span> المجموع الفرعي </li>
                                                <li><span>$30.00</span> الضريبة </li>
                                                <li><span>$599.00</span> المجموع </li>
                                                <li><span>$599.00</span> مجموع المدفوعات </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="payment-box">
                                            <h3>طريقة الدفع او السداد</h3>

                                            <div class="payment-method">
                                                <p>
                                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                                    <label for="direct-bank-transfer">تحويل مصرفي مباشر</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="cash-on-delivery" name="radio-group">
                                                    <label for="cash-on-delivery">الدفع عبر مندوب</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="check-payments" name="radio-group">
                                                    <label for="check-payments">دفع الشيكات</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="paypal" name="radio-group">
                                                    <label for="paypal">PayPal</label>
                                                </p>
                                            </div>
                                            <a href="#" class="default-btn">
                                                الدفع
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr">
                        <button href="#" type="submit" class="default-btn">
                            طلب إضافة إعلان
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