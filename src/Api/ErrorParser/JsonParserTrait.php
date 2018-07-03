<?php
namespace Jdcloud\Api\ErrorParser;

use Jdcloud\Api\Parser\PayloadParserTrait;
use Psr\Http\Message\ResponseInterface;

/**
 * Provides basic JSON error parsing functionality.
 */
trait JsonParserTrait
{
    use PayloadParserTrait;

    private function genericHandler(ResponseInterface $response)
    {
        $requestId = (string) $response->getHeaderLine('x-jdcloud-requestId');
        $code = (string) $response->getStatusCode();
        $bizCode = null;
        $bizStatus = null;
        $bizMessage = null;
        $body = $this->parseJson($response->getBody());
        if ($body != null) {
            if ($body['requestId'] != null) {
                $requestId = $body['requestId'];
            }
            if ($body['error'] != null) {
                $bizCode = $body['error']['code'];
                $bizStatus = $body['error']['status'];
                $bizMessage = $body['error']['message'];
            }                
        }

        return [
            'requestId'  => $requestId,
            'code'        => $bizCode,
            'status'        => $bizStatus,
            'message'     => $bizMessage,
            'type'        => $code[0] == '4' ? 'client' : 'server',
            'parsed'      => $this->parseJson($response->getBody())
        ];
    }
}
