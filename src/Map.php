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
         * @var \GuzzleHttp\Client $httpClient 请求客户端
         */
        protected $httpClient;
        /**
         * @var string 腾讯地图的key
         */
        protected $key;

        /**
         * @param $key string 开放平台的key
         */
        public function __construct($key = "")
        {
            $this->httpClient = new Client();

            $this->key = $key;

        }

        protected function tryHttp($url = "")
        {
            if ($url == "") {
                return false;
            }
            try {
                $res = $this->httpClient->get($url);
            } catch (Exception $e) {
                throw new \Exception("服务器内部错误");
            }

            return json_decode($res->getBody()->getContents(), 1);
        }

        /**
         * @param $param
         *  获取卡车形势的路线
         * @return false|mixed
         * author Brahma
         * trucking
         * @throws \Exception
         */
        public function trucking($param)
        {
            $url   = "https://apis.map.qq.com/ws/direction/v1/trucking";
            $param = is_array($param) ? http_build_query($param) : $param;

            $queryStr = $url . "?key=" . $this->key . "&" . $param;

            $result = $this->tryHttp($queryStr);

            return $result;
        }


    }