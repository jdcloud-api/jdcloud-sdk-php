<?php
/**
 * Joygrid
 *
 * @category Jdcloud
 * @package  Jdcloud\Joygrid
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Joygrid;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with joygrid.
 *
 * @method \Jdcloud\Result describeCodeInterpreters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpretersAsync(array $args = [])
 * @method \Jdcloud\Result createCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result describeCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result updateCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result deleteCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result describeCodeInterpreterSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpreterSessionsAsync(array $args = [])
 * @method \Jdcloud\Result startCodeInterpreterSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCodeInterpreterSessionAsync(array $args = [])
 * @method \Jdcloud\Result stopCodeInterpreterSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopCodeInterpreterSessionAsync(array $args = [])
 * @method \Jdcloud\Result invokeCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result describeMemories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMemoriesAsync(array $args = [])
 * @method \Jdcloud\Result createMemory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMemoryAsync(array $args = [])
 * @method \Jdcloud\Result describeMemory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMemoryAsync(array $args = [])
 * @method \Jdcloud\Result updateMemory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMemoryAsync(array $args = [])
 * @method \Jdcloud\Result deleteMemory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMemoryAsync(array $args = [])
 * @method \Jdcloud\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Jdcloud\Result describeEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventAsync(array $args = [])
 * @method \Jdcloud\Result deleteEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventAsync(array $args = [])
 * @method \Jdcloud\Result searchEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchEventsAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntimes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimesAsync(array $args = [])
 * @method \Jdcloud\Result createRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result updateRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result deleteRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result invokeRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeRuntimeAsync(array $args = [])
 */
class JoygridClient extends JdCloudClient
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
                        'service' => 'joygrid',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'joygrid'
            );
        };

        parent::__construct($args);
    }
}