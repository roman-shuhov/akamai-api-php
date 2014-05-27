<?php

namespace Akamai\CCU\Response;

class Status extends Base
{
    /**
     * The seconds estimated for request completion at the time the purge request was received
     *
     * @var int
     */
    public $originalEstimatedSeconds;

    /**
     * A link to use in a GET request for status information on a specific purge request
     *
     * @var string
     */
    public $progressUri;

    /**
     * The length of the purge queue at the time the purge request was received
     *
     * @var string
     */
    public $originalQueueLength;

    /**
     * The ID of the purge reques
     *
     * @var srting
     */
    public $purgeId;

    /**
     * The reference provided to Customer Care when needed
     *
     * @var string
     */
    public $supportId;

    /**
     * indicates the time the request was completed
     *
     * @var null|string
     */
    public $completionTime;

    /**
     * The authorized user who submitted the request
     *
     * @var string
     */
    public $submittedBy;

    /**
     * Returns Done, In-Progress, or Unknown. Unknown indicates the request ID is invalid,
     * the request was very recently submitted, or the request was completed more than several days ago
     *
     * @var string
     */
    public $purgeStatus;

    /**
     * @var string
     */
    public $submissionTime;

    /**
     * The minimum amount of time to wait before calling the Purge Status API
     *
     * @var int
     */
    public $pingAfterSeconds;
}