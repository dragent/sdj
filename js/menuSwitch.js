$(document).ready()
{
    console.log($().find("#"+actif+"Link"));
    $("#"+actif+"Link").addClass('active');
}
function switchActiveLink(futurLink)
{
    $("#"+actif+"Link").removeClass('active');
    $('#'+futurLink).submit();
}
