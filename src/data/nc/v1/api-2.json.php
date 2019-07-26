<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'nc',
        'protocol' => 'json',
//        'serviceFullName' => 'nc',
//        'serviceId' => 'nc',
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
                'charge' =>  [ 'shape' => 'Charge', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'HostAlias' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
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
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
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
        'VolumeMount' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
                'cloudDisk' =>  [ 'shape' => 'InstanceCloudDisk', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
            ],
        ],
        'EnvVar' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'LogConfiguration' => [
            'type' => 'structure',
            'members' => [
                'logDriver' => [ 'type' => 'string', 'locationName' => 'logDriver', ],
                'options' =>  [ 'shape' => 'LogOption', ],
            ],
        ],
        'LogOption' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'SecurityGroupSimple' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
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
        'ContainerNetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
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
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'multiAttachable' => [ 'type' => 'boolean', 'locationName' => 'multiAttachable', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
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
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
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
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
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
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'data' =>  [ 'shape' => 'DockerRegistryData', ],
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
        'CreateContainersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateContainersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeContainersResultShape' => [
            'type' => 'structure',
            'members' => [
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Container', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'containerId' => [ 'type' => 'string', 'locationName' => 'containerId', ],
            ],
        ],
        'CreateContainersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'containerSpec' =>  [ 'shape' => 'ContainerSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyContainerAttributeResponseShape' => [
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
        'DeleteContainerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyContainerAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateContainersResultShape' => [
            'type' => 'structure',
            'members' => [
                'containerIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' => [ 'type' => 'object', 'locationName' => 'logs', ],
            ],
        ],
        'GetLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'StopContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContainersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainerResultShape' => [
            'type' => 'structure',
            'members' => [
                'container' =>  [ 'shape' => 'Container', ],
            ],
        ],
        'StopContainerResultShape' => [
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
        'StartContainerResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
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
        'DeleteSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'DescribeSecretsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DeleteSecretResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretResultShape', ],
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
        'DescribeSecretsResultShape' => [
            'type' => 'structure',
            'members' => [
                'secrets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Secret', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
