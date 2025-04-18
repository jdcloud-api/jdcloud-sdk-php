<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'shenhaiplatform',
        'protocol' => 'json',
//        'serviceFullName' => 'shenhaiplatform',
//        'serviceId' => 'shenhaiplatform',
    ],
    'operations' => [
        'CopilotChatNew' => [
            'name' => 'CopilotChatNew',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotChatNew',
            ],
            'input' => [ 'shape' => 'CopilotChatNewRequestShape', ],
            'output' => [ 'shape' => 'CopilotChatNewResponseShape', ],
        ],
        'CopilotChatHistory' => [
            'name' => 'CopilotChatHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotChatHistory',
            ],
            'input' => [ 'shape' => 'CopilotChatHistoryRequestShape', ],
            'output' => [ 'shape' => 'CopilotChatHistoryResponseShape', ],
        ],
        'CopilotChatDelete' => [
            'name' => 'CopilotChatDelete',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotChatDelete',
            ],
            'input' => [ 'shape' => 'CopilotChatDeleteRequestShape', ],
            'output' => [ 'shape' => 'CopilotChatDeleteResponseShape', ],
        ],
        'CopilotChatClear' => [
            'name' => 'CopilotChatClear',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotChatClear',
            ],
            'input' => [ 'shape' => 'CopilotChatClearRequestShape', ],
            'output' => [ 'shape' => 'CopilotChatClearResponseShape', ],
        ],
        'CopilotModelList' => [
            'name' => 'CopilotModelList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotModelList',
            ],
            'input' => [ 'shape' => 'CopilotModelListRequestShape', ],
            'output' => [ 'shape' => 'CopilotModelListResponseShape', ],
        ],
        'CopilotUtteranceStop' => [
            'name' => 'CopilotUtteranceStop',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotUtteranceStop',
            ],
            'input' => [ 'shape' => 'CopilotUtteranceStopRequestShape', ],
            'output' => [ 'shape' => 'CopilotUtteranceStopResponseShape', ],
        ],
        'CopilotUtteranceList' => [
            'name' => 'CopilotUtteranceList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotUtteranceList',
            ],
            'input' => [ 'shape' => 'CopilotUtteranceListRequestShape', ],
            'output' => [ 'shape' => 'CopilotUtteranceListResponseShape', ],
        ],
        'CopilotUtteranceRecommend' => [
            'name' => 'CopilotUtteranceRecommend',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotUtteranceRecommend',
            ],
            'input' => [ 'shape' => 'CopilotUtteranceRecommendRequestShape', ],
            'output' => [ 'shape' => 'CopilotUtteranceRecommendResponseShape', ],
        ],
        'CopilotVerify' => [
            'name' => 'CopilotVerify',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/copilotVerify',
            ],
            'input' => [ 'shape' => 'CopilotVerifyRequestShape', ],
            'output' => [ 'shape' => 'CopilotVerifyResponseShape', ],
        ],
        'JtlasSubscribeTable' => [
            'name' => 'JtlasSubscribeTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasSubscribeTable',
            ],
            'input' => [ 'shape' => 'JtlasSubscribeTableRequestShape', ],
            'output' => [ 'shape' => 'JtlasSubscribeTableResponseShape', ],
        ],
        'JtlasSearchTableLineage' => [
            'name' => 'JtlasSearchTableLineage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasSearchTableLineage',
            ],
            'input' => [ 'shape' => 'JtlasSearchTableLineageRequestShape', ],
            'output' => [ 'shape' => 'JtlasSearchTableLineageResponseShape', ],
        ],
        'JtlasSearchColumnLineage' => [
            'name' => 'JtlasSearchColumnLineage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasSearchColumnLineage',
            ],
            'input' => [ 'shape' => 'JtlasSearchColumnLineageRequestShape', ],
            'output' => [ 'shape' => 'JtlasSearchColumnLineageResponseShape', ],
        ],
        'JtlasPageSearchTables' => [
            'name' => 'JtlasPageSearchTables',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasPageSearchTables',
            ],
            'input' => [ 'shape' => 'JtlasPageSearchTablesRequestShape', ],
            'output' => [ 'shape' => 'JtlasPageSearchTablesResponseShape', ],
        ],
        'JtlasPageSearchTablePrivileges' => [
            'name' => 'JtlasPageSearchTablePrivileges',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasPageSearchTablePrivileges',
            ],
            'input' => [ 'shape' => 'JtlasPageSearchTablePrivilegesRequestShape', ],
            'output' => [ 'shape' => 'JtlasPageSearchTablePrivilegesResponseShape', ],
        ],
        'JtlasPageSearchTablePartitions' => [
            'name' => 'JtlasPageSearchTablePartitions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasPageSearchTablePartitions',
            ],
            'input' => [ 'shape' => 'JtlasPageSearchTablePartitionsRequestShape', ],
            'output' => [ 'shape' => 'JtlasPageSearchTablePartitionsResponseShape', ],
        ],
        'JtlasSearchDetail' => [
            'name' => 'JtlasSearchDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasSearchDetail',
            ],
            'input' => [ 'shape' => 'JtlasSearchDetailRequestShape', ],
            'output' => [ 'shape' => 'JtlasSearchDetailResponseShape', ],
        ],
        'JtlasGetTableQueryScript' => [
            'name' => 'JtlasGetTableQueryScript',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasGetTableQueryScript',
            ],
            'input' => [ 'shape' => 'JtlasGetTableQueryScriptRequestShape', ],
            'output' => [ 'shape' => 'JtlasGetTableQueryScriptResponseShape', ],
        ],
        'JtlasGetTableDDLScript' => [
            'name' => 'JtlasGetTableDDLScript',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasGetTableDDLScript',
            ],
            'input' => [ 'shape' => 'JtlasGetTableDDLScriptRequestShape', ],
            'output' => [ 'shape' => 'JtlasGetTableDDLScriptResponseShape', ],
        ],
        'JtlasDownloadTableColumns' => [
            'name' => 'JtlasDownloadTableColumns',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasDownloadTableColumns',
            ],
            'input' => [ 'shape' => 'JtlasDownloadTableColumnsRequestShape', ],
            'output' => [ 'shape' => 'JtlasDownloadTableColumnsResponseShape', ],
        ],
        'JtlasGrantTablePrivileges' => [
            'name' => 'JtlasGrantTablePrivileges',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasGrantTablePrivileges',
            ],
            'input' => [ 'shape' => 'JtlasGrantTablePrivilegesRequestShape', ],
            'output' => [ 'shape' => 'JtlasGrantTablePrivilegesResponseShape', ],
        ],
        'JtlasDestroy' => [
            'name' => 'JtlasDestroy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasDestroy',
            ],
            'input' => [ 'shape' => 'JtlasDestroyRequestShape', ],
            'output' => [ 'shape' => 'JtlasDestroyResponseShape', ],
        ],
        'JtlasWarehouseTableDetail' => [
            'name' => 'JtlasWarehouseTableDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseTableDetail',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseTableDetailRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseTableDetailResponseShape', ],
        ],
        'JtlasWarehouseQueryTablesOwnedByUser' => [
            'name' => 'JtlasWarehouseQueryTablesOwnedByUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseQueryTablesOwnedByUser',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseQueryTablesOwnedByUserRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseQueryTablesOwnedByUserResponseShape', ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUser' => [
            'name' => 'JtlasWarehouseQueryTablesUnderSpecifiedUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseQueryTablesUnderSpecifiedUser',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserResponseShape', ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivileges' => [
            'name' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivileges',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivileges',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivilegesRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivilegesResponseShape', ],
        ],
        'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivileges' => [
            'name' => 'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivileges',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivileges',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivilegesRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivilegesResponseShape', ],
        ],
        'JtlasWarehouseQueryTablePrivileges' => [
            'name' => 'JtlasWarehouseQueryTablePrivileges',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseQueryTablePrivileges',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseQueryTablePrivilegesRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseQueryTablePrivilegesResponseShape', ],
        ],
        'JtlasWarehouseFuzzyQueryTablesByTableName' => [
            'name' => 'JtlasWarehouseFuzzyQueryTablesByTableName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseFuzzyQueryTablesByTableName',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseFuzzyQueryTablesByTableNameRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseFuzzyQueryTablesByTableNameResponseShape', ],
        ],
        'JtlasWarehouseQueryTablesByDatabaseName' => [
            'name' => 'JtlasWarehouseQueryTablesByDatabaseName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/jtlasWarehouseQueryTablesByDatabaseName',
            ],
            'input' => [ 'shape' => 'JtlasWarehouseQueryTablesByDatabaseNameRequestShape', ],
            'output' => [ 'shape' => 'JtlasWarehouseQueryTablesByDatabaseNameResponseShape', ],
        ],
        'GravityParticleJobHisRunAddTask' => [
            'name' => 'GravityParticleJobHisRunAddTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobHisRunAddTask',
            ],
            'input' => [ 'shape' => 'GravityParticleJobHisRunAddTaskRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobHisRunAddTaskResponseShape', ],
        ],
        'GravityParticleJobHisRunAddBathTask' => [
            'name' => 'GravityParticleJobHisRunAddBathTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobHisRunAddBathTask',
            ],
            'input' => [ 'shape' => 'GravityParticleJobHisRunAddBathTaskRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobHisRunAddBathTaskResponseShape', ],
        ],
        'GravityParticleJobHisRunListTask' => [
            'name' => 'GravityParticleJobHisRunListTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobHisRunListTask',
            ],
            'input' => [ 'shape' => 'GravityParticleJobHisRunListTaskRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobHisRunListTaskResponseShape', ],
        ],
        'GravityParticleJobHisRunCloseTask' => [
            'name' => 'GravityParticleJobHisRunCloseTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobHisRunCloseTask',
            ],
            'input' => [ 'shape' => 'GravityParticleJobHisRunCloseTaskRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobHisRunCloseTaskResponseShape', ],
        ],
        'GravityParticleJobHisRunListTaskLog' => [
            'name' => 'GravityParticleJobHisRunListTaskLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobHisRunListTaskLog',
            ],
            'input' => [ 'shape' => 'GravityParticleJobHisRunListTaskLogRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobHisRunListTaskLogResponseShape', ],
        ],
        'GravityParticleJobDepGetParentDependencies' => [
            'name' => 'GravityParticleJobDepGetParentDependencies',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepGetParentDependencies',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepGetParentDependenciesRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepGetParentDependenciesResponseShape', ],
        ],
        'GravityParticleJobDepGetChildDependencies' => [
            'name' => 'GravityParticleJobDepGetChildDependencies',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepGetChildDependencies',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepGetChildDependenciesRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepGetChildDependenciesResponseShape', ],
        ],
        'GravityParticleJobDepChildJobs' => [
            'name' => 'GravityParticleJobDepChildJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepChildJobs',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepChildJobsRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepChildJobsResponseShape', ],
        ],
        'GravityParticleJobDepGetChildChainJobs' => [
            'name' => 'GravityParticleJobDepGetChildChainJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepGetChildChainJobs',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepGetChildChainJobsRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepGetChildChainJobsResponseShape', ],
        ],
        'GravityParticleJobDepParentJobs' => [
            'name' => 'GravityParticleJobDepParentJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepParentJobs',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepParentJobsRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepParentJobsResponseShape', ],
        ],
        'GravityParticleJobDepGetParentChainJobs' => [
            'name' => 'GravityParticleJobDepGetParentChainJobs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepGetParentChainJobs',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepGetParentChainJobsRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepGetParentChainJobsResponseShape', ],
        ],
        'GravityParticleJobDepGetChildTreed' => [
            'name' => 'GravityParticleJobDepGetChildTreed',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepGetChildTreed',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepGetChildTreedRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepGetChildTreedResponseShape', ],
        ],
        'GravityParticleJobDepDetail' => [
            'name' => 'GravityParticleJobDepDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobDepDetail',
            ],
            'input' => [ 'shape' => 'GravityParticleJobDepDetailRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobDepDetailResponseShape', ],
        ],
        'GravityParticleDubboJobManagerGetJobScript' => [
            'name' => 'GravityParticleDubboJobManagerGetJobScript',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerGetJobScript',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerGetJobScriptRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerGetJobScriptResponseShape', ],
        ],
        'GravityParticleDubboJobManagerDeleteJobScript' => [
            'name' => 'GravityParticleDubboJobManagerDeleteJobScript',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerDeleteJobScript',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerDeleteJobScriptRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerDeleteJobScriptResponseShape', ],
        ],
        'GravityParticleDubboJobManagerSaveJobScript' => [
            'name' => 'GravityParticleDubboJobManagerSaveJobScript',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerSaveJobScript',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerSaveJobScriptRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerSaveJobScriptResponseShape', ],
        ],
        'GravityParticleDubboJobManagerSaveDmrModelJob' => [
            'name' => 'GravityParticleDubboJobManagerSaveDmrModelJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerSaveDmrModelJob',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerSaveDmrModelJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerSaveDmrModelJobResponseShape', ],
        ],
        'GravityParticleDubboJobManagerSearchJobId' => [
            'name' => 'GravityParticleDubboJobManagerSearchJobId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerSearchJobId',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerSearchJobIdRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerSearchJobIdResponseShape', ],
        ],
        'GravityParticleDubboJobManagerJobQuery' => [
            'name' => 'GravityParticleDubboJobManagerJobQuery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerJobQuery',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerJobQueryRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerJobQueryResponseShape', ],
        ],
        'GravityParticleDubboJobManagerSearchDmrModelJob' => [
            'name' => 'GravityParticleDubboJobManagerSearchDmrModelJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerSearchDmrModelJob',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerSearchDmrModelJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerSearchDmrModelJobResponseShape', ],
        ],
        'GravityParticleDubboJobManagerSearchByJobName' => [
            'name' => 'GravityParticleDubboJobManagerSearchByJobName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerSearchByJobName',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerSearchByJobNameRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerSearchByJobNameResponseShape', ],
        ],
        'GravityParticleDubboJobManagerSearchSchedJob' => [
            'name' => 'GravityParticleDubboJobManagerSearchSchedJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerSearchSchedJob',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerSearchSchedJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerSearchSchedJobResponseShape', ],
        ],
        'GravityParticleDubboJobManagerListJob' => [
            'name' => 'GravityParticleDubboJobManagerListJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerListJob',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerListJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerListJobResponseShape', ],
        ],
        'GravityParticleDubboJobManagerCalcJobDetail' => [
            'name' => 'GravityParticleDubboJobManagerCalcJobDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerCalcJobDetail',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerCalcJobDetailRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerCalcJobDetailResponseShape', ],
        ],
        'GravityParticleDubboJobManagerValidateJobRules' => [
            'name' => 'GravityParticleDubboJobManagerValidateJobRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerValidateJobRules',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerValidateJobRulesRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerValidateJobRulesResponseShape', ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFile' => [
            'name' => 'GravityParticleDubboJobManagerVerifyScriptFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerVerifyScriptFile',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerVerifyScriptFileRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerVerifyScriptFileResponseShape', ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileList' => [
            'name' => 'GravityParticleDubboJobManagerVerifyScriptFileList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerVerifyScriptFileList',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerVerifyScriptFileListRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerVerifyScriptFileListResponseShape', ],
        ],
        'GravityParticleDubboJobManagerDeployJob' => [
            'name' => 'GravityParticleDubboJobManagerDeployJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerDeployJob',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerDeployJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerDeployJobResponseShape', ],
        ],
        'GravityParticleDubboJobManagerDeployJobEdit' => [
            'name' => 'GravityParticleDubboJobManagerDeployJobEdit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerDeployJobEdit',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerDeployJobEditRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerDeployJobEditResponseShape', ],
        ],
        'GravityParticleDubboJobManagerGetScriptInfoType' => [
            'name' => 'GravityParticleDubboJobManagerGetScriptInfoType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerGetScriptInfoType',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerGetScriptInfoTypeRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerGetScriptInfoTypeResponseShape', ],
        ],
        'GravityParticleDubboJobManagerGetEngineTemplate' => [
            'name' => 'GravityParticleDubboJobManagerGetEngineTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerGetEngineTemplate',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerGetEngineTemplateRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerGetEngineTemplateResponseShape', ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobName' => [
            'name' => 'GravityParticleDubboJobManagerGetMgrJobByJobName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerGetMgrJobByJobName',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerGetMgrJobByJobNameRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerGetMgrJobByJobNameResponseShape', ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobe' => [
            'name' => 'GravityParticleDubboJobManagerGetMgrJobByJobe',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerGetMgrJobByJobe',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerGetMgrJobByJobeRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerGetMgrJobByJobeResponseShape', ],
        ],
        'GravityParticleDubboJobManagerDeleteJob' => [
            'name' => 'GravityParticleDubboJobManagerDeleteJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerDeleteJob',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerDeleteJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerDeleteJobResponseShape', ],
        ],
        'GravityParticleDubboJobManagerQueryJobByOutputTable' => [
            'name' => 'GravityParticleDubboJobManagerQueryJobByOutputTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerQueryJobByOutputTable',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerQueryJobByOutputTableRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerQueryJobByOutputTableResponseShape', ],
        ],
        'GravityParticleDubboJobManagerDeleteAllByWorkspace' => [
            'name' => 'GravityParticleDubboJobManagerDeleteAllByWorkspace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleDubboJobManagerDeleteAllByWorkspace',
            ],
            'input' => [ 'shape' => 'GravityParticleDubboJobManagerDeleteAllByWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleDubboJobManagerDeleteAllByWorkspaceResponseShape', ],
        ],
        'GravityParticleOpenRerun' => [
            'name' => 'GravityParticleOpenRerun',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleOpenRerun',
            ],
            'input' => [ 'shape' => 'GravityParticleOpenRerunRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleOpenRerunResponseShape', ],
        ],
        'GravityParticleParticleJobListJob' => [
            'name' => 'GravityParticleParticleJobListJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobListJob',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobListJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobListJobResponseShape', ],
        ],
        'GravityParticleParticleJobListJobInstance' => [
            'name' => 'GravityParticleParticleJobListJobInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobListJobInstance',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobListJobInstanceRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobListJobInstanceResponseShape', ],
        ],
        'GravityParticleParticleJobGetBasicInfo' => [
            'name' => 'GravityParticleParticleJobGetBasicInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobGetBasicInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobGetBasicInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobGetBasicInfoResponseShape', ],
        ],
        'GravityParticleParticleJobGetRunInfos' => [
            'name' => 'GravityParticleParticleJobGetRunInfos',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobGetRunInfos',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobGetRunInfosRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobGetRunInfosResponseShape', ],
        ],
        'GravityParticleParticleJobListOperationRecord' => [
            'name' => 'GravityParticleParticleJobListOperationRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobListOperationRecord',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobListOperationRecordRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobListOperationRecordResponseShape', ],
        ],
        'GravityParticleParticleJobJobCompletionInfo' => [
            'name' => 'GravityParticleParticleJobJobCompletionInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobJobCompletionInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobJobCompletionInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobJobCompletionInfoResponseShape', ],
        ],
        'GravityParticleParticleJobGetConditionInfo' => [
            'name' => 'GravityParticleParticleJobGetConditionInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobGetConditionInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobGetConditionInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobGetConditionInfoResponseShape', ],
        ],
        'GravityParticleParticleJobGetMgrJobInfo' => [
            'name' => 'GravityParticleParticleJobGetMgrJobInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobGetMgrJobInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobGetMgrJobInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobGetMgrJobInfoResponseShape', ],
        ],
        'GravityParticleParticleJobGetJobTypeInfo' => [
            'name' => 'GravityParticleParticleJobGetJobTypeInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobGetJobTypeInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobGetJobTypeInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobGetJobTypeInfoResponseShape', ],
        ],
        'GravityParticleJobGetScriptExtensions' => [
            'name' => 'GravityParticleJobGetScriptExtensions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobGetScriptExtensions',
            ],
            'input' => [ 'shape' => 'GravityParticleJobGetScriptExtensionsRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobGetScriptExtensionsResponseShape', ],
        ],
        'GravityParticleJobscheProcessJobExeRst' => [
            'name' => 'GravityParticleJobscheProcessJobExeRst',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobscheProcessJobExeRst',
            ],
            'input' => [ 'shape' => 'GravityParticleJobscheProcessJobExeRstRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobscheProcessJobExeRstResponseShape', ],
        ],
        'GravityParticleJobscheSetJobEnableFlag' => [
            'name' => 'GravityParticleJobscheSetJobEnableFlag',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobscheSetJobEnableFlag',
            ],
            'input' => [ 'shape' => 'GravityParticleJobscheSetJobEnableFlagRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobscheSetJobEnableFlagResponseShape', ],
        ],
        'GravityParticleJobscheForceRunJobInst' => [
            'name' => 'GravityParticleJobscheForceRunJobInst',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobscheForceRunJobInst',
            ],
            'input' => [ 'shape' => 'GravityParticleJobscheForceRunJobInstRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobscheForceRunJobInstResponseShape', ],
        ],
        'GravityParticleJobscheResetJobInstStatus' => [
            'name' => 'GravityParticleJobscheResetJobInstStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobscheResetJobInstStatus',
            ],
            'input' => [ 'shape' => 'GravityParticleJobscheResetJobInstStatusRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobscheResetJobInstStatusResponseShape', ],
        ],
        'GravityParticleJobscheReRunJobInst' => [
            'name' => 'GravityParticleJobscheReRunJobInst',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobscheReRunJobInst',
            ],
            'input' => [ 'shape' => 'GravityParticleJobscheReRunJobInstRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobscheReRunJobInstResponseShape', ],
        ],
        'GravityParticleJobscheIsUpstreamSameFrequency' => [
            'name' => 'GravityParticleJobscheIsUpstreamSameFrequency',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobscheIsUpstreamSameFrequency',
            ],
            'input' => [ 'shape' => 'GravityParticleJobscheIsUpstreamSameFrequencyRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobscheIsUpstreamSameFrequencyResponseShape', ],
        ],
        'GravityParticleChannelJobInfoDeleteJob' => [
            'name' => 'GravityParticleChannelJobInfoDeleteJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleChannelJobInfoDeleteJob',
            ],
            'input' => [ 'shape' => 'GravityParticleChannelJobInfoDeleteJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleChannelJobInfoDeleteJobResponseShape', ],
        ],
        'GravityParticleParticleModelCalcListJob' => [
            'name' => 'GravityParticleParticleModelCalcListJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleModelCalcListJob',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleModelCalcListJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleModelCalcListJobResponseShape', ],
        ],
        'GravityParticleParticleModelCalcCalcJobDetail' => [
            'name' => 'GravityParticleParticleModelCalcCalcJobDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleModelCalcCalcJobDetail',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleModelCalcCalcJobDetailRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleModelCalcCalcJobDetailResponseShape', ],
        ],
        'GravityParticleJobMonitorJobCountInfo' => [
            'name' => 'GravityParticleJobMonitorJobCountInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobCountInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobCountInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobCountInfoResponseShape', ],
        ],
        'GravityParticleJobMonitorJobTypeList' => [
            'name' => 'GravityParticleJobMonitorJobTypeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobTypeList',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobTypeListRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobTypeListResponseShape', ],
        ],
        'GravityParticleJobMonitorJobStatusCount' => [
            'name' => 'GravityParticleJobMonitorJobStatusCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobStatusCount',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobStatusCountRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobStatusCountResponseShape', ],
        ],
        'GravityParticleJobMonitorJobFailCount' => [
            'name' => 'GravityParticleJobMonitorJobFailCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobFailCount',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobFailCountRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobFailCountResponseShape', ],
        ],
        'GravityParticleJobMonitorJobSuccessCount' => [
            'name' => 'GravityParticleJobMonitorJobSuccessCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobSuccessCount',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobSuccessCountRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobSuccessCountResponseShape', ],
        ],
        'GravityParticleJobMonitorJobTypeCount' => [
            'name' => 'GravityParticleJobMonitorJobTypeCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobTypeCount',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobTypeCountRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobTypeCountResponseShape', ],
        ],
        'GravityParticleJobMonitorJobDispatchTrend' => [
            'name' => 'GravityParticleJobMonitorJobDispatchTrend',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobDispatchTrend',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobDispatchTrendRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobDispatchTrendResponseShape', ],
        ],
        'GravityParticleJobMonitorJobSpendTimeRanking' => [
            'name' => 'GravityParticleJobMonitorJobSpendTimeRanking',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobSpendTimeRanking',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobSpendTimeRankingRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobSpendTimeRankingResponseShape', ],
        ],
        'GravityParticleJobMonitorJobUnsuccessRanking' => [
            'name' => 'GravityParticleJobMonitorJobUnsuccessRanking',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleJobMonitorJobUnsuccessRanking',
            ],
            'input' => [ 'shape' => 'GravityParticleJobMonitorJobUnsuccessRankingRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleJobMonitorJobUnsuccessRankingResponseShape', ],
        ],
        'GravityParticleParticleJobMonitorJobStatusCount' => [
            'name' => 'GravityParticleParticleJobMonitorJobStatusCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobMonitorJobStatusCount',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobMonitorJobStatusCountRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobMonitorJobStatusCountResponseShape', ],
        ],
        'GravityParticleSchedDictGetByType' => [
            'name' => 'GravityParticleSchedDictGetByType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleSchedDictGetByType',
            ],
            'input' => [ 'shape' => 'GravityParticleSchedDictGetByTypeRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleSchedDictGetByTypeResponseShape', ],
        ],
        'GravityParticleSchedDictGetJobTypeR' => [
            'name' => 'GravityParticleSchedDictGetJobTypeR',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleSchedDictGetJobTypeR',
            ],
            'input' => [ 'shape' => 'GravityParticleSchedDictGetJobTypeRRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleSchedDictGetJobTypeRResponseShape', ],
        ],
        'GravityParticleParticleJobSchedResetStsDone' => [
            'name' => 'GravityParticleParticleJobSchedResetStsDone',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedResetStsDone',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedResetStsDoneRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedResetStsDoneResponseShape', ],
        ],
        'GravityParticleParticleJobSchedGetRunLog' => [
            'name' => 'GravityParticleParticleJobSchedGetRunLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedGetRunLog',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedGetRunLogRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedGetRunLogResponseShape', ],
        ],
        'GravityParticleParticleJobSchedForceJobBatch' => [
            'name' => 'GravityParticleParticleJobSchedForceJobBatch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedForceJobBatch',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedForceJobBatchRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedForceJobBatchResponseShape', ],
        ],
        'GravityParticleParticleJobSchedCancelJob' => [
            'name' => 'GravityParticleParticleJobSchedCancelJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedCancelJob',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedCancelJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedCancelJobResponseShape', ],
        ],
        'GravityParticleParticleJobSchedReuseJob' => [
            'name' => 'GravityParticleParticleJobSchedReuseJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedReuseJob',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedReuseJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedReuseJobResponseShape', ],
        ],
        'GravityParticleParticleJobSchedReuseJobWithDepend' => [
            'name' => 'GravityParticleParticleJobSchedReuseJobWithDepend',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedReuseJobWithDepend',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedReuseJobWithDependRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedReuseJobWithDependResponseShape', ],
        ],
        'GravityParticleParticleJobSchedKillJob' => [
            'name' => 'GravityParticleParticleJobSchedKillJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedKillJob',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedKillJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedKillJobResponseShape', ],
        ],
        'GravityParticleParticleJobSchedUpdateSchedJob' => [
            'name' => 'GravityParticleParticleJobSchedUpdateSchedJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedUpdateSchedJob',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedUpdateSchedJobRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedUpdateSchedJobResponseShape', ],
        ],
        'GravityParticleParticleJobSchedGetSchedJobInfo' => [
            'name' => 'GravityParticleParticleJobSchedGetSchedJobInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleParticleJobSchedGetSchedJobInfo',
            ],
            'input' => [ 'shape' => 'GravityParticleParticleJobSchedGetSchedJobInfoRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleParticleJobSchedGetSchedJobInfoResponseShape', ],
        ],
        'GravityParticleConfigUserMatchUser' => [
            'name' => 'GravityParticleConfigUserMatchUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/gravityParticleConfigUserMatchUser',
            ],
            'input' => [ 'shape' => 'GravityParticleConfigUserMatchUserRequestShape', ],
            'output' => [ 'shape' => 'GravityParticleConfigUserMatchUserResponseShape', ],
        ],
        'ManageHubDutyListRoster' => [
            'name' => 'ManageHubDutyListRoster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubDutyListRoster',
            ],
            'input' => [ 'shape' => 'ManageHubDutyListRosterRequestShape', ],
            'output' => [ 'shape' => 'ManageHubDutyListRosterResponseShape', ],
        ],
        'ManageHubDutyUpdateRoster' => [
            'name' => 'ManageHubDutyUpdateRoster',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubDutyUpdateRoster',
            ],
            'input' => [ 'shape' => 'ManageHubDutyUpdateRosterRequestShape', ],
            'output' => [ 'shape' => 'ManageHubDutyUpdateRosterResponseShape', ],
        ],
        'ManageHubDutyAddWatchman' => [
            'name' => 'ManageHubDutyAddWatchman',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubDutyAddWatchman',
            ],
            'input' => [ 'shape' => 'ManageHubDutyAddWatchmanRequestShape', ],
            'output' => [ 'shape' => 'ManageHubDutyAddWatchmanResponseShape', ],
        ],
        'ManageHubDutyDeleteWatchman' => [
            'name' => 'ManageHubDutyDeleteWatchman',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubDutyDeleteWatchman',
            ],
            'input' => [ 'shape' => 'ManageHubDutyDeleteWatchmanRequestShape', ],
            'output' => [ 'shape' => 'ManageHubDutyDeleteWatchmanResponseShape', ],
        ],
        'ManageHubDutyUpdateWatchman' => [
            'name' => 'ManageHubDutyUpdateWatchman',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubDutyUpdateWatchman',
            ],
            'input' => [ 'shape' => 'ManageHubDutyUpdateWatchmanRequestShape', ],
            'output' => [ 'shape' => 'ManageHubDutyUpdateWatchmanResponseShape', ],
        ],
        'ManageHubDutyListWatchman' => [
            'name' => 'ManageHubDutyListWatchman',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubDutyListWatchman',
            ],
            'input' => [ 'shape' => 'ManageHubDutyListWatchmanRequestShape', ],
            'output' => [ 'shape' => 'ManageHubDutyListWatchmanResponseShape', ],
        ],
        'ManageHubGravityJobProperty' => [
            'name' => 'ManageHubGravityJobProperty',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobProperty',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobPropertyRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobPropertyResponseShape', ],
        ],
        'ManageHubGravityJobRunHistory' => [
            'name' => 'ManageHubGravityJobRunHistory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobRunHistory',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobRunHistoryRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobRunHistoryResponseShape', ],
        ],
        'ManageHubGravityJobParent' => [
            'name' => 'ManageHubGravityJobParent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobParent',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobParentRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobParentResponseShape', ],
        ],
        'ManageHubGravityJobChild' => [
            'name' => 'ManageHubGravityJobChild',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobChild',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobChildRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobChildResponseShape', ],
        ],
        'ManageHubGravityJobOperateHistory' => [
            'name' => 'ManageHubGravityJobOperateHistory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobOperateHistory',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobOperateHistoryRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobOperateHistoryResponseShape', ],
        ],
        'ManageHubGravityJobLog' => [
            'name' => 'ManageHubGravityJobLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobLog',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobLogRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobLogResponseShape', ],
        ],
        'ManageHubGravityListJob' => [
            'name' => 'ManageHubGravityListJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityListJob',
            ],
            'input' => [ 'shape' => 'ManageHubGravityListJobRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityListJobResponseShape', ],
        ],
        'ManageHubGravityRerun' => [
            'name' => 'ManageHubGravityRerun',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityRerun',
            ],
            'input' => [ 'shape' => 'ManageHubGravityRerunRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityRerunResponseShape', ],
        ],
        'ManageHubGravityReset' => [
            'name' => 'ManageHubGravityReset',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityReset',
            ],
            'input' => [ 'shape' => 'ManageHubGravityResetRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityResetResponseShape', ],
        ],
        'ManageHubGravityKill' => [
            'name' => 'ManageHubGravityKill',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityKill',
            ],
            'input' => [ 'shape' => 'ManageHubGravityKillRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityKillResponseShape', ],
        ],
        'ManageHubGravityJobType' => [
            'name' => 'ManageHubGravityJobType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityJobType',
            ],
            'input' => [ 'shape' => 'ManageHubGravityJobTypeRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityJobTypeResponseShape', ],
        ],
        'ManageHubGravityListTxDateStatus' => [
            'name' => 'ManageHubGravityListTxDateStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityListTxDateStatus',
            ],
            'input' => [ 'shape' => 'ManageHubGravityListTxDateStatusRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityListTxDateStatusResponseShape', ],
        ],
        'ManageHubGravityOneClickRerunPreview' => [
            'name' => 'ManageHubGravityOneClickRerunPreview',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityOneClickRerunPreview',
            ],
            'input' => [ 'shape' => 'ManageHubGravityOneClickRerunPreviewRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityOneClickRerunPreviewResponseShape', ],
        ],
        'ManageHubGravityOneClickRerun' => [
            'name' => 'ManageHubGravityOneClickRerun',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityOneClickRerun',
            ],
            'input' => [ 'shape' => 'ManageHubGravityOneClickRerunRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityOneClickRerunResponseShape', ],
        ],
        'ManageHubGravityOneClickRerunBatches' => [
            'name' => 'ManageHubGravityOneClickRerunBatches',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityOneClickRerunBatches',
            ],
            'input' => [ 'shape' => 'ManageHubGravityOneClickRerunBatchesRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityOneClickRerunBatchesResponseShape', ],
        ],
        'ManageHubGravityOneClickRerunTasks' => [
            'name' => 'ManageHubGravityOneClickRerunTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityOneClickRerunTasks',
            ],
            'input' => [ 'shape' => 'ManageHubGravityOneClickRerunTasksRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityOneClickRerunTasksResponseShape', ],
        ],
        'ManageHubGravityOneClickRerunResubmit' => [
            'name' => 'ManageHubGravityOneClickRerunResubmit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubGravityOneClickRerunResubmit',
            ],
            'input' => [ 'shape' => 'ManageHubGravityOneClickRerunResubmitRequestShape', ],
            'output' => [ 'shape' => 'ManageHubGravityOneClickRerunResubmitResponseShape', ],
        ],
        'ManageHubStorageSummary' => [
            'name' => 'ManageHubStorageSummary',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubStorageSummary',
            ],
            'input' => [ 'shape' => 'ManageHubStorageSummaryRequestShape', ],
            'output' => [ 'shape' => 'ManageHubStorageSummaryResponseShape', ],
        ],
        'ManageHubStorageIncrement' => [
            'name' => 'ManageHubStorageIncrement',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubStorageIncrement',
            ],
            'input' => [ 'shape' => 'ManageHubStorageIncrementRequestShape', ],
            'output' => [ 'shape' => 'ManageHubStorageIncrementResponseShape', ],
        ],
        'ManageHubStorageDetails' => [
            'name' => 'ManageHubStorageDetails',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubStorageDetails',
            ],
            'input' => [ 'shape' => 'ManageHubStorageDetailsRequestShape', ],
            'output' => [ 'shape' => 'ManageHubStorageDetailsResponseShape', ],
        ],
        'ManageHubStorageTableDDL' => [
            'name' => 'ManageHubStorageTableDDL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubStorageTableDDL',
            ],
            'input' => [ 'shape' => 'ManageHubStorageTableDDLRequestShape', ],
            'output' => [ 'shape' => 'ManageHubStorageTableDDLResponseShape', ],
        ],
        'ManageHubStoragePartitionList' => [
            'name' => 'ManageHubStoragePartitionList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/manageHubStoragePartitionList',
            ],
            'input' => [ 'shape' => 'ManageHubStoragePartitionListRequestShape', ],
            'output' => [ 'shape' => 'ManageHubStoragePartitionListResponseShape', ],
        ],
        'DescribePublishObjs' => [
            'name' => 'DescribePublishObjs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/describePublishObjs',
            ],
            'input' => [ 'shape' => 'DescribePublishObjsRequestShape', ],
            'output' => [ 'shape' => 'DescribePublishObjsResponseShape', ],
        ],
        'DeletePublishObj' => [
            'name' => 'DeletePublishObj',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/deletePublishObj',
            ],
            'input' => [ 'shape' => 'DeletePublishObjRequestShape', ],
            'output' => [ 'shape' => 'DeletePublishObjResponseShape', ],
        ],
        'DescribePublishObj' => [
            'name' => 'DescribePublishObj',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/describePublishObj',
            ],
            'input' => [ 'shape' => 'DescribePublishObjRequestShape', ],
            'output' => [ 'shape' => 'DescribePublishObjResponseShape', ],
        ],
        'PreviewPackage' => [
            'name' => 'PreviewPackage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/previewPackage',
            ],
            'input' => [ 'shape' => 'PreviewPackageRequestShape', ],
            'output' => [ 'shape' => 'PreviewPackageResponseShape', ],
        ],
        'PackagePublishObj' => [
            'name' => 'PackagePublishObj',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/packagePublishObj',
            ],
            'input' => [ 'shape' => 'PackagePublishObjRequestShape', ],
            'output' => [ 'shape' => 'PackagePublishObjResponseShape', ],
        ],
        'DescribePublishPkgs' => [
            'name' => 'DescribePublishPkgs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/describePublishPkgs',
            ],
            'input' => [ 'shape' => 'DescribePublishPkgsRequestShape', ],
            'output' => [ 'shape' => 'DescribePublishPkgsResponseShape', ],
        ],
        'DescribePublishPkg' => [
            'name' => 'DescribePublishPkg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/describePublishPkg',
            ],
            'input' => [ 'shape' => 'DescribePublishPkgRequestShape', ],
            'output' => [ 'shape' => 'DescribePublishPkgResponseShape', ],
        ],
        'DeletePublishPkg' => [
            'name' => 'DeletePublishPkg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/deletePublishPkg',
            ],
            'input' => [ 'shape' => 'DeletePublishPkgRequestShape', ],
            'output' => [ 'shape' => 'DeletePublishPkgResponseShape', ],
        ],
        'PublishPkg' => [
            'name' => 'PublishPkg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/publishPkg',
            ],
            'input' => [ 'shape' => 'PublishPkgRequestShape', ],
            'output' => [ 'shape' => 'PublishPkgResponseShape', ],
        ],
        'UranusCatalogDelete' => [
            'name' => 'UranusCatalogDelete',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusCatalogDelete',
            ],
            'input' => [ 'shape' => 'UranusCatalogDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusCatalogDeleteResponseShape', ],
        ],
        'UranusCatalogQueryList' => [
            'name' => 'UranusCatalogQueryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusCatalogQueryList',
            ],
            'input' => [ 'shape' => 'UranusCatalogQueryListRequestShape', ],
            'output' => [ 'shape' => 'UranusCatalogQueryListResponseShape', ],
        ],
        'UranusQueryList' => [
            'name' => 'UranusQueryList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusQueryList',
            ],
            'input' => [ 'shape' => 'UranusQueryListRequestShape', ],
            'output' => [ 'shape' => 'UranusQueryListResponseShape', ],
        ],
        'UranusCatalogUpdate' => [
            'name' => 'UranusCatalogUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusCatalogUpdate',
            ],
            'input' => [ 'shape' => 'UranusCatalogUpdateRequestShape', ],
            'output' => [ 'shape' => 'UranusCatalogUpdateResponseShape', ],
        ],
        'UranusCatalogSave' => [
            'name' => 'UranusCatalogSave',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusCatalogSave',
            ],
            'input' => [ 'shape' => 'UranusCatalogSaveRequestShape', ],
            'output' => [ 'shape' => 'UranusCatalogSaveResponseShape', ],
        ],
        'UranusTableDataDownload' => [
            'name' => 'UranusTableDataDownload',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableDataDownload',
            ],
            'input' => [ 'shape' => 'UranusTableDataDownloadRequestShape', ],
            'output' => [ 'shape' => 'UranusTableDataDownloadResponseShape', ],
        ],
        'UranusTableDataLoad' => [
            'name' => 'UranusTableDataLoad',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableDataLoad',
            ],
            'input' => [ 'shape' => 'UranusTableDataLoadRequestShape', ],
            'output' => [ 'shape' => 'UranusTableDataLoadResponseShape', ],
        ],
        'UranusDataLoadPreview' => [
            'name' => 'UranusDataLoadPreview',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDataLoadPreview',
            ],
            'input' => [ 'shape' => 'UranusDataLoadPreviewRequestShape', ],
            'output' => [ 'shape' => 'UranusDataLoadPreviewResponseShape', ],
        ],
        'UranusDataLoadHistory' => [
            'name' => 'UranusDataLoadHistory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDataLoadHistory',
            ],
            'input' => [ 'shape' => 'UranusDataLoadHistoryRequestShape', ],
            'output' => [ 'shape' => 'UranusDataLoadHistoryResponseShape', ],
        ],
        'UranusDataLoadKill' => [
            'name' => 'UranusDataLoadKill',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDataLoadKill',
            ],
            'input' => [ 'shape' => 'UranusDataLoadKillRequestShape', ],
            'output' => [ 'shape' => 'UranusDataLoadKillResponseShape', ],
        ],
        'UranusDataLoadLog' => [
            'name' => 'UranusDataLoadLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDataLoadLog',
            ],
            'input' => [ 'shape' => 'UranusDataLoadLogRequestShape', ],
            'output' => [ 'shape' => 'UranusDataLoadLogResponseShape', ],
        ],
        'UranusDictQuerySysParam' => [
            'name' => 'UranusDictQuerySysParam',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDictQuerySysParam',
            ],
            'input' => [ 'shape' => 'UranusDictQuerySysParamRequestShape', ],
            'output' => [ 'shape' => 'UranusDictQuerySysParamResponseShape', ],
        ],
        'UranusDictTableCode' => [
            'name' => 'UranusDictTableCode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDictTableCode',
            ],
            'input' => [ 'shape' => 'UranusDictTableCodeRequestShape', ],
            'output' => [ 'shape' => 'UranusDictTableCodeResponseShape', ],
        ],
        'QueryList' => [
            'name' => 'QueryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusDictQueryList',
            ],
            'input' => [ 'shape' => 'QueryListRequestShape', ],
            'output' => [ 'shape' => 'QueryListResponseShape', ],
        ],
        'UranusExtraRunnerStart' => [
            'name' => 'UranusExtraRunnerStart',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusExtraRunnerStart',
            ],
            'input' => [ 'shape' => 'UranusExtraRunnerStartRequestShape', ],
            'output' => [ 'shape' => 'UranusExtraRunnerStartResponseShape', ],
        ],
        'UranusExtraRunnerStop' => [
            'name' => 'UranusExtraRunnerStop',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusExtraRunnerStop',
            ],
            'input' => [ 'shape' => 'UranusExtraRunnerStopRequestShape', ],
            'output' => [ 'shape' => 'UranusExtraRunnerStopResponseShape', ],
        ],
        'UranusExtraRunnerResultList' => [
            'name' => 'UranusExtraRunnerResultList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusExtraRunnerResultList',
            ],
            'input' => [ 'shape' => 'UranusExtraRunnerResultListRequestShape', ],
            'output' => [ 'shape' => 'UranusExtraRunnerResultListResponseShape', ],
        ],
        'UranusExtraRunnerResult' => [
            'name' => 'UranusExtraRunnerResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusExtraRunnerResult',
            ],
            'input' => [ 'shape' => 'UranusExtraRunnerResultRequestShape', ],
            'output' => [ 'shape' => 'UranusExtraRunnerResultResponseShape', ],
        ],
        'UranusExtraRunnerParamParse' => [
            'name' => 'UranusExtraRunnerParamParse',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusExtraRunnerParamParse',
            ],
            'input' => [ 'shape' => 'UranusExtraRunnerParamParseRequestShape', ],
            'output' => [ 'shape' => 'UranusExtraRunnerParamParseResponseShape', ],
        ],
        'UranusQueryJarManagementTree' => [
            'name' => 'UranusQueryJarManagementTree',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusQueryJarManagementTree',
            ],
            'input' => [ 'shape' => 'UranusQueryJarManagementTreeRequestShape', ],
            'output' => [ 'shape' => 'UranusQueryJarManagementTreeResponseShape', ],
        ],
        'UranusQueryFileTree' => [
            'name' => 'UranusQueryFileTree',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusQueryFileTree',
            ],
            'input' => [ 'shape' => 'UranusQueryFileTreeRequestShape', ],
            'output' => [ 'shape' => 'UranusQueryFileTreeResponseShape', ],
        ],
        'UranusResourceCreate' => [
            'name' => 'UranusResourceCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceCreate',
            ],
            'input' => [ 'shape' => 'UranusResourceCreateRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceCreateResponseShape', ],
        ],
        'UranusResourceUpdate' => [
            'name' => 'UranusResourceUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceUpdate',
            ],
            'input' => [ 'shape' => 'UranusResourceUpdateRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceUpdateResponseShape', ],
        ],
        'UranusResourceStatus' => [
            'name' => 'UranusResourceStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceStatus',
            ],
            'input' => [ 'shape' => 'UranusResourceStatusRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceStatusResponseShape', ],
        ],
        'UranusResourceListRoot' => [
            'name' => 'UranusResourceListRoot',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceListRoot',
            ],
            'input' => [ 'shape' => 'UranusResourceListRootRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceListRootResponseShape', ],
        ],
        'UranusResourceListDirectory' => [
            'name' => 'UranusResourceListDirectory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceListDirectory',
            ],
            'input' => [ 'shape' => 'UranusResourceListDirectoryRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceListDirectoryResponseShape', ],
        ],
        'UranusResourceListRootResources' => [
            'name' => 'UranusResourceListRootResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceListRootResources',
            ],
            'input' => [ 'shape' => 'UranusResourceListRootResourcesRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceListRootResourcesResponseShape', ],
        ],
        'UranusResourceDelete' => [
            'name' => 'UranusResourceDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceDelete',
            ],
            'input' => [ 'shape' => 'UranusResourceDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceDeleteResponseShape', ],
        ],
        'UranusResourcePublish' => [
            'name' => 'UranusResourcePublish',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourcePublish',
            ],
            'input' => [ 'shape' => 'UranusResourcePublishRequestShape', ],
            'output' => [ 'shape' => 'UranusResourcePublishResponseShape', ],
        ],
        'UranusResourceAppendFile' => [
            'name' => 'UranusResourceAppendFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceAppendFile',
            ],
            'input' => [ 'shape' => 'UranusResourceAppendFileRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceAppendFileResponseShape', ],
        ],
        'UranusResourceCloseFile' => [
            'name' => 'UranusResourceCloseFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceCloseFile',
            ],
            'input' => [ 'shape' => 'UranusResourceCloseFileRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceCloseFileResponseShape', ],
        ],
        'UranusResourceDownloadUrl' => [
            'name' => 'UranusResourceDownloadUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceDownloadUrl',
            ],
            'input' => [ 'shape' => 'UranusResourceDownloadUrlRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceDownloadUrlResponseShape', ],
        ],
        'UranusResourceGetBriefByCodes' => [
            'name' => 'UranusResourceGetBriefByCodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceGetBriefByCodes',
            ],
            'input' => [ 'shape' => 'UranusResourceGetBriefByCodesRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceGetBriefByCodesResponseShape', ],
        ],
        'UranusResourceGetBriefByPrefix' => [
            'name' => 'UranusResourceGetBriefByPrefix',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceGetBriefByPrefix',
            ],
            'input' => [ 'shape' => 'UranusResourceGetBriefByPrefixRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceGetBriefByPrefixResponseShape', ],
        ],
        'UranusResourceGetDetailByPrefix' => [
            'name' => 'UranusResourceGetDetailByPrefix',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusResourceGetDetailByPrefix',
            ],
            'input' => [ 'shape' => 'UranusResourceGetDetailByPrefixRequestShape', ],
            'output' => [ 'shape' => 'UranusResourceGetDetailByPrefixResponseShape', ],
        ],
        'UranusScriptStop' => [
            'name' => 'UranusScriptStop',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptStop',
            ],
            'input' => [ 'shape' => 'UranusScriptStopRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptStopResponseShape', ],
        ],
        'UranusScriptSyntaxCheck' => [
            'name' => 'UranusScriptSyntaxCheck',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptSyntaxCheck',
            ],
            'input' => [ 'shape' => 'UranusScriptSyntaxCheckRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptSyntaxCheckResponseShape', ],
        ],
        'UranusScriptStarters' => [
            'name' => 'UranusScriptStarters',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptStarters',
            ],
            'input' => [ 'shape' => 'UranusScriptStartersRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptStartersResponseShape', ],
        ],
        'UranusScriptGetScriptRunResult' => [
            'name' => 'UranusScriptGetScriptRunResult',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptGetScriptRunResult',
            ],
            'input' => [ 'shape' => 'UranusScriptGetScriptRunResultRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptGetScriptRunResultResponseShape', ],
        ],
        'UranusScriptGetScriptRunResultList' => [
            'name' => 'UranusScriptGetScriptRunResultList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptGetScriptRunResultList',
            ],
            'input' => [ 'shape' => 'UranusScriptGetScriptRunResultListRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptGetScriptRunResultListResponseShape', ],
        ],
        'UranusScriptVerifyScriptFileDepend' => [
            'name' => 'UranusScriptVerifyScriptFileDepend',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptVerifyScriptFileDepend',
            ],
            'input' => [ 'shape' => 'UranusScriptVerifyScriptFileDependRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptVerifyScriptFileDependResponseShape', ],
        ],
        'UranusScriptSaveContent' => [
            'name' => 'UranusScriptSaveContent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptSaveContent',
            ],
            'input' => [ 'shape' => 'UranusScriptSaveContentRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptSaveContentResponseShape', ],
        ],
        'UranusScriptRunLogList' => [
            'name' => 'UranusScriptRunLogList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptRunLogList',
            ],
            'input' => [ 'shape' => 'UranusScriptRunLogListRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptRunLogListResponseShape', ],
        ],
        'UranusScriptQueryParams' => [
            'name' => 'UranusScriptQueryParams',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptQueryParams',
            ],
            'input' => [ 'shape' => 'UranusScriptQueryParamsRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptQueryParamsResponseShape', ],
        ],
        'UranusScriptParams' => [
            'name' => 'UranusScriptParams',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptParams',
            ],
            'input' => [ 'shape' => 'UranusScriptParamsRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptParamsResponseShape', ],
        ],
        'UranusScriptRunLogLogContent' => [
            'name' => 'UranusScriptRunLogLogContent',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptRunLogLogContent',
            ],
            'input' => [ 'shape' => 'UranusScriptRunLogLogContentRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptRunLogLogContentResponseShape', ],
        ],
        'UranusScriptRunLogDetail' => [
            'name' => 'UranusScriptRunLogDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptRunLogDetail',
            ],
            'input' => [ 'shape' => 'UranusScriptRunLogDetailRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptRunLogDetailResponseShape', ],
        ],
        'UranusScriptRunLogContent' => [
            'name' => 'UranusScriptRunLogContent',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptRunLogContent',
            ],
            'input' => [ 'shape' => 'UranusScriptRunLogContentRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptRunLogContentResponseShape', ],
        ],
        'UranusScriptQueries' => [
            'name' => 'UranusScriptQueries',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusScriptQueries',
            ],
            'input' => [ 'shape' => 'UranusScriptQueriesRequestShape', ],
            'output' => [ 'shape' => 'UranusScriptQueriesResponseShape', ],
        ],
        'UranusTablePublish' => [
            'name' => 'UranusTablePublish',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTablePublish',
            ],
            'input' => [ 'shape' => 'UranusTablePublishRequestShape', ],
            'output' => [ 'shape' => 'UranusTablePublishResponseShape', ],
        ],
        'UranusTableLike' => [
            'name' => 'UranusTableLike',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableLike',
            ],
            'input' => [ 'shape' => 'UranusTableLikeRequestShape', ],
            'output' => [ 'shape' => 'UranusTableLikeResponseShape', ],
        ],
        'UranusTableCheckTableName' => [
            'name' => 'UranusTableCheckTableName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableCheckTableName',
            ],
            'input' => [ 'shape' => 'UranusTableCheckTableNameRequestShape', ],
            'output' => [ 'shape' => 'UranusTableCheckTableNameResponseShape', ],
        ],
        'UranusTableDdlAnalyze' => [
            'name' => 'UranusTableDdlAnalyze',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableDdlAnalyze',
            ],
            'input' => [ 'shape' => 'UranusTableDdlAnalyzeRequestShape', ],
            'output' => [ 'shape' => 'UranusTableDdlAnalyzeResponseShape', ],
        ],
        'UranusTableDelete' => [
            'name' => 'UranusTableDelete',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableDelete',
            ],
            'input' => [ 'shape' => 'UranusTableDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusTableDeleteResponseShape', ],
        ],
        'UranusTableColumn' => [
            'name' => 'UranusTableColumn',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableColumn',
            ],
            'input' => [ 'shape' => 'UranusTableColumnRequestShape', ],
            'output' => [ 'shape' => 'UranusTableColumnResponseShape', ],
        ],
        'UranusTableAlterSqlView' => [
            'name' => 'UranusTableAlterSqlView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableAlterSqlView',
            ],
            'input' => [ 'shape' => 'UranusTableAlterSqlViewRequestShape', ],
            'output' => [ 'shape' => 'UranusTableAlterSqlViewResponseShape', ],
        ],
        'UranusTableUnpublishedInfo' => [
            'name' => 'UranusTableUnpublishedInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableUnpublishedInfo',
            ],
            'input' => [ 'shape' => 'UranusTableUnpublishedInfoRequestShape', ],
            'output' => [ 'shape' => 'UranusTableUnpublishedInfoResponseShape', ],
        ],
        'UranusTablePublishToPublishCenter' => [
            'name' => 'UranusTablePublishToPublishCenter',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTablePublishToPublishCenter',
            ],
            'input' => [ 'shape' => 'UranusTablePublishToPublishCenterRequestShape', ],
            'output' => [ 'shape' => 'UranusTablePublishToPublishCenterResponseShape', ],
        ],
        'UranusTableDelimiters' => [
            'name' => 'UranusTableDelimiters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableDelimiters',
            ],
            'input' => [ 'shape' => 'UranusTableDelimitersRequestShape', ],
            'output' => [ 'shape' => 'UranusTableDelimitersResponseShape', ],
        ],
        'UranusTableDDL' => [
            'name' => 'UranusTableDDL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTableDDL',
            ],
            'input' => [ 'shape' => 'UranusTableDDLRequestShape', ],
            'output' => [ 'shape' => 'UranusTableDDLResponseShape', ],
        ],
        'UranusTaskFlowUpdate' => [
            'name' => 'UranusTaskFlowUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowUpdate',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowUpdateRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowUpdateResponseShape', ],
        ],
        'UranusTaskFlowSave' => [
            'name' => 'UranusTaskFlowSave',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowSave',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowSaveRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowSaveResponseShape', ],
        ],
        'UranusTaskFlowListTree' => [
            'name' => 'UranusTaskFlowListTree',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowListTree',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowListTreeRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowListTreeResponseShape', ],
        ],
        'UranusTaskFlowDelete' => [
            'name' => 'UranusTaskFlowDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowDelete',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowDeleteResponseShape', ],
        ],
        'UranusTaskFlowCollection' => [
            'name' => 'UranusTaskFlowCollection',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowCollection',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowCollectionRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowCollectionResponseShape', ],
        ],
        'UranusTaskFlowCheck' => [
            'name' => 'UranusTaskFlowCheck',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowCheck',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowCheckRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowCheckResponseShape', ],
        ],
        'UranusTaskFlowQueryList' => [
            'name' => 'UranusTaskFlowQueryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowQueryList',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowQueryListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowQueryListResponseShape', ],
        ],
        'UranusTaskFlowDetail' => [
            'name' => 'UranusTaskFlowDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskFlowDetail',
            ],
            'input' => [ 'shape' => 'UranusTaskFlowDetailRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskFlowDetailResponseShape', ],
        ],
        'UranusTaskInfoGetTaskCode' => [
            'name' => 'UranusTaskInfoGetTaskCode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoGetTaskCode',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoGetTaskCodeRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoGetTaskCodeResponseShape', ],
        ],
        'UranusTaskInfoSparkVersion' => [
            'name' => 'UranusTaskInfoSparkVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoSparkVersion',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoSparkVersionRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoSparkVersionResponseShape', ],
        ],
        'UranusTaskInfoSave' => [
            'name' => 'UranusTaskInfoSave',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoSave',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoSaveRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoSaveResponseShape', ],
        ],
        'UranusTaskInfoRePublish' => [
            'name' => 'UranusTaskInfoRePublish',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoRePublish',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoRePublishRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoRePublishResponseShape', ],
        ],
        'UranusTaskInfoPublish' => [
            'name' => 'UranusTaskInfoPublish',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoPublish',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoPublishRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoPublishResponseShape', ],
        ],
        'UranusTaskInfoHistoryList' => [
            'name' => 'UranusTaskInfoHistoryList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoHistoryList',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoHistoryListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoHistoryListResponseShape', ],
        ],
        'UranusTaskInfoFuzzyListJobName' => [
            'name' => 'UranusTaskInfoFuzzyListJobName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoFuzzyListJobName',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoFuzzyListJobNameRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoFuzzyListJobNameResponseShape', ],
        ],
        'UranusTaskInfoAnalysisOutputTable' => [
            'name' => 'UranusTaskInfoAnalysisOutputTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoAnalysisOutputTable',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoAnalysisOutputTableRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoAnalysisOutputTableResponseShape', ],
        ],
        'UranusTaskInfoAnalysisDependJob' => [
            'name' => 'UranusTaskInfoAnalysisDependJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoAnalysisDependJob',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoAnalysisDependJobRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoAnalysisDependJobResponseShape', ],
        ],
        'UranusTaskInfoPrePublish' => [
            'name' => 'UranusTaskInfoPrePublish',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoPrePublish',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoPrePublishRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoPrePublishResponseShape', ],
        ],
        'UranusTaskInfoOnLineConfig' => [
            'name' => 'UranusTaskInfoOnLineConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoOnLineConfig',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoOnLineConfigRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoOnLineConfigResponseShape', ],
        ],
        'UranusTaskInfoLockDetail' => [
            'name' => 'UranusTaskInfoLockDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoLockDetail',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoLockDetailRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoLockDetailResponseShape', ],
        ],
        'UranusTaskInfoJobPublishType' => [
            'name' => 'UranusTaskInfoJobPublishType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoJobPublishType',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoJobPublishTypeRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoJobPublishTypeResponseShape', ],
        ],
        'UranusTaskInfoDetail' => [
            'name' => 'UranusTaskInfoDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskInfoDetail',
            ],
            'input' => [ 'shape' => 'UranusTaskInfoDetailRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskInfoDetailResponseShape', ],
        ],
        'UranusTaskSparkParamKeys' => [
            'name' => 'UranusTaskSparkParamKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskSparkParamKeys',
            ],
            'input' => [ 'shape' => 'UranusTaskSparkParamKeysRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskSparkParamKeysResponseShape', ],
        ],
        'UranusTaskDependExportParamList' => [
            'name' => 'UranusTaskDependExportParamList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskDependExportParamList',
            ],
            'input' => [ 'shape' => 'UranusTaskDependExportParamListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskDependExportParamListResponseShape', ],
        ],
        'UranusTaskExportParamList' => [
            'name' => 'UranusTaskExportParamList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskExportParamList',
            ],
            'input' => [ 'shape' => 'UranusTaskExportParamListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskExportParamListResponseShape', ],
        ],
        'UranusTaskElementDelimiters' => [
            'name' => 'UranusTaskElementDelimiters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskElementDelimiters',
            ],
            'input' => [ 'shape' => 'UranusTaskElementDelimitersRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskElementDelimitersResponseShape', ],
        ],
        'UranusTaskUpdateStatus' => [
            'name' => 'UranusTaskUpdateStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskUpdateStatus',
            ],
            'input' => [ 'shape' => 'UranusTaskUpdateStatusRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskUpdateStatusResponseShape', ],
        ],
        'UranusTaskUpdateStatusList' => [
            'name' => 'UranusTaskUpdateStatusList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskUpdateStatusList',
            ],
            'input' => [ 'shape' => 'UranusTaskUpdateStatusListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskUpdateStatusListResponseShape', ],
        ],
        'UranusTaskPublishOne' => [
            'name' => 'UranusTaskPublishOne',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskPublishOne',
            ],
            'input' => [ 'shape' => 'UranusTaskPublishOneRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskPublishOneResponseShape', ],
        ],
        'UranusTaskPagePublish' => [
            'name' => 'UranusTaskPagePublish',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskPagePublish',
            ],
            'input' => [ 'shape' => 'UranusTaskPagePublishRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskPagePublishResponseShape', ],
        ],
        'UranusTaskPageList' => [
            'name' => 'UranusTaskPageList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskPageList',
            ],
            'input' => [ 'shape' => 'UranusTaskPageListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskPageListResponseShape', ],
        ],
        'UranusTaskNodeUpdateNodeData' => [
            'name' => 'UranusTaskNodeUpdateNodeData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskNodeUpdateNodeData',
            ],
            'input' => [ 'shape' => 'UranusTaskNodeUpdateNodeDataRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskNodeUpdateNodeDataResponseShape', ],
        ],
        'UranusTaskNodeUpdateJobName' => [
            'name' => 'UranusTaskNodeUpdateJobName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskNodeUpdateJobName',
            ],
            'input' => [ 'shape' => 'UranusTaskNodeUpdateJobNameRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskNodeUpdateJobNameResponseShape', ],
        ],
        'UranusTaskNodeSave' => [
            'name' => 'UranusTaskNodeSave',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskNodeSave',
            ],
            'input' => [ 'shape' => 'UranusTaskNodeSaveRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskNodeSaveResponseShape', ],
        ],
        'UranusTaskAddRelation' => [
            'name' => 'UranusTaskAddRelation',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskAddRelation',
            ],
            'input' => [ 'shape' => 'UranusTaskAddRelationRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskAddRelationResponseShape', ],
        ],
        'UranusTaskPrePublish' => [
            'name' => 'UranusTaskPrePublish',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskPrePublish',
            ],
            'input' => [ 'shape' => 'UranusTaskPrePublishRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskPrePublishResponseShape', ],
        ],
        'UranusTaskNodeList' => [
            'name' => 'UranusTaskNodeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskNodeList',
            ],
            'input' => [ 'shape' => 'UranusTaskNodeListRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskNodeListResponseShape', ],
        ],
        'UranusTaskNodeDelete' => [
            'name' => 'UranusTaskNodeDelete',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskNodeDelete',
            ],
            'input' => [ 'shape' => 'UranusTaskNodeDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskNodeDeleteResponseShape', ],
        ],
        'UranusTaskNodeCheckJobName' => [
            'name' => 'UranusTaskNodeCheckJobName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskNodeCheckJobName',
            ],
            'input' => [ 'shape' => 'UranusTaskNodeCheckJobNameRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskNodeCheckJobNameResponseShape', ],
        ],
        'UranusTaskGetRelation' => [
            'name' => 'UranusTaskGetRelation',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskGetRelation',
            ],
            'input' => [ 'shape' => 'UranusTaskGetRelationRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskGetRelationResponseShape', ],
        ],
        'UranusTaskDetail' => [
            'name' => 'UranusTaskDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusTaskDetail',
            ],
            'input' => [ 'shape' => 'UranusTaskDetailRequestShape', ],
            'output' => [ 'shape' => 'UranusTaskDetailResponseShape', ],
        ],
        'UranusUdfListFunction' => [
            'name' => 'UranusUdfListFunction',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusUdfListFunction',
            ],
            'input' => [ 'shape' => 'UranusUdfListFunctionRequestShape', ],
            'output' => [ 'shape' => 'UranusUdfListFunctionResponseShape', ],
        ],
        'UranusFunctionCreate' => [
            'name' => 'UranusFunctionCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionCreate',
            ],
            'input' => [ 'shape' => 'UranusFunctionCreateRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionCreateResponseShape', ],
        ],
        'UranusFunctionUpdate' => [
            'name' => 'UranusFunctionUpdate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionUpdate',
            ],
            'input' => [ 'shape' => 'UranusFunctionUpdateRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionUpdateResponseShape', ],
        ],
        'UranusFunctionDelete' => [
            'name' => 'UranusFunctionDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionDelete',
            ],
            'input' => [ 'shape' => 'UranusFunctionDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionDeleteResponseShape', ],
        ],
        'UranusFunctionCreateCatalog' => [
            'name' => 'UranusFunctionCreateCatalog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionCreateCatalog',
            ],
            'input' => [ 'shape' => 'UranusFunctionCreateCatalogRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionCreateCatalogResponseShape', ],
        ],
        'UranusFunctionDeleteCatalog' => [
            'name' => 'UranusFunctionDeleteCatalog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionDeleteCatalog',
            ],
            'input' => [ 'shape' => 'UranusFunctionDeleteCatalogRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionDeleteCatalogResponseShape', ],
        ],
        'UranusFunctionCheck' => [
            'name' => 'UranusFunctionCheck',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionCheck',
            ],
            'input' => [ 'shape' => 'UranusFunctionCheckRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionCheckResponseShape', ],
        ],
        'UranusFunctionPublish' => [
            'name' => 'UranusFunctionPublish',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionPublish',
            ],
            'input' => [ 'shape' => 'UranusFunctionPublishRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionPublishResponseShape', ],
        ],
        'UranusFunctionGetById' => [
            'name' => 'UranusFunctionGetById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionGetById',
            ],
            'input' => [ 'shape' => 'UranusFunctionGetByIdRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionGetByIdResponseShape', ],
        ],
        'UranusFunctionListCatalog' => [
            'name' => 'UranusFunctionListCatalog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusFunctionListCatalog',
            ],
            'input' => [ 'shape' => 'UranusFunctionListCatalogRequestShape', ],
            'output' => [ 'shape' => 'UranusFunctionListCatalogResponseShape', ],
        ],
        'UranusWorkFlowDirIfChildrenPath' => [
            'name' => 'UranusWorkFlowDirIfChildrenPath',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkFlowDirIfChildrenPath',
            ],
            'input' => [ 'shape' => 'UranusWorkFlowDirIfChildrenPathRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkFlowDirIfChildrenPathResponseShape', ],
        ],
        'UranusWorkFlowDirFileExists' => [
            'name' => 'UranusWorkFlowDirFileExists',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkFlowDirFileExists',
            ],
            'input' => [ 'shape' => 'UranusWorkFlowDirFileExistsRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkFlowDirFileExistsResponseShape', ],
        ],
        'UranusWorkFlowDirFileDelete' => [
            'name' => 'UranusWorkFlowDirFileDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkFlowDirFileDelete',
            ],
            'input' => [ 'shape' => 'UranusWorkFlowDirFileDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkFlowDirFileDeleteResponseShape', ],
        ],
        'UranusWorkFlowDirDelete' => [
            'name' => 'UranusWorkFlowDirDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkFlowDirDelete',
            ],
            'input' => [ 'shape' => 'UranusWorkFlowDirDeleteRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkFlowDirDeleteResponseShape', ],
        ],
        'UranusWorkFlowDirCreate' => [
            'name' => 'UranusWorkFlowDirCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkFlowDirCreate',
            ],
            'input' => [ 'shape' => 'UranusWorkFlowDirCreateRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkFlowDirCreateResponseShape', ],
        ],
        'UranusWorkFlowInitUpload' => [
            'name' => 'UranusWorkFlowInitUpload',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkFlowInitUpload',
            ],
            'input' => [ 'shape' => 'UranusWorkFlowInitUploadRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkFlowInitUploadResponseShape', ],
        ],
        'UranusWorkSpaceDown' => [
            'name' => 'UranusWorkSpaceDown',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/uranusWorkSpaceDown',
            ],
            'input' => [ 'shape' => 'UranusWorkSpaceDownRequestShape', ],
            'output' => [ 'shape' => 'UranusWorkSpaceDownResponseShape', ],
        ],
        'WorkspaceCreate' => [
            'name' => 'WorkspaceCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceCreate',
            ],
            'input' => [ 'shape' => 'WorkspaceCreateRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceCreateResponseShape', ],
        ],
        'WorkspaceSaveInfo' => [
            'name' => 'WorkspaceSaveInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceSaveInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceSaveInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceSaveInfoResponseShape', ],
        ],
        'WorkspaceGetInfo' => [
            'name' => 'WorkspaceGetInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceGetInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetInfoResponseShape', ],
        ],
        'WorkspaceGetResources' => [
            'name' => 'WorkspaceGetResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetResources',
            ],
            'input' => [ 'shape' => 'WorkspaceGetResourcesRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetResourcesResponseShape', ],
        ],
        'WorkspaceBundleProject' => [
            'name' => 'WorkspaceBundleProject',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceBundleProject',
            ],
            'input' => [ 'shape' => 'WorkspaceBundleProjectRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceBundleProjectResponseShape', ],
        ],
        'WorkspaceUnbundleProject' => [
            'name' => 'WorkspaceUnbundleProject',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceUnbundleProject',
            ],
            'input' => [ 'shape' => 'WorkspaceUnbundleProjectRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceUnbundleProjectResponseShape', ],
        ],
        'WorkspaceBundleOrUnBundleResource' => [
            'name' => 'WorkspaceBundleOrUnBundleResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceBundleOrUnBundleResource',
            ],
            'input' => [ 'shape' => 'WorkspaceBundleOrUnBundleResourceRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceBundleOrUnBundleResourceResponseShape', ],
        ],
        'WorkspaceGetList' => [
            'name' => 'WorkspaceGetList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetList',
            ],
            'input' => [ 'shape' => 'WorkspaceGetListRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetListResponseShape', ],
        ],
        'WorkspaceDelete' => [
            'name' => 'WorkspaceDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceDelete',
            ],
            'input' => [ 'shape' => 'WorkspaceDeleteRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceDeleteResponseShape', ],
        ],
        'WorkspaceGetProject' => [
            'name' => 'WorkspaceGetProject',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetProject',
            ],
            'input' => [ 'shape' => 'WorkspaceGetProjectRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetProjectResponseShape', ],
        ],
        'WorkspaceGetProjectBundle' => [
            'name' => 'WorkspaceGetProjectBundle',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetProjectBundle',
            ],
            'input' => [ 'shape' => 'WorkspaceGetProjectBundleRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetProjectBundleResponseShape', ],
        ],
        'WorkspaceCreatProduct' => [
            'name' => 'WorkspaceCreatProduct',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceCreatProduct',
            ],
            'input' => [ 'shape' => 'WorkspaceCreatProductRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceCreatProductResponseShape', ],
        ],
        'WorkspaceHadCreatWsProduct' => [
            'name' => 'WorkspaceHadCreatWsProduct',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceHadCreatWsProduct',
            ],
            'input' => [ 'shape' => 'WorkspaceHadCreatWsProductRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceHadCreatWsProductResponseShape', ],
        ],
        'WorkspaceSyncWsProductOrder' => [
            'name' => 'WorkspaceSyncWsProductOrder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceSyncWsProductOrder',
            ],
            'input' => [ 'shape' => 'WorkspaceSyncWsProductOrderRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceSyncWsProductOrderResponseShape', ],
        ],
        'WorkspaceSyncRecharge' => [
            'name' => 'WorkspaceSyncRecharge',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceSyncRecharge',
            ],
            'input' => [ 'shape' => 'WorkspaceSyncRechargeRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceSyncRechargeResponseShape', ],
        ],
        'WorkspaceStopExpireOrDelete' => [
            'name' => 'WorkspaceStopExpireOrDelete',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceStopExpireOrDelete',
            ],
            'input' => [ 'shape' => 'WorkspaceStopExpireOrDeleteRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceStopExpireOrDeleteResponseShape', ],
        ],
        'WorkspaceExpiredInfo' => [
            'name' => 'WorkspaceExpiredInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceExpiredInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceExpiredInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceExpiredInfoResponseShape', ],
        ],
        'WorkspaceGetMembers' => [
            'name' => 'WorkspaceGetMembers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetMembers',
            ],
            'input' => [ 'shape' => 'WorkspaceGetMembersRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetMembersResponseShape', ],
        ],
        'WorkspaceGetUcUsers' => [
            'name' => 'WorkspaceGetUcUsers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetUcUsers',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUcUsersRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUcUsersResponseShape', ],
        ],
        'WorkspaceAddMember' => [
            'name' => 'WorkspaceAddMember',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceAddMember',
            ],
            'input' => [ 'shape' => 'WorkspaceAddMemberRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceAddMemberResponseShape', ],
        ],
        'WorkspaceGetUserRoles' => [
            'name' => 'WorkspaceGetUserRoles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetUserRoles',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUserRolesRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUserRolesResponseShape', ],
        ],
        'WorkspaceUpdateUserRole' => [
            'name' => 'WorkspaceUpdateUserRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceUpdateUserRole',
            ],
            'input' => [ 'shape' => 'WorkspaceUpdateUserRoleRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceUpdateUserRoleResponseShape', ],
        ],
        'WorkspaceDeleteMember' => [
            'name' => 'WorkspaceDeleteMember',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceDeleteMember',
            ],
            'input' => [ 'shape' => 'WorkspaceDeleteMemberRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceDeleteMemberResponseShape', ],
        ],
        'WorkspacegetUcUserByUserName' => [
            'name' => 'WorkspacegetUcUserByUserName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspacegetUcUserByUserName',
            ],
            'input' => [ 'shape' => 'WorkspacegetUcUserByUserNameRequestShape', ],
            'output' => [ 'shape' => 'WorkspacegetUcUserByUserNameResponseShape', ],
        ],
        'WorkspaceVerifyAuth' => [
            'name' => 'WorkspaceVerifyAuth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceVerifyAuth',
            ],
            'input' => [ 'shape' => 'WorkspaceVerifyAuthRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceVerifyAuthResponseShape', ],
        ],
        'WorkspaceGetUcUserByPin' => [
            'name' => 'WorkspaceGetUcUserByPin',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetUcUserByPin',
            ],
            'input' => [ 'shape' => 'WorkspaceGetUcUserByPinRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetUcUserByPinResponseShape', ],
        ],
        'WorkspaceVerifyUserIsManager' => [
            'name' => 'WorkspaceVerifyUserIsManager',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceVerifyUserIsManager',
            ],
            'input' => [ 'shape' => 'WorkspaceVerifyUserIsManagerRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceVerifyUserIsManagerResponseShape', ],
        ],
        'WorkspaceGetCurrentUserInfo' => [
            'name' => 'WorkspaceGetCurrentUserInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/apps/{appName}/workspaceGetCurrentUserInfo',
            ],
            'input' => [ 'shape' => 'WorkspaceGetCurrentUserInfoRequestShape', ],
            'output' => [ 'shape' => 'WorkspaceGetCurrentUserInfoResponseShape', ],
        ],
    ],
    'shapes' => [
        'UtteranceVo' => [
            'type' => 'structure',
            'members' => [
                'utteranceId' => [ 'type' => 'string', 'locationName' => 'utteranceId', ],
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'utteranceRole' => [ 'type' => 'string', 'locationName' => 'utteranceRole', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
            ],
        ],
        'ModelVo' => [
            'type' => 'structure',
            'members' => [
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
            ],
        ],
        'ChatVo' => [
            'type' => 'structure',
            'members' => [
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
            ],
        ],
        'JtlasSubscribeTableReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'subscribeType' => [ 'type' => 'string', 'locationName' => 'subscribeType', ],
            ],
        ],
        'JtlasPageSearchTablePrivilegeReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'JtlasGrantTablePrivilegesReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'JtlasSearchColumnLineageReq' => [
            'type' => 'structure',
            'members' => [
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'edgeType' => [ 'type' => 'string', 'locationName' => 'edgeType', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'depth' => [ 'type' => 'integer', 'locationName' => 'depth', ],
            ],
        ],
        'JtlasPageSearchTablePartitionsReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'fuzzyText' => [ 'type' => 'string', 'locationName' => 'fuzzyText', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'JtlasSearchTableLineageReq' => [
            'type' => 'structure',
            'members' => [
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'edgeType' => [ 'type' => 'string', 'locationName' => 'edgeType', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'depth' => [ 'type' => 'integer', 'locationName' => 'depth', ],
            ],
        ],
        'JtlasDestroyRequestReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'JtlasPageSearchTableReq' => [
            'type' => 'structure',
            'members' => [
                'filterQuery' => [ 'type' => 'boolean', 'locationName' => 'filterQuery', ],
                'searchMode' => [ 'type' => 'string', 'locationName' => 'searchMode', ],
                'searchKeyword' => [ 'type' => 'string', 'locationName' => 'searchKeyword', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'searchRange' => [ 'type' => 'string', 'locationName' => 'searchRange', ],
                'personInCharge' => [ 'type' => 'string', 'locationName' => 'personInCharge', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'JtlasSearchTableDoc' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableAlias' => [ 'type' => 'string', 'locationName' => 'tableAlias', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastModifyTime' => [ 'type' => 'string', 'locationName' => 'lastModifyTime', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'inputFormat' => [ 'type' => 'string', 'locationName' => 'inputFormat', ],
                'outputFormat' => [ 'type' => 'string', 'locationName' => 'outputFormat', ],
                'userDefineTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'collectPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hasCollected' => [ 'type' => 'boolean', 'locationName' => 'hasCollected', ],
                'clickCount' => [ 'type' => 'integer', 'locationName' => 'clickCount', ],
                'fireFlag' => [ 'type' => 'boolean', 'locationName' => 'fireFlag', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'string', 'locationName' => 'bucketNum', ],
            ],
        ],
        'JtlasSearchColumnLineageResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasPageSearchTablePrivilegesResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasDestroyResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchEdge' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'target' => [ 'type' => 'string', 'locationName' => 'target', ],
                'expression' => [ 'type' => 'string', 'locationName' => 'expression', ],
                'edgeType' => [ 'type' => 'string', 'locationName' => 'edgeType', ],
            ],
        ],
        'JtlasSearchTableParam' => [
            'type' => 'structure',
            'members' => [
                'paramKey' => [ 'type' => 'string', 'locationName' => 'paramKey', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
            ],
        ],
        'JtlasSubscribeTableResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchTable' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableAlias' => [ 'type' => 'string', 'locationName' => 'tableAlias', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastModifyTime' => [ 'type' => 'string', 'locationName' => 'lastModifyTime', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'inputFormat' => [ 'type' => 'string', 'locationName' => 'inputFormat', ],
                'outputFormat' => [ 'type' => 'string', 'locationName' => 'outputFormat', ],
                'userDefineTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'collectPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hasCollected' => [ 'type' => 'boolean', 'locationName' => 'hasCollected', ],
                'clickCount' => [ 'type' => 'integer', 'locationName' => 'clickCount', ],
                'latestPartition' =>  [ 'shape' => 'JtlasSearchTablePartition', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasSearchTableColumn', ], ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasSearchTablePrivilege', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasSearchTableParam', ], ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'string', 'locationName' => 'bucketNum', ],
            ],
        ],
        'JtlasGrantTablePrivilegesResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchNode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'JtlasSearchDetailResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JtlasSearchTable', ],
            ],
        ],
        'JtlasSearchTablePartition' => [
            'type' => 'structure',
            'members' => [
                'partName' => [ 'type' => 'string', 'locationName' => 'partName', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'totalSize' => [ 'type' => 'long', 'locationName' => 'totalSize', ],
                'numRow' => [ 'type' => 'long', 'locationName' => 'numRow', ],
                'rawDataSize' => [ 'type' => 'long', 'locationName' => 'rawDataSize', ],
            ],
        ],
        'JtlasPageSearchTablePartitionsResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasGetTableQueryScriptResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchTablePrivilege' => [
            'type' => 'structure',
            'members' => [
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'privilegeType' => [ 'type' => 'string', 'locationName' => 'privilegeType', ],
                'grantor' => [ 'type' => 'string', 'locationName' => 'grantor', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'JtlasDownloadTableColumnsResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchTableLineageResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasPageSearchTableResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchTableColumn' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'isPartition' => [ 'type' => 'boolean', 'locationName' => 'isPartition', ],
                'length' => [ 'type' => 'integer', 'locationName' => 'length', ],
                'position' => [ 'type' => 'integer', 'locationName' => 'position', ],
            ],
        ],
        'JtlasSearchAggregation' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'docCount' => [ 'type' => 'integer', 'locationName' => 'docCount', ],
            ],
        ],
        'JtlasGetTableDDLScriptResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasTableOwnedByUserReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'fuzzyName' => [ 'type' => 'string', 'locationName' => 'fuzzyName', ],
            ],
        ],
        'JtlasTableUnderSpecifiedUserWithPrivilegesReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JtlasTableUnderSpecifiedUserReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'fuzzyName' => [ 'type' => 'string', 'locationName' => 'fuzzyName', ],
            ],
        ],
        'JtlasFuzzyQueryTablesByTableNameReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'fuzzyTableName' => [ 'type' => 'string', 'locationName' => 'fuzzyTableName', ],
            ],
        ],
        'JtlasTablePrivilegesReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JtlasTableFuuzyUnderSpecifiedUserWithPrivilegesReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'fuzzyTableName' => [ 'type' => 'string', 'locationName' => 'fuzzyTableName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JtlasTableDetailReq' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'JtlasTablePrivilegesResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTablePrivilege', ], ],
            ],
        ],
        'JtlasWarehouseTablePartition' => [
            'type' => 'structure',
            'members' => [
                'partName' => [ 'type' => 'string', 'locationName' => 'partName', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'totalSize' => [ 'type' => 'long', 'locationName' => 'totalSize', ],
                'numRow' => [ 'type' => 'long', 'locationName' => 'numRow', ],
                'rawDataSize' => [ 'type' => 'long', 'locationName' => 'rawDataSize', ],
            ],
        ],
        'JtlasTableDetailResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JtlasWarehouseTable', ],
            ],
        ],
        'JtlasTableFuuzyUnderSpecifiedUserWithPrivilegesResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseTablePrivilege' => [
            'type' => 'structure',
            'members' => [
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'privilegeType' => [ 'type' => 'string', 'locationName' => 'privilegeType', ],
                'grantor' => [ 'type' => 'string', 'locationName' => 'grantor', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'JtlasFuzzyQueryTablesByTableNameResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasTableUnderSpecifiedUserResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseTable' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableAlias' => [ 'type' => 'string', 'locationName' => 'tableAlias', ],
                'tableType' => [ 'type' => 'string', 'locationName' => 'tableType', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'metaType' => [ 'type' => 'string', 'locationName' => 'metaType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastModifyTime' => [ 'type' => 'string', 'locationName' => 'lastModifyTime', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'inputFormat' => [ 'type' => 'string', 'locationName' => 'inputFormat', ],
                'outputFormat' => [ 'type' => 'string', 'locationName' => 'outputFormat', ],
                'userDefineTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'collectPersons' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'clickCount' => [ 'type' => 'integer', 'locationName' => 'clickCount', ],
                'latestPartition' =>  [ 'shape' => 'JtlasWarehouseTablePartition', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTableColumn', ], ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTablePrivilege', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTableParam', ], ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
            ],
        ],
        'JtlasFuzzyQueryTablesByDatabaseNameResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseTableColumn' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'isPartition' => [ 'type' => 'boolean', 'locationName' => 'isPartition', ],
                'length' => [ 'type' => 'integer', 'locationName' => 'length', ],
                'position' => [ 'type' => 'integer', 'locationName' => 'position', ],
            ],
        ],
        'JtlasWarehouseTableParam' => [
            'type' => 'structure',
            'members' => [
                'paramKey' => [ 'type' => 'string', 'locationName' => 'paramKey', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
            ],
        ],
        'JtlasTableUnderSpecifiedUserWithPrivilegesResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasTableOwnedByUserResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'GpdrAfreshAddParam' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'startDate' => [ 'type' => 'string', 'locationName' => 'startDate', ],
                'endDate' => [ 'type' => 'string', 'locationName' => 'endDate', ],
                'parallelNum' => [ 'type' => 'integer', 'locationName' => 'parallelNum', ],
                'childJobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GpdrOpenApiResponsePageInfoListHisRunTaskResDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdrPageInfoListHisRunTaskResDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpdrOpenApiRespInteger' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpdrOpenApiRespString' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'int32', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpdrListTaskReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'processTypeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'exeTypeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'statu' => [ 'type' => 'string', 'locationName' => 'statu', ],
                'jobStartDate' => [ 'type' => 'string', 'locationName' => 'jobStartDate', ],
                'jobEndDate' => [ 'type' => 'string', 'locationName' => 'jobEndDate', ],
                'createDateBefore' => [ 'type' => 'string', 'locationName' => 'createDateBefore', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
            ],
        ],
        'GpdrPageInfoListHisRunTaskResDTO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdrListHisRunTaskResDTO', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpdrListTaskLogReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'afreshAddId' => [ 'type' => 'integer', 'locationName' => 'afreshAddId', ],
            ],
        ],
        'GpdrPageInfoAfreshAddLogVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdrAfreshAddLogVo', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpdrListHisRunTaskResDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'txdate' => [ 'type' => 'string', 'locationName' => 'txdate', ],
                'statu' => [ 'type' => 'string', 'locationName' => 'statu', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'currentMsg' => [ 'type' => 'string', 'locationName' => 'currentMsg', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobStartDate' => [ 'type' => 'string', 'locationName' => 'jobStartDate', ],
                'jobEndDate' => [ 'type' => 'string', 'locationName' => 'jobEndDate', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'createDate' => [ 'type' => 'string', 'locationName' => 'createDate', ],
                'processTypeLabel' => [ 'type' => 'string', 'locationName' => 'processTypeLabel', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'statusLabel' => [ 'type' => 'string', 'locationName' => 'statusLabel', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'managerFlag' => [ 'type' => 'boolean', 'locationName' => 'managerFlag', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpdrCloseTaskReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'GpdrOpenApiResponsePageInfoAfreshAddLogVo' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdrPageInfoAfreshAddLogVo', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpdrAfreshAddLogVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'planExeTime' => [ 'type' => 'string', 'locationName' => 'planExeTime', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'afreshAddId' => [ 'type' => 'integer', 'locationName' => 'afreshAddId', ],
            ],
        ],
        'GpdpPageInfoJobDependencyResultDTO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdpJobDependencyResultDTO', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpdpJobDepChainReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
            ],
        ],
        'GpdpJobDependenceReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobEnable' => [ 'type' => 'string', 'locationName' => 'jobEnable', ],
            ],
        ],
        'GpdpJobDetailResultDTO' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'costTime' => [ 'type' => 'integer', 'locationName' => 'costTime', ],
                'targetTable' => [ 'type' => 'integer', 'locationName' => 'targetTable', ],
            ],
        ],
        'GpdpJobDependencyResultDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'string', 'locationName' => 'sequenceInterval', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobBelong' => [ 'type' => 'string', 'locationName' => 'jobBelong', ],
                'necessary' => [ 'type' => 'string', 'locationName' => 'necessary', ],
                'depFlagParallel' => [ 'type' => 'string', 'locationName' => 'depFlagParallel', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
            ],
        ],
        'GpdpSchedTriggerDependTree' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'dependName' => [ 'type' => 'string', 'locationName' => 'dependName', ],
                'jobBelong' => [ 'type' => 'string', 'locationName' => 'jobBelong', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'necessary' => [ 'type' => 'string', 'locationName' => 'necessary', ],
                'dayOffset' => [ 'type' => 'string', 'locationName' => 'dayOffset', ],
                'dependJobBelong' => [ 'type' => 'string', 'locationName' => 'dependJobBelong', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'planExeTime' => [ 'type' => 'string', 'locationName' => 'planExeTime', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'display' => [ 'type' => 'string', 'locationName' => 'display', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'parent' => [ 'type' => 'boolean', 'locationName' => 'parent', ],
                'child' => [ 'type' => 'boolean', 'locationName' => 'child', ],
                'dependList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdpSchedTriggerDependTree', ], ],
            ],
        ],
        'GpdjmcSchedJobDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastServer' => [ 'type' => 'string', 'locationName' => 'lastServer', ],
                'lastSessionid' => [ 'type' => 'integer', 'locationName' => 'lastSessionid', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'txDateOffset' => [ 'type' => 'integer', 'locationName' => 'txDateOffset', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'morrowAutoExec' => [ 'type' => 'string', 'locationName' => 'morrowAutoExec', ],
                'dataZeroKillEnable' => [ 'type' => 'integer', 'locationName' => 'dataZeroKillEnable', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'flagAgain' => [ 'type' => 'string', 'locationName' => 'flagAgain', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'nsName' => [ 'type' => 'string', 'locationName' => 'nsName', ],
                'serverResourVal' => [ 'type' => 'integer', 'locationName' => 'serverResourVal', ],
                'runServers' => [ 'type' => 'string', 'locationName' => 'runServers', ],
                'requiredRunEnv' => [ 'type' => 'string', 'locationName' => 'requiredRunEnv', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'commands' => [ 'type' => 'string', 'locationName' => 'commands', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'jobRunWay' => [ 'type' => 'string', 'locationName' => 'jobRunWay', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'belongSys' => [ 'type' => 'string', 'locationName' => 'belongSys', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
                'msDelayDealWay' => [ 'type' => 'string', 'locationName' => 'msDelayDealWay', ],
            ],
        ],
        'GpdjmcJobNaRemarkDTO' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'jobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'manager' => [ 'type' => 'boolean', 'locationName' => 'manager', ],
                'jobManager' => [ 'type' => 'boolean', 'locationName' => 'jobManager', ],
            ],
        ],
        'GpdjmcDmrModelJobQueryDTO' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'jobIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
            ],
        ],
        'GpdjmcRpcResponseCalcJobResultDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' =>  [ 'shape' => 'GpdjmcCalcJobResultDTO', ],
            ],
        ],
        'GpdjmcRpcResponseListSchedJobDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobDTO', ], ],
            ],
        ],
        'GpdjmcRpcResponseListDmrModelJobRDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelJobRDTO', ], ],
            ],
        ],
        'GpdjmcRpcResponseListSchedJobResDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobResDTO', ], ],
            ],
        ],
        'GpdjmcRpcResponseBoolean' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GpdjmcScriptInfoTemplateDTO' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'GpdjmcConfPairStringString' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'GpdjmcRpcResponseInteger' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
            ],
        ],
        'SparkJarRunParams' => [
            'type' => 'structure',
            'members' => [
                'mainClassPath' => [ 'type' => 'string', 'locationName' => 'mainClassPath', ],
                'mainClassName' => [ 'type' => 'string', 'locationName' => 'mainClassName', ],
                'sparkVersion' => [ 'type' => 'string', 'locationName' => 'sparkVersion', ],
                'dependJarPathList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sparkSubmitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcConfPairStringString', ], ],
            ],
        ],
        'GpdjmcLoopListParam' => [
            'type' => 'structure',
            'members' => [
                'paramKey' => [ 'type' => 'string', 'locationName' => 'paramKey', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
                'valueDelimiter' => [ 'type' => 'string', 'locationName' => 'valueDelimiter', ],
            ],
        ],
        'GpdjmcInputParam' => [
            'type' => 'structure',
            'members' => [
                'paramName' => [ 'type' => 'string', 'locationName' => 'paramName', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
                'inherited' => [ 'type' => 'boolean', 'locationName' => 'inherited', ],
                'inheritedJobName' => [ 'type' => 'string', 'locationName' => 'inheritedJobName', ],
            ],
        ],
        'GpdjmcSchedJobResDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
            ],
        ],
        'GpdjmcGitFileDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'fileVers' => [ 'type' => 'string', 'locationName' => 'fileVers', ],
                'gitUrl' => [ 'type' => 'string', 'locationName' => 'gitUrl', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'startupFlag' => [ 'type' => 'integer', 'locationName' => 'startupFlag', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
            ],
        ],
        'GpdjmcScriptInfoTypeDTO' => [
            'type' => 'structure',
            'members' => [
                'otherInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcScriptInfoTemplateDTO', ], ],
                'mgrDictListScript' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcMgrDictDTO', ], ],
            ],
        ],
        'GpdjmcRpcResponseListEngineTemplateDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcEngineTemplateDTO', ], ],
            ],
        ],
        'GpdjmcOutputParam' => [
            'type' => 'structure',
            'members' => [
                'paramName' => [ 'type' => 'string', 'locationName' => 'paramName', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
            ],
        ],
        'GpdjmcScriptFileDTO' => [
            'type' => 'structure',
            'members' => [
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
            ],
        ],
        'GpdjmcTriggerConfigDTO' => [
            'type' => 'structure',
            'members' => [
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'secondaryType' => [ 'type' => 'string', 'locationName' => 'secondaryType', ],
                'serverDomain' => [ 'type' => 'string', 'locationName' => 'serverDomain', ],
                'serverPort' => [ 'type' => 'string', 'locationName' => 'serverPort', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'usernamePwd' => [ 'type' => 'string', 'locationName' => 'usernamePwd', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'dataSource' => [ 'type' => 'string', 'locationName' => 'dataSource', ],
                'object' => [ 'type' => 'string', 'locationName' => 'object', ],
                'conditionConfig' => [ 'type' => 'string', 'locationName' => 'conditionConfig', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'triggerInterval' => [ 'type' => 'integer', 'locationName' => 'triggerInterval', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'GpdjmcTableInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'GpdjmcWorkspaceInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'GpdjmcSchedJobDepDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'necessary' => [ 'type' => 'string', 'locationName' => 'necessary', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
            ],
        ],
        'GpdjmcJobNameDTO' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'GpdjmcCalcJobResultDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'GpdjmcTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'hasModel' => [ 'type' => 'boolean', 'locationName' => 'hasModel', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'core' => [ 'type' => 'integer', 'locationName' => 'core', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'submitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcConfPairStringString', ], ],
                'updateInfo' => [ 'type' => 'object', 'locationName' => 'updateInfo', ],
            ],
        ],
        'GpdjmcEngineTemplateDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'bak' => [ 'type' => 'string', 'locationName' => 'bak', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
                'template' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcMgrDictDTO', ], ],
                'pdictCode' => [ 'type' => 'string', 'locationName' => 'pdictCode', ],
            ],
        ],
        'GpdjmcJobDeleteDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'GpdjmcRpcResponseListString' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GpdjmcDmrModelJobRDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'modelTableId' => [ 'type' => 'integer', 'locationName' => 'modelTableId', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameCh' => [ 'type' => 'string', 'locationName' => 'tableNameCh', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
            ],
        ],
        'GpdjmcCalcJobDTO' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'integer', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'projectNameMatch' => [ 'type' => 'boolean', 'locationName' => 'projectNameMatch', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'modelId' => [ 'type' => 'integer', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelNameMatch' => [ 'type' => 'boolean', 'locationName' => 'modelNameMatch', ],
                'gitUrl' => [ 'type' => 'string', 'locationName' => 'gitUrl', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'marketId' => [ 'type' => 'integer', 'locationName' => 'marketId', ],
                'marketCode' => [ 'type' => 'string', 'locationName' => 'marketCode', ],
                'marketName' => [ 'type' => 'string', 'locationName' => 'marketName', ],
                'redirectType' => [ 'type' => 'string', 'locationName' => 'redirectType', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameMatch' => [ 'type' => 'boolean', 'locationName' => 'tableNameMatch', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'GpdjmcTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'scriptContent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userAccount' => [ 'type' => 'string', 'locationName' => 'userAccount', ],
                'userPwd' => [ 'type' => 'string', 'locationName' => 'userPwd', ],
                'markIds' => [ 'type' => 'string', 'locationName' => 'markIds', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'dmrTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'dmrTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelDTO', ], ],
                'gitFilesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcGitFileDTO', ], ],
                'isDeploy' => [ 'type' => 'boolean', 'locationName' => 'isDeploy', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'runQueue' => [ 'type' => 'string', 'locationName' => 'runQueue', ],
                'sparkJarRunParams' =>  [ 'shape' => 'SparkJarRunParams', ],
                'submitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcConfPairStringString', ], ],
                'jobStatus' => [ 'type' => 'integer', 'locationName' => 'jobStatus', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'scriptUrl' => [ 'type' => 'string', 'locationName' => 'scriptUrl', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'datasourceId' => [ 'type' => 'string', 'locationName' => 'datasourceId', ],
                'inputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcInputParam', ], ],
                'outputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcOutputParam', ], ],
                'loopParam' =>  [ 'shape' => 'GpdjmcLoopParam', ],
            ],
        ],
        'GpdjmcDeleteScriptReq' => [
            'type' => 'structure',
            'members' => [
                'jobIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'GpdjmcMgrDictDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'getpDictCode' => [ 'type' => 'string', 'locationName' => 'getpDictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'bak' => [ 'type' => 'string', 'locationName' => 'bak', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
            ],
        ],
        'GpdjmcRpcResponseListInteger' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'GpdjmcRpcResponseScriptInfoTypeDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' =>  [ 'shape' => 'GpdjmcScriptInfoTypeDTO', ],
            ],
        ],
        'GpdjmcRpcResponseDmrScriptInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' =>  [ 'shape' => 'GpdjmcDmrScriptInfoDTO', ],
            ],
        ],
        'GpdjmcDmrScriptInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'scriptDesc' => [ 'type' => 'string', 'locationName' => 'scriptDesc', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'GpdjmcJobQueryDTO' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'GpdjmcDelAllReqDTO' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'GpdjmcDmrModelDTO' => [
            'type' => 'structure',
            'members' => [
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameCh' => [ 'type' => 'string', 'locationName' => 'tableNameCh', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'modelId' => [ 'type' => 'integer', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelCode' => [ 'type' => 'string', 'locationName' => 'modelCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'marketName' => [ 'type' => 'string', 'locationName' => 'marketName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'marketPre' => [ 'type' => 'string', 'locationName' => 'marketPre', ],
                'pmarketName' => [ 'type' => 'string', 'locationName' => 'pmarketName', ],
            ],
        ],
        'GpdjmcRpcResponseListSchedJobDepDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobDepDTO', ], ],
            ],
        ],
        'GpdjmcLoopParam' => [
            'type' => 'structure',
            'members' => [
                'loopType' => [ 'type' => 'string', 'locationName' => 'loopType', ],
                'loopInterval' => [ 'type' => 'integer', 'locationName' => 'loopInterval', ],
                'loopTimes' => [ 'type' => 'integer', 'locationName' => 'loopTimes', ],
                'batchSize' => [ 'type' => 'integer', 'locationName' => 'batchSize', ],
                'loopListParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcLoopListParam', ], ],
            ],
        ],
        'JobRerunParam' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JobRerunFailedReason' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'GpjmobQueryReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
            ],
        ],
        'GpjmPageInfoListJobResultDTO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjmListJobResultDTO', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpjmJobInfoReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'GpjmListJobInstanceReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'statusList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'startTimeBefore' => [ 'type' => 'string', 'locationName' => 'startTimeBefore', ],
                'startTimeAfter' => [ 'type' => 'string', 'locationName' => 'startTimeAfter', ],
                'endTimeAfter' => [ 'type' => 'string', 'locationName' => 'endTimeAfter', ],
                'endTimeBefore' => [ 'type' => 'string', 'locationName' => 'endTimeBefore', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpjmJobCommonInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'lastTxdate' => [ 'type' => 'string', 'locationName' => 'lastTxdate', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'managerFlag' => [ 'type' => 'boolean', 'locationName' => 'managerFlag', ],
            ],
        ],
        'GpjmJobMonitorInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'warningType' => [ 'type' => 'string', 'locationName' => 'warningType', ],
                'notifiers' => [ 'type' => 'string', 'locationName' => 'notifiers', ],
                'startDeadlineTime' => [ 'type' => 'string', 'locationName' => 'startDeadlineTime', ],
                'endDeadlineTime' => [ 'type' => 'string', 'locationName' => 'endDeadlineTime', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'eventTypeDesc' => [ 'type' => 'string', 'locationName' => 'eventTypeDesc', ],
            ],
        ],
        'GpjmPageInfoJobRunInfoResultDTO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjmJobRunInfoResultDTO', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpjmJobBasicInfoResultDTO' => [
            'type' => 'structure',
            'members' => [
                'jobCommonInfo' =>  [ 'shape' => 'GpjmJobCommonInfoDTO', ],
                'jobBasicInfo' =>  [ 'shape' => 'GpjmJobBasicInfoDTO', ],
                'runRoleInfo' =>  [ 'shape' => 'GpjmRunRoleInfoDTO', ],
                'jobMonitorInfo' =>  [ 'shape' => 'GpjmJobMonitorInfoDTO', ],
                'flowStatus' => [ 'type' => 'string', 'locationName' => 'flowStatus', ],
            ],
        ],
        'GpjmConditionType' => [
            'type' => 'structure',
            'members' => [
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'typeNameCh' => [ 'type' => 'string', 'locationName' => 'typeNameCh', ],
                'typeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GpjmJobCompletionResultDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'lastSessionid' => [ 'type' => 'integer', 'locationName' => 'lastSessionid', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'string', 'locationName' => 'sequenceInterval', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'costTime' => [ 'type' => 'integer', 'locationName' => 'costTime', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
            ],
        ],
        'GpjmMgrOperationRecords' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'operateType' => [ 'type' => 'string', 'locationName' => 'operateType', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'operateTime' => [ 'type' => 'string', 'locationName' => 'operateTime', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
            ],
        ],
        'GpjmJobTypeInfoDto' => [
            'type' => 'structure',
            'members' => [
                'jobBaseType' => [ 'type' => 'string', 'locationName' => 'jobBaseType', ],
                'jobBaseTypeDesc' => [ 'type' => 'string', 'locationName' => 'jobBaseTypeDesc', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'jobChildTypeDesc' => [ 'type' => 'string', 'locationName' => 'jobChildTypeDesc', ],
            ],
        ],
        'GpjmMgrJob' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
            ],
        ],
        'GpjmPageInfoMgrOperationRecords' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjmMgrOperationRecords', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpjmJobBasicInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'priorityLevel' => [ 'type' => 'string', 'locationName' => 'priorityLevel', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'processTypeCode' => [ 'type' => 'string', 'locationName' => 'processTypeCode', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpjmConditionInfo' => [
            'type' => 'structure',
            'members' => [
                'conditionType' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjmConditionType', ], ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerTypeCh' => [ 'type' => 'string', 'locationName' => 'triggerTypeCh', ],
            ],
        ],
        'GpjmPageInfoListJobInstanceResultDTO' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjmListJobInstanceResultDTO', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpjmJobOperationRecordReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
            ],
        ],
        'GpjmJobRunInfoResultDTO' => [
            'type' => 'structure',
            'members' => [
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'jobSessionId' => [ 'type' => 'string', 'locationName' => 'jobSessionId', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'returnCode' => [ 'type' => 'string', 'locationName' => 'returnCode', ],
                'returnMsg' => [ 'type' => 'string', 'locationName' => 'returnMsg', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'isComplement' => [ 'type' => 'string', 'locationName' => 'isComplement', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
            ],
        ],
        'GpjmListJobResultDTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'etlServer' => [ 'type' => 'string', 'locationName' => 'etlServer', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'lastJobStatus' => [ 'type' => 'string', 'locationName' => 'lastJobStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'jobSessionID' => [ 'type' => 'integer', 'locationName' => 'jobSessionID', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'flagRetry' => [ 'type' => 'string', 'locationName' => 'flagRetry', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'cycleLabel' => [ 'type' => 'string', 'locationName' => 'cycleLabel', ],
                'triggerTypeLabel' => [ 'type' => 'string', 'locationName' => 'triggerTypeLabel', ],
                'processTypeCn' => [ 'type' => 'string', 'locationName' => 'processTypeCn', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'managerFlag' => [ 'type' => 'boolean', 'locationName' => 'managerFlag', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpjmRunRoleInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'flagRetry' => [ 'type' => 'string', 'locationName' => 'flagRetry', ],
                'retryCount' => [ 'type' => 'string', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'string', 'locationName' => 'retryInterval', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'sequenceInterval' => [ 'type' => 'string', 'locationName' => 'sequenceInterval', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'string', 'locationName' => 'timeout', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'cycleLabel' => [ 'type' => 'string', 'locationName' => 'cycleLabel', ],
                'triggerTypeLabel' => [ 'type' => 'string', 'locationName' => 'triggerTypeLabel', ],
            ],
        ],
        'GpjmListJobInstanceResultDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'lastReturnCode' => [ 'type' => 'string', 'locationName' => 'lastReturnCode', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'sessionid' => [ 'type' => 'string', 'locationName' => 'sessionid', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'isComplement' => [ 'type' => 'string', 'locationName' => 'isComplement', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'managerFlag' => [ 'type' => 'boolean', 'locationName' => 'managerFlag', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpjmListJobReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'lastJobStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'excludeJobTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'marketJobsAll' => [ 'type' => 'string', 'locationName' => 'marketJobsAll', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'currentStatus' => [ 'type' => 'string', 'locationName' => 'currentStatus', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'lastTxdate' => [ 'type' => 'string', 'locationName' => 'lastTxdate', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'jobStartRunTime' => [ 'type' => 'string', 'locationName' => 'jobStartRunTime', ],
                'jobEndRunTime' => [ 'type' => 'string', 'locationName' => 'jobEndRunTime', ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'updateTimeBefore' => [ 'type' => 'string', 'locationName' => 'updateTimeBefore', ],
                'updateTimeAfter' => [ 'type' => 'string', 'locationName' => 'updateTimeAfter', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'markClassifyCode' => [ 'type' => 'string', 'locationName' => 'markClassifyCode', ],
                'markName' => [ 'type' => 'string', 'locationName' => 'markName', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpjmJobQueryReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
            ],
        ],
        'GpjsResetJobInstReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'GpjsJobEnableReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enableFlag' => [ 'type' => 'string', 'locationName' => 'enableFlag', ],
            ],
        ],
        'GpjsJobDelInfoReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isDelSonJob' => [ 'type' => 'string', 'locationName' => 'isDelSonJob', ],
                'isDelQualityJob' => [ 'type' => 'string', 'locationName' => 'isDelQualityJob', ],
                'user_roles' => [ 'type' => 'string', 'locationName' => 'user_roles', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
            ],
        ],
        'GpjsScriptExtensionDto' => [
            'type' => 'structure',
            'members' => [
                'criptType' => [ 'type' => 'string', 'locationName' => 'criptType', ],
                'extensions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GpjsSchedJobRunVo' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'sessionId' => [ 'type' => 'integer', 'locationName' => 'sessionId', ],
                'isCleanBeforeInst' => [ 'type' => 'string', 'locationName' => 'isCleanBeforeInst', ],
                'system' => [ 'type' => 'string', 'locationName' => 'system', ],
                'isComplement' => [ 'type' => 'string', 'locationName' => 'isComplement', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpjsSchedQueuePendingDto' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'sessionid' => [ 'type' => 'integer', 'locationName' => 'sessionid', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'eqType' => [ 'type' => 'string', 'locationName' => 'eqType', ],
                'nsName' => [ 'type' => 'string', 'locationName' => 'nsName', ],
                'serverResourVal' => [ 'type' => 'integer', 'locationName' => 'serverResourVal', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'schedTime' => [ 'type' => 'string', 'locationName' => 'schedTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GpjsClusterInfoReq' => [
            'type' => 'structure',
            'members' => [
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
            ],
        ],
        'GpjsIsUpstreamSameFrequencyDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'dependJobName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
            ],
        ],
        'GpjsJobExeResultReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'sessionId' => [ 'type' => 'integer', 'locationName' => 'sessionId', ],
                'serverName' => [ 'type' => 'string', 'locationName' => 'serverName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'returnCode' => [ 'type' => 'integer', 'locationName' => 'returnCode', ],
                'affectRows' => [ 'type' => 'long', 'locationName' => 'affectRows', ],
                'warningCode' => [ 'type' => 'integer', 'locationName' => 'warningCode', ],
                'pids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GpmdJobQueryReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpmdOpenApiResponseCalcJobResultDTO' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpmdCalcJobResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpmdTriggerConfigDTO' => [
            'type' => 'structure',
            'members' => [
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'secondaryType' => [ 'type' => 'string', 'locationName' => 'secondaryType', ],
                'serverDomain' => [ 'type' => 'string', 'locationName' => 'serverDomain', ],
                'serverPort' => [ 'type' => 'string', 'locationName' => 'serverPort', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'usernamePwd' => [ 'type' => 'string', 'locationName' => 'usernamePwd', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'dataSource' => [ 'type' => 'string', 'locationName' => 'dataSource', ],
                'object' => [ 'type' => 'string', 'locationName' => 'object', ],
                'conditionConfig' => [ 'type' => 'string', 'locationName' => 'conditionConfig', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'triggerInterval' => [ 'type' => 'integer', 'locationName' => 'triggerInterval', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'GpmdSchedJobDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastServer' => [ 'type' => 'string', 'locationName' => 'lastServer', ],
                'lastSessionid' => [ 'type' => 'integer', 'locationName' => 'lastSessionid', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'txDateOffset' => [ 'type' => 'integer', 'locationName' => 'txDateOffset', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'morrowAutoExec' => [ 'type' => 'string', 'locationName' => 'morrowAutoExec', ],
                'dataZeroKillEnable' => [ 'type' => 'integer', 'locationName' => 'dataZeroKillEnable', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'flagAgain' => [ 'type' => 'string', 'locationName' => 'flagAgain', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'nsName' => [ 'type' => 'string', 'locationName' => 'nsName', ],
                'serverResourVal' => [ 'type' => 'integer', 'locationName' => 'serverResourVal', ],
                'runServers' => [ 'type' => 'string', 'locationName' => 'runServers', ],
                'requiredRunEnv' => [ 'type' => 'string', 'locationName' => 'requiredRunEnv', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'commands' => [ 'type' => 'string', 'locationName' => 'commands', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'jobRunWay' => [ 'type' => 'string', 'locationName' => 'jobRunWay', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'belongSys' => [ 'type' => 'string', 'locationName' => 'belongSys', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
                'msDelayDealWay' => [ 'type' => 'string', 'locationName' => 'msDelayDealWay', ],
            ],
        ],
        'GpmdConfPairStringString' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'GpmdCalcJobResultDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'marketCode' => [ 'type' => 'string', 'locationName' => 'marketCode', ],
                'marketName' => [ 'type' => 'string', 'locationName' => 'marketName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'GpmdTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'hasModel' => [ 'type' => 'boolean', 'locationName' => 'hasModel', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'core' => [ 'type' => 'integer', 'locationName' => 'core', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'submitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmdConfPairStringString', ], ],
                'updateInfo' => [ 'type' => 'object', 'locationName' => 'updateInfo', ],
            ],
        ],
        'GpmnLineDataVo' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'jobSuccessList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnLineData', ], ],
                'xdata' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'GpmnLineData' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'GpmnJobCountDto' => [
            'type' => 'structure',
            'members' => [
                'jobTotal' => [ 'type' => 'integer', 'locationName' => 'jobTotal', ],
                'jobEnd' => [ 'type' => 'integer', 'locationName' => 'jobEnd', ],
                'jobPending' => [ 'type' => 'integer', 'locationName' => 'jobPending', ],
                'jobSuccess' => [ 'type' => 'integer', 'locationName' => 'jobSuccess', ],
                'jobTimeout' => [ 'type' => 'integer', 'locationName' => 'jobTimeout', ],
                'jobUnsuccess' => [ 'type' => 'integer', 'locationName' => 'jobUnsuccess', ],
            ],
        ],
        'GpmnLineStringDataVo' => [
            'type' => 'structure',
            'members' => [
                'countInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnLineData', ], ],
                'xdata' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GpmnJobSpendTimeRankingVo' => [
            'type' => 'structure',
            'members' => [
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'spendTimeAvg' => [ 'type' => 'string', 'locationName' => 'spendTimeAvg', ],
                'spendTimeLongest' => [ 'type' => 'string', 'locationName' => 'spendTimeLongest', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpmnWorkTableJobStatusReq' => [
            'type' => 'structure',
            'members' => [
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
            ],
        ],
        'GpmnWorkTableJobStatusDto' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'ready' => [ 'type' => 'integer', 'locationName' => 'ready', ],
                'clean' => [ 'type' => 'integer', 'locationName' => 'clean', ],
                'done' => [ 'type' => 'integer', 'locationName' => 'done', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'pending' => [ 'type' => 'integer', 'locationName' => 'pending', ],
                'running' => [ 'type' => 'integer', 'locationName' => 'running', ],
                'failed' => [ 'type' => 'integer', 'locationName' => 'failed', ],
            ],
        ],
        'GpmnPieData' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nameEn' => [ 'type' => 'string', 'locationName' => 'nameEn', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'GpmnJobUnsuccessRankingVo' => [
            'type' => 'structure',
            'members' => [
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'failedTime' => [ 'type' => 'integer', 'locationName' => 'failedTime', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpsdalueDict' => [
            'type' => 'structure',
            'members' => [
                'dictType' => [ 'type' => 'string', 'locationName' => 'dictType', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
                'dictSort' => [ 'type' => 'integer', 'locationName' => 'dictSort', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'valid' => [ 'type' => 'boolean', 'locationName' => 'valid', ],
                'delete' => [ 'type' => 'boolean', 'locationName' => 'delete', ],
            ],
        ],
        'GpsdSchedDict' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'pDictCode' => [ 'type' => 'string', 'locationName' => 'pDictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'dictSort' => [ 'type' => 'integer', 'locationName' => 'dictSort', ],
                'dictBak' => [ 'type' => 'string', 'locationName' => 'dictBak', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
                'isValid' => [ 'type' => 'string', 'locationName' => 'isValid', ],
                'isDel' => [ 'type' => 'string', 'locationName' => 'isDel', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'modifiedTime' => [ 'type' => 'string', 'locationName' => 'modifiedTime', ],
            ],
        ],
        'GpsdSchedDictRelationDto' => [
            'type' => 'structure',
            'members' => [
                'dictType' => [ 'type' => 'string', 'locationName' => 'dictType', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'childDictList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsdSchedDictRelationDto', ], ],
            ],
        ],
        'GpsmKillJobInstReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
            ],
        ],
        'GpsmDownloadJobLogReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobSessionId' => [ 'type' => 'integer', 'locationName' => 'jobSessionId', ],
            ],
        ],
        'GpsmArrayObjectRequestResetJobInstReq' => [
            'type' => 'structure',
            'members' => [
                'arrayObjectParam' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsmResetJobInstReq', ], ],
            ],
        ],
        'GpsmSchedJob' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastServer' => [ 'type' => 'string', 'locationName' => 'lastServer', ],
                'lastSessionid' => [ 'type' => 'integer', 'locationName' => 'lastSessionid', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'txDateOffset' => [ 'type' => 'integer', 'locationName' => 'txDateOffset', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'morrowAutoExec' => [ 'type' => 'string', 'locationName' => 'morrowAutoExec', ],
                'dataZeroKillEnable' => [ 'type' => 'integer', 'locationName' => 'dataZeroKillEnable', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'flagAgain' => [ 'type' => 'string', 'locationName' => 'flagAgain', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'requiredRunEnv' => [ 'type' => 'string', 'locationName' => 'requiredRunEnv', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'commands' => [ 'type' => 'string', 'locationName' => 'commands', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'jobRunWay' => [ 'type' => 'string', 'locationName' => 'jobRunWay', ],
                'belongSys' => [ 'type' => 'string', 'locationName' => 'belongSys', ],
                'msDelayDealWay' => [ 'type' => 'string', 'locationName' => 'msDelayDealWay', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
            ],
        ],
        'GpsmJobLogInfoPageQryReq' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSessionId' => [ 'type' => 'string', 'locationName' => 'jobSessionId', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
            ],
        ],
        'GpsmMgrJob' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
            ],
        ],
        'GpsmResetJobInstReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'GpsmReRunJobBatchReq' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsmJobNameDTO', ], ],
            ],
        ],
        'GpsmJobStateBatchReq' => [
            'type' => 'structure',
            'members' => [
                'jobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'GpsmOpenApiResponsePageInfoObject' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpsmPageInfoObject', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GpsmSchedJobWithLogDto' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastServer' => [ 'type' => 'string', 'locationName' => 'lastServer', ],
                'lastSessionid' => [ 'type' => 'integer', 'locationName' => 'lastSessionid', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'txDateOffset' => [ 'type' => 'integer', 'locationName' => 'txDateOffset', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'morrowAutoExec' => [ 'type' => 'string', 'locationName' => 'morrowAutoExec', ],
                'dataZeroKillEnable' => [ 'type' => 'integer', 'locationName' => 'dataZeroKillEnable', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'flagAgain' => [ 'type' => 'string', 'locationName' => 'flagAgain', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'requiredRunEnv' => [ 'type' => 'string', 'locationName' => 'requiredRunEnv', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'commands' => [ 'type' => 'string', 'locationName' => 'commands', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'jobRunWay' => [ 'type' => 'string', 'locationName' => 'jobRunWay', ],
                'belongSys' => [ 'type' => 'string', 'locationName' => 'belongSys', ],
                'msDelayDealWay' => [ 'type' => 'string', 'locationName' => 'msDelayDealWay', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
            ],
        ],
        'GpsmPageInfoObject' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'endRow' => [ 'type' => 'integer', 'locationName' => 'endRow', ],
                'pages' => [ 'type' => 'integer', 'locationName' => 'pages', ],
                'prePage' => [ 'type' => 'integer', 'locationName' => 'prePage', ],
                'nextPage' => [ 'type' => 'integer', 'locationName' => 'nextPage', ],
                'isFirstPage' => [ 'type' => 'boolean', 'locationName' => 'isFirstPage', ],
                'isLastPage' => [ 'type' => 'boolean', 'locationName' => 'isLastPage', ],
                'hasPreviousPage' => [ 'type' => 'boolean', 'locationName' => 'hasPreviousPage', ],
                'hasNextPage' => [ 'type' => 'boolean', 'locationName' => 'hasNextPage', ],
                'navigatePages' => [ 'type' => 'integer', 'locationName' => 'navigatePages', ],
                'navigatepageNums' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'navigateFirstPage' => [ 'type' => 'integer', 'locationName' => 'navigateFirstPage', ],
                'navigateLastPage' => [ 'type' => 'integer', 'locationName' => 'navigateLastPage', ],
            ],
        ],
        'GpsmJobNameDTO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GpsmJobQueryReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
            ],
        ],
        'GpsmJobAllqueryInfoDto' => [
            'type' => 'structure',
            'members' => [
                'schedJob' =>  [ 'shape' => 'GpsmSchedJob', ],
                'mgrJob' =>  [ 'shape' => 'GpsmMgrJob', ],
            ],
        ],
        'GpuserMatchUserReq' => [
            'type' => 'structure',
            'members' => [
                'userCode' => [ 'type' => 'string', 'locationName' => 'userCode', ],
            ],
        ],
        'GpuserMatchUserResDto' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userCode' => [ 'type' => 'string', 'locationName' => 'userCode', ],
                'realName' => [ 'type' => 'string', 'locationName' => 'realName', ],
                'nikeName' => [ 'type' => 'string', 'locationName' => 'nikeName', ],
                'organizationName' => [ 'type' => 'string', 'locationName' => 'organizationName', ],
            ],
        ],
        'UpdateRosterParam' => [
            'type' => 'structure',
            'members' => [
                'rosterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RosterDO', ], ],
            ],
        ],
        'UpdateWatchmanParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'DeleteWatchmanParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'RosterDO' => [
            'type' => 'structure',
            'members' => [
                'day' => [ 'type' => 'integer', 'locationName' => 'day', ],
                'primaryWatchmanIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'backupWatchmanIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'AddWatchmanParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'RosterVo' => [
            'type' => 'structure',
            'members' => [
                'day' => [ 'type' => 'integer', 'locationName' => 'day', ],
                'dayLabel' => [ 'type' => 'string', 'locationName' => 'dayLabel', ],
                'primaryWatchmanIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatchmanVo', ], ],
                'backupWatchmanIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatchmanVo', ], ],
            ],
        ],
        'WatchmanVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
            ],
        ],
        'JobKillParam' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
            ],
        ],
        'OneClickRerunParam' => [
            'type' => 'structure',
            'members' => [
                'filterParam' =>  [ 'shape' => 'ListTxDateStatusParam', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'JobRunHistoryParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'ListTxDateStatusParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'managerPin' => [ 'type' => 'string', 'locationName' => 'managerPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStartAfterTime' => [ 'type' => 'string', 'locationName' => 'jobStartAfterTime', ],
                'jobStartBeforeTime' => [ 'type' => 'string', 'locationName' => 'jobStartBeforeTime', ],
                'jobEndAfterTime' => [ 'type' => 'string', 'locationName' => 'jobEndAfterTime', ],
                'jobEndBeforeTime' => [ 'type' => 'string', 'locationName' => 'jobEndBeforeTime', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ListJobRelationParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'RerunTaskParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'batchId' => [ 'type' => 'integer', 'locationName' => 'batchId', ],
            ],
        ],
        'JobResetDO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
            ],
        ],
        'RerunBatchParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'operateTimeAfter' => [ 'type' => 'long', 'locationName' => 'operateTimeAfter', ],
                'operateTimeBefore' => [ 'type' => 'long', 'locationName' => 'operateTimeBefore', ],
            ],
        ],
        'JobNameDO' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'JobResetParam' => [
            'type' => 'structure',
            'members' => [
                'arrayObjectParam' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobResetDO', ], ],
            ],
        ],
        'JobLogParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSessionId' => [ 'type' => 'string', 'locationName' => 'jobSessionId', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
            ],
        ],
        'ListJobParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'managerPin' => [ 'type' => 'string', 'locationName' => 'managerPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'updateTimeAfter' => [ 'type' => 'string', 'locationName' => 'updateTimeAfter', ],
                'updateTimeBefore' => [ 'type' => 'string', 'locationName' => 'updateTimeBefore', ],
                'jobStartRunTime' => [ 'type' => 'string', 'locationName' => 'jobStartRunTime', ],
                'jobEndRunTime' => [ 'type' => 'string', 'locationName' => 'jobEndRunTime', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'lastJobStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lastTxdate' => [ 'type' => 'string', 'locationName' => 'lastTxdate', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
            ],
        ],
        'ListJobOperateHistoryParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
            ],
        ],
        'RerunTaskReSubmitParam' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
            ],
        ],
        'JobPropertyVo' => [
            'type' => 'structure',
            'members' => [
                'jobBasicInfo' =>  [ 'shape' => 'JobBasicInfoVo', ],
                'jobCommonInfo' =>  [ 'shape' => 'JobCommonInfoVo', ],
                'jobMonitorInfo' =>  [ 'shape' => 'JobMonitorInfoVo', ],
                'runRoleInfo' =>  [ 'shape' => 'JobRunInfoVo', ],
            ],
        ],
        'JobRunInfoVo' => [
            'type' => 'structure',
            'members' => [
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'flagRetry' => [ 'type' => 'string', 'locationName' => 'flagRetry', ],
                'retryCount' => [ 'type' => 'string', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'string', 'locationName' => 'retryInterval', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'string', 'locationName' => 'sequenceInterval', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'string', 'locationName' => 'timeout', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'cycleLabel' => [ 'type' => 'string', 'locationName' => 'cycleLabel', ],
                'triggerTypeLabel' => [ 'type' => 'string', 'locationName' => 'triggerTypeLabel', ],
            ],
        ],
        'PageVoRerunTaskVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RerunTaskVo', ], ],
            ],
        ],
        'OneClickRerunPreviewVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'integrationInstanceCount' => [ 'type' => 'integer', 'locationName' => 'integrationInstanceCount', ],
                'calculateInstanceCount' => [ 'type' => 'integer', 'locationName' => 'calculateInstanceCount', ],
            ],
        ],
        'PageVoJobInfoVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobInfoVo', ], ],
            ],
        ],
        'JobRelationVo' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'string', 'locationName' => 'sequenceInterval', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobBelong' => [ 'type' => 'string', 'locationName' => 'jobBelong', ],
                'necessary' => [ 'type' => 'string', 'locationName' => 'necessary', ],
                'depFlagParallel' => [ 'type' => 'string', 'locationName' => 'depFlagParallel', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
            ],
        ],
        'PageVoJobTxDateStatusVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTxDateStatusVo', ], ],
            ],
        ],
        'RerunTaskVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobTypeLabel' => [ 'type' => 'string', 'locationName' => 'jobTypeLabel', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusLabel' => [ 'type' => 'string', 'locationName' => 'statusLabel', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
                'submitTime' => [ 'type' => 'long', 'locationName' => 'submitTime', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'cycleLabel' => [ 'type' => 'string', 'locationName' => 'cycleLabel', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'JobBasicInfoVo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'priorityLevel' => [ 'type' => 'string', 'locationName' => 'priorityLevel', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'processTypeCode' => [ 'type' => 'string', 'locationName' => 'processTypeCode', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'JobMonitorInfoVo' => [
            'type' => 'structure',
            'members' => [
                'warningType' => [ 'type' => 'string', 'locationName' => 'warningType', ],
                'notifiers' => [ 'type' => 'string', 'locationName' => 'notifiers', ],
                'startDeadlineTime' => [ 'type' => 'string', 'locationName' => 'startDeadlineTime', ],
                'endDeadlineTime' => [ 'type' => 'string', 'locationName' => 'endDeadlineTime', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'eventTypeDesc' => [ 'type' => 'string', 'locationName' => 'eventTypeDesc', ],
            ],
        ],
        'JobTypeVo' => [
            'type' => 'structure',
            'members' => [
                'dictType' => [ 'type' => 'string', 'locationName' => 'dictType', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'childDictList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTypeVo', ], ],
            ],
        ],
        'PageVoJobRunHistoryVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobRunHistoryVo', ], ],
            ],
        ],
        'PageVoString' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JobTxDateStatusVo' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobTypeLabel' => [ 'type' => 'string', 'locationName' => 'jobTypeLabel', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusLabel' => [ 'type' => 'string', 'locationName' => 'statusLabel', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'cycleLabel' => [ 'type' => 'string', 'locationName' => 'cycleLabel', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
            ],
        ],
        'PageVoRerunBatchVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RerunBatchVo', ], ],
            ],
        ],
        'JobInfoVo' => [
            'type' => 'structure',
            'members' => [
                'etlId' => [ 'type' => 'integer', 'locationName' => 'etlId', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'frequency' => [ 'type' => 'string', 'locationName' => 'frequency', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'lastJobStatus' => [ 'type' => 'string', 'locationName' => 'lastJobStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'flagRetry' => [ 'type' => 'string', 'locationName' => 'flagRetry', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'cycleLabel' => [ 'type' => 'string', 'locationName' => 'cycleLabel', ],
                'triggerTypeLabel' => [ 'type' => 'string', 'locationName' => 'triggerTypeLabel', ],
                'processTypeCn' => [ 'type' => 'string', 'locationName' => 'processTypeCn', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'priorityLevel' => [ 'type' => 'string', 'locationName' => 'priorityLevel', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'PageVoJobOperateHistoryVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobOperateHistoryVo', ], ],
            ],
        ],
        'JobCommonInfoVo' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'string', 'locationName' => 'sequenceInterval', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'schedulerManagerFlag' => [ 'type' => 'string', 'locationName' => 'schedulerManagerFlag', ],
                'managerFlag' => [ 'type' => 'boolean', 'locationName' => 'managerFlag', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'JobOperateHistoryVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'operateType' => [ 'type' => 'string', 'locationName' => 'operateType', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'operateTime' => [ 'type' => 'string', 'locationName' => 'operateTime', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
            ],
        ],
        'JobRunHistoryVo' => [
            'type' => 'structure',
            'members' => [
                'etlJob' => [ 'type' => 'string', 'locationName' => 'etlJob', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'jobSessionId' => [ 'type' => 'string', 'locationName' => 'jobSessionId', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'returnCode' => [ 'type' => 'string', 'locationName' => 'returnCode', ],
                'returnMsg' => [ 'type' => 'string', 'locationName' => 'returnMsg', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'isComplement' => [ 'type' => 'string', 'locationName' => 'isComplement', ],
                'planExecTime' => [ 'type' => 'string', 'locationName' => 'planExecTime', ],
                'applicationId' => [ 'type' => 'string', 'locationName' => 'applicationId', ],
            ],
        ],
        'RerunBatchVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusLabel' => [ 'type' => 'string', 'locationName' => 'statusLabel', ],
                'submitSuccessCount' => [ 'type' => 'integer', 'locationName' => 'submitSuccessCount', ],
                'submitFailCount' => [ 'type' => 'integer', 'locationName' => 'submitFailCount', ],
                'submitPendingCount' => [ 'type' => 'integer', 'locationName' => 'submitPendingCount', ],
                'submitSubmittingCount' => [ 'type' => 'integer', 'locationName' => 'submitSubmittingCount', ],
                'submitTotalCount' => [ 'type' => 'integer', 'locationName' => 'submitTotalCount', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
            ],
        ],
        'PageVoJobRelationVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobRelationVo', ], ],
            ],
        ],
        'JcwSpaceIncreUsedByDayVo' => [
            'type' => 'structure',
            'members' => [
                'increments' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'views' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dates' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JcwSpacePartUsedVo' => [
            'type' => 'structure',
            'members' => [
                'partitionName' => [ 'type' => 'string', 'locationName' => 'partitionName', ],
                'usedSpace' => [ 'type' => 'string', 'locationName' => 'usedSpace', ],
            ],
        ],
        'JcwSpaceSummaryVo' => [
            'type' => 'structure',
            'members' => [
                'incrementalUsedByDay' => [ 'type' => 'string', 'locationName' => 'incrementalUsedByDay', ],
                'totalUsed' => [ 'type' => 'string', 'locationName' => 'totalUsed', ],
                'totalFree' => [ 'type' => 'string', 'locationName' => 'totalFree', ],
                'usedPercent' => [ 'type' => 'string', 'locationName' => 'usedPercent', ],
                'collectTime' => [ 'type' => 'string', 'locationName' => 'collectTime', ],
            ],
        ],
        'PageVoJcwSpacePartUsedVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JcwSpacePartUsedVo', ], ],
            ],
        ],
        'PageVoStorageSpaceUsedDetailVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'JcwSpaceUsedDetailVo', ], ],
            ],
        ],
        'JcwSpaceUsedDetailVo' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'companyUsed' => [ 'type' => 'string', 'locationName' => 'companyUsed', ],
                'companyIncreUsed' => [ 'type' => 'string', 'locationName' => 'companyIncreUsed', ],
                'databaseUsed' => [ 'type' => 'string', 'locationName' => 'databaseUsed', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableUsed' => [ 'type' => 'string', 'locationName' => 'tableUsed', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'databaseCount' => [ 'type' => 'integer', 'locationName' => 'databaseCount', ],
                'tableCount' => [ 'type' => 'integer', 'locationName' => 'tableCount', ],
                'partitionCount' => [ 'type' => 'integer', 'locationName' => 'partitionCount', ],
            ],
        ],
        'QueryPublishPkgDetailParam' => [
            'type' => 'structure',
            'members' => [
                'pkgId' => [ 'type' => 'long', 'locationName' => 'pkgId', ],
            ],
        ],
        'PublishPkgParam' => [
            'type' => 'structure',
            'members' => [
                'pkgIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'CancelPublishObjParam' => [
            'type' => 'structure',
            'members' => [
                'objIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'PackagePublishObjParam' => [
            'type' => 'structure',
            'members' => [
                'objIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'RejectPublishPkgParam' => [
            'type' => 'structure',
            'members' => [
                'pkgIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'PreviewPackageParam' => [
            'type' => 'structure',
            'members' => [
                'objIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
            ],
        ],
        'QueryPublishObjDetailParam' => [
            'type' => 'structure',
            'members' => [
                'objId' => [ 'type' => 'long', 'locationName' => 'objId', ],
            ],
        ],
        'ListPublishPkgByPageParam' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pkgName' => [ 'type' => 'string', 'locationName' => 'pkgName', ],
                'pkgId' => [ 'type' => 'long', 'locationName' => 'pkgId', ],
                'publisher' => [ 'type' => 'string', 'locationName' => 'publisher', ],
                'pkgStatus' => [ 'type' => 'string', 'locationName' => 'pkgStatus', ],
                'pkgPublishTimeStart' => [ 'type' => 'long', 'locationName' => 'pkgPublishTimeStart', ],
                'pkgPublishTimeEnd' => [ 'type' => 'long', 'locationName' => 'pkgPublishTimeEnd', ],
                'pkgCreator' => [ 'type' => 'string', 'locationName' => 'pkgCreator', ],
                'pkgCreateTimeStart' => [ 'type' => 'long', 'locationName' => 'pkgCreateTimeStart', ],
                'pkgCreateTimeEnd' => [ 'type' => 'long', 'locationName' => 'pkgCreateTimeEnd', ],
            ],
        ],
        'ListPublishObjByPageParam' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'objUk' => [ 'type' => 'string', 'locationName' => 'objUk', ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
                'objTypeCode' => [ 'type' => 'string', 'locationName' => 'objTypeCode', ],
                'objChangeTypeCode' => [ 'type' => 'string', 'locationName' => 'objChangeTypeCode', ],
                'submitterPin' => [ 'type' => 'string', 'locationName' => 'submitterPin', ],
                'submitTimeStart' => [ 'type' => 'long', 'locationName' => 'submitTimeStart', ],
                'submitTimeEnd' => [ 'type' => 'long', 'locationName' => 'submitTimeEnd', ],
            ],
        ],
        'PublishObjPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishObjVo', ], ],
            ],
        ],
        'PublishPkgPageVo' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishPkgVo', ], ],
            ],
        ],
        'PublishObjDetailVo' => [
            'type' => 'structure',
            'members' => [
                'objId' => [ 'type' => 'long', 'locationName' => 'objId', ],
                'objType' => [ 'type' => 'string', 'locationName' => 'objType', ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
                'objUk' => [ 'type' => 'string', 'locationName' => 'objUk', ],
                'submitter' => [ 'type' => 'string', 'locationName' => 'submitter', ],
                'versionPretty' => [ 'type' => 'string', 'locationName' => 'versionPretty', ],
                'submitTimestamp' => [ 'type' => 'long', 'locationName' => 'submitTimestamp', ],
                'scriptContent' => [ 'type' => 'string', 'locationName' => 'scriptContent', ],
                'configContent' => [ 'type' => 'string', 'locationName' => 'configContent', ],
            ],
        ],
        'PreviewPackageVo' => [
            'type' => 'structure',
            'members' => [
                'objId' => [ 'type' => 'long', 'locationName' => 'objId', ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
                'objUk' => [ 'type' => 'string', 'locationName' => 'objUk', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
            ],
        ],
        'PublishPkgDetailVo' => [
            'type' => 'structure',
            'members' => [
                'publishObjVoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublishObjVo', ], ],
            ],
        ],
        'PublishPkgVo' => [
            'type' => 'structure',
            'members' => [
                'pkgId' => [ 'type' => 'long', 'locationName' => 'pkgId', ],
                'pkgName' => [ 'type' => 'string', 'locationName' => 'pkgName', ],
                'pkgStatusDesc' => [ 'type' => 'string', 'locationName' => 'pkgStatusDesc', ],
                'pkgCreator' => [ 'type' => 'string', 'locationName' => 'pkgCreator', ],
                'pkgCreatorPin' => [ 'type' => 'string', 'locationName' => 'pkgCreatorPin', ],
                'pkgPublisher' => [ 'type' => 'string', 'locationName' => 'pkgPublisher', ],
                'pkgPublisherPin' => [ 'type' => 'string', 'locationName' => 'pkgPublisherPin', ],
                'pkgCreateTimestamp' => [ 'type' => 'long', 'locationName' => 'pkgCreateTimestamp', ],
                'pkgPublishTimestamp' => [ 'type' => 'long', 'locationName' => 'pkgPublishTimestamp', ],
            ],
        ],
        'PublishObjVo' => [
            'type' => 'structure',
            'members' => [
                'objId' => [ 'type' => 'long', 'locationName' => 'objId', ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
                'objUk' => [ 'type' => 'string', 'locationName' => 'objUk', ],
                'objMsg' => [ 'type' => 'string', 'locationName' => 'objMsg', ],
                'versionPretty' => [ 'type' => 'string', 'locationName' => 'versionPretty', ],
                'submitter' => [ 'type' => 'string', 'locationName' => 'submitter', ],
                'submitterPin' => [ 'type' => 'string', 'locationName' => 'submitterPin', ],
                'objTypeDesc' => [ 'type' => 'string', 'locationName' => 'objTypeDesc', ],
                'changeTypeDesc' => [ 'type' => 'string', 'locationName' => 'changeTypeDesc', ],
                'submitTimestamp' => [ 'type' => 'long', 'locationName' => 'submitTimestamp', ],
            ],
        ],
        'UranusUploaderPartETag' => [
            'type' => 'structure',
            'members' => [
                'partNumber' => [ 'type' => 'integer', 'locationName' => 'partNumber', ],
                'eTag' => [ 'type' => 'string', 'locationName' => 'eTag', ],
            ],
        ],
        'DataLoadHistoryParam' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'states' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UranusUploaderReq' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
            ],
        ],
        'UranusTaskFlowDetailRes' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'flowDesc' => [ 'type' => 'string', 'locationName' => 'flowDesc', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'workers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'flowStatus' => [ 'type' => 'integer', 'locationName' => 'flowStatus', ],
                'flowStatusDesc' => [ 'type' => 'string', 'locationName' => 'flowStatusDesc', ],
                'collection' => [ 'type' => 'integer', 'locationName' => 'collection', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'UranusResultRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusCatalogInfo' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'catalogType' => [ 'type' => 'integer', 'locationName' => 'catalogType', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
            ],
        ],
        'TaskInfoSparkJarReq' => [
            'type' => 'structure',
            'members' => [
                'sparkVersion' => [ 'type' => 'string', 'locationName' => 'sparkVersion', ],
                'language' => [ 'type' => 'string', 'locationName' => 'language', ],
                'mainJar' =>  [ 'shape' => 'ResourceBriefInfoVo', ],
                'mainClass' => [ 'type' => 'string', 'locationName' => 'mainClass', ],
                'dependentResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceBriefInfoVo', ], ],
                'params' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'UranusTaskNodeRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'parentId' => [ 'type' => 'integer', 'locationName' => 'parentId', ],
                'nodeType' => [ 'type' => 'integer', 'locationName' => 'nodeType', ],
                'nodeDesc' => [ 'type' => 'string', 'locationName' => 'nodeDesc', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'nodeSort' => [ 'type' => 'integer', 'locationName' => 'nodeSort', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeRes', ], ],
            ],
        ],
        'DataDownloadParam' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
            ],
        ],
        'UranusTaskInfoFileReq' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
                'lockUser' => [ 'type' => 'string', 'locationName' => 'lockUser', ],
            ],
        ],
        'UranusResultTableBriefInfoRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableBriefInfo', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoDTO' => [
            'type' => 'structure',
            'members' => [
                'flowUuid' => [ 'type' => 'string', 'locationName' => 'flowUuid', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'redirectType' => [ 'type' => 'string', 'locationName' => 'redirectType', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameMatch' => [ 'type' => 'boolean', 'locationName' => 'tableNameMatch', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'UranusTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'scriptContent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userAccount' => [ 'type' => 'string', 'locationName' => 'userAccount', ],
                'userPwd' => [ 'type' => 'string', 'locationName' => 'userPwd', ],
                'markIds' => [ 'type' => 'string', 'locationName' => 'markIds', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'isDeploy' => [ 'type' => 'boolean', 'locationName' => 'isDeploy', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'runQueue' => [ 'type' => 'string', 'locationName' => 'runQueue', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
            ],
        ],
        'UranusResultScriptRunLogRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusScriptRunLogRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodePublishOReq' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusNodePublishChildReq', ], ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'UranusResultTaskFlowDetailRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskFlowDetailRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusDictVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'pDictCode' => [ 'type' => 'string', 'locationName' => 'pDictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'bak' => [ 'type' => 'string', 'locationName' => 'bak', ],
                'sort' => [ 'type' => 'long', 'locationName' => 'sort', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
            ],
        ],
        'UranusResultFunctionCatalogVoList' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionCatalogVo', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultInteger' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableSaveOrUpdate' => [
            'type' => 'structure',
            'members' => [
                'tableEnName' => [ 'type' => 'string', 'locationName' => 'tableEnName', ],
                'tableCnName' => [ 'type' => 'string', 'locationName' => 'tableCnName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'partitions' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'isPartition' => [ 'type' => 'integer', 'locationName' => 'isPartition', ],
                'updateTable' => [ 'type' => 'integer', 'locationName' => 'updateTable', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'fieldDelim' => [ 'type' => 'string', 'locationName' => 'fieldDelim', ],
                'lineDelim' => [ 'type' => 'string', 'locationName' => 'lineDelim', ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
            ],
        ],
        'UranusCatalogInfoList' => [
            'type' => 'structure',
            'members' => [
                'unrealId' => [ 'type' => 'string', 'locationName' => 'unrealId', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'catalogType' => [ 'type' => 'integer', 'locationName' => 'catalogType', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'childrenNum' => [ 'type' => 'integer', 'locationName' => 'childrenNum', ],
                'taskFlowList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskFlowListRes', ], ],
            ],
        ],
        'TaskDependPageListReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
            ],
        ],
        'UranusTaskInfoPrePublishRes' => [
            'type' => 'structure',
            'members' => [
                'validResult' => [ 'type' => 'integer', 'locationName' => 'validResult', ],
                'validResultDesc' => [ 'type' => 'string', 'locationName' => 'validResultDesc', ],
                'publicChangeType' => [ 'type' => 'integer', 'locationName' => 'publicChangeType', ],
                'publicChangeTypeDesc' => [ 'type' => 'string', 'locationName' => 'publicChangeTypeDesc', ],
                'changeTypeResList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusPublishChangeTypeRes', ], ],
            ],
        ],
        'UranusResultListObject' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'PartitionInfo' => [
            'type' => 'structure',
            'members' => [
                'partitionKey' => [ 'type' => 'string', 'locationName' => 'partitionKey', ],
                'partitionValue' => [ 'type' => 'string', 'locationName' => 'partitionValue', ],
            ],
        ],
        'ExtraRunnerReq' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'execEngine' => [ 'type' => 'string', 'locationName' => 'execEngine', ],
                'args' =>  [ 'shape' => 'UranusTaskParamReq', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
            ],
        ],
        'UranusColumnSaveOrUpdate' => [
            'type' => 'structure',
            'members' => [
                'fieldSort' => [ 'type' => 'integer', 'locationName' => 'fieldSort', ],
                'fieldEnName' => [ 'type' => 'string', 'locationName' => 'fieldEnName', ],
                'fieldCnName' => [ 'type' => 'string', 'locationName' => 'fieldCnName', ],
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'fieldLen' => [ 'type' => 'integer', 'locationName' => 'fieldLen', ],
                'filedAccuracy' => [ 'type' => 'integer', 'locationName' => 'filedAccuracy', ],
                'isPartition' => [ 'type' => 'string', 'locationName' => 'isPartition', ],
            ],
        ],
        'UranusRunnerReq' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'dataSourceCode' => [ 'type' => 'string', 'locationName' => 'dataSourceCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'execEngine' => [ 'type' => 'string', 'locationName' => 'execEngine', ],
                'args' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'segment' => [ 'type' => 'boolean', 'locationName' => 'segment', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'loopInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfoLoopReq', ], ],
            ],
        ],
        'UranusTaskInfoRePublishReq' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
            ],
        ],
        'DataLoadHistory' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'applicationId' => [ 'type' => 'string', 'locationName' => 'applicationId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'stateDesc' => [ 'type' => 'string', 'locationName' => 'stateDesc', ],
                'createdDate' => [ 'type' => 'integer', 'locationName' => 'createdDate', ],
            ],
        ],
        'UranusSchedJobDTO' => [
            'type' => 'structure',
            'members' => [
                'jobCode' => [ 'type' => 'string', 'locationName' => 'jobCode', ],
                'taskInfo' =>  [ 'shape' => 'UranusTaskInfoDTO', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'validResult' => [ 'type' => 'integer', 'locationName' => 'validResult', ],
                'validResultDesc' => [ 'type' => 'string', 'locationName' => 'validResultDesc', ],
                'publicChangeType' => [ 'type' => 'integer', 'locationName' => 'publicChangeType', ],
                'publicChangeTypeDesc' => [ 'type' => 'string', 'locationName' => 'publicChangeTypeDesc', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'taskParamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamDTO', ], ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
                'lockUser' => [ 'type' => 'string', 'locationName' => 'lockUser', ],
                'taskRelease' => [ 'type' => 'integer', 'locationName' => 'taskRelease', ],
            ],
        ],
        'UranusRunnerResultReq' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'pos' => [ 'type' => 'long', 'locationName' => 'pos', ],
                'lines' => [ 'type' => 'long', 'locationName' => 'lines', ],
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
            ],
        ],
        'UranusTriggerConfigDTO' => [
            'type' => 'structure',
            'members' => [
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'secondaryType' => [ 'type' => 'string', 'locationName' => 'secondaryType', ],
                'serverDomain' => [ 'type' => 'string', 'locationName' => 'serverDomain', ],
                'serverPort' => [ 'type' => 'string', 'locationName' => 'serverPort', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'usernamePwd' => [ 'type' => 'string', 'locationName' => 'usernamePwd', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'dataSource' => [ 'type' => 'string', 'locationName' => 'dataSource', ],
                'object' => [ 'type' => 'string', 'locationName' => 'object', ],
                'conditionConfig' => [ 'type' => 'string', 'locationName' => 'conditionConfig', ],
                'triggerTime' => [ 'type' => 'string', 'locationName' => 'triggerTime', ],
                'triggerInterval' => [ 'type' => 'integer', 'locationName' => 'triggerInterval', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'UranusPageResultContentScriptRunLogRes' => [
            'type' => 'structure',
            'members' => [
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'totalRecords' => [ 'type' => 'integer', 'locationName' => 'totalRecords', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusScriptRunLogRes', ], ],
            ],
        ],
        'UranusResultListTaskFlowListRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskFlowListRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowCheckReq' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
            ],
        ],
        'UranusAnalysisScriptReq' => [
            'type' => 'structure',
            'members' => [
                'currentJobName' => [ 'type' => 'string', 'locationName' => 'currentJobName', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'sqlContent' => [ 'type' => 'string', 'locationName' => 'sqlContent', ],
            ],
        ],
        'ResourceCloseReq' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'sliceTotal' => [ 'type' => 'integer', 'locationName' => 'sliceTotal', ],
                'md5code' => [ 'type' => 'string', 'locationName' => 'md5code', ],
            ],
        ],
        'UranusResultListString' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusAnalysisScriptRes' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'dependJobName' => [ 'type' => 'string', 'locationName' => 'dependJobName', ],
                'dependTaskCode' => [ 'type' => 'string', 'locationName' => 'dependTaskCode', ],
                'tableDesc' => [ 'type' => 'string', 'locationName' => 'tableDesc', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'assetsId' => [ 'type' => 'integer', 'locationName' => 'assetsId', ],
                'tableCnName' => [ 'type' => 'string', 'locationName' => 'tableCnName', ],
                'tableEnName' => [ 'type' => 'string', 'locationName' => 'tableEnName', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'managerName' => [ 'type' => 'string', 'locationName' => 'managerName', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
            ],
        ],
        'UranusNodePublishChildReq' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'publishStatus' => [ 'type' => 'integer', 'locationName' => 'publishStatus', ],
            ],
        ],
        'UranusResultTaskInfoPrePublishRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskInfoPrePublishRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultBoolean' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'DeleteFunctionCatalogReq' => [
            'type' => 'structure',
            'members' => [
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
            ],
        ],
        'UranusResultPageResultContentScriptRunLogRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusPageResultContentScriptRunLogRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFileManagerRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'realPath' => [ 'type' => 'string', 'locationName' => 'realPath', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dir' => [ 'type' => 'boolean', 'locationName' => 'dir', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusFileManagerRes', ], ],
            ],
        ],
        'UranusResultResourceVo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultResourceBriefInfoVo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'ResourceBriefInfoVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'CreateFunctionReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'className' => [ 'type' => 'string', 'locationName' => 'className', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionFormat' => [ 'type' => 'string', 'locationName' => 'functionFormat', ],
                'functionUsage' => [ 'type' => 'string', 'locationName' => 'functionUsage', ],
                'relativeEngine' => [ 'type' => 'string', 'locationName' => 'relativeEngine', ],
            ],
        ],
        'UranusTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskInfo' =>  [ 'shape' => 'UranusTaskInfoRes', ],
                'taskNodeInfo' =>  [ 'shape' => 'UranusTaskInfoNodeReq', ],
                'fileInfo' =>  [ 'shape' => 'UranusTaskInfoFileReq', ],
                'sparkJarInfo' =>  [ 'shape' => 'TaskInfoSparkJarReq', ],
                'loopInfo' =>  [ 'shape' => 'TaskInfoLoopReq', ],
            ],
        ],
        'UranusTaskFlowInfo' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'flowDesc' => [ 'type' => 'string', 'locationName' => 'flowDesc', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'workers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'FunctionCatalogVo' => [
            'type' => 'structure',
            'members' => [
                'functionCatalogName' => [ 'type' => 'string', 'locationName' => 'functionCatalogName', ],
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'hasChildren' => [ 'type' => 'boolean', 'locationName' => 'hasChildren', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionCatalogVo', ], ],
            ],
        ],
        'TaskLoopElementDelimiterVo' => [
            'type' => 'structure',
            'members' => [
                'delimName' => [ 'type' => 'string', 'locationName' => 'delimName', ],
                'delimDesc' => [ 'type' => 'string', 'locationName' => 'delimDesc', ],
                'delimValue' => [ 'type' => 'string', 'locationName' => 'delimValue', ],
            ],
        ],
        'UranusSchedTaskInfoHistoryRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'schedType' => [ 'type' => 'integer', 'locationName' => 'schedType', ],
                'schedStatus' => [ 'type' => 'integer', 'locationName' => 'schedStatus', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskRelease' => [ 'type' => 'integer', 'locationName' => 'taskRelease', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'workUser' => [ 'type' => 'string', 'locationName' => 'workUser', ],
                'jobInfo' => [ 'type' => 'string', 'locationName' => 'jobInfo', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
                'jobStatus' => [ 'type' => 'integer', 'locationName' => 'jobStatus', ],
                'taskParamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'exportParamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
                'datasourcePrimaryId' => [ 'type' => 'string', 'locationName' => 'datasourcePrimaryId', ],
                'datasourceName' => [ 'type' => 'string', 'locationName' => 'datasourceName', ],
                'datasourceUseEnvType' => [ 'type' => 'string', 'locationName' => 'datasourceUseEnvType', ],
                'loopInfo' =>  [ 'shape' => 'TaskInfoLoopReq', ],
            ],
        ],
        'UranusTaskInfoPublishReq' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'publishStatus' => [ 'type' => 'integer', 'locationName' => 'publishStatus', ],
            ],
        ],
        'UranusResultTaskNodeDetailRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskNodeDetailRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'Row' => [
            'type' => 'structure',
            'members' => [
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UranusResultTableQuery' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTableQuery', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultListSchedJobDTO' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusSchedJobDTO', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskParamDTO' => [
            'type' => 'structure',
            'members' => [
                'paramSort' => [ 'type' => 'integer', 'locationName' => 'paramSort', ],
                'paramKey' => [ 'type' => 'string', 'locationName' => 'paramKey', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
                'paramDeSC' => [ 'type' => 'string', 'locationName' => 'paramDeSC', ],
            ],
        ],
        'UranusResultListAnalysisScriptRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusAnalysisScriptRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'CheckFunctionInfoReq' => [
            'type' => 'structure',
            'members' => [
                'checkType' => [ 'type' => 'string', 'locationName' => 'checkType', ],
                'checkName' => [ 'type' => 'string', 'locationName' => 'checkName', ],
                'parentCatalogId' => [ 'type' => 'integer', 'locationName' => 'parentCatalogId', ],
            ],
        ],
        'UranusResultTaskNodeRSaveReq' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskNodeRSaveReq', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusDictRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'pDictCode' => [ 'type' => 'string', 'locationName' => 'pDictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'bak' => [ 'type' => 'string', 'locationName' => 'bak', ],
                'dictSort' => [ 'type' => 'integer', 'locationName' => 'dictSort', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
            ],
        ],
        'UranusResultListFileManagerRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusFileManagerRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'TaskInfoLoopReq' => [
            'type' => 'structure',
            'members' => [
                'loopType' => [ 'type' => 'string', 'locationName' => 'loopType', ],
                'loopParamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LoopParam', ], ],
                'loopTimes' => [ 'type' => 'integer', 'locationName' => 'loopTimes', ],
                'loopBatchSize' => [ 'type' => 'integer', 'locationName' => 'loopBatchSize', ],
                'loopBatchInterval' => [ 'type' => 'integer', 'locationName' => 'loopBatchInterval', ],
            ],
        ],
        'UranusResultListTaskFlowDetailRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskFlowDetailRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultListFunctionManagerRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusFunctionManagerRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskInfo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowListRes' => [
            'type' => 'structure',
            'members' => [
                'nodeCode' => [ 'type' => 'integer', 'locationName' => 'nodeCode', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'flowStatus' => [ 'type' => 'integer', 'locationName' => 'flowStatus', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'flowStatusDesc' => [ 'type' => 'string', 'locationName' => 'flowStatusDesc', ],
                'flowValid' => [ 'type' => 'integer', 'locationName' => 'flowValid', ],
                'collection' => [ 'type' => 'integer', 'locationName' => 'collection', ],
                'isWorker' => [ 'type' => 'integer', 'locationName' => 'isWorker', ],
                'isOwner' => [ 'type' => 'integer', 'locationName' => 'isOwner', ],
                'unrealId' => [ 'type' => 'string', 'locationName' => 'unrealId', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'taskChangeStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'taskChangeStatusDesc' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'gravityStatus' => [ 'type' => 'integer', 'locationName' => 'gravityStatus', ],
                'gravityStatusDesc' => [ 'type' => 'string', 'locationName' => 'gravityStatusDesc', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'isManager' => [ 'type' => 'integer', 'locationName' => 'isManager', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskFlowListRes', ], ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dir' => [ 'type' => 'boolean', 'locationName' => 'dir', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'realPath' => [ 'type' => 'string', 'locationName' => 'realPath', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
                'lockUser' => [ 'type' => 'string', 'locationName' => 'lockUser', ],
            ],
        ],
        'UranusResultListDictRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusDictRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowUpdateReq' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'flowDesc' => [ 'type' => 'string', 'locationName' => 'flowDesc', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'workers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
            ],
        ],
        'UranusResultListTaskParamReq' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultDefinedFunctionVo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'DefinedFunctionVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'ResourceUpdateReq' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'originalName' => [ 'type' => 'string', 'locationName' => 'originalName', ],
                'uploadMode' => [ 'type' => 'string', 'locationName' => 'uploadMode', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
            ],
        ],
        'UpdateFunctionReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'functionId' => [ 'type' => 'integer', 'locationName' => 'functionId', ],
                'className' => [ 'type' => 'string', 'locationName' => 'className', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionFormat' => [ 'type' => 'string', 'locationName' => 'functionFormat', ],
                'functionUsage' => [ 'type' => 'string', 'locationName' => 'functionUsage', ],
            ],
        ],
        'UranusCatalogInfoCode' => [
            'type' => 'structure',
            'members' => [
                'unrealId' => [ 'type' => 'string', 'locationName' => 'unrealId', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'catalogType' => [ 'type' => 'integer', 'locationName' => 'catalogType', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'childrenNum' => [ 'type' => 'integer', 'locationName' => 'childrenNum', ],
            ],
        ],
        'UranusResultListCatalogInfoCode' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusCatalogInfoCode', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultListTaskNodeRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeDetailRes' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'childrenCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parentCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskNodeId' => [ 'type' => 'integer', 'locationName' => 'taskNodeId', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'taskData' => [ 'type' => 'string', 'locationName' => 'taskData', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isUranus' => [ 'type' => 'integer', 'locationName' => 'isUranus', ],
                'isCurrentFlow' => [ 'type' => 'integer', 'locationName' => 'isCurrentFlow', ],
                'parent' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeSaveReq', ], ],
                'haveChildren' => [ 'type' => 'integer', 'locationName' => 'haveChildren', ],
                'worker' => [ 'type' => 'string', 'locationName' => 'worker', ],
                'taskChangeStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'taskChangeStatusDesc' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'gravityStatus' => [ 'type' => 'integer', 'locationName' => 'gravityStatus', ],
                'gravityStatusDesc' => [ 'type' => 'string', 'locationName' => 'gravityStatusDesc', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
                'lockUser' => [ 'type' => 'string', 'locationName' => 'lockUser', ],
            ],
        ],
        'UranusTaskNodeParamRes' => [
            'type' => 'structure',
            'members' => [
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'paramKey' => [ 'type' => 'string', 'locationName' => 'paramKey', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
                'paramDesc' => [ 'type' => 'string', 'locationName' => 'paramDesc', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
            ],
        ],
        'UranusResultUploaderInitRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UploaderInitRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusSparkJarManagerRes' => [
            'type' => 'structure',
            'members' => [
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'realPath' => [ 'type' => 'string', 'locationName' => 'realPath', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dir' => [ 'type' => 'boolean', 'locationName' => 'dir', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusSparkJarManagerRes', ], ],
            ],
        ],
        'DataLoadPreviewParam' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'fileKey' => [ 'type' => 'string', 'locationName' => 'fileKey', ],
                'delimiter' => [ 'type' => 'string', 'locationName' => 'delimiter', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
            ],
        ],
        'TableDelimitersVo' => [
            'type' => 'structure',
            'members' => [
                'fieldDelimiters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableDelimiterVo', ], ],
                'lineDelimiters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableDelimiterVo', ], ],
            ],
        ],
        'UranusFunctionManagerRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'dir' => [ 'type' => 'boolean', 'locationName' => 'dir', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'children' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'pid' => [ 'type' => 'long', 'locationName' => 'pid', ],
            ],
        ],
        'UranusColumnReq' => [
            'type' => 'structure',
            'members' => [
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'commentV' => [ 'type' => 'string', 'locationName' => 'commentV', ],
            ],
        ],
        'ResourceDeleteReq' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
            ],
        ],
        'UploaderInitRes' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'UranusTaskNodePagePublishReq' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusNodePublishChildReq', ], ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
            ],
        ],
        'UranusResultListTaskInfoRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskInfoRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeRSaveReq' => [
            'type' => 'structure',
            'members' => [
                'workFlowInfo' =>  [ 'shape' => 'UranusTaskFlowUpdateReq', ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeDetailRes', ], ],
                'graphStr' => [ 'type' => 'string', 'locationName' => 'graphStr', ],
            ],
        ],
        'UranusTaskNodePreRes' => [
            'type' => 'structure',
            'members' => [
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'taskSort' => [ 'type' => 'integer', 'locationName' => 'taskSort', ],
                'taskGroup' => [ 'type' => 'integer', 'locationName' => 'taskGroup', ],
                'hasLevel' => [ 'type' => 'integer', 'locationName' => 'hasLevel', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'publicChangeType' => [ 'type' => 'string', 'locationName' => 'publicChangeType', ],
            ],
        ],
        'UranusTaskFuzzyReq' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'currentTaskCode' => [ 'type' => 'string', 'locationName' => 'currentTaskCode', ],
                'dependJobNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'analysisDependJobNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ExtraRunnerParamReq' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'simDate' => [ 'type' => 'string', 'locationName' => 'simDate', ],
            ],
        ],
        'UranusTaskNodeUpdateReq' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'childrenCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parentCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskNodeId' => [ 'type' => 'integer', 'locationName' => 'taskNodeId', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'taskData' => [ 'type' => 'string', 'locationName' => 'taskData', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isUranus' => [ 'type' => 'integer', 'locationName' => 'isUranus', ],
                'isCurrentFlow' => [ 'type' => 'integer', 'locationName' => 'isCurrentFlow', ],
                'parent' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeSaveReq', ], ],
                'haveChildren' => [ 'type' => 'integer', 'locationName' => 'haveChildren', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
            ],
        ],
        'UranusResultListTaskNodePreRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodePreRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusPageResultContentTaskNodePageRes' => [
            'type' => 'structure',
            'members' => [
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'totalRecords' => [ 'type' => 'integer', 'locationName' => 'totalRecords', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodePageRes', ], ],
            ],
        ],
        'UranusParamReq' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'sysType' => [ 'type' => 'string', 'locationName' => 'sysType', ],
            ],
        ],
        'UranusScriptRunLogListReq' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'statusList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimeFrom' => [ 'type' => 'string', 'locationName' => 'startTimeFrom', ],
                'startTimeTo' => [ 'type' => 'string', 'locationName' => 'startTimeTo', ],
                'endTimeFrom' => [ 'type' => 'string', 'locationName' => 'endTimeFrom', ],
                'endTimeTo' => [ 'type' => 'string', 'locationName' => 'endTimeTo', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'UranusResultPageResultContentTaskNodePageRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusPageResultContentTaskNodePageRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'ResourceCreateReq' => [
            'type' => 'structure',
            'members' => [
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'originalName' => [ 'type' => 'string', 'locationName' => 'originalName', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'relativeEngine' => [ 'type' => 'string', 'locationName' => 'relativeEngine', ],
                'uploadMode' => [ 'type' => 'string', 'locationName' => 'uploadMode', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UranusUploaderChunkCheckerRes' => [
            'type' => 'structure',
            'members' => [
                'uploadedAll' => [ 'type' => 'boolean', 'locationName' => 'uploadedAll', ],
                'uploadedChunkNumbers' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'UranusTaskInfoHistoryReq' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'UranusPageResultContentSchedTaskInfoHistoryRes' => [
            'type' => 'structure',
            'members' => [
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'totalRecords' => [ 'type' => 'integer', 'locationName' => 'totalRecords', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusSchedTaskInfoHistoryRes', ], ],
            ],
        ],
        'UranusTaskFlowTreeReq' => [
            'type' => 'structure',
            'members' => [
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
            ],
        ],
        'DataLoadParam' => [
            'type' => 'structure',
            'members' => [
                'fileKey' => [ 'type' => 'string', 'locationName' => 'fileKey', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'delimiter' => [ 'type' => 'string', 'locationName' => 'delimiter', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'projectEnv' => [ 'type' => 'string', 'locationName' => 'projectEnv', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'partitionInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'PartitionInfo', ], ],
                'importStrategy' => [ 'type' => 'string', 'locationName' => 'importStrategy', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
            ],
        ],
        'UranusTaskParamReq' => [
            'type' => 'structure',
            'members' => [
                'paramSort' => [ 'type' => 'integer', 'locationName' => 'paramSort', ],
                'paramKey' => [ 'type' => 'string', 'locationName' => 'paramKey', ],
                'paramValue' => [ 'type' => 'string', 'locationName' => 'paramValue', ],
                'paramDesc' => [ 'type' => 'string', 'locationName' => 'paramDesc', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
            ],
        ],
        'UranusResultListColumnReq' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnReq', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultPageResultContentSchedTaskInfoHistoryRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusPageResultContentSchedTaskInfoHistoryRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptFileVerifyReq' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'targetTables' => [ 'type' => 'string', 'locationName' => 'targetTables', ],
                'saveRelFlag' => [ 'type' => 'string', 'locationName' => 'saveRelFlag', ],
            ],
        ],
        'UranusResultLinkedHashMapObjectObject' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'DataLoadLogParam' => [
            'type' => 'structure',
            'members' => [
                'applicationId' => [ 'type' => 'string', 'locationName' => 'applicationId', ],
            ],
        ],
        'TableDelimiterVo' => [
            'type' => 'structure',
            'members' => [
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'UranusTaskNodeUpdateStatusReq' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'ResourceBriefInfoVo' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'UranusTaskFlowDelReq' => [
            'type' => 'structure',
            'members' => [
                'flowCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UranusResultUploaderChunkCheckerRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusUploaderChunkCheckerRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'CreateFunctionCatalogReq' => [
            'type' => 'structure',
            'members' => [
                'functionCatalogName' => [ 'type' => 'string', 'locationName' => 'functionCatalogName', ],
                'parentCatalogId' => [ 'type' => 'integer', 'locationName' => 'parentCatalogId', ],
            ],
        ],
        'UranusUploaderChunkReq' => [
            'type' => 'structure',
            'members' => [
                'fileTypeCode' => [ 'type' => 'integer', 'locationName' => 'fileTypeCode', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'uploadId' => [ 'type' => 'string', 'locationName' => 'uploadId', ],
                'chunkNumber' => [ 'type' => 'integer', 'locationName' => 'chunkNumber', ],
                'totalChunks' => [ 'type' => 'integer', 'locationName' => 'totalChunks', ],
                'chunkSize' => [ 'type' => 'long', 'locationName' => 'chunkSize', ],
                'currentChunkSize' => [ 'type' => 'long', 'locationName' => 'currentChunkSize', ],
                'totalSize' => [ 'type' => 'long', 'locationName' => 'totalSize', ],
                'filename' => [ 'type' => 'string', 'locationName' => 'filename', ],
                'file' => [ 'type' => 'binary', 'locationName' => 'file', ],
                'fileBytes' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'partETagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusUploaderPartETag', ], ],
            ],
        ],
        'UranusTaskFlowCollectionReq' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'collectionType' => [ 'type' => 'integer', 'locationName' => 'collectionType', ],
            ],
        ],
        'UranusResultTableSaveOrUpdate' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTableSaveOrUpdate', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultTableDelimitersVo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'TableDelimitersVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodePageReq' => [
            'type' => 'structure',
            'members' => [
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'jobType' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'jobChildType' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'updateStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'updateTimeBefore' => [ 'type' => 'string', 'locationName' => 'updateTimeBefore', ],
                'updateTimeAfter' => [ 'type' => 'string', 'locationName' => 'updateTimeAfter', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
            ],
        ],
        'UranusResultListSparkJarManagerRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusSparkJarManagerRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodePageRes' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'jobType' => [ 'type' => 'integer', 'locationName' => 'jobType', ],
                'jobTypeDesc' => [ 'type' => 'string', 'locationName' => 'jobTypeDesc', ],
                'jobChildType' => [ 'type' => 'integer', 'locationName' => 'jobChildType', ],
                'jobChildTypeDesc' => [ 'type' => 'string', 'locationName' => 'jobChildTypeDesc', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'taskNodeChangeResList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeChangeRes', ], ],
                'gravityStatus' => [ 'type' => 'integer', 'locationName' => 'gravityStatus', ],
                'gravityStatusDesc' => [ 'type' => 'string', 'locationName' => 'gravityStatusDesc', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'modifiedTime' => [ 'type' => 'string', 'locationName' => 'modifiedTime', ],
            ],
        ],
        'UranusTaskInfoRes' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'projectNameMatch' => [ 'type' => 'boolean', 'locationName' => 'projectNameMatch', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'redirectType' => [ 'type' => 'string', 'locationName' => 'redirectType', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameMatch' => [ 'type' => 'boolean', 'locationName' => 'tableNameMatch', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'scriptContent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'markIds' => [ 'type' => 'string', 'locationName' => 'markIds', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'isDeploy' => [ 'type' => 'boolean', 'locationName' => 'isDeploy', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runEngine' => [ 'type' => 'string', 'locationName' => 'runEngine', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'taskParamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'exportParamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
                'datasourcePrimaryId' => [ 'type' => 'string', 'locationName' => 'datasourcePrimaryId', ],
                'datasourceUseEnvType' => [ 'type' => 'string', 'locationName' => 'datasourceUseEnvType', ],
            ],
        ],
        'UranusTaskInfoNodeReq' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'taskChangeStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'taskChangeStatusDesc' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'gravityStatus' => [ 'type' => 'integer', 'locationName' => 'gravityStatus', ],
                'gravityStatusDesc' => [ 'type' => 'string', 'locationName' => 'gravityStatusDesc', ],
            ],
        ],
        'UranusTaskNodeSaveReq' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'childrenCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parentCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskNodeId' => [ 'type' => 'integer', 'locationName' => 'taskNodeId', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'taskData' => [ 'type' => 'string', 'locationName' => 'taskData', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isUranus' => [ 'type' => 'integer', 'locationName' => 'isUranus', ],
                'isCurrentFlow' => [ 'type' => 'integer', 'locationName' => 'isCurrentFlow', ],
                'parent' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeSaveReq', ], ],
                'haveChildren' => [ 'type' => 'integer', 'locationName' => 'haveChildren', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
            ],
        ],
        'UranusTableQuery' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'tableEnName' => [ 'type' => 'string', 'locationName' => 'tableEnName', ],
                'tableCnName' => [ 'type' => 'string', 'locationName' => 'tableCnName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'partitions' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'isPartition' => [ 'type' => 'integer', 'locationName' => 'isPartition', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'fieldDelim' => [ 'type' => 'string', 'locationName' => 'fieldDelim', ],
                'lineDelim' => [ 'type' => 'string', 'locationName' => 'lineDelim', ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
            ],
        ],
        'UranusResultListElementDelimiters' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskLoopElementDelimiterVo', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusPublishChangeTypeRes' => [
            'type' => 'structure',
            'members' => [
                'publicChangeType' => [ 'type' => 'integer', 'locationName' => 'publicChangeType', ],
                'publicChangeTypeDesc' => [ 'type' => 'string', 'locationName' => 'publicChangeTypeDesc', ],
            ],
        ],
        'LoopParam' => [
            'type' => 'structure',
            'members' => [
                'elementName' => [ 'type' => 'string', 'locationName' => 'elementName', ],
                'elementValues' => [ 'type' => 'string', 'locationName' => 'elementValues', ],
                'delimiter' =>  [ 'shape' => 'TaskLoopElementDelimiterVo', ],
            ],
        ],
        'DeleteFunctionReq' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'integer', 'locationName' => 'functionId', ],
            ],
        ],
        'UranusResultListDictVO' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusDictVO', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultString' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultTaskNodeParamRes' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeParamRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptRunLogRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'datasourcePrimaryId' => [ 'type' => 'string', 'locationName' => 'datasourcePrimaryId', ],
                'datasourceName' => [ 'type' => 'string', 'locationName' => 'datasourceName', ],
                'datasourceUseEnvType' => [ 'type' => 'string', 'locationName' => 'datasourceUseEnvType', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'execMode' => [ 'type' => 'string', 'locationName' => 'execMode', ],
                'snapshotMd5' => [ 'type' => 'string', 'locationName' => 'snapshotMd5', ],
                'args' => [ 'type' => 'string', 'locationName' => 'args', ],
                'execEngine' => [ 'type' => 'string', 'locationName' => 'execEngine', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'resultIndex' => [ 'type' => 'integer', 'locationName' => 'resultIndex', ],
                'loopInfo' =>  [ 'shape' => 'TaskInfoLoopReq', ],
            ],
        ],
        'UranusTaskNodeUpdateStatusListReq' => [
            'type' => 'structure',
            'members' => [
                'taskCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'UranusTaskNodeChangeRes' => [
            'type' => 'structure',
            'members' => [
                'taskChangeStatus' => [ 'type' => 'integer', 'locationName' => 'taskChangeStatus', ],
                'taskChangeStatusDesc' => [ 'type' => 'string', 'locationName' => 'taskChangeStatusDesc', ],
            ],
        ],
        'UranusDdlAnalyzeReq' => [
            'type' => 'structure',
            'members' => [
                'sqlContent' => [ 'type' => 'string', 'locationName' => 'sqlContent', ],
            ],
        ],
        'DefinedFunctionVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'className' => [ 'type' => 'string', 'locationName' => 'className', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionFormat' => [ 'type' => 'string', 'locationName' => 'functionFormat', ],
                'functionUsage' => [ 'type' => 'string', 'locationName' => 'functionUsage', ],
                'relativeEngine' => [ 'type' => 'string', 'locationName' => 'relativeEngine', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
            ],
        ],
        'UranusResultResListString' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResultListCatalogInfoList' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusCatalogInfoList', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'TableBriefInfo' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'publishStage' => [ 'type' => 'string', 'locationName' => 'publishStage', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'managers' => [ 'type' => 'string', 'locationName' => 'managers', ],
            ],
        ],
        'UranusScriptParamReq' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
            ],
        ],
        'UranusResourceVo' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'string', 'locationName' => 'viewId', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'originalName' => [ 'type' => 'string', 'locationName' => 'originalName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'hasChildren' => [ 'type' => 'boolean', 'locationName' => 'hasChildren', ],
                'icon' => [ 'type' => 'string', 'locationName' => 'icon', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusResourceVo', ], ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'relativeEngine' => [ 'type' => 'string', 'locationName' => 'relativeEngine', ],
                'uploadMode' => [ 'type' => 'string', 'locationName' => 'uploadMode', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'publishStage' => [ 'type' => 'string', 'locationName' => 'publishStage', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
            ],
        ],
        'DataLoadKillParam' => [
            'type' => 'structure',
            'members' => [
                'applicationId' => [ 'type' => 'string', 'locationName' => 'applicationId', ],
            ],
        ],
        'BundleOrUnBundleResourceReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'calculateResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'integrationResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'workspaceModel' => [ 'type' => 'string', 'locationName' => 'workspaceModel', ],
                'engineType' => [ 'type' => 'string', 'locationName' => 'engineType', ],
                'calculateResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'integrationResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'needBundleProject' => [ 'type' => 'boolean', 'locationName' => 'needBundleProject', ],
                'bundleDevProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
                'bundleProdProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
            ],
        ],
        'BundleProjectReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
            ],
        ],
        'EditWorkspaceReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
            ],
        ],
        'ChangeWorkspaceStatusReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'CreateProjectResourceParam' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'resourceSpec' => [ 'type' => 'string', 'locationName' => 'resourceSpec', ],
                'purchaseMode' => [ 'type' => 'string', 'locationName' => 'purchaseMode', ],
                'payResourceNum' => [ 'type' => 'integer', 'locationName' => 'payResourceNum', ],
            ],
        ],
        'UpdateUserRoleReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'long', 'locationName' => 'workspaceId', ],
                'updateRoleReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserRoleInfo', ], ],
            ],
        ],
        'DeleteMemberReq' => [
            'type' => 'structure',
            'members' => [
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'workspaceId' => [ 'type' => 'long', 'locationName' => 'workspaceId', ],
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
            ],
        ],
        'UnbundleProjectReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
            ],
        ],
        'WorkspaceBundleProjectReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'engineType' => [ 'type' => 'string', 'locationName' => 'engineType', ],
                'bundleDevProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
                'bundleProdProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
            ],
        ],
        'CreateWorkspaceProductParam' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'ownerIntegrationResource' =>  [ 'shape' => 'OwnerIntegrationResource', ],
                'payPlan' => [ 'type' => 'string', 'locationName' => 'payPlan', ],
                'billingVersion' => [ 'type' => 'string', 'locationName' => 'billingVersion', ],
                'billingModel' => [ 'type' => 'string', 'locationName' => 'billingModel', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'projectResourceReq' =>  [ 'shape' => 'CreateProjectResourceParam', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'OrderUniqueKey' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'StopExpireOrDeleteReq' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'handleStatus' => [ 'type' => 'string', 'locationName' => 'handleStatus', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'SyncWsProductOrderReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'billingVersion' => [ 'type' => 'string', 'locationName' => 'billingVersion', ],
                'billingModel' => [ 'type' => 'string', 'locationName' => 'billingModel', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'companyId' => [ 'type' => 'string', 'locationName' => 'companyId', ],
                'payPlan' => [ 'type' => 'string', 'locationName' => 'payPlan', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'orderUniqueKey' =>  [ 'shape' => 'OrderUniqueKey', ],
            ],
        ],
        'AddMemberReq' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'long', 'locationName' => 'workspaceId', ],
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roleCodeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryWorkspaceInfoReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
            ],
        ],
        'OwnerIntegrationResource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceDescription' => [ 'type' => 'string', 'locationName' => 'resourceDescription', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'resourceSpec' => [ 'type' => 'string', 'locationName' => 'resourceSpec', ],
                'purchaseMode' => [ 'type' => 'string', 'locationName' => 'purchaseMode', ],
                'payResourceNum' => [ 'type' => 'integer', 'locationName' => 'payResourceNum', ],
            ],
        ],
        'QueryWorkspaceListReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'imProjectManager' => [ 'type' => 'boolean', 'locationName' => 'imProjectManager', ],
                'imInProject' => [ 'type' => 'boolean', 'locationName' => 'imInProject', ],
            ],
        ],
        'UserRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userRole' => [ 'type' => 'string', 'locationName' => 'userRole', ],
            ],
        ],
        'WorkspaceResourcesReq' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'PageInfoUcUsersResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'UcUsersResp', ], ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
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
        'PageInfoWorkspaceListResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceListResp', ], ],
            ],
        ],
        'WorkspaceUserResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userRoleList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateDate' => [ 'type' => 'string', 'locationName' => 'updateDate', ],
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
        'UcUsersResp' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'isAccount' => [ 'type' => 'boolean', 'locationName' => 'isAccount', ],
            ],
        ],
        'WorkspaceListResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'workspaceModel' => [ 'type' => 'string', 'locationName' => 'workspaceModel', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'managerPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'memberNum' => [ 'type' => 'integer', 'locationName' => 'memberNum', ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
                'modifiedDate' => [ 'type' => 'string', 'locationName' => 'modifiedDate', ],
            ],
        ],
        'ResourceResp' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'resourceFlag' => [ 'type' => 'string', 'locationName' => 'resourceFlag', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'privateId' => [ 'type' => 'string', 'locationName' => 'privateId', ],
                'ipv4Cidr' => [ 'type' => 'string', 'locationName' => 'ipv4Cidr', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetCidr' => [ 'type' => 'string', 'locationName' => 'subnetCidr', ],
                'natSubnetId' => [ 'type' => 'string', 'locationName' => 'natSubnetId', ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
                'payMethod' => [ 'type' => 'string', 'locationName' => 'payMethod', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'effectiveStartTime' => [ 'type' => 'string', 'locationName' => 'effectiveStartTime', ],
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
        'WorkspaceUserRoleResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceInfoResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'workspaceModel' => [ 'type' => 'string', 'locationName' => 'workspaceModel', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
            ],
        ],
        'ProjectResp' => [
            'type' => 'structure',
            'members' => [
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'projectStatus' => [ 'type' => 'string', 'locationName' => 'projectStatus', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'bundleTime' => [ 'type' => 'string', 'locationName' => 'bundleTime', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
            ],
        ],
        'CopilotChatClearResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotChatClearResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotVerifyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotChatClearResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CopilotChatDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CopilotVerifyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'CopilotUtteranceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UtteranceVo', ], ],
            ],
        ],
        'CopilotChatHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicLike' => [ 'type' => 'string', 'locationName' => 'topicLike', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotUtteranceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotModelListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotModelListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotUtteranceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotUtteranceListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotUtteranceStopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotUtteranceStopResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotChatNewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotModelListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelVo', ], ],
            ],
        ],
        'CopilotModelListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotChatHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotChatHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotChatDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotChatNewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotChatNewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotUtteranceRecommendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'utteranceId' => [ 'type' => 'string', 'locationName' => 'utteranceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotVerifyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotVerifyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotChatDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotChatDeleteResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CopilotChatClearRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotUtteranceRecommendResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CopilotChatHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChatVo', ], ],
            ],
        ],
        'CopilotChatNewResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'CopilotUtteranceStopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'chatId' => [ 'type' => 'string', 'locationName' => 'chatId', ],
                'utteranceId' => [ 'type' => 'string', 'locationName' => 'utteranceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'CopilotUtteranceStopResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CopilotUtteranceRecommendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopilotUtteranceRecommendResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JtlasDownloadTableColumnsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasDownloadTableColumnsResultShape', ],
            ],
        ],
        'JtlasGrantTablePrivilegesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasGetTableDDLScriptResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasDestroyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasGrantTablePrivilegesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasGrantTablePrivilegesResultShape', ],
            ],
        ],
        'JtlasSearchTableLineageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasSearchTableLineageResultShape', ],
            ],
        ],
        'JtlasPageSearchTablePrivilegesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasSearchColumnLineageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasSearchColumnLineageResultShape', ],
            ],
        ],
        'JtlasPageSearchTablePartitionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasPageSearchTablePartitionsResultShape', ],
            ],
        ],
        'JtlasPageSearchTablePartitionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'fuzzyText' => [ 'type' => 'string', 'locationName' => 'fuzzyText', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasSearchDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasGetTableDDLScriptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasDownloadTableColumnsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchTableLineageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchColumnLineageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasDownloadTableColumnsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasGrantTablePrivilegesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasPageSearchTablePrivilegesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasPageSearchTablePrivilegesResultShape', ],
            ],
        ],
        'JtlasGetTableQueryScriptResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSubscribeTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'JtlasPageSearchTablePartitionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSearchDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JtlasSearchTable', ],
            ],
        ],
        'JtlasDestroyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasDestroyResultShape', ],
            ],
        ],
        'JtlasPageSearchTablePrivilegesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasGetTableQueryScriptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasGetTableDDLScriptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasGetTableDDLScriptResultShape', ],
            ],
        ],
        'JtlasPageSearchTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
        'JtlasSubscribeTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'subscribeType' => [ 'type' => 'string', 'locationName' => 'subscribeType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasSearchDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasSearchDetailResultShape', ],
            ],
        ],
        'JtlasPageSearchTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filterQuery' => [ 'type' => 'boolean', 'locationName' => 'filterQuery', ],
                'searchMode' => [ 'type' => 'string', 'locationName' => 'searchMode', ],
                'searchKeyword' => [ 'type' => 'string', 'locationName' => 'searchKeyword', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'searchRange' => [ 'type' => 'string', 'locationName' => 'searchRange', ],
                'personInCharge' => [ 'type' => 'string', 'locationName' => 'personInCharge', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasSearchTableLineageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'edgeType' => [ 'type' => 'string', 'locationName' => 'edgeType', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'depth' => [ 'type' => 'integer', 'locationName' => 'depth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasDestroyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasGetTableQueryScriptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasGetTableQueryScriptResultShape', ],
            ],
        ],
        'JtlasSubscribeTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasSubscribeTableResultShape', ],
            ],
        ],
        'JtlasSearchColumnLineageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'edgeType' => [ 'type' => 'string', 'locationName' => 'edgeType', ],
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'depth' => [ 'type' => 'integer', 'locationName' => 'depth', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasPageSearchTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasPageSearchTablesResultShape', ],
            ],
        ],
        'JtlasWarehouseQueryTablesOwnedByUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'fuzzyName' => [ 'type' => 'string', 'locationName' => 'fuzzyName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseTableDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseTableDetailResultShape', ],
            ],
        ],
        'JtlasWarehouseQueryTablesOwnedByUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseQueryTablePrivilegesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseQueryTablePrivilegesResultShape', ],
            ],
        ],
        'JtlasWarehouseQueryTablesOwnedByUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseQueryTablesOwnedByUserResultShape', ],
            ],
        ],
        'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivilegesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivilegesResultShape', ],
            ],
        ],
        'JtlasWarehouseQueryTablePrivilegesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTablePrivilege', ], ],
            ],
        ],
        'JtlasWarehouseTableDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivilegesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseFuzzyQueryTablesByTableNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseFuzzyQueryTablesByTableNameResultShape', ],
            ],
        ],
        'JtlasWarehouseFuzzyQueryTablesByTableNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'fuzzyTableName' => [ 'type' => 'string', 'locationName' => 'fuzzyTableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseQueryTablesByDatabaseNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserResultShape', ],
            ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivilegesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivilegesResultShape', ],
            ],
        ],
        'JtlasWarehouseQueryTablePrivilegesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseTableDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JtlasWarehouseTable', ],
            ],
        ],
        'JtlasWarehouseQueryTablesByDatabaseNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'JtlasWarehouseQueryTablesByDatabaseNameResultShape', ],
            ],
        ],
        'JtlasWarehouseFuzzyQueryTablesByTableNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivilegesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'fuzzyTableName' => [ 'type' => 'string', 'locationName' => 'fuzzyTableName', ],
                'privilegeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseQueryTablesByDatabaseNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserWithPrivilegesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseFuzzyQueryTablesUnderSpecifiedUserWithPrivilegesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'JtlasWarehouseTable', ], ],
            ],
        ],
        'JtlasWarehouseQueryTablesUnderSpecifiedUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'principalName' => [ 'type' => 'string', 'locationName' => 'principalName', ],
                'fuzzyName' => [ 'type' => 'string', 'locationName' => 'fuzzyName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobHisRunListTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'processTypeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'exeTypeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'statu' => [ 'type' => 'string', 'locationName' => 'statu', ],
                'jobStartDate' => [ 'type' => 'string', 'locationName' => 'jobStartDate', ],
                'jobEndDate' => [ 'type' => 'string', 'locationName' => 'jobEndDate', ],
                'createDateBefore' => [ 'type' => 'string', 'locationName' => 'createDateBefore', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobHisRunAddTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'startDate' => [ 'type' => 'string', 'locationName' => 'startDate', ],
                'endDate' => [ 'type' => 'string', 'locationName' => 'endDate', ],
                'parallelNum' => [ 'type' => 'integer', 'locationName' => 'parallelNum', ],
                'childJobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobHisRunAddBathTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'startDate' => [ 'type' => 'string', 'locationName' => 'startDate', ],
                'endDate' => [ 'type' => 'string', 'locationName' => 'endDate', ],
                'parallelNum' => [ 'type' => 'integer', 'locationName' => 'parallelNum', ],
                'childJobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobHisRunAddTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'int32', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobHisRunListTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobHisRunListTaskResultShape', ],
            ],
        ],
        'GravityParticleJobHisRunListTaskLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobHisRunListTaskLogResultShape', ],
            ],
        ],
        'GravityParticleJobHisRunCloseTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobHisRunCloseTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobHisRunAddTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobHisRunAddTaskResultShape', ],
            ],
        ],
        'GravityParticleJobHisRunListTaskLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'afreshAddId' => [ 'type' => 'integer', 'locationName' => 'afreshAddId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobHisRunAddBathTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobHisRunAddBathTaskResultShape', ],
            ],
        ],
        'GravityParticleJobHisRunCloseTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobHisRunCloseTaskResultShape', ],
            ],
        ],
        'GravityParticleJobHisRunAddBathTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'int32', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobHisRunListTaskLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdrPageInfoAfreshAddLogVo', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobHisRunListTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'txdate' => [ 'type' => 'string', 'locationName' => 'txdate', ],
                'statu' => [ 'type' => 'string', 'locationName' => 'statu', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'currentMsg' => [ 'type' => 'string', 'locationName' => 'currentMsg', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobStartDate' => [ 'type' => 'string', 'locationName' => 'jobStartDate', ],
                'jobEndDate' => [ 'type' => 'string', 'locationName' => 'jobEndDate', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'exeType' => [ 'type' => 'string', 'locationName' => 'exeType', ],
                'createDate' => [ 'type' => 'string', 'locationName' => 'createDate', ],
                'processTypeLabel' => [ 'type' => 'string', 'locationName' => 'processTypeLabel', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'statusLabel' => [ 'type' => 'string', 'locationName' => 'statusLabel', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'managerFlag' => [ 'type' => 'boolean', 'locationName' => 'managerFlag', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
            ],
        ],
        'GravityParticleJobDepGetParentDependenciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpPageInfoJobDependencyResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepGetParentDependenciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobEnable' => [ 'type' => 'string', 'locationName' => 'jobEnable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepGetChildDependenciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpPageInfoJobDependencyResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepChildJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpSchedTriggerDependTree', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepParentJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobEnable' => [ 'type' => 'string', 'locationName' => 'jobEnable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepChildJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobEnable' => [ 'type' => 'string', 'locationName' => 'jobEnable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepParentJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpSchedTriggerDependTree', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepGetParentChainJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpSchedTriggerDependTree', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepGetChildChainJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepGetChildChainJobsResultShape', ],
            ],
        ],
        'GravityParticleJobDepGetParentDependenciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepGetParentDependenciesResultShape', ],
            ],
        ],
        'GravityParticleJobDepChildJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepChildJobsResultShape', ],
            ],
        ],
        'GravityParticleJobDepGetParentChainJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepGetChildTreedRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepGetChildDependenciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepGetChildDependenciesResultShape', ],
            ],
        ],
        'GravityParticleJobDepGetChildTreedResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepGetChildTreedResultShape', ],
            ],
        ],
        'GravityParticleJobDepDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpJobDetailResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepDetailResultShape', ],
            ],
        ],
        'GravityParticleJobDepParentJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepParentJobsResultShape', ],
            ],
        ],
        'GravityParticleJobDepGetParentChainJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobDepGetParentChainJobsResultShape', ],
            ],
        ],
        'GravityParticleJobDepGetChildDependenciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobEnable' => [ 'type' => 'string', 'locationName' => 'jobEnable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepGetChildChainJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpSchedTriggerDependTree', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobDepGetChildChainJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobDepGetChildTreedResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpdpSchedTriggerDependTree', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchSchedJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchJobIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerJobQueryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeployJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerSaveJobScriptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'scriptDesc' => [ 'type' => 'string', 'locationName' => 'scriptDesc', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetJobScriptResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' =>  [ 'shape' => 'GpdjmcDmrScriptInfoDTO', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchDmrModelJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelJobRDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerDeployJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerDeployJobResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerGetMgrJobByJobeResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchDmrModelJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'jobIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchJobIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerSearchJobIdResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchSchedJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobResDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteAllByWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerDeleteAllByWorkspaceResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetEngineTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcEngineTemplateDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteJobScriptResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchByJobNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobDepDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerGetEngineTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerGetEngineTemplateResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchByJobNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchSchedJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerSearchSchedJobResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetScriptInfoTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerCalcJobDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerQueryJobByOutputTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerSaveDmrModelJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerListJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteAllByWorkspaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteAllByWorkspaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteJobScriptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerDeleteJobScriptResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeployJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'integer', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'projectNameMatch' => [ 'type' => 'boolean', 'locationName' => 'projectNameMatch', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'modelId' => [ 'type' => 'integer', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelNameMatch' => [ 'type' => 'boolean', 'locationName' => 'modelNameMatch', ],
                'gitUrl' => [ 'type' => 'string', 'locationName' => 'gitUrl', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'marketId' => [ 'type' => 'integer', 'locationName' => 'marketId', ],
                'marketCode' => [ 'type' => 'string', 'locationName' => 'marketCode', ],
                'marketName' => [ 'type' => 'string', 'locationName' => 'marketName', ],
                'redirectType' => [ 'type' => 'string', 'locationName' => 'redirectType', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameMatch' => [ 'type' => 'boolean', 'locationName' => 'tableNameMatch', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'GpdjmcTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'scriptContent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userAccount' => [ 'type' => 'string', 'locationName' => 'userAccount', ],
                'userPwd' => [ 'type' => 'string', 'locationName' => 'userPwd', ],
                'markIds' => [ 'type' => 'string', 'locationName' => 'markIds', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'dmrTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'dmrTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelDTO', ], ],
                'gitFilesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcGitFileDTO', ], ],
                'isDeploy' => [ 'type' => 'boolean', 'locationName' => 'isDeploy', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'runQueue' => [ 'type' => 'string', 'locationName' => 'runQueue', ],
                'sparkJarRunParams' =>  [ 'shape' => 'SparkJarRunParams', ],
                'submitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcConfPairStringString', ], ],
                'jobStatus' => [ 'type' => 'integer', 'locationName' => 'jobStatus', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'scriptUrl' => [ 'type' => 'string', 'locationName' => 'scriptUrl', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'datasourceId' => [ 'type' => 'string', 'locationName' => 'datasourceId', ],
                'inputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcInputParam', ], ],
                'outputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcOutputParam', ], ],
                'loopParam' =>  [ 'shape' => 'GpdjmcLoopParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerQueryJobByOutputTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerQueryJobByOutputTableResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerSaveDmrModelJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerSaveDmrModelJobResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerValidateJobRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerSaveDmrModelJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'modelTableId' => [ 'type' => 'integer', 'locationName' => 'modelTableId', ],
                'deleteFlag' => [ 'type' => 'integer', 'locationName' => 'deleteFlag', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameCh' => [ 'type' => 'string', 'locationName' => 'tableNameCh', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerGetMgrJobByJobNameResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerValidateJobRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'integer', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'projectNameMatch' => [ 'type' => 'boolean', 'locationName' => 'projectNameMatch', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'modelId' => [ 'type' => 'integer', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelNameMatch' => [ 'type' => 'boolean', 'locationName' => 'modelNameMatch', ],
                'gitUrl' => [ 'type' => 'string', 'locationName' => 'gitUrl', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'marketId' => [ 'type' => 'integer', 'locationName' => 'marketId', ],
                'marketCode' => [ 'type' => 'string', 'locationName' => 'marketCode', ],
                'marketName' => [ 'type' => 'string', 'locationName' => 'marketName', ],
                'redirectType' => [ 'type' => 'string', 'locationName' => 'redirectType', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameMatch' => [ 'type' => 'boolean', 'locationName' => 'tableNameMatch', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'GpdjmcTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'scriptContent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userAccount' => [ 'type' => 'string', 'locationName' => 'userAccount', ],
                'userPwd' => [ 'type' => 'string', 'locationName' => 'userPwd', ],
                'markIds' => [ 'type' => 'string', 'locationName' => 'markIds', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'dmrTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'dmrTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelDTO', ], ],
                'gitFilesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcGitFileDTO', ], ],
                'isDeploy' => [ 'type' => 'boolean', 'locationName' => 'isDeploy', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'runQueue' => [ 'type' => 'string', 'locationName' => 'runQueue', ],
                'sparkJarRunParams' =>  [ 'shape' => 'SparkJarRunParams', ],
                'submitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcConfPairStringString', ], ],
                'jobStatus' => [ 'type' => 'integer', 'locationName' => 'jobStatus', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'scriptUrl' => [ 'type' => 'string', 'locationName' => 'scriptUrl', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'datasourceId' => [ 'type' => 'string', 'locationName' => 'datasourceId', ],
                'inputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcInputParam', ], ],
                'outputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcOutputParam', ], ],
                'loopParam' =>  [ 'shape' => 'GpdjmcLoopParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerQueryJobByOutputTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerGetScriptInfoTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' =>  [ 'shape' => 'GpdjmcScriptInfoTypeDTO', ],
            ],
        ],
        'GravityParticleDubboJobManagerListJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerListJobResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeployJobEditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'projectId' => [ 'type' => 'integer', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
                'projectNameMatch' => [ 'type' => 'boolean', 'locationName' => 'projectNameMatch', ],
                'nameKeyWord' => [ 'type' => 'string', 'locationName' => 'nameKeyWord', ],
                'relationType' => [ 'type' => 'string', 'locationName' => 'relationType', ],
                'modelId' => [ 'type' => 'integer', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelNameMatch' => [ 'type' => 'boolean', 'locationName' => 'modelNameMatch', ],
                'gitUrl' => [ 'type' => 'string', 'locationName' => 'gitUrl', ],
                'tableId' => [ 'type' => 'integer', 'locationName' => 'tableId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'marketId' => [ 'type' => 'integer', 'locationName' => 'marketId', ],
                'marketCode' => [ 'type' => 'string', 'locationName' => 'marketCode', ],
                'marketName' => [ 'type' => 'string', 'locationName' => 'marketName', ],
                'redirectType' => [ 'type' => 'string', 'locationName' => 'redirectType', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableNameMatch' => [ 'type' => 'boolean', 'locationName' => 'tableNameMatch', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSystem' => [ 'type' => 'string', 'locationName' => 'jobSystem', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'triggerConfig' =>  [ 'shape' => 'GpdjmcTriggerConfigDTO', ],
                'zipCommand' => [ 'type' => 'string', 'locationName' => 'zipCommand', ],
                'zipFileName' => [ 'type' => 'string', 'locationName' => 'zipFileName', ],
                'zipParams' => [ 'type' => 'string', 'locationName' => 'zipParams', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'scriptContent' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'lifeCycle' => [ 'type' => 'string', 'locationName' => 'lifeCycle', ],
                'retry' => [ 'type' => 'boolean', 'locationName' => 'retry', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'notifyOccasion' => [ 'type' => 'string', 'locationName' => 'notifyOccasion', ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'notifyPattern' => [ 'type' => 'string', 'locationName' => 'notifyPattern', ],
                'notifier' => [ 'type' => 'string', 'locationName' => 'notifier', ],
                'startRunTime' => [ 'type' => 'string', 'locationName' => 'startRunTime', ],
                'endRunTime' => [ 'type' => 'string', 'locationName' => 'endRunTime', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'runDate' => [ 'type' => 'string', 'locationName' => 'runDate', ],
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'userAccount' => [ 'type' => 'string', 'locationName' => 'userAccount', ],
                'userPwd' => [ 'type' => 'string', 'locationName' => 'userPwd', ],
                'markIds' => [ 'type' => 'string', 'locationName' => 'markIds', ],
                'runTimeOut' => [ 'type' => 'integer', 'locationName' => 'runTimeOut', ],
                'scriptSourceType' => [ 'type' => 'string', 'locationName' => 'scriptSourceType', ],
                'scriptTemplate' => [ 'type' => 'string', 'locationName' => 'scriptTemplate', ],
                'dmrTableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'dmrTables' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelDTO', ], ],
                'gitFilesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcGitFileDTO', ], ],
                'isDeploy' => [ 'type' => 'boolean', 'locationName' => 'isDeploy', ],
                'scriptPath' => [ 'type' => 'string', 'locationName' => 'scriptPath', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'scriptInfo' => [ 'type' => 'string', 'locationName' => 'scriptInfo', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'runQueue' => [ 'type' => 'string', 'locationName' => 'runQueue', ],
                'sparkJarRunParams' =>  [ 'shape' => 'SparkJarRunParams', ],
                'submitConf' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcConfPairStringString', ], ],
                'jobStatus' => [ 'type' => 'integer', 'locationName' => 'jobStatus', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'fromGravity' => [ 'type' => 'boolean', 'locationName' => 'fromGravity', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'scriptUrl' => [ 'type' => 'string', 'locationName' => 'scriptUrl', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'datasourceId' => [ 'type' => 'string', 'locationName' => 'datasourceId', ],
                'inputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcInputParam', ], ],
                'outputParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcOutputParam', ], ],
                'loopParam' =>  [ 'shape' => 'GpdjmcLoopParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchDmrModelJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerSearchDmrModelJobResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeployJobEditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerDeployJobEditResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetScriptInfoTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerGetScriptInfoTypeResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchJobIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetEngineTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'jobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'fileId' => [ 'type' => 'integer', 'locationName' => 'fileId', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'publishDesc' => [ 'type' => 'string', 'locationName' => 'publishDesc', ],
                'manager' => [ 'type' => 'boolean', 'locationName' => 'manager', ],
                'jobManager' => [ 'type' => 'boolean', 'locationName' => 'jobManager', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerVerifyScriptFileResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerCalcJobDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerCalcJobDetailResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteJobScriptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerVerifyScriptFileListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerVerifyScriptFileListResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeleteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerDeleteJobResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerListJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcSchedJobDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerSearchByJobNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerSearchByJobNameResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerJobQueryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerJobQueryResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetJobScriptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleDubboJobManagerCalcJobDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' =>  [ 'shape' => 'GpdjmcCalcJobResultDTO', ],
            ],
        ],
        'GravityParticleDubboJobManagerJobQueryResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpdjmcDmrModelJobRDTO', ], ],
            ],
        ],
        'GravityParticleDubboJobManagerSaveJobScriptResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerSaveJobScriptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerSaveJobScriptResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerDeployJobEditResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetJobScriptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerGetJobScriptResultShape', ],
            ],
        ],
        'GravityParticleDubboJobManagerGetMgrJobByJobeResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GravityParticleDubboJobManagerValidateJobRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleDubboJobManagerValidateJobRulesResultShape', ],
            ],
        ],
        'GravityParticleOpenRerunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'jobIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleOpenRerunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleOpenRerunResultShape', ],
            ],
        ],
        'GravityParticleOpenRerunResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'JobRerunResult', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'JobRerunResult' => [
            'type' => 'structure',
            'members' => [
                'successJobIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedReasons' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobRerunFailedReason', ], ],
            ],
        ],
        'GravityParticleParticleJobGetRunInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobGetMgrJobInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobGetMgrJobInfoResultShape', ],
            ],
        ],
        'GravityParticleParticleJobGetRunInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmPageInfoJobRunInfoResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobListJobInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobListJobInstanceResultShape', ],
            ],
        ],
        'GravityParticleParticleJobJobCompletionInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobGetBasicInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobGetBasicInfoResultShape', ],
            ],
        ],
        'GravityParticleParticleJobListOperationRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmPageInfoMgrOperationRecords', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobGetJobTypeInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobGetJobTypeInfoResultShape', ],
            ],
        ],
        'GravityParticleParticleJobGetConditionInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjmConditionInfo', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobListJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmPageInfoListJobResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobGetJobTypeInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmJobTypeInfoDto', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobGetJobTypeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobListJobInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'statusList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'startTimeBefore' => [ 'type' => 'string', 'locationName' => 'startTimeBefore', ],
                'startTimeAfter' => [ 'type' => 'string', 'locationName' => 'startTimeAfter', ],
                'endTimeAfter' => [ 'type' => 'string', 'locationName' => 'endTimeAfter', ],
                'endTimeBefore' => [ 'type' => 'string', 'locationName' => 'endTimeBefore', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobListOperationRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobListOperationRecordResultShape', ],
            ],
        ],
        'GravityParticleParticleJobListJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobListJobResultShape', ],
            ],
        ],
        'GravityParticleParticleJobListJobInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmPageInfoListJobInstanceResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobGetConditionInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobGetConditionInfoResultShape', ],
            ],
        ],
        'GravityParticleParticleJobGetBasicInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmJobBasicInfoResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobListOperationRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobGetMgrJobInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobListJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'lastJobStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'excludeJobTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'marketJobsAll' => [ 'type' => 'string', 'locationName' => 'marketJobsAll', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'currentStatus' => [ 'type' => 'string', 'locationName' => 'currentStatus', ],
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'lastTxdate' => [ 'type' => 'string', 'locationName' => 'lastTxdate', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'jobStartRunTime' => [ 'type' => 'string', 'locationName' => 'jobStartRunTime', ],
                'jobEndRunTime' => [ 'type' => 'string', 'locationName' => 'jobEndRunTime', ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'updateTimeBefore' => [ 'type' => 'string', 'locationName' => 'updateTimeBefore', ],
                'updateTimeAfter' => [ 'type' => 'string', 'locationName' => 'updateTimeAfter', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'markClassifyCode' => [ 'type' => 'string', 'locationName' => 'markClassifyCode', ],
                'markName' => [ 'type' => 'string', 'locationName' => 'markName', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobGetRunInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobGetRunInfosResultShape', ],
            ],
        ],
        'GravityParticleParticleJobJobCompletionInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobJobCompletionInfoResultShape', ],
            ],
        ],
        'GravityParticleParticleJobGetBasicInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobJobCompletionInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmJobCompletionResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobGetMgrJobInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjmMgrJob', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobGetConditionInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobGetScriptExtensionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobGetScriptExtensionsResultShape', ],
            ],
        ],
        'GravityParticleChannelJobInfoDeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isDelSonJob' => [ 'type' => 'string', 'locationName' => 'isDelSonJob', ],
                'isDelQualityJob' => [ 'type' => 'string', 'locationName' => 'isDelQualityJob', ],
                'user_roles' => [ 'type' => 'string', 'locationName' => 'user_roles', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheForceRunJobInstRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'sessionId' => [ 'type' => 'integer', 'locationName' => 'sessionId', ],
                'isCleanBeforeInst' => [ 'type' => 'string', 'locationName' => 'isCleanBeforeInst', ],
                'system' => [ 'type' => 'string', 'locationName' => 'system', ],
                'isComplement' => [ 'type' => 'string', 'locationName' => 'isComplement', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleChannelJobInfoDeleteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleChannelJobInfoDeleteJobResultShape', ],
            ],
        ],
        'GravityParticleJobscheProcessJobExeRstResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobscheProcessJobExeRstResultShape', ],
            ],
        ],
        'GravityParticleJobGetScriptExtensionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpjsScriptExtensionDto', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheIsUpstreamSameFrequencyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'dependJobName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheForceRunJobInstResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobscheForceRunJobInstResultShape', ],
            ],
        ],
        'GravityParticleJobscheForceRunJobInstResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjsSchedQueuePendingDto', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheSetJobEnableFlagResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobscheSetJobEnableFlagResultShape', ],
            ],
        ],
        'GravityParticleChannelJobInfoDeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheProcessJobExeRstResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheIsUpstreamSameFrequencyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobscheIsUpstreamSameFrequencyResultShape', ],
            ],
        ],
        'GravityParticleJobscheResetJobInstStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheResetJobInstStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheSetJobEnableFlagRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enableFlag' => [ 'type' => 'string', 'locationName' => 'enableFlag', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheIsUpstreamSameFrequencyResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobGetScriptExtensionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clusterCode' => [ 'type' => 'string', 'locationName' => 'clusterCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheReRunJobInstResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpjsSchedQueuePendingDto', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheReRunJobInstRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'sessionId' => [ 'type' => 'integer', 'locationName' => 'sessionId', ],
                'isCleanBeforeInst' => [ 'type' => 'string', 'locationName' => 'isCleanBeforeInst', ],
                'system' => [ 'type' => 'string', 'locationName' => 'system', ],
                'isComplement' => [ 'type' => 'string', 'locationName' => 'isComplement', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheSetJobEnableFlagResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobscheProcessJobExeRstRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'sessionId' => [ 'type' => 'integer', 'locationName' => 'sessionId', ],
                'serverName' => [ 'type' => 'string', 'locationName' => 'serverName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'jobStatus' => [ 'type' => 'string', 'locationName' => 'jobStatus', ],
                'returnCode' => [ 'type' => 'integer', 'locationName' => 'returnCode', ],
                'affectRows' => [ 'type' => 'long', 'locationName' => 'affectRows', ],
                'warningCode' => [ 'type' => 'integer', 'locationName' => 'warningCode', ],
                'pids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobscheReRunJobInstResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobscheReRunJobInstResultShape', ],
            ],
        ],
        'GravityParticleJobscheResetJobInstStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobscheResetJobInstStatusResultShape', ],
            ],
        ],
        'GravityParticleParticleModelCalcListJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmdSchedJobDTO', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleModelCalcCalcJobDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleModelCalcCalcJobDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleModelCalcCalcJobDetailResultShape', ],
            ],
        ],
        'GravityParticleParticleModelCalcListJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleModelCalcListJobResultShape', ],
            ],
        ],
        'GravityParticleParticleModelCalcCalcJobDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpmdCalcJobResultDTO', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleModelCalcListJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnPieData', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobUnsuccessRankingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'num' => [ 'type' => 'string', 'locationName' => 'num', ],
                'slot' => [ 'type' => 'integer', 'locationName' => 'slot', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobStatusCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobSuccessCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobSuccessCountResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobTypeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobTypeListResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobDispatchTrendResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobDispatchTrendResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobSpendTimeRankingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobSpendTimeRankingResultShape', ],
            ],
        ],
        'GravityParticleParticleJobMonitorJobStatusCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpmnWorkTableJobStatusDto', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobFailCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobFailCountResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobUnsuccessRankingResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnJobUnsuccessRankingVo', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobSpendTimeRankingResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnJobSpendTimeRankingVo', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobCountInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobCountInfoResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobFailCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobTypeCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobTypeCountResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobDispatchTrendRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'dimType' => [ 'type' => 'string', 'locationName' => 'dimType', ],
                'slot' => [ 'type' => 'integer', 'locationName' => 'slot', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobCountInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobSpendTimeRankingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'num' => [ 'type' => 'string', 'locationName' => 'num', ],
                'slot' => [ 'type' => 'integer', 'locationName' => 'slot', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobStatusCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobStatusCountResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobTypeCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobSuccessCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpmnLineDataVo', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobDispatchTrendResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpmnLineStringDataVo', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobUnsuccessRankingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleJobMonitorJobUnsuccessRankingResultShape', ],
            ],
        ],
        'GravityParticleJobMonitorJobTypeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnPieData', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobFailCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnPieData', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobTypeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobSuccessCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isMine' => [ 'type' => 'boolean', 'locationName' => 'isMine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleJobMonitorJobStatusCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpmnPieData', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleJobMonitorJobCountInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpmnJobCountDto', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobMonitorJobStatusCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobMonitorJobStatusCountResultShape', ],
            ],
        ],
        'GravityParticleParticleJobMonitorJobStatusCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'processType' => [ 'type' => 'string', 'locationName' => 'processType', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleSchedDictGetByTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleSchedDictGetByTypeResultShape', ],
            ],
        ],
        'GravityParticleSchedDictGetJobTypeRResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsdSchedDictRelationDto', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleSchedDictGetJobTypeRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleSchedDictGetJobTypeRResultShape', ],
            ],
        ],
        'GravityParticleSchedDictGetByTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsdalueDict', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleSchedDictGetByTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'dictCode' => [ 'type' => 'string', 'locationName' => 'dictCode', ],
                'pDictCode' => [ 'type' => 'string', 'locationName' => 'pDictCode', ],
                'dictName' => [ 'type' => 'string', 'locationName' => 'dictName', ],
                'dictSort' => [ 'type' => 'integer', 'locationName' => 'dictSort', ],
                'dictBak' => [ 'type' => 'string', 'locationName' => 'dictBak', ],
                'dictDesc' => [ 'type' => 'string', 'locationName' => 'dictDesc', ],
                'isValid' => [ 'type' => 'string', 'locationName' => 'isValid', ],
                'isDel' => [ 'type' => 'string', 'locationName' => 'isDel', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'modifiedTime' => [ 'type' => 'string', 'locationName' => 'modifiedTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleSchedDictGetJobTypeRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedReuseJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedForceJobBatchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedForceJobBatchResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedGetSchedJobInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedGetSchedJobInfoResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedGetRunLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedGetRunLogResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedUpdateSchedJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedKillJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedReuseJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedReuseJobResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedCancelJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedCancelJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedCancelJobResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedResetStsDoneResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedResetStsDoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedResetStsDoneResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedReuseJobWithDependRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedReuseJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedKillJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedKillJobResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedUpdateSchedJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedUpdateSchedJobResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedGetRunLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSessionId' => [ 'type' => 'string', 'locationName' => 'jobSessionId', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedReuseJobWithDependResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedCancelJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedResetStsDoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'arrayObjectParam' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsmResetJobInstReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedKillJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedGetSchedJobInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedGetRunLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpsmOpenApiResponsePageInfoObject', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedReuseJobWithDependResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleParticleJobSchedReuseJobWithDependResultShape', ],
            ],
        ],
        'GravityParticleParticleJobSchedForceJobBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpsmJobNameDTO', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleParticleJobSchedForceJobBatchResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedGetSchedJobInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' =>  [ 'shape' => 'GpsmJobAllqueryInfoDto', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'GravityParticleParticleJobSchedUpdateSchedJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'jobDesc' => [ 'type' => 'string', 'locationName' => 'jobDesc', ],
                'lastStatus' => [ 'type' => 'string', 'locationName' => 'lastStatus', ],
                'lastTxDate' => [ 'type' => 'string', 'locationName' => 'lastTxDate', ],
                'lastStartTime' => [ 'type' => 'string', 'locationName' => 'lastStartTime', ],
                'lastEndTime' => [ 'type' => 'string', 'locationName' => 'lastEndTime', ],
                'lastServer' => [ 'type' => 'string', 'locationName' => 'lastServer', ],
                'lastSessionid' => [ 'type' => 'integer', 'locationName' => 'lastSessionid', ],
                'lastReturnCode' => [ 'type' => 'integer', 'locationName' => 'lastReturnCode', ],
                'currentStatusMsg' => [ 'type' => 'string', 'locationName' => 'currentStatusMsg', ],
                'triggerType' => [ 'type' => 'string', 'locationName' => 'triggerType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'sequence' => [ 'type' => 'string', 'locationName' => 'sequence', ],
                'txDateOffset' => [ 'type' => 'integer', 'locationName' => 'txDateOffset', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'windowStartTime' => [ 'type' => 'string', 'locationName' => 'windowStartTime', ],
                'windowEndTime' => [ 'type' => 'string', 'locationName' => 'windowEndTime', ],
                'morrowAutoExec' => [ 'type' => 'string', 'locationName' => 'morrowAutoExec', ],
                'dataZeroKillEnable' => [ 'type' => 'integer', 'locationName' => 'dataZeroKillEnable', ],
                'retryCount' => [ 'type' => 'integer', 'locationName' => 'retryCount', ],
                'retryInterval' => [ 'type' => 'integer', 'locationName' => 'retryInterval', ],
                'flagAgain' => [ 'type' => 'string', 'locationName' => 'flagAgain', ],
                'flagAcross' => [ 'type' => 'string', 'locationName' => 'flagAcross', ],
                'flagParallel' => [ 'type' => 'string', 'locationName' => 'flagParallel', ],
                'flagCascadedTrigger' => [ 'type' => 'string', 'locationName' => 'flagCascadedTrigger', ],
                'requiredRunEnv' => [ 'type' => 'string', 'locationName' => 'requiredRunEnv', ],
                'runScript' => [ 'type' => 'string', 'locationName' => 'runScript', ],
                'enable' => [ 'type' => 'string', 'locationName' => 'enable', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'shareUser' => [ 'type' => 'string', 'locationName' => 'shareUser', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'commands' => [ 'type' => 'string', 'locationName' => 'commands', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'jobRunWay' => [ 'type' => 'string', 'locationName' => 'jobRunWay', ],
                'belongSys' => [ 'type' => 'string', 'locationName' => 'belongSys', ],
                'msDelayDealWay' => [ 'type' => 'string', 'locationName' => 'msDelayDealWay', ],
                'sequenceStartTime' => [ 'type' => 'string', 'locationName' => 'sequenceStartTime', ],
                'sequenceEndTime' => [ 'type' => 'string', 'locationName' => 'sequenceEndTime', ],
                'sequenceInterval' => [ 'type' => 'integer', 'locationName' => 'sequenceInterval', ],
                'runParams' => [ 'type' => 'string', 'locationName' => 'runParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleConfigUserMatchUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GravityParticleConfigUserMatchUserResultShape', ],
            ],
        ],
        'GravityParticleConfigUserMatchUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userCode' => [ 'type' => 'string', 'locationName' => 'userCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'GravityParticleConfigUserMatchUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuserMatchUserResDto', ], ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                '_REQ_SEQ_NO_' => [ 'type' => 'string', 'locationName' => '_REQ_SEQ_NO_', ],
            ],
        ],
        'ManageHubDutyListRosterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'RosterVo', ], ],
            ],
        ],
        'ManageHubDutyUpdateRosterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubDutyUpdateRosterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubDutyUpdateRosterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rosterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RosterDO', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubDutyListRosterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubDutyUpdateRosterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubDutyListRosterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubDutyListRosterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubDutyUpdateWatchmanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubDutyUpdateWatchmanResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubDutyUpdateWatchmanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubDutyAddWatchmanResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubDutyAddWatchmanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubDutyDeleteWatchmanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubDutyDeleteWatchmanResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubDutyDeleteWatchmanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubDutyAddWatchmanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubDutyAddWatchmanResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubDutyListWatchmanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubDutyDeleteWatchmanResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubDutyUpdateWatchmanResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubDutyListWatchmanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubDutyListWatchmanResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubDutyListWatchmanResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'WatchmanVo', ], ],
            ],
        ],
        'ManageHubGravityJobParentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobPropertyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobPropertyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobChildRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoString', ],
            ],
        ],
        'ManageHubGravityJobLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobRunHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobRunHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobRunHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobChildResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobChildResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobPropertyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobParentResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJobRelationVo', ],
            ],
        ],
        'ManageHubGravityJobRunHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJobRunHistoryVo', ],
            ],
        ],
        'ManageHubGravityJobOperateHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobOperateHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'jobSessionId' => [ 'type' => 'string', 'locationName' => 'jobSessionId', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobPropertyResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JobPropertyVo', ],
            ],
        ],
        'ManageHubGravityJobOperateHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobOperateHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJobOperateHistoryVo', ],
            ],
        ],
        'ManageHubGravityJobParentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobParentResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobChildResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJobRelationVo', ],
            ],
        ],
        'ManageHubGravityListJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJobInfoVo', ],
            ],
        ],
        'ManageHubGravityListJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'managerPin' => [ 'type' => 'string', 'locationName' => 'managerPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'updateTimeAfter' => [ 'type' => 'string', 'locationName' => 'updateTimeAfter', ],
                'updateTimeBefore' => [ 'type' => 'string', 'locationName' => 'updateTimeBefore', ],
                'jobStartRunTime' => [ 'type' => 'string', 'locationName' => 'jobStartRunTime', ],
                'jobEndRunTime' => [ 'type' => 'string', 'locationName' => 'jobEndRunTime', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'jobChildType' => [ 'type' => 'string', 'locationName' => 'jobChildType', ],
                'lastJobStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lastTxdate' => [ 'type' => 'string', 'locationName' => 'lastTxdate', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'queryMode' => [ 'type' => 'string', 'locationName' => 'queryMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JobTypeVo', ],
            ],
        ],
        'ManageHubGravityResetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'arrayObjectParam' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobResetDO', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityKillResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubGravityResetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityResetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityRerunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityRerunResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityRerunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobNameDO', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityJobTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityKillResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityKillResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityListJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityListJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityJobTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityJobTypeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityKillRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityRerunResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubGravityResetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubGravityOneClickRerunTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityOneClickRerunTasksResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityOneClickRerunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityOneClickRerunResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityListTxDateStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityListTxDateStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityOneClickRerunBatchesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoRerunBatchVo', ],
            ],
        ],
        'ManageHubGravityOneClickRerunBatchesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityOneClickRerunBatchesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityListTxDateStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'managerPin' => [ 'type' => 'string', 'locationName' => 'managerPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStartAfterTime' => [ 'type' => 'string', 'locationName' => 'jobStartAfterTime', ],
                'jobStartBeforeTime' => [ 'type' => 'string', 'locationName' => 'jobStartBeforeTime', ],
                'jobEndAfterTime' => [ 'type' => 'string', 'locationName' => 'jobEndAfterTime', ],
                'jobEndBeforeTime' => [ 'type' => 'string', 'locationName' => 'jobEndBeforeTime', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityOneClickRerunPreviewResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OneClickRerunPreviewVo', ],
            ],
        ],
        'ManageHubGravityOneClickRerunTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'batchId' => [ 'type' => 'integer', 'locationName' => 'batchId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityOneClickRerunPreviewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'managerPin' => [ 'type' => 'string', 'locationName' => 'managerPin', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'cstJobName' => [ 'type' => 'string', 'locationName' => 'cstJobName', ],
                'txDate' => [ 'type' => 'string', 'locationName' => 'txDate', ],
                'jobStartAfterTime' => [ 'type' => 'string', 'locationName' => 'jobStartAfterTime', ],
                'jobStartBeforeTime' => [ 'type' => 'string', 'locationName' => 'jobStartBeforeTime', ],
                'jobEndAfterTime' => [ 'type' => 'string', 'locationName' => 'jobEndAfterTime', ],
                'jobEndBeforeTime' => [ 'type' => 'string', 'locationName' => 'jobEndBeforeTime', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'cycle' => [ 'type' => 'string', 'locationName' => 'cycle', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityOneClickRerunBatchesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'operateTimeAfter' => [ 'type' => 'long', 'locationName' => 'operateTimeAfter', ],
                'operateTimeBefore' => [ 'type' => 'long', 'locationName' => 'operateTimeBefore', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityOneClickRerunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filterParam' =>  [ 'shape' => 'ListTxDateStatusParam', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubGravityOneClickRerunResubmitResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubGravityOneClickRerunResubmitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityOneClickRerunResubmitResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityOneClickRerunTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoRerunTaskVo', ],
            ],
        ],
        'ManageHubGravityOneClickRerunPreviewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubGravityOneClickRerunPreviewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubGravityListTxDateStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJobTxDateStatusVo', ],
            ],
        ],
        'ManageHubGravityOneClickRerunResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ManageHubGravityOneClickRerunResubmitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'integer', 'locationName' => 'taskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubStorageTableDDLResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'ManageHubStorageTableDDLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubStoragePartitionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubStorageDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoStorageSpaceUsedDetailVo', ],
            ],
        ],
        'ManageHubStorageIncrementResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubStorageIncrementResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubStorageSummaryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JcwSpaceSummaryVo', ],
            ],
        ],
        'ManageHubStorageSummaryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubStorageSummaryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubStoragePartitionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageVoJcwSpacePartUsedVo', ],
            ],
        ],
        'ManageHubStorageSummaryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubStorageIncrementRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubStorageTableDDLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubStorageTableDDLResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JcwSpaceDetailRequest' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'objectType' => [ 'type' => 'string', 'locationName' => 'objectType', ],
                'orderFieldType' => [ 'type' => 'string', 'locationName' => 'orderFieldType', ],
                'orderType' => [ 'type' => 'string', 'locationName' => 'orderType', ],
            ],
        ],
        'ManageHubStorageDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubStorageDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubStoragePartitionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManageHubStoragePartitionListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManageHubStorageDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'objectType' => [ 'type' => 'string', 'locationName' => 'objectType', ],
                'orderFieldType' => [ 'type' => 'string', 'locationName' => 'orderFieldType', ],
                'orderType' => [ 'type' => 'string', 'locationName' => 'orderType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ManageHubStorageIncrementResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'JcwSpaceIncreUsedByDayVo', ],
            ],
        ],
        'PreviewPackageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'PreviewPackageVo', ], ],
            ],
        ],
        'DeletePublishObjResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePublishObjResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PackagePublishObjResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PackagePublishObjResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePublishObjsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'objUk' => [ 'type' => 'string', 'locationName' => 'objUk', ],
                'objName' => [ 'type' => 'string', 'locationName' => 'objName', ],
                'objTypeCode' => [ 'type' => 'string', 'locationName' => 'objTypeCode', ],
                'objChangeTypeCode' => [ 'type' => 'string', 'locationName' => 'objChangeTypeCode', ],
                'submitterPin' => [ 'type' => 'string', 'locationName' => 'submitterPin', ],
                'submitTimeStart' => [ 'type' => 'long', 'locationName' => 'submitTimeStart', ],
                'submitTimeEnd' => [ 'type' => 'long', 'locationName' => 'submitTimeEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PreviewPackageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PreviewPackageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePublishObjsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePublishObjsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PackagePublishObjRequestShape' => [
            'type' => 'structure',
            'members' => [
                'objIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribePublishObjRequestShape' => [
            'type' => 'structure',
            'members' => [
                'objId' => [ 'type' => 'long', 'locationName' => 'objId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PreviewPackageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'objIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribePublishObjsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PublishObjPageVo', ],
            ],
        ],
        'PackagePublishObjResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeletePublishObjResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribePublishObjResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePublishObjResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePublishObjRequestShape' => [
            'type' => 'structure',
            'members' => [
                'objIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribePublishObjResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PublishObjDetailVo', ],
            ],
        ],
        'DescribePublishPkgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pkgId' => [ 'type' => 'long', 'locationName' => 'pkgId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribePublishPkgsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pkgName' => [ 'type' => 'string', 'locationName' => 'pkgName', ],
                'pkgId' => [ 'type' => 'long', 'locationName' => 'pkgId', ],
                'publisher' => [ 'type' => 'string', 'locationName' => 'publisher', ],
                'pkgStatus' => [ 'type' => 'string', 'locationName' => 'pkgStatus', ],
                'pkgPublishTimeStart' => [ 'type' => 'long', 'locationName' => 'pkgPublishTimeStart', ],
                'pkgPublishTimeEnd' => [ 'type' => 'long', 'locationName' => 'pkgPublishTimeEnd', ],
                'pkgCreator' => [ 'type' => 'string', 'locationName' => 'pkgCreator', ],
                'pkgCreateTimeStart' => [ 'type' => 'long', 'locationName' => 'pkgCreateTimeStart', ],
                'pkgCreateTimeEnd' => [ 'type' => 'long', 'locationName' => 'pkgCreateTimeEnd', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'DescribePublishPkgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePublishPkgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePublishPkgsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePublishPkgsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePublishPkgResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PublishPkgDetailVo', ],
            ],
        ],
        'PublishPkgResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeletePublishPkgResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeletePublishPkgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pkgIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'PublishPkgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PublishPkgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePublishPkgsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PublishPkgPageVo', ],
            ],
        ],
        'DeletePublishPkgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePublishPkgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PublishPkgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pkgIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusQueryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusQueryListResultShape', ],
            ],
        ],
        'UranusQueryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusCatalogInfoList', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusCatalogDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusCatalogQueryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusCatalogInfoCode', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusCatalogSaveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusCatalogSaveResultShape', ],
            ],
        ],
        'UranusCatalogUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusCatalogUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'unrealId' => [ 'type' => 'string', 'locationName' => 'unrealId', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'catalogType' => [ 'type' => 'integer', 'locationName' => 'catalogType', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'childrenNum' => [ 'type' => 'integer', 'locationName' => 'childrenNum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusCatalogDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusCatalogDeleteResultShape', ],
            ],
        ],
        'UranusCatalogSaveResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusCatalogDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusQueryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusCatalogUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusCatalogUpdateResultShape', ],
            ],
        ],
        'UranusCatalogSaveRequestShape' => [
            'type' => 'structure',
            'members' => [
                'catalogName' => [ 'type' => 'string', 'locationName' => 'catalogName', ],
                'catalogType' => [ 'type' => 'integer', 'locationName' => 'catalogType', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusCatalogQueryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusCatalogQueryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusCatalogQueryListResultShape', ],
            ],
        ],
        'UranusTableDataDownloadResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableDataDownloadResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UranusTableDataDownloadResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'UranusTableDataDownloadRequestShape' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableDataLoadResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'UranusDataLoadLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusDataLoadLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UranusDataLoadHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusDataLoadHistoryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UranusTableDataLoadRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileKey' => [ 'type' => 'string', 'locationName' => 'fileKey', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'delimiter' => [ 'type' => 'string', 'locationName' => 'delimiter', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'projectEnv' => [ 'type' => 'string', 'locationName' => 'projectEnv', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'partitionInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'PartitionInfo', ], ],
                'importStrategy' => [ 'type' => 'string', 'locationName' => 'importStrategy', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDataLoadHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'states' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDataLoadLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'applicationId' => [ 'type' => 'string', 'locationName' => 'applicationId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDataLoadPreviewResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'Row', ], ],
            ],
        ],
        'UranusDataLoadPreviewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'fileKey' => [ 'type' => 'string', 'locationName' => 'fileKey', ],
                'delimiter' => [ 'type' => 'string', 'locationName' => 'delimiter', ],
                'startRow' => [ 'type' => 'integer', 'locationName' => 'startRow', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDataLoadHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'DataLoadHistoryResult', ],
            ],
        ],
        'UranusDataLoadKillResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DataLoadHistoryResult' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataLoadHistory', ], ],
            ],
        ],
        'UranusTableDataLoadResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableDataLoadResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UranusDataLoadKillResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusDataLoadKillResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UranusDataLoadKillRequestShape' => [
            'type' => 'structure',
            'members' => [
                'applicationId' => [ 'type' => 'string', 'locationName' => 'applicationId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDataLoadLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UranusDataLoadPreviewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusDataLoadPreviewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UranusDictTableCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusDictVO', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusDictQuerySysParamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDictQuerySysParamResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'QueryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryListResultShape', ],
            ],
        ],
        'UranusDictTableCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusDictTableCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusDictTableCodeResultShape', ],
            ],
        ],
        'QueryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pDictCode' => [ 'type' => 'string', 'locationName' => 'pDictCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'QueryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusDictRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusDictQuerySysParamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusDictQuerySysParamResultShape', ],
            ],
        ],
        'UranusExtraRunnerResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'integer', 'locationName' => 'runId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusExtraRunnerStopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusExtraRunnerStopResultShape', ],
            ],
        ],
        'UranusExtraRunnerResultListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'integer', 'locationName' => 'runId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusExtraRunnerStartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'execEngine' => [ 'type' => 'string', 'locationName' => 'execEngine', ],
                'args' =>  [ 'shape' => 'UranusTaskParamReq', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusExtraRunnerResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusExtraRunnerParamParseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusExtraRunnerParamParseResultShape', ],
            ],
        ],
        'UranusExtraRunnerResultListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusExtraRunnerStopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'integer', 'locationName' => 'runId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusExtraRunnerParamParseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'simDate' => [ 'type' => 'string', 'locationName' => 'simDate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusExtraRunnerStartResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusExtraRunnerStopResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusExtraRunnerResultListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusExtraRunnerResultListResultShape', ],
            ],
        ],
        'UranusExtraRunnerResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusExtraRunnerResultResultShape', ],
            ],
        ],
        'UranusExtraRunnerStartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusExtraRunnerStartResultShape', ],
            ],
        ],
        'UranusExtraRunnerParamParseResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusQueryJarManagementTreeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusQueryJarManagementTreeResultShape', ],
            ],
        ],
        'UranusQueryJarManagementTreeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isDir' => [ 'type' => 'integer', 'locationName' => 'isDir', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusQueryFileTreeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusQueryFileTreeResultShape', ],
            ],
        ],
        'UranusQueryJarManagementTreeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusSparkJarManagerRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusQueryFileTreeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'isDir' => [ 'type' => 'integer', 'locationName' => 'isDir', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusQueryFileTreeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusFileManagerRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceGetBriefByPrefixResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceGetBriefByPrefixResultShape', ],
            ],
        ],
        'UranusResourceStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceStatusResultShape', ],
            ],
        ],
        'UranusResourceCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'originalName' => [ 'type' => 'string', 'locationName' => 'originalName', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'relativeEngine' => [ 'type' => 'string', 'locationName' => 'relativeEngine', ],
                'uploadMode' => [ 'type' => 'string', 'locationName' => 'uploadMode', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceDownloadUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceListDirectoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceCloseFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceCloseFileResultShape', ],
            ],
        ],
        'UranusResourceListDirectoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceGetDetailByPrefixResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceAppendFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourcePublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceCloseFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceListRootRequestShape' => [
            'type' => 'structure',
            'members' => [
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceListRootResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceCloseFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'sliceTotal' => [ 'type' => 'integer', 'locationName' => 'sliceTotal', ],
                'md5code' => [ 'type' => 'string', 'locationName' => 'md5code', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceListDirectoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceListDirectoryResultShape', ],
            ],
        ],
        'UranusResourceListRootResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceListRootResourcesResultShape', ],
            ],
        ],
        'UranusResourceGetDetailByPrefixResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceGetDetailByPrefixResultShape', ],
            ],
        ],
        'UranusResourceListRootResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceListRootResultShape', ],
            ],
        ],
        'UranusResourcePublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceAppendFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceListRootResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceGetBriefByCodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'ResourceBriefInfoVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceGetBriefByCodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceGetBriefByCodesResultShape', ],
            ],
        ],
        'UranusResourceGetDetailByPrefixRequestShape' => [
            'type' => 'structure',
            'members' => [
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceAppendFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceAppendFileResultShape', ],
            ],
        ],
        'UranusResourceDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceGetBriefByPrefixResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'ResourceBriefInfoVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceListRootResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceGetBriefByPrefixRequestShape' => [
            'type' => 'structure',
            'members' => [
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourcePublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourcePublishResultShape', ],
            ],
        ],
        'UranusResourceStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceCreateResultShape', ],
            ],
        ],
        'UranusResourceUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceUpdateResultShape', ],
            ],
        ],
        'UranusResourceGetBriefByCodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusResourceVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceDownloadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusResourceDownloadUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceDownloadUrlResultShape', ],
            ],
        ],
        'UranusResourceUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'originalName' => [ 'type' => 'string', 'locationName' => 'originalName', ],
                'uploadMode' => [ 'type' => 'string', 'locationName' => 'uploadMode', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusResourceDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusResourceDeleteResultShape', ],
            ],
        ],
        'UranusScriptStopRequestShape' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'long', 'locationName' => 'runId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptGetScriptRunResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptStartersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'dataSourceCode' => [ 'type' => 'string', 'locationName' => 'dataSourceCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'execEngine' => [ 'type' => 'string', 'locationName' => 'execEngine', ],
                'args' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'segment' => [ 'type' => 'boolean', 'locationName' => 'segment', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'loopInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfoLoopReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptStartersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptGetScriptRunResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptGetScriptRunResultResultShape', ],
            ],
        ],
        'UranusScriptGetScriptRunResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'pos' => [ 'type' => 'long', 'locationName' => 'pos', ],
                'lines' => [ 'type' => 'long', 'locationName' => 'lines', ],
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptGetScriptRunResultListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptSyntaxCheckResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptSyntaxCheckResultShape', ],
            ],
        ],
        'UranusScriptGetScriptRunResultListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'pos' => [ 'type' => 'long', 'locationName' => 'pos', ],
                'lines' => [ 'type' => 'long', 'locationName' => 'lines', ],
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptSyntaxCheckResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptStopResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptStopResultShape', ],
            ],
        ],
        'UranusScriptStopResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptGetScriptRunResultListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptGetScriptRunResultListResultShape', ],
            ],
        ],
        'UranusScriptSyntaxCheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'dataSourceCode' => [ 'type' => 'string', 'locationName' => 'dataSourceCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'execEngine' => [ 'type' => 'string', 'locationName' => 'execEngine', ],
                'args' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'segment' => [ 'type' => 'boolean', 'locationName' => 'segment', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceCode' => [ 'type' => 'string', 'locationName' => 'resourceCode', ],
                'loopInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfoLoopReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptStartersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptStartersResultShape', ],
            ],
        ],
        'UranusScriptVerifyScriptFileDependResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusSchedJobDTO', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptRunLogLogContentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptRunLogLogContentResultShape', ],
            ],
        ],
        'UranusScriptQueryParamsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'sysType' => [ 'type' => 'string', 'locationName' => 'sysType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptParamsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptQueryParamsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptRunLogDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptRunLogContentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptRunLogContentResultShape', ],
            ],
        ],
        'UranusScriptRunLogContentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptRunLogContentResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptRunLogListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'statusList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTimeFrom' => [ 'type' => 'string', 'locationName' => 'startTimeFrom', ],
                'startTimeTo' => [ 'type' => 'string', 'locationName' => 'startTimeTo', ],
                'endTimeFrom' => [ 'type' => 'string', 'locationName' => 'endTimeFrom', ],
                'endTimeTo' => [ 'type' => 'string', 'locationName' => 'endTimeTo', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptRunLogListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusPageResultContentScriptRunLogRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptParamsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptParamsResultShape', ],
            ],
        ],
        'UranusScriptSaveContentResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptSaveContentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptSaveContentResultShape', ],
            ],
        ],
        'UranusScriptRunLogDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusScriptRunLogRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptQueriesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptVerifyScriptFileDependRequestShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'scriptName' => [ 'type' => 'string', 'locationName' => 'scriptName', ],
                'scriptByte' => [ 'type' => 'list', 'member' => [ 'type' => 'byte', ], ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'dependencies' => [ 'type' => 'string', 'locationName' => 'dependencies', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'targetTables' => [ 'type' => 'string', 'locationName' => 'targetTables', ],
                'saveRelFlag' => [ 'type' => 'string', 'locationName' => 'saveRelFlag', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptRunLogListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptRunLogListResultShape', ],
            ],
        ],
        'UranusScriptQueryParamsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptQueryParamsResultShape', ],
            ],
        ],
        'UranusScriptQueriesResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptRunLogDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptRunLogDetailResultShape', ],
            ],
        ],
        'UranusScriptRunLogLogContentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptQueriesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptQueriesResultShape', ],
            ],
        ],
        'UranusScriptParamsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptSaveContentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
                'lockUser' => [ 'type' => 'string', 'locationName' => 'lockUser', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusScriptRunLogLogContentResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusScriptVerifyScriptFileDependResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusScriptVerifyScriptFileDependResultShape', ],
            ],
        ],
        'UranusTableDdlAnalyzeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableDdlAnalyzeResultShape', ],
            ],
        ],
        'UranusTableAlterSqlViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableAlterSqlViewResultShape', ],
            ],
        ],
        'UranusTablePublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableEnName' => [ 'type' => 'string', 'locationName' => 'tableEnName', ],
                'tableCnName' => [ 'type' => 'string', 'locationName' => 'tableCnName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'partitions' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'isPartition' => [ 'type' => 'integer', 'locationName' => 'isPartition', ],
                'updateTable' => [ 'type' => 'integer', 'locationName' => 'updateTable', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'fieldDelim' => [ 'type' => 'string', 'locationName' => 'fieldDelim', ],
                'lineDelim' => [ 'type' => 'string', 'locationName' => 'lineDelim', ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableDdlAnalyzeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTableSaveOrUpdate', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableCheckTableNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableCheckTableNameResultShape', ],
            ],
        ],
        'UranusTableColumnResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableColumnResultShape', ],
            ],
        ],
        'UranusTableDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableDeleteResultShape', ],
            ],
        ],
        'UranusTablePublishToPublishCenterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTablePublishToPublishCenterResultShape', ],
            ],
        ],
        'UranusTablePublishToPublishCenterResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableDelimitersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableDelimitersResultShape', ],
            ],
        ],
        'UranusTableDDLResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableCheckTableNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableDdlAnalyzeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sqlContent' => [ 'type' => 'string', 'locationName' => 'sqlContent', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableColumnResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTableQuery', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTablePublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTablePublishResultShape', ],
            ],
        ],
        'UranusTableDDLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableAlterSqlViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableUnpublishedInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableDDLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableDDLResultShape', ],
            ],
        ],
        'UranusTableLikeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableLike' => [ 'type' => 'string', 'locationName' => 'tableLike', ],
                'auth' => [ 'type' => 'integer', 'locationName' => 'auth', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'diff' => [ 'type' => 'integer', 'locationName' => 'diff', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableUnpublishedInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableLikeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableLikeResultShape', ],
            ],
        ],
        'UranusTableDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTablePublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableDelimitersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableCheckTableNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableDelimitersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'TableDelimitersVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableUnpublishedInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTableUnpublishedInfoResultShape', ],
            ],
        ],
        'UranusTableLikeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableBriefInfo', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTableColumnRequestShape' => [
            'type' => 'structure',
            'members' => [
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTablePublishToPublishCenterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTableAlterSqlViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableEnName' => [ 'type' => 'string', 'locationName' => 'tableEnName', ],
                'tableCnName' => [ 'type' => 'string', 'locationName' => 'tableCnName', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'partitions' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusColumnSaveOrUpdate', ], ],
                'isPartition' => [ 'type' => 'integer', 'locationName' => 'isPartition', ],
                'updateTable' => [ 'type' => 'integer', 'locationName' => 'updateTable', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'fieldDelim' => [ 'type' => 'string', 'locationName' => 'fieldDelim', ],
                'lineDelim' => [ 'type' => 'string', 'locationName' => 'lineDelim', ],
                'bucketCols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bucketNum' => [ 'type' => 'integer', 'locationName' => 'bucketNum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowSaveResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowSaveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowSaveResultShape', ],
            ],
        ],
        'UranusTaskFlowDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowListTreeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowDetailResultShape', ],
            ],
        ],
        'UranusTaskFlowCheckResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowCheckResultShape', ],
            ],
        ],
        'UranusTaskFlowListTreeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowListTreeResultShape', ],
            ],
        ],
        'UranusTaskFlowQueryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowQueryListResultShape', ],
            ],
        ],
        'UranusTaskFlowCheckResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowSaveRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'flowDesc' => [ 'type' => 'string', 'locationName' => 'flowDesc', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'workers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowDeleteResultShape', ],
            ],
        ],
        'UranusTaskFlowUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'flowDesc' => [ 'type' => 'string', 'locationName' => 'flowDesc', ],
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'workers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowQueryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskFlowDetailRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowCheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowName' => [ 'type' => 'string', 'locationName' => 'flowName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowListTreeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskFlowListRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskFlowDetailRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowCollectionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskFlowCollectionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'collectionType' => [ 'type' => 'integer', 'locationName' => 'collectionType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowCollectionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowCollectionResultShape', ],
            ],
        ],
        'UranusTaskFlowQueryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'catalogCode' => [ 'type' => 'string', 'locationName' => 'catalogCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskFlowUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskFlowUpdateResultShape', ],
            ],
        ],
        'UranusTaskFlowDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoFuzzyListJobNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoFuzzyListJobNameResultShape', ],
            ],
        ],
        'UranusTaskInfoDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoDetailResultShape', ],
            ],
        ],
        'UranusTaskInfoFuzzyListJobNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskInfoRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoAnalysisOutputTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusAnalysisScriptRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoSaveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoSaveResultShape', ],
            ],
        ],
        'UranusTaskInfoRePublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'historyId' => [ 'type' => 'integer', 'locationName' => 'historyId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoSaveRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskInfo' =>  [ 'shape' => 'UranusTaskInfoRes', ],
                'taskNodeInfo' =>  [ 'shape' => 'UranusTaskInfoNodeReq', ],
                'fileInfo' =>  [ 'shape' => 'UranusTaskInfoFileReq', ],
                'sparkJarInfo' =>  [ 'shape' => 'TaskInfoSparkJarReq', ],
                'loopInfo' =>  [ 'shape' => 'TaskInfoLoopReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoRePublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoRePublishResultShape', ],
            ],
        ],
        'UranusTaskInfoAnalysisOutputTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoAnalysisOutputTableResultShape', ],
            ],
        ],
        'UranusTaskInfoAnalysisDependJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusAnalysisScriptRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoHistoryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoAnalysisOutputTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'currentJobName' => [ 'type' => 'string', 'locationName' => 'currentJobName', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'sqlContent' => [ 'type' => 'string', 'locationName' => 'sqlContent', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoFuzzyListJobNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'currentTaskCode' => [ 'type' => 'string', 'locationName' => 'currentTaskCode', ],
                'dependJobNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'analysisDependJobNameList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoOnLineConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoOnLineConfigResultShape', ],
            ],
        ],
        'UranusTaskInfoPrePublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoSaveResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoLockDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoLockDetailResultShape', ],
            ],
        ],
        'UranusTaskElementDelimitersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoJobPublishTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoJobPublishTypeResultShape', ],
            ],
        ],
        'UranusTaskSparkParamKeysResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskExportParamListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoPublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoPublishResultShape', ],
            ],
        ],
        'UranusTaskInfoSparkVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoRePublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskElementDelimitersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskElementDelimitersResultShape', ],
            ],
        ],
        'UranusTaskInfoPrePublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskInfoPrePublishRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoLockDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskInfo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskExportParamListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskParamReq', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoOnLineConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskInfo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskElementDelimitersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskLoopElementDelimiterVo', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoGetTaskCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoGetTaskCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoSparkVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoSparkVersionResultShape', ],
            ],
        ],
        'UranusTaskInfoPrePublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoPrePublishResultShape', ],
            ],
        ],
        'UranusTaskInfoPublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'publishStatus' => [ 'type' => 'integer', 'locationName' => 'publishStatus', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoJobPublishTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoOnLineConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoPublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskDependExportParamListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskDependExportParamListResultShape', ],
            ],
        ],
        'UranusTaskInfoJobPublishTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoGetTaskCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoGetTaskCodeResultShape', ],
            ],
        ],
        'UranusTaskInfoAnalysisDependJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoAnalysisDependJobResultShape', ],
            ],
        ],
        'UranusTaskInfoDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskInfo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoLockDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskExportParamListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskExportParamListResultShape', ],
            ],
        ],
        'UranusTaskInfoHistoryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusPageResultContentSchedTaskInfoHistoryRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskSparkParamKeysResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskSparkParamKeysResultShape', ],
            ],
        ],
        'UranusTaskInfoAnalysisDependJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'currentJobName' => [ 'type' => 'string', 'locationName' => 'currentJobName', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'sqlContent' => [ 'type' => 'string', 'locationName' => 'sqlContent', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskDependExportParamListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeParamRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskInfoSparkVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskDependExportParamListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskSparkParamKeysRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskInfoHistoryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskInfoHistoryListResultShape', ],
            ],
        ],
        'UranusTaskPageListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskPageListResultShape', ],
            ],
        ],
        'UranusTaskPublishOneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusNodePublishChildReq', ], ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskNodeDetailRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskPublishOneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskPublishOneResultShape', ],
            ],
        ],
        'UranusTaskNodeCheckJobNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskNodeCheckJobNameResultShape', ],
            ],
        ],
        'UranusTaskUpdateStatusListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskAddRelationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workFlowInfo' =>  [ 'shape' => 'UranusTaskFlowUpdateReq', ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeDetailRes', ], ],
                'graphStr' => [ 'type' => 'string', 'locationName' => 'graphStr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskNodeUpdateNodeDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'childrenCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parentCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskNodeId' => [ 'type' => 'integer', 'locationName' => 'taskNodeId', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'taskData' => [ 'type' => 'string', 'locationName' => 'taskData', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isUranus' => [ 'type' => 'integer', 'locationName' => 'isUranus', ],
                'isCurrentFlow' => [ 'type' => 'integer', 'locationName' => 'isCurrentFlow', ],
                'parent' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeSaveReq', ], ],
                'haveChildren' => [ 'type' => 'integer', 'locationName' => 'haveChildren', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskUpdateStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskUpdateStatusResultShape', ],
            ],
        ],
        'UranusTaskNodeCheckJobNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskUpdateStatusListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskGetRelationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskPrePublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodePreRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskNodeUpdateJobNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskUpdateStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskUpdateStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeUpdateNodeDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskNodeUpdateNodeDataResultShape', ],
            ],
        ],
        'UranusTaskNodeSaveResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskNodeDetailRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskPublishOneResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodePreRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeUpdateNodeDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeUpdateJobNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'childrenCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parentCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskNodeId' => [ 'type' => 'integer', 'locationName' => 'taskNodeId', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'taskData' => [ 'type' => 'string', 'locationName' => 'taskData', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isUranus' => [ 'type' => 'integer', 'locationName' => 'isUranus', ],
                'isCurrentFlow' => [ 'type' => 'integer', 'locationName' => 'isCurrentFlow', ],
                'parent' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeSaveReq', ], ],
                'haveChildren' => [ 'type' => 'integer', 'locationName' => 'haveChildren', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskNodeSaveRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'childrenCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parentCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskNodeId' => [ 'type' => 'integer', 'locationName' => 'taskNodeId', ],
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'taskData' => [ 'type' => 'string', 'locationName' => 'taskData', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeTypeName' => [ 'type' => 'string', 'locationName' => 'nodeTypeName', ],
                'nodeIcon' => [ 'type' => 'string', 'locationName' => 'nodeIcon', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'isUranus' => [ 'type' => 'integer', 'locationName' => 'isUranus', ],
                'isCurrentFlow' => [ 'type' => 'integer', 'locationName' => 'isCurrentFlow', ],
                'parent' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodeSaveReq', ], ],
                'haveChildren' => [ 'type' => 'integer', 'locationName' => 'haveChildren', ],
                'cooperator' => [ 'type' => 'string', 'locationName' => 'cooperator', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskNodeDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskNodeDeleteResultShape', ],
            ],
        ],
        'UranusTaskPagePublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskPagePublishResultShape', ],
            ],
        ],
        'UranusTaskDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskCode' => [ 'type' => 'string', 'locationName' => 'taskCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskGetRelationResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusTaskNodeRSaveReq', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskAddRelationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskAddRelationResultShape', ],
            ],
        ],
        'UranusTaskDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskDetailResultShape', ],
            ],
        ],
        'UranusTaskNodeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskNodeListResultShape', ],
            ],
        ],
        'UranusTaskPrePublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskPrePublishResultShape', ],
            ],
        ],
        'UranusTaskNodeUpdateJobNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskNodeUpdateJobNameResultShape', ],
            ],
        ],
        'UranusTaskGetRelationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskGetRelationResultShape', ],
            ],
        ],
        'UranusTaskNodeSaveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskNodeSaveResultShape', ],
            ],
        ],
        'UranusTaskPageListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'jobType' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'jobChildType' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'jobStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'updateStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'createTimeBefore' => [ 'type' => 'string', 'locationName' => 'createTimeBefore', ],
                'createTimeAfter' => [ 'type' => 'string', 'locationName' => 'createTimeAfter', ],
                'updateTimeBefore' => [ 'type' => 'string', 'locationName' => 'updateTimeBefore', ],
                'updateTimeAfter' => [ 'type' => 'string', 'locationName' => 'updateTimeAfter', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskPagePublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusTaskNodePreRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskPageListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UranusPageResultContentTaskNodePageRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskUpdateStatusListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusTaskUpdateStatusListResultShape', ],
            ],
        ],
        'UranusTaskNodeCheckJobNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskPrePublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusTaskAddRelationResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskNodeDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusTaskPagePublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusNodePublishChildReq', ], ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionDeleteCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionCreateCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionCatalogName' => [ 'type' => 'string', 'locationName' => 'functionCatalogName', ],
                'parentCatalogId' => [ 'type' => 'integer', 'locationName' => 'parentCatalogId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusUdfListFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UranusFunctionManagerRes', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'integer', 'locationName' => 'functionId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionUpdateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionUpdateResultShape', ],
            ],
        ],
        'UranusFunctionGetByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'integer', 'locationName' => 'functionId', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionCheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'checkType' => [ 'type' => 'string', 'locationName' => 'checkType', ],
                'checkName' => [ 'type' => 'string', 'locationName' => 'checkName', ],
                'parentCatalogId' => [ 'type' => 'integer', 'locationName' => 'parentCatalogId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionPublishResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusUdfListFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusUdfListFunctionResultShape', ],
            ],
        ],
        'UranusFunctionCheckResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionListCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionCreateCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionCreateCatalogResultShape', ],
            ],
        ],
        'UranusFunctionListCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionCatalogVo', ], ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionGetByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionGetByIdResultShape', ],
            ],
        ],
        'UranusFunctionCreateCatalogResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionDeleteCatalogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionGetByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'DefinedFunctionVo', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionUpdateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'functionId' => [ 'type' => 'integer', 'locationName' => 'functionId', ],
                'className' => [ 'type' => 'string', 'locationName' => 'className', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionFormat' => [ 'type' => 'string', 'locationName' => 'functionFormat', ],
                'functionUsage' => [ 'type' => 'string', 'locationName' => 'functionUsage', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionDeleteResultShape', ],
            ],
        ],
        'UranusFunctionPublishRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionId' => [ 'type' => 'string', 'locationName' => 'functionId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionCreateResultShape', ],
            ],
        ],
        'UranusFunctionDeleteCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionDeleteCatalogResultShape', ],
            ],
        ],
        'UranusUdfListFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionUpdateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusFunctionPublishResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionPublishResultShape', ],
            ],
        ],
        'UranusFunctionCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'functionCatalogId' => [ 'type' => 'integer', 'locationName' => 'functionCatalogId', ],
                'className' => [ 'type' => 'string', 'locationName' => 'className', ],
                'managers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceCodes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionFormat' => [ 'type' => 'string', 'locationName' => 'functionFormat', ],
                'functionUsage' => [ 'type' => 'string', 'locationName' => 'functionUsage', ],
                'relativeEngine' => [ 'type' => 'string', 'locationName' => 'relativeEngine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusFunctionListCatalogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionListCatalogResultShape', ],
            ],
        ],
        'UranusFunctionCheckResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusFunctionCheckResultShape', ],
            ],
        ],
        'UranusWorkFlowInitUploadResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkFlowInitUploadResultShape', ],
            ],
        ],
        'UranusWorkFlowDirCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusWorkFlowDirCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkFlowDirFileDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkFlowDirFileDeleteResultShape', ],
            ],
        ],
        'UranusWorkFlowInitUploadResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' =>  [ 'shape' => 'UploaderInitRes', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusWorkFlowDirFileDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkFlowDirFileExistsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusWorkFlowDirDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkFlowDirIfChildrenPathRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkFlowDirDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkFlowDirDeleteResultShape', ],
            ],
        ],
        'UranusWorkFlowDirDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusWorkFlowInitUploadRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkFlowDirIfChildrenPathResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkFlowDirIfChildrenPathResultShape', ],
            ],
        ],
        'UranusWorkFlowDirCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkFlowDirCreateResultShape', ],
            ],
        ],
        'UranusWorkFlowDirFileExistsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'isJarManagement' => [ 'type' => 'boolean', 'locationName' => 'isJarManagement', ],
                'fileCode' => [ 'type' => 'string', 'locationName' => 'fileCode', ],
                'parentCode' => [ 'type' => 'string', 'locationName' => 'parentCode', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'flowCode' => [ 'type' => 'string', 'locationName' => 'flowCode', ],
                'relativePath' => [ 'type' => 'string', 'locationName' => 'relativePath', ],
                'isUpload' => [ 'type' => 'integer', 'locationName' => 'isUpload', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkFlowDirIfChildrenPathResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusWorkFlowDirFileDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'UranusWorkFlowDirFileExistsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkFlowDirFileExistsResultShape', ],
            ],
        ],
        'UranusWorkSpaceDownRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'workSpaceCode' => [ 'type' => 'string', 'locationName' => 'workSpaceCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'UranusWorkSpaceDownResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UranusWorkSpaceDownResultShape', ],
            ],
        ],
        'UranusWorkSpaceDownResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'errorTitle' => [ 'type' => 'string', 'locationName' => 'errorTitle', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'subCode' => [ 'type' => 'string', 'locationName' => 'subCode', ],
                'successed' => [ 'type' => 'boolean', 'locationName' => 'successed', ],
            ],
        ],
        'WorkspaceBundleOrUnBundleResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'calculateResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'integrationResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'bundleResource' => [ 'type' => 'boolean', 'locationName' => 'bundleResource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetProjectBundleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceCreatProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'ownerIntegrationResource' =>  [ 'shape' => 'OwnerIntegrationResource', ],
                'payPlan' => [ 'type' => 'string', 'locationName' => 'payPlan', ],
                'billingVersion' => [ 'type' => 'string', 'locationName' => 'billingVersion', ],
                'billingModel' => [ 'type' => 'string', 'locationName' => 'billingModel', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'projectResourceReq' =>  [ 'shape' => 'CreateProjectResourceParam', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceGetProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetProjectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceHadCreatWsProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceSaveInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceCreateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceSyncRechargeResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'WorkspaceCreatProductResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'integer', 'locationName' => 'buyId', ],
            ],
        ],
        'WorkspaceExpiredInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceSyncWsProductOrderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceHadCreatWsProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceBundleOrUnBundleResourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceSaveInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDescription' => [ 'type' => 'string', 'locationName' => 'workspaceDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceSaveInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceSyncRechargeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'billingVersion' => [ 'type' => 'string', 'locationName' => 'billingVersion', ],
                'billingModel' => [ 'type' => 'string', 'locationName' => 'billingModel', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'companyId' => [ 'type' => 'string', 'locationName' => 'companyId', ],
                'payPlan' => [ 'type' => 'string', 'locationName' => 'payPlan', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'orderUniqueKey' =>  [ 'shape' => 'OrderUniqueKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceSyncRechargeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceBundleProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'engineType' => [ 'type' => 'string', 'locationName' => 'engineType', ],
                'bundleDevProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
                'bundleProdProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceStopExpireOrDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceDeleteResponseShape' => [
            'type' => 'structure',
            'members' => [
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
                'workspaceModel' => [ 'type' => 'string', 'locationName' => 'workspaceModel', ],
                'engineType' => [ 'type' => 'string', 'locationName' => 'engineType', ],
                'calculateResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'integrationResourceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'needBundleProject' => [ 'type' => 'boolean', 'locationName' => 'needBundleProject', ],
                'bundleDevProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
                'bundleProdProjectReq' =>  [ 'shape' => 'BundleProjectReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceBundleProjectResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceBundleProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceUnbundleProjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'manager' => [ 'type' => 'string', 'locationName' => 'manager', ],
                'imProjectManager' => [ 'type' => 'boolean', 'locationName' => 'imProjectManager', ],
                'imInProject' => [ 'type' => 'boolean', 'locationName' => 'imInProject', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceCreatProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceCreatProductResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceHadCreatWsProductResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceStopExpireOrDeleteRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyCode' => [ 'type' => 'string', 'locationName' => 'companyCode', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'handleStatus' => [ 'type' => 'string', 'locationName' => 'handleStatus', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceUnbundleProjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceExpiredInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'WorkspaceSyncWsProductOrderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetProjectBundleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceListResp', ], ],
            ],
        ],
        'WorkspaceSyncWsProductOrderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'billingVersion' => [ 'type' => 'string', 'locationName' => 'billingVersion', ],
                'billingModel' => [ 'type' => 'string', 'locationName' => 'billingModel', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'companyId' => [ 'type' => 'string', 'locationName' => 'companyId', ],
                'payPlan' => [ 'type' => 'string', 'locationName' => 'payPlan', ],
                'autoRenewal' => [ 'type' => 'boolean', 'locationName' => 'autoRenewal', ],
                'purchaseDuration' => [ 'type' => 'integer', 'locationName' => 'purchaseDuration', ],
                'orderUniqueKey' =>  [ 'shape' => 'OrderUniqueKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceExpiredInfoResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'WorkspaceUnbundleProjectResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceStopExpireOrDeleteResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceBundleOrUnBundleResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'WorkspaceGetProjectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectResp', ], ],
            ],
        ],
        'WorkspaceGetProjectBundleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetProjectBundleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'workspaceCode' => [ 'type' => 'string', 'locationName' => 'workspaceCode', ],
                'projectCode' => [ 'type' => 'string', 'locationName' => 'projectCode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
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
        'WorkspaceUpdateUserRoleResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'WorkspaceGetMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'PageInfoWorkspaceUserResp', ],
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
        'WorkspaceGetUserRolesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspacegetUcUserByUserNameRequestShape' => [
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
        'WorkspaceGetCurrentUserInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetCurrentUserInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceAddMemberResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'WorkspaceUpdateUserRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'long', 'locationName' => 'workspaceId', ],
                'updateRoleReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserRoleInfo', ], ],
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
        'WorkspaceGetUcUserByPinResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUcUserByPinResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspacegetUcUserByUserNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'UcUsersResp', ], ],
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
        'WorkspaceGetUcUserByPinResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'UcUsersResp', ],
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
        'WorkspaceVerifyUserIsManagerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceVerifyUserIsManagerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceDeleteMemberResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceGetCurrentUserInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'UcUsersResp', ],
            ],
        ],
        'WorkspaceGetUserRolesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUserRolesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceDeleteMemberRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'workspaceId' => [ 'type' => 'long', 'locationName' => 'workspaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspaceVerifyAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceVerifyAuthResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetUcUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetUcUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceAddMemberResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'WorkspaceUpdateUserRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'WorkspaceGetMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspaceGetMembersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'WorkspaceAddMemberRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'long', 'locationName' => 'workspaceId', ],
                'userPinList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roleCodeList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'WorkspacegetUcUserByUserNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'WorkspacegetUcUserByUserNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
    ],
];
