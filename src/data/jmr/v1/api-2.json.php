<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jmr',
        'protocol' => 'json',
//        'serviceFullName' => 'jmr',
//        'serviceId' => 'jmr',
    ],
    'operations' => [
        'CreateClusterInNewNetwork' => [
            'name' => 'CreateClusterInNewNetwork',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster:create',
            ],
            'input' => [ 'shape' => 'CreateClusterInNewNetworkRequestShape', ],
            'output' => [ 'shape' => 'CreateClusterInNewNetworkResponseShape', ],
        ],
        'ShowClusterDetails' => [
            'name' => 'ShowClusterDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/detail',
            ],
            'input' => [ 'shape' => 'ShowClusterDetailsRequestShape', ],
            'output' => [ 'shape' => 'ShowClusterDetailsResponseShape', ],
        ],
        'ReleaseCluster' => [
            'name' => 'ReleaseCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster/{id}:release',
            ],
            'input' => [ 'shape' => 'ReleaseClusterRequestShape', ],
            'output' => [ 'shape' => 'ReleaseClusterResponseShape', ],
        ],
        'GetKey' => [
            'name' => 'GetKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/key',
            ],
            'input' => [ 'shape' => 'GetKeyRequestShape', ],
            'output' => [ 'shape' => 'GetKeyResponseShape', ],
        ],
        'GetPropertyValue' => [
            'name' => 'GetPropertyValue',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/softwareStack',
            ],
            'input' => [ 'shape' => 'GetPropertyValueRequestShape', ],
            'output' => [ 'shape' => 'GetPropertyValueResponseShape', ],
        ],
        'GetHardwareStack' => [
            'name' => 'GetHardwareStack',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/hardwareStack',
            ],
            'input' => [ 'shape' => 'GetHardwareStackRequestShape', ],
            'output' => [ 'shape' => 'GetHardwareStackResponseShape', ],
        ],
        'GetInstanceList' => [
            'name' => 'GetInstanceList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'GetInstanceListRequestShape', ],
            'output' => [ 'shape' => 'GetInstanceListResponseShape', ],
        ],
        'IdataCluster' => [
            'name' => 'IdataCluster',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/idata',
            ],
            'input' => [ 'shape' => 'IdataClusterRequestShape', ],
            'output' => [ 'shape' => 'IdataClusterResponseShape', ],
        ],
        'GetSoftwareInfo' => [
            'name' => 'GetSoftwareInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/softwareInfo',
            ],
            'input' => [ 'shape' => 'GetSoftwareInfoRequestShape', ],
            'output' => [ 'shape' => 'GetSoftwareInfoResponseShape', ],
        ],
        'GetSoftwareAndVersionInfo' => [
            'name' => 'GetSoftwareAndVersionInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/softwareInfo/v2',
            ],
            'input' => [ 'shape' => 'GetSoftwareAndVersionInfoRequestShape', ],
            'output' => [ 'shape' => 'GetSoftwareAndVersionInfoResponseShape', ],
        ],
        'GetJmrVersionList' => [
            'name' => 'GetJmrVersionList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jmrVersions',
            ],
            'input' => [ 'shape' => 'GetJmrVersionListRequestShape', ],
            'output' => [ 'shape' => 'GetJmrVersionListResponseShape', ],
        ],
        'CalculateClusterPrice' => [
            'name' => 'CalculateClusterPrice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster:calculate',
            ],
            'input' => [ 'shape' => 'CalculateClusterPriceRequestShape', ],
            'output' => [ 'shape' => 'CalculateClusterPriceResponseShape', ],
        ],
        'GetAvaliableNum' => [
            'name' => 'GetAvaliableNum',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/avaliableNum',
            ],
            'input' => [ 'shape' => 'GetAvaliableNumRequestShape', ],
            'output' => [ 'shape' => 'GetAvaliableNumResponseShape', ],
        ],
        'QueryServerQuota' => [
            'name' => 'QueryServerQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/serverQuota:query',
            ],
            'input' => [ 'shape' => 'QueryServerQuotaRequestShape', ],
            'output' => [ 'shape' => 'QueryServerQuotaResponseShape', ],
        ],
        'QueryVpcs' => [
            'name' => 'QueryVpcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcs:query',
            ],
            'input' => [ 'shape' => 'QueryVpcsRequestShape', ],
            'output' => [ 'shape' => 'QueryVpcsResponseShape', ],
        ],
        'QueryVpcSubnets' => [
            'name' => 'QueryVpcSubnets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/vpcSubnets/{vpcId}:query',
            ],
            'input' => [ 'shape' => 'QueryVpcSubnetsRequestShape', ],
            'output' => [ 'shape' => 'QueryVpcSubnetsResponseShape', ],
        ],
        'DeleteCluster' => [
            'name' => 'DeleteCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster/{recordId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteClusterRequestShape', ],
            'output' => [ 'shape' => 'DeleteClusterResponseShape', ],
        ],
        'QueryFloatingIp' => [
            'name' => 'QueryFloatingIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/floatingIp:query',
            ],
            'input' => [ 'shape' => 'QueryFloatingIpRequestShape', ],
            'output' => [ 'shape' => 'QueryFloatingIpResponseShape', ],
        ],
        'ValidateUser' => [
            'name' => 'ValidateUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/userName:validate',
            ],
            'input' => [ 'shape' => 'ValidateUserRequestShape', ],
            'output' => [ 'shape' => 'ValidateUserResponseShape', ],
        ],
        'RenewBillingOrder' => [
            'name' => 'RenewBillingOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/BillingOrder:renew',
            ],
            'input' => [ 'shape' => 'RenewBillingOrderRequestShape', ],
            'output' => [ 'shape' => 'RenewBillingOrderResponseShape', ],
        ],
        'ValidateName' => [
            'name' => 'ValidateName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster/{name}:validate',
            ],
            'input' => [ 'shape' => 'ValidateNameRequestShape', ],
            'output' => [ 'shape' => 'ValidateNameResponseShape', ],
        ],
        'GetAccessKeys' => [
            'name' => 'GetAccessKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accessKeys',
            ],
            'input' => [ 'shape' => 'GetAccessKeysRequestShape', ],
            'output' => [ 'shape' => 'GetAccessKeysResponseShape', ],
        ],
        'ClusterExpansion' => [
            'name' => 'ClusterExpansion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster:expansion',
            ],
            'input' => [ 'shape' => 'ClusterExpansionRequestShape', ],
            'output' => [ 'shape' => 'ClusterExpansionResponseShape', ],
        ],
        'CalculateExpansionPrice' => [
            'name' => 'CalculateExpansionPrice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cluster/expansionPrice:calculate',
            ],
            'input' => [ 'shape' => 'CalculateExpansionPriceRequestShape', ],
            'output' => [ 'shape' => 'CalculateExpansionPriceResponseShape', ],
        ],
        'GetClusterDetailInfo' => [
            'name' => 'GetClusterDetailInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusterInfo/{clusterId}:detail',
            ],
            'input' => [ 'shape' => 'GetClusterDetailInfoRequestShape', ],
            'output' => [ 'shape' => 'GetClusterDetailInfoResponseShape', ],
        ],
        'MonitorServiceList' => [
            'name' => 'MonitorServiceList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/monitorServices',
            ],
            'input' => [ 'shape' => 'MonitorServiceListRequestShape', ],
            'output' => [ 'shape' => 'MonitorServiceListResponseShape', ],
        ],
        'MonitorDetails' => [
            'name' => 'MonitorDetails',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/monitorDetails',
            ],
            'input' => [ 'shape' => 'MonitorDetailsRequestShape', ],
            'output' => [ 'shape' => 'MonitorDetailsResponseShape', ],
        ],
        'GetFirstServerVncUrl' => [
            'name' => 'GetFirstServerVncUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/firstServerVncUrl',
            ],
            'input' => [ 'shape' => 'GetFirstServerVncUrlRequestShape', ],
            'output' => [ 'shape' => 'GetFirstServerVncUrlResponseShape', ],
        ],
        'GetJobTypeList' => [
            'name' => 'GetJobTypeList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobType:list',
            ],
            'input' => [ 'shape' => 'GetJobTypeListRequestShape', ],
            'output' => [ 'shape' => 'GetJobTypeListResponseShape', ],
        ],
        'GetJobList' => [
            'name' => 'GetJobList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobView:list',
            ],
            'input' => [ 'shape' => 'GetJobListRequestShape', ],
            'output' => [ 'shape' => 'GetJobListResponseShape', ],
        ],
        'IsValidJobName' => [
            'name' => 'IsValidJobName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobName:Validate',
            ],
            'input' => [ 'shape' => 'IsValidJobNameRequestShape', ],
            'output' => [ 'shape' => 'IsValidJobNameResponseShape', ],
        ],
        'CreateJob' => [
            'name' => 'CreateJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job:create',
            ],
            'input' => [ 'shape' => 'CreateJobRequestShape', ],
            'output' => [ 'shape' => 'CreateJobResponseShape', ],
        ],
        'ModifyJob' => [
            'name' => 'ModifyJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job:modify',
            ],
            'input' => [ 'shape' => 'ModifyJobRequestShape', ],
            'output' => [ 'shape' => 'ModifyJobResponseShape', ],
        ],
        'DeleteJob' => [
            'name' => 'DeleteJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job/{jobId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobResponseShape', ],
        ],
        'CreateAndExcuteJob' => [
            'name' => 'CreateAndExcuteJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job:createAndExecute',
            ],
            'input' => [ 'shape' => 'CreateAndExcuteJobRequestShape', ],
            'output' => [ 'shape' => 'CreateAndExcuteJobResponseShape', ],
        ],
        'ExecuteJob' => [
            'name' => 'ExecuteJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job:execute',
            ],
            'input' => [ 'shape' => 'ExecuteJobRequestShape', ],
            'output' => [ 'shape' => 'ExecuteJobResponseShape', ],
        ],
        'ShowJobDetails' => [
            'name' => 'ShowJobDetails',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/{jobId}:detail',
            ],
            'input' => [ 'shape' => 'ShowJobDetailsRequestShape', ],
            'output' => [ 'shape' => 'ShowJobDetailsResponseShape', ],
        ],
        'GetTaskList' => [
            'name' => 'GetTaskList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/{jobId}/task:list',
            ],
            'input' => [ 'shape' => 'GetTaskListRequestShape', ],
            'output' => [ 'shape' => 'GetTaskListResponseShape', ],
        ],
        'DeleteHdfsFile' => [
            'name' => 'DeleteHdfsFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/hdfsFile:delete',
            ],
            'input' => [ 'shape' => 'DeleteHdfsFileRequestShape', ],
            'output' => [ 'shape' => 'DeleteHdfsFileResponseShape', ],
        ],
        'GetClusterJobCount' => [
            'name' => 'GetClusterJobCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusterJob/{clusterId}:count',
            ],
            'input' => [ 'shape' => 'GetClusterJobCountRequestShape', ],
            'output' => [ 'shape' => 'GetClusterJobCountResponseShape', ],
        ],
        'GetClusterCronJobCount' => [
            'name' => 'GetClusterCronJobCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/clusterCronJob/{clusterId}:count',
            ],
            'input' => [ 'shape' => 'GetClusterCronJobCountRequestShape', ],
            'output' => [ 'shape' => 'GetClusterCronJobCountResponseShape', ],
        ],
        'GetCronJobList' => [
            'name' => 'GetCronJobList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob:list',
            ],
            'input' => [ 'shape' => 'GetCronJobListRequestShape', ],
            'output' => [ 'shape' => 'GetCronJobListResponseShape', ],
        ],
        'IsValidPlanName' => [
            'name' => 'IsValidPlanName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/planName:valid',
            ],
            'input' => [ 'shape' => 'IsValidPlanNameRequestShape', ],
            'output' => [ 'shape' => 'IsValidPlanNameResponseShape', ],
        ],
        'CreateCronJob' => [
            'name' => 'CreateCronJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob:create',
            ],
            'input' => [ 'shape' => 'CreateCronJobRequestShape', ],
            'output' => [ 'shape' => 'CreateCronJobResponseShape', ],
        ],
        'GetCronJobDetail' => [
            'name' => 'GetCronJobDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob:detail',
            ],
            'input' => [ 'shape' => 'GetCronJobDetailRequestShape', ],
            'output' => [ 'shape' => 'GetCronJobDetailResponseShape', ],
        ],
        'ModifyCronJob' => [
            'name' => 'ModifyCronJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob:modify',
            ],
            'input' => [ 'shape' => 'ModifyCronJobRequestShape', ],
            'output' => [ 'shape' => 'ModifyCronJobResponseShape', ],
        ],
        'PauseCronJob' => [
            'name' => 'PauseCronJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob/{planId}:pause',
            ],
            'input' => [ 'shape' => 'PauseCronJobRequestShape', ],
            'output' => [ 'shape' => 'PauseCronJobResponseShape', ],
        ],
        'ResumeCronJob' => [
            'name' => 'ResumeCronJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob/{planId}:resume',
            ],
            'input' => [ 'shape' => 'ResumeCronJobRequestShape', ],
            'output' => [ 'shape' => 'ResumeCronJobResponseShape', ],
        ],
        'DeleteCronJob' => [
            'name' => 'DeleteCronJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob/{planId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteCronJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteCronJobResponseShape', ],
        ],
        'GetCronJobTaskList' => [
            'name' => 'GetCronJobTaskList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJobTask/plan/{planId}:list',
            ],
            'input' => [ 'shape' => 'GetCronJobTaskListRequestShape', ],
            'output' => [ 'shape' => 'GetCronJobTaskListResponseShape', ],
        ],
        'GetCronJobTaskListByJobId' => [
            'name' => 'GetCronJobTaskListByJobId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJobTask/job/{jobId}:list',
            ],
            'input' => [ 'shape' => 'GetCronJobTaskListByJobIdRequestShape', ],
            'output' => [ 'shape' => 'GetCronJobTaskListByJobIdResponseShape', ],
        ],
        'RunCronJobOnce' => [
            'name' => 'RunCronJobOnce',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cronJob/{planId}:runOnce',
            ],
            'input' => [ 'shape' => 'RunCronJobOnceRequestShape', ],
            'output' => [ 'shape' => 'RunCronJobOnceResponseShape', ],
        ],
        'GetLastCronJobTask' => [
            'name' => 'GetLastCronJobTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/lastCronJobTask/{jobId}',
            ],
            'input' => [ 'shape' => 'GetLastCronJobTaskRequestShape', ],
            'output' => [ 'shape' => 'GetLastCronJobTaskResponseShape', ],
        ],
        'QueryExecutingJobList' => [
            'name' => 'QueryExecutingJobList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/executingJob:list',
            ],
            'input' => [ 'shape' => 'QueryExecutingJobListRequestShape', ],
            'output' => [ 'shape' => 'QueryExecutingJobListResponseShape', ],
        ],
        'GetWorkFlowList' => [
            'name' => 'GetWorkFlowList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/{workflowName}:list',
            ],
            'input' => [ 'shape' => 'GetWorkFlowListRequestShape', ],
            'output' => [ 'shape' => 'GetWorkFlowListResponseShape', ],
        ],
        'SaveWorkFlow' => [
            'name' => 'SaveWorkFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/workflow:save',
            ],
            'input' => [ 'shape' => 'SaveWorkFlowRequestShape', ],
            'output' => [ 'shape' => 'SaveWorkFlowResponseShape', ],
        ],
        'DeleteWorkFlow' => [
            'name' => 'DeleteWorkFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/{workflowId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteWorkFlowRequestShape', ],
            'output' => [ 'shape' => 'DeleteWorkFlowResponseShape', ],
        ],
        'RunWorkFlow' => [
            'name' => 'RunWorkFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/{workflowId}:run',
            ],
            'input' => [ 'shape' => 'RunWorkFlowRequestShape', ],
            'output' => [ 'shape' => 'RunWorkFlowResponseShape', ],
        ],
        'WfInstanceDetail' => [
            'name' => 'WfInstanceDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wfInstance:detail',
            ],
            'input' => [ 'shape' => 'WfInstanceDetailRequestShape', ],
            'output' => [ 'shape' => 'WfInstanceDetailResponseShape', ],
        ],
        'GetWorkFlowTrackerList' => [
            'name' => 'GetWorkFlowTrackerList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/workFlowTracker:list',
            ],
            'input' => [ 'shape' => 'GetWorkFlowTrackerListRequestShape', ],
            'output' => [ 'shape' => 'GetWorkFlowTrackerListResponseShape', ],
        ],
        'DeleteWorkFlowTracker' => [
            'name' => 'DeleteWorkFlowTracker',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tracker/{trackerId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteWorkFlowTrackerRequestShape', ],
            'output' => [ 'shape' => 'DeleteWorkFlowTrackerResponseShape', ],
        ],
    ],
    'shapes' => [
        'AppModel' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'appSecret' => [ 'type' => 'string', 'locationName' => 'appSecret', ],
            ],
        ],
        'AuditLog' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'double', 'locationName' => 'id', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'objectType' => [ 'type' => 'string', 'locationName' => 'objectType', ],
                'objectId' => [ 'type' => 'double', 'locationName' => 'objectId', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'eventTime' => [ 'type' => 'data-time', 'locationName' => 'eventTime', ],
                'createTime' => [ 'type' => 'data-time', 'locationName' => 'createTime', ],
                'modifyTime' => [ 'type' => 'string', 'locationName' => 'modifyTime', ],
            ],
        ],
        'AuditLogData' => [
            'type' => 'structure',
            'members' => [
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
                'auditLogList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditLog', ], ],
            ],
        ],
        'AvailableNumData' => [
            'type' => 'structure',
            'members' => [
                'serverNum' => [ 'type' => 'integer', 'locationName' => 'serverNum', ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
            ],
        ],
        'ClusterDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'materNum' => [ 'type' => 'integer', 'locationName' => 'materNum', ],
                'masterCore' => [ 'type' => 'integer', 'locationName' => 'masterCore', ],
                'masterMemory' => [ 'type' => 'integer', 'locationName' => 'masterMemory', ],
                'masterDiskType' => [ 'type' => 'string', 'locationName' => 'masterDiskType', ],
                'masterDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterDiskVolume', ],
                'masterInstanceType' => [ 'type' => 'string', 'locationName' => 'masterInstanceType', ],
                'masterInstanceInfo' => [ 'type' => 'string', 'locationName' => 'masterInstanceInfo', ],
                'slaveNum' => [ 'type' => 'integer', 'locationName' => 'slaveNum', ],
                'slaveCore' => [ 'type' => 'integer', 'locationName' => 'slaveCore', ],
                'slaveMemory' => [ 'type' => 'integer', 'locationName' => 'slaveMemory', ],
                'slaveDiskType' => [ 'type' => 'string', 'locationName' => 'slaveDiskType', ],
                'slaveDiskVolume' => [ 'type' => 'integer', 'locationName' => 'slaveDiskVolume', ],
                'slaveInstanceType' => [ 'type' => 'string', 'locationName' => 'slaveInstanceType', ],
                'slaveInstanceInfo' => [ 'type' => 'string', 'locationName' => 'slaveInstanceInfo', ],
            ],
        ],
        'HardwareInfo' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'firewall' => [ 'type' => 'string', 'locationName' => 'firewall', ],
                'nodeCoreNum' => [ 'type' => 'integer', 'locationName' => 'nodeCoreNum', ],
                'nodeMemoryNum' => [ 'type' => 'integer', 'locationName' => 'nodeMemoryNum', ],
                'nodeSystemInfo' => [ 'type' => 'string', 'locationName' => 'nodeSystemInfo', ],
                'nodeDiskType' => [ 'type' => 'string', 'locationName' => 'nodeDiskType', ],
                'nodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'nodeDiskVolume', ],
                'serverId' => [ 'type' => 'string', 'locationName' => 'serverId', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceInfo' => [ 'type' => 'string', 'locationName' => 'instanceInfo', ],
            ],
        ],
        'ClusterDetailModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterPrimaryId' => [ 'type' => 'int64', 'locationName' => 'clusterPrimaryId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'payPrice' => [ 'type' => 'string', 'locationName' => 'payPrice', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'hardware' => [ 'type' => 'list', 'member' => [ 'shape' => 'HardwareInfo', ], ],
                'softwareStack' => [ 'type' => 'object', 'locationName' => 'softwareStack', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'vpcSubnetName' => [ 'type' => 'string', 'locationName' => 'vpcSubnetName', ],
                'bandwidthOut' => [ 'type' => 'integer', 'locationName' => 'bandwidthOut', ],
            ],
        ],
        'ClusterExpansion' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'expansionNum' => [ 'type' => 'integer', 'locationName' => 'expansionNum', ],
            ],
        ],
        'ClusterListViewModel' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'masterNodeInfo' => [ 'type' => 'string', 'locationName' => 'masterNodeInfo', ],
                'masterNodeDiskType' => [ 'type' => 'string', 'locationName' => 'masterNodeDiskType', ],
                'masterNodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterNodeDiskVolume', ],
                'masterNodeNumber' => [ 'type' => 'integer', 'locationName' => 'masterNodeNumber', ],
                'masterInstanceType' => [ 'type' => 'string', 'locationName' => 'masterInstanceType', ],
                'slaveNodeInfo' => [ 'type' => 'string', 'locationName' => 'slaveNodeInfo', ],
                'slaveNodeDiskType' => [ 'type' => 'string', 'locationName' => 'slaveNodeDiskType', ],
                'slaveNodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'slaveNodeDiskVolume', ],
                'slaveNodeNumber' => [ 'type' => 'integer', 'locationName' => 'slaveNodeNumber', ],
                'coreInstanceType' => [ 'type' => 'string', 'locationName' => 'coreInstanceType', ],
                'bandwidthOut' => [ 'type' => 'integer', 'locationName' => 'bandwidthOut', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
            ],
        ],
        'ClusterModel' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'masterNodeNumber' => [ 'type' => 'integer', 'locationName' => 'masterNodeNumber', ],
                'masterNodeDiskType' => [ 'type' => 'string', 'locationName' => 'masterNodeDiskType', ],
                'masterNodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'masterNodeDiskVolume', ],
                'masterInstanceType' => [ 'type' => 'string', 'locationName' => 'masterInstanceType', ],
                'slaveNodeNumber' => [ 'type' => 'integer', 'locationName' => 'slaveNodeNumber', ],
                'slaveNodeDiskType' => [ 'type' => 'string', 'locationName' => 'slaveNodeDiskType', ],
                'slaveNodeDiskVolume' => [ 'type' => 'integer', 'locationName' => 'slaveNodeDiskVolume', ],
                'coreInstanceType' => [ 'type' => 'string', 'locationName' => 'coreInstanceType', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'softwareList' => [ 'type' => 'string', 'locationName' => 'softwareList', ],
                'jssFlag' => [ 'type' => 'boolean', 'locationName' => 'jssFlag', ],
                'haFlag' => [ 'type' => 'boolean', 'locationName' => 'haFlag', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcSubnetId' => [ 'type' => 'string', 'locationName' => 'vpcSubnetId', ],
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
            ],
        ],
        'CronJobData' => [
            'type' => 'structure',
            'members' => [
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
                'cronJobs' => [ 'type' => 'list', 'member' => [ 'shape' => 'JmrPlanViewModel', ], ],
            ],
        ],
        'JmrPlanViewModel' => [
            'type' => 'structure',
            'members' => [
                'planId' => [ 'type' => 'double', 'locationName' => 'planId', ],
                'planName' => [ 'type' => 'string', 'locationName' => 'planName', ],
                'planType' => [ 'type' => 'string', 'locationName' => 'planType', ],
                'planStatus' => [ 'type' => 'string', 'locationName' => 'planStatus', ],
                'failurePolicy' => [ 'type' => 'string', 'locationName' => 'failurePolicy', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'jobGroup' => [ 'type' => 'string', 'locationName' => 'jobGroup', ],
                'jobTrigger' => [ 'type' => 'string', 'locationName' => 'jobTrigger', ],
                'cronExpression' => [ 'type' => 'string', 'locationName' => 'cronExpression', ],
                'isSync' => [ 'type' => 'boolean', 'locationName' => 'isSync', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jobIds' => [ 'type' => 'string', 'locationName' => 'jobIds', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'volumeType' => [ 'type' => 'string', 'locationName' => 'volumeType', ],
                'limit' => [ 'type' => 'string', 'locationName' => 'limit', ],
            ],
        ],
        'EmrWorkflow' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'double', 'locationName' => 'id', ],
                'workflowId' => [ 'type' => 'string', 'locationName' => 'workflowId', ],
                'workflowName' => [ 'type' => 'string', 'locationName' => 'workflowName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'userpin' => [ 'type' => 'string', 'locationName' => 'userpin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'modifyTime' => [ 'type' => 'string', 'locationName' => 'modifyTime', ],
                'isSelfDependence' => [ 'type' => 'boolean', 'locationName' => 'isSelfDependence', ],
                'taskScheduleType' => [ 'type' => 'integer', 'locationName' => 'taskScheduleType', ],
                'isSendMsg' => [ 'type' => 'boolean', 'locationName' => 'isSendMsg', ],
            ],
        ],
        'GetJobListData' => [
            'type' => 'structure',
            'members' => [
                'jmrJobViewModelList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JmrJobViewModel', ], ],
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
            ],
        ],
        'JmrJobViewModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'jobGroup' => [ 'type' => 'string', 'locationName' => 'jobGroup', ],
                'jobTrigger' => [ 'type' => 'string', 'locationName' => 'jobTrigger', ],
                'cronExpression' => [ 'type' => 'string', 'locationName' => 'cronExpression', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'isSelfDependence' => [ 'type' => 'integer', 'locationName' => 'isSelfDependence', ],
                'isVirtualTask' => [ 'type' => 'integer', 'locationName' => 'isVirtualTask', ],
                'taskScheduleType' => [ 'type' => 'integer', 'locationName' => 'taskScheduleType', ],
                'retryTimes' => [ 'type' => 'integer', 'locationName' => 'retryTimes', ],
                'isSendMsg' => [ 'type' => 'boolean', 'locationName' => 'isSendMsg', ],
                'userpin' => [ 'type' => 'string', 'locationName' => 'userpin', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'clusterStatus' => [ 'type' => 'string', 'locationName' => 'clusterStatus', ],
            ],
        ],
        'Scale' => [
            'type' => 'structure',
            'members' => [
                'core' => [ 'type' => 'integer', 'locationName' => 'core', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
            ],
        ],
        'HardWareStackData' => [
            'type' => 'structure',
            'members' => [
                'disk' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
                'scale' => [ 'type' => 'list', 'member' => [ 'shape' => 'Scale', ], ],
            ],
        ],
        'InstanceList' => [
            'type' => 'structure',
            'members' => [
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'Options', ], ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'Options' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'JmrTaskViewModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'date', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'date', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'userpin' => [ 'type' => 'string', 'locationName' => 'userpin', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
                'workflowId' => [ 'type' => 'string', 'locationName' => 'workflowId', ],
                'workflowInstanceId' => [ 'type' => 'string', 'locationName' => 'workflowInstanceId', ],
            ],
        ],
        'JobViewListData' => [
            'type' => 'structure',
            'members' => [
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
                'jobList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JmrJobViewModel', ], ],
            ],
        ],
        'Rect' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'retryTimes' => [ 'type' => 'integer', 'locationName' => 'retryTimes', ],
                'intervalTimes' => [ 'type' => 'integer', 'locationName' => 'intervalTimes', ],
                'x' => [ 'type' => 'double', 'locationName' => 'x', ],
                'y' => [ 'type' => 'double', 'locationName' => 'y', ],
                'instanceStatus' => [ 'type' => 'integer', 'locationName' => 'instanceStatus', ],
                'instanceId' => [ 'type' => 'integer', 'locationName' => 'instanceId', ],
            ],
        ],
        'Message' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
                'rect' => [ 'type' => 'list', 'member' => [ 'shape' => 'Rect', ], ],
                'path' => [ 'type' => 'list', 'member' => [ 'shape' => 'Path', ], ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pipeline' => [ 'type' => 'string', 'locationName' => 'pipeline', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'sourceParameterList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'target' => [ 'type' => 'string', 'locationName' => 'target', ],
                'targetParameterList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'Path' => [
            'type' => 'structure',
            'members' => [
                'father' => [ 'type' => 'integer', 'locationName' => 'father', ],
                'child' => [ 'type' => 'integer', 'locationName' => 'child', ],
            ],
        ],
        'MetricDetail' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Metrics' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'aggrPeriod' => [ 'type' => 'integer', 'locationName' => 'aggrPeriod', ],
                'metricShow' => [ 'type' => 'string', 'locationName' => 'metricShow', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'aggrType' => [ 'type' => 'string', 'locationName' => 'aggrType', ],
                'dps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
            ],
        ],
        'NodeInfoData' => [
            'type' => 'structure',
            'members' => [
                'detail' =>  [ 'shape' => 'MetricDetail', ],
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metrics', ], ],
            ],
        ],
        'SchedulerWorkflowTracker' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workflowId' => [ 'type' => 'integer', 'locationName' => 'workflowId', ],
                'workflowName' => [ 'type' => 'string', 'locationName' => 'workflowName', ],
                'workflowStartTime' => [ 'type' => 'string', 'locationName' => 'workflowStartTime', ],
                'workflowEndTime' => [ 'type' => 'string', 'locationName' => 'workflowEndTime', ],
                'workflowStatus' => [ 'type' => 'integer', 'locationName' => 'workflowStatus', ],
                'isExecuteNotify' => [ 'type' => 'double', 'locationName' => 'isExecuteNotify', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'workflowDescription' => [ 'type' => 'string', 'locationName' => 'workflowDescription', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
            ],
        ],
        'SelectParams' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'SoftStack' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'software' => [ 'type' => 'string', 'locationName' => 'software', ],
            ],
        ],
        'TaskPlanViewListData' => [
            'type' => 'structure',
            'members' => [
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JmrPlanViewModel', ], ],
            ],
        ],
        'TaskViewListData' => [
            'type' => 'structure',
            'members' => [
                'totalNum' => [ 'type' => 'integer', 'locationName' => 'totalNum', ],
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JmrTaskViewModel', ], ],
            ],
        ],
        'UserAccessKey' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'accessKeySecret' => [ 'type' => 'string', 'locationName' => 'accessKeySecret', ],
                'expire' => [ 'type' => 'date', 'locationName' => 'expire', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'modifier' => [ 'type' => 'string', 'locationName' => 'modifier', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
            ],
        ],
        'Idata' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'clusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'IdataCluster', ], ],
            ],
        ],
        'IdataCluster' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'jdbcUrl' => [ 'type' => 'string', 'locationName' => 'jdbcUrl', ],
                'jdbcSpark' => [ 'type' => 'string', 'locationName' => 'jdbcSpark', ],
                'zepplinUrl' => [ 'type' => 'string', 'locationName' => 'zepplinUrl', ],
            ],
        ],
        'GetSoftwareAndVersionInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ver' => [ 'type' => '', 'locationName' => 'ver', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryFloatingIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'recordId' =>  [ 'shape' => 'Cluster', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetSoftwareInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CalculateClusterPriceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CalculateClusterPriceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MonitorServiceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MonitorServiceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetClusterDetailInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'QueryVpcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryVpcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAvaliableNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAvaliableNumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IdataClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'Idata', ],
            ],
        ],
        'IdataClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ShowClusterDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ValidateUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ClusterExpansionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'expansionNum' => [ 'type' => '', 'locationName' => 'expansionNum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryServerQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ClusterExpansionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ClusterExpansionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'QueryServerQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'AvailableNumData', ],
            ],
        ],
        'GetInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetHardwareStackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetHardwareStackResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterInNewNetworkResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SoftwareInfoAndVersion' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'flag' => [ 'type' => 'boolean', 'locationName' => 'flag', ],
            ],
        ],
        'GetAccessKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'UserAccessKey', ],
            ],
        ],
        'MonitorServiceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetAccessKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAccessKeysResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceList', ], ],
            ],
        ],
        'CreateClusterInNewNetworkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateClusterInNewNetworkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetFirstServerVncUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetFirstServerVncUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MonitorDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MonitorDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetHardwareStackResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'HardWareStackData', ],
            ],
        ],
        'GetClusterDetailInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetClusterDetailInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryServerQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryServerQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryVpcSubnetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'CalculateExpansionPriceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterExpansion' =>  [ 'shape' => 'ClusterExpansion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetAvaliableNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetHardwareStackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ShowClusterDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ShowClusterDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ValidateNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IdataClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IdataClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MonitorServiceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetFirstServerVncUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'MonitorDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'service' => [ 'type' => '', 'locationName' => 'service', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetSoftwareInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSoftwareInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetPropertyValueRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReleaseClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReleaseClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RenewBillingOrderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RenewBillingOrderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetInstanceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CalculateExpansionPriceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CalculateExpansionPriceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetClusterDetailInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ClusterDetailInfo', ],
            ],
        ],
        'DeleteClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'recordId' => [ 'type' => 'string', 'locationName' => 'recordId', ],
            ],
        ],
        'RenewBillingOrderResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryVpcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'AvailableNumData', ],
            ],
        ],
        'GetPropertyValueResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPropertyValueResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CalculateClusterPriceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterListViewModel' =>  [ 'shape' => 'ClusterListViewModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPropertyValueResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'SoftStack', ],
            ],
        ],
        'MonitorDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetAccessKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ShowClusterDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'ClusterDetailModel', ],
            ],
        ],
        'ValidateUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ValidateUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'AppModel', ],
            ],
        ],
        'QueryFloatingIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryFloatingIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSoftwareAndVersionInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSoftwareAndVersionInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryVpcSubnetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryVpcSubnetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ClusterExpansionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ReleaseClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CalculateClusterPriceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'integer', 'locationName' => 'data', ],
            ],
        ],
        'GetFirstServerVncUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ReleaseClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetJmrVersionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetSoftwareInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ver' => [ 'type' => '', 'locationName' => 'ver', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CalculateExpansionPriceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'double', 'locationName' => 'data', ],
            ],
        ],
        'GetJmrVersionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryVpcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RenewBillingOrderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'type' => [ 'type' => '', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetSoftwareAndVersionInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SoftwareInfoAndVersion', ], ],
            ],
        ],
        'GetJmrVersionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetJmrVersionListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateClusterInNewNetworkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterModel' =>  [ 'shape' => 'ClusterModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryFloatingIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'GetAvaliableNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'AvailableNumData', ],
            ],
        ],
        'QueryVpcSubnetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'AvailableNumData', ],
            ],
        ],
        'ModifyJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetTaskListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'TaskViewListData', ],
            ],
        ],
        'GetCronJobTaskListByJobIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'planId' => [ 'type' => '', 'locationName' => 'planId', ],
                'selectParams' => [ 'type' => '', 'locationName' => 'selectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'RunCronJobOnceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'TaskPlanViewListData', ],
            ],
        ],
        'IsValidJobNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IsValidJobNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'CreateJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecuteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'GetCronJobDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'selectParams' => [ 'type' => '', 'locationName' => 'selectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
            ],
        ],
        'GetJobTypeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetJobTypeListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetClusterJobCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetClusterJobCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCronJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
            ],
        ],
        'PauseCronJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'IsValidPlanNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'planId' => [ 'type' => '', 'locationName' => 'planId', ],
                'planName' => [ 'type' => '', 'locationName' => 'planName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCronJobListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'TaskPlanViewListData', ],
            ],
        ],
        'IsValidJobNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryExecutingJobListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryExecutingJobListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAndExcuteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'IsValidPlanNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetClusterCronJobCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'GetCronJobDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'JobViewListData', ],
            ],
        ],
        'GetCronJobTaskListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'selectParams' => [ 'type' => '', 'locationName' => 'selectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'planId' => [ 'type' => 'long', 'locationName' => 'planId', ],
            ],
        ],
        'GetCronJobTaskListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateCronJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCronJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetJobTypeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTaskListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'selectParams' => [ 'type' => '', 'locationName' => 'selectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'RunCronJobOnceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'planId' => [ 'type' => 'double', 'locationName' => 'planId', ],
            ],
        ],
        'GetClusterCronJobCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetClusterCronJobCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ShowJobDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'ModifyCronJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCronJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetClusterJobCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'CreateJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'IsValidJobNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrJobViewModel' =>  [ 'shape' => 'JmrJobViewModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetLastCronJobTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetLastCronJobTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryExecutingJobListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExecuteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecuteJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetJobTypeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResumeCronJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ResumeCronJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCronJobTaskListByJobIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetCronJobTaskListByJobIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCronJobTaskListByJobIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PauseCronJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PauseCronJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCronJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryExecutingJobListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'JmrPlanViewModel', ], ],
            ],
        ],
        'GetLastCronJobTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'DeleteHdfsFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCronJobDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCronJobDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ShowJobDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'JmrJobViewModel', ],
            ],
        ],
        'GetLastCronJobTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'planId' => [ 'type' => '', 'locationName' => 'planId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'ExecuteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrTaskViewModel' => [ 'type' => '', 'locationName' => 'jmrTaskViewModel', ],
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrJobViewModel' =>  [ 'shape' => 'JmrJobViewModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyCronJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetJobListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrJobViewModel' => [ 'type' => '', 'locationName' => 'jmrJobViewModel', ],
                'selectParams' => [ 'type' => '', 'locationName' => 'selectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'PauseCronJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
            ],
        ],
        'DeleteCronJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCronJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ShowJobDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ShowJobDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteHdfsFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResumeCronJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'planId' => [ 'type' => 'string', 'locationName' => 'planId', ],
            ],
        ],
        'CreateAndExcuteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrJobViewModel' =>  [ 'shape' => 'JmrJobViewModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCronJobTaskListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCronJobTaskListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCronJobListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrPlanViewModel' => [ 'type' => '', 'locationName' => 'jmrPlanViewModel', ],
                'selectParams' => [ 'type' => '', 'locationName' => 'selectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetJobListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetCronJobListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCronJobListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCronJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrPlanViewModel' => [ 'type' => '', 'locationName' => 'jmrPlanViewModel', ],
                'time' => [ 'type' => '', 'locationName' => 'time', ],
                'month' => [ 'type' => '', 'locationName' => 'month', ],
                'week' => [ 'type' => '', 'locationName' => 'week', ],
                'day' => [ 'type' => '', 'locationName' => 'day', ],
                'hour' => [ 'type' => '', 'locationName' => 'hour', ],
                'minute' => [ 'type' => '', 'locationName' => 'minute', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTaskListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaskListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteHdfsFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => '', 'locationName' => 'clusterId', ],
                'filePath' => [ 'type' => '', 'locationName' => 'filePath', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RunCronJobOnceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RunCronJobOnceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrJobViewModel' =>  [ 'shape' => 'JmrJobViewModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetClusterJobCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'integer', 'locationName' => 'data', ],
            ],
        ],
        'DeleteCronJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAndExcuteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAndExcuteJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetClusterCronJobCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'CronJobData', ],
            ],
        ],
        'ResumeCronJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'IsValidPlanNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IsValidPlanNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCronJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jmrPlanViewModel' => [ 'type' => '', 'locationName' => 'jmrPlanViewModel', ],
                'time' => [ 'type' => '', 'locationName' => 'time', ],
                'month' => [ 'type' => '', 'locationName' => 'month', ],
                'week' => [ 'type' => '', 'locationName' => 'week', ],
                'day' => [ 'type' => '', 'locationName' => 'day', ],
                'hour' => [ 'type' => '', 'locationName' => 'hour', ],
                'minute' => [ 'type' => '', 'locationName' => 'minute', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'GetJobListData', ],
            ],
        ],
        'RunWorkFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetWorkFlowTrackerListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWorkFlowTrackerListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWorkFlowTrackerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteWorkFlowTrackerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SaveWorkFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SaveWorkFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetWorkFlowListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'selectParams' =>  [ 'shape' => 'SelectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workflowName' => [ 'type' => 'string', 'locationName' => 'workflowName', ],
            ],
        ],
        'WfInstanceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'wfInstanceId' => [ 'type' => '', 'locationName' => 'wfInstanceId', ],
                'wfId' => [ 'type' => '', 'locationName' => 'wfId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RunWorkFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RunWorkFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWorkFlowTrackerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'trackerId' => [ 'type' => 'string', 'locationName' => 'trackerId', ],
            ],
        ],
        'SaveWorkFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'Message', ],
            ],
        ],
        'RunWorkFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workflowId' => [ 'type' => 'string', 'locationName' => 'workflowId', ],
            ],
        ],
        'DeleteWorkFlowTrackerResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteWorkFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteWorkFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetWorkFlowListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'GetWorkFlowTrackerListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'selectParams' =>  [ 'shape' => 'SelectParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'WfInstanceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' =>  [ 'shape' => 'Message', ],
            ],
        ],
        'SaveWorkFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workflow' =>  [ 'shape' => 'EmrWorkflow', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'WfInstanceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'Message', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetWorkFlowListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWorkFlowListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWorkFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workflowId' => [ 'type' => 'string', 'locationName' => 'workflowId', ],
            ],
        ],
        'DeleteWorkFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetWorkFlowTrackerListResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
    ],
];
