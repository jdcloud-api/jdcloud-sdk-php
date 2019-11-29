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
 * @method \Jdcloud\Result createUserPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserPoolAsync(array $args = [])
 * @method \Jdcloud\Result associateUserPoolClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateUserPoolClientAsync(array $args = [])
 * @method \Jdcloud\Result disassociateUserPoolClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateUserPoolClientAsync(array $args = [])
 * @method \Jdcloud\Result listUserPoolClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserPoolClientsAsync(array $args = [])
 * @method \Jdcloud\Result adminCreateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminCreateUserAsync(array $args = [])
 * @method \Jdcloud\Result adminGetUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminGetUserAsync(array $args = [])
 * @method \Jdcloud\Result adminUpdateUserAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminUpdateUserAttributeAsync(array $args = [])
 * @method \Jdcloud\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Jdcloud\Result adminSetUsersPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminSetUsersPasswordAsync(array $args = [])
 * @method \Jdcloud\Result adminEnableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminEnableUserAsync(array $args = [])
 * @method \Jdcloud\Result adminDisableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminDisableUserAsync(array $args = [])
 * @method \Jdcloud\Result adminDeleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminDeleteUserAsync(array $args = [])
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