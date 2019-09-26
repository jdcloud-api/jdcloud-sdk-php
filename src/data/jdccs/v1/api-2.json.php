<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdccs',
        'protocol' => 'json',
//        'serviceFullName' => 'jdccs',
//        'serviceId' => 'jdccs',
    ],
    'operations' => [
        'DescribeMetrics' => [
            'name' => 'DescribeMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/metrics',
            ],
            'input' => [ 'shape' => 'DescribeMetricsRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricsResponseShape', ],
        ],
        'DescribeMetricData' => [
            'name' => 'DescribeMetricData',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/metrics/{metric}/metricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataResponseShape', ],
        ],
        'LastDownsample' => [
            'name' => 'LastDownsample',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/metrics/{metric}/lastDownsample',
            ],
            'input' => [ 'shape' => 'LastDownsampleRequestShape', ],
            'output' => [ 'shape' => 'LastDownsampleResponseShape', ],
        ],
        'DescribeIdcs' => [
            'name' => 'DescribeIdcs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs',
            ],
            'input' => [ 'shape' => 'DescribeIdcsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIdcsResponseShape', ],
        ],
        'DescribeRooms' => [
            'name' => 'DescribeRooms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/rooms',
            ],
            'input' => [ 'shape' => 'DescribeRoomsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRoomsResponseShape', ],
        ],
        'DescribeCabinets' => [
            'name' => 'DescribeCabinets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/idcs/{idc}/cabinets',
            ],
            'input' => [ 'shape' => 'DescribeCabinetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCabinetsResponseShape', ],
        ],
    ],
    'shapes' => [
        'Cabinet' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'cabinetId' => [ 'type' => 'string', 'locationName' => 'cabinetId', ],
                'cabinetNo' => [ 'type' => 'string', 'locationName' => 'cabinetNo', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'integer', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'Idc' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
            ],
        ],
        'LastDownsampleRespItem' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'Metric' => [
            'type' => 'structure',
            'members' => [
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
            ],
        ],
        'Statistic' => [
            'type' => 'structure',
            'members' => [
                'max' => [ 'type' => 'double', 'locationName' => 'max', ],
                'min' => [ 'type' => 'double', 'locationName' => 'min', ],
                'avg' => [ 'type' => 'double', 'locationName' => 'avg', ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'statistic' =>  [ 'shape' => 'Statistic', ],
                'metric' =>  [ 'shape' => 'Metric', ],
            ],
        ],
        'Room' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'idcName' => [ 'type' => 'string', 'locationName' => 'idcName', ],
                'roomNo' => [ 'type' => 'string', 'locationName' => 'roomNo', ],
            ],
        ],
        'LastDownsampleResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'LastDownsampleRespItem', ], ],
            ],
        ],
        'LastDownsampleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMetricDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
            ],
        ],
        'DescribeMetricDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMetricDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metric', ], ],
            ],
        ],
        'DescribeMetricDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricData' =>  [ 'shape' => 'MetricData', ],
            ],
        ],
        'LastDownsampleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LastDownsampleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMetricsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeIdcsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIdcsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCabinetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCabinetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIdcsResultShape' => [
            'type' => 'structure',
            'members' => [
                'idcs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Idc', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRoomsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRoomsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRoomsResultShape' => [
            'type' => 'structure',
            'members' => [
                'rooms' => [ 'type' => 'list', 'member' => [ 'shape' => 'Room', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCabinetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
            ],
        ],
        'DescribeCabinetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'cabinets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cabinet', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeIdcsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
    ],
];
