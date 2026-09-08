<?php
$num = 10;
if($num > 5) {
    var_dump('Bigger');
}

if($num > 5) 
    var_dump('Bigger');
} else {
    var_dump('Smaller');
}

$i = 1;

switch($i) {
    case 1:
        var_dump('yx');
        break;
    case 2:
        var_dump('kaks');
        break;
        case 3:
        case 4:
            var_dump('kolm neli');
            break;
        case 5:
            var_dump('viis');
            break;
        case 6:
            var_dump('kuus');
            break;
    default:
        var_dump('dunno');
}
