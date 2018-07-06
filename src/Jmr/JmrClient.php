<?php
namespace Jdcloud\Jmr;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jmr.
 *
 * @method \Jdcloud\Result createClusterInNewNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterInNewNetworkAsync(array $args = [])
 * @method \Jdcloud\Result showClusterDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise showClusterDetailsAsync(array $args = [])
 * @method \Jdcloud\Result releaseCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseClusterAsync(array $args = [])
 */
class JmrClient extends JdcloudClient
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
                        'service' => 'jmr',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jmr'
            );
        };

        parent::__construct($args);
    }
}