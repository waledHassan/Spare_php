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
                    <h2>Add Ads</h2>

                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Add Ads</span></li>
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
                                <a href="#add-ads" class="active">Add Ads</a>
                            </li>
                            <li>
                                <a href="#ad-specifications">Ad specification</a>
                            </li>
                            <li>
                                <a href="#payment">Payment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="dashboard-form">
                    <form>
                        <div class="dashboard-title" id="add-ads">
                            <h3>Add Ads</h3>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Ad name</label>
                                        <input type="text" class="form-control" name='adName'>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Ad description</label>
                                        <textarea name="addescription" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>phone number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>WhatsApp number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Advertising section</label>
                                        <select>
                                            <option>Select the Ad section</option>
                                            <option>Gulf</option>
                                            <option>Incoming</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>classification</label>
                                        <select>
                                            <option>Select classification</option>
                                            <option>agency</option>
                                            <option>Used</option>
                                            <option>scrap</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Product images (you can add more than one image)</label>
                                        <input type="file" class="form-control-file" multiple>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="package-box">
                                        <p>Choose your package from the following packages:</p>

                                        <div class="package-method">
                                            <p>
                                                <input type="radio" id="package1" name="radio-group" checked>
                                                <label for="package1">Advanced package</label>
                                                <span>The package features your ad in the first twenty cars</span>
                                            </p>
                                            <p>
                                                <input type="radio" id="package2" name="radio-group">
                                                <label for="package2">Premium package</label>
                                                 <span>The package features your ad in the first five cars</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <p>Ad Duration (The ad price is determined according to its duration)</p>
                                    <div class="form-group">
                                        <select>
                                            <option>1-3 day</option>
                                            <option>7 days</option>
                                            <option>30 days</option>
                                            <option>Year </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="calculator-payment">
                                    <p>The price of the specified ad period</p>
                                    <h3>$645</h3>
                                    <p>Specified advertising period: 30 days</p>
                                </div>
                            </div>
                        </div>

                        <hr class="hr">

                        <div class="dashboard-title" id="ad-specifications">
                            <h3>ad specification </h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Type of car</label>
                                        <input type="text" placeholder="Mecedes benz E 400" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Model *</label>
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
                                        <label>Status *</label>
                                        <select>
                                            <option>Gulf</option>
                                            <option>incoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>location of The car *</label>
                                        <select>
                                            <option>Kuwait</option>
                                            <option>UAE</option>
                                            <option>Saudi Arabia</option>
                                            <option>Bahrain</option>
                                            <option>Qatar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Industry history *</label>
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
                                        <label>Steering wheel position *</label>
                                        <select>
                                            <option>Right</option>
                                            <option>Left</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Transporter *</label>
                                        <select>
                                            <option>Kir normal</option>
                                            <option>Automatic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>fuel type *</label>
                                        <select>
                                            <option>petrol</option>
                                            <option>Hybrid electricity</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Seller type *</label>
                                        <select>
                                            <option>Exhibition</option>
                                            <option>Personal Seller</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Car odometer *</label>
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
                                        <label>cylinders *</label>
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
                                        <label>Color *</label>
                                        <select>
                                            <option>white</option>
                                            <option>balck</option>
                                            <option>green</option>
                                            <option>yelow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Car Size *</label>
                                        <select>
                                            <option>salon</option>
                                            <option>Forwell</option>
                                            <option>koob</option>
                                            <option>Sedan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Vin No</label>
                                        <input type="text" placeholder="123xxxxxxxxxxxxx" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Special specifications</label>
                                        <textarea name="message3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Escrow *</label>
                                        <select>
                                            <option>There is a warranty</option>
                                            <option>There is no warranty</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Warranty period (years) *</label>
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
                                        <label>Faults, scratches or accidents (if any) </label>
                                        <textarea name="message2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>car price (cash)</label>
                                        <input type="text" placeholder="$$$" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Funding account *</label>
                                        <select>
                                            <option>There is a down payment</option>
                                            <option>No down payment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Initial payment value</label>
                                        <input type="text" placeholder="$$$" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="dashboard-title" id="payment">
                            <h3>Pay the ad value</h3>
                            <div class="order-details">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="cart-totals">
                                            <h3>Payment summary</h3>
                                            <ul>
                                                <li><span>$599.00</span> Subtotal </li>
                                                <li><span>$30.00</span> Tax </li>
                                                <li><span>$599.00</span> Total </li>
                                                <li><span>$599.00</span> Total Payments </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="payment-box">
                                            <h3>payment method</h3>

                                            <div class="payment-method">
                                                <p>
                                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                                    <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="cash-on-delivery" name="radio-group">
                                                    <label for="cash-on-delivery">Payment via representative</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="check-payments" name="radio-group">
                                                    <label for="check-payments">Check payment</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="paypal" name="radio-group">
                                                    <label for="paypal">PayPal</label>
                                                </p>
                                            </div>
                                            <a href="#" class="default-btn">
                                                payment
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr">
                        <button href="#" type="submit" class="default-btn">
                            Request to add Ads
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