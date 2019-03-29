<?php
/**
 * Portal
 *
 * @category Jdcloud
 * @package  Jdcloud\Portal
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Portal;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with portal.
 *
 * @method \Jdcloud\Result describeProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductsAsync(array $args = [])
 * @method \Jdcloud\Result describeProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsync(array $args = [])
 * @method \Jdcloud\Result describeProductsById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductsByIdAsync(array $args = [])
 */
class PortalClient extends JdCloudClient
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
                        'service' => 'portal',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'portal'
            );
        };

        parent::__construct($args);
    }
}