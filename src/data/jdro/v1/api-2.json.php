<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdro',
        'protocol' => 'json',
//        'serviceFullName' => 'jdro',
//        'serviceId' => 'jdro',
    ],
    'operations' => [
        'DescribeResourceTypeList' => [
            'name' => 'DescribeResourceTypeList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/resourcetypes',
            ],
            'input' => [ 'shape' => 'DescribeResourceTypeListRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourceTypeListResponseShape', ],
        ],
        'DescribeResourceTypeSpecification' => [
            'name' => 'DescribeResourceTypeSpecification',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/resourcetypes/{resourceType}',
            ],
            'input' => [ 'shape' => 'DescribeResourceTypeSpecificationRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourceTypeSpecificationResponseShape', ],
        ],
        'DescribeStacks' => [
            'name' => 'DescribeStacks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks',
            ],
            'input' => [ 'shape' => 'DescribeStacksRequestShape', ],
            'output' => [ 'shape' => 'DescribeStacksResponseShape', ],
        ],
        'CreateStack' => [
            'name' => 'CreateStack',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stacks',
            ],
            'input' => [ 'shape' => 'CreateStackRequestShape', ],
            'output' => [ 'shape' => 'CreateStackResponseShape', ],
        ],
        'DescribeStack' => [
            'name' => 'DescribeStack',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}',
            ],
            'input' => [ 'shape' => 'DescribeStackRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackResponseShape', ],
        ],
        'DeleteStack' => [
            'name' => 'DeleteStack',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}',
            ],
            'input' => [ 'shape' => 'DeleteStackRequestShape', ],
            'output' => [ 'shape' => 'DeleteStackResponseShape', ],
        ],
        'CreateChangeSet' => [
            'name' => 'CreateChangeSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/changesets',
            ],
            'input' => [ 'shape' => 'CreateChangeSetRequestShape', ],
            'output' => [ 'shape' => 'CreateChangeSetResponseShape', ],
        ],
        'ExecuteChangeSet' => [
            'name' => 'ExecuteChangeSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/changesets/{changesetId}',
            ],
            'input' => [ 'shape' => 'ExecuteChangeSetRequestShape', ],
            'output' => [ 'shape' => 'ExecuteChangeSetResponseShape', ],
        ],
        'DescribeStackEvents' => [
            'name' => 'DescribeStackEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/events',
            ],
            'input' => [ 'shape' => 'DescribeStackEventsRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackEventsResponseShape', ],
        ],
        'DescribeStackResources' => [
            'name' => 'DescribeStackResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/resources',
            ],
            'input' => [ 'shape' => 'DescribeStackResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackResourcesResponseShape', ],
        ],
        'DescribeStackTemplate' => [
            'name' => 'DescribeStackTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/stacks/{stackId}/template',
            ],
            'input' => [ 'shape' => 'DescribeStackTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribeStackTemplateResponseShape', ],
        ],
        'ValidateTemplate' => [
            'name' => 'ValidateTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/templateValidate',
            ],
            'input' => [ 'shape' => 'ValidateTemplateRequestShape', ],
            'output' => [ 'shape' => 'ValidateTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
        'ResourceChange' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceChangeDetail', ], ],
                'logicalResourceId' => [ 'type' => 'string', 'locationName' => 'logicalResourceId', ],
                'physicalResourceId' => [ 'type' => 'string', 'locationName' => 'physicalResourceId', ],
                'replacement' => [ 'type' => 'string', 'locationName' => 'replacement', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'scope' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResourceTargetDefinition' => [
            'type' => 'structure',
            'members' => [
                'attribute' => [ 'type' => 'string', 'locationName' => 'attribute', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'requiresRecreation' => [ 'type' => 'string', 'locationName' => 'requiresRecreation', ],
            ],
        ],
        'Change' => [
            'type' => 'structure',
            'members' => [
                'resourceChange' =>  [ 'shape' => 'ResourceChange', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'ResourceChangeDetail' => [
            'type' => 'structure',
            'members' => [
                'causingEntity' => [ 'type' => 'string', 'locationName' => 'causingEntity', ],
                'changeSource' => [ 'type' => 'string', 'locationName' => 'changeSource', ],
                'evaluation' => [ 'type' => 'string', 'locationName' => 'evaluation', ],
                'target' =>  [ 'shape' => 'ResourceTargetDefinition', ],
            ],
        ],
        'ChangeSet' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'changeInfo' => [ 'type' => 'string', 'locationName' => 'changeInfo', ],
                'changeMap' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'describe' => [ 'type' => 'string', 'locationName' => 'describe', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isRun' => [ 'type' => 'long', 'locationName' => 'isRun', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'runTime' => [ 'type' => 'string', 'locationName' => 'runTime', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusReason' => [ 'type' => 'string', 'locationName' => 'statusReason', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'Environment' => [
            'type' => 'structure',
            'members' => [
                'disableRollback' => [ 'type' => 'boolean', 'locationName' => 'disableRollback', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'params' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'CreateStackChangeSetRequset' => [
            'type' => 'structure',
            'members' => [
                'environment' =>  [ 'shape' => 'Environment', ],
                'template' => [ 'type' => 'object', 'locationName' => 'template', ],
            ],
        ],
        'CreateStackSpec' => [
            'type' => 'structure',
            'members' => [
                'environment' =>  [ 'shape' => 'Environment', ],
                'template' => [ 'type' => 'object', 'locationName' => 'template', ],
            ],
        ],
        'DescribeResourceTypeListItem' => [
            'type' => 'structure',
            'members' => [
                'describe' => [ 'type' => 'string', 'locationName' => 'describe', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'Err' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'EventOut' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'physicalId' => [ 'type' => 'string', 'locationName' => 'physicalId', ],
                'resourceAction' => [ 'type' => 'string', 'locationName' => 'resourceAction', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'resourceStatusReason' => [ 'type' => 'string', 'locationName' => 'resourceStatusReason', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'PropertyItemType' => [
            'type' => 'structure',
            'members' => [
                'multiValues' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scalar' => [ 'type' => 'string', 'locationName' => 'scalar', ],
            ],
        ],
        'PropertyTypeDefinition' => [
            'type' => 'structure',
            'members' => [
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'documentation' => [ 'type' => 'string', 'locationName' => 'documentation', ],
                'duplicatesAllowed' => [ 'type' => 'boolean', 'locationName' => 'duplicatesAllowed', ],
                'itemType' => [ 'type' => 'string', 'locationName' => 'itemType', ],
                'primitiveItemType' => [ 'type' => 'string', 'locationName' => 'primitiveItemType', ],
                'primitiveType' => [ 'type' => 'string', 'locationName' => 'primitiveType', ],
                'required' => [ 'type' => 'boolean', 'locationName' => 'required', ],
                'type' =>  [ 'shape' => 'PropertyItemType', ],
                'updateType' => [ 'type' => 'string', 'locationName' => 'updateType', ],
            ],
        ],
        'PropertyTypes' => [
            'type' => 'structure',
            'members' => [
                'documentation' => [ 'type' => 'string', 'locationName' => 'documentation', ],
                'properties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResourceAttribute' => [
            'type' => 'structure',
            'members' => [
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'itemType' => [ 'type' => 'string', 'locationName' => 'itemType', ],
                'primitiveItemType' => [ 'type' => 'string', 'locationName' => 'primitiveItemType', ],
                'primitiveType' => [ 'type' => 'string', 'locationName' => 'primitiveType', ],
                'type' =>  [ 'shape' => 'PropertyItemType', ],
            ],
        ],
        'ResourceOut' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deletePolicy' => [ 'type' => 'string', 'locationName' => 'deletePolicy', ],
                'deleteTime' => [ 'type' => 'string', 'locationName' => 'deleteTime', ],
                'logicId' => [ 'type' => 'string', 'locationName' => 'logicId', ],
                'physicalId' => [ 'type' => 'string', 'locationName' => 'physicalId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'snapshot' => [ 'type' => 'string', 'locationName' => 'snapshot', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusReason' => [ 'type' => 'string', 'locationName' => 'statusReason', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ResourceTypes' => [
            'type' => 'structure',
            'members' => [
                'attributes' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'documentation' => [ 'type' => 'string', 'locationName' => 'documentation', ],
                'properties' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'StackOut' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'canUpdate' => [ 'type' => 'boolean', 'locationName' => 'canUpdate', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'disableRollback' => [ 'type' => 'boolean', 'locationName' => 'disableRollback', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'input' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'output' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'stackVersion' => [ 'type' => 'long', 'locationName' => 'stackVersion', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusReason' => [ 'type' => 'string', 'locationName' => 'statusReason', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'TemplateOut' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'describe' => [ 'type' => 'string', 'locationName' => 'describe', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'TemplateValidateSpec' => [
            'type' => 'structure',
            'members' => [
                'environment' =>  [ 'shape' => 'Environment', ],
                'template' => [ 'type' => 'object', 'locationName' => 'template', ],
                'validateMode' => [ 'type' => 'string', 'locationName' => 'validateMode', ],
            ],
        ],
        'DescribeResourceTypeListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'search' => [ 'type' => 'string', 'locationName' => 'search', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeResourceTypeSpecificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeResourceTypeSpecificationResultShape', ],
            ],
        ],
        'DescribeResourceTypeSpecificationResultShape' => [
            'type' => 'structure',
            'members' => [
                'propertyTypes' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'resourceTypes' =>  [ 'shape' => 'ResourceTypes', ],
            ],
        ],
        'DescribeResourceTypeSpecificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'DescribeResourceTypeListResultShape' => [
            'type' => 'structure',
            'members' => [
                'resourceTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeResourceTypeListItem', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeResourceTypeListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeResourceTypeListResultShape', ],
            ],
        ],
        'CreateStackResultShape' => [
            'type' => 'structure',
            'members' => [
                'stackID' => [ 'type' => 'string', 'locationName' => 'stackID', ],
            ],
        ],
        'DescribeStackTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
            ],
        ],
        'DescribeStackResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceOut', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateStackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateStackResultShape', ],
            ],
        ],
        'DescribeStackResultShape' => [
            'type' => 'structure',
            'members' => [
                'stack' =>  [ 'shape' => 'StackOut', ],
            ],
        ],
        'DescribeStackTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
            ],
        ],
        'CreateChangeSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'environment' =>  [ 'shape' => 'Environment', ],
                'template' => [ 'type' => 'object', 'locationName' => 'template', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
            ],
        ],
        'DescribeStacksResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'StackOut', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateChangeSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateChangeSetResultShape', ],
            ],
        ],
        'ExecuteChangeSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExecuteChangeSetResultShape', ],
            ],
        ],
        'DescribeStackResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'search' => [ 'type' => 'string', 'locationName' => 'search', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
            ],
        ],
        'DescribeStackResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStackResourcesResultShape', ],
            ],
        ],
        'DescribeStackEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventOut', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeStacksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStacksResultShape', ],
            ],
        ],
        'DescribeStackEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStackEventsResultShape', ],
            ],
        ],
        'DescribeStackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStackResultShape', ],
            ],
        ],
        'DeleteStackResultShape' => [
            'type' => 'structure',
            'members' => [
                'details' => [ 'type' => 'string', 'locationName' => 'details', ],
            ],
        ],
        'CreateStackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'environment' =>  [ 'shape' => 'Environment', ],
                'template' => [ 'type' => 'object', 'locationName' => 'template', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeStackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
            ],
        ],
        'CreateChangeSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DescribeStackEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
            ],
        ],
        'DescribeStackTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStackTemplateResultShape', ],
            ],
        ],
        'DeleteStackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteStackResultShape', ],
            ],
        ],
        'DeleteStackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
            ],
        ],
        'ExecuteChangeSetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeStacksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'stackName' => [ 'type' => 'string', 'locationName' => 'stackName', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'createStartTime' => [ 'type' => 'string', 'locationName' => 'createStartTime', ],
                'createEndTime' => [ 'type' => 'string', 'locationName' => 'createEndTime', ],
                'updateStartTime' => [ 'type' => 'string', 'locationName' => 'updateStartTime', ],
                'updateEndTime' => [ 'type' => 'string', 'locationName' => 'updateEndTime', ],
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortBy' => [ 'type' => 'string', 'locationName' => 'sortBy', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ExecuteChangeSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'stackId' => [ 'type' => 'string', 'locationName' => 'stackId', ],
                'changesetId' => [ 'type' => 'string', 'locationName' => 'changesetId', ],
            ],
        ],
        'ValidateTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'environment' =>  [ 'shape' => 'Environment', ],
                'template' => [ 'type' => 'object', 'locationName' => 'template', ],
                'validateMode' => [ 'type' => 'string', 'locationName' => 'validateMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ValidateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ValidateTemplateResultShape', ],
            ],
        ],
        'ValidateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'describe' => [ 'type' => 'string', 'locationName' => 'describe', ],
                'result' => [ 'type' => 'object', 'locationName' => 'result', ],
            ],
        ],
    ],
];
