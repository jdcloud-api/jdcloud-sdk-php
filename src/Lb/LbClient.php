<?php
/**
 * Lb
 *
 * @category Jdcloud
 * @package  Jdcloud\Lb
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Lb;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with lb.
 *
 * @method \Jdcloud\Result describeBackends(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackendsAsync(array $args = [])
 * @method \Jdcloud\Result createBackend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackendAsync(array $args = [])
 * @method \Jdcloud\Result describeBackend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackendAsync(array $args = [])
 * @method \Jdcloud\Result updateBackend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBackendAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackendAsync(array $args = [])
 * @method \Jdcloud\Result describeTargetHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetHealthAsync(array $args = [])
 * @method \Jdcloud\Result describeListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenersAsync(array $args = [])
 * @method \Jdcloud\Result createListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \Jdcloud\Result describeListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenerAsync(array $args = [])
 * @method \Jdcloud\Result updateListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateListenerAsync(array $args = [])
 * @method \Jdcloud\Result deleteListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \Jdcloud\Result addListenerCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addListenerCertificatesAsync(array $args = [])
 * @method \Jdcloud\Result updateListenerCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateListenerCertificatesAsync(array $args = [])
 * @method \Jdcloud\Result deleteListenerCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerCertificatesAsync(array $args = [])
 * @method \Jdcloud\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \Jdcloud\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result describeLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result updateLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result associateSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result disassociateSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSecurityGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetGroupsAsync(array $args = [])
 * @method \Jdcloud\Result createTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTargetGroupAsync(array $args = [])
 * @method \Jdcloud\Result describeTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTargetGroupAsync(array $args = [])
 * @method \Jdcloud\Result deleteTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetGroupAsync(array $args = [])
 * @method \Jdcloud\Result registerTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetsAsync(array $args = [])
 * @method \Jdcloud\Result deRegisterTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deRegisterTargetsAsync(array $args = [])
 * @method \Jdcloud\Result updateTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTargetsAsync(array $args = [])
 * @method \Jdcloud\Result describeTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetsAsync(array $args = [])
 * @method \Jdcloud\Result describeUrlMaps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUrlMapsAsync(array $args = [])
 * @method \Jdcloud\Result createUrlMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUrlMapAsync(array $args = [])
 * @method \Jdcloud\Result describeUrlMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUrlMapAsync(array $args = [])
 * @method \Jdcloud\Result updateUrlMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUrlMapAsync(array $args = [])
 * @method \Jdcloud\Result deleteUrlMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUrlMapAsync(array $args = [])
 * @method \Jdcloud\Result addRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRulesAsync(array $args = [])
 * @method \Jdcloud\Result updateRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRulesAsync(array $args = [])
 * @method \Jdcloud\Result deleteRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRulesAsync(array $args = [])
 */
class LbClient extends JdCloudClient
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
                        'service' => 'lb',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'lb'
            );
        };

        parent::__construct($args);
    }
}