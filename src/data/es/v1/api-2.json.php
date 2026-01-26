<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'es',
        'protocol' => 'json',
//        'serviceFullName' => 'es',
//        'serviceId' => 'es',
    ],
    'operations' => [
        'DescribeAuthStatus' => [
            'name' => 'DescribeAuthStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/authStatus',
            ],
            'input' => [ 'shape' => 'DescribeAuthStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuthStatusResponseShape', ],
        ],
        'DescribeRoles' => [
            'name' => 'DescribeRoles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/authRole',
            ],
            'input' => [ 'shape' => 'DescribeRolesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRolesResponseShape', ],
        ],
        'DescribeUsers' => [
            'name' => 'DescribeUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/authUser',
            ],
            'input' => [ 'shape' => 'DescribeUsersRequestShape', ],
            'output' => [ 'shape' => 'DescribeUsersResponseShape', ],
        ],
        'DescribeBillingInstances' => [
            'name' => 'DescribeBillingInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeBillingInstances',
            ],
            'input' => [ 'shape' => 'DescribeBillingInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBillingInstancesResponseShape', ],
        ],
        'DisableDicts' => [
            'name' => 'DisableDicts',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dicts',
            ],
            'input' => [ 'shape' => 'DisableDictsRequestShape', ],
            'output' => [ 'shape' => 'DisableDictsResponseShape', ],
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
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
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
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'InstanceChangeType' => [
            'name' => 'InstanceChangeType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:changeType',
            ],
            'input' => [ 'shape' => 'InstanceChangeTypeRequestShape', ],
            'output' => [ 'shape' => 'InstanceChangeTypeResponseShape', ],
        ],
        'InstanceConfirmDelete' => [
            'name' => 'InstanceConfirmDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:confirmDelete',
            ],
            'input' => [ 'shape' => 'InstanceConfirmDeleteRequestShape', ],
            'output' => [ 'shape' => 'InstanceConfirmDeleteResponseShape', ],
        ],
        'ModifyInstanceKibanaSpec' => [
            'name' => 'ModifyInstanceKibanaSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceKibanaSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceKibanaSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceKibanaSpecResponseShape', ],
        ],
        'ModifyInstanceExtendInfo' => [
            'name' => 'ModifyInstanceExtendInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceExtendInfo',
            ],
            'input' => [ 'shape' => 'ModifyInstanceExtendInfoRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceExtendInfoResponseShape', ],
        ],
    ],
    'shapes' => [
        'CreateAppInfo' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AppInfo' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'leader' => [ 'type' => 'string', 'locationName' => 'leader', ],
                'appStatus' => [ 'type' => 'string', 'locationName' => 'appStatus', ],
                'organization' => [ 'type' => 'string', 'locationName' => 'organization', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'level' => [ 'type' => 'string', 'locationName' => 'level', ],
            ],
        ],
        'Assets' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'isAuth' => [ 'type' => 'boolean', 'locationName' => 'isAuth', ],
            ],
        ],
        'Sales' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'integer', 'locationName' => 'instanceId', ],
                'cpuCores' => [ 'type' => 'integer', 'locationName' => 'cpuCores', ],
                'memoryGBs' => [ 'type' => 'integer', 'locationName' => 'memoryGBs', ],
                'localDiskGBs' => [ 'type' => 'integer', 'locationName' => 'localDiskGBs', ],
                'cloudDiskGBs' => [ 'type' => 'integer', 'locationName' => 'cloudDiskGBs', ],
                'totalDiskGBs' => [ 'type' => 'integer', 'locationName' => 'totalDiskGBs', ],
                'usedCpuCores' => [ 'type' => 'integer', 'locationName' => 'usedCpuCores', ],
                'usedMemoryGBs' => [ 'type' => 'integer', 'locationName' => 'usedMemoryGBs', ],
                'usedLocalDiskGBs' => [ 'type' => 'integer', 'locationName' => 'usedLocalDiskGBs', ],
                'usedCloudDiskGBs' => [ 'type' => 'integer', 'locationName' => 'usedCloudDiskGBs', ],
                'usedTotalDiskGBs' => [ 'type' => 'integer', 'locationName' => 'usedTotalDiskGBs', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'Log' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
            ],
        ],
        'ClusterLevel' => [
            'type' => 'structure',
            'members' => [
                'operations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Operation', ], ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'Operation' => [
            'type' => 'structure',
            'members' => [
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'IndexLevelOperations' => [
            'type' => 'structure',
            'members' => [
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'operations' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AuthConfig' => [
            'type' => 'structure',
            'members' => [
                'authEnabled' => [ 'type' => 'boolean', 'locationName' => 'authEnabled', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'RoleModel' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'isBuiltIn' => [ 'type' => 'boolean', 'locationName' => 'isBuiltIn', ],
                'clusterLevelOperations' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'indexLevel' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexLevelOperations', ], ],
                'users' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserModel' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'IndexLevel' => [
            'type' => 'structure',
            'members' => [
                'operations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Operation', ], ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'AutoSnapshot' => [
            'type' => 'structure',
            'members' => [
                'open' => [ 'type' => 'boolean', 'locationName' => 'open', ],
                'hour' => [ 'type' => 'integer', 'locationName' => 'hour', ],
                'reservedOfDay' => [ 'type' => 'integer', 'locationName' => 'reservedOfDay', ],
                'indices' => [ 'type' => 'string', 'locationName' => 'indices', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
            ],
        ],
        'NodeConf' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'constraints' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConstraintsConf', ], ],
            ],
        ],
        'AzConf' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'dataNode' =>  [ 'shape' => 'NodeConf', ],
                'masterNode' =>  [ 'shape' => 'NodeConf', ],
                'coordinatingNode' =>  [ 'shape' => 'NodeConf', ],
            ],
        ],
        'ConstraintsConf' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'classCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'stepCount' => [ 'type' => 'integer', 'locationName' => 'stepCount', ],
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'minStorageGB' => [ 'type' => 'integer', 'locationName' => 'minStorageGB', ],
                'maxStorageGB' => [ 'type' => 'integer', 'locationName' => 'maxStorageGB', ],
                'defaultStorageGB' => [ 'type' => 'integer', 'locationName' => 'defaultStorageGB', ],
                'stepStorageGB' => [ 'type' => 'integer', 'locationName' => 'stepStorageGB', ],
            ],
        ],
        'NodeSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'storageType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'storageConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
            ],
        ],
        'ResourceEstimates' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
            ],
        ],
        'ArchSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'nodeSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeSpecConfig', ], ],
            ],
        ],
        'SupportCrossAzNumber' => [
            'type' => 'structure',
            'members' => [
                'isSupport1Az' => [ 'type' => 'boolean', 'locationName' => 'isSupport1Az', ],
                'isSupportCross2Azs' => [ 'type' => 'boolean', 'locationName' => 'isSupportCross2Azs', ],
                'isSupportCross3Azs' => [ 'type' => 'boolean', 'locationName' => 'isSupportCross3Azs', ],
            ],
        ],
        'StorageLimit' => [
            'type' => 'structure',
            'members' => [
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'constantStorageLimit' =>  [ 'shape' => 'ConstantStorageLimit', ],
                'flexibleStorageLimit' =>  [ 'shape' => 'FlexibleStorageLimit', ],
            ],
        ],
        'StorageConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'flavorConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'FlavorConfig', ], ],
            ],
        ],
        'NodeCountLimit' => [
            'type' => 'structure',
            'members' => [
                'availableCount' => [ 'type' => 'integer', 'locationName' => 'availableCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'stepCount' => [ 'type' => 'integer', 'locationName' => 'stepCount', ],
            ],
        ],
        'FlavorConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'storageLimit' =>  [ 'shape' => 'StorageLimit', ],
                'nodeCountLimit' =>  [ 'shape' => 'NodeCountLimit', ],
                'resourceEstimates' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceEstimates', ], ],
            ],
        ],
        'EsEnhanceFeatures' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ConstantStorageLimit' => [
            'type' => 'structure',
            'members' => [
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
            ],
        ],
        'FlexibleStorageLimit' => [
            'type' => 'structure',
            'members' => [
                'minStorage' => [ 'type' => 'integer', 'locationName' => 'minStorage', ],
                'maxStorage' => [ 'type' => 'integer', 'locationName' => 'maxStorage', ],
                'defaultStorage' => [ 'type' => 'integer', 'locationName' => 'defaultStorage', ],
                'stepStorage' => [ 'type' => 'integer', 'locationName' => 'stepStorage', ],
            ],
        ],
        'AzSpecConf2' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' =>  [ 'shape' => 'AzSpecConfig2', ],
                'versionDesc' => [ 'type' => 'list', 'member' => [ 'shape' => 'VersionDesc', ], ],
                'typeVersionDescs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TypeVersionDescs', ], ],
            ],
        ],
        'AzSpecConfig2' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'archSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArchSpecConfig', ], ],
            ],
        ],
        'AzSpecConf' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' =>  [ 'shape' => 'AzSpecConfig', ],
                'versionDesc' => [ 'type' => 'list', 'member' => [ 'shape' => 'VersionDesc', ], ],
                'typeVersionDescs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TypeVersionDescs', ], ],
            ],
        ],
        'AzSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'nodeSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeSpecConfig', ], ],
            ],
        ],
        'VersionDesc' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'TypeVersionDescs' => [
            'type' => 'structure',
            'members' => [
                'versionDescs' => [ 'type' => 'list', 'member' => [ 'shape' => 'VersionDesc', ], ],
            ],
        ],
        'BillingInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CdcFollowTask' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PauseCdcFollowTaskSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CdcFollowTaskShardStats' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCdcFollowTaskSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResumeCdcFollowTaskSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCdcFollowTaskStatsSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CdcFollowTaskIndexStats' => [
            'type' => 'structure',
            'members' => [
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'CdcFollowTaskShardStats', ], ],
            ],
        ],
        'RemoveCdcFollowTaskSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCdcFollowTaskSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ChangeType' => [
            'type' => 'structure',
            'members' => [
                'changeType' => [ 'type' => 'string', 'locationName' => 'changeType', ],
                'changeTypeZh' => [ 'type' => 'string', 'locationName' => 'changeTypeZh', ],
                'changeTypeDesc' => [ 'type' => 'string', 'locationName' => 'changeTypeDesc', ],
            ],
        ],
        'RunningTasks' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'node' => [ 'type' => 'string', 'locationName' => 'node', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'running_time_in_nanos' => [ 'type' => 'long', 'locationName' => 'running_time_in_nanos', ],
                'start_time_in_millis' => [ 'type' => 'long', 'locationName' => 'start_time_in_millis', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'cancellable' => [ 'type' => 'boolean', 'locationName' => 'cancellable', ],
                'cancelled' => [ 'type' => 'boolean', 'locationName' => 'cancelled', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'object', 'locationName' => 'description', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunningTasks', ], ],
            ],
        ],
        'ClusterTypeInfo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ClustersDetail' => [
            'type' => 'structure',
            'members' => [
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Connects' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'tcpConns' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpConns', ], ],
                'httpConns' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpConns', ], ],
            ],
        ],
        'IpConns' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'conns' => [ 'type' => 'integer', 'locationName' => 'conns', ],
            ],
        ],
        'CustomConfigItem' => [
            'type' => 'structure',
            'members' => [
                'configKey' => [ 'type' => 'string', 'locationName' => 'configKey', ],
                'configValue' => [ 'type' => 'string', 'locationName' => 'configValue', ],
            ],
        ],
        'DiagnoseItem' => [
            'type' => 'structure',
            'members' => [
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'suggest' => [ 'type' => 'string', 'locationName' => 'suggest', ],
            ],
        ],
        'DiagnoseOverviewReport' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceOpenDiagnose' => [ 'type' => 'boolean', 'locationName' => 'instanceOpenDiagnose', ],
                'reportType' => [ 'type' => 'string', 'locationName' => 'reportType', ],
                'reportStatus' => [ 'type' => 'string', 'locationName' => 'reportStatus', ],
                'reportHealth' => [ 'type' => 'string', 'locationName' => 'reportHealth', ],
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'reportTime' => [ 'type' => 'string', 'locationName' => 'reportTime', ],
                'errorDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'redDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'yellowDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'greenDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
            ],
        ],
        'DiagnoseReport' => [
            'type' => 'structure',
            'members' => [
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'reportType' => [ 'type' => 'string', 'locationName' => 'reportType', ],
                'errorDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'redDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'yellowDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
                'greenDiagnoseItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DiagnoseItem', ], ],
            ],
        ],
        'DownloadUrl' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
                'internalLink' => [ 'type' => 'string', 'locationName' => 'internalLink', ],
            ],
        ],
        'ReadMetric' => [
            'type' => 'structure',
            'members' => [
                'common' =>  [ 'shape' => 'UnitValue', ],
                'peak' =>  [ 'shape' => 'UnitValue', ],
                'avgLatency' => [ 'type' => 'integer', 'locationName' => 'avgLatency', ],
            ],
        ],
        'Storage' => [
            'type' => 'structure',
            'members' => [
                'baseStorage' =>  [ 'shape' => 'BaseStorage', ],
                'incStorage' =>  [ 'shape' => 'IncStorage', ],
                'longStorage' =>  [ 'shape' => 'LongStorage', ],
            ],
        ],
        'IncStorage' => [
            'type' => 'structure',
            'members' => [
                'inc' =>  [ 'shape' => 'BaseStorage', ],
                'lifeCycle' =>  [ 'shape' => 'UnitValue', ],
            ],
        ],
        'Scenario' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'isStoreInc' => [ 'type' => 'boolean', 'locationName' => 'isStoreInc', ],
                'isLongTermStorage' => [ 'type' => 'boolean', 'locationName' => 'isLongTermStorage', ],
                'isAgg' => [ 'type' => 'boolean', 'locationName' => 'isAgg', ],
            ],
        ],
        'LongStorage' => [
            'type' => 'structure',
            'members' => [
                'inc' =>  [ 'shape' => 'BaseStorage', ],
                'lifeCycle' =>  [ 'shape' => 'UnitValue', ],
            ],
        ],
        'WriteMetric' => [
            'type' => 'structure',
            'members' => [
                'common' =>  [ 'shape' => 'UnitValue', ],
                'peak' =>  [ 'shape' => 'UnitValue', ],
                'isCustomDocId' => [ 'type' => 'boolean', 'locationName' => 'isCustomDocId', ],
                'avgLatency' => [ 'type' => 'integer', 'locationName' => 'avgLatency', ],
            ],
        ],
        'UnitValue' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'RecommendNodeInfo' => [
            'type' => 'structure',
            'members' => [
                'classCode' => [ 'type' => 'string', 'locationName' => 'classCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'diskGb' => [ 'type' => 'integer', 'locationName' => 'diskGb', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskTypeDesc' => [ 'type' => 'string', 'locationName' => 'diskTypeDesc', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'InstanceClassRecommend' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'pazId' => [ 'type' => 'string', 'locationName' => 'pazId', ],
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'masterNode' =>  [ 'shape' => 'RecommendNodeInfo', ],
                'coordinatingNode' =>  [ 'shape' => 'RecommendNodeInfo', ],
                'hotNode' =>  [ 'shape' => 'RecommendNodeInfo', ],
                'warmNode' =>  [ 'shape' => 'RecommendNodeInfo', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'overSaleRange' => [ 'type' => 'boolean', 'locationName' => 'overSaleRange', ],
                'score' => [ 'type' => 'double', 'locationName' => 'score', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
            ],
        ],
        'BaseStorage' => [
            'type' => 'structure',
            'members' => [
                'documentCount' =>  [ 'shape' => 'UnitValue', ],
                'documentSize' =>  [ 'shape' => 'UnitValue', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
            ],
        ],
        'ExternalEndpoint' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'httpEndpoint' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tcpEndpoint' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Features' => [
            'type' => 'structure',
            'members' => [
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
                'isCheckUsernameAndPassword' => [ 'type' => 'boolean', 'locationName' => 'isCheckUsernameAndPassword', ],
                'isCheckClusterName' => [ 'type' => 'boolean', 'locationName' => 'isCheckClusterName', ],
                'esdtsEnable' => [ 'type' => 'boolean', 'locationName' => 'esdtsEnable', ],
                'clusterType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isForceOpenAuth' => [ 'type' => 'boolean', 'locationName' => 'isForceOpenAuth', ],
                'isTurnTaskSubmodule' => [ 'type' => 'boolean', 'locationName' => 'isTurnTaskSubmodule', ],
                'isShowClusterType' => [ 'type' => 'boolean', 'locationName' => 'isShowClusterType', ],
                'tasklist' => [ 'type' => 'boolean', 'locationName' => 'tasklist', ],
                'clusterTypeInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterTypeInfo', ], ],
                'upgradeVersion' => [ 'type' => 'boolean', 'locationName' => 'upgradeVersion', ],
                'snapshotDefaultReserveTime' => [ 'type' => 'integer', 'locationName' => 'snapshotDefaultReserveTime', ],
                'snapshotEnableCustomReserveTime' => [ 'type' => 'boolean', 'locationName' => 'snapshotEnableCustomReserveTime', ],
                'whiteList' => [ 'type' => 'boolean', 'locationName' => 'whiteList', ],
                'whiteListMaxItem' => [ 'type' => 'boolean', 'locationName' => 'whiteListMaxItem', ],
                'crossRestoreSnapshot' => [ 'type' => 'boolean', 'locationName' => 'crossRestoreSnapshot', ],
                'capacityEvaluate' => [ 'type' => 'boolean', 'locationName' => 'capacityEvaluate', ],
                'kibanaCharge' => [ 'type' => 'boolean', 'locationName' => 'kibanaCharge', ],
                'kibanaPublicServiceExpose' => [ 'type' => 'boolean', 'locationName' => 'kibanaPublicServiceExpose', ],
                'maintenanceTime' => [ 'type' => 'boolean', 'locationName' => 'maintenanceTime', ],
            ],
        ],
        'MenuDetail' => [
            'type' => 'structure',
            'members' => [
                'menuName' => [ 'type' => 'string', 'locationName' => 'menuName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'proposeMsg' => [ 'type' => 'string', 'locationName' => 'proposeMsg', ],
                'tipInfo' => [ 'type' => 'string', 'locationName' => 'tipInfo', ],
                'actionRequestBodyDemo' => [ 'type' => 'string', 'locationName' => 'actionRequestBodyDemo', ],
            ],
        ],
        'IndexDeail' => [
            'type' => 'structure',
            'members' => [
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'health' => [ 'type' => 'string', 'locationName' => 'health', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'rep' => [ 'type' => 'string', 'locationName' => 'rep', ],
                'pri' => [ 'type' => 'string', 'locationName' => 'pri', ],
                'docsCount' => [ 'type' => 'string', 'locationName' => 'docsCount', ],
                'docsDeleted' => [ 'type' => 'string', 'locationName' => 'docsDeleted', ],
                'priStoreSize' => [ 'type' => 'string', 'locationName' => 'priStoreSize', ],
                'storeSize' => [ 'type' => 'string', 'locationName' => 'storeSize', ],
                'aliases' => [ 'type' => 'string', 'locationName' => 'aliases', ],
            ],
        ],
        'StructMappingsProperties' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'index' => [ 'type' => 'boolean', 'locationName' => 'index', ],
                'store' => [ 'type' => 'boolean', 'locationName' => 'store', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'analyzer' => [ 'type' => 'string', 'locationName' => 'analyzer', ],
                'searchAnalyzer' => [ 'type' => 'string', 'locationName' => 'searchAnalyzer', ],
                'userDefine' => [ 'type' => 'object', 'locationName' => 'userDefine', ],
            ],
        ],
        'CreateHistoryIndex' => [
            'type' => 'structure',
            'members' => [
                'indexTemplate' => [ 'type' => 'string', 'locationName' => 'indexTemplate', ],
                'indexPrefix' => [ 'type' => 'string', 'locationName' => 'indexPrefix', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'indexSuffixFormat' => [ 'type' => 'string', 'locationName' => 'indexSuffixFormat', ],
                'reserveOfDay' => [ 'type' => 'integer', 'locationName' => 'reserveOfDay', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
            ],
        ],
        'Names' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyIndexMappingsSettings' => [
            'type' => 'structure',
            'members' => [
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'mappings' => [ 'type' => 'object', 'locationName' => 'mappings', ],
                'structMappings' =>  [ 'shape' => 'StructMappings', ],
            ],
        ],
        'DynamicTemplates' => [
            'type' => 'structure',
            'members' => [
                'jsonSettings' => [ 'type' => 'object', 'locationName' => 'jsonSettings', ],
            ],
        ],
        'IndexName' => [
            'type' => 'structure',
            'members' => [
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
            ],
        ],
        'StructMappings' => [
            'type' => 'structure',
            'members' => [
                'properties' => [ 'type' => 'list', 'member' => [ 'shape' => 'StructMappingsProperties', ], ],
            ],
        ],
        'TemplateSettings' => [
            'type' => 'structure',
            'members' => [
                'isJsonSetting' => [ 'type' => 'boolean', 'locationName' => 'isJsonSetting', ],
                'numberOfShards' => [ 'type' => 'integer', 'locationName' => 'numberOfShards', ],
                'numberOfReplicas' => [ 'type' => 'integer', 'locationName' => 'numberOfReplicas', ],
                'refreshInterval' => [ 'type' => 'string', 'locationName' => 'refreshInterval', ],
                'codec' => [ 'type' => 'string', 'locationName' => 'codec', ],
                'jsonSetting' => [ 'type' => 'object', 'locationName' => 'jsonSetting', ],
                'totalShardsPerNode' => [ 'type' => 'integer', 'locationName' => 'totalShardsPerNode', ],
            ],
        ],
        'IndexPropertiesType' => [
            'type' => 'structure',
            'members' => [
                'types' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexMappingPropertiesType', ], ],
                'analyzers' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexMappingPropertiesAnalyzer', ], ],
                'searchAnalyzers' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexMappingPropertiesSearchAnalyzer', ], ],
            ],
        ],
        'IndexMappingPropertiesType' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'TemplateContent' => [
            'type' => 'structure',
            'members' => [
                'patterns' => [ 'type' => 'string', 'locationName' => 'patterns', ],
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'mappings' => [ 'type' => 'object', 'locationName' => 'mappings', ],
                'aliases' => [ 'type' => 'object', 'locationName' => 'aliases', ],
                'templateSettings' =>  [ 'shape' => 'TemplateSettings', ],
                'structMappings' =>  [ 'shape' => 'StructMappings', ],
                'dynamicTemplates' =>  [ 'shape' => 'DynamicTemplates', ],
            ],
        ],
        'IndexMappingPropertiesSearchAnalyzer' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'IndexMappingPropertiesAnalyzer' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'IndexTemplateCronLog' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
            ],
        ],
        'IndexTemplateCronConf' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'indexPrefix' => [ 'type' => 'string', 'locationName' => 'indexPrefix', ],
                'indexSuffixFormat' => [ 'type' => 'string', 'locationName' => 'indexSuffixFormat', ],
                'aheadOfDay' => [ 'type' => 'integer', 'locationName' => 'aheadOfDay', ],
                'isAutoDelete' => [ 'type' => 'boolean', 'locationName' => 'isAutoDelete', ],
                'reserveOfDay' => [ 'type' => 'integer', 'locationName' => 'reserveOfDay', ],
                'deleteWhitelist' => [ 'type' => 'string', 'locationName' => 'deleteWhitelist', ],
                'isAutoSwitchToWarmdata' => [ 'type' => 'boolean', 'locationName' => 'isAutoSwitchToWarmdata', ],
                'warmdataDelayOfDay' => [ 'type' => 'integer', 'locationName' => 'warmdataDelayOfDay', ],
                'warmdataWhitelist' => [ 'type' => 'string', 'locationName' => 'warmdataWhitelist', ],
                'isWarmdataZeroReplicas' => [ 'type' => 'boolean', 'locationName' => 'isWarmdataZeroReplicas', ],
                'isWarmdataReadonly' => [ 'type' => 'boolean', 'locationName' => 'isWarmdataReadonly', ],
                'deleteRegexp' => [ 'type' => 'string', 'locationName' => 'deleteRegexp', ],
                'isZeroReplicas' => [ 'type' => 'boolean', 'locationName' => 'isZeroReplicas', ],
                'zeroReplicasOfDay' => [ 'type' => 'integer', 'locationName' => 'zeroReplicasOfDay', ],
            ],
        ],
        'IndexTemplateCron' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'settings' =>  [ 'shape' => 'IndexTemplateCronConf', ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeCpu' => [ 'type' => 'integer', 'locationName' => 'nodeCpu', ],
                'nodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryGB', ],
                'nodeDiskEncrypt' => [ 'type' => 'boolean', 'locationName' => 'nodeDiskEncrypt', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'warmNodeClass' => [ 'type' => 'string', 'locationName' => 'warmNodeClass', ],
                'warmNodeCpu' => [ 'type' => 'integer', 'locationName' => 'warmNodeCpu', ],
                'warmNodeMemoryGB' => [ 'type' => 'integer', 'locationName' => 'warmNodeMemoryGB', ],
                'warmNodeDiskEncrypt' => [ 'type' => 'boolean', 'locationName' => 'warmNodeDiskEncrypt', ],
                'warmNodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'warmNodeDiskGB', ],
                'warmNodeDiskType' => [ 'type' => 'string', 'locationName' => 'warmNodeDiskType', ],
                'warmNodeCount' => [ 'type' => 'integer', 'locationName' => 'warmNodeCount', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'masterCpu' => [ 'type' => 'integer', 'locationName' => 'masterCpu', ],
                'masterMemoryGB' => [ 'type' => 'integer', 'locationName' => 'masterMemoryGB', ],
                'masterDiskEncrypt' => [ 'type' => 'boolean', 'locationName' => 'masterDiskEncrypt', ],
                'masterDiskGB' => [ 'type' => 'integer', 'locationName' => 'masterDiskGB', ],
                'masterDiskType' => [ 'type' => 'string', 'locationName' => 'masterDiskType', ],
                'masterCount' => [ 'type' => 'integer', 'locationName' => 'masterCount', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingCpu' => [ 'type' => 'integer', 'locationName' => 'coordinatingCpu', ],
                'coordinatingMemoryGB' => [ 'type' => 'integer', 'locationName' => 'coordinatingMemoryGB', ],
                'coordinatingDiskEncrypt' => [ 'type' => 'boolean', 'locationName' => 'coordinatingDiskEncrypt', ],
                'coordinatingDiskGB' => [ 'type' => 'integer', 'locationName' => 'coordinatingDiskGB', ],
                'coordinatingDiskType' => [ 'type' => 'string', 'locationName' => 'coordinatingDiskType', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
                'kibanaCount' => [ 'type' => 'integer', 'locationName' => 'kibanaCount', ],
                'kibanaClass' => [ 'type' => 'string', 'locationName' => 'kibanaClass', ],
                'kibanaCpu' => [ 'type' => 'integer', 'locationName' => 'kibanaCpu', ],
                'kibanaMemoryGB' => [ 'type' => 'integer', 'locationName' => 'kibanaMemoryGB', ],
            ],
        ],
        'ExtendInfo' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PublicExposeTypesSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceExtendInfoSettings' => [
            'type' => 'structure',
            'members' => [
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
        'InternalEndpoint' => [
            'type' => 'structure',
            'members' => [
                'esHttpEndpoint' => [ 'type' => 'string', 'locationName' => 'esHttpEndpoint', ],
            ],
        ],
        'AppRelation' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceClass' =>  [ 'shape' => 'InstanceClass', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'internalEndpoint' =>  [ 'shape' => 'InternalEndpoint', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'dedicatedMaster' => [ 'type' => 'boolean', 'locationName' => 'dedicatedMaster', ],
                'coordinating' => [ 'type' => 'boolean', 'locationName' => 'coordinating', ],
                'warmnode' => [ 'type' => 'boolean', 'locationName' => 'warmnode', ],
                'tpaasExtension' =>  [ 'shape' => 'RespTpaasExtension', ],
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskProgress' => [ 'type' => 'integer', 'locationName' => 'taskProgress', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskTimeConsuming' => [ 'type' => 'integer', 'locationName' => 'taskTimeConsuming', ],
                'isTaskTimeConsumeContinueIncrease' => [ 'type' => 'boolean', 'locationName' => 'isTaskTimeConsumeContinueIncrease', ],
                'taskErrorInfo' => [ 'type' => 'string', 'locationName' => 'taskErrorInfo', ],
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'extendInfo' =>  [ 'shape' => 'ExtendInfo', ],
                'scenarioTemplate' =>  [ 'shape' => 'InstanceScenarioTemplate', ],
                'appRelation' =>  [ 'shape' => 'AppRelation', ],
            ],
        ],
        'InstanceScenarioTemplate' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RespTpaasExtension' => [
            'type' => 'structure',
            'members' => [
                'externalEndpoint' =>  [ 'shape' => 'ExternalEndpoint', ],
            ],
        ],
        'InstanceClassDetailListModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'iaasFlavorCode' => [ 'type' => 'string', 'locationName' => 'iaasFlavorCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGb' => [ 'type' => 'integer', 'locationName' => 'memoryGb', ],
                'diskGb' => [ 'type' => 'integer', 'locationName' => 'diskGb', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'InstanceClassDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
            ],
        ],
        'InstanceClassSpec' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'warmNodeClass' => [ 'type' => 'string', 'locationName' => 'warmNodeClass', ],
                'warmNodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'warmNodeDiskGB', ],
                'warmNodeDiskType' => [ 'type' => 'string', 'locationName' => 'warmNodeDiskType', ],
                'warmNodeCount' => [ 'type' => 'integer', 'locationName' => 'warmNodeCount', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'masterDiskGB' => [ 'type' => 'integer', 'locationName' => 'masterDiskGB', ],
                'masterCount' => [ 'type' => 'integer', 'locationName' => 'masterCount', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingDiskGB' => [ 'type' => 'integer', 'locationName' => 'coordinatingDiskGB', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
                'kibanaCount' => [ 'type' => 'integer', 'locationName' => 'kibanaCount', ],
                'kibanaClass' => [ 'type' => 'string', 'locationName' => 'kibanaClass', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'InstanceNode' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
            ],
        ],
        'ModifyInstanceSpecPreCheckData' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ReqTpaasExtension' => [
            'type' => 'structure',
            'members' => [
                'externalServiceType' => [ 'type' => 'string', 'locationName' => 'externalServiceType', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'instanceClass' =>  [ 'shape' => 'InstanceClassSpec', ],
                'dedicatedMaster' => [ 'type' => 'boolean', 'locationName' => 'dedicatedMaster', ],
                'coordinating' => [ 'type' => 'boolean', 'locationName' => 'coordinating', ],
                'warmnode' => [ 'type' => 'boolean', 'locationName' => 'warmnode', ],
                'autoSnapshot' =>  [ 'shape' => 'AutoSnapshot', ],
                'authConfig' =>  [ 'shape' => 'AuthConfig', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'tpaasExtension' =>  [ 'shape' => 'ReqTpaasExtension', ],
                'extendInfo' =>  [ 'shape' => 'ExtendInfo', ],
            ],
        ],
        'ModifyInstanceSpecValidatedAllowed' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OpsTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceSpecConf' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceClassDetail' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClassDetail', ], ],
                'azConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzConf', ], ],
            ],
        ],
        'InstanceSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'archType' => [ 'type' => 'string', 'locationName' => 'archType', ],
                'instanceClassCode' => [ 'type' => 'string', 'locationName' => 'instanceClassCode', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'minCount' => [ 'type' => 'integer', 'locationName' => 'minCount', ],
                'defaultCount' => [ 'type' => 'integer', 'locationName' => 'defaultCount', ],
                'countStep' => [ 'type' => 'integer', 'locationName' => 'countStep', ],
                'storageScale' => [ 'type' => 'boolean', 'locationName' => 'storageScale', ],
                'maxStorage' => [ 'type' => 'integer', 'locationName' => 'maxStorage', ],
                'minStorage' => [ 'type' => 'integer', 'locationName' => 'minStorage', ],
                'defaultStorage' => [ 'type' => 'integer', 'locationName' => 'defaultStorage', ],
                'storageStep' => [ 'type' => 'integer', 'locationName' => 'storageStep', ],
                'onSale' => [ 'type' => 'boolean', 'locationName' => 'onSale', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'InstanceStatus' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'LogLine' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'DescribeInstanceLogsSettings' => [
            'type' => 'structure',
            'members' => [
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'from' => [ 'type' => 'integer', 'locationName' => 'from', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
            ],
        ],
        'MaintainableTimeItem' => [
            'type' => 'structure',
            'members' => [
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nameZh' => [ 'type' => 'string', 'locationName' => 'nameZh', ],
            ],
        ],
        'MaintainableTimes' => [
            'type' => 'structure',
            'members' => [
                'weekDays' =>  [ 'shape' => 'WeekDays', ],
                'timeSlots' =>  [ 'shape' => 'TimeSlots', ],
                'timeZone' => [ 'type' => 'integer', 'locationName' => 'timeZone', ],
            ],
        ],
        'WeekDays' => [
            'type' => 'structure',
            'members' => [
                'defaultV' => [ 'type' => 'list', 'member' => [ 'shape' => 'MaintainableTimeItem', ], ],
                'all' => [ 'type' => 'list', 'member' => [ 'shape' => 'MaintainableTimeItem', ], ],
            ],
        ],
        'TimeSlots' => [
            'type' => 'structure',
            'members' => [
                'defaultV' => [ 'type' => 'string', 'locationName' => 'defaultV', ],
                'timeLen' => [ 'type' => 'integer', 'locationName' => 'timeLen', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'MergeClusterInfo' => [
            'type' => 'structure',
            'members' => [
                'clusterHttpAddr' => [ 'type' => 'string', 'locationName' => 'clusterHttpAddr', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'esUser' => [ 'type' => 'string', 'locationName' => 'esUser', ],
                'esPwd' => [ 'type' => 'string', 'locationName' => 'esPwd', ],
                'unicastHosts' => [ 'type' => 'string', 'locationName' => 'unicastHosts', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'k8sClusterId' => [ 'type' => 'string', 'locationName' => 'k8sClusterId', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
            ],
        ],
        'SubTaskProgress' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskNameZh' => [ 'type' => 'string', 'locationName' => 'taskNameZh', ],
                'taskWeight' => [ 'type' => 'string', 'locationName' => 'taskWeight', ],
                'taskProgress' => [ 'type' => 'string', 'locationName' => 'taskProgress', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
            ],
        ],
        'TaskStepProgress' => [
            'type' => 'structure',
            'members' => [
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'stepNameZh' => [ 'type' => 'string', 'locationName' => 'stepNameZh', ],
                'stepWeight' => [ 'type' => 'string', 'locationName' => 'stepWeight', ],
                'stepProgress' => [ 'type' => 'string', 'locationName' => 'stepProgress', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'stepStatus' => [ 'type' => 'string', 'locationName' => 'stepStatus', ],
            ],
        ],
        'SupportTaskList' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskNameZh' => [ 'type' => 'string', 'locationName' => 'taskNameZh', ],
                'opType' => [ 'type' => 'integer', 'locationName' => 'opType', ],
                'publishStatus' => [ 'type' => 'string', 'locationName' => 'publishStatus', ],
                'prerequisiteOpType' => [ 'type' => 'integer', 'locationName' => 'prerequisiteOpType', ],
            ],
        ],
        'TaskSupportStatusList' => [
            'type' => 'structure',
            'members' => [
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskStatusZh' => [ 'type' => 'string', 'locationName' => 'taskStatusZh', ],
            ],
        ],
        'PipelineProgress' => [
            'type' => 'structure',
            'members' => [
                'progressDetail' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubTaskProgress', ], ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
            ],
        ],
        'PipelineInfo' => [
            'type' => 'structure',
            'members' => [
                'pipelineId' => [ 'type' => 'string', 'locationName' => 'pipelineId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'commonMode' => [ 'type' => 'boolean', 'locationName' => 'commonMode', ],
            ],
        ],
        'SubTaskList' => [
            'type' => 'structure',
            'members' => [
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'opType' => [ 'type' => 'integer', 'locationName' => 'opType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'pipelineId' => [ 'type' => 'string', 'locationName' => 'pipelineId', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskNameZh' => [ 'type' => 'string', 'locationName' => 'taskNameZh', ],
                'taskAllStepProgress' =>  [ 'shape' => 'TaskAllStepProgress', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'canChangeStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'CanChangeStatus', ], ],
                'taskAuto' => [ 'type' => 'boolean', 'locationName' => 'taskAuto', ],
            ],
        ],
        'CanChangeStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusZh' => [ 'type' => 'string', 'locationName' => 'statusZh', ],
            ],
        ],
        'TaskConfig' => [
            'type' => 'structure',
            'members' => [
                'srcClusterInfo' =>  [ 'shape' => 'MergeClusterInfo', ],
                'destClusterInfo' =>  [ 'shape' => 'MergeClusterInfo', ],
                'subTasks' => [ 'type' => 'string', 'locationName' => 'subTasks', ],
            ],
        ],
        'CreateSubTask' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'opType' => [ 'type' => 'integer', 'locationName' => 'opType', ],
                'pipelineId' => [ 'type' => 'string', 'locationName' => 'pipelineId', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
            ],
        ],
        'SubTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'pipelineId' => [ 'type' => 'string', 'locationName' => 'pipelineId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
            ],
        ],
        'SupportPlatformList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nameZh' => [ 'type' => 'string', 'locationName' => 'nameZh', ],
            ],
        ],
        'PipelineList' => [
            'type' => 'structure',
            'members' => [
                'srcClusterName' => [ 'type' => 'string', 'locationName' => 'srcClusterName', ],
                'destClusterName' => [ 'type' => 'string', 'locationName' => 'destClusterName', ],
                'pipelineId' => [ 'type' => 'string', 'locationName' => 'pipelineId', ],
                'config' =>  [ 'shape' => 'TaskConfig', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'currentSubTaskName' => [ 'type' => 'string', 'locationName' => 'currentSubTaskName', ],
                'indicesStore' => [ 'type' => 'string', 'locationName' => 'indicesStore', ],
                'srcMasterNodes' => [ 'type' => 'string', 'locationName' => 'srcMasterNodes', ],
                'destMasterNodes' => [ 'type' => 'string', 'locationName' => 'destMasterNodes', ],
                'srcDataNodes' => [ 'type' => 'string', 'locationName' => 'srcDataNodes', ],
                'destDataNodes' => [ 'type' => 'string', 'locationName' => 'destDataNodes', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pipelineProgress' =>  [ 'shape' => 'PipelineProgress', ],
                'commonMode' => [ 'type' => 'boolean', 'locationName' => 'commonMode', ],
                'canChangeStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'CanChangeStatus', ], ],
            ],
        ],
        'TaskAllStepProgress' => [
            'type' => 'structure',
            'members' => [
                'progressDetail' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskStepProgress', ], ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
            ],
        ],
        'PipelineMode' => [
            'type' => 'structure',
            'members' => [
                'commonMode' => [ 'type' => 'boolean', 'locationName' => 'commonMode', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
            ],
        ],
        'NodeListItem' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'onlineDuration' => [ 'type' => 'double', 'locationName' => 'onlineDuration', ],
                'flavor' => [ 'type' => 'string', 'locationName' => 'flavor', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'cpuUsage' => [ 'type' => 'double', 'locationName' => 'cpuUsage', ],
                'cpuCore' => [ 'type' => 'integer', 'locationName' => 'cpuCore', ],
                'memUsage' => [ 'type' => 'double', 'locationName' => 'memUsage', ],
                'memGB' => [ 'type' => 'integer', 'locationName' => 'memGB', ],
                'diskUsage' => [ 'type' => 'double', 'locationName' => 'diskUsage', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'load' => [ 'type' => 'double', 'locationName' => 'load', ],
            ],
        ],
        'Notice' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteK8sResourceSettings' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'UpdateK8sResourceSettings' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'TimeRange' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
            ],
        ],
        'CreateEsVersionSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeV1ConfigmapSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InstanceResourceQuota' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'MetricItem' => [
            'type' => 'structure',
            'members' => [
                'metricType' => [ 'type' => 'string', 'locationName' => 'metricType', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionMetricData', ], ],
            ],
        ],
        'EsVersion' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InstanceExtendInfo' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatedAt' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNoticeConfigSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'MetricDataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'NoticeConfig' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyV1ConfigmapSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateOpenapiConfigSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DimensionMetricData' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'values' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataPoint', ], ],
            ],
        ],
        'ExecuteShell' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'shell' => [ 'type' => 'string', 'locationName' => 'shell', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyEsVersionSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyOpenapiConfigSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetK8sResourceSettings' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'labels' => [ 'type' => 'object', 'locationName' => 'labels', ],
            ],
        ],
        'UpdateK8sResourceMetadataSettings' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'labels' => [ 'type' => 'object', 'locationName' => 'labels', ],
                'annotations' => [ 'type' => 'object', 'locationName' => 'annotations', ],
            ],
        ],
        'CreateNoticeConfigSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ForwardEsApi' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'direct' => [ 'type' => 'boolean', 'locationName' => 'direct', ],
            ],
        ],
        'MetricType' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpgradeJdkVersionSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OpenapiConfig' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PluginItem' => [
            'type' => 'structure',
            'members' => [
                'pluginId' => [ 'type' => 'string', 'locationName' => 'pluginId', ],
                'pluginVersion' => [ 'type' => 'string', 'locationName' => 'pluginVersion', ],
            ],
        ],
        'PluginListItem' => [
            'type' => 'structure',
            'members' => [
                'pluginId' => [ 'type' => 'string', 'locationName' => 'pluginId', ],
                'pluginName' => [ 'type' => 'string', 'locationName' => 'pluginName', ],
                'pluginType' => [ 'type' => 'string', 'locationName' => 'pluginType', ],
                'pluginTypeCN' => [ 'type' => 'string', 'locationName' => 'pluginTypeCN', ],
                'pluginVersion' => [ 'type' => 'string', 'locationName' => 'pluginVersion', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusCN' => [ 'type' => 'string', 'locationName' => 'statusCN', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'canDelete' => [ 'type' => 'boolean', 'locationName' => 'canDelete', ],
                'canUninstall' => [ 'type' => 'boolean', 'locationName' => 'canUninstall', ],
                'canInstall' => [ 'type' => 'boolean', 'locationName' => 'canInstall', ],
                'needUpdate' => [ 'type' => 'boolean', 'locationName' => 'needUpdate', ],
            ],
        ],
        'PluginStatusArray' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusCN' => [ 'type' => 'string', 'locationName' => 'statusCN', ],
            ],
        ],
        'Plugin' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'pluginFile' => [ 'type' => 'string', 'locationName' => 'pluginFile', ],
                'md5str' => [ 'type' => 'string', 'locationName' => 'md5str', ],
                'businessType' => [ 'type' => 'string', 'locationName' => 'businessType', ],
            ],
        ],
        'RegionInfo' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RegionSpecConfig' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSpecConfig', ], ],
            ],
        ],
        'RegionSpecConfig2' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azSpecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSpecConfig2', ], ],
            ],
        ],
        'AnalyzeResourceData' => [
            'type' => 'structure',
            'members' => [
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DetailAnalyzeResourceData', ], ],
            ],
        ],
        'ResultInfo' => [
            'type' => 'structure',
            'members' => [
                'equivocation' => [ 'type' => 'double', 'locationName' => 'equivocation', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AnalyzeParam' => [
            'type' => 'structure',
            'members' => [
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'analyzeTime' => [ 'type' => 'double', 'locationName' => 'analyzeTime', ],
                'extraInfo' => [ 'type' => 'object', 'locationName' => 'extraInfo', ],
            ],
        ],
        'IndicatorSimpleMetadata' => [
            'type' => 'structure',
            'members' => [
                'indicator' => [ 'type' => 'string', 'locationName' => 'indicator', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DetailAnalyzeResourceData' => [
            'type' => 'structure',
            'members' => [
                'analyzeItem' => [ 'type' => 'string', 'locationName' => 'analyzeItem', ],
                'analyzeResult' => [ 'type' => 'string', 'locationName' => 'analyzeResult', ],
                'analyzeDesc' => [ 'type' => 'string', 'locationName' => 'analyzeDesc', ],
                'analyzeSuggest' => [ 'type' => 'string', 'locationName' => 'analyzeSuggest', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'EntityInfo' => [
            'type' => 'structure',
            'members' => [
                'entityType' => [ 'type' => 'string', 'locationName' => 'entityType', ],
                'serviceProvider' => [ 'type' => 'string', 'locationName' => 'serviceProvider', ],
                'param' =>  [ 'shape' => 'AnalyzeParam', ],
            ],
        ],
        'ClusterSettings' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyScenarioTemplateSettings' => [
            'type' => 'structure',
            'members' => [
                'scenarioTemplate' => [ 'type' => 'string', 'locationName' => 'scenarioTemplate', ],
            ],
        ],
        'ScenarioTemplate' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'isDefault' => [ 'type' => 'string', 'locationName' => 'isDefault', ],
                'templateSettings' =>  [ 'shape' => 'TemplateSettings', ],
                'clusterSettings' =>  [ 'shape' => 'ClusterSettings', ],
            ],
        ],
        'PreviewScenarioTemplate' => [
            'type' => 'structure',
            'members' => [
                'currentTemplate' =>  [ 'shape' => 'ScenarioTemplate', ],
                'newTemplate' =>  [ 'shape' => 'ScenarioTemplate', ],
            ],
        ],
        'Report' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'logCount' => [ 'type' => 'integer', 'locationName' => 'logCount', ],
                'sumTook' => [ 'type' => 'integer', 'locationName' => 'sumTook', ],
                'avgTook' => [ 'type' => 'integer', 'locationName' => 'avgTook', ],
                'minTook' => [ 'type' => 'integer', 'locationName' => 'minTook', ],
                'maxTook' => [ 'type' => 'integer', 'locationName' => 'maxTook', ],
                'tookGt100' => [ 'type' => 'integer', 'locationName' => 'tookGt100', ],
                'tookGt200' => [ 'type' => 'integer', 'locationName' => 'tookGt200', ],
                'tookGt500' => [ 'type' => 'integer', 'locationName' => 'tookGt500', ],
                'tookGt1000' => [ 'type' => 'integer', 'locationName' => 'tookGt1000', ],
                'tookGt10000' => [ 'type' => 'integer', 'locationName' => 'tookGt10000', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'recordAt' => [ 'type' => 'string', 'locationName' => 'recordAt', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
            ],
        ],
        'Records' => [
            'type' => 'structure',
            'members' => [
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'indexId' => [ 'type' => 'string', 'locationName' => 'indexId', ],
                'logCount' => [ 'type' => 'integer', 'locationName' => 'logCount', ],
                'sumTook' => [ 'type' => 'integer', 'locationName' => 'sumTook', ],
                'avgTook' => [ 'type' => 'integer', 'locationName' => 'avgTook', ],
                'minTook' => [ 'type' => 'integer', 'locationName' => 'minTook', ],
                'maxTook' => [ 'type' => 'integer', 'locationName' => 'maxTook', ],
                'tookGt100' => [ 'type' => 'integer', 'locationName' => 'tookGt100', ],
                'tookGt200' => [ 'type' => 'integer', 'locationName' => 'tookGt200', ],
                'tookGt500' => [ 'type' => 'integer', 'locationName' => 'tookGt500', ],
                'tookGt1000' => [ 'type' => 'integer', 'locationName' => 'tookGt1000', ],
                'tookGt10000' => [ 'type' => 'integer', 'locationName' => 'tookGt10000', ],
                'recordAt' => [ 'type' => 'string', 'locationName' => 'recordAt', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
            ],
        ],
        'Record' => [
            'type' => 'structure',
            'members' => [
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'indexId' => [ 'type' => 'string', 'locationName' => 'indexId', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'took' => [ 'type' => 'integer', 'locationName' => 'took', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'recordAt' => [ 'type' => 'string', 'locationName' => 'recordAt', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
            ],
        ],
        'SnapshotReference' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'referenceName' => [ 'type' => 'string', 'locationName' => 'referenceName', ],
                'referenceInstanceId' => [ 'type' => 'string', 'locationName' => 'referenceInstanceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DeleteSnapshotReference' => [
            'type' => 'structure',
            'members' => [
                'referenceInstanceId' => [ 'type' => 'string', 'locationName' => 'referenceInstanceId', ],
            ],
        ],
        'AddSnapshotReference' => [
            'type' => 'structure',
            'members' => [
                'referenceName' => [ 'type' => 'string', 'locationName' => 'referenceName', ],
                'referenceInstanceId' => [ 'type' => 'string', 'locationName' => 'referenceInstanceId', ],
            ],
        ],
        'Snapshot' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'indices' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'customSnapshotConfigId' => [ 'type' => 'integer', 'locationName' => 'customSnapshotConfigId', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'taskTimeConsuming' => [ 'type' => 'string', 'locationName' => 'taskTimeConsuming', ],
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
            ],
        ],
        'RestoreSnapshotById' => [
            'type' => 'structure',
            'members' => [
                'indices' => [ 'type' => 'string', 'locationName' => 'indices', ],
                'renamePattern' => [ 'type' => 'string', 'locationName' => 'renamePattern', ],
                'renameReplacement' => [ 'type' => 'string', 'locationName' => 'renameReplacement', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'snapshotInstanceId' => [ 'type' => 'string', 'locationName' => 'snapshotInstanceId', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
            ],
        ],
        'StopSnapshotById' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'snapshotInstanceId' => [ 'type' => 'string', 'locationName' => 'snapshotInstanceId', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
            ],
        ],
        'CustomSnapshotConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'basePath' => [ 'type' => 'string', 'locationName' => 'basePath', ],
                'compress' => [ 'type' => 'boolean', 'locationName' => 'compress', ],
            ],
        ],
        'Synonym' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'double', 'locationName' => 'id', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'synonymFile' => [ 'type' => 'string', 'locationName' => 'synonymFile', ],
                'md5str' => [ 'type' => 'string', 'locationName' => 'md5str', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'businessType' => [ 'type' => 'string', 'locationName' => 'businessType', ],
            ],
        ],
        'TaskListItem' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskOpType' => [ 'type' => 'integer', 'locationName' => 'taskOpType', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskProgress' => [ 'type' => 'integer', 'locationName' => 'taskProgress', ],
                'taskTimeConsuming' => [ 'type' => 'integer', 'locationName' => 'taskTimeConsuming', ],
                'isTaskTimeConsumeContinueIncrease' => [ 'type' => 'boolean', 'locationName' => 'isTaskTimeConsumeContinueIncrease', ],
                'taskErrorInfo' => [ 'type' => 'string', 'locationName' => 'taskErrorInfo', ],
                'taskEndTime' => [ 'type' => 'string', 'locationName' => 'taskEndTime', ],
                'canInterruptTask' => [ 'type' => 'boolean', 'locationName' => 'canInterruptTask', ],
                'canRetryTask' => [ 'type' => 'boolean', 'locationName' => 'canRetryTask', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'executeTime' => [ 'type' => 'string', 'locationName' => 'executeTime', ],
                'taskRequestId' => [ 'type' => 'string', 'locationName' => 'taskRequestId', ],
            ],
        ],
        'EstimateTaskTimeReqParam' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskReqParam' => [ 'type' => 'string', 'locationName' => 'taskReqParam', ],
            ],
        ],
        'SupportEstimateTaskTime' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
            ],
        ],
        'TaskDetail' => [
            'type' => 'structure',
            'members' => [
                'taskBasicInfo' =>  [ 'shape' => 'TaskBasicInfo', ],
                'taskModifyInfo' =>  [ 'shape' => 'TaskModifyInfo', ],
                'steps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Step', ], ],
            ],
        ],
        'Step' => [
            'type' => 'structure',
            'members' => [
                'stepSeqId' => [ 'type' => 'integer', 'locationName' => 'stepSeqId', ],
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'stepNameDesc' => [ 'type' => 'string', 'locationName' => 'stepNameDesc', ],
                'stepStartTime' => [ 'type' => 'string', 'locationName' => 'stepStartTime', ],
                'stepEndTime' => [ 'type' => 'string', 'locationName' => 'stepEndTime', ],
                'stepStatus' => [ 'type' => 'string', 'locationName' => 'stepStatus', ],
                'stepDetailInfo' => [ 'type' => 'string', 'locationName' => 'stepDetailInfo', ],
                'estimatedTookTimeDesc' => [ 'type' => 'string', 'locationName' => 'estimatedTookTimeDesc', ],
            ],
        ],
        'TaskBasicInfo' => [
            'type' => 'structure',
            'members' => [
                'taskStartTime' => [ 'type' => 'string', 'locationName' => 'taskStartTime', ],
                'taskEndTime' => [ 'type' => 'string', 'locationName' => 'taskEndTime', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'subUser' => [ 'type' => 'string', 'locationName' => 'subUser', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'estimatedTookTimeDesc' => [ 'type' => 'string', 'locationName' => 'estimatedTookTimeDesc', ],
            ],
        ],
        'DiffItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TaskModifyInfo' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'modifyDiffs' => [ 'type' => 'object', 'locationName' => 'modifyDiffs', ],
            ],
        ],
        'CheckUpgradeVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'CheckUpgradeVersionItem' => [
            'type' => 'structure',
            'members' => [
                'level' => [ 'type' => 'string', 'locationName' => 'level', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
            ],
        ],
        'SubmitUpgradeVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'UserResourceTypeModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
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
        'DescribeAuthStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAuthStatusResultShape', ],
            ],
        ],
        'DescribeRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAuthStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nameFilter' => [ 'type' => 'string', 'locationName' => 'nameFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'roles' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleModel', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nameFilter' => [ 'type' => 'string', 'locationName' => 'nameFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserModel', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAuthStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'DescribeBillingInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'BillingInstance', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DescribeBillingInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'cursor' => [ 'type' => 'string', 'locationName' => 'cursor', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBillingInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBillingInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCdcFollowTasksResponse' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CdcFollowTask', ], ],
            ],
        ],
        'FaildResult' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'AnalyzeResult' => [
            'type' => 'structure',
            'members' => [
                'entityType' => [ 'type' => 'string', 'locationName' => 'entityType', ],
                'result' =>  [ 'shape' => 'ResultInfo', ],
                'detailUrl' => [ 'type' => 'string', 'locationName' => 'detailUrl', ],
                'sourceInfo' => [ 'type' => 'object', 'locationName' => 'sourceInfo', ],
                'monitorIndicators' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndicatorSimpleMetadata', ], ],
                'datas' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyzeResourceData', ], ],
            ],
        ],
        'AnalyzeResponse' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeResult', ],
                'dependentEntities' => [ 'type' => 'list', 'member' => [ 'shape' => 'EntityInfo', ], ],
            ],
        ],
        'DisableDictsResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableDictsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableDictsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableDictsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TemplateResult' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'indexPattern' => [ 'type' => 'string', 'locationName' => 'indexPattern', ],
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'primaryShards' => [ 'type' => 'integer', 'locationName' => 'primaryShards', ],
                'replicasNums' => [ 'type' => 'integer', 'locationName' => 'replicasNums', ],
                'refreshInterval' => [ 'type' => 'string', 'locationName' => 'refreshInterval', ],
                'indexCodec' => [ 'type' => 'string', 'locationName' => 'indexCodec', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'warmNodeClass' => [ 'type' => 'string', 'locationName' => 'warmNodeClass', ],
                'warmNodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'warmNodeDiskGB', ],
                'warmNodeCount' => [ 'type' => 'integer', 'locationName' => 'warmNodeCount', ],
                'warmNodeDiskType' => [ 'type' => 'string', 'locationName' => 'warmNodeDiskType', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
                'changeType' => [ 'type' => 'string', 'locationName' => 'changeType', ],
                'kibanaClass' => [ 'type' => 'string', 'locationName' => 'kibanaClass', ],
                'kibanaCount' => [ 'type' => 'integer', 'locationName' => 'kibanaCount', ],
                'validatedAllowed' =>  [ 'shape' => 'ModifyInstanceSpecValidatedAllowed', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceKibanaSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'kibana' => [ 'type' => 'boolean', 'locationName' => 'kibana', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'InstanceChangeTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'nodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'nodeDiskGB', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'warmNodeClass' => [ 'type' => 'string', 'locationName' => 'warmNodeClass', ],
                'warmNodeDiskGB' => [ 'type' => 'integer', 'locationName' => 'warmNodeDiskGB', ],
                'warmNodeCount' => [ 'type' => 'integer', 'locationName' => 'warmNodeCount', ],
                'warmNodeDiskType' => [ 'type' => 'string', 'locationName' => 'warmNodeDiskType', ],
                'masterClass' => [ 'type' => 'string', 'locationName' => 'masterClass', ],
                'coordinatingClass' => [ 'type' => 'string', 'locationName' => 'coordinatingClass', ],
                'coordinatingCount' => [ 'type' => 'integer', 'locationName' => 'coordinatingCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InstanceChangeTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceChangeTypeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceChangeTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'changeTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChangeType', ], ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceExtendInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'settings' =>  [ 'shape' => 'ModifyInstanceExtendInfoSettings', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InstanceConfirmDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstanceConfirmDeleteResultShape' => [
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
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceExtendInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceKibanaSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'reservedOfHour' => [ 'type' => 'integer', 'locationName' => 'reservedOfHour', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceExtendInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceKibanaSpecResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'InstanceSpec', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'InstanceConfirmDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceLogsResponse' => [
            'type' => 'structure',
            'members' => [
                'scrollType' => [ 'type' => 'string', 'locationName' => 'scrollType', ],
                'logs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogLine', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'completed' => [ 'type' => 'boolean', 'locationName' => 'completed', ],
                'nextTime' => [ 'type' => 'long', 'locationName' => 'nextTime', ],
                'preTime' => [ 'type' => 'long', 'locationName' => 'preTime', ],
            ],
        ],
        'ForwardEsApiResult' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'response' => [ 'type' => 'string', 'locationName' => 'response', ],
                'error' => [ 'type' => 'string', 'locationName' => 'error', ],
            ],
        ],
        'ModifyInstanceFeatureRequest' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecuteShellResult' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'output' => [ 'type' => 'string', 'locationName' => 'output', ],
            ],
        ],
    ],
];
