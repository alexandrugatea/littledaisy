<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- about -->
<!--===========================-->

<main  id="cart">
    <?php include ("templates/hero-small.php"); ?>
    <?php include ("templates/motto.php"); ?>
</main>

<script>
    new Vue({
    el: '#cart',
    data: {
        hero: {
            title: 'Cosul tau cu flori',
            image: 'assets/images/hero-cart.jpg'
        },
        motto: {
            quote: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et feugiat leo. In suscipit lobortis sem non commodo. Aenean fringilla molestie dui, at egestas leo. Integer fringilla, metus in eleifend accumsan, metus tellus fringilla justo',
            author: 'Lorem ipsum dolor sit amet',
            image: 'assets/images/hero-about.jpg'
        }
    }
    });

</script>
<?php include ("templates/footer.php"); ?>