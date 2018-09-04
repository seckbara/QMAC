
<?php include "../assets/include/header.php"; ?>

<div id="main">
    <?php include "../assets/include/nav.php"; ?>
        <div class="content-page">

        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Creation d'un utilisateur</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Accueil</li>
                                <li class="breadcrumb-item active">Création</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="alert alert-success" style="display: none" id="succes" role="alert">

                </div>

                <div class="alert alert-danger" style="display: none" id="error" role="alert">

                </div>

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
                                                        <input class="form-control" id="user-nom" placeholder="nom utilisateur" name="nom" type="text" value="" required />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Prénom d'utilisateur</label>
                                                        <input class="form-control" id="user-prenom" placeholder="prenom utilisateur" name="prenom" type="text" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" id="id-email" placeholder="adresse email" name="email" type="email" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Rôle</label>
                                                        <select class="form-control select2" id="id-role" name="role">
                                                            <option value="adminitrateur">Administrateur</option>
                                                            <option value="consultant">Consultation</option>
                                                            <option value="invite">invité</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Date d'inscription</label>
                                                        <input class="form-control" id="id-date" name="date" type="text" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sexe</label>
                                                        <select class="form-control select2" id="id-sexe" name="sexe">
                                                            <option value="H">Homme</option>
                                                            <option value="F">Femme</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mots de passe</label>
                                                        <input class="form-control" id="id-password" placeholder="mots de passe" name="password" type="password" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Confirmation mots de passe</label>
                                                        <input class="form-control" id="id-cpassword" placeholder="confirmation" name="cpassword" type="password" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fonction</label>
                                                        <select class="form-control select2" id="id-fonction" name="fonction">
                                                            <option value="developpeur">Développeur</option>
                                                            <option value="testeur">Testeur</option>
                                                            <option value="chef">Chef de projet</option>
                                                            <option value="manager">Manager</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="submit" id="id-enregistrer" value="Enregistrer" class="btn btn-primary"></input>
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

    <?php include "../assets/include/footer.php"; ?>

</div>

<?php include "../assets/include/script.php"; ?>
<script>
    // Enregistrement du formulaire via du JQUERY
    $("form").submit(function(e) {
        e.preventDefault();
        $.post( "../src/Traitement/create-user-form.php", $("#create-user").serialize(), function (data) {
            if(data['result'] === "succes"){
                $("#succes").html(" L'utilisateur a été créer avec succé").show();
                $("#error").html("Les mots de passe ne sont pas identique").hide();
                setTimeout(function() { window.location.reload() },5000);
            }
            else{
                $("#error").html("Les mots de passe ne sont pas identique").show();
                $("#succes").html(" L'utilisateur a été créer avec succé").hide();
            }
        }, 'json');
    });

    // Utilisation de date picker pour la date d'inscription
    $('input[name="date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'DD-MM-YYYY'
        }
    });

</script>


