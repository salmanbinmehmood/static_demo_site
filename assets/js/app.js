document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    const startCounter = (counter) => {
        const start = parseInt(counter.getAttribute("data-start")) || 0;
        const end = parseInt(counter.getAttribute("data-end")) || 100;
        const duration = parseInt(counter.getAttribute("data-duration")) || 2000;
        let startTime = null;
        const animation = (currentTime) => {
            if (!startTime) startTime = currentTime;
            const progress = Math.min((currentTime - startTime) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            counter.textContent = value;
            if (progress < 1) {
                requestAnimationFrame(animation)
            }
        };
        requestAnimationFrame(animation)
    };
    const observer = new IntersectionObserver((entries, observerRef) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observerRef.unobserve(entry.target)
            }
        })
    }, {
        threshold: 0.5
    });
    counters.forEach(counter => observer.observe(counter))
});
$('.blogsMainSlider').slick({
    dots: !1,
    arrows: !0,
    prevArrow: '<button class="slick-prev custom-prev"><i class="fi fi-rr-angle-small-left"></i></button>',
    nextArrow: '<button class="slick-next custom-next"><i class="fi fi-rr-angle-small-right"></i></button>',
    infinite: !0,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: !0,
            dots: !0
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});
$('.testimonialsSlider').slick({
    centerMode: !0,
    centerPadding: '0',
    slidesToShow: 3,
    arrows: !1,
    dots: !0,
    infinite: !0,
    speed: 600,
    autoplay: !0,
    autoplaySpeed: 7000,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: !0,
            dots: !0
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
})
document.querySelectorAll('.qttyBox').forEach(box => {
    const qty = box.querySelector('.qty');
    const plus = box.querySelector('.qty-btn.plus');
    const minus = box.querySelector('.qty-btn.minus');
    let number = parseInt(qty.textContent);
    plus.addEventListener('click', () => {
        number++;
        qty.textContent = number
    });
    minus.addEventListener('click', () => {
        if (number > 1) {
            number--;
            qty.textContent = number
        }
    })
});
$('.bookSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    dots: !1,
    fade: !0,
    asNavFor: '.InnerbookSlider'
});
$('.InnerbookSlider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.bookSlider',
    dots: !1,
    centerMode: !1,
    focusOnSelect: !0,
    arrows: !1,
})