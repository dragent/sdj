    <div id='container' class="page col-9">
        <h1 id="title">Repertoire Client</h1>
        <h2 id="titlePage"> Modification client </h2>
        <h3 id="titlePage"> <?=$customerObject->getName();?> <?=$customerObject->getNickname();?></h3>
        <div class="form-content">
            <form method="post" action="">
                <input id="idCust" name="idCust" type="hidden" value="<?=$customerObject->getId();?>">
                <div id="telDiv" class="formDiv form-group">
                    <label>Téléphone</label>
                    <input type="text" class="form-control" name="phoneCust" pattern="[0-9]*" placeholder="<?=$customerObject->getPhone();?>" value="<?=$customerObject->getPhone();?>"/>
                </div>
                <div id="bookingDiv" class="formDiv form-group">
                    <label>Reservation :   </label>
                    <label class="marge"> oui </label><input type="radio"  name="bookingCust" value="true" <?=  ($customerObject->isBooking()) ? "checked" : "" ;?>/>
                    <label class="marge"> non </label><input type="radio"  name="bookingCust" value="false" <?=  ($customerObject->isBooking()) ? "" :"checked"  ;?>/>
                </div>
                <div id="takeawayDiv" class="formDiv form-group">
                    <label>A emporter</label>
                    <label class="marge"> oui </label><input type="radio"  name="takeAwayCust" value="true" <?= ($customerObject->isTakeaway()) ? "checked" : "" ;?>/>
                    <label class="marge"> non </label><input type="radio"  name="takeAwayCust" value="false" <?=  ($customerObject->isTakeaway()) ? "" : "checked" ;?>/>
                </div>
                <div id="BanDiv" class="formDiv form-group">
                    <label>Banni</label>
                    <label class="marge"> oui </label><input type="radio"  name="banCust" value="true" <?=  ($customerObject->isBan()) ? "checked" : "" ;?>/>
                    <label class="marge"> non </label><input type="radio"  name="banCust" value="false" <?=  ($customerObject->isBan()) ? "" : "checked" ;?>/>
                </div>
                <input type="submit" value="Update" name="Action" class="btnSubmit" />
                <input type="submit" value="Delete" name="Action" class="btnDelete"/>
            </form>
        </div>
    </div>
</body>
</html>
