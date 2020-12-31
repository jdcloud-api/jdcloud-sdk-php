<?php
/**
 * Openjrtc
 *
 * @category Jdcloud
 * @package  Jdcloud\Openjrtc
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Openjrtc;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with openjrtc.
 *
 * @method \Jdcloud\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \Jdcloud\Result describeRoomOnlineUserNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomOnlineUserNumAsync(array $args = [])
 * @method \Jdcloud\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 */
class OpenjrtcClient extends JdCloudClient
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
                        'service' => 'openjrtc',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'openjrtc'
            );
        };

        parent::__construct($args);
    }
}