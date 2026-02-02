<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cmp',
        'protocol' => 'json',
//        'serviceFullName' => 'cmp',
//        'serviceId' => 'cmp',
    ],
    'operations' => [
        'DescribeMaintenancePolicies' => [
            'name' => 'DescribeMaintenancePolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/maintenancePolicies',
            ],
            'input' => [ 'shape' => 'DescribeMaintenancePoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribeMaintenancePoliciesResponseShape', ],
        ],
        'CreateMaintenancePolicy' => [
            'name' => 'CreateMaintenancePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/maintenancePolicies',
            ],
            'input' => [ 'shape' => 'CreateMaintenancePolicyRequestShape', ],
            'output' => [ 'shape' => 'CreateMaintenancePolicyResponseShape', ],
        ],
        'ModifyMaintenancePolicy' => [
            'name' => 'ModifyMaintenancePolicy',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/maintenancePolicies/{maintenancePolicyId}',
            ],
            'input' => [ 'shape' => 'ModifyMaintenancePolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyMaintenancePolicyResponseShape', ],
        ],
        'DeleteMaintenancePolicy' => [
            'name' => 'DeleteMaintenancePolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/maintenancePolicies/{maintenancePolicyId}',
            ],
            'input' => [ 'shape' => 'DeleteMaintenancePolicyRequestShape', ],
            'output' => [ 'shape' => 'DeleteMaintenancePolicyResponseShape', ],
        ],
        'AssociateMaintenancePolicy' => [
            'name' => 'AssociateMaintenancePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/maintenancePolicies/{maintenancePolicyId}:associateInstance',
            ],
            'input' => [ 'shape' => 'AssociateMaintenancePolicyRequestShape', ],
            'output' => [ 'shape' => 'AssociateMaintenancePolicyResponseShape', ],
        ],
        'DisassociateMaintenancePolicy' => [
            'name' => 'DisassociateMaintenancePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/maintenancePolicies/{maintenancePolicyId}:disassociateInstance',
            ],
            'input' => [ 'shape' => 'DisassociateMaintenancePolicyRequestShape', ],
            'output' => [ 'shape' => 'DisassociateMaintenancePolicyResponseShape', ],
        ],
        'DescribeMaintenanceEvents' => [
            'name' => 'DescribeMaintenanceEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/maintenanceEvents',
            ],
            'input' => [ 'shape' => 'DescribeMaintenanceEventsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMaintenanceEventsResponseShape', ],
        ],
        'CreateCustomEventsOnResource' => [
            'name' => 'CreateCustomEventsOnResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/maintenanceEvents',
            ],
            'input' => [ 'shape' => 'CreateCustomEventsOnResourceRequestShape', ],
            'output' => [ 'shape' => 'CreateCustomEventsOnResourceResponseShape', ],
        ],
        'ModifyMaintenanceEvent' => [
            'name' => 'ModifyMaintenanceEvent',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/maintenanceEvents/{eventId}',
            ],
            'input' => [ 'shape' => 'ModifyMaintenanceEventRequestShape', ],
            'output' => [ 'shape' => 'ModifyMaintenanceEventResponseShape', ],
        ],
        'AuthorizeEvent' => [
            'name' => 'AuthorizeEvent',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/maintenanceEvents/{eventId}:authorizeEvent',
            ],
            'input' => [ 'shape' => 'AuthorizeEventRequestShape', ],
            'output' => [ 'shape' => 'AuthorizeEventResponseShape', ],
        ],
        'RecommendedInstanceTypes' => [
            'name' => 'RecommendedInstanceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/recommendedInstanceTypes',
            ],
            'input' => [ 'shape' => 'RecommendedInstanceTypesRequestShape', ],
            'output' => [ 'shape' => 'RecommendedInstanceTypesResponseShape', ],
        ],
    ],
    'shapes' => [
        'MaintenanceEvent' => [
            'type' => 'structure',
            'members' => [
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
                'eventState' => [ 'type' => 'string', 'locationName' => 'eventState', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'maintenancePolicyType' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyType', ],
                'maintenancePolicyOperate' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyOperate', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'deadlineTime' => [ 'type' => 'string', 'locationName' => 'deadlineTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
                'eventOperateLog' =>  [ 'shape' => 'EventOperateLog', ],
            ],
        ],
        'EventOperateLog' => [
            'type' => 'structure',
            'members' => [
                'operateTime' => [ 'type' => 'string', 'locationName' => 'operateTime', ],
                'maintenancePolicySnapshot' =>  [ 'shape' => 'MaintenancePolicy', ],
            ],
        ],
        'MaintenancePolicy' => [
            'type' => 'structure',
            'members' => [
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
                'maintenancePolicyName' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyName', ],
                'maintenancePolicyType' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyType', ],
                'maintenancePolicyOperate' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyOperate', ],
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RecommendedInstanceTypeItem' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'recommendedInstanceType' => [ 'type' => 'string', 'locationName' => 'recommendedInstanceType', ],
            ],
        ],
        'DescribeMaintenancePoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RecommendedInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RecommendedInstanceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCustomEventsOnResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'DisassociateMaintenancePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteMaintenancePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMaintenanceEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMaintenanceEventsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMaintenancePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
            ],
        ],
        'ModifyMaintenanceEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'eventState' => [ 'type' => 'string', 'locationName' => 'eventState', ],
                'instanceType' => [ 'type' => '', 'locationName' => 'instanceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'AssociateMaintenancePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyMaintenanceEventResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AuthorizeEventResponseShape' => [
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
        'DescribeMaintenancePoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'maintenancePolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'MaintenancePolicy', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'AuthorizeEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
            ],
        ],
        'DescribeMaintenancePoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMaintenancePoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCustomEventsOnResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCustomEventsOnResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMaintenanceEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceEvents' => [ 'type' => 'list', 'member' => [ 'shape' => 'MaintenanceEvent', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateMaintenancePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
            ],
        ],
        'RecommendedInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateMaintenancePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maintenancePolicyName' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyName', ],
                'maintenancePolicyType' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyType', ],
                'maintenancePolicyOperate' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyOperate', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyMaintenancePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maintenancePolicyName' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
            ],
        ],
        'ModifyMaintenancePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyMaintenancePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMaintenanceEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyMaintenanceEventResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateMaintenancePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AuthorizeEventResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteMaintenancePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateMaintenancePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
            ],
        ],
        'RecommendedInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'recommendedInstanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendedInstanceTypeItem', ], ],
            ],
        ],
        'ModifyMaintenancePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
            ],
        ],
        'CreateCustomEventsOnResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateMaintenancePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateMaintenancePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssociateMaintenancePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'maintenancePolicyId' => [ 'type' => 'string', 'locationName' => 'maintenancePolicyId', ],
            ],
        ],
        'DisassociateMaintenancePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
