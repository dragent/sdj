<?php
    session_start();
    if(!isset($_SESSION["newsession"]))
    {
        header('Location: ../../');
        exit();
    }
    if(!isset($_POST["on"]))
    {?>
        <script type="text/javascript">

            var actif='<?php echo $_SESSION["actif"]; ?>'
        </script>
        <?php
    }
    else {
        ?>
        <script type="text/javascript">
            var actif='<?php echo $_POST["on"]; ?>'
        </script>
        <?php
      }
    require "../view/acceuil.php";
