<?php
/**
 * User: GetcharZp
 * Date: 2021/6/21 22:43
 */

//dir('.')->read();

$d = dir('.');
while ($filename = $d->read()) {
    echo $filename . PHP_EOL;
}

$d->close();

