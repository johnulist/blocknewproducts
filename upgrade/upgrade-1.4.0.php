<?php

if (!defined('_PS_VERSION_')) {
    return;
}

function upgrade_module_1_4_0($object)
{
    return ($object->registerHook('addproduct') && $object->registerHook('updateproduct') && $object->registerHook('deleteproduct'));
}
