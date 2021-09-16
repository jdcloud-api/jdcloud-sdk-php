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
    ],
];
