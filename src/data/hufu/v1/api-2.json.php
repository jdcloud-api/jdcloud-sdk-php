<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'hufu',
        'protocol' => 'json',
//        'serviceFullName' => 'hufu',
//        'serviceId' => 'hufu',
    ],
    'operations' => [
        'Deploy' => [
            'name' => 'Deploy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/scenes/{sceneId}/deployments',
            ],
            'input' => [ 'shape' => 'DeployRequestShape', ],
            'output' => [ 'shape' => 'DeployResponseShape', ],
        ],
        'DescribeDeployment' => [
            'name' => 'DescribeDeployment',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/scenes/{sceneId}/deployments/{deploymentId}',
            ],
            'input' => [ 'shape' => 'DescribeDeploymentRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeploymentResponseShape', ],
        ],
        'Encrypt' => [
            'name' => 'Encrypt',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/encrypt',
            ],
            'input' => [ 'shape' => 'EncryptRequestShape', ],
            'output' => [ 'shape' => 'EncryptResponseShape', ],
        ],
        'IsEncryptData' => [
            'name' => 'IsEncryptData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/isEncryptData',
            ],
            'input' => [ 'shape' => 'IsEncryptDataRequestShape', ],
            'output' => [ 'shape' => 'IsEncryptDataResponseShape', ],
        ],
        'QueryAccessLog' => [
            'name' => 'QueryAccessLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/access',
            ],
            'input' => [ 'shape' => 'QueryAccessLogRequestShape', ],
            'output' => [ 'shape' => 'QueryAccessLogResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccessLog' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'Api' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'backServiceType' => [ 'type' => 'string', 'locationName' => 'backServiceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'reqParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'reqBody' => [ 'type' => 'string', 'locationName' => 'reqBody', ],
                'resBody' => [ 'type' => 'string', 'locationName' => 'resBody', ],
                'reqBodyType' => [ 'type' => 'integer', 'locationName' => 'reqBodyType', ],
                'resBodyType' => [ 'type' => 'integer', 'locationName' => 'resBodyType', ],
                'apiBackendConfig' =>  [ 'shape' => 'ApiBackendConfig', ],
                'hufuAppTypeId' => [ 'type' => 'integer', 'locationName' => 'hufuAppTypeId', ],
                'deploymentEnvironment' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'editableReqBodyType' => [ 'type' => 'string', 'locationName' => 'editableReqBodyType', ],
                'editableResBodyType' => [ 'type' => 'string', 'locationName' => 'editableResBodyType', ],
                'wafStatus' => [ 'type' => 'string', 'locationName' => 'wafStatus', ],
                'reqBodyFormatType' => [ 'type' => 'integer', 'locationName' => 'reqBodyFormatType', ],
                'resBodyFormatType' => [ 'type' => 'integer', 'locationName' => 'resBodyFormatType', ],
            ],
        ],
        'DebugReturnMessage' => [
            'type' => 'structure',
            'members' => [
                'requestUrl' => [ 'type' => 'string', 'locationName' => 'requestUrl', ],
                'requestHeader' => [ 'type' => 'string', 'locationName' => 'requestHeader', ],
                'requestBody' => [ 'type' => 'string', 'locationName' => 'requestBody', ],
                'responseCodeStatus' => [ 'type' => 'string', 'locationName' => 'responseCodeStatus', ],
                'responseHeaderValue' => [ 'type' => 'string', 'locationName' => 'responseHeaderValue', ],
                'responseBody' => [ 'type' => 'string', 'locationName' => 'responseBody', ],
            ],
        ],
        'DebugApi' => [
            'type' => 'structure',
            'members' => [
                'assessKey' => [ 'type' => 'string', 'locationName' => 'assessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'queryString' => [ 'type' => 'string', 'locationName' => 'queryString', ],
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'reqBodyType' => [ 'type' => 'string', 'locationName' => 'reqBodyType', ],
                'editableReqBodyType' => [ 'type' => 'string', 'locationName' => 'editableReqBodyType', ],
                'headerString' => [ 'type' => 'string', 'locationName' => 'headerString', ],
            ],
        ],
        'ApiBackendConfig' => [
            'type' => 'structure',
            'members' => [
                'backendPath' => [ 'type' => 'string', 'locationName' => 'backendPath', ],
                'backendAction' => [ 'type' => 'string', 'locationName' => 'backendAction', ],
                'backendParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendParameter', ], ],
                'backendConstParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
            ],
        ],
        'CreateApi' => [
            'type' => 'structure',
            'members' => [
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'reqParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'reqBody' => [ 'type' => 'string', 'locationName' => 'reqBody', ],
                'resBody' => [ 'type' => 'string', 'locationName' => 'resBody', ],
                'reqBodyType' => [ 'type' => 'integer', 'locationName' => 'reqBodyType', ],
                'resBodyType' => [ 'type' => 'integer', 'locationName' => 'resBodyType', ],
                'apiBackendConfig' =>  [ 'shape' => 'ApiBackendConfig', ],
                'backServiceType' => [ 'type' => 'string', 'locationName' => 'backServiceType', ],
                'backServicePath' => [ 'type' => 'string', 'locationName' => 'backServicePath', ],
                'backServiceId' => [ 'type' => 'string', 'locationName' => 'backServiceId', ],
                'backServiceName' => [ 'type' => 'string', 'locationName' => 'backServiceName', ],
                'backUrl' => [ 'type' => 'string', 'locationName' => 'backUrl', ],
                'backServiceConfig' => [ 'type' => 'boolean', 'locationName' => 'backServiceConfig', ],
                'backServiceVersion' => [ 'type' => 'string', 'locationName' => 'backServiceVersion', ],
                'hufuAppTypeId' => [ 'type' => 'integer', 'locationName' => 'hufuAppTypeId', ],
                'editableReqBodyType' => [ 'type' => 'string', 'locationName' => 'editableReqBodyType', ],
                'editableResBodyType' => [ 'type' => 'string', 'locationName' => 'editableResBodyType', ],
                'reqBodyFormatType' => [ 'type' => 'integer', 'locationName' => 'reqBodyFormatType', ],
                'resBodyFormatType' => [ 'type' => 'integer', 'locationName' => 'resBodyFormatType', ],
            ],
        ],
        'BackendParameter' => [
            'type' => 'structure',
            'members' => [
                'backendName' => [ 'type' => 'string', 'locationName' => 'backendName', ],
                'backendParamLocation' => [ 'type' => 'string', 'locationName' => 'backendParamLocation', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'paramLocation' => [ 'type' => 'string', 'locationName' => 'paramLocation', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
            ],
        ],
        'Parameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'paramLocation' => [ 'type' => 'string', 'locationName' => 'paramLocation', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'isRequired' => [ 'type' => 'boolean', 'locationName' => 'isRequired', ],
            ],
        ],
        'ImportApi' => [
            'type' => 'structure',
            'members' => [
                'apiDefine' => [ 'type' => 'binary', 'locationName' => 'apiDefine', ],
            ],
        ],
        'HufuApi' => [
            'type' => 'structure',
            'members' => [
                'apiId' => [ 'type' => 'string', 'locationName' => 'apiId', ],
                'apiGroupId' => [ 'type' => 'string', 'locationName' => 'apiGroupId', ],
                'apiStatus' => [ 'type' => 'string', 'locationName' => 'apiStatus', ],
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'hufuAppTypeId' => [ 'type' => 'integer', 'locationName' => 'hufuAppTypeId', ],
            ],
        ],
        'Deploy' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'Deployment' => [
            'type' => 'structure',
            'members' => [
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'IsEncryptDataInput' => [
            'type' => 'structure',
            'members' => [
                'cipher' => [ 'type' => 'string', 'locationName' => 'cipher', ],
            ],
        ],
        'EncryptInput' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
            ],
        ],
        'CreateRevision' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'baseRevision' => [ 'type' => 'string', 'locationName' => 'baseRevision', ],
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
            ],
        ],
        'UpdateRevision' => [
            'type' => 'structure',
            'members' => [
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
            ],
        ],
        'RevisionList' => [
            'type' => 'structure',
            'members' => [
                'revisionId' => [ 'type' => 'string', 'locationName' => 'revisionId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'baseRevision' => [ 'type' => 'string', 'locationName' => 'baseRevision', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'revisionNote' => [ 'type' => 'string', 'locationName' => 'revisionNote', ],
            ],
        ],
        'GenerateInfo' => [
            'type' => 'structure',
            'members' => [
                'fileStatus' => [ 'type' => 'integer', 'locationName' => 'fileStatus', ],
                'fileUrl' => [ 'type' => 'string', 'locationName' => 'fileUrl', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
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
        'DescribeDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
            ],
        ],
        'DeployResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sceneId' => [ 'type' => 'integer', 'locationName' => 'sceneId', ],
                'deploymentId' => [ 'type' => 'string', 'locationName' => 'deploymentId', ],
            ],
        ],
        'DeployResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeployRequestShape' => [
            'type' => 'structure',
            'members' => [
                'revision' => [ 'type' => 'string', 'locationName' => 'revision', ],
                'environment' => [ 'type' => 'string', 'locationName' => 'environment', ],
                'backendServiceType' => [ 'type' => 'string', 'locationName' => 'backendServiceType', ],
                'backendUrl' => [ 'type' => 'string', 'locationName' => 'backendUrl', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jdsfName' => [ 'type' => 'string', 'locationName' => 'jdsfName', ],
                'jdsfRegistryName' => [ 'type' => 'string', 'locationName' => 'jdsfRegistryName', ],
                'jdsfId' => [ 'type' => 'string', 'locationName' => 'jdsfId', ],
                'sceneId' => [ 'type' => 'integer', 'locationName' => 'sceneId', ],
            ],
        ],
        'EncryptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
            ],
        ],
        'EncryptResultShape' => [
            'type' => 'structure',
            'members' => [
                'ciphertext' => [ 'type' => 'string', 'locationName' => 'ciphertext', ],
            ],
        ],
        'IsEncryptDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IsEncryptDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IsEncryptDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cipher' => [ 'type' => 'string', 'locationName' => 'cipher', ],
            ],
        ],
        'IsEncryptDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'encryptData' => [ 'type' => 'boolean', 'locationName' => 'encryptData', ],
            ],
        ],
        'EncryptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EncryptResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryAccessLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessLog', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'QueryAccessLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'call_pin' => [ 'type' => 'string', 'locationName' => 'call_pin', ],
                'response_status' => [ 'type' => 'string', 'locationName' => 'response_status', ],
                'api_name' => [ 'type' => 'string', 'locationName' => 'api_name', ],
                'access_key' => [ 'type' => 'string', 'locationName' => 'access_key', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'QueryAccessLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryAccessLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
