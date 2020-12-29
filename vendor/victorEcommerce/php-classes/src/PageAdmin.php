<?php

    namespace VictorEcommerce;
    use Rain\Tpl;

    class PageAdmin extends Page{

        public function __construct($opts = array(), $tpl_directory = "/views/admin/"){
            parent::__construct($opts, $tpl_directory);
        }

    }