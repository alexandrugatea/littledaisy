<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- about -->
<!--===========================-->

<main  id="product">
    <?php include ("templates/hero-small.php"); ?>
    <div class="product shop-container">
        <div class="product-images">
            <div class="product-carousel">
				<div>
					<img src="/assets/images/products/product11.jpg">
				</div>
				<div>
                    <img src="/assets/images/products/product12.jpg">
				</div>
				<div>
                    <img src="/assets/images/products/product13.jpg">
				</div>
				<div>
                    <img src="/assets/images/products/product14.jpg">
				</div>
			</div>
			<div class="product-carousel-thumbs">
				<div>
                    <img src="/assets/images/products/product11.jpg">
				</div>
				<div>
                    <img src="/assets/images/products/product12.jpg">
				</div>
				<div>
                    <img src="/assets/images/products/product13.jpg">
				</div>
				<div>
                    <img src="/assets/images/products/product14.jpg">
				</div>
			</div>
        </div>
        <div class="product-info">
            <h1 class="product-name">Buchet Lalele multicolore, 25 fire</h1>
            <div class="product-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
            </div> 
            <p class="product-price">195 RON</p> 
            <form class="add-to-basket">
                <div class="inputs">
                    <label>Alege cantitatea</label>
                    <span>
                        <span class="decrement">&dash;</span>
                        <input type="number" id="qty" name="qty" value="1"/>
                        <span class="increment">&plus;</span>
                    </span>
                </div>
                <span class="button">Adauga in cos</span>
            </form>
            <div class="share">
                <p>Recomanda prietenilor: <a href="#!">Distribuie pe facebook</a></p>
            </div>
        </div>
    </div>
    <div class="similar-products shop-container">
        <h2 class="section-title">Produse similare</h2>
        <?php include ("templates/products-slider.php"); ?>
    </div>
    <?php include ("templates/motto.php"); ?>
</main>

<script>
    Vue.component('product-card', {
        template: '\
        <div>\
            <div class="product-card">\
                <div class="product-card-image">\
                    <img :src="url">\
                    <a href="#!" class="invisible-link">Detalii</a>\
                </div>\
                <div class="product-card-content">\
                    <p class="product-title" :title=title><a href="/product.php">{{title}}</a></p>\
                    <p class="product-price">{{price}}</p>\
                    <a href="#!" class="button">Adauga in cos</a>\
                </div>\
            </div>\
        </div>\
        ',
        props: ['title', 'price', 'url']
    })

    new Vue({
    el: '#product',
    data: {
        hero: {
            title: 'Magazin',
            image: 'assets/images/hero-shop.jpg'
        },
        motto: {
            quote: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et feugiat leo. In suscipit lobortis sem non commodo. Aenean fringilla molestie dui, at egestas leo. Integer fringilla, metus in eleifend accumsan, metus tellus fringilla justo',
            author: 'Lorem ipsum dolor sit amet',
            image: 'assets/images/motto-home.jpg'
        },
        slides: [{
                    title: 'Buchet 25 trandafiri rosii',
                    price: '100',
                    url: 'assets/images/products/product5.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '200',
                    url: 'assets/images/products/product7.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '300',
                    url: 'assets/images/products/product6.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '200',
                    url: 'assets/images/products/product4.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '300',
                    url: 'assets/images/products/product12.jpg'
                },
                {
                    title: 'Buchet 5 trandafiri albi',
                    price: '200',
                    url: 'assets/images/products/product9.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri albastrii',
                    price: '195',
                    url: 'assets/images/products/product13.jpg'
                }
            ]
    }
    });


    // carosuel 
    $('.product-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: '.product-carousel-thumbs',
        swipe: false,
        });
    $('.product-carousel-thumbs').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        vertical: true,
        asNavFor: '.product-carousel',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        infinite: false,
        responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        vertical: false,
                    }
                }
            ]
    });


    var add = $(".increment");
    var substract = $(".decrement");
    var qty = $('#qty');


    add.on('click', function(){
        increment();
    });

     substract.on('click', function(){
        decrement();
    });

    function increment() {
         qty.val(new Number(qty.val()) + 1);
    }

    function decrement() {
        if (qty.val() == '1'){
            return false;
        } else {
            qty.val(new Number(qty.val()) - 1);
        }
    }

		

</script>
<?php include ("templates/footer.php"); ?>