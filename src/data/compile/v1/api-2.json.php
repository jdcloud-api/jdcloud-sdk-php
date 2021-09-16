<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'compile',
        'protocol' => 'json',
//        'serviceFullName' => 'compile',
//        'serviceId' => 'compile',
    ],
    'operations' => [
        'CreateDemo' => [
            'name' => 'CreateDemo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/demo',
            ],
            'input' => [ 'shape' => 'CreateDemoRequestShape', ],
            'output' => [ 'shape' => 'CreateDemoResponseShape', ],
        ],
        'GetJobs' => [
            'name' => 'GetJobs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs',
            ],
            'input' => [ 'shape' => 'GetJobsRequestShape', ],
            'output' => [ 'shape' => 'GetJobsResponseShape', ],
        ],
        'CreateJob' => [
            'name' => 'CreateJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobs',
            ],
            'input' => [ 'shape' => 'CreateJobRequestShape', ],
            'output' => [ 'shape' => 'CreateJobResponseShape', ],
        ],
        'DeleteJobs' => [
            'name' => 'DeleteJobs',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/jobs',
            ],
            'input' => [ 'shape' => 'DeleteJobsRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobsResponseShape', ],
        ],
        'GetJob' => [
            'name' => 'GetJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}',
            ],
            'input' => [ 'shape' => 'GetJobRequestShape', ],
            'output' => [ 'shape' => 'GetJobResponseShape', ],
        ],
        'UpdateJob' => [
            'name' => 'UpdateJob',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}',
            ],
            'input' => [ 'shape' => 'UpdateJobRequestShape', ],
            'output' => [ 'shape' => 'UpdateJobResponseShape', ],
        ],
        'DeleteJob' => [
            'name' => 'DeleteJob',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}',
            ],
            'input' => [ 'shape' => 'DeleteJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobResponseShape', ],
        ],
        'StartJob' => [
            'name' => 'StartJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}:start',
            ],
            'input' => [ 'shape' => 'StartJobRequestShape', ],
            'output' => [ 'shape' => 'StartJobResponseShape', ],
        ],
        'GetBuildLog' => [
            'name' => 'GetBuildLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}/log',
            ],
            'input' => [ 'shape' => 'GetBuildLogRequestShape', ],
            'output' => [ 'shape' => 'GetBuildLogResponseShape', ],
        ],
        'GetBuildStatus' => [
            'name' => 'GetBuildStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}/status',
            ],
            'input' => [ 'shape' => 'GetBuildStatusRequestShape', ],
            'output' => [ 'shape' => 'GetBuildStatusResponseShape', ],
        ],
        'GetExternalLink' => [
            'name' => 'GetExternalLink',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}/externalLink',
            ],
            'input' => [ 'shape' => 'GetExternalLinkRequestShape', ],
            'output' => [ 'shape' => 'GetExternalLinkResponseShape', ],
        ],
        'StopBuild' => [
            'name' => 'StopBuild',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopBuildRequestShape', ],
            'output' => [ 'shape' => 'StopBuildResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
