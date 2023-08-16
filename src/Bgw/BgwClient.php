<?php
/**
 * Bgw
 *
 * @category Jdcloud
 * @package  Jdcloud\Bgw
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Bgw;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with bgw.
 *
 * @method \Jdcloud\Result modifyAdminStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAdminStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 */
class BgwClient extends JdCloudClient
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
                        'service' => 'bgw',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'bgw'
            );
        };

        parent::__construct($args);
    }
}