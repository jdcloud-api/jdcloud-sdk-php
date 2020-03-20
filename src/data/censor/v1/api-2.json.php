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
        'TextScan' => [
            'name' => 'TextScan',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/text:scan',
            ],
            'input' => [ 'shape' => 'TextScanRequestShape', ],
            'output' => [ 'shape' => 'TextScanResponseShape', ],
        ],
    ],
    'shapes' => [
        'AudioScanResultDetail' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'text' => [ 'type' => 'string', 'locationName' => 'text', ],
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
                'logoType' => [ 'type' => 'string', 'locationName' => 'logoType', ],
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
        'DataStatement' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'data' =>  [ 'shape' => 'DataOverview', ],
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
        'TaskData' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
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
            ],
        ],
        'AudioResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioResultDetail', ], ],
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
        'OssDataResult' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
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
                'time' => [ 'type' => 'integer', 'locationName' => 'time', ],
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
                'details' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'response' => [ 'type' => 'string', 'locationName' => 'response', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
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
        'VideoResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'VideoResultDetail', ], ],
                'audioResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'AudioResultDetail', ], ],
            ],
        ],
    ],
];
