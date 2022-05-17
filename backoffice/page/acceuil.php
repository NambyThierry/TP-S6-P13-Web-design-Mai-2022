<div class="card">
    <h5 class="card-header">Crud Detail Contenue </h5>
    <hr>
    <a type="button" href="template.php?page=ajout" class="btn btn-xl btn-primary">Ajout Contenu</a>
</div>

<div class="card">
    <h5 class="card-header">Tout les Contenues </h5>

    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $cont = findAll(); ?>
            <tbody class="table-border-bottom-0">
                <?php foreach ($cont as $key) { ?>

                    <tr>
                        <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong><?php echo $key['id']; ?></strong>
                        </td>
                        <td><span class="badge bg-label-warning me-1"><?php echo $key['titre']; ?></span></td>
                        <td><?php echo $key['daty']; ?></td>
                        <td>

                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <form action=" template.php" method="get">
                                        <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
                                        <input type="hidden" name="page" value="pagemodif">
                                        <button type="submit" class="dropdown-item"><i class="bx bx-edit-alt me-2"></i> Modifer</button>
                                    </form>
                                    <form action="supprimer.php" method="get">
                                        <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
                                        <button type="submit" class="dropdown-item" href=""><i class="bx bx-trash me-2"></i> Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>