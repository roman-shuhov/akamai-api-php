<?php

namespace Akamai\CCU;

class Request
{
    public $objects;

    public $type;

    public function __construct($objects, $type = null) {
        $this->objects = is_array($objects) ? $objects : array($objects);
        if (in_array($type, array('arl', 'cpcode'))) {
            $this->type = $type;
        }
    }

    public function isReadyToSubmit()
    {
        return !empty($this->objects);
    }
}