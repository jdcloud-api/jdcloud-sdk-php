<?php
/**
 * Conversationalai
 *
 * @category Jdcloud
 * @package  Jdcloud\Conversationalai
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Conversationalai;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with conversationalai.
 *
 * @method \Jdcloud\Result queryConvoAgentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryConvoAgentStatusAsync(array $args = [])
 * @method \Jdcloud\Result queryConvoAgentList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryConvoAgentListAsync(array $args = [])
 */
class ConversationalaiClient extends JdCloudClient
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
                        'service' => 'conversationalai',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'conversationalai'
            );
        };

        parent::__construct($args);
    }
}