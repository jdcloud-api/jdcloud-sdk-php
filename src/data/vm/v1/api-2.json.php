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
        'CreateImageFromSnapshots' => [
            'name' => 'CreateImageFromSnapshots',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images:createImageFromSnapshots',
            ],
            'input' => [ 'shape' => 'CreateImageFromSnapshotsRequestShape', ],
            'output' => [ 'shape' => 'CreateImageFromSnapshotsResponseShape', ],
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
        'ReleaseImage' => [
            'name' => 'ReleaseImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:release',
            ],
            'input' => [ 'shape' => 'ReleaseImageRequestShape', ],
            'output' => [ 'shape' => 'ReleaseImageResponseShape', ],
        ],
        'UnReleaseImage' => [
            'name' => 'UnReleaseImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:unrelease',
            ],
            'input' => [ 'shape' => 'UnReleaseImageRequestShape', ],
            'output' => [ 'shape' => 'UnReleaseImageResponseShape', ],
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
        'ImportImage' => [
            'name' => 'ImportImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images:import',
            ],
            'input' => [ 'shape' => 'ImportImageRequestShape', ],
            'output' => [ 'shape' => 'ImportImageResponseShape', ],
        ],
        'ExportImage' => [
            'name' => 'ExportImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/images/{imageId}:exportImage',
            ],
            'input' => [ 'shape' => 'ExportImageRequestShape', ],
            'output' => [ 'shape' => 'ExportImageResponseShape', ],
        ],
        'ImageTasks' => [
            'name' => 'ImageTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/imageTasks',
            ],
            'input' => [ 'shape' => 'ImageTasksRequestShape', ],
            'output' => [ 'shape' => 'ImageTasksResponseShape', ],
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
        'DescribeBriefInstances' => [
            'name' => 'DescribeBriefInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeBriefInstances',
            ],
            'input' => [ 'shape' => 'DescribeBriefInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBriefInstancesResponseShape', ],
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
        'RedeployInstance' => [
            'name' => 'RedeployInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:redeployInstance',
            ],
            'input' => [ 'shape' => 'RedeployInstanceRequestShape', ],
            'output' => [ 'shape' => 'RedeployInstanceResponseShape', ],
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
        'ModifyInstanceVpcAttribute' => [
            'name' => 'ModifyInstanceVpcAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceVpcAttribute',
            ],
            'input' => [ 'shape' => 'ModifyInstanceVpcAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceVpcAttributeResponseShape', ],
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
        'DescribeInstancesCustomData' => [
            'name' => 'DescribeInstancesCustomData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instancesCustomData',
            ],
            'input' => [ 'shape' => 'DescribeInstancesCustomDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesCustomDataResponseShape', ],
        ],
        'ModifyInstancePlacement' => [
            'name' => 'ModifyInstancePlacement',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstancePlacement',
            ],
            'input' => [ 'shape' => 'ModifyInstancePlacementRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstancePlacementResponseShape', ],
        ],
        'DescribeInstanceTemplates' => [
            'name' => 'DescribeInstanceTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplates',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTemplatesResponseShape', ],
        ],
        'CreateInstanceTemplate' => [
            'name' => 'CreateInstanceTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplates',
            ],
            'input' => [ 'shape' => 'CreateInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceTemplateResponseShape', ],
        ],
        'DescribeInstanceTemplate' => [
            'name' => 'DescribeInstanceTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplates/{instanceTemplateId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTemplateResponseShape', ],
        ],
        'UpdateInstanceTemplate' => [
            'name' => 'UpdateInstanceTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplates/{instanceTemplateId}',
            ],
            'input' => [ 'shape' => 'UpdateInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdateInstanceTemplateResponseShape', ],
        ],
        'DeleteInstanceTemplate' => [
            'name' => 'DeleteInstanceTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplates/{instanceTemplateId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceTemplateResponseShape', ],
        ],
        'VerifyInstanceTemplate' => [
            'name' => 'VerifyInstanceTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplates/{instanceTemplateId}:verify',
            ],
            'input' => [ 'shape' => 'VerifyInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'VerifyInstanceTemplateResponseShape', ],
        ],
        'DescribeInstanceTemplatesCustomdata' => [
            'name' => 'DescribeInstanceTemplatesCustomdata',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTemplatesCustomData',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTemplatesCustomdataRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTemplatesCustomdataResponseShape', ],
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
        'AttachKeypair' => [
            'name' => 'AttachKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keyName}:attach',
            ],
            'input' => [ 'shape' => 'AttachKeypairRequestShape', ],
            'output' => [ 'shape' => 'AttachKeypairResponseShape', ],
        ],
        'DetachKeypair' => [
            'name' => 'DetachKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/keypairs/{keyName}:detach',
            ],
            'input' => [ 'shape' => 'DetachKeypairRequestShape', ],
            'output' => [ 'shape' => 'DetachKeypairResponseShape', ],
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
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'Core' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'threads' => [ 'type' => 'list', 'member' => [ 'shape' => 'Thread', ], ],
            ],
        ],
        'LightCloudDiskInfo' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
            ],
        ],
        'BriefInstanceNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'LocalDisk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
            ],
        ],
        'BriefInstanceDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'localDisk' =>  [ 'shape' => 'LocalDisk', ],
                'cloudDisk' =>  [ 'shape' => 'LightCloudDiskInfo', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Socket' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cores' => [ 'type' => 'list', 'member' => [ 'shape' => 'Core', ], ],
            ],
        ],
        'Numa' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cores' => [ 'type' => 'list', 'member' => [ 'shape' => 'Core', ], ],
            ],
        ],
        'BriefInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'systemDisk' =>  [ 'shape' => 'BriefInstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'BriefInstanceDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'BriefInstanceNetworkInterfaceAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'BriefInstanceNetworkInterfaceAttachment', ], ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'faultDomain' => [ 'type' => 'string', 'locationName' => 'faultDomain', ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
            ],
        ],
        'Thread' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'CpuTopology' => [
            'type' => 'structure',
            'members' => [
                'sockets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Socket', ], ],
                'numas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Numa', ], ],
            ],
        ],
        'BurstInfo' => [
            'type' => 'structure',
            'members' => [
                'burstMode' => [ 'type' => 'string', 'locationName' => 'burstMode', ],
                'creditChargeStatus' => [ 'type' => 'string', 'locationName' => 'creditChargeStatus', ],
            ],
        ],
        'BurstSpec' => [
            'type' => 'structure',
            'members' => [
                'burstMode' => [ 'type' => 'string', 'locationName' => 'burstMode', ],
            ],
        ],
        'ChargeEvent' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'stopTime' => [ 'type' => 'string', 'locationName' => 'stopTime', ],
            ],
        ],
        'CloudDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'CopyImage' => [
            'type' => 'structure',
            'members' => [
                'destinationImageId' => [ 'type' => 'string', 'locationName' => 'destinationImageId', ],
                'sourceImageId' => [ 'type' => 'string', 'locationName' => 'sourceImageId', ],
            ],
        ],
        'CustomData' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
            ],
        ],
        'Userdata' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Metadata' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DiskInfo' => [
            'type' => 'structure',
            'members' => [
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'volumeSize' => [ 'type' => 'string', 'locationName' => 'volumeSize', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'snapshotName' => [ 'type' => 'string', 'locationName' => 'snapshotName', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'policyName' => [ 'type' => 'string', 'locationName' => 'policyName', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
            ],
        ],
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'ExpiredImage' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'rootDeviceType' => [ 'type' => 'string', 'locationName' => 'rootDeviceType', ],
                'ownerPin' => [ 'type' => 'string', 'locationName' => 'ownerPin', ],
                'expiredTime' => [ 'type' => 'string', 'locationName' => 'expiredTime', ],
                'createFrom' => [ 'type' => 'string', 'locationName' => 'createFrom', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'launchPermission' => [ 'type' => 'string', 'locationName' => 'launchPermission', ],
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
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'snapshotPolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotPolicy', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'canPutInRecycleBin' => [ 'type' => 'boolean', 'locationName' => 'canPutInRecycleBin', ],
                'trashTime' => [ 'type' => 'string', 'locationName' => 'trashTime', ],
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
        'ContactInfo' => [
            'type' => 'structure',
            'members' => [
                'sms' => [ 'type' => 'integer', 'locationName' => 'sms', ],
                'email' => [ 'type' => 'integer', 'locationName' => 'email', ],
                'personIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'groupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'SnapshotPolicy' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'lastTriggerTime' => [ 'type' => 'string', 'locationName' => 'lastTriggerTime', ],
                'nextTriggerTime' => [ 'type' => 'string', 'locationName' => 'nextTriggerTime', ],
                'snapshotLifecycle' => [ 'type' => 'integer', 'locationName' => 'snapshotLifecycle', ],
                'contactInfo' =>  [ 'shape' => 'ContactInfo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'diskCount' => [ 'type' => 'integer', 'locationName' => 'diskCount', ],
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
                'ownerPin' => [ 'type' => 'string', 'locationName' => 'ownerPin', ],
                'launchPermission' => [ 'type' => 'string', 'locationName' => 'launchPermission', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachment', ], ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'rootDeviceType' => [ 'type' => 'string', 'locationName' => 'rootDeviceType', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'offline' => [ 'type' => 'boolean', 'locationName' => 'offline', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'imported' => [ 'type' => 'boolean', 'locationName' => 'imported', ],
                'expiredTime' => [ 'type' => 'string', 'locationName' => 'expiredTime', ],
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
        'SecurityGroupSimple' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
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
        'LocalDevice' => [
            'type' => 'structure',
            'members' => [
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'productModel' => [ 'type' => 'string', 'locationName' => 'productModel', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'attachState' => [ 'type' => 'string', 'locationName' => 'attachState', ],
                'setting' => [ 'type' => 'object', 'locationName' => 'setting', ],
            ],
        ],
        'NetworkInterfaceIpv6Address' => [
            'type' => 'structure',
            'members' => [
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
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
                'spotStatus' => [ 'type' => 'string', 'locationName' => 'spotStatus', ],
                'ag' =>  [ 'shape' => 'Ag', ],
                'faultDomain' => [ 'type' => 'string', 'locationName' => 'faultDomain', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'burstInfo' =>  [ 'shape' => 'BurstInfo', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
            ],
        ],
        'Policy' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
            ],
        ],
        'InstanceCreateRecord' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'burstMode' => [ 'type' => 'string', 'locationName' => 'burstMode', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiskInfo', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupSimple', ], ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
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
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
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
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
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
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
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
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'burstSpec' =>  [ 'shape' => 'BurstSpec', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceNetworkInterfaceAttachmentSpec', ],
                'systemDisk' =>  [ 'shape' => 'InstanceDiskAttachmentSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDiskAttachmentSpec', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'noPassword' => [ 'type' => 'boolean', 'locationName' => 'noPassword', ],
                'noKeyNames' => [ 'type' => 'boolean', 'locationName' => 'noKeyNames', ],
                'noElasticIp' => [ 'type' => 'boolean', 'locationName' => 'noElasticIp', ],
                'noInstanceTags' => [ 'type' => 'boolean', 'locationName' => 'noInstanceTags', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'autoImagePolicyId' => [ 'type' => 'string', 'locationName' => 'autoImagePolicyId', ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
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
        'InstanceTemplateNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'ipv6AddressCount' => [ 'type' => 'integer', 'locationName' => 'ipv6AddressCount', ],
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
        'InstanceTemplateBurstInfo' => [
            'type' => 'structure',
            'members' => [
                'burstMode' => [ 'type' => 'string', 'locationName' => 'burstMode', ],
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
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterfaceAttachment', ],
                'elasticIp' =>  [ 'shape' => 'InstanceTemplateElasticIp', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'autoImagePolicyId' => [ 'type' => 'string', 'locationName' => 'autoImagePolicyId', ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'burstInfo' =>  [ 'shape' => 'InstanceTemplateBurstInfo', ],
                'instanceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
            ],
        ],
        'InstanceTemplateNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterface', ],
            ],
        ],
        'InstanceTemplateBurstSpec' => [
            'type' => 'structure',
            'members' => [
                'burstMode' => [ 'type' => 'string', 'locationName' => 'burstMode', ],
            ],
        ],
        'InstanceTemplateCustomData' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
            ],
        ],
        'InstanceTemplateDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'encrypt' => [ 'type' => 'boolean', 'locationName' => 'encrypt', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
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
                'ipv6AddressCount' => [ 'type' => 'integer', 'locationName' => 'ipv6AddressCount', ],
            ],
        ],
        'InstanceTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'elasticIp' =>  [ 'shape' => 'InstanceTemplateElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterfaceAttachmentSpec', ],
                'systemDisk' =>  [ 'shape' => 'InstanceTemplateDiskAttachmentSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTemplateDiskAttachmentSpec', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'autoImagePolicyId' => [ 'type' => 'string', 'locationName' => 'autoImagePolicyId', ],
                'passWordAuth' => [ 'type' => 'string', 'locationName' => 'passWordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'burstSpec' =>  [ 'shape' => 'InstanceTemplateBurstSpec', ],
                'instanceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
                'cloudDiskCountLimit' => [ 'type' => 'integer', 'locationName' => 'cloudDiskCountLimit', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'localDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDisk', ], ],
                'generation' => [ 'type' => 'integer', 'locationName' => 'generation', ],
                'burstInfo' =>  [ 'shape' => 'InstanceTypeBurstInfo', ],
                'cloudDiskTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InstanceTypeBurstInfo' => [
            'type' => 'structure',
            'members' => [
                'creditsEarnedPerHour' => [ 'type' => 'float', 'locationName' => 'creditsEarnedPerHour', ],
                'basePerformance' => [ 'type' => 'float', 'locationName' => 'basePerformance', ],
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
            ],
        ],
        'InternalInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'systemDisk' =>  [ 'shape' => 'BriefInstanceDiskAttachment', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'BriefInstanceDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'BriefInstanceNetworkInterfaceAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'BriefInstanceNetworkInterfaceAttachment', ], ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'faultDomain' => [ 'type' => 'string', 'locationName' => 'faultDomain', ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'cpuTopology' =>  [ 'shape' => 'CpuTopology', ],
                'hostIp' => [ 'type' => 'string', 'locationName' => 'hostIp', ],
                'rack' => [ 'type' => 'string', 'locationName' => 'rack', ],
                'tor' => [ 'type' => 'string', 'locationName' => 'tor', ],
            ],
        ],
        'Keypair' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'RecommendAz' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'errorInfo' => [ 'type' => 'string', 'locationName' => 'errorInfo', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'ossUrl' => [ 'type' => 'string', 'locationName' => 'ossUrl', ],
                'ossObject' => [ 'type' => 'string', 'locationName' => 'ossObject', ],
                'ossObjects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
            ],
        ],
        'UpdateInstanceTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'elasticIp' =>  [ 'shape' => 'InstanceTemplateElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'InstanceTemplateNetworkInterfaceAttachmentSpec', ],
                'systemDisk' =>  [ 'shape' => 'InstanceTemplateDiskAttachmentSpec', ],
                'dataDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTemplateDiskAttachmentSpec', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'autoImagePolicyId' => [ 'type' => 'string', 'locationName' => 'autoImagePolicyId', ],
                'passWordAuth' => [ 'type' => 'string', 'locationName' => 'passWordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'noPassword' => [ 'type' => 'boolean', 'locationName' => 'noPassword', ],
                'noElasticIp' => [ 'type' => 'boolean', 'locationName' => 'noElasticIp', ],
                'burstSpec' =>  [ 'shape' => 'InstanceTemplateBurstSpec', ],
                'instanceTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'removeInstanceTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserSysDisk' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'systemType' => [ 'type' => 'string', 'locationName' => 'systemType', ],
                'systemDiskSize' => [ 'type' => 'integer', 'locationName' => 'systemDiskSize', ],
                'flavors' => [ 'type' => 'string', 'locationName' => 'flavors', ],
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
        'ImportImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageResultShape', ],
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
        'ExportImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExportImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UnShareImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deleteSnapshot' => [ 'type' => 'boolean', 'locationName' => 'deleteSnapshot', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'Image', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ImageTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskSet' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeImageConstraintsBatchResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageConstraints' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageConstraint', ], ],
            ],
        ],
        'CreateImageFromSnapshotsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'cloudDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudDiskSpec', ], ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReleaseImageRequestShape' => [
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
        'DescribeImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'image' =>  [ 'shape' => 'Image', ],
            ],
        ],
        'ImportImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'diskFormat' => [ 'type' => 'string', 'locationName' => 'diskFormat', ],
                'systemDiskSizeGB' => [ 'type' => 'integer', 'locationName' => 'systemDiskSizeGB', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'forceImport' => [ 'type' => 'boolean', 'locationName' => 'forceImport', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateImageFromSnapshotsResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
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
        'ShareImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UnShareImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ReleaseImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UnReleaseImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UnReleaseImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
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
        'ImageTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskAction' => [ 'type' => 'string', 'locationName' => 'taskAction', ],
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImageRequestShape' => [
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
        'UnReleaseImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImageTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImageTasksResultShape', ],
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
        'ExportImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeImageConstraintsBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImageMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ImportImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImportImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyImageAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ShareImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReleaseImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateImageFromSnapshotsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateImageFromSnapshotsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'offline' => [ 'type' => 'boolean', 'locationName' => 'offline', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'rootDeviceType' => [ 'type' => 'string', 'locationName' => 'rootDeviceType', ],
                'launchPermission' => [ 'type' => 'string', 'locationName' => 'launchPermission', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExportImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'ossUrl' => [ 'type' => 'string', 'locationName' => 'ossUrl', ],
                'ossPrefix' => [ 'type' => 'string', 'locationName' => 'ossPrefix', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'isAllDisk' => [ 'type' => 'boolean', 'locationName' => 'isAllDisk', ],
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
        'DescribeInstancesCustomDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstancePlacementRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'balance' => [ 'type' => 'boolean', 'locationName' => 'balance', ],
                'clearLocalDisk' => [ 'type' => 'boolean', 'locationName' => 'clearLocalDisk', ],
                'isManaged' => [ 'type' => 'boolean', 'locationName' => 'isManaged', ],
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
        'DescribeBriefInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBriefInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeInstanceVncUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartInstanceResultShape' => [
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
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
                'deletePrimaryNetworkInterfaceAllElasticIp' => [ 'type' => 'boolean', 'locationName' => 'deletePrimaryNetworkInterfaceAllElasticIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceStatuses' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceStatus', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DetachDiskResultShape' => [
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
        'ModifyInstanceVpcAttributeResponseShape' => [
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
        'ModifyInstancePasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesCustomDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesCustomDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstancePlacementResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyInstancePasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'isManaged' => [ 'type' => 'boolean', 'locationName' => 'isManaged', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'ResizeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBriefInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesCustomDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'customData' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomData', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'RebuildInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
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
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RedeployInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceVpcAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstancePlacementResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBriefInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'BriefInstance', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RedeployInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AttachNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'metadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metadata', ], ],
                'userdata' => [ 'type' => 'list', 'member' => [ 'shape' => 'Userdata', ], ],
                'passWordAuth' => [ 'type' => 'string', 'locationName' => 'passWordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceVpcAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'assignIpv6' => [ 'type' => 'boolean', 'locationName' => 'assignIpv6', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'RedeployInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceDiskAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'VerifyInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
            ],
        ],
        'CreateInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
            ],
        ],
        'DescribeInstanceTemplatesCustomdataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceTemplatesCustomdataResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplatesCustomData' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTemplateCustomData', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
            ],
        ],
        'DescribeInstanceTemplatesCustomdataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTemplatesCustomdataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTemplate', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'VerifyInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'VerifyInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceTemplateData' =>  [ 'shape' => 'UpdateInstanceTemplateSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
            ],
        ],
        'DescribeInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplate' =>  [ 'shape' => 'InstanceTemplate', ],
            ],
        ],
        'DescribeInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
            ],
        ],
        'CreateInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplateData' =>  [ 'shape' => 'InstanceTemplateSpec', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
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
        'DetachKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
            ],
        ],
        'AttachKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'passWordAuth' => [ 'type' => 'string', 'locationName' => 'passWordAuth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
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
        'AttachKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AttachKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'successInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DetachKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DetachKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DetachKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'successInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
