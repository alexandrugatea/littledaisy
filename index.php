<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- Homepage -->
<!--===========================-->

<main  id="homepage">
    <?php include ("templates/hero.php"); ?>    
    <?php include ("templates/motto.php"); ?>
</main>




<script>
    new Vue({
    el: '#homepage',
    data: {
        hero: {
            title: 'Little Daisy Flower Shop',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et feugiat leo. In suscipit lobortis sem non commodo. Aenean fringilla molestie dui, at egestas leo. Integer fringilla, metus in eleifend accumsan, metus tellus fringilla justo',
            label: 'Vezi Produse',
            link: 'pages/shop.php',
            image: 'assets/images/hero-home.jpg'
        },
        motto: {
            quote: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et feugiat leo. In suscipit lobortis sem non commodo. Aenean fringilla molestie dui, at egestas leo. Integer fringilla, metus in eleifend accumsan, metus tellus fringilla justo',
            author: 'Lorem ipsum dolor sit amet',
            image: 'assets/images/motto-home.jpg'
        }
    }
    });
</script>


<?php include ("templates/footer.php"); ?>
