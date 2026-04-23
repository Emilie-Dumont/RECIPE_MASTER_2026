<?php
namespace App\models\RecipesModel;
use \PDO;
// pourquoi un query et pas un prepare ?
// parce que la requete ne contient pas de parametres inconnus, elle est fixe, et ne depend pas de l'utilisateur, donc pas de risque d'injection SQL

function findOneByRand(PDO $conn): array
{
    $sql = "SELECT *
            FROM recipes
            ORDER BY RAND()
            LIMIT 1;";
    $rs = $conn->query($sql);
    return $rs->fetch(PDO::FETCH_ASSOC);
}
//Envoyez à la vue une variable $recipes (avec les 3 dernières) depuisfindAllPopulars()
function FindAllPopulars(PDO $conn): array
{
    $sql = "SELECT*
            FROM recipes
            ORDER BY created_at DESC
            LIMIT 3;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}