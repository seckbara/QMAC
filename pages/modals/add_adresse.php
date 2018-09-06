<?php  ?>
Ajouter d'un nouvel adresse<?="##" ?>

<form action="../src/Traitement/create-adresse-form.php" method="post" enctype="multipart/form-data">
    <div class="modal-body">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group" id="locationField">
                    <label>Veuillez saisir l'adresse</label>
                    <input class="form-control" name="user_id" type="hidden" value="<?= $_POST['id_adher'] ?>" />
                    <input class="form-control" name="adresse" id="autocomplete" placeholder="Saisissez votre adresse" onFocus="geolocate()"  type="text" required />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Numéro du rue</label>
                    <input class="form-control" name="numero_rue" id="street_number" type="text" required />
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
                    <input class="form-control" name="ville" id="locality" type="text" required />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Région</label>
                    <input class="form-control" name="region" id="administrative_area_level_1" type="text" required />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Code postale</label>
                    <input class="form-control" name="code_postal" id="postal_code" type="text" required />
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Pays</label>
                    <input class="form-control" name="pays" id="country" type="text" required />
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Valider" />
    </div>

</form>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE1wSrKQyxScmZJ2zYApjkwqVrMxXtg90&libraries=places&callback=initAutocomplete"
        async defer></script>

<script>

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }

</script>

