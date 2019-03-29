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
        'CloudInfoListResp' => [
            'type' => 'structure',
            'members' => [
                'clouds' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudInfo', ], ],
            ],
        ],
        'GetUserCloudNotFoundResp' => [
            'type' => 'structure',
            'members' => [
                'error' => [ 'type' => 'object', 'locationName' => 'error', ],
            ],
        ],
        'UserNotFoundResp' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'UserNotFoundException', ],
            ],
        ],
        'Payload1' => [
            'type' => 'structure',
            'members' => [
                'cloud' => [ 'type' => 'string', 'locationName' => 'cloud', ],
            ],
        ],
        'CloudInfoResp' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'UserNotFoundException' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'payload' =>  [ 'shape' => 'Payload', ],
            ],
        ],
        'Payload' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CloudInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vendor' => [ 'type' => 'string', 'locationName' => 'vendor', ],
                'info' => [ 'type' => 'object', 'locationName' => 'info', ],
                'metadata' => [ 'type' => 'object', 'locationName' => 'metadata', ],
            ],
        ],
        'CloudNotFoundException' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'payload' =>  [ 'shape' => 'Payload1', ],
            ],
        ],
        'DeploymentApplyInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'applyTime' => [ 'type' => 'string', 'locationName' => 'applyTime', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'content' =>  [ 'shape' => 'DeploymentResourcesInfo', ],
            ],
        ],
        'CreateSgRule' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'fromPort' => [ 'type' => 'integer', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'integer', 'locationName' => 'toPort', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'nicType' => [ 'type' => 'string', 'locationName' => 'nicType', ],
                'policy' => [ 'type' => 'string', 'locationName' => 'policy', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'cidrIp' => [ 'type' => 'string', 'locationName' => 'cidrIp', ],
            ],
        ],
        'DeploymentAttachDisk' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeploymentBucket' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'acl' => [ 'type' => 'string', 'locationName' => 'acl', ],
            ],
        ],
        'DeploymentResourcesInfo' => [
            'type' => 'structure',
            'members' => [
                'vms' => [ 'type' => 'object', 'locationName' => 'vms', ],
                'eips' => [ 'type' => 'object', 'locationName' => 'eips', ],
                'subnets' => [ 'type' => 'object', 'locationName' => 'subnets', ],
                'networkInterfaces' => [ 'type' => 'object', 'locationName' => 'networkInterfaces', ],
                'slbs' => [ 'type' => 'object', 'locationName' => 'slbs', ],
                'securityGroups' => [ 'type' => 'object', 'locationName' => 'securityGroups', ],
                'securityGroupRules' => [ 'type' => 'object', 'locationName' => 'securityGroupRules', ],
                'keypairs' => [ 'type' => 'object', 'locationName' => 'keypairs', ],
                'disks' => [ 'type' => 'object', 'locationName' => 'disks', ],
                'vpcs' => [ 'type' => 'object', 'locationName' => 'vpcs', ],
                'vserverGroups' => [ 'type' => 'object', 'locationName' => 'vserverGroups', ],
                'httpListeners' => [ 'type' => 'object', 'locationName' => 'httpListeners', ],
                'diskAttachment' => [ 'type' => 'object', 'locationName' => 'diskAttachment', ],
                'netInterfaceAttachment' => [ 'type' => 'object', 'locationName' => 'netInterfaceAttachment', ],
                'eipAssociate' => [ 'type' => 'object', 'locationName' => 'eipAssociate', ],
                'rds' => [ 'type' => 'object', 'locationName' => 'rds', ],
                'rdsDatabase' => [ 'type' => 'object', 'locationName' => 'rdsDatabase', ],
                'rdsAccount' => [ 'type' => 'object', 'locationName' => 'rdsAccount', ],
                'rdsAccountGrant' => [ 'type' => 'object', 'locationName' => 'rdsAccountGrant', ],
                'bucket' => [ 'type' => 'object', 'locationName' => 'bucket', ],
                'variables' => [ 'type' => 'object', 'locationName' => 'variables', ],
            ],
        ],
        'Apply' => [
            'type' => 'structure',
            'members' => [
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'BackendServer' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'serverHealthStatus' => [ 'type' => 'string', 'locationName' => 'serverHealthStatus', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'VpcInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'CreateSecurityGroup' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'CreateKeypair' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'publicKey' => [ 'type' => 'string', 'locationName' => 'publicKey', ],
            ],
        ],
        'CreateVserverGroup' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'vserverGroupName' => [ 'type' => 'string', 'locationName' => 'vserverGroupName', ],
                'backendServers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendServer', ], ],
            ],
        ],
        'CreateLoadBalancerHTTPListener' => [
            'type' => 'structure',
            'members' => [
                'loadBalancerId' => [ 'type' => 'string', 'locationName' => 'loadBalancerId', ],
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'backendServerPort' => [ 'type' => 'integer', 'locationName' => 'backendServerPort', ],
                'vserverGroupId' => [ 'type' => 'string', 'locationName' => 'vserverGroupId', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'healthCheckConnectPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckConnectPort', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
            ],
        ],
        'CreateRDSInstance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'storageGB' => [ 'type' => 'integer', 'locationName' => 'storageGB', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DeploymentRdsAccount' => [
            'type' => 'structure',
            'members' => [
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'DeploymentAttachNetInterface' => [
            'type' => 'structure',
            'members' => [
                'interfaceId' => [ 'type' => 'string', 'locationName' => 'interfaceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeploymentRdsDatabase' => [
            'type' => 'structure',
            'members' => [
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
            ],
        ],
        'CreateNetInterface' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'associatedPublicIp' => [ 'type' => 'string', 'locationName' => 'associatedPublicIp', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
            ],
        ],
        'ArrayDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateDataDisk' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArrayDiskAttachment', ], ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'CreateVm' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'imageType' =>  [ 'shape' => 'ImageType', ],
                'instanceType' =>  [ 'shape' => 'InstanceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'instanceFlavorType' => [ 'type' => 'string', 'locationName' => 'instanceFlavorType', ],
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'internetMaxBandwidthIn' => [ 'type' => 'integer', 'locationName' => 'internetMaxBandwidthIn', ],
                'internetMaxBandwidthOut' => [ 'type' => 'integer', 'locationName' => 'internetMaxBandwidthOut', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'passwordInherit' => [ 'type' => 'boolean', 'locationName' => 'passwordInherit', ],
                'userData' => [ 'type' => 'string', 'locationName' => 'userData', ],
                'keyPairName' => [ 'type' => 'string', 'locationName' => 'keyPairName', ],
                'systemDisk' =>  [ 'shape' => 'SystemDisk', ],
            ],
        ],
        'DeploymentBaseInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'readOnly' => [ 'type' => 'integer', 'locationName' => 'readOnly', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
                'lastOperation' => [ 'type' => 'string', 'locationName' => 'lastOperation', ],
            ],
        ],
        'ReverseDeploymentInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'readOnly' => [ 'type' => 'integer', 'locationName' => 'readOnly', ],
                'resources' =>  [ 'shape' => 'ReverseDeploymentResourcesInfo', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
            ],
        ],
        'AllocateEipAddress' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bandwidth' => [ 'type' => 'string', 'locationName' => 'bandwidth', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
            ],
        ],
        'CreateSubnet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'ImageType' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'osVersion' => [ 'type' => 'string', 'locationName' => 'osVersion', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'DeploymentAssociateEip' => [
            'type' => 'structure',
            'members' => [
                'eipId' => [ 'type' => 'string', 'locationName' => 'eipId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'SlbInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'addressType' => [ 'type' => 'string', 'locationName' => 'addressType', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'SystemDisk' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DeploymentAccountGrant' => [
            'type' => 'structure',
            'members' => [
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'Deployment' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ReverseDeploymentResourcesInfo' => [
            'type' => 'structure',
            'members' => [
                'vmIds' => [ 'type' => 'object', 'locationName' => 'vmIds', ],
                'eipIds' => [ 'type' => 'object', 'locationName' => 'eipIds', ],
                'subnetIds' => [ 'type' => 'object', 'locationName' => 'subnetIds', ],
                'networkInterfaceIds' => [ 'type' => 'object', 'locationName' => 'networkInterfaceIds', ],
                'slbIds' => [ 'type' => 'object', 'locationName' => 'slbIds', ],
                'securityGroupIds' => [ 'type' => 'object', 'locationName' => 'securityGroupIds', ],
                'keypairIds' => [ 'type' => 'object', 'locationName' => 'keypairIds', ],
                'diskIds' => [ 'type' => 'object', 'locationName' => 'diskIds', ],
                'vpcIds' => [ 'type' => 'object', 'locationName' => 'vpcIds', ],
                'vserverGroupIds' => [ 'type' => 'object', 'locationName' => 'vserverGroupIds', ],
                'httpListenerIds' => [ 'type' => 'object', 'locationName' => 'httpListenerIds', ],
                'diskAttachmentIds' => [ 'type' => 'object', 'locationName' => 'diskAttachmentIds', ],
                'netInterfaceAttachmentIds' => [ 'type' => 'object', 'locationName' => 'netInterfaceAttachmentIds', ],
                'eipAssociateIds' => [ 'type' => 'object', 'locationName' => 'eipAssociateIds', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'DeploymentInfo' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'DeploymentBaseInfo', ],
                'content' =>  [ 'shape' => 'DeploymentResourcesInfo', ],
            ],
        ],
        'SysDiskInfo' => [
            'type' => 'structure',
            'members' => [
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'diskMediumType' => [ 'type' => 'string', 'locationName' => 'diskMediumType', ],
                'diskName' => [ 'type' => 'string', 'locationName' => 'diskName', ],
                'autoDelete' => [ 'type' => 'string', 'locationName' => 'autoDelete', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DiskCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'AttachDataDisk' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'deleteWithInstance' => [ 'type' => 'boolean', 'locationName' => 'deleteWithInstance', ],
            ],
        ],
        'DataDiskAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'dataDisk' =>  [ 'shape' => 'DataDiskInfo', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'diskCategory' => [ 'type' => 'string', 'locationName' => 'diskCategory', ],
            ],
        ],
        'DiskCollection' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudDataDisk', ], ],
            ],
        ],
        'ResourceTFInfo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'body' => [ 'type' => 'string', 'locationName' => 'body', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'DataDiskInfo' => [
            'type' => 'structure',
            'members' => [
                'diskId' => [ 'type' => 'string', 'locationName' => 'diskId', ],
                'diskSize' => [ 'type' => 'integer', 'locationName' => 'diskSize', ],
                'diskMediumType' => [ 'type' => 'string', 'locationName' => 'diskMediumType', ],
                'diskName' => [ 'type' => 'string', 'locationName' => 'diskName', ],
                'autoDelete' => [ 'type' => 'string', 'locationName' => 'autoDelete', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CloudDataDisk' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
                'attachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArrayDiskAttachment', ], ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'DiskItem' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'CloudDataDisk', ],
            ],
        ],
        'DetachDataDisk' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateOSSBucket' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'creationDate' => [ 'type' => 'string', 'locationName' => 'creationDate', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'acl' => [ 'type' => 'string', 'locationName' => 'acl', ],
            ],
        ],
        'OssBucketDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'acl' => [ 'type' => 'string', 'locationName' => 'acl', ],
                'intranetEndpoint' => [ 'type' => 'string', 'locationName' => 'intranetEndpoint', ],
                'extranetEndpoint' => [ 'type' => 'string', 'locationName' => 'extranetEndpoint', ],
                'creationDate' => [ 'type' => 'string', 'locationName' => 'creationDate', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'OssFileInfo' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'size' => [ 'type' => 'double', 'locationName' => 'size', ],
                'lastModifiedTime' => [ 'type' => 'string', 'locationName' => 'lastModifiedTime', ],
                'storageClass' => [ 'type' => 'string', 'locationName' => 'storageClass', ],
            ],
        ],
        'OssBucketInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'creationDate' => [ 'type' => 'string', 'locationName' => 'creationDate', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'TaskAddressInfo' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'SimpleTaskAddressInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
            ],
        ],
        'TransferSimpleTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'srcAddress' =>  [ 'shape' => 'SimpleTaskAddressInfo', ],
                'dstAddress' =>  [ 'shape' => 'SimpleTaskAddressInfo', ],
            ],
        ],
        'TransferTaskFailedFileInfo' => [
            'type' => 'structure',
            'members' => [
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'TransferTaskFailedDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'string', 'locationName' => 'count', ],
                'files' => [ 'type' => 'list', 'member' => [ 'shape' => 'TransferTaskFailedFileInfo', ], ],
            ],
        ],
        'TransferTaskInfoWithID' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'srcAddress' =>  [ 'shape' => 'TaskAddressInfo', ],
                'dstAddress' =>  [ 'shape' => 'TaskAddressInfo', ],
            ],
        ],
        'ReturnErrorInfo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'httpStatus' => [ 'type' => 'integer', 'locationName' => 'httpStatus', ],
                'payloadInfo' => [ 'type' => 'object', 'locationName' => 'payloadInfo', ],
            ],
        ],
        'TransferTaskProgressInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'timeStart' => [ 'type' => 'string', 'locationName' => 'timeStart', ],
                'succeedFileCount' => [ 'type' => 'string', 'locationName' => 'succeedFileCount', ],
                'failedFileCount' => [ 'type' => 'string', 'locationName' => 'failedFileCount', ],
            ],
        ],
        'TransferTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'srcAddress' =>  [ 'shape' => 'TaskAddressInfo', ],
                'dstAddress' =>  [ 'shape' => 'TaskAddressInfo', ],
            ],
        ],
        'CreateRDSAccount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'CreateRDSAccountReq' => [
            'type' => 'structure',
            'members' => [
                'account' =>  [ 'shape' => 'CreateRDSAccount', ],
            ],
        ],
        'RdsAccountPrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'DbPrivilegeInfo' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'RdsAccountInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsAccountPrivilege', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'CreateRDSDB' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
            ],
        ],
        'RdsDBInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsDBAccessPrivilege', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'RdsDBAccessPrivilege' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'RdsInstanceDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'storageGB' => [ 'type' => 'integer', 'locationName' => 'storageGB', ],
                'memoryMB' => [ 'type' => 'double', 'locationName' => 'memoryMB', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceClassType' => [ 'type' => 'string', 'locationName' => 'instanceClassType', ],
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'connectionString' => [ 'type' => 'string', 'locationName' => 'connectionString', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'CreateRDSInstanceReq' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'CreateRDSInstance', ],
            ],
        ],
        'CreateChannel' => [
            'type' => 'structure',
            'members' => [
                'channel' =>  [ 'shape' => 'ChannelInfo', ],
            ],
        ],
        'ChannelBaseInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DatasourceInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'DataMediaInfo' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
                'datasource' =>  [ 'shape' => 'DatasourceInfo', ],
                'schema' => [ 'type' => 'string', 'locationName' => 'schema', ],
                'tables' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ChannelInfo' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'ChannelBaseInfo', ],
                'source' =>  [ 'shape' => 'DataMediaInfo', ],
                'target' =>  [ 'shape' => 'DataMediaInfo', ],
            ],
        ],
        'Error' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'Info', ],
                'payload' => [ 'type' => 'object', 'locationName' => 'payload', ],
            ],
        ],
        'CreateDatasource' => [
            'type' => 'structure',
            'members' => [
                'datasource' =>  [ 'shape' => 'DatasourceInfo', ],
            ],
        ],
        'ReturnError' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'Error', ],
            ],
        ],
        'Info' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'RdsSpecificationDisk' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'min' => [ 'type' => 'integer', 'locationName' => 'min', ],
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
            ],
        ],
        'RdsSpecification' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'disk' =>  [ 'shape' => 'RdsSpecificationDisk', ],
            ],
        ],
        'AzInfo' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'localName' => [ 'type' => 'string', 'locationName' => 'localName', ],
            ],
        ],
        'RegionInfo' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'localName' => [ 'type' => 'string', 'locationName' => 'localName', ],
                'vendor' => [ 'type' => 'string', 'locationName' => 'vendor', ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskResult' => [ 'type' => 'string', 'locationName' => 'taskResult', ],
                'lastCode' => [ 'type' => 'string', 'locationName' => 'lastCode', ],
                'taskLastInfo' => [ 'type' => 'string', 'locationName' => 'taskLastInfo', ],
                'resourceIDs' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'msg' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'ImageInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VmImageCollection' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageInfo', ], ],
            ],
        ],
        'VmInstanceCollection' => [
            'type' => 'structure',
            'members' => [
                'vms' => [ 'type' => 'list', 'member' => [ 'shape' => 'VmInfo', ], ],
            ],
        ],
        'VmInstanceItem' => [
            'type' => 'structure',
            'members' => [
                'vm' =>  [ 'shape' => 'VmInfoDetail', ],
            ],
        ],
        'NetAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterface', ],
            ],
        ],
        'SecurityGroup' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'Ip' => [
            'type' => 'structure',
            'members' => [
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
            ],
        ],
        'VmInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageType' =>  [ 'shape' => 'ImageType', ],
                'instanceType' =>  [ 'shape' => 'InstanceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'sysDiskInfo' =>  [ 'shape' => 'SysDiskInfo', ],
                'dataDiskAttachments' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataDiskAttachment', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetAttachment', ], ],
                'metadata' => [ 'type' => 'string', 'locationName' => 'metadata', ],
            ],
        ],
        'VmInstanceCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'NetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'primaryIp' =>  [ 'shape' => 'Ip', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ip', ], ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroup', ], ],
            ],
        ],
        'VmInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'imageType' =>  [ 'shape' => 'ImageType', ],
                'instanceType' =>  [ 'shape' => 'InstanceType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'keyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VmInstanceTypeCollection' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeInfo', ], ],
            ],
        ],
        'InstanceTypeInfo' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpuAmount' => [ 'type' => 'integer', 'locationName' => 'gpuAmount', ],
                'gpuSpec' => [ 'type' => 'string', 'locationName' => 'gpuSpec', ],
                'localStorageSize' => [ 'type' => 'integer', 'locationName' => 'localStorageSize', ],
                'localStorageType' => [ 'type' => 'string', 'locationName' => 'localStorageType', ],
                'localStorageAmount' => [ 'type' => 'integer', 'locationName' => 'localStorageAmount', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
            ],
        ],
        'VmKeypairCreateTask' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTFInfo', ], ],
            ],
        ],
        'VmKeypairItem' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'KeypairInfo', ],
            ],
        ],
        'VmKeypairCollection' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeypairInfo', ], ],
            ],
        ],
        'KeypairInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyFingerprint' => [ 'type' => 'string', 'locationName' => 'keyFingerprint', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VpcEipCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'VpcEipItem' => [
            'type' => 'structure',
            'members' => [
                'eipAddress' =>  [ 'shape' => 'EipAddress', ],
            ],
        ],
        'UnassociateEipAddress' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'AssociateEipAddress' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'VpcEipCollection' => [
            'type' => 'structure',
            'members' => [
                'eipAddresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'EipAddress', ], ],
            ],
        ],
        'EipAddress' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'bandwidth' => [ 'type' => 'string', 'locationName' => 'bandwidth', ],
                'allocationTime' => [ 'type' => 'string', 'locationName' => 'allocationTime', ],
            ],
        ],
        'LbHttpListener' => [
            'type' => 'structure',
            'members' => [
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'backendServerPort' => [ 'type' => 'integer', 'locationName' => 'backendServerPort', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'scheduler' => [ 'type' => 'string', 'locationName' => 'scheduler', ],
                'vServerGroupId' => [ 'type' => 'string', 'locationName' => 'vServerGroupId', ],
                'healthCheck' => [ 'type' => 'string', 'locationName' => 'healthCheck', ],
                'healthCheckConnectPort' => [ 'type' => 'integer', 'locationName' => 'healthCheckConnectPort', ],
                'healthyThreshold' => [ 'type' => 'integer', 'locationName' => 'healthyThreshold', ],
                'unhealthyThreshold' => [ 'type' => 'integer', 'locationName' => 'unhealthyThreshold', ],
                'healthCheckTimeout' => [ 'type' => 'integer', 'locationName' => 'healthCheckTimeout', ],
                'healthCheckInterval' => [ 'type' => 'integer', 'locationName' => 'healthCheckInterval', ],
                'healthCheckHttpCode' => [ 'type' => 'string', 'locationName' => 'healthCheckHttpCode', ],
            ],
        ],
        'ListenerPortsAndProtocol' => [
            'type' => 'structure',
            'members' => [
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'listenerProtocol' => [ 'type' => 'string', 'locationName' => 'listenerProtocol', ],
                'listenerForward' => [ 'type' => 'string', 'locationName' => 'listenerForward', ],
                'forwardPort' => [ 'type' => 'integer', 'locationName' => 'forwardPort', ],
            ],
        ],
        'PrivateIp' => [
            'type' => 'structure',
            'members' => [
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'primary' => [ 'type' => 'boolean', 'locationName' => 'primary', ],
                'eipId' => [ 'type' => 'string', 'locationName' => 'eipId', ],
                'eipAddress' => [ 'type' => 'string', 'locationName' => 'eipAddress', ],
            ],
        ],
        'VpcNetworkInterfaceItem' => [
            'type' => 'structure',
            'members' => [
                'netInterface' =>  [ 'shape' => 'NetInterfaceInfo', ],
            ],
        ],
        'DetachNetInterface' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'NetInterfaceInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'associatedPublicIp' => [ 'type' => 'string', 'locationName' => 'associatedPublicIp', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'securityGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'privateIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'PrivateIp', ], ],
            ],
        ],
        'AttachNetInterface' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'VpcNetworkInterfaceCollection' => [
            'type' => 'structure',
            'members' => [
                'netInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetInterfaceInfo', ], ],
            ],
        ],
        'PermissionType' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'ipProtocol' => [ 'type' => 'string', 'locationName' => 'ipProtocol', ],
                'portRange' => [ 'type' => 'string', 'locationName' => 'portRange', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sourceCidrIp' => [ 'type' => 'string', 'locationName' => 'sourceCidrIp', ],
                'sourceGroupId' => [ 'type' => 'string', 'locationName' => 'sourceGroupId', ],
                'sourceGroupOwnerAccount' => [ 'type' => 'string', 'locationName' => 'sourceGroupOwnerAccount', ],
                'destCidrIp' => [ 'type' => 'string', 'locationName' => 'destCidrIp', ],
                'destGroupId' => [ 'type' => 'string', 'locationName' => 'destGroupId', ],
                'destGroupOwnerAccount' => [ 'type' => 'string', 'locationName' => 'destGroupOwnerAccount', ],
                'policy' => [ 'type' => 'string', 'locationName' => 'policy', ],
                'nicType' => [ 'type' => 'string', 'locationName' => 'nicType', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'VpcSecurityGroupCollection' => [
            'type' => 'structure',
            'members' => [
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupInfo', ], ],
            ],
        ],
        'VpcSecurityGroupItem' => [
            'type' => 'structure',
            'members' => [
                'securityGroup' =>  [ 'shape' => 'SecurityGroupDetail', ],
            ],
        ],
        'SecurityGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'VpcSecurityGroupCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'SecurityGroupDetail' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionType', ], ],
            ],
        ],
        'VpcSlbCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'BackendServer2' => [
            'type' => 'structure',
            'members' => [
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'SlbInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'addressType' => [ 'type' => 'string', 'locationName' => 'addressType', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'masterAz' => [ 'type' => 'string', 'locationName' => 'masterAz', ],
                'slaveAz' => [ 'type' => 'string', 'locationName' => 'slaveAz', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'listenerPortsAndProtocol' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListenerPortsAndProtocol', ], ],
                'backendServers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackendServer2', ], ],
                'loadBalancerSpec' => [ 'type' => 'string', 'locationName' => 'loadBalancerSpec', ],
            ],
        ],
        'VpcSlbCollection' => [
            'type' => 'structure',
            'members' => [
                'slbs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlbInfo', ], ],
            ],
        ],
        'VpcSlbItem' => [
            'type' => 'structure',
            'members' => [
                'slb' =>  [ 'shape' => 'SlbInfoDetail', ],
            ],
        ],
        'SubnetInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'availableIpCount' => [ 'type' => 'integer', 'locationName' => 'availableIpCount', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'endIp' => [ 'type' => 'string', 'locationName' => 'endIp', ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'startIp' => [ 'type' => 'string', 'locationName' => 'startIp', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'SubnetDesInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
            ],
        ],
        'VpcSubnetItem' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'SubnetDesInfo', ],
            ],
        ],
        'VpcSubnetCollection' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetDesInfo', ], ],
            ],
        ],
        'VpcCreateTask' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'VpcCollection' => [
            'type' => 'structure',
            'members' => [
                'vpcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcInfo', ], ],
            ],
        ],
        'VpcInfoDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetInfo', ], ],
                'routeTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcItem' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'VpcInfoDetail', ],
            ],
        ],
        'VpcListInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'subnetIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'routeTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VpcVServerGroupCollection' => [
            'type' => 'structure',
            'members' => [
                'vserverGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'VserverGroupInfo', ], ],
            ],
        ],
        'VserverGroupDetail' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'vserverGroupId' => [ 'type' => 'string', 'locationName' => 'vserverGroupId', ],
                'vserverGroupName' => [ 'type' => 'string', 'locationName' => 'vserverGroupName', ],
                'backendServers' => [ 'type' => 'list', 'member' => [ 'shape' => 'VserverGroupBackendServer', ], ],
            ],
        ],
        'VserverGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudID' => [ 'type' => 'string', 'locationName' => 'cloudID', ],
                'vserverGroupId' => [ 'type' => 'string', 'locationName' => 'vserverGroupId', ],
                'vserverGroupName' => [ 'type' => 'string', 'locationName' => 'vserverGroupName', ],
            ],
        ],
        'VserverGroupBackendServer' => [
            'type' => 'structure',
            'members' => [
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'RegistCloudInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RegistCloudInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCloudInfoByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
            ],
        ],
        'ValidCloudInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCloudInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCloudInfosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCloudInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'clouds' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudInfo', ], ],
            ],
        ],
        'UnregistCloudInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidCloudInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
            ],
        ],
        'RegistCloudInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCloudInfoByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'RegistCloudInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'CloudInfo', ],
            ],
        ],
        'UnregistCloudInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetCloudInfoByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCloudInfoByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCloudInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'driver' => [ 'type' => 'string', 'locationName' => 'driver', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UnregistCloudInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cloudId' => [ 'type' => 'string', 'locationName' => 'cloudId', ],
            ],
        ],
        'ValidCloudInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDeploymentVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDeploymentsByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'CloneDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'GetDeploymentsVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDeploymentsVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReverseDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'GetDeploymentsByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDeploymentsByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DryrunDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ApplyDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'DeleteDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DryrunDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDeploymentVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'versions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentApplyInfo', ], ],
            ],
        ],
        'RollbackDeploymentsVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'version_id' => [ 'type' => 'string', 'locationName' => 'version_id', ],
            ],
        ],
        'GetDeploymentsByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'CloneDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'Deployment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDeploymentsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDeploymentsVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'version_id' => [ 'type' => 'string', 'locationName' => 'version_id', ],
            ],
        ],
        'GetDeploymentsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDeploymentsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDeploymentsResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployments' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentInfo', ], ],
            ],
        ],
        'CreateDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDeploymentVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDeploymentVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDeploymentsVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'GetDeploymentResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TaskInfo', ],
            ],
        ],
        'ReverseDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReverseDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDeploymentResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CloneDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloneDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RollbackDeploymentsVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RollbackDeploymentsVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ApplyDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'apply' =>  [ 'shape' => 'Apply', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDeploymentsResultsByIdRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TaskInfo', ],
            ],
        ],
        'GetDeploymentsResultsByIdRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDeploymentsResultsByIdRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EditDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ApplyDeploymentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ApplyDeploymentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDeploymentResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDeploymentResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReverseDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'reverse' =>  [ 'shape' => 'ReverseDeploymentInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RollbackDeploymentsVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'DryrunDeploymentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDeploymentsResultsByIdRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'record' => [ 'type' => 'string', 'locationName' => 'record', ],
            ],
        ],
        'EditDeploymentResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployment' =>  [ 'shape' => 'DeploymentInfo', ],
            ],
        ],
        'GetDiskByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDiskByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDisksResultShape' => [
            'type' => 'structure',
            'members' => [
                'disks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudDataDisk', ], ],
            ],
        ],
        'CreateDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'CreateDataDisk', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AttachDiskToVmInstanceByDiskIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DetachDiskToVmInstanceByDiskIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'detach' =>  [ 'shape' => 'DetachDataDisk', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AttachDiskToVmInstanceByDiskIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'attach' =>  [ 'shape' => 'AttachDataDisk', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AttachDiskToVmInstanceByDiskIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AttachDiskToVmInstanceByDiskIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDisksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vmId' => [ 'type' => 'string', 'locationName' => 'vmId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDisksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDisksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDiskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveDiskByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachDiskToVmInstanceByDiskIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDiskResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'RemoveDiskByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDiskByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetDiskByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'disk' =>  [ 'shape' => 'CloudDataDisk', ],
            ],
        ],
        'RemoveDiskByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DetachDiskToVmInstanceByDiskIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBucketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bucket' =>  [ 'shape' => 'CreateOSSBucket', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBucketRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetBucketByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetBucketsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetBucketFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBucketFilesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteBucketResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBucketResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBucketFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'GetBucketByNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'bucket' =>  [ 'shape' => 'OssBucketDetailInfo', ],
            ],
        ],
        'GetBucketFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'isTruncated' => [ 'type' => 'boolean', 'locationName' => 'isTruncated', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'files' => [ 'type' => 'list', 'member' => [ 'shape' => 'OssFileInfo', ], ],
            ],
        ],
        'CreateBucketResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBucketResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBucketResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetBucketsResultShape' => [
            'type' => 'structure',
            'members' => [
                'buckets' => [ 'type' => 'list', 'member' => [ 'shape' => 'OssBucketInfo', ], ],
            ],
        ],
        'GetBucketsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBucketsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBucketByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBucketByNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartTransferTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EditTransferTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTransferTaskFailedFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TransferTaskFailedDetailInfo', ],
            ],
        ],
        'GetTransferTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTransferTasksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTransferTaskProgressResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TransferTaskProgressInfo', ],
            ],
        ],
        'DeleteTransferTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartTransferTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTransferTaskByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteTransferTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTransferTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TransferTaskInfoWithID', ], ],
            ],
        ],
        'CreateTransferTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TransferTaskInfoWithID', ],
            ],
        ],
        'GetTransferTaskByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TransferTaskInfoWithID', ],
            ],
        ],
        'StopTransferTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EditTransferTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTransferTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTransferTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopTransferTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetTransferTaskProgressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetTransferTaskFailedFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StartTransferTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetTransferTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteTransferTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetTransferTaskProgressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTransferTaskProgressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTransferTaskFailedFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTransferTaskFailedFilesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTransferTaskByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTransferTaskByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTransferTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TransferSimpleTaskInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopTransferTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditTransferTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TransferTaskInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GrantRdsAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetRdsAccountsByInstIdAndAccountNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GetRdsAccountsByInstIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsAccountInfo', ], ],
            ],
        ],
        'RevokeRdsAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRdsAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantRdsAccountsByTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'cloud' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteRdsAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'CreateRdsAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GrantRdsAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbPrivilegeInfo' =>  [ 'shape' => 'DbPrivilegeInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'RevokeRdsAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRdsAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRdsAccountsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRdsAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'account' =>  [ 'shape' => 'CreateRDSAccount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
            ],
        ],
        'DeleteRdsAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GrantRdsAccountsByTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'DbPrivilegeInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GrantRdsAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsAccountsByInstIdAndAccountNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'account' =>  [ 'shape' => 'RdsAccountInfo', ],
            ],
        ],
        'GetRdsAccountsByInstIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
            ],
        ],
        'GrantRdsAccountsByTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GrantRdsAccountsByTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsAccountsByInstIdAndAccountNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsAccountsByInstIdAndAccountNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsAccountsByInstIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsAccountsByInstIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RevokeRdsAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'GetRdsDatabasesByInstIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbs' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsDBInfo', ], ],
            ],
        ],
        'DeleteRdsDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRdsDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsDatabaseByInstIdAndDbNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'GetRdsDatabasesByInstIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsDatabasesByInstIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsDatabaseByInstIdAndDbNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'db' =>  [ 'shape' => 'RdsDBInfo', ],
            ],
        ],
        'GetRdsDatabasesByInstIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
            ],
        ],
        'CreateRdsDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRdsDatabaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRdsDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetRdsDatabaseByInstIdAndDbNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsDatabaseByInstIdAndDbNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRdsDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' =>  [ 'shape' => 'CreateRDSDB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
            ],
        ],
        'DeleteRdsDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'GetRdsByInstIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
            ],
        ],
        'GetRdsInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsInstanceDetailInfo', ], ],
            ],
        ],
        'CreateRdsInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteRdsByInstIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instId' => [ 'type' => 'string', 'locationName' => 'instId', ],
            ],
        ],
        'GetRdsByInstIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'RdsInstanceDetailInfo', ],
            ],
        ],
        'GetRdsInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsByInstIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsByInstIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRdsByInstIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRdsInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'CreateRDSInstance', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateRdsInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateRdsInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRdsByInstIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateChannelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'channel' =>  [ 'shape' => 'ChannelInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopChannelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteDatasourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateChannelResultShape' => [
            'type' => 'structure',
            'members' => [
                'channel' =>  [ 'shape' => 'ChannelInfo', ],
            ],
        ],
        'GetDatasourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'datasources' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasourceInfo', ], ],
            ],
        ],
        'StartChannelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StartChannelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopChannelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDatasourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDatasourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDatasourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteChannelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopChannelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDatasourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateDatasourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDatasourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateChannelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateChannelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteChannelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetChannelsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetChannelsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartChannelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetChannelsResultShape' => [
            'type' => 'structure',
            'members' => [
                'channels' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChannelInfo', ], ],
            ],
        ],
        'DeleteChannelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatasourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'datasource' =>  [ 'shape' => 'DatasourceInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteDatasourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDatasourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'datasource' =>  [ 'shape' => 'DatasourceInfo', ],
            ],
        ],
        'GetChannelsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetRdsSpecificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
            ],
        ],
        'GetRdsSpecificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRdsSpecificationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRdsSpecificationResultShape' => [
            'type' => 'structure',
            'members' => [
                'specifications' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsSpecification', ], ],
            ],
        ],
        'GetRegionsAvailableZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'GetRegionsAvailableZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRegionsAvailableZonesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRegionsAvailableZonesResultShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfo', ], ],
            ],
        ],
        'GetRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRegionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegionInfo', ], ],
            ],
        ],
        'GetRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTaskInfoHistoryByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
            ],
        ],
        'GetTaskInfoByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'task' => [ 'type' => 'string', 'locationName' => 'task', ],
            ],
        ],
        'GetTaskInfoHistoryByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaskInfoHistoryByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTaskInfoHistoryByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'task' => [ 'type' => 'string', 'locationName' => 'task', ],
            ],
        ],
        'GetTaskInfoByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaskInfoByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTaskInfoByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'TaskInfo', ],
            ],
        ],
        'GetVmImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageInfo', ], ],
            ],
        ],
        'GetVmImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmImagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebootVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StopVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'StartVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVmInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vm' =>  [ 'shape' => 'CreateVm', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'RebootVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVmInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'vms' => [ 'type' => 'list', 'member' => [ 'shape' => 'VmInfo', ], ],
            ],
        ],
        'StopVmInstanceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVmInstancesByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StartVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootVmInstanceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVmInstancesByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmInstancesByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVmInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVmInstanceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmInstancesByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'vm' =>  [ 'shape' => 'VmInfoDetail', ],
            ],
        ],
        'GetVmInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeInfo', ], ],
            ],
        ],
        'GetVmInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmInstanceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmKeypairsResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeypairInfo', ], ],
            ],
        ],
        'GetVmKeypairsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmKeypairsByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmKeypairsByNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVmKeypairByNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVmKeypairRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'CreateKeypair', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVmKeypairsByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DeleteVmKeypairByNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DeleteVmKeypairByNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmKeypairResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVmKeypairResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVmKeypairsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVmKeypairsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVmKeypairResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTFInfo', ], ],
            ],
        ],
        'GetVmKeypairsByNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'keypair' =>  [ 'shape' => 'KeypairInfo', ],
            ],
        ],
        'GetVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcEipByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcEipResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'AssociateVpcEipByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssociateVpcEipByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcEipsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcEipsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DisassociateVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'unassociate' =>  [ 'shape' => 'UnassociateEipAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AssociateVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'associate' =>  [ 'shape' => 'AssociateEipAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'eipAddress' =>  [ 'shape' => 'EipAddress', ],
            ],
        ],
        'CreateVpcEipResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcEipResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcEipRequestShape' => [
            'type' => 'structure',
            'members' => [
                'allocate' =>  [ 'shape' => 'AllocateEipAddress', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisassociateVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateVpcEipByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVpcEipsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcEipByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcEipsResultShape' => [
            'type' => 'structure',
            'members' => [
                'eipAddresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'EipAddress', ], ],
            ],
        ],
        'CreateVpcLBHttpListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcLBHttpListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpListener' =>  [ 'shape' => 'CreateLoadBalancerHTTPListener', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetLbHttpListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'slbid' => [ 'type' => 'string', 'locationName' => 'slbid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetLbHttpListenerResultShape' => [
            'type' => 'structure',
            'members' => [
                'httpListeners' => [ 'type' => 'list', 'member' => [ 'shape' => 'LbHttpListener', ], ],
            ],
        ],
        'GetLbHttpListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetLbHttpListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcLBHttpListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcLBHttpListenerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'netInterface' =>  [ 'shape' => 'NetInterfaceInfo', ],
            ],
        ],
        'DeleteVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcNetworkInterfaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcNetworkInterfaceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AttachVpcNetworkInterfaceByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcNetworkInterfacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vmId' => [ 'type' => 'string', 'locationName' => 'vmId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DetachVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DetachVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'attach' =>  [ 'shape' => 'AttachNetInterface', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AttachVpcNetworkInterfaceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVpcNetworkInterfaceByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcNetworkInterfaceByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcNetworkInterfaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateVpcNetworkInterfaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'netInterface' =>  [ 'shape' => 'CreateNetInterface', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DetachVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'detach' =>  [ 'shape' => 'DetachNetInterface', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcNetworkInterfacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'netInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetInterfaceInfo', ], ],
            ],
        ],
        'GetVpcNetworkInterfaceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcNetworkInterfacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcNetworkInterfacesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSecurityGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupInfo', ], ],
            ],
        ],
        'CreateSecurityGroupsRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sgRule' =>  [ 'shape' => 'CreateSgRule', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateSecurityGroupsRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSecurityGroupsRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcSecurityGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroup' =>  [ 'shape' => 'CreateSecurityGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcSecurityGroupByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'securityGroup' =>  [ 'shape' => 'SecurityGroupDetail', ],
            ],
        ],
        'CreateVpcSecurityGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcSecurityGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecurityGroupsRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcSecurityGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcSecurityGroupByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSecurityGroupByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcSecurityGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteSecurityGroupsRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSecurityGroupByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSecurityGroupByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSecurityGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSecurityGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcSecurityGroupByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSecurityGroupsRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'DeleteSecurityGroupsRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'fromPort' => [ 'type' => 'string', 'locationName' => 'fromPort', ],
                'toPort' => [ 'type' => 'string', 'locationName' => 'toPort', ],
                'nicType' => [ 'type' => 'string', 'locationName' => 'nicType', ],
                'policy' => [ 'type' => 'string', 'locationName' => 'policy', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'cidrIp' => [ 'type' => 'string', 'locationName' => 'cidrIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSecurityGroupByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSlbByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopSlbResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopSlbListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopSlbResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSlbByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSlbByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSlbByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSlbByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'slb' =>  [ 'shape' => 'SlbInfoDetail', ],
            ],
        ],
        'StartSlbListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopSlbListenerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSlbsListenerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcSlbsResultShape' => [
            'type' => 'structure',
            'members' => [
                'slbs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlbInfo', ], ],
            ],
        ],
        'StartSlbResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopSlbListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteSlbsListenerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSlbsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSlbsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartSlbResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartSlbRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSlbsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopSlbRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSlbByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcSlbByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartSlbListenerResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcSlbResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcSlbRequestShape' => [
            'type' => 'structure',
            'members' => [
                'slb' =>  [ 'shape' => 'SlbInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcSlbResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcSlbResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartSlbListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteSlbsListenerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'listenerPort' => [ 'type' => 'integer', 'locationName' => 'listenerPort', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSubnetByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcSubnetByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSubnetByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcSubnetResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVpcSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetDesInfo', ], ],
            ],
        ],
        'DeleteVpcSubnetByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcSubnetByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'SubnetDesInfo', ],
            ],
        ],
        'DeleteVpcSubnetByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateVpcSubnetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcSubnetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVpcSubnetByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateVpcSubnetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subnet' =>  [ 'shape' => 'CreateSubnet', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'VpcInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteVpcByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'CreateVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteVpcByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetVpcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcListInfo', ], ],
            ],
        ],
        'DeleteVpcByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVpcByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'vpc' =>  [ 'shape' => 'VpcInfoDetail', ],
            ],
        ],
        'GetVserverGroupsByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'vserverGroup' =>  [ 'shape' => 'VserverGroupDetail', ],
            ],
        ],
        'CreateVpcVServerGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'vserverGroup' =>  [ 'shape' => 'CreateVserverGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteVserverGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteVserverGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetVpcVServerGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'slbid' => [ 'type' => 'string', 'locationName' => 'slbid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteVserverGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcVServerGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVpcVServerGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateVpcVServerGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateVpcVServerGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetVserverGroupsByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetVpcVServerGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'vserverGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'VserverGroupInfo', ], ],
            ],
        ],
        'CreateVpcVServerGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'ResourceTFInfo', ],
            ],
        ],
        'GetVserverGroupsByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetVserverGroupsByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
