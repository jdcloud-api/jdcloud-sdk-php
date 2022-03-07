<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdw',
        'protocol' => 'json',
//        'serviceFullName' => 'jdw',
//        'serviceId' => 'jdw',
    ],
    'operations' => [
    ],
    'shapes' => [
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'storage' => [ 'type' => 'integer', 'locationName' => 'storage', ],
                'nodeNumber' => [ 'type' => 'integer', 'locationName' => 'nodeNumber', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'DBInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeNumber' => [ 'type' => 'integer', 'locationName' => 'nodeNumber', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceDomain' => [ 'type' => 'string', 'locationName' => 'instanceDomain', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Node', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'Node' => [
            'type' => 'structure',
            'members' => [
                'nodeRole' => [ 'type' => 'string', 'locationName' => 'nodeRole', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'cpuUtilization' => [ 'type' => 'string', 'locationName' => 'cpuUtilization', ],
                'memoryUtilization' => [ 'type' => 'string', 'locationName' => 'memoryUtilization', ],
                'diskUtilization' => [ 'type' => 'string', 'locationName' => 'diskUtilization', ],
            ],
        ],
        'DBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeNumber' => [ 'type' => 'integer', 'locationName' => 'nodeNumber', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'NodeType' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'storage' => [ 'type' => 'integer', 'locationName' => 'storage', ],
                'miniNodeNumber' => [ 'type' => 'integer', 'locationName' => 'miniNodeNumber', ],
                'maxNodeNumber' => [ 'type' => 'integer', 'locationName' => 'maxNodeNumber', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
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
    ],
];
