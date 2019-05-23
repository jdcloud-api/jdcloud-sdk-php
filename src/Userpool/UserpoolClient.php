<?php
/**
 * Userpool
 *
 * @category Jdcloud
 * @package  Jdcloud\Userpool
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Userpool;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with userpool.
 *
 * @method \Jdcloud\Result adminGetUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminGetUsersAsync(array $args = [])
 * @method \Jdcloud\Result adminCreateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminCreateUserAsync(array $args = [])
 * @method \Jdcloud\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Jdcloud\Result adminSetUsersPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminSetUsersPasswordAsync(array $args = [])
 */
class UserpoolClient extends JdCloudClient
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
                        'service' => 'userpool',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'userpool'
            );
        };

        parent::__construct($args);
    }
}