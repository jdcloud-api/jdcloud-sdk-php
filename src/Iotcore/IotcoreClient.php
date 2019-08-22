<?php
/**
 * Iotcore
 *
 * @category Jdcloud
 * @package  Jdcloud\Iotcore
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iotcore;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iotcore.
 *
 * @method \Jdcloud\Result describeThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingShadowAsync(array $args = [])
 * @method \Jdcloud\Result updateThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingShadowAsync(array $args = [])
 * @method \Jdcloud\Result invokeThingService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeThingServiceAsync(array $args = [])
 * @method \Jdcloud\Result queryDevicePage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDevicePageAsync(array $args = [])
 * @method \Jdcloud\Result updateDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceAsync(array $args = [])
 * @method \Jdcloud\Result addDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDeviceAsync(array $args = [])
 * @method \Jdcloud\Result queryDeviceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDeviceDetailAsync(array $args = [])
 * @method \Jdcloud\Result removeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeDeviceAsync(array $args = [])
 * @method \Jdcloud\Result listProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProductsAsync(array $args = [])
 * @method \Jdcloud\Result createProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProductAsync(array $args = [])
 * @method \Jdcloud\Result describeProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsync(array $args = [])
 * @method \Jdcloud\Result updateProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProductAsync(array $args = [])
 * @method \Jdcloud\Result deleteProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProductAsync(array $args = [])
 * @method \Jdcloud\Result listProductAbilities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProductAbilitiesAsync(array $args = [])
 * @method \Jdcloud\Result importThingModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importThingModelAsync(array $args = [])
 * @method \Jdcloud\Result exportThingModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportThingModelAsync(array $args = [])
 */
class IotcoreClient extends JdCloudClient
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
                        'service' => 'iotcore',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iotcore'
            );
        };

        parent::__construct($args);
    }
}