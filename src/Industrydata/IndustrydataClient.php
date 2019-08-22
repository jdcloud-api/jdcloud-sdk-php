<?php
/**
 * Industrydata
 *
 * @category Jdcloud
 * @package  Jdcloud\Industrydata
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Industrydata;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with industrydata.
 *
 * @method \Jdcloud\Result getLargeScreenData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLargeScreenDataAsync(array $args = [])
 */
class IndustrydataClient extends JdCloudClient
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
                        'service' => 'industrydata',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'industrydata'
            );
        };

        parent::__construct($args);
    }
}