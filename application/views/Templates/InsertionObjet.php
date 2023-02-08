<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-6 p-5" style="border: solid black 2px; border-radius: 10px; margin: auto;">
            <form action="<?php echo site_url('index.php/InsertObjets/save');?>" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Nom de votre objet" name="nomobjet" class="col-md-12 mb-4 form-control">
                <input type="text" placeholder="Prix estimer" name="prix" class="col-md-12 mb-4 form-control">
                <input type="text" placeholder="Description de votre objet" name="descri" class="col-md-12 mb-4 form-control">
                <input type="file" id="files" name="images[]" class="col-md-12 mb-4 form-control" required multiple/>
                <output id="list"></output>
                <select class="col-md-12 mb-4 form-control" name="categorie">
                    <?php foreach($categories as $cat): ?>
                    <option value="<?php echo $cat['idcategorie']; ?>"><?php echo $cat['nom']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn site-btn mb-4">Valider</button>
            </form>
        </div>
    </div>
</div>
<script>
    function image(evt){
        var files = evt.target.files;
        var output = [];
        for(var i=0, f; f=files[i]; i++){
            output.push('<li><strong>',escape(f.name), '</strong></li>');
        }
        document.getElementById('list').innerHTML += '<ul>' + output.join('')+'</ul>';
    }
    document.getElementById('files').addEventListener('change', image, false);
</script>