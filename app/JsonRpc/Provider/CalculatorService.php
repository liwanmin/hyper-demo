<?php

namespace App\JsonRpc\Provider;

use App\Interfaces\CalculatorServiceInterface;
use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class CalculatorService implements CalculatorServiceInterface
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function add(int $a, int $b): int
    {
        var_dump(2);
        // 这里是服务方法的具体实现
        return $a + $b;
    }
}
