<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'pod',
        'protocol' => 'json',
//        'serviceFullName' => 'pod',
//        'serviceId' => 'pod',
    ],
    'operations' => [
        'DescribeContainer' => [
            'name' => 'DescribeContainer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}',
            ],
            'input' => [ 'shape' => 'DescribeContainerRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainerResponseShape', ],
        ],
        'Attach' => [
            'name' => 'Attach',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:attach',
            ],
            'input' => [ 'shape' => 'AttachRequestShape', ],
            'output' => [ 'shape' => 'AttachResponseShape', ],
        ],
        'ExecCreate' => [
            'name' => 'ExecCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:execCreate',
            ],
            'input' => [ 'shape' => 'ExecCreateRequestShape', ],
            'output' => [ 'shape' => 'ExecCreateResponseShape', ],
        ],
        'ExecGetExitCode' => [
            'name' => 'ExecGetExitCode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:execGetExitCode',
            ],
            'input' => [ 'shape' => 'ExecGetExitCodeRequestShape', ],
            'output' => [ 'shape' => 'ExecGetExitCodeResponseShape', ],
        ],
        'ExecStart' => [
            'name' => 'ExecStart',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:execStart',
            ],
            'input' => [ 'shape' => 'ExecStartRequestShape', ],
            'output' => [ 'shape' => 'ExecStartResponseShape', ],
        ],
        'ResizeTTY' => [
            'name' => 'ResizeTTY',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:resizeTTY',
            ],
            'input' => [ 'shape' => 'ResizeTTYRequestShape', ],
            'output' => [ 'shape' => 'ResizeTTYResponseShape', ],
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
        'DescribePods' => [
            'name' => 'DescribePods',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods',
            ],
            'input' => [ 'shape' => 'DescribePodsRequestShape', ],
            'output' => [ 'shape' => 'DescribePodsResponseShape', ],
        ],
        'CreatePods' => [
            'name' => 'CreatePods',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods',
            ],
            'input' => [ 'shape' => 'CreatePodsRequestShape', ],
            'output' => [ 'shape' => 'CreatePodsResponseShape', ],
        ],
        'CheckPodName' => [
            'name' => 'CheckPodName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods:checkPodName',
            ],
            'input' => [ 'shape' => 'CheckPodNameRequestShape', ],
            'output' => [ 'shape' => 'CheckPodNameResponseShape', ],
        ],
        'DescribePod' => [
            'name' => 'DescribePod',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}',
            ],
            'input' => [ 'shape' => 'DescribePodRequestShape', ],
            'output' => [ 'shape' => 'DescribePodResponseShape', ],
        ],
        'DeletePod' => [
            'name' => 'DeletePod',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}',
            ],
            'input' => [ 'shape' => 'DeletePodRequestShape', ],
            'output' => [ 'shape' => 'DeletePodResponseShape', ],
        ],
        'StartPod' => [
            'name' => 'StartPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:startPod',
            ],
            'input' => [ 'shape' => 'StartPodRequestShape', ],
            'output' => [ 'shape' => 'StartPodResponseShape', ],
        ],
        'StopPod' => [
            'name' => 'StopPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:stopPod',
            ],
            'input' => [ 'shape' => 'StopPodRequestShape', ],
            'output' => [ 'shape' => 'StopPodResponseShape', ],
        ],
        'ModifyPodAttribute' => [
            'name' => 'ModifyPodAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:modifyPodAttribute',
            ],
            'input' => [ 'shape' => 'ModifyPodAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyPodAttributeResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'GetContainerLogs' => [
            'name' => 'GetContainerLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:getContainerLogs',
            ],
            'input' => [ 'shape' => 'GetContainerLogsRequestShape', ],
            'output' => [ 'shape' => 'GetContainerLogsResponseShape', ],
        ],
        'RebuildPod' => [
            'name' => 'RebuildPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:rebuild',
            ],
            'input' => [ 'shape' => 'RebuildPodRequestShape', ],
            'output' => [ 'shape' => 'RebuildPodResponseShape', ],
        ],
        'ResizePod' => [
            'name' => 'ResizePod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:resize',
            ],
            'input' => [ 'shape' => 'ResizePodRequestShape', ],
            'output' => [ 'shape' => 'ResizePodResponseShape', ],
        ],
        'DescribeQuota' => [
            'name' => 'DescribeQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotaResponseShape', ],
        ],
        'DescribeSecrets' => [
            'name' => 'DescribeSecrets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secrets',
            ],
            'input' => [ 'shape' => 'DescribeSecretsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretsResponseShape', ],
        ],
        'CreateSecret' => [
            'name' => 'CreateSecret',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/secrets',
            ],
            'input' => [ 'shape' => 'CreateSecretRequestShape', ],
            'output' => [ 'shape' => 'CreateSecretResponseShape', ],
        ],
        'DescribeSecret' => [
            'name' => 'DescribeSecret',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secrets/{name}',
            ],
            'input' => [ 'shape' => 'DescribeSecretRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretResponseShape', ],
        ],
        'DeleteSecret' => [
            'name' => 'DeleteSecret',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/secrets/{name}',
            ],
            'input' => [ 'shape' => 'DeleteSecretRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecretResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
