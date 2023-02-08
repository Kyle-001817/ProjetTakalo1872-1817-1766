    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
            <?php foreach($data1 as $ob) { ?>
                <div class="col-lg-3 liste">
                    <form action="<?php echo site_url('index.php/Echange/detail');?>" method="post">
                        <div style="width: 250px; height: 300px;"><img style="height: 300px;" src="<?php echo site_url("assets/img/uploads/". $ob['lienimage'] . "");?>" alt=""></div>
                        <div class="descri">
                            <input type="hidden" name="idobjet" value="<?php echo $ob['idobjet']; ?>">
                            <input type="hidden" name="iduser" value="<?php echo $ob['iduser']; ?>">
                            <h3><?php echo $ob['nomobjet'] ?></h3>
                            <b> <center><?php echo $ob['prixestimatif'] ?> Ar</center> </b>
                            <center><button class="btn site-btn mb-4" type="submit">Echanger</button></center>
                        </div> <br>
                    </form>
                </div> 
                <?php } ?> 
            </div>
        </div>
    </section>
    <!-- Categories Section End -->