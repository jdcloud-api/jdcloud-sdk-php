<?php
/**
 * Pipeline
 *
 * @category Jdcloud
 * @package  Jdcloud\Pipeline
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Pipeline;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with pipeline.
 *
 * @method \Jdcloud\Result getLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLimitsAsync(array $args = [])
 * @method \Jdcloud\Result getSourceProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSourceProvidersAsync(array $args = [])
 * @method \Jdcloud\Result getOperationProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationProvidersAsync(array $args = [])
 * @method \Jdcloud\Result getRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegionsAsync(array $args = [])
 * @method \Jdcloud\Result getPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelinesAsync(array $args = [])
 * @method \Jdcloud\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \Jdcloud\Result getPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineAsync(array $args = [])
 * @method \Jdcloud\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 * @method \Jdcloud\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \Jdcloud\Result startPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineAsync(array $args = [])
 * @method \Jdcloud\Result manualAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise manualActionAsync(array $args = [])
 * @method \Jdcloud\Result getPipelineInstancesByUuids(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineInstancesByUuidsAsync(array $args = [])
 * @method \Jdcloud\Result getPipelineInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineInstancesAsync(array $args = [])
 * @method \Jdcloud\Result getPipelineInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopPipelineInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPipelineInstanceAsync(array $args = [])
 * @method \Jdcloud\Result readFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readFileAsync(array $args = [])
 */
class PipelineClient extends JdCloudClient
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
                        'service' => 'pipeline',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'pipeline'
            );
        };

        parent::__construct($args);
    }
}