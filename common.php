<?php
function escape($data){

    if ($data === null || $data === ''){
        return 'No date available';
    }
    
    if (strtotime($data)){
        $data = date('Y-m-d', strtotime($data));
    }

    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);

    return $data;
}
