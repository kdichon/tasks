<?php

// Inclusion des instances utiles
include("config.php");
include($dir_common."db.php");

var_dump($_GET);
var_dump($_POST);

// Gestion de [mod] par rapport à sa valeur via [$_GET]
switch ($_GET['mod']) {
    # Ajouter une tâche dans la base de données...
    case 'add':
        // Création de ma requête SQL d'insertion
        $sql = "INSERT INTO tasks ( task, status) VALUES ('".$_POST['tache']."', 'n')";
        // Execution de ma requête
        $mysql->query($sql);        // Autre ecriture => $mysqli->query($sql);
        break;
    
    # Supprimer une tâche dans la base de données......
    case 'del':
        // Création de ma requête SQL de sppression
        $sql = 'DELETE FROM tasks WHERE id='.$_GET['id'];
        // Execution de ma requête
        $mysql->query($sql);        // Autre ecriture => $mysqli->query($sql);
        break;
    
    # Modifier l'état d'une tâche dans la base de données......
    case 'upd':
        // Passe la colonne ETAT à "o" 
        $sql = "UPDATE FROM tasks SET status='o' WHERE id=".$_GET['id'];
        // Execution de ma requête
        $mysql->query($sql);        // Autre ecriture => $mysqli->query($sql);
        break;
    
    default:
        # code...
        break;
}

header("Location: index.php");

?>