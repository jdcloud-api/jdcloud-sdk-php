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

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iam.
 *
 * @method \Jdcloud\Result enableSubUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSubUserAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result disableSubUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSubUserAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result deleteSubUserAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubUserAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeGroupSubUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupSubUsersAsync(array $args = [])
 * @method \Jdcloud\Result describeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttachedGroupPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttachedGroupPoliciesAsync(array $args = [])
 * @method \Jdcloud\Result detachGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachGroupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result attachGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachGroupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result removeSubUserFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeSubUserFromGroupAsync(array $args = [])
 * @method \Jdcloud\Result addSubUserToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addSubUserToGroupAsync(array $args = [])
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
 * @method \Jdcloud\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \Jdcloud\Result describePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePolicyAsync(array $args = [])
 * @method \Jdcloud\Result updatePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePolicyAsync(array $args = [])
 * @method \Jdcloud\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \Jdcloud\Result updatePolicyDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePolicyDescriptionAsync(array $args = [])
 * @method \Jdcloud\Result describePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePoliciesAsync(array $args = [])
 * @method \Jdcloud\Result createRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoleAsync(array $args = [])
 * @method \Jdcloud\Result describeRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoleAsync(array $args = [])
 * @method \Jdcloud\Result deleteRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoleAsync(array $args = [])
 * @method \Jdcloud\Result updateAssumeRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssumeRolePolicyAsync(array $args = [])
 * @method \Jdcloud\Result describeRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRolesAsync(array $args = [])
 * @method \Jdcloud\Result attachRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachRolePolicyAsync(array $args = [])
 * @method \Jdcloud\Result detachRolePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachRolePolicyAsync(array $args = [])
 * @method \Jdcloud\Result describeRolePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRolePoliciesAsync(array $args = [])
 * @method \Jdcloud\Result createSubUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubUserAsync(array $args = [])
 * @method \Jdcloud\Result describeSubUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubUserAsync(array $args = [])
 * @method \Jdcloud\Result updateSubUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubUserAsync(array $args = [])
 * @method \Jdcloud\Result deleteSubUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubUserAsync(array $args = [])
 * @method \Jdcloud\Result describeSubUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubUsersAsync(array $args = [])
 * @method \Jdcloud\Result describeSubUserGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubUserGroupsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttachedSubUserPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttachedSubUserPoliciesAsync(array $args = [])
 * @method \Jdcloud\Result detachSubUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachSubUserPolicyAsync(array $args = [])
 * @method \Jdcloud\Result attachSubUserPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachSubUserPolicyAsync(array $args = [])
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
class IamClient extends JdCloudClient
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