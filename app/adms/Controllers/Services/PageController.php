<?php 

namespace App\adms\Controllers\Services;

/**
 * Recebe a URL e manipula
 * 
 * @author Brayan <brayanmonteirooo@gmail.com
 *
 */
class PageController
{
    // Atributo que recebe a URL do .htaccess
    private string $url;

    // Método construtor: significa que toda vez que a classe for instanciada, o método será executado. Recebe a URL do .htaccess.
    public function __construct()
    {
        echo 'PageController <br>';

        // Verifica se vem valor na variável url enviada pelo .htaccess
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            // Recebe a URL do .htaccess
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            echo "Acessar o endereço: " . $this->url . "<br>";
        }else{
            echo "Acessar a página inicial";
        }
    }
}