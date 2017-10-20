<?php

namespace Phalsion\RpcFramework\Bridge\Redis;


use Phalsion\RpcFramework\Component\DependencyInjectionRegister\DiRegister;
use Predis\Client;

/**
 * Class RedisRegister
 *
 * @author  liqi created_at 2017/10/20下午1:36
 * @package \Phalsion\RpcFramework\Bridge\Redis
 */
class RedisRegister extends DiRegister
{

    /**
     * @inheritdoc
     */
    public function register( $reload = false )
    {
        $setting = $this->getParameter('redis');
        $this->getDI()->setShared('redis', function () use ( $setting ) {

            return new Client($setting->toArray());
        });
    }
}
