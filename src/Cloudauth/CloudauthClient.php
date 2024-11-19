<?php
/**
 * Cloudauth
 *
 * @category Jdcloud
 * @package  Jdcloud\Cloudauth
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cloudauth;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cloudauth.
 *
 * @method \Jdcloud\Result personalAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise personalAuthAsync(array $args = [])
 * @method \Jdcloud\Result personalMobile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise personalMobileAsync(array $args = [])
 * @method \Jdcloud\Result personalBankcard3Detail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise personalBankcard3DetailAsync(array $args = [])
 * @method \Jdcloud\Result personalBankcard3Other(array $args = [])
 * @method \GuzzleHttp\Promise\Promise personalBankcard3OtherAsync(array $args = [])
 * @method \Jdcloud\Result personalBankcard4Detail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise personalBankcard4DetailAsync(array $args = [])
 * @method \Jdcloud\Result personalBankcard4Other(array $args = [])
 * @method \GuzzleHttp\Promise\Promise personalBankcard4OtherAsync(array $args = [])
 * @method \Jdcloud\Result companyTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise companyTransferAsync(array $args = [])
 * @method \Jdcloud\Result checkCompanyTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkCompanyTransferAsync(array $args = [])
 * @method \Jdcloud\Result queryCompanyTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCompanyTransferAsync(array $args = [])
 * @method \Jdcloud\Result checkCompanyInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkCompanyInfoAsync(array $args = [])
 * @method \Jdcloud\Result checkLegalPerson(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkLegalPersonAsync(array $args = [])
 * @method \Jdcloud\Result checkLegalPersonDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkLegalPersonDetailAsync(array $args = [])
 * @method \Jdcloud\Result checkCompanyInfo3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkCompanyInfo3Async(array $args = [])
 * @method \Jdcloud\Result queryCityList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCityListAsync(array $args = [])
 * @method \Jdcloud\Result companyTransferSimple(array $args = [])
 * @method \GuzzleHttp\Promise\Promise companyTransferSimpleAsync(array $args = [])
 * @method \Jdcloud\Result queryProvinceList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryProvinceListAsync(array $args = [])
 * @method \Jdcloud\Result queryBankList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBankListAsync(array $args = [])
 * @method \Jdcloud\Result queryBankBranchList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBankBranchListAsync(array $args = [])
 * @method \Jdcloud\Result iDCard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise iDCardAsync(array $args = [])
 * @method \Jdcloud\Result bankCardOCR(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bankCardOCRAsync(array $args = [])
 * @method \Jdcloud\Result businessOCR(array $args = [])
 * @method \GuzzleHttp\Promise\Promise businessOCRAsync(array $args = [])
 * @method \Jdcloud\Result getAliveUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliveUrlAsync(array $args = [])
 * @method \Jdcloud\Result getAliveResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliveResultAsync(array $args = [])
 * @method \Jdcloud\Result getAliveUrlNew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliveUrlNewAsync(array $args = [])
 * @method \Jdcloud\Result getAliveResultNew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliveResultNewAsync(array $args = [])
 * @method \Jdcloud\Result oneClick(array $args = [])
 * @method \GuzzleHttp\Promise\Promise oneClickAsync(array $args = [])
 * @method \Jdcloud\Result addressInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addressInfoAsync(array $args = [])
 * @method \Jdcloud\Result addressDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addressDetailAsync(array $args = [])
 * @method \Jdcloud\Result mobileStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mobileStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeApplyStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplyStatusAsync(array $args = [])
 */
class CloudauthClient extends JdCloudClient
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
                        'service' => 'cloudauth',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cloudauth'
            );
        };

        parent::__construct($args);
    }
}