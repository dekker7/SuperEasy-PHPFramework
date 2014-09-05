<?php

/**
 * Base OverloadedView
 *
 * @author dionbosschieter
 */
abstract class BaseView
{
    protected $_model;
    protected $_controller;

    public function __construct($model, $controller)
    {
        $this->_controller = $controller;
        $this->_model = $model;
    }

    public function renderHeader()
    {
        $this->_renderTemplate($this->_model->header);
    }

    public function renderFooter()
    {
        $this->_renderTemplate($this->_model->footer);
    }

    public function render()
    {
        $this->renderHeader();
        $this->renderContent();
        $this->renderFooter();
    }



    protected function _renderTemplate($templatefile)
    {
        include 'templates/'.$templatefile;
    }


    abstract public function renderContent();
}
