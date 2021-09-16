<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotedge',
        'protocol' => 'json',
//        'serviceFullName' => 'iotedge',
//        'serviceId' => 'iotedge',
    ],
    'operations' => [
        'DeployApp' => [
            'name' => 'DeployApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:deployApp',
            ],
            'input' => [ 'shape' => 'DeployAppRequestShape', ],
            'output' => [ 'shape' => 'DeployAppResponseShape', ],
        ],
        'DescribeDeployApp' => [
            'name' => 'DescribeDeployApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:describeDeployApp',
            ],
            'input' => [ 'shape' => 'DescribeDeployAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployAppResponseShape', ],
        ],
        'DescribeDeployDetails' => [
            'name' => 'DescribeDeployDetails',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:describeDeployDetails',
            ],
            'input' => [ 'shape' => 'DescribeDeployDetailsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployDetailsResponseShape', ],
        ],
        'UnInstallApp' => [
            'name' => 'UnInstallApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:unInstallApp',
            ],
            'input' => [ 'shape' => 'UnInstallAppRequestShape', ],
            'output' => [ 'shape' => 'UnInstallAppResponseShape', ],
        ],
        'SetAppStatus' => [
            'name' => 'SetAppStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:setAppStatus',
            ],
            'input' => [ 'shape' => 'SetAppStatusRequestShape', ],
            'output' => [ 'shape' => 'SetAppStatusResponseShape', ],
        ],
        'DescribeConfig' => [
            'name' => 'DescribeConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/hardwareId/{hardwareId}/os/{osId}/edgeApp:describeConfig',
            ],
            'input' => [ 'shape' => 'DescribeConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeConfigResponseShape', ],
        ],
        'DeleteEdgeWithCore' => [
            'name' => 'DeleteEdgeWithCore',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/edges/{edgeName}',
            ],
            'input' => [ 'shape' => 'DeleteEdgeWithCoreRequestShape', ],
            'output' => [ 'shape' => 'DeleteEdgeWithCoreResponseShape', ],
        ],
        'AddEdgeWithCore' => [
            'name' => 'AddEdgeWithCore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/edges/{edgeName}:addEdge',
            ],
            'input' => [ 'shape' => 'AddEdgeWithCoreRequestShape', ],
            'output' => [ 'shape' => 'AddEdgeWithCoreResponseShape', ],
        ],
        'AddSubDeviceWithCore' => [
            'name' => 'AddSubDeviceWithCore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/edges/{edgeName}:addSubDevice',
            ],
            'input' => [ 'shape' => 'AddSubDeviceWithCoreRequestShape', ],
            'output' => [ 'shape' => 'AddSubDeviceWithCoreResponseShape', ],
        ],
        'DelSubDeviceWithCore' => [
            'name' => 'DelSubDeviceWithCore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances/{instanceId}/products/{productKey}/edges/{edgeName}:delSubDevice',
            ],
            'input' => [ 'shape' => 'DelSubDeviceWithCoreRequestShape', ],
            'output' => [ 'shape' => 'DelSubDeviceWithCoreResponseShape', ],
        ],
    ],
    'shapes' => [
        'Operations' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'arkId' => [ 'type' => 'string', 'locationName' => 'arkId', ],
                'branch' => [ 'type' => 'string', 'locationName' => 'branch', ],
                'arkPackageAddr' => [ 'type' => 'string', 'locationName' => 'arkPackageAddr', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'appDisplayName' => [ 'type' => 'string', 'locationName' => 'appDisplayName', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'operType' => [ 'type' => 'string', 'locationName' => 'operType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'operTime' => [ 'type' => 'string', 'locationName' => 'operTime', ],
                'operater' => [ 'type' => 'string', 'locationName' => 'operater', ],
            ],
        ],
        'Apps' => [
            'type' => 'structure',
            'members' => [
                'appMetaId' => [ 'type' => 'string', 'locationName' => 'appMetaId', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'appDisplayName' => [ 'type' => 'string', 'locationName' => 'appDisplayName', ],
                'arkModuleName' => [ 'type' => 'string', 'locationName' => 'arkModuleName', ],
            ],
        ],
        'AppOnlineParam' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appDesc' => [ 'type' => 'string', 'locationName' => 'appDesc', ],
                'appEnv' => [ 'type' => 'string', 'locationName' => 'appEnv', ],
                'appVolume' => [ 'type' => 'string', 'locationName' => 'appVolume', ],
                'useSSL' => [ 'type' => 'integer', 'locationName' => 'useSSL', ],
                'usePrivileged' => [ 'type' => 'integer', 'locationName' => 'usePrivileged', ],
                'publishPort' => [ 'type' => 'integer', 'locationName' => 'publishPort', ],
            ],
        ],
        'DsProtocol' => [
            'type' => 'structure',
            'members' => [
                'protocolName' => [ 'type' => 'string', 'locationName' => 'protocolName', ],
                'protocolProps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolProp', ], ],
            ],
        ],
        'AppVersionList' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'appTpye' => [ 'type' => 'string', 'locationName' => 'appTpye', ],
                'appAddr' => [ 'type' => 'string', 'locationName' => 'appAddr', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'EdgeNodeList' => [
            'type' => 'structure',
            'members' => [
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
            ],
        ],
        'Operationlogs' => [
            'type' => 'structure',
            'members' => [
                'arkId' => [ 'type' => 'string', 'locationName' => 'arkId', ],
                'sysVersion' => [ 'type' => 'string', 'locationName' => 'sysVersion', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'logTime' => [ 'type' => 'string', 'locationName' => 'logTime', ],
                'fileStatus' => [ 'type' => 'string', 'locationName' => 'fileStatus', ],
                'fileAddr' => [ 'type' => 'string', 'locationName' => 'fileAddr', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'branch' => [ 'type' => 'string', 'locationName' => 'branch', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
            ],
        ],
        'ProtocolProp' => [
            'type' => 'structure',
            'members' => [
                'propName' => [ 'type' => 'string', 'locationName' => 'propName', ],
                'propDesc' => [ 'type' => 'string', 'locationName' => 'propDesc', ],
                'inputLength' => [ 'type' => 'string', 'locationName' => 'inputLength', ],
                'inputDefault' => [ 'type' => 'string', 'locationName' => 'inputDefault', ],
                'unique' => [ 'type' => 'integer', 'locationName' => 'unique', ],
                'required' => [ 'type' => 'integer', 'locationName' => 'required', ],
            ],
        ],
        'AppList' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'arkId' => [ 'type' => 'string', 'locationName' => 'arkId', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'releaseTime' => [ 'type' => 'string', 'locationName' => 'releaseTime', ],
                'appStatus' => [ 'type' => 'string', 'locationName' => 'appStatus', ],
                'onlineTime' => [ 'type' => 'string', 'locationName' => 'onlineTime', ],
                'tmId' => [ 'type' => 'string', 'locationName' => 'tmId', ],
                'tmName' => [ 'type' => 'string', 'locationName' => 'tmName', ],
            ],
        ],
        'EdgeAppList' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'appDesc' => [ 'type' => 'string', 'locationName' => 'appDesc', ],
                'appDisplayName' => [ 'type' => 'string', 'locationName' => 'appDisplayName', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'releaseTime' => [ 'type' => 'string', 'locationName' => 'releaseTime', ],
                'appStatus' => [ 'type' => 'string', 'locationName' => 'appStatus', ],
                'appSource' => [ 'type' => 'string', 'locationName' => 'appSource', ],
                'dsDesc' => [ 'type' => 'string', 'locationName' => 'dsDesc', ],
            ],
        ],
        'PropList' => [
            'type' => 'structure',
            'members' => [
                'prop' => [ 'type' => 'string', 'locationName' => 'prop', ],
                'propDes' => [ 'type' => 'string', 'locationName' => 'propDes', ],
            ],
        ],
        'OnlineDetails' => [
            'type' => 'structure',
            'members' => [
                'appDockerPath' => [ 'type' => 'string', 'locationName' => 'appDockerPath', ],
                'appOnlineParam' =>  [ 'shape' => 'AppOnlineParam', ],
                'dsOnlineParam' =>  [ 'shape' => 'DsOnlineParam', ],
            ],
        ],
        'DsOnlineParam' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appDesc' => [ 'type' => 'string', 'locationName' => 'appDesc', ],
                'appEnv' => [ 'type' => 'string', 'locationName' => 'appEnv', ],
                'appVolume' => [ 'type' => 'string', 'locationName' => 'appVolume', ],
                'useSSL' => [ 'type' => 'integer', 'locationName' => 'useSSL', ],
                'usePrivileged' => [ 'type' => 'integer', 'locationName' => 'usePrivileged', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'shape' => 'DsProtocol', ], ],
            ],
        ],
        'ProtocolList' => [
            'type' => 'structure',
            'members' => [
                'protocolName' => [ 'type' => 'string', 'locationName' => 'protocolName', ],
                'proplist' => [ 'type' => 'list', 'member' => [ 'shape' => 'PropList', ], ],
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
        'Stats' => [
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
        'DescribeDeployConfigResp' => [
            'type' => 'structure',
            'members' => [
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'insecure' => [ 'type' => 'string', 'locationName' => 'insecure', ],
                'privileged' => [ 'type' => 'integer', 'locationName' => 'privileged', ],
                'env' => [ 'type' => 'integer', 'locationName' => 'env', ],
                'useHost' => [ 'type' => 'integer', 'locationName' => 'useHost', ],
                'cpuShares' => [ 'type' => 'integer', 'locationName' => 'cpuShares', ],
                'memoryLimit' => [ 'type' => 'integer', 'locationName' => 'memoryLimit', ],
                'restartPolicy' => [ 'type' => 'integer', 'locationName' => 'restartPolicy', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeAppsRespVO' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'arkId' => [ 'type' => 'string', 'locationName' => 'arkId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'releaseTime' => [ 'type' => 'string', 'locationName' => 'releaseTime', ],
                'appStatus' => [ 'type' => 'string', 'locationName' => 'appStatus', ],
                'onlineTime' => [ 'type' => 'string', 'locationName' => 'onlineTime', ],
                'appDockerPath' => [ 'type' => 'string', 'locationName' => 'appDockerPath', ],
                'tmId' => [ 'type' => 'string', 'locationName' => 'tmId', ],
                'tmName' => [ 'type' => 'string', 'locationName' => 'tmName', ],
                'appDisplayName' => [ 'type' => 'string', 'locationName' => 'appDisplayName', ],
                'runStatus' => [ 'type' => 'string', 'locationName' => 'runStatus', ],
                'deployAppStatus' => [ 'type' => 'string', 'locationName' => 'deployAppStatus', ],
                'appDesc' => [ 'type' => 'string', 'locationName' => 'appDesc', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'Page' => [
            'type' => 'structure',
            'members' => [
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
            ],
        ],
        'DescribeDeployDetailsRespVO' => [
            'type' => 'structure',
            'members' => [
                'deployId' => [ 'type' => 'string', 'locationName' => 'deployId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeTag' => [ 'type' => 'string', 'locationName' => 'edgeTag', ],
                'edgeStatus' => [ 'type' => 'integer', 'locationName' => 'edgeStatus', ],
                'deployStatus' => [ 'type' => 'integer', 'locationName' => 'deployStatus', ],
                'runStatus' => [ 'type' => 'integer', 'locationName' => 'runStatus', ],
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
        'ChildDevices' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceServiceName' => [ 'type' => 'string', 'locationName' => 'deviceServiceName', ],
                'online' => [ 'type' => 'string', 'locationName' => 'online', ],
            ],
        ],
        'EdgeDetails' => [
            'type' => 'structure',
            'members' => [
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'edgeDesc' => [ 'type' => 'string', 'locationName' => 'edgeDesc', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'activeTime' => [ 'type' => 'string', 'locationName' => 'activeTime', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
                'architectureName' => [ 'type' => 'string', 'locationName' => 'architectureName', ],
                'osName' => [ 'type' => 'string', 'locationName' => 'osName', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'edgeModel' => [ 'type' => 'string', 'locationName' => 'edgeModel', ],
                'edgeVersion' => [ 'type' => 'string', 'locationName' => 'edgeVersion', ],
                'edgeUpgradeStatus' => [ 'type' => 'string', 'locationName' => 'edgeUpgradeStatus', ],
                'edgeUpgradeVersion' => [ 'type' => 'string', 'locationName' => 'edgeUpgradeVersion', ],
                'edgeMacAddr' => [ 'type' => 'string', 'locationName' => 'edgeMacAddr', ],
            ],
        ],
        'Edges' => [
            'type' => 'structure',
            'members' => [
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
            ],
        ],
        'ConfInfo' => [
            'type' => 'structure',
            'members' => [
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'registryToken' => [ 'type' => 'string', 'locationName' => 'registryToken', ],
                'installerUrl' => [ 'type' => 'string', 'locationName' => 'installerUrl', ],
            ],
        ],
        'Devices' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'dsDisplayName' => [ 'type' => 'string', 'locationName' => 'dsDisplayName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'deviceServiceStatus' => [ 'type' => 'string', 'locationName' => 'deviceServiceStatus', ],
            ],
        ],
        'ProtocolProps' => [
            'type' => 'structure',
            'members' => [
                'propName' => [ 'type' => 'string', 'locationName' => 'propName', ],
                'propDesc' => [ 'type' => 'string', 'locationName' => 'propDesc', ],
                'maxLength' => [ 'type' => 'string', 'locationName' => 'maxLength', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'required' => [ 'type' => 'string', 'locationName' => 'required', ],
            ],
        ],
        'DelSubDevices' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
            ],
        ],
        'AddDevices' => [
            'type' => 'structure',
            'members' => [
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'deviceServiceName' => [ 'type' => 'string', 'locationName' => 'deviceServiceName', ],
                'deviceServiceVersion' => [ 'type' => 'string', 'locationName' => 'deviceServiceVersion', ],
                'protocolName' => [ 'type' => 'string', 'locationName' => 'protocolName', ],
                'protocolInfo' => [ 'type' => 'string', 'locationName' => 'protocolInfo', ],
            ],
        ],
        'ConfDetails' => [
            'type' => 'structure',
            'members' => [
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'confId' => [ 'type' => 'string', 'locationName' => 'confId', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'deviceServiceName' => [ 'type' => 'string', 'locationName' => 'deviceServiceName', ],
                'expectMsgId' => [ 'type' => 'string', 'locationName' => 'expectMsgId', ],
                'targetMsgId' => [ 'type' => 'string', 'locationName' => 'targetMsgId', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'shape' => 'Protocols', ], ],
            ],
        ],
        'Protocols' => [
            'type' => 'structure',
            'members' => [
                'protocolName' => [ 'type' => 'string', 'locationName' => 'protocolName', ],
                'protocolProps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolProps', ], ],
            ],
        ],
        'RouterBody' => [
            'type' => 'structure',
            'members' => [
                'routerType' => [ 'type' => 'string', 'locationName' => 'routerType', ],
                'routerInfoId' => [ 'type' => 'string', 'locationName' => 'routerInfoId', ],
                'routerInfoName' => [ 'type' => 'string', 'locationName' => 'routerInfoName', ],
                'identifier' => [ 'type' => 'string', 'locationName' => 'identifier', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'Routers' => [
            'type' => 'structure',
            'members' => [
                'routerId' => [ 'type' => 'string', 'locationName' => 'routerId', ],
                'routerName' => [ 'type' => 'string', 'locationName' => 'routerName', ],
                'routerDesc' => [ 'type' => 'string', 'locationName' => 'routerDesc', ],
                'routerStatus' => [ 'type' => 'string', 'locationName' => 'routerStatus', ],
                'routerUpdateStatus' => [ 'type' => 'string', 'locationName' => 'routerUpdateStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'sourceName' => [ 'type' => 'string', 'locationName' => 'sourceName', ],
                'targetName' => [ 'type' => 'string', 'locationName' => 'targetName', ],
            ],
        ],
        'DescribeConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeConfigResultShape', ],
            ],
        ],
        'DeployAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployStatus' => [ 'type' => 'integer', 'locationName' => 'deployStatus', ],
            ],
        ],
        'SetAppStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetAppStatusResultShape', ],
            ],
        ],
        'DescribeDeployAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
                'appType' => [ 'type' => 'integer', 'locationName' => 'appType', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'property' => [ 'type' => 'integer', 'locationName' => 'property', ],
                'searchText' => [ 'type' => 'string', 'locationName' => 'searchText', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'hardwareId' => [ 'type' => 'string', 'locationName' => 'hardwareId', ],
                'osId' => [ 'type' => 'string', 'locationName' => 'osId', ],
            ],
        ],
        'SetAppStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'appStatus' => [ 'type' => 'integer', 'locationName' => 'appStatus', ],
            ],
        ],
        'DescribeDeployDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDeployDetailsResultShape', ],
            ],
        ],
        'UnInstallAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UnInstallAppResultShape', ],
            ],
        ],
        'DeployAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeployAppResultShape', ],
            ],
        ],
        'UnInstallAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'unInstallStatus' => [ 'type' => 'integer', 'locationName' => 'unInstallStatus', ],
            ],
        ],
        'DescribeDeployAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDeployAppResultShape', ],
            ],
        ],
        'DescribeDeployDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'nowPage' => [ 'type' => 'integer', 'locationName' => 'nowPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'order' => [ 'type' => 'integer', 'locationName' => 'order', ],
                'property' => [ 'type' => 'integer', 'locationName' => 'property', ],
                'searchText' => [ 'type' => 'string', 'locationName' => 'searchText', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'hardwareId' => [ 'type' => 'string', 'locationName' => 'hardwareId', ],
                'osId' => [ 'type' => 'string', 'locationName' => 'osId', ],
            ],
        ],
        'DescribeDeployDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeDeployDetailsRespVO', ], ],
                'page' => [ 'type' => 'object', 'locationName' => 'page', ],
            ],
        ],
        'SetAppStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'hardwareId' => [ 'type' => 'string', 'locationName' => 'hardwareId', ],
                'osId' => [ 'type' => 'string', 'locationName' => 'osId', ],
            ],
        ],
        'DeployAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'privileged' => [ 'type' => 'integer', 'locationName' => 'privileged', ],
                'volume' => [ 'type' => 'string', 'locationName' => 'volume', ],
                'appType' => [ 'type' => 'integer', 'locationName' => 'appType', ],
                'useHost' => [ 'type' => 'integer', 'locationName' => 'useHost', ],
                'cpuShares' => [ 'type' => 'integer', 'locationName' => 'cpuShares', ],
                'memoryLimit' => [ 'type' => 'string', 'locationName' => 'memoryLimit', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'deployAppStatus' => [ 'type' => 'integer', 'locationName' => 'deployAppStatus', ],
                'appStatus' => [ 'type' => 'integer', 'locationName' => 'appStatus', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'hardwareId' => [ 'type' => 'string', 'locationName' => 'hardwareId', ],
                'osId' => [ 'type' => 'string', 'locationName' => 'osId', ],
            ],
        ],
        'DescribeConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'describeConfig' =>  [ 'shape' => 'DescribeDeployConfigResp', ],
            ],
        ],
        'DescribeConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'hardwareId' => [ 'type' => 'string', 'locationName' => 'hardwareId', ],
                'osId' => [ 'type' => 'string', 'locationName' => 'osId', ],
            ],
        ],
        'DescribeDeployAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'appsResp' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeAppsRespVO', ], ],
                'page' => [ 'type' => 'object', 'locationName' => 'page', ],
            ],
        ],
        'UnInstallAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'deployAppId' => [ 'type' => 'string', 'locationName' => 'deployAppId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'hardwareId' => [ 'type' => 'string', 'locationName' => 'hardwareId', ],
                'osId' => [ 'type' => 'string', 'locationName' => 'osId', ],
            ],
        ],
        'AddEdgeWithCoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddEdgeWithCoreResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteEdgeWithCoreResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteEdgeWithCoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
            ],
        ],
        'DeleteEdgeWithCoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddEdgeWithCoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'os' => [ 'type' => 'string', 'locationName' => 'os', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
                'edgeModel' => [ 'type' => 'string', 'locationName' => 'edgeModel', ],
                'edgeDesc' => [ 'type' => 'string', 'locationName' => 'edgeDesc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
            ],
        ],
        'DevicePageVo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'edgeId' => [ 'type' => 'string', 'locationName' => 'edgeId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'edgeState' => [ 'type' => 'string', 'locationName' => 'edgeState', ],
                'omId' => [ 'type' => 'string', 'locationName' => 'omId', ],
                'omName' => [ 'type' => 'string', 'locationName' => 'omName', ],
                'lastOnlineTime' => [ 'type' => 'string', 'locationName' => 'lastOnlineTime', ],
            ],
        ],
        'DelSubDeviceWithCoreResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelSubDeviceWithCoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delDevices' => [ 'type' => 'list', 'member' => [ 'shape' => 'DelSubDevices', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'AddSubDeviceWithCoreResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddSubDeviceWithCoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'devices' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddDevices', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'edgeName' => [ 'type' => 'string', 'locationName' => 'edgeName', ],
                'productKey' => [ 'type' => 'string', 'locationName' => 'productKey', ],
            ],
        ],
        'AddSubDeviceWithCoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelSubDeviceWithCoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
