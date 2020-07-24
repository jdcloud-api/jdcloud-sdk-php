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
        'RegisterDevice' => [
            'name' => 'RegisterDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/device:register',
            ],
            'input' => [ 'shape' => 'RegisterDeviceRequestShape', ],
            'output' => [ 'shape' => 'RegisterDeviceResponseShape', ],
        ],
        'DownloadDeviceCertificate' => [
            'name' => 'DownloadDeviceCertificate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/device:downloadCertificate',
            ],
            'input' => [ 'shape' => 'DownloadDeviceCertificateRequestShape', ],
            'output' => [ 'shape' => 'DownloadDeviceCertificateResponseShape', ],
        ],
        'DeleteDevice' => [
            'name' => 'DeleteDevice',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/device:delete',
            ],
            'input' => [ 'shape' => 'DeleteDeviceRequestShape', ],
            'output' => [ 'shape' => 'DeleteDeviceResponseShape', ],
        ],
        'DescribeDevice' => [
            'name' => 'DescribeDevice',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/device:describe',
            ],
            'input' => [ 'shape' => 'DescribeDeviceRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceResponseShape', ],
        ],
        'DescribeThingTypeList' => [
            'name' => 'DescribeThingTypeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/thingType:list',
            ],
            'input' => [ 'shape' => 'DescribeThingTypeListRequestShape', ],
            'output' => [ 'shape' => 'DescribeThingTypeListResponseShape', ],
        ],
        'DescribeThingType' => [
            'name' => 'DescribeThingType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/thingType:describe',
            ],
            'input' => [ 'shape' => 'DescribeThingTypeRequestShape', ],
            'output' => [ 'shape' => 'DescribeThingTypeResponseShape', ],
        ],
        'DescribeThingModel' => [
            'name' => 'DescribeThingModel',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/thingModel:describe',
            ],
            'input' => [ 'shape' => 'DescribeThingModelRequestShape', ],
            'output' => [ 'shape' => 'DescribeThingModelResponseShape', ],
        ],
        'SetDeviceProperty' => [
            'name' => 'SetDeviceProperty',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/deviceProperty:set',
            ],
            'input' => [ 'shape' => 'SetDevicePropertyRequestShape', ],
            'output' => [ 'shape' => 'SetDevicePropertyResponseShape', ],
        ],
        'InvokeFunction' => [
            'name' => 'InvokeFunction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/function:invokeFunction',
            ],
            'input' => [ 'shape' => 'InvokeFunctionRequestShape', ],
            'output' => [ 'shape' => 'InvokeFunctionResponseShape', ],
        ],
        'DescribeEventList' => [
            'name' => 'DescribeEventList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/event:list',
            ],
            'input' => [ 'shape' => 'DescribeEventListRequestShape', ],
            'output' => [ 'shape' => 'DescribeEventListResponseShape', ],
        ],
        'DescribeFunctionList' => [
            'name' => 'DescribeFunctionList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/function:list',
            ],
            'input' => [ 'shape' => 'DescribeFunctionListRequestShape', ],
            'output' => [ 'shape' => 'DescribeFunctionListResponseShape', ],
        ],
        'DescribeProperty' => [
            'name' => 'DescribeProperty',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/property:describe',
            ],
            'input' => [ 'shape' => 'DescribePropertyRequestShape', ],
            'output' => [ 'shape' => 'DescribePropertyResponseShape', ],
        ],
        'DescribePropertySnapshot' => [
            'name' => 'DescribePropertySnapshot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/property:describeSnapshot',
            ],
            'input' => [ 'shape' => 'DescribePropertySnapshotRequestShape', ],
            'output' => [ 'shape' => 'DescribePropertySnapshotResponseShape', ],
        ],
        'CreateDeviceTopo' => [
            'name' => 'CreateDeviceTopo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/deviceTopo:create',
            ],
            'input' => [ 'shape' => 'CreateDeviceTopoRequestShape', ],
            'output' => [ 'shape' => 'CreateDeviceTopoResponseShape', ],
        ],
        'DescribeDeviceTopo' => [
            'name' => 'DescribeDeviceTopo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/deviceTopo:describe',
            ],
            'input' => [ 'shape' => 'DescribeDeviceTopoRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceTopoResponseShape', ],
        ],
        'UpdateDeviceTopo' => [
            'name' => 'UpdateDeviceTopo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/deviceTopo:update',
            ],
            'input' => [ 'shape' => 'UpdateDeviceTopoRequestShape', ],
            'output' => [ 'shape' => 'UpdateDeviceTopoResponseShape', ],
        ],
        'DeleteDeviceTopo' => [
            'name' => 'DeleteDeviceTopo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/coreinstances/{instanceId}/deviceTopo:delete',
            ],
            'input' => [ 'shape' => 'DeleteDeviceTopoRequestShape', ],
            'output' => [ 'shape' => 'DeleteDeviceTopoResponseShape', ],
        ],
        'InvokeThingTopic' => [
            'name' => 'InvokeThingTopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/devices/{identifier}/topic',
            ],
            'input' => [ 'shape' => 'InvokeThingTopicRequestShape', ],
            'output' => [ 'shape' => 'InvokeThingTopicResponseShape', ],
        ],
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
        'AddDeviceLinks' => [
            'name' => 'AddDeviceLinks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/devices:addLinks',
            ],
            'input' => [ 'shape' => 'AddDeviceLinksRequestShape', ],
            'output' => [ 'shape' => 'AddDeviceLinksResponseShape', ],
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
        'GetDeviceGroup' => [
            'name' => 'GetDeviceGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/devicegroup:get',
            ],
            'input' => [ 'shape' => 'GetDeviceGroupRequestShape', ],
            'output' => [ 'shape' => 'GetDeviceGroupResponseShape', ],
        ],
        'GetDeviceGroupList' => [
            'name' => 'GetDeviceGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/devicegrouplist',
            ],
            'input' => [ 'shape' => 'GetDeviceGroupListRequestShape', ],
            'output' => [ 'shape' => 'GetDeviceGroupListResponseShape', ],
        ],
        'FindDeviceGroupLinkPage' => [
            'name' => 'FindDeviceGroupLinkPage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/devicegrouplink:get',
            ],
            'input' => [ 'shape' => 'FindDeviceGroupLinkPageRequestShape', ],
            'output' => [ 'shape' => 'FindDeviceGroupLinkPageResponseShape', ],
        ],
        'ElevatorOperatingStatus' => [
            'name' => 'ElevatorOperatingStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/registerElevatorOperatingStatus',
            ],
            'input' => [ 'shape' => 'ElevatorOperatingStatusRequestShape', ],
            'output' => [ 'shape' => 'ElevatorOperatingStatusResponseShape', ],
        ],
        'CollectorReadMessage' => [
            'name' => 'CollectorReadMessage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/readCollectorProperty',
            ],
            'input' => [ 'shape' => 'CollectorReadMessageRequestShape', ],
            'output' => [ 'shape' => 'CollectorReadMessageResponseShape', ],
        ],
        'ReadHoldingRegisters' => [
            'name' => 'ReadHoldingRegisters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/readHoldingRegisters',
            ],
            'input' => [ 'shape' => 'ReadHoldingRegistersRequestShape', ],
            'output' => [ 'shape' => 'ReadHoldingRegistersResponseShape', ],
        ],
        'CollectorWriteMessage' => [
            'name' => 'CollectorWriteMessage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/writeCollectorProperty',
            ],
            'input' => [ 'shape' => 'CollectorWriteMessageRequestShape', ],
            'output' => [ 'shape' => 'CollectorWriteMessageResponseShape', ],
        ],
        'UpdateLooDevice' => [
            'name' => 'UpdateLooDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/device/{deviceId}:looupdate',
            ],
            'input' => [ 'shape' => 'UpdateLooDeviceRequestShape', ],
            'output' => [ 'shape' => 'UpdateLooDeviceResponseShape', ],
        ],
        'AddLooDevice' => [
            'name' => 'AddLooDevice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/preOrderId/{preOrderId}/device_loongray:add',
            ],
            'input' => [ 'shape' => 'AddLooDeviceRequestShape', ],
            'output' => [ 'shape' => 'AddLooDeviceResponseShape', ],
        ],
        'LoongrayQueryPage' => [
            'name' => 'LoongrayQueryPage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/devices:loongrayQueryPage',
            ],
            'input' => [ 'shape' => 'LoongrayQueryPageRequestShape', ],
            'output' => [ 'shape' => 'LoongrayQueryPageResponseShape', ],
        ],
        'QueryAdminStatistics' => [
            'name' => 'QueryAdminStatistics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/device:queryAdminStatistics',
            ],
            'input' => [ 'shape' => 'QueryAdminStatisticsRequestShape', ],
            'output' => [ 'shape' => 'QueryAdminStatisticsResponseShape', ],
        ],
        'RemoveLoongrayDevice' => [
            'name' => 'RemoveLoongrayDevice',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/device/{deviceName}:loongraydelete',
            ],
            'input' => [ 'shape' => 'RemoveLoongrayDeviceRequestShape', ],
            'output' => [ 'shape' => 'RemoveLoongrayDeviceResponseShape', ],
        ],
        'DescribeProductWithAdmin' => [
            'name' => 'DescribeProductWithAdmin',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/products/{productKey}/admin',
            ],
            'input' => [ 'shape' => 'DescribeProductWithAdminRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductWithAdminResponseShape', ],
        ],
        'UpdateProductWithAdmin' => [
            'name' => 'UpdateProductWithAdmin',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/products/{productKey}/admin',
            ],
            'input' => [ 'shape' => 'UpdateProductWithAdminRequestShape', ],
            'output' => [ 'shape' => 'UpdateProductWithAdminResponseShape', ],
        ],
        'DeleteProductWithAdmin' => [
            'name' => 'DeleteProductWithAdmin',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/products/{productKey}/admin',
            ],
            'input' => [ 'shape' => 'DeleteProductWithAdminRequestShape', ],
            'output' => [ 'shape' => 'DeleteProductWithAdminResponseShape', ],
        ],
        'ListProductsWithAdmin' => [
            'name' => 'ListProductsWithAdmin',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/products:describeAll',
            ],
            'input' => [ 'shape' => 'ListProductsWithAdminRequestShape', ],
            'output' => [ 'shape' => 'ListProductsWithAdminResponseShape', ],
        ],
        'CreateAdminProduct' => [
            'name' => 'CreateAdminProduct',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/loongrayinstances/{instanceId}/productsAdmin',
            ],
            'input' => [ 'shape' => 'CreateAdminProductRequestShape', ],
            'output' => [ 'shape' => 'CreateAdminProductResponseShape', ],
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
        'DescribeProductTopics' => [
            'name' => 'DescribeProductTopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/topics',
            ],
            'input' => [ 'shape' => 'DescribeProductTopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductTopicsResponseShape', ],
        ],
        'CreateProductTopic' => [
            'name' => 'CreateProductTopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/topics',
            ],
            'input' => [ 'shape' => 'CreateProductTopicRequestShape', ],
            'output' => [ 'shape' => 'CreateProductTopicResponseShape', ],
        ],
        'DescribeProductTopic' => [
            'name' => 'DescribeProductTopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/topics/{topicId}',
            ],
            'input' => [ 'shape' => 'DescribeProductTopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeProductTopicResponseShape', ],
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
        'CustomProfileVO' => [
            'type' => 'structure',
            'members' => [
                'profileCode' => [ 'type' => 'string', 'locationName' => 'profileCode', ],
                'profileDesc' => [ 'type' => 'string', 'locationName' => 'profileDesc', ],
                'profileName' => [ 'type' => 'string', 'locationName' => 'profileName', ],
                'profileValue' => [ 'type' => 'string', 'locationName' => 'profileValue', ],
            ],
        ],
        'DeviceFunctionVO' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'functionKey' => [ 'type' => 'string', 'locationName' => 'functionKey', ],
                'inParams' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'outParams' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'ThingModelRespTO' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'changeLog' => [ 'type' => 'string', 'locationName' => 'changeLog', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'latestPublish' => [ 'type' => 'integer', 'locationName' => 'latestPublish', ],
                'publishStatus' => [ 'type' => 'integer', 'locationName' => 'publishStatus', ],
                'publishTime' => [ 'type' => 'string', 'locationName' => 'publishTime', ],
                'thingModelVersion' => [ 'type' => 'string', 'locationName' => 'thingModelVersion', ],
                'thingTypeCode' => [ 'type' => 'string', 'locationName' => 'thingTypeCode', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GlobalProfileVO' => [
            'type' => 'structure',
            'members' => [
                'dataType' => [ 'type' => 'integer', 'locationName' => 'dataType', ],
                'editable' => [ 'type' => 'integer', 'locationName' => 'editable', ],
                'mandatory' => [ 'type' => 'integer', 'locationName' => 'mandatory', ],
                'profileCode' => [ 'type' => 'string', 'locationName' => 'profileCode', ],
                'profileDesc' => [ 'type' => 'string', 'locationName' => 'profileDesc', ],
                'profileName' => [ 'type' => 'string', 'locationName' => 'profileName', ],
                'profileValue' => [ 'type' => 'string', 'locationName' => 'profileValue', ],
                'scope' => [ 'type' => 'integer', 'locationName' => 'scope', ],
            ],
        ],
        'DeviceSnapshotRequestVO' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'thingTypeName' => [ 'type' => 'string', 'locationName' => 'thingTypeName', ],
            ],
        ],
        'DeviceTopoRecordVO' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uniqueId' => [ 'type' => 'string', 'locationName' => 'uniqueId', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'DeviceTopoErrorMap' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'errInfo' => [ 'type' => 'string', 'locationName' => 'errInfo', ],
            ],
        ],
        'FunctionCallRecordVo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'funcKey' => [ 'type' => 'string', 'locationName' => 'funcKey', ],
                'inParams' => [ 'type' => 'string', 'locationName' => 'inParams', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'outParams' => [ 'type' => 'string', 'locationName' => 'outParams', ],
                'reqTimestamp' => [ 'type' => 'long', 'locationName' => 'reqTimestamp', ],
                'respTimestamp' => [ 'type' => 'long', 'locationName' => 'respTimestamp', ],
            ],
        ],
        'SubDeviceInfoVO' => [
            'type' => 'structure',
            'members' => [
                'subDeviceId' => [ 'type' => 'string', 'locationName' => 'subDeviceId', ],
                'subDeviceName' => [ 'type' => 'string', 'locationName' => 'subDeviceName', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'protocolSpec' => [ 'type' => 'string', 'locationName' => 'protocolSpec', ],
            ],
        ],
        'ThingTypeInfoVO' => [
            'type' => 'structure',
            'members' => [
                'authType' => [ 'type' => 'integer', 'locationName' => 'authType', ],
                'connectType' => [ 'type' => 'string', 'locationName' => 'connectType', ],
                'createdTime' => [ 'type' => 'data-time', 'locationName' => 'createdTime', ],
                'updateTime' => [ 'type' => 'data-time', 'locationName' => 'updateTime', ],
                'customProfiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomProfileVO', ], ],
                'deviceTypeCode' => [ 'type' => 'string', 'locationName' => 'deviceTypeCode', ],
                'deviceTypeName' => [ 'type' => 'string', 'locationName' => 'deviceTypeName', ],
                'globalProfiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'GlobalProfileVO', ], ],
                'manufacturerId' => [ 'type' => 'string', 'locationName' => 'manufacturerId', ],
                'manufacturerName' => [ 'type' => 'string', 'locationName' => 'manufacturerName', ],
                'nodeType' => [ 'type' => 'integer', 'locationName' => 'nodeType', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DeviceInfoVO' => [
            'type' => 'structure',
            'members' => [
                'activateTime' => [ 'type' => 'date', 'locationName' => 'activateTime', ],
                'connectAgentDeviceId' => [ 'type' => 'string', 'locationName' => 'connectAgentDeviceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'customProfiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomProfileVO', ], ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagVO', ], ],
                'globalProfiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'GlobalProfileVO', ], ],
                'lastConnectTime' => [ 'type' => 'string', 'locationName' => 'lastConnectTime', ],
                'lastDisconnectTime' => [ 'type' => 'string', 'locationName' => 'lastDisconnectTime', ],
                'latitude' => [ 'type' => 'string', 'locationName' => 'latitude', ],
                'longitude' => [ 'type' => 'string', 'locationName' => 'longitude', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'manufactureId' => [ 'type' => 'string', 'locationName' => 'manufactureId', ],
                'manufactureName' => [ 'type' => 'string', 'locationName' => 'manufactureName', ],
                'nodeType' => [ 'type' => 'integer', 'locationName' => 'nodeType', ],
                'lastReportTime' => [ 'type' => 'string', 'locationName' => 'lastReportTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'thingModelId' => [ 'type' => 'string', 'locationName' => 'thingModelId', ],
                'thingModelVersion' => [ 'type' => 'string', 'locationName' => 'thingModelVersion', ],
                'thingTypeCode' => [ 'type' => 'string', 'locationName' => 'thingTypeCode', ],
                'thingTypeName' => [ 'type' => 'string', 'locationName' => 'thingTypeName', ],
                'uniqueId' => [ 'type' => 'string', 'locationName' => 'uniqueId', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DevicePropertyVO' => [
            'type' => 'structure',
            'members' => [
                'cmd' => [ 'type' => 'object', 'locationName' => 'cmd', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'thingTypeName' => [ 'type' => 'string', 'locationName' => 'thingTypeName', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'TagVO' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DeviceTopoPageBO' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'subDeviceId' => [ 'type' => 'string', 'locationName' => 'subDeviceId', ],
                'subDeviceName' => [ 'type' => 'string', 'locationName' => 'subDeviceName', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'orders' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'EventReportVo' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'parameters' => [ 'type' => 'string', 'locationName' => 'parameters', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'IotDataStatsVO' => [
            'type' => 'structure',
            'members' => [
                'totalThingTypes' => [ 'type' => 'integer', 'locationName' => 'totalThingTypes', ],
                'directConnectThingTypes' => [ 'type' => 'integer', 'locationName' => 'directConnectThingTypes', ],
                'connectAgentThingTypes' => [ 'type' => 'integer', 'locationName' => 'connectAgentThingTypes', ],
                'indirectConnectAgentThingTypes' => [ 'type' => 'integer', 'locationName' => 'indirectConnectAgentThingTypes', ],
                'totalDevices' => [ 'type' => 'integer', 'locationName' => 'totalDevices', ],
                'directConnectDevices' => [ 'type' => 'integer', 'locationName' => 'directConnectDevices', ],
                'connectAgentDevices' => [ 'type' => 'integer', 'locationName' => 'connectAgentDevices', ],
                'totalOnlineDevices' => [ 'type' => 'integer', 'locationName' => 'totalOnlineDevices', ],
                'onlineDirectConnectDevices' => [ 'type' => 'integer', 'locationName' => 'onlineDirectConnectDevices', ],
                'onlineConnectAgentDevices' => [ 'type' => 'integer', 'locationName' => 'onlineConnectAgentDevices', ],
                'onlineIndirectConnectDevices' => [ 'type' => 'integer', 'locationName' => 'onlineIndirectConnectDevices', ],
            ],
        ],
        'PropertyAcquireVo' => [
            'type' => 'structure',
            'members' => [
                'state' => [ 'type' => 'object', 'locationName' => 'state', ],
                'metaData' => [ 'type' => 'object', 'locationName' => 'metaData', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'FunctionCallPageBo' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'orders' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'EventReportPageBo' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'orders' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DeviceTopoInfoVO' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'thingTypeName' => [ 'type' => 'string', 'locationName' => 'thingTypeName', ],
                'subDevices' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubDeviceInfoVO', ], ],
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
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'activatedTime' => [ 'type' => 'long', 'locationName' => 'activatedTime', ],
                'lastConnectedTime' => [ 'type' => 'long', 'locationName' => 'lastConnectedTime', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productSecret' => [ 'type' => 'string', 'locationName' => 'productSecret', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'dynamicRegister' => [ 'type' => 'integer', 'locationName' => 'dynamicRegister', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
                'lastDisconnectTime' => [ 'type' => 'long', 'locationName' => 'lastDisconnectTime', ],
                'orderId' => [ 'type' => 'long', 'locationName' => 'orderId', ],
            ],
        ],
        'ThingServiceMsg' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
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
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ThingServiceParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'input' => [ 'type' => 'object', 'locationName' => 'input', ],
                'callbackBeanName' => [ 'type' => 'string', 'locationName' => 'callbackBeanName', ],
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
        'DeviceOfflineRecord' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
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
        'DeviceGroupResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'ascriptionUser' => [ 'type' => 'string', 'locationName' => 'ascriptionUser', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
            ],
        ],
        'DeviceGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'deviceGroupId' => [ 'type' => 'string', 'locationName' => 'deviceGroupId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'activeTime' => [ 'type' => 'long', 'locationName' => 'activeTime', ],
                'lastConnectTime' => [ 'type' => 'long', 'locationName' => 'lastConnectTime', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
                'lastDisconnectTime' => [ 'type' => 'long', 'locationName' => 'lastDisconnectTime', ],
                'orderId' => [ 'type' => 'long', 'locationName' => 'orderId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'groupTag' => [ 'type' => 'string', 'locationName' => 'groupTag', ],
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
        'ReadRegisterValue' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegisterValue', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'RegisterValue' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'DeviceLoonGeryCredential' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'heartbeatCode' => [ 'type' => 'string', 'locationName' => 'heartbeatCode', ],
                'linkCode' => [ 'type' => 'string', 'locationName' => 'linkCode', ],
                'connectorName' => [ 'type' => 'string', 'locationName' => 'connectorName', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'RegisterInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Firmware' => [
            'type' => 'structure',
            'members' => [
                'firmwareId' => [ 'type' => 'string', 'locationName' => 'firmwareId', ],
                'firmwareName' => [ 'type' => 'string', 'locationName' => 'firmwareName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'firmwareFileName' => [ 'type' => 'string', 'locationName' => 'firmwareFileName', ],
                'firmwareUrl' => [ 'type' => 'string', 'locationName' => 'firmwareUrl', ],
                'firmwareSize' => [ 'type' => 'long', 'locationName' => 'firmwareSize', ],
                'firmwareVersion' => [ 'type' => 'string', 'locationName' => 'firmwareVersion', ],
                'firmwareDescription' => [ 'type' => 'string', 'locationName' => 'firmwareDescription', ],
                'firmwareSign' => [ 'type' => 'string', 'locationName' => 'firmwareSign', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'BatchDevice' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'deviceState' => [ 'type' => 'string', 'locationName' => 'deviceState', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'currentVersion' => [ 'type' => 'string', 'locationName' => 'currentVersion', ],
                'updatedState' => [ 'type' => 'string', 'locationName' => 'updatedState', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'retriedTimes' => [ 'type' => 'integer', 'locationName' => 'retriedTimes', ],
                'retryTimes' => [ 'type' => 'integer', 'locationName' => 'retryTimes', ],
                'erroCode' => [ 'type' => 'integer', 'locationName' => 'erroCode', ],
                'errorMsg' => [ 'type' => 'string', 'locationName' => 'errorMsg', ],
                'beginedTime' => [ 'type' => 'long', 'locationName' => 'beginedTime', ],
            ],
        ],
        'Batch' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'batchId' => [ 'type' => 'string', 'locationName' => 'batchId', ],
                'beginedTime' => [ 'type' => 'long', 'locationName' => 'beginedTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
                'successes' => [ 'type' => 'long', 'locationName' => 'successes', ],
                'failures' => [ 'type' => 'long', 'locationName' => 'failures', ],
                'batchState' => [ 'type' => 'string', 'locationName' => 'batchState', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'Device' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'firmwareVersion' => [ 'type' => 'string', 'locationName' => 'firmwareVersion', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'IotcoreInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'portalAddress' => [ 'type' => 'string', 'locationName' => 'portalAddress', ],
                'linkDomain' => [ 'type' => 'string', 'locationName' => 'linkDomain', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'progress' => [ 'type' => 'integer', 'locationName' => 'progress', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'expiredTime' => [ 'type' => 'long', 'locationName' => 'expiredTime', ],
            ],
        ],
        'CheckCustomerResuleVO' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'userStatus' => [ 'type' => 'string', 'locationName' => 'userStatus', ],
                'isAdmin' => [ 'type' => 'string', 'locationName' => 'isAdmin', ],
            ],
        ],
        'Forward' => [
            'type' => 'structure',
            'members' => [
                'forwardId' => [ 'type' => 'string', 'locationName' => 'forwardId', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
                'frequency' => [ 'type' => 'integer', 'locationName' => 'frequency', ],
                'endPoint' => [ 'type' => 'string', 'locationName' => 'endPoint', ],
                'queueUrl' => [ 'type' => 'string', 'locationName' => 'queueUrl', ],
                'ak' => [ 'type' => 'string', 'locationName' => 'ak', ],
                'sk' => [ 'type' => 'string', 'locationName' => 'sk', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
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
        'DeviceOnlineInfo' => [
            'type' => 'structure',
            'members' => [
                'device_id' => [ 'type' => 'string', 'locationName' => 'device_id', ],
                'online_time' => [ 'type' => 'integer', 'locationName' => 'online_time', ],
                'count_time' => [ 'type' => 'integer', 'locationName' => 'count_time', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'collDeviceType' => [ 'type' => 'string', 'locationName' => 'collDeviceType', ],
            ],
        ],
        'DeviceOnlineCount' => [
            'type' => 'structure',
            'members' => [
                'save_time' => [ 'type' => 'long', 'locationName' => 'save_time', ],
                'online_time' => [ 'type' => 'integer', 'locationName' => 'online_time', ],
                'count_time' => [ 'type' => 'integer', 'locationName' => 'count_time', ],
            ],
        ],
        'PreOrders' => [
            'type' => 'structure',
            'members' => [
                'preOrderId' => [ 'type' => 'string', 'locationName' => 'preOrderId', ],
                'preOrderNum' => [ 'type' => 'string', 'locationName' => 'preOrderNum', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'recordNum' => [ 'type' => 'integer', 'locationName' => 'recordNum', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'preOrderStatus' => [ 'type' => 'string', 'locationName' => 'preOrderStatus', ],
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
                'collDeviceType' => [ 'type' => 'string', 'locationName' => 'collDeviceType', ],
            ],
        ],
        'CustomizedTemplateProduct' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'deviceCount' => [ 'type' => 'integer', 'locationName' => 'deviceCount', ],
            ],
        ],
        'ProductService' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'input' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductProperty', ], ],
                'output' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductProperty', ], ],
                'customized' => [ 'type' => 'boolean', 'locationName' => 'customized', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
            ],
        ],
        'ProductTopic' => [
            'type' => 'structure',
            'members' => [
                'topicId' => [ 'type' => 'string', 'locationName' => 'topicId', ],
                'topicShortName' => [ 'type' => 'string', 'locationName' => 'topicShortName', ],
                'topicOperation' => [ 'type' => 'string', 'locationName' => 'topicOperation', ],
                'topicDescription' => [ 'type' => 'string', 'locationName' => 'topicDescription', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'udpatedTime' => [ 'type' => 'long', 'locationName' => 'udpatedTime', ],
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
        'CustomizedThingModelTemplate' => [
            'type' => 'structure',
            'members' => [
                'thingModelTemplateId' => [ 'type' => 'string', 'locationName' => 'thingModelTemplateId', ],
                'thingModelTemplateName' => [ 'type' => 'string', 'locationName' => 'thingModelTemplateName', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
                'productCount' => [ 'type' => 'integer', 'locationName' => 'productCount', ],
                'ossPath' => [ 'type' => 'string', 'locationName' => 'ossPath', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
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
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'maxDevices' => [ 'type' => 'integer', 'locationName' => 'maxDevices', ],
                'maxMessage' => [ 'type' => 'integer', 'locationName' => 'maxMessage', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'edgeStatus' => [ 'type' => 'string', 'locationName' => 'edgeStatus', ],
                'edgeOpenTime' => [ 'type' => 'string', 'locationName' => 'edgeOpenTime', ],
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
        'ServiceUsers' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userPhone' => [ 'type' => 'string', 'locationName' => 'userPhone', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ServiceUserLink' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userPhone' => [ 'type' => 'string', 'locationName' => 'userPhone', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userLevel' => [ 'type' => 'integer', 'locationName' => 'userLevel', ],
                'userMaster' => [ 'type' => 'string', 'locationName' => 'userMaster', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'ServiceUser' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userPhone' => [ 'type' => 'string', 'locationName' => 'userPhone', ],
                'company' => [ 'type' => 'string', 'locationName' => 'company', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'InvokeFunctionResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'returnValues' =>  [ 'shape' => 'DeviceFunctionVO', ],
            ],
        ],
        'CreateDeviceTopoResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoResult' =>  [ 'shape' => 'DeviceTopoResult', ],
            ],
        ],
        'UpdateDeviceTopoResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoResult' =>  [ 'shape' => 'DeviceTopoResult', ],
            ],
        ],
        'DeleteDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeFunctionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeFunctionListResultShape', ],
            ],
        ],
        'DescribeThingModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeThingModelResultShape', ],
            ],
        ],
        'DescribeDeviceTopoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDeviceTopoResultShape', ],
            ],
        ],
        'DeleteDeviceTopoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoInfoVO' =>  [ 'shape' => 'DeviceTopoInfoVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteDeviceResultShape', ],
            ],
        ],
        'DescribePropertySnapshotResultShape' => [
            'type' => 'structure',
            'members' => [
                'snapShot' => [ 'type' => 'string', 'locationName' => 'snapShot', ],
            ],
        ],
        'DescribeThingModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'thingModelRespTO' =>  [ 'shape' => 'ThingModelRespTO', ],
            ],
        ],
        'SetDevicePropertyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetDevicePropertyResultShape', ],
            ],
        ],
        'RegisterDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'RegisterDeviceResultShape', ],
            ],
        ],
        'InvokeFunctionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'InvokeFunctionResultShape', ],
            ],
        ],
        'DescribeDeviceTopoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoPageBO' =>  [ 'shape' => 'DeviceTopoPageBO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SetDevicePropertyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'devicePropertyVO' =>  [ 'shape' => 'DevicePropertyVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribePropertyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DownloadDeviceCertificateResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceCertUrl' => [ 'type' => 'string', 'locationName' => 'deviceCertUrl', ],
            ],
        ],
        'DescribePropertyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribePropertyResultShape', ],
            ],
        ],
        'DescribeDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceInfoVO' =>  [ 'shape' => 'DeviceInfoVO', ],
            ],
        ],
        'CreateDeviceTopoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoInfoVO' =>  [ 'shape' => 'DeviceTopoInfoVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDeviceResultShape', ],
            ],
        ],
        'DescribeThingTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeThingTypeResultShape', ],
            ],
        ],
        'DescribeDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeThingTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'thingTypeInfoVO' =>  [ 'shape' => 'ThingTypeInfoVO', ],
            ],
        ],
        'RegisterDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceInfoVO' =>  [ 'shape' => 'DeviceInfoVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeThingTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceMetaId' => [ 'type' => 'string', 'locationName' => 'deviceMetaId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RegisterDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DescribeThingTypeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceMetaId' => [ 'type' => 'string', 'locationName' => 'deviceMetaId', ],
                'deviceMetaName' => [ 'type' => 'string', 'locationName' => 'deviceMetaName', ],
                'nodeType' => [ 'type' => 'integer', 'locationName' => 'nodeType', ],
                'pageNo' => [ 'type' => 'integer', 'locationName' => 'pageNo', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DownloadDeviceCertificateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeEventListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeEventListResultShape', ],
            ],
        ],
        'UpdateDeviceTopoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoInfoVO' =>  [ 'shape' => 'DeviceTopoInfoVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SetDevicePropertyResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeEventListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'eventReportPageBo' =>  [ 'shape' => 'EventReportPageBo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeFunctionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionCallRecordVo', ], ],
            ],
        ],
        'DeviceTopoResult' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'errorDevicesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceTopoErrorMap', ], ],
            ],
        ],
        'CreateDeviceTopoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDeviceTopoResultShape', ],
            ],
        ],
        'DescribeEventListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventReportVo', ], ],
            ],
        ],
        'DescribePropertySnapshotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribePropertySnapshotResultShape', ],
            ],
        ],
        'DownloadDeviceCertificateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DownloadDeviceCertificateResultShape', ],
            ],
        ],
        'DescribeDeviceTopoResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceTopoRecordVO', ], ],
            ],
        ],
        'DescribeFunctionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'functionCallPageBo' =>  [ 'shape' => 'FunctionCallPageBo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribePropertySnapshotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceSnapshotRequestVO' =>  [ 'shape' => 'DeviceSnapshotRequestVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'InvokeFunctionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceFunctionVO' =>  [ 'shape' => 'DeviceFunctionVO', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeThingModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'thingTypeCode' => [ 'type' => 'string', 'locationName' => 'thingTypeCode', ],
                'thingModelVersion' => [ 'type' => 'string', 'locationName' => 'thingModelVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeThingTypeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeThingTypeListResultShape', ],
            ],
        ],
        'DeleteDeviceTopoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteDeviceTopoResultShape', ],
            ],
        ],
        'DescribeThingTypeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThingTypeInfoVO', ], ],
            ],
        ],
        'UpdateDeviceTopoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateDeviceTopoResultShape', ],
            ],
        ],
        'DescribePropertyResultShape' => [
            'type' => 'structure',
            'members' => [
                'propertyAcquireVo' =>  [ 'shape' => 'PropertyAcquireVo', ],
            ],
        ],
        'DeleteDeviceTopoResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceTopoResult' =>  [ 'shape' => 'DeviceTopoResult', ],
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
                'dynamicRegister' => [ 'type' => 'integer', 'locationName' => 'dynamicRegister', ],
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
        'AddDeviceLinksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'orderId' => [ 'type' => 'integer', 'locationName' => 'orderId', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
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
        'AddDeviceLinksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'children' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddDeviceLinksResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'InvokeThingTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'msgId' => [ 'type' => 'string', 'locationName' => 'msgId', ],
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
        'InvokeThingTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicShortName' => [ 'type' => 'string', 'locationName' => 'topicShortName', ],
                'topicMessage' => [ 'type' => 'string', 'locationName' => 'topicMessage', ],
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
        'InvokeThingTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'InvokeThingTopicResultShape', ],
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
                'callbackBeanName' => [ 'type' => 'string', 'locationName' => 'callbackBeanName', ],
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
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'GetDeviceGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'queryUserPin' => [ 'type' => 'string', 'locationName' => 'queryUserPin', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDeviceGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetDeviceGroupListResultShape', ],
            ],
        ],
        'FindDeviceGroupLinkPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'tag' => [ 'type' => 'string', 'locationName' => 'tag', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'orderId' => [ 'type' => 'long', 'locationName' => 'orderId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDeviceGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceGroupResp', ], ],
            ],
        ],
        'FindDeviceGroupLinkPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'FindDeviceGroupLinkPageResultShape', ],
            ],
        ],
        'GetDeviceGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetDeviceGroupResultShape', ],
            ],
        ],
        'GetDeviceGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryUserPin' => [ 'type' => 'string', 'locationName' => 'queryUserPin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'FindDeviceGroupLinkPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceGroupInfo', ], ],
            ],
        ],
        'GetDeviceGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceGroupResp', ], ],
            ],
        ],
        'ReadHoldingRegistersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'addressOfFirstRegister' => [ 'type' => 'integer', 'locationName' => 'addressOfFirstRegister', ],
                'numberOfRegisters' => [ 'type' => 'integer', 'locationName' => 'numberOfRegisters', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CollectorReadMessageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CollectorReadMessageResultShape', ],
            ],
        ],
        'CollectorWriteMessageResultShape' => [
            'type' => 'structure',
            'members' => [
                'writeStatus' => [ 'type' => 'string', 'locationName' => 'writeStatus', ],
            ],
        ],
        'CollectorWriteMessageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReadHoldingRegistersResultShape' => [
            'type' => 'structure',
            'members' => [
                'readData' => [ 'type' => 'object', 'locationName' => 'readData', ],
            ],
        ],
        'CollectorReadMessageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReadHoldingRegistersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ReadHoldingRegistersResultShape', ],
            ],
        ],
        'CollectorReadMessageResultShape' => [
            'type' => 'structure',
            'members' => [
                'readData' => [ 'type' => 'object', 'locationName' => 'readData', ],
            ],
        ],
        'ElevatorOperatingStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ElevatorOperatingStatusResultShape', ],
            ],
        ],
        'ElevatorOperatingStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ElevatorOperatingStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegisterValue', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CollectorWriteMessageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CollectorWriteMessageResultShape', ],
            ],
        ],
        'RemoveLoongrayDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveLoongrayDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LoongrayQueryPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'LoongrayQueryPageResultShape', ],
            ],
        ],
        'UpdateLooDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'device' =>  [ 'shape' => 'DeviceVO', ],
            ],
        ],
        'UpdateLooDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateLooDeviceResultShape', ],
            ],
        ],
        'LoongrayQueryPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'deviceType' => [ 'type' => 'integer', 'locationName' => 'deviceType', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'orderId' => [ 'type' => 'integer', 'locationName' => 'orderId', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
                'queryUserPin' => [ 'type' => 'string', 'locationName' => 'queryUserPin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateLooDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'AddLooDeviceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddLooDeviceResultShape', ],
            ],
        ],
        'QueryAdminStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'devices' => [ 'type' => 'integer', 'locationName' => 'devices', ],
                'activatedDevices' => [ 'type' => 'integer', 'locationName' => 'activatedDevices', ],
                'onlineDevices' => [ 'type' => 'integer', 'locationName' => 'onlineDevices', ],
                'monthMessages' => [ 'type' => 'long', 'locationName' => 'monthMessages', ],
                'monthDuration' => [ 'type' => 'long', 'locationName' => 'monthDuration', ],
                'products' => [ 'type' => 'long', 'locationName' => 'products', ],
            ],
        ],
        'QueryAdminStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryAdminStatisticsResultShape', ],
            ],
        ],
        'LoongrayQueryPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceVO', ], ],
            ],
        ],
        'QueryAdminStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'parentId' => [ 'type' => 'string', 'locationName' => 'parentId', ],
                'deviceCollectorType' => [ 'type' => 'string', 'locationName' => 'deviceCollectorType', ],
                'queryUserPin' => [ 'type' => 'string', 'locationName' => 'queryUserPin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddLooDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userPinParam' => [ 'type' => 'string', 'locationName' => 'userPinParam', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'preOrderId' => [ 'type' => 'string', 'locationName' => 'preOrderId', ],
            ],
        ],
        'AddLooDeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
            ],
        ],
        'RemoveLoongrayDeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DescribeProductWithAdminRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'CreateAdminProductRequestShape' => [
            'type' => 'structure',
            'members' => [
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'productDescription' => [ 'type' => 'string', 'locationName' => 'productDescription', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'internalTags' => [ 'type' => 'object', 'locationName' => 'internalTags', ],
                'collDeviceType' => [ 'type' => 'string', 'locationName' => 'collDeviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpdateProductWithAdminResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAdminProductResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAdminProductResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListProductsWithAdminResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListProductsWithAdminResultShape', ],
            ],
        ],
        'CreateAdminProductResultShape' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'UpdateProductWithAdminRequestShape' => [
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
        'DeleteProductWithAdminResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateProductWithAdminResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListProductsWithAdminResultShape' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'PageinfoVO', ],
                'products' => [ 'type' => 'list', 'member' => [ 'shape' => 'Product', ], ],
            ],
        ],
        'DeleteProductWithAdminResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListProductsWithAdminRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteProductWithAdminRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DescribeProductWithAdminResultShape' => [
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
        'DescribeProductWithAdminResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProductWithAdminResultShape', ],
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
                'internalTags' => [ 'type' => 'object', 'locationName' => 'internalTags', ],
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
        'DescribeProductTopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProductTopicsResultShape', ],
            ],
        ],
        'CreateProductTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateProductTopicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProductTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'topicId' => [ 'type' => 'string', 'locationName' => 'topicId', ],
            ],
        ],
        'DescribeProductTopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProductTopicResultShape', ],
            ],
        ],
        'DescribeProductTopicsRequestShape' => [
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
        'DescribeProductTopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'PageinfoVO', ],
                'productTopics' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductTopic', ], ],
            ],
        ],
        'CreateProductTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topicId' => [ 'type' => 'string', 'locationName' => 'topicId', ],
            ],
        ],
        'CreateProductTopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'topicShortName' => [ 'type' => 'string', 'locationName' => 'topicShortName', ],
                'topicOperation' => [ 'type' => 'string', 'locationName' => 'topicOperation', ],
                'topicDescription' => [ 'type' => 'string', 'locationName' => 'topicDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'DescribeProductTopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'topicShortName' => [ 'type' => 'string', 'locationName' => 'topicShortName', ],
                'topicOperation' => [ 'type' => 'string', 'locationName' => 'topicOperation', ],
                'topicDescription' => [ 'type' => 'string', 'locationName' => 'topicDescription', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'udpatedTime' => [ 'type' => 'long', 'locationName' => 'udpatedTime', ],
            ],
        ],
    ],
];
