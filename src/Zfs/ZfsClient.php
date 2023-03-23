<?php
/**
 * Zfs
 *
 * @category Jdcloud
 * @package  Jdcloud\Zfs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Zfs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with zfs.
 *
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
 * @method \Jdcloud\Result describeMountedClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountedClientsAsync(array $args = [])
 * @method \Jdcloud\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \Jdcloud\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result describeMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetAsync(array $args = [])
 * @method \Jdcloud\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 */
class ZfsClient extends JdCloudClient
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
                        'service' => 'zfs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'zfs'
            );
        };

        parent::__construct($args);
    }
}