<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attente de la prochaine question</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <div class="container">
        <h1>Attente de la prochaine question</h1>
        <?php
            // Vérifier si le numéro de la question a été spécifié en tant qu'argument GET
            if(isset($_GET['num_question'])) {
                $num_question = $_GET['num_question'];
                echo "<p>Réponse pour la question $num_question enregistrée.</p>";
            } else {
                echo "<p>Numéro de question non spécifié.</p>";
            }
        ?>
        <p>Attendez la prochaine question...</p>
    </div>
</body>
</html>
