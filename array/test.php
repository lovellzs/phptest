<?php
$cars=array("Volvo","BMW","Toyota");

echo count( $cars ).PHP_EOL;

function isBlank($object)
{
    if (is_null($object) || '' === $object || (is_array($object) && count($object) < 1)) {
        return true;
    }
    return empty($object);
}
echo isBlank(false).PHP_EOL;


echo strlen('XsJjUi1VLDnRKgqLJxqqCJ36QcQd7gLw9U').PHP_EOL;


