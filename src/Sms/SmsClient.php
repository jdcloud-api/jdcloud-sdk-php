<?php
/**
 * Sms
 *
 * @category Jdcloud
 * @package  Jdcloud\Sms
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Sms;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with sms.
 *
 * @method \Jdcloud\Result sendBatchSms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBatchSmsAsync(array $args = [])
 * @method \Jdcloud\Result pullMtMsgByMobile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pullMtMsgByMobileAsync(array $args = [])
 */
class SmsClient extends JdCloudClient
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
                        'service' => 'sms',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'sms'
            );
        };

        parent::__construct($args);
    }
}