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
 * @method \Jdcloud\Result addCredit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCreditAsync(array $args = [])
 * @method \Jdcloud\Result editCredit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editCreditAsync(array $args = [])
 * @method \Jdcloud\Result deleteCredit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCreditAsync(array $args = [])
 * @method \Jdcloud\Result queryCreditList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCreditListAsync(array $args = [])
 * @method \Jdcloud\Result queryPackageRemainder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPackageRemainderAsync(array $args = [])
 * @method \Jdcloud\Result sendBatchMsg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBatchMsgAsync(array $args = [])
 * @method \Jdcloud\Result querySendStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySendStatusAsync(array $args = [])
 * @method \Jdcloud\Result addTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTemplateAsync(array $args = [])
 * @method \Jdcloud\Result editTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAsync(array $args = [])
 * @method \Jdcloud\Result queryTemplateById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryTemplateByIdAsync(array $args = [])
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