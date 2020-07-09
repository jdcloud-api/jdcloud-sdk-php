<?php
/**
 * Asset
 *
 * @category Jdcloud
 * @package  Jdcloud\Asset
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Asset;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with asset.
 *
 * @method \Jdcloud\Result describeAccountAmount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAmountAsync(array $args = [])
 * @method \Jdcloud\Result modifyBalanceWarningInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBalanceWarningInfoAsync(array $args = [])
 */
class AssetClient extends JdCloudClient
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
                        'service' => 'asset',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'asset'
            );
        };

        parent::__construct($args);
    }
}