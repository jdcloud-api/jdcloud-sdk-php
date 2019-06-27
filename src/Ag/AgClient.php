<?php
/**
 * Ag
 *
 * @category Jdcloud
 * @package  Jdcloud\Ag
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ag;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ag.
 *
 * @method \Jdcloud\Result describeAgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgsAsync(array $args = [])
 * @method \Jdcloud\Result createAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAgAsync(array $args = [])
 * @method \Jdcloud\Result describeAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgAsync(array $args = [])
 * @method \Jdcloud\Result updateAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAgAsync(array $args = [])
 * @method \Jdcloud\Result deleteAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAgAsync(array $args = [])
 * @method \Jdcloud\Result abandonInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abandonInstancesAsync(array $args = [])
 * @method \Jdcloud\Result setInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 */
class AgClient extends JdCloudClient
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
                        'service' => 'ag',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ag'
            );
        };

        parent::__construct($args);
    }
}