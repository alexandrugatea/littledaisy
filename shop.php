<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- Shop -->
<!--===========================-->


<main id="shop">
    <?php include ("templates/hero-small.php"); ?>
    <div class="shop-content">
        <div class="shop-filters-container">
            <div class="shop-filters">
                <div class="categories-list">
                    <div class="list-type">Categorii</div>
                    <ul class="list">
                        <li class="list-item active">Toate</li>
                        <li class="list-item">Categoria 1</li>
                        <li class="list-item">Categoria 2</li>
                        <li class="list-item">Categoria 3</li>
                    </ul>
                </div>
                <div class="filters-list">
                    <div class="list-type">Filtre</div>
                    <ul class="list">
                        <li class="list-item">Toate</li>
                        <li class="list-item">Filtru 1</li>
                        <li class="list-item">Filtru 2</li>
                        <li class="list-item">Filtru 3</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-grid">
            <div 
                is="product-card" 
                v-for="slide in slides" 
                v-bind:title="slide.title" 
                v-bind:price="slide.price" 
                v-bind:url="slide.url">
            </div>
        </div>
    </div>
</main>



<script>


    Vue.component('product-card', {
        template: '\
        <div class="grid-item"><div class="product-card">\
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
    });

    new Vue({
    el: '#shop',
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
                    price: '125',
                    url: 'assets/images/products/product1.jpg'
                },
                {
                    title: 'Buchet 15 trandafiri galbeni',
                    price: '29',
                    url: 'assets/images/products/product2.jpg'
                },
                {
                    title: '9 trandafiri rosii',
                    price: '72',
                    url: 'assets/images/products/product3.jpg'
                },
                {
                    title: 'Buchet 25 lalele colorate',
                    price: '200',
                    url: 'assets/images/products/product4.jpg'
                },
                {
                    title: 'Mini cactus in ghieci',
                    price: '15',
                    url: 'assets/images/products/product5.jpg'
                },
                {
                    title: 'Kit complet "Gradina mea"',
                    price: '195',
                    url: 'assets/images/products/product6.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri albastrii si galbeni',
                    price: '195',
                    url: 'assets/images/products/product7.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '100',
                    url: 'assets/images/products/product8.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri portocalii',
                    price: '200',
                    url: 'assets/images/products/product9.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '300',
                    url: 'assets/images/products/product10.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '200',
                    url: 'assets/images/products/product11.jpg'
                },
                {
                    title: 'Buchet 25 trandafiri rosii',
                    price: '300',
                    url: 'assets/images/products/product12.jpg'
                },
                {
                    title: 'Buchet Lalele si Zambile, Roz Mov Rosii',
                    price: '200',
                    url: 'assets/images/products/product13.jpg'
                },
                {
                    title: 'Lalele multicolore Olanda',
                    price: '195',
                    url: 'assets/images/products/product14.jpg'
                },
                {
                    title: 'Buchet 125 trandafiri multicolori',
                    price: '195',
                    url: 'assets/images/products/product15.jpg'
                }
            ]
    }
    });

</script>

<?php include ("templates/footer.php"); ?>