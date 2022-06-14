<?php
namespace Model\Dto\Sokoban;

use Kernel\DataBase\Factory\Crud;



/**
 * Classe DTO Board.
 * 
 * @author thiba
 * @version 1.0
 * @package Model\Dto\Sokoban
 * @category DTO (Data Transfer Object)
 */
class Board extends Crud {

    /**
     * @var mixed Les propriétés de l'objet.
     */
    public $_name;
    public $board;
    public $width;
    public $height;
    

    /**
     * Constructeur de la classe.
     * 
     * @access public
     * @return void
     */
    function __construct(
        $_name = null,
        $board = null,
        $width = null,
        $height = null
    ) {
        $this->_name = $_name;
        $this->board = $board;
        $this->width = $width;
        $this->height = $height;
    }
	
}

?>