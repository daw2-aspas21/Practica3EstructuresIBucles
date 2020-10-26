<?php

$mesactual = date('m');

if ($mesactual>='10'&& $mesactual<='12'){
    echo "Good Winter";
}elseif($mesactual>='06'&& $mesactual<='10'){
    echo "Good Summer";
}

?>