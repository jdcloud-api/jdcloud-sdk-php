<?php
/**
 * Nativecontainer
 *
 * @category Jdcloud
 * @package  Jdcloud\Nativecontainer
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Nativecontainer;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with nativecontainer.
 *
 * @method \Jdcloud\Result describeContainers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainersAsync(array $args = [])
 * @method \Jdcloud\Result createContainers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainersAsync(array $args = [])
 * @method \Jdcloud\Result describeContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerAsync(array $args = [])
 * @method \Jdcloud\Result deleteContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerAsync(array $args = [])
 * @method \Jdcloud\Result startContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startContainerAsync(array $args = [])
 * @method \Jdcloud\Result stopContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopContainerAsync(array $args = [])
 * @method \Jdcloud\Result modifyContainerAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyContainerAttributeAsync(array $args = [])
 * @method \Jdcloud\Result associateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result disassociateElasticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateElasticIpAsync(array $args = [])
 * @method \Jdcloud\Result getLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogsAsync(array $args = [])
 * @method \Jdcloud\Result rebuildContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildContainerAsync(array $args = [])
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
class NativecontainerClient extends JdCloudClient
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
                        'service' => 'nativecontainer',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'nativecontainer'
            );
        };

        parent::__construct($args);
    }
}