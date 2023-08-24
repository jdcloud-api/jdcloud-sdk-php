<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'fc',
        'protocol' => 'json',
//        'serviceFullName' => 'fc',
//        'serviceId' => 'fc',
    ],
    'operations' => [
        'DescribeFunctions' => [
            'name' => 'DescribeFunctions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions',
            ],
            'input' => [ 'shape' => 'DescribeFunctionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeFunctionsResponseShape', ],
        ],
        'CreateFunction' => [
            'name' => 'CreateFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions',
            ],
            'input' => [ 'shape' => 'CreateFunctionRequestShape', ],
            'output' => [ 'shape' => 'CreateFunctionResponseShape', ],
        ],
        'DescribeFunction' => [
            'name' => 'DescribeFunction',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}',
            ],
            'input' => [ 'shape' => 'DescribeFunctionRequestShape', ],
            'output' => [ 'shape' => 'DescribeFunctionResponseShape', ],
        ],
        'UpdateFunction' => [
            'name' => 'UpdateFunction',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}',
            ],
            'input' => [ 'shape' => 'UpdateFunctionRequestShape', ],
            'output' => [ 'shape' => 'UpdateFunctionResponseShape', ],
        ],
        'DeleteFunction' => [
            'name' => 'DeleteFunction',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}',
            ],
            'input' => [ 'shape' => 'DeleteFunctionRequestShape', ],
            'output' => [ 'shape' => 'DeleteFunctionResponseShape', ],
        ],
        'DescribeFunctionCode' => [
            'name' => 'DescribeFunctionCode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/code',
            ],
            'input' => [ 'shape' => 'DescribeFunctionCodeRequestShape', ],
            'output' => [ 'shape' => 'DescribeFunctionCodeResponseShape', ],
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
        'InvokeFunction' => [
            'name' => 'InvokeFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/invocations',
            ],
            'input' => [ 'shape' => 'InvokeFunctionRequestShape', ],
            'output' => [ 'shape' => 'InvokeFunctionResponseShape', ],
        ],
        'DescribeInstanceTypes' => [
            'name' => 'DescribeInstanceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTypes',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTypesResponseShape', ],
        ],
        'DescribeServices' => [
            'name' => 'DescribeServices',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services',
            ],
            'input' => [ 'shape' => 'DescribeServicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeServicesResponseShape', ],
        ],
        'CreateService' => [
            'name' => 'CreateService',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/services',
            ],
            'input' => [ 'shape' => 'CreateServiceRequestShape', ],
            'output' => [ 'shape' => 'CreateServiceResponseShape', ],
        ],
        'DescribeService' => [
            'name' => 'DescribeService',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'DescribeServiceRequestShape', ],
            'output' => [ 'shape' => 'DescribeServiceResponseShape', ],
        ],
        'UpdateService' => [
            'name' => 'UpdateService',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'UpdateServiceRequestShape', ],
            'output' => [ 'shape' => 'UpdateServiceResponseShape', ],
        ],
        'DeleteService' => [
            'name' => 'DeleteService',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'DeleteServiceRequestShape', ],
            'output' => [ 'shape' => 'DeleteServiceResponseShape', ],
        ],
        'DescribeTriggers' => [
            'name' => 'DescribeTriggers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/triggers',
            ],
            'input' => [ 'shape' => 'DescribeTriggersRequestShape', ],
            'output' => [ 'shape' => 'DescribeTriggersResponseShape', ],
        ],
        'CreateTrigger' => [
            'name' => 'CreateTrigger',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/triggers',
            ],
            'input' => [ 'shape' => 'CreateTriggerRequestShape', ],
            'output' => [ 'shape' => 'CreateTriggerResponseShape', ],
        ],
        'DescribeTrigger' => [
            'name' => 'DescribeTrigger',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
            ],
            'input' => [ 'shape' => 'DescribeTriggerRequestShape', ],
            'output' => [ 'shape' => 'DescribeTriggerResponseShape', ],
        ],
        'UpdateTrigger' => [
            'name' => 'UpdateTrigger',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
            ],
            'input' => [ 'shape' => 'UpdateTriggerRequestShape', ],
            'output' => [ 'shape' => 'UpdateTriggerResponseShape', ],
        ],
        'DeleteTrigger' => [
            'name' => 'DeleteTrigger',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
            ],
            'input' => [ 'shape' => 'DeleteTriggerRequestShape', ],
            'output' => [ 'shape' => 'DeleteTriggerResponseShape', ],
        ],
    ],
    'shapes' => [
        'Code' => [
            'type' => 'structure',
            'members' => [
                'zipFile' => [ 'type' => 'string', 'locationName' => 'zipFile', ],
            ],
        ],
        'Environment' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Function' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'string', 'locationName' => 'functionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'checkSum' => [ 'type' => 'string', 'locationName' => 'checkSum', ],
                'codeSize' => [ 'type' => 'integer', 'locationName' => 'codeSize', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Environment', ], ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'handler' => [ 'type' => 'string', 'locationName' => 'handler', ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memorySize' => [ 'type' => 'integer', 'locationName' => 'memorySize', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'invocationCount' => [ 'type' => 'integer', 'locationName' => 'invocationCount', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'FunctionInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'FunctionSpec' => [
            'type' => 'structure',
            'members' => [
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'code' =>  [ 'shape' => 'Code', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'handler' => [ 'type' => 'string', 'locationName' => 'handler', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Environment', ], ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memorySize' => [ 'type' => 'integer', 'locationName' => 'memorySize', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memorySize' => [ 'type' => 'integer', 'locationName' => 'memorySize', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'InternalCode' => [
            'type' => 'structure',
            'members' => [
                'ossBucketName' => [ 'type' => 'string', 'locationName' => 'ossBucketName', ],
                'ossObjectName' => [ 'type' => 'string', 'locationName' => 'ossObjectName', ],
                'codeCheckSum' => [ 'type' => 'string', 'locationName' => 'codeCheckSum', ],
                'codeSize' => [ 'type' => 'integer', 'locationName' => 'codeSize', ],
            ],
        ],
        'InternalFunctionSpec' => [
            'type' => 'structure',
            'members' => [
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'code' =>  [ 'shape' => 'InternalCode', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'handler' => [ 'type' => 'string', 'locationName' => 'handler', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Environment', ], ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memorySize' => [ 'type' => 'integer', 'locationName' => 'memorySize', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
            ],
        ],
        'LogConfig' => [
            'type' => 'structure',
            'members' => [
                'logSetUid' => [ 'type' => 'string', 'locationName' => 'logSetUid', ],
                'logTopicUid' => [ 'type' => 'string', 'locationName' => 'logTopicUid', ],
            ],
        ],
        'Service' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'invocationCount' => [ 'type' => 'integer', 'locationName' => 'invocationCount', ],
                'functionCounts' => [ 'type' => 'integer', 'locationName' => 'functionCounts', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ServiceSpec' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
            ],
        ],
        'Trigger' => [
            'type' => 'structure',
            'members' => [
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' => [ 'type' => 'string', 'locationName' => 'triggerConfig', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sourceJrn' => [ 'type' => 'string', 'locationName' => 'sourceJrn', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'TriggerSpec' => [
            'type' => 'structure',
            'members' => [
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' => [ 'type' => 'string', 'locationName' => 'triggerConfig', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sourceJrn' => [ 'type' => 'string', 'locationName' => 'sourceJrn', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'InvokeFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeFunctionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'CreateFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionSpec' =>  [ 'shape' => 'FunctionSpec', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'DescribeFunctionCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFunctionCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFunctionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deleteTrigger' => [ 'type' => 'boolean', 'locationName' => 'deleteTrigger', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'DeleteFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InvokeFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'DescribeFunctionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'functions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Function', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'DescribeFunctionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFunctionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRuntimesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'code' =>  [ 'shape' => 'Code', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'handler' => [ 'type' => 'string', 'locationName' => 'handler', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Environment', ], ],
                'cpu' => [ 'type' => 'double', 'locationName' => 'cpu', ],
                'memorySize' => [ 'type' => 'integer', 'locationName' => 'memorySize', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'DescribeRuntimesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRuntimesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'function' =>  [ 'shape' => 'Function', ],
            ],
        ],
        'DescribeRuntimesResultShape' => [
            'type' => 'structure',
            'members' => [
                'runtimes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeFunctionCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'UpdateFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeFunctionCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'checkSum' => [ 'type' => 'string', 'locationName' => 'checkSum', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'InvokeFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'DescribeFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFunctionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeServicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServicesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateServiceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeServicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'DescribeServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'service' =>  [ 'shape' => 'Service', ],
            ],
        ],
        'DescribeServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'DeleteServiceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceSpec' =>  [ 'shape' => 'ServiceSpec', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'DescribeServicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'services' => [ 'type' => 'list', 'member' => [ 'shape' => 'Service', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateServiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'CreateTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'triggerSpec' =>  [ 'shape' => 'TriggerSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'CreateTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
            ],
        ],
        'DescribeTriggersResultShape' => [
            'type' => 'structure',
            'members' => [
                'triggers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Trigger', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
            ],
        ],
        'CreateTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTriggerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTriggersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTriggersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'trigger' =>  [ 'shape' => 'Trigger', ],
            ],
        ],
        'DescribeTriggersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'DescribeTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTriggerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
            ],
        ],
        'UpdateTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'triggerConfig' => [ 'type' => 'string', 'locationName' => 'triggerConfig', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
            ],
        ],
    ],
];
