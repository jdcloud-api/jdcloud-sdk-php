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
    ],
    'shapes' => [
        'Bind' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'Tag' => [
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
        'DiskSpecification' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'minSizeGB' => [ 'type' => 'integer', 'locationName' => 'minSizeGB', ],
                'maxSizeGB' => [ 'type' => 'integer', 'locationName' => 'maxSizeGB', ],
                'stepSizeGB' => [ 'type' => 'integer', 'locationName' => 'stepSizeGB', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'Data' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bind', ], ],
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
                'sharInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShareInfo', ], ],
                'encrypted' => [ 'type' => 'boolean', 'locationName' => 'encrypted', ],
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
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDisksResultShape', ],
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
                'diskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifySnapshotAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshot' =>  [ 'shape' => 'Snapshot', ],
            ],
        ],
        'DescribeSnapshotsResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'Snapshot', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'ModifySnapshotAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
    ],
];
