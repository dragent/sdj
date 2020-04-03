// Test pour enlever les sessions à la fermeture de la page

$(document).ready(function()
{
      $(window).on('beforeunload', function () {
        alert("bye2");
        window.Location="../php/controller/deconnection.php"
    });
});
