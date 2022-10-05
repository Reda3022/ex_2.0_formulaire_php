<?php
$groupe=[
    [   'nom'=> 'Filali',
        'prenom' =>'Xavier',
        'taille' =>1.57,
        'poids'=>70,
        'code'=>'H123'
    ],
    [   'nom'=> 'Santchi',
        'prenom' =>'Olivier',
        'taille' =>1.3,
        'poids'=>45,
        'code'=>'H234'
    ]
];
// ameliore ca avec une boucle for
for ($i = 0; $i<count($groupe);$i++)
{
    //Ajouter la case bmi avec la valeur de la premier ligne

    $groupe[$i]['bmi']=$groupe[$i]['poids']/($groupe[$i]['taille']*$groupe[$i]['taille']);

    //Ajouter la case bmi avec la valeur de la deuxieme ligne

    //$groupe[$i]['bmi']=$groupe[$i]['poids']/($groupe[$i]['taille']*$groupe[$i]['taille']);
}

var_dump($groupe);

var_dump($_POST);

$groupe[]=$_POST;







?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice 2.0 formulaire</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<form action="" method="post">
    <label for="nom">Nom </label>
    <input type="text" name="nom" ><br>

    <label for="nom">Prénom </label>
    <input type="text" name="Prénom" ><br>

    <label for="nom">Taille </label>
    <input type="text" name="Taille" ><br>

    <label for="nom">Poids </label>
    <input type="text" name="Poids" ><br>

    <label for="nom">Code </label>
    <input type="text" name="Code" ><br>

    <input type="submit" name="GO"><br>
</form>

<table>

    <thead>
    <tr>
        <!--    les en-têtes du tableau 2 d-->
        <th>Nom</th>
        <th>Prénom</th>
        <th>Taille</th>
        <th>poids</th>
        <th>Code</th>
        <th>Bmi</th>
    </tr>
    </thead>

    <tbody>

    <?php for ($i=0;$i<count($groupe);$i++){ ?>  <!--boucle for-->
    <?php $groupe[]=$_POST ?>
        <tr>
            <!l'affichage des valeurs dans le tableau simple-->
            <td><b><?php echo $groupe[$i]['nom']?></b></td>
            <td><?php echo $groupe[$i]['prenom']?></td>
            <td><?php echo $groupe[$i]['taille']?></td>
            <td><?php echo $groupe[$i]['poids']?></td>
            <td><?php echo $groupe[$i]['code']?></td>
            <!--<td><?php /*echo $groupe[$i]['poid']*/?></td>-->
            <td><?php echo $groupe[$i]['bmi']?></td>
        </tr>
    <?php }?>   <!-- fin du for-->

    </tbody>

</table>


</body>
</html>
