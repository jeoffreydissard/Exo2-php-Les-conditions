<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Exo 1</h1>
    <p>Créer une variable **age** et l'initialiser avec une valeur.<br />
        Si l'age est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.</p>
    <?php include('Exo_1.php'); ?>
    <h1>Exo 2</h1>
    <p>Créer deux variables **age** et **genre**. La variable **genre** peut prendre comme valeur :<br />
        - Homme<br />
        - Femme<br />
        <br />
        En fonction de l'âge et du genre afficher la phrase correspondante :<br />
        - **Vous êtes un homme et vous êtes majeur**<br />
        - **Vous êtes un homme et vous êtes mineur**<br />
        - **Vous êtes une femme et vous êtes majeur**<br />
        - **Vous êtes une femme et vous êtes mineur**<br />
        <br />
        Gérer tous les cas.</p>
    <?php include('Exo_2.php'); ?>
    <h1>Exo 3</h1>
    <p>Traduire ce code avec des if et des else :<br />
        <br />

        ?php<br />
        echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';<br />
        ?></p>
    <?php include('Exo_3.php'); ?>
    <h1>Exo 4</h1>
    <p>Traduire ce code avec des if et des else :<br />
        <br />

        ?php<br />
        echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';<br />
        ?></p>
    <?php include('Exo_4.php'); ?>
    <h1>Exo 5</h1>
    <p>Traduire ce code avec des if et des else :<br />
        <br />

        ?php<br />
        echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';<br />
        ?></p>
    <?php include('Exo_5.php'); ?>
    <h1>Exo 6</h1>
    <p>Traduire ce code avec des if et des else :<br />
        <br />

        ?php<br />
        echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';<br />
    ?></p>
    <?php include('Exo_6.php'); ?>
</body>
</html>