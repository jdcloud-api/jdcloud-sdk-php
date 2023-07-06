<?php
/**
 * Fc
 *
 * @category Jdcloud
 * @package  Jdcloud\Fc
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Fc;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with fc.
 *
 * @method \Jdcloud\Result describeFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFunctionsAsync(array $args = [])
 * @method \Jdcloud\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \Jdcloud\Result checkFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkFunctionAsync(array $args = [])
 * @method \Jdcloud\Result describeFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFunctionAsync(array $args = [])
 * @method \Jdcloud\Result updateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionAsync(array $args = [])
 * @method \Jdcloud\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \Jdcloud\Result describeFunctionCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFunctionCodeAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntimes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimesAsync(array $args = [])
 * @method \Jdcloud\Result invokeFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeFunctionAsync(array $args = [])
 * @method \Jdcloud\Result describeAllFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAllFunctionsAsync(array $args = [])
 * @method \Jdcloud\Result internalCreateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise internalCreateFunctionAsync(array $args = [])
 * @method \Jdcloud\Result internalUpdateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise internalUpdateFunctionAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \Jdcloud\Result createService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \Jdcloud\Result checkService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkServiceAsync(array $args = [])
 * @method \Jdcloud\Result describeService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceAsync(array $args = [])
 * @method \Jdcloud\Result updateService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 * @method \Jdcloud\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \Jdcloud\Result describeTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTriggersAsync(array $args = [])
 * @method \Jdcloud\Result createTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTriggerAsync(array $args = [])
 * @method \Jdcloud\Result describeTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTriggerAsync(array $args = [])
 * @method \Jdcloud\Result updateTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTriggerAsync(array $args = [])
 * @method \Jdcloud\Result deleteTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTriggerAsync(array $args = [])
 */
class FcClient extends JdCloudClient
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
                        'service' => 'fc',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'fc'
            );
        };

        parent::__construct($args);
    }
}