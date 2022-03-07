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
        'CategoryDesc' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
                'categoryName' => [ 'type' => 'string', 'locationName' => 'categoryName', ],
            ],
        ],
        'CategorySpec' => [
            'type' => 'structure',
            'members' => [
                'categoryName' => [ 'type' => 'string', 'locationName' => 'categoryName', ],
            ],
        ],
        'LevelSpec' => [
            'type' => 'structure',
            'members' => [
                'levelId' => [ 'type' => 'integer', 'locationName' => 'levelId', ],
                'levelTag' => [ 'type' => 'string', 'locationName' => 'levelTag', ],
                'levelDesc' => [ 'type' => 'string', 'locationName' => 'levelDesc', ],
            ],
        ],
        'DataTypeSpec' => [
            'type' => 'structure',
            'members' => [
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'levelId' => [ 'type' => 'integer', 'locationName' => 'levelId', ],
            ],
        ],
        'DataTypeDesc' => [
            'type' => 'structure',
            'members' => [
                'typeId' => [ 'type' => 'string', 'locationName' => 'typeId', ],
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'levelTag' => [ 'type' => 'string', 'locationName' => 'levelTag', ],
            ],
        ],
        'FieldSpec' => [
            'type' => 'structure',
            'members' => [
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'encryptField' => [ 'type' => 'string', 'locationName' => 'encryptField', ],
                'indexField' => [ 'type' => 'string', 'locationName' => 'indexField', ],
                'keepPlainText' => [ 'type' => 'boolean', 'locationName' => 'keepPlainText', ],
            ],
        ],
        'DataSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'dataSourceName' => [ 'type' => 'string', 'locationName' => 'dataSourceName', ],
                'dataSourceType' => [ 'type' => 'integer', 'locationName' => 'dataSourceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'dataSourceAddr' => [ 'type' => 'string', 'locationName' => 'dataSourceAddr', ],
                'dataSourcePort' => [ 'type' => 'integer', 'locationName' => 'dataSourcePort', ],
                'dataSourceDbName' => [ 'type' => 'string', 'locationName' => 'dataSourceDbName', ],
                'kmsKeyId' => [ 'type' => 'string', 'locationName' => 'kmsKeyId', ],
                'keyCipher' => [ 'type' => 'string', 'locationName' => 'keyCipher', ],
                'encryptAlgo' => [ 'type' => 'string', 'locationName' => 'encryptAlgo', ],
                'indexAlgo' => [ 'type' => 'string', 'locationName' => 'indexAlgo', ],
            ],
        ],
        'FieldTagSpec' => [
            'type' => 'structure',
            'members' => [
                'typeId' => [ 'type' => 'string', 'locationName' => 'typeId', ],
            ],
        ],
        'DataSourceDesc' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'dataSourceType' => [ 'type' => 'integer', 'locationName' => 'dataSourceType', ],
                'dataSourceName' => [ 'type' => 'string', 'locationName' => 'dataSourceName', ],
                'dataSourceAddr' => [ 'type' => 'string', 'locationName' => 'dataSourceAddr', ],
                'dataSourcePort' => [ 'type' => 'integer', 'locationName' => 'dataSourcePort', ],
                'dataSourceDbName' => [ 'type' => 'string', 'locationName' => 'dataSourceDbName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'protectStatus' => [ 'type' => 'boolean', 'locationName' => 'protectStatus', ],
                'kmsKeyId' => [ 'type' => 'string', 'locationName' => 'kmsKeyId', ],
                'keyCipher' => [ 'type' => 'string', 'locationName' => 'keyCipher', ],
                'encryptAlgo' => [ 'type' => 'string', 'locationName' => 'encryptAlgo', ],
                'indexAlgo' => [ 'type' => 'string', 'locationName' => 'indexAlgo', ],
            ],
        ],
        'FieldDesc' => [
            'type' => 'structure',
            'members' => [
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'fieldType' => [ 'type' => 'integer', 'locationName' => 'fieldType', ],
                'fieldLength' => [ 'type' => 'integer', 'locationName' => 'fieldLength', ],
                'fieldAttr' => [ 'type' => 'string', 'locationName' => 'fieldAttr', ],
                'fieldComment' => [ 'type' => 'string', 'locationName' => 'fieldComment', ],
                'encryptField' => [ 'type' => 'string', 'locationName' => 'encryptField', ],
                'indexField' => [ 'type' => 'string', 'locationName' => 'indexField', ],
                'keepPlainText' => [ 'type' => 'boolean', 'locationName' => 'keepPlainText', ],
                'fieldTag' => [ 'type' => 'string', 'locationName' => 'fieldTag', ],
                'fieldLevel' => [ 'type' => 'string', 'locationName' => 'fieldLevel', ],
            ],
        ],
        'FieldTagDesc' => [
            'type' => 'structure',
            'members' => [
                'levelTag' => [ 'type' => 'string', 'locationName' => 'levelTag', ],
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'typeId' => [ 'type' => 'string', 'locationName' => 'typeId', ],
            ],
        ],
        'KmsSpec' => [
            'type' => 'structure',
            'members' => [
                'kmsKeyId' => [ 'type' => 'string', 'locationName' => 'kmsKeyId', ],
                'keyCipher' => [ 'type' => 'string', 'locationName' => 'keyCipher', ],
                'encryptAlgo' => [ 'type' => 'string', 'locationName' => 'encryptAlgo', ],
                'indexAlgo' => [ 'type' => 'string', 'locationName' => 'indexAlgo', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'integer', 'locationName' => 'instanceType', ],
                'replicas' => [ 'type' => 'integer', 'locationName' => 'replicas', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
            ],
        ],
        'AppStatistics' => [
            'type' => 'structure',
            'members' => [
                'appUuid' => [ 'type' => 'string', 'locationName' => 'appUuid', ],
                'appAddr' => [ 'type' => 'string', 'locationName' => 'appAddr', ],
                'encryptDataCount' => [ 'type' => 'integer', 'locationName' => 'encryptDataCount', ],
            ],
        ],
        'AppDesc' => [
            'type' => 'structure',
            'members' => [
                'appUuid' => [ 'type' => 'string', 'locationName' => 'appUuid', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appAddr' => [ 'type' => 'string', 'locationName' => 'appAddr', ],
                'onlineTime' => [ 'type' => 'string', 'locationName' => 'onlineTime', ],
            ],
        ],
        'InstanceDesc' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'integer', 'locationName' => 'instanceType', ],
                'insRegion' => [ 'type' => 'string', 'locationName' => 'insRegion', ],
                'insZone' => [ 'type' => 'string', 'locationName' => 'insZone', ],
                'isBypass' => [ 'type' => 'boolean', 'locationName' => 'isBypass', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
            ],
        ],
        'PackageSpec' => [
            'type' => 'structure',
            'members' => [
                'pkgType' => [ 'type' => 'integer', 'locationName' => 'pkgType', ],
                'dsCount' => [ 'type' => 'integer', 'locationName' => 'dsCount', ],
                'orderVo' =>  [ 'shape' => 'OrderVo', ],
            ],
        ],
        'OrderVo' => [
            'type' => 'structure',
            'members' => [
                'orderType' => [ 'type' => 'string', 'locationName' => 'orderType', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'autoRenew' => [ 'type' => 'string', 'locationName' => 'autoRenew', ],
                'renewTimeUnit' => [ 'type' => 'string', 'locationName' => 'renewTimeUnit', ],
                'renewTimeSpan' => [ 'type' => 'integer', 'locationName' => 'renewTimeSpan', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
            ],
        ],
        'PackageDetail' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'DataSourceTrendItem' => [
            'type' => 'structure',
            'members' => [
                'timeStamp' => [ 'type' => 'integer', 'locationName' => 'timeStamp', ],
                'protectDataSourceCount' => [ 'type' => 'integer', 'locationName' => 'protectDataSourceCount', ],
                'totalDataSourceCount' => [ 'type' => 'integer', 'locationName' => 'totalDataSourceCount', ],
            ],
        ],
        'EncryptTrendItem' => [
            'type' => 'structure',
            'members' => [
                'timeStamp' => [ 'type' => 'integer', 'locationName' => 'timeStamp', ],
                'encryptDataCount' => [ 'type' => 'integer', 'locationName' => 'encryptDataCount', ],
            ],
        ],
        'DescribeDataTypeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDataTypeListResultShape', ],
            ],
        ],
        'DescribeCategoryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'CategoryDesc', ], ],
            ],
        ],
        'DescribeDataTypeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
            ],
        ],
        'DescribeLevelListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'LevelSpec', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLevelListRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyDataTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataType' =>  [ 'shape' => 'DataTypeSpec', ],
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
                'typeId' => [ 'type' => 'string', 'locationName' => 'typeId', ],
            ],
        ],
        'DescribeDataTypeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataTypeDesc', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
            ],
        ],
        'ModifyCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categorySpec' =>  [ 'shape' => 'CategorySpec', ],
            ],
        ],
        'CreateDataTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataType' =>  [ 'shape' => 'DataTypeSpec', ],
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
            ],
        ],
        'ModifyCategoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categorySpec' =>  [ 'shape' => 'CategorySpec', ],
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
            ],
        ],
        'CreateDataTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyLevelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCategoryListRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLevelListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLevelListResultShape', ],
            ],
        ],
        'AddCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyLevelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'levelSpec' =>  [ 'shape' => 'LevelSpec', ],
                'levelId' => [ 'type' => 'integer', 'locationName' => 'levelId', ],
            ],
        ],
        'DescribeCategoryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCategoryListResultShape', ],
            ],
        ],
        'ModifyDataTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDataTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyLevelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDataTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDataTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDataTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'categoryId' => [ 'type' => 'integer', 'locationName' => 'categoryId', ],
                'typeId' => [ 'type' => 'string', 'locationName' => 'typeId', ],
            ],
        ],
        'AddCategoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCategoryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDataTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDataSourceTableListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDataSourceTableListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDataSourceTableListResultShape', ],
            ],
        ],
        'DescribeDataSourceTableFieldResultShape' => [
            'type' => 'structure',
            'members' => [
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'fieldType' => [ 'type' => 'integer', 'locationName' => 'fieldType', ],
                'fieldLength' => [ 'type' => 'integer', 'locationName' => 'fieldLength', ],
                'fieldAttr' => [ 'type' => 'string', 'locationName' => 'fieldAttr', ],
                'fieldComment' => [ 'type' => 'string', 'locationName' => 'fieldComment', ],
                'encryptField' => [ 'type' => 'string', 'locationName' => 'encryptField', ],
                'indexField' => [ 'type' => 'string', 'locationName' => 'indexField', ],
                'keepPlainText' => [ 'type' => 'boolean', 'locationName' => 'keepPlainText', ],
                'fieldTag' => [ 'type' => 'string', 'locationName' => 'fieldTag', ],
                'fieldLevel' => [ 'type' => 'string', 'locationName' => 'fieldLevel', ],
            ],
        ],
        'DescribeDataSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'DescribeDataSourceTableFieldListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldDesc', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyDataSourceTableFieldTagRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fieldTagSpec' =>  [ 'shape' => 'FieldTagSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
            ],
        ],
        'ModifyDataSourceTableFieldTagResultShape' => [
            'type' => 'structure',
            'members' => [
                'fieldTagDesc' =>  [ 'shape' => 'FieldTagDesc', ],
            ],
        ],
        'DescribeDataSourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'dataSourceType' => [ 'type' => 'integer', 'locationName' => 'dataSourceType', ],
                'dataSourceName' => [ 'type' => 'string', 'locationName' => 'dataSourceName', ],
                'dataSourceAddr' => [ 'type' => 'string', 'locationName' => 'dataSourceAddr', ],
                'dataSourcePort' => [ 'type' => 'integer', 'locationName' => 'dataSourcePort', ],
                'dataSourceDbName' => [ 'type' => 'string', 'locationName' => 'dataSourceDbName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'protectStatus' => [ 'type' => 'boolean', 'locationName' => 'protectStatus', ],
                'kmsKeyId' => [ 'type' => 'string', 'locationName' => 'kmsKeyId', ],
                'keyCipher' => [ 'type' => 'string', 'locationName' => 'keyCipher', ],
                'encryptAlgo' => [ 'type' => 'string', 'locationName' => 'encryptAlgo', ],
                'indexAlgo' => [ 'type' => 'string', 'locationName' => 'indexAlgo', ],
            ],
        ],
        'DeleteDataSourceTableFieldResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDataSourceTableFieldRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
            ],
        ],
        'SetDataSourceKmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDataSourceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataSourceDesc', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDataSourceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDataSourceListResultShape', ],
            ],
        ],
        'SetDataSourceKmsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDataSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDataSourceResultShape', ],
            ],
        ],
        'UpdateDataSourceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDataSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDataSourceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GenerateDataSourceDDLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GenerateDataSourceDDLResultShape', ],
            ],
        ],
        'UpdateDataSourceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceName' => [ 'type' => 'string', 'locationName' => 'dataSourceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'ModifyDataSourceTableFieldRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fieldSpec' =>  [ 'shape' => 'FieldSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
            ],
        ],
        'DescribeDataSourceTableFieldListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDataSourceTableFieldListResultShape', ],
            ],
        ],
        'DeleteDataSourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDataSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'ModifyDataSourceTableFieldTagResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifyDataSourceTableFieldTagResultShape', ],
            ],
        ],
        'ModifyDataSourceTableFieldResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateDataSourceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDataSourceTableFieldResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDataSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDataSourceResultShape', ],
            ],
        ],
        'DescribeDataSourceTableFieldResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDataSourceTableFieldResultShape', ],
            ],
        ],
        'CreateDataSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceSpec' =>  [ 'shape' => 'DataSourceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteDataSourceTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDataSourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'DescribeDataSourceTableFieldListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'ModifyDataSourceTableFieldResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDataSourceTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'CreateDataSourceTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDataSourceTableFieldRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
            ],
        ],
        'CreateDataSourceTableFieldRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fieldSpec' =>  [ 'shape' => 'FieldSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'DeleteDataSourceTableResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDataSourceTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GenerateDataSourceDDLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
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
        'CreateDataSourceTableFieldResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDataSourceTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
            ],
        ],
        'SetDataSourceKmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'kmsSpec' =>  [ 'shape' => 'KmsSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'GenerateDataSourceDDLResultShape' => [
            'type' => 'structure',
            'members' => [
                'ddl' => [ 'type' => 'string', 'locationName' => 'ddl', ],
            ],
        ],
        'DescribeDataSourceTableListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
            ],
        ],
        'CreateDataSourceTableFieldResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetInstanceByPassModeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstanceByPassModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'byPassMode' => [ 'type' => 'boolean', 'locationName' => 'byPassMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddIpWhiteItemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddIpWhiteItemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
            ],
        ],
        'SetInstanceByPassModeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'integer', 'locationName' => 'instanceType', ],
                'insRegion' => [ 'type' => 'string', 'locationName' => 'insRegion', ],
                'insZone' => [ 'type' => 'string', 'locationName' => 'insZone', ],
                'isBypass' => [ 'type' => 'boolean', 'locationName' => 'isBypass', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'dataSourceId' => [ 'type' => 'string', 'locationName' => 'dataSourceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
            ],
        ],
        'DescribeAppListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAppListResultShape', ],
            ],
        ],
        'DescribeAppListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceListResultShape', ],
            ],
        ],
        'SetInstanceAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteIpWhiteItemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstanceAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteIpWhiteItemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cidr' => [ 'type' => 'string', 'locationName' => 'cidr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceDesc', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'SetInstanceAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'configuration' => [ 'type' => 'string', 'locationName' => 'configuration', ],
            ],
        ],
        'DescribeInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceConfigResultShape', ],
            ],
        ],
        'DeleteIpWhiteItemResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppListResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppDesc', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddIpWhiteItemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appUuid' => [ 'type' => 'string', 'locationName' => 'appUuid', ],
                'appAddr' => [ 'type' => 'string', 'locationName' => 'appAddr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
    ],
];
