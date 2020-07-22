<nav  class="vertical-menu col-md-2">


    <form id="home" action="affichage" method="post">
        <input type="hidden" name="on" value="home"/>
        <a id="homeLink" onclick=switchActiveLink("home") value="test" >Accueil</a>
    </form>
    <form id="cust" action="affichage" method="post">
        <input type="hidden" name="on" value="cust"/>
        <a  id="custLink" onclick=switchActiveLink("cust")>Clients fidèles</a>
    </form>
    <form id="blacklist" action="affichage" method="post">
        <input type="hidden" name="on" value="blacklist"/>
        <a id="blacklistLink" onclick=switchActiveLink("blacklist") >Blacklist</a>
    </form>
    <form id="addCust" action="ajoutClient" method="post">
        <input type="hidden" name="on" value="addCust"/>
        <a id="addCustLink" onclick=switchActiveLink("addCust") >Ajout Client</a>
    </form>
    <form action="deconnection" method="post">
        <button name="deconnectSession" id="deconnectSession" class="navButton btn  btn-dark">Deconnexion</button>
    </form>
</nav>
