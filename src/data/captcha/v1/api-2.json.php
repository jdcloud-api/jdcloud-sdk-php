<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'captcha',
        'protocol' => 'json',
//        'serviceFullName' => 'captcha',
//        'serviceId' => 'captcha',
    ],
    'operations' => [
        'GetSessionId' => [
            'name' => 'GetSessionId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/captcha:getsessionid',
            ],
            'input' => [ 'shape' => 'GetSessionIdRequestShape', ],
            'output' => [ 'shape' => 'GetSessionIdResponseShape', ],
        ],
        'VerifyToken' => [
            'name' => 'VerifyToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/captcha:verifytoken',
            ],
            'input' => [ 'shape' => 'VerifyTokenRequestShape', ],
            'output' => [ 'shape' => 'VerifyTokenResponseShape', ],
        ],
    ],
    'shapes' => [
        'App' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'long', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'appOs' => [ 'type' => 'string', 'locationName' => 'appOs', ],
                'androidPkgName' => [ 'type' => 'string', 'locationName' => 'androidPkgName', ],
                'iosBundleId' => [ 'type' => 'string', 'locationName' => 'iosBundleId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'sceneCount' => [ 'type' => 'integer', 'locationName' => 'sceneCount', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SessionDataResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'VerifyData' => [
            'type' => 'structure',
            'members' => [
                'verifyToken' => [ 'type' => 'string', 'locationName' => 'verifyToken', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'appId' => [ 'type' => 'integer', 'locationName' => 'appId', ],
                'sceneId' => [ 'type' => 'integer', 'locationName' => 'sceneId', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'clientType' => [ 'type' => 'string', 'locationName' => 'clientType', ],
                'clientVersion' => [ 'type' => 'string', 'locationName' => 'clientVersion', ],
            ],
        ],
        'SessionData' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'long', 'locationName' => 'appId', ],
                'sceneId' => [ 'type' => 'long', 'locationName' => 'sceneId', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'fingerPrint' => [ 'type' => 'string', 'locationName' => 'fingerPrint', ],
                'clientType' => [ 'type' => 'string', 'locationName' => 'clientType', ],
                'clientVersion' => [ 'type' => 'string', 'locationName' => 'clientVersion', ],
            ],
        ],
        'VerifyDataResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
            ],
        ],
        'OrderInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'validity' => [ 'type' => 'string', 'locationName' => 'validity', ],
                'specs' => [ 'type' => 'string', 'locationName' => 'specs', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
                'totalFee' => [ 'type' => 'string', 'locationName' => 'totalFee', ],
                'payTime' => [ 'type' => 'string', 'locationName' => 'payTime', ],
            ],
        ],
        'ApplicationInfo' => [
            'type' => 'structure',
            'members' => [
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
            ],
        ],
        'PackInfo' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'from' => [ 'type' => 'integer', 'locationName' => 'from', ],
                'totalAmount' => [ 'type' => 'string', 'locationName' => 'totalAmount', ],
                'balanceAmount' => [ 'type' => 'string', 'locationName' => 'balanceAmount', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'packId' => [ 'type' => 'string', 'locationName' => 'packId', ],
            ],
        ],
        'Scene' => [
            'type' => 'structure',
            'members' => [
                'sceneId' => [ 'type' => 'long', 'locationName' => 'sceneId', ],
                'sceneSecret' => [ 'type' => 'string', 'locationName' => 'sceneSecret', ],
                'appId' => [ 'type' => 'long', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'sceneName' => [ 'type' => 'string', 'locationName' => 'sceneName', ],
                'sceneType' => [ 'type' => 'string', 'locationName' => 'sceneType', ],
                'sceneAvgQps' => [ 'type' => 'integer', 'locationName' => 'sceneAvgQps', ],
                'sceneMaxQps' => [ 'type' => 'integer', 'locationName' => 'sceneMaxQps', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'GetPassRateDataTrendReq' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'appIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'sceneIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'GetDataStatementReq' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'requestType' => [ 'type' => 'string', 'locationName' => 'requestType', ],
                'appIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'sceneIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
            ],
        ],
        'DataOverview' => [
            'type' => 'structure',
            'members' => [
                'appCount' => [ 'type' => 'integer', 'locationName' => 'appCount', ],
                'sceneCount' => [ 'type' => 'integer', 'locationName' => 'sceneCount', ],
                'requestCount' => [ 'type' => 'integer', 'locationName' => 'requestCount', ],
                'requestCountPre' => [ 'type' => 'integer', 'locationName' => 'requestCountPre', ],
                'passCount' => [ 'type' => 'integer', 'locationName' => 'passCount', ],
                'passCountPre' => [ 'type' => 'integer', 'locationName' => 'passCountPre', ],
                'blockCount' => [ 'type' => 'integer', 'locationName' => 'blockCount', ],
                'blockCountPre' => [ 'type' => 'integer', 'locationName' => 'blockCountPre', ],
            ],
        ],
        'GetDataOverviewReq' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'appIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'sceneIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'CountData' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'rate' => [ 'type' => 'double', 'locationName' => 'rate', ],
            ],
        ],
        'DataStatement' => [
            'type' => 'structure',
            'members' => [
                'timeStr' => [ 'type' => 'string', 'locationName' => 'timeStr', ],
                'requestCount' => [ 'type' => 'integer', 'locationName' => 'requestCount', ],
                'silentCount' => [ 'type' => 'integer', 'locationName' => 'silentCount', ],
                'silentPassCount' => [ 'type' => 'integer', 'locationName' => 'silentPassCount', ],
                'silentBlockCount' => [ 'type' => 'integer', 'locationName' => 'silentBlockCount', ],
                'captchaCount' => [ 'type' => 'integer', 'locationName' => 'captchaCount', ],
                'captchaPassCount' => [ 'type' => 'integer', 'locationName' => 'captchaPassCount', ],
                'captchaBlockCount' => [ 'type' => 'integer', 'locationName' => 'captchaBlockCount', ],
                'passRate' => [ 'type' => 'double', 'locationName' => 'passRate', ],
                'silentPassRate' => [ 'type' => 'double', 'locationName' => 'silentPassRate', ],
                'captchaPassRate' => [ 'type' => 'double', 'locationName' => 'captchaPassRate', ],
            ],
        ],
        'GetRequestDataTrendReq' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'requestType' => [ 'type' => 'string', 'locationName' => 'requestType', ],
                'appIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'sceneIds' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'Tactics' => [
            'type' => 'structure',
            'members' => [
                'sceneId' => [ 'type' => 'long', 'locationName' => 'sceneId', ],
                'appId' => [ 'type' => 'long', 'locationName' => 'appId', ],
                'tacticsType' => [ 'type' => 'integer', 'locationName' => 'tacticsType', ],
                'suspiciousRiskConfig' =>  [ 'shape' => 'RiskConfig', ],
                'abandonRiskConfig' =>  [ 'shape' => 'RiskConfig', ],
            ],
        ],
        'Captcha' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'tp' => [ 'type' => 'integer', 'locationName' => 'tp', ],
            ],
        ],
        'Label' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dtcId' => [ 'type' => 'integer', 'locationName' => 'dtcId', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
            ],
        ],
        'RiskConfig' => [
            'type' => 'structure',
            'members' => [
                'risk_labels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'captcha_type' => [ 'type' => 'integer', 'locationName' => 'captcha_type', ],
            ],
        ],
        'GetSessionIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SessionDataResp', ],
            ],
        ],
        'GetSessionIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSessionIdResultShape', ],
            ],
        ],
        'VerifyTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'VerifyDataResp', ],
            ],
        ],
        'VerifyTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'verifyToken' => [ 'type' => 'string', 'locationName' => 'verifyToken', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'appId' => [ 'type' => 'long', 'locationName' => 'appId', ],
                'sceneId' => [ 'type' => 'long', 'locationName' => 'sceneId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'fingerPrint' => [ 'type' => 'string', 'locationName' => 'fingerPrint', ],
                'clientType' => [ 'type' => 'string', 'locationName' => 'clientType', ],
                'clientVersion' => [ 'type' => 'string', 'locationName' => 'clientVersion', ],
            ],
        ],
        'VerifyTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'VerifyTokenResultShape', ],
            ],
        ],
        'GetSessionIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'long', 'locationName' => 'appId', ],
                'sceneId' => [ 'type' => 'long', 'locationName' => 'sceneId', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'fingerPrint' => [ 'type' => 'string', 'locationName' => 'fingerPrint', ],
                'clientType' => [ 'type' => 'string', 'locationName' => 'clientType', ],
                'clientVersion' => [ 'type' => 'string', 'locationName' => 'clientVersion', ],
            ],
        ],
    ],
];
