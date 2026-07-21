<?php
/**
 * Jpfs
 *
 * @category Jdcloud
 * @package  Jdcloud\Jpfs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jpfs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jpfs.
 *
 * @method \Jdcloud\Result describeAccessGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createAccessGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessGroupAsync(array $args = [])
 * @method \Jdcloud\Result modifyAccessGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAccessGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccessGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeAccessRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessRulesAsync(array $args = [])
 * @method \Jdcloud\Result createAccessRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyAccessRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAccessRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccessRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeProtocolMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtocolMountTargetsAsync(array $args = [])
 * @method \Jdcloud\Result createProtocolMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtocolMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result describeAuthorizedMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuthorizedMountTargetsAsync(array $args = [])
 * @method \Jdcloud\Result createAuthorizedMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthorizedMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result deleteProtocolMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtocolMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result describeProtocolServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtocolServicesAsync(array $args = [])
 * @method \Jdcloud\Result createProtocolService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtocolServiceAsync(array $args = [])
 * @method \Jdcloud\Result deleteProtocolService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtocolServiceAsync(array $args = [])
 * @method \Jdcloud\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \Jdcloud\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \Jdcloud\Result describeFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemAsync(array $args = [])
 * @method \Jdcloud\Result modifyFileSystemAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyFileSystemAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \Jdcloud\Result extendFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise extendFileSystemAsync(array $args = [])
 * @method \Jdcloud\Result userFileSystemQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise userFileSystemQuotaAsync(array $args = [])
 * @method \Jdcloud\Result queryMountCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMountCommandAsync(array $args = [])
 * @method \Jdcloud\Result listInstancesDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstancesDetailAsync(array $args = [])
 * @method \Jdcloud\Result getFSClusterInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFSClusterInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \Jdcloud\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result describeMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result listAllProtocolMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllProtocolMountTargetsAsync(array $args = [])
 */
class JpfsClient extends JdCloudClient
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
                        'service' => 'jpfs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jpfs'
            );
        };

        parent::__construct($args);
    }
}