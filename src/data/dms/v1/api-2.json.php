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
        'OpenTable' => [
            'name' => 'OpenTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:openTable',
            ],
            'input' => [ 'shape' => 'OpenTableRequestShape', ],
            'output' => [ 'shape' => 'OpenTableResponseShape', ],
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
        'GetExportId' => [
            'name' => 'GetExportId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:getExportId',
            ],
            'input' => [ 'shape' => 'GetExportIdRequestShape', ],
            'output' => [ 'shape' => 'GetExportIdResponseShape', ],
        ],
        'GetExportDataId' => [
            'name' => 'GetExportDataId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:getExportDataId',
            ],
            'input' => [ 'shape' => 'GetExportDataIdRequestShape', ],
            'output' => [ 'shape' => 'GetExportDataIdResponseShape', ],
        ],
        'DownloadExportFile' => [
            'name' => 'DownloadExportFile',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/console:downloadExportFile',
            ],
            'input' => [ 'shape' => 'DownloadExportFileRequestShape', ],
            'output' => [ 'shape' => 'DownloadExportFileResponseShape', ],
        ],
        'ExportData' => [
            'name' => 'ExportData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:exportData',
            ],
            'input' => [ 'shape' => 'ExportDataRequestShape', ],
            'output' => [ 'shape' => 'ExportDataResponseShape', ],
        ],
        'ExportStruct' => [
            'name' => 'ExportStruct',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:exportStruct',
            ],
            'input' => [ 'shape' => 'ExportStructRequestShape', ],
            'output' => [ 'shape' => 'ExportStructResponseShape', ],
        ],
        'ImportDdlDml' => [
            'name' => 'ImportDdlDml',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/console:import',
            ],
            'input' => [ 'shape' => 'ImportDdlDmlRequestShape', ],
            'output' => [ 'shape' => 'ImportDdlDmlResponseShape', ],
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
        'DmsRegionDomain' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'object', 'locationName' => 'domains', ],
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
        'GetExportDataIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'ignoreCheck' => [ 'type' => 'boolean', 'locationName' => 'ignoreCheck', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'exportTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportTypeEnum', ],
                'exportFileTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportFileTypeEnum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ConsoleSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'ConsoleSqlResultShape', ],
                'result' =>  [ 'shape' => 'ConsoleSqlResultShape', ],
            ],
        ],
        'ImportDdlDmlResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'FormatSqlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FormatSqlResultShape', ],
            ],
        ],
        'OpenTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'error' =>  [ 'shape' => 'OpenTableResultShape', ],
                'result' =>  [ 'shape' => 'OpenTableResultShape', ],
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
        'ExportDataResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportDdlDmlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'sqls' => [ 'type' => 'string', 'locationName' => 'sqls', ],
                'sqlConsoleTypeEnum' => [ 'type' => 'string', 'locationName' => 'sqlConsoleTypeEnum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadExportFileResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'GetExportIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'DownloadExportFileResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'OpenTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ConsoleGeneralDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ConsoleGeneralDataResultShape', ],
            ],
        ],
        'ExportStructRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'OpenTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSqlResult', ], ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'ExportDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'exportTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportTypeEnum', ],
                'exportFileTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportFileTypeEnum', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExportDataResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetExportIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetExportIdResultShape', ],
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
        'ExportStructResultShape' => [
            'type' => 'structure',
            'members' => [
                'tableStructs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableStruct', ], ],
            ],
        ],
        'ExportStructResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExportStructResultShape', ],
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
        'GetExportDataIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'strResult' => [ 'type' => 'string', 'locationName' => 'strResult', ],
            ],
        ],
        'ImportDdlDmlResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetExportIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'integer', 'locationName' => 'dataSourceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'exportTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportTypeEnum', ],
                'exportFileTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportFileTypeEnum', ],
                'exportContentTypeEnum' => [ 'type' => 'string', 'locationName' => 'exportContentTypeEnum', ],
                'tableFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadExportFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'exportId' => [ 'type' => 'string', 'locationName' => 'exportId', ],
            ],
        ],
        'DmsSqlsResult' => [
            'type' => 'structure',
            'members' => [
                'dmsSqlResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'DmsSqlResult', ], ],
            ],
        ],
        'GetExportDataIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetExportDataIdResultShape', ],
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
