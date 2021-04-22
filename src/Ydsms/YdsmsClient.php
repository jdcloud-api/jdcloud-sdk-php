<?php
/**
 * Ydsms
 *
 * @category Jdcloud
 * @package  Jdcloud\Ydsms
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ydsms;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ydsms.
 *
 * @method \Jdcloud\Result listSmsAppsUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsAppsUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result createSmsAppUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSmsAppUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result getSmsAppByIdUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsAppByIdUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result modifySmsAppUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySmsAppUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result querySecretKeyUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySecretKeyUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result modifyStatusUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyStatusUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result listSmsSendOverviewUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsSendOverviewUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result querySendRecordUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySendRecordUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result queryReplyRecordUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryReplyRecordUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result queryReceiptRecordUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryReceiptRecordUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result listSmsAppGeneralSettingsUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsAppGeneralSettingsUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result modifyAppGeneralSettingById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAppGeneralSettingByIdAsync(array $args = [])
 * @method \Jdcloud\Result listSmsCertificateTypesUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsCertificateTypesUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result listSmsSendOverviewUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsSendOverviewUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result listSmsPackagesUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsPackagesUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result createSmsPackageUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSmsPackageUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result getSmsPackageByIdUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsPackageByIdUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result getSmsPackageSpecificationsUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsPackageSpecificationsUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result sendMessagesUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessagesUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result sendMessagesByOrderIdUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessagesByOrderIdUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result sendMessagesByPinUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessagesByPinUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result listSmsSignsUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsSignsUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result createSmsSignUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSmsSignUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result getSmsSignByIdUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsSignByIdUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result modifySmsSignUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySmsSignUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result listSmsSignTypesUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsSignTypesUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result listSmsTasksUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsTasksUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result createSmsTaskUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSmsTaskUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result getSmsTaskIdUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsTaskIdUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result modifySmsTaskUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySmsTaskUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result taskDeleteUsingDelete(array $args = [])
 * @method \GuzzleHttp\Promise\Promise taskDeleteUsingDeleteAsync(array $args = [])
 * @method \Jdcloud\Result taskStartUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise taskStartUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result getSmsTaskContentUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsTaskContentUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result listSmsTemplatesUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmsTemplatesUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result createSmsTemplateUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSmsTemplateUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result getSmsTemplateByIdUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsTemplateByIdUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result modifySmsTemplateUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySmsTemplateUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result openServiceUsingPOST(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openServiceUsingPOSTAsync(array $args = [])
 * @method \Jdcloud\Result queryRemainingUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRemainingUsingGETAsync(array $args = [])
 * @method \Jdcloud\Result queryAmountUsingGET(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAmountUsingGETAsync(array $args = [])
 */
class YdsmsClient extends JdCloudClient
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
                        'service' => 'ydsms',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ydsms'
            );
        };

        parent::__construct($args);
    }
}