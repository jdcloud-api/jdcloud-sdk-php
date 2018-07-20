<?php
/**
 * Iam
 *
 * @category Jdcloud
 * @package  Jdcloud\Iam
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iam;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iam.
 *
 * @method \Jdcloud\Result createPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPermissionAsync(array $args = [])
 * @method \Jdcloud\Result describePermissionDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePermissionDetailAsync(array $args = [])
 * @method \Jdcloud\Result updatePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePermissionAsync(array $args = [])
 * @method \Jdcloud\Result describePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePermissionsAsync(array $args = [])
 * @method \Jdcloud\Result describeSubUserPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubUserPermissionsAsync(array $args = [])
 * @method \Jdcloud\Result addPermissionsToSubUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPermissionsToSubUserAsync(array $args = [])
 * @method \Jdcloud\Result removePermissionOfSubUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionOfSubUserAsync(array $args = [])
 * @method \Jdcloud\Result getSessionToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionTokenAsync(array $args = [])
 * @method \Jdcloud\Result verifySessionToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifySessionTokenAsync(array $args = [])
 * @method \Jdcloud\Result createSubuser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubuserAsync(array $args = [])
 * @method \Jdcloud\Result describeUserAccessKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAccessKeysAsync(array $args = [])
 * @method \Jdcloud\Result createUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result enabledUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enabledUserAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result disabledUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disabledUserAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result deleteUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAccessKeyAsync(array $args = [])
 */
class IamClient extends JdcloudClient
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
                        'service' => 'iam',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iam'
            );
        };

        parent::__construct($args);
    }
}