<div class="products-slider" id="slider">
    <div class="slider-container">
        <div is="product-card" v-for="slide in slides" v-bind:title="slide.title" v-bind:price="slide.price" v-bind:url="slide.url"></div>
    </div>
</div>

<script>
    jQuery(document).ready(function () {

        $('.slider-container').slick({
            dots: true,
            infinite: true,
            arrows: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            swipeToSlide: true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });


    })
</script>