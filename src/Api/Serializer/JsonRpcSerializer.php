<?php
namespace Jdcloud\Api\Serializer;

use Jdcloud\Api\Service;
use Jdcloud\CommandInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7;

/**
 * Prepares a JSON-RPC request for transfer.
 * @internal
 */
class JsonRpcSerializer
{
    /** @var JsonBody */
    private $jsonFormatter;
    
    /** @var ParamBuilder */
    private $paramFormatter;

    /** @var string */
    private $endpoint;

    /** @var Service */
    private $api;

    /** @var string */
    private $contentType;

    /**
     * @param Service  $api           Service description
     * @param string   $endpoint      Endpoint to connect to
     * @param JsonBody $jsonFormatter Optional JSON formatter to use
     */
    public function __construct(
        Service $api,
        $endpoint,
        JsonBody $jsonFormatter = null
    ) {
        $this->endpoint = $endpoint;
        $this->api = $api;
        $this->jsonFormatter = $jsonFormatter ?: new JsonBody($this->api);
        $this->paramFormatter = new ParamBuilder($api, $endpoint);
        $this->contentType = JsonBody::getContentType($api);
    }

    /**
     * When invoked with an Jdcloud command, returns a serialization array
     * containing "method", "uri", "headers", and "body" key value pairs.
     *
     * @param CommandInterface $command
     *
     * @return RequestInterface
     */
    public function __invoke(CommandInterface $command)
    {
        $name = $command->getName();
        $operation = $this->api->getOperation($name);
//         var_dump($operation->offsetGet("http"));
        $method = $operation['http']['method'];
        
//         print('getCommand');
//         var_dump($command -> toArray());
        $headers = ['Content-Type' => $this->contentType ];
        $extraHeaders = $command -> offsetGet('extraHeaders');
        if($extraHeaders != null) {
            $headers = array_merge($headers, $extraHeaders);
        }        
        
        $paramArray = $this->paramFormatter->build($command);
//         var_dump($paramArray);
        $requestUri = $this->endpoint.$operation['http']['requestUri'];
        if(strpos($requestUri, '{')) {
            foreach ($paramArray as $k => $v) {
                if(strpos($requestUri, '{'.$k.'}')) {
                    $requestUri = str_replace('{'.$k.'}', $v, $requestUri);
                    unset($paramArray[$k]);
                }
            }
        }
        
        if($method == "GET" || $method == "DELETE" || $method == "HEAD") {
            $param = Psr7\build_query($paramArray);
//             var_dump($param);
            $uri = Uri::composeComponents('', '', $requestUri, 
                $param, "");
            return new Request(
                $operation['http']['method'],
                $uri,
                $headers,
                null
                );
            
        }
        
        $uri = Uri::composeComponents('', '', $requestUri,
            "", "");
        return new Request(
            $operation['http']['method'],
            $uri,
            $headers,
            $this->jsonFormatter->build(
                $operation->getInput(),
                $command->toArray()
                )
            );
    }
}
