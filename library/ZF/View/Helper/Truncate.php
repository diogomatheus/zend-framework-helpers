<?php
/**
 * Truncate helper
 *
 * @desc Verifica e corta uma string se for necessário
 * @uses Zend_View_Interface
 */
class Zend_View_Helper_Truncate {
	/**
	 * @var Zend_View_Interface
	 */
	public $view;
	/**
	 * @var  string $text
	 */
	private $resultado;

	/**
	 * trucante
	 *
	 * @desc Verifica e corta uma string se for necessário
	 * @return string $text
	 */
	public function truncate( $text = '', $length = 32, $character = "&hellip;" ) {
            if(strlen($text) <= $length)
                return $text;

            $this->resultado  = substr($text, 0, $length-1);
            $this->resultado .= $character;
            
            return $this->resultado;
	}

	/**
	 * Sets the view field
	 * @param $view Zend_View_Interface
	 */
	public function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}
}