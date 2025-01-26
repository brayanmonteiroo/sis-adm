<?php 

namespace App\adms\Controllers\Services;

use App\adms\Helpers\ClearUrl;

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
        echo 'Teste PageController <br>';

        // Verifica se vem valor na variável url enviada pelo .htaccess
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            // Recebe a URL do .htaccess
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            echo "Acessar o endereço: " . $this->url . "<br>";
            
            // Chamar a classe helper para limpar a url
            $this->url = ClearUrl::clearUrl($this->url);
            var_dump($this->url);
        }else{
            echo "Acessar a página inicial";
        }
    }
}