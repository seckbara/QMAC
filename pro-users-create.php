
<?php include "assets/include/header.php"; ?>

<div id="main">

    <?php include "assets/include/nav.php"; ?>
    <!-- contenu de la page -->
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Creation d'un utilisateur</h1>
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

                                <form action="#" method="post" id="create-user">
                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nom d'utilisateur</label>
                                                        <input class="form-control" id="user-nom" name="nom" type="text" value="" required />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Prénom d'utilisateur</label>
                                                        <input class="form-control" id="user-prenom" name="prenom" type="text" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" id="id-email" name="email" type="email" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Rôle</label>
                                                        <input class="form-control" id="id-role" name="role" type="text" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Date d'inscription</label>
                                                        <input class="form-control" id="id-date" name="date" type="date" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sexe</label>
                                                        <input class="form-control" id="id-sexe" name="sexe" type="text" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mots de passe</label>
                                                        <input class="form-control" id="id-password" name="password" type="password" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Confirmation mots de passe</label>
                                                        <input class="form-control" id="id-cpassword" name="cpassword" type="password" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fonction</label>
                                                        <input class="form-control" id="id-fonction" name="fonction" type="text" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="button" id="id-enregistrer" class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php include "assets/include/footer.php"; ?>

</div>

<?php include "assets/include/script.php"; ?>
<script>
    $("#id-enregistrer" ).click(function() {
        $.post( "src/Traitement/create-user-form.php", { name: "John", time: "2pm" })
            .done(function( data ) {
                alert( "Data Loaded: " + data );
            });
    });
</script>


