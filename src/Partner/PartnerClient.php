<?php
/**
 * Partner
 *
 * @category Jdcloud
 * @package  Jdcloud\Partner
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Partner;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with partner.
 *
 * @method \Jdcloud\Result queryMyCustomerList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMyCustomerListAsync(array $args = [])
 */
class PartnerClient extends JdCloudClient
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
                        'service' => 'partner',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'partner'
            );
        };

        parent::__construct($args);
    }
}