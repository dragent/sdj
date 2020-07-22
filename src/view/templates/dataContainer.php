<table table-responsive>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Sur place</th>
            <th>A emporter</th>
            <th>Modifier</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i=0;$i<count($customerObject);$i++)
        {
             ?>
             <tr
                <?php if($customerObject[$i]->isBan()==1)
                {
                    ?> class="banCust"<?php
                }
                ?>>
                <td><?=$customerObject[$i]->getName();?></td>
                <td><?=  $customerObject[$i]->getNickname();?></td>
                <td><?=  $customerObject[$i]->getPhone();?></td>
                <td><?=  ($customerObject[$i]->isBooking()==1) ?  "Oui":  "Non" ;?></td>
                <td><?=  ($customerObject[$i]->isTakeaway()==1) ?  "Oui":  "Non" ;?></td>
                <td>
                    <img id="modif" src="<?=  DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR."modification.png"; ?>"  onclick=activeModification("<?=$customerObject[$i]->getId()?>") alt="modification de la personne"/></a>
                </td>
            </tr>
            <?php
         }
         ?>
 
   </tbody>
</table>
	