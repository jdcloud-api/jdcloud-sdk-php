<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'aifactory',
        'protocol' => 'json',
//        'serviceFullName' => 'aifactory',
//        'serviceId' => 'aifactory',
    ],
    'operations' => [
        'QueryGpuDropNodes' => [
            'name' => 'QueryGpuDropNodes',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGpuDropNodes',
            ],
            'input' => [ 'shape' => 'QueryGpuDropNodesRequestShape', ],
            'output' => [ 'shape' => 'QueryGpuDropNodesResponseShape', ],
        ],
        'AiOpsListPodDevMachines' => [
            'name' => 'AiOpsListPodDevMachines',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListPodDevMachines',
            ],
            'input' => [ 'shape' => 'AiOpsListPodDevMachinesRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListPodDevMachinesResponseShape', ],
        ],
        'AiOpsGetPodDevMachineDetail' => [
            'name' => 'AiOpsGetPodDevMachineDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetPodDevMachineDetail',
            ],
            'input' => [ 'shape' => 'AiOpsGetPodDevMachineDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetPodDevMachineDetailResponseShape', ],
        ],
        'AiOpsStartPodDevMachine' => [
            'name' => 'AiOpsStartPodDevMachine',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsStartPodDevMachine',
            ],
            'input' => [ 'shape' => 'AiOpsStartPodDevMachineRequestShape', ],
            'output' => [ 'shape' => 'AiOpsStartPodDevMachineResponseShape', ],
        ],
        'AiOpsStopPodDevMachine' => [
            'name' => 'AiOpsStopPodDevMachine',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsStopPodDevMachine',
            ],
            'input' => [ 'shape' => 'AiOpsStopPodDevMachineRequestShape', ],
            'output' => [ 'shape' => 'AiOpsStopPodDevMachineResponseShape', ],
        ],
        'AiOpsListRayTasks' => [
            'name' => 'AiOpsListRayTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListRayTasks',
            ],
            'input' => [ 'shape' => 'AiOpsListRayTasksRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListRayTasksResponseShape', ],
        ],
        'AiOpsGetRayTaskDetail' => [
            'name' => 'AiOpsGetRayTaskDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetRayTaskDetail',
            ],
            'input' => [ 'shape' => 'AiOpsGetRayTaskDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetRayTaskDetailResponseShape', ],
        ],
        'AiOpsBootRayTask' => [
            'name' => 'AiOpsBootRayTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsBootRayTask',
            ],
            'input' => [ 'shape' => 'AiOpsBootRayTaskRequestShape', ],
            'output' => [ 'shape' => 'AiOpsBootRayTaskResponseShape', ],
        ],
        'AiOpsListRayTaskInstances' => [
            'name' => 'AiOpsListRayTaskInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListRayTaskInstances',
            ],
            'input' => [ 'shape' => 'AiOpsListRayTaskInstancesRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListRayTaskInstancesResponseShape', ],
        ],
        'AiOpsListRayTaskInstanceList' => [
            'name' => 'AiOpsListRayTaskInstanceList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListRayTaskInstanceList',
            ],
            'input' => [ 'shape' => 'AiOpsListRayTaskInstanceListRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListRayTaskInstanceListResponseShape', ],
        ],
        'AiOpsGetRayTaskInstanceDetail' => [
            'name' => 'AiOpsGetRayTaskInstanceDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetRayTaskInstanceDetail',
            ],
            'input' => [ 'shape' => 'AiOpsGetRayTaskInstanceDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetRayTaskInstanceDetailResponseShape', ],
        ],
        'AiOpsStopRayTaskInstance' => [
            'name' => 'AiOpsStopRayTaskInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsStopRayTaskInstance',
            ],
            'input' => [ 'shape' => 'AiOpsStopRayTaskInstanceRequestShape', ],
            'output' => [ 'shape' => 'AiOpsStopRayTaskInstanceResponseShape', ],
        ],
        'AiOpsGetRayTaskInstanceLogs' => [
            'name' => 'AiOpsGetRayTaskInstanceLogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetRayTaskInstanceLogs',
            ],
            'input' => [ 'shape' => 'AiOpsGetRayTaskInstanceLogsRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetRayTaskInstanceLogsResponseShape', ],
        ],
        'AiOpsListRayTaskInstancePods' => [
            'name' => 'AiOpsListRayTaskInstancePods',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListRayTaskInstancePods',
            ],
            'input' => [ 'shape' => 'AiOpsListRayTaskInstancePodsRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListRayTaskInstancePodsResponseShape', ],
        ],
        'AiOpsGetRayTaskInstancePodDetail' => [
            'name' => 'AiOpsGetRayTaskInstancePodDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetRayTaskInstancePodDetail',
            ],
            'input' => [ 'shape' => 'AiOpsGetRayTaskInstancePodDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetRayTaskInstancePodDetailResponseShape', ],
        ],
        'AiOpsListResidentClusters' => [
            'name' => 'AiOpsListResidentClusters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListResidentClusters',
            ],
            'input' => [ 'shape' => 'AiOpsListResidentClustersRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListResidentClustersResponseShape', ],
        ],
        'AiOpsGetResidentClusterDetail' => [
            'name' => 'AiOpsGetResidentClusterDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetResidentClusterDetail',
            ],
            'input' => [ 'shape' => 'AiOpsGetResidentClusterDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetResidentClusterDetailResponseShape', ],
        ],
        'AiOpsStartResidentCluster' => [
            'name' => 'AiOpsStartResidentCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsStartResidentCluster',
            ],
            'input' => [ 'shape' => 'AiOpsStartResidentClusterRequestShape', ],
            'output' => [ 'shape' => 'AiOpsStartResidentClusterResponseShape', ],
        ],
        'AiOpsStopResidentCluster' => [
            'name' => 'AiOpsStopResidentCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsStopResidentCluster',
            ],
            'input' => [ 'shape' => 'AiOpsStopResidentClusterRequestShape', ],
            'output' => [ 'shape' => 'AiOpsStopResidentClusterResponseShape', ],
        ],
        'AiOpsGetTaskInstanceState' => [
            'name' => 'AiOpsGetTaskInstanceState',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetTaskInstanceState',
            ],
            'input' => [ 'shape' => 'AiOpsGetTaskInstanceStateRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetTaskInstanceStateResponseShape', ],
        ],
        'AiOpsGetTaskStatSummary' => [
            'name' => 'AiOpsGetTaskStatSummary',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetTaskStatSummary',
            ],
            'input' => [ 'shape' => 'AiOpsGetTaskStatSummaryRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetTaskStatSummaryResponseShape', ],
        ],
        'AiOpsListAllCompanyCodes' => [
            'name' => 'AiOpsListAllCompanyCodes',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsListAllCompanyCodes',
            ],
            'input' => [ 'shape' => 'AiOpsListAllCompanyCodesRequestShape', ],
            'output' => [ 'shape' => 'AiOpsListAllCompanyCodesResponseShape', ],
        ],
        'AlarmHubSendAlarm' => [
            'name' => 'AlarmHubSendAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/alarmHubSendAlarm',
            ],
            'input' => [ 'shape' => 'AlarmHubSendAlarmRequestShape', ],
            'output' => [ 'shape' => 'AlarmHubSendAlarmResponseShape', ],
        ],
        'AlarmHubSendAlarmByGroup' => [
            'name' => 'AlarmHubSendAlarmByGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/alarmHubSendAlarmByGroup',
            ],
            'input' => [ 'shape' => 'AlarmHubSendAlarmByGroupRequestShape', ],
            'output' => [ 'shape' => 'AlarmHubSendAlarmByGroupResponseShape', ],
        ],
        'BatchConfigTaskAlert' => [
            'name' => 'BatchConfigTaskAlert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/batchConfigTaskAlert',
            ],
            'input' => [ 'shape' => 'BatchConfigTaskAlertRequestShape', ],
            'output' => [ 'shape' => 'BatchConfigTaskAlertResponseShape', ],
        ],
        'BatchConfigClusterAlert' => [
            'name' => 'BatchConfigClusterAlert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/batchConfigClusterAlert',
            ],
            'input' => [ 'shape' => 'BatchConfigClusterAlertRequestShape', ],
            'output' => [ 'shape' => 'BatchConfigClusterAlertResponseShape', ],
        ],
        'BatchConfigDevMachineAlert' => [
            'name' => 'BatchConfigDevMachineAlert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/batchConfigDevMachineAlert',
            ],
            'input' => [ 'shape' => 'BatchConfigDevMachineAlertRequestShape', ],
            'output' => [ 'shape' => 'BatchConfigDevMachineAlertResponseShape', ],
        ],
        'AnalyzeSubmitQuery' => [
            'name' => 'AnalyzeSubmitQuery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeSubmitQuery',
            ],
            'input' => [ 'shape' => 'AnalyzeSubmitQueryRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeSubmitQueryResponseShape', ],
        ],
        'AnalyzeStopQuery' => [
            'name' => 'AnalyzeStopQuery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeStopQuery',
            ],
            'input' => [ 'shape' => 'AnalyzeStopQueryRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeStopQueryResponseShape', ],
        ],
        'AnalyzeAvailableClusters' => [
            'name' => 'AnalyzeAvailableClusters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeAvailableClusters',
            ],
            'input' => [ 'shape' => 'AnalyzeAvailableClustersRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeAvailableClustersResponseShape', ],
        ],
        'AnalyzeQueryRecords' => [
            'name' => 'AnalyzeQueryRecords',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeQueryRecords',
            ],
            'input' => [ 'shape' => 'AnalyzeQueryRecordsRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeQueryRecordsResponseShape', ],
        ],
        'AnalyzeQueryRecord' => [
            'name' => 'AnalyzeQueryRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeQueryRecord',
            ],
            'input' => [ 'shape' => 'AnalyzeQueryRecordRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeQueryRecordResponseShape', ],
        ],
        'AnalyzeQueryStatus' => [
            'name' => 'AnalyzeQueryStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeQueryStatus',
            ],
            'input' => [ 'shape' => 'AnalyzeQueryStatusRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeQueryStatusResponseShape', ],
        ],
        'AnalyzeDeleteRecord' => [
            'name' => 'AnalyzeDeleteRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeDeleteRecord',
            ],
            'input' => [ 'shape' => 'AnalyzeDeleteRecordRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeDeleteRecordResponseShape', ],
        ],
        'AnalyzeUserStatistics' => [
            'name' => 'AnalyzeUserStatistics',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeUserStatistics',
            ],
            'input' => [ 'shape' => 'AnalyzeUserStatisticsRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeUserStatisticsResponseShape', ],
        ],
        'AnalyzeClusterStatistics' => [
            'name' => 'AnalyzeClusterStatistics',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/analyzeClusterStatistics',
            ],
            'input' => [ 'shape' => 'AnalyzeClusterStatisticsRequestShape', ],
            'output' => [ 'shape' => 'AnalyzeClusterStatisticsResponseShape', ],
        ],
        'AiOpsGetClusterAppStateList' => [
            'name' => 'AiOpsGetClusterAppStateList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetClusterAppStateList',
            ],
            'input' => [ 'shape' => 'AiOpsGetClusterAppStateListRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetClusterAppStateListResponseShape', ],
        ],
        'AiOpsGetClusterAppStateDetail' => [
            'name' => 'AiOpsGetClusterAppStateDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetClusterAppStateDetail',
            ],
            'input' => [ 'shape' => 'AiOpsGetClusterAppStateDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetClusterAppStateDetailResponseShape', ],
        ],
        'GetDevMachineShutdownPolicy' => [
            'name' => 'GetDevMachineShutdownPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/getDevMachineShutdownPolicy',
            ],
            'input' => [ 'shape' => 'GetDevMachineShutdownPolicyRequestShape', ],
            'output' => [ 'shape' => 'GetDevMachineShutdownPolicyResponseShape', ],
        ],
        'SaveDevMachineShutdownPolicy' => [
            'name' => 'SaveDevMachineShutdownPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/saveDevMachineShutdownPolicy',
            ],
            'input' => [ 'shape' => 'SaveDevMachineShutdownPolicyRequestShape', ],
            'output' => [ 'shape' => 'SaveDevMachineShutdownPolicyResponseShape', ],
        ],
        'DeleteDevMachineShutdownPolicy' => [
            'name' => 'DeleteDevMachineShutdownPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/deleteDevMachineShutdownPolicy',
            ],
            'input' => [ 'shape' => 'DeleteDevMachineShutdownPolicyRequestShape', ],
            'output' => [ 'shape' => 'DeleteDevMachineShutdownPolicyResponseShape', ],
        ],
        'ListDevMachineShutdownWhitelistCandidates' => [
            'name' => 'ListDevMachineShutdownWhitelistCandidates',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/listDevMachineShutdownWhitelistCandidates',
            ],
            'input' => [ 'shape' => 'ListDevMachineShutdownWhitelistCandidatesRequestShape', ],
            'output' => [ 'shape' => 'ListDevMachineShutdownWhitelistCandidatesResponseShape', ],
        ],
        'MetaUnifierCreateGroup' => [
            'name' => 'MetaUnifierCreateGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateGroup',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateGroupRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateGroupResponseShape', ],
        ],
        'MetaUnifierDeleteGroup' => [
            'name' => 'MetaUnifierDeleteGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDeleteGroup',
            ],
            'input' => [ 'shape' => 'MetaUnifierDeleteGroupRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDeleteGroupResponseShape', ],
        ],
        'MetaUnifierListGroups' => [
            'name' => 'MetaUnifierListGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListGroups',
            ],
            'input' => [ 'shape' => 'MetaUnifierListGroupsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListGroupsResponseShape', ],
        ],
        'MetaUnifierSetGroupMembers' => [
            'name' => 'MetaUnifierSetGroupMembers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierSetGroupMembers',
            ],
            'input' => [ 'shape' => 'MetaUnifierSetGroupMembersRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierSetGroupMembersResponseShape', ],
        ],
        'MetaUnifierListGroupMembers' => [
            'name' => 'MetaUnifierListGroupMembers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListGroupMembers',
            ],
            'input' => [ 'shape' => 'MetaUnifierListGroupMembersRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListGroupMembersResponseShape', ],
        ],
        'MetaUnifierSetGroupRoles' => [
            'name' => 'MetaUnifierSetGroupRoles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierSetGroupRoles',
            ],
            'input' => [ 'shape' => 'MetaUnifierSetGroupRolesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierSetGroupRolesResponseShape', ],
        ],
        'MetaUnifierListGroupRoles' => [
            'name' => 'MetaUnifierListGroupRoles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListGroupRoles',
            ],
            'input' => [ 'shape' => 'MetaUnifierListGroupRolesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListGroupRolesResponseShape', ],
        ],
        'DataWorkshopImageRegistryList' => [
            'name' => 'DataWorkshopImageRegistryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageRegistryList',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageRegistryListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageRegistryListResponseShape', ],
        ],
        'DataWorkshopImageRepositoryList' => [
            'name' => 'DataWorkshopImageRepositoryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageRepositoryList',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageRepositoryListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageRepositoryListResponseShape', ],
        ],
        'DataWorkshopImageVersionList' => [
            'name' => 'DataWorkshopImageVersionList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageVersionList',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageVersionListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageVersionListResponseShape', ],
        ],
        'DataWorkshopImageInfoList' => [
            'name' => 'DataWorkshopImageInfoList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageInfoList',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageInfoListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageInfoListResponseShape', ],
        ],
        'DataWorkshopImageBuildTaskList' => [
            'name' => 'DataWorkshopImageBuildTaskList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageBuildTaskList',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageBuildTaskListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageBuildTaskListResponseShape', ],
        ],
        'DataWorkshopImageNameExists' => [
            'name' => 'DataWorkshopImageNameExists',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageNameExists',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageNameExistsRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageNameExistsResponseShape', ],
        ],
        'DataWorkshopImageVersionExists' => [
            'name' => 'DataWorkshopImageVersionExists',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageVersionExists',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageVersionExistsRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageVersionExistsResponseShape', ],
        ],
        'DataWorkshopImageCreate' => [
            'name' => 'DataWorkshopImageCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageCreate',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageCreateRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageCreateResponseShape', ],
        ],
        'DataWorkshopImageAddVersion' => [
            'name' => 'DataWorkshopImageAddVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageAddVersion',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageAddVersionRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageAddVersionResponseShape', ],
        ],
        'DataWorkshopImageDeleteVersion' => [
            'name' => 'DataWorkshopImageDeleteVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageDeleteVersion',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageDeleteVersionRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageDeleteVersionResponseShape', ],
        ],
        'DataWorkshopImageRetryBuildTask' => [
            'name' => 'DataWorkshopImageRetryBuildTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageRetryBuildTask',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageRetryBuildTaskRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageRetryBuildTaskResponseShape', ],
        ],
        'DataWorkshopImageBuildLog' => [
            'name' => 'DataWorkshopImageBuildLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageBuildLog',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageBuildLogRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageBuildLogResponseShape', ],
        ],
        'DataWorkshopImageVersionAutoGenerate' => [
            'name' => 'DataWorkshopImageVersionAutoGenerate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageVersionAutoGenerate',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageVersionAutoGenerateRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageVersionAutoGenerateResponseShape', ],
        ],
        'DataWorkshopImageExternalBriefInfoList' => [
            'name' => 'DataWorkshopImageExternalBriefInfoList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopImageExternalBriefInfoList',
            ],
            'input' => [ 'shape' => 'DataWorkshopImageExternalBriefInfoListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopImageExternalBriefInfoListResponseShape', ],
        ],
        'MachineList' => [
            'name' => 'MachineList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineList',
            ],
            'input' => [ 'shape' => 'MachineListRequestShape', ],
            'output' => [ 'shape' => 'MachineListResponseShape', ],
        ],
        'AllMachineList' => [
            'name' => 'AllMachineList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/allMachineList',
            ],
            'input' => [ 'shape' => 'AllMachineListRequestShape', ],
            'output' => [ 'shape' => 'AllMachineListResponseShape', ],
        ],
        'MachineDetail' => [
            'name' => 'MachineDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineDetail',
            ],
            'input' => [ 'shape' => 'MachineDetailRequestShape', ],
            'output' => [ 'shape' => 'MachineDetailResponseShape', ],
        ],
        'MachineTotalPrice' => [
            'name' => 'MachineTotalPrice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineTotalPrice',
            ],
            'input' => [ 'shape' => 'MachineTotalPriceRequestShape', ],
            'output' => [ 'shape' => 'MachineTotalPriceResponseShape', ],
        ],
        'MachineCreateOrUpdate' => [
            'name' => 'MachineCreateOrUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineCreateOrUpdate',
            ],
            'input' => [ 'shape' => 'MachineCreateOrUpdateRequestShape', ],
            'output' => [ 'shape' => 'MachineCreateOrUpdateResponseShape', ],
        ],
        'MachineDelete' => [
            'name' => 'MachineDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineDelete',
            ],
            'input' => [ 'shape' => 'MachineDeleteRequestShape', ],
            'output' => [ 'shape' => 'MachineDeleteResponseShape', ],
        ],
        'MachineStart' => [
            'name' => 'MachineStart',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineStart',
            ],
            'input' => [ 'shape' => 'MachineStartRequestShape', ],
            'output' => [ 'shape' => 'MachineStartResponseShape', ],
        ],
        'MachineStop' => [
            'name' => 'MachineStop',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/machineStop',
            ],
            'input' => [ 'shape' => 'MachineStopRequestShape', ],
            'output' => [ 'shape' => 'MachineStopResponseShape', ],
        ],
        'MetaUnifierExternalListCatalogBriefInfos' => [
            'name' => 'MetaUnifierExternalListCatalogBriefInfos',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierExternalListCatalogBriefInfos',
            ],
            'input' => [ 'shape' => 'MetaUnifierExternalListCatalogBriefInfosRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierExternalListCatalogBriefInfosResponseShape', ],
        ],
        'MetaUnifierExternalListCatalogDatasourceInfos' => [
            'name' => 'MetaUnifierExternalListCatalogDatasourceInfos',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierExternalListCatalogDatasourceInfos',
            ],
            'input' => [ 'shape' => 'MetaUnifierExternalListCatalogDatasourceInfosRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierExternalListCatalogDatasourceInfosResponseShape', ],
        ],
        'MetaUnifierExternalGetCatalogDetails' => [
            'name' => 'MetaUnifierExternalGetCatalogDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierExternalGetCatalogDetails',
            ],
            'input' => [ 'shape' => 'MetaUnifierExternalGetCatalogDetailsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierExternalGetCatalogDetailsResponseShape', ],
        ],
        'MetaUnifierExternalListSchemaBriefInfos' => [
            'name' => 'MetaUnifierExternalListSchemaBriefInfos',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierExternalListSchemaBriefInfos',
            ],
            'input' => [ 'shape' => 'MetaUnifierExternalListSchemaBriefInfosRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierExternalListSchemaBriefInfosResponseShape', ],
        ],
        'MetaUnifierListCatalogBriefInfo' => [
            'name' => 'MetaUnifierListCatalogBriefInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListCatalogBriefInfo',
            ],
            'input' => [ 'shape' => 'MetaUnifierListCatalogBriefInfoRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListCatalogBriefInfoResponseShape', ],
        ],
        'MetaUnifierListSchemaBriefInfo' => [
            'name' => 'MetaUnifierListSchemaBriefInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListSchemaBriefInfo',
            ],
            'input' => [ 'shape' => 'MetaUnifierListSchemaBriefInfoRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListSchemaBriefInfoResponseShape', ],
        ],
        'MetaUnifierListTableBriefInfo' => [
            'name' => 'MetaUnifierListTableBriefInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListTableBriefInfo',
            ],
            'input' => [ 'shape' => 'MetaUnifierListTableBriefInfoRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListTableBriefInfoResponseShape', ],
        ],
        'MetaUnifierListColumnBriefInfo' => [
            'name' => 'MetaUnifierListColumnBriefInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListColumnBriefInfo',
            ],
            'input' => [ 'shape' => 'MetaUnifierListColumnBriefInfoRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListColumnBriefInfoResponseShape', ],
        ],
        'MetaUnifierSearchBriefInfo' => [
            'name' => 'MetaUnifierSearchBriefInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierSearchBriefInfo',
            ],
            'input' => [ 'shape' => 'MetaUnifierSearchBriefInfoRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierSearchBriefInfoResponseShape', ],
        ],
        'MetaUnifierCreateCatalog' => [
            'name' => 'MetaUnifierCreateCatalog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateCatalog',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateCatalogRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateCatalogResponseShape', ],
        ],
        'MetaUnifierModifyCatalog' => [
            'name' => 'MetaUnifierModifyCatalog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierModifyCatalog',
            ],
            'input' => [ 'shape' => 'MetaUnifierModifyCatalogRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierModifyCatalogResponseShape', ],
        ],
        'MetaUnifierDropCatalog' => [
            'name' => 'MetaUnifierDropCatalog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDropCatalog',
            ],
            'input' => [ 'shape' => 'MetaUnifierDropCatalogRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDropCatalogResponseShape', ],
        ],
        'MetaUnifierGetCatalog' => [
            'name' => 'MetaUnifierGetCatalog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetCatalog',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetCatalogRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetCatalogResponseShape', ],
        ],
        'MetaUnifierCreateSchema' => [
            'name' => 'MetaUnifierCreateSchema',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateSchema',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateSchemaRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateSchemaResponseShape', ],
        ],
        'MetaUnifierGetSchema' => [
            'name' => 'MetaUnifierGetSchema',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetSchema',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetSchemaRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetSchemaResponseShape', ],
        ],
        'MetaUnifierModifySchema' => [
            'name' => 'MetaUnifierModifySchema',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierModifySchema',
            ],
            'input' => [ 'shape' => 'MetaUnifierModifySchemaRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierModifySchemaResponseShape', ],
        ],
        'MetaUnifierDropSchema' => [
            'name' => 'MetaUnifierDropSchema',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDropSchema',
            ],
            'input' => [ 'shape' => 'MetaUnifierDropSchemaRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDropSchemaResponseShape', ],
        ],
        'MetaUnifierListSchema' => [
            'name' => 'MetaUnifierListSchema',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListSchema',
            ],
            'input' => [ 'shape' => 'MetaUnifierListSchemaRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListSchemaResponseShape', ],
        ],
        'MetaUnifierCreateTable' => [
            'name' => 'MetaUnifierCreateTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateTable',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateTableRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateTableResponseShape', ],
        ],
        'MetaUnifierGetTable' => [
            'name' => 'MetaUnifierGetTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetTable',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetTableRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetTableResponseShape', ],
        ],
        'MetaUnifierModifyTable' => [
            'name' => 'MetaUnifierModifyTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierModifyTable',
            ],
            'input' => [ 'shape' => 'MetaUnifierModifyTableRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierModifyTableResponseShape', ],
        ],
        'MetaUnifierDropTable' => [
            'name' => 'MetaUnifierDropTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDropTable',
            ],
            'input' => [ 'shape' => 'MetaUnifierDropTableRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDropTableResponseShape', ],
        ],
        'MetaUnifierListTable' => [
            'name' => 'MetaUnifierListTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListTable',
            ],
            'input' => [ 'shape' => 'MetaUnifierListTableRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListTableResponseShape', ],
        ],
        'MetaUnifierCreateFileSet' => [
            'name' => 'MetaUnifierCreateFileSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateFileSet',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateFileSetRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateFileSetResponseShape', ],
        ],
        'MetaUnifierModifyFileSet' => [
            'name' => 'MetaUnifierModifyFileSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierModifyFileSet',
            ],
            'input' => [ 'shape' => 'MetaUnifierModifyFileSetRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierModifyFileSetResponseShape', ],
        ],
        'MetaUnifierDeleteFileSet' => [
            'name' => 'MetaUnifierDeleteFileSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDeleteFileSet',
            ],
            'input' => [ 'shape' => 'MetaUnifierDeleteFileSetRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDeleteFileSetResponseShape', ],
        ],
        'MetaUnifierGetFileSet' => [
            'name' => 'MetaUnifierGetFileSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetFileSet',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetFileSetRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetFileSetResponseShape', ],
        ],
        'MetaUnifierListFileSet' => [
            'name' => 'MetaUnifierListFileSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListFileSet',
            ],
            'input' => [ 'shape' => 'MetaUnifierListFileSetRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListFileSetResponseShape', ],
        ],
        'MetaUnifierListFileSetVersion' => [
            'name' => 'MetaUnifierListFileSetVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListFileSetVersion',
            ],
            'input' => [ 'shape' => 'MetaUnifierListFileSetVersionRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListFileSetVersionResponseShape', ],
        ],
        'MetaUnifierAddFileSetVersion' => [
            'name' => 'MetaUnifierAddFileSetVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierAddFileSetVersion',
            ],
            'input' => [ 'shape' => 'MetaUnifierAddFileSetVersionRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierAddFileSetVersionResponseShape', ],
        ],
        'MetaUnifierListCatalogs' => [
            'name' => 'MetaUnifierListCatalogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListCatalogs',
            ],
            'input' => [ 'shape' => 'MetaUnifierListCatalogsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListCatalogsResponseShape', ],
        ],
        'MetaUnifierListFieldTypes' => [
            'name' => 'MetaUnifierListFieldTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListFieldTypes',
            ],
            'input' => [ 'shape' => 'MetaUnifierListFieldTypesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListFieldTypesResponseShape', ],
        ],
        'MetaUnifierListTablePartitionTransforms' => [
            'name' => 'MetaUnifierListTablePartitionTransforms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListTablePartitionTransforms',
            ],
            'input' => [ 'shape' => 'MetaUnifierListTablePartitionTransformsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListTablePartitionTransformsResponseShape', ],
        ],
        'MetaUnifierListFileSetFiles' => [
            'name' => 'MetaUnifierListFileSetFiles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListFileSetFiles',
            ],
            'input' => [ 'shape' => 'MetaUnifierListFileSetFilesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListFileSetFilesResponseShape', ],
        ],
        'MetaUnifierRegisterModel' => [
            'name' => 'MetaUnifierRegisterModel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierRegisterModel',
            ],
            'input' => [ 'shape' => 'MetaUnifierRegisterModelRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierRegisterModelResponseShape', ],
        ],
        'MetaUnifierGetModel' => [
            'name' => 'MetaUnifierGetModel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetModel',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetModelRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetModelResponseShape', ],
        ],
        'MetaUnifierListModel' => [
            'name' => 'MetaUnifierListModel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListModel',
            ],
            'input' => [ 'shape' => 'MetaUnifierListModelRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListModelResponseShape', ],
        ],
        'MetaUnifierDeleteModel' => [
            'name' => 'MetaUnifierDeleteModel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDeleteModel',
            ],
            'input' => [ 'shape' => 'MetaUnifierDeleteModelRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDeleteModelResponseShape', ],
        ],
        'MetaUnifierAlterModel' => [
            'name' => 'MetaUnifierAlterModel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierAlterModel',
            ],
            'input' => [ 'shape' => 'MetaUnifierAlterModelRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierAlterModelResponseShape', ],
        ],
        'MetaUnifierLinkModelVersion' => [
            'name' => 'MetaUnifierLinkModelVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierLinkModelVersion',
            ],
            'input' => [ 'shape' => 'MetaUnifierLinkModelVersionRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierLinkModelVersionResponseShape', ],
        ],
        'MetaUnifierGetModelVersion' => [
            'name' => 'MetaUnifierGetModelVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetModelVersion',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetModelVersionRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetModelVersionResponseShape', ],
        ],
        'MetaUnifierListModelVersions' => [
            'name' => 'MetaUnifierListModelVersions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListModelVersions',
            ],
            'input' => [ 'shape' => 'MetaUnifierListModelVersionsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListModelVersionsResponseShape', ],
        ],
        'MetaUnifierDeleteModelVersion' => [
            'name' => 'MetaUnifierDeleteModelVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDeleteModelVersion',
            ],
            'input' => [ 'shape' => 'MetaUnifierDeleteModelVersionRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDeleteModelVersionResponseShape', ],
        ],
        'MetaUnifierAlterModelVersion' => [
            'name' => 'MetaUnifierAlterModelVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierAlterModelVersion',
            ],
            'input' => [ 'shape' => 'MetaUnifierAlterModelVersionRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierAlterModelVersionResponseShape', ],
        ],
        'GetNode' => [
            'name' => 'GetNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/getNode',
            ],
            'input' => [ 'shape' => 'GetNodeRequestShape', ],
            'output' => [ 'shape' => 'GetNodeResponseShape', ],
        ],
        'ListNodes' => [
            'name' => 'ListNodes',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/listNodes',
            ],
            'input' => [ 'shape' => 'ListNodesRequestShape', ],
            'output' => [ 'shape' => 'ListNodesResponseShape', ],
        ],
        'DelNodeBatch' => [
            'name' => 'DelNodeBatch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/delNodeBatch',
            ],
            'input' => [ 'shape' => 'DelNodeBatchRequestShape', ],
            'output' => [ 'shape' => 'DelNodeBatchResponseShape', ],
        ],
        'StartNode' => [
            'name' => 'StartNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/startNode',
            ],
            'input' => [ 'shape' => 'StartNodeRequestShape', ],
            'output' => [ 'shape' => 'StartNodeResponseShape', ],
        ],
        'StopNode' => [
            'name' => 'StopNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/stopNode',
            ],
            'input' => [ 'shape' => 'StopNodeRequestShape', ],
            'output' => [ 'shape' => 'StopNodeResponseShape', ],
        ],
        'EnableNode' => [
            'name' => 'EnableNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/enableNode',
            ],
            'input' => [ 'shape' => 'EnableNodeRequestShape', ],
            'output' => [ 'shape' => 'EnableNodeResponseShape', ],
        ],
        'GetNodePool' => [
            'name' => 'GetNodePool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/getNodePool',
            ],
            'input' => [ 'shape' => 'GetNodePoolRequestShape', ],
            'output' => [ 'shape' => 'GetNodePoolResponseShape', ],
        ],
        'ListNodePools' => [
            'name' => 'ListNodePools',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/listNodePools',
            ],
            'input' => [ 'shape' => 'ListNodePoolsRequestShape', ],
            'output' => [ 'shape' => 'ListNodePoolsResponseShape', ],
        ],
        'UpdateNodePool' => [
            'name' => 'UpdateNodePool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/updateNodePool',
            ],
            'input' => [ 'shape' => 'UpdateNodePoolRequestShape', ],
            'output' => [ 'shape' => 'UpdateNodePoolResponseShape', ],
        ],
        'DelNodePool' => [
            'name' => 'DelNodePool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/delNodePool',
            ],
            'input' => [ 'shape' => 'DelNodePoolRequestShape', ],
            'output' => [ 'shape' => 'DelNodePoolResponseShape', ],
        ],
        'ListNodeSpecs' => [
            'name' => 'ListNodeSpecs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/listNodeSpecs',
            ],
            'input' => [ 'shape' => 'ListNodeSpecsRequestShape', ],
            'output' => [ 'shape' => 'ListNodeSpecsResponseShape', ],
        ],
        'ListNodeSpecOptions' => [
            'name' => 'ListNodeSpecOptions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/listNodeSpecOptions',
            ],
            'input' => [ 'shape' => 'ListNodeSpecOptionsRequestShape', ],
            'output' => [ 'shape' => 'ListNodeSpecOptionsResponseShape', ],
        ],
        'DataWorkshopOperatorParamTypeEnum' => [
            'name' => 'DataWorkshopOperatorParamTypeEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorParamTypeEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorParamTypeEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorParamTypeEnumResponseShape', ],
        ],
        'DataWorkshopOperatorSceneTypeEnum' => [
            'name' => 'DataWorkshopOperatorSceneTypeEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorSceneTypeEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorSceneTypeEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorSceneTypeEnumResponseShape', ],
        ],
        'DataWorkshopOperatorVersionStateEnum' => [
            'name' => 'DataWorkshopOperatorVersionStateEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionStateEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionStateEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionStateEnumResponseShape', ],
        ],
        'DataWorkshopOperatorVisibleScopeEnum' => [
            'name' => 'DataWorkshopOperatorVisibleScopeEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVisibleScopeEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVisibleScopeEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVisibleScopeEnumResponseShape', ],
        ],
        'DataWorkshopOperatorVersionOrderbyEnum' => [
            'name' => 'DataWorkshopOperatorVersionOrderbyEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionOrderbyEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionOrderbyEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionOrderbyEnumResponseShape', ],
        ],
        'DataWorkshopOperatorDevLanguageEnum' => [
            'name' => 'DataWorkshopOperatorDevLanguageEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorDevLanguageEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorDevLanguageEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorDevLanguageEnumResponseShape', ],
        ],
        'DataWorkshopOperatorFrameworkTypeEnum' => [
            'name' => 'DataWorkshopOperatorFrameworkTypeEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorFrameworkTypeEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorFrameworkTypeEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorFrameworkTypeEnumResponseShape', ],
        ],
        'DataWorkshopOperatorRefTypeEnum' => [
            'name' => 'DataWorkshopOperatorRefTypeEnum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorRefTypeEnum',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorRefTypeEnumRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorRefTypeEnumResponseShape', ],
        ],
        'DataWorkshopOperatorList' => [
            'name' => 'DataWorkshopOperatorList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorList',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorListResponseShape', ],
        ],
        'DataWorkshopOperatorDetail' => [
            'name' => 'DataWorkshopOperatorDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorDetailResponseShape', ],
        ],
        'DataWorkshopOperatorCreateOrUpdate' => [
            'name' => 'DataWorkshopOperatorCreateOrUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorCreateOrUpdate',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorCreateOrUpdateRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorCreateOrUpdateResponseShape', ],
        ],
        'DataWorkshopOperatorDelete' => [
            'name' => 'DataWorkshopOperatorDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorDelete',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorDeleteRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorDeleteResponseShape', ],
        ],
        'DataWorkshopOperatorSquareOperatorList' => [
            'name' => 'DataWorkshopOperatorSquareOperatorList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorSquareOperatorList',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorSquareOperatorListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorSquareOperatorListResponseShape', ],
        ],
        'DataWorkshopOperatorSquareTagFuzzList' => [
            'name' => 'DataWorkshopOperatorSquareTagFuzzList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorSquareTagFuzzList',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorSquareTagFuzzListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorSquareTagFuzzListResponseShape', ],
        ],
        'DataWorkshopOperatorSquareTreeInfo' => [
            'name' => 'DataWorkshopOperatorSquareTreeInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorSquareTreeInfo',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorSquareTreeInfoRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorSquareTreeInfoResponseShape', ],
        ],
        'DataWorkshopOperatorVersionListInSquare' => [
            'name' => 'DataWorkshopOperatorVersionListInSquare',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionListInSquare',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionListInSquareRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionListInSquareResponseShape', ],
        ],
        'DataWorkshopOperatorVersionDetailInSquare' => [
            'name' => 'DataWorkshopOperatorVersionDetailInSquare',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionDetailInSquare',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionDetailInSquareRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionDetailInSquareResponseShape', ],
        ],
        'DataWorkshopOperatorDetailInSquare' => [
            'name' => 'DataWorkshopOperatorDetailInSquare',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorDetailInSquare',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorDetailInSquareRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorDetailInSquareResponseShape', ],
        ],
        'DataWorkshopOperatorVersionList' => [
            'name' => 'DataWorkshopOperatorVersionList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionList',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionListResponseShape', ],
        ],
        'DataWorkshopOperatorVersionDetail' => [
            'name' => 'DataWorkshopOperatorVersionDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionDetailResponseShape', ],
        ],
        'DataWorkshopOperatorVersionCreateOrUpdate' => [
            'name' => 'DataWorkshopOperatorVersionCreateOrUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionCreateOrUpdate',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionCreateOrUpdateRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionCreateOrUpdateResponseShape', ],
        ],
        'DataWorkshopOperatorVersionDelete' => [
            'name' => 'DataWorkshopOperatorVersionDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionDelete',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionDeleteRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionDeleteResponseShape', ],
        ],
        'DataWorkshopOperatorVersionCopy' => [
            'name' => 'DataWorkshopOperatorVersionCopy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionCopy',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionCopyRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionCopyResponseShape', ],
        ],
        'DataWorkshopOperatorVersionOnline' => [
            'name' => 'DataWorkshopOperatorVersionOnline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOperatorVersionOnline',
            ],
            'input' => [ 'shape' => 'DataWorkshopOperatorVersionOnlineRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOperatorVersionOnlineResponseShape', ],
        ],
        'AiOpsAlarmConfigDetail' => [
            'name' => 'AiOpsAlarmConfigDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsAlarmConfigDetail',
            ],
            'input' => [ 'shape' => 'AiOpsAlarmConfigDetailRequestShape', ],
            'output' => [ 'shape' => 'AiOpsAlarmConfigDetailResponseShape', ],
        ],
        'AiOpsAlarmConfigUpdate' => [
            'name' => 'AiOpsAlarmConfigUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsAlarmConfigUpdate',
            ],
            'input' => [ 'shape' => 'AiOpsAlarmConfigUpdateRequestShape', ],
            'output' => [ 'shape' => 'AiOpsAlarmConfigUpdateResponseShape', ],
        ],
        'AiOpsGetAuditRecordList' => [
            'name' => 'AiOpsGetAuditRecordList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetAuditRecordList',
            ],
            'input' => [ 'shape' => 'AiOpsGetAuditRecordListRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetAuditRecordListResponseShape', ],
        ],
        'AiOpsGetUserContactInfoList' => [
            'name' => 'AiOpsGetUserContactInfoList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/aiOpsGetUserContactInfoList',
            ],
            'input' => [ 'shape' => 'AiOpsGetUserContactInfoListRequestShape', ],
            'output' => [ 'shape' => 'AiOpsGetUserContactInfoListResponseShape', ],
        ],
        'MetaUnifierSetOwner' => [
            'name' => 'MetaUnifierSetOwner',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierSetOwner',
            ],
            'input' => [ 'shape' => 'MetaUnifierSetOwnerRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierSetOwnerResponseShape', ],
        ],
        'MetaUnifierGetOwner' => [
            'name' => 'MetaUnifierGetOwner',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetOwner',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetOwnerRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetOwnerResponseShape', ],
        ],
        'DataWorkshopPairConfigs' => [
            'name' => 'DataWorkshopPairConfigs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopPairConfigs',
            ],
            'input' => [ 'shape' => 'DataWorkshopPairConfigsRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopPairConfigsResponseShape', ],
        ],
        'DataWorkshopTaskInstancePodList' => [
            'name' => 'DataWorkshopTaskInstancePodList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskInstancePodList',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskInstancePodListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskInstancePodListResponseShape', ],
        ],
        'DataWorkshopTaskInstancePodDetail' => [
            'name' => 'DataWorkshopTaskInstancePodDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskInstancePodDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskInstancePodDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskInstancePodDetailResponseShape', ],
        ],
        'PodMachineCreateOrUpdate' => [
            'name' => 'PodMachineCreateOrUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/podMachineCreateOrUpdate',
            ],
            'input' => [ 'shape' => 'PodMachineCreateOrUpdateRequestShape', ],
            'output' => [ 'shape' => 'PodMachineCreateOrUpdateResponseShape', ],
        ],
        'PodMachineDelete' => [
            'name' => 'PodMachineDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/podMachineDelete',
            ],
            'input' => [ 'shape' => 'PodMachineDeleteRequestShape', ],
            'output' => [ 'shape' => 'PodMachineDeleteResponseShape', ],
        ],
        'PodMachineStart' => [
            'name' => 'PodMachineStart',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/podMachineStart',
            ],
            'input' => [ 'shape' => 'PodMachineStartRequestShape', ],
            'output' => [ 'shape' => 'PodMachineStartResponseShape', ],
        ],
        'PodMachineStop' => [
            'name' => 'PodMachineStop',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/podMachineStop',
            ],
            'input' => [ 'shape' => 'PodMachineStopRequestShape', ],
            'output' => [ 'shape' => 'PodMachineStopResponseShape', ],
        ],
        'PodMachineDetail' => [
            'name' => 'PodMachineDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/podMachineDetail',
            ],
            'input' => [ 'shape' => 'PodMachineDetailRequestShape', ],
            'output' => [ 'shape' => 'PodMachineDetailResponseShape', ],
        ],
        'DataWorkshopOrderDetail' => [
            'name' => 'DataWorkshopOrderDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopOrderDetail/{taskId}',
            ],
            'input' => [ 'shape' => 'DataWorkshopOrderDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopOrderDetailResponseShape', ],
        ],
        'DataWorkshopStatus' => [
            'name' => 'DataWorkshopStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopStatus',
            ],
            'input' => [ 'shape' => 'DataWorkshopStatusRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopStatusResponseShape', ],
        ],
        'DataWorkshopPurchase' => [
            'name' => 'DataWorkshopPurchase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopPurchase',
            ],
            'input' => [ 'shape' => 'DataWorkshopPurchaseRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopPurchaseResponseShape', ],
        ],
        'DataWorkShopCreateResource' => [
            'name' => 'DataWorkShopCreateResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopCreateResource',
            ],
            'input' => [ 'shape' => 'DataWorkShopCreateResourceRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopCreateResourceResponseShape', ],
        ],
        'DataWorkShopCreateNodePool' => [
            'name' => 'DataWorkShopCreateNodePool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopCreateNodePool',
            ],
            'input' => [ 'shape' => 'DataWorkShopCreateNodePoolRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopCreateNodePoolResponseShape', ],
        ],
        'DataWorkShopCreateNode' => [
            'name' => 'DataWorkShopCreateNode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopCreateNode',
            ],
            'input' => [ 'shape' => 'DataWorkShopCreateNodeRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopCreateNodeResponseShape', ],
        ],
        'QueueInstances' => [
            'name' => 'QueueInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/queueInstances',
            ],
            'input' => [ 'shape' => 'QueueInstancesRequestShape', ],
            'output' => [ 'shape' => 'QueueInstancesResponseShape', ],
        ],
        'KillInstance' => [
            'name' => 'KillInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/killInstance',
            ],
            'input' => [ 'shape' => 'KillInstanceRequestShape', ],
            'output' => [ 'shape' => 'KillInstanceResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/describeInstance',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/describeInstances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'QueueCreateOrUpdate' => [
            'name' => 'QueueCreateOrUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/queueCreateOrUpdate',
            ],
            'input' => [ 'shape' => 'QueueCreateOrUpdateRequestShape', ],
            'output' => [ 'shape' => 'QueueCreateOrUpdateResponseShape', ],
        ],
        'QueueDelete' => [
            'name' => 'QueueDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/queueDelete',
            ],
            'input' => [ 'shape' => 'QueueDeleteRequestShape', ],
            'output' => [ 'shape' => 'QueueDeleteResponseShape', ],
        ],
        'GetQueueInfo' => [
            'name' => 'GetQueueInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/getQueueInfo',
            ],
            'input' => [ 'shape' => 'GetQueueInfoRequestShape', ],
            'output' => [ 'shape' => 'GetQueueInfoResponseShape', ],
        ],
        'QueuePage' => [
            'name' => 'QueuePage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/queuePage',
            ],
            'input' => [ 'shape' => 'QueuePageRequestShape', ],
            'output' => [ 'shape' => 'QueuePageResponseShape', ],
        ],
        'GetNodePoolQuota' => [
            'name' => 'GetNodePoolQuota',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/getNodePoolQuota',
            ],
            'input' => [ 'shape' => 'GetNodePoolQuotaRequestShape', ],
            'output' => [ 'shape' => 'GetNodePoolQuotaResponseShape', ],
        ],
        'ListQueuesJoyBuilder' => [
            'name' => 'ListQueuesJoyBuilder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/listQueuesJoyBuilder',
            ],
            'input' => [ 'shape' => 'ListQueuesJoyBuilderRequestShape', ],
            'output' => [ 'shape' => 'ListQueuesJoyBuilderResponseShape', ],
        ],
        'SyncQueueJoyBuilder' => [
            'name' => 'SyncQueueJoyBuilder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/syncQueueJoyBuilder',
            ],
            'input' => [ 'shape' => 'SyncQueueJoyBuilderRequestShape', ],
            'output' => [ 'shape' => 'SyncQueueJoyBuilderResponseShape', ],
        ],
        'DataWorkshopResidentClusterTypeDict' => [
            'name' => 'DataWorkshopResidentClusterTypeDict',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopResidentClusterTypeDict',
            ],
            'input' => [ 'shape' => 'DataWorkshopResidentClusterTypeDictRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopResidentClusterTypeDictResponseShape', ],
        ],
        'DataWorkshopResidentClusterStateDict' => [
            'name' => 'DataWorkshopResidentClusterStateDict',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopResidentClusterStateDict',
            ],
            'input' => [ 'shape' => 'DataWorkshopResidentClusterStateDictRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopResidentClusterStateDictResponseShape', ],
        ],
        'DataWorkshopListClusters' => [
            'name' => 'DataWorkshopListClusters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopListClusters',
            ],
            'input' => [ 'shape' => 'DataWorkshopListClustersRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopListClustersResponseShape', ],
        ],
        'DataWorkshopClusterDetail' => [
            'name' => 'DataWorkshopClusterDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopClusterDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopClusterDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopClusterDetailResponseShape', ],
        ],
        'DataWorkshopListClusterInstances' => [
            'name' => 'DataWorkshopListClusterInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopListClusterInstances',
            ],
            'input' => [ 'shape' => 'DataWorkshopListClusterInstancesRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopListClusterInstancesResponseShape', ],
        ],
        'DataWorkshopCreateOrUpdateCluster' => [
            'name' => 'DataWorkshopCreateOrUpdateCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopCreateOrUpdateCluster',
            ],
            'input' => [ 'shape' => 'DataWorkshopCreateOrUpdateClusterRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopCreateOrUpdateClusterResponseShape', ],
        ],
        'DataWorkshopDeleteCluster' => [
            'name' => 'DataWorkshopDeleteCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopDeleteCluster',
            ],
            'input' => [ 'shape' => 'DataWorkshopDeleteClusterRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopDeleteClusterResponseShape', ],
        ],
        'DataWorkshopSwitchCluster' => [
            'name' => 'DataWorkshopSwitchCluster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopSwitchCluster',
            ],
            'input' => [ 'shape' => 'DataWorkshopSwitchClusterRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopSwitchClusterResponseShape', ],
        ],
        'DataWorkshopResidentClusterPodList' => [
            'name' => 'DataWorkshopResidentClusterPodList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopResidentClusterPodList',
            ],
            'input' => [ 'shape' => 'DataWorkshopResidentClusterPodListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopResidentClusterPodListResponseShape', ],
        ],
        'DataWorkshopResidentClusterPodDetail' => [
            'name' => 'DataWorkshopResidentClusterPodDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopResidentClusterPodDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopResidentClusterPodDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopResidentClusterPodDetailResponseShape', ],
        ],
        'DataWorkShopGetAllResources' => [
            'name' => 'DataWorkShopGetAllResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopGetAllResources',
            ],
            'input' => [ 'shape' => 'DataWorkShopGetAllResourcesRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopGetAllResourcesResponseShape', ],
        ],
        'DataWorkShopExpandOrShrink' => [
            'name' => 'DataWorkShopExpandOrShrink',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopExpandOrShrink',
            ],
            'input' => [ 'shape' => 'DataWorkShopExpandOrShrinkRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopExpandOrShrinkResponseShape', ],
        ],
        'DataWorkShopGetResourcesByCode' => [
            'name' => 'DataWorkShopGetResourcesByCode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopGetResourcesByCode',
            ],
            'input' => [ 'shape' => 'DataWorkShopGetResourcesByCodeRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopGetResourcesByCodeResponseShape', ],
        ],
        'DataWorkShopResourceEnableOrNot' => [
            'name' => 'DataWorkShopResourceEnableOrNot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopResourceEnableOrNot',
            ],
            'input' => [ 'shape' => 'DataWorkShopResourceEnableOrNotRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopResourceEnableOrNotResponseShape', ],
        ],
        'DataWorkShopEditResourceInfo' => [
            'name' => 'DataWorkShopEditResourceInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopEditResourceInfo',
            ],
            'input' => [ 'shape' => 'DataWorkShopEditResourceInfoRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopEditResourceInfoResponseShape', ],
        ],
        'DataWorkShopDeleteResource' => [
            'name' => 'DataWorkShopDeleteResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopDeleteResource',
            ],
            'input' => [ 'shape' => 'DataWorkShopDeleteResourceRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopDeleteResourceResponseShape', ],
        ],
        'DataWorkShopListResourceOperationLogs' => [
            'name' => 'DataWorkShopListResourceOperationLogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopListResourceOperationLogs',
            ],
            'input' => [ 'shape' => 'DataWorkShopListResourceOperationLogsRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopListResourceOperationLogsResponseShape', ],
        ],
        'DataWorkShopGetRunningResource' => [
            'name' => 'DataWorkShopGetRunningResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopGetRunningResource',
            ],
            'input' => [ 'shape' => 'DataWorkShopGetRunningResourceRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopGetRunningResourceResponseShape', ],
        ],
        'DataWorkShopListAllResources' => [
            'name' => 'DataWorkShopListAllResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopListAllResources',
            ],
            'input' => [ 'shape' => 'DataWorkShopListAllResourcesRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopListAllResourcesResponseShape', ],
        ],
        'DataWorkShopDescribeResourceAvailable' => [
            'name' => 'DataWorkShopDescribeResourceAvailable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkShopDescribeResourceAvailable',
            ],
            'input' => [ 'shape' => 'DataWorkShopDescribeResourceAvailableRequestShape', ],
            'output' => [ 'shape' => 'DataWorkShopDescribeResourceAvailableResponseShape', ],
        ],
        'MetaUnifierCreateRole' => [
            'name' => 'MetaUnifierCreateRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateRole',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateRoleRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateRoleResponseShape', ],
        ],
        'MetaUnifierUpdateRole' => [
            'name' => 'MetaUnifierUpdateRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierUpdateRole',
            ],
            'input' => [ 'shape' => 'MetaUnifierUpdateRoleRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierUpdateRoleResponseShape', ],
        ],
        'MetaUnifierDeleteRole' => [
            'name' => 'MetaUnifierDeleteRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDeleteRole',
            ],
            'input' => [ 'shape' => 'MetaUnifierDeleteRoleRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDeleteRoleResponseShape', ],
        ],
        'MetaUnifierGetRoleDetail' => [
            'name' => 'MetaUnifierGetRoleDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetRoleDetail',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetRoleDetailRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetRoleDetailResponseShape', ],
        ],
        'MetaUnifierGetRoleBound' => [
            'name' => 'MetaUnifierGetRoleBound',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetRoleBound',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetRoleBoundRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetRoleBoundResponseShape', ],
        ],
        'MetaUnifierListRoles' => [
            'name' => 'MetaUnifierListRoles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListRoles',
            ],
            'input' => [ 'shape' => 'MetaUnifierListRolesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListRolesResponseShape', ],
        ],
        'MetaUnifierListResourceRoles' => [
            'name' => 'MetaUnifierListResourceRoles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListResourceRoles',
            ],
            'input' => [ 'shape' => 'MetaUnifierListResourceRolesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListResourceRolesResponseShape', ],
        ],
        'MetaUnifierListAllStorageDomains' => [
            'name' => 'MetaUnifierListAllStorageDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListAllStorageDomains',
            ],
            'input' => [ 'shape' => 'MetaUnifierListAllStorageDomainsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListAllStorageDomainsResponseShape', ],
        ],
        'MetaUnifierCreateTag' => [
            'name' => 'MetaUnifierCreateTag',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierCreateTag',
            ],
            'input' => [ 'shape' => 'MetaUnifierCreateTagRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierCreateTagResponseShape', ],
        ],
        'MetaUnifierModifyTag' => [
            'name' => 'MetaUnifierModifyTag',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierModifyTag',
            ],
            'input' => [ 'shape' => 'MetaUnifierModifyTagRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierModifyTagResponseShape', ],
        ],
        'MetaUnifierDeleteTag' => [
            'name' => 'MetaUnifierDeleteTag',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierDeleteTag',
            ],
            'input' => [ 'shape' => 'MetaUnifierDeleteTagRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierDeleteTagResponseShape', ],
        ],
        'MetaUnifierListTags' => [
            'name' => 'MetaUnifierListTags',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListTags',
            ],
            'input' => [ 'shape' => 'MetaUnifierListTagsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListTagsResponseShape', ],
        ],
        'MetaUnifierAssociateTags' => [
            'name' => 'MetaUnifierAssociateTags',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierAssociateTags',
            ],
            'input' => [ 'shape' => 'MetaUnifierAssociateTagsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierAssociateTagsResponseShape', ],
        ],
        'MetaUnifierListTagsForObject' => [
            'name' => 'MetaUnifierListTagsForObject',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListTagsForObject',
            ],
            'input' => [ 'shape' => 'MetaUnifierListTagsForObjectRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListTagsForObjectResponseShape', ],
        ],
        'MetaUnifierListAssociatedObjects' => [
            'name' => 'MetaUnifierListAssociatedObjects',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListAssociatedObjects',
            ],
            'input' => [ 'shape' => 'MetaUnifierListAssociatedObjectsRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListAssociatedObjectsResponseShape', ],
        ],
        'DataWorkshopTaskTypeDict' => [
            'name' => 'DataWorkshopTaskTypeDict',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskTypeDict',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskTypeDictRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskTypeDictResponseShape', ],
        ],
        'DataWorkshopTaskInstanceStateDict' => [
            'name' => 'DataWorkshopTaskInstanceStateDict',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskInstanceStateDict',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskInstanceStateDictRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskInstanceStateDictResponseShape', ],
        ],
        'DataWorkshopTaskMountStorageDict' => [
            'name' => 'DataWorkshopTaskMountStorageDict',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskMountStorageDict',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskMountStorageDictRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskMountStorageDictResponseShape', ],
        ],
        'DataWorkshopTaskPodTypeDict' => [
            'name' => 'DataWorkshopTaskPodTypeDict',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskPodTypeDict',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskPodTypeDictRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskPodTypeDictResponseShape', ],
        ],
        'DataWorkshopTaskList' => [
            'name' => 'DataWorkshopTaskList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskList',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskListResponseShape', ],
        ],
        'DataWorkshopTaskDetail' => [
            'name' => 'DataWorkshopTaskDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskDetailResponseShape', ],
        ],
        'DataWorkshopTaskInstanceList' => [
            'name' => 'DataWorkshopTaskInstanceList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskInstanceList',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskInstanceListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskInstanceListResponseShape', ],
        ],
        'DataWorkshopAllTaskInstanceList' => [
            'name' => 'DataWorkshopAllTaskInstanceList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopAllTaskInstanceList',
            ],
            'input' => [ 'shape' => 'DataWorkshopAllTaskInstanceListRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopAllTaskInstanceListResponseShape', ],
        ],
        'DataWorkshopTaskInstanceLogs' => [
            'name' => 'DataWorkshopTaskInstanceLogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskInstanceLogs',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskInstanceLogsRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskInstanceLogsResponseShape', ],
        ],
        'DataWorkshopTaskInstanceDetail' => [
            'name' => 'DataWorkshopTaskInstanceDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskInstanceDetail',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskInstanceDetailRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskInstanceDetailResponseShape', ],
        ],
        'DataWorkshopSubmitInstanceLogDownloadTask' => [
            'name' => 'DataWorkshopSubmitInstanceLogDownloadTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopSubmitInstanceLogDownloadTask',
            ],
            'input' => [ 'shape' => 'DataWorkshopSubmitInstanceLogDownloadTaskRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopSubmitInstanceLogDownloadTaskResponseShape', ],
        ],
        'DataWorkshopListInstanceLogDownloadTask' => [
            'name' => 'DataWorkshopListInstanceLogDownloadTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopListInstanceLogDownloadTask',
            ],
            'input' => [ 'shape' => 'DataWorkshopListInstanceLogDownloadTaskRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopListInstanceLogDownloadTaskResponseShape', ],
        ],
        'DataWorkshopTaskGetDashboardUrl' => [
            'name' => 'DataWorkshopTaskGetDashboardUrl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskGetDashboardUrl',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskGetDashboardUrlRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskGetDashboardUrlResponseShape', ],
        ],
        'DataWorkshopTaskCreateOrUpdate' => [
            'name' => 'DataWorkshopTaskCreateOrUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskCreateOrUpdate',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskCreateOrUpdateRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskCreateOrUpdateResponseShape', ],
        ],
        'DataWorkshopTaskDelete' => [
            'name' => 'DataWorkshopTaskDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskDelete',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskDeleteRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskDeleteResponseShape', ],
        ],
        'DataWorkshopTaskBoot' => [
            'name' => 'DataWorkshopTaskBoot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskBoot',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskBootRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskBootResponseShape', ],
        ],
        'DataWorkshopTaskStop' => [
            'name' => 'DataWorkshopTaskStop',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/dataWorkshopTaskStop',
            ],
            'input' => [ 'shape' => 'DataWorkshopTaskStopRequestShape', ],
            'output' => [ 'shape' => 'DataWorkshopTaskStopResponseShape', ],
        ],
        'MetaUnifierQuerySubUsers' => [
            'name' => 'MetaUnifierQuerySubUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierQuerySubUsers',
            ],
            'input' => [ 'shape' => 'MetaUnifierQuerySubUsersRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierQuerySubUsersResponseShape', ],
        ],
        'MetaUnifierAddUsers' => [
            'name' => 'MetaUnifierAddUsers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierAddUsers',
            ],
            'input' => [ 'shape' => 'MetaUnifierAddUsersRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierAddUsersResponseShape', ],
        ],
        'MetaUnifierRemoveUser' => [
            'name' => 'MetaUnifierRemoveUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierRemoveUser',
            ],
            'input' => [ 'shape' => 'MetaUnifierRemoveUserRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierRemoveUserResponseShape', ],
        ],
        'MetaUnifierListUsers' => [
            'name' => 'MetaUnifierListUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListUsers',
            ],
            'input' => [ 'shape' => 'MetaUnifierListUsersRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListUsersResponseShape', ],
        ],
        'MetaUnifierSetUserRoles' => [
            'name' => 'MetaUnifierSetUserRoles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierSetUserRoles',
            ],
            'input' => [ 'shape' => 'MetaUnifierSetUserRolesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierSetUserRolesResponseShape', ],
        ],
        'MetaUnifierListUserRoles' => [
            'name' => 'MetaUnifierListUserRoles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierListUserRoles',
            ],
            'input' => [ 'shape' => 'MetaUnifierListUserRolesRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierListUserRolesResponseShape', ],
        ],
        'MetaUnifierGetUserDetail' => [
            'name' => 'MetaUnifierGetUserDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/metaUnifierGetUserDetail',
            ],
            'input' => [ 'shape' => 'MetaUnifierGetUserDetailRequestShape', ],
            'output' => [ 'shape' => 'MetaUnifierGetUserDetailResponseShape', ],
        ],
        'WorkspaceCreate' => [
            'name' => 'WorkspaceCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceCreate',
            ],
            'input' => [ 'shape' => 'WorkspaceCreateRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceCreateResponseShape', ],
        ],
        'WorkspaceSaveInfo' => [
            'name' => 'WorkspaceSaveInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceSaveInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceSaveInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceSaveInfoResponseShape', ],
        ],
        'WorkspaceGetInfo' => [
            'name' => 'WorkspaceGetInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceGetInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetInfoResponseShape', ],
        ],
        'WorkspaceGetResources' => [
            'name' => 'WorkspaceGetResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetResources',
            ],
            'input' => [ 'shape' => 'WorkspaceGetResourcesRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetResourcesResponseShape', ],
        ],
        'WorkspaceGetList' => [
            'name' => 'WorkspaceGetList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetList',
            ],
            'input' => [ 'shape' => 'WorkspaceGetListRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetListResponseShape', ],
        ],
        'WorkspaceDelete' => [
            'name' => 'WorkspaceDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceDelete',
            ],
            'input' => [ 'shape' => 'WorkspaceDeleteRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceDeleteResponseShape', ],
        ],
        'WorkspaceBundleResource' => [
            'name' => 'WorkspaceBundleResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceBundleResource',
            ],
            'input' => [ 'shape' => 'WorkspaceBundleResourceRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceBundleResourceResponseShape', ],
        ],
        'WorkspaceGetMembers' => [
            'name' => 'WorkspaceGetMembers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetMembers',
            ],
            'input' => [ 'shape' => 'WorkspaceGetMembersRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetMembersResponseShape', ],
        ],
        'WorkspaceGetUcUsers' => [
            'name' => 'WorkspaceGetUcUsers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetUcUsers',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUcUsersRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUcUsersResponseShape', ],
        ],
        'WorkspaceAddMember' => [
            'name' => 'WorkspaceAddMember',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceAddMember',
            ],
            'input' => [ 'shape' => 'WorkspaceAddMemberRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceAddMemberResponseShape', ],
        ],
        'WorkspaceGetUserRoles' => [
            'name' => 'WorkspaceGetUserRoles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetUserRoles',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUserRolesRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUserRolesResponseShape', ],
        ],
        'WorkspaceUpdateUserRole' => [
            'name' => 'WorkspaceUpdateUserRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceUpdateUserRole',
            ],
            'input' => [ 'shape' => 'WorkspaceUpdateUserRoleRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceUpdateUserRoleResponseShape', ],
        ],
        'WorkspaceDeleteMember' => [
            'name' => 'WorkspaceDeleteMember',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceDeleteMember',
            ],
            'input' => [ 'shape' => 'WorkspaceDeleteMemberRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceDeleteMemberResponseShape', ],
        ],
        'WorkspaceGetUcUserByUserName' => [
            'name' => 'WorkspaceGetUcUserByUserName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetUcUserByUserName',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUcUserByUserNameRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUcUserByUserNameResponseShape', ],
        ],
        'WorkspaceVerifyAuth' => [
            'name' => 'WorkspaceVerifyAuth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceVerifyAuth',
            ],
            'input' => [ 'shape' => 'WorkspaceVerifyAuthRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceVerifyAuthResponseShape', ],
        ],
        'WorkspaceGetUcUserByPin' => [
            'name' => 'WorkspaceGetUcUserByPin',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetUcUserByPin',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUcUserByPinRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUcUserByPinResponseShape', ],
        ],
        'WorkspaceVerifyUserIsManager' => [
            'name' => 'WorkspaceVerifyUserIsManager',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceVerifyUserIsManager',
            ],
            'input' => [ 'shape' => 'WorkspaceVerifyUserIsManagerRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceVerifyUserIsManagerResponseShape', ],
        ],
        'WorkspaceGetCurrentUserInfo' => [
            'name' => 'WorkspaceGetCurrentUserInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/apps/{appName}/workspaceGetCurrentUserInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceGetCurrentUserInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetCurrentUserInfoResponseShape', ],
        ],
    ],
    'shapes' => [
        'GpuDropParam' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'GpuDropNodeVO' => [
            'type' => 'structure',
            'members' => [
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'nodeGroupId' => [ 'type' => 'string', 'locationName' => 'nodeGroupId', ],
                'totalResourceCount' => [ 'type' => 'integer', 'locationName' => 'totalResourceCount', ],
                'availableResourceCount' => [ 'type' => 'integer', 'locationName' => 'availableResourceCount', ],
                'purchasedCount' => [ 'type' => 'integer', 'locationName' => 'purchasedCount', ],
                'dropCount' => [ 'type' => 'integer', 'locationName' => 'dropCount', ],
                'standbyCount' => [ 'type' => 'integer', 'locationName' => 'standbyCount', ],
            ],
        ],
        'AiOpsPodDevMachineListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'machineId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'states' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AiOpsPodDevMachineDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsPodDevMachineAlertConfigGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'AiOpsPodDevMachinePodContainer' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'containerType' => [ 'type' => 'string', 'locationName' => 'containerType', ],
            ],
        ],
        'AiOpsPodDevMachineAppLink' => [
            'type' => 'structure',
            'members' => [
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domainIp' => [ 'type' => 'string', 'locationName' => 'domainIp', ],
            ],
        ],
        'AiOpsPodDevMachineConfig' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'k8sClusterId' => [ 'type' => 'string', 'locationName' => 'k8sClusterId', ],
                'containerList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachinePodContainer', ], ],
            ],
        ],
        'AiOpsPodDevMachineStorageMountConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
            ],
        ],
        'AiOpsPodDevMachineImageConfig' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageDisplayName' => [ 'type' => 'string', 'locationName' => 'imageDisplayName', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
            ],
        ],
        'AiOpsPodDevMachineEnvConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AiOpsPodDevMachineUserInfoVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'AiOpsPodDevMachinePodEventVO' => [
            'type' => 'structure',
            'members' => [
                'eventTime' => [ 'type' => 'long', 'locationName' => 'eventTime', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'AiOpsPodDevMachineAccessConfig' => [
            'type' => 'structure',
            'members' => [
                'sshEnabled' => [ 'type' => 'boolean', 'locationName' => 'sshEnabled', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'sshPublicKeys' => [ 'type' => 'string', 'locationName' => 'sshPublicKeys', ],
            ],
        ],
        'AiOpsPodDevMachinePageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineInfoVO', ], ],
            ],
        ],
        'AiOpsPodDevMachineAlertConfigBotInfo' => [
            'type' => 'structure',
            'members' => [
                'botName' => [ 'type' => 'string', 'locationName' => 'botName', ],
                'botId' => [ 'type' => 'string', 'locationName' => 'botId', ],
            ],
        ],
        'AiOpsPodDevMachineAlertConfigUserInfo' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'isSelf' => [ 'type' => 'integer', 'locationName' => 'isSelf', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AiOpsPodDevMachineDetailVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineType' => [ 'type' => 'string', 'locationName' => 'machineType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusInfo' => [ 'type' => 'string', 'locationName' => 'statusInfo', ],
                'imageConfig' =>  [ 'shape' => 'AiOpsPodDevMachineImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineEnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineStorageMountConfig', ], ],
                'podConfig' =>  [ 'shape' => 'AiOpsPodDevMachineConfig', ],
                'accessConfig' =>  [ 'shape' => 'AiOpsPodDevMachineAccessConfig', ],
                'workDir' => [ 'type' => 'string', 'locationName' => 'workDir', ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachinePodEventVO', ], ],
                'appLinks' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineAppLink', ], ],
                'jupyterLink' => [ 'type' => 'string', 'locationName' => 'jupyterLink', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'sshAccessInfo' =>  [ 'shape' => 'AiOpsPodDevMachineSshAccessInfo', ],
                'alertConfig' =>  [ 'shape' => 'AiOpsPodDevMachineAlertConfig', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineUserInfoVo', ], ],
            ],
        ],
        'AiOpsPodDevMachineInfoVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineType' => [ 'type' => 'string', 'locationName' => 'machineType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageDisplayName' => [ 'type' => 'string', 'locationName' => 'imageDisplayName', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusInfo' => [ 'type' => 'string', 'locationName' => 'statusInfo', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceInfo' => [ 'type' => 'string', 'locationName' => 'instanceInfo', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'imageConfig' =>  [ 'shape' => 'AiOpsPodDevMachineImageConfig', ],
                'podConfig' =>  [ 'shape' => 'AiOpsPodDevMachineConfig', ],
                'appLinks' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineAppLink', ], ],
                'jupyterLink' => [ 'type' => 'string', 'locationName' => 'jupyterLink', ],
                'sshAccessInfo' =>  [ 'shape' => 'AiOpsPodDevMachineSshAccessInfo', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'alertConfig' =>  [ 'shape' => 'AiOpsPodDevMachineAlertConfig', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'AiOpsPodDevMachineSshAccessInfo' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'sshCommand' => [ 'type' => 'string', 'locationName' => 'sshCommand', ],
                'sshConfigText' => [ 'type' => 'string', 'locationName' => 'sshConfigText', ],
            ],
        ],
        'AiOpsPodDevMachineAlertConfig' => [
            'type' => 'structure',
            'members' => [
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'alertTriggerEvent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'botIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineAlertConfigBotInfo', ], ],
                'alertPins' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineAlertConfigUserInfo', ], ],
                'alertGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsPodDevMachineAlertConfigGroupInfo', ], ],
            ],
        ],
        'AiOpsRayTaskInstancePodDetailParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsRayTaskInstancePodListParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsRayTaskInstanceDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsRayTaskInstanceListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimeStart' => [ 'type' => 'long', 'locationName' => 'startTimeStart', ],
                'startTimeEnd' => [ 'type' => 'long', 'locationName' => 'startTimeEnd', ],
            ],
        ],
        'AiOpsRayTaskInstanceLogParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsRayTaskInstanceRayHeadConfig' => [
            'type' => 'structure',
            'members' => [
                'headCpu' => [ 'type' => 'integer', 'locationName' => 'headCpu', ],
                'headMemory' => [ 'type' => 'integer', 'locationName' => 'headMemory', ],
                'runtimeEnvYAML' => [ 'type' => 'string', 'locationName' => 'runtimeEnvYAML', ],
            ],
        ],
        'AiOpsRayTaskInstanceRayWorkerConfig' => [
            'type' => 'structure',
            'members' => [
                'workerCpu' => [ 'type' => 'integer', 'locationName' => 'workerCpu', ],
                'workerMemory' => [ 'type' => 'integer', 'locationName' => 'workerMemory', ],
                'workerGpu' => [ 'type' => 'integer', 'locationName' => 'workerGpu', ],
                'workerReplica' => [ 'type' => 'integer', 'locationName' => 'workerReplica', ],
                'workerMinReplica' => [ 'type' => 'integer', 'locationName' => 'workerMinReplica', ],
                'workerMaxReplica' => [ 'type' => 'integer', 'locationName' => 'workerMaxReplica', ],
                'priorityClassName' => [ 'type' => 'string', 'locationName' => 'priorityClassName', ],
            ],
        ],
        'AiOpsRayTaskInstanceImageConfig' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageDisplayName' => [ 'type' => 'string', 'locationName' => 'imageDisplayName', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
            ],
        ],
        'AiOpsTaskPodContainerVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'containerType' => [ 'type' => 'string', 'locationName' => 'containerType', ],
            ],
        ],
        'AiOpsTaskPodEventVO' => [
            'type' => 'structure',
            'members' => [
                'eventTime' => [ 'type' => 'long', 'locationName' => 'eventTime', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'AiOpsRayTaskInstancePodListVO' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'podType' => [ 'type' => 'string', 'locationName' => 'podType', ],
                'cpuRequest' => [ 'type' => 'string', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'string', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'string', 'locationName' => 'gpuRequest', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
            ],
        ],
        'AiOpsRayTaskInstanceInfoVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'runStartTimestamp' => [ 'type' => 'long', 'locationName' => 'runStartTimestamp', ],
                'runEndTimestamp' => [ 'type' => 'long', 'locationName' => 'runEndTimestamp', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'operatorPin' => [ 'type' => 'string', 'locationName' => 'operatorPin', ],
            ],
        ],
        'AiOpsRayTaskInstanceSparkExecutorConfig' => [
            'type' => 'structure',
            'members' => [
                'cores' => [ 'type' => 'integer', 'locationName' => 'cores', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
                'instances' => [ 'type' => 'integer', 'locationName' => 'instances', ],
            ],
        ],
        'AiOpsRayTaskInstanceEnvConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AiOpsRayTaskInstanceStorageMountConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
            ],
        ],
        'AiOpsRayTaskInstanceSparkConfig' => [
            'type' => 'structure',
            'members' => [
                'driverConfig' =>  [ 'shape' => 'AiOpsRayTaskInstanceSparkDriverConfig', ],
                'executorConfig' =>  [ 'shape' => 'AiOpsRayTaskInstanceSparkExecutorConfig', ],
                'sparkConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'depsPyFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'depsFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'mainApplicationFile' => [ 'type' => 'string', 'locationName' => 'mainApplicationFile', ],
                'arguments' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AiOpsRayTaskInstancePodDetailVO' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cpuRequest' => [ 'type' => 'string', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'string', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'string', 'locationName' => 'gpuRequest', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsTaskPodEventVO', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsTaskPodContainerVO', ], ],
            ],
        ],
        'AiOpsRayTaskInstanceLogVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'logLines' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AiOpsRayTaskInstancePageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskInstanceInfoVO', ], ],
            ],
        ],
        'AiOpsRayTaskInstanceDetailVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskInstanceInfoVo' =>  [ 'shape' => 'AiOpsRayTaskInstanceInfoVO', ],
                'imageConfig' =>  [ 'shape' => 'AiOpsRayTaskInstanceImageConfig', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskInstanceEnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskInstanceStorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'queueLabel' => [ 'type' => 'string', 'locationName' => 'queueLabel', ],
                'rayConfig' =>  [ 'shape' => 'AiOpsRayTaskInstanceRayConfig', ],
                'sparkConfig' =>  [ 'shape' => 'AiOpsRayTaskInstanceSparkConfig', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
            ],
        ],
        'AiOpsRayTaskInstanceRayConfig' => [
            'type' => 'structure',
            'members' => [
                'headConfig' =>  [ 'shape' => 'AiOpsRayTaskInstanceRayHeadConfig', ],
                'workerConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskInstanceRayWorkerConfig', ], ],
            ],
        ],
        'AiOpsRayTaskInstanceSparkDriverConfig' => [
            'type' => 'structure',
            'members' => [
                'cores' => [ 'type' => 'integer', 'locationName' => 'cores', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
            ],
        ],
        'AiOpsRayTaskRunRecordListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimeStart' => [ 'type' => 'long', 'locationName' => 'startTimeStart', ],
                'startTimeEnd' => [ 'type' => 'long', 'locationName' => 'startTimeEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsRayTaskListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'latestInstanceStates' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AiOpsRayTaskDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsRayTaskSparkDriverConfig' => [
            'type' => 'structure',
            'members' => [
                'cores' => [ 'type' => 'integer', 'locationName' => 'cores', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
            ],
        ],
        'AiOpsRayTaskInfoVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'typeLabel' => [ 'type' => 'string', 'locationName' => 'typeLabel', ],
                'imageConfig' =>  [ 'shape' => 'AiOpsRayTaskImageConfig', ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueLabel' => [ 'type' => 'string', 'locationName' => 'queueLabel', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'ownerList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskUserInfoVo', ], ],
                'latestInstanceState' => [ 'type' => 'string', 'locationName' => 'latestInstanceState', ],
                'latestInstanceStateLabel' => [ 'type' => 'string', 'locationName' => 'latestInstanceStateLabel', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'alertConfig' =>  [ 'shape' => 'AiOpsRayTaskAlertConfig', ],
            ],
        ],
        'AiOpsRayTaskSparkExecutorConfig' => [
            'type' => 'structure',
            'members' => [
                'cores' => [ 'type' => 'integer', 'locationName' => 'cores', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
                'instances' => [ 'type' => 'integer', 'locationName' => 'instances', ],
            ],
        ],
        'AiOpsRayTaskAlertConfig' => [
            'type' => 'structure',
            'members' => [
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'alertTriggerEvent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'botIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskAlertConfigBotInfo', ], ],
                'alertPins' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskAlertConfigUserInfo', ], ],
                'alertGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskAlertConfigGroupInfo', ], ],
            ],
        ],
        'AiOpsRayTaskRayConfig' => [
            'type' => 'structure',
            'members' => [
                'headConfig' =>  [ 'shape' => 'AiOpsRayTaskRayHeadConfig', ],
                'workerConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskRayWorkerConfig', ], ],
            ],
        ],
        'AiOpsRayTaskStorageMountConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
            ],
        ],
        'AiOpsRayTaskPageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskInfoVO', ], ],
            ],
        ],
        'AiOpsRayTaskEnvConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AiOpsRayTaskRayWorkerConfig' => [
            'type' => 'structure',
            'members' => [
                'workerCpu' => [ 'type' => 'integer', 'locationName' => 'workerCpu', ],
                'workerMemory' => [ 'type' => 'integer', 'locationName' => 'workerMemory', ],
                'workerGpu' => [ 'type' => 'integer', 'locationName' => 'workerGpu', ],
                'workerReplica' => [ 'type' => 'integer', 'locationName' => 'workerReplica', ],
                'workerMinReplica' => [ 'type' => 'integer', 'locationName' => 'workerMinReplica', ],
                'workerMaxReplica' => [ 'type' => 'integer', 'locationName' => 'workerMaxReplica', ],
                'priorityClassName' => [ 'type' => 'string', 'locationName' => 'priorityClassName', ],
            ],
        ],
        'AiOpsRayTaskAlertConfigUserInfo' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'isSelf' => [ 'type' => 'integer', 'locationName' => 'isSelf', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AiOpsRayTaskDetailVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ownerPins' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskUserInfoVo', ], ],
                'imageConfig' =>  [ 'shape' => 'AiOpsRayTaskImageConfig', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskEnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskStorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'queueLabel' => [ 'type' => 'string', 'locationName' => 'queueLabel', ],
                'rayConfig' =>  [ 'shape' => 'AiOpsRayTaskRayConfig', ],
                'sparkConfig' =>  [ 'shape' => 'AiOpsRayTaskSparkConfig', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'updateTimestamp' => [ 'type' => 'long', 'locationName' => 'updateTimestamp', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'alertConfig' =>  [ 'shape' => 'AiOpsRayTaskAlertConfig', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'AiOpsRayTaskUserInfoVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'AiOpsRayTaskAlertConfigGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'AiOpsRayTaskRayHeadConfig' => [
            'type' => 'structure',
            'members' => [
                'headCpu' => [ 'type' => 'integer', 'locationName' => 'headCpu', ],
                'headMemory' => [ 'type' => 'integer', 'locationName' => 'headMemory', ],
                'runtimeEnvYAML' => [ 'type' => 'string', 'locationName' => 'runtimeEnvYAML', ],
            ],
        ],
        'AiOpsRayTaskImageConfig' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageDisplayName' => [ 'type' => 'string', 'locationName' => 'imageDisplayName', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
            ],
        ],
        'AiOpsRayTaskAlertConfigBotInfo' => [
            'type' => 'structure',
            'members' => [
                'botName' => [ 'type' => 'string', 'locationName' => 'botName', ],
                'botId' => [ 'type' => 'string', 'locationName' => 'botId', ],
            ],
        ],
        'AiOpsRayTaskSparkConfig' => [
            'type' => 'structure',
            'members' => [
                'driverConfig' =>  [ 'shape' => 'AiOpsRayTaskSparkDriverConfig', ],
                'executorConfig' =>  [ 'shape' => 'AiOpsRayTaskSparkExecutorConfig', ],
                'sparkConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'depsPyFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'depsFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'mainApplicationFile' => [ 'type' => 'string', 'locationName' => 'mainApplicationFile', ],
                'arguments' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AiOpsResidentClusterDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsResidentClusterListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'AiOpsResidentClusterInfoVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'clusterTypeCode' => [ 'type' => 'string', 'locationName' => 'clusterTypeCode', ],
                'clusterTypeLabel' => [ 'type' => 'string', 'locationName' => 'clusterTypeLabel', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'linkUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterAppLink', ], ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterUserInfoVo', ], ],
                'alertConfig' =>  [ 'shape' => 'AiOpsResidentClusterAlertConfig', ],
            ],
        ],
        'AiOpsResidentClusterDetailVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'clusterTypeCode' => [ 'type' => 'string', 'locationName' => 'clusterTypeCode', ],
                'clusterTypeLabel' => [ 'type' => 'string', 'locationName' => 'clusterTypeLabel', ],
                'linkUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterAppLink', ], ],
                'imageConfig' =>  [ 'shape' => 'AiOpsResidentClusterImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterEnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterStorageMountConfig', ], ],
                'propertyConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterPairConfig', ], ],
                'modelPath' => [ 'type' => 'string', 'locationName' => 'modelPath', ],
                'inferenceFrameWork' => [ 'type' => 'string', 'locationName' => 'inferenceFrameWork', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'clusterConfig' =>  [ 'shape' => 'AiOpsResidentClusterRayConfig', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterUserInfoVo', ], ],
                'alertConfig' =>  [ 'shape' => 'AiOpsResidentClusterAlertConfig', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'AiOpsResidentClusterAlertConfigBotInfo' => [
            'type' => 'structure',
            'members' => [
                'botName' => [ 'type' => 'string', 'locationName' => 'botName', ],
                'botId' => [ 'type' => 'string', 'locationName' => 'botId', ],
            ],
        ],
        'AiOpsResidentClusterStorageMountConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
            ],
        ],
        'AiOpsResidentClusterPairConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AiOpsResidentClusterAlertConfig' => [
            'type' => 'structure',
            'members' => [
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'alertTriggerEvent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'botIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterAlertConfigBotInfo', ], ],
                'alertPins' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterAlertConfigUserInfo', ], ],
                'alertGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterAlertConfigGroupInfo', ], ],
            ],
        ],
        'AiOpsResidentClusterAlertConfigGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'AiOpsResidentClusterRayHeadConfig' => [
            'type' => 'structure',
            'members' => [
                'headCpu' => [ 'type' => 'integer', 'locationName' => 'headCpu', ],
                'headMemory' => [ 'type' => 'integer', 'locationName' => 'headMemory', ],
                'runtimeEnvYAML' => [ 'type' => 'string', 'locationName' => 'runtimeEnvYAML', ],
            ],
        ],
        'AiOpsResidentClusterUserInfoVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'AiOpsResidentClusterAppLink' => [
            'type' => 'structure',
            'members' => [
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domainIp' => [ 'type' => 'string', 'locationName' => 'domainIp', ],
            ],
        ],
        'AiOpsResidentClusterPageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterInfoVO', ], ],
            ],
        ],
        'AiOpsResidentClusterImageConfig' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageDisplayName' => [ 'type' => 'string', 'locationName' => 'imageDisplayName', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
            ],
        ],
        'AiOpsResidentClusterAlertConfigUserInfo' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'isSelf' => [ 'type' => 'integer', 'locationName' => 'isSelf', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AiOpsResidentClusterEnvConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AiOpsResidentClusterRayConfig' => [
            'type' => 'structure',
            'members' => [
                'headConfig' =>  [ 'shape' => 'AiOpsResidentClusterRayHeadConfig', ],
                'workerConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsResidentClusterRayWorkerConfig', ], ],
            ],
        ],
        'AiOpsResidentClusterRayWorkerConfig' => [
            'type' => 'structure',
            'members' => [
                'workerCpu' => [ 'type' => 'integer', 'locationName' => 'workerCpu', ],
                'workerMemory' => [ 'type' => 'integer', 'locationName' => 'workerMemory', ],
                'workerGpu' => [ 'type' => 'integer', 'locationName' => 'workerGpu', ],
                'workerReplica' => [ 'type' => 'integer', 'locationName' => 'workerReplica', ],
                'workerMinReplica' => [ 'type' => 'integer', 'locationName' => 'workerMinReplica', ],
                'workerMaxReplica' => [ 'type' => 'integer', 'locationName' => 'workerMaxReplica', ],
                'priorityClassName' => [ 'type' => 'string', 'locationName' => 'priorityClassName', ],
            ],
        ],
        'TaskTemplateParam' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'configStartDelayTime' => [ 'type' => 'string', 'locationName' => 'configStartDelayTime', ],
                'configFinishDelayTime' => [ 'type' => 'string', 'locationName' => 'configFinishDelayTime', ],
            ],
        ],
        'ContactGroupParam' => [
            'type' => 'structure',
            'members' => [
                'mainPin' => [ 'type' => 'string', 'locationName' => 'mainPin', ],
                'groupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserContactInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mainPin' => [ 'type' => 'string', 'locationName' => 'mainPin', ],
                'personId' => [ 'type' => 'long', 'locationName' => 'personId', ],
            ],
        ],
        'AnalyzeSubmitQueryParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
            ],
        ],
        'AnalyzeQueryRecordsParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'asc' => [ 'type' => 'boolean', 'locationName' => 'asc', ],
            ],
        ],
        'AnalyzeStopQueryParam' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
            ],
        ],
        'AnalyzeClusterStatisticsParam' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
            ],
        ],
        'AnalyzeQueryRecordParam' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
            ],
        ],
        'AnalyzeQueryStatusParam' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
            ],
        ],
        'AnalyzeDeleteRecordParam' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
            ],
        ],
        'AnalyzeSubmitParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
            ],
        ],
        'AnalyzeResultDetail' => [
            'type' => 'structure',
            'members' => [
                'resultFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyzeResultFile', ], ],
                'schemas' => [ 'type' => 'list', 'member' => [ 'type' => 'array', ], ],
                'executionTime' => [ 'type' => 'long', 'locationName' => 'executionTime', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'AnalyzeQueryStatus' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'submitTime' => [ 'type' => 'string', 'locationName' => 'submitTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'executionTime' => [ 'type' => 'long', 'locationName' => 'executionTime', ],
                'schemas' => [ 'type' => 'list', 'member' => [ 'type' => 'array', ], ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'AnalyzeQueryRecordDetail' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'submitParam' =>  [ 'shape' => 'AnalyzeSubmitParam', ],
                'resultDetail' =>  [ 'shape' => 'AnalyzeResultDetail', ],
                'submitTime' => [ 'type' => 'string', 'locationName' => 'submitTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'logUrl' => [ 'type' => 'string', 'locationName' => 'logUrl', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'maxRetryCount' => [ 'type' => 'integer', 'locationName' => 'maxRetryCount', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'AnalyzeResultFile' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'resultUrl' => [ 'type' => 'string', 'locationName' => 'resultUrl', ],
                'logUrl' => [ 'type' => 'string', 'locationName' => 'logUrl', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'fileFormat' => [ 'type' => 'string', 'locationName' => 'fileFormat', ],
                'rowCount' => [ 'type' => 'long', 'locationName' => 'rowCount', ],
                'columnCount' => [ 'type' => 'integer', 'locationName' => 'columnCount', ],
                'dataSize' => [ 'type' => 'long', 'locationName' => 'dataSize', ],
            ],
        ],
        'AnalyzeClusterStatistics' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'runningCount' => [ 'type' => 'integer', 'locationName' => 'runningCount', ],
                'completedCount' => [ 'type' => 'integer', 'locationName' => 'completedCount', ],
                'failedCount' => [ 'type' => 'integer', 'locationName' => 'failedCount', ],
                'pendingCount' => [ 'type' => 'integer', 'locationName' => 'pendingCount', ],
                'activeUserCount' => [ 'type' => 'integer', 'locationName' => 'activeUserCount', ],
            ],
        ],
        'AnalyzeAvailableClusterItem' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
            ],
        ],
        'AnalyzeQueryRecordPage' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyzeQueryRecordItem', ], ],
            ],
        ],
        'AnalyzeQueryRecordItem' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'sqlPreview' => [ 'type' => 'string', 'locationName' => 'sqlPreview', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'submitTime' => [ 'type' => 'string', 'locationName' => 'submitTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'executionTime' => [ 'type' => 'long', 'locationName' => 'executionTime', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'errorMessagePreview' => [ 'type' => 'string', 'locationName' => 'errorMessagePreview', ],
            ],
        ],
        'AnalyzeUserStatistics' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'runningCount' => [ 'type' => 'integer', 'locationName' => 'runningCount', ],
                'completedCount' => [ 'type' => 'integer', 'locationName' => 'completedCount', ],
                'failedCount' => [ 'type' => 'integer', 'locationName' => 'failedCount', ],
                'pendingCount' => [ 'type' => 'integer', 'locationName' => 'pendingCount', ],
            ],
        ],
        'ColumnSchema' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'nullable' => [ 'type' => 'boolean', 'locationName' => 'nullable', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'position' => [ 'type' => 'integer', 'locationName' => 'position', ],
            ],
        ],
        'UserInfo' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'BotInfo' => [
            'type' => 'structure',
            'members' => [
                'botName' => [ 'type' => 'string', 'locationName' => 'botName', ],
                'botId' => [ 'type' => 'string', 'locationName' => 'botId', ],
            ],
        ],
        'BatchAlertConfigParam' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
            ],
        ],
        'AlertConfig' => [
            'type' => 'structure',
            'members' => [
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'alertTriggerEvent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'botIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'BotInfo', ], ],
                'alertPins' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserInfo', ], ],
                'alertGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupInfo', ], ],
                'alertType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GroupInfo' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'BatchAlertConfigVo' => [
            'type' => 'structure',
            'members' => [
                'requestCount' => [ 'type' => 'string', 'locationName' => 'requestCount', ],
                'successCount' => [ 'type' => 'string', 'locationName' => 'successCount', ],
            ],
        ],
        'ClusterAppStateListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'gcsState' => [ 'type' => 'string', 'locationName' => 'gcsState', ],
                'headState' => [ 'type' => 'string', 'locationName' => 'headState', ],
                'operatorState' => [ 'type' => 'string', 'locationName' => 'operatorState', ],
            ],
        ],
        'ClusterAppStateDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ClusterAppStatePageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterAppStateVO', ], ],
            ],
        ],
        'ClusterAppStateVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'owners' => [ 'type' => 'string', 'locationName' => 'owners', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'appConfig' => [ 'type' => 'string', 'locationName' => 'appConfig', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'priorityLevel' => [ 'type' => 'string', 'locationName' => 'priorityLevel', ],
                'gcsState' => [ 'type' => 'string', 'locationName' => 'gcsState', ],
                'headState' => [ 'type' => 'string', 'locationName' => 'headState', ],
                'operatorState' => [ 'type' => 'string', 'locationName' => 'operatorState', ],
                'rawState' => [ 'type' => 'string', 'locationName' => 'rawState', ],
                'sourceCreateTime' => [ 'type' => 'string', 'locationName' => 'sourceCreateTime', ],
                'sourceUpdateTime' => [ 'type' => 'string', 'locationName' => 'sourceUpdateTime', ],
                'syncTime' => [ 'type' => 'string', 'locationName' => 'syncTime', ],
                'stateUpdateTime' => [ 'type' => 'string', 'locationName' => 'stateUpdateTime', ],
            ],
        ],
        'ShutdownConditionParam' => [
            'type' => 'structure',
            'members' => [
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'thresholdValue' => [ 'type' => 'long', 'locationName' => 'thresholdValue', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'ShutdownConditionGroupParam' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'long', 'locationName' => 'groupId', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownConditionParam', ], ],
                'scopeType' => [ 'type' => 'string', 'locationName' => 'scopeType', ],
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ShutdownWhitelistCandidateParam' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SaveDevMachineShutdownPolicyParam' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'conditionGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownConditionGroupParam', ], ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'gracePeriodMinutes' => [ 'type' => 'integer', 'locationName' => 'gracePeriodMinutes', ],
                'notificationChannels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageSavePolicy' => [ 'type' => 'string', 'locationName' => 'imageSavePolicy', ],
                'whitelist' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownWhitelistParam', ], ],
            ],
        ],
        'DeleteDevMachineShutdownPolicyParam' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'GetDevMachineShutdownPolicyParam' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'ShutdownWhitelistParam' => [
            'type' => 'structure',
            'members' => [
                'machineDefinitionId' => [ 'type' => 'string', 'locationName' => 'machineDefinitionId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
            ],
        ],
        'DevMachineShutdownPolicyVo' => [
            'type' => 'structure',
            'members' => [
                'configured' => [ 'type' => 'boolean', 'locationName' => 'configured', ],
                'policyId' => [ 'type' => 'long', 'locationName' => 'policyId', ],
                'conditionGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownConditionGroupVo', ], ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'gracePeriodMinutes' => [ 'type' => 'integer', 'locationName' => 'gracePeriodMinutes', ],
                'notificationChannels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageSavePolicy' => [ 'type' => 'string', 'locationName' => 'imageSavePolicy', ],
                'whitelist' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownWhitelistVo', ], ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'defaultPolicy' =>  [ 'shape' => 'DevMachineDefaultPolicyVo', ],
            ],
        ],
        'ShutdownConditionVo' => [
            'type' => 'structure',
            'members' => [
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'thresholdValue' => [ 'type' => 'long', 'locationName' => 'thresholdValue', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'ShutdownConditionGroupVo' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'long', 'locationName' => 'groupId', ],
                'groupType' => [ 'type' => 'string', 'locationName' => 'groupType', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownConditionVo', ], ],
                'scopeType' => [ 'type' => 'string', 'locationName' => 'scopeType', ],
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DevMachineDefaultPolicyVo' => [
            'type' => 'structure',
            'members' => [
                'conditionGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownConditionGroupVo', ], ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'gracePeriodMinutes' => [ 'type' => 'integer', 'locationName' => 'gracePeriodMinutes', ],
                'notificationChannels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageSavePolicy' => [ 'type' => 'string', 'locationName' => 'imageSavePolicy', ],
            ],
        ],
        'DevMachineAutoShutdownRule' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'long', 'locationName' => 'groupId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'currentDurationSeconds' => [ 'type' => 'long', 'locationName' => 'currentDurationSeconds', ],
            ],
        ],
        'ShutdownWhitelistVo' => [
            'type' => 'structure',
            'members' => [
                'machineDefinitionId' => [ 'type' => 'string', 'locationName' => 'machineDefinitionId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
            ],
        ],
        'DevMachineAutoShutdownVo' => [
            'type' => 'structure',
            'members' => [
                'whitelisted' => [ 'type' => 'boolean', 'locationName' => 'whitelisted', ],
                'displayIdleDurationSeconds' => [ 'type' => 'long', 'locationName' => 'displayIdleDurationSeconds', ],
                'idleRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'DevMachineAutoShutdownRule', ], ],
                'runtimeRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'DevMachineAutoShutdownRule', ], ],
            ],
        ],
        'ShutdownWhitelistCandidateVo' => [
            'type' => 'structure',
            'members' => [
                'machineDefinitionId' => [ 'type' => 'string', 'locationName' => 'machineDefinitionId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'whitelisted' => [ 'type' => 'boolean', 'locationName' => 'whitelisted', ],
            ],
        ],
        'GpuNodeTaintParam' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'ImageCreateReq' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'buildType' => [ 'type' => 'string', 'locationName' => 'buildType', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'devVm' => [ 'type' => 'string', 'locationName' => 'devVm', ],
            ],
        ],
        'ImageAddVersionReq' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'buildType' => [ 'type' => 'string', 'locationName' => 'buildType', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'releaseReason' => [ 'type' => 'string', 'locationName' => 'releaseReason', ],
                'devVm' => [ 'type' => 'string', 'locationName' => 'devVm', ],
            ],
        ],
        'ImageDeleteReq' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
            ],
        ],
        'ImageBriefVO' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imagePath' => [ 'type' => 'string', 'locationName' => 'imagePath', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'repositoryPath' => [ 'type' => 'string', 'locationName' => 'repositoryPath', ],
                'view' => [ 'type' => 'string', 'locationName' => 'view', ],
            ],
        ],
        'ImageBuildTaskVO' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'imageSize' => [ 'type' => 'string', 'locationName' => 'imageSize', ],
                'imageDescription' => [ 'type' => 'string', 'locationName' => 'imageDescription', ],
                'imageCreateTime' => [ 'type' => 'string', 'locationName' => 'imageCreateTime', ],
                'imageUpdateTime' => [ 'type' => 'string', 'locationName' => 'imageUpdateTime', ],
                'buildType' => [ 'type' => 'string', 'locationName' => 'buildType', ],
                'versionDescription' => [ 'type' => 'string', 'locationName' => 'versionDescription', ],
                'buildId' => [ 'type' => 'string', 'locationName' => 'buildId', ],
                'buildStatus' => [ 'type' => 'string', 'locationName' => 'buildStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
            ],
        ],
        'ImageVOPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageVO', ], ],
            ],
        ],
        'ImageBuildLogPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ImageVO' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'size' => [ 'type' => 'string', 'locationName' => 'size', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'frame' => [ 'type' => 'string', 'locationName' => 'frame', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'ImageBuildTaskVOPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageBuildTaskVO', ], ],
            ],
        ],
        'StorageMountConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
            ],
        ],
        'MachineListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineState' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueIdFilter' => [ 'type' => 'string', 'locationName' => 'queueIdFilter', ],
                'ownerFilter' => [ 'type' => 'string', 'locationName' => 'ownerFilter', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
            ],
        ],
        'CvmConfig' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'machinePwd' => [ 'type' => 'string', 'locationName' => 'machinePwd', ],
                'machineType' => [ 'type' => 'string', 'locationName' => 'machineType', ],
                'machineInfo' => [ 'type' => 'string', 'locationName' => 'machineInfo', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'userScript' => [ 'type' => 'string', 'locationName' => 'userScript', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'MachineOperateParam' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
            ],
        ],
        'MachinesParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DiskConfig' => [
            'type' => 'structure',
            'members' => [
                'systemDiskType' => [ 'type' => 'string', 'locationName' => 'systemDiskType', ],
                'systemDiskVol' => [ 'type' => 'integer', 'locationName' => 'systemDiskVol', ],
                'systemDiskNum' => [ 'type' => 'integer', 'locationName' => 'systemDiskNum', ],
                'dataDiskType' => [ 'type' => 'string', 'locationName' => 'dataDiskType', ],
                'dataDiskVol' => [ 'type' => 'integer', 'locationName' => 'dataDiskVol', ],
                'dataDiskNum' => [ 'type' => 'integer', 'locationName' => 'dataDiskNum', ],
            ],
        ],
        'ImageConfig' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'imageDisplayName' => [ 'type' => 'string', 'locationName' => 'imageDisplayName', ],
                'imageDigest' => [ 'type' => 'string', 'locationName' => 'imageDigest', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'registryInfo' => [ 'type' => 'string', 'locationName' => 'registryInfo', ],
                'imageRepo' => [ 'type' => 'string', 'locationName' => 'imageRepo', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'MachineCreateOrUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'cvmConfig' =>  [ 'shape' => 'CvmConfig', ],
                'diskConfig' =>  [ 'shape' => 'DiskConfig', ],
                'networkConfig' =>  [ 'shape' => 'NetworkConfig', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
            ],
        ],
        'NetworkConfig' => [
            'type' => 'structure',
            'members' => [
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'fipId' => [ 'type' => 'string', 'locationName' => 'fipId', ],
            ],
        ],
        'MachineDetailParam' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
            ],
        ],
        'SshAccessInfo' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'sshCommand' => [ 'type' => 'string', 'locationName' => 'sshCommand', ],
                'sshConfigText' => [ 'type' => 'string', 'locationName' => 'sshConfigText', ],
            ],
        ],
        'MachineInfoPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'MachineInfoVo', ], ],
            ],
        ],
        'LinkInfo' => [
            'type' => 'structure',
            'members' => [
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'MachineInfoVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineType' => [ 'type' => 'string', 'locationName' => 'machineType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusInfo' => [ 'type' => 'string', 'locationName' => 'statusInfo', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceInfo' => [ 'type' => 'string', 'locationName' => 'instanceInfo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'links' => [ 'type' => 'list', 'member' => [ 'shape' => 'LinkInfo', ], ],
                'sshAccessInfo' =>  [ 'shape' => 'SshAccessInfo', ],
            ],
        ],
        'MachineDetailVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'cvmConfig' =>  [ 'shape' => 'CvmConfig', ],
                'diskConfig' =>  [ 'shape' => 'DiskConfig', ],
                'networkConfig' =>  [ 'shape' => 'NetworkConfig', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
            ],
        ],
        'SearchTableReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
            ],
        ],
        'CatalogDatasourceListReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
            ],
        ],
        'StorageConfigVo' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DropTableReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'dropTableInfo' => [ 'type' => 'string', 'locationName' => 'dropTableInfo', ],
            ],
        ],
        'CatalogsListReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateOrUpdateModelVersionReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'versionComment' => [ 'type' => 'string', 'locationName' => 'versionComment', ],
                'uris' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'properties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'newProperties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'removeProKeys' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
            ],
        ],
        'CreateOrUpdateCatalogReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'ack' => [ 'type' => 'string', 'locationName' => 'ack', ],
                'sck' => [ 'type' => 'string', 'locationName' => 'sck', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'metastoreUris' => [ 'type' => 'string', 'locationName' => 'metastoreUris', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
            ],
        ],
        'CreateOrUpdateTableReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'distributionStrategy' => [ 'type' => 'string', 'locationName' => 'distributionStrategy', ],
                'bucketCount' => [ 'type' => 'integer', 'locationName' => 'bucketCount', ],
                'fieldInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumnInfoReqVo', ], ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
            ],
        ],
        'DeleteFileSetReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
            ],
        ],
        'FilesetPathVo' => [
            'type' => 'structure',
            'members' => [
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'subPath' => [ 'type' => 'string', 'locationName' => 'subPath', ],
            ],
        ],
        'TableChangeReq' => [
            'type' => 'structure',
            'members' => [
                'updateType' => [ 'type' => 'string', 'locationName' => 'updateType', ],
                'tableNewComment' => [ 'type' => 'string', 'locationName' => 'tableNewComment', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'propertyKey' => [ 'type' => 'string', 'locationName' => 'propertyKey', ],
                'propertyValue' => [ 'type' => 'string', 'locationName' => 'propertyValue', ],
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'fieldComment' => [ 'type' => 'string', 'locationName' => 'fieldComment', ],
                'filedNullable' => [ 'type' => 'boolean', 'locationName' => 'filedNullable', ],
            ],
        ],
        'DropCatalogReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
            ],
        ],
        'ListFilesetFilesReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'subPath' => [ 'type' => 'string', 'locationName' => 'subPath', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'continuationToken' => [ 'type' => 'string', 'locationName' => 'continuationToken', ],
            ],
        ],
        'GenericMetaReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TableColumnInfoReqVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'nullable' => [ 'type' => 'boolean', 'locationName' => 'nullable', ],
                'primaryKey' => [ 'type' => 'boolean', 'locationName' => 'primaryKey', ],
                'partitionTransformType' => [ 'type' => 'string', 'locationName' => 'partitionTransformType', ],
                'partitionTransformArgs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sortable' => [ 'type' => 'boolean', 'locationName' => 'sortable', ],
                'sortDirection' => [ 'type' => 'string', 'locationName' => 'sortDirection', ],
                'bucketKey' => [ 'type' => 'boolean', 'locationName' => 'bucketKey', ],
            ],
        ],
        'CreateOrUpdateFileSetReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'filesetType' => [ 'type' => 'string', 'locationName' => 'filesetType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'storagePath' => [ 'type' => 'object', 'locationName' => 'storagePath', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'removeProKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'newFilesetType' => [ 'type' => 'string', 'locationName' => 'newFilesetType', ],
                'managed' => [ 'type' => 'boolean', 'locationName' => 'managed', ],
            ],
        ],
        'ModifyTableReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'tableChangeReqs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableChangeReq', ], ],
            ],
        ],
        'CreateOrUpdateModelReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'uris' => [ 'type' => 'object', 'locationName' => 'uris', ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newProperties' => [ 'type' => 'object', 'locationName' => 'newProperties', ],
                'removeProKeys' => [ 'type' => 'object', 'locationName' => 'removeProKeys', ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
            ],
        ],
        'SearchSchemaReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
            ],
        ],
        'SearchModelReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DropSchemaReq' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
            ],
        ],
        'CreateOrUpdateSchemaReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'schemaId' => [ 'type' => 'string', 'locationName' => 'schemaId', ],
            ],
        ],
        'FilesetVersionReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'versionCode' => [ 'type' => 'string', 'locationName' => 'versionCode', ],
                'storagePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filesetId' => [ 'type' => 'string', 'locationName' => 'filesetId', ],
                'filesetPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilesetPathVo', ], ],
            ],
        ],
        'SearchFilesetReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
            ],
        ],
        'ModelInfoVo' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'schemaId' => [ 'type' => 'string', 'locationName' => 'schemaId', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'list', 'member' => [ 'shape' => 'MapProVo', ], ],
                'latestVersion' => [ 'type' => 'integer', 'locationName' => 'latestVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'CatalogInfoVo' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'schemaInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SchemaInfoVo', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ModelVersionInfoVo' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'uris' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'versionComment' => [ 'type' => 'string', 'locationName' => 'versionComment', ],
                'properties' => [ 'type' => 'list', 'member' => [ 'shape' => 'MapProVo', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'creatorName' => [ 'type' => 'string', 'locationName' => 'creatorName', ],
                'modifierName' => [ 'type' => 'string', 'locationName' => 'modifierName', ],
            ],
        ],
        'TableBriefInfoVo' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'hasChildren' => [ 'type' => 'boolean', 'locationName' => 'hasChildren', ],
                'view' => [ 'type' => 'string', 'locationName' => 'view', ],
                'filesetId' => [ 'type' => 'string', 'locationName' => 'filesetId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'MapProVo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CatalogBriefInfoVo' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'hasChildren' => [ 'type' => 'boolean', 'locationName' => 'hasChildren', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'CatalogVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'JdbcCatalogInfoVo' => [
            'type' => 'structure',
            'members' => [
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'driver' => [ 'type' => 'string', 'locationName' => 'driver', ],
            ],
        ],
        'CatalogDatasourceInfoVo' => [
            'type' => 'structure',
            'members' => [
                'metalakeName' => [ 'type' => 'string', 'locationName' => 'metalakeName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'gravitinoUri' => [ 'type' => 'string', 'locationName' => 'gravitinoUri', ],
            ],
        ],
        'PageInfoModelInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelInfoVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'FieldTypeVo' => [
            'type' => 'structure',
            'members' => [
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'length' => [ 'type' => 'boolean', 'locationName' => 'length', ],
                'precision' => [ 'type' => 'boolean', 'locationName' => 'precision', ],
                'scale' => [ 'type' => 'boolean', 'locationName' => 'scale', ],
                'complex' => [ 'type' => 'boolean', 'locationName' => 'complex', ],
                'complexArgumentCount' => [ 'type' => 'integer', 'locationName' => 'complexArgumentCount', ],
                'nested' => [ 'type' => 'boolean', 'locationName' => 'nested', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'PageInfoFilesetInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilesetInfoVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'FilesetInfoVo' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'filesetType' => [ 'type' => 'string', 'locationName' => 'filesetType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'propertyMap' => [ 'type' => 'object', 'locationName' => 'propertyMap', ],
                'storagePathMap' => [ 'type' => 'object', 'locationName' => 'storagePathMap', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'PageInfoCatalogVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'CatalogVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'PageInfoSchemaInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'SchemaInfoVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'FilesetFileInfoVo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'lastModified' => [ 'type' => 'string', 'locationName' => 'lastModified', ],
                'isDir' => [ 'type' => 'boolean', 'locationName' => 'isDir', ],
                'fullPath' => [ 'type' => 'string', 'locationName' => 'fullPath', ],
                'mimeType' => [ 'type' => 'string', 'locationName' => 'mimeType', ],
            ],
        ],
        'SchemaBriefInfoVo' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'hasChildren' => [ 'type' => 'boolean', 'locationName' => 'hasChildren', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'TableColumnInfoRespVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'nullable' => [ 'type' => 'boolean', 'locationName' => 'nullable', ],
                'primaryKey' => [ 'type' => 'boolean', 'locationName' => 'primaryKey', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'sortable' => [ 'type' => 'boolean', 'locationName' => 'sortable', ],
                'sortDirection' => [ 'type' => 'string', 'locationName' => 'sortDirection', ],
                'indexable' => [ 'type' => 'boolean', 'locationName' => 'indexable', ],
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'FilesetFileListVo' => [
            'type' => 'structure',
            'members' => [
                'files' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilesetFileInfoVo', ], ],
                'isTruncated' => [ 'type' => 'boolean', 'locationName' => 'isTruncated', ],
                'nextContinuationToken' => [ 'type' => 'string', 'locationName' => 'nextContinuationToken', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'TagBriefVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'ColumnInfoVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'partitionTransformType' => [ 'type' => 'string', 'locationName' => 'partitionTransformType', ],
                'partitionTransformArgs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nullable' => [ 'type' => 'boolean', 'locationName' => 'nullable', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'primaryKey' => [ 'type' => 'boolean', 'locationName' => 'primaryKey', ],
                'sortable' => [ 'type' => 'boolean', 'locationName' => 'sortable', ],
                'sortDirection' => [ 'type' => 'string', 'locationName' => 'sortDirection', ],
                'indexable' => [ 'type' => 'boolean', 'locationName' => 'indexable', ],
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'bucketKey' => [ 'type' => 'boolean', 'locationName' => 'bucketKey', ],
            ],
        ],
        'PageInfoFileSetVersionVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSetVersionVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'PageInfoTableInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableInfoVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'StorageDictVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'TableInfoVo' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'distributionStrategy' => [ 'type' => 'string', 'locationName' => 'distributionStrategy', ],
                'bucketCount' => [ 'type' => 'integer', 'locationName' => 'bucketCount', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'tableSize' => [ 'type' => 'string', 'locationName' => 'tableSize', ],
                'tableFileCount' => [ 'type' => 'integer', 'locationName' => 'tableFileCount', ],
                'tableColumnInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnInfoVo', ], ],
                'ddl' => [ 'type' => 'string', 'locationName' => 'ddl', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'FileSetVersionVo' => [
            'type' => 'structure',
            'members' => [
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
                'versionComment' => [ 'type' => 'string', 'locationName' => 'versionComment', ],
                'storageLocation' => [ 'type' => 'string', 'locationName' => 'storageLocation', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'SchemaInfoVo' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tableCount' => [ 'type' => 'integer', 'locationName' => 'tableCount', ],
                'tableInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableInfoVo', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagBriefVo', ], ],
            ],
        ],
        'PartitionTransformVo' => [
            'type' => 'structure',
            'members' => [
                'transform' => [ 'type' => 'string', 'locationName' => 'transform', ],
                'argsCount' => [ 'type' => 'integer', 'locationName' => 'argsCount', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DiskParam' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'capacity' => [ 'type' => 'integer', 'locationName' => 'capacity', ],
            ],
        ],
        'NodeQueryParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'NodeQueryParamV1' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'NodePoolQueryParamV1' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'string', 'locationName' => 'idHuman', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'UpdateNodePoolParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HpcClusterReq' => [
            'type' => 'structure',
            'members' => [
                'hpcClusterId' => [ 'type' => 'string', 'locationName' => 'hpcClusterId', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'hpcZone' => [ 'type' => 'string', 'locationName' => 'hpcZone', ],
            ],
        ],
        'NodePoolQueryParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodePoolType' => [ 'type' => 'string', 'locationName' => 'nodePoolType', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'AddNodePoolParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'poolType' => [ 'type' => 'string', 'locationName' => 'poolType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'labels' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeConfig' => [ 'type' => 'string', 'locationName' => 'nodeConfig', ],
                'hpcCluster' =>  [ 'shape' => 'HpcClusterReq', ],
                'dataDisk' =>  [ 'shape' => 'DiskParam', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeCount' => [ 'type' => 'integer', 'locationName' => 'timeCount', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'NodeOperateParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'nodeNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'saveDisk' => [ 'type' => 'boolean', 'locationName' => 'saveDisk', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'AddNodeParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeConfig' => [ 'type' => 'string', 'locationName' => 'nodeConfig', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'dataDisk' =>  [ 'shape' => 'DiskParam', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeCount' => [ 'type' => 'integer', 'locationName' => 'timeCount', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
            ],
        ],
        'QuotaVO' => [
            'type' => 'structure',
            'members' => [
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'deviceMemory' => [ 'type' => 'long', 'locationName' => 'deviceMemory', ],
                'gpuMax' => [ 'type' => 'double', 'locationName' => 'gpuMax', ],
                'gpuAllocate' => [ 'type' => 'double', 'locationName' => 'gpuAllocate', ],
                'vgpuMax' => [ 'type' => 'double', 'locationName' => 'vgpuMax', ],
                'vgpuAllocate' => [ 'type' => 'double', 'locationName' => 'vgpuAllocate', ],
                'vgpuAllocateRatio' => [ 'type' => 'double', 'locationName' => 'vgpuAllocateRatio', ],
                'cpuMax' => [ 'type' => 'double', 'locationName' => 'cpuMax', ],
                'cpuAllocate' => [ 'type' => 'double', 'locationName' => 'cpuAllocate', ],
                'cpuAllocateRatio' => [ 'type' => 'double', 'locationName' => 'cpuAllocateRatio', ],
                'memoryMax' => [ 'type' => 'double', 'locationName' => 'memoryMax', ],
                'memoryAllocate' => [ 'type' => 'double', 'locationName' => 'memoryAllocate', ],
                'memoryAllocateRatio' => [ 'type' => 'double', 'locationName' => 'memoryAllocateRatio', ],
            ],
        ],
        'NodeDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'idHuman' => [ 'type' => 'string', 'locationName' => 'idHuman', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeConfig' => [ 'type' => 'string', 'locationName' => 'nodeConfig', ],
                'zones' => [ 'type' => 'string', 'locationName' => 'zones', ],
                'subnet' => [ 'type' => 'string', 'locationName' => 'subnet', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'ipv4' => [ 'type' => 'string', 'locationName' => 'ipv4', ],
                'ipv6' => [ 'type' => 'string', 'locationName' => 'ipv6', ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
                'hpcCluster' => [ 'type' => 'string', 'locationName' => 'hpcCluster', ],
                'os' => [ 'type' => 'string', 'locationName' => 'os', ],
                'osTag' => [ 'type' => 'string', 'locationName' => 'osTag', ],
                'systemDisk' => [ 'type' => 'string', 'locationName' => 'systemDisk', ],
                'dataDisk' => [ 'type' => 'string', 'locationName' => 'dataDisk', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'quota' =>  [ 'shape' => 'QuotaVO', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeEndTime' => [ 'type' => 'string', 'locationName' => 'chargeEndTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'NodePoolDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'idHuman' => [ 'type' => 'string', 'locationName' => 'idHuman', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'zones' => [ 'type' => 'string', 'locationName' => 'zones', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'poolType' => [ 'type' => 'string', 'locationName' => 'poolType', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'topology' => [ 'type' => 'integer', 'locationName' => 'topology', ],
                'rdma' => [ 'type' => 'boolean', 'locationName' => 'rdma', ],
                'hpcCluster' => [ 'type' => 'string', 'locationName' => 'hpcCluster', ],
                'hpcZone' => [ 'type' => 'string', 'locationName' => 'hpcZone', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'labels' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'quota' =>  [ 'shape' => 'QuotaVO', ],
                'nodeConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeConfigVO', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'NodePoolPageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodePoolDTO', ], ],
            ],
        ],
        'NodeConfigVO' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'config' => [ 'type' => 'string', 'locationName' => 'config', ],
            ],
        ],
        'NodePageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeDTO', ], ],
            ],
        ],
        'NodeSpecQueryReq' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeCategory' => [ 'type' => 'string', 'locationName' => 'nodeCategory', ],
                'cpuSpec' => [ 'type' => 'integer', 'locationName' => 'cpuSpec', ],
                'memSpec' => [ 'type' => 'integer', 'locationName' => 'memSpec', ],
                'nodeSpec' => [ 'type' => 'string', 'locationName' => 'nodeSpec', ],
            ],
        ],
        'NodeSpecOptionsDTO' => [
            'type' => 'structure',
            'members' => [
                'cpus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'memories' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'NodeSpecOptionsReq' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeCategory' => [ 'type' => 'string', 'locationName' => 'nodeCategory', ],
            ],
        ],
        'NodeSpecDTO' => [
            'type' => 'structure',
            'members' => [
                'nodeSpec' => [ 'type' => 'string', 'locationName' => 'nodeSpec', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'mem' => [ 'type' => 'integer', 'locationName' => 'mem', ],
                'gpu' => [ 'type' => 'string', 'locationName' => 'gpu', ],
                'localDisks' => [ 'type' => 'string', 'locationName' => 'localDisks', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeCategory' => [ 'type' => 'string', 'locationName' => 'nodeCategory', ],
            ],
        ],
        'CodeConfig' => [
            'type' => 'structure',
            'members' => [
                'codeLanguage' => [ 'type' => 'string', 'locationName' => 'codeLanguage', ],
                'operatorFramework' => [ 'type' => 'string', 'locationName' => 'operatorFramework', ],
                'execCodePath' => [ 'type' => 'string', 'locationName' => 'execCodePath', ],
            ],
        ],
        'OperatorSquareTagFuzzParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operatorTag' => [ 'type' => 'string', 'locationName' => 'operatorTag', ],
            ],
        ],
        'OperatorManageParam' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
            ],
        ],
        'OperatorParams' => [
            'type' => 'structure',
            'members' => [
                'inputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Param', ], ],
                'outputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Param', ], ],
                'constructParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'Param', ], ],
            ],
        ],
        'OperatorVersionCreateOrUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'mediaType' => [ 'type' => 'string', 'locationName' => 'mediaType', ],
                'mediaPath' => [ 'type' => 'string', 'locationName' => 'mediaPath', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'runtimeConstraints' =>  [ 'shape' => 'OperatorRuntimeConstraints', ],
                'operatorParams' =>  [ 'shape' => 'OperatorParams', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'OperatorVersionListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'versionDescription' => [ 'type' => 'string', 'locationName' => 'versionDescription', ],
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
            ],
        ],
        'OperatorRuntimeConstraints' => [
            'type' => 'structure',
            'members' => [
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'runConfig' =>  [ 'shape' => 'RunConfig', ],
                'codeConfig' =>  [ 'shape' => 'CodeConfig', ],
                'className' => [ 'type' => 'string', 'locationName' => 'className', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Param' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nullable' => [ 'type' => 'boolean', 'locationName' => 'nullable', ],
            ],
        ],
        'OperatorListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scope' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
            ],
        ],
        'OperatorSquareListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operatorName' => [ 'type' => 'string', 'locationName' => 'operatorName', ],
                'operatorCode' => [ 'type' => 'string', 'locationName' => 'operatorCode', ],
                'sceneType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'operatorScope' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'operatorTag' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OperatorCreateOrUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'string', 'locationName' => 'sceneType', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'sampleDoc' => [ 'type' => 'string', 'locationName' => 'sampleDoc', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'OperatorVersionManageParam' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
            ],
        ],
        'RunConfig' => [
            'type' => 'structure',
            'members' => [
                'refType' => [ 'type' => 'string', 'locationName' => 'refType', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'mainClass' => [ 'type' => 'string', 'locationName' => 'mainClass', ],
            ],
        ],
        'OperatorInfoVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'string', 'locationName' => 'sceneType', ],
                'currentVersion' => [ 'type' => 'string', 'locationName' => 'currentVersion', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserInfoVo', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'updateTimestamp' => [ 'type' => 'long', 'locationName' => 'updateTimestamp', ],
            ],
        ],
        'OperatorVersionInfoVo' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'updateTimestamp' => [ 'type' => 'long', 'locationName' => 'updateTimestamp', ],
            ],
        ],
        'OperatorVersionDetailVo' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'operatorInfoVo' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorInfoVo', ], ],
                'operatorParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorParams', ], ],
                'runtimeConstraints' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorRuntimeConstraints', ], ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'updateTimestamp' => [ 'type' => 'long', 'locationName' => 'updateTimestamp', ],
            ],
        ],
        'UserInfoVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'OperatorInfoPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorInfoVo', ], ],
            ],
        ],
        'OperatorDetailVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'string', 'locationName' => 'sceneType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserInfoVo', ], ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'updateTimestamp' => [ 'type' => 'long', 'locationName' => 'updateTimestamp', ],
            ],
        ],
        'DictVo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'OperatorSquareTagListVo' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OperatorSquareTreeInfoVo' => [
            'type' => 'structure',
            'members' => [
                'sceneName' => [ 'type' => 'string', 'locationName' => 'sceneName', ],
                'hasChildren' => [ 'type' => 'boolean', 'locationName' => 'hasChildren', ],
            ],
        ],
        'OperatorVersionInfoPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorVersionInfoVo', ], ],
            ],
        ],
        'OperatorSquareTreeInfoListVo' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorSquareTreeInfoVo', ], ],
            ],
        ],
        'AlarmConfigUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'alarmConfigId' => [ 'type' => 'long', 'locationName' => 'alarmConfigId', ],
                'thresholdConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThresholdAlarmConfig', ], ],
                'componentConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentAlarmConfig', ], ],
                'receivers' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserContactInfo', ], ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'scanIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'scanIntervalSeconds', ],
            ],
        ],
        'ComponentAlarmConfig' => [
            'type' => 'structure',
            'members' => [
                'configKey' => [ 'type' => 'string', 'locationName' => 'configKey', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'isEnable' => [ 'type' => 'boolean', 'locationName' => 'isEnable', ],
            ],
        ],
        'AlarmConfigDetailParam' => [
            'type' => 'structure',
            'members' => [
                'alarmConfigId' => [ 'type' => 'long', 'locationName' => 'alarmConfigId', ],
            ],
        ],
        'ThresholdAlarmConfig' => [
            'type' => 'structure',
            'members' => [
                'configKey' => [ 'type' => 'string', 'locationName' => 'configKey', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'express' => [ 'type' => 'string', 'locationName' => 'express', ],
            ],
        ],
        'AlarmConfigVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'thresholdConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThresholdAlarmConfig', ], ],
                'componentConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentAlarmConfig', ], ],
                'receivers' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserContactInfo', ], ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'scanIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'scanIntervalSeconds', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AuditRecordListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'module' => [ 'type' => 'string', 'locationName' => 'module', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'AuditRecordPageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditRecordVO', ], ],
            ],
        ],
        'AuditRecordVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'module' => [ 'type' => 'string', 'locationName' => 'module', ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetName' => [ 'type' => 'string', 'locationName' => 'targetName', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'requestParams' => [ 'type' => 'string', 'locationName' => 'requestParams', ],
                'responseResult' => [ 'type' => 'string', 'locationName' => 'responseResult', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'costTimeMs' => [ 'type' => 'long', 'locationName' => 'costTimeMs', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'TaskInstanceStateParam' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'granularity' => [ 'type' => 'string', 'locationName' => 'granularity', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
            ],
        ],
        'SeriesVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'TaskStatSummaryParam' => [
            'type' => 'structure',
            'members' => [
                'clusterIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'TaskStatSummaryVO' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'totalTaskCount' => [ 'type' => 'long', 'locationName' => 'totalTaskCount', ],
                'totalInstanceCount' => [ 'type' => 'long', 'locationName' => 'totalInstanceCount', ],
                'runningInstanceCount' => [ 'type' => 'long', 'locationName' => 'runningInstanceCount', ],
                'successInstanceCount' => [ 'type' => 'long', 'locationName' => 'successInstanceCount', ],
                'failedInstanceCount' => [ 'type' => 'long', 'locationName' => 'failedInstanceCount', ],
                'successRate' => [ 'type' => 'double', 'locationName' => 'successRate', ],
                'avgDurationSeconds' => [ 'type' => 'long', 'locationName' => 'avgDurationSeconds', ],
                'taskTypeDistribution' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'long', ], ],
            ],
        ],
        'UserContactInfoVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mainPin' => [ 'type' => 'string', 'locationName' => 'mainPin', ],
                'personId' => [ 'type' => 'string', 'locationName' => 'personId', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'extInfo' => [ 'type' => 'string', 'locationName' => 'extInfo', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListPairConfigsParam' => [
            'type' => 'structure',
            'members' => [
                'pairConfigType' => [ 'type' => 'string', 'locationName' => 'pairConfigType', ],
            ],
        ],
        'PairConfigVO' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'placeholder' => [ 'type' => 'string', 'locationName' => 'placeholder', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'TaskInstancePodDetailParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
            ],
        ],
        'TaskInstancePodListParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'PodEventVO' => [
            'type' => 'structure',
            'members' => [
                'eventTime' => [ 'type' => 'long', 'locationName' => 'eventTime', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'TaskPodContainerVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
            ],
        ],
        'TaskInstancePodDetailVO' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cpuRequest' => [ 'type' => 'string', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'string', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'string', 'locationName' => 'gpuRequest', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskPodContainerVO', ], ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodEventVO', ], ],
            ],
        ],
        'TaskInstancePodListVO' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'podType' => [ 'type' => 'string', 'locationName' => 'podType', ],
                'cpuRequest' => [ 'type' => 'string', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'string', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'string', 'locationName' => 'gpuRequest', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
            ],
        ],
        'PodMachineOperateParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'PodContainer' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'containerType' => [ 'type' => 'string', 'locationName' => 'containerType', ],
            ],
        ],
        'PodMachineDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'hasPodEventDetail' => [ 'type' => 'boolean', 'locationName' => 'hasPodEventDetail', ],
            ],
        ],
        'EnvConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'PodMachineCreateOrUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'podConfig' =>  [ 'shape' => 'PodConfig', ],
                'accessConfig' =>  [ 'shape' => 'AccessConfig', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'workDir' => [ 'type' => 'string', 'locationName' => 'workDir', ],
            ],
        ],
        'PodConfig' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'k8sClusterId' => [ 'type' => 'string', 'locationName' => 'k8sClusterId', ],
                'containerList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodContainer', ], ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
            ],
        ],
        'AccessConfig' => [
            'type' => 'structure',
            'members' => [
                'sshEnabled' => [ 'type' => 'boolean', 'locationName' => 'sshEnabled', ],
                'networkType' => [ 'type' => 'string', 'locationName' => 'networkType', ],
                'sshPublicKeys' => [ 'type' => 'string', 'locationName' => 'sshPublicKeys', ],
            ],
        ],
        'PodMachineDetailVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineType' => [ 'type' => 'string', 'locationName' => 'machineType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'outerIp' => [ 'type' => 'string', 'locationName' => 'outerIp', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusInfo' => [ 'type' => 'string', 'locationName' => 'statusInfo', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'workDir' => [ 'type' => 'string', 'locationName' => 'workDir', ],
                'appLinks' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppLink', ], ],
                'jupyterLink' => [ 'type' => 'string', 'locationName' => 'jupyterLink', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
            ],
        ],
        'AppLink' => [
            'type' => 'structure',
            'members' => [
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'ProductStatusResp' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductStatusItem', ], ],
            ],
        ],
        'ProductOrderDetailResp' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
                'orders' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderItemView', ], ],
            ],
        ],
        'ProductStatusItem' => [
            'type' => 'structure',
            'members' => [
                'productType' => [ 'type' => 'string', 'locationName' => 'productType', ],
                'productCode' => [ 'type' => 'string', 'locationName' => 'productCode', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'effectiveStartTime' => [ 'type' => 'string', 'locationName' => 'effectiveStartTime', ],
                'effectiveEndTime' => [ 'type' => 'string', 'locationName' => 'effectiveEndTime', ],
                'latestTaskId' => [ 'type' => 'string', 'locationName' => 'latestTaskId', ],
                'latestOrderStatus' => [ 'type' => 'string', 'locationName' => 'latestOrderStatus', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
            ],
        ],
        'OrderItemView' => [
            'type' => 'structure',
            'members' => [
                'productType' => [ 'type' => 'string', 'locationName' => 'productType', ],
                'productId' => [ 'type' => 'long', 'locationName' => 'productId', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'orderStatus' => [ 'type' => 'string', 'locationName' => 'orderStatus', ],
                'orderStatusDesc' => [ 'type' => 'string', 'locationName' => 'orderStatusDesc', ],
                'orderType' => [ 'type' => 'string', 'locationName' => 'orderType', ],
                'productStatus' => [ 'type' => 'string', 'locationName' => 'productStatus', ],
                'effectiveStartTime' => [ 'type' => 'string', 'locationName' => 'effectiveStartTime', ],
                'effectiveEndTime' => [ 'type' => 'string', 'locationName' => 'effectiveEndTime', ],
                'payMethod' => [ 'type' => 'string', 'locationName' => 'payMethod', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
            ],
        ],
        'PurchaseProductReq' => [
            'type' => 'structure',
            'members' => [
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'PurchaseProductItem', ], ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'PurchaseProductItem' => [
            'type' => 'structure',
            'members' => [
                'productType' => [ 'type' => 'string', 'locationName' => 'productType', ],
                'payMethod' => [ 'type' => 'string', 'locationName' => 'payMethod', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'effectiveStartTime' => [ 'type' => 'string', 'locationName' => 'effectiveStartTime', ],
                'effectiveEndTime' => [ 'type' => 'string', 'locationName' => 'effectiveEndTime', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
            ],
        ],
        'PurchaseProductResp' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'dataWorkshopBuyId' => [ 'type' => 'string', 'locationName' => 'dataWorkshopBuyId', ],
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'PurchasedProductBrief', ], ],
            ],
        ],
        'PurchasedProductBrief' => [
            'type' => 'structure',
            'members' => [
                'productId' => [ 'type' => 'long', 'locationName' => 'productId', ],
                'productType' => [ 'type' => 'string', 'locationName' => 'productType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
            ],
        ],
        'InstanceDto' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'QueueQueryParamV1' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'InstanceReq' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'QueueSaveParam' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'minGpu' => [ 'type' => 'integer', 'locationName' => 'minGpu', ],
                'reservedGpu' => [ 'type' => 'integer', 'locationName' => 'reservedGpu', ],
                'maxGpu' => [ 'type' => 'integer', 'locationName' => 'maxGpu', ],
                'minCpu' => [ 'type' => 'integer', 'locationName' => 'minCpu', ],
                'reservedCpu' => [ 'type' => 'integer', 'locationName' => 'reservedCpu', ],
                'maxCpu' => [ 'type' => 'integer', 'locationName' => 'maxCpu', ],
                'minMemory' => [ 'type' => 'integer', 'locationName' => 'minMemory', ],
                'reservedMemory' => [ 'type' => 'integer', 'locationName' => 'reservedMemory', ],
                'maxMemory' => [ 'type' => 'integer', 'locationName' => 'maxMemory', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'changeType' => [ 'type' => 'string', 'locationName' => 'changeType', ],
            ],
        ],
        'QueueSyncParam' => [
            'type' => 'structure',
            'members' => [
                'queues' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueSyncItemParam', ], ],
            ],
        ],
        'KillInstanceParam' => [
            'type' => 'structure',
            'members' => [
                'instanceDtos' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDto', ], ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
            ],
        ],
        'JoyBuilderQueryParam' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
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
        'QueueInstanceQueryParam' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'QueueSyncItemParam' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'nodePoolName' => [ 'type' => 'string', 'locationName' => 'nodePoolName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'minCpu' => [ 'type' => 'double', 'locationName' => 'minCpu', ],
                'reservedCpu' => [ 'type' => 'double', 'locationName' => 'reservedCpu', ],
                'maxCpu' => [ 'type' => 'double', 'locationName' => 'maxCpu', ],
                'minMemory' => [ 'type' => 'double', 'locationName' => 'minMemory', ],
                'reservedMemory' => [ 'type' => 'double', 'locationName' => 'reservedMemory', ],
                'maxMemory' => [ 'type' => 'double', 'locationName' => 'maxMemory', ],
                'minGpu' => [ 'type' => 'double', 'locationName' => 'minGpu', ],
                'reservedGpu' => [ 'type' => 'double', 'locationName' => 'reservedGpu', ],
                'maxGpu' => [ 'type' => 'double', 'locationName' => 'maxGpu', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
            ],
        ],
        'QueueDeleteParam' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
            ],
        ],
        'QueueQueryParam' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodePoolId' => [ 'type' => 'integer', 'locationName' => 'nodePoolId', ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
            ],
        ],
        'QueueInstancePageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueInstanceVO', ], ],
            ],
        ],
        'InstanceVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cpuRequest' => [ 'type' => 'double', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'double', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'double', 'locationName' => 'gpuRequest', ],
            ],
        ],
        'QueueInfoVO' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'nodePoolName' => [ 'type' => 'string', 'locationName' => 'nodePoolName', ],
                'nodePoolType' => [ 'type' => 'string', 'locationName' => 'nodePoolType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'boundWorkspaceCode' => [ 'type' => 'string', 'locationName' => 'boundWorkspaceCode', ],
                'boundWorkspaceName' => [ 'type' => 'string', 'locationName' => 'boundWorkspaceName', ],
                'allGpu' => [ 'type' => 'double', 'locationName' => 'allGpu', ],
                'availableGpu' => [ 'type' => 'double', 'locationName' => 'availableGpu', ],
                'allocatedGpu' => [ 'type' => 'double', 'locationName' => 'allocatedGpu', ],
                'minGpu' => [ 'type' => 'double', 'locationName' => 'minGpu', ],
                'reservedGpu' => [ 'type' => 'double', 'locationName' => 'reservedGpu', ],
                'maxGpu' => [ 'type' => 'double', 'locationName' => 'maxGpu', ],
                'allCpu' => [ 'type' => 'double', 'locationName' => 'allCpu', ],
                'availableCpu' => [ 'type' => 'double', 'locationName' => 'availableCpu', ],
                'allocatedCpu' => [ 'type' => 'double', 'locationName' => 'allocatedCpu', ],
                'minCpu' => [ 'type' => 'double', 'locationName' => 'minCpu', ],
                'reservedCpu' => [ 'type' => 'double', 'locationName' => 'reservedCpu', ],
                'maxCpu' => [ 'type' => 'double', 'locationName' => 'maxCpu', ],
                'allMemory' => [ 'type' => 'double', 'locationName' => 'allMemory', ],
                'availableMemory' => [ 'type' => 'double', 'locationName' => 'availableMemory', ],
                'allocatedMemory' => [ 'type' => 'double', 'locationName' => 'allocatedMemory', ],
                'minMemory' => [ 'type' => 'double', 'locationName' => 'minMemory', ],
                'reservedMemory' => [ 'type' => 'double', 'locationName' => 'reservedMemory', ],
                'maxMemory' => [ 'type' => 'double', 'locationName' => 'maxMemory', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'hadSync' => [ 'type' => 'boolean', 'locationName' => 'hadSync', ],
            ],
        ],
        'QueueInstanceVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cpuRequest' => [ 'type' => 'double', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'double', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'double', 'locationName' => 'gpuRequest', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'InstanceRespVO' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceVO', ], ],
            ],
        ],
        'QueueInfoPageVO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueInfoVO', ], ],
            ],
        ],
        'QuotaVos' => [
            'type' => 'structure',
            'members' => [
                'gpuMax' => [ 'type' => 'double', 'locationName' => 'gpuMax', ],
                'availableGpu' => [ 'type' => 'double', 'locationName' => 'availableGpu', ],
                'vgpuMax' => [ 'type' => 'double', 'locationName' => 'vgpuMax', ],
                'availableVgpu' => [ 'type' => 'double', 'locationName' => 'availableVgpu', ],
                'cpuMax' => [ 'type' => 'double', 'locationName' => 'cpuMax', ],
                'availableCpu' => [ 'type' => 'double', 'locationName' => 'availableCpu', ],
                'memoryMax' => [ 'type' => 'double', 'locationName' => 'memoryMax', ],
                'availableMemory' => [ 'type' => 'double', 'locationName' => 'availableMemory', ],
            ],
        ],
        'ResidentClusterPodListParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ResidentClusterPodDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
            ],
        ],
        'ResidentClusterPodDetailVO' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cpuRequest' => [ 'type' => 'string', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'string', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'string', 'locationName' => 'gpuRequest', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentClusterPodContainerVO', ], ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentClusterPodEventVO', ], ],
            ],
        ],
        'ResidentClusterPodContainerVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'containerType' => [ 'type' => 'string', 'locationName' => 'containerType', ],
            ],
        ],
        'ResidentClusterPodEventVO' => [
            'type' => 'structure',
            'members' => [
                'eventTime' => [ 'type' => 'long', 'locationName' => 'eventTime', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'ResidentClusterPodListVO' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'podType' => [ 'type' => 'string', 'locationName' => 'podType', ],
                'cpuRequest' => [ 'type' => 'string', 'locationName' => 'cpuRequest', ],
                'memoryRequest' => [ 'type' => 'string', 'locationName' => 'memoryRequest', ],
                'gpuRequest' => [ 'type' => 'string', 'locationName' => 'gpuRequest', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
            ],
        ],
        'ResidentImageConfig' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
            ],
        ],
        'ResidentStorageMountConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
            ],
        ],
        'PairConfig' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CreateOrUpdateClusterParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'imageConfig' =>  [ 'shape' => 'ResidentImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentStorageMountConfig', ], ],
                'propertyConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'PairConfig', ], ],
                'modelPath' => [ 'type' => 'string', 'locationName' => 'modelPath', ],
                'inferenceFrameWork' => [ 'type' => 'string', 'locationName' => 'inferenceFrameWork', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'clusterConfig' =>  [ 'shape' => 'RayConfig', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'PairConfig', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
            ],
        ],
        'RayConfig' => [
            'type' => 'structure',
            'members' => [
                'headConfig' =>  [ 'shape' => 'HeadConfig', ],
                'workerConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkerConfig', ], ],
            ],
        ],
        'SwitchClusterParam' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'ClusterDetailParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ListClusterParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
            ],
        ],
        'HeadConfig' => [
            'type' => 'structure',
            'members' => [
                'headCpu' => [ 'type' => 'integer', 'locationName' => 'headCpu', ],
                'headMemory' => [ 'type' => 'integer', 'locationName' => 'headMemory', ],
                'runtimeEnvYAML' => [ 'type' => 'string', 'locationName' => 'runtimeEnvYAML', ],
            ],
        ],
        'DeleteClusterParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ListClusterInstancesParam' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
            ],
        ],
        'WorkerConfig' => [
            'type' => 'structure',
            'members' => [
                'workerCpu' => [ 'type' => 'integer', 'locationName' => 'workerCpu', ],
                'workerMemory' => [ 'type' => 'integer', 'locationName' => 'workerMemory', ],
                'workerGpu' => [ 'type' => 'integer', 'locationName' => 'workerGpu', ],
                'workerReplica' => [ 'type' => 'integer', 'locationName' => 'workerReplica', ],
                'workerMinReplica' => [ 'type' => 'integer', 'locationName' => 'workerMinReplica', ],
                'workerMaxReplica' => [ 'type' => 'integer', 'locationName' => 'workerMaxReplica', ],
            ],
        ],
        'LinkUrl' => [
            'type' => 'structure',
            'members' => [
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'ResidentUserInfoVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ClusterInfoVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'linkUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'LinkUrl', ], ],
                'clusterTypeCode' => [ 'type' => 'string', 'locationName' => 'clusterTypeCode', ],
                'clusterTypeLabel' => [ 'type' => 'string', 'locationName' => 'clusterTypeLabel', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentUserInfoVo', ], ],
            ],
        ],
        'ClusterDetailVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'clusterTypeCode' => [ 'type' => 'string', 'locationName' => 'clusterTypeCode', ],
                'clusterTypeLabel' => [ 'type' => 'string', 'locationName' => 'clusterTypeLabel', ],
                'imageConfig' =>  [ 'shape' => 'ResidentImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'propertyConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'PairConfig', ], ],
                'clusterConfig' =>  [ 'shape' => 'RayConfig', ],
                'linkUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'LinkUrl', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentUserInfoVo', ], ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
            ],
        ],
        'ClusterInfoPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterInfoVO', ], ],
            ],
        ],
        'CreateResourceQueueParam' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseMode' => [ 'type' => 'string', 'locationName' => 'purchaseMode', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'productVersion' => [ 'type' => 'string', 'locationName' => 'productVersion', ],
                'netWorkString' => [ 'type' => 'string', 'locationName' => 'netWorkString', ],
                'payResourceCpuNum' => [ 'type' => 'integer', 'locationName' => 'payResourceCpuNum', ],
                'memoryToCpuRatio' => [ 'type' => 'integer', 'locationName' => 'memoryToCpuRatio', ],
                'payResourceGpuNum' => [ 'type' => 'integer', 'locationName' => 'payResourceGpuNum', ],
                'resourceGpuType' => [ 'type' => 'string', 'locationName' => 'resourceGpuType', ],
                'payResourceDuration' => [ 'type' => 'integer', 'locationName' => 'payResourceDuration', ],
                'clusterLabel' => [ 'type' => 'string', 'locationName' => 'clusterLabel', ],
            ],
        ],
        'ResourceEditParam' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'ResourceAvailableReqVo' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
            ],
        ],
        'ResourceOperationLogReqVo' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
            ],
        ],
        'QueryResourceInfoParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceFlag' => [ 'type' => 'string', 'locationName' => 'resourceFlag', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilterReq', ], ],
            ],
        ],
        'TagFilterReq' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResourceInfoResp' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
            ],
        ],
        'SubmitOrderResp' => [
            'type' => 'structure',
            'members' => [
                'orderIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'PageInfoResourceOperationLogVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceOperationLogVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'PageInfoResourceInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfoVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'ResourceInfoVo' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'payMethod' => [ 'type' => 'string', 'locationName' => 'payMethod', ],
                'runningTaskNumber' => [ 'type' => 'integer', 'locationName' => 'runningTaskNumber', ],
                'inQueueTaskNumber' => [ 'type' => 'integer', 'locationName' => 'inQueueTaskNumber', ],
                'queueAccess' => [ 'type' => 'string', 'locationName' => 'queueAccess', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'effectiveStartTime' => [ 'type' => 'string', 'locationName' => 'effectiveStartTime', ],
                'effectiveEndTime' => [ 'type' => 'string', 'locationName' => 'effectiveEndTime', ],
                'specInfo' => [ 'type' => 'string', 'locationName' => 'specInfo', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'netWorkString' => [ 'type' => 'string', 'locationName' => 'netWorkString', ],
                'canBeBundled' => [ 'type' => 'string', 'locationName' => 'canBeBundled', ],
                'orderResourceId' => [ 'type' => 'string', 'locationName' => 'orderResourceId', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'ResourceAvailableResp' => [
            'type' => 'structure',
            'members' => [
                'cpuAvailable' => [ 'type' => 'integer', 'locationName' => 'cpuAvailable', ],
                'memoryAvailable' => [ 'type' => 'integer', 'locationName' => 'memoryAvailable', ],
                'gpuAvailable' => [ 'type' => 'integer', 'locationName' => 'gpuAvailable', ],
            ],
        ],
        'ResourceOperationLogVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'operatorType' => [ 'type' => 'string', 'locationName' => 'operatorType', ],
                'preSpecInfo' => [ 'type' => 'string', 'locationName' => 'preSpecInfo', ],
                'targetSpecInfo' => [ 'type' => 'string', 'locationName' => 'targetSpecInfo', ],
                'deployStatus' => [ 'type' => 'string', 'locationName' => 'deployStatus', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
            ],
        ],
        'OwnerGetParam' => [
            'type' => 'structure',
            'members' => [
                'metadataObjectType' => [ 'type' => 'string', 'locationName' => 'metadataObjectType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
            ],
        ],
        'RoleDetailParam' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'SecurableObjectParam' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RoleListParam' => [
            'type' => 'structure',
            'members' => [
                'searchKey' => [ 'type' => 'string', 'locationName' => 'searchKey', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'RoleUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
                'securableObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurableObjectParam', ], ],
            ],
        ],
        'ResourceRolesQueryParam' => [
            'type' => 'structure',
            'members' => [
                'metadataObjectType' => [ 'type' => 'string', 'locationName' => 'metadataObjectType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
            ],
        ],
        'OwnerSetParam' => [
            'type' => 'structure',
            'members' => [
                'metadataObjectType' => [ 'type' => 'string', 'locationName' => 'metadataObjectType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'ownerType' => [ 'type' => 'string', 'locationName' => 'ownerType', ],
            ],
        ],
        'RoleCreateParam' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
                'securableObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurableObjectParam', ], ],
            ],
        ],
        'RoleDeleteParam' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'RoleListItemVo' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
                'roleType' => [ 'type' => 'string', 'locationName' => 'roleType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'RoleDetailVo' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
                'roleType' => [ 'type' => 'string', 'locationName' => 'roleType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'securableObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurableObjectVo', ], ],
            ],
        ],
        'SecurableObjectVo' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RolePrivilegeVo' => [
            'type' => 'structure',
            'members' => [
                'condition' => [ 'type' => 'string', 'locationName' => 'condition', ],
                'privilegeName' => [ 'type' => 'string', 'locationName' => 'privilegeName', ],
            ],
        ],
        'PageInfoRoleListItemVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleListItemVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'RoleBoundVo' => [
            'type' => 'structure',
            'members' => [
                'userNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'groupNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResourceRoleVo' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'RolePrivilegeVo', ], ],
            ],
        ],
        'OwnerVo' => [
            'type' => 'structure',
            'members' => [
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'ownerType' => [ 'type' => 'string', 'locationName' => 'ownerType', ],
            ],
        ],
        'DeleteTagParam' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
            ],
        ],
        'AssociateTagsParam' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tagNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyTagParam' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'newTagName' => [ 'type' => 'string', 'locationName' => 'newTagName', ],
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'ListTagsForObjectParam' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
            ],
        ],
        'ListAssociatedObjectsParam' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateTagParam' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'ListTagsParam' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'PageInfoTagInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfoVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'PageInfoTagAssociatedObjectVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagAssociatedObjectVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'TagInfoVo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastModifier' => [ 'type' => 'string', 'locationName' => 'lastModifier', ],
                'lastModifiedTime' => [ 'type' => 'string', 'locationName' => 'lastModifiedTime', ],
                'creatorName' => [ 'type' => 'string', 'locationName' => 'creatorName', ],
                'lastModifierName' => [ 'type' => 'string', 'locationName' => 'lastModifierName', ],
            ],
        ],
        'TagAssociatedObjectVo' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'associatedTime' => [ 'type' => 'string', 'locationName' => 'associatedTime', ],
            ],
        ],
        'TaskInstanceDetailParam' => [
            'type' => 'structure',
            'members' => [
                'taskInstanceId' => [ 'type' => 'string', 'locationName' => 'taskInstanceId', ],
            ],
        ],
        'GetDashboardParam' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SparkConfig' => [
            'type' => 'structure',
            'members' => [
                'driverConfig' =>  [ 'shape' => 'SparkDriverConfig', ],
                'executorConfig' =>  [ 'shape' => 'SparkExecutorConfig', ],
                'depsPyFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'depsFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'mainApplicationFile' => [ 'type' => 'string', 'locationName' => 'mainApplicationFile', ],
                'arguments' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sparkConf' => [ 'type' => 'object', 'locationName' => 'sparkConf', ],
            ],
        ],
        'TaskDetailParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SparkExecutorConfig' => [
            'type' => 'structure',
            'members' => [
                'cores' => [ 'type' => 'integer', 'locationName' => 'cores', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
                'instances' => [ 'type' => 'integer', 'locationName' => 'instances', ],
            ],
        ],
        'ListInstanceLogDownloadTaskParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SparkDriverConfig' => [
            'type' => 'structure',
            'members' => [
                'cores' => [ 'type' => 'integer', 'locationName' => 'cores', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
            ],
        ],
        'TaskDeleteParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'TaskInstancesParam' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceIdFilter' => [ 'type' => 'string', 'locationName' => 'instanceIdFilter', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimestampStart' => [ 'type' => 'long', 'locationName' => 'startTimestampStart', ],
                'startTimestampEnd' => [ 'type' => 'long', 'locationName' => 'startTimestampEnd', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'TaskInstanceLogParam' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'TaskListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'latestInstanceStates' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
            ],
        ],
        'TaskStopParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SubmitInstanceLogDownloadTaskParam' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TaskBootParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'bootConfig' =>  [ 'shape' => 'TaskBootConfig', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'TaskBootConfig' => [
            'type' => 'structure',
            'members' => [
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'rayConfig' =>  [ 'shape' => 'RayConfig', ],
                'sparkConfig' =>  [ 'shape' => 'SparkConfig', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
            ],
        ],
        'TaskCreateOrUpdateParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ownerPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'rayConfig' =>  [ 'shape' => 'RayConfig', ],
                'sparkConfig' =>  [ 'shape' => 'SparkConfig', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
            ],
        ],
        'TaskInstanceListParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimestampStart' => [ 'type' => 'long', 'locationName' => 'startTimestampStart', ],
                'startTimestampEnd' => [ 'type' => 'long', 'locationName' => 'startTimestampEnd', ],
                'finishTimestampStart' => [ 'type' => 'long', 'locationName' => 'finishTimestampStart', ],
                'finishTimestampEnd' => [ 'type' => 'long', 'locationName' => 'finishTimestampEnd', ],
            ],
        ],
        'TaskInstanceInfoPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstanceInfoVo', ], ],
            ],
        ],
        'InstanceLogDownloadTaskPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceLogDownloadTaskVo', ], ],
            ],
        ],
        'TaskInstanceDetailVo' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskInstanceInfoVo' =>  [ 'shape' => 'TaskInstanceInfoVo', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'queueLabel' => [ 'type' => 'string', 'locationName' => 'queueLabel', ],
                'rayConfig' =>  [ 'shape' => 'RayConfig', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
            ],
        ],
        'TaskInstanceInfoVo' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'stateLabel' => [ 'type' => 'string', 'locationName' => 'stateLabel', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
                'runStartTimestamp' => [ 'type' => 'long', 'locationName' => 'runStartTimestamp', ],
                'runEndTimestamp' => [ 'type' => 'long', 'locationName' => 'runEndTimestamp', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'sourceLabel' => [ 'type' => 'string', 'locationName' => 'sourceLabel', ],
            ],
        ],
        'TaskInstanceLogPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TaskDetailVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ownerPins' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserInfoVo', ], ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'queueLabel' => [ 'type' => 'string', 'locationName' => 'queueLabel', ],
                'rayConfig' =>  [ 'shape' => 'RayConfig', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
                'updateTimestamp' => [ 'type' => 'long', 'locationName' => 'updateTimestamp', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
            ],
        ],
        'TaskInfoPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfoVo', ], ],
            ],
        ],
        'InstanceLogDownloadTaskVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'consumeTime' => [ 'type' => 'double', 'locationName' => 'consumeTime', ],
                'fileSize' => [ 'type' => 'double', 'locationName' => 'fileSize', ],
                'downloadPath' => [ 'type' => 'string', 'locationName' => 'downloadPath', ],
                'logCount' => [ 'type' => 'long', 'locationName' => 'logCount', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'submitTimestamp' => [ 'type' => 'long', 'locationName' => 'submitTimestamp', ],
            ],
        ],
        'TaskInfoVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'typeLabel' => [ 'type' => 'string', 'locationName' => 'typeLabel', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueLabel' => [ 'type' => 'string', 'locationName' => 'queueLabel', ],
                'ownerList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserInfoVo', ], ],
                'latestInstanceState' => [ 'type' => 'string', 'locationName' => 'latestInstanceState', ],
                'latestInstanceStateLabel' => [ 'type' => 'string', 'locationName' => 'latestInstanceStateLabel', ],
                'createTimestamp' => [ 'type' => 'long', 'locationName' => 'createTimestamp', ],
            ],
        ],
        'SetGroupMembersParam' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateGroupParam' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'SetGroupRolesParam' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'roleNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AddUsersParam' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteGroupParam' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'SetUserRolesParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'roleNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RemoveUserParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'GroupMemberVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'UserVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
            ],
        ],
        'PageInfoGroupMemberVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupMemberVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'PageInfoGroupVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'PageInfoSubUserVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubUserVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'GroupVo' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'memberCount' => [ 'type' => 'integer', 'locationName' => 'memberCount', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'UserDetailVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'SubUserVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'PageInfoUserVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'WorkspaceBundleResourceReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bundleResource' => [ 'type' => 'boolean', 'locationName' => 'bundleResource', ],
            ],
        ],
        'WorkspaceCreateReq' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'manager' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'storageConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
            ],
        ],
        'WorkspaceResourcesReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
            ],
        ],
        'WorkspaceQueryReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
            ],
        ],
        'WorkspaceUpdateMemberReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roleCodeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateRoleReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateRoleReq', ], ],
            ],
        ],
        'WorkspaceEditReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'storageConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
            ],
        ],
        'UpdateRoleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userRole' => [ 'type' => 'string', 'locationName' => 'userRole', ],
            ],
        ],
        'WorkspaceUserReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'WorkspaceListQueryReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'isManager' => [ 'type' => 'string', 'locationName' => 'isManager', ],
                'isMember' => [ 'type' => 'string', 'locationName' => 'isMember', ],
            ],
        ],
        'StorageConfig' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'bucketType' => [ 'type' => 'string', 'locationName' => 'bucketType', ],
                'pathPrefix' => [ 'type' => 'string', 'locationName' => 'pathPrefix', ],
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'secretAccessKey' => [ 'type' => 'string', 'locationName' => 'secretAccessKey', ],
                'jpfsId' => [ 'type' => 'string', 'locationName' => 'jpfsId', ],
                'tenantId' => [ 'type' => 'string', 'locationName' => 'tenantId', ],
                'cfsId' => [ 'type' => 'string', 'locationName' => 'cfsId', ],
                'cfsServerIp' => [ 'type' => 'string', 'locationName' => 'cfsServerIp', ],
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'extraConfig' => [ 'type' => 'string', 'locationName' => 'extraConfig', ],
            ],
        ],
        'PageInfoWorkspaceUserResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceUserResp', ], ],
            ],
        ],
        'PageInfoResourceResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceResp', ], ],
            ],
        ],
        'WorkspaceUserResp' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userRoleList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'isAccount' => [ 'type' => 'boolean', 'locationName' => 'isAccount', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'updateDate' => [ 'type' => 'string', 'locationName' => 'updateDate', ],
            ],
        ],
        'ResourceResp' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'resourceSpec' => [ 'type' => 'string', 'locationName' => 'resourceSpec', ],
                'effectiveStartTime' => [ 'type' => 'string', 'locationName' => 'effectiveStartTime', ],
                'bundleTime' => [ 'type' => 'string', 'locationName' => 'bundleTime', ],
            ],
        ],
        'PageInfoWorkspaceListResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceListResp', ], ],
            ],
        ],
        'PageInfoUcUsersResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceUserResp', ], ],
            ],
        ],
        'WorkspaceInfoResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'mangers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'members' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
                'storageConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
            ],
        ],
        'WorkspaceUserRoleResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceListResp' => [
            'type' => 'structure',
            'members' => [
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceMemberNum' => [ 'type' => 'integer', 'locationName' => 'workspaceMemberNum', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'managerPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'members' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
                'modifiedDate' => [ 'type' => 'string', 'locationName' => 'modifiedDate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryGpuDropNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'QueryGpuDropNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuDropNodeVO', ], ],
            ],
        ],
        'QueryGpuDropNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryGpuDropNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListPodDevMachinesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsListPodDevMachinesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetPodDevMachineDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStopPodDevMachineResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsGetPodDevMachineDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetPodDevMachineDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsStopPodDevMachineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsStopPodDevMachineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetPodDevMachineDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsPodDevMachineDetailVO', ],
            ],
        ],
        'AiOpsStartPodDevMachineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStartPodDevMachineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsStartPodDevMachineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsStartPodDevMachineResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsListPodDevMachinesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'machineId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'states' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStopPodDevMachineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListPodDevMachinesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsPodDevMachinePageVO', ],
            ],
        ],
        'AiOpsGetRayTaskDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskDetailVO', ],
            ],
        ],
        'AiOpsListRayTaskInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimeStart' => [ 'type' => 'long', 'locationName' => 'startTimeStart', ],
                'startTimeEnd' => [ 'type' => 'long', 'locationName' => 'startTimeEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetRayTaskDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetRayTaskDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListRayTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'latestInstanceStates' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsBootRayTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetRayTaskDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListRayTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsListRayTasksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsBootRayTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsListRayTaskInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsListRayTaskInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListRayTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskPageVO', ],
            ],
        ],
        'AiOpsBootRayTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsBootRayTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListRayTaskInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskInstancePageVO', ],
            ],
        ],
        'AiOpsGetRayTaskInstanceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskInstanceDetailVO', ],
            ],
        ],
        'AiOpsGetRayTaskInstanceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListRayTaskInstancePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsRayTaskInstancePodListVO', ], ],
            ],
        ],
        'AiOpsGetRayTaskInstancePodDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetRayTaskInstancePodDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetRayTaskInstancePodDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskInstancePodDetailVO', ],
            ],
        ],
        'AiOpsGetRayTaskInstanceLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskInstanceLogVO', ],
            ],
        ],
        'AiOpsGetRayTaskInstanceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetRayTaskInstanceDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetRayTaskInstancePodDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListRayTaskInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimeStart' => [ 'type' => 'long', 'locationName' => 'startTimeStart', ],
                'startTimeEnd' => [ 'type' => 'long', 'locationName' => 'startTimeEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStopRayTaskInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStopRayTaskInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsStopRayTaskInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsStopRayTaskInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListRayTaskInstancePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListRayTaskInstancePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsListRayTaskInstancePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetRayTaskInstanceLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetRayTaskInstanceLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListRayTaskInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsListRayTaskInstanceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListRayTaskInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsRayTaskInstancePageVO', ],
            ],
        ],
        'AiOpsGetRayTaskInstanceLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStartResidentClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsStartResidentClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetResidentClusterDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsResidentClusterDetailVO', ],
            ],
        ],
        'AiOpsListResidentClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListResidentClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsListResidentClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsStartResidentClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStopResidentClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsStopResidentClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetResidentClusterDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetResidentClusterDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsStartResidentClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsGetResidentClusterDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsStopResidentClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListResidentClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AiOpsResidentClusterPageVO', ],
            ],
        ],
        'AiOpsStopResidentClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsGetTaskStatSummaryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetTaskInstanceStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetTaskInstanceStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetTaskInstanceStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'granularity' => [ 'type' => 'string', 'locationName' => 'granularity', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetTaskStatSummaryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AiOpsGetTaskInstanceStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskInstanceStateResult' =>  [ 'shape' => 'TaskInstanceStateResult', ],
            ],
        ],
        'TaskInstanceStateResult' => [
            'type' => 'structure',
            'members' => [
                'timeAxis' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'series' => [ 'type' => 'list', 'member' => [ 'shape' => 'SeriesVO', ], ],
            ],
        ],
        'AiOpsGetTaskStatSummaryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'AiOpsGetTaskStatSummaryResultShape', ], ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsListAllCompanyCodesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AiOpsListAllCompanyCodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsListAllCompanyCodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendAlarmByGroupRequest' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'sendState' => [ 'type' => 'string', 'locationName' => 'sendState', ],
                'templateCode' => [ 'type' => 'string', 'locationName' => 'templateCode', ],
                'taskTemplateParam' =>  [ 'shape' => 'TaskTemplateParam', ],
                'templateParams' => [ 'type' => 'object', 'locationName' => 'templateParams', ],
                'contactGroupParam' =>  [ 'shape' => 'ContactGroupParam', ],
            ],
        ],
        'AlarmHubSendAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'sendState' => [ 'type' => 'string', 'locationName' => 'sendState', ],
                'templateCode' => [ 'type' => 'string', 'locationName' => 'templateCode', ],
                'taskTemplateParam' =>  [ 'shape' => 'TaskTemplateParam', ],
                'templateParams' => [ 'type' => 'object', 'locationName' => 'templateParams', ],
                'userContactInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserContactInfo', ], ],
                'contactGroupParam' =>  [ 'shape' => 'ContactGroupParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AlarmHubSendAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'AlarmHubSendAlarmByGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'sendState' => [ 'type' => 'string', 'locationName' => 'sendState', ],
                'templateCode' => [ 'type' => 'string', 'locationName' => 'templateCode', ],
                'taskTemplateParam' =>  [ 'shape' => 'TaskTemplateParam', ],
                'templateParams' => [ 'type' => 'object', 'locationName' => 'templateParams', ],
                'contactGroupParam' =>  [ 'shape' => 'ContactGroupParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'SendAlarmRequest' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'sendState' => [ 'type' => 'string', 'locationName' => 'sendState', ],
                'templateCode' => [ 'type' => 'string', 'locationName' => 'templateCode', ],
                'taskTemplateParam' =>  [ 'shape' => 'TaskTemplateParam', ],
                'templateParams' => [ 'type' => 'object', 'locationName' => 'templateParams', ],
                'userContactInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserContactInfo', ], ],
                'contactGroupParam' =>  [ 'shape' => 'ContactGroupParam', ],
            ],
        ],
        'AlarmHubSendAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AlarmHubSendAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AlarmHubSendAlarmByGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'AlarmHubSendAlarmByGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AlarmHubSendAlarmByGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchConfigTaskAlertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchConfigTaskAlertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchConfigDevMachineAlertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'BatchConfigTaskAlertResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'BatchAlertConfigVo', ],
            ],
        ],
        'BatchConfigClusterAlertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'BatchConfigClusterAlertResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'BatchAlertConfigVo', ],
            ],
        ],
        'BatchConfigTaskAlertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'BatchConfigDevMachineAlertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchConfigDevMachineAlertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchConfigDevMachineAlertResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'BatchAlertConfigVo', ],
            ],
        ],
        'BatchConfigClusterAlertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchConfigClusterAlertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeQueryRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AnalyzeQueryRecordPage', ],
            ],
        ],
        'AnalyzeUserStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeSubmitQueryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeSubmitQueryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeQueryStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeClusterStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeDeleteRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'AnalyzeQueryRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeQueryRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeStopQueryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeStopQueryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeQueryRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeQueryRecordsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeUserStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeUserStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeSubmitQueryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeAvailableClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeAvailableClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeClusterStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AnalyzeClusterStatistics', ],
            ],
        ],
        'AnalyzeQueryRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeQueryStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeQueryStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeClusterStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeClusterStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeUserStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AnalyzeUserStatistics', ],
            ],
        ],
        'AnalyzeSubmitQueryResult' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
            ],
        ],
        'AnalyzeQueryStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AnalyzeQueryStatus', ],
            ],
        ],
        'AnalyzeDeleteRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeQueryRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'asc' => [ 'type' => 'boolean', 'locationName' => 'asc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeQueryRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AnalyzeQueryRecordDetail', ],
            ],
        ],
        'AnalyzeDeleteRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AnalyzeDeleteRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AnalyzeStopQueryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'AnalyzeAvailableClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeSubmitQueryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AnalyzeSubmitQueryResult', ],
            ],
        ],
        'AnalyzeStopQueryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'executeId' => [ 'type' => 'string', 'locationName' => 'executeId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AnalyzeAvailableClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyzeAvailableClusterItem', ], ],
            ],
        ],
        'AiOpsGetClusterAppStateDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ClusterAppStateVO', ],
            ],
        ],
        'AiOpsGetClusterAppStateDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetClusterAppStateDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetClusterAppStateListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'gcsState' => [ 'type' => 'string', 'locationName' => 'gcsState', ],
                'headState' => [ 'type' => 'string', 'locationName' => 'headState', ],
                'operatorState' => [ 'type' => 'string', 'locationName' => 'operatorState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetClusterAppStateListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ClusterAppStatePageVO', ],
            ],
        ],
        'AiOpsGetClusterAppStateDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetClusterAppStateListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetClusterAppStateListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDevMachineShutdownPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'DevMachineShutdownPolicyVo', ],
            ],
        ],
        'DeleteDevMachineShutdownPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'SaveDevMachineShutdownPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'conditionGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownConditionGroupParam', ], ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'gracePeriodMinutes' => [ 'type' => 'integer', 'locationName' => 'gracePeriodMinutes', ],
                'notificationChannels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageSavePolicy' => [ 'type' => 'string', 'locationName' => 'imageSavePolicy', ],
                'whitelist' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownWhitelistParam', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListDevMachineShutdownWhitelistCandidatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDevMachineShutdownWhitelistCandidatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SaveDevMachineShutdownPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SaveDevMachineShutdownPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDevMachineShutdownPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDevMachineShutdownPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SaveDevMachineShutdownPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'DevMachineShutdownPolicyVo', ],
            ],
        ],
        'DeleteDevMachineShutdownPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GetDevMachineShutdownPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GetDevMachineShutdownPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDevMachineShutdownPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDevMachineShutdownWhitelistCandidatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ShutdownWhitelistCandidateVo', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ListDevMachineShutdownWhitelistCandidatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetGroupRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierSetGroupRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetGroupMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierCreateGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListGroupRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListGroupRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSetGroupRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierDeleteGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListGroupRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetGroupRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'roleNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetGroupMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierSetGroupMembersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoGroupVo', ],
            ],
        ],
        'MetaUnifierCreateGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GroupVo', ],
            ],
        ],
        'MetaUnifierListGroupRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleBoundVo', ], ],
            ],
        ],
        'MetaUnifierDeleteGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDeleteGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListGroupMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoGroupMemberVo', ],
            ],
        ],
        'MetaUnifierSetGroupMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListGroupMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListGroupMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListGroupMembersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageBuildLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ImageBuildLogPageVo', ],
            ],
        ],
        'DataWorkshopImageCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'buildType' => [ 'type' => 'string', 'locationName' => 'buildType', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'devVm' => [ 'type' => 'string', 'locationName' => 'devVm', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageBuildTaskListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ImageBuildTaskVOPageVo', ],
            ],
        ],
        'DataWorkshopImageRetryBuildTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageBuildTaskId' => [ 'type' => 'string', 'locationName' => 'imageBuildTaskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageExternalBriefInfoListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageExternalBriefInfoListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageAddVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageDeleteVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageDeleteVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageExternalBriefInfoListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageBriefVO', ], ],
            ],
        ],
        'DataWorkshopImageRepositoryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageRetryBuildTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageRetryBuildTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageVersionAutoGenerateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageRegistryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DataWorkshopImageNameExistsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageRepositoryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DataWorkshopImageRegistryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageVersionExistsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageInfoListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageInfoListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageVersionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DataWorkshopImageDeleteVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageBuildTaskListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageBuildTaskListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageNameExistsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageNameExistsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageVersionAutoGenerateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageRetryBuildTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageInfoListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ImageVOPageVo', ],
            ],
        ],
        'DataWorkshopImageVersionAutoGenerateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageVersionAutoGenerateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageVersionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageVersionListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageVersionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageInfoListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageBuildLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageBuildTaskId' => [ 'type' => 'string', 'locationName' => 'imageBuildTaskId', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageBuildLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageBuildLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageBuildTaskListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageAddVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageAddVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageRepositoryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageRepositoryListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageExternalBriefInfoListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'fuzz' => [ 'type' => 'boolean', 'locationName' => 'fuzz', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageVersionExistsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopImageRegistryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageRegistryListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageVersionExistsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageVersionExistsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopImageDeleteVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageAddVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'buildType' => [ 'type' => 'string', 'locationName' => 'buildType', ],
                'registryName' => [ 'type' => 'string', 'locationName' => 'registryName', ],
                'repositoryName' => [ 'type' => 'string', 'locationName' => 'repositoryName', ],
                'imageVersion' => [ 'type' => 'string', 'locationName' => 'imageVersion', ],
                'releaseReason' => [ 'type' => 'string', 'locationName' => 'releaseReason', ],
                'devVm' => [ 'type' => 'string', 'locationName' => 'devVm', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageNameExistsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopImageCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopImageCreateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineTotalPriceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'cvmConfig' =>  [ 'shape' => 'CvmConfig', ],
                'diskConfig' =>  [ 'shape' => 'DiskConfig', ],
                'networkConfig' =>  [ 'shape' => 'NetworkConfig', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'MachineInfoVo', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MachineTotalPriceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'MachineTotalPriceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineTotalPriceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AllMachineListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AllMachineListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineState' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueIdFilter' => [ 'type' => 'string', 'locationName' => 'queueIdFilter', ],
                'ownerFilter' => [ 'type' => 'string', 'locationName' => 'ownerFilter', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AllMachineListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'MachineInfoVo', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AllMachineListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'machineName' => [ 'type' => 'string', 'locationName' => 'machineName', ],
                'machineId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'machineState' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueIdFilter' => [ 'type' => 'string', 'locationName' => 'queueIdFilter', ],
                'ownerFilter' => [ 'type' => 'string', 'locationName' => 'ownerFilter', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'MachineDetailVo', ],
            ],
        ],
        'MachineStartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineStartResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MachineStopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineStartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineStartResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MachineCreateOrUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'cvmConfig' =>  [ 'shape' => 'CvmConfig', ],
                'diskConfig' =>  [ 'shape' => 'DiskConfig', ],
                'networkConfig' =>  [ 'shape' => 'NetworkConfig', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineCreateOrUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineCreateOrUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MachineStopResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MachineDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'machineId' => [ 'type' => 'string', 'locationName' => 'machineId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MachineCreateOrUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MachineStopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MachineStopResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierExternalListCatalogDatasourceInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierExternalListCatalogDatasourceInfosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierExternalListCatalogDatasourceInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierExternalListSchemaBriefInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'SchemaBriefInfoVo', ], ],
            ],
        ],
        'MetaUnifierExternalListCatalogBriefInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'CatalogBriefInfoVo', ], ],
            ],
        ],
        'MetaUnifierExternalListCatalogBriefInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierExternalListCatalogDatasourceInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'CatalogDatasourceInfoVo', ], ],
            ],
        ],
        'MetaUnifierExternalGetCatalogDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'CatalogInfoVo', ],
            ],
        ],
        'MetaUnifierExternalListSchemaBriefInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierExternalListSchemaBriefInfosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierExternalGetCatalogDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierExternalListSchemaBriefInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierExternalListCatalogBriefInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierExternalListCatalogBriefInfosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierExternalGetCatalogDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierExternalGetCatalogDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListColumnBriefInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListColumnBriefInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSearchBriefInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierSearchBriefInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSearchBriefInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListSchemaBriefInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListCatalogBriefInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListCatalogBriefInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListCatalogBriefInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSearchBriefInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableBriefInfoVo', ], ],
            ],
        ],
        'MetaUnifierListTableBriefInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableBriefInfoVo', ], ],
            ],
        ],
        'MetaUnifierListSchemaBriefInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListSchemaBriefInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListTableBriefInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListSchemaBriefInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'SchemaBriefInfoVo', ], ],
            ],
        ],
        'MetaUnifierListColumnBriefInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListColumnBriefInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumnInfoRespVo', ], ],
            ],
        ],
        'MetaUnifierListCatalogBriefInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'CatalogBriefInfoVo', ], ],
            ],
        ],
        'MetaUnifierListTableBriefInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListTableBriefInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierDeleteFileSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDeleteFileSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetFileSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetFileSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'CatalogInfoVo', ],
            ],
        ],
        'MetaUnifierRegisterModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ModelInfoVo', ],
            ],
        ],
        'MetaUnifierCreateCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'ack' => [ 'type' => 'string', 'locationName' => 'ack', ],
                'sck' => [ 'type' => 'string', 'locationName' => 'sck', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'metastoreUris' => [ 'type' => 'string', 'locationName' => 'metastoreUris', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDropSchemaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDropSchemaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierDeleteFileSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListModelVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelVersionInfoVo', ], ],
            ],
        ],
        'MetaUnifierModifyFileSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'filesetType' => [ 'type' => 'string', 'locationName' => 'filesetType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'storagePath' => [ 'type' => 'object', 'locationName' => 'storagePath', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'removeProKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'newFilesetType' => [ 'type' => 'string', 'locationName' => 'newFilesetType', ],
                'managed' => [ 'type' => 'boolean', 'locationName' => 'managed', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetSchemaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetSchemaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierModifyCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListFieldTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListFieldTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ModelVersionInfoVo', ],
            ],
        ],
        'MetaUnifierListModelVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFieldTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldTypeVo', ], ],
            ],
        ],
        'MetaUnifierGetModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListFileSetFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'FilesetFileListVo', ],
            ],
        ],
        'MetaUnifierListCatalogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierAlterModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'uris' => [ 'type' => 'object', 'locationName' => 'uris', ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newProperties' => [ 'type' => 'object', 'locationName' => 'newProperties', ],
                'removeProKeys' => [ 'type' => 'object', 'locationName' => 'removeProKeys', ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDropCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListSchemaResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoSchemaInfoVo', ],
            ],
        ],
        'MetaUnifierListFileSetVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoFileSetVersionVo', ],
            ],
        ],
        'MetaUnifierCreateCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateCatalogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierLinkModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ModelVersionInfoVo', ],
            ],
        ],
        'MetaUnifierModifySchemaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierModifySchemaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'distributionStrategy' => [ 'type' => 'string', 'locationName' => 'distributionStrategy', ],
                'bucketCount' => [ 'type' => 'integer', 'locationName' => 'bucketCount', ],
                'fieldInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumnInfoReqVo', ], ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFileSetVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListFileSetVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierDeleteModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'CatalogInfoVo', ],
            ],
        ],
        'MetaUnifierListModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoModelInfoVo', ],
            ],
        ],
        'MetaUnifierListSchemaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListSchemaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierAddFileSetVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'versionCode' => [ 'type' => 'string', 'locationName' => 'versionCode', ],
                'storagePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filesetId' => [ 'type' => 'string', 'locationName' => 'filesetId', ],
                'filesetPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilesetPathVo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFileSetVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'versionName' => [ 'type' => 'string', 'locationName' => 'versionName', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'versionCode' => [ 'type' => 'string', 'locationName' => 'versionCode', ],
                'storagePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filesetId' => [ 'type' => 'string', 'locationName' => 'filesetId', ],
                'filesetPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilesetPathVo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetFileSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'filesetType' => [ 'type' => 'string', 'locationName' => 'filesetType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'storagePath' => [ 'type' => 'object', 'locationName' => 'storagePath', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'removeProKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'newFilesetType' => [ 'type' => 'string', 'locationName' => 'newFilesetType', ],
                'managed' => [ 'type' => 'boolean', 'locationName' => 'managed', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierDropTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'dropTableInfo' => [ 'type' => 'string', 'locationName' => 'dropTableInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFileSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierAlterModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierAlterModelVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListFileSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListFileSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierAlterModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'versionComment' => [ 'type' => 'string', 'locationName' => 'versionComment', ],
                'uris' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'properties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'newProperties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'removeProKeys' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierModifySchemaResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierDeleteModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDeleteModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListSchemaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFileSetFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'subPath' => [ 'type' => 'string', 'locationName' => 'subPath', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'continuationToken' => [ 'type' => 'string', 'locationName' => 'continuationToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierModifyTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierModifyTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetSchemaResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'SchemaInfoVo', ],
            ],
        ],
        'MetaUnifierModifyCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'ack' => [ 'type' => 'string', 'locationName' => 'ack', ],
                'sck' => [ 'type' => 'string', 'locationName' => 'sck', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'metastoreUris' => [ 'type' => 'string', 'locationName' => 'metastoreUris', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierCreateFileSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'filesetType' => [ 'type' => 'string', 'locationName' => 'filesetType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'storagePath' => [ 'type' => 'object', 'locationName' => 'storagePath', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'removeProKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'newFilesetType' => [ 'type' => 'string', 'locationName' => 'newFilesetType', ],
                'managed' => [ 'type' => 'boolean', 'locationName' => 'managed', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListTablePartitionTransformsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'PartitionTransformVo', ], ],
            ],
        ],
        'MetaUnifierDropSchemaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'ack' => [ 'type' => 'string', 'locationName' => 'ack', ],
                'sck' => [ 'type' => 'string', 'locationName' => 'sck', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'metastoreUris' => [ 'type' => 'string', 'locationName' => 'metastoreUris', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierAddFileSetVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierAddFileSetVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListTablePartitionTransformsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierRegisterModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierRegisterModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetSchemaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'schemaId' => [ 'type' => 'string', 'locationName' => 'schemaId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetFileSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'FilesetInfoVo', ],
            ],
        ],
        'MetaUnifierModifyCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierModifyCatalogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierDropTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDropTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateSchemaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateSchemaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListCatalogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoCatalogVo', ],
            ],
        ],
        'MetaUnifierListFileSetFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListFileSetFilesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierLinkModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'versionComment' => [ 'type' => 'string', 'locationName' => 'versionComment', ],
                'uris' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'properties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'newProperties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'removeProKeys' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierLinkModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierLinkModelVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateSchemaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'schemaId' => [ 'type' => 'string', 'locationName' => 'schemaId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierAlterModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ModelInfoVo', ],
            ],
        ],
        'MetaUnifierDropCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierRegisterModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'uris' => [ 'type' => 'object', 'locationName' => 'uris', ],
                'aliases' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'newProperties' => [ 'type' => 'object', 'locationName' => 'newProperties', ],
                'removeProKeys' => [ 'type' => 'object', 'locationName' => 'removeProKeys', ],
                'newComment' => [ 'type' => 'string', 'locationName' => 'newComment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierDropTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierModifyFileSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierAlterModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierAlterModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetModelVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'nameSpace' => [ 'type' => 'string', 'locationName' => 'nameSpace', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchLevel' => [ 'type' => 'string', 'locationName' => 'searchLevel', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelVersion' => [ 'type' => 'integer', 'locationName' => 'modelVersion', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierCreateSchemaResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'SchemaInfoVo', ],
            ],
        ],
        'MetaUnifierModifyTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierCreateFileSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierDropSchemaResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierAlterModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ModelVersionInfoVo', ],
            ],
        ],
        'MetaUnifierGetTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListCatalogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListCatalogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'TableInfoVo', ],
            ],
        ],
        'MetaUnifierListTablePartitionTransformsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListTablePartitionTransformsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFieldTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierCreateTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierModifyFileSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierModifyFileSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierModifyTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'tableChangeReqs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableChangeReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDeleteModelVersionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierModifySchemaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'storageConfigVo' =>  [ 'shape' => 'StorageConfigVo', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'schemaId' => [ 'type' => 'string', 'locationName' => 'schemaId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListFileSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoFilesetInfoVo', ],
            ],
        ],
        'MetaUnifierDropCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDropCatalogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetCatalogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'partition' => [ 'type' => 'boolean', 'locationName' => 'partition', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'distributionStrategy' => [ 'type' => 'string', 'locationName' => 'distributionStrategy', ],
                'bucketCount' => [ 'type' => 'integer', 'locationName' => 'bucketCount', ],
                'fieldInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumnInfoReqVo', ], ],
                'properties' => [ 'type' => 'object', 'locationName' => 'properties', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteFileSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoTableInfoVo', ],
            ],
        ],
        'MetaUnifierAddFileSetVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierGetModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ModelInfoVo', ],
            ],
        ],
        'MetaUnifierListModelVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListModelVersionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateFileSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateFileSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'nodeNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'saveDisk' => [ 'type' => 'boolean', 'locationName' => 'saveDisk', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'StopNodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StopNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopNodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetNodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'NodeDTO', ],
            ],
        ],
        'GetNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetNodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelNodeBatchResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StartNodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ListNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeDTO', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StartNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'nodeNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'saveDisk' => [ 'type' => 'boolean', 'locationName' => 'saveDisk', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'EnableNodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DelNodeBatchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DelNodeBatchResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'nodeNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'saveDisk' => [ 'type' => 'boolean', 'locationName' => 'saveDisk', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartNodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelNodeBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'nodeNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'saveDisk' => [ 'type' => 'boolean', 'locationName' => 'saveDisk', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'EnableNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableNodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UpdateNodePoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DelNodePoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodePoolType' => [ 'type' => 'string', 'locationName' => 'nodePoolType', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListNodePoolsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListNodePoolsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListNodePoolsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodePoolType' => [ 'type' => 'string', 'locationName' => 'nodePoolType', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DelNodePoolResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'UpdateNodePoolResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetNodePoolResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'NodePoolDTO', ],
            ],
        ],
        'ListNodePoolsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodePoolDTO', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'UpdateNodePoolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateNodePoolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelNodePoolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DelNodePoolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetNodePoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'idHuman' => [ 'type' => 'string', 'locationName' => 'idHuman', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GetNodePoolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetNodePoolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListNodeSpecOptionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListNodeSpecOptionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListNodeSpecsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeSpecDTO', ], ],
            ],
        ],
        'ListNodeSpecsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeCategory' => [ 'type' => 'string', 'locationName' => 'nodeCategory', ],
                'cpuSpec' => [ 'type' => 'integer', 'locationName' => 'cpuSpec', ],
                'memSpec' => [ 'type' => 'integer', 'locationName' => 'memSpec', ],
                'nodeSpec' => [ 'type' => 'string', 'locationName' => 'nodeSpec', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListNodeSpecOptionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'NodeSpecOptionsDTO', ],
            ],
        ],
        'ListNodeSpecOptionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeCategory' => [ 'type' => 'string', 'locationName' => 'nodeCategory', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListNodeSpecsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListNodeSpecsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorDevLanguageEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorSceneTypeEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorVersionStateEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorVisibleScopeEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorParamTypeEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorRefTypeEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorRefTypeEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorDevLanguageEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorDevLanguageEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVisibleScopeEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorFrameworkTypeEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVisibleScopeEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVisibleScopeEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionOrderbyEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorFrameworkTypeEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorSceneTypeEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorSceneTypeEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorRefTypeEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorVersionStateEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionStateEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionOrderbyEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorDevLanguageEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorRefTypeEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorParamTypeEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorParamTypeEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorSceneTypeEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionOrderbyEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionOrderbyEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorParamTypeEnumResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopOperatorFrameworkTypeEnumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorFrameworkTypeEnumResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionStateEnumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scope' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorInfoPageVo', ], ],
            ],
        ],
        'DataWorkshopOperatorListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OperatorDetailVo', ],
            ],
        ],
        'DataWorkshopOperatorDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorCreateOrUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopOperatorCreateOrUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorCreateOrUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopOperatorDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorCreateOrUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'string', 'locationName' => 'sceneType', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'sampleDoc' => [ 'type' => 'string', 'locationName' => 'sampleDoc', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorSquareTagFuzzListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operatorTag' => [ 'type' => 'string', 'locationName' => 'operatorTag', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionDetailInSquareResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionDetailInSquareResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorSquareTagFuzzListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorSquareTagListVo', ], ],
            ],
        ],
        'DataWorkshopOperatorVersionDetailInSquareResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OperatorVersionDetailVo', ],
            ],
        ],
        'DataWorkshopOperatorSquareOperatorListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorSquareOperatorListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorSquareTagFuzzListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorSquareTagFuzzListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorSquareTreeInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OperatorSquareTreeInfoListVo', ],
            ],
        ],
        'DataWorkshopOperatorVersionDetailInSquareRequestShape' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorSquareTreeInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorSquareTreeInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorSquareOperatorListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sceneType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scope' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorDetailInSquareResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorDetailInSquareResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorDetailInSquareResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OperatorDetailVo', ],
            ],
        ],
        'DataWorkshopOperatorVersionListInSquareResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionListInSquareResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorSquareTreeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operatorName' => [ 'type' => 'string', 'locationName' => 'operatorName', ],
                'operatorCode' => [ 'type' => 'string', 'locationName' => 'operatorCode', ],
                'sceneType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'operatorScope' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'operatorTag' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorDetailInSquareRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionListInSquareRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'versionDescription' => [ 'type' => 'string', 'locationName' => 'versionDescription', ],
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionListInSquareResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorVersionInfoPageVo', ], ],
            ],
        ],
        'DataWorkshopOperatorSquareOperatorListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorInfoPageVo', ], ],
            ],
        ],
        'DataWorkshopOperatorVersionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'versionDescription' => [ 'type' => 'string', 'locationName' => 'versionDescription', ],
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'orderByAsc' => [ 'type' => 'boolean', 'locationName' => 'orderByAsc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OperatorVersionDetailVo', ],
            ],
        ],
        'DataWorkshopOperatorVersionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperatorVersionInfoPageVo', ], ],
            ],
        ],
        'DataWorkshopOperatorVersionDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopOperatorVersionCopyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopOperatorVersionOnlineResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopOperatorVersionCreateOrUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopOperatorVersionCreateOrUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operatorId' => [ 'type' => 'string', 'locationName' => 'operatorId', ],
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'mediaType' => [ 'type' => 'string', 'locationName' => 'mediaType', ],
                'mediaPath' => [ 'type' => 'string', 'locationName' => 'mediaPath', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'runtimeConstraints' =>  [ 'shape' => 'OperatorRuntimeConstraints', ],
                'operatorParams' =>  [ 'shape' => 'OperatorParams', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionOnlineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionOnlineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionOnlineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionCopyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionCopyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOperatorVersionCopyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'versionId' => [ 'type' => 'string', 'locationName' => 'versionId', ],
                'versionState' => [ 'type' => 'string', 'locationName' => 'versionState', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopOperatorVersionCreateOrUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOperatorVersionCreateOrUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsAlarmConfigUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsAlarmConfigUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsAlarmConfigUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AiOpsAlarmConfigDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsAlarmConfigDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsAlarmConfigDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AlarmConfigVO', ],
            ],
        ],
        'AiOpsAlarmConfigUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmConfigId' => [ 'type' => 'long', 'locationName' => 'alarmConfigId', ],
                'thresholdConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThresholdAlarmConfig', ], ],
                'componentConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentAlarmConfig', ], ],
                'receivers' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserContactInfo', ], ],
                'sendType' => [ 'type' => 'string', 'locationName' => 'sendType', ],
                'scanIntervalSeconds' => [ 'type' => 'integer', 'locationName' => 'scanIntervalSeconds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsAlarmConfigDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmConfigId' => [ 'type' => 'long', 'locationName' => 'alarmConfigId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetAuditRecordListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetAuditRecordListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AiOpsGetAuditRecordListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'module' => [ 'type' => 'string', 'locationName' => 'module', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetAuditRecordListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'AuditRecordPageVO', ],
            ],
        ],
        'AiOpsGetUserContactInfoListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserContactInfoVO', ], ],
            ],
        ],
        'AiOpsGetUserContactInfoListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'AiOpsGetUserContactInfoListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AiOpsGetUserContactInfoListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSetOwnerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metadataObjectType' => [ 'type' => 'string', 'locationName' => 'metadataObjectType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'ownerName' => [ 'type' => 'string', 'locationName' => 'ownerName', ],
                'ownerType' => [ 'type' => 'string', 'locationName' => 'ownerType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetOwnerResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OwnerVo', ],
            ],
        ],
        'MetaUnifierGetOwnerResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OwnerVo', ],
            ],
        ],
        'MetaUnifierGetOwnerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metadataObjectType' => [ 'type' => 'string', 'locationName' => 'metadataObjectType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetOwnerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierSetOwnerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetOwnerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetOwnerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopPairConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'PairConfigVO', ], ],
            ],
        ],
        'DataWorkshopPairConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pairConfigType' => [ 'type' => 'string', 'locationName' => 'pairConfigType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopPairConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopPairConfigsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskInstancePodDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstancePodDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'TaskInstancePodDetailVO', ],
            ],
        ],
        'DataWorkshopTaskInstancePodListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstancePodListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskInstancePodListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskInstancePodListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstancePodListVO', ], ],
            ],
        ],
        'DataWorkshopTaskInstancePodDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskInstancePodDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PodMachineDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'hasPodEventDetail' => [ 'type' => 'boolean', 'locationName' => 'hasPodEventDetail', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PodMachineStartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PodMachineStartResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PodMachineStartResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'PodMachineStopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PodMachineDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PodMachineDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PodMachineStartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PodMachineDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PodMachineDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PodMachineDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PodMachineStopResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'PodMachineCreateOrUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'podConfig' =>  [ 'shape' => 'PodConfig', ],
                'accessConfig' =>  [ 'shape' => 'AccessConfig', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'workDir' => [ 'type' => 'string', 'locationName' => 'workDir', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PodMachineCreateOrUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'PodMachineDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PodMachineDetailVO', ],
            ],
        ],
        'PodMachineDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'PodMachineStopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PodMachineStopResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PodMachineCreateOrUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PodMachineCreateOrUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOrderDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ProductOrderDetailResp', ],
            ],
        ],
        'DataWorkshopOrderDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopOrderDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopOrderDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DataWorkshopStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ProductStatusResp', ],
            ],
        ],
        'DataWorkshopPurchaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PurchaseProductResp', ],
            ],
        ],
        'DataWorkshopPurchaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopPurchaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopPurchaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'PurchaseProductItem', ], ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopCreateResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseMode' => [ 'type' => 'string', 'locationName' => 'purchaseMode', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'productVersion' => [ 'type' => 'string', 'locationName' => 'productVersion', ],
                'netWorkString' => [ 'type' => 'string', 'locationName' => 'netWorkString', ],
                'payResourceCpuNum' => [ 'type' => 'integer', 'locationName' => 'payResourceCpuNum', ],
                'memoryToCpuRatio' => [ 'type' => 'integer', 'locationName' => 'memoryToCpuRatio', ],
                'payResourceGpuNum' => [ 'type' => 'integer', 'locationName' => 'payResourceGpuNum', ],
                'resourceGpuType' => [ 'type' => 'string', 'locationName' => 'resourceGpuType', ],
                'payResourceDuration' => [ 'type' => 'integer', 'locationName' => 'payResourceDuration', ],
                'clusterLabel' => [ 'type' => 'string', 'locationName' => 'clusterLabel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopCreateNodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'long', 'locationName' => 'nodePoolId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeConfig' => [ 'type' => 'string', 'locationName' => 'nodeConfig', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'dataDisk' =>  [ 'shape' => 'DiskParam', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeCount' => [ 'type' => 'integer', 'locationName' => 'timeCount', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopCreateNodePoolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopCreateNodePoolResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopCreateResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopCreateResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopCreateNodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopCreateNodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopCreateNodePoolResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'SubmitOrderResp', ],
            ],
        ],
        'DataWorkShopCreateNodePoolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'poolType' => [ 'type' => 'string', 'locationName' => 'poolType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'labels' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeConfig' => [ 'type' => 'string', 'locationName' => 'nodeConfig', ],
                'hpcCluster' =>  [ 'shape' => 'HpcClusterReq', ],
                'dataDisk' =>  [ 'shape' => 'DiskParam', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeCount' => [ 'type' => 'integer', 'locationName' => 'timeCount', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopCreateNodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'SubmitOrderResp', ],
            ],
        ],
        'DataWorkShopCreateResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'InstanceVO', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'InstanceRespVO', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueueInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'QueueInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueueInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'KillInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'KillInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceDtos' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDto', ], ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'QueueInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'QueueInstancePageVO', ],
            ],
        ],
        'KillInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'KillInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueueDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListQueuesJoyBuilderResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueInfoVO', ], ],
            ],
        ],
        'GetNodePoolQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetNodePoolQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQueueInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'QueueInfoVO', ],
            ],
        ],
        'QueuePageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueuePageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueueCreateOrUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueueCreateOrUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQueueInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GetNodePoolQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodePoolId' => [ 'type' => 'integer', 'locationName' => 'nodePoolId', ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'SyncQueueJoyBuilderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queues' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueSyncItemParam', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ListQueuesJoyBuilderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'SyncQueueJoyBuilderResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueueCreateOrUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'minGpu' => [ 'type' => 'integer', 'locationName' => 'minGpu', ],
                'reservedGpu' => [ 'type' => 'integer', 'locationName' => 'reservedGpu', ],
                'maxGpu' => [ 'type' => 'integer', 'locationName' => 'maxGpu', ],
                'minCpu' => [ 'type' => 'integer', 'locationName' => 'minCpu', ],
                'reservedCpu' => [ 'type' => 'integer', 'locationName' => 'reservedCpu', ],
                'maxCpu' => [ 'type' => 'integer', 'locationName' => 'maxCpu', ],
                'minMemory' => [ 'type' => 'integer', 'locationName' => 'minMemory', ],
                'reservedMemory' => [ 'type' => 'integer', 'locationName' => 'reservedMemory', ],
                'maxMemory' => [ 'type' => 'integer', 'locationName' => 'maxMemory', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'changeType' => [ 'type' => 'string', 'locationName' => 'changeType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'QueuePageResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueInfoVO', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ListQueuesJoyBuilderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListQueuesJoyBuilderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQueueInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetQueueInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueueDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueueDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueuePageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'nodePoolIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodePoolId' => [ 'type' => 'integer', 'locationName' => 'nodePoolId', ],
                'status' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'SyncQueueJoyBuilderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SyncQueueJoyBuilderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetNodePoolQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'QuotaVos', ],
            ],
        ],
        'QueueCreateOrUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueueDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopResidentClusterTypeDictRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopResidentClusterTypeDictResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopResidentClusterTypeDictResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopResidentClusterTypeDictResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopResidentClusterStateDictResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopResidentClusterStateDictResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopResidentClusterStateDictResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopResidentClusterStateDictRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopListClusterInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopListClustersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopListClustersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopListClustersResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterInfoVO', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopClusterDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopClusterDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopClusterDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterDetailVO', ], ],
            ],
        ],
        'DataWorkshopListClusterInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterInfoVO', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopListClustersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'stateCode' => [ 'type' => 'string', 'locationName' => 'stateCode', ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopClusterDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopListClusterInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopListClusterInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopCreateOrUpdateClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'clusterType' => [ 'type' => 'string', 'locationName' => 'clusterType', ],
                'imageConfig' =>  [ 'shape' => 'ResidentImageConfig', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentStorageMountConfig', ], ],
                'propertyConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'PairConfig', ], ],
                'modelPath' => [ 'type' => 'string', 'locationName' => 'modelPath', ],
                'inferenceFrameWork' => [ 'type' => 'string', 'locationName' => 'inferenceFrameWork', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'clusterConfig' =>  [ 'shape' => 'RayConfig', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'PairConfig', ], ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopDeleteClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopSwitchClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopSwitchClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopCreateOrUpdateClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopCreateOrUpdateClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopSwitchClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopDeleteClusterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopDeleteClusterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopDeleteClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopCreateOrUpdateClusterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopSwitchClusterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopResidentClusterPodListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopResidentClusterPodListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopResidentClusterPodListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopResidentClusterPodDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopResidentClusterPodDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopResidentClusterPodDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopResidentClusterPodListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResidentClusterPodListVO', ], ],
            ],
        ],
        'DataWorkshopResidentClusterPodDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ResidentClusterPodDetailVO', ],
            ],
        ],
        'DataWorkShopListResourceOperationLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoResourceOperationLogVo', ],
            ],
        ],
        'DataWorkShopDescribeResourceAvailableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ResourceAvailableResp', ],
            ],
        ],
        'DataWorkShopGetAllResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceFlag' => [ 'type' => 'string', 'locationName' => 'resourceFlag', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilterReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopGetResourcesByCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopEditResourceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopDeleteResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopDeleteResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopGetRunningResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceFlag' => [ 'type' => 'string', 'locationName' => 'resourceFlag', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilterReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopDescribeResourceAvailableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopDescribeResourceAvailableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopGetAllResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoResourceInfoVo', ],
            ],
        ],
        'DataWorkShopExpandOrShrinkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopExpandOrShrinkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopDeleteResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopListAllResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopListAllResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopExpandOrShrinkResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkShopListAllResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceFlag' => [ 'type' => 'string', 'locationName' => 'resourceFlag', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilterReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopDescribeResourceAvailableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopGetRunningResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopGetRunningResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopListResourceOperationLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopListResourceOperationLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopGetResourcesByCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'ResourceInfoVo', ],
            ],
        ],
        'DataWorkShopGetResourcesByCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopGetResourcesByCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopResourceEnableOrNotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopResourceEnableOrNotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopEditResourceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CalResourceChangeRequest' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceChangeType' => [ 'type' => 'string', 'locationName' => 'resourceChangeType', ],
                'targetCus' => [ 'type' => 'integer', 'locationName' => 'targetCus', ],
                'targetGpus' => [ 'type' => 'integer', 'locationName' => 'targetGpus', ],
                'deadtime' => [ 'type' => 'string', 'locationName' => 'deadtime', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'DataWorkShopResourceEnableOrNotResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkShopEditResourceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopEditResourceInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopGetRunningResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfoVo', ], ],
            ],
        ],
        'DataWorkShopResourceEnableOrNotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopGetAllResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkShopGetAllResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkShopListResourceOperationLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopExpandOrShrinkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceChangeType' => [ 'type' => 'string', 'locationName' => 'resourceChangeType', ],
                'targetCus' => [ 'type' => 'integer', 'locationName' => 'targetCus', ],
                'targetGpus' => [ 'type' => 'integer', 'locationName' => 'targetGpus', ],
                'deadtime' => [ 'type' => 'string', 'locationName' => 'deadtime', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkShopListAllResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoResourceInfoVo', ],
            ],
        ],
        'DataWorkShopDeleteResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'searchKey' => [ 'type' => 'string', 'locationName' => 'searchKey', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetRoleDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'RoleDetailVo', ],
            ],
        ],
        'MetaUnifierGetRoleBoundResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetRoleBoundResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
                'securableObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurableObjectParam', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoRoleListItemVo', ],
            ],
        ],
        'MetaUnifierDeleteRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDeleteRoleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListResourceRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceRoleVo', ], ],
            ],
        ],
        'MetaUnifierUpdateRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'RoleDetailVo', ],
            ],
        ],
        'MetaUnifierDeleteRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetRoleBoundResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'RoleBoundVo', ],
            ],
        ],
        'MetaUnifierListResourceRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListResourceRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetRoleDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetRoleDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListResourceRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'metadataObjectType' => [ 'type' => 'string', 'locationName' => 'metadataObjectType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filesetName' => [ 'type' => 'string', 'locationName' => 'filesetName', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierCreateRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateRoleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetRoleBoundRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierCreateRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'RoleDetailVo', ],
            ],
        ],
        'MetaUnifierUpdateRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierUpdateRoleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierUpdateRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
                'securableObjects' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurableObjectParam', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetRoleDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListAllStorageDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageDictVo', ], ],
            ],
        ],
        'MetaUnifierListAllStorageDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListAllStorageDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListAllStorageDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierAssociateTagsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierAssociateTagsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListTagsForObjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListTagsForObjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListTagsForObjectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListAssociatedObjectsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoTagAssociatedObjectVo', ],
            ],
        ],
        'MetaUnifierDeleteTagResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierDeleteTagResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListTagsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoTagInfoVo', ],
            ],
        ],
        'MetaUnifierDeleteTagRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListTagsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierCreateTagRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierDeleteTagResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierAssociateTagsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'tagNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierModifyTagResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'TagInfoVo', ],
            ],
        ],
        'MetaUnifierListTagsForObjectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagInfoVo', ], ],
            ],
        ],
        'MetaUnifierModifyTagResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierModifyTagResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierCreateTagResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierCreateTagResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierModifyTagRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'newTagName' => [ 'type' => 'string', 'locationName' => 'newTagName', ],
                'color' => [ 'type' => 'string', 'locationName' => 'color', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierCreateTagResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'TagInfoVo', ],
            ],
        ],
        'MetaUnifierAssociateTagsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListAssociatedObjectsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListAssociatedObjectsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListTagsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListTagsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListAssociatedObjectsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'objectName' => [ 'type' => 'string', 'locationName' => 'objectName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstanceStateDictResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopTaskMountStorageDictResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskMountStorageDictResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskInstanceStateDictRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskTypeDictResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopTaskTypeDictRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskMountStorageDictRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskTypeDictResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskTypeDictResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskPodTypeDictResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopTaskInstanceStateDictResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskInstanceStateDictResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskPodTypeDictRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskPodTypeDictResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskPodTypeDictResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskMountStorageDictResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DictVo', ], ],
            ],
        ],
        'DataWorkshopTaskDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfoPageVo', ], ],
            ],
        ],
        'DataWorkshopTaskDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'TaskDetailVo', ],
            ],
        ],
        'DataWorkshopTaskListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'latestInstanceStates' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enableAlert' => [ 'type' => 'string', 'locationName' => 'enableAlert', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskInstanceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstanceInfoPageVo', ], ],
            ],
        ],
        'DataWorkshopTaskInstanceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'TaskInstanceDetailVo', ],
            ],
        ],
        'DataWorkshopSubmitInstanceLogDownloadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopSubmitInstanceLogDownloadTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskGetDashboardUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskGetDashboardUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopAllTaskInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstanceInfoVo', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopAllTaskInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceIdFilter' => [ 'type' => 'string', 'locationName' => 'instanceIdFilter', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'owners' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimestampStart' => [ 'type' => 'long', 'locationName' => 'startTimestampStart', ],
                'startTimestampEnd' => [ 'type' => 'long', 'locationName' => 'startTimestampEnd', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstanceLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskInstanceLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskGetDashboardUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopListInstanceLogDownloadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskGetDashboardUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopSubmitInstanceLogDownloadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstanceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskInstanceDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskInstanceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskInstanceId' => [ 'type' => 'string', 'locationName' => 'taskInstanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopListInstanceLogDownloadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopListInstanceLogDownloadTaskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopListInstanceLogDownloadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'InstanceLogDownloadTaskPageVo', ],
            ],
        ],
        'DataWorkshopTaskInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'stateList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimestampStart' => [ 'type' => 'long', 'locationName' => 'startTimestampStart', ],
                'startTimestampEnd' => [ 'type' => 'long', 'locationName' => 'startTimestampEnd', ],
                'finishTimestampStart' => [ 'type' => 'long', 'locationName' => 'finishTimestampStart', ],
                'finishTimestampEnd' => [ 'type' => 'long', 'locationName' => 'finishTimestampEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstanceLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskInstanceLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInstanceLogPageVo', ], ],
            ],
        ],
        'DataWorkshopAllTaskInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopAllTaskInstanceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopSubmitInstanceLogDownloadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopTaskDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskCreateOrUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskCreateOrUpdateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskCreateOrUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopTaskDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskCreateOrUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ownerPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageConfig' =>  [ 'shape' => 'ImageConfig', ],
                'bootCommand' => [ 'type' => 'string', 'locationName' => 'bootCommand', ],
                'lmceConfigYaml' => [ 'type' => 'string', 'locationName' => 'lmceConfigYaml', ],
                'envConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvConfig', ], ],
                'storageMountConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageMountConfig', ], ],
                'queue' => [ 'type' => 'string', 'locationName' => 'queue', ],
                'queueType' => [ 'type' => 'string', 'locationName' => 'queueType', ],
                'rayConfig' =>  [ 'shape' => 'RayConfig', ],
                'sparkConfig' =>  [ 'shape' => 'SparkConfig', ],
                'enablePrompt' => [ 'type' => 'boolean', 'locationName' => 'enablePrompt', ],
                'podPriority' => [ 'type' => 'string', 'locationName' => 'podPriority', ],
                'alertConfig' =>  [ 'shape' => 'AlertConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataWorkshopTaskBootRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'bootConfig' =>  [ 'shape' => 'TaskBootConfig', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskStopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskStopResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskStopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DataWorkshopTaskBootResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'DataWorkshopTaskBootResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DataWorkshopTaskBootResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DataWorkshopTaskStopResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierQuerySubUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierQuerySubUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSetUserRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierListUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetUserDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'UserDetailVo', ],
            ],
        ],
        'MetaUnifierRemoveUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MetaUnifierAddUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoUserVo', ],
            ],
        ],
        'MetaUnifierListUserRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListUserRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierListUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierListUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierAddUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierAddUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierSetUserRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'roleNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierQuerySubUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierRemoveUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierSetUserRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierSetUserRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierAddUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserVo', ], ],
            ],
        ],
        'MetaUnifierRemoveUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierRemoveUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierQuerySubUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoSubUserVo', ],
            ],
        ],
        'MetaUnifierListUserRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierGetUserDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'MetaUnifierGetUserDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'MetaUnifierGetUserDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'MetaUnifierListUserRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleBoundVo', ], ],
            ],
        ],
        'WorkspaceGetListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoWorkspaceListResp', ],
            ],
        ],
        'WorkspaceGetInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceBundleResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'storageConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoResourceResp', ],
            ],
        ],
        'WorkspaceCreateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceSaveInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'storageConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceSaveInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceBundleResourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'manager' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'storageConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageConfig', ], ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceSaveInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'WorkspaceInfoResp', ],
            ],
        ],
        'WorkspaceGetListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'isManager' => [ 'type' => 'string', 'locationName' => 'isManager', ],
                'isMember' => [ 'type' => 'string', 'locationName' => 'isMember', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceBundleResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bundleResource' => [ 'type' => 'boolean', 'locationName' => 'bundleResource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceDeleteMemberResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetUcUserByPinRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetUcUserByPinResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'WorkspaceUserResp', ],
            ],
        ],
        'WorkspaceAddMemberRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roleCodeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateRoleReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateRoleReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceVerifyAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'WorkspaceGetCurrentUserInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'WorkspaceUserResp', ],
            ],
        ],
        'WorkspaceUpdateUserRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roleCodeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateRoleReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateRoleReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetUcUserByUserNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUcUserByUserNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceUpdateUserRoleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetUcUserByPinResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUcUserByPinResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceVerifyUserIsManagerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceDeleteMemberResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetMembersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetUcUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetUcUserByUserNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceVerifyUserIsManagerResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'WorkspaceGetCurrentUserInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceVerifyUserIsManagerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceVerifyUserIsManagerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceUpdateUserRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceVerifyAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceVerifyAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceVerifyAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetCurrentUserInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetCurrentUserInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetUcUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoUcUsersResp', ],
            ],
        ],
        'WorkspaceGetUserRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUserRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetUcUserByUserNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceUserResp', ], ],
            ],
        ],
        'WorkspaceGetUserRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetUcUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUcUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceDeleteMemberRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roleCodeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateRoleReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateRoleReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoWorkspaceUserResp', ],
            ],
        ],
        'WorkspaceGetUserRolesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceUserRoleResp', ], ],
            ],
        ],
        'WorkspaceAddMemberResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceAddMemberResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
