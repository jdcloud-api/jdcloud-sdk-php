<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotcard',
        'protocol' => 'json',
//        'serviceFullName' => 'iotcard',
//        'serviceId' => 'iotcard',
    ],
    'operations' => [
        'GprsStatus' => [
            'name' => 'GprsStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/gprsStatus',
            ],
            'input' => [ 'shape' => 'GprsStatusRequestShape', ],
            'output' => [ 'shape' => 'GprsStatusResponseShape', ],
        ],
        'OnOffStatus' => [
            'name' => 'OnOffStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/onOffStatus',
            ],
            'input' => [ 'shape' => 'OnOffStatusRequestShape', ],
            'output' => [ 'shape' => 'OnOffStatusResponseShape', ],
        ],
        'LifeStatus' => [
            'name' => 'LifeStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/lifeStatus',
            ],
            'input' => [ 'shape' => 'LifeStatusRequestShape', ],
            'output' => [ 'shape' => 'LifeStatusResponseShape', ],
        ],
        'GprsRealtimeInfo' => [
            'name' => 'GprsRealtimeInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/gprsRealtimeInfo',
            ],
            'input' => [ 'shape' => 'GprsRealtimeInfoRequestShape', ],
            'output' => [ 'shape' => 'GprsRealtimeInfoResponseShape', ],
        ],
        'OpenIotCard' => [
            'name' => 'OpenIotCard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/openIotCard',
            ],
            'input' => [ 'shape' => 'OpenIotCardRequestShape', ],
            'output' => [ 'shape' => 'OpenIotCardResponseShape', ],
        ],
        'CloseIotCard' => [
            'name' => 'CloseIotCard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/closeIotCard',
            ],
            'input' => [ 'shape' => 'CloseIotCardRequestShape', ],
            'output' => [ 'shape' => 'CloseIotCardResponseShape', ],
        ],
        'OpenIotFlow' => [
            'name' => 'OpenIotFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/openIotFlow',
            ],
            'input' => [ 'shape' => 'OpenIotFlowRequestShape', ],
            'output' => [ 'shape' => 'OpenIotFlowResponseShape', ],
        ],
        'CloseIotFlow' => [
            'name' => 'CloseIotFlow',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/closeIotFlow',
            ],
            'input' => [ 'shape' => 'CloseIotFlowRequestShape', ],
            'output' => [ 'shape' => 'CloseIotFlowResponseShape', ],
        ],
    ],
    'shapes' => [
        'OperationIotCardResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GprsStatusResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'onlinestatus' => [ 'type' => 'string', 'locationName' => 'onlinestatus', ],
            ],
        ],
        'OnOffStatusResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'LifeStatusResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'GprsRealtimeInfoResp' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'string', 'locationName' => 'total', ],
                'used' => [ 'type' => 'string', 'locationName' => 'used', ],
            ],
        ],
        'OpenIotCardResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotCardResp', ], ],
            ],
        ],
        'CloseIotCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsRealtimeInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GprsRealtimeInfoResp', ],
            ],
        ],
        'GprsStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CloseIotCardResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotCardResp', ], ],
            ],
        ],
        'OpenIotFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenIotFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OnOffStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GprsStatusResp', ],
            ],
        ],
        'GprsStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GprsStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenIotCardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenIotCardResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LifeStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LifeStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OnOffStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OnOffStatusResp', ],
            ],
        ],
        'CloseIotFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseIotFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenIotFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CloseIotCardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseIotCardResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GprsRealtimeInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GprsRealtimeInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenIotFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotCardResp', ], ],
            ],
        ],
        'LifeStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'LifeStatusResp', ],
            ],
        ],
        'CloseIotFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OnOffStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OnOffStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LifeStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CloseIotFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotCardResp', ], ],
            ],
        ],
        'GprsRealtimeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OpenIotCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
