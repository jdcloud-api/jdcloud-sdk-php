<?php
/**
 * Agentgrid
 *
 * @category Jdcloud
 * @package  Jdcloud\Agentgrid
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Agentgrid;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with agentgrid.
 *
 * @method \Jdcloud\Result describeBrowserTools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBrowserToolsAsync(array $args = [])
 * @method \Jdcloud\Result createBrowserTool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBrowserToolAsync(array $args = [])
 * @method \Jdcloud\Result describeBrowserTool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBrowserToolAsync(array $args = [])
 * @method \Jdcloud\Result deleteBrowserTool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBrowserToolAsync(array $args = [])
 * @method \Jdcloud\Result describeBrowserToolSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBrowserToolSessionsAsync(array $args = [])
 * @method \Jdcloud\Result createBrowserToolSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBrowserToolSessionAsync(array $args = [])
 * @method \Jdcloud\Result describeBrowserToolSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBrowserToolSessionAsync(array $args = [])
 * @method \Jdcloud\Result deleteBrowserToolSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBrowserToolSessionAsync(array $args = [])
 * @method \Jdcloud\Result createRuntimeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuntimeEndpointAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntimeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeEndpointAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntimeEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeEndpointsAsync(array $args = [])
 * @method \Jdcloud\Result deleteRuntimeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuntimeEndpointAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntimes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimesAsync(array $args = [])
 * @method \Jdcloud\Result createRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result deleteRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result updateRuntime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuntimeAsync(array $args = [])
 * @method \Jdcloud\Result updateRuntimeAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuntimeAttributesAsync(array $args = [])
 * @method \Jdcloud\Result modifyRuntimeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRuntimeVersionAsync(array $args = [])
 * @method \Jdcloud\Result describeRuntimeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeVersionsAsync(array $args = [])
 * @method \Jdcloud\Result getRuntimeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuntimeSessionsAsync(array $args = [])
 * @method \Jdcloud\Result deleteRuntimeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuntimeVersionAsync(array $args = [])
 * @method \Jdcloud\Result describeCodeInterpreters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpretersAsync(array $args = [])
 * @method \Jdcloud\Result createCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result describeCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result deleteCodeInterpreter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCodeInterpreterAsync(array $args = [])
 * @method \Jdcloud\Result describeCodeInterpreterSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpreterSessionsAsync(array $args = [])
 * @method \Jdcloud\Result createCodeInterpreterSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCodeInterpreterSessionAsync(array $args = [])
 * @method \Jdcloud\Result describeCodeInterpreterSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeInterpreterSessionAsync(array $args = [])
 * @method \Jdcloud\Result deleteCodeInterpreterSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCodeInterpreterSessionAsync(array $args = [])
 */
class AgentgridClient extends JdCloudClient
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
                        'service' => 'agentgrid',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'agentgrid'
            );
        };

        parent::__construct($args);
    }
}