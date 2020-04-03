<nav  class="vertical-menu">
    <form id="home" action="../controller/principalController.php" method="post">
          <input type="hidden" name="on" value="home"/>
          <a id="homeLink" onclick=switchActiveLink("home") value="test" >Home</a>
    </form>
    <form id="cust" action="../controller/principalController.php" method="post">
          <input type="hidden" name="on" value="cust"/>
          <a  id="custLink" onclick=switchActiveLink("cust")>Clients fidèles</a>
    </form>
    <form id="blacklist" action="../controller/principalController.php" method="post">
          <input type="hidden" name="on" value="blacklist"/>
          <a id="blacklistLink" onclick=switchActiveLink("blacklist") >Blacklist</a>
    </form>
    <form action="../controller/deconnection.php">
        <button name="deconnectSession" id="deconnectSession" n>Deconnection</button>
    </form>
</nav>
