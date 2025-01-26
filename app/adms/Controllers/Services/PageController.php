<?php 

namespace App\adms\Controllers\Services;

use App\adms\Helpers\ClearUrl;
use App\adms\Helpers\SlugController;

/**
 * Recebe a URL e manipula
 * 
 * @author Brayan <brayanmonteirooo@gmail.com
 *
 */
class PageController
{
    /** @var string Atributo que recebe a URL do .htaccess  */
    private string $url;

    /** @var array Atributo que recebe a URL convertida em array */
    private array $urlArray;

    /** @var string Atributo que recebe o controller da URL */
    private string $urlController = "";

    /** @var string Atributo que recebe o parâmetro da URL */
    private string $urlParamater = "";

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

            //Converter a string URL em um array
            $this->urlArray = explode('/', $this->url);
            var_dump($this->urlArray);

            // Verificar se o array não está vazio e se o primeiro índice do array não está vazio.
            if (isset($this->urlArray[0])){
                $this->urlController = SlugController::slugController($this->urlArray[0]);
            }else{
                $this->urlController = SlugController::slugController("Login");
            }

            // Verificar se o array não está vazio e se o segundo índice do array não está vazio.
            if (isset($this->urlArray[1])){
                $this->urlParamater = $this->urlArray[1];
            }

        }else{
            $this->urlController = SlugController::slugController("Login");
        }
        var_dump($this->urlController);
        var_dump($this->urlParamater);
    }
}