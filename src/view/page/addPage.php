<div id='container' class="page col-md-9">
    <h1 id="title" class="page">Répertoire Client</h1>
    <h2 id="title" class="page">Ajout Client</h2>
    <?=$alert?>
    <form method="post" action="">
        <div id="nameDiv" class="formDiv form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="nameCust" />
        </div>
        <div id="nicknameDiv" class="formDiv form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nickNameCust" value=""/>
        </div>
        <div id="telDiv" class="formDiv form-group">
            <label>Téléphone</label>
            <input type="text" class="form-control" name="telCust" pattern="[0-9]*" value="0"/>
        </div>
        <div id="bookingDiv" class="formDiv form-group">
            <label>Reservation</label>
            <input type="radio" name="bookingCust" value=""/>
        </div>
        <div id="takeawayDiv" class="formDiv form-group">
            <label>A emporter</label>
            <input type="radio"    name="takeAwayCust" value="false"/>
        </div>
        <div id="BanDiv" class="formDiv form-group">
            <label>Banni</label>
            <input type="radio"  name="banCust" value="false"/>
        </div>
        <input class="btnSubmit" type="submit" value="Ajouter" value="false" class="btn btn-primary"/>
    </form>
</div>
</body>
</html>
