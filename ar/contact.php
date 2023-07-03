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
                    <h2>تواصل معنا</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>تواصل معنا</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Contact Info Area -->
<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <h3>رقم الهاتف</h3>
                    <p class="phone-dir"><a href="tel:+965514326677">+965 514-12-6677</a></p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='bx bxl-whatsapp'></i>
                    </div>
                    <h3>رقم الواتس اب</h3>
                    <p class="phone-dir"><a href="tel:+965514326677">+965 514-12-6677</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <h3>البريد الإلكتروني:</h3>
                    <p><a href="info@speer.com"></a> info@speer.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-form">
                    <div class="title">
                        <h3>لا تتردد في التواصل معنا </h3>
                    </div>

                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>الاسم</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="الرجاء ادخال الاسم">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="الرجاء ادخال البريد الإلكتروني">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>رقم الهاتف</label>
                                    <input type="text" name="phone_number" id="phone_number" required data-error="الرجاء ادخال رقم الهاتف" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>رسالتك</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required ></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    ارسال الرسالة
                                    <span></span>
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27814.422039668534!2d47.99937637067242!3d29.37606405632665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0xc3ebaef5af09b90e!2z2YXYr9mK2YbYqSDYp9mE2YPZiNmK2KrYjCDYp9mE2YPZiNmK2KrigI4!5e0!3m2!1sar!2seg!4v1665664561974!5m2!1sar!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>