<section class="categories spad">
        <div class="container">   
            <form action="<?php echo site_url('welcome/Echange');?>" method="post">
            <div class="row">
                <?php for ($i=0; $i <8 ; $i++) {  ?>
                    <div class="col-lg-3 liste">
                        <img src="<?php echo site_url("assets/img/categories/cat-1.jpg");?>" alt="">
                        <div class="descri">
                            <h3>Titre</h3>
                            <p> <center>150000Ar</center> </p>
                            <center>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-4 "><a href="">Modifier</a></div>
                                    <div class="col-lg-4"><a href="">Supprimer</a></div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </center>
                        </div> <br>
                    </div> 
                    <?php }?> 
                </div>
            </form>
        </div>
    </section>