<?php
/**
 * Quota
 *
 * @category Jdcloud
 * @package  Jdcloud\Quota
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Quota;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with quota.
 *
 * @method \Jdcloud\Result verifyUserQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyUserQuotaAsync(array $args = [])
 * @method \Jdcloud\Result getUserQuotaDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserQuotaDetailAsync(array $args = [])
 */
class QuotaClient extends JdCloudClient
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
                        'service' => 'quota',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'quota'
            );
        };

        parent::__construct($args);
    }
}