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
                    <h2>عقارات</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><span>عقارات</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Car Shop Area -->
<div class="car-shop-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <aside class="widget-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">البحث:</span>
                                <input type="search" class="search-field" placeholder="البحث...">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>

                    <div class="widget widget_filter_results">
                        <h3 class="widget-title">نتائج الفلتر</h3>

                        <form>
                            <div class="condition">
                                <h3>منشأ السيارة</h3>

                                <div class="condition">
                                    <ul class="condition-list">
                                        <li><a href="categories-list.php">الكل</a></li>
                                        <li><a href="categories-list.php">عقار للبيع</a></li>
                                        <li class="active"><a href="categories-list.php">عقار للشراء</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>نوع العقار</label>

                                <select>
                                    <option>الكل</option>
                                    <option>سكني</option>
                                    <option>تجاري</option>
                                    <option>قطعة أرض</option>
                                    <option>وحدات متعدده</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>نوع الوحدة </label>

                                <select>
                                    <option>الكل</option>
                                    <option>شقة</option>
                                    <option>فيلا</option>
                                    <option>تاونهاوس</option>
                                    <option>بنتهاوس</option>
                                    <option>مبنى سكني</option>
                                    <option>طابق سكني</option>
                                </select>
                            </div>

                            <div class="price-range-content">
                                <h4>السعر</h4>

                                <div class="price-range-bar" id="range-slider"></div>
                                <div class="price-range-filter">
                                    <div class="price-range-filter-item">
                                        <input type="text" id="price-amount" readonly>
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>

                </aside>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-1.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$25,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-2.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$49,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-3.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$55,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-4.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$75,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-1.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$25,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-2.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$49,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-3.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$55,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-4.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$75,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php"><img src="assets/images/car-ranking/real-3.jpg" alt="image"></a>
                                <div class="icon">
                                    <a href="favorites.php"><i class="flaticon-love"></i></a>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$55,000</div>
                                <h3>
                                    <a href="categories-details.php">عقارات دبي</a>
                                </h3>
                                <p><b>الفئة</b>: عقارات بيع</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        المساحة
                                        <span>: 125 متر مربع </span>
                                    </li>
                                    <li>
                                        النوع
                                        <span>: شقة </span>
                                    </li>
                                    <li>
                                        البائع
                                        <span>: صاحب</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class='flaticon-left-arrow'></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers">
                                <i class='flaticon-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Car Shop Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>