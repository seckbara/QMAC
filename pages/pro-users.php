<?php include "../assets/include/header.php"; ?>

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
                                                            <tr>
                                                                <td>Tiger Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>Edinburgh</td>
                                                                <td>61</td>
                                                                <td>2011/04/25</td>
                                                                <td>$320,800</td>
                                                                <td>$320,800</td>
                                                                <td>$320,800</td>
                                                            </tr>
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