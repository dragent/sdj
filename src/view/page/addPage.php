<div id='container' class="page col-md-10">
    <h1 id="title" class="page">Répertoire Client</h1>
    <h2 id="title" class="page">Ajout Client</h2>
    <?=$alert?>
    <form method="post" action="">
        <div id="nameDiv" class="formDiv">
            <label>Prénom</label>
            <input type="text" name="nameCust" />
        </div>
        <div id="nicknameDiv" class="formDiv">
            <label>Nom</label>
            <input type="text" name="nickNameCust" value=""/>
        </div>
        <div id="telDiv" class="formDiv">
            <label>Téléphone</label>
            <input type="text" name="telCust" pattern="[0-9]*" value="0"/>
        </div>
        <div id="bookingDiv" class="formDiv">
            <label>Reservation</label>
            <input type="radio"  name="bookingCust" value=""/>
        </div>
        <div id="takeawayDiv" class="formDiv">
            <label>A emporter</label>
            <input type="radio"  name="takeAwayCust" value="false"/>
        </div>
        <div id="BanDiv" class="formDiv">
            <label>Banni</label>
            <input type="radio"  name="banCust" value="false"/>
        </div>
        <input type="submit" value="Sauvegarder" value="false" class="btn btn-primary"/>
    </form>
</div>
</body>
</html>
