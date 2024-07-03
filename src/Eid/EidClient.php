<?php
/**
 * Eid
 *
 * @category Jdcloud
 * @package  Jdcloud\Eid
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Eid;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with eid.
 *
 * @method \Jdcloud\Result eidScore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise eidScoreAsync(array $args = [])
 * @method \Jdcloud\Result vttok(array $args = [])
 * @method \GuzzleHttp\Promise\Promise vttokAsync(array $args = [])
 * @method \Jdcloud\Result device(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deviceAsync(array $args = [])
 */
class EidClient extends JdCloudClient
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
                        'service' => 'eid',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'eid'
            );
        };

        parent::__construct($args);
    }
}