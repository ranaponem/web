<?php

function courseFullName(string $name, string $type){
    if(strtolower($type) == 'master')
        return "Master's in ".$name;
    
    else if(strtolower($type) == 'tesp')
        return "TeSP - ".$name;
    
    return $name;
}

function filterDisciplines(array $disciplines, int $year, int $semester): array{
    return array_values(array_filter($disciplines, function ($value) use ($year, $semester) {
        return $value->year == $year && $value->semester == $semester;
    }));
}