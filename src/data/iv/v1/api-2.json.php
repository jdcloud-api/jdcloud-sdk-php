<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iv',
        'protocol' => 'json',
//        'serviceFullName' => 'iv',
//        'serviceId' => 'iv',
    ],
    'operations' => [
        'SubmitViJob' => [
            'name' => 'SubmitViJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/viJobs:submit',
            ],
            'input' => [ 'shape' => 'SubmitViJobRequestShape', ],
            'output' => [ 'shape' => 'SubmitViJobResponseShape', ],
        ],
        'GetViJobSummary' => [
            'name' => 'GetViJobSummary',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/viJobs/{jobId}',
            ],
            'input' => [ 'shape' => 'GetViJobSummaryRequestShape', ],
            'output' => [ 'shape' => 'GetViJobSummaryResponseShape', ],
        ],
        'ListViTemplates' => [
            'name' => 'ListViTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/viTemplates',
            ],
            'input' => [ 'shape' => 'ListViTemplatesRequestShape', ],
            'output' => [ 'shape' => 'ListViTemplatesResponseShape', ],
        ],
        'CreateViTemplate' => [
            'name' => 'CreateViTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/viTemplates',
            ],
            'input' => [ 'shape' => 'CreateViTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateViTemplateResponseShape', ],
        ],
        'GetViTemplate' => [
            'name' => 'GetViTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/viTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetViTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetViTemplateResponseShape', ],
        ],
        'UpdateViTemplate' => [
            'name' => 'UpdateViTemplate',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/viTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'UpdateViTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateViTemplateResponseShape', ],
        ],
        'DeleteViTemplate' => [
            'name' => 'DeleteViTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/viTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteViTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteViTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
