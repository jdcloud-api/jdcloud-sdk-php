<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'gcs',
        'protocol' => 'json',
//        'serviceFullName' => 'gcs',
//        'serviceId' => 'gcs',
    ],
    'operations' => [
        'DescribeArts' => [
            'name' => 'DescribeArts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/arts',
            ],
            'input' => [ 'shape' => 'DescribeArtsRequestShape', ],
            'output' => [ 'shape' => 'DescribeArtsResponseShape', ],
        ],
        'DescribeArt' => [
            'name' => 'DescribeArt',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/arts/{artId}',
            ],
            'input' => [ 'shape' => 'DescribeArtRequestShape', ],
            'output' => [ 'shape' => 'DescribeArtResponseShape', ],
        ],
        'ModifyInstance' => [
            'name' => 'ModifyInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyInstance',
            ],
            'input' => [ 'shape' => 'ModifyInstanceRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceResponseShape', ],
        ],
        'CreateInstances' => [
            'name' => 'CreateInstances',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/createInstances',
            ],
            'input' => [ 'shape' => 'CreateInstancesRequestShape', ],
            'output' => [ 'shape' => 'CreateInstancesResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeInstances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeInstance',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/deleteInstance',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'StartInstance' => [
            'name' => 'StartInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/startInstance',
            ],
            'input' => [ 'shape' => 'StartInstanceRequestShape', ],
            'output' => [ 'shape' => 'StartInstanceResponseShape', ],
        ],
        'StopInstance' => [
            'name' => 'StopInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stopInstance',
            ],
            'input' => [ 'shape' => 'StopInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceResponseShape', ],
        ],
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'StopInstanceTimer' => [
            'name' => 'StopInstanceTimer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stopInstanceTimer',
            ],
            'input' => [ 'shape' => 'StopInstanceTimerRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceTimerResponseShape', ],
        ],
        'StopInstanceTimerCancle' => [
            'name' => 'StopInstanceTimerCancle',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stopInstanceTimerCancle',
            ],
            'input' => [ 'shape' => 'StopInstanceTimerCancleRequestShape', ],
            'output' => [ 'shape' => 'StopInstanceTimerCancleResponseShape', ],
        ],
        'ModifyInstanceSecret' => [
            'name' => 'ModifyInstanceSecret',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyInstanceSecret',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSecretRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSecretResponseShape', ],
        ],
        'ModifyInstanceImage' => [
            'name' => 'ModifyInstanceImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyInstanceImage',
            ],
            'input' => [ 'shape' => 'ModifyInstanceImageRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceImageResponseShape', ],
        ],
        'DescribeOrderInfos' => [
            'name' => 'DescribeOrderInfos',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeOrderInfos',
            ],
            'input' => [ 'shape' => 'DescribeOrderInfosRequestShape', ],
            'output' => [ 'shape' => 'DescribeOrderInfosResponseShape', ],
        ],
        'DescribeRegions' => [
            'name' => 'DescribeRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions',
            ],
            'input' => [ 'shape' => 'DescribeRegionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRegionsResponseShape', ],
        ],
        'DescribeStock' => [
            'name' => 'DescribeStock',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeStock',
            ],
            'input' => [ 'shape' => 'DescribeStockRequestShape', ],
            'output' => [ 'shape' => 'DescribeStockResponseShape', ],
        ],
        'ModifyNetDisk' => [
            'name' => 'ModifyNetDisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/modifyNetDisk',
            ],
            'input' => [ 'shape' => 'ModifyNetDiskRequestShape', ],
            'output' => [ 'shape' => 'ModifyNetDiskResponseShape', ],
        ],
        'DescribeNetDisk' => [
            'name' => 'DescribeNetDisk',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeNetDisk',
            ],
            'input' => [ 'shape' => 'DescribeNetDiskRequestShape', ],
            'output' => [ 'shape' => 'DescribeNetDiskResponseShape', ],
        ],
    ],
    'shapes' => [
        'Az' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
            ],
        ],
        'Art' => [
            'type' => 'structure',
            'members' => [
                'artId' => [ 'type' => 'string', 'locationName' => 'artId', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'prompt' => [ 'type' => 'string', 'locationName' => 'prompt', ],
                'negativePrompt' => [ 'type' => 'string', 'locationName' => 'negativePrompt', ],
                'otherMetadata' => [ 'type' => 'string', 'locationName' => 'otherMetadata', ],
                'comfyuiWorkflowUrl' => [ 'type' => 'string', 'locationName' => 'comfyuiWorkflowUrl', ],
                'images' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArtImage', ], ],
                'prevArtId' => [ 'type' => 'string', 'locationName' => 'prevArtId', ],
                'nextArtId' => [ 'type' => 'string', 'locationName' => 'nextArtId', ],
            ],
        ],
        'ArtImage' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
            ],
        ],
        'Model' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'GcsImageApplication' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ImageInfo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'cudaVersion' => [ 'type' => 'string', 'locationName' => 'cudaVersion', ],
                'os' => [ 'type' => 'string', 'locationName' => 'os', ],
                'conda' => [ 'type' => 'string', 'locationName' => 'conda', ],
                'framework' => [ 'type' => 'string', 'locationName' => 'framework', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'apps' => [ 'type' => 'list', 'member' => [ 'shape' => 'GcsImageApplication', ], ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'skuInfoId' => [ 'type' => 'string', 'locationName' => 'skuInfoId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'cardless' => [ 'type' => 'integer', 'locationName' => 'cardless', ],
                'cardnum' => [ 'type' => 'integer', 'locationName' => 'cardnum', ],
                'jupyter' => [ 'type' => 'string', 'locationName' => 'jupyter', ],
                'sdUrl' => [ 'type' => 'string', 'locationName' => 'sdUrl', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'sshUserName' => [ 'type' => 'string', 'locationName' => 'sshUserName', ],
                'sshPassword' => [ 'type' => 'string', 'locationName' => 'sshPassword', ],
                'releaseTime' => [ 'type' => 'string', 'locationName' => 'releaseTime', ],
                'stopTime' => [ 'type' => 'string', 'locationName' => 'stopTime', ],
                'insVersion' => [ 'type' => 'string', 'locationName' => 'insVersion', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'Service', ], ],
                'clusterIpPorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Service', ], ],
            ],
        ],
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
        'Service' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
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
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'skuId' => [ 'type' => 'string', 'locationName' => 'skuId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'OrderInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'subOrderNumber' => [ 'type' => 'string', 'locationName' => 'subOrderNumber', ],
                'chargeItem' => [ 'type' => 'string', 'locationName' => 'chargeItem', ],
                'orderType' => [ 'type' => 'integer', 'locationName' => 'orderType', ],
                'orderStatus' => [ 'type' => 'string', 'locationName' => 'orderStatus', ],
                'skuId' => [ 'type' => 'string', 'locationName' => 'skuId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
                'autoRenew' => [ 'type' => 'string', 'locationName' => 'autoRenew', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'customInfo' => [ 'type' => 'string', 'locationName' => 'customInfo', ],
                'sourceIdMain' => [ 'type' => 'string', 'locationName' => 'sourceIdMain', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'sourceIdSub' => [ 'type' => 'string', 'locationName' => 'sourceIdSub', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'Region' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Az', ], ],
                'networks' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RenewalResource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'RenewalResource', ], ],
            ],
        ],
        'SaveToDbSpec' => [
            'type' => 'structure',
            'members' => [
                'resourceKey' => [ 'type' => 'string', 'locationName' => 'resourceKey', ],
            ],
        ],
        'SkuInfo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'skuName' => [ 'type' => 'string', 'locationName' => 'skuName', ],
                'skuStock' => [ 'type' => 'integer', 'locationName' => 'skuStock', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'compute' =>  [ 'shape' => 'SkuItemCompute', ],
                'cardless' =>  [ 'shape' => 'SkuItemCompute', ],
                'localPv' =>  [ 'shape' => 'SkuItemStorage', ],
                'imageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageInfo', ], ],
            ],
        ],
        'SkuItemStorage' => [
            'type' => 'structure',
            'members' => [
                'chargeItem' => [ 'type' => 'string', 'locationName' => 'chargeItem', ],
                'itemName' => [ 'type' => 'string', 'locationName' => 'itemName', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'systemDiskType' => [ 'type' => 'string', 'locationName' => 'systemDiskType', ],
                'systemDisk' => [ 'type' => 'integer', 'locationName' => 'systemDisk', ],
                'dataDiskType' => [ 'type' => 'string', 'locationName' => 'dataDiskType', ],
                'dataDisk' => [ 'type' => 'integer', 'locationName' => 'dataDisk', ],
            ],
        ],
        'SkuItemCompute' => [
            'type' => 'structure',
            'members' => [
                'chargeItem' => [ 'type' => 'string', 'locationName' => 'chargeItem', ],
                'itemName' => [ 'type' => 'string', 'locationName' => 'itemName', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'gpuManufacturer' => [ 'type' => 'string', 'locationName' => 'gpuManufacturer', ],
                'gpuName' => [ 'type' => 'string', 'locationName' => 'gpuName', ],
                'gpuModel' => [ 'type' => 'string', 'locationName' => 'gpuModel', ],
                'gpuMemory' => [ 'type' => 'string', 'locationName' => 'gpuMemory', ],
                'gpuComputility' => [ 'type' => 'string', 'locationName' => 'gpuComputility', ],
                'gpuCount' => [ 'type' => 'integer', 'locationName' => 'gpuCount', ],
                'cpuArchitecture' => [ 'type' => 'string', 'locationName' => 'cpuArchitecture', ],
                'cpuCount' => [ 'type' => 'integer', 'locationName' => 'cpuCount', ],
                'cpuRequest' => [ 'type' => 'integer', 'locationName' => 'cpuRequest', ],
                'cpuGen' => [ 'type' => 'string', 'locationName' => 'cpuGen', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'memoryRequest' => [ 'type' => 'integer', 'locationName' => 'memoryRequest', ],
                'memoryGen' => [ 'type' => 'string', 'locationName' => 'memoryGen', ],
            ],
        ],
        'SkuStock' => [
            'type' => 'structure',
            'members' => [
                'skuName' => [ 'type' => 'string', 'locationName' => 'skuName', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'gpuCount' => [ 'type' => 'integer', 'locationName' => 'gpuCount', ],
                'skuStock' => [ 'type' => 'integer', 'locationName' => 'skuStock', ],
                'stockLimit' => [ 'type' => 'integer', 'locationName' => 'stockLimit', ],
            ],
        ],
        'DescribeArtResultShape' => [
            'type' => 'structure',
            'members' => [
                'art' =>  [ 'shape' => 'Art', ],
            ],
        ],
        'DescribeArtsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeArtsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeArtResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeArtResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeArtsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeArtsResultShape' => [
            'type' => 'structure',
            'members' => [
                'arts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Art', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'DescribeArtRequestShape' => [
            'type' => 'structure',
            'members' => [
                'artId' => [ 'type' => 'string', 'locationName' => 'artId', ],
            ],
        ],
        'ModifyInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'StartInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'StopInstanceTimerResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'StopInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'channel' => [ 'type' => 'string', 'locationName' => 'channel', ],
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'operType' => [ 'type' => 'string', 'locationName' => 'operType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceTimerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'stopTime' => [ 'type' => 'string', 'locationName' => 'stopTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopInstanceTimerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInstanceTimerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ModifyInstanceImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceTimerCancleResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'StopInstanceTimerCancleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInstanceTimerCancleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
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
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'chargeItem' => [ 'type' => 'string', 'locationName' => 'chargeItem', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StopInstanceTimerCancleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeOrderInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderInfo', ], ],
            ],
        ],
        'DescribeOrderInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOrderInfosResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOrderInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
                'subOrderNumber' => [ 'type' => 'string', 'locationName' => 'subOrderNumber', ],
                'orderType' => [ 'type' => 'string', 'locationName' => 'orderType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRegionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'DescribeRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Region', ], ],
            ],
        ],
        'DescribeStockRequestShape' => [
            'type' => 'structure',
            'members' => [
                'skuId' => [ 'type' => 'string', 'locationName' => 'skuId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeStockResultShape' => [
            'type' => 'structure',
            'members' => [
                'stock' =>  [ 'shape' => 'SkuStock', ],
            ],
        ],
        'DescribeStockResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStockResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNetDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNetDiskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetDiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyNetDiskResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyNetDiskResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DescribeNetDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeNetDiskResultShape' => [
            'type' => 'structure',
            'members' => [
                'open' => [ 'type' => 'string', 'locationName' => 'open', ],
                'bytesUsed' => [ 'type' => 'long', 'locationName' => 'bytesUsed', ],
                'bytesQuota' => [ 'type' => 'long', 'locationName' => 'bytesQuota', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'netdiskId' => [ 'type' => 'string', 'locationName' => 'netdiskId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'pvcName' => [ 'type' => 'string', 'locationName' => 'pvcName', ],
                'netType' => [ 'type' => 'string', 'locationName' => 'netType', ],
                'pvPath' => [ 'type' => 'string', 'locationName' => 'pvPath', ],
                'netVolumeName' => [ 'type' => 'string', 'locationName' => 'netVolumeName', ],
                'netVolumePath' => [ 'type' => 'string', 'locationName' => 'netVolumePath', ],
                'storage' => [ 'type' => 'integer', 'locationName' => 'storage', ],
            ],
        ],
        'ModifyNetDiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
