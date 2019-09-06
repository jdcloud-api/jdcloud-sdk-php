<?php
/**
 * Ssl
 *
 * @category Jdcloud
 * @package  Jdcloud\Ssl
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ssl;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ssl.
 *
 * @method \Jdcloud\Result describeCerts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertsAsync(array $args = [])
 * @method \Jdcloud\Result describeCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertAsync(array $args = [])
 * @method \Jdcloud\Result deleteCerts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertsAsync(array $args = [])
 * @method \Jdcloud\Result uploadCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadCertAsync(array $args = [])
 * @method \Jdcloud\Result downloadCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadCertAsync(array $args = [])
 * @method \Jdcloud\Result updateCertName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertNameAsync(array $args = [])
 * @method \Jdcloud\Result updateCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertAsync(array $args = [])
 */
class SslClient extends JdCloudClient
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
                        'service' => 'ssl',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ssl'
            );
        };

        parent::__construct($args);
    }
}