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
    ],
];
