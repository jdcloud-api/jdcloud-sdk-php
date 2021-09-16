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
    ],
];
