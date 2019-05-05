<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'vm',
        'protocol' => 'json',
//        'serviceFullName' => 'vm',
//        'serviceId' => 'vm',
    ],
    'operations' => [
        'DescribeImage' => [
            'name' => 'DescribeImage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}',
            ],
            'input' => [ 'shape' => 'DescribeImageRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageResponseShape', ],
        ],
        'DeleteImage' => [
            'name' => 'DeleteImage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}',
            ],
            'input' => [ 'shape' => 'DeleteImageRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageResponseShape', ],
        ],
        'DescribeImages' => [
            'name' => 'DescribeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images',
            ],
            'input' => [ 'shape' => 'DescribeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImagesResponseShape', ],
        ],
        'DescribeImageConstraints' => [
            'name' => 'DescribeImageConstraints',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}/constraints',
            ],
            'input' => [ 'shape' => 'DescribeImageConstraintsRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageConstraintsResponseShape', ],
        ],
        'DescribeImageConstraintsBatch' => [
            'name' => 'DescribeImageConstraintsBatch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/imageConstraints',
            ],
            'input' => [ 'shape' => 'DescribeImageConstraintsBatchRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageConstraintsBatchResponseShape', ],
        ],
        'ShareImage' => [
            'name' => 'ShareImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:share',
            ],
            'input' => [ 'shape' => 'ShareImageRequestShape', ],
            'output' => [ 'shape' => 'ShareImageResponseShape', ],
        ],
        'UnShareImage' => [
            'name' => 'UnShareImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:unshare',
            ],
            'input' => [ 'shape' => 'UnShareImageRequestShape', ],
            'output' => [ 'shape' => 'UnShareImageResponseShape', ],
        ],
        'DescribeImageMembers' => [
            'name' => 'DescribeImageMembers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}/members',
            ],
            'input' => [ 'shape' => 'DescribeImageMembersRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageMembersResponseShape', ],
        ],
        'CopyImages' => [
            'name' => 'CopyImages',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images:copyImages',
            ],
            'input' => [ 'shape' => 'CopyImagesRequestShape', ],
            'output' => [ 'shape' => 'CopyImagesResponseShape', ],
        ],
        'ModifyImageAttribute' => [
            'name' => 'ModifyImageAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:modifyImageAttribute',
            ],
            'input' => [ 'shape' => 'ModifyImageAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyImageAttributeResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstances' => [
            'name' => 'CreateInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstancesRequestShape', ],
            'output' => [ 'shape' => 'CreateInstancesResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'DescribeInstanceStatus' => [
            'name' => 'DescribeInstanceStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceStatus',
            ],
            'input' => [ 'shape' => 'DescribeInstanceStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceStatusResponseShape', ],
        ],
        'DescribeInstancePrivateIpAddress' => [
            'name' => 'DescribeInstancePrivateIpAddress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instancePrivateIpAddress',
            ],
            'input' => [ 'shape' => 'DescribeInstancePrivateIpAddressRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancePrivateIpAddressResponseShape', ],
        ],
        'StopInstance' => [
            'name' => 'StopInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:stopInstance',
            ],
            'input' => [ 'shape' => 'StopInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceResponseShape', ],
        ],
        'StartInstance' => [
            'name' => 'StartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:startInstance',
            ],
            'input' => [ 'shape' => 'StartInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartInstanceResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootInstance',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
        ],
        'AttachNetworkInterface' => [
            'name' => 'AttachNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:attachNetworkInterface',
            ],
            'input' => [ 'shape' => 'AttachNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'AttachNetworkInterfaceResponseShape', ],
        ],
        'DetachNetworkInterface' => [
            'name' => 'DetachNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:detachNetworkInterface',
            ],
            'input' => [ 'shape' => 'DetachNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'DetachNetworkInterfaceResponseShape', ],
        ],
        'ModifyInstanceNetworkAttribute' => [
            'name' => 'ModifyInstanceNetworkAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceNetworkAttribute',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNetworkAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNetworkAttributeResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'CreateImage' => [
            'name' => 'CreateImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createImage',
            ],
            'input' => [ 'shape' => 'CreateImageRequestShape', ],
            'output' => [ 'shape' => 'CreateImageResponseShape', ],
        ],
        'AttachDisk' => [
            'name' => 'AttachDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:attachDisk',
            ],
            'input' => [ 'shape' => 'AttachDiskRequestShape', ],
            'output' => [ 'shape' => 'AttachDiskResponseShape', ],
        ],
        'DetachDisk' => [
            'name' => 'DetachDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:detachDisk',
            ],
            'input' => [ 'shape' => 'DetachDiskRequestShape', ],
            'output' => [ 'shape' => 'DetachDiskResponseShape', ],
        ],
        'ModifyInstanceDiskAttribute' => [
            'name' => 'ModifyInstanceDiskAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceDiskAttribute',
            ],
            'input' => [ 'shape' => 'ModifyInstanceDiskAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceDiskAttributeResponseShape', ],
        ],
        'ModifyInstanceAttribute' => [
            'name' => 'ModifyInstanceAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceAttribute',
            ],
            'input' => [ 'shape' => 'ModifyInstanceAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceAttributeResponseShape', ],
        ],
        'ModifyInstancePassword' => [
            'name' => 'ModifyInstancePassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstancePassword',
            ],
            'input' => [ 'shape' => 'ModifyInstancePasswordRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstancePasswordResponseShape', ],
        ],
        'DescribeInstanceVncUrl' => [
            'name' => 'DescribeInstanceVncUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/vnc',
            ],
            'input' => [ 'shape' => 'DescribeInstanceVncUrlRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceVncUrlResponseShape', ],
        ],
        'ResizeInstance' => [
            'name' => 'ResizeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:resizeInstance',
            ],
            'input' => [ 'shape' => 'ResizeInstanceRequestShape', ],
            'output' => [ 'shape' => 'ResizeInstanceResponseShape', ],
        ],
        'RebuildInstance' => [
            'name' => 'RebuildInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebuildInstance',
            ],
            'input' => [ 'shape' => 'RebuildInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebuildInstanceResponseShape', ],
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
        'DescribeKeypairs' => [
            'name' => 'DescribeKeypairs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'DescribeKeypairsRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeypairsResponseShape', ],
        ],
        'CreateKeypair' => [
            'name' => 'CreateKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs',
            ],
            'input' => [ 'shape' => 'CreateKeypairRequestShape', ],
            'output' => [ 'shape' => 'CreateKeypairResponseShape', ],
        ],
        'ImportKeypair' => [
            'name' => 'ImportKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs:import',
            ],
            'input' => [ 'shape' => 'ImportKeypairRequestShape', ],
            'output' => [ 'shape' => 'ImportKeypairResponseShape', ],
        ],
        'DeleteKeypair' => [
            'name' => 'DeleteKeypair',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keyName}',
            ],
            'input' => [ 'shape' => 'DeleteKeypairRequestShape', ],
            'output' => [ 'shape' => 'DeleteKeypairResponseShape', ],
        ],
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
    ],
    'shapes' => [
        'Ag' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CopyImage' => [
            'type' => 'structure',
            'members' => [
                'destinationImageId' => [ 'type' => 'string', 'locationName' => 'destinationImageId', ],
                'sourceImageId' => [ 'type' => 'string', 'locationName' => 'sourceImageId', ],
            ],
        ],
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'throughput' => [ 'type' => 'integer', 'locationName' => 'throughput', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiskAttachment', ], ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'multiAttachable' => [ 'type' => 'boolean', 'locationName' => 'multiAttachable', ],
                'encrypted' => [ 'type' => 'boolean', 'locationName' => 'encrypted', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'DiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'attachmentId' => [ 'type' => 'string', 'locationName' => 'attachmentId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'attachTime' => [ 'type' => 'string', 'locationName' => 'attachTime', ],
            ],
        ],
        'LocalDisk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
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
        'Image' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'systemDiskSizeGB' => [ 'type' => 'integer', 'locationName' => 'systemDiskSizeGB', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'sizeMB' => [ 'type' => 'integer', 'locationName' => 'sizeMB', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachment', ], ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'rootDeviceType' => [ 'type' => 'string', 'locationName' => 'rootDeviceType', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
            ],
        ],
        'InstanceDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'localDisk' =>  [ 'shape' => 'LocalDisk', ],
                'cloudDisk' =>  [ 'shape' => 'Disk', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ImageInstanceTypeConstraint' => [
            'type' => 'structure',
            'members' => [
                'constraintsType' => [ 'type' => 'string', 'locationName' => 'constraintsType', ],
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ImageConstraint' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageInstanceTypeConstraint' =>  [ 'shape' => 'ImageInstanceTypeConstraint', ],
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
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupSimple', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfacePrivateIp', ], ],
            ],
        ],
        'InstanceNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'InstanceNetworkInterface', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceNetworkInterfaceAttachment', ], ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'ag' =>  [ 'shape' => 'Ag', ],
                'faultDomain' => [ 'type' => 'string', 'locationName' => 'faultDomain', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
        'InstanceDiskAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'cloudDiskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'noDevice' => [ 'type' => 'boolean', 'locationName' => 'noDevice', ],
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
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'multiAttachable' => [ 'type' => 'boolean', 'locationName' => 'multiAttachable', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
            ],
        ],
        'InstanceDiskAttribute' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'InstanceNetworkAttribute' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
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
        'InstanceNetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
            ],
        ],
        'InstancePrivateIpAddress' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachmentSpec', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachmentSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachmentSpec', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'InstanceStatus' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'InstanceTemplateElasticIp' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'InstanceTemplateNetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterfaceSpec', ],
            ],
        ],
        'InstanceTemplateNetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
            ],
        ],
        'InstanceTemplateDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'instanceTemplateDisk' =>  [ 'shape' => 'InstanceTemplateDisk', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'noDevice' => [ 'type' => 'boolean', 'locationName' => 'noDevice', ],
            ],
        ],
        'InstanceTemplateData' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'includePassword' => [ 'type' => 'boolean', 'locationName' => 'includePassword', ],
                'systemDisk' =>  [ 'shape' => 'InstanceTemplateDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTemplateDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterfaceAttachmentSpec', ],
                'elasticIp' =>  [ 'shape' => 'InstanceTemplateElasticIp', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InstanceTemplate' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceTemplateData' =>  [ 'shape' => 'InstanceTemplateData', ],
                'ags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ag', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'InstanceTemplateDisk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'InstanceTemplateDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'InstanceTemplateDiskAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'cloudDiskSpec' =>  [ 'shape' => 'InstanceTemplateDiskSpec', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'noDevice' => [ 'type' => 'boolean', 'locationName' => 'noDevice', ],
            ],
        ],
        'InstanceTemplateElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'InstanceTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIp' =>  [ 'shape' => 'InstanceTemplateElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterfaceAttachmentSpec', ],
                'systemDisk' =>  [ 'shape' => 'InstanceTemplateDiskAttachmentSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTemplateDiskAttachmentSpec', ], ],
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
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'localDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDisk', ], ],
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
            ],
        ],
        'Keypair' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ShareImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CopyImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceImageIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'destinationRegion' => [ 'type' => 'string', 'locationName' => 'destinationRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UnShareImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteImageResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopyImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'copyImages' => [ 'type' => 'list', 'member' => [ 'shape' => 'CopyImage', ], ],
            ],
        ],
        'DescribeImageMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageMembersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyImageAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImageConstraintsResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageConstraints' =>  [ 'shape' => 'ImageConstraint', ],
            ],
        ],
        'ModifyImageAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'UnShareImageResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DeleteImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DescribeImageConstraintsBatchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageConstraintsBatchResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageConstraintsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageConstraintsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'Image', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeImageConstraintsBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImageConstraintsBatchResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageConstraints' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageConstraint', ], ],
            ],
        ],
        'DescribeImageMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ShareImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DescribeImageMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'CopyImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopyImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyImageAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'image' =>  [ 'shape' => 'Image', ],
            ],
        ],
        'ShareImageResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImageConstraintsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rootDeviceType' => [ 'type' => 'string', 'locationName' => 'rootDeviceType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UnShareImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'AttachNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AttachDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AttachDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstancePasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancePrivateIpAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResizeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNetworkAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'AttachDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResizeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceVncUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebuildInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancePrivateIpAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancePrivateIpAddressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceNetworkAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceNetworkAttribute', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceVncUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceVncUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AttachNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNetworkAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceStatuses' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceStatus', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancePrivateIpAddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'instancePrivateIpAddress' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstancePrivateIpAddress', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceDiskAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttribute', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DetachNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'StartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AttachNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeInstanceVncUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'vncUrl' => [ 'type' => 'string', 'locationName' => 'vncUrl', ],
            ],
        ],
        'RebuildInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstancePasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachmentSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceDiskAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceDiskAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstancePasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResizeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'CreateKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
            ],
        ],
        'DescribeKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Keypair', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImportKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'CreateKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
            ],
        ],
        'DescribeKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
