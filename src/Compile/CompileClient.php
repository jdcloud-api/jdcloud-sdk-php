<?php
/**
 * Compile
 *
 * @category Jdcloud
 * @package  Jdcloud\Compile
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Compile;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with compile.
 *
 * @method \Jdcloud\Result createDemo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDemoAsync(array $args = [])
 * @method \Jdcloud\Result getJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobsAsync(array $args = [])
 * @method \Jdcloud\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobsAsync(array $args = [])
 * @method \Jdcloud\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \Jdcloud\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Jdcloud\Result startJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobAsync(array $args = [])
 * @method \Jdcloud\Result getBuildLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuildLogAsync(array $args = [])
 * @method \Jdcloud\Result getBuildStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuildStatusAsync(array $args = [])
 * @method \Jdcloud\Result getExternalLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExternalLinkAsync(array $args = [])
 * @method \Jdcloud\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 */
class CompileClient extends JdCloudClient
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
                        'service' => 'compile',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'compile'
            );
        };

        parent::__construct($args);
    }
}