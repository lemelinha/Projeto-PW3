<?php
/**
 *  Este arquivo faz referência a declaração das rotas
 * do projeto
 *  
 */
namespace App;

/**
 *  Classe referente às rotas do projeto.
 * 
 */
abstract class Router {
    protected $routes;
    /**
     *  Função de declaração de rotas
     * 
     *  Esta função declara as rotas do projeto e
     *  armazena no atributo 'routes' da instância
     * 
     *  @return void
     */
    protected function declareRoutes(){
        $routes[] = [
            'router' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $this->routes = $routes;
    }
}
