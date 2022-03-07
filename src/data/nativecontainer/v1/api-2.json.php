<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'nativecontainer',
        'protocol' => 'json',
//        'serviceFullName' => 'nativecontainer',
//        'serviceId' => 'nativecontainer',
    ],
    'operations' => [
        'DescribeContainers' => [
            'name' => 'DescribeContainers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers',
            ],
            'input' => [ 'shape' => 'DescribeContainersRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainersResponseShape', ],
        ],
        'CreateContainers' => [
            'name' => 'CreateContainers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers',
            ],
            'input' => [ 'shape' => 'CreateContainersRequestShape', ],
            'output' => [ 'shape' => 'CreateContainersResponseShape', ],
        ],
        'DescribeContainer' => [
            'name' => 'DescribeContainer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}',
            ],
            'input' => [ 'shape' => 'DescribeContainerRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainerResponseShape', ],
        ],
        'DeleteContainer' => [
            'name' => 'DeleteContainer',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}',
            ],
            'input' => [ 'shape' => 'DeleteContainerRequestShape', ],
            'output' => [ 'shape' => 'DeleteContainerResponseShape', ],
        ],
        'StartContainer' => [
            'name' => 'StartContainer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:startContainer',
            ],
            'input' => [ 'shape' => 'StartContainerRequestShape', ],
            'output' => [ 'shape' => 'StartContainerResponseShape', ],
        ],
        'StopContainer' => [
            'name' => 'StopContainer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:stopContainer',
            ],
            'input' => [ 'shape' => 'StopContainerRequestShape', ],
            'output' => [ 'shape' => 'StopContainerResponseShape', ],
        ],
        'ModifyContainerAttribute' => [
            'name' => 'ModifyContainerAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:modifyContainerAttribute',
            ],
            'input' => [ 'shape' => 'ModifyContainerAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyContainerAttributeResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'GetLogs' => [
            'name' => 'GetLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:getLogs',
            ],
            'input' => [ 'shape' => 'GetLogsRequestShape', ],
            'output' => [ 'shape' => 'GetLogsResponseShape', ],
        ],
        'RebuildContainer' => [
            'name' => 'RebuildContainer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:rebuild',
            ],
            'input' => [ 'shape' => 'RebuildContainerRequestShape', ],
            'output' => [ 'shape' => 'RebuildContainerResponseShape', ],
        ],
        'ResizeContainer' => [
            'name' => 'ResizeContainer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:resize',
            ],
            'input' => [ 'shape' => 'ResizeContainerRequestShape', ],
            'output' => [ 'shape' => 'ResizeContainerResponseShape', ],
        ],
        'ExecCreate' => [
            'name' => 'ExecCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:execCreate',
            ],
            'input' => [ 'shape' => 'ExecCreateRequestShape', ],
            'output' => [ 'shape' => 'ExecCreateResponseShape', ],
        ],
        'ExecGetExitCode' => [
            'name' => 'ExecGetExitCode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:execGetExitCode',
            ],
            'input' => [ 'shape' => 'ExecGetExitCodeRequestShape', ],
            'output' => [ 'shape' => 'ExecGetExitCodeResponseShape', ],
        ],
        'ResizeTTY' => [
            'name' => 'ResizeTTY',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/containers/{containerId}:resizeTTY',
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
        'InstanceLocalDisk' => [
            'type' => 'structure',
            'members' => [
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
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
        'InstanceCloudDisk' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'VolumeMount' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
                'cloudDisk' =>  [ 'shape' => 'InstanceCloudDisk', ],
                'localDisk' =>  [ 'shape' => 'InstanceLocalDisk', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Container' => [
            'type' => 'structure',
            'members' => [
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvVar', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'rootVolume' =>  [ 'shape' => 'VolumeMount', ],
                'dataVolumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMount', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceNetworkInterfaceAttachment', ], ],
                'logConfiguration' =>  [ 'shape' => 'LogConfiguration', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'EnvVar' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'HostAlias' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
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
        'LogConfiguration' => [
            'type' => 'structure',
            'members' => [
                'logDriver' => [ 'type' => 'string', 'locationName' => 'logDriver', ],
            ],
        ],
        'InstanceNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'attachStatus' => [ 'type' => 'string', 'locationName' => 'attachStatus', ],
                'attachTime' => [ 'type' => 'string', 'locationName' => 'attachTime', ],
                'networkInterface' =>  [ 'shape' => 'InstanceNetworkInterface', ],
            ],
        ],
        'SecurityGroupSimple' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'ContainerNetworkInterfaceAttachmentSpec' => [
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
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'boolean', 'locationName' => 'sanityCheck', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'VolumeMountSpec' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
                'cloudDiskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'cloudDiskId' => [ 'type' => 'string', 'locationName' => 'cloudDiskId', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'formatVolume' => [ 'type' => 'boolean', 'locationName' => 'formatVolume', ],
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
        'ContainerSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAliasSpec', ], ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvVar', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'rootVolume' =>  [ 'shape' => 'VolumeMountSpec', ],
                'dataVolumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMountSpec', ], ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'ContainerNetworkInterfaceAttachmentSpec', ],
                'logConfiguration' =>  [ 'shape' => 'LogConfiguration', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'DiskSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'multiAttachable' => [ 'type' => 'boolean', 'locationName' => 'multiAttachable', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
            ],
        ],
        'HostAliasSpec' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
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
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
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
        'LocalDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
            ],
        ],
        'LogOption' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'Secret' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'secretType' => [ 'type' => 'string', 'locationName' => 'secretType', ],
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
        'DescribeContainersResultShape' => [
            'type' => 'structure',
            'members' => [
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Container', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'StopContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecGetExitCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'ResizeContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyContainerAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'StartContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'StopContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'GetLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' => [ 'type' => 'object', 'locationName' => 'logs', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
            ],
        ],
        'DeleteContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'CreateContainersResultShape' => [
            'type' => 'structure',
            'members' => [
                'containerIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResizeTTYResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopContainerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecCreateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateContainersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'containerSpec' =>  [ 'shape' => 'ContainerSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyContainerAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContainerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'ResizeContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecGetExitCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'exitCode' => [ 'type' => 'integer', 'locationName' => 'exitCode', ],
            ],
        ],
        'DeleteContainerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyContainerAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartContainerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebuildContainerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeContainersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContainersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateContainersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateContainersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainerResultShape' => [
            'type' => 'structure',
            'members' => [
                'container' =>  [ 'shape' => 'Container', ],
            ],
        ],
        'ResizeTTYResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'GetLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tailLines' => [ 'type' => 'integer', 'locationName' => 'tailLines', ],
                'sinceSeconds' => [ 'type' => 'integer', 'locationName' => 'sinceSeconds', ],
                'limitBytes' => [ 'type' => 'integer', 'locationName' => 'limitBytes', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'DescribeContainersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
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
        'RebuildContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvVar', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'ResizeTTYRequestShape' => [
            'type' => 'structure',
            'members' => [
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'ExecGetExitCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecGetExitCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizeContainerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTypesResultShape', ],
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
        'DescribeInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecretsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeSecretsResultShape' => [
            'type' => 'structure',
            'members' => [
                'secrets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Secret', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
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
        'DescribeSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secret' =>  [ 'shape' => 'Secret', ],
            ],
        ],
        'DescribeSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretResultShape', ],
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
    ],
];
