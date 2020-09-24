<?php
/**
 * Redis
 *
 * @category Jdcloud
 * @package  Jdcloud\Redis
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Redis;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with redis.
 *
 * @method \Jdcloud\Result describeCacheInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createCacheInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeCacheInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyCacheInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheInstanceAttributeAsync(array $args = [])
 * @method \Jdcloud\Result deleteCacheInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyCacheInstanceClass(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheInstanceClassAsync(array $args = [])
 * @method \Jdcloud\Result resetCacheInstancePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetCacheInstancePasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceConfigAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeAnalysisTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnalysisTimeAsync(array $args = [])
 * @method \Jdcloud\Result modifyAnalysisTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAnalysisTimeAsync(array $args = [])
 * @method \Jdcloud\Result describeCacheAnalysisList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheAnalysisListAsync(array $args = [])
 * @method \Jdcloud\Result createCacheAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheAnalysisAsync(array $args = [])
 * @method \Jdcloud\Result describeCacheAnalysisResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheAnalysisResultAsync(array $args = [])
 * @method \Jdcloud\Result describeClientList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientListAsync(array $args = [])
 * @method \Jdcloud\Result describeClientIpDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientIpDetailAsync(array $args = [])
 * @method \Jdcloud\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Jdcloud\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBackupPolicyAsync(array $args = [])
 * @method \Jdcloud\Result restoreInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeDownloadUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDownloadUrlAsync(array $args = [])
 * @method \Jdcloud\Result describeClusterInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result modifyIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result describeSlowLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSlowLogAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceClass(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceClassAsync(array $args = [])
 * @method \Jdcloud\Result describeUserQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserQuotaAsync(array $args = [])
 * @method \Jdcloud\Result describeSpecConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpecConfigAsync(array $args = [])
 */
class RedisClient extends JdCloudClient
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
                        'service' => 'redis',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'redis'
            );
        };

        parent::__construct($args);
    }
}