<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'xdata',
        'protocol' => 'json',
//        'serviceFullName' => 'xdata',
//        'serviceId' => 'xdata',
    ],
    'operations' => [
        'ListDatabaseInfo' => [
            'name' => 'ListDatabaseInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwDatabase',
            ],
            'input' => [ 'shape' => 'ListDatabaseInfoRequestShape', ],
            'output' => [ 'shape' => 'ListDatabaseInfoResponseShape', ],
        ],
        'GetDatabaseInfo' => [
            'name' => 'GetDatabaseInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwDatabase/{databaseName}',
            ],
            'input' => [ 'shape' => 'GetDatabaseInfoRequestShape', ],
            'output' => [ 'shape' => 'GetDatabaseInfoResponseShape', ],
        ],
        'CreateDatabase' => [
            'name' => 'CreateDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dwDatabase/{databaseName}',
            ],
            'input' => [ 'shape' => 'CreateDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateDatabaseResponseShape', ],
        ],
        'DeleteDatabase' => [
            'name' => 'DeleteDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dwDatabase/{databaseName}',
            ],
            'input' => [ 'shape' => 'DeleteDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatabaseResponseShape', ],
        ],
        'ListInstanceInfo' => [
            'name' => 'ListInstanceInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwInstance',
            ],
            'input' => [ 'shape' => 'ListInstanceInfoRequestShape', ],
            'output' => [ 'shape' => 'ListInstanceInfoResponseShape', ],
        ],
        'ExecuteRasQuery' => [
            'name' => 'ExecuteRasQuery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:executeRasQuery',
            ],
            'input' => [ 'shape' => 'ExecuteRasQueryRequestShape', ],
            'output' => [ 'shape' => 'ExecuteRasQueryResponseShape', ],
        ],
        'ExecutePySparkQuery' => [
            'name' => 'ExecutePySparkQuery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:executePySparkQuery',
            ],
            'input' => [ 'shape' => 'ExecutePySparkQueryRequestShape', ],
            'output' => [ 'shape' => 'ExecutePySparkQueryResponseShape', ],
        ],
        'GetRasQueryState' => [
            'name' => 'GetRasQueryState',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:getRasQueryState',
            ],
            'input' => [ 'shape' => 'GetRasQueryStateRequestShape', ],
            'output' => [ 'shape' => 'GetRasQueryStateResponseShape', ],
        ],
        'GetPySparkExecuteState' => [
            'name' => 'GetPySparkExecuteState',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:getPySparkExecuteState',
            ],
            'input' => [ 'shape' => 'GetPySparkExecuteStateRequestShape', ],
            'output' => [ 'shape' => 'GetPySparkExecuteStateResponseShape', ],
        ],
        'GetRasQueryLog' => [
            'name' => 'GetRasQueryLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:getRasQueryLog',
            ],
            'input' => [ 'shape' => 'GetRasQueryLogRequestShape', ],
            'output' => [ 'shape' => 'GetRasQueryLogResponseShape', ],
        ],
        'GetRasQueryResult' => [
            'name' => 'GetRasQueryResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:getRasQueryResult',
            ],
            'input' => [ 'shape' => 'GetRasQueryResultRequestShape', ],
            'output' => [ 'shape' => 'GetRasQueryResultResponseShape', ],
        ],
        'GetPySparkExecuteResult' => [
            'name' => 'GetPySparkExecuteResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:getPySparkExecuteResult',
            ],
            'input' => [ 'shape' => 'GetPySparkExecuteResultRequestShape', ],
            'output' => [ 'shape' => 'GetPySparkExecuteResultResponseShape', ],
        ],
        'CancelRasQuery' => [
            'name' => 'CancelRasQuery',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:cancelRasQuery',
            ],
            'input' => [ 'shape' => 'CancelRasQueryRequestShape', ],
            'output' => [ 'shape' => 'CancelRasQueryResponseShape', ],
        ],
        'CancelPySparkJob' => [
            'name' => 'CancelPySparkJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dwQuery:cancelPySparkQuery',
            ],
            'input' => [ 'shape' => 'CancelPySparkJobRequestShape', ],
            'output' => [ 'shape' => 'CancelPySparkJobResponseShape', ],
        ],
        'ListTableInfo' => [
            'name' => 'ListTableInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwTable',
            ],
            'input' => [ 'shape' => 'ListTableInfoRequestShape', ],
            'output' => [ 'shape' => 'ListTableInfoResponseShape', ],
        ],
        'CreateTable' => [
            'name' => 'CreateTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dwTable',
            ],
            'input' => [ 'shape' => 'CreateTableRequestShape', ],
            'output' => [ 'shape' => 'CreateTableResponseShape', ],
        ],
        'GetTableInfo' => [
            'name' => 'GetTableInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dwTable/{tableName}',
            ],
            'input' => [ 'shape' => 'GetTableInfoRequestShape', ],
            'output' => [ 'shape' => 'GetTableInfoResponseShape', ],
        ],
        'DeleteTable' => [
            'name' => 'DeleteTable',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dwTable/{tableName}',
            ],
            'input' => [ 'shape' => 'DeleteTableRequestShape', ],
            'output' => [ 'shape' => 'DeleteTableResponseShape', ],
        ],
    ],
    'shapes' => [
        'DwDatabase' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'totalTableQuantity' => [ 'type' => 'integer', 'locationName' => 'totalTableQuantity', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'physicalStorageCapacity' => [ 'type' => 'string', 'locationName' => 'physicalStorageCapacity', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'comments' => [ 'type' => 'string', 'locationName' => 'comments', ],
            ],
        ],
        'DwDatabaseInfo' => [
            'type' => 'structure',
            'members' => [
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'comments' => [ 'type' => 'string', 'locationName' => 'comments', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
            ],
        ],
        'DwHiveObjectPrivileges' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'select' => [ 'type' => 'boolean', 'locationName' => 'select', ],
                'insert' => [ 'type' => 'boolean', 'locationName' => 'insert', ],
                'update' => [ 'type' => 'boolean', 'locationName' => 'update', ],
                'delete' => [ 'type' => 'boolean', 'locationName' => 'delete', ],
                'drop' => [ 'type' => 'boolean', 'locationName' => 'drop', ],
                'create' => [ 'type' => 'boolean', 'locationName' => 'create', ],
                'alter' => [ 'type' => 'boolean', 'locationName' => 'alter', ],
                'owner' => [ 'type' => 'boolean', 'locationName' => 'owner', ],
            ],
        ],
        'DwInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'comments' => [ 'type' => 'string', 'locationName' => 'comments', ],
                'instanceOwnerName' => [ 'type' => 'string', 'locationName' => 'instanceOwnerName', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'uname' => [ 'type' => 'string', 'locationName' => 'uname', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'DwTable' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'physicalStorageCapacity' => [ 'type' => 'string', 'locationName' => 'physicalStorageCapacity', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'hiveFileFormat' => [ 'type' => 'string', 'locationName' => 'hiveFileFormat', ],
                'encryption' => [ 'type' => 'string', 'locationName' => 'encryption', ],
                'location' => [ 'type' => 'string', 'locationName' => 'location', ],
                'comments' => [ 'type' => 'string', 'locationName' => 'comments', ],
                'hiveObjectPrivileges' =>  [ 'shape' => 'DwHiveObjectPrivileges', ],
                'parameters' => [ 'type' => 'object', 'locationName' => 'parameters', ],
            ],
        ],
        'DwTableRow' => [
            'type' => 'structure',
            'members' => [
                'columnName' => [ 'type' => 'string', 'locationName' => 'columnName', ],
                'columnType' => [ 'type' => 'string', 'locationName' => 'columnType', ],
                'isPartition' => [ 'type' => 'boolean', 'locationName' => 'isPartition', ],
                'comments' => [ 'type' => 'string', 'locationName' => 'comments', ],
            ],
        ],
        'DwTableDesc' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'hiveFileFormat' => [ 'type' => 'string', 'locationName' => 'hiveFileFormat', ],
                'fieldsDelimit' => [ 'type' => 'string', 'locationName' => 'fieldsDelimit', ],
                'linesDelimit' => [ 'type' => 'string', 'locationName' => 'linesDelimit', ],
                'otherSerdeProperties' => [ 'type' => 'object', 'locationName' => 'otherSerdeProperties', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'comments' => [ 'type' => 'string', 'locationName' => 'comments', ],
                'externalLocation' => [ 'type' => 'string', 'locationName' => 'externalLocation', ],
                'parameters' => [ 'type' => 'object', 'locationName' => 'parameters', ],
                'rows' => [ 'type' => 'list', 'member' => [ 'shape' => 'DwTableRow', ], ],
            ],
        ],
        'DeleteDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDatabaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDatabaseInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDatabaseInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDatabaseInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'DwDatabase', ],
            ],
        ],
        'GetDatabaseInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
            ],
        ],
        'DeleteDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDatabaseResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
            ],
        ],
        'ListDatabaseInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DwDatabaseInfo', ], ],
            ],
        ],
        'DeleteDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
            ],
        ],
        'ListDatabaseInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDatabaseInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDatabaseInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListInstanceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DwInstance', ], ],
            ],
        ],
        'ListInstanceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListInstanceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListInstanceInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRasQueryLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CancelRasQueryResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetRasQueryResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRasQueryResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPySparkExecuteStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ExecutePySparkQueryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'script' => [ 'type' => 'string', 'locationName' => 'script', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceOwnerName' => [ 'type' => 'string', 'locationName' => 'instanceOwnerName', ],
                'scriptType' => [ 'type' => 'string', 'locationName' => 'scriptType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetRasQueryResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetPySparkExecuteResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExecutePySparkQueryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecutePySparkQueryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRasQueryStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetRasQueryStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'GetRasQueryLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetPySparkExecuteResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPySparkExecuteResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPySparkExecuteStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPySparkExecuteStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CancelRasQueryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CancelRasQueryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRasQueryResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CancelPySparkJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CancelPySparkJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CancelPySparkJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecuteRasQueryResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'integer', 'locationName' => 'data', ],
            ],
        ],
        'GetPySparkExecuteStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CancelPySparkJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ExecuteRasQueryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'callBackURL' => [ 'type' => 'string', 'locationName' => 'callBackURL', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceOwnerName' => [ 'type' => 'string', 'locationName' => 'instanceOwnerName', ],
                'isExplain' => [ 'type' => 'string', 'locationName' => 'isExplain', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExecutePySparkQueryResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'integer', 'locationName' => 'data', ],
            ],
        ],
        'CancelRasQueryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'queryId' => [ 'type' => 'string', 'locationName' => 'queryId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetRasQueryLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRasQueryLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPySparkExecuteResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetRasQueryStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRasQueryStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecuteRasQueryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecuteRasQueryResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTableInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' =>  [ 'shape' => 'DwTable', ],
            ],
        ],
        'CreateTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'dbModelDBTable' =>  [ 'shape' => 'DwTableDesc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTableInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTableInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DeleteTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'ListTableInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DwTable', ], ],
            ],
        ],
        'ListTableInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetTableInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'ListTableInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTableInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteTableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
