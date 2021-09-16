<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'instancevoucher',
        'protocol' => 'json',
//        'serviceFullName' => 'instancevoucher',
//        'serviceId' => 'instancevoucher',
    ],
    'operations' => [
        'DescribeInstanceVoucherTypes' => [
            'name' => 'DescribeInstanceVoucherTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceVoucherTypes',
            ],
            'input' => [ 'shape' => 'DescribeInstanceVoucherTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceVoucherTypesResponseShape', ],
        ],
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
        'DescribeInstanceVouchers' => [
            'name' => 'DescribeInstanceVouchers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceVouchers',
            ],
            'input' => [ 'shape' => 'DescribeInstanceVouchersRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceVouchersResponseShape', ],
        ],
        'CreateInstanceVoucher' => [
            'name' => 'CreateInstanceVoucher',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instanceVouchers',
            ],
            'input' => [ 'shape' => 'CreateInstanceVoucherRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceVoucherResponseShape', ],
        ],
        'DescribeInstanceVoucher' => [
            'name' => 'DescribeInstanceVoucher',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceVouchers/{instanceVoucherId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceVoucherRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceVoucherResponseShape', ],
        ],
        'DeleteInstanceVoucher' => [
            'name' => 'DeleteInstanceVoucher',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instanceVouchers/{instanceVoucherId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceVoucherRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceVoucherResponseShape', ],
        ],
        'ModifyInstanceVoucherAttribute' => [
            'name' => 'ModifyInstanceVoucherAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instanceVouchers/{instanceVoucherId}:modifyInstanceVoucherAttribute',
            ],
            'input' => [ 'shape' => 'ModifyInstanceVoucherAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceVoucherAttributeResponseShape', ],
        ],
    ],
    'shapes' => [
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
            ],
        ],
        'LocalDisk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'diskSizeGB' => [ 'type' => 'integer', 'locationName' => 'diskSizeGB', ],
            ],
        ],
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'InstanceVoucherType' => [
            'type' => 'structure',
            'members' => [
                'instanceTypeFamily' => [ 'type' => 'string', 'locationName' => 'instanceTypeFamily', ],
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'generation' => [ 'type' => 'integer', 'locationName' => 'generation', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'localDisks' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocalDisk', ], ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'reservedType' => [ 'type' => 'string', 'locationName' => 'reservedType', ],
                'cpuLimit' => [ 'type' => 'integer', 'locationName' => 'cpuLimit', ],
                'cpuUsed' => [ 'type' => 'integer', 'locationName' => 'cpuUsed', ],
                'gpuLimit' => [ 'type' => 'integer', 'locationName' => 'gpuLimit', ],
                'gpuUsed' => [ 'type' => 'integer', 'locationName' => 'gpuUsed', ],
            ],
        ],
        'ReservedVoucher' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'unitCount' => [ 'type' => 'integer', 'locationName' => 'unitCount', ],
            ],
        ],
        'NonReservedVoucher' => [
            'type' => 'structure',
            'members' => [
                'instanceTypeFamily' => [ 'type' => 'string', 'locationName' => 'instanceTypeFamily', ],
                'unitCount' => [ 'type' => 'integer', 'locationName' => 'unitCount', ],
            ],
        ],
        'InstanceVoucher' => [
            'type' => 'structure',
            'members' => [
                'instanceVoucherId' => [ 'type' => 'string', 'locationName' => 'instanceVoucherId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'reservedType' => [ 'type' => 'string', 'locationName' => 'reservedType', ],
                'nonReservedVoucher' =>  [ 'shape' => 'NonReservedVoucher', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'ReservedVoucherSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'unitCount' => [ 'type' => 'integer', 'locationName' => 'unitCount', ],
            ],
        ],
        'InstanceVoucherSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'reservedType' => [ 'type' => 'string', 'locationName' => 'reservedType', ],
                'nonReservedVoucherSpec' =>  [ 'shape' => 'NonReservedVoucherSpec', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'NonReservedVoucherSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceTypeFamily' => [ 'type' => 'string', 'locationName' => 'instanceTypeFamily', ],
                'unitCount' => [ 'type' => 'integer', 'locationName' => 'unitCount', ],
            ],
        ],
        'DescribeInstanceVoucherTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceVoucherTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceVoucherTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'reservedType' => [ 'type' => 'string', 'locationName' => 'reservedType', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceVoucherTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceVoucherTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceVoucherType', ], ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
            ],
        ],
        'ModifyInstanceVoucherAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceVoucherResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceVoucherId' => [ 'type' => 'string', 'locationName' => 'instanceVoucherId', ],
            ],
        ],
        'DeleteInstanceVoucherResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceVoucherAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceVoucherId' => [ 'type' => 'string', 'locationName' => 'instanceVoucherId', ],
            ],
        ],
        'DescribeInstanceVoucherResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceVoucher' =>  [ 'shape' => 'InstanceVoucher', ],
            ],
        ],
        'CreateInstanceVoucherResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceVoucherResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceVoucherAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceVouchersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceVoucherResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceVouchersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceVouchersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceVoucherRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceVoucherId' => [ 'type' => 'string', 'locationName' => 'instanceVoucherId', ],
            ],
        ],
        'DeleteInstanceVoucherRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceVoucherId' => [ 'type' => 'string', 'locationName' => 'instanceVoucherId', ],
            ],
        ],
        'DescribeInstanceVoucherResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceVoucherResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceVouchersResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceVouchers' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceVoucher', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateInstanceVoucherRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceVoucherSpec' =>  [ 'shape' => 'InstanceVoucherSpec', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
