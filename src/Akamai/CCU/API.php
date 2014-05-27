<?php

namespace Akamai\CCU;

class API
{
    /**
     * @const
     */
    const BASE_URL = 'https://api.ccu.akamai.com';

    /**
     * @const
     */
    const QUEUE_PATH = '/ccu/v2/queues/default';

    /**
     * @var Request
     */
    protected $fetcher;

    public function __construct($username, $password)
    {
        $this->fetcher = new Fetcher($username, $password);
    }

    /**
     * @param string[] $items
     * @param string $type
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function purge($items, $type = 'arl')
    {
        $request = new Request($items, $type);
        if (!$request->isReadyToSubmit()) {
            throw new \Exception('Invalid purge request!');
        }

        $url = static::BASE_URL . static::QUEUE_PATH;
        $response = $this->fetcher->request($url, $request);

        return new Response\Purge($response);
    }

    public function status($progressUri)
    {
        if ($progressUri instanceof Response\Base) {
            $progressUri = $progressUri->progressUri;
        }

        $url = static::BASE_URL . $progressUri;

        $response = $this->fetcher->request($url);

        return new Response\Status($response);
    }

    public function length()
    {
        $url = static::BASE_URL . static::QUEUE_PATH;
        $response = $this->fetcher->request($url);
        return new Response\Length($response);
    }
}