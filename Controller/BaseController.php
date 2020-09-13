<?php
class BaseController{
    const view_folder="View";
    protected function view($path){
        require (self::view_folder."/".$path.".php");

    }
}
