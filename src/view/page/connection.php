<!DOCTYPE html>
<html>
    <head>
        <title>La source de Jade</title>
        <meta charset="UTF-8">
        <style>
            <?php include dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."bootstrap.min.css" ?>
        </style>
        <style><?php include dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."connection.css" ?>    </style>
    </head>
    <body>
        <h1 class="title">SDJ</h1>
        <div> Identifiant= bonjour, Mot de passe= bonjour </div>
        <div class="note h2">Connexion</div>
        <div class="form-content">
            <form id="formConnect" action="" method="post">
                <div class="col-md-6">
                    <div class="form-group" id="divUser">
                        <label>Identifiant</label>
                        <input type="text" class="form-control" placeholder="Veuillez mettre votre identifiant" name="user"/>
                    </div>
                    <div class="form-group"  id="divPassword">
                        <label id="labelPassword">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Veuillez mettre votre mot de passe" id="passPass" name="password"/>
                    </div>
                </div>
                <input class="btnSubmit" type="submit" value="Se connecter">
            </form>
        </div>
    </body>
</html>
