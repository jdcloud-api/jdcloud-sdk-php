<?php
/**
 * Dts
 *
 * @category Jdcloud
 * @package  Jdcloud\Dts
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dts;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dts.
 *
 * @method \Jdcloud\Result batchOperateTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchOperateTasksAsync(array $args = [])
 * @method \Jdcloud\Result describeTransmissionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTransmissionTasksAsync(array $args = [])
 * @method \Jdcloud\Result createTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result describeTransmissionTaskAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTransmissionTaskAttributesAsync(array $args = [])
 * @method \Jdcloud\Result deleteTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result describePreCheckResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePreCheckResultAsync(array $args = [])
 * @method \Jdcloud\Result preCheckTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise preCheckTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result skipPreCheckItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise skipPreCheckItemAsync(array $args = [])
 * @method \Jdcloud\Result configureTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result startTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result stopTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result suspendTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise suspendTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result resumeTransmissionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeTransmissionTaskAsync(array $args = [])
 * @method \Jdcloud\Result modifyTransmissionTaskName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTransmissionTaskNameAsync(array $args = [])
 * @method \Jdcloud\Result describeTransmissionObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTransmissionObjectAsync(array $args = [])
 * @method \Jdcloud\Result describeTransmissionLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTransmissionLogAsync(array $args = [])
 * @method \Jdcloud\Result connectivityTest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise connectivityTestAsync(array $args = [])
 * @method \Jdcloud\Result listCloudInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCloudInstancesAsync(array $args = [])
 * @method \Jdcloud\Result getCloudInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudInstanceAsync(array $args = [])
 * @method \Jdcloud\Result listSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \Jdcloud\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \Jdcloud\Result listTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTopicsAsync(array $args = [])
 * @method \Jdcloud\Result getTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \Jdcloud\Result listInstanceClasses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceClassesAsync(array $args = [])
 * @method \Jdcloud\Result listTaskProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTaskProgressAsync(array $args = [])
 * @method \Jdcloud\Result getTaskProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTaskProgressAsync(array $args = [])
 * @method \Jdcloud\Result listProcesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProcessesAsync(array $args = [])
 */
class DtsClient extends JdCloudClient
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
                        'service' => 'dts',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dts'
            );
        };

        parent::__construct($args);
    }
}