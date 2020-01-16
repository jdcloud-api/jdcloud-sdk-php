<?php
/**
 * Vqd
 *
 * @category Jdcloud
 * @package  Jdcloud\Vqd
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Vqd;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with vqd.
 *
 * @method \Jdcloud\Result setCallback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCallbackAsync(array $args = [])
 * @method \Jdcloud\Result queryCallback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCallbackAsync(array $args = [])
 * @method \Jdcloud\Result submitVqdTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitVqdTaskAsync(array $args = [])
 * @method \Jdcloud\Result batchSubmitVqdTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSubmitVqdTasksAsync(array $args = [])
 * @method \Jdcloud\Result listVqdTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVqdTasksAsync(array $args = [])
 * @method \Jdcloud\Result getVqdTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVqdTaskAsync(array $args = [])
 * @method \Jdcloud\Result deleteVqdTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVqdTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryVqdTaskResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryVqdTaskResultAsync(array $args = [])
 * @method \Jdcloud\Result batchDeleteVqdTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteVqdTasksAsync(array $args = [])
 * @method \Jdcloud\Result listVqdTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVqdTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createVqdTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVqdTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getVqdTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVqdTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateVqdTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVqdTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteVqdTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVqdTemplateAsync(array $args = [])
 */
class VqdClient extends JdCloudClient
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
                        'service' => 'vqd',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'vqd'
            );
        };

        parent::__construct($args);
    }
}