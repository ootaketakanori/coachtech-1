<?php
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
    }
    echo $i . '<br />';
    $i++;
}
