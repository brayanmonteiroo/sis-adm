<?php 

namespace App\adms\Helpers;

class SlugController
{
    public static function slugController(string $slugController) : string
    {

        // Converter para minuscúlo
        $slugController = strtolower($slugController);

        // Converter o traço para espaço em branco
        $slugController = str_replace("-", " ", $slugController);

        // Converter a primeira letra de cada palavra para maiusculo
        $slugController = ucwords($slugController);

        // Retirar espaços em branco
        $slugController = str_replace(" ", "", $slugController);

        // Retorna a controller convertida
        return $slugController;
    }
}