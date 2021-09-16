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
        'AsyncAudioScanV2' => [
            'name' => 'AsyncAudioScanV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/audio:asyncscanv2',
            ],
            'input' => [ 'shape' => 'AsyncAudioScanV2RequestShape', ],
            'output' => [ 'shape' => 'AsyncAudioScanV2ResponseShape', ],
        ],
        'AudioCallbackV2' => [
            'name' => 'AudioCallbackV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/audio:callbackv2',
            ],
            'input' => [ 'shape' => 'AudioCallbackV2RequestShape', ],
            'output' => [ 'shape' => 'AudioCallbackV2ResponseShape', ],
        ],
        'AudioResultsV2' => [
            'name' => 'AudioResultsV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/audio:resultsv2',
            ],
            'input' => [ 'shape' => 'AudioResultsV2RequestShape', ],
            'output' => [ 'shape' => 'AudioResultsV2ResponseShape', ],
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
        'ImageScanV2' => [
            'name' => 'ImageScanV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/image:scanv2',
            ],
            'input' => [ 'shape' => 'ImageScanV2RequestShape', ],
            'output' => [ 'shape' => 'ImageScanV2ResponseShape', ],
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
        'TextScanV2' => [
            'name' => 'TextScanV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/text:scanv2',
            ],
            'input' => [ 'shape' => 'TextScanV2RequestShape', ],
            'output' => [ 'shape' => 'TextScanV2ResponseShape', ],
        ],
        'TextResultsV2' => [
            'name' => 'TextResultsV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/text:resultsv2',
            ],
            'input' => [ 'shape' => 'TextResultsV2RequestShape', ],
            'output' => [ 'shape' => 'TextResultsV2ResponseShape', ],
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
        'AsyncVideoScanV2' => [
            'name' => 'AsyncVideoScanV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/video:asyncscanv2',
            ],
            'input' => [ 'shape' => 'AsyncVideoScanV2RequestShape', ],
            'output' => [ 'shape' => 'AsyncVideoScanV2ResponseShape', ],
        ],
        'VideoCallbackV2' => [
            'name' => 'VideoCallbackV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/video:callbackv2',
            ],
            'input' => [ 'shape' => 'VideoCallbackV2RequestShape', ],
            'output' => [ 'shape' => 'VideoCallbackV2ResponseShape', ],
        ],
        'VideoResultsV2' => [
            'name' => 'VideoResultsV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/video:resultsv2',
            ],
            'input' => [ 'shape' => 'VideoResultsV2RequestShape', ],
            'output' => [ 'shape' => 'VideoResultsV2ResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
