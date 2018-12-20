<?php
/**
 * Httpdns
 *
 * @category Jdcloud
 * @package  Jdcloud\Httpdns
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Httpdns;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with httpdns.
 *
 * @method \Jdcloud\Result getAccountId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountIdAsync(array $args = [])
 * @method \Jdcloud\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Jdcloud\Result getAccountInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountInfoAsync(array $args = [])
 * @method \Jdcloud\Result operateKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateKeyAsync(array $args = [])
 * @method \Jdcloud\Result getDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainsAsync(array $args = [])
 * @method \Jdcloud\Result addDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDomainsAsync(array $args = [])
 * @method \Jdcloud\Result delDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delDomainsAsync(array $args = [])
 */
class HttpdnsClient extends JdCloudClient
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
                        'service' => 'httpdns',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'httpdns'
            );
        };

        parent::__construct($args);
    }
}