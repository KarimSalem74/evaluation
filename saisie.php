
 
<HTML>
</BODY>     
          <H2>Saisie d'un nouveau contact</H2>
          <FORM ACTION="enregistrer.php">
            Nom : <INPUT NAME="nom"><BR>
            Prénom : <INPUT NAME="prenom"><BR>
            Téléphone : <INPUT NAME="telephone"><BR>
            <INPUT TYPE="submit">
          </FORM>
          <CENTER><A HREF="pageaccueil.html">Retour Accueil</A></CENTER>

          <form action="liste.php" method="post">
 </BODY>
</HTML>

<?php

if(isset($_POST['submit'])){
    if(isset(['nom'], $_POST['prénom'])){
        if($_POST['nom'] != "" && $_POST['prénom'] != ""){
            $insertion = "INSERT INTO liste.php (nom, prénom) VALUES($_POST['nom'], $_POST['prénom'])";

            $execute = $pdo->query($insertion);

            if($execute == true){
                $msgSucess = "Contact ajouté avec succès";
            }else{
                $msgError = "L'ajout de contact à échouer";
            }
        }
    }
}