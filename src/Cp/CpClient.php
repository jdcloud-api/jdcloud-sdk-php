<?php
/**
 * Cp
 *
 * @category Jdcloud
 * @package  Jdcloud\Cp
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cp;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cp.
 *
 * @method \Jdcloud\Result createPartner(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPartnerAsync(array $args = [])
 * @method \Jdcloud\Result usercpcheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise usercpcheckAsync(array $args = [])
 * @method \Jdcloud\Result setUserGrace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserGraceAsync(array $args = [])
 * @method \Jdcloud\Result getUserGrace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserGraceAsync(array $args = [])
 * @method \Jdcloud\Result partnerToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise partnerTokenAsync(array $args = [])
 * @method \Jdcloud\Result partnerStsToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise partnerStsTokenAsync(array $args = [])
 * @method \Jdcloud\Result checkUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkUserAsync(array $args = [])
 * @method \Jdcloud\Result sendVerificationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendVerificationCodeAsync(array $args = [])
 * @method \Jdcloud\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Jdcloud\Result listPartnerUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartnerUsersAsync(array $args = [])
 * @method \Jdcloud\Result createUserAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAuthAsync(array $args = [])
 */
class CpClient extends JdCloudClient
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
                        'service' => 'cp',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cp'
            );
        };

        parent::__construct($args);
    }
}