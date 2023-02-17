<?php
    /**
     * Created by PhpStorm
     * @package Liujinyong\TencentMapServerApi
     * User: Brahma
     * Date: 2023/2/17
     * Time: 08:56
     */

    namespace Liujinyong\TencentMapServerApi;

    use GuzzleHttp\Client;

    class Map
    {
        /**
         * 寄存url
         */
        const BASEURL = "";
        /**
         * @var \GuzzleHttp\Client $httpClient 请求客户端
         */
        protected $httpClient;
        /**
         * @var string 腾讯地图的key
         */
        protected $key;

        public function __construct($key = "")
        {
            $this->httpClient = new Client();

            $this->key = $key;

        }

        protected function tryHttp()
        {
            try {
                $res = $this->httpClient->post($this->host, []);
            } catch (Exception $e) {
            }

            return json_decode($res->getBody()->getContents(), 1);
        }


    }