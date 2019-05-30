<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'mps',
        'protocol' => 'json',
//        'serviceFullName' => 'mps',
//        'serviceId' => 'mps',
    ],
    'operations' => [
        'GetStyleDelimiter' => [
            'name' => 'GetStyleDelimiter',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/styleDelimiter/',
            ],
            'input' => [ 'shape' => 'GetStyleDelimiterRequestShape', ],
            'output' => [ 'shape' => 'GetStyleDelimiterResponseShape', ],
        ],
        'SetStyleDelimiter' => [
            'name' => 'SetStyleDelimiter',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/styleDelimiter/',
            ],
            'input' => [ 'shape' => 'SetStyleDelimiterRequestShape', ],
            'output' => [ 'shape' => 'SetStyleDelimiterResponseShape', ],
        ],
        'DeleteStyleDelimiter' => [
            'name' => 'DeleteStyleDelimiter',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/styleDelimiter/',
            ],
            'input' => [ 'shape' => 'DeleteStyleDelimiterRequestShape', ],
            'output' => [ 'shape' => 'DeleteStyleDelimiterResponseShape', ],
        ],
        'ListImageStyle' => [
            'name' => 'ListImageStyle',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles',
            ],
            'input' => [ 'shape' => 'ListImageStyleRequestShape', ],
            'output' => [ 'shape' => 'ListImageStyleResponseShape', ],
        ],
        'CreateImageStyle' => [
            'name' => 'CreateImageStyle',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles',
            ],
            'input' => [ 'shape' => 'CreateImageStyleRequestShape', ],
            'output' => [ 'shape' => 'CreateImageStyleResponseShape', ],
        ],
        'GetImageStyle' => [
            'name' => 'GetImageStyle',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/{id}',
            ],
            'input' => [ 'shape' => 'GetImageStyleRequestShape', ],
            'output' => [ 'shape' => 'GetImageStyleResponseShape', ],
        ],
        'UpdateImageStyle' => [
            'name' => 'UpdateImageStyle',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/{id}',
            ],
            'input' => [ 'shape' => 'UpdateImageStyleRequestShape', ],
            'output' => [ 'shape' => 'UpdateImageStyleResponseShape', ],
        ],
        'DeleteImageStyle' => [
            'name' => 'DeleteImageStyle',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/{id}',
            ],
            'input' => [ 'shape' => 'DeleteImageStyleRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageStyleResponseShape', ],
        ],
        'CountImageStyle' => [
            'name' => 'CountImageStyle',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/buckets/{bucketName}/imageStyles/count',
            ],
            'input' => [ 'shape' => 'CountImageStyleRequestShape', ],
            'output' => [ 'shape' => 'CountImageStyleResponseShape', ],
        ],
        'ListThumbnailTask' => [
            'name' => 'ListThumbnailTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/thumbnail',
            ],
            'input' => [ 'shape' => 'ListThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'ListThumbnailTaskResponseShape', ],
        ],
        'CreateThumbnailTask' => [
            'name' => 'CreateThumbnailTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/thumbnail',
            ],
            'input' => [ 'shape' => 'CreateThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateThumbnailTaskResponseShape', ],
        ],
        'GetThumbnailTask' => [
            'name' => 'GetThumbnailTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/thumbnail/{taskId}',
            ],
            'input' => [ 'shape' => 'GetThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'GetThumbnailTaskResponseShape', ],
        ],
        'GetNotification' => [
            'name' => 'GetNotification',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/notification',
            ],
            'input' => [ 'shape' => 'GetNotificationRequestShape', ],
            'output' => [ 'shape' => 'GetNotificationResponseShape', ],
        ],
        'SetNotification' => [
            'name' => 'SetNotification',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/notification',
            ],
            'input' => [ 'shape' => 'SetNotificationRequestShape', ],
            'output' => [ 'shape' => 'SetNotificationResponseShape', ],
        ],
    ],
    'shapes' => [
        'SetStyleDelimiterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetStyleDelimiterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteStyleDelimiterResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetStyleDelimiterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'DeleteStyleDelimiterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'StyleDelimiterConf' => [
            'type' => 'structure',
            'members' => [
                'delimiters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetStyleDelimiterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delimiters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'GetStyleDelimiterResultShape' => [
            'type' => 'structure',
            'members' => [
                'delimiters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetStyleDelimiterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetStyleDelimiterResultShape', ],
            ],
        ],
        'DeleteStyleDelimiterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'ImageStyleID' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'CountImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CountImageStyleResultShape', ],
            ],
        ],
        'ImageStyleQueryResult' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'imageStyleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageStyle', ], ],
            ],
        ],
        'GetImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'UpdateImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'CountImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'styleCount' => [ 'type' => 'integer', 'locationName' => 'styleCount', ],
            ],
        ],
        'ImageStyle' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'ListImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListImageStyleResultShape', ],
            ],
        ],
        'CreateImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'params' => [ 'type' => 'string', 'locationName' => 'params', ],
                'paramAlias' => [ 'type' => 'string', 'locationName' => 'paramAlias', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'modifyTime' => [ 'type' => 'date', 'locationName' => 'modifyTime', ],
                'createdTime' => [ 'type' => 'date', 'locationName' => 'createdTime', ],
            ],
        ],
        'DeleteImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'imageStyleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageStyle', ], ],
            ],
        ],
        'UpdateImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImageStyleCount' => [
            'type' => 'structure',
            'members' => [
                'styleCount' => [ 'type' => 'integer', 'locationName' => 'styleCount', ],
            ],
        ],
        'GetImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'CreateImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateImageStyleResultShape', ],
            ],
        ],
        'DeleteImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetImageStyleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetImageStyleResultShape', ],
            ],
        ],
        'CreateImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'ListImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'UpdateImageStyleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CountImageStyleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'styleName' => [ 'type' => 'string', 'locationName' => 'styleName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'bucketName' => [ 'type' => 'string', 'locationName' => 'bucketName', ],
            ],
        ],
        'GetThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'nextMarker' => [ 'type' => 'string', 'locationName' => 'nextMarker', ],
                'truncated' => [ 'type' => 'boolean', 'locationName' => 'truncated', ],
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThumbnailTask', ], ],
            ],
        ],
        'ThumbnailTaskRule' => [
            'type' => 'structure',
            'members' => [
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
                'keyFrame' => [ 'type' => 'boolean', 'locationName' => 'keyFrame', ],
                'startTimeInSecond' => [ 'type' => 'integer', 'locationName' => 'startTimeInSecond', ],
                'endTimeInSecond' => [ 'type' => 'integer', 'locationName' => 'endTimeInSecond', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'ThumbnailTaskSource' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'ThumbnailStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'CreateThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lastUpdatedTime' => [ 'type' => 'string', 'locationName' => 'lastUpdatedTime', ],
                'source' =>  [ 'shape' => 'ThumbnailTaskSource', ],
                'target' =>  [ 'shape' => 'ThumbnailTaskTarget', ],
                'rule' =>  [ 'shape' => 'ThumbnailTaskRule', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'Notification' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
            ],
        ],
        'ThumbnailTask' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lastUpdatedTime' => [ 'type' => 'string', 'locationName' => 'lastUpdatedTime', ],
                'source' =>  [ 'shape' => 'ThumbnailTaskSource', ],
                'target' =>  [ 'shape' => 'ThumbnailTaskTarget', ],
                'rule' =>  [ 'shape' => 'ThumbnailTaskRule', ],
            ],
        ],
        'CreateThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'GetNotificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetNotificationResultShape', ],
            ],
        ],
        'SetNotificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateThumbnailTaskResultShape', ],
            ],
        ],
        'GetThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'lastUpdatedTime' => [ 'type' => 'string', 'locationName' => 'lastUpdatedTime', ],
                'source' =>  [ 'shape' => 'ThumbnailTaskSource', ],
                'target' =>  [ 'shape' => 'ThumbnailTaskTarget', ],
                'rule' =>  [ 'shape' => 'ThumbnailTaskRule', ],
            ],
        ],
        'ThumbnailTaskTarget' => [
            'type' => 'structure',
            'members' => [
                'destBucket' => [ 'type' => 'string', 'locationName' => 'destBucket', ],
                'destKeyPrefix' => [ 'type' => 'string', 'locationName' => 'destKeyPrefix', ],
                'format' => [ 'type' => 'string', 'locationName' => 'format', ],
                'widthInPixel' => [ 'type' => 'integer', 'locationName' => 'widthInPixel', ],
                'heightInPixel' => [ 'type' => 'integer', 'locationName' => 'heightInPixel', ],
                'keys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ThumbnailQuery' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'nextMarker' => [ 'type' => 'string', 'locationName' => 'nextMarker', ],
                'truncated' => [ 'type' => 'boolean', 'locationName' => 'truncated', ],
                'taskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ThumbnailTask', ], ],
            ],
        ],
        'TranscodeStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'notifyMessage' => [ 'type' => 'string', 'locationName' => 'notifyMessage', ],
            ],
        ],
        'SetNotificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'begin' => [ 'type' => 'string', 'locationName' => 'begin', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'marker' => [ 'type' => 'string', 'locationName' => 'marker', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListThumbnailTaskResultShape', ],
            ],
        ],
        'ThumbnailTaskID' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'GetThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetThumbnailTaskResultShape', ],
            ],
        ],
        'GetNotificationResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
            ],
        ],
        'GetNotificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetNotificationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
