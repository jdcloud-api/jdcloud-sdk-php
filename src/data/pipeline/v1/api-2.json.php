<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'pipeline',
        'protocol' => 'json',
//        'serviceFullName' => 'pipeline',
//        'serviceId' => 'pipeline',
    ],
    'operations' => [
        'GetLimits' => [
            'name' => 'GetLimits',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/limits',
            ],
            'input' => [ 'shape' => 'GetLimitsRequestShape', ],
            'output' => [ 'shape' => 'GetLimitsResponseShape', ],
        ],
        'GetSourceProviders' => [
            'name' => 'GetSourceProviders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/options/sourceProviders',
            ],
            'input' => [ 'shape' => 'GetSourceProvidersRequestShape', ],
            'output' => [ 'shape' => 'GetSourceProvidersResponseShape', ],
        ],
        'GetOperationProviders' => [
            'name' => 'GetOperationProviders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/options/operationProviders',
            ],
            'input' => [ 'shape' => 'GetOperationProvidersRequestShape', ],
            'output' => [ 'shape' => 'GetOperationProvidersResponseShape', ],
        ],
        'GetRegions' => [
            'name' => 'GetRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/options/regions',
            ],
            'input' => [ 'shape' => 'GetRegionsRequestShape', ],
            'output' => [ 'shape' => 'GetRegionsResponseShape', ],
        ],
        'GetPipelines' => [
            'name' => 'GetPipelines',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline',
            ],
            'input' => [ 'shape' => 'GetPipelinesRequestShape', ],
            'output' => [ 'shape' => 'GetPipelinesResponseShape', ],
        ],
        'CreatePipeline' => [
            'name' => 'CreatePipeline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline',
            ],
            'input' => [ 'shape' => 'CreatePipelineRequestShape', ],
            'output' => [ 'shape' => 'CreatePipelineResponseShape', ],
        ],
        'GetPipeline' => [
            'name' => 'GetPipeline',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}',
            ],
            'input' => [ 'shape' => 'GetPipelineRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineResponseShape', ],
        ],
        'UpdatePipeline' => [
            'name' => 'UpdatePipeline',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}',
            ],
            'input' => [ 'shape' => 'UpdatePipelineRequestShape', ],
            'output' => [ 'shape' => 'UpdatePipelineResponseShape', ],
        ],
        'DeletePipeline' => [
            'name' => 'DeletePipeline',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}',
            ],
            'input' => [ 'shape' => 'DeletePipelineRequestShape', ],
            'output' => [ 'shape' => 'DeletePipelineResponseShape', ],
        ],
        'StartPipeline' => [
            'name' => 'StartPipeline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}:start',
            ],
            'input' => [ 'shape' => 'StartPipelineRequestShape', ],
            'output' => [ 'shape' => 'StartPipelineResponseShape', ],
        ],
        'ManualAction' => [
            'name' => 'ManualAction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instances/{instanceUuid}/actions/{actionUuid}:manual',
            ],
            'input' => [ 'shape' => 'ManualActionRequestShape', ],
            'output' => [ 'shape' => 'ManualActionResponseShape', ],
        ],
        'GetPipelineInstancesByUuids' => [
            'name' => 'GetPipelineInstancesByUuids',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'GetPipelineInstancesByUuidsRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineInstancesByUuidsResponseShape', ],
        ],
        'GetPipelineInstances' => [
            'name' => 'GetPipelineInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instances',
            ],
            'input' => [ 'shape' => 'GetPipelineInstancesRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineInstancesResponseShape', ],
        ],
        'GetPipelineInstance' => [
            'name' => 'GetPipelineInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instance/{instanceUuid}',
            ],
            'input' => [ 'shape' => 'GetPipelineInstanceRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineInstanceResponseShape', ],
        ],
        'StopPipelineInstance' => [
            'name' => 'StopPipelineInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instance/{instanceUuid}:stop',
            ],
            'input' => [ 'shape' => 'StopPipelineInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopPipelineInstanceResponseShape', ],
        ],
        'ReadFile' => [
            'name' => 'ReadFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/file',
            ],
            'input' => [ 'shape' => 'ReadFileRequestShape', ],
            'output' => [ 'shape' => 'ReadFileResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
