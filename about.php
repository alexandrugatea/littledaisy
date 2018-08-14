<?php include ("templates/header.php"); ?>

<!--===========================-->
<!-- about -->
<!--===========================-->

<main  id="about">
    <?php include ("templates/hero-small.php"); ?>

    <div class="about-us">
        <div class="section-container">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </p>
            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit 
                esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                sint occaecat cupidatat non proident, sunt in culpa qui 
                officia deserunt mollit anim id est laborum.
            </p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium, totam 
                rem aperiam, eaque ipsa quae ab illo inventore 
                veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <p>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
                odit aut fugit, sed quia consequuntur magni dolores eos qui 
                ratione voluptatem sequi nesciunt. Neque porro quisquam est, 
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci 
                velit, sed quia non numquam eius modi tempora incidunt ut labore 
                et dolore magnam aliquam quaerat voluptatem.
            </p>
            <div class="images-grid">
                <div class="image"><img src="/assets/images/about-img-1.jpg"></div>
                <div class="image"><img src="/assets/images/about-img-2.jpg"></div>
                <div class="image"><img src="/assets/images/about-img-3.jpg"></div>
            </div>
        </div>

    </div>

    <?php include ("templates/motto.php"); ?>
    <?php include ("templates/how-to-buy.php"); ?>
    <?php include ("templates/terms.php"); ?>
    <?php include ("templates/gdpr.php"); ?>



</main>

<script>
    new Vue({
    el: '#about',
    data: {
        hero: {
            title: 'Despre noi',
            image: 'assets/images/hero-about.jpg'
        },
        motto: {
            quote: 'Happiness radiates like the fragrance from a flower and draws all good things towards you.',
            author: 'Maharishi Mahesh Yogi',
            image: 'assets/images/motto-about.jpg'
        }
    }
    });

</script>
<?php include ("templates/footer.php"); ?>