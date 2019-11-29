<?php
/**
 * Apigateway
 *
 * @category Jdcloud
 * @package  Jdcloud\Apigateway
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Apigateway;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with apigateway.
 *
 * @method \Jdcloud\Result queryAccessAuths(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccessAuthsAsync(array $args = [])
 * @method \Jdcloud\Result createAccessAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessAuthAsync(array $args = [])
 * @method \Jdcloud\Result checkAuthExist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkAuthExistAsync(array $args = [])
 * @method \Jdcloud\Result queryAccessAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccessAuthAsync(array $args = [])
 * @method \Jdcloud\Result updateAccessAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessAuthAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccessAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessAuthAsync(array $args = [])
 * @method \Jdcloud\Result queryBindGroupAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBindGroupAuthAsync(array $args = [])
 * @method \Jdcloud\Result bindGroupAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindGroupAuthAsync(array $args = [])
 * @method \Jdcloud\Result queryAuthGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAuthGroupListAsync(array $args = [])
 * @method \Jdcloud\Result authorizedApiGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizedApiGroupListAsync(array $args = [])
 * @method \Jdcloud\Result queryAccessKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccessKeysAsync(array $args = [])
 * @method \Jdcloud\Result createAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result checkKeyExist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkKeyExistAsync(array $args = [])
 * @method \Jdcloud\Result queryAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result updateAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result queryBindGroupKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBindGroupKeyAsync(array $args = [])
 * @method \Jdcloud\Result bindGroupKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindGroupKeyAsync(array $args = [])
 * @method \Jdcloud\Result queryKeyGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryKeyGroupListAsync(array $args = [])
 * @method \Jdcloud\Result queryApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryApisAsync(array $args = [])
 * @method \Jdcloud\Result createApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApisAsync(array $args = [])
 * @method \Jdcloud\Result checkApiNameExist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkApiNameExistAsync(array $args = [])
 * @method \Jdcloud\Result queryApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryApiAsync(array $args = [])
 * @method \Jdcloud\Result updateApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiAsync(array $args = [])
 * @method \Jdcloud\Result deleteApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiAsync(array $args = [])
 * @method \Jdcloud\Result updateApiByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiByNameAsync(array $args = [])
 * @method \Jdcloud\Result deleteApiByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiByNameAsync(array $args = [])
 * @method \Jdcloud\Result describeApiGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApiGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createApiGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiGroupAsync(array $args = [])
 * @method \Jdcloud\Result checkGroupNameExist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkGroupNameExistAsync(array $args = [])
 * @method \Jdcloud\Result describeApiGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApiGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyApiGroupAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyApiGroupAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteApiGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeIsDeployApiGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIsDeployApiGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createBackendConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackendConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeBackendConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackendConfigsAsync(array $args = [])
 * @method \Jdcloud\Result describeBackendConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackendConfigAsync(array $args = [])
 * @method \Jdcloud\Result updateBackendConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBackendConfigAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackendConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackendConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeploymentsAsync(array $args = [])
 * @method \Jdcloud\Result deploy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployAsync(array $args = [])
 * @method \Jdcloud\Result describeDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeploymentAsync(array $args = [])
 * @method \Jdcloud\Result offline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise offlineAsync(array $args = [])
 * @method \Jdcloud\Result batchOffline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchOfflineAsync(array $args = [])
 * @method \Jdcloud\Result queryKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryKeysAsync(array $args = [])
 * @method \Jdcloud\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \Jdcloud\Result resetKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetKeyAsync(array $args = [])
 * @method \Jdcloud\Result updateKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyAsync(array $args = [])
 * @method \Jdcloud\Result queryKeyInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryKeyInfoAsync(array $args = [])
 * @method \Jdcloud\Result queryRateLimitPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRateLimitPoliciesAsync(array $args = [])
 * @method \Jdcloud\Result createRateLimitPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRateLimitPolicyAsync(array $args = [])
 * @method \Jdcloud\Result checkPolicyName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkPolicyNameAsync(array $args = [])
 * @method \Jdcloud\Result queryRateLimitPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRateLimitPolicyAsync(array $args = [])
 * @method \Jdcloud\Result updateRateLimitPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRateLimitPolicyAsync(array $args = [])
 * @method \Jdcloud\Result deleteRateLimitPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRateLimitPolicyAsync(array $args = [])
 * @method \Jdcloud\Result queryBindGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBindGroupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result bindGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindGroupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result queryPolicyGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPolicyGroupListAsync(array $args = [])
 * @method \Jdcloud\Result describeRevisions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRevisionsAsync(array $args = [])
 * @method \Jdcloud\Result createRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRevisionAsync(array $args = [])
 * @method \Jdcloud\Result getRevisionIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRevisionIdsAsync(array $args = [])
 * @method \Jdcloud\Result checkRevisionExist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkRevisionExistAsync(array $args = [])
 * @method \Jdcloud\Result queryRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRevisionAsync(array $args = [])
 * @method \Jdcloud\Result modifyRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRevisionAsync(array $args = [])
 * @method \Jdcloud\Result deleteRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRevisionAsync(array $args = [])
 * @method \Jdcloud\Result querySubscriptionKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySubscriptionKeysAsync(array $args = [])
 * @method \Jdcloud\Result createSubscriptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionKeyAsync(array $args = [])
 * @method \Jdcloud\Result querySubscriptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySubscriptionKeyAsync(array $args = [])
 * @method \Jdcloud\Result updateSubscriptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionKeyAsync(array $args = [])
 * @method \Jdcloud\Result deleteSubscriptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionKeyAsync(array $args = [])
 * @method \Jdcloud\Result queryUcAccessKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryUcAccessKeysAsync(array $args = [])
 * @method \Jdcloud\Result checkPin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkPinAsync(array $args = [])
 * @method \Jdcloud\Result queryUserDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryUserDomainsAsync(array $args = [])
 * @method \Jdcloud\Result createUserDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserDomainAsync(array $args = [])
 * @method \Jdcloud\Result deleteUserDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserDomainAsync(array $args = [])
 */
class ApigatewayClient extends JdCloudClient
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
                        'service' => 'apigateway',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'apigateway'
            );
        };

        parent::__construct($args);
    }
}