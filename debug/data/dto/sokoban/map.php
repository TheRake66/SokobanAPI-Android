<?php
namespace Model\Dto\Sokoban;

use Kernel\DataBase\Factory\Crud;



/**
 * Classe DTO Map.
 * 
 * @author thiba
 * @version 1.0
 * @package Model\Dto\Sokoban
 * @category DTO (Data Transfer Object)
 */
class Map extends Crud {

    /**
     * @var mixed Les propriétés.
     */
    public $_map_id;
    public $map_board;
    

    /**
     * Constructeur de la classe.
     * 
     * @access public
     * @return void
     */
    function __construct(
        $map_id = null,
        $map_board = null
    ) {
        $this->_map_id = $map_id;
        $this->map_board = $map_board;
    }
	
}

?>