// Test pour enlever les sessions à la fermeture de la page

$(document).ready(function()
{
    $(window).on('beforeunload', function () {
        window.Location="../src/controller/deconnect.php"
    });
});


function activeModification( $id) {

    switchActiveLink("modifCust");
    $.redirect("../../modifClient",{"idCust": $id});

}