<?php
/**
 * Bri
 *
 * @category Jdcloud
 * @package  Jdcloud\Bri
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Bri;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with bri.
 *
 * @method \Jdcloud\Result describeBWList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBWListAsync(array $args = [])
 * @method \Jdcloud\Result setBWList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setBWListAsync(array $args = [])
 * @method \Jdcloud\Result delBWList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delBWListAsync(array $args = [])
 * @method \Jdcloud\Result creditScore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise creditScoreAsync(array $args = [])
 */
class BriClient extends JdCloudClient
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
                        'service' => 'bri',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'bri'
            );
        };

        parent::__construct($args);
    }
}