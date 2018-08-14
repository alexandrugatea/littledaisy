<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- Homepage -->
<!--===========================-->

<main  id="homepage">
    <?php include ("templates/hero.php"); ?>    
    <?php include ("templates/categories.php"); ?>    
    <?php include ("templates/products-slider.php"); ?>
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
    el: '#homepage',
    data: {
        hero: {
            title: 'Little Daisy Flower',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et feugiat leo. In suscipit lobortis sem non commodo. Aenean fringilla molestie dui, at egestas leo. Integer fringilla, metus in eleifend accumsan, metus tellus fringilla justo',
            label: 'Vezi Produse',
            link: 'pages/shop.php',
            image: 'assets/images/hero-home.jpg'
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
</script>


<?php include ("templates/footer.php"); ?>
