<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iothub',
        'protocol' => 'json',
//        'serviceFullName' => 'iothub',
//        'serviceId' => 'iothub',
    ],
    'operations' => [
        'DescribeThingShadow' => [
            'name' => 'DescribeThingShadow',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/devices/{identifier}/shadow',
            ],
            'input' => [ 'shape' => 'DescribeThingShadowRequestShape', ],
            'output' => [ 'shape' => 'DescribeThingShadowResponseShape', ],
        ],
        'UpdateThingShadow' => [
            'name' => 'UpdateThingShadow',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/devices/{identifier}/shadow',
            ],
            'input' => [ 'shape' => 'UpdateThingShadowRequestShape', ],
            'output' => [ 'shape' => 'UpdateThingShadowResponseShape', ],
        ],
        'InvokeThingService' => [
            'name' => 'InvokeThingService',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/devices/{identifier}/services',
            ],
            'input' => [ 'shape' => 'InvokeThingServiceRequestShape', ],
            'output' => [ 'shape' => 'InvokeThingServiceResponseShape', ],
        ],
        'QueryDevicePage' => [
            'name' => 'QueryDevicePage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/devices:queryPage',
            ],
            'input' => [ 'shape' => 'QueryDevicePageRequestShape', ],
            'output' => [ 'shape' => 'QueryDevicePageResponseShape', ],
        ],
        'UpdateDevice' => [
            'name' => 'UpdateDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/device/{deviceId}:update',
            ],
            'input' => [ 'shape' => 'UpdateDeviceRequestShape', ],
            'output' => [ 'shape' => 'UpdateDeviceResponseShape', ],
        ],
        'AddDevice' => [
            'name' => 'AddDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/device:add',
            ],
            'input' => [ 'shape' => 'AddDeviceRequestShape', ],
            'output' => [ 'shape' => 'AddDeviceResponseShape', ],
        ],
        'QueryDeviceDetail' => [
            'name' => 'QueryDeviceDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/device/{deviceName}:detail',
            ],
            'input' => [ 'shape' => 'QueryDeviceDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryDeviceDetailResponseShape', ],
        ],
        'RemoveDevice' => [
            'name' => 'RemoveDevice',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/device/{deviceName}:delete',
            ],
            'input' => [ 'shape' => 'RemoveDeviceRequestShape', ],
            'output' => [ 'shape' => 'RemoveDeviceResponseShape', ],
        ],
        'RemoveDeviceById' => [
            'name' => 'RemoveDeviceById',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/device/{deviceId}:deleteById',
            ],
            'input' => [ 'shape' => 'RemoveDeviceByIdRequestShape', ],
            'output' => [ 'shape' => 'RemoveDeviceByIdResponseShape', ],
        ],
        'ListProducts' => [
            'name' => 'ListProducts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/products',
            ],
            'input' => [ 'shape' => 'ListProductsRequestShape', ],
            'output' => [ 'shape' => 'ListProductsResponseShape', ],
        ],
        'CreateProduct' => [
            'name' => 'CreateProduct',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/products',
            ],
            'input' => [ 'shape' => 'CreateProductRequestShape', ],
            'output' => [ 'shape' => 'CreateProductResponseShape', ],
        ],
        'DescribeProduct' => [
            'name' => 'DescribeProduct',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}',
            ],
            'input' => [ 'shape' => 'DescribeProductRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductResponseShape', ],
        ],
        'UpdateProduct' => [
            'name' => 'UpdateProduct',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}',
            ],
            'input' => [ 'shape' => 'UpdateProductRequestShape', ],
            'output' => [ 'shape' => 'UpdateProductResponseShape', ],
        ],
        'DeleteProduct' => [
            'name' => 'DeleteProduct',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}',
            ],
            'input' => [ 'shape' => 'DeleteProductRequestShape', ],
            'output' => [ 'shape' => 'DeleteProductResponseShape', ],
        ],
        'ListProductAbilities' => [
            'name' => 'ListProductAbilities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/abilities',
            ],
            'input' => [ 'shape' => 'ListProductAbilitiesRequestShape', ],
            'output' => [ 'shape' => 'ListProductAbilitiesResponseShape', ],
        ],
        'ImportThingModel' => [
            'name' => 'ImportThingModel',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/abilities:importThingModel',
            ],
            'input' => [ 'shape' => 'ImportThingModelRequestShape', ],
            'output' => [ 'shape' => 'ImportThingModelResponseShape', ],
        ],
        'ExportThingModel' => [
            'name' => 'ExportThingModel',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/products/{productKey}/abilities:exportThingModel',
            ],
            'input' => [ 'shape' => 'ExportThingModelRequestShape', ],
            'output' => [ 'shape' => 'ExportThingModelResponseShape', ],
        ],
    ],
    'shapes' => [
        'PageinfoVO' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
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
        'TopicList' => [
            'type' => 'structure',
            'members' => [
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'authority' => [ 'type' => 'string', 'locationName' => 'authority', ],
                'descripton' => [ 'type' => 'string', 'locationName' => 'descripton', ],
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
                'productSecret' => [ 'type' => 'string', 'locationName' => 'productSecret', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'dynamicRegister' => [ 'type' => 'integer', 'locationName' => 'dynamicRegister', ],
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
        'DeviceCommandVO' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'inputData' => [ 'type' => 'string', 'locationName' => 'inputData', ],
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
        'DeviceEnrollVO' => [
            'type' => 'structure',
            'members' => [
                'deviceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'parentDeviceName' => [ 'type' => 'string', 'locationName' => 'parentDeviceName', ],
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
        'UserDetails' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'userStatus' => [ 'type' => 'integer', 'locationName' => 'userStatus', ],
                'signTime' => [ 'type' => 'integer', 'locationName' => 'signTime', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'productNum' => [ 'type' => 'integer', 'locationName' => 'productNum', ],
                'deviceNum' => [ 'type' => 'integer', 'locationName' => 'deviceNum', ],
                'onDevices' => [ 'type' => 'integer', 'locationName' => 'onDevices', ],
                'maxOnlineTime' => [ 'type' => 'integer', 'locationName' => 'maxOnlineTime', ],
                'totalMessages' => [ 'type' => 'integer', 'locationName' => 'totalMessages', ],
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
        'MonitorIotHubInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'pubDomain' => [ 'type' => 'string', 'locationName' => 'pubDomain', ],
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
        'Proxys' => [
            'type' => 'structure',
            'members' => [
                'proxyId' => [ 'type' => 'string', 'locationName' => 'proxyId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'totalRuleNums' => [ 'type' => 'integer', 'locationName' => 'totalRuleNums', ],
            ],
        ],
        'Rules' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'string', 'locationName' => 'ruleId', ],
                'ruleType' => [ 'type' => 'integer', 'locationName' => 'ruleType', ],
                'ruleInfo' => [ 'type' => 'string', 'locationName' => 'ruleInfo', ],
                'jcqInfo' => [ 'type' => 'string', 'locationName' => 'jcqInfo', ],
            ],
        ],
        'ProxyDetails' => [
            'type' => 'structure',
            'members' => [
                'proxyId' => [ 'type' => 'string', 'locationName' => 'proxyId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'jcqAccessKey' => [ 'type' => 'string', 'locationName' => 'jcqAccessKey', ],
                'jcqSecretAccessKey' => [ 'type' => 'string', 'locationName' => 'jcqSecretAccessKey', ],
                'jcqConsumerGroupId' => [ 'type' => 'string', 'locationName' => 'jcqConsumerGroupId', ],
                'jcqEndpoint' => [ 'type' => 'string', 'locationName' => 'jcqEndpoint', ],
                'totalRuleNums' => [ 'type' => 'string', 'locationName' => 'totalRuleNums', ],
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
        'HubInstanceBo' => [
            'type' => 'structure',
            'members' => [
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
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
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'maxDevices' => [ 'type' => 'integer', 'locationName' => 'maxDevices', ],
                'maxMessage' => [ 'type' => 'integer', 'locationName' => 'maxMessage', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
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
        'Action' => [
            'type' => 'structure',
            'members' => [
                'actionId' => [ 'type' => 'string', 'locationName' => 'actionId', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'operationType' => [ 'type' => 'string', 'locationName' => 'operationType', ],
                'configuration' => [ 'type' => 'object', 'locationName' => 'configuration', ],
            ],
        ],
        'MonthDuration' => [
            'type' => 'structure',
            'members' => [
                'durationMonth' => [ 'type' => 'string', 'locationName' => 'durationMonth', ],
                'durationValue' => [ 'type' => 'long', 'locationName' => 'durationValue', ],
            ],
        ],
        'MonthMessage' => [
            'type' => 'structure',
            'members' => [
                'messageMonth' => [ 'type' => 'string', 'locationName' => 'messageMonth', ],
                'messageValue' => [ 'type' => 'long', 'locationName' => 'messageValue', ],
            ],
        ],
        'RemoveDeviceByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
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
        'DescribeThingShadowResultShape' => [
            'type' => 'structure',
            'members' => [
                'state' => [ 'type' => 'object', 'locationName' => 'state', ],
                'metadata' => [ 'type' => 'object', 'locationName' => 'metadata', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'RemoveDeviceByIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'device' =>  [ 'shape' => 'DeviceVO', ],
            ],
        ],
        'InvokeThingServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'input' => [ 'type' => 'object', 'locationName' => 'input', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RemoveDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'InvokeThingServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
            ],
        ],
        'DescribeThingShadowRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeThingShadowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeThingShadowResultShape', ],
            ],
        ],
        'InvokeThingServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'InvokeThingServiceResultShape', ],
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
        'QueryDeviceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'UpdateThingShadowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'state' => [ 'type' => 'object', 'locationName' => 'state', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
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
        'RemoveDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'RemoveDeviceByIdResponseShape' => [
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
        'AddDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RemoveDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateDeviceResultShape', ],
            ],
        ],
        'QueryDeviceDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDeviceDetailResultShape', ],
            ],
        ],
        'UpdateThingShadowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'productDescription' => [ 'type' => 'string', 'locationName' => 'productDescription', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListProductsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DescribeProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'CreateProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateProductResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ListProductsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListProductsResultShape', ],
            ],
        ],
        'ListProductsResultShape' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'PageinfoVO', ],
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'Product', ], ],
            ],
        ],
        'DeleteProductResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProductResultShape', ],
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
        'UpdateProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productDescription' => [ 'type' => 'string', 'locationName' => 'productDescription', ],
                'dynamicRegister' => [ 'type' => 'integer', 'locationName' => 'dynamicRegister', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'UpdateProductResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportThingModelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportThingModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'thingModel' => [ 'type' => 'object', 'locationName' => 'thingModel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'ListProductAbilitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListProductAbilitiesResultShape', ],
            ],
        ],
        'ExportThingModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExportThingModelResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListProductAbilitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'ListProductAbilitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'PageinfoVO', ],
                'abilities' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductAbility', ], ],
            ],
        ],
        'ExportThingModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'ImportThingModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExportThingModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'thingModel' => [ 'type' => 'object', 'locationName' => 'thingModel', ],
            ],
        ],
    ],
];
