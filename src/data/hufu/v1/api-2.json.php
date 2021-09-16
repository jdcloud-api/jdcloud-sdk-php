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
    ],
];
