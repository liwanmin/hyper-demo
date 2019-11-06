<?php

namespace App\JsonRpc;

use App\Interfaces\CalculatorServiceInterface;
use Hyperf\RpcClient\AbstractServiceClient;

class CalculatorService extends AbstractServiceClient implements CalculatorServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'CalculatorService';

    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';

    public function add(int $a, int $b): int
    {
        var_dump(1);
        return $this->__request(__FUNCTION__, compact('a', 'b'));

    }
}
