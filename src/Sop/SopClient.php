<?php
/**
 * Sop
 *
 * @category Jdcloud
 * @package  Jdcloud\Sop
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Sop;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with sop.
 *
 * @method \Jdcloud\Result getSecurityToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecurityTokenAsync(array $args = [])
 * @method \Jdcloud\Result getSensitiveOpSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSensitiveOpSettingAsync(array $args = [])
 */
class SopClient extends JdcloudClient
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
                        'service' => 'sop',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'sop'
            );
        };

        parent::__construct($args);
    }
}