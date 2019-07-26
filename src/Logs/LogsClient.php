<?php
/**
 * Logs
 *
 * @category Jdcloud
 * @package  Jdcloud\Logs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Logs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with logs.
 *
 * @method \Jdcloud\Result describeLogdCA(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogdCAAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceCollectConfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceCollectConfsAsync(array $args = [])
 * @method \Jdcloud\Result put(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAsync(array $args = [])
 */
class LogsClient extends JdCloudClient
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
                        'service' => 'logs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'logs'
            );
        };

        parent::__construct($args);
    }
}