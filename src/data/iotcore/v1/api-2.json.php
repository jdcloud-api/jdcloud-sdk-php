<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotcore',
        'protocol' => 'json',
//        'serviceFullName' => 'iotcore',
//        'serviceId' => 'iotcore',
    ],
    'operations' => [
        'DescribeThingShadow' => [
            'name' => 'DescribeThingShadow',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/devices/{identifier}/shadow',
            ],
            'input' => [ 'shape' => 'DescribeThingShadowRequestShape', ],
            'output' => [ 'shape' => 'DescribeThingShadowResponseShape', ],
        ],
        'UpdateThingShadow' => [
            'name' => 'UpdateThingShadow',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/devices/{identifier}/shadow',
            ],
            'input' => [ 'shape' => 'UpdateThingShadowRequestShape', ],
            'output' => [ 'shape' => 'UpdateThingShadowResponseShape', ],
        ],
        'InvokeThingService' => [
            'name' => 'InvokeThingService',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/devices/{identifier}/services',
            ],
            'input' => [ 'shape' => 'InvokeThingServiceRequestShape', ],
            'output' => [ 'shape' => 'InvokeThingServiceResponseShape', ],
        ],
        'QueryDevicePage' => [
            'name' => 'QueryDevicePage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/devices:queryPage',
            ],
            'input' => [ 'shape' => 'QueryDevicePageRequestShape', ],
            'output' => [ 'shape' => 'QueryDevicePageResponseShape', ],
        ],
        'UpdateDevice' => [
            'name' => 'UpdateDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/device/{deviceId}:update',
            ],
            'input' => [ 'shape' => 'UpdateDeviceRequestShape', ],
            'output' => [ 'shape' => 'UpdateDeviceResponseShape', ],
        ],
        'AddDevice' => [
            'name' => 'AddDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/device:add',
            ],
            'input' => [ 'shape' => 'AddDeviceRequestShape', ],
            'output' => [ 'shape' => 'AddDeviceResponseShape', ],
        ],
        'QueryDeviceDetail' => [
            'name' => 'QueryDeviceDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/device/{deviceName}:detail',
            ],
            'input' => [ 'shape' => 'QueryDeviceDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryDeviceDetailResponseShape', ],
        ],
        'RemoveDevice' => [
            'name' => 'RemoveDevice',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/device/{deviceName}:delete',
            ],
            'input' => [ 'shape' => 'RemoveDeviceRequestShape', ],
            'output' => [ 'shape' => 'RemoveDeviceResponseShape', ],
        ],
        'ListProducts' => [
            'name' => 'ListProducts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products',
            ],
            'input' => [ 'shape' => 'ListProductsRequestShape', ],
            'output' => [ 'shape' => 'ListProductsResponseShape', ],
        ],
        'CreateProduct' => [
            'name' => 'CreateProduct',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products',
            ],
            'input' => [ 'shape' => 'CreateProductRequestShape', ],
            'output' => [ 'shape' => 'CreateProductResponseShape', ],
        ],
        'DescribeProduct' => [
            'name' => 'DescribeProduct',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}',
            ],
            'input' => [ 'shape' => 'DescribeProductRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductResponseShape', ],
        ],
        'UpdateProduct' => [
            'name' => 'UpdateProduct',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}',
            ],
            'input' => [ 'shape' => 'UpdateProductRequestShape', ],
            'output' => [ 'shape' => 'UpdateProductResponseShape', ],
        ],
        'DeleteProduct' => [
            'name' => 'DeleteProduct',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}',
            ],
            'input' => [ 'shape' => 'DeleteProductRequestShape', ],
            'output' => [ 'shape' => 'DeleteProductResponseShape', ],
        ],
        'ListProductAbilities' => [
            'name' => 'ListProductAbilities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/abilities',
            ],
            'input' => [ 'shape' => 'ListProductAbilitiesRequestShape', ],
            'output' => [ 'shape' => 'ListProductAbilitiesResponseShape', ],
        ],
        'ImportThingModel' => [
            'name' => 'ImportThingModel',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/abilities:importThingModel',
            ],
            'input' => [ 'shape' => 'ImportThingModelRequestShape', ],
            'output' => [ 'shape' => 'ImportThingModelResponseShape', ],
        ],
        'ExportThingModel' => [
            'name' => 'ExportThingModel',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/abilities:exportThingModel',
            ],
            'input' => [ 'shape' => 'ExportThingModelRequestShape', ],
            'output' => [ 'shape' => 'ExportThingModelResponseShape', ],
        ],
    ],
    'shapes' => [
        'RegionInfo' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'azInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'Azs', ], ],
            ],
        ],
        'Azs' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
            ],
        ],
        'Event' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'output' => [ 'type' => 'object', 'locationName' => 'output', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'DeviceVO' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'activatedTime' => [ 'type' => 'long', 'locationName' => 'activatedTime', ],
                'lastConnectedTime' => [ 'type' => 'long', 'locationName' => 'lastConnectedTime', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
            ],
        ],
        'DeviceBatch' => [
            'type' => 'structure',
            'members' => [
                'batchId' => [ 'type' => 'string', 'locationName' => 'batchId', ],
                'batchNumber' => [ 'type' => 'string', 'locationName' => 'batchNumber', ],
                'batchSize' => [ 'type' => 'integer', 'locationName' => 'batchSize', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'autoGenerated' => [ 'type' => 'integer', 'locationName' => 'autoGenerated', ],
                'registerResultUrl' => [ 'type' => 'string', 'locationName' => 'registerResultUrl', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'DeviceCredential' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'Service' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'input' => [ 'type' => 'object', 'locationName' => 'input', ],
                'output' => [ 'type' => 'object', 'locationName' => 'output', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'TopicList' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'authority' => [ 'type' => 'string', 'locationName' => 'authority', ],
                'descripton' => [ 'type' => 'string', 'locationName' => 'descripton', ],
            ],
        ],
        'DeviceCommandVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'inputData' => [ 'type' => 'string', 'locationName' => 'inputData', ],
            ],
        ],
        'DeviceEnrollVO' => [
            'type' => 'structure',
            'members' => [
                'deviceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'parentDeviceName' => [ 'type' => 'string', 'locationName' => 'parentDeviceName', ],
            ],
        ],
        'DescribeDevicePageVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'deviceState' => [ 'type' => 'string', 'locationName' => 'deviceState', ],
                'omId' => [ 'type' => 'string', 'locationName' => 'omId', ],
                'deviceFilePath' => [ 'type' => 'string', 'locationName' => 'deviceFilePath', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'parentUuid' => [ 'type' => 'string', 'locationName' => 'parentUuid', ],
                'parentName' => [ 'type' => 'string', 'locationName' => 'parentName', ],
                'lastConnectTime' => [ 'type' => 'string', 'locationName' => 'lastConnectTime', ],
            ],
        ],
        'OnlineInfo' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'online' => [ 'type' => 'integer', 'locationName' => 'online', ],
                'lastConnectTime' => [ 'type' => 'string', 'locationName' => 'lastConnectTime', ],
            ],
        ],
        'EdgeInfoVO' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeStatus' => [ 'type' => 'integer', 'locationName' => 'edgeStatus', ],
                'edgeDesc' => [ 'type' => 'string', 'locationName' => 'edgeDesc', ],
                'edgeVersion' => [ 'type' => 'string', 'locationName' => 'edgeVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
                'lastTurnOnTime' => [ 'type' => 'string', 'locationName' => 'lastTurnOnTime', ],
                'iothubInstanceId' => [ 'type' => 'string', 'locationName' => 'iothubInstanceId', ],
                'iothubInstanceName' => [ 'type' => 'string', 'locationName' => 'iothubInstanceName', ],
            ],
        ],
        'ChildModules' => [
            'type' => 'structure',
            'members' => [
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
                'moduleTypeVersion' => [ 'type' => 'string', 'locationName' => 'moduleTypeVersion', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'omDesc' => [ 'type' => 'string', 'locationName' => 'omDesc', ],
                'moduleState' => [ 'type' => 'string', 'locationName' => 'moduleState', ],
            ],
        ],
        'ChildDevices' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceServiceName' => [ 'type' => 'string', 'locationName' => 'deviceServiceName', ],
                'online' => [ 'type' => 'string', 'locationName' => 'online', ],
            ],
        ],
        'EdgePageVo' => [
            'type' => 'structure',
            'members' => [
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeState' => [ 'type' => 'string', 'locationName' => 'edgeState', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
            ],
        ],
        'ModulePageVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'moduleId' => [ 'type' => 'string', 'locationName' => 'moduleId', ],
                'moduleName' => [ 'type' => 'string', 'locationName' => 'moduleName', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'moduleStatus' => [ 'type' => 'integer', 'locationName' => 'moduleStatus', ],
                'moduleTypeVersion' => [ 'type' => 'string', 'locationName' => 'moduleTypeVersion', ],
            ],
        ],
        'MonitorIotCoreInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'specifications' => [ 'type' => 'string', 'locationName' => 'specifications', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceDescription' => [ 'type' => 'string', 'locationName' => 'instanceDescription', ],
                'expiredTime' => [ 'type' => 'long', 'locationName' => 'expiredTime', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'subNetName' => [ 'type' => 'string', 'locationName' => 'subNetName', ],
                'priDomain' => [ 'type' => 'string', 'locationName' => 'priDomain', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
                'maxOnlineDevices' => [ 'type' => 'long', 'locationName' => 'maxOnlineDevices', ],
                'maxMonthMessages' => [ 'type' => 'long', 'locationName' => 'maxMonthMessages', ],
            ],
        ],
        'OmPropVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'omId' => [ 'type' => 'string', 'locationName' => 'omId', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'attrName' => [ 'type' => 'string', 'locationName' => 'attrName', ],
                'attrText' => [ 'type' => 'string', 'locationName' => 'attrText', ],
                'attrType' => [ 'type' => 'string', 'locationName' => 'attrType', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Product' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productId' => [ 'type' => 'string', 'locationName' => 'productId', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
            ],
        ],
        'ProductAbility' => [
            'type' => 'structure',
            'members' => [
                'abilityId' => [ 'type' => 'string', 'locationName' => 'abilityId', ],
                'abilityName' => [ 'type' => 'string', 'locationName' => 'abilityName', ],
                'abilityType' => [ 'type' => 'integer', 'locationName' => 'abilityType', ],
                'abilityDescription' => [ 'type' => 'string', 'locationName' => 'abilityDescription', ],
                'accessMode' => [ 'type' => 'string', 'locationName' => 'accessMode', ],
                'abilityDataType' => [ 'type' => 'string', 'locationName' => 'abilityDataType', ],
                'abilityDataSpec' => [ 'type' => 'string', 'locationName' => 'abilityDataSpec', ],
                'customized' => [ 'type' => 'boolean', 'locationName' => 'customized', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'ProductCategory' => [
            'type' => 'structure',
            'members' => [
                'productCategoryName' => [ 'type' => 'string', 'locationName' => 'productCategoryName', ],
                'productCategoryId' => [ 'type' => 'string', 'locationName' => 'productCategoryId', ],
            ],
        ],
        'ThingModelTemplate' => [
            'type' => 'structure',
            'members' => [
                'thingModelTemplateId' => [ 'type' => 'string', 'locationName' => 'thingModelTemplateId', ],
                'thingModelTemplateName' => [ 'type' => 'string', 'locationName' => 'thingModelTemplateName', ],
                'productCategoryNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'productCategoryIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'ossPath' => [ 'type' => 'string', 'locationName' => 'ossPath', ],
            ],
        ],
        'ProductProperty' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'unitName' => [ 'type' => 'string', 'locationName' => 'unitName', ],
                'min' => [ 'type' => 'double', 'locationName' => 'min', ],
                'max' => [ 'type' => 'double', 'locationName' => 'max', ],
                'step' => [ 'type' => 'double', 'locationName' => 'step', ],
                'length' => [ 'type' => 'integer', 'locationName' => 'length', ],
                'enumInfo' => [ 'type' => 'object', 'locationName' => 'enumInfo', ],
            ],
        ],
        'SharedUserPage' => [
            'type' => 'structure',
            'members' => [
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'SharedUsers', ], ],
            ],
        ],
        'DataVO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'subNetId' => [ 'type' => 'string', 'locationName' => 'subNetId', ],
                'subNetName' => [ 'type' => 'string', 'locationName' => 'subNetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
                'priDomain' => [ 'type' => 'string', 'locationName' => 'priDomain', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'InstanceInfoAsAdminVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subNetName' => [ 'type' => 'string', 'locationName' => 'subNetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
                'priDomain' => [ 'type' => 'string', 'locationName' => 'priDomain', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'deleteTime' => [ 'type' => 'integer', 'locationName' => 'deleteTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'replicaNum' => [ 'type' => 'integer', 'locationName' => 'replicaNum', ],
                'maxDevices' => [ 'type' => 'integer', 'locationName' => 'maxDevices', ],
                'maxMessages' => [ 'type' => 'integer', 'locationName' => 'maxMessages', ],
                'rdsInstanceId' => [ 'type' => 'string', 'locationName' => 'rdsInstanceId', ],
                'rdsDatabase' => [ 'type' => 'string', 'locationName' => 'rdsDatabase', ],
                'rdsHostName' => [ 'type' => 'string', 'locationName' => 'rdsHostName', ],
                'rdsUserName' => [ 'type' => 'string', 'locationName' => 'rdsUserName', ],
                'rdsPasswd' => [ 'type' => 'string', 'locationName' => 'rdsPasswd', ],
                'iothubAgentId' => [ 'type' => 'string', 'locationName' => 'iothubAgentId', ],
                'iothubStatus' => [ 'type' => 'integer', 'locationName' => 'iothubStatus', ],
            ],
        ],
        'InstanceinfoVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
                'priDomain' => [ 'type' => 'string', 'locationName' => 'priDomain', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'progressValue' => [ 'type' => 'integer', 'locationName' => 'progressValue', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'maxDevices' => [ 'type' => 'integer', 'locationName' => 'maxDevices', ],
                'maxMessages' => [ 'type' => 'integer', 'locationName' => 'maxMessages', ],
            ],
        ],
        'PageinfoVO' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'HubInstanceBo' => [
            'type' => 'structure',
            'members' => [
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'SharedUsers' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'integer', 'locationName' => 'userPin', ],
                'sourceId' => [ 'type' => 'integer', 'locationName' => 'sourceId', ],
                'regionName' => [ 'type' => 'integer', 'locationName' => 'regionName', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'tenantStatus' => [ 'type' => 'integer', 'locationName' => 'tenantStatus', ],
                'onDevices' => [ 'type' => 'integer', 'locationName' => 'onDevices', ],
                'dailyMessages' => [ 'type' => 'integer', 'locationName' => 'dailyMessages', ],
                'totalMessages' => [ 'type' => 'integer', 'locationName' => 'totalMessages', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'Action' => [
            'type' => 'structure',
            'members' => [
                'actionId' => [ 'type' => 'string', 'locationName' => 'actionId', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'configuration' => [ 'type' => 'object', 'locationName' => 'configuration', ],
            ],
        ],
        'RuleBaseInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'DescribeThingShadowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'UpdateThingShadowResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeThingShadowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeThingShadowResultShape', ],
            ],
        ],
        'DescribeThingShadowResultShape' => [
            'type' => 'structure',
            'members' => [
                'state' => [ 'type' => 'object', 'locationName' => 'state', ],
                'metadata' => [ 'type' => 'object', 'locationName' => 'metadata', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'QueryDeviceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'deviceType' => [ 'type' => 'string', 'locationName' => 'deviceType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'activatedTime' => [ 'type' => 'long', 'locationName' => 'activatedTime', ],
                'lastConnectedTime' => [ 'type' => 'long', 'locationName' => 'lastConnectedTime', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
            ],
        ],
        'QueryDeviceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDeviceDetailResultShape', ],
            ],
        ],
        'RemoveDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'InvokeThingServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'InvokeThingServiceResultShape', ],
            ],
        ],
        'QueryDevicePageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryDeviceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
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
        'UpdateDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'device' =>  [ 'shape' => 'DeviceVO', ],
            ],
        ],
        'UpdateThingShadowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'state' => [ 'type' => 'object', 'locationName' => 'state', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'AddDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
            ],
        ],
        'QueryDevicePageResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceVO', ], ],
            ],
        ],
        'RemoveDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'InvokeThingServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
            ],
        ],
        'AddDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateDeviceResultShape', ],
            ],
        ],
        'UpdateThingShadowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDevicePageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDevicePageResultShape', ],
            ],
        ],
        'InvokeThingServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'input' => [ 'type' => 'object', 'locationName' => 'input', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'AddDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddDeviceResultShape', ],
            ],
        ],
        'UpdateDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'UpdateProductResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateProductResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductResultShape' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'productSecret' => [ 'type' => 'string', 'locationName' => 'productSecret', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'deviceCount' => [ 'type' => 'integer', 'locationName' => 'deviceCount', ],
                'dynamicRegister' => [ 'type' => 'integer', 'locationName' => 'dynamicRegister', ],
                'productDescription' => [ 'type' => 'string', 'locationName' => 'productDescription', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
            ],
        ],
        'ListProductsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpdateProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DeleteProductResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListProductsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListProductsResultShape', ],
            ],
        ],
        'CreateProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'productDescription' => [ 'type' => 'string', 'locationName' => 'productDescription', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpdateProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productDescription' => [ 'type' => 'string', 'locationName' => 'productDescription', ],
                'dynamicRegister' => [ 'type' => 'integer', 'locationName' => 'dynamicRegister', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DeleteProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'CreateProductResultShape' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DeleteProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProductResultShape', ],
            ],
        ],
        'ListProductsResultShape' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'PageinfoVO', ],
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'Product', ], ],
            ],
        ],
        'ExportThingModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'ExportThingModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExportThingModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListProductAbilitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListProductAbilitiesResultShape', ],
            ],
        ],
        'ExportThingModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'thingModel' => [ 'type' => 'object', 'locationName' => 'thingModel', ],
            ],
        ],
        'ListProductAbilitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'PageinfoVO', ],
                'abilities' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductAbility', ], ],
            ],
        ],
        'ListProductAbilitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'ImportThingModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportThingModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'thingModel' => [ 'type' => 'object', 'locationName' => 'thingModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'ImportThingModelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
