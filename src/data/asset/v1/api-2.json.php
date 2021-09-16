<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'asset',
        'protocol' => 'json',
//        'serviceFullName' => 'asset',
//        'serviceId' => 'asset',
    ],
    'operations' => [
        'DescribeAccountAmount' => [
            'name' => 'DescribeAccountAmount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/assets:describeAccountAmount',
            ],
            'input' => [ 'shape' => 'DescribeAccountAmountRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountAmountResponseShape', ],
        ],
        'ModifyBalanceWarningInfo' => [
            'name' => 'ModifyBalanceWarningInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/assets:modifyBalanceWarningInfo',
            ],
            'input' => [ 'shape' => 'ModifyBalanceWarningInfoRequestShape', ],
            'output' => [ 'shape' => 'ModifyBalanceWarningInfoResponseShape', ],
        ],
    ],
    'shapes' => [
        'BalanceWarningInfoVo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'threshold' => [ 'type' => 'string', 'locationName' => 'threshold', ],
            ],
        ],
        'BalanceWarningStatusVo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'BalanceWarningThresholdVo' => [
            'type' => 'structure',
            'members' => [
                'threshold' => [ 'type' => 'string', 'locationName' => 'threshold', ],
            ],
        ],
        'BankInfoVo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'OffLineRemittanceBillInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'remittorAccount' => [ 'type' => 'string', 'locationName' => 'remittorAccount', ],
                'remittorBankAccount' => [ 'type' => 'string', 'locationName' => 'remittorBankAccount', ],
                'remitAmount' => [ 'type' => 'string', 'locationName' => 'remitAmount', ],
                'remitBankName' => [ 'type' => 'string', 'locationName' => 'remitBankName', ],
                'remitTime' => [ 'type' => 'string', 'locationName' => 'remitTime', ],
                'contactsPhone' => [ 'type' => 'string', 'locationName' => 'contactsPhone', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'remitPicture' => [ 'type' => 'string', 'locationName' => 'remitPicture', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'claId' => [ 'type' => 'string', 'locationName' => 'claId', ],
                'erpOrderId' => [ 'type' => 'string', 'locationName' => 'erpOrderId', ],
                'createBeginTime' => [ 'type' => 'string', 'locationName' => 'createBeginTime', ],
                'createEndTime' => [ 'type' => 'string', 'locationName' => 'createEndTime', ],
            ],
        ],
        'OperatingStatement' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'tradeNumber' => [ 'type' => 'string', 'locationName' => 'tradeNumber', ],
                'tradeType' => [ 'type' => 'string', 'locationName' => 'tradeType', ],
                'tradeAmount' => [ 'type' => 'string', 'locationName' => 'tradeAmount', ],
                'tradeStatus' => [ 'type' => 'string', 'locationName' => 'tradeStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'availableAmount' => [ 'type' => 'string', 'locationName' => 'availableAmount', ],
            ],
        ],
        'OperatingStatementVo' => [
            'type' => 'structure',
            'members' => [
                'tradeType' => [ 'type' => 'string', 'locationName' => 'tradeType', ],
                'tradeStatus' => [ 'type' => 'string', 'locationName' => 'tradeStatus', ],
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageIndex' => [ 'type' => 'string', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'string', 'locationName' => 'pageSize', ],
            ],
        ],
        'PageInfoVo' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalRecord' => [ 'type' => 'integer', 'locationName' => 'totalRecord', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'PayTypeVo' => [
            'type' => 'structure',
            'members' => [
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'isEnable' => [ 'type' => 'string', 'locationName' => 'isEnable', ],
            ],
        ],
        'RechargeVo' => [
            'type' => 'structure',
            'members' => [
                'rechargeType' => [ 'type' => 'string', 'locationName' => 'rechargeType', ],
                'rechargeAmount' => [ 'type' => 'string', 'locationName' => 'rechargeAmount', ],
                'bankCode' => [ 'type' => 'string', 'locationName' => 'bankCode', ],
            ],
        ],
        'ReduceBalanceParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'currentBalance' => [ 'type' => 'string', 'locationName' => 'currentBalance', ],
                'reducedAmount' => [ 'type' => 'string', 'locationName' => 'reducedAmount', ],
                'reducedReason' => [ 'type' => 'string', 'locationName' => 'reducedReason', ],
            ],
        ],
        'Voucher' => [
            'type' => 'structure',
            'members' => [
                'cashingFee' => [ 'type' => 'double', 'locationName' => 'cashingFee', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'erpOrderId' => [ 'type' => 'string', 'locationName' => 'erpOrderId', ],
                'fee' => [ 'type' => 'double', 'locationName' => 'fee', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'paymentChannel' => [ 'type' => 'integer', 'locationName' => 'paymentChannel', ],
                'paymentNumber' => [ 'type' => 'string', 'locationName' => 'paymentNumber', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'rechargeType' => [ 'type' => 'integer', 'locationName' => 'rechargeType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'usableFee' => [ 'type' => 'double', 'locationName' => 'usableFee', ],
                'userAllFee' => [ 'type' => 'double', 'locationName' => 'userAllFee', ],
            ],
        ],
        'WarnedGroupVo' => [
            'type' => 'structure',
            'members' => [
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'WarnedUserVo' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'WarningInfoVo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'threshold' => [ 'type' => 'string', 'locationName' => 'threshold', ],
            ],
        ],
        'WithdrawAmountVo' => [
            'type' => 'structure',
            'members' => [
                'amount' => [ 'type' => 'string', 'locationName' => 'amount', ],
            ],
        ],
        'WithdrawalsCondition' => [
            'type' => 'structure',
            'members' => [
                'beginTime' => [ 'type' => 'string', 'locationName' => 'beginTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
            ],
        ],
        'WithdrawalsVo' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'fee' => [ 'type' => 'double', 'locationName' => 'fee', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'usableFee' => [ 'type' => 'double', 'locationName' => 'usableFee', ],
                'withdrawalsId' => [ 'type' => 'string', 'locationName' => 'withdrawalsId', ],
            ],
        ],
        'ModifyBalanceWarningInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'ModifyBalanceWarningInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'balanceWarningInfoVo' =>  [ 'shape' => 'BalanceWarningInfoVo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAccountAmountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAccountAmountResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalAmount' => [ 'type' => 'string', 'locationName' => 'totalAmount', ],
                'availableAmount' => [ 'type' => 'string', 'locationName' => 'availableAmount', ],
                'frozenAmount' => [ 'type' => 'string', 'locationName' => 'frozenAmount', ],
                'enableWithdrawAmount' => [ 'type' => 'string', 'locationName' => 'enableWithdrawAmount', ],
                'withdrawingAmount' => [ 'type' => 'string', 'locationName' => 'withdrawingAmount', ],
            ],
        ],
        'DescribeAccountAmountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountAmountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBalanceWarningInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyBalanceWarningInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ReceiptsResult' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'fee' => [ 'type' => 'double', 'locationName' => 'fee', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'trade_no' => [ 'type' => 'string', 'locationName' => 'trade_no', ],
                'trade_type' => [ 'type' => 'integer', 'locationName' => 'trade_type', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'usableFee' => [ 'type' => 'double', 'locationName' => 'usableFee', ],
            ],
        ],
    ],
];
