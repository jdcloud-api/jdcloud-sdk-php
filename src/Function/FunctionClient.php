<?php
/**
 * Function
 *
 * @category Jdcloud
 * @package  Jdcloud\Function
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Function;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with function.
 *
 * @method \Jdcloud\Result listAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasAsync(array $args = [])
 * @method \Jdcloud\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Jdcloud\Result getAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliasAsync(array $args = [])
 * @method \Jdcloud\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \Jdcloud\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \Jdcloud\Result listFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionAsync(array $args = [])
 * @method \Jdcloud\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \Jdcloud\Result getFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \Jdcloud\Result updateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionAsync(array $args = [])
 * @method \Jdcloud\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \Jdcloud\Result invoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsync(array $args = [])
 * @method \Jdcloud\Result asyncInvoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise asyncInvokeAsync(array $args = [])
 * @method \Jdcloud\Result getTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTriggerAsync(array $args = [])
 * @method \Jdcloud\Result listVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVersionAsync(array $args = [])
 * @method \Jdcloud\Result createVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVersionAsync(array $args = [])
 * @method \Jdcloud\Result getVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVersionAsync(array $args = [])
 * @method \Jdcloud\Result deleteVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVersionAsync(array $args = [])
 */
class FunctionClient extends JdCloudClient
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
                        'service' => 'function',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'function'
            );
        };

        parent::__construct($args);
    }
}