<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- about -->
<!--===========================-->

<main  id="product">
    <?php include ("templates/hero-small.php"); ?>
    <?php include ("templates/motto.php"); ?>
</main>

<script>
    new Vue({
    el: '#product',
    data: {
        hero: {
            title: 'Magazin',
            image: 'assets/images/hero-about.jpg'
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