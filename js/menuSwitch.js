$(window).ready( function()
{
    $("#"+actif+"Link").addClass('active');
});

function switchActiveLink(futurLink)
{
    $("#"+actif+"Link").removeClass('active');
    $('#'+futurLink).submit();
}
