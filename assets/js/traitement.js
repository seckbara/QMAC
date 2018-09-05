// Permet d'envoyer les données via $POST
function ajaxModaltoShow(data, url, idModal) {
    console.log('ddd');
    jQuery.ajax({
        type: 'POST',
        data: data,
        url: url,
        async: false,
        success: function(returnData, textStatus, jqXHR) {
            console.log(returnData);
            var modalContent = returnData.split('##');
            //console.log(returnData);
            $('#'+idModal+' .modal-title').html(modalContent[0]);
            $('#'+idModal+' .modal-body').html(modalContent[1]);
            return true;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#'+idModal).modal('hide');
            return false;
        }
    });
};


// Fonction pour afficher le modal
function add_adresse(adher)
{
    console.log(adher);
    var url 	= "../pages/scripts/add_adresse.php";
    var data = {
        id_adher: adher
    };
    ajaxModaltoShow(data, url, 'adresse');
}