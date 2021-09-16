<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'vqd',
        'protocol' => 'json',
//        'serviceFullName' => 'vqd',
//        'serviceId' => 'vqd',
    ],
    'operations' => [
        'SetCallback' => [
            'name' => 'SetCallback',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/settings:setCallback',
            ],
            'input' => [ 'shape' => 'SetCallbackRequestShape', ],
            'output' => [ 'shape' => 'SetCallbackResponseShape', ],
        ],
        'QueryCallback' => [
            'name' => 'QueryCallback',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/settings:queryCallback',
            ],
            'input' => [ 'shape' => 'QueryCallbackRequestShape', ],
            'output' => [ 'shape' => 'QueryCallbackResponseShape', ],
        ],
        'SubmitVqdTask' => [
            'name' => 'SubmitVqdTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:submit',
            ],
            'input' => [ 'shape' => 'SubmitVqdTaskRequestShape', ],
            'output' => [ 'shape' => 'SubmitVqdTaskResponseShape', ],
        ],
        'BatchSubmitVqdTasks' => [
            'name' => 'BatchSubmitVqdTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:batchSubmit',
            ],
            'input' => [ 'shape' => 'BatchSubmitVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'BatchSubmitVqdTasksResponseShape', ],
        ],
        'ListVqdTasks' => [
            'name' => 'ListVqdTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTasks',
            ],
            'input' => [ 'shape' => 'ListVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'ListVqdTasksResponseShape', ],
        ],
        'GetVqdTask' => [
            'name' => 'GetVqdTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'GetVqdTaskRequestShape', ],
            'output' => [ 'shape' => 'GetVqdTaskResponseShape', ],
        ],
        'DeleteVqdTask' => [
            'name' => 'DeleteVqdTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/vqdTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteVqdTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteVqdTaskResponseShape', ],
        ],
        'QueryVqdTaskResult' => [
            'name' => 'QueryVqdTaskResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTasks/{taskId}:queryResult',
            ],
            'input' => [ 'shape' => 'QueryVqdTaskResultRequestShape', ],
            'output' => [ 'shape' => 'QueryVqdTaskResultResponseShape', ],
        ],
        'BatchDeleteVqdTasks' => [
            'name' => 'BatchDeleteVqdTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTasks:batchDelete',
            ],
            'input' => [ 'shape' => 'BatchDeleteVqdTasksRequestShape', ],
            'output' => [ 'shape' => 'BatchDeleteVqdTasksResponseShape', ],
        ],
        'ListVqdTemplates' => [
            'name' => 'ListVqdTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTemplates',
            ],
            'input' => [ 'shape' => 'ListVqdTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListVqdTemplatesResponseShape', ],
        ],
        'CreateVqdTemplate' => [
            'name' => 'CreateVqdTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vqdTemplates',
            ],
            'input' => [ 'shape' => 'CreateVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateVqdTemplateResponseShape', ],
        ],
        'GetVqdTemplate' => [
            'name' => 'GetVqdTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/vqdTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetVqdTemplateResponseShape', ],
        ],
        'UpdateVqdTemplate' => [
            'name' => 'UpdateVqdTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/vqdTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateVqdTemplateResponseShape', ],
        ],
        'DeleteVqdTemplate' => [
            'name' => 'DeleteVqdTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/vqdTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteVqdTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteVqdTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
