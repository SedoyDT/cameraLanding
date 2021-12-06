<?php


class Controller {

    public $model;
    public $view;


    public function __construct()
    {
        $this->view = new View();
    }

    /**
     *  Действие по умолчанию,
     *  его мы перекроем при реализации классов потомков
     */
    public function action_index()
    {

    }

}
