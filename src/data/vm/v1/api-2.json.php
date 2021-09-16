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
    ],
];
