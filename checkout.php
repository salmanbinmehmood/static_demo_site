<?php
$title = 'Home';
include 'include/header.php';
?>

<!-- hero section   -->
<section class="banner --inner">
    <div class="bannerCircle"></div>
    <div class="banner__img">
        <img src='assets/images/heroinner4.webp' alt='Hero Inner' class='img__cover'>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="bannerContent">
                    <h1>Check Out</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="InnerbannerBooks">
                    <img src='assets/images/innerbook.webp' alt='' class='img__contain'>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero section   -->

<!-- checkout Section   -->
<section class="checkout">
    <div class="container">
        <h5>Billing Details</h5>
        <form action="" class="checkoutForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Name :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Last Name :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Company name (optional) :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Country :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Address :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Phone :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="City :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Email Address :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="ZIP Code :">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkOutFeild">
                        <input type="text" placeholder="Order notes (optional) :">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="order">
    <div class="container">
        <h5>Your Order</h5>
        <div class="orderList">
            <p>Lorem ipsum</p>
            <p>$17.50</p>
        </div>
        <div class="orderList">
            <p>Lorem ipsum</p>
            <p>$17.50</p>
        </div>
        <div class="orderList">
            <p>Lorem ipsum</p>
            <p>$17.50</p>
        </div>
        <div class="orderList">
            <p>Lorem ipsum</p>
            <p>$17.50</p>
        </div>
        <div class="orderList">
            <p>Subtotal</p>
            <form action="" class="ssub">
                <div class="radioFeild">
                    <input type="radio" name="pay" id="bank">
                    <label for="bank">Direct bank transfer</label>
                </div>
                <div class="radioFeild">
                    <input type="radio" name="pay" id="check">
                    <label for="check">Check payments</label>
                </div>
                <div class="radioFeild">
                    <input type="radio" name="pay" id="cash">
                    <label for="cash">Cash on delivery</label>
                </div>
            </form>
        </div>
        <div class="orderBtn">
            <button type="submit" class="themeBtn gradient dark">Submit Now</button>
        </div>
    </div>
</section>
<!-- checkout Section   -->

<?php include 'include/footer.php' ?>