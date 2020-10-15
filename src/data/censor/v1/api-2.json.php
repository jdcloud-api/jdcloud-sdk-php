<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'censor',
        'protocol' => 'json',
//        'serviceFullName' => 'censor',
//        'serviceId' => 'censor',
    ],
    'operations' => [
        'AsyncAudioScan' => [
            'name' => 'AsyncAudioScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/audio:asyncscan',
            ],
            'input' => [ 'shape' => 'AsyncAudioScanRequestShape', ],
            'output' => [ 'shape' => 'AsyncAudioScanResponseShape', ],
        ],
        'AudioResults' => [
            'name' => 'AudioResults',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/audio:results',
            ],
            'input' => [ 'shape' => 'AudioResultsRequestShape', ],
            'output' => [ 'shape' => 'AudioResultsResponseShape', ],
        ],
        'DeleteCensorLib' => [
            'name' => 'DeleteCensorLib',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/customCensorLib:custom',
            ],
            'input' => [ 'shape' => 'DeleteCensorLibRequestShape', ],
            'output' => [ 'shape' => 'DeleteCensorLibResponseShape', ],
        ],
        'DeleteCensorLibItems' => [
            'name' => 'DeleteCensorLibItems',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/customCensorLib:customItem',
            ],
            'input' => [ 'shape' => 'DeleteCensorLibItemsRequestShape', ],
            'output' => [ 'shape' => 'DeleteCensorLibItemsResponseShape', ],
        ],
        'ImageScan' => [
            'name' => 'ImageScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/image:scan',
            ],
            'input' => [ 'shape' => 'ImageScanRequestShape', ],
            'output' => [ 'shape' => 'ImageScanResponseShape', ],
        ],
        'AsyncImageScan' => [
            'name' => 'AsyncImageScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/image:asyncscan',
            ],
            'input' => [ 'shape' => 'AsyncImageScanRequestShape', ],
            'output' => [ 'shape' => 'AsyncImageScanResponseShape', ],
        ],
        'ImageResults' => [
            'name' => 'ImageResults',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/image:results',
            ],
            'input' => [ 'shape' => 'ImageResultsRequestShape', ],
            'output' => [ 'shape' => 'ImageResultsResponseShape', ],
        ],
        'DeleteLimit' => [
            'name' => 'DeleteLimit',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/limit:limit',
            ],
            'input' => [ 'shape' => 'DeleteLimitRequestShape', ],
            'output' => [ 'shape' => 'DeleteLimitResponseShape', ],
        ],
        'TextScan' => [
            'name' => 'TextScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/text:scan',
            ],
            'input' => [ 'shape' => 'TextScanRequestShape', ],
            'output' => [ 'shape' => 'TextScanResponseShape', ],
        ],
        'InnerTextScan' => [
            'name' => 'InnerTextScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/text:innerscan',
            ],
            'input' => [ 'shape' => 'InnerTextScanRequestShape', ],
            'output' => [ 'shape' => 'InnerTextScanResponseShape', ],
        ],
        'AsyncVideoScan' => [
            'name' => 'AsyncVideoScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/video:asyncscan',
            ],
            'input' => [ 'shape' => 'AsyncVideoScanRequestShape', ],
            'output' => [ 'shape' => 'AsyncVideoScanResponseShape', ],
        ],
        'VideoResults' => [
            'name' => 'VideoResults',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/video:results',
            ],
            'input' => [ 'shape' => 'VideoResultsRequestShape', ],
            'output' => [ 'shape' => 'VideoResultsResponseShape', ],
        ],
    ],
    'shapes' => [
        'AudioScanResultDetail' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'hintWordsInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'HintWordsInfo', ], ],
            ],
        ],
        'AudioResultDetail' => [
            'type' => 'structure',
            'members' => [
                'scene' => [ 'type' => 'string', 'locationName' => 'scene', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'score' => [ 'type' => 'float', 'locationName' => 'score', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioScanResultDetail', ], ],
            ],
        ],
        'HintWordsInfo' => [
            'type' => 'structure',
            'members' => [
                'context' => [ 'type' => 'string', 'locationName' => 'context', ],
                'libName' => [ 'type' => 'string', 'locationName' => 'libName', ],
                'libCode' => [ 'type' => 'string', 'locationName' => 'libCode', ],
            ],
        ],
        'AudioTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'Callback' => [
            'type' => 'structure',
            'members' => [
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'seed' => [ 'type' => 'string', 'locationName' => 'seed', ],
            ],
        ],
        'FeedbackCensorLibReq' => [
            'type' => 'structure',
            'members' => [
                'taskInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'FeedbackTaskInfo', ], ],
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'censorType' => [ 'type' => 'string', 'locationName' => 'censorType', ],
            ],
        ],
        'FeedbackTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'contentMd5' => [ 'type' => 'string', 'locationName' => 'contentMd5', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'AuditRange' => [
            'type' => 'structure',
            'members' => [
                'pass' => [ 'type' => 'boolean', 'locationName' => 'pass', ],
                'review' => [ 'type' => 'boolean', 'locationName' => 'review', ],
                'block' => [ 'type' => 'boolean', 'locationName' => 'block', ],
            ],
        ],
        'CustomItemReq' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'libId' => [ 'type' => 'string', 'locationName' => 'libId', ],
            ],
        ],
        'CustomReq' => [
            'type' => 'structure',
            'members' => [
                'censorType' => [ 'type' => 'string', 'locationName' => 'censorType', ],
                'websiteInstanceId' => [ 'type' => 'string', 'locationName' => 'websiteInstanceId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'scenes' => [ 'type' => 'string', 'locationName' => 'scenes', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'libId' => [ 'type' => 'string', 'locationName' => 'libId', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'CustomItemInfo' => [
            'type' => 'structure',
            'members' => [
                'libId' => [ 'type' => 'string', 'locationName' => 'libId', ],
                'itemId' => [ 'type' => 'string', 'locationName' => 'itemId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CustomInfo' => [
            'type' => 'structure',
            'members' => [
                'libId' => [ 'type' => 'string', 'locationName' => 'libId', ],
                'websiteInstanceId' => [ 'type' => 'string', 'locationName' => 'websiteInstanceId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'scenes' => [ 'type' => 'string', 'locationName' => 'scenes', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'itemNumber' => [ 'type' => 'integer', 'locationName' => 'itemNumber', ],
            ],
        ],
        'QrcodeData' => [
            'type' => 'structure',
            'members' => [
                'x' => [ 'type' => 'double', 'locationName' => 'x', ],
                'y' => [ 'type' => 'double', 'locationName' => 'y', ],
                'w' => [ 'type' => 'double', 'locationName' => 'w', ],
                'h' => [ 'type' => 'double', 'locationName' => 'h', ],
            ],
        ],
        'ImageTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'ProgramCodeData' => [
            'type' => 'structure',
            'members' => [
                'x' => [ 'type' => 'double', 'locationName' => 'x', ],
                'y' => [ 'type' => 'double', 'locationName' => 'y', ],
                'w' => [ 'type' => 'double', 'locationName' => 'w', ],
                'h' => [ 'type' => 'double', 'locationName' => 'h', ],
            ],
        ],
        'SFaceData' => [
            'type' => 'structure',
            'members' => [
                'x' => [ 'type' => 'double', 'locationName' => 'x', ],
                'y' => [ 'type' => 'double', 'locationName' => 'y', ],
                'w' => [ 'type' => 'double', 'locationName' => 'w', ],
                'h' => [ 'type' => 'double', 'locationName' => 'h', ],
                'faces' => [ 'type' => 'list', 'member' => [ 'shape' => 'Face', ], ],
            ],
        ],
        'LogoData' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'x' => [ 'type' => 'double', 'locationName' => 'x', ],
                'y' => [ 'type' => 'double', 'locationName' => 'y', ],
                'w' => [ 'type' => 'double', 'locationName' => 'w', ],
                'h' => [ 'type' => 'double', 'locationName' => 'h', ],
            ],
        ],
        'ImageResultDetail' => [
            'type' => 'structure',
            'members' => [
                'scene' => [ 'type' => 'string', 'locationName' => 'scene', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'score' => [ 'type' => 'float', 'locationName' => 'score', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'hintWordsInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'HintWordsInfo', ], ],
                'sfaceData' => [ 'type' => 'list', 'member' => [ 'shape' => 'SFaceData', ], ],
            ],
        ],
        'Face' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'rate' => [ 'type' => 'float', 'locationName' => 'rate', ],
            ],
        ],
        'LimitInfo' => [
            'type' => 'structure',
            'members' => [
                'interfaceType' => [ 'type' => 'string', 'locationName' => 'interfaceType', ],
                'threshold' => [ 'type' => 'string', 'locationName' => 'threshold', ],
                'rate' => [ 'type' => 'string', 'locationName' => 'rate', ],
                'limitId' => [ 'type' => 'string', 'locationName' => 'limitId', ],
            ],
        ],
        'SetLimitReq' => [
            'type' => 'structure',
            'members' => [
                'interfaceType' => [ 'type' => 'string', 'locationName' => 'interfaceType', ],
                'threshold' => [ 'type' => 'string', 'locationName' => 'threshold', ],
                'rate' => [ 'type' => 'string', 'locationName' => 'rate', ],
                'limitId' => [ 'type' => 'string', 'locationName' => 'limitId', ],
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
        'BucketPrefixCfg' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'prefixs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'FrozenThreshold' => [
            'type' => 'structure',
            'members' => [
                'porn' => [ 'type' => 'integer', 'locationName' => 'porn', ],
                'terrorism' => [ 'type' => 'integer', 'locationName' => 'terrorism', ],
            ],
        ],
        'FrameConf' => [
            'type' => 'structure',
            'members' => [
                'frequency' => [ 'type' => 'integer', 'locationName' => 'frequency', ],
                'maxFrame' => [ 'type' => 'integer', 'locationName' => 'maxFrame', ],
                'maxSize' => [ 'type' => 'integer', 'locationName' => 'maxSize', ],
            ],
        ],
        'ScanConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'scense' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'frozen' => [ 'type' => 'integer', 'locationName' => 'frozen', ],
                'threshold' =>  [ 'shape' => 'FrozenThreshold', ],
                'fileType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'fileSuffix' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'IdReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'OssCallback' => [
            'type' => 'structure',
            'members' => [
                'callback' => [ 'type' => 'string', 'locationName' => 'callback', ],
                'incrementCall' => [ 'type' => 'integer', 'locationName' => 'incrementCall', ],
                'stockCall' => [ 'type' => 'integer', 'locationName' => 'stockCall', ],
                'scanCall' => [ 'type' => 'integer', 'locationName' => 'scanCall', ],
                'reviewCall' => [ 'type' => 'integer', 'locationName' => 'reviewCall', ],
                'seed' => [ 'type' => 'string', 'locationName' => 'seed', ],
            ],
        ],
        'OssCallbackReq' => [
            'type' => 'structure',
            'members' => [
                'callback' => [ 'type' => 'string', 'locationName' => 'callback', ],
                'incrementCall' => [ 'type' => 'integer', 'locationName' => 'incrementCall', ],
                'stockCall' => [ 'type' => 'integer', 'locationName' => 'stockCall', ],
                'scanCall' => [ 'type' => 'integer', 'locationName' => 'scanCall', ],
                'reviewCall' => [ 'type' => 'integer', 'locationName' => 'reviewCall', ],
                'seed' => [ 'type' => 'string', 'locationName' => 'seed', ],
            ],
        ],
        'OssScanCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'scanType' => [ 'type' => 'string', 'locationName' => 'scanType', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'bucketsInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketPrefixCfg', ], ],
                'freezeAction' => [ 'type' => 'string', 'locationName' => 'freezeAction', ],
                'imageInfo' =>  [ 'shape' => 'ScanConf', ],
                'videoInfo' =>  [ 'shape' => 'ScanConf', ],
                'textInfo' =>  [ 'shape' => 'ScanConf', ],
                'audioInfo' =>  [ 'shape' => 'ScanConf', ],
                'frameInfo' =>  [ 'shape' => 'FrameConf', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskStTime' => [ 'type' => 'integer', 'locationName' => 'taskStTime', ],
                'taskEndTime' => [ 'type' => 'integer', 'locationName' => 'taskEndTime', ],
            ],
        ],
        'OssScanCfgReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'scanType' => [ 'type' => 'string', 'locationName' => 'scanType', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'bucketsInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'BucketPrefixCfg', ], ],
                'freezeAction' => [ 'type' => 'string', 'locationName' => 'freezeAction', ],
                'imageInfo' =>  [ 'shape' => 'ScanConf', ],
                'videoInfo' =>  [ 'shape' => 'ScanConf', ],
                'frameInfo' =>  [ 'shape' => 'FrameConf', ],
                'textInfo' =>  [ 'shape' => 'ScanConf', ],
                'audioInfo' =>  [ 'shape' => 'ScanConf', ],
            ],
        ],
        'DataConsumeStatement' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'data' =>  [ 'shape' => 'DataConsumeData', ],
            ],
        ],
        'Score' => [
            'type' => 'structure',
            'members' => [
                'politics' => [ 'type' => 'double', 'locationName' => 'politics', ],
                'porn' => [ 'type' => 'double', 'locationName' => 'porn', ],
            ],
        ],
        'FrameCfg' => [
            'type' => 'structure',
            'members' => [
                'prefix' => [ 'type' => 'string', 'locationName' => 'prefix', ],
                'frames' => [ 'type' => 'list', 'member' => [ 'shape' => 'Frame', ], ],
            ],
        ],
        'AudioDetail' => [
            'type' => 'structure',
            'members' => [
                'audio_time' => [ 'type' => 'integer', 'locationName' => 'audio_time', ],
                'audio_review_time' => [ 'type' => 'integer', 'locationName' => 'audio_review_time', ],
                'audio_block_time' => [ 'type' => 'integer', 'locationName' => 'audio_block_time', ],
                'audio_pass_time' => [ 'type' => 'integer', 'locationName' => 'audio_pass_time', ],
                'porn_block_time' => [ 'type' => 'integer', 'locationName' => 'porn_block_time', ],
                'politics_block_time' => [ 'type' => 'integer', 'locationName' => 'politics_block_time', ],
                'terrorism_block_time' => [ 'type' => 'integer', 'locationName' => 'terrorism_block_time', ],
            ],
        ],
        'DataConsumeData' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'porn' => [ 'type' => 'integer', 'locationName' => 'porn', ],
                'ad' => [ 'type' => 'integer', 'locationName' => 'ad', ],
                'politics_terrorism' => [ 'type' => 'integer', 'locationName' => 'politics_terrorism', ],
                'videoDetail' =>  [ 'shape' => 'VideoDetail', ],
            ],
        ],
        'VideoDetail' => [
            'type' => 'structure',
            'members' => [
                'audio_time' => [ 'type' => 'integer', 'locationName' => 'audio_time', ],
                'politics_frame_count' => [ 'type' => 'integer', 'locationName' => 'politics_frame_count', ],
                'porn_frame_count' => [ 'type' => 'integer', 'locationName' => 'porn_frame_count', ],
                'terrorism_frame_count' => [ 'type' => 'integer', 'locationName' => 'terrorism_frame_count', ],
                'ad_frame_count' => [ 'type' => 'integer', 'locationName' => 'ad_frame_count', ],
                'total_frame_count' => [ 'type' => 'integer', 'locationName' => 'total_frame_count', ],
            ],
        ],
        'BlockDetail' => [
            'type' => 'structure',
            'members' => [
                'politics' => [ 'type' => 'integer', 'locationName' => 'politics', ],
                'terrorism' => [ 'type' => 'integer', 'locationName' => 'terrorism', ],
                'porn' => [ 'type' => 'integer', 'locationName' => 'porn', ],
                'illegal' => [ 'type' => 'integer', 'locationName' => 'illegal', ],
                'insult' => [ 'type' => 'integer', 'locationName' => 'insult', ],
                'ad' => [ 'type' => 'integer', 'locationName' => 'ad', ],
                'politics_terrorism' => [ 'type' => 'integer', 'locationName' => 'politics_terrorism', ],
            ],
        ],
        'VideoDetailList' => [
            'type' => 'structure',
            'members' => [
                'audio_time' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'politics_frame_count' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'porn_frame_count' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'terrorism_frame_count' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'politics_terrorism_frame_count' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'total_frame_count' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
            ],
        ],
        'OssDataUnReview' => [
            'type' => 'structure',
            'members' => [
                'audio_antispam' => [ 'type' => 'integer', 'locationName' => 'audio_antispam', ],
                'text_antispam' => [ 'type' => 'integer', 'locationName' => 'text_antispam', ],
                'porn' => [ 'type' => 'integer', 'locationName' => 'porn', ],
                'politics_terrorism' => [ 'type' => 'integer', 'locationName' => 'politics_terrorism', ],
                'recognization' => [ 'type' => 'integer', 'locationName' => 'recognization', ],
                'pass' => [ 'type' => 'integer', 'locationName' => 'pass', ],
                'block' => [ 'type' => 'integer', 'locationName' => 'block', ],
                'review' => [ 'type' => 'integer', 'locationName' => 'review', ],
                'status5xx' => [ 'type' => 'integer', 'locationName' => 'status5xx', ],
                'taskMsec' => [ 'type' => 'integer', 'locationName' => 'taskMsec', ],
                'blockDetail' =>  [ 'shape' => 'BlockDetail', ],
                'audioDetail' =>  [ 'shape' => 'AudioDetail', ],
                'videoDetail' =>  [ 'shape' => 'VideoDetail', ],
            ],
        ],
        'DataStatement' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'data' =>  [ 'shape' => 'DataOverview', ],
            ],
        ],
        'FrameDetail' => [
            'type' => 'structure',
            'members' => [
                'politics_frame_count' => [ 'type' => 'integer', 'locationName' => 'politics_frame_count', ],
                'porn_frame_count' => [ 'type' => 'integer', 'locationName' => 'porn_frame_count', ],
                'terrorism_frame_count' => [ 'type' => 'integer', 'locationName' => 'terrorism_frame_count', ],
                'total_frame_count' => [ 'type' => 'integer', 'locationName' => 'total_frame_count', ],
            ],
        ],
        'DataOverview' => [
            'type' => 'structure',
            'members' => [
                'recognization' => [ 'type' => 'integer', 'locationName' => 'recognization', ],
                'pass' => [ 'type' => 'integer', 'locationName' => 'pass', ],
                'block' => [ 'type' => 'integer', 'locationName' => 'block', ],
                'review' => [ 'type' => 'integer', 'locationName' => 'review', ],
                'status5xx' => [ 'type' => 'integer', 'locationName' => 'status5xx', ],
                'taskMsec' => [ 'type' => 'integer', 'locationName' => 'taskMsec', ],
                'blockDetail' =>  [ 'shape' => 'BlockDetail', ],
                'audioDetail' =>  [ 'shape' => 'AudioDetail', ],
                'videoDetail' =>  [ 'shape' => 'VideoDetail', ],
            ],
        ],
        'ConsumeAmount' => [
            'type' => 'structure',
            'members' => [
                'api_text' => [ 'type' => 'double', 'locationName' => 'api_text', ],
                'api_image' => [ 'type' => 'double', 'locationName' => 'api_image', ],
                'api_image_porn' => [ 'type' => 'double', 'locationName' => 'api_image_porn', ],
                'api_image_politics_terrorism' => [ 'type' => 'double', 'locationName' => 'api_image_politics_terrorism', ],
                'api_audio' => [ 'type' => 'double', 'locationName' => 'api_audio', ],
                'api_video' => [ 'type' => 'double', 'locationName' => 'api_video', ],
                'api_video_audio' => [ 'type' => 'double', 'locationName' => 'api_video_audio', ],
                'api_video_porn' => [ 'type' => 'double', 'locationName' => 'api_video_porn', ],
                'api_video_politics_terrorism' => [ 'type' => 'double', 'locationName' => 'api_video_politics_terrorism', ],
                'oss_text' => [ 'type' => 'double', 'locationName' => 'oss_text', ],
                'oss_image' => [ 'type' => 'double', 'locationName' => 'oss_image', ],
                'oss_image_porn' => [ 'type' => 'double', 'locationName' => 'oss_image_porn', ],
                'oss_image_politics_terrorism' => [ 'type' => 'double', 'locationName' => 'oss_image_politics_terrorism', ],
                'oss_audio' => [ 'type' => 'double', 'locationName' => 'oss_audio', ],
                'oss_video' => [ 'type' => 'double', 'locationName' => 'oss_video', ],
                'oss_video_audio' => [ 'type' => 'double', 'locationName' => 'oss_video_audio', ],
                'oss_video_porn' => [ 'type' => 'double', 'locationName' => 'oss_video_porn', ],
                'oss_video_politics_terrorism' => [ 'type' => 'double', 'locationName' => 'oss_video_politics_terrorism', ],
            ],
        ],
        'OssScanReviewReq' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Frame' => [
            'type' => 'structure',
            'members' => [
                'offset' => [ 'type' => 'integer', 'locationName' => 'offset', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'AudioDetailList' => [
            'type' => 'structure',
            'members' => [
                'audio_time' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'audio_pass_time' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'audio_review_time' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
                'audio_block_time' => [ 'type' => 'list', 'member' => [ 'type' => 'float64', ], ],
            ],
        ],
        'StsAuthReq' => [
            'type' => 'structure',
            'members' => [
                'authFor' => [ 'type' => 'string', 'locationName' => 'authFor', ],
            ],
        ],
        'SystemConf' => [
            'type' => 'structure',
            'members' => [
                'confKey' => [ 'type' => 'string', 'locationName' => 'confKey', ],
                'confSubKey' => [ 'type' => 'string', 'locationName' => 'confSubKey', ],
                'confVal' => [ 'type' => 'string', 'locationName' => 'confVal', ],
            ],
        ],
        'TaskData' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'TaskDatas' => [
            'type' => 'structure',
            'members' => [
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'HintWordsInfo', ], ],
            ],
        ],
        'TextTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'TextResultDetail' => [
            'type' => 'structure',
            'members' => [
                'scene' => [ 'type' => 'string', 'locationName' => 'scene', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'score' => [ 'type' => 'float', 'locationName' => 'score', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'hintWordsInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'HintWordsInfo', ], ],
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
        'VideoResultDetail' => [
            'type' => 'structure',
            'members' => [
                'scene' => [ 'type' => 'string', 'locationName' => 'scene', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'score' => [ 'type' => 'float', 'locationName' => 'score', ],
                'suggestion' => [ 'type' => 'string', 'locationName' => 'suggestion', ],
                'sfaceData' => [ 'type' => 'list', 'member' => [ 'shape' => 'SFaceData', ], ],
            ],
        ],
        'VideoTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'interval' => [ 'type' => 'integer', 'locationName' => 'interval', ],
                'maxFrames' => [ 'type' => 'integer', 'locationName' => 'maxFrames', ],
            ],
        ],
        'SetWarningReq' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'realTimeNotify' => [ 'type' => 'integer', 'locationName' => 'realTimeNotify', ],
                'logTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'riskLevels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'contactWays' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactorPersons' => [ 'type' => 'list', 'member' => [ 'shape' => 'Contactor', ], ],
                'contactorGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Contactor', ], ],
            ],
        ],
        'ContactGroup' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'ContactPerson' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'WarningRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'realTimeNotify' => [ 'type' => 'integer', 'locationName' => 'realTimeNotify', ],
                'logTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'riskLevels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyTime' => [ 'type' => 'string', 'locationName' => 'notifyTime', ],
                'contactWays' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactorPersons' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactPerson', ], ],
                'contactorGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactGroup', ], ],
            ],
        ],
        'Contactor' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'HandleWebsiteResultsReq' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'SubmitWebsiteReq' => [
            'type' => 'structure',
            'members' => [
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'WebsiteRiskLog' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'websiteInstanceId' => [ 'type' => 'string', 'locationName' => 'websiteInstanceId', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'logType' => [ 'type' => 'integer', 'locationName' => 'logType', ],
                'riskTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'WebsiteResultInfo' => [
            'type' => 'structure',
            'members' => [
                'websiteInstanceId' => [ 'type' => 'string', 'locationName' => 'websiteInstanceId', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'highRisk' => [ 'type' => 'integer', 'locationName' => 'highRisk', ],
                'mediumRisk' => [ 'type' => 'integer', 'locationName' => 'mediumRisk', ],
                'lowRisk' => [ 'type' => 'integer', 'locationName' => 'lowRisk', ],
                'pending' => [ 'type' => 'integer', 'locationName' => 'pending', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebsiteRiskLog', ], ],
            ],
        ],
        'WebsiteDetail' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'KeyUrls' => [
            'type' => 'structure',
            'members' => [
                'keyUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VerifyWebsiteReq' => [
            'type' => 'structure',
            'members' => [
                'verifyType' => [ 'type' => 'integer', 'locationName' => 'verifyType', ],
            ],
        ],
        'WebsiteInstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'websiteInstanceId' => [ 'type' => 'string', 'locationName' => 'websiteInstanceId', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'hostInterval' => [ 'type' => 'string', 'locationName' => 'hostInterval', ],
                'homePageInterval' => [ 'type' => 'string', 'locationName' => 'homePageInterval', ],
                'createAt' => [ 'type' => 'integer', 'locationName' => 'createAt', ],
                'expireAt' => [ 'type' => 'integer', 'locationName' => 'expireAt', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'homePageCacheStatus' => [ 'type' => 'integer', 'locationName' => 'homePageCacheStatus', ],
            ],
        ],
        'BindWebsiteInfo' => [
            'type' => 'structure',
            'members' => [
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'hostInterval' => [ 'type' => 'string', 'locationName' => 'hostInterval', ],
                'homePage' => [ 'type' => 'string', 'locationName' => 'homePage', ],
                'homePageInterval' => [ 'type' => 'string', 'locationName' => 'homePageInterval', ],
            ],
        ],
        'BindWebsiteReq' => [
            'type' => 'structure',
            'members' => [
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'hostInterval' => [ 'type' => 'string', 'locationName' => 'hostInterval', ],
                'homePage' => [ 'type' => 'string', 'locationName' => 'homePage', ],
                'homePageInterval' => [ 'type' => 'string', 'locationName' => 'homePageInterval', ],
            ],
        ],
        'AudioResultsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AsyncAudioScanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioTask', ], ],
                'callback' => [ 'type' => 'string', 'locationName' => 'callback', ],
                'seed' => [ 'type' => 'string', 'locationName' => 'seed', ],
            ],
        ],
        'AudioResultsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioResult', ], ],
            ],
        ],
        'AsyncAudioScanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AsyncAudioScanResultShape', ],
            ],
        ],
        'AsyncAudioScanResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskData', ], ],
            ],
        ],
        'AudioResultsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AudioResultsResultShape', ],
            ],
        ],
        'AudioResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioResultDetail', ], ],
            ],
        ],
        'DeleteCensorLibResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCensorLibResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCensorLibItemsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCensorLibItemsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'libId' => [ 'type' => 'string', 'locationName' => 'libId', ],
                'itemId' => [ 'type' => 'string', 'locationName' => 'itemId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCensorLibItemsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCensorLibRequestShape' => [
            'type' => 'structure',
            'members' => [
                'libId' => [ 'type' => 'string', 'locationName' => 'libId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AsyncImageScanResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskData', ], ],
            ],
        ],
        'ImageResultsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageResult', ], ],
            ],
        ],
        'ImageScanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageTask', ], ],
            ],
        ],
        'ImageResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageResultDetail', ], ],
            ],
        ],
        'AsyncImageScanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageTask', ], ],
                'callback' => [ 'type' => 'string', 'locationName' => 'callback', ],
                'seed' => [ 'type' => 'string', 'locationName' => 'seed', ],
            ],
        ],
        'ImageResultsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ImageScanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImageScanResultShape', ],
            ],
        ],
        'AsyncImageScanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AsyncImageScanResultShape', ],
            ],
        ],
        'ImageScanResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageResult', ], ],
            ],
        ],
        'ImageResultsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ImageResultsResultShape', ],
            ],
        ],
        'DeleteLimitResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'limitId' => [ 'type' => 'string', 'locationName' => 'limitId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OssDataResult' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'logTime' => [ 'type' => 'string', 'locationName' => 'logTime', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'details' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'score' =>  [ 'shape' => 'Score', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'object' => [ 'type' => 'string', 'locationName' => 'object', ],
                'reviewResult' => [ 'type' => 'string', 'locationName' => 'reviewResult', ],
            ],
        ],
        'DataResult' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'logTime' => [ 'type' => 'string', 'locationName' => 'logTime', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'details' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'response' => [ 'type' => 'string', 'locationName' => 'response', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'frame' =>  [ 'shape' => 'FrameCfg', ],
                'fbSuggestion' => [ 'type' => 'string', 'locationName' => 'fbSuggestion', ],
            ],
        ],
        'InnerTextScanResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TextResult', ], ],
            ],
        ],
        'InnerTextScanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TextTask', ], ],
            ],
        ],
        'InnerTextScanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InnerTextScanResultShape', ],
            ],
        ],
        'TextScanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'TextTask', ], ],
            ],
        ],
        'TextScanResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TextResult', ], ],
            ],
        ],
        'TextResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'filteredContent' => [ 'type' => 'string', 'locationName' => 'filteredContent', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'TextResultDetail', ], ],
            ],
        ],
        'TextScanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TextScanResultShape', ],
            ],
        ],
        'AsyncVideoScanResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskData', ], ],
            ],
        ],
        'AsyncVideoScanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AsyncVideoScanResultShape', ],
            ],
        ],
        'AsyncVideoScanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'live' => [ 'type' => 'boolean', 'locationName' => 'live', ],
                'scenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'audioScenes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoTask', ], ],
                'callback' => [ 'type' => 'string', 'locationName' => 'callback', ],
                'seed' => [ 'type' => 'string', 'locationName' => 'seed', ],
            ],
        ],
        'VideoResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoResultDetail', ], ],
                'audioResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioResultDetail', ], ],
            ],
        ],
        'VideoResultsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VideoResultsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'VideoResultsResultShape', ],
            ],
        ],
        'VideoResultsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoResult', ], ],
            ],
        ],
    ],
];
