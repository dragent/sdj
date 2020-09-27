<table class="table-responsive-md  table-striped table-wrapper-scroll-y my-custom-scrollbar">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Sur place</th>
            <th>A emporter</th>
            <th>Blacklist</th>
            <th>Modifier</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i=0;$i<count($customerObject);$i++)
        {
           $ban = ($customerObject[$i]->isBan()==1) ?  "Safe":  "Blacklist" ;
             ?>
             <tr>
                <td><?=$customerObject[$i]->getName();?></td>
                <td><?=$customerObject[$i]->getNickname();?></td>
                <td><?=$customerObject[$i]->getPhone();?></td>
                <td><?=($customerObject[$i]->isBooking()==1) ?  "Oui":  "Non" ;?></td>
                <td><?=($customerObject[$i]->isTakeaway()==1) ?  "Oui":  "Non" ;?></td>
                <td class="<?=$ban?>"><?=($customerObject[$i]->isBan()==1) ?  "Autorise":  "Blacklist" ;?></td>
                <td>
                    <img id="modif" src="<?=  DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR."modification.png"; ?>"  onclick=activeModification("<?=$customerObject[$i]->getId()?>") alt="modification de la personne"/></a>
                </td>
            </tr>
            <?php
         }
         ?>

   </tbody>
</table>
