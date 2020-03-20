<?php
/**
 * Yundingdatapush
 *
 * @category Jdcloud
 * @package  Jdcloud\Yundingdatapush
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Yundingdatapush;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with yundingdatapush.
 *
 * @method \Jdcloud\Result describeDatapushVenders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatapushVendersAsync(array $args = [])
 * @method \Jdcloud\Result addDatapushVender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDatapushVenderAsync(array $args = [])
 * @method \Jdcloud\Result deleteDatapushVender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatapushVenderAsync(array $args = [])
 * @method \Jdcloud\Result describeRdsInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createOrderSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrderSyncAsync(array $args = [])
 */
class YundingdatapushClient extends JdCloudClient
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
                        'service' => 'yundingdatapush',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'yundingdatapush'
            );
        };

        parent::__construct($args);
    }
}