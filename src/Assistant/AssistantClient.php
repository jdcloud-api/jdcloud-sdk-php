<?php
/**
 * Assistant
 *
 * @category Jdcloud
 * @package  Jdcloud\Assistant
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Assistant;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with assistant.
 *
 * @method \Jdcloud\Result createCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCommandAsync(array $args = [])
 * @method \Jdcloud\Result describeCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommandsAsync(array $args = [])
 * @method \Jdcloud\Result deleteCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCommandsAsync(array $args = [])
 * @method \Jdcloud\Result invokeCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeCommandAsync(array $args = [])
 * @method \Jdcloud\Result describeInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInvocationsAsync(array $args = [])
 * @method \Jdcloud\Result addLogConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLogConfigAsync(array $args = [])
 */
class AssistantClient extends JdCloudClient
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
                        'service' => 'assistant',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'assistant'
            );
        };

        parent::__construct($args);
    }
}