<?php
/**
 * Pod
 *
 * @category Jdcloud
 * @package  Jdcloud\Pod
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Pod;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with pod.
 *
 * @method \Jdcloud\Result describeContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerAsync(array $args = [])
 * @method \Jdcloud\Result attach(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachAsync(array $args = [])
 * @method \Jdcloud\Result execCreate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise execCreateAsync(array $args = [])
 * @method \Jdcloud\Result execGetExitCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise execGetExitCodeAsync(array $args = [])
 * @method \Jdcloud\Result execStart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise execStartAsync(array $args = [])
 * @method \Jdcloud\Result resizeTTY(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resizeTTYAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describePods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePodsAsync(array $args = [])
 * @method \Jdcloud\Result createPods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPodsAsync(array $args = [])
 * @method \Jdcloud\Result checkPodName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkPodNameAsync(array $args = [])
 * @method \Jdcloud\Result describePod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePodAsync(array $args = [])
 * @method \Jdcloud\Result deletePod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePodAsync(array $args = [])
 * @method \Jdcloud\Result startPod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPodAsync(array $args = [])
 * @method \Jdcloud\Result stopPod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPodAsync(array $args = [])
 * @method \Jdcloud\Result modifyPodAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyPodAttributeAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result getContainerLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerLogsAsync(array $args = [])
 * @method \Jdcloud\Result rebuildPod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildPodAsync(array $args = [])
 * @method \Jdcloud\Result resizePod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resizePodAsync(array $args = [])
 * @method \Jdcloud\Result describeQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotaAsync(array $args = [])
 * @method \Jdcloud\Result describeSecrets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretsAsync(array $args = [])
 * @method \Jdcloud\Result createSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecretAsync(array $args = [])
 * @method \Jdcloud\Result describeSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretAsync(array $args = [])
 * @method \Jdcloud\Result deleteSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecretAsync(array $args = [])
 */
class PodClient extends JdCloudClient
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
                        'service' => 'pod',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'pod'
            );
        };

        parent::__construct($args);
    }
}