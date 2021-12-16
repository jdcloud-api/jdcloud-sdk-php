<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'iotlink',
        'protocol' => 'json',
//        'serviceFullName' => 'iotlink',
//        'serviceId' => 'iotlink',
    ],
    'operations' => [
        'GprsStatusByIMSI' => [
            'name' => 'GprsStatusByIMSI',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/gprsStatusByIMSI',
            ],
            'input' => [ 'shape' => 'GprsStatusByIMSIRequestShape', ],
            'output' => [ 'shape' => 'GprsStatusByIMSIResponseShape', ],
        ],
        'OnOffStatusByIMSI' => [
            'name' => 'OnOffStatusByIMSI',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/onOffStatusByIMSI',
            ],
            'input' => [ 'shape' => 'OnOffStatusByIMSIRequestShape', ],
            'output' => [ 'shape' => 'OnOffStatusByIMSIResponseShape', ],
        ],
        'LifeStatusByIMSI' => [
            'name' => 'LifeStatusByIMSI',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/lifeStatusByIMSI',
            ],
            'input' => [ 'shape' => 'LifeStatusByIMSIRequestShape', ],
            'output' => [ 'shape' => 'LifeStatusByIMSIResponseShape', ],
        ],
        'GprsRealtimeInfoByIMSI' => [
            'name' => 'GprsRealtimeInfoByIMSI',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/gprsRealtimeInfoByIMSI',
            ],
            'input' => [ 'shape' => 'GprsRealtimeInfoByIMSIRequestShape', ],
            'output' => [ 'shape' => 'GprsRealtimeInfoByIMSIResponseShape', ],
        ],
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
        'Search' => [
            'name' => 'Search',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/search',
            ],
            'input' => [ 'shape' => 'SearchRequestShape', ],
            'output' => [ 'shape' => 'SearchResponseShape', ],
        ],
        'Operate' => [
            'name' => 'Operate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/operate',
            ],
            'input' => [ 'shape' => 'OperateRequestShape', ],
            'output' => [ 'shape' => 'OperateResponseShape', ],
        ],
    ],
    'shapes' => [
        'LifeStatusResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'OperationIotlinkResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'OnOffStatusResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
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
        'GprsStatusResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'onlinestatus' => [ 'type' => 'string', 'locationName' => 'onlinestatus', ],
            ],
        ],
        'OnOffStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OnOffStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GprsRealtimeInfoByIMSIRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
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
        'GprsStatusByIMSIResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GprsStatusByIMSIResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LifeStatusByIMSIResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'LifeStatusResp', ],
            ],
        ],
        'LifeStatusByIMSIResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LifeStatusByIMSIResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenIotFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotlinkResp', ], ],
            ],
        ],
        'CloseIotFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotlinkResp', ], ],
            ],
        ],
        'LifeStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CloseIotCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsRealtimeInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GprsRealtimeInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OperateResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'LifeStatusByIMSIRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OnOffStatusByIMSIResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'OnOffStatusResp', ],
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
        'SearchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestType' => [ 'type' => 'string', 'locationName' => 'requestType', ],
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OpenIotCardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenIotCardResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenIotFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenIotFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OnOffStatusByIMSIRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsRealtimeInfoByIMSIResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GprsRealtimeInfoResp', ],
            ],
        ],
        'OpenIotFlowRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SearchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SearchResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OpenIotCardResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotlinkResp', ], ],
            ],
        ],
        'CloseIotCardResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotlinkResp', ], ],
            ],
        ],
        'CloseIotFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseIotFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GprsRealtimeInfoByIMSIResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GprsRealtimeInfoByIMSIResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GprsStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GprsStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OnOffStatusByIMSIResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OnOffStatusByIMSIResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloseIotCardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseIotCardResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OperateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OperateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'GprsStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsRealtimeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsStatusByIMSIRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'LifeStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LifeStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SearchResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'OperateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestType' => [ 'type' => 'string', 'locationName' => 'requestType', ],
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OnOffStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
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
        'OpenIotCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GprsStatusByIMSIResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GprsStatusResp', ],
            ],
        ],
    ],
];
