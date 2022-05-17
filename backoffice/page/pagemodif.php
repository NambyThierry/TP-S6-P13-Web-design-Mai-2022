<?php
$cont = getContent($_GET['id']);
?>
<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <h5 class="card-header">Modification</h5>
            <form action="modif.php" method="post">
                <div class="card-body">
                    <div>
                        <input type="hidden" name="id" value="<?php echo $cont['id'] ?>">
                        <label for="defaultFormControlInput" class="form-label">Titre</label>
                        <input type="text" name="titre" value="<?php echo $cont['titre'] ?>" class="form-control" id="defaultFormControlInput" placeholder="Titre....." aria-describedby="defaultFormControlHelp" />

                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Contenue</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?php echo $cont['content'] ?></textarea>

                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $cont['daty'] ?>" id="defaultFormControlInput" placeholder="Titre....." aria-describedby="defaultFormControlHelp" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Modifer</button>
                </div>
            </form>
        </div>
    </div>

</div>