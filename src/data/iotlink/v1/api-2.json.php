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
        'OrdinaryRealNameClear' => [
            'name' => 'OrdinaryRealNameClear',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/ordinaryRealNameClear',
            ],
            'input' => [ 'shape' => 'OrdinaryRealNameClearRequestShape', ],
            'output' => [ 'shape' => 'OrdinaryRealNameClearResponseShape', ],
        ],
        'CardBindStatus' => [
            'name' => 'CardBindStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cardBindStatus',
            ],
            'input' => [ 'shape' => 'CardBindStatusRequestShape', ],
            'output' => [ 'shape' => 'CardBindStatusResponseShape', ],
        ],
        'GetOnlineStatus' => [
            'name' => 'GetOnlineStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/getOnlineStatus',
            ],
            'input' => [ 'shape' => 'GetOnlineStatusRequestShape', ],
            'output' => [ 'shape' => 'GetOnlineStatusResponseShape', ],
        ],
        'QueryValidPeriodForNB' => [
            'name' => 'QueryValidPeriodForNB',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryValidPeriodForNB',
            ],
            'input' => [ 'shape' => 'QueryValidPeriodForNBRequestShape', ],
            'output' => [ 'shape' => 'QueryValidPeriodForNBResponseShape', ],
        ],
        'QueryDayHistoryTraffic' => [
            'name' => 'QueryDayHistoryTraffic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryDayHistoryTraffic',
            ],
            'input' => [ 'shape' => 'QueryDayHistoryTrafficRequestShape', ],
            'output' => [ 'shape' => 'QueryDayHistoryTrafficResponseShape', ],
        ],
        'SimRealNameReg' => [
            'name' => 'SimRealNameReg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/simRealNameReg',
            ],
            'input' => [ 'shape' => 'SimRealNameRegRequestShape', ],
            'output' => [ 'shape' => 'SimRealNameRegResponseShape', ],
        ],
        'QueryTrafficByDate' => [
            'name' => 'QueryTrafficByDate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/queryTrafficByDate',
            ],
            'input' => [ 'shape' => 'QueryTrafficByDateRequestShape', ],
            'output' => [ 'shape' => 'QueryTrafficByDateResponseShape', ],
        ],
        'SpeedLimitAction' => [
            'name' => 'SpeedLimitAction',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/speedLimitAction',
            ],
            'input' => [ 'shape' => 'SpeedLimitActionRequestShape', ],
            'output' => [ 'shape' => 'SpeedLimitActionResponseShape', ],
        ],
        'CardInfo' => [
            'name' => 'CardInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cardInfo',
            ],
            'input' => [ 'shape' => 'CardInfoRequestShape', ],
            'output' => [ 'shape' => 'CardInfoResponseShape', ],
        ],
        'RealNameQueryIot' => [
            'name' => 'RealNameQueryIot',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/realNameQueryIot',
            ],
            'input' => [ 'shape' => 'RealNameQueryIotRequestShape', ],
            'output' => [ 'shape' => 'RealNameQueryIotResponseShape', ],
        ],
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
        'RequestServActiveResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'RealNameQueryIotResp' => [
            'type' => 'structure',
            'members' => [
                'activeTime' => [ 'type' => 'string', 'locationName' => 'activeTime', ],
                'prodStatusName' => [ 'type' => 'string', 'locationName' => 'prodStatusName', ],
                'certNumber' => [ 'type' => 'string', 'locationName' => 'certNumber', ],
                'number' => [ 'type' => 'string', 'locationName' => 'number', ],
                'authRespCode' => [ 'type' => 'string', 'locationName' => 'authRespCode', ],
                'authRespMsg' => [ 'type' => 'string', 'locationName' => 'authRespMsg', ],
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
        'QueryValidPeriodForNBResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'validPeriod' => [ 'type' => 'string', 'locationName' => 'validPeriod', ],
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
        'CardBindStatusResp' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'errorDes' => [ 'type' => 'string', 'locationName' => 'errorDes', ],
                'sepTime' => [ 'type' => 'string', 'locationName' => 'sepTime', ],
            ],
        ],
        'CardInfoResp' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'activeTm' => [ 'type' => 'string', 'locationName' => 'activeTm', ],
                'packageExpiredTm' => [ 'type' => 'string', 'locationName' => 'packageExpiredTm', ],
            ],
        ],
        'SimRealNameRegResp' => [
            'type' => 'structure',
            'members' => [
                'busiSeq' => [ 'type' => 'string', 'locationName' => 'busiSeq', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'GetOnlineStatusResp' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'eventTimeStamp' => [ 'type' => 'string', 'locationName' => 'eventTimeStamp', ],
                'provname' => [ 'type' => 'string', 'locationName' => 'provname', ],
                'stopTime' => [ 'type' => 'string', 'locationName' => 'stopTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'QueryDayHistoryTrafficResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
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
        'LifeStatusByIMSIResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LifeStatusByIMSIResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'RealNameQueryIotResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'RealNameQueryIotResp', ],
            ],
        ],
        'CloseIotCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CardInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'CardInfoResp', ],
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
        'SimRealNameRegResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SimRealNameRegResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetOnlineStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetOnlineStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CardInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'GetOnlineStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GetOnlineStatusResp', ],
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
        'CardBindStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CardBindStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTrafficByDateResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'OpenIotFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OpenIotFlowResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDayHistoryTrafficResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDayHistoryTrafficResultShape', ],
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
        'SearchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SearchResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTrafficByDateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SpeedLimitActionResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'CloseIotFlowResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloseIotFlowResultShape', ],
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
        'GprsStatusByIMSIRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'RealNameQueryIotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OrdinaryRealNameClearRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CardBindStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'iccid' => [ 'type' => 'string', 'locationName' => 'iccid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SimRealNameRegRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryTrafficByDateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTrafficByDateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CardInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CardInfoResultShape', ],
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
        'OpenIotFlowResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotlinkResp', ], ],
            ],
        ],
        'SimRealNameRegResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'SimRealNameRegResp', ],
            ],
        ],
        'CardBindStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'CardBindStatusResp', ],
            ],
        ],
        'RealNameQueryIotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RealNameQueryIotResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDayHistoryTrafficRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'LifeStatusByIMSIRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imsi' => [ 'type' => 'string', 'locationName' => 'imsi', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryValidPeriodForNBResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryValidPeriodForNBResp', ], ],
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
        'SpeedLimitActionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SpeedLimitActionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OrdinaryRealNameClearResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'OrdinaryRealNameClearResultShape', ],
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
        'OpenIotCardResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationIotlinkResp', ], ],
            ],
        ],
        'QueryValidPeriodForNBResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryValidPeriodForNBResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'SpeedLimitActionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'QueryValidPeriodForNBRequestShape' => [
            'type' => 'structure',
            'members' => [
                'requestParam' => [ 'type' => 'string', 'locationName' => 'requestParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'GetOnlineStatusRequestShape' => [
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
        'LifeStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LifeStatusResultShape', ],
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
        'GprsStatusByIMSIResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' =>  [ 'shape' => 'GprsStatusResp', ],
            ],
        ],
        'OrdinaryRealNameClearResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
    ],
];
