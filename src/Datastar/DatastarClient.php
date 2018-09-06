<?php
/**
 * Datastar
 *
 * @category Jdcloud
 * @package  Jdcloud\Datastar
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Datastar;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with datastar.
 *
 * @method \Jdcloud\Result getProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProfileAsync(array $args = [])
 * @method \Jdcloud\Result getPackageId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPackageIdAsync(array $args = [])
 */
class DatastarClient extends JdCloudClient
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
                        'service' => 'datastar',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'datastar'
            );
        };

        parent::__construct($args);
    }
}