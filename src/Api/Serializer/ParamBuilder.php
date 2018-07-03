<?php
namespace Jdcloud\Api\Serializer;

use Jdcloud\Api\Service;
use Jdcloud\CommandInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

/**
 * Serializes a query protocol request.
 * @internal
 */
class ParamBuilder
{
    private $endpoint;
    private $api;
    private $paramBuilder;

    public function __construct(
        Service $api,
        $endpoint,
        callable $paramBuilder = null
    ) {
        $this->api = $api;
        $this->endpoint = $endpoint;
        $this->paramBuilder = $paramBuilder ?: new QueryParamBuilder();
    }

    /**
     * When invoked with an Jdcloud command, returns a serialization array
     * containing "method", "uri", "headers", and "body" key value pairs.
     *
     * @param CommandInterface $command
     *
     * @return RequestInterface
     */
    public function build(CommandInterface $command)
    {
        $operation = $this->api->getOperation($command->getName());

        $params = $command->toArray();
  
        $data = call_user_func(
            $this->paramBuilder,
            $operation->getInput(),
            $params
            );
        
        return $data;
    }
}
