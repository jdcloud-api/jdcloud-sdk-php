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
            ],
        ],
        'ChargeEvent' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'stopTime' => [ 'type' => 'string', 'locationName' => 'stopTime', ],
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
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
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
                'ag' =>  [ 'shape' => 'Ag', ],
                'faultDomain' => [ 'type' => 'string', 'locationName' => 'faultDomain', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
                'dedicatedPoolId' => [ 'type' => 'string', 'locationName' => 'dedicatedPoolId', ],
                'dedicatedHostId' => [ 'type' => 'string', 'locationName' => 'dedicatedHostId', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'Policy' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
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
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'chargeOnStopped' => [ 'type' => 'string', 'locationName' => 'chargeOnStopped', ],
                'autoImagePolicyId' => [ 'type' => 'string', 'locationName' => 'autoImagePolicyId', ],
                'passwordAuth' => [ 'type' => 'string', 'locationName' => 'passwordAuth', ],
                'imageInherit' => [ 'type' => 'string', 'locationName' => 'imageInherit', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
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
                'cloudDiskCountLimit' => [ 'type' => 'integer', 'locationName' => 'cloudDiskCountLimit', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'localDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDisk', ], ],
                'generation' => [ 'type' => 'integer', 'locationName' => 'generation', ],
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
                'hostIp' => [ 'type' => 'string', 'locationName' => 'hostIp', ],
                'rack' => [ 'type' => 'string', 'locationName' => 'rack', ],
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
