<?php
/**
 * Disk
 *
 * @category Jdcloud
 * @package  Jdcloud\Disk
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Disk;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with disk.
 *
 * @method \Jdcloud\Result describeDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDisksAsync(array $args = [])
 * @method \Jdcloud\Result createDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDisksAsync(array $args = [])
 * @method \Jdcloud\Result describeDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiskAsync(array $args = [])
 * @method \Jdcloud\Result modifyDiskAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDiskAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDiskAsync(array $args = [])
 * @method \Jdcloud\Result restoreDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDiskAsync(array $args = [])
 * @method \Jdcloud\Result extendDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise extendDiskAsync(array $args = [])
 * @method \Jdcloud\Result describeVolumesIgnoreServiceCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVolumesIgnoreServiceCodeAsync(array $args = [])
 * @method \Jdcloud\Result recoverDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recoverDiskAsync(array $args = [])
 * @method \Jdcloud\Result describeQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotaAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Jdcloud\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result deleteSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotsAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result modifySnapshotAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnapshotAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshotsCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsCapacityAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshotChain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotChainAsync(array $args = [])
 * @method \Jdcloud\Result createSnapshotPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotPolicyAsync(array $args = [])
 * @method \Jdcloud\Result updateSnapshotPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSnapshotPolicyAsync(array $args = [])
 * @method \Jdcloud\Result deleteSnapshotPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotPolicyAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshotPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotPoliciesAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapPolices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapPolicesAsync(array $args = [])
 * @method \Jdcloud\Result applySnapshotPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applySnapshotPoliciesAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshotPolicyDiskRelations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotPolicyDiskRelationsAsync(array $args = [])
 * @method \Jdcloud\Result describeSoldout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSoldoutAsync(array $args = [])
 */
class DiskClient extends JdCloudClient
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
                        'service' => 'disk',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'disk'
            );
        };

        parent::__construct($args);
    }
}