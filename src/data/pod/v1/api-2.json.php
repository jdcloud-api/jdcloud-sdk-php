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
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'CloudDisk' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'CloudDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'Hh' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Request' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'string', 'locationName' => 'memoryMB', ],
            ],
        ],
        'ContainerState' => [
            'type' => 'structure',
            'members' => [
                'running' =>  [ 'shape' => 'ContainerStateRunning', ],
                'terminated' =>  [ 'shape' => 'ContainerStateTerminated', ],
                'waiting' =>  [ 'shape' => 'ContainerStateWaiting', ],
            ],
        ],
        'ContainerStateWaiting' => [
            'type' => 'structure',
            'members' => [
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'Hg' => [
            'type' => 'structure',
            'members' => [
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'Hh', ], ],
            ],
        ],
        'ContainerStatus' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'ready' => [ 'type' => 'boolean', 'locationName' => 'ready', ],
                'state' =>  [ 'shape' => 'ContainerState', ],
                'lastState' =>  [ 'shape' => 'ContainerState', ],
            ],
        ],
        'ResourceRequests' => [
            'type' => 'structure',
            'members' => [
                'requests' =>  [ 'shape' => 'Request', ],
                'limits' =>  [ 'shape' => 'Request', ],
            ],
        ],
        'ContainerStateTerminated' => [
            'type' => 'structure',
            'members' => [
                'signal' => [ 'type' => 'integer', 'locationName' => 'signal', ],
                'exitCode' => [ 'type' => 'integer', 'locationName' => 'exitCode', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'finishedAt' => [ 'type' => 'string', 'locationName' => 'finishedAt', ],
                'startedAt' => [ 'type' => 'string', 'locationName' => 'startedAt', ],
            ],
        ],
        'Probe' => [
            'type' => 'structure',
            'members' => [
                'initialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'initialDelaySeconds', ],
                'periodSeconds' => [ 'type' => 'integer', 'locationName' => 'periodSeconds', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'failureThreshold' => [ 'type' => 'integer', 'locationName' => 'failureThreshold', ],
                'successThreshold' => [ 'type' => 'integer', 'locationName' => 'successThreshold', ],
                'exec' =>  [ 'shape' => 'Exec', ],
                'httpGet' =>  [ 'shape' => 'Hg', ],
                'tcpSocket' =>  [ 'shape' => 'TcpSocket', ],
            ],
        ],
        'Exec' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VolumeMount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
            ],
        ],
        'TcpSocket' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'Container' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'Env', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'Probe', ],
                'readinessProbe' =>  [ 'shape' => 'Probe', ],
                'resources' =>  [ 'shape' => 'ResourceRequests', ],
                'systemDisk' =>  [ 'shape' => 'CloudDisk', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMount', ], ],
                'containerStatus' =>  [ 'shape' => 'ContainerStatus', ],
            ],
        ],
        'Env' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ContainerStateRunning' => [
            'type' => 'structure',
            'members' => [
                'startedAt' => [ 'type' => 'string', 'locationName' => 'startedAt', ],
            ],
        ],
        'ResourceRequestsSpec' => [
            'type' => 'structure',
            'members' => [
                'requests' =>  [ 'shape' => 'RequestSpec', ],
                'limits' =>  [ 'shape' => 'RequestSpec', ],
            ],
        ],
        'ContainerResourceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'resources' =>  [ 'shape' => 'ResourceRequestsSpec', ],
            ],
        ],
        'RequestSpec' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'string', 'locationName' => 'memoryMB', ],
            ],
        ],
        'ExecSpec' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'EnvSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TcpSocketSpec' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'VolumeMountSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
            ],
        ],
        'HhSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ContainerSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvSpec', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'readinessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'resources' =>  [ 'shape' => 'ResourceRequestsSpec', ],
                'systemDisk' =>  [ 'shape' => 'CloudDiskSpec', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMountSpec', ], ],
            ],
        ],
        'ProbeSpec' => [
            'type' => 'structure',
            'members' => [
                'initialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'initialDelaySeconds', ],
                'periodSeconds' => [ 'type' => 'integer', 'locationName' => 'periodSeconds', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'failureThreshold' => [ 'type' => 'integer', 'locationName' => 'failureThreshold', ],
                'successThreshold' => [ 'type' => 'integer', 'locationName' => 'successThreshold', ],
                'exec' =>  [ 'shape' => 'ExecSpec', ],
                'httpGet' =>  [ 'shape' => 'HgSpec', ],
                'tcpSocket' =>  [ 'shape' => 'TcpSocketSpec', ],
            ],
        ],
        'HgSpec' => [
            'type' => 'structure',
            'members' => [
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'HhSpec', ], ],
            ],
        ],
        'PodDnsConfigOption' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DnsConfig' => [
            'type' => 'structure',
            'members' => [
                'nameservers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'searches' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodDnsConfigOption', ], ],
            ],
        ],
        'PodDnsConfigOptionSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DnsConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'nameservers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'searches' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodDnsConfigOptionSpec', ], ],
            ],
        ],
        'DockerRegistryData' => [
            'type' => 'structure',
            'members' => [
                'server' => [ 'type' => 'string', 'locationName' => 'server', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'HostAlias' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'HostAliasSpec' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
            ],
        ],
        'SecurityGroupSimple' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'InstanceNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupSimple', ], ],
                'sanityCheck' => [ 'type' => 'boolean', 'locationName' => 'sanityCheck', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfacePrivateIp', ], ],
            ],
        ],
        'NetworkInterfacePrivateIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
            ],
        ],
        'JDCloudVolumeSource' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'formatVolume' => [ 'type' => 'boolean', 'locationName' => 'formatVolume', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'JDCloudVolumeSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'formatVolume' => [ 'type' => 'boolean', 'locationName' => 'formatVolume', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'LogConfig' => [
            'type' => 'structure',
            'members' => [
                'logDriver' => [ 'type' => 'string', 'locationName' => 'logDriver', ],
            ],
        ],
        'LogConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'logDriver' => [ 'type' => 'string', 'locationName' => 'logDriver', ],
            ],
        ],
        'Logs' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'NetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'attachStatus' => [ 'type' => 'string', 'locationName' => 'attachStatus', ],
                'attachTime' => [ 'type' => 'string', 'locationName' => 'attachTime', ],
                'networkInterface' =>  [ 'shape' => 'InstanceNetworkInterface', ],
            ],
        ],
        'NetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
            ],
        ],
        'NetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'PodCondition' => [
            'type' => 'structure',
            'members' => [
                'lastProbeTime' => [ 'type' => 'string', 'locationName' => 'lastProbeTime', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
            ],
        ],
        'Pod' => [
            'type' => 'structure',
            'members' => [
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfig', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Volume', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Container', ], ],
                'podStatus' =>  [ 'shape' => 'PodStatus', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetworkInterfaceAttachment', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'Volume' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jdcloudDisk' =>  [ 'shape' => 'JDCloudVolumeSource', ],
            ],
        ],
        'PodStatus' => [
            'type' => 'structure',
            'members' => [
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'podIP' => [ 'type' => 'string', 'locationName' => 'podIP', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodCondition', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'PodSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfigSpec', ],
                'logConfig' =>  [ 'shape' => 'LogConfigSpec', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAliasSpec', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeSpec', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerSpec', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetworkInterfaceAttachmentSpec', ],
            ],
        ],
        'VolumeSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jdcloudDisk' =>  [ 'shape' => 'JDCloudVolumeSourceSpec', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'RebuildContainerSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvSpec', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'readinessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMountSpec', ], ],
            ],
        ],
        'Secret' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'data' =>  [ 'shape' => 'DockerRegistryData', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserConfigure' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'localDiskSize' => [ 'type' => 'integer', 'locationName' => 'localDiskSize', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'AttachResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResizeTTYRequestShape' => [
            'type' => 'structure',
            'members' => [
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecStartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecGetExitCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecGetExitCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecStartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
            ],
        ],
        'ExecGetExitCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ResizeTTYResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecStartResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecGetExitCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'execCode' => [ 'type' => 'integer', 'locationName' => 'execCode', ],
            ],
        ],
        'DescribeContainerResultShape' => [
            'type' => 'structure',
            'members' => [
                'container' =>  [ 'shape' => 'Container', ],
            ],
        ],
        'ExecCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecCreateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizeTTYResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContainerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'AttachResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
                'specificInstanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribePodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'CheckPodNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckPodNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'RebuildContainerSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'RebuildPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'Pod', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetContainerLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tailLines' => [ 'type' => 'integer', 'locationName' => 'tailLines', ],
                'sinceSeconds' => [ 'type' => 'integer', 'locationName' => 'sinceSeconds', ],
                'limitBytes' => [ 'type' => 'integer', 'locationName' => 'limitBytes', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'DescribePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetContainerLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' =>  [ 'shape' => 'Logs', ],
            ],
        ],
        'ResizePodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'containerResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerResourceSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'CheckPodNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'StopPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DeletePodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyPodAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizePodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyPodAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodResultShape' => [
            'type' => 'structure',
            'members' => [
                'pod' =>  [ 'shape' => 'Pod', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckPodNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyPodAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DescribePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'podIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podSpec' =>  [ 'shape' => 'PodSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetContainerLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetContainerLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'StartPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSecretsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretName' => [ 'type' => 'string', 'locationName' => 'secretName', ],
            ],
        ],
        'DescribeSecretsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSecretsResultShape' => [
            'type' => 'structure',
            'members' => [
                'secrets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Secret', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secret' =>  [ 'shape' => 'Secret', ],
            ],
        ],
        'DeleteSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'secretType' => [ 'type' => 'string', 'locationName' => 'secretType', ],
                'data' =>  [ 'shape' => 'DockerRegistryData', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
    ],
];
