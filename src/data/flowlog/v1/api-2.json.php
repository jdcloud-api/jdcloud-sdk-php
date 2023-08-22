<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'flowlog',
        'protocol' => 'json',
//        'serviceFullName' => 'flowlog',
//        'serviceId' => 'flowlog',
    ],
    'operations' => [
        'DescribeFlowLogs' => [
            'name' => 'DescribeFlowLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/flowLogs',
            ],
            'input' => [ 'shape' => 'DescribeFlowLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeFlowLogsResponseShape', ],
        ],
        'CreateFlowLog' => [
            'name' => 'CreateFlowLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flowLogs',
            ],
            'input' => [ 'shape' => 'CreateFlowLogRequestShape', ],
            'output' => [ 'shape' => 'CreateFlowLogResponseShape', ],
        ],
        'DescribeFlowLog' => [
            'name' => 'DescribeFlowLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}',
            ],
            'input' => [ 'shape' => 'DescribeFlowLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeFlowLogResponseShape', ],
        ],
        'ModifyFlowLog' => [
            'name' => 'ModifyFlowLog',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}',
            ],
            'input' => [ 'shape' => 'ModifyFlowLogRequestShape', ],
            'output' => [ 'shape' => 'ModifyFlowLogResponseShape', ],
        ],
        'DeleteFlowLog' => [
            'name' => 'DeleteFlowLog',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}',
            ],
            'input' => [ 'shape' => 'DeleteFlowLogRequestShape', ],
            'output' => [ 'shape' => 'DeleteFlowLogResponseShape', ],
        ],
        'StartFlowLog' => [
            'name' => 'StartFlowLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}:startFlowLog',
            ],
            'input' => [ 'shape' => 'StartFlowLogRequestShape', ],
            'output' => [ 'shape' => 'StartFlowLogResponseShape', ],
        ],
        'StopFlowLog' => [
            'name' => 'StopFlowLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}:stopFlowLog',
            ],
            'input' => [ 'shape' => 'StopFlowLogRequestShape', ],
            'output' => [ 'shape' => 'StopFlowLogResponseShape', ],
        ],
        'AddCollectResources' => [
            'name' => 'AddCollectResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}:addCollectResources',
            ],
            'input' => [ 'shape' => 'AddCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'AddCollectResourcesResponseShape', ],
        ],
        'RemoveCollectResources' => [
            'name' => 'RemoveCollectResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}:removeCollectResources',
            ],
            'input' => [ 'shape' => 'RemoveCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'RemoveCollectResourcesResponseShape', ],
        ],
        'DescribeCollectResources' => [
            'name' => 'DescribeCollectResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/flowLogs/{flowLogId}:describeCollectResources',
            ],
            'input' => [ 'shape' => 'DescribeCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectResourcesResponseShape', ],
        ],
        'DescribeQuota' => [
            'name' => 'DescribeQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas/',
            ],
            'input' => [ 'shape' => 'DescribeQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotaResponseShape', ],
        ],
    ],
    'shapes' => [
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CollectResource' => [
            'type' => 'structure',
            'members' => [
                'collectResourceId' => [ 'type' => 'string', 'locationName' => 'collectResourceId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'collectResourceType' => [ 'type' => 'string', 'locationName' => 'collectResourceType', ],
                'addedTime' => [ 'type' => 'string', 'locationName' => 'addedTime', ],
            ],
        ],
        'FlowLog' => [
            'type' => 'structure',
            'members' => [
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
                'flowLogName' => [ 'type' => 'string', 'locationName' => 'flowLogName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'flowLogType' => [ 'type' => 'string', 'locationName' => 'flowLogType', ],
                'flowLogStatus' => [ 'type' => 'string', 'locationName' => 'flowLogStatus', ],
                'collectResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectResource', ], ],
                'collectTrafficType' => [ 'type' => 'string', 'locationName' => 'collectTrafficType', ],
                'collectInterval' => [ 'type' => 'integer', 'locationName' => 'collectInterval', ],
                'storageRegionId' => [ 'type' => 'string', 'locationName' => 'storageRegionId', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'CollectResourceSpec' => [
            'type' => 'structure',
            'members' => [
                'collectResourceType' => [ 'type' => 'string', 'locationName' => 'collectResourceType', ],
                'collectResourceId' => [ 'type' => 'string', 'locationName' => 'collectResourceId', ],
            ],
        ],
        'RemoveCollectResourceSpec' => [
            'type' => 'structure',
            'members' => [
                'collectResourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CollectResources' => [
            'type' => 'structure',
            'members' => [
                'collectResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectResourceSpec', ], ],
            ],
        ],
        'FlowLogSpec' => [
            'type' => 'structure',
            'members' => [
                'flowLogName' => [ 'type' => 'string', 'locationName' => 'flowLogName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'flowLogType' => [ 'type' => 'string', 'locationName' => 'flowLogType', ],
                'collectResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectResourceSpec', ], ],
                'collectTrafficType' => [ 'type' => 'string', 'locationName' => 'collectTrafficType', ],
                'collectInterval' => [ 'type' => 'integer', 'locationName' => 'collectInterval', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageRegionId' => [ 'type' => 'string', 'locationName' => 'storageRegionId', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
            ],
        ],
        'ModifyFlowLogSpec' => [
            'type' => 'structure',
            'members' => [
                'flowLogName' => [ 'type' => 'string', 'locationName' => 'flowLogName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'collectInterval' => [ 'type' => 'integer', 'locationName' => 'collectInterval', ],
            ],
        ],
        'ModifyQuotaSpec' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'maxLimit' => [ 'type' => 'double', 'locationName' => 'maxLimit', ],
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
            ],
        ],
        'CreateFlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowLogName' => [ 'type' => 'string', 'locationName' => 'flowLogName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'flowLogType' => [ 'type' => 'string', 'locationName' => 'flowLogType', ],
                'collectResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectResourceSpec', ], ],
                'collectTrafficType' => [ 'type' => 'string', 'locationName' => 'collectTrafficType', ],
                'collectInterval' => [ 'type' => 'integer', 'locationName' => 'collectInterval', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageRegionId' => [ 'type' => 'string', 'locationName' => 'storageRegionId', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddCollectResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'collectResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectResourceSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'DescribeFlowLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCollectResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'StartFlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyFlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopFlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartFlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeFlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowLog' =>  [ 'shape' => 'FlowLog', ],
            ],
        ],
        'DeleteFlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteFlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeFlowLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'FlowLog', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'RemoveCollectResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveCollectResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteFlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'StopFlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'StopFlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCollectResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateFlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'ModifyFlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyFlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'flowLogName' => [ 'type' => 'string', 'locationName' => 'flowLogName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'collectInterval' => [ 'type' => 'integer', 'locationName' => 'collectInterval', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'AddCollectResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartFlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'RemoveCollectResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'collectResourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'DescribeFlowLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFlowLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeFlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'flowLogId' => [ 'type' => 'string', 'locationName' => 'flowLogId', ],
            ],
        ],
        'DescribeFlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCollectResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'collectResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectResource', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateFlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateFlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCollectResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCollectResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'parentResourceId' => [ 'type' => 'string', 'locationName' => 'parentResourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
