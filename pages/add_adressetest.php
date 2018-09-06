<?php include "../assets/include/header.php"; ?>

<div id="main">
    <?php include "../assets/include/nav.php"; ?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Mon Profile</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Accueil</li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form action="#" method="post" enctype="multipart/form-data">
                                     <div class="modal-body">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group" id="locationField">
                                                        <label>Veuillez saisir l'adresse</label>
                                                        <input class="form-control" name="adresse" id="autocomplete" placeholder="Saisissez votre adresse" onFocus="geolocate()"  type="text" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Numéro du rue</label>
                                                        <input class="form-control" name="numero_rue" id="street_number" type="email" required />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nom du rue</label>
                                                        <input class="form-control" name="nom_rue" id="route" type="text" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Ville</label>
                                                        <input class="form-control" name="ville" id="locality" type="email" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Région</label>
                                                        <input class="form-control" name="region" id="administrative_area_level_1" type="email" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Code postale</label>
                                                        <input class="form-control" name="code_postal" id="postal_code" type="email" required />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Pays</label>
                                                        <input class="form-control" name="pays" id="country" type="email" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value="Enregistrer" />
                                        </div>

                                </form>
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

