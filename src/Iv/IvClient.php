<?php
/**
 * Iv
 *
 * @category Jdcloud
 * @package  Jdcloud\Iv
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iv;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iv.
 *
 * @method \Jdcloud\Result submitViJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitViJobAsync(array $args = [])
 * @method \Jdcloud\Result getViJobSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getViJobSummaryAsync(array $args = [])
 * @method \Jdcloud\Result listViTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listViTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result createViTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createViTemplateAsync(array $args = [])
 * @method \Jdcloud\Result getViTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getViTemplateAsync(array $args = [])
 * @method \Jdcloud\Result updateViTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateViTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteViTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteViTemplateAsync(array $args = [])
 */
class IvClient extends JdCloudClient
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
                        'service' => 'iv',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iv'
            );
        };

        parent::__construct($args);
    }
}