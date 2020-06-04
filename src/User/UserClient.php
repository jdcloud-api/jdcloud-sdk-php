<?php
/**
 * User
 *
 * @category Jdcloud
 * @package  Jdcloud\User
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\User;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with user.
 *
 * @method \Jdcloud\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 */
class UserClient extends JdCloudClient
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
                        'service' => 'user',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'user'
            );
        };

        parent::__construct($args);
    }
}