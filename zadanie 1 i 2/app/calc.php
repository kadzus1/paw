<?php
require_once dirname(__FILE__).'/../config.php';
$mess = array();
if (isset($_REQUEST['x']) && ($_REQUEST['y']) && ($_REQUEST['operacja'])){
    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];
    $op = $_REQUEST['operacja'];
    
        if(empty($x)) $mess[]='Nie';
        if(!is_numeric($x)) $mess[]='Nie jets liczbą';
        
        if(empty($y)) $mess[]='Nie';
        if(!is_numeric($y)) $mess[]='Nie jets liczbą';
        
        if($op!='plus' && $op!='minus' && $op!='razy' && $op!='przez') $mess[]='Bład.';
        
        if(count($mess)==0) {
                if($op=='plus') $wynik=$x+$y;
                elseif ($op=='minus') $wynik=$x-$y;
                elseif ($op=='razy') $wynik=$x*$y;
                else $wynik=$x/$y;
        }
}

        
include 'calc_view.php';
