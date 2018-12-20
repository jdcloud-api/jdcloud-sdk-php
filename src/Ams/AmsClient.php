<?php
/**
 * Ams
 *
 * @category Jdcloud
 * @package  Jdcloud\Ams
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ams;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ams.
 *
 * @method \Jdcloud\Result describeStreamsInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamsInputAsync(array $args = [])
 * @method \Jdcloud\Result describeAuthenticate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuthenticateAsync(array $args = [])
 */
class AmsClient extends JdCloudClient
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
                        'service' => 'ams',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ams'
            );
        };

        parent::__construct($args);
    }
}