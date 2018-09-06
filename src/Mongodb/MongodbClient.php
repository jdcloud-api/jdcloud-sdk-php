<?php
/**
 * Mongodb
 *
 * @category Jdcloud
 * @package  Jdcloud\Mongodb
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Mongodb;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with mongodb.
 *
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSpecAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result restoreInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeFlavors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlavorsAsync(array $args = [])
 * @method \Jdcloud\Result describeAvailableZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailableZonesAsync(array $args = [])
 * @method \Jdcloud\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Jdcloud\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \Jdcloud\Result backupDownloadURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise backupDownloadURLAsync(array $args = [])
 * @method \Jdcloud\Result describeSecurityIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityIpsAsync(array $args = [])
 * @method \Jdcloud\Result modifySecurityIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySecurityIpsAsync(array $args = [])
 */
class MongodbClient extends JdCloudClient
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
                        'service' => 'mongodb',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'mongodb'
            );
        };

        parent::__construct($args);
    }
}