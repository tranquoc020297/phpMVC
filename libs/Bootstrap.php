<?php
class Bootstrap{
    public function __construct(){
        //1. router
        $tokens = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));

        //2. Dispatcher
        if(count($tokens) == 2):
            require_once('app/Controllers/PageController.php');
            $home = new PageController;
            $home->index();
        else:
            $controllerName = ucfirst($tokens[2].'Controller');
            if(file_exists('app/Controllers/'.$controllerName .'.php')):
                require_once('app/Controllers/'.$controllerName .'.php');
                $controller = new $controllerName;
                if(isset($tokens[4])):
                    $request = $tokens[4];
                endif;
                if(isset($tokens[3])):
                    $action = strtok($tokens[3],'?');
                    $controller->{$action}($request?? null);
                else:
                    $controller->index($request ?? null);
                endif;
            endif;
        endif;
    }
}