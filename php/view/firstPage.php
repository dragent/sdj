
<!DOCTYPE html>

<html>

    <head>
        <title>La source de Jade</title>
          <!-- Le metatag charset permet d'encoder correctement les caractères en unicode (c'est donc grâce à cette balises qu'on peut utiliser des accents et d'autres caractères spéciaux -->
          <h1>SJD</h1>
          <h2>Connexion</h2>
          <form id="formConnect" action="" method="post">
            <div id="divUser">
              <label>Identifiant</label>
              <input type="text" placeholder="Veuillez mettre votre identifiant" name="user"/>
            </div>
            <div id=divPassword>
              <label id="labelPassword">Mot de passe</label>
              <input type="password" placeholder="Veuillez mettre votre mot de passe" id="passPass" name="password"/>
            </div>
            <input type="submit" value="Se connecter">
          </form>
    </body>
</html>
