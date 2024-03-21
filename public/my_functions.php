<?php

function courseFullName(string $name, string $type){
    if(strtolower($type) == 'master')
        return "Master's in ".$name;
    
    else if(strtolower($type) == 'tesp')
        return "TeSP - ".$name;
    
    return $name;
}