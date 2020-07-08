    <div id='container' class="page col-10">
        <h1 id="title">Repertoire Client</h1>
        <h2 id="titlePage"> Modification client </h2>
        <h3 id="titlePage"> <?=$customerObject->getName();?> <?=$customerObject->getNickname();?></h3>
        <form method="post" action="">
            <div id="telDiv" class="formDiv">
                <label>Téléphone</label>
                <input type="text" name="phoneCust" pattern="[0-9]*" placeholder="<?=$customerObject->getPhone();?>" value="<?=$customerObject->getPhone();?>"/>
            </div>
            <div id="bookingDiv" class="formDiv">
                <label>Reservation :   </label>
                <label class="marge"> oui </label><input type="radio"  name="bookingCust" value="true" <?=  ($customerObject->isBooking()) ? "checked" : "" ;?>/>
                <label class="marge"> non </label><input type="radio"  name="bookingCust" value="false" <?=  ($customerObject->isBooking()) ? "" :"checked"  ;?>/>
            </div>
            <div id="takeawayDiv" class="formDiv">
                <label>A emporter</label>
                <label class="marge"> oui </label><input type="radio"  name="takeAwayCust" value="true" <?= ($customerObject->isTakeaway()) ? "checked" : "" ;?>/>
                <label class="marge"> non </label><input type="radio"  name="takeAwayCust" value="false" <?=  ($customerObject->isTakeaway()) ? "" : "checked" ;?>/>
            </div>
            <div id="BanDiv" class="formDiv">
                <label>Banni</label>
                <label class="marge"> oui </label><input type="radio"  name="banCust" value="true" <?=  ($customerObject->isBan()) ? "checked" : "" ;?>/>
                <label class="marge"> non </label><input type="radio"  name="banCust" value="false" <?=  ($customerObject->isBan()) ? "" : "checked" ;?>/>
            </div>
            <input type="submit" value="Update" name="Action" class="btn btn-primary" />
            <input type="submit" value="Delete" name="Action" class="btn btn-danger"/>

        </form>
    </div>
</body>
</html>
