<?php
namespace Jdcloud\Disk;

use Jdcloud\JdcloudClient;
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
 * @method \Jdcloud\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Jdcloud\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result describeSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotAsync(array $args = [])
 * @method \Jdcloud\Result modifySnpAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnpAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 */
class DiskClient extends JdcloudClient
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