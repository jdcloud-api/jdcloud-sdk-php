<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdfusion',
        'protocol' => 'json',
//        'serviceFullName' => 'jdfusion',
//        'serviceId' => 'jdfusion',
    ],
    'operations' => [
        'GetCloudInfos' => [
            'name' => 'GetCloudInfos',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cloud_info',
            ],
            'input' => [ 'shape' => 'GetCloudInfosRequestShape', ],
            'output' => [ 'shape' => 'GetCloudInfosResponseShape', ],
        ],
        'RegistCloudInfo' => [
            'name' => 'RegistCloudInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cloud_info',
            ],
            'input' => [ 'shape' => 'RegistCloudInfoRequestShape', ],
            'output' => [ 'shape' => 'RegistCloudInfoResponseShape', ],
        ],
        'GetCloudInfoById' => [
            'name' => 'GetCloudInfoById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cloud_info/{cloudId}',
            ],
            'input' => [ 'shape' => 'GetCloudInfoByIdRequestShape', ],
            'output' => [ 'shape' => 'GetCloudInfoByIdResponseShape', ],
        ],
        'UnregistCloudInfo' => [
            'name' => 'UnregistCloudInfo',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cloud_info/{cloudId}',
            ],
            'input' => [ 'shape' => 'UnregistCloudInfoRequestShape', ],
            'output' => [ 'shape' => 'UnregistCloudInfoResponseShape', ],
        ],
        'ValidCloudInfo' => [
            'name' => 'ValidCloudInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cloud_info/{cloudId}/valid',
            ],
            'input' => [ 'shape' => 'ValidCloudInfoRequestShape', ],
            'output' => [ 'shape' => 'ValidCloudInfoResponseShape', ],
        ],
        'GetDeployments' => [
            'name' => 'GetDeployments',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deployments',
            ],
            'input' => [ 'shape' => 'GetDeploymentsRequestShape', ],
            'output' => [ 'shape' => 'GetDeploymentsResponseShape', ],
        ],
        'CreateDeployment' => [
            'name' => 'CreateDeployment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deployments',
            ],
            'input' => [ 'shape' => 'CreateDeploymentRequestShape', ],
            'output' => [ 'shape' => 'CreateDeploymentResponseShape', ],
        ],
        'ReverseDeployment' => [
            'name' => 'ReverseDeployment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deployments:reverse',
            ],
            'input' => [ 'shape' => 'ReverseDeploymentRequestShape', ],
            'output' => [ 'shape' => 'ReverseDeploymentResponseShape', ],
        ],
        'GetDeploymentsById' => [
            'name' => 'GetDeploymentsById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}',
            ],
            'input' => [ 'shape' => 'GetDeploymentsByIdRequestShape', ],
            'output' => [ 'shape' => 'GetDeploymentsByIdResponseShape', ],
        ],
        'EditDeployment' => [
            'name' => 'EditDeployment',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}',
            ],
            'input' => [ 'shape' => 'EditDeploymentRequestShape', ],
            'output' => [ 'shape' => 'EditDeploymentResponseShape', ],
        ],
        'DeleteDeployment' => [
            'name' => 'DeleteDeployment',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}',
            ],
            'input' => [ 'shape' => 'DeleteDeploymentRequestShape', ],
            'output' => [ 'shape' => 'DeleteDeploymentResponseShape', ],
        ],
        'CloneDeployment' => [
            'name' => 'CloneDeployment',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}:clone',
            ],
            'input' => [ 'shape' => 'CloneDeploymentRequestShape', ],
            'output' => [ 'shape' => 'CloneDeploymentResponseShape', ],
        ],
        'DryrunDeployment' => [
            'name' => 'DryrunDeployment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}:dryrun',
            ],
            'input' => [ 'shape' => 'DryrunDeploymentRequestShape', ],
            'output' => [ 'shape' => 'DryrunDeploymentResponseShape', ],
        ],
        'ApplyDeployment' => [
            'name' => 'ApplyDeployment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}:apply',
            ],
            'input' => [ 'shape' => 'ApplyDeploymentRequestShape', ],
            'output' => [ 'shape' => 'ApplyDeploymentResponseShape', ],
        ],
        'GetDeploymentResult' => [
            'name' => 'GetDeploymentResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}/result',
            ],
            'input' => [ 'shape' => 'GetDeploymentResultRequestShape', ],
            'output' => [ 'shape' => 'GetDeploymentResultResponseShape', ],
        ],
        'GetDeploymentVersions' => [
            'name' => 'GetDeploymentVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}/versions',
            ],
            'input' => [ 'shape' => 'GetDeploymentVersionsRequestShape', ],
            'output' => [ 'shape' => 'GetDeploymentVersionsResponseShape', ],
        ],
        'GetDeploymentsVersion' => [
            'name' => 'GetDeploymentsVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}/versions/{version_id}',
            ],
            'input' => [ 'shape' => 'GetDeploymentsVersionRequestShape', ],
            'output' => [ 'shape' => 'GetDeploymentsVersionResponseShape', ],
        ],
        'RollbackDeploymentsVersion' => [
            'name' => 'RollbackDeploymentsVersion',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}/versions/{version_id}:rollback',
            ],
            'input' => [ 'shape' => 'RollbackDeploymentsVersionRequestShape', ],
            'output' => [ 'shape' => 'RollbackDeploymentsVersionResponseShape', ],
        ],
        'GetDeploymentsResultsByIdRecord' => [
            'name' => 'GetDeploymentsResultsByIdRecord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deployments/{id}/results/{record}',
            ],
            'input' => [ 'shape' => 'GetDeploymentsResultsByIdRecordRequestShape', ],
            'output' => [ 'shape' => 'GetDeploymentsResultsByIdRecordResponseShape', ],
        ],
        'GetDisks' => [
            'name' => 'GetDisks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disk_disks',
            ],
            'input' => [ 'shape' => 'GetDisksRequestShape', ],
            'output' => [ 'shape' => 'GetDisksResponseShape', ],
        ],
        'CreateDisk' => [
            'name' => 'CreateDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/disk_disks',
            ],
            'input' => [ 'shape' => 'CreateDiskRequestShape', ],
            'output' => [ 'shape' => 'CreateDiskResponseShape', ],
        ],
        'GetDiskById' => [
            'name' => 'GetDiskById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}',
            ],
            'input' => [ 'shape' => 'GetDiskByIdRequestShape', ],
            'output' => [ 'shape' => 'GetDiskByIdResponseShape', ],
        ],
        'RemoveDiskById' => [
            'name' => 'RemoveDiskById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}',
            ],
            'input' => [ 'shape' => 'RemoveDiskByIdRequestShape', ],
            'output' => [ 'shape' => 'RemoveDiskByIdResponseShape', ],
        ],
        'AttachDiskToVmInstanceByDiskId' => [
            'name' => 'AttachDiskToVmInstanceByDiskId',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}:attach',
            ],
            'input' => [ 'shape' => 'AttachDiskToVmInstanceByDiskIdRequestShape', ],
            'output' => [ 'shape' => 'AttachDiskToVmInstanceByDiskIdResponseShape', ],
        ],
        'DetachDiskToVmInstanceByDiskId' => [
            'name' => 'DetachDiskToVmInstanceByDiskId',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/disk_disks/{id}:detach',
            ],
            'input' => [ 'shape' => 'DetachDiskToVmInstanceByDiskIdRequestShape', ],
            'output' => [ 'shape' => 'DetachDiskToVmInstanceByDiskIdResponseShape', ],
        ],
        'GetBuckets' => [
            'name' => 'GetBuckets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_buckets',
            ],
            'input' => [ 'shape' => 'GetBucketsRequestShape', ],
            'output' => [ 'shape' => 'GetBucketsResponseShape', ],
        ],
        'CreateBucket' => [
            'name' => 'CreateBucket',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/oss_buckets',
            ],
            'input' => [ 'shape' => 'CreateBucketRequestShape', ],
            'output' => [ 'shape' => 'CreateBucketResponseShape', ],
        ],
        'GetBucketByName' => [
            'name' => 'GetBucketByName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_buckets/{name}',
            ],
            'input' => [ 'shape' => 'GetBucketByNameRequestShape', ],
            'output' => [ 'shape' => 'GetBucketByNameResponseShape', ],
        ],
        'DeleteBucket' => [
            'name' => 'DeleteBucket',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/oss_buckets/{name}',
            ],
            'input' => [ 'shape' => 'DeleteBucketRequestShape', ],
            'output' => [ 'shape' => 'DeleteBucketResponseShape', ],
        ],
        'GetBucketFiles' => [
            'name' => 'GetBucketFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_buckets/{name}/files',
            ],
            'input' => [ 'shape' => 'GetBucketFilesRequestShape', ],
            'output' => [ 'shape' => 'GetBucketFilesResponseShape', ],
        ],
        'GetTransferTasks' => [
            'name' => 'GetTransferTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks',
            ],
            'input' => [ 'shape' => 'GetTransferTasksRequestShape', ],
            'output' => [ 'shape' => 'GetTransferTasksResponseShape', ],
        ],
        'CreateTransferTask' => [
            'name' => 'CreateTransferTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks_simple',
            ],
            'input' => [ 'shape' => 'CreateTransferTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateTransferTaskResponseShape', ],
        ],
        'GetTransferTaskById' => [
            'name' => 'GetTransferTaskById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}',
            ],
            'input' => [ 'shape' => 'GetTransferTaskByIdRequestShape', ],
            'output' => [ 'shape' => 'GetTransferTaskByIdResponseShape', ],
        ],
        'EditTransferTask' => [
            'name' => 'EditTransferTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}',
            ],
            'input' => [ 'shape' => 'EditTransferTaskRequestShape', ],
            'output' => [ 'shape' => 'EditTransferTaskResponseShape', ],
        ],
        'DeleteTransferTask' => [
            'name' => 'DeleteTransferTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}',
            ],
            'input' => [ 'shape' => 'DeleteTransferTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteTransferTaskResponseShape', ],
        ],
        'StartTransferTask' => [
            'name' => 'StartTransferTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}:start',
            ],
            'input' => [ 'shape' => 'StartTransferTaskRequestShape', ],
            'output' => [ 'shape' => 'StartTransferTaskResponseShape', ],
        ],
        'StopTransferTask' => [
            'name' => 'StopTransferTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopTransferTaskRequestShape', ],
            'output' => [ 'shape' => 'StopTransferTaskResponseShape', ],
        ],
        'GetTransferTaskProgress' => [
            'name' => 'GetTransferTaskProgress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}/progress',
            ],
            'input' => [ 'shape' => 'GetTransferTaskProgressRequestShape', ],
            'output' => [ 'shape' => 'GetTransferTaskProgressResponseShape', ],
        ],
        'GetTransferTaskFailedFiles' => [
            'name' => 'GetTransferTaskFailedFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/oss_transferTasks/{id}/failed-files',
            ],
            'input' => [ 'shape' => 'GetTransferTaskFailedFilesRequestShape', ],
            'output' => [ 'shape' => 'GetTransferTaskFailedFilesResponseShape', ],
        ],
        'GetRdsAccountsByInstId' => [
            'name' => 'GetRdsAccountsByInstId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts',
            ],
            'input' => [ 'shape' => 'GetRdsAccountsByInstIdRequestShape', ],
            'output' => [ 'shape' => 'GetRdsAccountsByInstIdResponseShape', ],
        ],
        'CreateRdsAccounts' => [
            'name' => 'CreateRdsAccounts',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateRdsAccountsRequestShape', ],
            'output' => [ 'shape' => 'CreateRdsAccountsResponseShape', ],
        ],
        'GetRdsAccountsByInstIdAndAccountName' => [
            'name' => 'GetRdsAccountsByInstIdAndAccountName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'GetRdsAccountsByInstIdAndAccountNameRequestShape', ],
            'output' => [ 'shape' => 'GetRdsAccountsByInstIdAndAccountNameResponseShape', ],
        ],
        'DeleteRdsAccount' => [
            'name' => 'DeleteRdsAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DeleteRdsAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteRdsAccountResponseShape', ],
        ],
        'GrantRdsAccount' => [
            'name' => 'GrantRdsAccount',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts/{accountName}:grant',
            ],
            'input' => [ 'shape' => 'GrantRdsAccountRequestShape', ],
            'output' => [ 'shape' => 'GrantRdsAccountResponseShape', ],
        ],
        'RevokeRdsAccount' => [
            'name' => 'RevokeRdsAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts/{accountName}/databases/{dbName}:revoke',
            ],
            'input' => [ 'shape' => 'RevokeRdsAccountRequestShape', ],
            'output' => [ 'shape' => 'RevokeRdsAccountResponseShape', ],
        ],
        'GrantRdsAccountsByTask' => [
            'name' => 'GrantRdsAccountsByTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/accounts/{accountName}:grantByTask',
            ],
            'input' => [ 'shape' => 'GrantRdsAccountsByTaskRequestShape', ],
            'output' => [ 'shape' => 'GrantRdsAccountsByTaskResponseShape', ],
        ],
        'GetRdsDatabasesByInstId' => [
            'name' => 'GetRdsDatabasesByInstId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/databases',
            ],
            'input' => [ 'shape' => 'GetRdsDatabasesByInstIdRequestShape', ],
            'output' => [ 'shape' => 'GetRdsDatabasesByInstIdResponseShape', ],
        ],
        'CreateRdsDatabase' => [
            'name' => 'CreateRdsDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/databases',
            ],
            'input' => [ 'shape' => 'CreateRdsDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateRdsDatabaseResponseShape', ],
        ],
        'GetRdsDatabaseByInstIdAndDbName' => [
            'name' => 'GetRdsDatabaseByInstIdAndDbName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'GetRdsDatabaseByInstIdAndDbNameRequestShape', ],
            'output' => [ 'shape' => 'GetRdsDatabaseByInstIdAndDbNameResponseShape', ],
        ],
        'DeleteRdsDatabase' => [
            'name' => 'DeleteRdsDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'DeleteRdsDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteRdsDatabaseResponseShape', ],
        ],
        'GetRdsInstances' => [
            'name' => 'GetRdsInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_instances',
            ],
            'input' => [ 'shape' => 'GetRdsInstancesRequestShape', ],
            'output' => [ 'shape' => 'GetRdsInstancesResponseShape', ],
        ],
        'CreateRdsInstance' => [
            'name' => 'CreateRdsInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/rds_instances',
            ],
            'input' => [ 'shape' => 'CreateRdsInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateRdsInstanceResponseShape', ],
        ],
        'GetRdsByInstId' => [
            'name' => 'GetRdsByInstId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}',
            ],
            'input' => [ 'shape' => 'GetRdsByInstIdRequestShape', ],
            'output' => [ 'shape' => 'GetRdsByInstIdResponseShape', ],
        ],
        'DeleteRdsByInstId' => [
            'name' => 'DeleteRdsByInstId',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/rds_instances/{instId}',
            ],
            'input' => [ 'shape' => 'DeleteRdsByInstIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteRdsByInstIdResponseShape', ],
        ],
        'GetChannels' => [
            'name' => 'GetChannels',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlChannels',
            ],
            'input' => [ 'shape' => 'GetChannelsRequestShape', ],
            'output' => [ 'shape' => 'GetChannelsResponseShape', ],
        ],
        'CreateChannel' => [
            'name' => 'CreateChannel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlChannels',
            ],
            'input' => [ 'shape' => 'CreateChannelRequestShape', ],
            'output' => [ 'shape' => 'CreateChannelResponseShape', ],
        ],
        'DeleteChannel' => [
            'name' => 'DeleteChannel',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlChannels/{id}',
            ],
            'input' => [ 'shape' => 'DeleteChannelRequestShape', ],
            'output' => [ 'shape' => 'DeleteChannelResponseShape', ],
        ],
        'StartChannel' => [
            'name' => 'StartChannel',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlChannels/{id}:start',
            ],
            'input' => [ 'shape' => 'StartChannelRequestShape', ],
            'output' => [ 'shape' => 'StartChannelResponseShape', ],
        ],
        'StopChannel' => [
            'name' => 'StopChannel',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlChannels/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopChannelRequestShape', ],
            'output' => [ 'shape' => 'StopChannelResponseShape', ],
        ],
        'GetDatasources' => [
            'name' => 'GetDatasources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlDatasources',
            ],
            'input' => [ 'shape' => 'GetDatasourcesRequestShape', ],
            'output' => [ 'shape' => 'GetDatasourcesResponseShape', ],
        ],
        'CreateDatasource' => [
            'name' => 'CreateDatasource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlDatasources',
            ],
            'input' => [ 'shape' => 'CreateDatasourceRequestShape', ],
            'output' => [ 'shape' => 'CreateDatasourceResponseShape', ],
        ],
        'DeleteDatasource' => [
            'name' => 'DeleteDatasource',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/migration_mysqlDatasources/{id}',
            ],
            'input' => [ 'shape' => 'DeleteDatasourceRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatasourceResponseShape', ],
        ],
        'GetRdsSpecification' => [
            'name' => 'GetRdsSpecification',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/rds_specification/{engine}',
            ],
            'input' => [ 'shape' => 'GetRdsSpecificationRequestShape', ],
            'output' => [ 'shape' => 'GetRdsSpecificationResponseShape', ],
        ],
        'GetRegions' => [
            'name' => 'GetRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/regions',
            ],
            'input' => [ 'shape' => 'GetRegionsRequestShape', ],
            'output' => [ 'shape' => 'GetRegionsResponseShape', ],
        ],
        'GetRegionsAvailableZones' => [
            'name' => 'GetRegionsAvailableZones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/regions_availableZones/{region}',
            ],
            'input' => [ 'shape' => 'GetRegionsAvailableZonesRequestShape', ],
            'output' => [ 'shape' => 'GetRegionsAvailableZonesResponseShape', ],
        ],
        'GetTaskInfoHistoryById' => [
            'name' => 'GetTaskInfoHistoryById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/task_infos/{task}/history',
            ],
            'input' => [ 'shape' => 'GetTaskInfoHistoryByIdRequestShape', ],
            'output' => [ 'shape' => 'GetTaskInfoHistoryByIdResponseShape', ],
        ],
        'GetTaskInfoById' => [
            'name' => 'GetTaskInfoById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/task_infos/{task}',
            ],
            'input' => [ 'shape' => 'GetTaskInfoByIdRequestShape', ],
            'output' => [ 'shape' => 'GetTaskInfoByIdResponseShape', ],
        ],
        'GetVmImages' => [
            'name' => 'GetVmImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_images',
            ],
            'input' => [ 'shape' => 'GetVmImagesRequestShape', ],
            'output' => [ 'shape' => 'GetVmImagesResponseShape', ],
        ],
        'GetVmInstancesById' => [
            'name' => 'GetVmInstancesById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}',
            ],
            'input' => [ 'shape' => 'GetVmInstancesByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVmInstancesByIdResponseShape', ],
        ],
        'DeleteVmInstanceById' => [
            'name' => 'DeleteVmInstanceById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVmInstanceByIdResponseShape', ],
        ],
        'GetVmInstances' => [
            'name' => 'GetVmInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_instances',
            ],
            'input' => [ 'shape' => 'GetVmInstancesRequestShape', ],
            'output' => [ 'shape' => 'GetVmInstancesResponseShape', ],
        ],
        'CreateVmInstance' => [
            'name' => 'CreateVmInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vm_instances',
            ],
            'input' => [ 'shape' => 'CreateVmInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateVmInstanceResponseShape', ],
        ],
        'StopVmInstanceById' => [
            'name' => 'StopVmInstanceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'StopVmInstanceByIdResponseShape', ],
        ],
        'StartVmInstanceById' => [
            'name' => 'StartVmInstanceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}:start',
            ],
            'input' => [ 'shape' => 'StartVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'StartVmInstanceByIdResponseShape', ],
        ],
        'RebootVmInstanceById' => [
            'name' => 'RebootVmInstanceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vm_instances/{id}:reboot',
            ],
            'input' => [ 'shape' => 'RebootVmInstanceByIdRequestShape', ],
            'output' => [ 'shape' => 'RebootVmInstanceByIdResponseShape', ],
        ],
        'GetVmInstanceTypes' => [
            'name' => 'GetVmInstanceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_instanceTypes',
            ],
            'input' => [ 'shape' => 'GetVmInstanceTypesRequestShape', ],
            'output' => [ 'shape' => 'GetVmInstanceTypesResponseShape', ],
        ],
        'GetVmKeypairsByName' => [
            'name' => 'GetVmKeypairsByName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs/{name}',
            ],
            'input' => [ 'shape' => 'GetVmKeypairsByNameRequestShape', ],
            'output' => [ 'shape' => 'GetVmKeypairsByNameResponseShape', ],
        ],
        'DeleteVmKeypairByName' => [
            'name' => 'DeleteVmKeypairByName',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs/{name}',
            ],
            'input' => [ 'shape' => 'DeleteVmKeypairByNameRequestShape', ],
            'output' => [ 'shape' => 'DeleteVmKeypairByNameResponseShape', ],
        ],
        'GetVmKeypairs' => [
            'name' => 'GetVmKeypairs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs',
            ],
            'input' => [ 'shape' => 'GetVmKeypairsRequestShape', ],
            'output' => [ 'shape' => 'GetVmKeypairsResponseShape', ],
        ],
        'CreateVmKeypair' => [
            'name' => 'CreateVmKeypair',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vm_keypairs',
            ],
            'input' => [ 'shape' => 'CreateVmKeypairRequestShape', ],
            'output' => [ 'shape' => 'CreateVmKeypairResponseShape', ],
        ],
        'GetVpcEips' => [
            'name' => 'GetVpcEips',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips',
            ],
            'input' => [ 'shape' => 'GetVpcEipsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcEipsResponseShape', ],
        ],
        'CreateVpcEip' => [
            'name' => 'CreateVpcEip',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips',
            ],
            'input' => [ 'shape' => 'CreateVpcEipRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcEipResponseShape', ],
        ],
        'GetVpcEipById' => [
            'name' => 'GetVpcEipById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcEipByIdResponseShape', ],
        ],
        'DeleteVpcEipById' => [
            'name' => 'DeleteVpcEipById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcEipByIdResponseShape', ],
        ],
        'AssociateVpcEipById' => [
            'name' => 'AssociateVpcEipById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}:associate',
            ],
            'input' => [ 'shape' => 'AssociateVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'AssociateVpcEipByIdResponseShape', ],
        ],
        'DisassociateVpcEipById' => [
            'name' => 'DisassociateVpcEipById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_eips/{id}:disassociate',
            ],
            'input' => [ 'shape' => 'DisassociateVpcEipByIdRequestShape', ],
            'output' => [ 'shape' => 'DisassociateVpcEipByIdResponseShape', ],
        ],
        'GetLbHttpListener' => [
            'name' => 'GetLbHttpListener',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_lbHttpListener',
            ],
            'input' => [ 'shape' => 'GetLbHttpListenerRequestShape', ],
            'output' => [ 'shape' => 'GetLbHttpListenerResponseShape', ],
        ],
        'CreateVpcLBHttpListener' => [
            'name' => 'CreateVpcLBHttpListener',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_lbHttpListener',
            ],
            'input' => [ 'shape' => 'CreateVpcLBHttpListenerRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcLBHttpListenerResponseShape', ],
        ],
        'GetVpcNetworkInterfaceById' => [
            'name' => 'GetVpcNetworkInterfaceById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'DeleteVpcNetworkInterfaceById' => [
            'name' => 'DeleteVpcNetworkInterfaceById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'GetVpcNetworkInterfaces' => [
            'name' => 'GetVpcNetworkInterfaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces',
            ],
            'input' => [ 'shape' => 'GetVpcNetworkInterfacesRequestShape', ],
            'output' => [ 'shape' => 'GetVpcNetworkInterfacesResponseShape', ],
        ],
        'CreateVpcNetworkInterface' => [
            'name' => 'CreateVpcNetworkInterface',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces',
            ],
            'input' => [ 'shape' => 'CreateVpcNetworkInterfaceRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcNetworkInterfaceResponseShape', ],
        ],
        'AttachVpcNetworkInterfaceById' => [
            'name' => 'AttachVpcNetworkInterfaceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}:attach',
            ],
            'input' => [ 'shape' => 'AttachVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'AttachVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'DetachVpcNetworkInterfaceById' => [
            'name' => 'DetachVpcNetworkInterfaceById',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_networkInterfaces/{id}:detach',
            ],
            'input' => [ 'shape' => 'DetachVpcNetworkInterfaceByIdRequestShape', ],
            'output' => [ 'shape' => 'DetachVpcNetworkInterfaceByIdResponseShape', ],
        ],
        'GetVpcSecurityGroupById' => [
            'name' => 'GetVpcSecurityGroupById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcSecurityGroupByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSecurityGroupByIdResponseShape', ],
        ],
        'DeleteVpcSecurityGroupById' => [
            'name' => 'DeleteVpcSecurityGroupById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcSecurityGroupByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcSecurityGroupByIdResponseShape', ],
        ],
        'GetVpcSecurityGroups' => [
            'name' => 'GetVpcSecurityGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups',
            ],
            'input' => [ 'shape' => 'GetVpcSecurityGroupsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSecurityGroupsResponseShape', ],
        ],
        'CreateVpcSecurityGroup' => [
            'name' => 'CreateVpcSecurityGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups',
            ],
            'input' => [ 'shape' => 'CreateVpcSecurityGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcSecurityGroupResponseShape', ],
        ],
        'CreateSecurityGroupsRule' => [
            'name' => 'CreateSecurityGroupsRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups/{id}/rule',
            ],
            'input' => [ 'shape' => 'CreateSecurityGroupsRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateSecurityGroupsRuleResponseShape', ],
        ],
        'DeleteSecurityGroupsRule' => [
            'name' => 'DeleteSecurityGroupsRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_securityGroups/{id}/rule',
            ],
            'input' => [ 'shape' => 'DeleteSecurityGroupsRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecurityGroupsRuleResponseShape', ],
        ],
        'GetVpcSlbById' => [
            'name' => 'GetVpcSlbById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcSlbByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSlbByIdResponseShape', ],
        ],
        'DeleteVpcSlbById' => [
            'name' => 'DeleteVpcSlbById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcSlbByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcSlbByIdResponseShape', ],
        ],
        'GetVpcSlbs' => [
            'name' => 'GetVpcSlbs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs',
            ],
            'input' => [ 'shape' => 'GetVpcSlbsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSlbsResponseShape', ],
        ],
        'CreateVpcSlb' => [
            'name' => 'CreateVpcSlb',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs',
            ],
            'input' => [ 'shape' => 'CreateVpcSlbRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcSlbResponseShape', ],
        ],
        'StartSlb' => [
            'name' => 'StartSlb',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs/{id}:start',
            ],
            'input' => [ 'shape' => 'StartSlbRequestShape', ],
            'output' => [ 'shape' => 'StartSlbResponseShape', ],
        ],
        'StopSlb' => [
            'name' => 'StopSlb',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopSlbRequestShape', ],
            'output' => [ 'shape' => 'StopSlbResponseShape', ],
        ],
        'DeleteSlbsListener' => [
            'name' => 'DeleteSlbsListener',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs_listener/{id}',
            ],
            'input' => [ 'shape' => 'DeleteSlbsListenerRequestShape', ],
            'output' => [ 'shape' => 'DeleteSlbsListenerResponseShape', ],
        ],
        'StartSlbListener' => [
            'name' => 'StartSlbListener',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs_listener/{id}:start',
            ],
            'input' => [ 'shape' => 'StartSlbListenerRequestShape', ],
            'output' => [ 'shape' => 'StartSlbListenerResponseShape', ],
        ],
        'StopSlbListener' => [
            'name' => 'StopSlbListener',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/vpc_slbs_listener/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopSlbListenerRequestShape', ],
            'output' => [ 'shape' => 'StopSlbListenerResponseShape', ],
        ],
        'GetVpcSubnetById' => [
            'name' => 'GetVpcSubnetById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcSubnetByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSubnetByIdResponseShape', ],
        ],
        'DeleteVpcSubnetById' => [
            'name' => 'DeleteVpcSubnetById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcSubnetByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcSubnetByIdResponseShape', ],
        ],
        'GetVpcSubnets' => [
            'name' => 'GetVpcSubnets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets',
            ],
            'input' => [ 'shape' => 'GetVpcSubnetsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcSubnetsResponseShape', ],
        ],
        'CreateVpcSubnet' => [
            'name' => 'CreateVpcSubnet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_subnets',
            ],
            'input' => [ 'shape' => 'CreateVpcSubnetRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcSubnetResponseShape', ],
        ],
        'GetVpcById' => [
            'name' => 'GetVpcById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs/{id}',
            ],
            'input' => [ 'shape' => 'GetVpcByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVpcByIdResponseShape', ],
        ],
        'DeleteVpcById' => [
            'name' => 'DeleteVpcById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVpcByIdRequestShape', ],
            'output' => [ 'shape' => 'DeleteVpcByIdResponseShape', ],
        ],
        'GetVpcs' => [
            'name' => 'GetVpcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs',
            ],
            'input' => [ 'shape' => 'GetVpcsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcsResponseShape', ],
        ],
        'CreateVpc' => [
            'name' => 'CreateVpc',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_vpcs',
            ],
            'input' => [ 'shape' => 'CreateVpcRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcResponseShape', ],
        ],
        'GetVpcVServerGroups' => [
            'name' => 'GetVpcVServerGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vserverGroups',
            ],
            'input' => [ 'shape' => 'GetVpcVServerGroupsRequestShape', ],
            'output' => [ 'shape' => 'GetVpcVServerGroupsResponseShape', ],
        ],
        'CreateVpcVServerGroup' => [
            'name' => 'CreateVpcVServerGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/vpc_vserverGroups',
            ],
            'input' => [ 'shape' => 'CreateVpcVServerGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateVpcVServerGroupResponseShape', ],
        ],
        'GetVserverGroupsById' => [
            'name' => 'GetVserverGroupsById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpc_vserverGroups/{id}',
            ],
            'input' => [ 'shape' => 'GetVserverGroupsByIdRequestShape', ],
            'output' => [ 'shape' => 'GetVserverGroupsByIdResponseShape', ],
        ],
        'DeleteVserverGroup' => [
            'name' => 'DeleteVserverGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/vpc_vserverGroups/{id}',
            ],
            'input' => [ 'shape' => 'DeleteVserverGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteVserverGroupResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
