<?php
/**
 * Cr
 *
 * @category Jdcloud
 * @package  Jdcloud\Cr
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cr;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cr.
 *
 * @method \Jdcloud\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \Jdcloud\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 * @method \Jdcloud\Result createRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistryAsync(array $args = [])
 * @method \Jdcloud\Result checkRegistryName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkRegistryNameAsync(array $args = [])
 * @method \Jdcloud\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 */
class CrClient extends JdCloudClient
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
                        'service' => 'cr',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cr'
            );
        };

        parent::__construct($args);
    }
}