<section class="categories spad">
        <div class="container"> 
            <div class="row">
                <?php for ($i=0; $i < 4; $i++) { 
                    # code...
                ?>
                <div class="col-lg-5 boite mb-4">
                    <div class="row">
                        <img class="col-lg-6" src="<?php echo site_url("assets/img/categories/cat-1.jpg");?>" alt="">
                        <img class="col-lg-6" src="<?php echo site_url("assets/img/categories/cat-1.jpg");?>" alt="">
                    </div> <br>
                    <div class="row">
                        <p class="col-lg-2"></p>
                        <div class="col-lg-4 acc"><a class="acc" href="">Accepter</a></div>
                        <div class="col-lg-4 dec"><a class="dec" href="">Decliner</a></div>
                    </div> <br>
                </div> 
                <p class="col-lg-1"></p>
                    <?php } ?>
            </div>
        </div>
    </section>