<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotcloudgateway',
        'protocol' => 'json',
//        'serviceFullName' => 'iotcloudgateway',
//        'serviceId' => 'iotcloudgateway',
    ],
    'operations' => [
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstance',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'QueryInstanceExposeDomain' => [
            'name' => 'QueryInstanceExposeDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:queryInstanceExposeDomain',
            ],
            'input' => [ 'shape' => 'QueryInstanceExposeDomainRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceExposeDomainResponseShape', ],
        ],
        'QueryInstanceStatus' => [
            'name' => 'QueryInstanceStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:queryInstanceStatus',
            ],
            'input' => [ 'shape' => 'QueryInstanceStatusRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceStatusResponseShape', ],
        ],
        'DeviceControl' => [
            'name' => 'DeviceControl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:deviceControl',
            ],
            'input' => [ 'shape' => 'DeviceControlRequestShape', ],
            'output' => [ 'shape' => 'DeviceControlResponseShape', ],
        ],
    ],
    'shapes' => [
        'CloudstorageSpec' => [
            'type' => 'structure',
            'members' => [
                'rsname' => [ 'type' => 'string', 'locationName' => 'rsname', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'DeviceControlSpec' => [
            'type' => 'structure',
            'members' => [
                'request_id' => [ 'type' => 'string', 'locationName' => 'request_id', ],
                'peers' => [ 'type' => 'string', 'locationName' => 'peers', ],
                'br_msg' => [ 'type' => 'string', 'locationName' => 'br_msg', ],
            ],
        ],
        'DwAuthSpec' => [
            'type' => 'structure',
            'members' => [
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'deviceIdent' => [ 'type' => 'string', 'locationName' => 'deviceIdent', ],
                'deviceSecret' => [ 'type' => 'string', 'locationName' => 'deviceSecret', ],
            ],
        ],
        'Erpinstance' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceRegion' => [ 'type' => 'string', 'locationName' => 'instanceRegion', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceFlavor' => [ 'type' => 'string', 'locationName' => 'instanceFlavor', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'exposedDomain' => [ 'type' => 'string', 'locationName' => 'exposedDomain', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'cloudstorage' => [ 'type' => 'integer', 'locationName' => 'cloudstorage', ],
                'serviceConfig' => [ 'type' => 'string', 'locationName' => 'serviceConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'gw_dev_id' => [ 'type' => 'string', 'locationName' => 'gw_dev_id', ],
                'gw_dev_num' => [ 'type' => 'integer', 'locationName' => 'gw_dev_num', ],
                'chargeType' => [ 'type' => 'integer', 'locationName' => 'chargeType', ],
                'chargeExpired' => [ 'type' => 'string', 'locationName' => 'chargeExpired', ],
                'is_deleted' => [ 'type' => 'integer', 'locationName' => 'is_deleted', ],
            ],
        ],
        'FlavorSpec' => [
            'type' => 'structure',
            'members' => [
                'rsname' => [ 'type' => 'string', 'locationName' => 'rsname', ],
                'flavor' => [ 'type' => 'string', 'locationName' => 'flavor', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'instanceRegion' => [ 'type' => 'string', 'locationName' => 'instanceRegion', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceFlavor' => [ 'type' => 'string', 'locationName' => 'instanceFlavor', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'exposedDomain' => [ 'type' => 'string', 'locationName' => 'exposedDomain', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'cloudstorage' => [ 'type' => 'integer', 'locationName' => 'cloudstorage', ],
                'serviceConfig' => [ 'type' => 'string', 'locationName' => 'serviceConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'gw_dev_id' => [ 'type' => 'string', 'locationName' => 'gw_dev_id', ],
                'gw_dev_num' => [ 'type' => 'integer', 'locationName' => 'gw_dev_num', ],
                'chargeType' => [ 'type' => 'integer', 'locationName' => 'chargeType', ],
                'chargeExpired' => [ 'type' => 'string', 'locationName' => 'chargeExpired', ],
            ],
        ],
        'OssSpec' => [
            'type' => 'structure',
            'members' => [
                'oss_ak' => [ 'type' => 'string', 'locationName' => 'oss_ak', ],
                'oss_sk' => [ 'type' => 'string', 'locationName' => 'oss_sk', ],
                'oss_region' => [ 'type' => 'string', 'locationName' => 'oss_region', ],
                'oss_endpoint' => [ 'type' => 'string', 'locationName' => 'oss_endpoint', ],
                'oss_bucket' => [ 'type' => 'string', 'locationName' => 'oss_bucket', ],
            ],
        ],
        'InstanceConfig' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'productSecret' => [ 'type' => 'string', 'locationName' => 'productSecret', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'mqttAddr' => [ 'type' => 'string', 'locationName' => 'mqttAddr', ],
                'httpAddr' => [ 'type' => 'string', 'locationName' => 'httpAddr', ],
                'redisAddr' => [ 'type' => 'string', 'locationName' => 'redisAddr', ],
                'mediaStore' => [ 'type' => 'string', 'locationName' => 'mediaStore', ],
                'gwdevId' => [ 'type' => 'string', 'locationName' => 'gwdevId', ],
                'ossSpec' =>  [ 'shape' => 'OssSpec', ],
                'dwAuthSpec' =>  [ 'shape' => 'DwAuthSpec', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'actionName' => [ 'type' => 'string', 'locationName' => 'actionName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'az1flavor' => [ 'type' => 'string', 'locationName' => 'az1flavor', ],
                'az1replica' => [ 'type' => 'integer', 'locationName' => 'az1replica', ],
                'az1storagesize' => [ 'type' => 'integer', 'locationName' => 'az1storagesize', ],
                'az2flavor' => [ 'type' => 'string', 'locationName' => 'az2flavor', ],
                'az2replica' => [ 'type' => 'integer', 'locationName' => 'az2replica', ],
                'az2storagesize' => [ 'type' => 'integer', 'locationName' => 'az2storagesize', ],
            ],
        ],
        'NewInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'az1flavor' => [ 'type' => 'string', 'locationName' => 'az1flavor', ],
                'az1replica' => [ 'type' => 'integer', 'locationName' => 'az1replica', ],
                'az1storagesize' => [ 'type' => 'integer', 'locationName' => 'az1storagesize', ],
                'az2flavor' => [ 'type' => 'string', 'locationName' => 'az2flavor', ],
                'az2replica' => [ 'type' => 'integer', 'locationName' => 'az2replica', ],
                'az2storagesize' => [ 'type' => 'integer', 'locationName' => 'az2storagesize', ],
            ],
        ],
        'ReplicaSpec' => [
            'type' => 'structure',
            'members' => [
                'rsname' => [ 'type' => 'string', 'locationName' => 'rsname', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryInstanceStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryInstanceStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryInstanceExposeDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryInstanceExposeDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeviceControlResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryInstanceStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeviceControlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'devicecmd' =>  [ 'shape' => 'DeviceControlSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'QueryInstanceExposeDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'QueryInstanceExposeDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'iotgwd' => [ 'type' => 'string', 'locationName' => 'iotgwd', ],
                'iotgwu' => [ 'type' => 'string', 'locationName' => 'iotgwu', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'QueryInstanceStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DeviceControlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
