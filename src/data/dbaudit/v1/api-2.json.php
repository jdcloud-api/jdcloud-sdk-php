<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'dbaudit',
        'protocol' => 'json',
//        'serviceFullName' => 'dbaudit',
//        'serviceId' => 'dbaudit',
    ],
    'operations' => [
        'DescribeAgentList' => [
            'name' => 'DescribeAgentList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/agents',
            ],
            'input' => [ 'shape' => 'DescribeAgentListRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgentListResponseShape', ],
        ],
        'InstallAgent' => [
            'name' => 'InstallAgent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/agents',
            ],
            'input' => [ 'shape' => 'InstallAgentRequestShape', ],
            'output' => [ 'shape' => 'InstallAgentResponseShape', ],
        ],
        'SetAuditConfig' => [
            'name' => 'SetAuditConfig',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/agents',
            ],
            'input' => [ 'shape' => 'SetAuditConfigRequestShape', ],
            'output' => [ 'shape' => 'SetAuditConfigResponseShape', ],
        ],
        'DescribeAgentDatabases' => [
            'name' => 'DescribeAgentDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/agents/{agentId}',
            ],
            'input' => [ 'shape' => 'DescribeAgentDatabasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgentDatabasesResponseShape', ],
        ],
        'ModyfyAgentLimits' => [
            'name' => 'ModyfyAgentLimits',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/agents/{agentId}',
            ],
            'input' => [ 'shape' => 'ModyfyAgentLimitsRequestShape', ],
            'output' => [ 'shape' => 'ModyfyAgentLimitsResponseShape', ],
        ],
        'UninstallAgent' => [
            'name' => 'UninstallAgent',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/agents/{agentId}',
            ],
            'input' => [ 'shape' => 'UninstallAgentRequestShape', ],
            'output' => [ 'shape' => 'UninstallAgentResponseShape', ],
        ],
        'ModyfyAuditNetCards' => [
            'name' => 'ModyfyAuditNetCards',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/agents/{agentId}/database/{databaseId}',
            ],
            'input' => [ 'shape' => 'ModyfyAuditNetCardsRequestShape', ],
            'output' => [ 'shape' => 'ModyfyAuditNetCardsResponseShape', ],
        ],
        'DeleteAuditFromAgent' => [
            'name' => 'DeleteAuditFromAgent',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/agents/{agentId}/database/{databaseId}',
            ],
            'input' => [ 'shape' => 'DeleteAuditFromAgentRequestShape', ],
            'output' => [ 'shape' => 'DeleteAuditFromAgentResponseShape', ],
        ],
        'DescribeDatabases' => [
            'name' => 'DescribeDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases',
            ],
            'input' => [ 'shape' => 'DescribeDatabasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatabasesResponseShape', ],
        ],
        'AddDatabase' => [
            'name' => 'AddDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases',
            ],
            'input' => [ 'shape' => 'AddDatabaseRequestShape', ],
            'output' => [ 'shape' => 'AddDatabaseResponseShape', ],
        ],
        'EnableAuditResponse' => [
            'name' => 'EnableAuditResponse',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}/auditResponse:enable',
            ],
            'input' => [ 'shape' => 'EnableAuditResponseRequestShape', ],
            'output' => [ 'shape' => 'EnableAuditResponseResponseShape', ],
        ],
        'DisableAuditResponse' => [
            'name' => 'DisableAuditResponse',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}/auditResponse:disable',
            ],
            'input' => [ 'shape' => 'DisableAuditResponseRequestShape', ],
            'output' => [ 'shape' => 'DisableAuditResponseResponseShape', ],
        ],
        'DescribeDatabase' => [
            'name' => 'DescribeDatabase',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}',
            ],
            'input' => [ 'shape' => 'DescribeDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatabaseResponseShape', ],
        ],
        'UpdateDatabase' => [
            'name' => 'UpdateDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}',
            ],
            'input' => [ 'shape' => 'UpdateDatabaseRequestShape', ],
            'output' => [ 'shape' => 'UpdateDatabaseResponseShape', ],
        ],
        'DeleteDatabase' => [
            'name' => 'DeleteDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}',
            ],
            'input' => [ 'shape' => 'DeleteDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatabaseResponseShape', ],
        ],
        'DescribeInstanceList' => [
            'name' => 'DescribeInstanceList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstanceListRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceListResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}:modifyInstance',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
        ],
        'DescribeIpWhiteList' => [
            'name' => 'DescribeIpWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ipwhitelist',
            ],
            'input' => [ 'shape' => 'DescribeIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpWhiteListResponseShape', ],
        ],
        'AddIpWhiteItem' => [
            'name' => 'AddIpWhiteItem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ipwhitelist',
            ],
            'input' => [ 'shape' => 'AddIpWhiteItemRequestShape', ],
            'output' => [ 'shape' => 'AddIpWhiteItemResponseShape', ],
        ],
        'DeleteIpWhiteItem' => [
            'name' => 'DeleteIpWhiteItem',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ipwhitelist',
            ],
            'input' => [ 'shape' => 'DeleteIpWhiteItemRequestShape', ],
            'output' => [ 'shape' => 'DeleteIpWhiteItemResponseShape', ],
        ],
        'DescribeAuditLogList' => [
            'name' => 'DescribeAuditLogList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/logs',
            ],
            'input' => [ 'shape' => 'DescribeAuditLogListRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditLogListResponseShape', ],
        ],
        'DescribeAuditLog' => [
            'name' => 'DescribeAuditLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/logs/{logId}',
            ],
            'input' => [ 'shape' => 'DescribeAuditLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditLogResponseShape', ],
        ],
        'DescribeMaskRuleList' => [
            'name' => 'DescribeMaskRuleList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}/maskRules',
            ],
            'input' => [ 'shape' => 'DescribeMaskRuleListRequestShape', ],
            'output' => [ 'shape' => 'DescribeMaskRuleListResponseShape', ],
        ],
        'AddMaskRule' => [
            'name' => 'AddMaskRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}/maskRules',
            ],
            'input' => [ 'shape' => 'AddMaskRuleRequestShape', ],
            'output' => [ 'shape' => 'AddMaskRuleResponseShape', ],
        ],
        'ModifyMask' => [
            'name' => 'ModifyMask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}/maskRules/{maskRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyMaskRequestShape', ],
            'output' => [ 'shape' => 'ModifyMaskResponseShape', ],
        ],
        'DeleteMask' => [
            'name' => 'DeleteMask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/databases/{dbId}/maskRules/{maskRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteMaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteMaskResponseShape', ],
        ],
        'DescribeTaskList' => [
            'name' => 'DescribeTaskList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/tasks',
            ],
            'input' => [ 'shape' => 'DescribeTaskListRequestShape', ],
            'output' => [ 'shape' => 'DescribeTaskListResponseShape', ],
        ],
        'CreateTask' => [
            'name' => 'CreateTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tasks',
            ],
            'input' => [ 'shape' => 'CreateTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateTaskResponseShape', ],
        ],
        'StartTask' => [
            'name' => 'StartTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}:start',
            ],
            'input' => [ 'shape' => 'StartTaskRequestShape', ],
            'output' => [ 'shape' => 'StartTaskResponseShape', ],
        ],
        'StopTask' => [
            'name' => 'StopTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}:stop',
            ],
            'input' => [ 'shape' => 'StopTaskRequestShape', ],
            'output' => [ 'shape' => 'StopTaskResponseShape', ],
        ],
        'DescribeReportList' => [
            'name' => 'DescribeReportList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}',
            ],
            'input' => [ 'shape' => 'DescribeReportListRequestShape', ],
            'output' => [ 'shape' => 'DescribeReportListResponseShape', ],
        ],
        'ModifyTask' => [
            'name' => 'ModifyTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}',
            ],
            'input' => [ 'shape' => 'ModifyTaskRequestShape', ],
            'output' => [ 'shape' => 'ModifyTaskResponseShape', ],
        ],
        'DeleteTask' => [
            'name' => 'DeleteTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteTaskResponseShape', ],
        ],
        'DownloadReport' => [
            'name' => 'DownloadReport',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}/report/{reportId}',
            ],
            'input' => [ 'shape' => 'DownloadReportRequestShape', ],
            'output' => [ 'shape' => 'DownloadReportResponseShape', ],
        ],
        'DeleteReport' => [
            'name' => 'DeleteReport',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/tasks/{taskId}/report/{reportId}',
            ],
            'input' => [ 'shape' => 'DeleteReportRequestShape', ],
            'output' => [ 'shape' => 'DeleteReportResponseShape', ],
        ],
        'DescribeRuleGroups' => [
            'name' => 'DescribeRuleGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups',
            ],
            'input' => [ 'shape' => 'DescribeRuleGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuleGroupsResponseShape', ],
        ],
        'AddRuleGroup' => [
            'name' => 'AddRuleGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups',
            ],
            'input' => [ 'shape' => 'AddRuleGroupRequestShape', ],
            'output' => [ 'shape' => 'AddRuleGroupResponseShape', ],
        ],
        'DescribeRuleGroupRules' => [
            'name' => 'DescribeRuleGroupRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}',
            ],
            'input' => [ 'shape' => 'DescribeRuleGroupRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuleGroupRulesResponseShape', ],
        ],
        'AddRule' => [
            'name' => 'AddRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}',
            ],
            'input' => [ 'shape' => 'AddRuleRequestShape', ],
            'output' => [ 'shape' => 'AddRuleResponseShape', ],
        ],
        'DeleteRuleGroup' => [
            'name' => 'DeleteRuleGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteRuleGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteRuleGroupResponseShape', ],
        ],
        'DescribeRule' => [
            'name' => 'DescribeRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}/rule/{ruleId}',
            ],
            'input' => [ 'shape' => 'DescribeRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeRuleResponseShape', ],
        ],
        'ModifyRule' => [
            'name' => 'ModifyRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}/rule/{ruleId}',
            ],
            'input' => [ 'shape' => 'ModifyRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyRuleResponseShape', ],
        ],
        'DeleteRule' => [
            'name' => 'DeleteRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}/rule/{ruleId}',
            ],
            'input' => [ 'shape' => 'DeleteRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteRuleResponseShape', ],
        ],
        'EnableRuleGroup' => [
            'name' => 'EnableRuleGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}:enable',
            ],
            'input' => [ 'shape' => 'EnableRuleGroupRequestShape', ],
            'output' => [ 'shape' => 'EnableRuleGroupResponseShape', ],
        ],
        'DisableRuleGroup' => [
            'name' => 'DisableRuleGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}:disable',
            ],
            'input' => [ 'shape' => 'DisableRuleGroupRequestShape', ],
            'output' => [ 'shape' => 'DisableRuleGroupResponseShape', ],
        ],
        'DeployRuleGroup' => [
            'name' => 'DeployRuleGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{insId}/ruleGroups/{ruleGroupId}:deploy',
            ],
            'input' => [ 'shape' => 'DeployRuleGroupRequestShape', ],
            'output' => [ 'shape' => 'DeployRuleGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'AuditConfig' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'auditSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditSpec', ], ],
                'netCard' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AuditInfo' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'dbAddress' => [ 'type' => 'string', 'locationName' => 'dbAddress', ],
                'dbPort' => [ 'type' => 'string', 'locationName' => 'dbPort', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'insName' => [ 'type' => 'string', 'locationName' => 'insName', ],
                'insAddress' => [ 'type' => 'string', 'locationName' => 'insAddress', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'netCards' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AgentSpec' => [
            'type' => 'structure',
            'members' => [
                'hostId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'limitStatus' => [ 'type' => 'integer', 'locationName' => 'limitStatus', ],
                'cpuLimit' => [ 'type' => 'float', 'locationName' => 'cpuLimit', ],
                'memLimit' => [ 'type' => 'float', 'locationName' => 'memLimit', ],
            ],
        ],
        'AgentInfo' => [
            'type' => 'structure',
            'members' => [
                'agnetId' => [ 'type' => 'string', 'locationName' => 'agnetId', ],
                'hostId' => [ 'type' => 'string', 'locationName' => 'hostId', ],
                'osType' => [ 'type' => 'string', 'locationName' => 'osType', ],
                'hostName' => [ 'type' => 'string', 'locationName' => 'hostName', ],
                'agentStatus' => [ 'type' => 'integer', 'locationName' => 'agentStatus', ],
                'ifritStatus' => [ 'type' => 'integer', 'locationName' => 'ifritStatus', ],
                'auditCount' => [ 'type' => 'integer', 'locationName' => 'auditCount', ],
                'limitStatus' => [ 'type' => 'integer', 'locationName' => 'limitStatus', ],
                'cpuLimit' => [ 'type' => 'float', 'locationName' => 'cpuLimit', ],
                'memLimit' => [ 'type' => 'float', 'locationName' => 'memLimit', ],
                'cpuPercent' => [ 'type' => 'float', 'locationName' => 'cpuPercent', ],
                'memPercert' => [ 'type' => 'float', 'locationName' => 'memPercert', ],
                'memTotal' => [ 'type' => 'integer', 'locationName' => 'memTotal', ],
                'cpuTotal' => [ 'type' => 'integer', 'locationName' => 'cpuTotal', ],
                'installTime' => [ 'type' => 'string', 'locationName' => 'installTime', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
            ],
        ],
        'AuditSpec' => [
            'type' => 'structure',
            'members' => [
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'DatabaseDetail' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbAddr' => [ 'type' => 'string', 'locationName' => 'dbAddr', ],
                'dbPort' => [ 'type' => 'integer', 'locationName' => 'dbPort', ],
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'dbVersion' => [ 'type' => 'string', 'locationName' => 'dbVersion', ],
                'dbDesc' => [ 'type' => 'string', 'locationName' => 'dbDesc', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'dataMask' => [ 'type' => 'boolean', 'locationName' => 'dataMask', ],
                'auditResponse' => [ 'type' => 'boolean', 'locationName' => 'auditResponse', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'ruleGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabaseRuleGroup', ], ],
            ],
        ],
        'DatabaseSpec' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbAddr' => [ 'type' => 'string', 'locationName' => 'dbAddr', ],
                'dbPort' => [ 'type' => 'integer', 'locationName' => 'dbPort', ],
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'dbVersion' => [ 'type' => 'string', 'locationName' => 'dbVersion', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'dbDesc' => [ 'type' => 'string', 'locationName' => 'dbDesc', ],
                'dataMask' => [ 'type' => 'boolean', 'locationName' => 'dataMask', ],
                'auditResponse' => [ 'type' => 'boolean', 'locationName' => 'auditResponse', ],
            ],
        ],
        'DatabaseRule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'DatabaseRuleGroup' => [
            'type' => 'structure',
            'members' => [
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
                'ruleGroupName' => [ 'type' => 'string', 'locationName' => 'ruleGroupName', ],
                'databaseRule' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabaseRule', ], ],
            ],
        ],
        'Database' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbDesc' => [ 'type' => 'string', 'locationName' => 'dbDesc', ],
                'dbPort' => [ 'type' => 'integer', 'locationName' => 'dbPort', ],
                'dbVersion' => [ 'type' => 'string', 'locationName' => 'dbVersion', ],
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'agentPort' => [ 'type' => 'integer', 'locationName' => 'agentPort', ],
                'dbAddr' => [ 'type' => 'string', 'locationName' => 'dbAddr', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'orderType' => [ 'type' => 'string', 'locationName' => 'orderType', ],
                'insName' => [ 'type' => 'string', 'locationName' => 'insName', ],
                'insDesc' => [ 'type' => 'string', 'locationName' => 'insDesc', ],
                'insZone' => [ 'type' => 'string', 'locationName' => 'insZone', ],
                'insType' => [ 'type' => 'string', 'locationName' => 'insType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
                'extraInfo' => [ 'type' => 'string', 'locationName' => 'extraInfo', ],
                'formula' => [ 'type' => 'string', 'locationName' => 'formula', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'autoRenew' => [ 'type' => 'string', 'locationName' => 'autoRenew', ],
                'renewTimeUnit' => [ 'type' => 'string', 'locationName' => 'renewTimeUnit', ],
                'renewTimeSpan' => [ 'type' => 'integer', 'locationName' => 'renewTimeSpan', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'ydCode' => [ 'type' => 'string', 'locationName' => 'ydCode', ],
            ],
        ],
        'InstanceAbstract' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'insName' => [ 'type' => 'string', 'locationName' => 'insName', ],
                'insDesc' => [ 'type' => 'string', 'locationName' => 'insDesc', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'ipAddr' => [ 'type' => 'string', 'locationName' => 'ipAddr', ],
                'insType' => [ 'type' => 'string', 'locationName' => 'insType', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'insZone' => [ 'type' => 'string', 'locationName' => 'insZone', ],
                'insRegion' => [ 'type' => 'string', 'locationName' => 'insRegion', ],
                'insDomain' => [ 'type' => 'string', 'locationName' => 'insDomain', ],
                'dbLimit' => [ 'type' => 'integer', 'locationName' => 'dbLimit', ],
            ],
        ],
        'InstanceRelation' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'AuditLogAbstract' => [
            'type' => 'structure',
            'members' => [
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'captureTime' => [ 'type' => 'string', 'locationName' => 'captureTime', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'executeResult' => [ 'type' => 'integer', 'locationName' => 'executeResult', ],
            ],
        ],
        'AuditLogDetail' => [
            'type' => 'structure',
            'members' => [
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'clientIpName' => [ 'type' => 'string', 'locationName' => 'clientIpName', ],
                'clientPort' => [ 'type' => 'integer', 'locationName' => 'clientPort', ],
                'clientMac' => [ 'type' => 'string', 'locationName' => 'clientMac', ],
                'clientHostName' => [ 'type' => 'string', 'locationName' => 'clientHostName', ],
                'clientMacAddr' => [ 'type' => 'string', 'locationName' => 'clientMacAddr', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'dbUser' => [ 'type' => 'string', 'locationName' => 'dbUser', ],
                'dbTool' => [ 'type' => 'string', 'locationName' => 'dbTool', ],
                'sqlIdentity' => [ 'type' => 'string', 'locationName' => 'sqlIdentity', ],
                'sqlType' => [ 'type' => 'string', 'locationName' => 'sqlType', ],
                'target' => [ 'type' => 'string', 'locationName' => 'target', ],
                'affectLines' => [ 'type' => 'integer', 'locationName' => 'affectLines', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'captureTime' => [ 'type' => 'string', 'locationName' => 'captureTime', ],
                'sqlQuery' => [ 'type' => 'string', 'locationName' => 'sqlQuery', ],
                'sqlResult' => [ 'type' => 'string', 'locationName' => 'sqlResult', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'riskRuleId' => [ 'type' => 'string', 'locationName' => 'riskRuleId', ],
                'riskRuleName' => [ 'type' => 'string', 'locationName' => 'riskRuleName', ],
                'riskRuleType' => [ 'type' => 'string', 'locationName' => 'riskRuleType', ],
                'riskRuleGroup' => [ 'type' => 'string', 'locationName' => 'riskRuleGroup', ],
                'riskDesc' => [ 'type' => 'string', 'locationName' => 'riskDesc', ],
                'executeResult' => [ 'type' => 'integer', 'locationName' => 'executeResult', ],
            ],
        ],
        'MaskRuleDetail' => [
            'type' => 'structure',
            'members' => [
                'maskRuleId' => [ 'type' => 'string', 'locationName' => 'maskRuleId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'maskRuleName' => [ 'type' => 'string', 'locationName' => 'maskRuleName', ],
                'maskRuleContent' => [ 'type' => 'string', 'locationName' => 'maskRuleContent', ],
                'maskRuleResult' => [ 'type' => 'string', 'locationName' => 'maskRuleResult', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
            ],
        ],
        'MaskRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'maskRuleName' => [ 'type' => 'string', 'locationName' => 'maskRuleName', ],
                'maskRuleContent' => [ 'type' => 'string', 'locationName' => 'maskRuleContent', ],
                'maskRuleResult' => [ 'type' => 'string', 'locationName' => 'maskRuleResult', ],
            ],
        ],
        'ReportInfo' => [
            'type' => 'structure',
            'members' => [
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'reportContent' => [ 'type' => 'string', 'locationName' => 'reportContent', ],
                'execTime' => [ 'type' => 'string', 'locationName' => 'execTime', ],
                'reportState' => [ 'type' => 'integer', 'locationName' => 'reportState', ],
                'completeTime' => [ 'type' => 'string', 'locationName' => 'completeTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'TaskOpts' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'taskState' => [ 'type' => 'integer', 'locationName' => 'taskState', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'execDate' => [ 'type' => 'integer', 'locationName' => 'execDate', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'TaskSpec' => [
            'type' => 'structure',
            'members' => [
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskDesc' => [ 'type' => 'string', 'locationName' => 'taskDesc', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'execDate' => [ 'type' => 'integer', 'locationName' => 'execDate', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'RuleAbstract' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
            ],
        ],
        'RuleLogic' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'logic' => [ 'type' => 'integer', 'locationName' => 'logic', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Rule' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'ruleDesc' => [ 'type' => 'string', 'locationName' => 'ruleDesc', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'clientIpRule' =>  [ 'shape' => 'RuleLogic', ],
                'clientToolRule' =>  [ 'shape' => 'RuleLogic', ],
                'clientOsRule' =>  [ 'shape' => 'RuleLogic', ],
                'clientOsHostRule' =>  [ 'shape' => 'RuleLogic', ],
                'sqlLineRule' =>  [ 'shape' => 'RuleLogic', ],
                'keywordRule' =>  [ 'shape' => 'RuleLogic', ],
                'sqlRegexRule' =>  [ 'shape' => 'RuleLogic', ],
                'privilegeOperateRule' =>  [ 'shape' => 'RuleLogic', ],
                'operateTypeRule' =>  [ 'shape' => 'RuleLogic', ],
                'tableGroupRule' =>  [ 'shape' => 'RuleLogic', ],
                'columnRule' =>  [ 'shape' => 'RuleLogic', ],
                'dbAndSchemaRule' =>  [ 'shape' => 'RuleLogic', ],
                'goalTableRule' =>  [ 'shape' => 'RuleLogic', ],
                'respondTimeRule' =>  [ 'shape' => 'RuleLogic', ],
                'influenceRowRule' =>  [ 'shape' => 'RuleLogic', ],
                'authenticationRule' =>  [ 'shape' => 'RuleLogic', ],
                'patternGroupRule' =>  [ 'shape' => 'RuleLogic', ],
                'dbuserRule' =>  [ 'shape' => 'RuleLogic', ],
                'cveRule' =>  [ 'shape' => 'CveRule', ],
            ],
        ],
        'RuleSpec' => [
            'type' => 'structure',
            'members' => [
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'ruleContent' => [ 'type' => 'string', 'locationName' => 'ruleContent', ],
                'ruleDesc' => [ 'type' => 'string', 'locationName' => 'ruleDesc', ],
            ],
        ],
        'CveRule' => [
            'type' => 'structure',
            'members' => [
                'cveId' => [ 'type' => 'string', 'locationName' => 'cveId', ],
                'cveName' => [ 'type' => 'string', 'locationName' => 'cveName', ],
                'cveType' => [ 'type' => 'string', 'locationName' => 'cveType', ],
                'cveInfo' => [ 'type' => 'string', 'locationName' => 'cveInfo', ],
            ],
        ],
        'RuleDetail' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleType' => [ 'type' => 'integer', 'locationName' => 'ruleType', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'ruleContent' => [ 'type' => 'string', 'locationName' => 'ruleContent', ],
                'ruleDesc' => [ 'type' => 'string', 'locationName' => 'ruleDesc', ],
                'editable' => [ 'type' => 'boolean', 'locationName' => 'editable', ],
            ],
        ],
        'RuleGroupList' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleGroup', ], ],
            ],
        ],
        'RuleGroup' => [
            'type' => 'structure',
            'members' => [
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
                'ruleGroupName' => [ 'type' => 'string', 'locationName' => 'ruleGroupName', ],
                'dbUserCase' => [ 'type' => 'boolean', 'locationName' => 'dbUserCase', ],
                'osUserCase' => [ 'type' => 'boolean', 'locationName' => 'osUserCase', ],
                'programCase' => [ 'type' => 'boolean', 'locationName' => 'programCase', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'copyFromId' => [ 'type' => 'integer', 'locationName' => 'copyFromId', ],
            ],
        ],
        'SetAuditConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModyfyAgentLimitsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'limitStatus' => [ 'type' => 'integer', 'locationName' => 'limitStatus', ],
                'cpuLimit' => [ 'type' => 'integer', 'locationName' => 'cpuLimit', ],
                'memLimit' => [ 'type' => 'integer', 'locationName' => 'memLimit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'ModyfyAuditNetCardsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'netCards' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'databaseId' => [ 'type' => 'string', 'locationName' => 'databaseId', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'DescribeAgentDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditInfo' =>  [ 'shape' => 'AuditInfo', ],
            ],
        ],
        'DescribeAgentListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAgentListResultShape', ],
            ],
        ],
        'SetAuditConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UninstallAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'DeleteAuditFromAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'databaseId' => [ 'type' => 'string', 'locationName' => 'databaseId', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'DeleteAuditFromAgentResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAuditFromAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetAuditConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'auditConfig' =>  [ 'shape' => 'AuditConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModyfyAuditNetCardsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InstallAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'InstallAgentResultShape', ],
            ],
        ],
        'DescribeAgentListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgentInfo', ], ],
            ],
        ],
        'InstallAgentResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModyfyAgentLimitsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InstallAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agentSpec' =>  [ 'shape' => 'AgentSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAgentDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nameFilter' => [ 'type' => 'string', 'locationName' => 'nameFilter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
            ],
        ],
        'UninstallAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAgentListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModyfyAuditNetCardsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UninstallAgentResultShape' => [
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
        'ModyfyAgentLimitsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAgentDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAgentDatabasesResultShape', ],
            ],
        ],
        'EnableAuditResponseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDatabasesResultShape', ],
            ],
        ],
        'DescribeDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'databaseDetail' =>  [ 'shape' => 'DatabaseDetail', ],
            ],
        ],
        'DeleteDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'DescribeDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'DisableAuditResponseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseSpec' =>  [ 'shape' => 'DatabaseSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'DisableAuditResponseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'DeleteDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'AddDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDatabaseResultShape', ],
            ],
        ],
        'UpdateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseSpec' =>  [ 'shape' => 'DatabaseSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'DisableAuditResponseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAuditResponseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'EnableAuditResponseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'insDomain' => [ 'type' => 'string', 'locationName' => 'insDomain', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'Database', ], ],
            ],
        ],
        'DescribeInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nameFilter' => [ 'type' => 'string', 'locationName' => 'nameFilter', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'AddIpWhiteItemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipWhileList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'insName' => [ 'type' => 'string', 'locationName' => 'insName', ],
                'insDesc' => [ 'type' => 'string', 'locationName' => 'insDesc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddIpWhiteItemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'DescribeInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceListResultShape', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceAbstract' =>  [ 'shape' => 'InstanceAbstract', ],
            ],
        ],
        'DeleteIpWhiteItemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteIpWhiteItemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteIpWhiteItemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
            ],
        ],
        'DescribeIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddIpWhiteItemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceAbstract', ], ],
            ],
        ],
        'DescribeAuditLogListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'riskLevel' => [ 'type' => 'string', 'locationName' => 'riskLevel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'DescribeAuditLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
            ],
        ],
        'DescribeAuditLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAuditLogResultShape', ],
            ],
        ],
        'DescribeAuditLogListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditLogAbstract', ], ],
            ],
        ],
        'DescribeAuditLogListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAuditLogListResultShape', ],
            ],
        ],
        'DescribeAuditLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditLogDetail' =>  [ 'shape' => 'AuditLogDetail', ],
            ],
        ],
        'AddMaskRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maskRuleSpec' =>  [ 'shape' => 'MaskRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'DescribeMaskRuleListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'AddMaskRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyMaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMaskRuleListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'MaskRuleDetail', ], ],
            ],
        ],
        'DeleteMaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMaskRuleListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMaskRuleListResultShape', ],
            ],
        ],
        'AddMaskRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'maskRuleId' => [ 'type' => 'string', 'locationName' => 'maskRuleId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'ModifyMaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maskRuleSpec' =>  [ 'shape' => 'MaskRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'maskRuleId' => [ 'type' => 'string', 'locationName' => 'maskRuleId', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
            ],
        ],
        'ModifyMaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeReportListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReportInfo', ], ],
            ],
        ],
        'StopTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskOpts' =>  [ 'shape' => 'TaskOpts', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DeleteTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskSpec' =>  [ 'shape' => 'TaskSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeTaskListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadReportResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeReportListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeReportListResultShape', ],
            ],
        ],
        'DeleteReportResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskSpec' =>  [ 'shape' => 'TaskSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DownloadReportResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskOpts' =>  [ 'shape' => 'TaskOpts', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateTaskResultShape', ],
            ],
        ],
        'DeleteReportRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DeleteTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteReportResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTaskListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
            ],
        ],
        'ModifyTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DownloadReportRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'reportId' => [ 'type' => 'string', 'locationName' => 'reportId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'StopTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReportListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeTaskListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTaskListResultShape', ],
            ],
        ],
        'StartTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRuleGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
            ],
        ],
        'DeployRuleGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rule' =>  [ 'shape' => 'Rule', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
            ],
        ],
        'AddRuleGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddRuleGroupResultShape', ],
            ],
        ],
        'EnableRuleGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRuleGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'ruleGroup' =>  [ 'shape' => 'RuleGroup', ],
            ],
        ],
        'DeleteRuleGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableRuleGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
            ],
        ],
        'DescribeRuleGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleGroup', ], ],
            ],
        ],
        'DisableRuleGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRuleGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleGroup' =>  [ 'shape' => 'RuleGroup', ],
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'EnableRuleGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRuleGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRuleGroupsResultShape', ],
            ],
        ],
        'DescribeRuleGroupRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRuleGroupRulesResultShape', ],
            ],
        ],
        'DescribeRuleGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
            ],
        ],
        'AddRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRuleGroupRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
            ],
        ],
        'DeleteRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableRuleGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
            ],
        ],
        'DeleteRuleGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'rule' =>  [ 'shape' => 'Rule', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
            ],
        ],
        'DescribeRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
            ],
        ],
        'DescribeRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'rule' =>  [ 'shape' => 'Rule', ],
            ],
        ],
        'DescribeRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRuleResultShape', ],
            ],
        ],
        'DeployRuleGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbId' => [ 'type' => 'string', 'locationName' => 'dbId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
            ],
        ],
        'DescribeRuleGroupRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'Rule', ], ],
            ],
        ],
        'DeployRuleGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbIds' => [ 'type' => 'string', 'locationName' => 'dbIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'insId' => [ 'type' => 'string', 'locationName' => 'insId', ],
                'ruleGroupId' => [ 'type' => 'string', 'locationName' => 'ruleGroupId', ],
            ],
        ],
        'DisableRuleGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
