<?php
/**
 * Dbs
 *
 * @category Jdcloud
 * @package  Jdcloud\Dbs
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dbs;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dbs.
 *
 * @method \Jdcloud\Result describeBackupPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPlansAsync(array $args = [])
 * @method \Jdcloud\Result createBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupPlanAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupPlanAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPlanAttributesAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupPlanAsync(array $args = [])
 * @method \Jdcloud\Result createLogicalBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogicalBackupAsync(array $args = [])
 * @method \Jdcloud\Result createPhysicalBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPhysicalBackupAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 */
class DbsClient extends JdCloudClient
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
                        'service' => 'dbs',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dbs'
            );
        };

        parent::__construct($args);
    }
}