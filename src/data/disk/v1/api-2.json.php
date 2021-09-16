<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'disk',
        'protocol' => 'json',
//        'serviceFullName' => 'disk',
//        'serviceId' => 'disk',
    ],
    'operations' => [
        'DescribeDisks' => [
            'name' => 'DescribeDisks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disks',
            ],
            'input' => [ 'shape' => 'DescribeDisksRequestShape', ],
            'output' => [ 'shape' => 'DescribeDisksResponseShape', ],
        ],
        'CreateDisks' => [
            'name' => 'CreateDisks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/disks',
            ],
            'input' => [ 'shape' => 'CreateDisksRequestShape', ],
            'output' => [ 'shape' => 'CreateDisksResponseShape', ],
        ],
        'DescribeDisk' => [
            'name' => 'DescribeDisk',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disks/{diskId}',
            ],
            'input' => [ 'shape' => 'DescribeDiskRequestShape', ],
            'output' => [ 'shape' => 'DescribeDiskResponseShape', ],
        ],
        'ModifyDiskAttribute' => [
            'name' => 'ModifyDiskAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/disks/{diskId}',
            ],
            'input' => [ 'shape' => 'ModifyDiskAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyDiskAttributeResponseShape', ],
        ],
        'DeleteDisk' => [
            'name' => 'DeleteDisk',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/disks/{diskId}',
            ],
            'input' => [ 'shape' => 'DeleteDiskRequestShape', ],
            'output' => [ 'shape' => 'DeleteDiskResponseShape', ],
        ],
        'RestoreDisk' => [
            'name' => 'RestoreDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/disks/{diskId}:restore',
            ],
            'input' => [ 'shape' => 'RestoreDiskRequestShape', ],
            'output' => [ 'shape' => 'RestoreDiskResponseShape', ],
        ],
        'ExtendDisk' => [
            'name' => 'ExtendDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/disks/{diskId}:extend',
            ],
            'input' => [ 'shape' => 'ExtendDiskRequestShape', ],
            'output' => [ 'shape' => 'ExtendDiskResponseShape', ],
        ],
        'DescribeVolumesIgnoreServiceCode' => [
            'name' => 'DescribeVolumesIgnoreServiceCode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/disks:ignoreServiceCode',
            ],
            'input' => [ 'shape' => 'DescribeVolumesIgnoreServiceCodeRequestShape', ],
            'output' => [ 'shape' => 'DescribeVolumesIgnoreServiceCodeResponseShape', ],
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
        'DescribeSnapshots' => [
            'name' => 'DescribeSnapshots',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/snapshots',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotsResponseShape', ],
        ],
        'CreateSnapshot' => [
            'name' => 'CreateSnapshot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/snapshots',
            ],
            'input' => [ 'shape' => 'CreateSnapshotRequestShape', ],
            'output' => [ 'shape' => 'CreateSnapshotResponseShape', ],
        ],
        'DeleteSnapshots' => [
            'name' => 'DeleteSnapshots',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/snapshots',
            ],
            'input' => [ 'shape' => 'DeleteSnapshotsRequestShape', ],
            'output' => [ 'shape' => 'DeleteSnapshotsResponseShape', ],
        ],
        'DescribeSnapshot' => [
            'name' => 'DescribeSnapshot',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/snapshots/{snapshotId}',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotResponseShape', ],
        ],
        'ModifySnapshotAttribute' => [
            'name' => 'ModifySnapshotAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/snapshots/{snapshotId}',
            ],
            'input' => [ 'shape' => 'ModifySnapshotAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifySnapshotAttributeResponseShape', ],
        ],
        'DeleteSnapshot' => [
            'name' => 'DeleteSnapshot',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/snapshots/{snapshotId}',
            ],
            'input' => [ 'shape' => 'DeleteSnapshotRequestShape', ],
            'output' => [ 'shape' => 'DeleteSnapshotResponseShape', ],
        ],
        'DescribeSnapshotsCapacity' => [
            'name' => 'DescribeSnapshotsCapacity',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/snapshots:capacity',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotsCapacityRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotsCapacityResponseShape', ],
        ],
        'DescribeSnapshotChain' => [
            'name' => 'DescribeSnapshotChain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/snapshots:chain',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotChainRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotChainResponseShape', ],
        ],
        'CreateSnapshotPolicy' => [
            'name' => 'CreateSnapshotPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/snapshotPolicy',
            ],
            'input' => [ 'shape' => 'CreateSnapshotPolicyRequestShape', ],
            'output' => [ 'shape' => 'CreateSnapshotPolicyResponseShape', ],
        ],
        'UpdateSnapshotPolicy' => [
            'name' => 'UpdateSnapshotPolicy',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/snapshotPolicy/{policyId}',
            ],
            'input' => [ 'shape' => 'UpdateSnapshotPolicyRequestShape', ],
            'output' => [ 'shape' => 'UpdateSnapshotPolicyResponseShape', ],
        ],
        'DeleteSnapshotPolicy' => [
            'name' => 'DeleteSnapshotPolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/snapshotPolicy/{policyId}',
            ],
            'input' => [ 'shape' => 'DeleteSnapshotPolicyRequestShape', ],
            'output' => [ 'shape' => 'DeleteSnapshotPolicyResponseShape', ],
        ],
        'DescribeSnapshotPolicies' => [
            'name' => 'DescribeSnapshotPolicies',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/snapshotPolicies:describe',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotPoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotPoliciesResponseShape', ],
        ],
        'DescribeSnapPolices' => [
            'name' => 'DescribeSnapPolices',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/snapPolicies:describe',
            ],
            'input' => [ 'shape' => 'DescribeSnapPolicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapPolicesResponseShape', ],
        ],
        'ApplySnapshotPolicies' => [
            'name' => 'ApplySnapshotPolicies',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/snapshotPolicies:apply',
            ],
            'input' => [ 'shape' => 'ApplySnapshotPoliciesRequestShape', ],
            'output' => [ 'shape' => 'ApplySnapshotPoliciesResponseShape', ],
        ],
        'DescribeSnapshotPolicyDiskRelations' => [
            'name' => 'DescribeSnapshotPolicyDiskRelations',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/snapshotPolicyDiskRelations:describe',
            ],
            'input' => [ 'shape' => 'DescribeSnapshotPolicyDiskRelationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSnapshotPolicyDiskRelationsResponseShape', ],
        ],
    ],
    'shapes' => [
        'Bind' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
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
        'DelSnapshot' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'DescSnapshotRelationsData' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'diskRegion' => [ 'type' => 'string', 'locationName' => 'diskRegion', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
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
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'DiskSpecification' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'minSizeGB' => [ 'type' => 'integer', 'locationName' => 'minSizeGB', ],
                'maxSizeGB' => [ 'type' => 'integer', 'locationName' => 'maxSizeGB', ],
                'stepSizeGB' => [ 'type' => 'integer', 'locationName' => 'stepSizeGB', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskTypeName' => [ 'type' => 'string', 'locationName' => 'diskTypeName', ],
                'defaultIOPS' => [ 'type' => 'integer', 'locationName' => 'defaultIOPS', ],
                'stepIOPS' => [ 'type' => 'float', 'locationName' => 'stepIOPS', ],
                'maxIOPS' => [ 'type' => 'integer', 'locationName' => 'maxIOPS', ],
                'defaultThroughput' => [ 'type' => 'integer', 'locationName' => 'defaultThroughput', ],
                'stepThroughput' => [ 'type' => 'float', 'locationName' => 'stepThroughput', ],
                'maxThroughput' => [ 'type' => 'integer', 'locationName' => 'maxThroughput', ],
                'scalableIOPS' => [ 'type' => 'boolean', 'locationName' => 'scalableIOPS', ],
                'maxStepIOPS' => [ 'type' => 'integer', 'locationName' => 'maxStepIOPS', ],
            ],
        ],
        'FilterGroups' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'Data' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bind', ], ],
            ],
        ],
        'OrderItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'integer', 'locationName' => 'direction', ],
            ],
        ],
        'PolicyDiskRelationOp' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'diskRegion' => [ 'type' => 'string', 'locationName' => 'diskRegion', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'op' => [ 'type' => 'integer', 'locationName' => 'op', ],
            ],
        ],
        'PolicyDiskRelationOps' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyDiskRelationOp', ], ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'ShareInfo' => [
            'type' => 'structure',
            'members' => [
                'shareTo' => [ 'type' => 'string', 'locationName' => 'shareTo', ],
                'shareTime' => [ 'type' => 'string', 'locationName' => 'shareTime', ],
            ],
        ],
        'Snapshot' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'snapshotSource' => [ 'type' => 'string', 'locationName' => 'snapshotSource', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'snapshotSizeGB' => [ 'type' => 'integer', 'locationName' => 'snapshotSizeGB', ],
                'images' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'sharInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShareInfo', ], ],
                'shareInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShareInfo', ], ],
                'encrypted' => [ 'type' => 'boolean', 'locationName' => 'encrypted', ],
            ],
        ],
        'SnapshotCapacity' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'snapshotCount' => [ 'type' => 'integer', 'locationName' => 'snapshotCount', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
            ],
        ],
        'SnapshotChain' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'snapshotTotalCount' => [ 'type' => 'integer', 'locationName' => 'snapshotTotalCount', ],
                'snapshotChainSize' => [ 'type' => 'integer', 'locationName' => 'snapshotChainSize', ],
            ],
        ],
        'SnapshotSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'Soldout' => [
            'type' => 'structure',
            'members' => [
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'mediaType' => [ 'type' => 'string', 'locationName' => 'mediaType', ],
                'isSoldOut' => [ 'type' => 'boolean', 'locationName' => 'isSoldOut', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RestoreDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'DescribeDiskResultShape' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'Disk', ],
            ],
        ],
        'DescribeDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVolumesIgnoreServiceCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filterGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterGroups', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVolumesIgnoreServiceCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'PolicyDiskRelationOpResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'diskRegion' => [ 'type' => 'string', 'locationName' => 'diskRegion', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'op' => [ 'type' => 'integer', 'locationName' => 'op', ],
            ],
        ],
        'ExtendDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyDiskAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVolumesIgnoreServiceCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVolumesIgnoreServiceCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyDiskAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDisksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyDiskAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'DescribeDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyRelations' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyDiskRelationOpResult', ], ],
                'diskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagmsg' => [ 'type' => 'string', 'locationName' => 'tagmsg', ],
            ],
        ],
        'DescribeDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'RestoreDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExtendDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'ExtendDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'CreateDisksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
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
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DeleteSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'DeleteSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSnapshotsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'snapshotSource' => [ 'type' => 'string', 'locationName' => 'snapshotSource', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSnapshotsCapacityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSnapshotChainResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotChain' => [ 'type' => 'object', 'locationName' => 'snapshotChain', ],
            ],
        ],
        'DescribeSnapshotsCapacityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotsCapacityResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSnapshotsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteSnapshotsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotsResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'Snapshot', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifySnapshotAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSnapshotsCapacityResultShape' => [
            'type' => 'structure',
            'members' => [
                'capacities' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotCapacity', ], ],
            ],
        ],
        'DescribeSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'DescribeSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'ModifySnapshotAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSnapshotsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshot' =>  [ 'shape' => 'Snapshot', ],
            ],
        ],
        'DescribeSnapshotChainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotSpec' =>  [ 'shape' => 'SnapshotSpec', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSnapshotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSnapshotsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSnapshotChainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotChainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSnapshotsResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'DelSnapshot', ], ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
                'failedCount' => [ 'type' => 'integer', 'locationName' => 'failedCount', ],
            ],
        ],
        'ModifySnapshotAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'DescribeSnapshotPolicyDiskRelationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'diskRegion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'policyId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteSnapshotPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'DescribeSnapshotPolicyDiskRelationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'relationResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescSnapshotRelationsData', ], ],
            ],
        ],
        'UpdateSnapshotPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateSnapshotPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ApplySnapshotPoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'opResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyDiskRelationOpResult', ], ],
            ],
        ],
        'DescribeSnapshotPoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotPoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapPolicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapPolicesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapPolicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filterGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterGroups', ], ],
                'order' =>  [ 'shape' => 'OrderItem', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSnapshotPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSnapshotPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSnapshotPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSnapshotPoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotPolicy', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSnapshotPoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'policyId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'order' =>  [ 'shape' => 'OrderItem', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSnapshotPolicyDiskRelationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotPolicyDiskRelationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ApplySnapshotPoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'relations' => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyDiskRelationOp', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateSnapshotPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'snapshotLifecycle' => [ 'type' => 'integer', 'locationName' => 'snapshotLifecycle', ],
                'contactInfo' =>  [ 'shape' => 'ContactInfo', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'DescribeSnapPolicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnapshotPolicy', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ApplySnapshotPoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ApplySnapshotPoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSnapshotPolicyResultShape' => [
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
        'UpdateSnapshotPolicyResultShape' => [
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
        'DeleteSnapshotPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSnapshotPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'snapshotLifecycle' => [ 'type' => 'integer', 'locationName' => 'snapshotLifecycle', ],
                'contactInfo' =>  [ 'shape' => 'ContactInfo', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
