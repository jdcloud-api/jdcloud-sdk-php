<?php
/**
 * Flowlog
 *
 * @category Jdcloud
 * @package  Jdcloud\Flowlog
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Flowlog;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with flowlog.
 *
 * @method \Jdcloud\Result describeFlowLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlowLogsAsync(array $args = [])
 * @method \Jdcloud\Result createFlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFlowLogAsync(array $args = [])
 * @method \Jdcloud\Result describeFlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlowLogAsync(array $args = [])
 * @method \Jdcloud\Result modifyFlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyFlowLogAsync(array $args = [])
 * @method \Jdcloud\Result deleteFlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFlowLogAsync(array $args = [])
 * @method \Jdcloud\Result startFlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFlowLogAsync(array $args = [])
 * @method \Jdcloud\Result stopFlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFlowLogAsync(array $args = [])
 * @method \Jdcloud\Result addCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result removeCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeCollectResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotaAsync(array $args = [])
 */
class FlowlogClient extends JdCloudClient
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
                        'service' => 'flowlog',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'flowlog'
            );
        };

        parent::__construct($args);
    }
}