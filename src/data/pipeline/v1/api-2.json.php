<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'pipeline',
        'protocol' => 'json',
//        'serviceFullName' => 'pipeline',
//        'serviceId' => 'pipeline',
    ],
    'operations' => [
        'GetLimits' => [
            'name' => 'GetLimits',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/limits',
            ],
            'input' => [ 'shape' => 'GetLimitsRequestShape', ],
            'output' => [ 'shape' => 'GetLimitsResponseShape', ],
        ],
        'GetSourceProviders' => [
            'name' => 'GetSourceProviders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/options/sourceProviders',
            ],
            'input' => [ 'shape' => 'GetSourceProvidersRequestShape', ],
            'output' => [ 'shape' => 'GetSourceProvidersResponseShape', ],
        ],
        'GetOperationProviders' => [
            'name' => 'GetOperationProviders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/options/operationProviders',
            ],
            'input' => [ 'shape' => 'GetOperationProvidersRequestShape', ],
            'output' => [ 'shape' => 'GetOperationProvidersResponseShape', ],
        ],
        'GetRegions' => [
            'name' => 'GetRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/options/regions',
            ],
            'input' => [ 'shape' => 'GetRegionsRequestShape', ],
            'output' => [ 'shape' => 'GetRegionsResponseShape', ],
        ],
        'GetPipelines' => [
            'name' => 'GetPipelines',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline',
            ],
            'input' => [ 'shape' => 'GetPipelinesRequestShape', ],
            'output' => [ 'shape' => 'GetPipelinesResponseShape', ],
        ],
        'CreatePipeline' => [
            'name' => 'CreatePipeline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline',
            ],
            'input' => [ 'shape' => 'CreatePipelineRequestShape', ],
            'output' => [ 'shape' => 'CreatePipelineResponseShape', ],
        ],
        'GetPipeline' => [
            'name' => 'GetPipeline',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}',
            ],
            'input' => [ 'shape' => 'GetPipelineRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineResponseShape', ],
        ],
        'UpdatePipeline' => [
            'name' => 'UpdatePipeline',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}',
            ],
            'input' => [ 'shape' => 'UpdatePipelineRequestShape', ],
            'output' => [ 'shape' => 'UpdatePipelineResponseShape', ],
        ],
        'DeletePipeline' => [
            'name' => 'DeletePipeline',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}',
            ],
            'input' => [ 'shape' => 'DeletePipelineRequestShape', ],
            'output' => [ 'shape' => 'DeletePipelineResponseShape', ],
        ],
        'StartPipeline' => [
            'name' => 'StartPipeline',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}:start',
            ],
            'input' => [ 'shape' => 'StartPipelineRequestShape', ],
            'output' => [ 'shape' => 'StartPipelineResponseShape', ],
        ],
        'ManualAction' => [
            'name' => 'ManualAction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instances/{instanceUuid}/actions/{actionUuid}:manual',
            ],
            'input' => [ 'shape' => 'ManualActionRequestShape', ],
            'output' => [ 'shape' => 'ManualActionResponseShape', ],
        ],
        'GetPipelineInstancesByUuids' => [
            'name' => 'GetPipelineInstancesByUuids',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'GetPipelineInstancesByUuidsRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineInstancesByUuidsResponseShape', ],
        ],
        'GetPipelineInstances' => [
            'name' => 'GetPipelineInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instances',
            ],
            'input' => [ 'shape' => 'GetPipelineInstancesRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineInstancesResponseShape', ],
        ],
        'GetPipelineInstance' => [
            'name' => 'GetPipelineInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instance/{instanceUuid}',
            ],
            'input' => [ 'shape' => 'GetPipelineInstanceRequestShape', ],
            'output' => [ 'shape' => 'GetPipelineInstanceResponseShape', ],
        ],
        'StopPipelineInstance' => [
            'name' => 'StopPipelineInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pipeline/{uuid}/instance/{instanceUuid}:stop',
            ],
            'input' => [ 'shape' => 'StopPipelineInstanceRequestShape', ],
            'output' => [ 'shape' => 'StopPipelineInstanceResponseShape', ],
        ],
        'ReadFile' => [
            'name' => 'ReadFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/file',
            ],
            'input' => [ 'shape' => 'ReadFileRequestShape', ],
            'output' => [ 'shape' => 'ReadFileResponseShape', ],
        ],
    ],
    'shapes' => [
        'NameLabelPair' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'ActionTypeId' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'owner' => [ 'type' => 'string', 'locationName' => 'owner', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'ActionLink' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'PipelineAction' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createdAt' => [ 'type' => 'integer', 'locationName' => 'createdAt', ],
                'startedAt' => [ 'type' => 'integer', 'locationName' => 'startedAt', ],
                'doneAt' => [ 'type' => 'integer', 'locationName' => 'doneAt', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'statusHuman' => [ 'type' => 'string', 'locationName' => 'statusHuman', ],
                'links' =>  [ 'shape' => 'ActionLinks', ],
                'actionTypeId' =>  [ 'shape' => 'ActionTypeId', ],
            ],
        ],
        'PipelineStage' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createdAt' => [ 'type' => 'integer', 'locationName' => 'createdAt', ],
                'startedAt' => [ 'type' => 'integer', 'locationName' => 'startedAt', ],
                'doneAt' => [ 'type' => 'integer', 'locationName' => 'doneAt', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'statusHuman' => [ 'type' => 'string', 'locationName' => 'statusHuman', ],
                'position' => [ 'type' => 'integer', 'locationName' => 'position', ],
                'actions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineAction', ], ],
            ],
        ],
        'PipelineInstance' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'startedAt' => [ 'type' => 'integer', 'locationName' => 'startedAt', ],
                'doneAt' => [ 'type' => 'integer', 'locationName' => 'doneAt', ],
                'durationMs' => [ 'type' => 'integer', 'locationName' => 'durationMs', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'statusHuman' => [ 'type' => 'string', 'locationName' => 'statusHuman', ],
                'env' => [ 'type' => 'string', 'locationName' => 'env', ],
                'failureReason' => [ 'type' => 'integer', 'locationName' => 'failureReason', ],
                'falseilureReasonHuman' => [ 'type' => 'string', 'locationName' => 'falseilureReasonHuman', ],
                'stages' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineStage', ], ],
            ],
        ],
        'PipelineParams' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
            ],
        ],
        'SimplePipeline' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'startedAt' => [ 'type' => 'integer', 'locationName' => 'startedAt', ],
                'latestStatus' => [ 'type' => 'string', 'locationName' => 'latestStatus', ],
                'latestInstanceUuid' => [ 'type' => 'string', 'locationName' => 'latestInstanceUuid', ],
            ],
        ],
        'ActionLinks' => [
            'type' => 'structure',
            'members' => [
                'provider' =>  [ 'shape' => 'ActionLink', ],
                'status' =>  [ 'shape' => 'ActionLink', ],
                'detail' =>  [ 'shape' => 'ActionLink', ],
            ],
        ],
        'Pipeline' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'createdAt' => [ 'type' => 'integer', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'integer', 'locationName' => 'updatedAt', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'GetLimitsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetLimitsResultShape' => [
            'type' => 'structure',
            'members' => [
                'numberLimit' => [ 'type' => 'integer', 'locationName' => 'numberLimit', ],
                'canCreate' => [ 'type' => 'boolean', 'locationName' => 'canCreate', ],
            ],
        ],
        'GetLimitsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetLimitsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetRegionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSourceProvidersResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'providers' => [ 'type' => 'list', 'member' => [ 'shape' => 'NameLabelPair', ], ],
            ],
        ],
        'GetRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetOperationProvidersResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'providers' => [ 'type' => 'list', 'member' => [ 'shape' => 'NameLabelPair', ], ],
            ],
        ],
        'GetSourceProvidersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSourceProvidersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOperationProvidersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetOperationProvidersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'NameLabelPair', ], ],
            ],
        ],
        'GetOperationProvidersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetSourceProvidersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetPipelinesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPipelinesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePipelineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdatePipelineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePipelineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePipelineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartPipelineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartPipelineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPipelinesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreatePipelineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PipelineParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeletePipelineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'GetPipelineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'StartPipelineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'GetPipelinesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimplePipeline', ], ],
            ],
        ],
        'DeletePipelineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeletePipelineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartPipelineResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GetPipelineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPipelineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePipelineResultShape' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'CreatePipelineResultShape' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'UpdatePipelineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'PipelineParams', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'GetPipelineResultShape' => [
            'type' => 'structure',
            'members' => [
                'pipeline' =>  [ 'shape' => 'Pipeline', ],
            ],
        ],
        'DeletePipelineResultShape' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'ManualActionResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'actionUuid' => [ 'type' => 'string', 'locationName' => 'actionUuid', ],
            ],
        ],
        'ManualActionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ManualActionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ManualActionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'actionUuid' => [ 'type' => 'string', 'locationName' => 'actionUuid', ],
            ],
        ],
        'StopPipelineInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopPipelineInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPipelineInstancesByUuidsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pipelineInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineInstance', ], ],
            ],
        ],
        'GetPipelineInstancesByUuidsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPipelineInstancesByUuidsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPipelineInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPipelineInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopPipelineInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
            ],
        ],
        'GetPipelineInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPipelineInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPipelineInstancesByUuidsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'uuids' => [ 'type' => 'string', 'locationName' => 'uuids', ],
                'isSimple' => [ 'type' => 'boolean', 'locationName' => 'isSimple', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetPipelineInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineInstance', ], ],
            ],
        ],
        'GetPipelineInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'pipelineInstance' =>  [ 'shape' => 'PipelineInstance', ],
            ],
        ],
        'GetPipelineInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isSimple' => [ 'type' => 'boolean', 'locationName' => 'isSimple', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
            ],
        ],
        'StopPipelineInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceUuid' => [ 'type' => 'string', 'locationName' => 'instanceUuid', ],
                'actionUuid' => [ 'type' => 'string', 'locationName' => 'actionUuid', ],
            ],
        ],
        'GetPipelineInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'ReadFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ReadFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'contents' => [ 'type' => 'string', 'locationName' => 'contents', ],
            ],
        ],
        'ReadFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ReadFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
