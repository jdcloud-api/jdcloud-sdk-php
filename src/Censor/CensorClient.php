<?php
/**
 * Censor
 *
 * @category Jdcloud
 * @package  Jdcloud\Censor
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Censor;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with censor.
 *
 * @method \Jdcloud\Result imageScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise imageScanAsync(array $args = [])
 * @method \Jdcloud\Result asyncImageScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise asyncImageScanAsync(array $args = [])
 * @method \Jdcloud\Result imageResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise imageResultsAsync(array $args = [])
 * @method \Jdcloud\Result textScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise textScanAsync(array $args = [])
 */
class CensorClient extends JdCloudClient
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
                        'service' => 'censor',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'censor'
            );
        };

        parent::__construct($args);
    }
}