<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'dms',
        'protocol' => 'json',
//        'serviceFullName' => 'dms',
//        'serviceId' => 'dms',
    ],
    'operations' => [
        'GeneralCreateEvent' => [
            'name' => 'GeneralCreateEvent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/event:generalCreate',
            ],
            'input' => [ 'shape' => 'GeneralCreateEventRequestShape', ],
            'output' => [ 'shape' => 'GeneralCreateEventResponseShape', ],
        ],
        'GeneralAlterEvent' => [
            'name' => 'GeneralAlterEvent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/event:generalAlter',
            ],
            'input' => [ 'shape' => 'GeneralAlterEventRequestShape', ],
            'output' => [ 'shape' => 'GeneralAlterEventResponseShape', ],
        ],
        'GeneralDropEvent' => [
            'name' => 'GeneralDropEvent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/event:generalDrop',
            ],
            'input' => [ 'shape' => 'GeneralDropEventRequestShape', ],
            'output' => [ 'shape' => 'GeneralDropEventResponseShape', ],
        ],
        'EventInfo' => [
            'name' => 'EventInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/event:info',
            ],
            'input' => [ 'shape' => 'EventInfoRequestShape', ],
            'output' => [ 'shape' => 'EventInfoResponseShape', ],
        ],
        'CreateImportFileTask' => [
            'name' => 'CreateImportFileTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/importFileTask:create',
            ],
            'input' => [ 'shape' => 'CreateImportFileTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateImportFileTaskResponseShape', ],
        ],
        'UploadImportFileTask' => [
            'name' => 'UploadImportFileTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/importFileTask:upload',
            ],
            'input' => [ 'shape' => 'UploadImportFileTaskRequestShape', ],
            'output' => [ 'shape' => 'UploadImportFileTaskResponseShape', ],
        ],
        'CreateDataFlow' => [
            'name' => 'CreateDataFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dataFlow:create',
            ],
            'input' => [ 'shape' => 'CreateDataFlowRequestShape', ],
            'output' => [ 'shape' => 'CreateDataFlowResponseShape', ],
        ],
        'CreateStructureFlow' => [
            'name' => 'CreateStructureFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/structureFlow:create',
            ],
            'input' => [ 'shape' => 'CreateStructureFlowRequestShape', ],
            'output' => [ 'shape' => 'CreateStructureFlowResponseShape', ],
        ],
        'CreateExportFlow' => [
            'name' => 'CreateExportFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/exportFlow:create',
            ],
            'input' => [ 'shape' => 'CreateExportFlowRequestShape', ],
            'output' => [ 'shape' => 'CreateExportFlowResponseShape', ],
        ],
        'StartFlow' => [
            'name' => 'StartFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flow:start',
            ],
            'input' => [ 'shape' => 'StartFlowRequestShape', ],
            'output' => [ 'shape' => 'StartFlowResponseShape', ],
        ],
        'GeneralCreateFunction' => [
            'name' => 'GeneralCreateFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/function:generalCreate',
            ],
            'input' => [ 'shape' => 'GeneralCreateFunctionRequestShape', ],
            'output' => [ 'shape' => 'GeneralCreateFunctionResponseShape', ],
        ],
        'GeneralAlterFunction' => [
            'name' => 'GeneralAlterFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/function:generalAlter',
            ],
            'input' => [ 'shape' => 'GeneralAlterFunctionRequestShape', ],
            'output' => [ 'shape' => 'GeneralAlterFunctionResponseShape', ],
        ],
        'GeneralDropFunction' => [
            'name' => 'GeneralDropFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/function:generalDrop',
            ],
            'input' => [ 'shape' => 'GeneralDropFunctionRequestShape', ],
            'output' => [ 'shape' => 'GeneralDropFunctionResponseShape', ],
        ],
        'FunctionList' => [
            'name' => 'FunctionList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/function:list',
            ],
            'input' => [ 'shape' => 'FunctionListRequestShape', ],
            'output' => [ 'shape' => 'FunctionListResponseShape', ],
        ],
        'FunctionInfo' => [
            'name' => 'FunctionInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/function:info',
            ],
            'input' => [ 'shape' => 'FunctionInfoRequestShape', ],
            'output' => [ 'shape' => 'FunctionInfoResponseShape', ],
        ],
        'FunctionInvoke' => [
            'name' => 'FunctionInvoke',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/function:invoke',
            ],
            'input' => [ 'shape' => 'FunctionInvokeRequestShape', ],
            'output' => [ 'shape' => 'FunctionInvokeResponseShape', ],
        ],
        'GeneralCreateTableSql' => [
            'name' => 'GeneralCreateTableSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/createSql:general',
            ],
            'input' => [ 'shape' => 'GeneralCreateTableSqlRequestShape', ],
            'output' => [ 'shape' => 'GeneralCreateTableSqlResponseShape', ],
        ],
        'GeneralAlterTableSql' => [
            'name' => 'GeneralAlterTableSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/alterSql:general',
            ],
            'input' => [ 'shape' => 'GeneralAlterTableSqlRequestShape', ],
            'output' => [ 'shape' => 'GeneralAlterTableSqlResponseShape', ],
        ],
        'HistorySql' => [
            'name' => 'HistorySql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/historySql',
            ],
            'input' => [ 'shape' => 'HistorySqlRequestShape', ],
            'output' => [ 'shape' => 'HistorySqlResponseShape', ],
        ],
        'HistoryImportData' => [
            'name' => 'HistoryImportData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/historyImportData',
            ],
            'input' => [ 'shape' => 'HistoryImportDataRequestShape', ],
            'output' => [ 'shape' => 'HistoryImportDataResponseShape', ],
        ],
        'QueryInstance' => [
            'name' => 'QueryInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances:query',
            ],
            'input' => [ 'shape' => 'QueryInstanceRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceResponseShape', ],
        ],
        'Open' => [
            'name' => 'Open',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instance:open',
            ],
            'input' => [ 'shape' => 'OpenRequestShape', ],
            'output' => [ 'shape' => 'OpenResponseShape', ],
        ],
        'Login' => [
            'name' => 'Login',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:login',
            ],
            'input' => [ 'shape' => 'LoginRequestShape', ],
            'output' => [ 'shape' => 'LoginResponseShape', ],
        ],
        'Logout' => [
            'name' => 'Logout',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instance:logout',
            ],
            'input' => [ 'shape' => 'LogoutRequestShape', ],
            'output' => [ 'shape' => 'LogoutResponseShape', ],
        ],
        'QueryTypeInstance' => [
            'name' => 'QueryTypeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/typeInstances:query',
            ],
            'input' => [ 'shape' => 'QueryTypeInstanceRequestShape', ],
            'output' => [ 'shape' => 'QueryTypeInstanceResponseShape', ],
        ],
        'TableInfo' => [
            'name' => 'TableInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/consoleTableInfo',
            ],
            'input' => [ 'shape' => 'TableInfoRequestShape', ],
            'output' => [ 'shape' => 'TableInfoResponseShape', ],
        ],
        'DatabaseList' => [
            'name' => 'DatabaseList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/consoleDbList',
            ],
            'input' => [ 'shape' => 'DatabaseListRequestShape', ],
            'output' => [ 'shape' => 'DatabaseListResponseShape', ],
        ],
        'TableList' => [
            'name' => 'TableList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/consoleTableList',
            ],
            'input' => [ 'shape' => 'TableListRequestShape', ],
            'output' => [ 'shape' => 'TableListResponseShape', ],
        ],
        'SqlTableInfo' => [
            'name' => 'SqlTableInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/sqlTableInfo',
            ],
            'input' => [ 'shape' => 'SqlTableInfoRequestShape', ],
            'output' => [ 'shape' => 'SqlTableInfoResponseShape', ],
        ],
        'GetDmsDomain' => [
            'name' => 'GetDmsDomain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getDmsDomain',
            ],
            'input' => [ 'shape' => 'GetDmsDomainRequestShape', ],
            'output' => [ 'shape' => 'GetDmsDomainResponseShape', ],
        ],
        'QueryPersonalSqls' => [
            'name' => 'QueryPersonalSqls',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/personalSql:query',
            ],
            'input' => [ 'shape' => 'QueryPersonalSqlsRequestShape', ],
            'output' => [ 'shape' => 'QueryPersonalSqlsResponseShape', ],
        ],
        'AddPersonalSql' => [
            'name' => 'AddPersonalSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/personalSql:add',
            ],
            'input' => [ 'shape' => 'AddPersonalSqlRequestShape', ],
            'output' => [ 'shape' => 'AddPersonalSqlResponseShape', ],
        ],
        'DeletePersonalSql' => [
            'name' => 'DeletePersonalSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/personalSql:delete',
            ],
            'input' => [ 'shape' => 'DeletePersonalSqlRequestShape', ],
            'output' => [ 'shape' => 'DeletePersonalSqlResponseShape', ],
        ],
        'UpdatePersonalSql' => [
            'name' => 'UpdatePersonalSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/personalSql:update',
            ],
            'input' => [ 'shape' => 'UpdatePersonalSqlRequestShape', ],
            'output' => [ 'shape' => 'UpdatePersonalSqlResponseShape', ],
        ],
        'GeneralCreateProcedure' => [
            'name' => 'GeneralCreateProcedure',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/procedure:generalCreate',
            ],
            'input' => [ 'shape' => 'GeneralCreateProcedureRequestShape', ],
            'output' => [ 'shape' => 'GeneralCreateProcedureResponseShape', ],
        ],
        'GeneralAlterProcedure' => [
            'name' => 'GeneralAlterProcedure',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/procedure:generalAlter',
            ],
            'input' => [ 'shape' => 'GeneralAlterProcedureRequestShape', ],
            'output' => [ 'shape' => 'GeneralAlterProcedureResponseShape', ],
        ],
        'GeneralDropProcedure' => [
            'name' => 'GeneralDropProcedure',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/procedure:generalDrop',
            ],
            'input' => [ 'shape' => 'GeneralDropProcedureRequestShape', ],
            'output' => [ 'shape' => 'GeneralDropProcedureResponseShape', ],
        ],
        'ProcedureList' => [
            'name' => 'ProcedureList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/procedure:list',
            ],
            'input' => [ 'shape' => 'ProcedureListRequestShape', ],
            'output' => [ 'shape' => 'ProcedureListResponseShape', ],
        ],
        'ProcedureInfo' => [
            'name' => 'ProcedureInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/procedure:info',
            ],
            'input' => [ 'shape' => 'ProcedureInfoRequestShape', ],
            'output' => [ 'shape' => 'ProcedureInfoResponseShape', ],
        ],
        'ProcedureInvoke' => [
            'name' => 'ProcedureInvoke',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/procedure:invoke',
            ],
            'input' => [ 'shape' => 'ProcedureInvokeRequestShape', ],
            'output' => [ 'shape' => 'ProcedureInvokeResponseShape', ],
        ],
        'ProgramList' => [
            'name' => 'ProgramList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/program:list',
            ],
            'input' => [ 'shape' => 'ProgramListRequestShape', ],
            'output' => [ 'shape' => 'ProgramListResponseShape', ],
        ],
        'ExeProgram' => [
            'name' => 'ExeProgram',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/program:exe',
            ],
            'input' => [ 'shape' => 'ExeProgramRequestShape', ],
            'output' => [ 'shape' => 'ExeProgramResponseShape', ],
        ],
        'ConsoleExplain' => [
            'name' => 'ConsoleExplain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:explain',
            ],
            'input' => [ 'shape' => 'ConsoleExplainRequestShape', ],
            'output' => [ 'shape' => 'ConsoleExplainResponseShape', ],
        ],
        'ConsoleSql' => [
            'name' => 'ConsoleSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:exeSql',
            ],
            'input' => [ 'shape' => 'ConsoleSqlRequestShape', ],
            'output' => [ 'shape' => 'ConsoleSqlResponseShape', ],
        ],
        'ConsoleGeneralData' => [
            'name' => 'ConsoleGeneralData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:generalData',
            ],
            'input' => [ 'shape' => 'ConsoleGeneralDataRequestShape', ],
            'output' => [ 'shape' => 'ConsoleGeneralDataResponseShape', ],
        ],
        'FormatSql' => [
            'name' => 'FormatSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/sql:format',
            ],
            'input' => [ 'shape' => 'FormatSqlRequestShape', ],
            'output' => [ 'shape' => 'FormatSqlResponseShape', ],
        ],
        'CreateTableBatch' => [
            'name' => 'CreateTableBatch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:createTableBatch',
            ],
            'input' => [ 'shape' => 'CreateTableBatchRequestShape', ],
            'output' => [ 'shape' => 'CreateTableBatchResponseShape', ],
        ],
        'GetCreateTableBatchSql' => [
            'name' => 'GetCreateTableBatchSql',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:getCreateTableBatchSql',
            ],
            'input' => [ 'shape' => 'GetCreateTableBatchSqlRequestShape', ],
            'output' => [ 'shape' => 'GetCreateTableBatchSqlResponseShape', ],
        ],
        'GeneralCreateTrigger' => [
            'name' => 'GeneralCreateTrigger',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/trigger:generalCreate',
            ],
            'input' => [ 'shape' => 'GeneralCreateTriggerRequestShape', ],
            'output' => [ 'shape' => 'GeneralCreateTriggerResponseShape', ],
        ],
        'GeneralAlterTrigger' => [
            'name' => 'GeneralAlterTrigger',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/trigger:generalAlter',
            ],
            'input' => [ 'shape' => 'GeneralAlterTriggerRequestShape', ],
            'output' => [ 'shape' => 'GeneralAlterTriggerResponseShape', ],
        ],
        'GeneralDropTrigger' => [
            'name' => 'GeneralDropTrigger',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/trigger:generalDrop',
            ],
            'input' => [ 'shape' => 'GeneralDropTriggerRequestShape', ],
            'output' => [ 'shape' => 'GeneralDropTriggerResponseShape', ],
        ],
        'TriggerList' => [
            'name' => 'TriggerList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/trigger:list',
            ],
            'input' => [ 'shape' => 'TriggerListRequestShape', ],
            'output' => [ 'shape' => 'TriggerListResponseShape', ],
        ],
        'TriggerInfo' => [
            'name' => 'TriggerInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/trigger:info',
            ],
            'input' => [ 'shape' => 'TriggerInfoRequestShape', ],
            'output' => [ 'shape' => 'TriggerInfoResponseShape', ],
        ],
        'GeneralCreateView' => [
            'name' => 'GeneralCreateView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/view:generalCreate',
            ],
            'input' => [ 'shape' => 'GeneralCreateViewRequestShape', ],
            'output' => [ 'shape' => 'GeneralCreateViewResponseShape', ],
        ],
        'GeneralAlterView' => [
            'name' => 'GeneralAlterView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/view:generalAlter',
            ],
            'input' => [ 'shape' => 'GeneralAlterViewRequestShape', ],
            'output' => [ 'shape' => 'GeneralAlterViewResponseShape', ],
        ],
        'GeneralDropView' => [
            'name' => 'GeneralDropView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/view:generalDrop',
            ],
            'input' => [ 'shape' => 'GeneralDropViewRequestShape', ],
            'output' => [ 'shape' => 'GeneralDropViewResponseShape', ],
        ],
        'ViewInfo' => [
            'name' => 'ViewInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/view:info',
            ],
            'input' => [ 'shape' => 'ViewInfoRequestShape', ],
            'output' => [ 'shape' => 'ViewInfoResponseShape', ],
        ],
    ],
    'shapes' => [
        'ColumnInfo' => [
            'type' => 'structure',
            'members' => [
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'newColumnName' => [ 'type' => 'string', 'locationName' => 'newColumnName', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'columnType' => [ 'type' => 'string', 'locationName' => 'columnType', ],
                'columnLength' => [ 'type' => 'integer', 'locationName' => 'columnLength', ],
                'columnScale' => [ 'type' => 'integer', 'locationName' => 'columnScale', ],
                'isNull' => [ 'type' => 'boolean', 'locationName' => 'isNull', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'columnComment' => [ 'type' => 'string', 'locationName' => 'columnComment', ],
                'isAutoIncrease' => [ 'type' => 'boolean', 'locationName' => 'isAutoIncrease', ],
                'isPrimaryKey' => [ 'type' => 'boolean', 'locationName' => 'isPrimaryKey', ],
            ],
        ],
        'ExtraTableInfo' => [
            'type' => 'structure',
            'members' => [
                'tableTypeEnum' => [ 'type' => 'string', 'locationName' => 'tableTypeEnum', ],
                'stardbSplitInfo' =>  [ 'shape' => 'StardbSplitInfo', ],
            ],
        ],
        'CreateTableInfo' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'extraTableInfo' =>  [ 'shape' => 'ExtraTableInfo', ],
            ],
        ],
        'StardbSplitInfo' => [
            'type' => 'structure',
            'members' => [
                'splitType' => [ 'type' => 'string', 'locationName' => 'splitType', ],
                'tableSplitCount' => [ 'type' => 'integer', 'locationName' => 'tableSplitCount', ],
                'columnNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'splitDateBegin' => [ 'type' => 'string', 'locationName' => 'splitDateBegin', ],
                'splitDateEnd' => [ 'type' => 'string', 'locationName' => 'splitDateEnd', ],
            ],
        ],
        'DataSource' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'modifiedBy' => [ 'type' => 'string', 'locationName' => 'modifiedBy', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'passwd' => [ 'type' => 'string', 'locationName' => 'passwd', ],
                'passwdEcrypt' => [ 'type' => 'string', 'locationName' => 'passwdEcrypt', ],
                'cdsCluster' => [ 'type' => 'string', 'locationName' => 'cdsCluster', ],
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'environmentType' => [ 'type' => 'integer', 'locationName' => 'environmentType', ],
                'dbTypeName' => [ 'type' => 'string', 'locationName' => 'dbTypeName', ],
                'sensitivity' => [ 'type' => 'string', 'locationName' => 'sensitivity', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'mongoAuth' => [ 'type' => 'string', 'locationName' => 'mongoAuth', ],
                'schemaCname' => [ 'type' => 'string', 'locationName' => 'schemaCname', ],
                'schemaDepartment' => [ 'type' => 'string', 'locationName' => 'schemaDepartment', ],
                'schemaDba' => [ 'type' => 'string', 'locationName' => 'schemaDba', ],
                'schemaOwner' => [ 'type' => 'string', 'locationName' => 'schemaOwner', ],
                'isStandard' => [ 'type' => 'string', 'locationName' => 'isStandard', ],
                'coldict' => [ 'type' => 'string', 'locationName' => 'coldict', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'schemaEnvironment' => [ 'type' => 'string', 'locationName' => 'schemaEnvironment', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'addrMode' => [ 'type' => 'string', 'locationName' => 'addrMode', ],
                'addrOrigin' => [ 'type' => 'string', 'locationName' => 'addrOrigin', ],
                'addrKey' => [ 'type' => 'string', 'locationName' => 'addrKey', ],
                'extra' => [ 'type' => 'string', 'locationName' => 'extra', ],
            ],
        ],
        'DbcmColumn' => [
            'type' => 'structure',
            'members' => [
                'old_column_name' => [ 'type' => 'string', 'locationName' => 'old_column_name', ],
                'column_name' => [ 'type' => 'string', 'locationName' => 'column_name', ],
                'column_type' => [ 'type' => 'string', 'locationName' => 'column_type', ],
                'column_length' => [ 'type' => 'integer', 'locationName' => 'column_length', ],
                'column_point' => [ 'type' => 'string', 'locationName' => 'column_point', ],
                'is_null' => [ 'type' => 'boolean', 'locationName' => 'is_null', ],
                'column_value' => [ 'type' => 'string', 'locationName' => 'column_value', ],
                'auto_incre' => [ 'type' => 'boolean', 'locationName' => 'auto_incre', ],
                'pk_index' => [ 'type' => 'boolean', 'locationName' => 'pk_index', ],
                'column_comments' => [ 'type' => 'string', 'locationName' => 'column_comments', ],
            ],
        ],
        'DbcmTableInfo' => [
            'type' => 'structure',
            'members' => [
                'table_name' => [ 'type' => 'string', 'locationName' => 'table_name', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'table_comment' => [ 'type' => 'string', 'locationName' => 'table_comment', ],
                'table_type' => [ 'type' => 'string', 'locationName' => 'table_type', ],
                'split_key' => [ 'type' => 'string', 'locationName' => 'split_key', ],
            ],
        ],
        'DbcmTableStruct' => [
            'type' => 'structure',
            'members' => [
                'table_column' => [ 'type' => 'list', 'member' => [ 'shape' => 'DbcmColumn', ], ],
                'primary_index' => [ 'type' => 'string', 'locationName' => 'primary_index', ],
                'table_info' =>  [ 'shape' => 'DbcmTableInfo', ],
                'ddl' => [ 'type' => 'string', 'locationName' => 'ddl', ],
                'comm_index' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DmsHistorySql' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'spendTime' => [ 'type' => 'integer', 'locationName' => 'spendTime', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
            ],
        ],
        'DmsInstance' => [
            'type' => 'structure',
            'members' => [
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'dataSource' =>  [ 'shape' => 'DataSource', ],
                'instanceInfo' => [ 'type' => 'object', 'locationName' => 'instanceInfo', ],
            ],
        ],
        'DmsPrivilegeInstanceParam' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DmsPrivilegeVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'privilegeName' => [ 'type' => 'string', 'locationName' => 'privilegeName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'authStatus' => [ 'type' => 'string', 'locationName' => 'authStatus', ],
                'authDate' => [ 'type' => 'string', 'locationName' => 'authDate', ],
                'expireDate' => [ 'type' => 'string', 'locationName' => 'expireDate', ],
                'releaseStatus' => [ 'type' => 'string', 'locationName' => 'releaseStatus', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DmsRegionDomain' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'object', 'locationName' => 'domains', ],
            ],
        ],
        'DmsRoleVO' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
            ],
        ],
        'DmsSql' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'sqlTypeEnum' => [ 'type' => 'string', 'locationName' => 'sqlTypeEnum', ],
            ],
        ],
        'DmsSubFileImport' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'parentId' => [ 'type' => 'integer', 'locationName' => 'parentId', ],
                'fileIndex' => [ 'type' => 'integer', 'locationName' => 'fileIndex', ],
                'uploadStatus' => [ 'type' => 'string', 'locationName' => 'uploadStatus', ],
                'chkSumMd5' => [ 'type' => 'string', 'locationName' => 'chkSumMd5', ],
                'beginDate' => [ 'type' => 'string', 'locationName' => 'beginDate', ],
                'finishDate' => [ 'type' => 'string', 'locationName' => 'finishDate', ],
            ],
        ],
        'DmsSubUserVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DmsSyncSubUserVO' => [
            'type' => 'structure',
            'members' => [
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'roleList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DmsTableStruct' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'primaryIndex' => [ 'type' => 'string', 'locationName' => 'primaryIndex', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'metaTableInfo' =>  [ 'shape' => 'MetaTableInfo', ],
                'columnInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnInfo', ], ],
                'indexInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexInfo', ], ],
                'extraTableInfo' =>  [ 'shape' => 'ExtraTableInfo', ],
            ],
        ],
        'IndexInfo' => [
            'type' => 'structure',
            'members' => [
                'indexName' => [ 'type' => 'string', 'locationName' => 'indexName', ],
                'indexType' => [ 'type' => 'string', 'locationName' => 'indexType', ],
                'columnNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'MetaTableInfo' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableComment' => [ 'type' => 'string', 'locationName' => 'tableComment', ],
                'tableCharset' => [ 'type' => 'string', 'locationName' => 'tableCharset', ],
            ],
        ],
        'DmsUserEnableVO' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'activeStatus' => [ 'type' => 'string', 'locationName' => 'activeStatus', ],
            ],
        ],
        'DmsUserVO' => [
            'type' => 'structure',
            'members' => [
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'masterPin' => [ 'type' => 'string', 'locationName' => 'masterPin', ],
                'isMaster' => [ 'type' => 'string', 'locationName' => 'isMaster', ],
                'accountId' => [ 'type' => 'long', 'locationName' => 'accountId', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'activeStatus' => [ 'type' => 'string', 'locationName' => 'activeStatus', ],
                'deleteStatus' => [ 'type' => 'string', 'locationName' => 'deleteStatus', ],
                'addDate' => [ 'type' => 'string', 'locationName' => 'addDate', ],
                'loginDate' => [ 'type' => 'string', 'locationName' => 'loginDate', ],
                'createDate' => [ 'type' => 'string', 'locationName' => 'createDate', ],
                'modifiedDate' => [ 'type' => 'string', 'locationName' => 'modifiedDate', ],
                'roleVOList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsRoleVO', ], ],
            ],
        ],
        'HistorySql' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'sqlStr' => [ 'type' => 'string', 'locationName' => 'sqlStr', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'spendTime' => [ 'type' => 'integer', 'locationName' => 'spendTime', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'exeStatus' => [ 'type' => 'string', 'locationName' => 'exeStatus', ],
                'sqlType' => [ 'type' => 'string', 'locationName' => 'sqlType', ],
            ],
        ],
        'Parameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'columnTypeEnum' => [ 'type' => 'string', 'locationName' => 'columnTypeEnum', ],
                'parameterModeEnum' => [ 'type' => 'string', 'locationName' => 'parameterModeEnum', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'PersonalSql' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'sqlStr' => [ 'type' => 'string', 'locationName' => 'sqlStr', ],
                'modifiedBy' => [ 'type' => 'string', 'locationName' => 'modifiedBy', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'hint' => [ 'type' => 'string', 'locationName' => 'hint', ],
            ],
        ],
        'TableFilter' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
            ],
        ],
        'TableStruct' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'tableStruct' => [ 'type' => 'string', 'locationName' => 'tableStruct', ],
            ],
        ],
        'EventInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'eventComment' => [ 'type' => 'string', 'locationName' => 'eventComment', ],
                'eventStatus' => [ 'type' => 'string', 'locationName' => 'eventStatus', ],
                'isPreserve' => [ 'type' => 'boolean', 'locationName' => 'isPreserve', ],
                'eventDefinition' => [ 'type' => 'string', 'locationName' => 'eventDefinition', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'executeAt' => [ 'type' => 'string', 'locationName' => 'executeAt', ],
                'intervalValue' => [ 'type' => 'string', 'locationName' => 'intervalValue', ],
                'intervalField' => [ 'type' => 'string', 'locationName' => 'intervalField', ],
                'starts' => [ 'type' => 'string', 'locationName' => 'starts', ],
                'ends' => [ 'type' => 'string', 'locationName' => 'ends', ],
            ],
        ],
        'GeneralCreateEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'eventComment' => [ 'type' => 'string', 'locationName' => 'eventComment', ],
                'eventStatus' => [ 'type' => 'string', 'locationName' => 'eventStatus', ],
                'isPreserve' => [ 'type' => 'boolean', 'locationName' => 'isPreserve', ],
                'eventDefinition' => [ 'type' => 'string', 'locationName' => 'eventDefinition', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'executeAt' => [ 'type' => 'string', 'locationName' => 'executeAt', ],
                'intervalValue' => [ 'type' => 'string', 'locationName' => 'intervalValue', ],
                'intervalField' => [ 'type' => 'string', 'locationName' => 'intervalField', ],
                'starts' => [ 'type' => 'string', 'locationName' => 'starts', ],
                'ends' => [ 'type' => 'string', 'locationName' => 'ends', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateEventResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralCreateEventResultShape', ],
            ],
        ],
        'EventInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EventInfoResultShape', ],
            ],
        ],
        'GeneralDropEventResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralAlterEventResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralAlterEventResultShape', ],
            ],
        ],
        'EventInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralDropEventResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralDropEventResultShape', ],
            ],
        ],
        'GeneralCreateEventResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralAlterEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'originEventName' => [ 'type' => 'string', 'locationName' => 'originEventName', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'eventComment' => [ 'type' => 'string', 'locationName' => 'eventComment', ],
                'eventStatus' => [ 'type' => 'string', 'locationName' => 'eventStatus', ],
                'isPreserve' => [ 'type' => 'boolean', 'locationName' => 'isPreserve', ],
                'eventDefinition' => [ 'type' => 'string', 'locationName' => 'eventDefinition', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'executeAt' => [ 'type' => 'string', 'locationName' => 'executeAt', ],
                'intervalValue' => [ 'type' => 'string', 'locationName' => 'intervalValue', ],
                'intervalField' => [ 'type' => 'string', 'locationName' => 'intervalField', ],
                'starts' => [ 'type' => 'string', 'locationName' => 'starts', ],
                'ends' => [ 'type' => 'string', 'locationName' => 'ends', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralAlterEventResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralDropEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'eventName' => [ 'type' => 'string', 'locationName' => 'eventName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UploadImportFileTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'chunkNumber' => [ 'type' => 'integer', 'locationName' => 'chunkNumber', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'file' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateDataFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'taskPlanTypeEnum' => [ 'type' => 'string', 'locationName' => 'taskPlanTypeEnum', ],
                'dbaApproveTypeEnum' => [ 'type' => 'string', 'locationName' => 'dbaApproveTypeEnum', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
                'sqlText' => [ 'type' => 'string', 'locationName' => 'sqlText', ],
                'sqlFileTaskId' => [ 'type' => 'string', 'locationName' => 'sqlFileTaskId', ],
                'rollbackSqlText' => [ 'type' => 'string', 'locationName' => 'rollbackSqlText', ],
                'rollbackFileTaskId' => [ 'type' => 'string', 'locationName' => 'rollbackFileTaskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UploadImportFileTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UploadImportFileTaskResultShape', ],
            ],
        ],
        'CreateDataFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
            ],
        ],
        'CreateStructureFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'taskPlanTypeEnum' => [ 'type' => 'string', 'locationName' => 'taskPlanTypeEnum', ],
                'dbaApproveTypeEnum' => [ 'type' => 'string', 'locationName' => 'dbaApproveTypeEnum', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
                'sqlText' => [ 'type' => 'string', 'locationName' => 'sqlText', ],
                'sqlFileTaskId' => [ 'type' => 'string', 'locationName' => 'sqlFileTaskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UploadImportFileResult' => [
            'type' => 'structure',
            'members' => [
                'finish' => [ 'type' => 'boolean', 'locationName' => 'finish', ],
                'currentChunkInfo' =>  [ 'shape' => 'DmsSubFileImport', ],
            ],
        ],
        'CreateImportFileTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'uploadId' => [ 'type' => 'string', 'locationName' => 'uploadId', ],
            ],
        ],
        'UploadImportFileTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'uploadImportFileResult' =>  [ 'shape' => 'UploadImportFileResult', ],
            ],
        ],
        'StartFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'StartFlowResultShape', ],
            ],
        ],
        'CreateImportFileTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateImportFileTaskResultShape', ],
            ],
        ],
        'CreateExportFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateExportFlowResultShape', ],
            ],
        ],
        'StartFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowOrderUniqId' => [ 'type' => 'string', 'locationName' => 'flowOrderUniqId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateExportFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
            ],
        ],
        'CreateStructureFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateStructureFlowResultShape', ],
            ],
        ],
        'CreateDataFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDataFlowResultShape', ],
            ],
        ],
        'StartFlowResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateStructureFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowId' => [ 'type' => 'string', 'locationName' => 'flowId', ],
            ],
        ],
        'CreateExportFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'taskPlanTypeEnum' => [ 'type' => 'string', 'locationName' => 'taskPlanTypeEnum', ],
                'dbaApproveTypeEnum' => [ 'type' => 'string', 'locationName' => 'dbaApproveTypeEnum', ],
                'memo' => [ 'type' => 'string', 'locationName' => 'memo', ],
                'exportTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportTypeEnum', ],
                'exportFileTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportFileTypeEnum', ],
                'rowsNum' => [ 'type' => 'integer', 'locationName' => 'rowsNum', ],
                'ignoreError' => [ 'type' => 'boolean', 'locationName' => 'ignoreError', ],
                'ignoreReason' => [ 'type' => 'string', 'locationName' => 'ignoreReason', ],
                'exportSqlText' => [ 'type' => 'string', 'locationName' => 'exportSqlText', ],
                'tableFilters' =>  [ 'shape' => 'TableFilter', ],
                'exportContentTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportContentTypeEnum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateImportFileTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filename' => [ 'type' => 'string', 'locationName' => 'filename', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'chunkSize' => [ 'type' => 'integer', 'locationName' => 'chunkSize', ],
                'totalChunks' => [ 'type' => 'integer', 'locationName' => 'totalChunks', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'FunctionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'functionNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'FunctionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralCreateFunctionResultShape', ],
            ],
        ],
        'FunctionInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FunctionInfoResultShape', ],
            ],
        ],
        'GeneralAlterFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'originFunctionName' => [ 'type' => 'string', 'locationName' => 'originFunctionName', ],
                'functionSecurity' => [ 'type' => 'string', 'locationName' => 'functionSecurity', ],
                'dataAccess' => [ 'type' => 'string', 'locationName' => 'dataAccess', ],
                'deterministic' => [ 'type' => 'boolean', 'locationName' => 'deterministic', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'completeSql' => [ 'type' => 'string', 'locationName' => 'completeSql', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'returnType' => [ 'type' => 'string', 'locationName' => 'returnType', ],
                'returnLength' => [ 'type' => 'integer', 'locationName' => 'returnLength', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'FunctionInvokeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralDropFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralAlterFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralCreateFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'functionSecurity' => [ 'type' => 'string', 'locationName' => 'functionSecurity', ],
                'dataAccess' => [ 'type' => 'string', 'locationName' => 'dataAccess', ],
                'deterministic' => [ 'type' => 'boolean', 'locationName' => 'deterministic', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'returnType' => [ 'type' => 'string', 'locationName' => 'returnType', ],
                'returnLength' => [ 'type' => 'integer', 'locationName' => 'returnLength', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'FunctionInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'FunctionInvokeResultShape' => [
            'type' => 'structure',
            'members' => [
                'returnValue' => [ 'type' => 'string', 'locationName' => 'returnValue', ],
                'outArgs' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'FunctionInvokeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FunctionInvokeResultShape', ],
            ],
        ],
        'GeneralDropFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'FunctionInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'functionName' => [ 'type' => 'string', 'locationName' => 'functionName', ],
                'functionSecurity' => [ 'type' => 'string', 'locationName' => 'functionSecurity', ],
                'dataAccess' => [ 'type' => 'string', 'locationName' => 'dataAccess', ],
                'deterministic' => [ 'type' => 'boolean', 'locationName' => 'deterministic', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'completeSql' => [ 'type' => 'string', 'locationName' => 'completeSql', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'returnType' => [ 'type' => 'string', 'locationName' => 'returnType', ],
                'returnLength' => [ 'type' => 'integer', 'locationName' => 'returnLength', ],
                'returnDecimal' => [ 'type' => 'integer', 'locationName' => 'returnDecimal', ],
            ],
        ],
        'FunctionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FunctionListResultShape', ],
            ],
        ],
        'GeneralAlterFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralAlterFunctionResultShape', ],
            ],
        ],
        'GeneralDropFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralDropFunctionResultShape', ],
            ],
        ],
        'GeneralCreateTableSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaTableInfo' =>  [ 'shape' => 'MetaTableInfo', ],
                'columnInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnInfo', ], ],
                'indexInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexInfo', ], ],
                'extraTableInfo' =>  [ 'shape' => 'ExtraTableInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralAlterTableSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'metaTableInfo' =>  [ 'shape' => 'MetaTableInfo', ],
                'columnInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnInfo', ], ],
                'indexInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexInfo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateTableSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralCreateTableSqlResultShape', ],
            ],
        ],
        'GeneralAlterTableSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralAlterTableSqlResultShape', ],
            ],
        ],
        'GeneralAlterTableSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'GeneralCreateTableSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'HistorySqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'HistorySqlResultShape', ],
            ],
        ],
        'HistoryImportDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'HistoryImportDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'historySqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'HistorySql', ], ],
            ],
        ],
        'HistorySqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'HistoryImportDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'HistoryImportDataResultShape', ],
            ],
        ],
        'HistorySqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'historySqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsHistorySql', ], ],
            ],
        ],
        'QueryInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceQueryTypeEnum' => [ 'type' => 'string', 'locationName' => 'instanceQueryTypeEnum', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'dbInfoEnum' => [ 'type' => 'string', 'locationName' => 'dbInfoEnum', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'uniqId' => [ 'type' => 'string', 'locationName' => 'uniqId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryTypeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceQueryTypeEnum' => [ 'type' => 'string', 'locationName' => 'instanceQueryTypeEnum', ],
                'loginedInstance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
                'unloginedInstance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
                'noNeedLoginInstance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
                'rdsIntance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
                'drdsIntance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
            ],
        ],
        'LoginResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'LoginResultShape', ],
            ],
        ],
        'QueryTypeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTypeInstanceResultShape', ],
            ],
        ],
        'OpenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'LogoutResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryInstanceResultShape', ],
            ],
        ],
        'OpenResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'LogoutResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'LogoutResultShape', ],
            ],
        ],
        'OpenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'OpenResultShape', ],
            ],
        ],
        'QueryTypeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'loginedInstance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
                'unloginedInstance' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsInstance', ], ],
            ],
        ],
        'LoginResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'LogoutRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'LoginRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbType' => [ 'type' => 'integer', 'locationName' => 'dbType', ],
                'addrMode' => [ 'type' => 'integer', 'locationName' => 'addrMode', ],
                'dbUser' => [ 'type' => 'string', 'locationName' => 'dbUser', ],
                'dbPassword' => [ 'type' => 'string', 'locationName' => 'dbPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TableInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsTableStruct' =>  [ 'shape' => 'DmsTableStruct', ],
            ],
        ],
        'TableListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SqlTableInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SqlTableInfoResultShape', ],
            ],
        ],
        'GetDmsDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DatabaseListResultShape' => [
            'type' => 'structure',
            'members' => [
                'databaseNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SqlTableInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sqls' => [ 'type' => 'string', 'locationName' => 'sqls', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDmsDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'object', 'locationName' => 'domains', ],
            ],
        ],
        'TableListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TableListResultShape', ],
            ],
        ],
        'DatabaseListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DatabaseListResultShape', ],
            ],
        ],
        'GetDmsDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDmsDomainResultShape', ],
            ],
        ],
        'TableInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TableInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TableInfoResultShape', ],
            ],
        ],
        'TableListResultShape' => [
            'type' => 'structure',
            'members' => [
                'tableNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DatabaseListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SqlTableInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsTableStructs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsTableStruct', ], ],
            ],
        ],
        'AddPersonalSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'AddPersonalSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'sqlStr' => [ 'type' => 'string', 'locationName' => 'sqlStr', ],
                'hint' => [ 'type' => 'string', 'locationName' => 'hint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeletePersonalSqlResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeletePersonalSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddPersonalSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddPersonalSqlResultShape', ],
            ],
        ],
        'UpdatePersonalSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'hint' => [ 'type' => 'string', 'locationName' => 'hint', ],
                'sqlStr' => [ 'type' => 'string', 'locationName' => 'sqlStr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryPersonalSqlsResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'personalSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'PersonalSql', ], ],
            ],
        ],
        'QueryPersonalSqlsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdatePersonalSqlResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdatePersonalSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeletePersonalSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryPersonalSqlsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryPersonalSqlsResultShape', ],
            ],
        ],
        'GeneralDropProcedureResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralDropProcedureResultShape', ],
            ],
        ],
        'GeneralDropProcedureRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'procedureName' => [ 'type' => 'string', 'locationName' => 'procedureName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ProcedureListResultShape' => [
            'type' => 'structure',
            'members' => [
                'procedureNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GeneralAlterProcedureResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'ProcedureListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralAlterProcedureRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'originProcedureName' => [ 'type' => 'string', 'locationName' => 'originProcedureName', ],
                'procedureName' => [ 'type' => 'string', 'locationName' => 'procedureName', ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'procedureSecurity' => [ 'type' => 'string', 'locationName' => 'procedureSecurity', ],
                'dataAccess' => [ 'type' => 'string', 'locationName' => 'dataAccess', ],
                'deterministic' => [ 'type' => 'boolean', 'locationName' => 'deterministic', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'completeSql' => [ 'type' => 'string', 'locationName' => 'completeSql', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ProcedureListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ProcedureListResultShape', ],
            ],
        ],
        'ProcedureInvokeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ProcedureInvokeResultShape', ],
            ],
        ],
        'ProcedureInvokeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'procedureName' => [ 'type' => 'string', 'locationName' => 'procedureName', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ProcedureInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'procedureName' => [ 'type' => 'string', 'locationName' => 'procedureName', ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'procedureSecurity' => [ 'type' => 'string', 'locationName' => 'procedureSecurity', ],
                'dataAccess' => [ 'type' => 'string', 'locationName' => 'dataAccess', ],
                'deterministic' => [ 'type' => 'boolean', 'locationName' => 'deterministic', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'completeSql' => [ 'type' => 'string', 'locationName' => 'completeSql', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
            ],
        ],
        'ProcedureInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'procedureName' => [ 'type' => 'string', 'locationName' => 'procedureName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateProcedureRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'procedureName' => [ 'type' => 'string', 'locationName' => 'procedureName', ],
                'procedureSecurity' => [ 'type' => 'string', 'locationName' => 'procedureSecurity', ],
                'dataAccess' => [ 'type' => 'string', 'locationName' => 'dataAccess', ],
                'deterministic' => [ 'type' => 'boolean', 'locationName' => 'deterministic', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ProcedureInvokeResultShape' => [
            'type' => 'structure',
            'members' => [
                'returnValue' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'GeneralCreateProcedureResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralDropProcedureResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'ProcedureInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ProcedureInfoResultShape', ],
            ],
        ],
        'GeneralCreateProcedureResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralCreateProcedureResultShape', ],
            ],
        ],
        'GeneralAlterProcedureResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralAlterProcedureResultShape', ],
            ],
        ],
        'ProgramListResultShape' => [
            'type' => 'structure',
            'members' => [
                'viewNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'procedureNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'functionNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'triggerNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'eventNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ExeProgramResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExeProgramResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ProgramListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ProgramListResultShape', ],
            ],
        ],
        'ExeProgramRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ProgramListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCreateTableBatchSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCreateTableBatchSqlResultShape', ],
            ],
        ],
        'ConsoleExplainResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSqlResult', ], ],
            ],
        ],
        'ConsoleSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ConsoleSqlResultShape', ],
                'result' =>  [ 'shape' => 'ConsoleSqlResultShape', ],
            ],
        ],
        'FormatSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FormatSqlResultShape', ],
            ],
        ],
        'ConsoleSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sqls' => [ 'type' => 'string', 'locationName' => 'sqls', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateTableBatchResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlsResult' =>  [ 'shape' => 'DmsSqlsResult', ],
            ],
        ],
        'FormatSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'ConsoleGeneralDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlsResult' =>  [ 'shape' => 'DmsSqlsResult', ],
            ],
        ],
        'CreateTableBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'createTableInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateTableInfo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ConsoleGeneralDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ConsoleGeneralDataResultShape', ],
            ],
        ],
        'GetCreateTableBatchSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'createTableInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateTableInfo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ConsoleExplainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sqls' => [ 'type' => 'string', 'locationName' => 'sqls', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ConsoleExplainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ConsoleExplainResultShape', ],
            ],
        ],
        'FormatSqlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'sqlStr' => [ 'type' => 'string', 'locationName' => 'sqlStr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetCreateTableBatchSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'CreateTableBatchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTableBatchResultShape', ],
            ],
        ],
        'ConsoleGeneralDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DmsSqlsResult' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSqlResult', ], ],
            ],
        ],
        'DmsSqlResult' => [
            'type' => 'structure',
            'members' => [
                'sqlType' => [ 'type' => 'string', 'locationName' => 'sqlType', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'retCode' => [ 'type' => 'integer', 'locationName' => 'retCode', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'queryResult' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'result' => [ 'type' => 'integer', 'locationName' => 'result', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'time' => [ 'type' => 'integer', 'locationName' => 'time', ],
                'affectCount' => [ 'type' => 'integer', 'locationName' => 'affectCount', ],
            ],
        ],
        'ConsoleSqlResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSqlResult', ], ],
            ],
        ],
        'TriggerListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TriggerListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TriggerListResultShape', ],
            ],
        ],
        'GeneralCreateTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralCreateTriggerResultShape', ],
            ],
        ],
        'GeneralDropTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralAlterTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralCreateTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'triggerTiming' => [ 'type' => 'string', 'locationName' => 'triggerTiming', ],
                'triggerEvent' => [ 'type' => 'string', 'locationName' => 'triggerEvent', ],
                'triggerTable' => [ 'type' => 'string', 'locationName' => 'triggerTable', ],
                'triggerStatement' => [ 'type' => 'string', 'locationName' => 'triggerStatement', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TriggerInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'triggerTiming' => [ 'type' => 'string', 'locationName' => 'triggerTiming', ],
                'triggerEvent' => [ 'type' => 'string', 'locationName' => 'triggerEvent', ],
                'triggerTable' => [ 'type' => 'string', 'locationName' => 'triggerTable', ],
                'triggerStatement' => [ 'type' => 'string', 'locationName' => 'triggerStatement', ],
            ],
        ],
        'GeneralAlterTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'originTriggerName' => [ 'type' => 'string', 'locationName' => 'originTriggerName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'triggerTiming' => [ 'type' => 'string', 'locationName' => 'triggerTiming', ],
                'triggerEvent' => [ 'type' => 'string', 'locationName' => 'triggerEvent', ],
                'triggerTable' => [ 'type' => 'string', 'locationName' => 'triggerTable', ],
                'triggerStatement' => [ 'type' => 'string', 'locationName' => 'triggerStatement', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralAlterTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralAlterTriggerResultShape', ],
            ],
        ],
        'TriggerInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TriggerInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TriggerInfoResultShape', ],
            ],
        ],
        'GeneralDropTriggerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralDropTriggerResultShape', ],
            ],
        ],
        'GeneralDropTriggerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'triggerName' => [ 'type' => 'string', 'locationName' => 'triggerName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateTriggerResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'TriggerListResultShape' => [
            'type' => 'structure',
            'members' => [
                'triggerNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GeneralCreateViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'viewAlgorithm' => [ 'type' => 'string', 'locationName' => 'viewAlgorithm', ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'viewSecurity' => [ 'type' => 'string', 'locationName' => 'viewSecurity', ],
                'viewCheckOption' => [ 'type' => 'string', 'locationName' => 'viewCheckOption', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralDropViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralDropViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralAlterViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralAlterViewResultShape', ],
            ],
        ],
        'GeneralCreateViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'ViewInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GeneralCreateViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralCreateViewResultShape', ],
            ],
        ],
        'GeneralAlterViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSql', ], ],
            ],
        ],
        'GeneralDropViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GeneralDropViewResultShape', ],
            ],
        ],
        'GeneralAlterViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'originViewName' => [ 'type' => 'string', 'locationName' => 'originViewName', ],
                'viewAlgorithm' => [ 'type' => 'string', 'locationName' => 'viewAlgorithm', ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'viewSecurity' => [ 'type' => 'string', 'locationName' => 'viewSecurity', ],
                'viewCheckOption' => [ 'type' => 'string', 'locationName' => 'viewCheckOption', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ViewInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'definer' => [ 'type' => 'string', 'locationName' => 'definer', ],
                'viewAlgorithm' => [ 'type' => 'string', 'locationName' => 'viewAlgorithm', ],
                'viewCheckOption' => [ 'type' => 'string', 'locationName' => 'viewCheckOption', ],
                'viewSecurity' => [ 'type' => 'string', 'locationName' => 'viewSecurity', ],
                'definitionSql' => [ 'type' => 'string', 'locationName' => 'definitionSql', ],
            ],
        ],
        'ViewInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ViewInfoResultShape', ],
            ],
        ],
    ],
];
