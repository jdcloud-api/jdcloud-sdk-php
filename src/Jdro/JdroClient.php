<?php
/**
 * Jdro
 *
 * @category Jdcloud
 * @package  Jdcloud\Jdro
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jdro;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jdro.
 *
 * @method \Jdcloud\Result describeResourceTypeList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceTypeListAsync(array $args = [])
 * @method \Jdcloud\Result describeResourceTypeSpecification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceTypeSpecificationAsync(array $args = [])
 * @method \Jdcloud\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \Jdcloud\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \Jdcloud\Result describeStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackAsync(array $args = [])
 * @method \Jdcloud\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \Jdcloud\Result createChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChangeSetAsync(array $args = [])
 * @method \Jdcloud\Result executeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeChangeSetAsync(array $args = [])
 * @method \Jdcloud\Result describeStackEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackEventsAsync(array $args = [])
 * @method \Jdcloud\Result describeStackResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeStackTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackTemplateAsync(array $args = [])
 * @method \Jdcloud\Result validateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateTemplateAsync(array $args = [])
 */
class JdroClient extends JdCloudClient
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
                        'service' => 'jdro',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jdro'
            );
        };

        parent::__construct($args);
    }
}