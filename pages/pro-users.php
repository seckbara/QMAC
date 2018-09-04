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

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb-holder">
                                    <h1 class="main-title float-left">Utilisateurs</h1>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item">Accueil</li>
                                        <li class="breadcrumb-item active">Utilisateurs</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                <div class="card mb-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="card mb-12">
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
                                                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_5"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                                        <a href="javascript:deleteRecord_5('5');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div><!-- end card-->

                                        </div>
                                </div>
                            </div>
                        </div>
                    <!-- END container-fluid -->
                    </div>

            <?php include "../assets/include/footer.php"; ?>

            </div>
            <?php include "../assets/include/script.php"; ?>