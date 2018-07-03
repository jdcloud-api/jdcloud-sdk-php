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
        'ListThumbnailTask' => [
            'name' => 'ListThumbnailTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/1.0.0/regions/{regionId}/thumbnail',
            ],
            'input' => [ 'shape' => 'ListThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'ListThumbnailTaskResponseShape', ],
        ],
        'CreateThumbnailTask' => [
            'name' => 'CreateThumbnailTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/1.0.0/regions/{regionId}/thumbnail',
            ],
            'input' => [ 'shape' => 'CreateThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateThumbnailTaskResponseShape', ],
        ],
        'GetThumbnailTask' => [
            'name' => 'GetThumbnailTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/1.0.0/regions/{regionId}/thumbnail/{taskId}',
            ],
            'input' => [ 'shape' => 'GetThumbnailTaskRequestShape', ],
            'output' => [ 'shape' => 'GetThumbnailTaskResponseShape', ],
        ],
        'GetNotification' => [
            'name' => 'GetNotification',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/1.0.0/regions/{regionId}/notification',
            ],
            'input' => [ 'shape' => 'GetNotificationRequestShape', ],
            'output' => [ 'shape' => 'GetNotificationResponseShape', ],
        ],
        'SetNotification' => [
            'name' => 'SetNotification',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/1.0.0/regions/{regionId}/notification',
            ],
            'input' => [ 'shape' => 'SetNotificationRequestShape', ],
            'output' => [ 'shape' => 'SetNotificationResponseShape', ],
        ],
    ],
    'shapes' => [
        'TranscodeStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'notifyMessage' => [ 'type' => 'string', 'locationName' => 'notifyMessage', ],
            ],
        ],
        'ListThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'GetThumbnailTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SetNotificationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetThumbnailTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ThumbnailTaskID' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
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
        'SetNotificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ThumbnailStatus' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'GetNotificationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'events' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'notifyStrategy' => [ 'type' => 'string', 'locationName' => 'notifyStrategy', ],
                'notifyContentFormat' => [ 'type' => 'string', 'locationName' => 'notifyContentFormat', ],
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
        'GetNotificationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateThumbnailTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
            ],
        ],
        'ThumbnailTaskSource' => [
            'type' => 'structure',
            'members' => [
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
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
    ],
];
