<?php
$title = 'Home';
include 'include/header.php';
?>
<!-- hero Inner section   -->
<section class="banner --inner">
    <div class="bannerCircle"></div>
    <div class="banner__img">
        <img src='assets/images/heroinner2.webp' alt='Hero Inner' class='img__cover'>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="bannerContent">
                    <h1>Book Details</h1>
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
<!-- hero Inner section   -->
<!-- Books Detail Section   -->
<section class="bookDetail">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="bookSlider">
                    <div class="bookItem">
                        <div class="bookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                    <div class="bookItem">
                        <div class="bookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                    <div class="bookItem">
                        <div class="bookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                    <div class="bookItem">
                        <div class="bookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                </div>
                <div class="InnerbookSlider">
                    <div class="innerbookItem">
                        <div class="innerbookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                    <div class="innerbookItem">
                        <div class="innerbookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                    <div class="innerbookItem">
                        <div class="innerbookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                    <div class="innerbookItem">
                        <div class="innerbookSlideImg">
                            <img src='assets/images/book1.webp' alt='' class='img__contain'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailContent">
                    <h2>There Is an I <span>in Win</span></h2>
                    <ul class="ratting">
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                    </ul>
                    <div class="priceDetail">
                        $3.99 <span>$4.00</span>
                    </div>
                    <p class="detailCont">Through powerful storytelling, personal insights, and faith-based reflection, author Joey Crum challenges the long-held belief that individual ambition must take a back seat to collective harmony.Drawing from his own life experiences ranging from childhood struggles and leadership lessons to moments of failure and personal transformation, Crum makes the case for embracing the misunderstood "I" in every pursuit.</p>
                    <p class="detailCont">Through powerful storytelling, personal insights, and faith-based reflection, author Joey Crum challenges the long-held belief that individual ambition must take a back seat to collective harmony.Drawing from his own life experiences ranging from childhood struggles and leadership lessons to moments of failure and personal transformation.</p>
                    <div class="qtyBox themeBtn gradient dark">
                        <span class="label">Quantity</span>
                        <div class="controls">
                            <button class="qty-btn minus">−</button>
                            <span class="qty">1</span>
                            <button class="qty-btn plus">+</button>
                        </div>
                    </div>
                    <div class="detailTags">
                        <div class="detailTag">
                            <span>Category :</span>
                            Lorem
                        </div>
                        <div class="detailTag">
                            <span>Tags :</span>
                            Lorem
                        </div>
                    </div>
                    <div class="checkOutBtn">
                        <a href="cart.php" class="themeBtn gradient dark">Check Out</a>
                    </div>
                </div>
            </div>
            <div class="reviewBox">
                <div class="reviewHead">
                    Add a Review
                </div>
                <form action="" class="reviewForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="formFeild">
                                <input type="text" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formFeild">
                                <input type="text" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="formFeild">
                                <textarea name="" id="" placeholder="Leave a comment...."></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="reviewBot">
                    <div class="reviewHead">Your rating</div>
                    <ul class="ratting">
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                        <li><i class="fi fi-ss-star"></i></li>
                    </ul>
                    <button class="themeBtn gradient dark">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Books Detail Section   -->
<?php include 'include/footer.php' ?>