<?
    Class Mainpage{
        function __construct($core){
            $this->core = $core;
            $this->core->setTemplate('main.tpl');
            $this->core->page['mode']           = 'mainpage';
        }
    };

    $core->controller = new Mainpage($core);