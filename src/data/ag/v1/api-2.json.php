<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ag',
        'protocol' => 'json',
//        'serviceFullName' => 'ag',
//        'serviceId' => 'ag',
    ],
    'operations' => [
        'DescribeAgs' => [
            'name' => 'DescribeAgs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups',
            ],
            'input' => [ 'shape' => 'DescribeAgsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgsResponseShape', ],
        ],
        'CreateAg' => [
            'name' => 'CreateAg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups',
            ],
            'input' => [ 'shape' => 'CreateAgRequestShape', ],
            'output' => [ 'shape' => 'CreateAgResponseShape', ],
        ],
        'DescribeAg' => [
            'name' => 'DescribeAg',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'DescribeAgRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgResponseShape', ],
        ],
        'UpdateAg' => [
            'name' => 'UpdateAg',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'UpdateAgRequestShape', ],
            'output' => [ 'shape' => 'UpdateAgResponseShape', ],
        ],
        'DeleteAg' => [
            'name' => 'DeleteAg',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'DeleteAgRequestShape', ],
            'output' => [ 'shape' => 'DeleteAgResponseShape', ],
        ],
        'AbandonInstances' => [
            'name' => 'AbandonInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}:abandonInstances',
            ],
            'input' => [ 'shape' => 'AbandonInstancesRequestShape', ],
            'output' => [ 'shape' => 'AbandonInstancesResponseShape', ],
        ],
        'SetInstanceTemplate' => [
            'name' => 'SetInstanceTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}:setInstanceTemplate',
            ],
            'input' => [ 'shape' => 'SetInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceTemplateResponseShape', ],
        ],
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
    ],
    'shapes' => [
        'AvailabilityGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agType' => [ 'type' => 'string', 'locationName' => 'agType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
                'autoScaling' => [ 'type' => 'boolean', 'locationName' => 'autoScaling', ],
                'configurationType' => [ 'type' => 'string', 'locationName' => 'configurationType', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'SetInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeAgsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAgsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAgResultShape' => [
            'type' => 'structure',
            'members' => [
                'ag' =>  [ 'shape' => 'AvailabilityGroup', ],
            ],
        ],
        'UpdateAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'AbandonInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'CreateAgResultShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DeleteAgResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agName' => [ 'type' => 'string', 'locationName' => 'agName', ],
                'agType' => [ 'type' => 'string', 'locationName' => 'agType', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configurationType' => [ 'type' => 'string', 'locationName' => 'configurationType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AbandonInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAgsResultShape' => [
            'type' => 'structure',
            'members' => [
                'ags' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailabilityGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAgResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAgsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AbandonInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
