<div class="col-md-6">
    <h5 class="card-header">Ajout Contenue</h5>
    <div class="card-body">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-floating">
                <input type="text" name="titre" class="form-control" id="floatingInput" placeholder="titre" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Titre</label>
                <div id="floatingInputHelp" class="form-text">
                    ajouter le titre de votre contenue.
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlSelect2" class="form-label">Type de Contenue</label>
                <?php $type = findAllContenu() ?>
                <select class="form-select" name="idtype" id="exampleFormControlSelect2" aria-label="Multiple select example">
                    <option selected>Type</option>
                    <?php foreach ($type as $key) { ?>
                        <option value="<?php echo $key['id'] ?>"><?php echo $key['nom'] ?></option>
                    <?php } ?>
                </select>

            </div>
            <div>
                <hr class="my-3" />
                <label for="exampleFormControlTextarea1" class="form-label">Contenue</label>
                <textarea class="form-control" name="contenue" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <hr class="my-3" />
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" name="photo" type="file" id="formFile" size="33" />
            </div>
            <hr class="my-2" />
            <button type="submit" class="btn btn-outline-primary">Ajouter</button>
        </form>
    </div>
</div>
<div class="col-md-6">
</div>