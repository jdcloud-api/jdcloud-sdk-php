<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'dcap',
        'protocol' => 'json',
//        'serviceFullName' => 'dcap',
//        'serviceId' => 'dcap',
    ],
    'operations' => [
        'DescribeLevelList' => [
            'name' => 'DescribeLevelList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/level',
            ],
            'input' => [ 'shape' => 'DescribeLevelListRequestShape', ],
            'output' => [ 'shape' => 'DescribeLevelListResponseShape', ],
        ],
        'ModifyLevel' => [
            'name' => 'ModifyLevel',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/level/{levelId}',
            ],
            'input' => [ 'shape' => 'ModifyLevelRequestShape', ],
            'output' => [ 'shape' => 'ModifyLevelResponseShape', ],
        ],
        'DescribeCategoryList' => [
            'name' => 'DescribeCategoryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/category',
            ],
            'input' => [ 'shape' => 'DescribeCategoryListRequestShape', ],
            'output' => [ 'shape' => 'DescribeCategoryListResponseShape', ],
        ],
        'AddCategory' => [
            'name' => 'AddCategory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/category',
            ],
            'input' => [ 'shape' => 'AddCategoryRequestShape', ],
            'output' => [ 'shape' => 'AddCategoryResponseShape', ],
        ],
        'ModifyCategory' => [
            'name' => 'ModifyCategory',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/category/{categoryId}',
            ],
            'input' => [ 'shape' => 'ModifyCategoryRequestShape', ],
            'output' => [ 'shape' => 'ModifyCategoryResponseShape', ],
        ],
        'DeleteCategory' => [
            'name' => 'DeleteCategory',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/category/{categoryId}',
            ],
            'input' => [ 'shape' => 'DeleteCategoryRequestShape', ],
            'output' => [ 'shape' => 'DeleteCategoryResponseShape', ],
        ],
        'DescribeDataTypeList' => [
            'name' => 'DescribeDataTypeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/category/{categoryId}/dataType',
            ],
            'input' => [ 'shape' => 'DescribeDataTypeListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataTypeListResponseShape', ],
        ],
        'CreateDataType' => [
            'name' => 'CreateDataType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/category/{categoryId}/dataType',
            ],
            'input' => [ 'shape' => 'CreateDataTypeRequestShape', ],
            'output' => [ 'shape' => 'CreateDataTypeResponseShape', ],
        ],
        'ModifyDataType' => [
            'name' => 'ModifyDataType',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/category/{categoryId}/dataType/{typeId}',
            ],
            'input' => [ 'shape' => 'ModifyDataTypeRequestShape', ],
            'output' => [ 'shape' => 'ModifyDataTypeResponseShape', ],
        ],
        'DeleteDataType' => [
            'name' => 'DeleteDataType',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/category/{categoryId}/dataType/{typeId}',
            ],
            'input' => [ 'shape' => 'DeleteDataTypeRequestShape', ],
            'output' => [ 'shape' => 'DeleteDataTypeResponseShape', ],
        ],
        'DescribeDataSourceList' => [
            'name' => 'DescribeDataSourceList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dataSources',
            ],
            'input' => [ 'shape' => 'DescribeDataSourceListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataSourceListResponseShape', ],
        ],
        'CreateDataSource' => [
            'name' => 'CreateDataSource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dataSources',
            ],
            'input' => [ 'shape' => 'CreateDataSourceRequestShape', ],
            'output' => [ 'shape' => 'CreateDataSourceResponseShape', ],
        ],
        'DescribeDataSource' => [
            'name' => 'DescribeDataSource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}',
            ],
            'input' => [ 'shape' => 'DescribeDataSourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataSourceResponseShape', ],
        ],
        'UpdateDataSourceName' => [
            'name' => 'UpdateDataSourceName',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}',
            ],
            'input' => [ 'shape' => 'UpdateDataSourceNameRequestShape', ],
            'output' => [ 'shape' => 'UpdateDataSourceNameResponseShape', ],
        ],
        'DeleteDataSource' => [
            'name' => 'DeleteDataSource',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}',
            ],
            'input' => [ 'shape' => 'DeleteDataSourceRequestShape', ],
            'output' => [ 'shape' => 'DeleteDataSourceResponseShape', ],
        ],
        'SetDataSourceKms' => [
            'name' => 'SetDataSourceKms',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}:setKms',
            ],
            'input' => [ 'shape' => 'SetDataSourceKmsRequestShape', ],
            'output' => [ 'shape' => 'SetDataSourceKmsResponseShape', ],
        ],
        'GenerateDataSourceDDL' => [
            'name' => 'GenerateDataSourceDDL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}:generateDDL',
            ],
            'input' => [ 'shape' => 'GenerateDataSourceDDLRequestShape', ],
            'output' => [ 'shape' => 'GenerateDataSourceDDLResponseShape', ],
        ],
        'DescribeDataSourceTableList' => [
            'name' => 'DescribeDataSourceTableList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables',
            ],
            'input' => [ 'shape' => 'DescribeDataSourceTableListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataSourceTableListResponseShape', ],
        ],
        'CreateDataSourceTable' => [
            'name' => 'CreateDataSourceTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables',
            ],
            'input' => [ 'shape' => 'CreateDataSourceTableRequestShape', ],
            'output' => [ 'shape' => 'CreateDataSourceTableResponseShape', ],
        ],
        'DescribeDataSourceTableFieldList' => [
            'name' => 'DescribeDataSourceTableFieldList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}',
            ],
            'input' => [ 'shape' => 'DescribeDataSourceTableFieldListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataSourceTableFieldListResponseShape', ],
        ],
        'CreateDataSourceTableField' => [
            'name' => 'CreateDataSourceTableField',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}',
            ],
            'input' => [ 'shape' => 'CreateDataSourceTableFieldRequestShape', ],
            'output' => [ 'shape' => 'CreateDataSourceTableFieldResponseShape', ],
        ],
        'DeleteDataSourceTable' => [
            'name' => 'DeleteDataSourceTable',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}',
            ],
            'input' => [ 'shape' => 'DeleteDataSourceTableRequestShape', ],
            'output' => [ 'shape' => 'DeleteDataSourceTableResponseShape', ],
        ],
        'DescribeDataSourceTableField' => [
            'name' => 'DescribeDataSourceTableField',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}/fields/{fieldName}',
            ],
            'input' => [ 'shape' => 'DescribeDataSourceTableFieldRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataSourceTableFieldResponseShape', ],
        ],
        'ModifyDataSourceTableField' => [
            'name' => 'ModifyDataSourceTableField',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}/fields/{fieldName}',
            ],
            'input' => [ 'shape' => 'ModifyDataSourceTableFieldRequestShape', ],
            'output' => [ 'shape' => 'ModifyDataSourceTableFieldResponseShape', ],
        ],
        'DeleteDataSourceTableField' => [
            'name' => 'DeleteDataSourceTableField',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}/fields/{fieldName}',
            ],
            'input' => [ 'shape' => 'DeleteDataSourceTableFieldRequestShape', ],
            'output' => [ 'shape' => 'DeleteDataSourceTableFieldResponseShape', ],
        ],
        'ModifyDataSourceTableFieldTag' => [
            'name' => 'ModifyDataSourceTableFieldTag',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/dataSources/{dataSourceId}/tables/{tableName}/fields/{fieldName}/tag',
            ],
            'input' => [ 'shape' => 'ModifyDataSourceTableFieldTagRequestShape', ],
            'output' => [ 'shape' => 'ModifyDataSourceTableFieldTagResponseShape', ],
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
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'SetInstanceAccessKey' => [
            'name' => 'SetInstanceAccessKey',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setAccessKey',
            ],
            'input' => [ 'shape' => 'SetInstanceAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceAccessKeyResponseShape', ],
        ],
        'SetInstanceByPassMode' => [
            'name' => 'SetInstanceByPassMode',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setByPass',
            ],
            'input' => [ 'shape' => 'SetInstanceByPassModeRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceByPassModeResponseShape', ],
        ],
        'DescribeInstanceConfig' => [
            'name' => 'DescribeInstanceConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:config',
            ],
            'input' => [ 'shape' => 'DescribeInstanceConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceConfigResponseShape', ],
        ],
        'DescribeAppList' => [
            'name' => 'DescribeAppList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/applications',
            ],
            'input' => [ 'shape' => 'DescribeAppListRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppListResponseShape', ],
        ],
        'DescribeIpWhiteList' => [
            'name' => 'DescribeIpWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipWhite',
            ],
            'input' => [ 'shape' => 'DescribeIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpWhiteListResponseShape', ],
        ],
        'AddIpWhiteItem' => [
            'name' => 'AddIpWhiteItem',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipWhite',
            ],
            'input' => [ 'shape' => 'AddIpWhiteItemRequestShape', ],
            'output' => [ 'shape' => 'AddIpWhiteItemResponseShape', ],
        ],
        'DeleteIpWhiteItem' => [
            'name' => 'DeleteIpWhiteItem',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipWhite',
            ],
            'input' => [ 'shape' => 'DeleteIpWhiteItemRequestShape', ],
            'output' => [ 'shape' => 'DeleteIpWhiteItemResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
