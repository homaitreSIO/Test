<html>
    <head>
        <title>Ajout à la base de donnée</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action ="inscrit.php" method ="POST">
            <p>
            <label>Nom : 
                <input type="text" name="nom" value="Veuillez rentrer votre nom" onfocus='javascript:this.value="";'>
            </label>
            </p>
            <p>
            <label>Prenom : 
                <input type="text" name="prenom" value="Veuillez rentrer votre prénom" onfocus='javascript:this.value="";'>
            </label>
            </p>
            <p>    
            <label>Numéro de téléphone : 
                <input type="text" name="numtel" value="veuillez saisir votre numéro"onfocus='javascript:this.value="";'>
            </label>
            </p>
            <p>
            <label>Adresse E-mail : 
                <input type="email" name="mail" value="veuillez saisir votre adresse mail" onfocus='javascript:this.value="";'>
            </label>
            </p>
            <p>
                <input type="submit" value="Ajouter">
            </p>
        </form>
    </body>
</html>