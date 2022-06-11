<?php
namespace Api;

use Kernel\Debug\Error;
use Kernel\Communication\Rest;
use Kernel\Security\Vulnerability\Xss;
use Kernel\Security\Vulnerability\Csrf;
use Kernel\Security\Validation;
use Model\Dto\Sokoban\Map as SokobanMap;



/**
 * Module d'API Map.
 * 
 * @author thiba
 * @version 1.0
 * @package Api
 * @category API
 */
class Map extends Rest {

    /**
     * Appel via la méthode GET.
     * 
     * @param string $route La route de l'appel.
     * @param array $query Les paramètres de la route.
     * @param array $body Le corps de la requête.
     * @return mixed Résultat de l'appel.
     */
    function get($route, $query, $body) {
        $this->match('/maps', function() {
            $this->send(SokobanMap::all(), 0, 'Récupération des maps.');
        });
        $this->match('/maps/{id}', function() use ($query) {
            $id = $this->data($query, 'id');
            $obj = new SokobanMap($id);
            $this->send($obj->read(), 0, 'Récupération de la map.');
        });
    }


    /**
     * Appel via la méthode POST.
     * 
     * @param string $route La route de l'appel.
     * @param array $query Les paramètres de la route.
     * @param array $body Le corps de la requête.
     * @return mixed Résultat de l'appel.
     */
    function post($route, $query, $body) {
        $this->match('/maps', function() use ($body) {
            $map = $this->data($body, 'map');
            $obj = new SokobanMap(null, $map);
            $this->send($obj->create(), 0, 'Création d\'une map.');
        });
    }


    /**
     * Appel via la méthode PUT.
     * 
     * @param string $route La route de l'appel.
     * @param array $query Les paramètres de la route.
     * @param array $body Le corps de la requête.
     * @return mixed Résultat de l'appel.
     */
    function put($route, $query, $body) {
        $this->send(null, 0, 'Fonction non implémentée !', 500);
    }


    /**
     * Appel via la méthode DELETE.
     * 
     * @param string $route La route de l'appel.
     * @param array $query Les paramètres de la route.
     * @param array $body Le corps de la requête.
     * @return mixed Résultat de l'appel.
     */
    function delete($route, $query, $body) {
        $this->match('/maps/{id}', function() use ($query) {
            $id = $this->data($query, 'id');
            $obj = new SokobanMap($id);
            $this->send($obj->delete(), 0, 'Suppression d\'une map.');
        });
    }


    /**
     * Appel via la méthode PATCH.
     * 
     * @param string $route La route de l'appel.
     * @param array $query Les paramètres de la route.
     * @param array $body Le corps de la requête.
     * @return mixed Résultat de l'appel.
     */
    function patch($route, $query, $body) {
        $this->send(null, 0, 'Fonction non implémentée !', 500);
    }

}

?>