$(window).ready( function()
{
    if(typeof(actif)!="undefined")
        $("#"+actif+"Link").addClass('active');
});

function switchActiveLink(futurLink)
{
    if(typeof(actif)!="undefined")
        $("#"+actif+"Link").removeClass('active');
    $('#'+futurLink).submit();
}
