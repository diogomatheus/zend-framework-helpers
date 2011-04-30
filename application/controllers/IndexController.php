<?php

class IndexController extends Zend_Controller_Action
{

    public function indexAction()
    {
        // cria uma string randômica através do método direct apenas com letras
        $primaryString = $helper = $this->_helper->generateRandom(14, true, false, false);

        // resgata o helper, retornando uma instância do helper
        $helper = $this->_helper->getHelper('generateRandom');
        // ou $helper = $this->_helper->generateRandom;
        // cria um password seguro através de um dos métodos do helper
        $secondString = $helper->hardPassword();
        // cria uma string numérica chamand o método numeric()
        $thirdString = $helper->numeric(10);

        // enviando os dados para view
        $this->view->assign('alphaString', $primaryString);
        $this->view->assign('hardPassword', $secondString);
        $this->view->assign('numericString', $thirdString);

        $this->view->assign('text', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus.');
    }

}