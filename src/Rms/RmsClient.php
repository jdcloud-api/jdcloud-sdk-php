<?php
/**
 * Rms
 *
 * @category Jdcloud
 * @package  Jdcloud\Rms
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Rms;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with rms.
 *
 * @method \Jdcloud\Result sendBatchMsg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBatchMsgAsync(array $args = [])
 * @method \Jdcloud\Result querySendStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySendStatusAsync(array $args = [])
 * @method \Jdcloud\Result addTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTemplateAsync(array $args = [])
 * @method \Jdcloud\Result queryOneTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryOneTemplateAsync(array $args = [])
 * @method \Jdcloud\Result queryTemplateList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryTemplateListAsync(array $args = [])
 */
class RmsClient extends JdCloudClient
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
                        'service' => 'rms',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'rms'
            );
        };

        parent::__construct($args);
    }
}