<?php 

use App\adms\Controllers\Services\PageController;

// Carregar o composer: responsável por carregar as classes
require 'vendor/autoload.php';

// instanciar a classe PageController, responsável por manipular a URL
$url = new PageController();