<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'function',
        'protocol' => 'json',
//        'serviceFullName' => 'function',
//        'serviceId' => 'function',
    ],
    'operations' => [
        'ListAlias' => [
            'name' => 'ListAlias',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/aliases',
            ],
            'input' => [ 'shape' => 'ListAliasRequestShape', ],
            'output' => [ 'shape' => 'ListAliasResponseShape', ],
        ],
        'CreateAlias' => [
            'name' => 'CreateAlias',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/aliases',
            ],
            'input' => [ 'shape' => 'CreateAliasRequestShape', ],
            'output' => [ 'shape' => 'CreateAliasResponseShape', ],
        ],
        'GetAlias' => [
            'name' => 'GetAlias',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/aliases/{aliasName}',
            ],
            'input' => [ 'shape' => 'GetAliasRequestShape', ],
            'output' => [ 'shape' => 'GetAliasResponseShape', ],
        ],
        'UpdateAlias' => [
            'name' => 'UpdateAlias',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/aliases/{aliasName}',
            ],
            'input' => [ 'shape' => 'UpdateAliasRequestShape', ],
            'output' => [ 'shape' => 'UpdateAliasResponseShape', ],
        ],
        'DeleteAlias' => [
            'name' => 'DeleteAlias',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/aliases/{aliasName}',
            ],
            'input' => [ 'shape' => 'DeleteAliasRequestShape', ],
            'output' => [ 'shape' => 'DeleteAliasResponseShape', ],
        ],
        'ListFunction' => [
            'name' => 'ListFunction',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions',
            ],
            'input' => [ 'shape' => 'ListFunctionRequestShape', ],
            'output' => [ 'shape' => 'ListFunctionResponseShape', ],
        ],
        'CreateFunction' => [
            'name' => 'CreateFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/functions',
            ],
            'input' => [ 'shape' => 'CreateFunctionRequestShape', ],
            'output' => [ 'shape' => 'CreateFunctionResponseShape', ],
        ],
        'GetFunction' => [
            'name' => 'GetFunction',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}',
            ],
            'input' => [ 'shape' => 'GetFunctionRequestShape', ],
            'output' => [ 'shape' => 'GetFunctionResponseShape', ],
        ],
        'UpdateFunction' => [
            'name' => 'UpdateFunction',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}',
            ],
            'input' => [ 'shape' => 'UpdateFunctionRequestShape', ],
            'output' => [ 'shape' => 'UpdateFunctionResponseShape', ],
        ],
        'DeleteFunction' => [
            'name' => 'DeleteFunction',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}',
            ],
            'input' => [ 'shape' => 'DeleteFunctionRequestShape', ],
            'output' => [ 'shape' => 'DeleteFunctionResponseShape', ],
        ],
        'Invoke' => [
            'name' => 'Invoke',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}:invoke',
            ],
            'input' => [ 'shape' => 'InvokeRequestShape', ],
            'output' => [ 'shape' => 'InvokeResponseShape', ],
        ],
        'AsyncInvoke' => [
            'name' => 'AsyncInvoke',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}:asyncinvoke',
            ],
            'input' => [ 'shape' => 'AsyncInvokeRequestShape', ],
            'output' => [ 'shape' => 'AsyncInvokeResponseShape', ],
        ],
        'GetTrigger' => [
            'name' => 'GetTrigger',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}:gettrigger',
            ],
            'input' => [ 'shape' => 'GetTriggerRequestShape', ],
            'output' => [ 'shape' => 'GetTriggerResponseShape', ],
        ],
        'ListVersion' => [
            'name' => 'ListVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions',
            ],
            'input' => [ 'shape' => 'ListVersionRequestShape', ],
            'output' => [ 'shape' => 'ListVersionResponseShape', ],
        ],
        'CreateVersion' => [
            'name' => 'CreateVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions',
            ],
            'input' => [ 'shape' => 'CreateVersionRequestShape', ],
            'output' => [ 'shape' => 'CreateVersionResponseShape', ],
        ],
        'GetVersion' => [
            'name' => 'GetVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}',
            ],
            'input' => [ 'shape' => 'GetVersionRequestShape', ],
            'output' => [ 'shape' => 'GetVersionResponseShape', ],
        ],
        'DeleteVersion' => [
            'name' => 'DeleteVersion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/functions/{functionName}/versions/{versionName}',
            ],
            'input' => [ 'shape' => 'DeleteVersionRequestShape', ],
            'output' => [ 'shape' => 'DeleteVersionResponseShape', ],
        ],
    ],
    'shapes' => [
        'Alias' => [
            'type' => 'structure',
            'members' => [
                'aliasId' => [ 'type' => 'string', 'locationName' => 'aliasId', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'flavorKey' => [ 'type' => 'string', 'locationName' => 'flavorKey', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'disk' => [ 'type' => 'integer', 'locationName' => 'disk', ],
            ],
        ],
        'FunctionSpec' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'string', 'locationName' => 'functionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'runtime' => [ 'type' => 'string', 'locationName' => 'runtime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
            ],
        ],
        'Function' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'string', 'locationName' => 'functionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'entrance' => [ 'type' => 'string', 'locationName' => 'entrance', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'overTime' => [ 'type' => 'integer', 'locationName' => 'overTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'code' =>  [ 'shape' => 'Code', ],
                'environment' =>  [ 'shape' => 'Env', ],
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'codeCheckSum' => [ 'type' => 'string', 'locationName' => 'codeCheckSum', ],
                'codeSize' => [ 'type' => 'integer', 'locationName' => 'codeSize', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateFunctionInput' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'entrance' => [ 'type' => 'string', 'locationName' => 'entrance', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'overTime' => [ 'type' => 'integer', 'locationName' => 'overTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'code' =>  [ 'shape' => 'Code', ],
                'environment' =>  [ 'shape' => 'Env', ],
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'UpdateFunctionInput' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'entrance' => [ 'type' => 'string', 'locationName' => 'entrance', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'overTime' => [ 'type' => 'integer', 'locationName' => 'overTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'code' =>  [ 'shape' => 'Code', ],
                'environment' =>  [ 'shape' => 'Env', ],
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'Code' => [
            'type' => 'structure',
            'members' => [
                'zipFile' => [ 'type' => 'string', 'locationName' => 'zipFile', ],
                'onlineCode' => [ 'type' => 'string', 'locationName' => 'onlineCode', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
            ],
        ],
        'Env' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'Statistics' => [
            'type' => 'structure',
            'members' => [
                'currentFunctionNumber' => [ 'type' => 'integer', 'locationName' => 'currentFunctionNumber', ],
                'maxFunctionNumber' => [ 'type' => 'integer', 'locationName' => 'maxFunctionNumber', ],
                'currentCodeSize' => [ 'type' => 'float', 'locationName' => 'currentCodeSize', ],
                'maxCodeSize' => [ 'type' => 'integer', 'locationName' => 'maxCodeSize', ],
            ],
        ],
        'OssTrigger' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'configId' => [ 'type' => 'string', 'locationName' => 'configId', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'suffix' => [ 'type' => 'string', 'locationName' => 'suffix', ],
            ],
        ],
        'Trigger' => [
            'type' => 'structure',
            'members' => [
                'triggerId' => [ 'type' => 'string', 'locationName' => 'triggerId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
                'eventSource' => [ 'type' => 'string', 'locationName' => 'eventSource', ],
                'eventSourceId' => [ 'type' => 'string', 'locationName' => 'eventSourceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ApiTrigger' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'path' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deploymentStatus' => [ 'type' => 'integer', 'locationName' => 'deploymentStatus', ],
            ],
        ],
        'ListTriggerData' => [
            'type' => 'structure',
            'members' => [
                'ossTriggers' => [ 'type' => 'list', 'member' => [ 'shape' => 'OssTrigger', ], ],
                'apiGwTriggers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiTrigger', ], ],
            ],
        ],
        'ListAliasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'GetAliasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
            ],
        ],
        'CreateAliasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'UpdateAliasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateAliasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAliasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
            ],
        ],
        'DeleteAliasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
            ],
        ],
        'DeleteAliasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListAliasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListAliasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListAliasResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Alias', ], ],
            ],
        ],
        'UpdateAliasResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Alias', ],
            ],
        ],
        'CreateAliasResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Alias', ],
            ],
        ],
        'GetAliasResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Alias', ],
            ],
        ],
        'CreateAliasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAliasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAliasResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAliasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAliasResultShape', ],
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
        'UpdateFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateFunctionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InvokeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InvokeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Function', ],
            ],
        ],
        'DeleteFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetFunctionResultShape', ],
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
        'AsyncInvokeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ListFunctionResult', ],
            ],
        ],
        'FunctionInvokeResult' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'codeCheckSum' => [ 'type' => 'string', 'locationName' => 'codeCheckSum', ],
                'invokeTime' => [ 'type' => 'float', 'locationName' => 'invokeTime', ],
                'billingTime' => [ 'type' => 'double', 'locationName' => 'billingTime', ],
                'setupMem' => [ 'type' => 'double', 'locationName' => 'setupMem', ],
                'realMem' => [ 'type' => 'float', 'locationName' => 'realMem', ],
                'logStr' => [ 'type' => 'string', 'locationName' => 'logStr', ],
            ],
        ],
        'AsyncInvokeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'event' => [ 'type' => 'string', 'locationName' => 'event', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'ListFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListFunctionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'InvokeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'event' => [ 'type' => 'string', 'locationName' => 'event', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'CreateFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Function', ],
            ],
        ],
        'DeleteFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'ListFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'listAll' => [ 'type' => 'boolean', 'locationName' => 'listAll', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListFunctionResult' => [
            'type' => 'structure',
            'members' => [
                'functions' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionSpec', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'entrance' => [ 'type' => 'string', 'locationName' => 'entrance', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'overTime' => [ 'type' => 'integer', 'locationName' => 'overTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'code' =>  [ 'shape' => 'Code', ],
                'environment' =>  [ 'shape' => 'Env', ],
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Function', ],
            ],
        ],
        'UpdateFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'entrance' => [ 'type' => 'string', 'locationName' => 'entrance', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'overTime' => [ 'type' => 'integer', 'locationName' => 'overTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'code' =>  [ 'shape' => 'Code', ],
                'environment' =>  [ 'shape' => 'Env', ],
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'InvokeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'FunctionInvokeResult', ],
            ],
        ],
        'AsyncInvokeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'triggerId' => [ 'type' => 'string', 'locationName' => 'triggerId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'GetTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Trigger', ],
            ],
        ],
        'GetTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTriggerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'DeleteVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionSpec', ], ],
            ],
        ],
        'ListVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Function', ],
            ],
        ],
        'ListVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'CreateVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Function', ],
            ],
        ],
        'DeleteVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
            ],
        ],
        'CreateVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
            ],
        ],
        'GetVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
