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
    ],
];
