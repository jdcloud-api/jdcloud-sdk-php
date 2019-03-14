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
        'DecribeContainer' => [
            'name' => 'DecribeContainer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}',
            ],
            'input' => [ 'shape' => 'DecribeContainerRequestShape', ],
            'output' => [ 'shape' => 'DecribeContainerResponseShape', ],
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
        'CloudDisk' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'CloudDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'snapshot' => [ 'type' => 'string', 'locationName' => 'snapshot', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
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
        'TcpSocketSpec' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
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
        'ResourceRequestsSpec' => [
            'type' => 'structure',
            'members' => [
                'requests' =>  [ 'shape' => 'RequestSpec', ],
                'limits' =>  [ 'shape' => 'RequestSpec', ],
            ],
        ],
        'RequestSpec' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'string', 'locationName' => 'memoryMB', ],
            ],
        ],
        'EnvSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Container' => [
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
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMount', ], ],
                'containerStatus' =>  [ 'shape' => 'ContainerStatus', ],
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
                'exec' =>  [ 'shape' => 'Exec', ],
                'httpGet' =>  [ 'shape' => 'Hg', ],
                'tcpSocket' =>  [ 'shape' => 'TcpSocketSpec', ],
            ],
        ],
        'ContainerStateRunning' => [
            'type' => 'structure',
            'members' => [
                'startedAt' => [ 'type' => 'string', 'locationName' => 'startedAt', ],
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
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMount', ], ],
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
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'HostAlias' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
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
        'JDCloudVolumeSource' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'snapshot' => [ 'type' => 'string', 'locationName' => 'snapshot', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'formatVolume' => [ 'type' => 'boolean', 'locationName' => 'formatVolume', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'LogConfig' => [
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
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
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
                'dnsConfig' =>  [ 'shape' => 'DnsConfig', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Volume', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerSpec', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetworkInterfaceAttachmentSpec', ],
            ],
        ],
        'TcpSocket' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
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
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
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
        'Secret' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'data' =>  [ 'shape' => 'DockerRegistryData', ],
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
        'DecribeContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Container', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecCreateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DecribeContainerResultShape' => [
            'type' => 'structure',
            'members' => [
                'container' =>  [ 'shape' => 'Container', ],
            ],
        ],
        'DecribeContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ResizeTTYResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CheckPodNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckPodNameResultShape', ],
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
        'ModifyPodAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
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
        'GetContainerLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' =>  [ 'shape' => 'Logs', ],
            ],
        ],
        'DescribePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Pod', ],
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
        'CheckPodNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'StartPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podSpec' =>  [ 'shape' => 'PodSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
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
        'CreatePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyPodAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyPodAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
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
