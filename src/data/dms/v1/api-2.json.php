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
    ],
];
