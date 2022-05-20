<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rdts',
        'protocol' => 'json',
//        'serviceFullName' => 'rdts',
//        'serviceId' => 'rdts',
    ],
    'operations' => [
        'DescribeMigrations' => [
            'name' => 'DescribeMigrations',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance',
            ],
            'input' => [ 'shape' => 'DescribeMigrationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMigrationsResponseShape', ],
        ],
        'CreateMigration' => [
            'name' => 'CreateMigration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance',
            ],
            'input' => [ 'shape' => 'CreateMigrationRequestShape', ],
            'output' => [ 'shape' => 'CreateMigrationResponseShape', ],
        ],
        'DescribeMigration' => [
            'name' => 'DescribeMigration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeMigrationRequestShape', ],
            'output' => [ 'shape' => 'DescribeMigrationResponseShape', ],
        ],
        'ModifyMigration' => [
            'name' => 'ModifyMigration',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'ModifyMigrationRequestShape', ],
            'output' => [ 'shape' => 'ModifyMigrationResponseShape', ],
        ],
        'DeleteMigration' => [
            'name' => 'DeleteMigration',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteMigrationRequestShape', ],
            'output' => [ 'shape' => 'DeleteMigrationResponseShape', ],
        ],
        'ModifyMigrationName' => [
            'name' => 'ModifyMigrationName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}:modifyMigrateName',
            ],
            'input' => [ 'shape' => 'ModifyMigrationNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyMigrationNameResponseShape', ],
        ],
        'GetMigrationProgress' => [
            'name' => 'GetMigrationProgress',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}:getMigrationProgress',
            ],
            'input' => [ 'shape' => 'GetMigrationProgressRequestShape', ],
            'output' => [ 'shape' => 'GetMigrationProgressResponseShape', ],
        ],
        'CreateMigrationJob' => [
            'name' => 'CreateMigrationJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}:start',
            ],
            'input' => [ 'shape' => 'CreateMigrationJobRequestShape', ],
            'output' => [ 'shape' => 'CreateMigrationJobResponseShape', ],
        ],
        'StartMigrationJob' => [
            'name' => 'StartMigrationJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}:migrate',
            ],
            'input' => [ 'shape' => 'StartMigrationJobRequestShape', ],
            'output' => [ 'shape' => 'StartMigrationJobResponseShape', ],
        ],
        'RestartMigrationJob' => [
            'name' => 'RestartMigrationJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instance/{instanceId}:remigrate',
            ],
            'input' => [ 'shape' => 'RestartMigrationJobRequestShape', ],
            'output' => [ 'shape' => 'RestartMigrationJobResponseShape', ],
        ],
    ],
    'shapes' => [
        'AzAndNetConfig' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
            ],
        ],
        'RedisConfig' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'migrationName' => [ 'type' => 'string', 'locationName' => 'migrationName', ],
                'migrationStatus' => [ 'type' => 'string', 'locationName' => 'migrationStatus', ],
                'proxyDomain' => [ 'type' => 'string', 'locationName' => 'proxyDomain', ],
                'proxyPassword' => [ 'type' => 'string', 'locationName' => 'proxyPassword', ],
                'currentStep' => [ 'type' => 'string', 'locationName' => 'currentStep', ],
                'currentStepStatus' => [ 'type' => 'string', 'locationName' => 'currentStepStatus', ],
                'failedReason' => [ 'type' => 'string', 'locationName' => 'failedReason', ],
                'source' =>  [ 'shape' => 'RedisConfig', ],
                'target' =>  [ 'shape' => 'RedisConfig', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'ListItem' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'migrationName' => [ 'type' => 'string', 'locationName' => 'migrationName', ],
                'migrationStatus' => [ 'type' => 'string', 'locationName' => 'migrationStatus', ],
                'currentStep' => [ 'type' => 'string', 'locationName' => 'currentStep', ],
                'currentStepStatus' => [ 'type' => 'string', 'locationName' => 'currentStepStatus', ],
                'failedReason' => [ 'type' => 'string', 'locationName' => 'failedReason', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'MigrateConfig' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'srcType' => [ 'type' => 'string', 'locationName' => 'srcType', ],
                'srcUrl' => [ 'type' => 'string', 'locationName' => 'srcUrl', ],
                'srcVersion' => [ 'type' => 'string', 'locationName' => 'srcVersion', ],
                'srcTopo' => [ 'type' => 'list', 'member' => [ 'shape' => 'Topo', ], ],
                'srcPwd' => [ 'type' => 'string', 'locationName' => 'srcPwd', ],
                'tgtType' => [ 'type' => 'string', 'locationName' => 'tgtType', ],
                'tgtUrl' => [ 'type' => 'string', 'locationName' => 'tgtUrl', ],
                'tgtPwd' => [ 'type' => 'string', 'locationName' => 'tgtPwd', ],
                'exExpTimeInMin' => [ 'type' => 'integer', 'locationName' => 'exExpTimeInMin', ],
                'proxyNum' => [ 'type' => 'integer', 'locationName' => 'proxyNum', ],
            ],
        ],
        'Node' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'Topo' => [
            'type' => 'structure',
            'members' => [
                'master' =>  [ 'shape' => 'Node', ],
                'slaves' => [ 'type' => 'list', 'member' => [ 'shape' => 'Node', ], ],
                'slotsFrom' => [ 'type' => 'integer', 'locationName' => 'slotsFrom', ],
                'slotsTo' => [ 'type' => 'integer', 'locationName' => 'slotsTo', ],
            ],
        ],
        'MigrateProgress' => [
            'type' => 'structure',
            'members' => [
                'sourceKeysCount' => [ 'type' => 'long', 'locationName' => 'sourceKeysCount', ],
                'targetKeysCount' => [ 'type' => 'long', 'locationName' => 'targetKeysCount', ],
                'percent' => [ 'type' => 'float', 'locationName' => 'percent', ],
                'checkPhase' => [ 'type' => 'string', 'locationName' => 'checkPhase', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'Shards' => [
            'type' => 'structure',
            'members' => [
                'shardId' => [ 'type' => 'integer', 'locationName' => 'shardId', ],
                'master' =>  [ 'shape' => 'JimdbNode', ],
                'buckets' =>  [ 'shape' => 'Buckets', ],
            ],
        ],
        'JimdbNode' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'copyId' => [ 'type' => 'string', 'locationName' => 'copyId', ],
                'slaves' => [ 'type' => 'list', 'member' => [ 'shape' => 'JimdbNode', ], ],
            ],
        ],
        'Buckets' => [
            'type' => 'structure',
            'members' => [
                'from' => [ 'type' => 'integer', 'locationName' => 'from', ],
                'to' => [ 'type' => 'integer', 'locationName' => 'to', ],
            ],
        ],
        'Topology' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'Shards', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'Monitor' => [
            'type' => 'structure',
            'members' => [
                'ops' => [ 'type' => 'integer', 'locationName' => 'ops', ],
                'inputKBps' => [ 'type' => 'integer', 'locationName' => 'inputKBps', ],
                'maxMemory' => [ 'type' => 'long', 'locationName' => 'maxMemory', ],
                'usedMemory' => [ 'type' => 'long', 'locationName' => 'usedMemory', ],
            ],
        ],
        'TrafficMonitor' => [
            'type' => 'structure',
            'members' => [
                'sourceCluster' =>  [ 'shape' => 'Monitor', ],
                'rdtsProxy' =>  [ 'shape' => 'Monitor', ],
                'targetProxy' =>  [ 'shape' => 'Monitor', ],
                'diffPercent' => [ 'type' => 'integer', 'locationName' => 'diffPercent', ],
                'currentTime' => [ 'type' => 'string', 'locationName' => 'currentTime', ],
            ],
        ],
        'TrafficRedirect' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'latency' => [ 'type' => 'float', 'locationName' => 'latency', ],
                'strategy' => [ 'type' => 'string', 'locationName' => 'strategy', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'ModifyMigrationNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyMigrationNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'migrateName' => [ 'type' => 'string', 'locationName' => 'migrateName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateMigrationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateMigrationJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartMigrationJobResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'GetMigrationProgressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'CreateMigrationJobResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyMigrationNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartMigrationJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeMigrationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMigrationsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'migrateConfig' =>  [ 'shape' => 'MigrateConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeMigrationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'migrateConfig' =>  [ 'shape' => 'MigrateConfig', ],
                'azAndNetConfig' =>  [ 'shape' => 'AzAndNetConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'GetMigrationProgressResultShape' => [
            'type' => 'structure',
            'members' => [
                'migrationProgress' =>  [ 'shape' => 'MigrateProgress', ],
            ],
        ],
        'RestartMigrationJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMigrationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListItem', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetMigrationProgressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMigrationProgressResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateMigrationJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestartMigrationJobResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestartMigrationJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StartMigrationJobResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMigrationResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
    ],
];
