<?php

namespace Akamai\CCU\Response;

class Length extends Base
{
    /**
     * Provides the approximate number of outstanding requests
     *
     * @var int
     */
    public $queueLength;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $supportId;
}