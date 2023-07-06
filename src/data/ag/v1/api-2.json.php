<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ag',
        'protocol' => 'json',
//        'serviceFullName' => 'ag',
//        'serviceId' => 'ag',
    ],
    'operations' => [
        'DescribeScalingActivities' => [
            'name' => 'DescribeScalingActivities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/autoScaling/{agId}:describeScalingActivities',
            ],
            'input' => [ 'shape' => 'DescribeScalingActivitiesRequestShape', ],
            'output' => [ 'shape' => 'DescribeScalingActivitiesResponseShape', ],
        ],
        'DescribeAsAlarms' => [
            'name' => 'DescribeAsAlarms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/asAlarms',
            ],
            'input' => [ 'shape' => 'DescribeAsAlarmsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAsAlarmsResponseShape', ],
        ],
        'CreateAsAlarm' => [
            'name' => 'CreateAsAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asAlarms',
            ],
            'input' => [ 'shape' => 'CreateAsAlarmRequestShape', ],
            'output' => [ 'shape' => 'CreateAsAlarmResponseShape', ],
        ],
        'UpdateAsAlarm' => [
            'name' => 'UpdateAsAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asAlarms/{asAlarmId}',
            ],
            'input' => [ 'shape' => 'UpdateAsAlarmRequestShape', ],
            'output' => [ 'shape' => 'UpdateAsAlarmResponseShape', ],
        ],
        'DeleteAsAlarm' => [
            'name' => 'DeleteAsAlarm',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/asAlarms/{asAlarmId}',
            ],
            'input' => [ 'shape' => 'DeleteAsAlarmRequestShape', ],
            'output' => [ 'shape' => 'DeleteAsAlarmResponseShape', ],
        ],
        'DisableAsAlarm' => [
            'name' => 'DisableAsAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asAlarms/{asAlarmId}:disable',
            ],
            'input' => [ 'shape' => 'DisableAsAlarmRequestShape', ],
            'output' => [ 'shape' => 'DisableAsAlarmResponseShape', ],
        ],
        'EnableAsAlarm' => [
            'name' => 'EnableAsAlarm',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asAlarms/{asAlarmId}:enable',
            ],
            'input' => [ 'shape' => 'EnableAsAlarmRequestShape', ],
            'output' => [ 'shape' => 'EnableAsAlarmResponseShape', ],
        ],
        'DescribeAsCrons' => [
            'name' => 'DescribeAsCrons',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/asCrons',
            ],
            'input' => [ 'shape' => 'DescribeAsCronsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAsCronsResponseShape', ],
        ],
        'CreateAsCron' => [
            'name' => 'CreateAsCron',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asCrons',
            ],
            'input' => [ 'shape' => 'CreateAsCronRequestShape', ],
            'output' => [ 'shape' => 'CreateAsCronResponseShape', ],
        ],
        'UpdateAsCron' => [
            'name' => 'UpdateAsCron',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asCrons/{asCronId}',
            ],
            'input' => [ 'shape' => 'UpdateAsCronRequestShape', ],
            'output' => [ 'shape' => 'UpdateAsCronResponseShape', ],
        ],
        'DeleteAsCron' => [
            'name' => 'DeleteAsCron',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/asCrons/{asCronId}',
            ],
            'input' => [ 'shape' => 'DeleteAsCronRequestShape', ],
            'output' => [ 'shape' => 'DeleteAsCronResponseShape', ],
        ],
        'DisableAsCron' => [
            'name' => 'DisableAsCron',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asCrons/{asCronId}:disable',
            ],
            'input' => [ 'shape' => 'DisableAsCronRequestShape', ],
            'output' => [ 'shape' => 'DisableAsCronResponseShape', ],
        ],
        'EnableAsCron' => [
            'name' => 'EnableAsCron',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asCrons/{asCronId}:enable',
            ],
            'input' => [ 'shape' => 'EnableAsCronRequestShape', ],
            'output' => [ 'shape' => 'EnableAsCronResponseShape', ],
        ],
        'EnableAutoScaling' => [
            'name' => 'EnableAutoScaling',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/autoScaling/{agId}',
            ],
            'input' => [ 'shape' => 'EnableAutoScalingRequestShape', ],
            'output' => [ 'shape' => 'EnableAutoScalingResponseShape', ],
        ],
        'DisableAutoScaling' => [
            'name' => 'DisableAutoScaling',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/autoScaling/{agId}:disable',
            ],
            'input' => [ 'shape' => 'DisableAutoScalingRequestShape', ],
            'output' => [ 'shape' => 'DisableAutoScalingResponseShape', ],
        ],
        'UpdateAutoScaling' => [
            'name' => 'UpdateAutoScaling',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/autoScaling/{agId}:updateAutoScaling',
            ],
            'input' => [ 'shape' => 'UpdateAutoScalingRequestShape', ],
            'output' => [ 'shape' => 'UpdateAutoScalingResponseShape', ],
        ],
        'DescribeAsRules' => [
            'name' => 'DescribeAsRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/asRules',
            ],
            'input' => [ 'shape' => 'DescribeAsRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAsRulesResponseShape', ],
        ],
        'CreateAsRule' => [
            'name' => 'CreateAsRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asRules',
            ],
            'input' => [ 'shape' => 'CreateAsRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateAsRuleResponseShape', ],
        ],
        'UpdateAsRule' => [
            'name' => 'UpdateAsRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asRules/{asRuleId}',
            ],
            'input' => [ 'shape' => 'UpdateAsRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateAsRuleResponseShape', ],
        ],
        'DeleteAsRule' => [
            'name' => 'DeleteAsRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/asRules/{asRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteAsRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteAsRuleResponseShape', ],
        ],
        'ExecuteAsRule' => [
            'name' => 'ExecuteAsRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/asRules/{asRuleId}:execute',
            ],
            'input' => [ 'shape' => 'ExecuteAsRuleRequestShape', ],
            'output' => [ 'shape' => 'ExecuteAsRuleResponseShape', ],
        ],
        'DescribeAgs' => [
            'name' => 'DescribeAgs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups',
            ],
            'input' => [ 'shape' => 'DescribeAgsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgsResponseShape', ],
        ],
        'CreateAg' => [
            'name' => 'CreateAg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups',
            ],
            'input' => [ 'shape' => 'CreateAgRequestShape', ],
            'output' => [ 'shape' => 'CreateAgResponseShape', ],
        ],
        'DescribeAg' => [
            'name' => 'DescribeAg',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'DescribeAgRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgResponseShape', ],
        ],
        'UpdateAg' => [
            'name' => 'UpdateAg',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'UpdateAgRequestShape', ],
            'output' => [ 'shape' => 'UpdateAgResponseShape', ],
        ],
        'DeleteAg' => [
            'name' => 'DeleteAg',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}',
            ],
            'input' => [ 'shape' => 'DeleteAgRequestShape', ],
            'output' => [ 'shape' => 'DeleteAgResponseShape', ],
        ],
        'AbandonInstances' => [
            'name' => 'AbandonInstances',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}:abandonInstances',
            ],
            'input' => [ 'shape' => 'AbandonInstancesRequestShape', ],
            'output' => [ 'shape' => 'AbandonInstancesResponseShape', ],
        ],
        'SetInstanceTemplate' => [
            'name' => 'SetInstanceTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/availabilityGroups/{agId}:setInstanceTemplate',
            ],
            'input' => [ 'shape' => 'SetInstanceTemplateRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceTemplateResponseShape', ],
        ],
        'DescribeQuotas' => [
            'name' => 'DescribeQuotas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotasRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotasResponseShape', ],
        ],
    ],
    'shapes' => [
        'ActivityDetail' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Activity' => [
            'type' => 'structure',
            'members' => [
                'activityId' => [ 'type' => 'string', 'locationName' => 'activityId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'targetTotal' => [ 'type' => 'integer', 'locationName' => 'targetTotal', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'cause' => [ 'type' => 'string', 'locationName' => 'cause', ],
                'detail' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActivityDetail', ], ],
            ],
        ],
        'AutoscalingSpec' => [
            'type' => 'structure',
            'members' => [
                'minSize' => [ 'type' => 'integer', 'locationName' => 'minSize', ],
                'maxSize' => [ 'type' => 'integer', 'locationName' => 'maxSize', ],
                'desiredCapacity' => [ 'type' => 'integer', 'locationName' => 'desiredCapacity', ],
                'healthCheck' => [ 'type' => 'boolean', 'locationName' => 'healthCheck', ],
                'coolDownSeconds' => [ 'type' => 'integer', 'locationName' => 'coolDownSeconds', ],
                'scalingPolicy' => [ 'type' => 'string', 'locationName' => 'scalingPolicy', ],
                'removalPolicy' => [ 'type' => 'string', 'locationName' => 'removalPolicy', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'agStatus' => [ 'type' => 'string', 'locationName' => 'agStatus', ],
                'isManaged' => [ 'type' => 'boolean', 'locationName' => 'isManaged', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceSpec' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'AvailabilityGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agType' => [ 'type' => 'string', 'locationName' => 'agType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
                'autoScaling' => [ 'type' => 'boolean', 'locationName' => 'autoScaling', ],
                'configurationType' => [ 'type' => 'string', 'locationName' => 'configurationType', ],
                'placementType' => [ 'type' => 'string', 'locationName' => 'placementType', ],
                'instancesQuotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstancesQuota', ], ],
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceSpec', ], ],
                'autoscalingSpec' =>  [ 'shape' => 'AutoscalingSpec', ],
            ],
        ],
        'InstancesQuota' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'NetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'CreateStepAsRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'stepAdjustments' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateStepAdjustmentSpec', ], ],
            ],
        ],
        'CreateSimpleAsRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'CreateTargetAsRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'targetValue' => [ 'type' => 'double', 'locationName' => 'targetValue', ],
                'scaleOutHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleOutHitCount', ],
                'scaleInHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleInHitCount', ],
            ],
        ],
        'CreateStepAdjustmentSpec' => [
            'type' => 'structure',
            'members' => [
                'metricUpperBound' => [ 'type' => 'double', 'locationName' => 'metricUpperBound', ],
                'metricLowerBound' => [ 'type' => 'double', 'locationName' => 'metricLowerBound', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'TargetAsRuleInfoByAsAlarm' => [
            'type' => 'structure',
            'members' => [
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'targetValue' => [ 'type' => 'double', 'locationName' => 'targetValue', ],
                'scaleOutHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleOutHitCount', ],
                'scaleInHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleInHitCount', ],
            ],
        ],
        'StepAsRuleInfoByAsAlarm' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'stepAdjustments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StepAdjustmentInfoByAsAlarm', ], ],
            ],
        ],
        'AsRuleInfoByAsAlarm' => [
            'type' => 'structure',
            'members' => [
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'asRuleType' => [ 'type' => 'string', 'locationName' => 'asRuleType', ],
                'simpleAsRuleInfo' =>  [ 'shape' => 'SimpleAsRuleInfoByAsAlarm', ],
                'targetAsRuleInfo' =>  [ 'shape' => 'TargetAsRuleInfoByAsAlarm', ],
                'stepAsRuleInfo' =>  [ 'shape' => 'StepAsRuleInfoByAsAlarm', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SimpleAsRuleInfoByAsAlarm' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'AsAlarmInfo' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metricType' => [ 'type' => 'string', 'locationName' => 'metricType', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statistic' => [ 'type' => 'string', 'locationName' => 'statistic', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'comparison' => [ 'type' => 'string', 'locationName' => 'comparison', ],
                'hitCount' => [ 'type' => 'integer', 'locationName' => 'hitCount', ],
                'asRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'AsRuleInfoByAsAlarm', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
            ],
        ],
        'StepAdjustmentInfoByAsAlarm' => [
            'type' => 'structure',
            'members' => [
                'metricUpperBound' => [ 'type' => 'double', 'locationName' => 'metricUpperBound', ],
                'metricLowerBound' => [ 'type' => 'double', 'locationName' => 'metricLowerBound', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'AsRuleInfoByAsCron' => [
            'type' => 'structure',
            'members' => [
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'asRuleType' => [ 'type' => 'string', 'locationName' => 'asRuleType', ],
                'simpleAsRuleInfo' =>  [ 'shape' => 'SimpleAsRuleInfoByAsCron', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AsCronInfo' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'minSize' => [ 'type' => 'integer', 'locationName' => 'minSize', ],
                'maxSize' => [ 'type' => 'integer', 'locationName' => 'maxSize', ],
                'desiredCapacity' => [ 'type' => 'integer', 'locationName' => 'desiredCapacity', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'repeatType' => [ 'type' => 'string', 'locationName' => 'repeatType', ],
                'repeatValue' => [ 'type' => 'string', 'locationName' => 'repeatValue', ],
                'repeatEndTime' => [ 'type' => 'string', 'locationName' => 'repeatEndTime', ],
                'launchExpirationTime' => [ 'type' => 'integer', 'locationName' => 'launchExpirationTime', ],
                'asRule' =>  [ 'shape' => 'AsRuleInfoByAsCron', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'displayState' => [ 'type' => 'string', 'locationName' => 'displayState', ],
            ],
        ],
        'SimpleAsRuleInfoByAsCron' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'StepAdjustmentInfo' => [
            'type' => 'structure',
            'members' => [
                'metricUpperBound' => [ 'type' => 'double', 'locationName' => 'metricUpperBound', ],
                'metricLowerBound' => [ 'type' => 'double', 'locationName' => 'metricLowerBound', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'SimpleAsRuleInfo' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
                'asAlarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'AsAlarmInfoByAsRule', ], ],
                'asCrons' => [ 'type' => 'list', 'member' => [ 'shape' => 'AsCronInfoByAsRule', ], ],
            ],
        ],
        'StepAsRuleInfo' => [
            'type' => 'structure',
            'members' => [
                'asAlarm' =>  [ 'shape' => 'AsAlarmInfoByAsRule', ],
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'stepAdjustments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StepAdjustmentInfo', ], ],
            ],
        ],
        'TargetAsRuleInfo' => [
            'type' => 'structure',
            'members' => [
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'targetValue' => [ 'type' => 'double', 'locationName' => 'targetValue', ],
                'scaleOutHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleOutHitCount', ],
                'scaleInHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleInHitCount', ],
                'targetUpperBoundAsAlarm' =>  [ 'shape' => 'AsAlarmInfoByAsRule', ],
                'targetLowerBoundAsAlarm' =>  [ 'shape' => 'AsAlarmInfoByAsRule', ],
            ],
        ],
        'AsAlarmInfoByAsRule' => [
            'type' => 'structure',
            'members' => [
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metricType' => [ 'type' => 'string', 'locationName' => 'metricType', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statistic' => [ 'type' => 'string', 'locationName' => 'statistic', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'comparison' => [ 'type' => 'string', 'locationName' => 'comparison', ],
                'hitCount' => [ 'type' => 'integer', 'locationName' => 'hitCount', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
            ],
        ],
        'AsCronInfoByAsRule' => [
            'type' => 'structure',
            'members' => [
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'repeatType' => [ 'type' => 'string', 'locationName' => 'repeatType', ],
                'repeatValue' => [ 'type' => 'string', 'locationName' => 'repeatValue', ],
                'repeatEndTime' => [ 'type' => 'string', 'locationName' => 'repeatEndTime', ],
                'launchExpirationTime' => [ 'type' => 'integer', 'locationName' => 'launchExpirationTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'displayState' => [ 'type' => 'string', 'locationName' => 'displayState', ],
            ],
        ],
        'AsRuleInfo' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'asRuleType' => [ 'type' => 'string', 'locationName' => 'asRuleType', ],
                'simpleAsRuleInfo' =>  [ 'shape' => 'SimpleAsRuleInfo', ],
                'targetAsRuleInfo' =>  [ 'shape' => 'TargetAsRuleInfo', ],
                'stepAsRuleInfo' =>  [ 'shape' => 'StepAsRuleInfo', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'Notification' => [
            'type' => 'structure',
            'members' => [
                'types' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'UpdateSimpleAsRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'UpdateStepAsRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'adjustmentType' => [ 'type' => 'string', 'locationName' => 'adjustmentType', ],
                'stepAdjustments' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateStepAdjustmentSpec', ], ],
            ],
        ],
        'UpdateTargetAsRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'targetValue' => [ 'type' => 'double', 'locationName' => 'targetValue', ],
                'scaleOutHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleOutHitCount', ],
                'scaleInHitCount' => [ 'type' => 'integer', 'locationName' => 'scaleInHitCount', ],
            ],
        ],
        'UpdateStepAdjustmentSpec' => [
            'type' => 'structure',
            'members' => [
                'metricUpperBound' => [ 'type' => 'double', 'locationName' => 'metricUpperBound', ],
                'metricLowerBound' => [ 'type' => 'double', 'locationName' => 'metricLowerBound', ],
                'adjustmentValue' => [ 'type' => 'integer', 'locationName' => 'adjustmentValue', ],
            ],
        ],
        'AutoscalingSpecByUpdate' => [
            'type' => 'structure',
            'members' => [
                'minSize' => [ 'type' => 'integer', 'locationName' => 'minSize', ],
                'maxSize' => [ 'type' => 'integer', 'locationName' => 'maxSize', ],
                'desiredCapacity' => [ 'type' => 'integer', 'locationName' => 'desiredCapacity', ],
                'healthCheck' => [ 'type' => 'boolean', 'locationName' => 'healthCheck', ],
                'coolDownSeconds' => [ 'type' => 'integer', 'locationName' => 'coolDownSeconds', ],
                'scalingPolicy' => [ 'type' => 'string', 'locationName' => 'scalingPolicy', ],
                'removalPolicy' => [ 'type' => 'string', 'locationName' => 'removalPolicy', ],
            ],
        ],
        'DescribeScalingActivitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeScalingActivitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeScalingActivitiesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeScalingActivitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'scalingActivities' => [ 'type' => 'list', 'member' => [ 'shape' => 'Activity', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAsAlarmsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAsAlarmsResultShape', ],
            ],
        ],
        'DescribeAsAlarmsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateAsAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableAsAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
            ],
        ],
        'DisableAsAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAsAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
            ],
        ],
        'DisableAsAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
            ],
        ],
        'UpdateAsAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAsAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
            ],
        ],
        'CreateAsAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metricType' => [ 'type' => 'string', 'locationName' => 'metricType', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statistic' => [ 'type' => 'string', 'locationName' => 'statistic', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'comparison' => [ 'type' => 'string', 'locationName' => 'comparison', ],
                'hitCount' => [ 'type' => 'integer', 'locationName' => 'hitCount', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAsAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAsAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAsAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateAsAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'statistic' => [ 'type' => 'string', 'locationName' => 'statistic', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'comparison' => [ 'type' => 'string', 'locationName' => 'comparison', ],
                'hitCount' => [ 'type' => 'integer', 'locationName' => 'hitCount', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asAlarmId' => [ 'type' => 'string', 'locationName' => 'asAlarmId', ],
            ],
        ],
        'DescribeAsAlarmsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'asAlarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'AsAlarmInfo', ], ],
            ],
        ],
        'EnableAsAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableAsAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAsAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAsAlarmResultShape', ],
            ],
        ],
        'EnableAsCronRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
            ],
        ],
        'EnableAsCronResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAsCronsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAsCronsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAsCronsResultShape', ],
            ],
        ],
        'DisableAsCronRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
            ],
        ],
        'CreateAsCronResultShape' => [
            'type' => 'structure',
            'members' => [
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
            ],
        ],
        'DisableAsCronResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateAsCronResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAsCronRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
            ],
        ],
        'DeleteAsCronResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAsCronResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAsCronResultShape', ],
            ],
        ],
        'UpdateAsCronResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAsCronsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'asCrons' => [ 'type' => 'list', 'member' => [ 'shape' => 'AsCronInfo', ], ],
            ],
        ],
        'DeleteAsCronResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableAsCronResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableAsCronResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAsCronRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'minSize' => [ 'type' => 'integer', 'locationName' => 'minSize', ],
                'maxSize' => [ 'type' => 'integer', 'locationName' => 'maxSize', ],
                'desiredCapacity' => [ 'type' => 'integer', 'locationName' => 'desiredCapacity', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'repeatType' => [ 'type' => 'string', 'locationName' => 'repeatType', ],
                'repeatValue' => [ 'type' => 'string', 'locationName' => 'repeatValue', ],
                'repeatEndTime' => [ 'type' => 'string', 'locationName' => 'repeatEndTime', ],
                'launchExpirationTime' => [ 'type' => 'integer', 'locationName' => 'launchExpirationTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateAsCronRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
                'minSize' => [ 'type' => 'integer', 'locationName' => 'minSize', ],
                'maxSize' => [ 'type' => 'integer', 'locationName' => 'maxSize', ],
                'desiredCapacity' => [ 'type' => 'integer', 'locationName' => 'desiredCapacity', ],
                'launchTime' => [ 'type' => 'string', 'locationName' => 'launchTime', ],
                'repeatType' => [ 'type' => 'string', 'locationName' => 'repeatType', ],
                'repeatValue' => [ 'type' => 'string', 'locationName' => 'repeatValue', ],
                'repeatEndTime' => [ 'type' => 'string', 'locationName' => 'repeatEndTime', ],
                'launchExpirationTime' => [ 'type' => 'integer', 'locationName' => 'launchExpirationTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asCronId' => [ 'type' => 'string', 'locationName' => 'asCronId', ],
            ],
        ],
        'DisableAutoScalingResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableAutoScalingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'UpdateAutoScalingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'autoscalingSpec' =>  [ 'shape' => 'AutoscalingSpecByUpdate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'UpdateAutoScalingResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAutoScalingResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAutoScalingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableAutoScalingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAutoScalingResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableAutoScalingRequestShape' => [
            'type' => 'structure',
            'members' => [
                'isManaged' => [ 'type' => 'boolean', 'locationName' => 'isManaged', ],
                'autoscalingSpec' =>  [ 'shape' => 'AutoscalingSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'ExecuteAsRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
            ],
        ],
        'DescribeAsRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAsRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAsRulesResultShape', ],
            ],
        ],
        'UpdateAsRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAsRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'asRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'AsRuleInfo', ], ],
            ],
        ],
        'DeleteAsRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAsRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'asRuleType' => [ 'type' => 'string', 'locationName' => 'asRuleType', ],
                'simpleAsRuleSpec' =>  [ 'shape' => 'CreateSimpleAsRuleSpec', ],
                'targetAsRuleSpec' =>  [ 'shape' => 'CreateTargetAsRuleSpec', ],
                'stepAsRuleSpec' =>  [ 'shape' => 'CreateStepAsRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateAsRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'simpleAsRuleSpec' =>  [ 'shape' => 'UpdateSimpleAsRuleSpec', ],
                'targetAsRuleSpec' =>  [ 'shape' => 'UpdateTargetAsRuleSpec', ],
                'stepAsRuleSpec' =>  [ 'shape' => 'UpdateStepAsRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
            ],
        ],
        'ExecuteAsRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAsRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
            ],
        ],
        'DeleteAsRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'asRuleId' => [ 'type' => 'string', 'locationName' => 'asRuleId', ],
            ],
        ],
        'ExecuteAsRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAsRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAsRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateAsRuleResultShape', ],
            ],
        ],
        'DeleteAsRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AbandonInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'CreateAgResultShape' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DeleteAgResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetInstanceTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'agName' => [ 'type' => 'string', 'locationName' => 'agName', ],
                'agType' => [ 'type' => 'string', 'locationName' => 'agType', ],
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configurationType' => [ 'type' => 'string', 'locationName' => 'configurationType', ],
                'placementType' => [ 'type' => 'string', 'locationName' => 'placementType', ],
                'autoscalingSpec' =>  [ 'shape' => 'AutoscalingSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AbandonInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetInstanceTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAgResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetInstanceTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTemplateId' => [ 'type' => 'string', 'locationName' => 'instanceTemplateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeAgsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAgsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAgResultShape' => [
            'type' => 'structure',
            'members' => [
                'ag' =>  [ 'shape' => 'AvailabilityGroup', ],
            ],
        ],
        'UpdateAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'DescribeAgsResultShape' => [
            'type' => 'structure',
            'members' => [
                'ags' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailabilityGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAgsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AbandonInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteAgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
            ],
        ],
        'UpdateAgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotasResultShape' => [
            'type' => 'structure',
            'members' => [
                'quotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'Quota', ], ],
            ],
        ],
        'DescribeQuotasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
