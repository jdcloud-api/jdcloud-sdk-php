<?php
/**
 * Aisearchdata
 *
 * @category Jdcloud
 * @package  Jdcloud\Aisearchdata
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Aisearchdata;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with aisearchdata.
 *
 * @method \Jdcloud\Result fetchData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise fetchDataAsync(array $args = [])
 * @method \Jdcloud\Result pushData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pushDataAsync(array $args = [])
 */
class AisearchdataClient extends JdCloudClient
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
                        'service' => 'aisearchdata',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'aisearchdata'
            );
        };

        parent::__construct($args);
    }
}