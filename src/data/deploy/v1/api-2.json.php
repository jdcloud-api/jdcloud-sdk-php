<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'deploy',
        'protocol' => 'json',
//        'serviceFullName' => 'deploy',
//        'serviceId' => 'deploy',
    ],
    'operations' => [
        'DescribeApps' => [
            'name' => 'DescribeApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps',
            ],
            'input' => [ 'shape' => 'DescribeAppsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppsResponseShape', ],
        ],
        'DescribeApp' => [
            'name' => 'DescribeApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/app/{appId}',
            ],
            'input' => [ 'shape' => 'DescribeAppRequestShape', ],
            'output' => [ 'shape' => 'DescribeAppResponseShape', ],
        ],
        'CreateDeploy' => [
            'name' => 'CreateDeploy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/deploy',
            ],
            'input' => [ 'shape' => 'CreateDeployRequestShape', ],
            'output' => [ 'shape' => 'CreateDeployResponseShape', ],
        ],
        'DescribeDeploy' => [
            'name' => 'DescribeDeploy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/deploy/{deployId}',
            ],
            'input' => [ 'shape' => 'DescribeDeployRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeployResponseShape', ],
        ],
        'DescribeGroups' => [
            'name' => 'DescribeGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/groups',
            ],
            'input' => [ 'shape' => 'DescribeGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupsResponseShape', ],
        ],
        'DescribeGroup' => [
            'name' => 'DescribeGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/group/{groupId}',
            ],
            'input' => [ 'shape' => 'DescribeGroupRequestShape', ],
            'output' => [ 'shape' => 'DescribeGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'ModifyApp' => [
            'type' => 'structure',
            'members' => [
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'App' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'platform' => [ 'type' => 'integer', 'locationName' => 'platform', ],
                'jdsfEnabled' => [ 'type' => 'integer', 'locationName' => 'jdsfEnabled', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'lastDeployTime' => [ 'type' => 'integer', 'locationName' => 'lastDeployTime', ],
            ],
        ],
        'CreateApp' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'platform' => [ 'type' => 'integer', 'locationName' => 'platform', ],
                'jdsfEnabled' => [ 'type' => 'integer', 'locationName' => 'jdsfEnabled', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'DeployStage' => [
            'type' => 'structure',
            'members' => [
                'stageCode' => [ 'type' => 'integer', 'locationName' => 'stageCode', ],
                'stageName' => [ 'type' => 'string', 'locationName' => 'stageName', ],
                'stageStatus' => [ 'type' => 'integer', 'locationName' => 'stageStatus', ],
                'stageMessage' => [ 'type' => 'string', 'locationName' => 'stageMessage', ],
                'succeedCount' => [ 'type' => 'integer', 'locationName' => 'succeedCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateDeploy' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'deploySource' => [ 'type' => 'integer', 'locationName' => 'deploySource', ],
                'deployCmd' => [ 'type' => 'string', 'locationName' => 'deployCmd', ],
                'cmdSource' => [ 'type' => 'integer', 'locationName' => 'cmdSource', ],
                'cmdType' => [ 'type' => 'integer', 'locationName' => 'cmdType', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'compileProject' => [ 'type' => 'string', 'locationName' => 'compileProject', ],
                'compileSeries' => [ 'type' => 'string', 'locationName' => 'compileSeries', ],
                'ossSpace' => [ 'type' => 'string', 'locationName' => 'ossSpace', ],
                'ossDir' => [ 'type' => 'string', 'locationName' => 'ossDir', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
            ],
        ],
        'Deploy' => [
            'type' => 'structure',
            'members' => [
                'deployId' => [ 'type' => 'string', 'locationName' => 'deployId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'deployStatus' => [ 'type' => 'integer', 'locationName' => 'deployStatus', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'deployMethod' => [ 'type' => 'integer', 'locationName' => 'deployMethod', ],
                'deploySource' => [ 'type' => 'integer', 'locationName' => 'deploySource', ],
                'deployCmd' => [ 'type' => 'string', 'locationName' => 'deployCmd', ],
                'cmdSource' => [ 'type' => 'integer', 'locationName' => 'cmdSource', ],
                'cmdType' => [ 'type' => 'integer', 'locationName' => 'cmdType', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'compileProject' => [ 'type' => 'string', 'locationName' => 'compileProject', ],
                'compileSeries' => [ 'type' => 'string', 'locationName' => 'compileSeries', ],
                'ossSpace' => [ 'type' => 'string', 'locationName' => 'ossSpace', ],
                'ossDir' => [ 'type' => 'string', 'locationName' => 'ossDir', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'rollbackAble' => [ 'type' => 'integer', 'locationName' => 'rollbackAble', ],
                'concurrencyUnit' => [ 'type' => 'integer', 'locationName' => 'concurrencyUnit', ],
                'concurrencyNum' => [ 'type' => 'integer', 'locationName' => 'concurrencyNum', ],
                'concurrencyPct' => [ 'type' => 'integer', 'locationName' => 'concurrencyPct', ],
                'lbStatus' => [ 'type' => 'integer', 'locationName' => 'lbStatus', ],
                'lbInstance' => [ 'type' => 'string', 'locationName' => 'lbInstance', ],
                'lbBackend' => [ 'type' => 'string', 'locationName' => 'lbBackend', ],
                'repeatPolicy' => [ 'type' => 'integer', 'locationName' => 'repeatPolicy', ],
                'noticeTrigger' => [ 'type' => 'integer', 'locationName' => 'noticeTrigger', ],
                'noticeMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'jdsfEnabled' => [ 'type' => 'integer', 'locationName' => 'jdsfEnabled', ],
            ],
        ],
        'Ag' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeployInstance' => [
            'type' => 'structure',
            'members' => [
                'deployId' => [ 'type' => 'string', 'locationName' => 'deployId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'public_ip' => [ 'type' => 'string', 'locationName' => 'public_ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpc' =>  [ 'shape' => 'Vpc', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'ag' =>  [ 'shape' => 'Ag', ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'method' => [ 'type' => 'integer', 'locationName' => 'method', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'StageLog' => [
            'type' => 'structure',
            'members' => [
                'stage' => [ 'type' => 'string', 'locationName' => 'stage', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'Vpc' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CreateGroup' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'deployMethod' => [ 'type' => 'integer', 'locationName' => 'deployMethod', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'blueInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'greenInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'concurrencyUnit' => [ 'type' => 'integer', 'locationName' => 'concurrencyUnit', ],
                'concurrencyNum' => [ 'type' => 'integer', 'locationName' => 'concurrencyNum', ],
                'concurrencyPct' => [ 'type' => 'integer', 'locationName' => 'concurrencyPct', ],
                'lbStatus' => [ 'type' => 'integer', 'locationName' => 'lbStatus', ],
                'lbInstance' => [ 'type' => 'string', 'locationName' => 'lbInstance', ],
                'lbBackend' => [ 'type' => 'string', 'locationName' => 'lbBackend', ],
                'repeatPolicy' => [ 'type' => 'integer', 'locationName' => 'repeatPolicy', ],
                'noticeTrigger' => [ 'type' => 'integer', 'locationName' => 'noticeTrigger', ],
                'noticeMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rollback' => [ 'type' => 'integer', 'locationName' => 'rollback', ],
                'jdsfRegisterId' => [ 'type' => 'string', 'locationName' => 'jdsfRegisterId', ],
            ],
        ],
        'ModifyGroup' => [
            'type' => 'structure',
            'members' => [
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'blueInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'greenInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'concurrencyUnit' => [ 'type' => 'integer', 'locationName' => 'concurrencyUnit', ],
                'concurrencyNum' => [ 'type' => 'integer', 'locationName' => 'concurrencyNum', ],
                'concurrencyPct' => [ 'type' => 'integer', 'locationName' => 'concurrencyPct', ],
                'lbStatus' => [ 'type' => 'integer', 'locationName' => 'lbStatus', ],
                'lbInstance' => [ 'type' => 'string', 'locationName' => 'lbInstance', ],
                'lbBackend' => [ 'type' => 'string', 'locationName' => 'lbBackend', ],
                'repeatPolicy' => [ 'type' => 'integer', 'locationName' => 'repeatPolicy', ],
                'noticeTrigger' => [ 'type' => 'integer', 'locationName' => 'noticeTrigger', ],
                'noticeMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rollback' => [ 'type' => 'integer', 'locationName' => 'rollback', ],
                'jdsfRegisterId' => [ 'type' => 'string', 'locationName' => 'jdsfRegisterId', ],
            ],
        ],
        'Group' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'platform' => [ 'type' => 'integer', 'locationName' => 'platform', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'deployMethod' => [ 'type' => 'integer', 'locationName' => 'deployMethod', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'blueInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'greenInstances' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'concurrencyUnit' => [ 'type' => 'integer', 'locationName' => 'concurrencyUnit', ],
                'concurrencyNum' => [ 'type' => 'integer', 'locationName' => 'concurrencyNum', ],
                'concurrencyPct' => [ 'type' => 'integer', 'locationName' => 'concurrencyPct', ],
                'lbStatus' => [ 'type' => 'integer', 'locationName' => 'lbStatus', ],
                'lbInstance' => [ 'type' => 'string', 'locationName' => 'lbInstance', ],
                'lbBackend' => [ 'type' => 'string', 'locationName' => 'lbBackend', ],
                'repeatPolicy' => [ 'type' => 'integer', 'locationName' => 'repeatPolicy', ],
                'noticeTrigger' => [ 'type' => 'integer', 'locationName' => 'noticeTrigger', ],
                'noticeMethod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rollback' => [ 'type' => 'integer', 'locationName' => 'rollback', ],
                'jdsfEnabled' => [ 'type' => 'integer', 'locationName' => 'jdsfEnabled', ],
                'jdsfRegisterId' => [ 'type' => 'string', 'locationName' => 'jdsfRegisterId', ],
                'lastDeployTime' => [ 'type' => 'integer', 'locationName' => 'lastDeployTime', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'public_ip' => [ 'type' => 'string', 'locationName' => 'public_ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpc' =>  [ 'shape' => 'Vpc', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'ag' =>  [ 'shape' => 'Ag', ],
                'tags' => [ 'type' => 'string', 'locationName' => 'tags', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'agentStatus' => [ 'type' => 'integer', 'locationName' => 'agentStatus', ],
            ],
        ],
        'Rollback' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'DeployStatus' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'NoticeMethod' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'DeploySource' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'DeployType' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'NoticeTrigger' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'AgentStatus' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'StatusColor' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'FileType' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'ConcurrencyUnit' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'RegionId' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'DeployMethod' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'Platform' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'RepeatPolicy' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'GrayService' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'Milestone' => [
            'type' => 'structure',
            'members' => [
                'milestoneId' => [ 'type' => 'string', 'locationName' => 'milestoneId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'deployMethod' => [ 'type' => 'integer', 'locationName' => 'deployMethod', ],
                'deploySource' => [ 'type' => 'integer', 'locationName' => 'deploySource', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'compileProject' => [ 'type' => 'string', 'locationName' => 'compileProject', ],
                'compileSeries' => [ 'type' => 'string', 'locationName' => 'compileSeries', ],
                'ossSpace' => [ 'type' => 'string', 'locationName' => 'ossSpace', ],
                'ossDir' => [ 'type' => 'string', 'locationName' => 'ossDir', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'lastDeployTime' => [ 'type' => 'integer', 'locationName' => 'lastDeployTime', ],
                'deployGroup' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'PinInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'appMax' => [ 'type' => 'integer', 'locationName' => 'appMax', ],
                'appCount' => [ 'type' => 'integer', 'locationName' => 'appCount', ],
                'groupMax' => [ 'type' => 'integer', 'locationName' => 'groupMax', ],
            ],
        ],
        'DescribeAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'app' =>  [ 'shape' => 'App', ],
            ],
        ],
        'DescribeAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'apps' => [ 'type' => 'list', 'member' => [ 'shape' => 'App', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAppsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'DescribeAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDeployResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeployResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDeployRequestShape' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'deploySource' => [ 'type' => 'integer', 'locationName' => 'deploySource', ],
                'deployCmd' => [ 'type' => 'string', 'locationName' => 'deployCmd', ],
                'cmdSource' => [ 'type' => 'integer', 'locationName' => 'cmdSource', ],
                'cmdType' => [ 'type' => 'integer', 'locationName' => 'cmdType', ],
                'productType' => [ 'type' => 'integer', 'locationName' => 'productType', ],
                'downloadUrl' => [ 'type' => 'string', 'locationName' => 'downloadUrl', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'compileProject' => [ 'type' => 'string', 'locationName' => 'compileProject', ],
                'compileSeries' => [ 'type' => 'string', 'locationName' => 'compileSeries', ],
                'ossSpace' => [ 'type' => 'string', 'locationName' => 'ossSpace', ],
                'ossDir' => [ 'type' => 'string', 'locationName' => 'ossDir', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateDeployResultShape' => [
            'type' => 'structure',
            'members' => [
                'deployId' => [ 'type' => 'string', 'locationName' => 'deployId', ],
            ],
        ],
        'DescribeDeployResultShape' => [
            'type' => 'structure',
            'members' => [
                'deploy' =>  [ 'shape' => 'Deploy', ],
            ],
        ],
        'DescribeDeployRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'deployId' => [ 'type' => 'string', 'locationName' => 'deployId', ],
            ],
        ],
        'CreateDeployResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDeployResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
        'DescribeGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'group' =>  [ 'shape' => 'Group', ],
            ],
        ],
        'CheckAgentStatusRequest' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
            ],
        ],
    ],
];
