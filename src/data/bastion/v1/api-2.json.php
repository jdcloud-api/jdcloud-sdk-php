<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'bastion',
        'protocol' => 'json',
//        'serviceFullName' => 'bastion',
//        'serviceId' => 'bastion',
    ],
    'operations' => [
        'DescribeBastions' => [
            'name' => 'DescribeBastions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bastions',
            ],
            'input' => [ 'shape' => 'DescribeBastionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBastionsResponseShape', ],
        ],
        'DescribeBastion' => [
            'name' => 'DescribeBastion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/bastion/{bid}',
            ],
            'input' => [ 'shape' => 'DescribeBastionRequestShape', ],
            'output' => [ 'shape' => 'DescribeBastionResponseShape', ],
        ],
        'UpdateBastionDesc' => [
            'name' => 'UpdateBastionDesc',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/bastion/{bid}',
            ],
            'input' => [ 'shape' => 'UpdateBastionDescRequestShape', ],
            'output' => [ 'shape' => 'UpdateBastionDescResponseShape', ],
        ],
        'DescribeSign' => [
            'name' => 'DescribeSign',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/sign',
            ],
            'input' => [ 'shape' => 'DescribeSignRequestShape', ],
            'output' => [ 'shape' => 'DescribeSignResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'SetInstanceZeroEnable' => [
            'name' => 'SetInstanceZeroEnable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instance/{instanceId}/zero',
            ],
            'input' => [ 'shape' => 'SetInstanceZeroEnableRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceZeroEnableResponseShape', ],
        ],
        'SetInstancePublicAccess' => [
            'name' => 'SetInstancePublicAccess',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instance/{instanceId}/publicAccess',
            ],
            'input' => [ 'shape' => 'SetInstancePublicAccessRequestShape', ],
            'output' => [ 'shape' => 'SetInstancePublicAccessResponseShape', ],
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
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'ModifyInstanceExpireOrStart' => [
            'name' => 'ModifyInstanceExpireOrStart',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceExpireOrStart',
            ],
            'input' => [ 'shape' => 'ModifyInstanceExpireOrStartRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceExpireOrStartResponseShape', ],
        ],
        'DescribeSourceId' => [
            'name' => 'DescribeSourceId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/order/{sourceId}',
            ],
            'input' => [ 'shape' => 'DescribeSourceIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeSourceIdResponseShape', ],
        ],
        'DescribePins' => [
            'name' => 'DescribePins',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pins',
            ],
            'input' => [ 'shape' => 'DescribePinsRequestShape', ],
            'output' => [ 'shape' => 'DescribePinsResponseShape', ],
        ],
    ],
    'shapes' => [
        'AZSaleStatusVo' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'canSale' => [ 'type' => 'integer', 'locationName' => 'canSale', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
            ],
        ],
        'EnableBastion' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'PayBastion' => [
            'type' => 'structure',
            'members' => [
                'orderNo' => [ 'type' => 'string', 'locationName' => 'orderNo', ],
            ],
        ],
        'Sign' => [
            'type' => 'structure',
            'members' => [
                'sign' => [ 'type' => 'string', 'locationName' => 'sign', ],
                'ts' => [ 'type' => 'integer', 'locationName' => 'ts', ],
                'sk' => [ 'type' => 'string', 'locationName' => 'sk', ],
            ],
        ],
        'CreateBastion' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'spec' => [ 'type' => 'string', 'locationName' => 'spec', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'Bastion' => [
            'type' => 'structure',
            'members' => [
                'bid' => [ 'type' => 'string', 'locationName' => 'bid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'logIp' => [ 'type' => 'string', 'locationName' => 'logIp', ],
                'logPip' => [ 'type' => 'string', 'locationName' => 'logPip', ],
                'relayIp0' => [ 'type' => 'string', 'locationName' => 'relayIp0', ],
                'relayIp1' => [ 'type' => 'string', 'locationName' => 'relayIp1', ],
                'relayIp2' => [ 'type' => 'string', 'locationName' => 'relayIp2', ],
                'relayPip0' => [ 'type' => 'string', 'locationName' => 'relayPip0', ],
                'relayPip1' => [ 'type' => 'string', 'locationName' => 'relayPip1', ],
                'relayPip2' => [ 'type' => 'string', 'locationName' => 'relayPip2', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'spec' => [ 'type' => 'string', 'locationName' => 'spec', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'zeroStatus' => [ 'type' => 'boolean', 'locationName' => 'zeroStatus', ],
                'publicAccess' => [ 'type' => 'boolean', 'locationName' => 'publicAccess', ],
            ],
        ],
        'ModifyBastion' => [
            'type' => 'structure',
            'members' => [
                'spec' => [ 'type' => 'string', 'locationName' => 'spec', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'bid' => [ 'type' => 'string', 'locationName' => 'bid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'logIp' => [ 'type' => 'string', 'locationName' => 'logIp', ],
                'logPip' => [ 'type' => 'string', 'locationName' => 'logPip', ],
                'relayIp0' => [ 'type' => 'string', 'locationName' => 'relayIp0', ],
                'relayIp1' => [ 'type' => 'string', 'locationName' => 'relayIp1', ],
                'relayIp2' => [ 'type' => 'string', 'locationName' => 'relayIp2', ],
                'relayPip0' => [ 'type' => 'string', 'locationName' => 'relayPip0', ],
                'relayPip1' => [ 'type' => 'string', 'locationName' => 'relayPip1', ],
                'relayPip2' => [ 'type' => 'string', 'locationName' => 'relayPip2', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'innerDomain' => [ 'type' => 'string', 'locationName' => 'innerDomain', ],
                'spec' => [ 'type' => 'string', 'locationName' => 'spec', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'publicAccess' => [ 'type' => 'boolean', 'locationName' => 'publicAccess', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'spec' => [ 'type' => 'string', 'locationName' => 'spec', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
                'ipVersion' => [ 'type' => 'string', 'locationName' => 'ipVersion', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'Region' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'SpecMap' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'disk' => [ 'type' => 'string', 'locationName' => 'disk', ],
                'describe' => [ 'type' => 'string', 'locationName' => 'describe', ],
            ],
        ],
        'Source' => [
            'type' => 'structure',
            'members' => [
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
            ],
        ],
        'UserPin' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'RegionAzVo' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
                'aZlist' => [ 'type' => 'list', 'member' => [ 'shape' => 'AZSaleStatusVo', ], ],
            ],
        ],
        'ResourceData' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceData', ], ],
            ],
        ],
        'SpecStatictics' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'string', 'locationName' => 'count', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'DescribeBastionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bid' => [ 'type' => 'string', 'locationName' => 'bid', ],
            ],
        ],
        'DescribeSignResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeSignResultShape', ],
            ],
        ],
        'DescribeSignResultShape' => [
            'type' => 'structure',
            'members' => [
                'sign' =>  [ 'shape' => 'Sign', ],
            ],
        ],
        'DescribeBastionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBastionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'DescribeBastionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'bastions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bastion', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
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
        'UpdateBastionDescRequestShape' => [
            'type' => 'structure',
            'members' => [
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bid' => [ 'type' => 'string', 'locationName' => 'bid', ],
            ],
        ],
        'UpdateBastionDescResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'UpdateBastionDescResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateBastionDescResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBastionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSignRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'bastionId' => [ 'type' => 'string', 'locationName' => 'bastionId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBastionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBastionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBastionResultShape' => [
            'type' => 'structure',
            'members' => [
                'bastion' =>  [ 'shape' => 'Bastion', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstanceZeroEnableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetInstanceZeroEnableResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstancePublicAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetInstancePublicAccessResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstancePublicAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetInstanceZeroEnableResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetInstancePublicAccessResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'bastion' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstanceZeroEnableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'spec' => [ 'type' => 'string', 'locationName' => 'spec', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceExpireOrStartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceExpireOrStartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceExpireOrStartResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceExpireOrStartResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'sourceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Source', ], ],
            ],
        ],
        'DescribeSourceIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'bastion' =>  [ 'shape' => 'Bastion', ],
            ],
        ],
        'DescribeSourceIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSourceIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSourceIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePinsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePinsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePinsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePinsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pins' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserPin', ], ],
            ],
        ],
    ],
];
