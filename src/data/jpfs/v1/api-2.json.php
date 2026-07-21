<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jpfs',
        'protocol' => 'json',
//        'serviceFullName' => 'jpfs',
//        'serviceId' => 'jpfs',
    ],
    'operations' => [
        'DescribeAccessGroups' => [
            'name' => 'DescribeAccessGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessGroups',
            ],
            'input' => [ 'shape' => 'DescribeAccessGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccessGroupsResponseShape', ],
        ],
        'CreateAccessGroup' => [
            'name' => 'CreateAccessGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessGroups',
            ],
            'input' => [ 'shape' => 'CreateAccessGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateAccessGroupResponseShape', ],
        ],
        'ModifyAccessGroup' => [
            'name' => 'ModifyAccessGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessGroups/{accessGroupId}',
            ],
            'input' => [ 'shape' => 'ModifyAccessGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyAccessGroupResponseShape', ],
        ],
        'DeleteAccessGroup' => [
            'name' => 'DeleteAccessGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/accessGroups/{accessGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteAccessGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccessGroupResponseShape', ],
        ],
        'DescribeAccessRules' => [
            'name' => 'DescribeAccessRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessRules',
            ],
            'input' => [ 'shape' => 'DescribeAccessRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccessRulesResponseShape', ],
        ],
        'CreateAccessRule' => [
            'name' => 'CreateAccessRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessRules',
            ],
            'input' => [ 'shape' => 'CreateAccessRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateAccessRuleResponseShape', ],
        ],
        'ModifyAccessRule' => [
            'name' => 'ModifyAccessRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/accessRules/{accessRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyAccessRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyAccessRuleResponseShape', ],
        ],
        'DeleteAccessRule' => [
            'name' => 'DeleteAccessRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/accessRules/{accessRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteAccessRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccessRuleResponseShape', ],
        ],
        'DescribeProtocolMountTargets' => [
            'name' => 'DescribeProtocolMountTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/protocolMountTargets',
            ],
            'input' => [ 'shape' => 'DescribeProtocolMountTargetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtocolMountTargetsResponseShape', ],
        ],
        'CreateProtocolMountTarget' => [
            'name' => 'CreateProtocolMountTarget',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/protocolMountTargets',
            ],
            'input' => [ 'shape' => 'CreateProtocolMountTargetRequestShape', ],
            'output' => [ 'shape' => 'CreateProtocolMountTargetResponseShape', ],
        ],
        'DescribeAuthorizedMountTargets' => [
            'name' => 'DescribeAuthorizedMountTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/authorizedMountTargets',
            ],
            'input' => [ 'shape' => 'DescribeAuthorizedMountTargetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuthorizedMountTargetsResponseShape', ],
        ],
        'CreateAuthorizedMountTarget' => [
            'name' => 'CreateAuthorizedMountTarget',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/authorizedMountTargets',
            ],
            'input' => [ 'shape' => 'CreateAuthorizedMountTargetRequestShape', ],
            'output' => [ 'shape' => 'CreateAuthorizedMountTargetResponseShape', ],
        ],
        'DeleteProtocolMountTarget' => [
            'name' => 'DeleteProtocolMountTarget',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/protocolMountTargets/{mountTargetId}',
            ],
            'input' => [ 'shape' => 'DeleteProtocolMountTargetRequestShape', ],
            'output' => [ 'shape' => 'DeleteProtocolMountTargetResponseShape', ],
        ],
        'DescribeProtocolServices' => [
            'name' => 'DescribeProtocolServices',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/protocolServices',
            ],
            'input' => [ 'shape' => 'DescribeProtocolServicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtocolServicesResponseShape', ],
        ],
        'CreateProtocolService' => [
            'name' => 'CreateProtocolService',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/protocolServices',
            ],
            'input' => [ 'shape' => 'CreateProtocolServiceRequestShape', ],
            'output' => [ 'shape' => 'CreateProtocolServiceResponseShape', ],
        ],
        'DeleteProtocolService' => [
            'name' => 'DeleteProtocolService',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/protocolServices/{protocolServiceId}',
            ],
            'input' => [ 'shape' => 'DeleteProtocolServiceRequestShape', ],
            'output' => [ 'shape' => 'DeleteProtocolServiceResponseShape', ],
        ],
        'DescribeFileSystems' => [
            'name' => 'DescribeFileSystems',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/fileSystems',
            ],
            'input' => [ 'shape' => 'DescribeFileSystemsRequestShape', ],
            'output' => [ 'shape' => 'DescribeFileSystemsResponseShape', ],
        ],
        'CreateFileSystem' => [
            'name' => 'CreateFileSystem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/fileSystems',
            ],
            'input' => [ 'shape' => 'CreateFileSystemRequestShape', ],
            'output' => [ 'shape' => 'CreateFileSystemResponseShape', ],
        ],
        'DescribeFileSystem' => [
            'name' => 'DescribeFileSystem',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}',
            ],
            'input' => [ 'shape' => 'DescribeFileSystemRequestShape', ],
            'output' => [ 'shape' => 'DescribeFileSystemResponseShape', ],
        ],
        'ModifyFileSystemAttribute' => [
            'name' => 'ModifyFileSystemAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}',
            ],
            'input' => [ 'shape' => 'ModifyFileSystemAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyFileSystemAttributeResponseShape', ],
        ],
        'DeleteFileSystem' => [
            'name' => 'DeleteFileSystem',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}',
            ],
            'input' => [ 'shape' => 'DeleteFileSystemRequestShape', ],
            'output' => [ 'shape' => 'DeleteFileSystemResponseShape', ],
        ],
        'ExtendFileSystem' => [
            'name' => 'ExtendFileSystem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/fileSystems/{fileSystemId}:extend',
            ],
            'input' => [ 'shape' => 'ExtendFileSystemRequestShape', ],
            'output' => [ 'shape' => 'ExtendFileSystemResponseShape', ],
        ],
        'UserFileSystemQuota' => [
            'name' => 'UserFileSystemQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/userFileSystemQuota',
            ],
            'input' => [ 'shape' => 'UserFileSystemQuotaRequestShape', ],
            'output' => [ 'shape' => 'UserFileSystemQuotaResponseShape', ],
        ],
        'QueryMountCommand' => [
            'name' => 'QueryMountCommand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryMountCommand',
            ],
            'input' => [ 'shape' => 'QueryMountCommandRequestShape', ],
            'output' => [ 'shape' => 'QueryMountCommandResponseShape', ],
        ],
        'ListInstancesDetail' => [
            'name' => 'ListInstancesDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:selectDetailList',
            ],
            'input' => [ 'shape' => 'ListInstancesDetailRequestShape', ],
            'output' => [ 'shape' => 'ListInstancesDetailResponseShape', ],
        ],
        'GetFSClusterInfo' => [
            'name' => 'GetFSClusterInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/getUfsClusterInfo',
            ],
            'input' => [ 'shape' => 'GetFSClusterInfoRequestShape', ],
            'output' => [ 'shape' => 'GetFSClusterInfoResponseShape', ],
        ],
        'DescribeMountTargets' => [
            'name' => 'DescribeMountTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/mountTargets',
            ],
            'input' => [ 'shape' => 'DescribeMountTargetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMountTargetsResponseShape', ],
        ],
        'CreateMountTarget' => [
            'name' => 'CreateMountTarget',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/mountTargets',
            ],
            'input' => [ 'shape' => 'CreateMountTargetRequestShape', ],
            'output' => [ 'shape' => 'CreateMountTargetResponseShape', ],
        ],
        'DescribeMountTarget' => [
            'name' => 'DescribeMountTarget',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/mountTargets/{mountTargetId}',
            ],
            'input' => [ 'shape' => 'DescribeMountTargetRequestShape', ],
            'output' => [ 'shape' => 'DescribeMountTargetResponseShape', ],
        ],
        'DeleteMountTarget' => [
            'name' => 'DeleteMountTarget',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/mountTargets/{mountTargetId}',
            ],
            'input' => [ 'shape' => 'DeleteMountTargetRequestShape', ],
            'output' => [ 'shape' => 'DeleteMountTargetResponseShape', ],
        ],
        'ListAllProtocolMountTargets' => [
            'name' => 'ListAllProtocolMountTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/allProtocolMountTargets',
            ],
            'input' => [ 'shape' => 'ListAllProtocolMountTargetsRequestShape', ],
            'output' => [ 'shape' => 'ListAllProtocolMountTargetsResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccessGroup' => [
            'type' => 'structure',
            'members' => [
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ruleCount' => [ 'type' => 'integer', 'locationName' => 'ruleCount', ],
                'fileSystemCount' => [ 'type' => 'integer', 'locationName' => 'fileSystemCount', ],
                'mountTargetCount' => [ 'type' => 'integer', 'locationName' => 'mountTargetCount', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'AccessRule' => [
            'type' => 'structure',
            'members' => [
                'accessRuleId' => [ 'type' => 'string', 'locationName' => 'accessRuleId', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'authClientIp' => [ 'type' => 'string', 'locationName' => 'authClientIp', ],
                'rwPermission' => [ 'type' => 'string', 'locationName' => 'rwPermission', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'userPermission' => [ 'type' => 'string', 'locationName' => 'userPermission', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AzInfo' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'string', 'locationName' => 'inStock', ],
            ],
        ],
        'AzInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'hpcClusterInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'HpcClusterInfoDetail', ], ],
            ],
        ],
        'HpcClusterInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'fileSystemTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystemTypeDetail', ], ],
            ],
        ],
        'FileSystemTypeDetail' => [
            'type' => 'structure',
            'members' => [
                'fileSystemType' => [ 'type' => 'string', 'locationName' => 'fileSystemType', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
            ],
        ],
        'HpcClusterInfo' => [
            'type' => 'structure',
            'members' => [
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'inStock' => [ 'type' => 'string', 'locationName' => 'inStock', ],
            ],
        ],
        'ChargeSpecRes' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
            ],
        ],
        'FileSystem' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'capacity' => [ 'type' => 'integer', 'locationName' => 'capacity', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'fileSystemType' => [ 'type' => 'string', 'locationName' => 'fileSystemType', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'charge' =>  [ 'shape' => 'ChargeSpecRes', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'mountTargetCount' => [ 'type' => 'integer', 'locationName' => 'mountTargetCount', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
            ],
        ],
        'FileSystemDetail' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'FileSystemTypes' => [
            'type' => 'structure',
            'members' => [
                'fileSystemType' => [ 'type' => 'string', 'locationName' => 'fileSystemType', ],
                'capacityMax' => [ 'type' => 'integer', 'locationName' => 'capacityMax', ],
                'capacityMin' => [ 'type' => 'integer', 'locationName' => 'capacityMin', ],
                'capacityStep' => [ 'type' => 'integer', 'locationName' => 'capacityStep', ],
                'azInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfo', ], ],
            ],
        ],
        'FileSystemQuota' => [
            'type' => 'structure',
            'members' => [
                'usedCount' => [ 'type' => 'integer', 'locationName' => 'usedCount', ],
                'quota' => [ 'type' => 'integer', 'locationName' => 'quota', ],
            ],
        ],
        'HpcClusterItem' => [
            'type' => 'structure',
            'members' => [
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
            ],
        ],
        'AllProtocolMountTarget' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'accessGroupName' => [ 'type' => 'string', 'locationName' => 'accessGroupName', ],
                'singleTunnelEndPointId' => [ 'type' => 'string', 'locationName' => 'singleTunnelEndPointId', ],
                'fsTargetGroupId' => [ 'type' => 'string', 'locationName' => 'fsTargetGroupId', ],
                'vniId' => [ 'type' => 'string', 'locationName' => 'vniId', ],
                'gatewayLoadbalancerId' => [ 'type' => 'string', 'locationName' => 'gatewayLoadbalancerId', ],
                'pseudo' => [ 'type' => 'string', 'locationName' => 'pseudo', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'targetIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'exportId' => [ 'type' => 'string', 'locationName' => 'exportId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'deleteTime' => [ 'type' => 'string', 'locationName' => 'deleteTime', ],
            ],
        ],
        'MountTarget' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'isVpcApi' => [ 'type' => 'boolean', 'locationName' => 'isVpcApi', ],
            ],
        ],
        'ProtocolMountTarget' => [
            'type' => 'structure',
            'members' => [
                'protocolMountTargetId' => [ 'type' => 'string', 'locationName' => 'protocolMountTargetId', ],
                'exportId' => [ 'type' => 'string', 'locationName' => 'exportId', ],
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pseudo' => [ 'type' => 'string', 'locationName' => 'pseudo', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'accessGroupName' => [ 'type' => 'string', 'locationName' => 'accessGroupName', ],
                'singleTunnelEndPointId' => [ 'type' => 'string', 'locationName' => 'singleTunnelEndPointId', ],
                'fsTargetGroupId' => [ 'type' => 'string', 'locationName' => 'fsTargetGroupId', ],
                'targetIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vniId' => [ 'type' => 'string', 'locationName' => 'vniId', ],
                'gatewayLoadbalancerId' => [ 'type' => 'string', 'locationName' => 'gatewayLoadbalancerId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ProtocolService' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
                'protocolSpec' => [ 'type' => 'string', 'locationName' => 'protocolSpec', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'mountTargetCount' => [ 'type' => 'integer', 'locationName' => 'mountTargetCount', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'bandWidth' => [ 'type' => 'string', 'locationName' => 'bandWidth', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'modifyTime' => [ 'type' => 'string', 'locationName' => 'modifyTime', ],
            ],
        ],
        'SpecificationHpcDetail' => [
            'type' => 'structure',
            'members' => [
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'azInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfoDetail', ], ],
            ],
        ],
        'SpecificationInfo' => [
            'type' => 'structure',
            'members' => [
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'fileSystemTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystemTypes', ], ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateAccessGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
            ],
        ],
        'CreateAccessGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAccessGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAccessGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
            ],
        ],
        'DeleteAccessGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccessGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccessGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAccessGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateAccessGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAccessGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
            ],
        ],
        'DescribeAccessGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyAccessGroupResultShape' => [
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
        'ModifyAccessGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAccessGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccessRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'authClientIp' => [ 'type' => 'string', 'locationName' => 'authClientIp', ],
                'rwPermission' => [ 'type' => 'string', 'locationName' => 'rwPermission', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'userPermission' => [ 'type' => 'string', 'locationName' => 'userPermission', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAccessRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessRuleId' => [ 'type' => 'string', 'locationName' => 'accessRuleId', ],
            ],
        ],
        'DescribeAccessRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessRule', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAccessRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'accessRuleId' => [ 'type' => 'string', 'locationName' => 'accessRuleId', ],
            ],
        ],
        'DescribeAccessRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccessRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAccessRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'authClientIp' => [ 'type' => 'string', 'locationName' => 'authClientIp', ],
                'rwPermission' => [ 'type' => 'string', 'locationName' => 'rwPermission', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'userPermission' => [ 'type' => 'string', 'locationName' => 'userPermission', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'accessRuleId' => [ 'type' => 'string', 'locationName' => 'accessRuleId', ],
            ],
        ],
        'DescribeAccessRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyAccessRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAccessRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAccessRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccessRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAccessRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAccessRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAuthorizedMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAuthorizedMountTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateProtocolMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'pseudo' => [ 'type' => 'string', 'locationName' => 'pseudo', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAuthorizedMountTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'protocolMountTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolMountTarget', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeProtocolMountTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'protocolMountTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolMountTarget', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteProtocolMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteProtocolMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateProtocolMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateProtocolMountTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAuthorizedMountTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateAuthorizedMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'accessGroupId' => [ 'type' => 'string', 'locationName' => 'accessGroupId', ],
                'pseudo' => [ 'type' => 'string', 'locationName' => 'pseudo', ],
                'targetGroupId' => [ 'type' => 'string', 'locationName' => 'targetGroupId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'podCount' => [ 'type' => 'integer', 'locationName' => 'podCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteProtocolMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'CreateProtocolMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'CreateAuthorizedMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'DescribeProtocolMountTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAuthorizedMountTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuthorizedMountTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtocolMountTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtocolMountTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteProtocolServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateProtocolServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateProtocolServiceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteProtocolServiceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateProtocolServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'protocolSpec' => [ 'type' => 'string', 'locationName' => 'protocolSpec', ],
                'protocolType' => [ 'type' => 'string', 'locationName' => 'protocolType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeProtocolServicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateProtocolServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
            ],
        ],
        'DescribeProtocolServicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'protocolServices' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolService', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteProtocolServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'protocolServiceId' => [ 'type' => 'string', 'locationName' => 'protocolServiceId', ],
            ],
        ],
        'DescribeProtocolServicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtocolServicesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyFileSystemAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryMountCommandResultShape' => [
            'type' => 'structure',
            'members' => [
                'cmd' => [ 'type' => 'string', 'locationName' => 'cmd', ],
            ],
        ],
        'UserFileSystemQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UserFileSystemQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListInstancesDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystemDetail', ], ],
            ],
        ],
        'DeleteFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFileSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyFileSystemAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFileSystemsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFileSystemsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'fileSystemType' => [ 'type' => 'string', 'locationName' => 'fileSystemType', ],
                'capacity' => [ 'type' => 'integer', 'locationName' => 'capacity', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListInstancesDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceList' => [ 'type' => 'string', 'locationName' => 'resourceList', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'ExtendFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'UserFileSystemQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemQuota' =>  [ 'shape' => 'FileSystemQuota', ],
            ],
        ],
        'QueryMountCommandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryMountCommandResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExtendFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'capacity' => [ 'type' => 'integer', 'locationName' => 'capacity', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'QueryMountCommandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListInstancesDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListInstancesDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetFSClusterInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetFSClusterInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteFileSystemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'DeleteFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFileSystemResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetFSClusterInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFileSystemsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExtendFileSystemResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UserFileSystemQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFileSystemsResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystems' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystem', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetFSClusterInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DescribeFileSystemResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystem' =>  [ 'shape' => 'FileSystem', ],
            ],
        ],
        'ModifyFileSystemAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
            ],
        ],
        'ListAllProtocolMountTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTarget' =>  [ 'shape' => 'MountTarget', ],
            ],
        ],
        'ListAllProtocolMountTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'AllProtocolMountTarget', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateMountTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListAllProtocolMountTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListAllProtocolMountTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMountTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMountTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMountTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMountTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'MountTarget', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateMountTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'DescribeMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'DeleteMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileSystemId' => [ 'type' => 'string', 'locationName' => 'fileSystemId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMountTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMountTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMountTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
    ],
];
