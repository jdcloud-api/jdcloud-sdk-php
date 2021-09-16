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
    ],
];
