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
    ],
];
