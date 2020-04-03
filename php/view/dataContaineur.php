<div id='container'>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>téléphone</th>
            <th>Sur place</th>
            <th>A emporter</th>
            <th>Banni</th>
        </tr>
        <tr>
      <?php
          for($i=0;$i<count($customerObject);$i++)
          {
              ?>
              <td>
                  <?php echo $customerObject[$i]->getName();
                  ?>
              </td>
              <td>
                  <?php echo $customerObject[$i]->getNickname();
                  ?>
              </td>
              <td>
                  <?php echo $customerObject[$i]->getPhone();
                  ?>
              </td>
              <td>
                  <?php echo $customerObject[$i]->isBooking();
                  ?>
              </td>
              <td>
                  <?php echo $customerObject[$i]->isTakeaway();
                  ?>
              </td>
              <td>
                  <?php echo $customerObject[$i]->isBan();
                  ?>
              </td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>
