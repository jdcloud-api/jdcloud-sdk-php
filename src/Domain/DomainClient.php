<?php
/**
 * Domain
 *
 * @category Jdcloud
 * @package  Jdcloud\Domain
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Domain;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with domain.
 *
 * @method \Jdcloud\Result checkDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryWhoisInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWhoisInfoAsync(array $args = [])
 * @method \Jdcloud\Result domainInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise domainInfoAsync(array $args = [])
 * @method \Jdcloud\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Jdcloud\Result renewDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewDomainAsync(array $args = [])
 * @method \Jdcloud\Result transferinDomainState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise transferinDomainStateAsync(array $args = [])
 * @method \Jdcloud\Result transferinDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise transferinDomainAsync(array $args = [])
 * @method \Jdcloud\Result modifyDns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDnsAsync(array $args = [])
 * @method \Jdcloud\Result domainTemplateAssigned(array $args = [])
 * @method \GuzzleHttp\Promise\Promise domainTemplateAssignedAsync(array $args = [])
 * @method \Jdcloud\Result domainLock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise domainLockAsync(array $args = [])
 * @method \Jdcloud\Result domainUnLock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise domainUnLockAsync(array $args = [])
 * @method \Jdcloud\Result getDomainTransferOutPassWord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainTransferOutPassWordAsync(array $args = [])
 * @method \Jdcloud\Result createTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateAsync(array $args = [])
 * @method \Jdcloud\Result queryTemplateInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryTemplateInfoAsync(array $args = [])
 * @method \Jdcloud\Result modifyTemplateInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTemplateInfoAsync(array $args = [])
 * @method \Jdcloud\Result deleteTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAsync(array $args = [])
 * @method \Jdcloud\Result certificateTemplateState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise certificateTemplateStateAsync(array $args = [])
 * @method \Jdcloud\Result certificateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise certificateTemplateAsync(array $args = [])
 */
class DomainClient extends JdCloudClient
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
                        'service' => 'domain',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'domain'
            );
        };

        parent::__construct($args);
    }
}