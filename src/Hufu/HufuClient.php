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
 * @method \Jdcloud\Result queryApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryApisAsync(array $args = [])
 * @method \Jdcloud\Result modifyRouterByLower(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRouterByLowerAsync(array $args = [])
 * @method \Jdcloud\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
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