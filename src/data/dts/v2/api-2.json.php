<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'dts',
        'protocol' => 'json',
//        'serviceFullName' => 'dts',
//        'serviceId' => 'dts',
    ],
    'operations' => [
        'BatchOperateTasks' => [
            'name' => 'BatchOperateTasks',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dtsbatch',
            ],
            'input' => [ 'shape' => 'BatchOperateTasksRequestShape', ],
            'output' => [ 'shape' => 'BatchOperateTasksResponseShape', ],
        ],
        'DescribeTransmissionTasks' => [
            'name' => 'DescribeTransmissionTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/dts',
            ],
            'input' => [ 'shape' => 'DescribeTransmissionTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeTransmissionTasksResponseShape', ],
        ],
        'CreateTransmissionTask' => [
            'name' => 'CreateTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts',
            ],
            'input' => [ 'shape' => 'CreateTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateTransmissionTaskResponseShape', ],
        ],
        'DescribeTransmissionTaskAttributes' => [
            'name' => 'DescribeTransmissionTaskAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}',
            ],
            'input' => [ 'shape' => 'DescribeTransmissionTaskAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeTransmissionTaskAttributesResponseShape', ],
        ],
        'DeleteTransmissionTask' => [
            'name' => 'DeleteTransmissionTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteTransmissionTaskResponseShape', ],
        ],
        'DescribePreCheckResult' => [
            'name' => 'DescribePreCheckResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/precheck',
            ],
            'input' => [ 'shape' => 'DescribePreCheckResultRequestShape', ],
            'output' => [ 'shape' => 'DescribePreCheckResultResponseShape', ],
        ],
        'PreCheckTransmissionTask' => [
            'name' => 'PreCheckTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/precheck',
            ],
            'input' => [ 'shape' => 'PreCheckTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'PreCheckTransmissionTaskResponseShape', ],
        ],
        'SkipPreCheckItem' => [
            'name' => 'SkipPreCheckItem',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/precheck/{itemName}/skip',
            ],
            'input' => [ 'shape' => 'SkipPreCheckItemRequestShape', ],
            'output' => [ 'shape' => 'SkipPreCheckItemResponseShape', ],
        ],
        'ConfigureTransmissionTask' => [
            'name' => 'ConfigureTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/configure',
            ],
            'input' => [ 'shape' => 'ConfigureTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'ConfigureTransmissionTaskResponseShape', ],
        ],
        'StartTransmissionTask' => [
            'name' => 'StartTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/start',
            ],
            'input' => [ 'shape' => 'StartTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'StartTransmissionTaskResponseShape', ],
        ],
        'StopTransmissionTask' => [
            'name' => 'StopTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/stop',
            ],
            'input' => [ 'shape' => 'StopTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'StopTransmissionTaskResponseShape', ],
        ],
        'SuspendTransmissionTask' => [
            'name' => 'SuspendTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/suspend',
            ],
            'input' => [ 'shape' => 'SuspendTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'SuspendTransmissionTaskResponseShape', ],
        ],
        'ResumeTransmissionTask' => [
            'name' => 'ResumeTransmissionTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/resume',
            ],
            'input' => [ 'shape' => 'ResumeTransmissionTaskRequestShape', ],
            'output' => [ 'shape' => 'ResumeTransmissionTaskResponseShape', ],
        ],
        'ModifyTransmissionTaskName' => [
            'name' => 'ModifyTransmissionTaskName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/rename',
            ],
            'input' => [ 'shape' => 'ModifyTransmissionTaskNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyTransmissionTaskNameResponseShape', ],
        ],
        'DescribeTransmissionObject' => [
            'name' => 'DescribeTransmissionObject',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/transmissionobject',
            ],
            'input' => [ 'shape' => 'DescribeTransmissionObjectRequestShape', ],
            'output' => [ 'shape' => 'DescribeTransmissionObjectResponseShape', ],
        ],
        'DescribeTransmissionLog' => [
            'name' => 'DescribeTransmissionLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/log',
            ],
            'input' => [ 'shape' => 'DescribeTransmissionLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeTransmissionLogResponseShape', ],
        ],
        'ConnectivityTest' => [
            'name' => 'ConnectivityTest',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/dts/{taskId}/connectivitytest',
            ],
            'input' => [ 'shape' => 'ConnectivityTestRequestShape', ],
            'output' => [ 'shape' => 'ConnectivityTestResponseShape', ],
        ],
        'ListCloudInstances' => [
            'name' => 'ListCloudInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/cloudinstance/{instanceType}',
            ],
            'input' => [ 'shape' => 'ListCloudInstancesRequestShape', ],
            'output' => [ 'shape' => 'ListCloudInstancesResponseShape', ],
        ],
        'GetCloudInstance' => [
            'name' => 'GetCloudInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/cloudinstance/{instanceType}/id/{instanceId}',
            ],
            'input' => [ 'shape' => 'GetCloudInstanceRequestShape', ],
            'output' => [ 'shape' => 'GetCloudInstanceResponseShape', ],
        ],
        'ListSchemas' => [
            'name' => 'ListSchemas',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/endpoint/{endpointId}/schema',
            ],
            'input' => [ 'shape' => 'ListSchemasRequestShape', ],
            'output' => [ 'shape' => 'ListSchemasResponseShape', ],
        ],
        'ListTables' => [
            'name' => 'ListTables',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/endpoint/{endpointId}/table',
            ],
            'input' => [ 'shape' => 'ListTablesRequestShape', ],
            'output' => [ 'shape' => 'ListTablesResponseShape', ],
        ],
        'ListTopics' => [
            'name' => 'ListTopics',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/endpoint/{endpointId}/topic',
            ],
            'input' => [ 'shape' => 'ListTopicsRequestShape', ],
            'output' => [ 'shape' => 'ListTopicsResponseShape', ],
        ],
        'GetTable' => [
            'name' => 'GetTable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/endpoint/{endpointId}/table/{tableName}',
            ],
            'input' => [ 'shape' => 'GetTableRequestShape', ],
            'output' => [ 'shape' => 'GetTableResponseShape', ],
        ],
        'ListInstanceClasses' => [
            'name' => 'ListInstanceClasses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/instanceclass',
            ],
            'input' => [ 'shape' => 'ListInstanceClassesRequestShape', ],
            'output' => [ 'shape' => 'ListInstanceClassesResponseShape', ],
        ],
        'ListTaskProgress' => [
            'name' => 'ListTaskProgress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/taskprogress',
            ],
            'input' => [ 'shape' => 'ListTaskProgressRequestShape', ],
            'output' => [ 'shape' => 'ListTaskProgressResponseShape', ],
        ],
        'GetTaskProgress' => [
            'name' => 'GetTaskProgress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/taskprogress/{taskId}',
            ],
            'input' => [ 'shape' => 'GetTaskProgressRequestShape', ],
            'output' => [ 'shape' => 'GetTaskProgressResponseShape', ],
        ],
        'ListProcesses' => [
            'name' => 'ListProcesses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/process',
            ],
            'input' => [ 'shape' => 'ListProcessesRequestShape', ],
            'output' => [ 'shape' => 'ListProcessesResponseShape', ],
        ],
    ],
    'shapes' => [
        'CloudInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Visibility' => [
            'type' => 'structure',
            'members' => [
                'strategy' => [ 'type' => 'string', 'locationName' => 'strategy', ],
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'propertyName' => [ 'type' => 'string', 'locationName' => 'propertyName', ],
                'propertyValue' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Option' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'visibility' => [ 'type' => 'list', 'member' => [ 'shape' => 'Visibility', ], ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'Option', ], ],
            ],
        ],
        'Endpoint' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'Property', ], ],
                'destination' => [ 'type' => 'list', 'member' => [ 'shape' => 'Property', ], ],
            ],
        ],
        'ConfigurationRule' => [
            'type' => 'structure',
            'members' => [
                'endpoint' =>  [ 'shape' => 'Endpoint', ],
                'sourceDestinationMap' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'DestinationEndpointRule' => [
            'type' => 'structure',
            'members' => [
                'kernels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Property' => [
            'type' => 'structure',
            'members' => [
                'componentType' => [ 'type' => 'string', 'locationName' => 'componentType', ],
                'variable' => [ 'type' => 'string', 'locationName' => 'variable', ],
                'defaultValue' => [ 'type' => 'object', 'locationName' => 'defaultValue', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'Option', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'visibility' => [ 'type' => 'list', 'member' => [ 'shape' => 'Visibility', ], ],
                'additionalProperties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'Retry' => [
            'type' => 'structure',
            'members' => [
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
            ],
        ],
        'CustomOptions' => [
            'type' => 'structure',
            'members' => [
                'alarm' =>  [ 'shape' => 'Alarm', ],
                'retry' =>  [ 'shape' => 'Retry', ],
            ],
        ],
        'Alarm' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorAlarmStatus' => [ 'type' => 'string', 'locationName' => 'errorAlarmStatus', ],
                'delayAlarmStatus' => [ 'type' => 'string', 'locationName' => 'delayAlarmStatus', ],
                'delayPeriod' => [ 'type' => 'integer', 'locationName' => 'delayPeriod', ],
                'phone' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'priceCode' => [ 'type' => 'string', 'locationName' => 'priceCode', ],
            ],
        ],
        'TypeReserveField' => [
            'type' => 'structure',
            'members' => [
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'fields' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ColumnOption' => [
            'type' => 'structure',
            'members' => [
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'mappingTypeDefault' => [ 'type' => 'string', 'locationName' => 'mappingTypeDefault', ],
                'mappingTypeOptional' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Kernel' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'topology' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'configurationOption' =>  [ 'shape' => 'ConfigurationOption', ],
                'columnOption' =>  [ 'shape' => 'ColumnOption', ],
            ],
        ],
        'ConfigurationOption' => [
            'type' => 'structure',
            'members' => [
                'taskOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'Property', ], ],
                'transmissionMode' =>  [ 'shape' => 'Property', ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'Property', ], ],
                'transmissionObjectOption' =>  [ 'shape' => 'TransmissionObjectOption', ],
                'customOptions' =>  [ 'shape' => 'CustomOptions', ],
            ],
        ],
        'KernelOption' => [
            'type' => 'structure',
            'members' => [
                'example' => [ 'type' => 'string', 'locationName' => 'example', ],
            ],
        ],
        'TransmissionObjectOption' => [
            'type' => 'structure',
            'members' => [
                'schema' => [ 'type' => 'list', 'member' => [ 'shape' => 'Property', ], ],
            ],
        ],
        'LogDetail' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
            ],
        ],
        'Phase' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'PipelineOptions' => [
            'type' => 'structure',
            'members' => [
                'destExecutionStrategy' => [ 'type' => 'string', 'locationName' => 'destExecutionStrategy', ],
                'indexNamingRule' => [ 'type' => 'string', 'locationName' => 'indexNamingRule', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'partition' => [ 'type' => 'string', 'locationName' => 'partition', ],
            ],
        ],
        'PreCheckItem' => [
            'type' => 'structure',
            'members' => [
                'item' => [ 'type' => 'string', 'locationName' => 'item', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'advice' => [ 'type' => 'string', 'locationName' => 'advice', ],
                'canSkip' => [ 'type' => 'string', 'locationName' => 'canSkip', ],
                'isSkip' => [ 'type' => 'string', 'locationName' => 'isSkip', ],
            ],
        ],
        'Process' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'statusName' => [ 'type' => 'string', 'locationName' => 'statusName', ],
                'statusDescription' => [ 'type' => 'string', 'locationName' => 'statusDescription', ],
                'stepName' => [ 'type' => 'string', 'locationName' => 'stepName', ],
                'stepDescription' => [ 'type' => 'string', 'locationName' => 'stepDescription', ],
                'context' => [ 'type' => 'string', 'locationName' => 'context', ],
                'percent' => [ 'type' => 'integer', 'locationName' => 'percent', ],
                'visibility' => [ 'type' => 'integer', 'locationName' => 'visibility', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'updated' => [ 'type' => 'string', 'locationName' => 'updated', ],
            ],
        ],
        'ProgressDetail' => [
            'type' => 'structure',
            'members' => [
                'srcDatabaseName' => [ 'type' => 'string', 'locationName' => 'srcDatabaseName', ],
                'destDatabaseName' => [ 'type' => 'string', 'locationName' => 'destDatabaseName', ],
                'srcTableName' => [ 'type' => 'string', 'locationName' => 'srcTableName', ],
                'destTableName' => [ 'type' => 'string', 'locationName' => 'destTableName', ],
                'srcSchemaName' => [ 'type' => 'string', 'locationName' => 'srcSchemaName', ],
                'destSchemaName' => [ 'type' => 'string', 'locationName' => 'destSchemaName', ],
                'dataInitTotal' => [ 'type' => 'integer', 'locationName' => 'dataInitTotal', ],
                'dataInitCompleted' => [ 'type' => 'integer', 'locationName' => 'dataInitCompleted', ],
                'dataInitConsumeTime' => [ 'type' => 'integer', 'locationName' => 'dataInitConsumeTime', ],
                'dataInitStatus' => [ 'type' => 'string', 'locationName' => 'dataInitStatus', ],
                'structureInitStatus' => [ 'type' => 'string', 'locationName' => 'structureInitStatus', ],
                'dataSyncStatus' => [ 'type' => 'string', 'locationName' => 'dataSyncStatus', ],
            ],
        ],
        'TaskProgress' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'structureInitialization' =>  [ 'shape' => 'Progress', ],
                'dataInitialization' =>  [ 'shape' => 'Progress', ],
                'dataSynchronization' =>  [ 'shape' => 'Progress', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProgressDetail', ], ],
            ],
        ],
        'Progress' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'Schema' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'characterSet' => [ 'type' => 'string', 'locationName' => 'characterSet', ],
                'collation' => [ 'type' => 'string', 'locationName' => 'collation', ],
            ],
        ],
        'Column' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'columnType' => [ 'type' => 'string', 'locationName' => 'columnType', ],
            ],
        ],
        'Table' => [
            'type' => 'structure',
            'members' => [
                'schema' => [ 'type' => 'string', 'locationName' => 'schema', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'tp' => [ 'type' => 'string', 'locationName' => 'tp', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'tableRows' => [ 'type' => 'string', 'locationName' => 'tableRows', ],
                'dataLength' => [ 'type' => 'string', 'locationName' => 'dataLength', ],
                'indexLength' => [ 'type' => 'string', 'locationName' => 'indexLength', ],
                'collation' => [ 'type' => 'string', 'locationName' => 'collation', ],
                'uniqueKey' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'columns' => [ 'type' => 'list', 'member' => [ 'shape' => 'Column', ], ],
                'distributedTable' => [ 'type' => 'string', 'locationName' => 'distributedTable', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TicdcError' => [
            'type' => 'structure',
            'members' => [
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'TicdcChangefeedDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'upstreamId' => [ 'type' => 'integer', 'locationName' => 'upstreamId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'feedState' => [ 'type' => 'string', 'locationName' => 'feedState', ],
                'checkpointTso' => [ 'type' => 'string', 'locationName' => 'checkpointTso', ],
                'checkpointTime' => [ 'type' => 'string', 'locationName' => 'checkpointTime', ],
                'error' =>  [ 'shape' => 'TicdcError', ],
                'sinkUri' => [ 'type' => 'string', 'locationName' => 'sinkUri', ],
                'config' =>  [ 'shape' => 'ChangefeedReplicaConfig', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'startTs' => [ 'type' => 'string', 'locationName' => 'startTs', ],
                'resolvedTs' => [ 'type' => 'string', 'locationName' => 'resolvedTs', ],
                'targetTs' => [ 'type' => 'string', 'locationName' => 'targetTs', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'errorHistory' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'creatorVersion' => [ 'type' => 'string', 'locationName' => 'creatorVersion', ],
                'taskStatus' =>  [ 'shape' => 'CaptureTaskStatus', ],
            ],
        ],
        'ChangefeedReplicaConfig' => [
            'type' => 'structure',
            'members' => [
                'filter' =>  [ 'shape' => 'FilterConfig', ],
            ],
        ],
        'FilterConfig' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ignoreTxnStartTs' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'CaptureTaskStatus' => [
            'type' => 'structure',
            'members' => [
                'captureId' => [ 'type' => 'string', 'locationName' => 'captureId', ],
                'tableIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'TicdcChangefeedInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'upstreamId' => [ 'type' => 'integer', 'locationName' => 'upstreamId', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'feedState' => [ 'type' => 'string', 'locationName' => 'feedState', ],
                'checkpointTso' => [ 'type' => 'string', 'locationName' => 'checkpointTso', ],
                'checkpointTime' => [ 'type' => 'string', 'locationName' => 'checkpointTime', ],
                'error' =>  [ 'shape' => 'TicdcError', ],
            ],
        ],
        'Topic' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'partition' => [ 'type' => 'string', 'locationName' => 'partition', ],
            ],
        ],
        'Topology' => [
            'type' => 'structure',
            'members' => [
                'sourceEngine' => [ 'type' => 'string', 'locationName' => 'sourceEngine', ],
                'sourceInstanceType' => [ 'type' => 'string', 'locationName' => 'sourceInstanceType', ],
                'destination' => [ 'type' => 'list', 'member' => [ 'shape' => 'DestinationEndpointRule', ], ],
            ],
        ],
        'TransmissionCheckpoint' => [
            'type' => 'structure',
            'members' => [
                'gtid' => [ 'type' => 'string', 'locationName' => 'gtid', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logPos' => [ 'type' => 'integer', 'locationName' => 'logPos', ],
                'delay' => [ 'type' => 'integer', 'locationName' => 'delay', ],
                'mongoDbCheckpoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'MongoDBCheckpoint', ], ],
                'checkpointTSO' => [ 'type' => 'integer', 'locationName' => 'checkpointTSO', ],
                'checkpointTime' => [ 'type' => 'string', 'locationName' => 'checkpointTime', ],
            ],
        ],
        'MongoDBCheckpoint' => [
            'type' => 'structure',
            'members' => [
                'replset' => [ 'type' => 'string', 'locationName' => 'replset', ],
                'lsn' =>  [ 'shape' => 'MongoLSN', ],
                'lsnAck' =>  [ 'shape' => 'MongoLSN', ],
                'lsnCkpt' =>  [ 'shape' => 'MongoLSN', ],
                'now' =>  [ 'shape' => 'MongoLSN', ],
            ],
        ],
        'MongoLSN' => [
            'type' => 'structure',
            'members' => [
                'unix' => [ 'type' => 'integer', 'locationName' => 'unix', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'EndpointOther' => [
            'type' => 'structure',
            'members' => [
                'other' => [ 'type' => 'string', 'locationName' => 'other', ],
            ],
        ],
        'MongoBase' => [
            'type' => 'structure',
            'members' => [
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
            ],
        ],
        'TransmissionEndpoint' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'topic' => [ 'type' => 'string', 'locationName' => 'topic', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'unifiedAuth' => [ 'type' => 'boolean', 'locationName' => 'unifiedAuth', ],
                'mongos' => [ 'type' => 'list', 'member' => [ 'shape' => 'MongoBase', ], ],
                'mongoShards' => [ 'type' => 'list', 'member' => [ 'type' => 'array', ], ],
                'configServer' => [ 'type' => 'list', 'member' => [ 'shape' => 'MongoBase', ], ],
                'other' =>  [ 'shape' => 'EndpointOther', ],
                'connectionStr' => [ 'type' => 'string', 'locationName' => 'connectionStr', ],
            ],
        ],
        'TransmissionMode' => [
            'type' => 'structure',
            'members' => [
                'dataInitialization' => [ 'type' => 'boolean', 'locationName' => 'dataInitialization', ],
                'dataSynchronization' => [ 'type' => 'boolean', 'locationName' => 'dataSynchronization', ],
                'structureInitialization' => [ 'type' => 'boolean', 'locationName' => 'structureInitialization', ],
            ],
        ],
        'TransmissionObjectItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'all' => [ 'type' => 'boolean', 'locationName' => 'all', ],
                'dmlOp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ddlOp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tables' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'ColumnObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'reserve' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'TableObject' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'distributedName' => [ 'type' => 'string', 'locationName' => 'distributedName', ],
                'typeName' => [ 'type' => 'string', 'locationName' => 'typeName', ],
                'all' => [ 'type' => 'boolean', 'locationName' => 'all', ],
                'dmlOp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ddlOp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
                'columns' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'reserve' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
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
        'TransmissionTask' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'subnet' => [ 'type' => 'string', 'locationName' => 'subnet', ],
                'transmissionMethod' => [ 'type' => 'string', 'locationName' => 'transmissionMethod', ],
                'topology' => [ 'type' => 'string', 'locationName' => 'topology', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'phase' =>  [ 'shape' => 'Phase', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'source' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'destination' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'transmissionMode' =>  [ 'shape' => 'TransmissionMode', ],
            ],
        ],
        'TransmissionTaskAttribute' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'subnet' => [ 'type' => 'string', 'locationName' => 'subnet', ],
                'transmissionMethod' => [ 'type' => 'string', 'locationName' => 'transmissionMethod', ],
                'topology' => [ 'type' => 'string', 'locationName' => 'topology', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'phase' =>  [ 'shape' => 'Phase', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'source' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'destination' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'transmissionMode' =>  [ 'shape' => 'TransmissionMode', ],
                'destExecutionStrategy' => [ 'type' => 'string', 'locationName' => 'destExecutionStrategy', ],
                'options' =>  [ 'shape' => 'PipelineOptions', ],
                'customOptions' =>  [ 'shape' => 'CustomOptions', ],
                'checkpoint' =>  [ 'shape' => 'TransmissionCheckpoint', ],
                'startCheckPoint' =>  [ 'shape' => 'TransmissionCheckpoint', ],
            ],
        ],
        'DeleteTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResumeTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListTaskProgressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTaskProgressResultShape', ],
            ],
        ],
        'ListSchemasResultShape' => [
            'type' => 'structure',
            'members' => [
                'schemas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Schema', ], ],
            ],
        ],
        'ListTopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTopicsResultShape', ],
            ],
        ],
        'ListTopicsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'endpoint' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'endpointId' => [ 'type' => 'string', 'locationName' => 'endpointId', ],
            ],
        ],
        'ListSchemasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListSchemasResultShape', ],
            ],
        ],
        'DescribeTransmissionObjectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTransmissionObjectResultShape', ],
            ],
        ],
        'GetTableResultShape' => [
            'type' => 'structure',
            'members' => [
                'table' =>  [ 'shape' => 'Table', ],
            ],
        ],
        'ListCloudInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'CloudInstanceSpec', ], ],
            ],
        ],
        'ListInstanceClassesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'transmissionMethod' => [ 'type' => 'string', 'locationName' => 'transmissionMethod', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListInstanceClassesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClass', ], ],
            ],
        ],
        'ConnectivityTestResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ConnectivityTestResultShape', ],
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
        'ListInstanceClassesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListInstanceClassesResultShape', ],
            ],
        ],
        'ListTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tables' => [ 'type' => 'list', 'member' => [ 'shape' => 'Table', ], ],
            ],
        ],
        'ConnectivityTestResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConnectivityTestResult', ], ],
            ],
        ],
        'SuspendTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SkipPreCheckItemResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'PreCheckItem', ], ],
            ],
        ],
        'StopTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTaskProgressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListTablesResultShape', ],
            ],
        ],
        'CreateTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTransmissionTaskResultShape', ],
            ],
        ],
        'SkipPreCheckItemRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'itemName' => [ 'type' => 'string', 'locationName' => 'itemName', ],
            ],
        ],
        'ModifyTransmissionTaskNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PreCheckTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribePreCheckResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'items' => [ 'type' => 'object', 'locationName' => 'items', ],
            ],
        ],
        'DescribePreCheckResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePreCheckResultResultShape', ],
            ],
        ],
        'StartTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListProcessesResultShape' => [
            'type' => 'structure',
            'members' => [
                'process' => [ 'type' => 'list', 'member' => [ 'shape' => 'Process', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ListTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'endpoint' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'endpointId' => [ 'type' => 'string', 'locationName' => 'endpointId', ],
            ],
        ],
        'StartTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTransmissionTaskAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTransmissionTaskAttributesResultShape', ],
            ],
        ],
        'DescribeTransmissionLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'PreCheckTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'StartTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTableResultShape', ],
            ],
        ],
        'DeleteTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ConfigureTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ConfigureTransmissionTaskResultShape', ],
            ],
        ],
        'ListTopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tables' => [ 'type' => 'list', 'member' => [ 'shape' => 'Topic', ], ],
            ],
        ],
        'ResumeTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchOperateTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BatchOperateTasksResultShape', ],
            ],
        ],
        'ListTaskProgressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePreCheckResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeTransmissionTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'dts' => [ 'type' => 'list', 'member' => [ 'shape' => 'TransmissionTask', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetTaskProgressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTaskProgressResultShape', ],
            ],
        ],
        'ListTaskProgressResultShape' => [
            'type' => 'structure',
            'members' => [
                'progress' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskProgress', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'PreCheckTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ConnectivityTestResult' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'solution' => [ 'type' => 'string', 'locationName' => 'solution', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'BatchOperateTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operateType' => [ 'type' => 'string', 'locationName' => 'operateType', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeTransmissionObjectResultShape' => [
            'type' => 'structure',
            'members' => [
                'transmissionObject' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListProcessesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListProcessesResultShape', ],
            ],
        ],
        'ModifyTransmissionTaskNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'schemaName' => [ 'type' => 'string', 'locationName' => 'schemaName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'endpoint' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'endpointId' => [ 'type' => 'string', 'locationName' => 'endpointId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListSchemasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'databaseName' => [ 'type' => 'string', 'locationName' => 'databaseName', ],
                'endpoint' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'endpointId' => [ 'type' => 'string', 'locationName' => 'endpointId', ],
            ],
        ],
        'ConnectivityTestRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endpoint' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
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
        'SuspendTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeTransmissionObjectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SkipPreCheckItemResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SkipPreCheckItemResultShape', ],
            ],
        ],
        'CreateTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'transmissionMethod' => [ 'type' => 'string', 'locationName' => 'transmissionMethod', ],
                'topology' => [ 'type' => 'string', 'locationName' => 'topology', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'subnet' => [ 'type' => 'string', 'locationName' => 'subnet', ],
                'availableZone' => [ 'type' => 'string', 'locationName' => 'availableZone', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListProcessesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListCloudInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListCloudInstancesResultShape', ],
            ],
        ],
        'DescribeTransmissionLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyTransmissionTaskNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'GetCloudInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetCloudInstanceResultShape', ],
            ],
        ],
        'GetCloudInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instance' =>  [ 'shape' => 'CloudInstanceSpec', ],
            ],
        ],
        'GetTaskProgressResultShape' => [
            'type' => 'structure',
            'members' => [
                'progress' =>  [ 'shape' => 'TaskProgress', ],
            ],
        ],
        'ConfigureTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DescribeTransmissionTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'BatchOperateTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'details' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'ConfigureTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'transmissionMode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'destExecutionStrategy' => [ 'type' => 'string', 'locationName' => 'destExecutionStrategy', ],
                'options' =>  [ 'shape' => 'PipelineOptions', ],
                'transmissionObject' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'source' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'destination' =>  [ 'shape' => 'TransmissionEndpoint', ],
                'checkPoint' =>  [ 'shape' => 'TransmissionCheckpoint', ],
                'customOptions' =>  [ 'shape' => 'CustomOptions', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'StopTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResumeTransmissionTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTransmissionTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTransmissionTasksResultShape', ],
            ],
        ],
        'DescribeTransmissionTaskAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DeleteTransmissionTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeTransmissionLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTransmissionLogResultShape', ],
            ],
        ],
        'SuspendTransmissionTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetCloudInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceRegion' => [ 'type' => 'string', 'locationName' => 'instanceRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeTransmissionTaskAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dts' =>  [ 'shape' => 'TransmissionTaskAttribute', ],
            ],
        ],
        'ListCloudInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceRegion' => [ 'type' => 'string', 'locationName' => 'instanceRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
    ],
];
