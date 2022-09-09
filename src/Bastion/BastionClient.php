<?php
/**
 * Bastion
 *
 * @category Jdcloud
 * @package  Jdcloud\Bastion
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Bastion;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with bastion.
 *
 * @method \Jdcloud\Result describeBastions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBastionsAsync(array $args = [])
 * @method \Jdcloud\Result describeBastion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBastionAsync(array $args = [])
 * @method \Jdcloud\Result updateBastionDesc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBastionDescAsync(array $args = [])
 * @method \Jdcloud\Result describeSign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSignAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result setInstanceZeroEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceZeroEnableAsync(array $args = [])
 * @method \Jdcloud\Result setInstancePublicAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstancePublicAccessAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSpecAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceExpireOrStart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceExpireOrStartAsync(array $args = [])
 * @method \Jdcloud\Result describeSourceId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSourceIdAsync(array $args = [])
 * @method \Jdcloud\Result describePins(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePinsAsync(array $args = [])
 */
class BastionClient extends JdCloudClient
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
                        'service' => 'bastion',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'bastion'
            );
        };

        parent::__construct($args);
    }
}