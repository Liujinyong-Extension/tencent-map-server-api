<h1 align="center"> tencent-map-server-api </h1>

<p align="center"> 腾讯地图服务端api.</p>


## Installing

```shell
$ composer require liujinyong/tencent-map-server-api
```

## Usage

```php
     require __DIR__ . '/vendor/autoload.php';


    $map    = new \Liujinyong\TencentMapServerApi\Map("腾讯地图的key");
     //获取货车路线规划&距离矩阵
    $result = $map->trucking([ "from" => "39.08738,117.12423","to"   => "39.126987,117.165665"]);
    
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liujinyong/tencent-map-server-api/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liujinyong/tencent-map-server-api/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT