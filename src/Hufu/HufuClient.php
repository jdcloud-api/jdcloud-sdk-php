<?php
/**
 * Hufu
 *
 * @category Jdcloud
 * @package  Jdcloud\Hufu
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Hufu;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with hufu.
 *
 * @method \Jdcloud\Result deploy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployAsync(array $args = [])
 * @method \Jdcloud\Result describeDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeploymentAsync(array $args = [])
 * @method \Jdcloud\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
 * @method \Jdcloud\Result isEncryptData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isEncryptDataAsync(array $args = [])
 * @method \Jdcloud\Result queryAccessLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccessLogAsync(array $args = [])
 */
class HufuClient extends JdCloudClient
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
                        'service' => 'hufu',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'hufu'
            );
        };

        parent::__construct($args);
    }
}