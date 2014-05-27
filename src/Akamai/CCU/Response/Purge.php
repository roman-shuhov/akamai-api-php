<?php

namespace Akamai\CCU\Response;

class Purge extends Base
{
    /**
     * @var string
     */
    const SUCCESS_CODE = 201;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var int
     */
    public $estimatedSeconds;

    /**
     * UUID of the purge
     *
     * @var string
     */
    public $purgeId;

    /**
     * Use the progressUri link to make Purge Status calls.
     *
     * @var string
     */
    public $progressUri;

    /**
     * field indicates how long to wait before calling Purge Status.
     *
     * @var int
     */
    public $pingAfterSeconds;

    /**
     * @var int
     */
    public $supportId;

    /**
     * indicates the specific error
     *
     * @var string
     */
    public $title;

    /**
     * Provides a URI to a verbose description which the API returns as an HTML document
     *
     * @var string
     */
    public $describedBy;
}