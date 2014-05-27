<?php

namespace Akamai\CCU;

class Fetcher
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var password
     */
    protected $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @param string $url
     * @param null|string $requestBody
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function request($url, $requestBody = null)
    {
        if (!function_exists('curl_init')) {
            throw new \Exception('Curl extension is not enabled! Unable to complete request!');
        }

        $handler = curl_init();

        curl_setopt($handler, CURLOPT_URL, $url);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handler, CURLOPT_USERAGENT, 'akamai-API PHP-Client');
        curl_setopt($handler, CURLOPT_USERPWD, $this->username . ':' . $this->password);

        if (!is_null($requestBody)) {
            if (!is_string($requestBody)) {
                $requestBody = json_encode($requestBody);
            }
            curl_setopt($handler, CURLOPT_POSTFIELDS, $requestBody);
        }

        curl_setopt($handler, CURLOPT_HTTPHEADER, array(
            "Content-Type:application/json"
        ));

        try {
            $content = @curl_exec($handler);
        } catch (\Exception $exception) {
            throw new \Exception('Unable to execute request -->' . $requestBody . '<-- to the url -->' . $url . '<--',
                $exception);
        }

        return $content;
    }
}