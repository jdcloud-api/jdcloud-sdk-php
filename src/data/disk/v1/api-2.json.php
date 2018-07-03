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
        'ModifySnpAttribute' => [
            'name' => 'ModifySnpAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/snapshots/{snapshotId}',
            ],
            'input' => [ 'shape' => 'ModifySnpAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifySnpAttributeResponseShape', ],
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
                'attachTime' => [ 'type' => 'date-time', 'locationName' => 'attachTime', ],
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
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiskAttachment', ], ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'createTime' => [ 'type' => 'date-time', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
        'Snapshot' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'snapshotSizeGB' => [ 'type' => 'integer', 'locationName' => 'snapshotSizeGB', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'date-time', 'locationName' => 'createTime', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'ModifyDiskAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'RestoreDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExtendDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyDiskAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDiskResultShape' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'Disk', ],
            ],
        ],
        'ExtendDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'DescribeDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'DeleteDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
            ],
        ],
        'ExtendDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateDisksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'diskSpec' =>  [ 'shape' => 'DiskSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
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
        'CreateDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDiskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'diskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeSnapshotsResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'Snapshot', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifySnpAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifySnpAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'CreateSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
            ],
        ],
        'CreateSnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSnapshotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapshot' =>  [ 'shape' => 'Snapshot', ],
            ],
        ],
        'DescribeSnapshotsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSnapshotsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSnapshotRequestShape' => [
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
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifySnpAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
