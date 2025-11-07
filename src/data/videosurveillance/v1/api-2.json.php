<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'videosurveillance',
        'protocol' => 'json',
//        'serviceFullName' => 'videosurveillance',
//        'serviceId' => 'videosurveillance',
    ],
    'operations' => [
        'CaptureImage' => [
            'name' => 'CaptureImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/capture/{channelId}',
            ],
            'input' => [ 'shape' => 'CaptureImageRequestShape', ],
            'output' => [ 'shape' => 'CaptureImageResponseShape', ],
        ],
        'DescribeCaptureImageByFileId' => [
            'name' => 'DescribeCaptureImageByFileId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/captureResult/{fileId}',
            ],
            'input' => [ 'shape' => 'DescribeCaptureImageByFileIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeCaptureImageByFileIdResponseShape', ],
        ],
        'DescribeDeviceInfo' => [
            'name' => 'DescribeDeviceInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeDeviceInfo',
            ],
            'input' => [ 'shape' => 'DescribeDeviceInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeDeviceInfoResponseShape', ],
        ],
        'DescribeDevicePageList' => [
            'name' => 'DescribeDevicePageList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeDevicePageList',
            ],
            'input' => [ 'shape' => 'DescribeDevicePageListRequestShape', ],
            'output' => [ 'shape' => 'DescribeDevicePageListResponseShape', ],
        ],
        'StartRecord' => [
            'name' => 'StartRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/record/{channelId}',
            ],
            'input' => [ 'shape' => 'StartRecordRequestShape', ],
            'output' => [ 'shape' => 'StartRecordResponseShape', ],
        ],
        'DescribeRecordResultByTaskId' => [
            'name' => 'DescribeRecordResultByTaskId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/recordResult/{taskId}',
            ],
            'input' => [ 'shape' => 'DescribeRecordResultByTaskIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeRecordResultByTaskIdResponseShape', ],
        ],
    ],
    'shapes' => [
        'CaptureImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'streamType' => [ 'type' => 'integer', 'locationName' => 'streamType', ],
                'channelId' => [ 'type' => 'string', 'locationName' => 'channelId', ],
            ],
        ],
        'CaptureImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileId' => [ 'type' => 'string', 'locationName' => 'fileId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'CaptureImageResult' => [
            'type' => 'structure',
            'members' => [
                'fileId' => [ 'type' => 'string', 'locationName' => 'fileId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'CaptureImageRequest' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'streamType' => [ 'type' => 'integer', 'locationName' => 'streamType', ],
            ],
        ],
        'DescribeCaptureImageByFileIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'fileId' => [ 'type' => 'string', 'locationName' => 'fileId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DescribeCaptureImageByFileIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expireSeconds' => [ 'type' => 'long', 'locationName' => 'expireSeconds', ],
                'fileId' => [ 'type' => 'string', 'locationName' => 'fileId', ],
            ],
        ],
        'CaptureImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CaptureImageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCaptureImageByFileIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCaptureImageByFileIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDevicePageListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDevicePageListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDeviceInfoResult' => [
            'type' => 'structure',
            'members' => [
                'channelId' => [ 'type' => 'string', 'locationName' => 'channelId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'localName' => [ 'type' => 'string', 'locationName' => 'localName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'defence' => [ 'type' => 'integer', 'locationName' => 'defence', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'parentCategory' => [ 'type' => 'string', 'locationName' => 'parentCategory', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'netAddress' => [ 'type' => 'string', 'locationName' => 'netAddress', ],
            ],
        ],
        'DescribeDevicePageListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeDeviceInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'channelId' => [ 'type' => 'string', 'locationName' => 'channelId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
            ],
        ],
        'DescribeDeviceInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDeviceInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDevicePageListResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeDeviceInfoResult', ], ],
            ],
        ],
        'DescribeDeviceInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'channelId' => [ 'type' => 'string', 'locationName' => 'channelId', ],
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'localName' => [ 'type' => 'string', 'locationName' => 'localName', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'defence' => [ 'type' => 'integer', 'locationName' => 'defence', ],
                'isEncrypt' => [ 'type' => 'integer', 'locationName' => 'isEncrypt', ],
                'alarmSoundMode' => [ 'type' => 'integer', 'locationName' => 'alarmSoundMode', ],
                'offlineNotify' => [ 'type' => 'integer', 'locationName' => 'offlineNotify', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'parentCategory' => [ 'type' => 'string', 'locationName' => 'parentCategory', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'netType' => [ 'type' => 'string', 'locationName' => 'netType', ],
                'signal' => [ 'type' => 'string', 'locationName' => 'signal', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'netAddress' => [ 'type' => 'string', 'locationName' => 'netAddress', ],
                'gbId' => [ 'type' => 'string', 'locationName' => 'gbId', ],
                'gbUsername' => [ 'type' => 'string', 'locationName' => 'gbUsername', ],
                'gbCertifiable' => [ 'type' => 'string', 'locationName' => 'gbCertifiable', ],
                'gbPassword' => [ 'type' => 'string', 'locationName' => 'gbPassword', ],
                'gbCertNum' => [ 'type' => 'string', 'locationName' => 'gbCertNum', ],
            ],
        ],
        'DescribeRecordResultByTaskIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeRecordResult', ], ],
            ],
        ],
        'StartRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartRecordRequest' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'recordSeconds' => [ 'type' => 'integer', 'locationName' => 'recordSeconds', ],
                'sliceDuration' => [ 'type' => 'integer', 'locationName' => 'sliceDuration', ],
                'streamType' => [ 'type' => 'integer', 'locationName' => 'streamType', ],
                'voiceSwitch' => [ 'type' => 'integer', 'locationName' => 'voiceSwitch', ],
                'devProto' => [ 'type' => 'string', 'locationName' => 'devProto', ],
            ],
        ],
        'DescribeRecordResult' => [
            'type' => 'structure',
            'members' => [
                'fileId' => [ 'type' => 'string', 'locationName' => 'fileId', ],
                'fileType' => [ 'type' => 'integer', 'locationName' => 'fileType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'fileCount' => [ 'type' => 'integer', 'locationName' => 'fileCount', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'errorCode' => [ 'type' => 'string', 'locationName' => 'errorCode', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'storageType' => [ 'type' => 'integer', 'locationName' => 'storageType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'downloadUrls' => [ 'type' => 'string', 'locationName' => 'downloadUrls', ],
                'replayRecord' => [ 'type' => 'boolean', 'locationName' => 'replayRecord', ],
                'timePoint' => [ 'type' => 'string', 'locationName' => 'timePoint', ],
            ],
        ],
        'StartRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deviceId' => [ 'type' => 'string', 'locationName' => 'deviceId', ],
                'recordSeconds' => [ 'type' => 'integer', 'locationName' => 'recordSeconds', ],
                'sliceDuration' => [ 'type' => 'integer', 'locationName' => 'sliceDuration', ],
                'streamType' => [ 'type' => 'integer', 'locationName' => 'streamType', ],
                'voiceSwitch' => [ 'type' => 'integer', 'locationName' => 'voiceSwitch', ],
                'devProto' => [ 'type' => 'string', 'locationName' => 'devProto', ],
                'channelId' => [ 'type' => 'string', 'locationName' => 'channelId', ],
            ],
        ],
        'StartRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeRecordResultByTaskIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRecordResultByTaskIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartRecordResult' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeRecordResultByTaskIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortRule' => [ 'type' => 'string', 'locationName' => 'sortRule', ],
                'hasUrl' => [ 'type' => 'boolean', 'locationName' => 'hasUrl', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
    ],
];
