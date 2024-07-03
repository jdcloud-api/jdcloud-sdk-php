<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'eid',
        'protocol' => 'json',
//        'serviceFullName' => 'eid',
//        'serviceId' => 'eid',
    ],
    'operations' => [
        'EidScore' => [
            'name' => 'EidScore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/eidScore:check',
            ],
            'input' => [ 'shape' => 'EidScoreRequestShape', ],
            'output' => [ 'shape' => 'EidScoreResponseShape', ],
        ],
        'Vttok' => [
            'name' => 'Vttok',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sdk:vttok',
            ],
            'input' => [ 'shape' => 'VttokRequestShape', ],
            'output' => [ 'shape' => 'VttokResponseShape', ],
        ],
        'Device' => [
            'name' => 'Device',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sdk:device',
            ],
            'input' => [ 'shape' => 'DeviceRequestShape', ],
            'output' => [ 'shape' => 'DeviceResponseShape', ],
        ],
    ],
    'shapes' => [
        'GetPriceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'OrderReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'autoRenewStatus' => [ 'type' => 'string', 'locationName' => 'autoRenewStatus', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'ScoreTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'EidScoreDetail' => [
            'type' => 'structure',
            'members' => [
                'riskTag' => [ 'type' => 'string', 'locationName' => 'riskTag', ],
                'riskCode' => [ 'type' => 'string', 'locationName' => 'riskCode', ],
                'riskClass' => [ 'type' => 'string', 'locationName' => 'riskClass', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfo', ], ],
            ],
        ],
        'LabelSetReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'LabelSwitchReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'LabelInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'LabelDelItem' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'integer', 'locationName' => 'ids', ],
            ],
        ],
        'LabelDelReq' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'shape' => 'LabelDelItem', ], ],
            ],
        ],
        'ModelInfoResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'labelList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelLabelInfoResp', ], ],
            ],
        ],
        'ModelLabelInfoResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'labelName' => [ 'type' => 'string', 'locationName' => 'labelName', ],
                'weights' => [ 'type' => 'integer', 'locationName' => 'weights', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetModelReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'modelLabel' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelLabelReq', ], ],
            ],
        ],
        'ModelLabelReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'labelName' => [ 'type' => 'string', 'locationName' => 'labelName', ],
                'weights' => [ 'type' => 'integer', 'locationName' => 'weights', ],
                'labelAction' => [ 'type' => 'string', 'locationName' => 'labelAction', ],
            ],
        ],
        'GetUserInfoReq' => [
            'type' => 'structure',
            'members' => [
                'following' => [ 'type' => 'string', 'locationName' => 'following', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'PkgOrderDetailObject' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'specs' => [ 'type' => 'string', 'locationName' => 'specs', ],
                'payTime' => [ 'type' => 'string', 'locationName' => 'payTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'totalFee' => [ 'type' => 'double', 'locationName' => 'totalFee', ],
                'favorableFee' => [ 'type' => 'double', 'locationName' => 'favorableFee', ],
                'balanceFee' => [ 'type' => 'double', 'locationName' => 'balanceFee', ],
                'actualFee' => [ 'type' => 'double', 'locationName' => 'actualFee', ],
            ],
        ],
        'Data' => [
            'type' => 'structure',
            'members' => [
                'paidUsersNumber' => [ 'type' => 'integer', 'locationName' => 'paidUsersNumber', ],
                'invalidUsersNumber' => [ 'type' => 'integer', 'locationName' => 'invalidUsersNumber', ],
                'totalOrder' => [ 'type' => 'integer', 'locationName' => 'totalOrder', ],
                'totalIncome' => [ 'type' => 'integer', 'locationName' => 'totalIncome', ],
            ],
        ],
        'ValidUsersTotal' => [
            'type' => 'structure',
            'members' => [
                'paidUsers' => [ 'type' => 'integer', 'locationName' => 'paidUsers', ],
            ],
        ],
        'InvalidUsersTotal' => [
            'type' => 'structure',
            'members' => [
                'paidUsers' => [ 'type' => 'integer', 'locationName' => 'paidUsers', ],
            ],
        ],
        'NewIncUsers' => [
            'type' => 'structure',
            'members' => [
                'paidUsers' => [ 'type' => 'integer', 'locationName' => 'paidUsers', ],
            ],
        ],
        'UserInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'following' => [ 'type' => 'string', 'locationName' => 'following', ],
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
        'PackageInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
            ],
        ],
        'DeviceLineChartReq' => [
            'type' => 'structure',
            'members' => [
                'timeRange' => [ 'type' => 'string', 'locationName' => 'timeRange', ],
                'platform' => [ 'type' => 'string', 'locationName' => 'platform', ],
            ],
        ],
        'TxHeader' => [
            'type' => 'structure',
            'members' => [
                'sYS_HDR_LEN' => [ 'type' => 'string', 'locationName' => 'sYS_HDR_LEN', ],
                'sYS_PKG_VRSN' => [ 'type' => 'string', 'locationName' => 'sYS_PKG_VRSN', ],
                'sYS_TTL_LEN' => [ 'type' => 'string', 'locationName' => 'sYS_TTL_LEN', ],
                'sYS_REQ_SEC_ID' => [ 'type' => 'string', 'locationName' => 'sYS_REQ_SEC_ID', ],
                'sYS_SND_SEC_ID' => [ 'type' => 'string', 'locationName' => 'sYS_SND_SEC_ID', ],
                'sYS_TX_CODE' => [ 'type' => 'string', 'locationName' => 'sYS_TX_CODE', ],
                'sYS_TX_VRSN' => [ 'type' => 'string', 'locationName' => 'sYS_TX_VRSN', ],
                'sYS_TX_TYPE' => [ 'type' => 'string', 'locationName' => 'sYS_TX_TYPE', ],
                'sYS_RESERVED' => [ 'type' => 'string', 'locationName' => 'sYS_RESERVED', ],
                'sYS_EVT_TRACE_ID' => [ 'type' => 'string', 'locationName' => 'sYS_EVT_TRACE_ID', ],
                'sYS_SND_SERIAL_NO' => [ 'type' => 'string', 'locationName' => 'sYS_SND_SERIAL_NO', ],
                'sYS_PKG_TYPE' => [ 'type' => 'string', 'locationName' => 'sYS_PKG_TYPE', ],
                'sYS_IS_ENCRYPTED' => [ 'type' => 'string', 'locationName' => 'sYS_IS_ENCRYPTED', ],
                'sYS_ENCRYPT_TYPE' => [ 'type' => 'string', 'locationName' => 'sYS_ENCRYPT_TYPE', ],
                'sYS_COMPRESS_TYPE' => [ 'type' => 'string', 'locationName' => 'sYS_COMPRESS_TYPE', ],
                'sYS_EMB_MSG_LEN' => [ 'type' => 'string', 'locationName' => 'sYS_EMB_MSG_LEN', ],
                'sYS_REQ_TIME' => [ 'type' => 'string', 'locationName' => 'sYS_REQ_TIME', ],
                'sYS_TIME_LEFT' => [ 'type' => 'string', 'locationName' => 'sYS_TIME_LEFT', ],
                'sYS_PKG_STS_TYPE' => [ 'type' => 'string', 'locationName' => 'sYS_PKG_STS_TYPE', ],
            ],
        ],
        'Common' => [
            'type' => 'structure',
            'members' => [
                'tXN_INSID' => [ 'type' => 'string', 'locationName' => 'tXN_INSID', ],
                'tXN_ITT_CHNL_ID' => [ 'type' => 'string', 'locationName' => 'tXN_ITT_CHNL_ID', ],
                'tXN_ITT_CHNL_CGY_CODE' => [ 'type' => 'string', 'locationName' => 'tXN_ITT_CHNL_CGY_CODE', ],
                'tXN_DT' => [ 'type' => 'string', 'locationName' => 'tXN_DT', ],
                'tXN_TM' => [ 'type' => 'string', 'locationName' => 'tXN_TM', ],
                'tXN_STFF_ID' => [ 'type' => 'string', 'locationName' => 'tXN_STFF_ID', ],
                'mULTI_TENANCY_ID' => [ 'type' => 'string', 'locationName' => 'mULTI_TENANCY_ID', ],
                'lNG_ID' => [ 'type' => 'string', 'locationName' => 'lNG_ID', ],
            ],
        ],
        'TxBody' => [
            'type' => 'structure',
            'members' => [
                'cOMMON' =>  [ 'shape' => 'Common', ],
                'eNTITY' =>  [ 'shape' => 'Entity', ],
            ],
        ],
        'CCBGateWayReq' => [
            'type' => 'structure',
            'members' => [
                'gateWayReq' => [ 'type' => 'string', 'locationName' => 'gateWayReq', ],
            ],
        ],
        'Entity' => [
            'type' => 'structure',
            'members' => [
                'rEQUEST' => [ 'type' => 'string', 'locationName' => 'rEQUEST', ],
                'base64_Ecrp_Txn_Inf' => [ 'type' => 'string', 'locationName' => 'base64_Ecrp_Txn_Inf', ],
                'stm_Chnl_ID' => [ 'type' => 'string', 'locationName' => 'stm_Chnl_ID', ],
                'stm_Chnl_Txn_CD' => [ 'type' => 'string', 'locationName' => 'stm_Chnl_Txn_CD', ],
                'sYSTEM_TIME' => [ 'type' => 'string', 'locationName' => 'sYSTEM_TIME', ],
            ],
        ],
        'CCBCommonTXReq' => [
            'type' => 'structure',
            'members' => [
                'tX_HEADER' =>  [ 'shape' => 'TxHeader', ],
                'tX_BODY' =>  [ 'shape' => 'TxBody', ],
            ],
        ],
        'CCBCommonTXResp' => [
            'type' => 'structure',
            'members' => [
                'tX_HEADER' =>  [ 'shape' => 'TxHeader', ],
                'tX_BODY' =>  [ 'shape' => 'TxBody', ],
            ],
        ],
        'CCBGateWayResp' => [
            'type' => 'structure',
            'members' => [
                'gateWayResp' => [ 'type' => 'string', 'locationName' => 'gateWayResp', ],
            ],
        ],
        'TopModelResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'CcbSdkPolicyResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'data' =>  [ 'shape' => 'PolicyRespBody', ],
            ],
        ],
        'CCBSdkReportDeviceResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'data' =>  [ 'shape' => 'DeviceRespBody', ],
            ],
        ],
        'PolicyRespBody' => [
            'type' => 'structure',
            'members' => [
                'verifyCode' => [ 'type' => 'string', 'locationName' => 'verifyCode', ],
                'eid' => [ 'type' => 'string', 'locationName' => 'eid', ],
                'tokenTime' => [ 'type' => 'long', 'locationName' => 'tokenTime', ],
                'tokenActTime' => [ 'type' => 'long', 'locationName' => 'tokenActTime', ],
                'isStrategy' => [ 'type' => 'string', 'locationName' => 'isStrategy', ],
                'cltDevice' => [ 'type' => 'string', 'locationName' => 'cltDevice', ],
                'cltManMachine' => [ 'type' => 'string', 'locationName' => 'cltManMachine', ],
                'cltAppList' => [ 'type' => 'string', 'locationName' => 'cltAppList', ],
                'tk' => [ 'type' => 'string', 'locationName' => 'tk', ],
            ],
        ],
        'SdkReq' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'DeviceRespBody' => [
            'type' => 'structure',
            'members' => [
                'tk' => [ 'type' => 'string', 'locationName' => 'tk', ],
                'isStrategy' => [ 'type' => 'string', 'locationName' => 'isStrategy', ],
                'cltTime' => [ 'type' => 'integer', 'locationName' => 'cltTime', ],
                'cltFreq' => [ 'type' => 'integer', 'locationName' => 'cltFreq', ],
                'isCltSensor' => [ 'type' => 'string', 'locationName' => 'isCltSensor', ],
                'tokenTime' => [ 'type' => 'long', 'locationName' => 'tokenTime', ],
                'tokenActTime' => [ 'type' => 'long', 'locationName' => 'tokenActTime', ],
                'eid' => [ 'type' => 'string', 'locationName' => 'eid', ],
                'ise' => [ 'type' => 'string', 'locationName' => 'ise', ],
                'isr' => [ 'type' => 'string', 'locationName' => 'isr', ],
                'ism' => [ 'type' => 'string', 'locationName' => 'ism', ],
                'ish' => [ 'type' => 'string', 'locationName' => 'ish', ],
                'isj' => [ 'type' => 'string', 'locationName' => 'isj', ],
            ],
        ],
        'DeviceDataRiskOfDay' => [
            'type' => 'structure',
            'members' => [
                'allDevice' => [ 'type' => 'integer', 'locationName' => 'allDevice', ],
                'normal' => [ 'type' => 'integer', 'locationName' => 'normal', ],
                'tuoJiGua' => [ 'type' => 'integer', 'locationName' => 'tuoJiGua', ],
                'forgery' => [ 'type' => 'integer', 'locationName' => 'forgery', ],
                'cloudPhone' => [ 'type' => 'integer', 'locationName' => 'cloudPhone', ],
                'root' => [ 'type' => 'integer', 'locationName' => 'root', ],
                'hook' => [ 'type' => 'integer', 'locationName' => 'hook', ],
                'duoKai' => [ 'type' => 'integer', 'locationName' => 'duoKai', ],
                'moNi' => [ 'type' => 'integer', 'locationName' => 'moNi', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'DeviceDataRisk' => [
            'type' => 'structure',
            'members' => [
                'allDevice' => [ 'type' => 'integer', 'locationName' => 'allDevice', ],
                'normal' => [ 'type' => 'integer', 'locationName' => 'normal', ],
                'tuoJiGua' => [ 'type' => 'integer', 'locationName' => 'tuoJiGua', ],
                'forgery' => [ 'type' => 'integer', 'locationName' => 'forgery', ],
                'cloudPhone' => [ 'type' => 'integer', 'locationName' => 'cloudPhone', ],
                'root' => [ 'type' => 'integer', 'locationName' => 'root', ],
                'hook' => [ 'type' => 'integer', 'locationName' => 'hook', ],
                'duoKai' => [ 'type' => 'integer', 'locationName' => 'duoKai', ],
                'moNi' => [ 'type' => 'integer', 'locationName' => 'moNi', ],
            ],
        ],
        'DeviceResultResp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'system' => [ 'type' => 'string', 'locationName' => 'system', ],
                'eid' => [ 'type' => 'string', 'locationName' => 'eid', ],
                'riskTag' => [ 'type' => 'string', 'locationName' => 'riskTag', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'DeviceDataRiskOverview' => [
            'type' => 'structure',
            'members' => [
                'allDevice' => [ 'type' => 'integer', 'locationName' => 'allDevice', ],
                'allDevicePercent' => [ 'type' => 'string', 'locationName' => 'allDevicePercent', ],
                'normal' => [ 'type' => 'integer', 'locationName' => 'normal', ],
                'normalPercent' => [ 'type' => 'string', 'locationName' => 'normalPercent', ],
                'tuoJiGua' => [ 'type' => 'integer', 'locationName' => 'tuoJiGua', ],
                'tuoJiGuaPercent' => [ 'type' => 'string', 'locationName' => 'tuoJiGuaPercent', ],
                'forgery' => [ 'type' => 'integer', 'locationName' => 'forgery', ],
                'forgeryPercent' => [ 'type' => 'string', 'locationName' => 'forgeryPercent', ],
                'cloudPhone' => [ 'type' => 'integer', 'locationName' => 'cloudPhone', ],
                'cloudPhonePercent' => [ 'type' => 'string', 'locationName' => 'cloudPhonePercent', ],
                'root' => [ 'type' => 'integer', 'locationName' => 'root', ],
                'rootPercent' => [ 'type' => 'string', 'locationName' => 'rootPercent', ],
                'hook' => [ 'type' => 'integer', 'locationName' => 'hook', ],
                'hookPercent' => [ 'type' => 'string', 'locationName' => 'hookPercent', ],
                'duoKai' => [ 'type' => 'integer', 'locationName' => 'duoKai', ],
                'duoKaiPercent' => [ 'type' => 'string', 'locationName' => 'duoKaiPercent', ],
                'moNi' => [ 'type' => 'integer', 'locationName' => 'moNi', ],
                'moNiPercent' => [ 'type' => 'string', 'locationName' => 'moNiPercent', ],
            ],
        ],
        'DeviceDataRiskOfWeek' => [
            'type' => 'structure',
            'members' => [
                'allDevice' => [ 'type' => 'integer', 'locationName' => 'allDevice', ],
                'normal' => [ 'type' => 'integer', 'locationName' => 'normal', ],
                'tuoJiGua' => [ 'type' => 'integer', 'locationName' => 'tuoJiGua', ],
                'forgery' => [ 'type' => 'integer', 'locationName' => 'forgery', ],
                'cloudPhone' => [ 'type' => 'integer', 'locationName' => 'cloudPhone', ],
                'root' => [ 'type' => 'integer', 'locationName' => 'root', ],
                'hook' => [ 'type' => 'integer', 'locationName' => 'hook', ],
                'duoKai' => [ 'type' => 'integer', 'locationName' => 'duoKai', ],
                'moNi' => [ 'type' => 'integer', 'locationName' => 'moNi', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
            ],
        ],
        'TokenSetReq' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'TokenInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AmountStatistics' => [
            'type' => 'structure',
            'members' => [
                'free' => [ 'type' => 'integer', 'locationName' => 'free', ],
                'charge' => [ 'type' => 'integer', 'locationName' => 'charge', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'UserDetail' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'usedAmount' => [ 'type' => 'double', 'locationName' => 'usedAmount', ],
                'packagesAmount' => [ 'type' => 'integer', 'locationName' => 'packagesAmount', ],
                'tracking' => [ 'type' => 'string', 'locationName' => 'tracking', ],
            ],
        ],
        'EidScoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EidScoreResultShape', ],
            ],
        ],
        'EidScoreResult' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'failMsg' => [ 'type' => 'string', 'locationName' => 'failMsg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'scoreDetail' =>  [ 'shape' => 'EidScoreDetail', ],
            ],
        ],
        'EidScoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScoreTask', ], ],
            ],
        ],
        'EidScoreResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'EidScoreResult', ], ],
            ],
        ],
        'DeviceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'DeviceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'data' =>  [ 'shape' => 'DeviceRespBody', ],
            ],
        ],
        'VttokResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'data' =>  [ 'shape' => 'PolicyRespBody', ],
            ],
        ],
        'VttokRequestShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
    ],
];
