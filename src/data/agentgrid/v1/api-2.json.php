<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'agentgrid',
        'protocol' => 'json',
//        'serviceFullName' => 'agentgrid',
//        'serviceId' => 'agentgrid',
    ],
    'operations' => [
        'DescribeBrowserTools' => [
            'name' => 'DescribeBrowserTools',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/browserTools',
            ],
            'input' => [ 'shape' => 'DescribeBrowserToolsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBrowserToolsResponseShape', ],
        ],
        'CreateBrowserTool' => [
            'name' => 'CreateBrowserTool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/browserTools',
            ],
            'input' => [ 'shape' => 'CreateBrowserToolRequestShape', ],
            'output' => [ 'shape' => 'CreateBrowserToolResponseShape', ],
        ],
        'DescribeBrowserTool' => [
            'name' => 'DescribeBrowserTool',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/browserTools/{browserToolId}',
            ],
            'input' => [ 'shape' => 'DescribeBrowserToolRequestShape', ],
            'output' => [ 'shape' => 'DescribeBrowserToolResponseShape', ],
        ],
        'DeleteBrowserTool' => [
            'name' => 'DeleteBrowserTool',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/browserTools/{browserToolId}',
            ],
            'input' => [ 'shape' => 'DeleteBrowserToolRequestShape', ],
            'output' => [ 'shape' => 'DeleteBrowserToolResponseShape', ],
        ],
        'DescribeBrowserToolSessions' => [
            'name' => 'DescribeBrowserToolSessions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/browserTools/{browserToolId}/sessions',
            ],
            'input' => [ 'shape' => 'DescribeBrowserToolSessionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBrowserToolSessionsResponseShape', ],
        ],
        'CreateBrowserToolSession' => [
            'name' => 'CreateBrowserToolSession',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/browserTools/{browserToolId}/sessions',
            ],
            'input' => [ 'shape' => 'CreateBrowserToolSessionRequestShape', ],
            'output' => [ 'shape' => 'CreateBrowserToolSessionResponseShape', ],
        ],
        'DescribeBrowserToolSession' => [
            'name' => 'DescribeBrowserToolSession',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/browserTools/{browserToolId}/sessions/{sessionId}',
            ],
            'input' => [ 'shape' => 'DescribeBrowserToolSessionRequestShape', ],
            'output' => [ 'shape' => 'DescribeBrowserToolSessionResponseShape', ],
        ],
        'DeleteBrowserToolSession' => [
            'name' => 'DeleteBrowserToolSession',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/browserTools/{browserToolId}/sessions/{sessionId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteBrowserToolSessionRequestShape', ],
            'output' => [ 'shape' => 'DeleteBrowserToolSessionResponseShape', ],
        ],
        'CreateRuntimeEndpoint' => [
            'name' => 'CreateRuntimeEndpoint',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}:createEndpoint',
            ],
            'input' => [ 'shape' => 'CreateRuntimeEndpointRequestShape', ],
            'output' => [ 'shape' => 'CreateRuntimeEndpointResponseShape', ],
        ],
        'DescribeRuntimeEndpoint' => [
            'name' => 'DescribeRuntimeEndpoint',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}:describeEndpoint',
            ],
            'input' => [ 'shape' => 'DescribeRuntimeEndpointRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimeEndpointResponseShape', ],
        ],
        'DescribeRuntimeEndpoints' => [
            'name' => 'DescribeRuntimeEndpoints',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/endpoints',
            ],
            'input' => [ 'shape' => 'DescribeRuntimeEndpointsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimeEndpointsResponseShape', ],
        ],
        'DeleteRuntimeEndpoint' => [
            'name' => 'DeleteRuntimeEndpoint',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}:deleteEndpoint',
            ],
            'input' => [ 'shape' => 'DeleteRuntimeEndpointRequestShape', ],
            'output' => [ 'shape' => 'DeleteRuntimeEndpointResponseShape', ],
        ],
        'IngestTraces' => [
            'name' => 'IngestTraces',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/traces',
            ],
            'input' => [ 'shape' => 'IngestTracesRequestShape', ],
            'output' => [ 'shape' => 'IngestTracesResponseShape', ],
        ],
        'IngestMetrics' => [
            'name' => 'IngestMetrics',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/metrics',
            ],
            'input' => [ 'shape' => 'IngestMetricsRequestShape', ],
            'output' => [ 'shape' => 'IngestMetricsResponseShape', ],
        ],
        'IngestLogs' => [
            'name' => 'IngestLogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logs',
            ],
            'input' => [ 'shape' => 'IngestLogsRequestShape', ],
            'output' => [ 'shape' => 'IngestLogsResponseShape', ],
        ],
        'DescribeRuntimes' => [
            'name' => 'DescribeRuntimes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes',
            ],
            'input' => [ 'shape' => 'DescribeRuntimesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimesResponseShape', ],
        ],
        'CreateRuntime' => [
            'name' => 'CreateRuntime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes',
            ],
            'input' => [ 'shape' => 'CreateRuntimeRequestShape', ],
            'output' => [ 'shape' => 'CreateRuntimeResponseShape', ],
        ],
        'DescribeRuntime' => [
            'name' => 'DescribeRuntime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}',
            ],
            'input' => [ 'shape' => 'DescribeRuntimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimeResponseShape', ],
        ],
        'DeleteRuntime' => [
            'name' => 'DeleteRuntime',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}',
            ],
            'input' => [ 'shape' => 'DeleteRuntimeRequestShape', ],
            'output' => [ 'shape' => 'DeleteRuntimeResponseShape', ],
        ],
        'UpdateRuntime' => [
            'name' => 'UpdateRuntime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}:updateRuntime',
            ],
            'input' => [ 'shape' => 'UpdateRuntimeRequestShape', ],
            'output' => [ 'shape' => 'UpdateRuntimeResponseShape', ],
        ],
        'UpdateRuntimeAttributes' => [
            'name' => 'UpdateRuntimeAttributes',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}:updateRuntimeAttributes',
            ],
            'input' => [ 'shape' => 'UpdateRuntimeAttributesRequestShape', ],
            'output' => [ 'shape' => 'UpdateRuntimeAttributesResponseShape', ],
        ],
        'ModifyRuntimeVersion' => [
            'name' => 'ModifyRuntimeVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}/versions/{version}:modifyRuntimeVersion',
            ],
            'input' => [ 'shape' => 'ModifyRuntimeVersionRequestShape', ],
            'output' => [ 'shape' => 'ModifyRuntimeVersionResponseShape', ],
        ],
        'DescribeRuntimeVersions' => [
            'name' => 'DescribeRuntimeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}/versions',
            ],
            'input' => [ 'shape' => 'DescribeRuntimeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuntimeVersionsResponseShape', ],
        ],
        'GetRuntimeSessions' => [
            'name' => 'GetRuntimeSessions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}/sessions',
            ],
            'input' => [ 'shape' => 'GetRuntimeSessionsRequestShape', ],
            'output' => [ 'shape' => 'GetRuntimeSessionsResponseShape', ],
        ],
        'DeleteRuntimeVersion' => [
            'name' => 'DeleteRuntimeVersion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/runtimes/{runtimeId}/versions/{version}:deleteRuntimeVersion',
            ],
            'input' => [ 'shape' => 'DeleteRuntimeVersionRequestShape', ],
            'output' => [ 'shape' => 'DeleteRuntimeVersionResponseShape', ],
        ],
        'DescribeCodeInterpreters' => [
            'name' => 'DescribeCodeInterpreters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpretersRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpretersResponseShape', ],
        ],
        'CreateCodeInterpreter' => [
            'name' => 'CreateCodeInterpreter',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters',
            ],
            'input' => [ 'shape' => 'CreateCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'CreateCodeInterpreterResponseShape', ],
        ],
        'DescribeCodeInterpreter' => [
            'name' => 'DescribeCodeInterpreter',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters/{codeInterpreterId}',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpreterResponseShape', ],
        ],
        'DeleteCodeInterpreter' => [
            'name' => 'DeleteCodeInterpreter',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters/{codeInterpreterId}',
            ],
            'input' => [ 'shape' => 'DeleteCodeInterpreterRequestShape', ],
            'output' => [ 'shape' => 'DeleteCodeInterpreterResponseShape', ],
        ],
        'DescribeCodeInterpreterSessions' => [
            'name' => 'DescribeCodeInterpreterSessions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters/{codeInterpreterId}/sessions',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpreterSessionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpreterSessionsResponseShape', ],
        ],
        'CreateCodeInterpreterSession' => [
            'name' => 'CreateCodeInterpreterSession',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters/{codeInterpreterId}/sessions',
            ],
            'input' => [ 'shape' => 'CreateCodeInterpreterSessionRequestShape', ],
            'output' => [ 'shape' => 'CreateCodeInterpreterSessionResponseShape', ],
        ],
        'DescribeCodeInterpreterSession' => [
            'name' => 'DescribeCodeInterpreterSession',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters/{codeInterpreterId}/sessions/{sessionId}',
            ],
            'input' => [ 'shape' => 'DescribeCodeInterpreterSessionRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeInterpreterSessionResponseShape', ],
        ],
        'DeleteCodeInterpreterSession' => [
            'name' => 'DeleteCodeInterpreterSession',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/codeInterpreters/{codeInterpreterId}/sessions/{sessionId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteCodeInterpreterSessionRequestShape', ],
            'output' => [ 'shape' => 'DeleteCodeInterpreterSessionResponseShape', ],
        ],
    ],
    'shapes' => [
        'ImageConfiguration' => [
            'type' => 'structure',
            'members' => [
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
            ],
        ],
        'ArtifactConfiguration' => [
            'type' => 'structure',
            'members' => [
                'image' =>  [ 'shape' => 'ImageConfiguration', ],
            ],
        ],
        'ArtifactView' => [
            'type' => 'structure',
            'members' => [
                'image' =>  [ 'shape' => 'ImageView', ],
            ],
        ],
        'ImageView' => [
            'type' => 'structure',
            'members' => [
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
            ],
        ],
        'AuthorizerConfiguration' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'BrowserToolSession' => [
            'type' => 'structure',
            'members' => [
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'maxLifeTime' => [ 'type' => 'integer', 'locationName' => 'maxLifeTime', ],
                'cdpEndpoint' => [ 'type' => 'string', 'locationName' => 'cdpEndpoint', ],
                'vncEndpoint' => [ 'type' => 'string', 'locationName' => 'vncEndpoint', ],
                'vncAccessToken' => [ 'type' => 'string', 'locationName' => 'vncAccessToken', ],
                'failureReason' => [ 'type' => 'string', 'locationName' => 'failureReason', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
            ],
        ],
        'BrowserTool' => [
            'type' => 'structure',
            'members' => [
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'apiKey' => [ 'type' => 'string', 'locationName' => 'apiKey', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'network' => [ 'type' => 'string', 'locationName' => 'network', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CertificateLocation' => [
            'type' => 'structure',
            'members' => [
                'secretsManager' =>  [ 'shape' => 'SecretsManagerLocation', ],
            ],
        ],
        'SecretsManagerLocation' => [
            'type' => 'structure',
            'members' => [
                'secretArn' => [ 'type' => 'string', 'locationName' => 'secretArn', ],
            ],
        ],
        'Certificate' => [
            'type' => 'structure',
            'members' => [
                'location' =>  [ 'shape' => 'CertificateLocation', ],
            ],
        ],
        'OssLocationConfiguration' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
            ],
        ],
        'CodeConfiguration' => [
            'type' => 'structure',
            'members' => [
                'ossLocation' =>  [ 'shape' => 'OssLocationConfiguration', ],
                'entryPoint' => [ 'type' => 'string', 'locationName' => 'entryPoint', ],
                'runtimeEnvironment' => [ 'type' => 'string', 'locationName' => 'runtimeEnvironment', ],
            ],
        ],
        'ToolResultStructuredContent' => [
            'type' => 'structure',
            'members' => [
                'executionTime' => [ 'type' => 'double', 'locationName' => 'executionTime', ],
                'exitCode' => [ 'type' => 'integer', 'locationName' => 'exitCode', ],
                'stderr' => [ 'type' => 'string', 'locationName' => 'stderr', ],
                'stdout' => [ 'type' => 'string', 'locationName' => 'stdout', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
            ],
        ],
        'ContentBlock' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'mimeType' => [ 'type' => 'string', 'locationName' => 'mimeType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'resource' =>  [ 'shape' => 'ResourceContent', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
            ],
        ],
        'ResourceContent' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'blob' => [ 'type' => 'string', 'locationName' => 'blob', ],
                'mimeType' => [ 'type' => 'string', 'locationName' => 'mimeType', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
            ],
        ],
        'CodeInterpreterSession' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'maxLifeTime' => [ 'type' => 'integer', 'locationName' => 'maxLifeTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CodeInterpreter' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'apiKey' => [ 'type' => 'string', 'locationName' => 'apiKey', ],
                'failureReason' => [ 'type' => 'string', 'locationName' => 'failureReason', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'network' => [ 'type' => 'string', 'locationName' => 'network', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'NetworkConfiguration' => [
            'type' => 'structure',
            'members' => [
                'enablePublicNetwork' => [ 'type' => 'boolean', 'locationName' => 'enablePublicNetwork', ],
                'enableSandbox' => [ 'type' => 'boolean', 'locationName' => 'enableSandbox', ],
            ],
        ],
        'NetworkView' => [
            'type' => 'structure',
            'members' => [
                'enablePublicNetwork' => [ 'type' => 'boolean', 'locationName' => 'enablePublicNetwork', ],
                'enableSandbox' => [ 'type' => 'boolean', 'locationName' => 'enableSandbox', ],
            ],
        ],
        'CodeView' => [
            'type' => 'structure',
            'members' => [
                'ossLocation' =>  [ 'shape' => 'OssLocationView', ],
                'entryPoint' => [ 'type' => 'string', 'locationName' => 'entryPoint', ],
                'runtimeEnvironment' => [ 'type' => 'string', 'locationName' => 'runtimeEnvironment', ],
            ],
        ],
        'OssLocationView' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
            ],
        ],
        'Env' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'EnvConfiguration' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'OssAccessPointConfiguration' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketPath' => [ 'type' => 'string', 'locationName' => 'bucketPath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'FilesystemConfiguration' => [
            'type' => 'structure',
            'members' => [
                'ossAccessPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'OssAccessPointConfiguration', ], ],
            ],
        ],
        'FilesystemView' => [
            'type' => 'structure',
            'members' => [
                'ossAccessPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'OssAccessPointView', ], ],
            ],
        ],
        'OssAccessPointView' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'bucketPath' => [ 'type' => 'string', 'locationName' => 'bucketPath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InputContentBlock' => [
            'type' => 'structure',
            'members' => [
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'blob' => [ 'type' => 'string', 'locationName' => 'blob', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
            ],
        ],
        'InvokeRuntimeBody' => [
            'type' => 'structure',
            'members' => [
                'anyField' => [ 'type' => 'object', 'locationName' => 'anyField', ],
            ],
        ],
        'LifecycleConfiguration' => [
            'type' => 'structure',
            'members' => [
                'maxLifeTime' => [ 'type' => 'integer', 'locationName' => 'maxLifeTime', ],
            ],
        ],
        'LifecycleView' => [
            'type' => 'structure',
            'members' => [
                'maxLifeTime' => [ 'type' => 'integer', 'locationName' => 'maxLifeTime', ],
            ],
        ],
        'RuntimeEndpointInfo' => [
            'type' => 'structure',
            'members' => [
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'publicEndpoint' => [ 'type' => 'string', 'locationName' => 'publicEndpoint', ],
                'internalEndpoint' => [ 'type' => 'string', 'locationName' => 'internalEndpoint', ],
            ],
        ],
        'RuntimeVersionView' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'artifact' =>  [ 'shape' => 'ArtifactView', ],
                'network' =>  [ 'shape' => 'NetworkView', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'versionDescription' => [ 'type' => 'string', 'locationName' => 'versionDescription', ],
                'warmSession' => [ 'type' => 'integer', 'locationName' => 'warmSession', ],
                'maxSession' => [ 'type' => 'integer', 'locationName' => 'maxSession', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'lifecycle' =>  [ 'shape' => 'LifecycleView', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Env', ], ],
                'fileSystem' =>  [ 'shape' => 'FilesystemView', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'RuntimeView' => [
            'type' => 'structure',
            'members' => [
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'currentVersion' => [ 'type' => 'string', 'locationName' => 'currentVersion', ],
                'queriedVersion' => [ 'type' => 'string', 'locationName' => 'queriedVersion', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'versionView' =>  [ 'shape' => 'RuntimeVersionView', ],
                'apiKey' => [ 'type' => 'string', 'locationName' => 'apiKey', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ToolArguments' => [
            'type' => 'structure',
            'members' => [
                'clearContext' => [ 'type' => 'boolean', 'locationName' => 'clearContext', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'InputContentBlock', ], ],
                'directoryPath' => [ 'type' => 'string', 'locationName' => 'directoryPath', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'paths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'VersionSessionView' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'sessionCount' => [ 'type' => 'integer', 'locationName' => 'sessionCount', ],
            ],
        ],
        'VpcConfiguration' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcView' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'internalAccessDomain' => [ 'type' => 'string', 'locationName' => 'internalAccessDomain', ],
            ],
        ],
        'DescribeBrowserToolsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBrowserToolsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBrowserToolSessionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
            ],
        ],
        'DeleteBrowserToolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
            ],
        ],
        'DescribeBrowserToolSessionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBrowserToolSessionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBrowserToolsResultShape' => [
            'type' => 'structure',
            'members' => [
                'browserTools' => [ 'type' => 'list', 'member' => [ 'shape' => 'BrowserTool', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DeleteBrowserToolSessionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBrowserToolResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBrowserToolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBrowserToolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBrowserToolsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBrowserToolSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'CreateBrowserToolResultShape' => [
            'type' => 'structure',
            'members' => [
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
            ],
        ],
        'DescribeBrowserToolSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'DescribeBrowserToolResultShape' => [
            'type' => 'structure',
            'members' => [
                'browserTool' =>  [ 'shape' => 'BrowserTool', ],
            ],
        ],
        'DeleteBrowserToolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBrowserToolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'authenticationType' => [ 'type' => 'string', 'locationName' => 'authenticationType', ],
                'networkConfiguration' => [ 'type' => 'string', 'locationName' => 'networkConfiguration', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBrowserToolSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBrowserToolSessionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBrowserToolSessionResultShape' => [
            'type' => 'structure',
            'members' => [
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'CreateBrowserToolSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'maxLifeTime' => [ 'type' => 'integer', 'locationName' => 'maxLifeTime', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
            ],
        ],
        'DeleteBrowserToolSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBrowserToolSessionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'browserToolSessions' => [ 'type' => 'list', 'member' => [ 'shape' => 'BrowserToolSession', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DescribeBrowserToolSessionResultShape' => [
            'type' => 'structure',
            'members' => [
                'browserToolSession' =>  [ 'shape' => 'BrowserToolSession', ],
            ],
        ],
        'DescribeBrowserToolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'browserToolId' => [ 'type' => 'string', 'locationName' => 'browserToolId', ],
            ],
        ],
        'CreateBrowserToolSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBrowserToolSessionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBrowserToolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBrowserToolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimeEndpointsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeEndpoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuntimeEndpointInfo', ], ],
            ],
        ],
        'DescribeRuntimeEndpointResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRuntimeEndpointResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimeEndpointRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'DeleteRuntimeEndpointResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRuntimeEndpointResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeEndpoint' =>  [ 'shape' => 'RuntimeEndpointInfo', ],
            ],
        ],
        'DescribeRuntimeEndpointsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRuntimeEndpointsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimeEndpointsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteRuntimeEndpointResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRuntimeEndpointRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'CreateRuntimeEndpointResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRuntimeEndpointResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRuntimeEndpointResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicEndpoint' => [ 'type' => 'string', 'locationName' => 'publicEndpoint', ],
                'internalEndpoint' => [ 'type' => 'string', 'locationName' => 'internalEndpoint', ],
            ],
        ],
        'DeleteRuntimeEndpointRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'IngestMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => '', 'locationName' => 'body', ],
            ],
        ],
        'IngestMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'IngestLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IngestTracesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'IngestTracesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IngestLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => '', 'locationName' => 'body', ],
            ],
        ],
        'IngestTracesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => '', 'locationName' => 'body', ],
            ],
        ],
        'IngestMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IngestLogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetRuntimeSessionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRuntimeSessionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'artifactConfiguration' =>  [ 'shape' => 'ArtifactConfiguration', ],
                'warmSession' => [ 'type' => 'integer', 'locationName' => 'warmSession', ],
                'maxSession' => [ 'type' => 'integer', 'locationName' => 'maxSession', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'authorizerConfiguration' =>  [ 'shape' => 'AuthorizerConfiguration', ],
                'lifecycleConfiguration' =>  [ 'shape' => 'LifecycleConfiguration', ],
                'networkConfiguration' =>  [ 'shape' => 'NetworkConfiguration', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfiguration', ], ],
                'filesystemConfiguration' =>  [ 'shape' => 'FilesystemConfiguration', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateRuntimeAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'UpdateRuntimeAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateRuntimeAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRuntimeVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRuntimesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeView' =>  [ 'shape' => 'RuntimeView', ],
            ],
        ],
        'UpdateRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'runtimeVersion' => [ 'type' => 'string', 'locationName' => 'runtimeVersion', ],
            ],
        ],
        'DeleteRuntimeVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRuntimeSessionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'totalSession' => [ 'type' => 'integer', 'locationName' => 'totalSession', ],
                'versionSessions' => [ 'type' => 'list', 'member' => [ 'shape' => 'VersionSessionView', ], ],
            ],
        ],
        'UpdateRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'authorizerConfiguration' =>  [ 'shape' => 'AuthorizerConfiguration', ],
                'artifactConfiguration' =>  [ 'shape' => 'ArtifactConfiguration', ],
                'networkConfiguration' =>  [ 'shape' => 'NetworkConfiguration', ],
                'warmSession' => [ 'type' => 'integer', 'locationName' => 'warmSession', ],
                'maxSession' => [ 'type' => 'integer', 'locationName' => 'maxSession', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfiguration', ], ],
                'filesystemConfiguration' =>  [ 'shape' => 'FilesystemConfiguration', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'lifecycleConfiguration' =>  [ 'shape' => 'LifecycleConfiguration', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'ModifyRuntimeVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeRuntimeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'CreateRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRuntimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRuntimeVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'CreateRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'runtimeVersion' => [ 'type' => 'string', 'locationName' => 'runtimeVersion', ],
            ],
        ],
        'DescribeRuntimeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'runtimeVersionViews' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuntimeVersionView', ], ],
            ],
        ],
        'UpdateRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateRuntimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRuntimeVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimesResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'runtimes' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuntimeView', ], ],
            ],
        ],
        'DeleteRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRuntimesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRuntimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRuntimeVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRuntimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'DeleteRuntimeVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeRuntimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRuntimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRuntimeSessionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'runtimeId' => [ 'type' => 'string', 'locationName' => 'runtimeId', ],
            ],
        ],
        'DescribeCodeInterpretersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCodeInterpretersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCodeInterpreterSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCodeInterpreterSessionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCodeInterpreterSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'CreateCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'authenticationType' => [ 'type' => 'string', 'locationName' => 'authenticationType', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'networkConfiguration' => [ 'type' => 'string', 'locationName' => 'networkConfiguration', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'CreateCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'CreateCodeInterpreterSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'maxLifeTime' => [ 'type' => 'integer', 'locationName' => 'maxLifeTime', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'CreateCodeInterpreterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCodeInterpreterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCodeInterpreterSessionResultShape' => [
            'type' => 'structure',
            'members' => [
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'DescribeCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreter' =>  [ 'shape' => 'CodeInterpreter', ],
            ],
        ],
        'DeleteCodeInterpreterSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCodeInterpretersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCodeInterpreterSessionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'codeInterpreterSessions' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeInterpreterSession', ], ],
            ],
        ],
        'DescribeCodeInterpreterSessionResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeInterpreterSession' =>  [ 'shape' => 'CodeInterpreterSession', ],
            ],
        ],
        'DeleteCodeInterpreterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCodeInterpreterSessionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'DeleteCodeInterpreterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCodeInterpretersResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'codeInterpreters' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeInterpreter', ], ],
            ],
        ],
        'DescribeCodeInterpreterSessionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCodeInterpreterSessionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCodeInterpreterSessionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'DescribeCodeInterpreterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'codeInterpreterId' => [ 'type' => 'string', 'locationName' => 'codeInterpreterId', ],
            ],
        ],
        'DescribeCodeInterpreterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCodeInterpreterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCodeInterpreterSessionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCodeInterpreterSessionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCodeInterpreterSessionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
