<?php
include "../assets/include/header.php";
$entitymanager  = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);
use GestionUser\Entity\Utilisateurs;

// Recuperation du depos des utilisateurs
$reporitoryUsers = $entitymanager->getRepository(Utilisateurs::class);
$users = $reporitoryUsers->findAll();
?>

<div id="main">
    <?php include "../assets/include/nav.php"; ?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Liste des utilisateurs</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Accueil</li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="modal fade bd-example-modal-lg" id="adresse" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-hover display">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Email</th>
                                            <th>Rôle</th>
                                            <th>Sexe</th>
                                            <th>Fonction</th>
                                            <th>Date d'inscription</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($users as $user):  ?>
                                            <tr>
                                                <td><?= $user->nom ?></td>
                                                <td><?= $user->prenom ?></td>
                                                <td><?= $user->email ?></td>
                                                <td><?= $user->role ?></td>
                                                <td><?= $user->sexe ?></td>
                                                <td><?= $user->fonction ?></td>
                                                <td><?= $user->dateinsciprtion ?></td>
                                                <td align="center">
                                                    <?php if (is_null($user->adresse_id)) : ?>
                                                        <a role="button" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="add_adresse(<?= $user->id ?>);"><i class="fa fa-address-card" aria-hidden="true"></i></a>
                                                    <?php endif; ?>
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_5"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../assets/include/footer.php"; ?>

</div>

<?php include "../assets/include/script.php"; ?>
<script src="../assets/js/traitement.js"></script>

<script>
    // Fonction pour afficher le modal
    function add_adresse(adher)
    {
        var url 	= "../pages/modals/add_adresse.php";
        var data = {
            id_adher: adher
        };
        ajaxModaltoShow(data, url, 'adresse');
    }
</script>


