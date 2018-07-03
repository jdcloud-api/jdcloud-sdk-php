<?php
namespace Jdcloud\Streambus;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with streambus.
 *
 * @method \Jdcloud\Result getTopicList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopicListAsync(array $args = [])
 * @method \Jdcloud\Result addTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTopicAsync(array $args = [])
 * @method \Jdcloud\Result updateTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTopicAsync(array $args = [])
 */
class StreambusClient extends JdcloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'streambus',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'streambus'
            );
        };

        parent::__construct($args);
    }
}