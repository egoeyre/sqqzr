<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function makedir( $dir ){  
 
        return  is_dir ( $dir ) or makedir(dirname( $dir )) and  mkdir ( $dir , 0777);
 
}