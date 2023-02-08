<section class="categories spad">
    <div class="container">
    <div class="row">
    <div class="col-lg-5">
        <div class="row">
            <label for="objet"><h4> Votre objet: </h4></label>
            <?php if (count($userobjet) == 0) {
                echo "<h4 style='color:red; '>vous n'avez pas d'objet, veuiller ajouter :)</h4>";
            } else { ?>
                <select name="" id="" class="form-control">
                        <?php foreach($userobjet as $uso) { ?>
                        <option value="<?php echo $uso['idobjet']; ?>"><?php echo $uso['nomobjet']; ?></option>
                        <?php } ?>
                </select>
            <?php } ?><br>
        </div>
        <?php foreach($user as $us): ?>
        <div class="row p-2">
            <h5>Proprietaire : <?php echo $us['prenom']; echo " "; echo $us['nom']; ?></h5>
        </div>
        <?php endforeach; ?>
        <?php foreach ($objets as $ob): ?>
        <div class="row p-2">
            <label for="descri"><h4>Nom : <?php echo $ob['nom']; ?></h4></label>
        </div>

        <div class="row p-2">
            <h5>Description: </h5>
        </div>

        <div class="row p-1">
            <p><?php echo $ob['descriptions']; ?></p>
        </div>

        <div class="row p-1">
            <p>Prix estimatif : <?php echo $ob['prixestimatif']; ?> Ar</p>
        </div>
        <?php endforeach; ?> 

        <center><button class="btn site-btn mb-4">Envoyer</button></center>
    </div>

    <div class="col-lg-7">
        <div class="row">
        <?php foreach ($photo as $ph): ?>
            <div class="col-lg-4 liste">
                <img src="<?php echo site_url("assets/img/uploads/". $ph['lienimage'] . "");?>" alt=""> <br><br>
            </div>
        <?php endforeach; ?> 
        </div>
    </div>
    </div>
    </div>
</section>