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
    ],
];
