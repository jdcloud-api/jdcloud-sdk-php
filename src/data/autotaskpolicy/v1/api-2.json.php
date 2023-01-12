<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'autotaskpolicy',
        'protocol' => 'json',
//        'serviceFullName' => 'autotaskpolicy',
//        'serviceId' => 'autotaskpolicy',
    ],
    'operations' => [
        'CreatePolicy' => [
            'name' => 'CreatePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy',
            ],
            'input' => [ 'shape' => 'CreatePolicyRequestShape', ],
            'output' => [ 'shape' => 'CreatePolicyResponseShape', ],
        ],
        'ModifyPolicy' => [
            'name' => 'ModifyPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}:modify',
            ],
            'input' => [ 'shape' => 'ModifyPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyPolicyResponseShape', ],
        ],
        'DescribePolicy' => [
            'name' => 'DescribePolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}',
            ],
            'input' => [ 'shape' => 'DescribePolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribePolicyResponseShape', ],
        ],
        'DeletePolicy' => [
            'name' => 'DeletePolicy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}',
            ],
            'input' => [ 'shape' => 'DeletePolicyRequestShape', ],
            'output' => [ 'shape' => 'DeletePolicyResponseShape', ],
        ],
        'DescribePolicies' => [
            'name' => 'DescribePolicies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/policies',
            ],
            'input' => [ 'shape' => 'DescribePoliciesRequestShape', ],
            'output' => [ 'shape' => 'DescribePoliciesResponseShape', ],
        ],
        'CopyPolicy' => [
            'name' => 'CopyPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}:copy',
            ],
            'input' => [ 'shape' => 'CopyPolicyRequestShape', ],
            'output' => [ 'shape' => 'CopyPolicyResponseShape', ],
        ],
        'EnablePolicy' => [
            'name' => 'EnablePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}:enable',
            ],
            'input' => [ 'shape' => 'EnablePolicyRequestShape', ],
            'output' => [ 'shape' => 'EnablePolicyResponseShape', ],
        ],
        'DisablePolicy' => [
            'name' => 'DisablePolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}:disable',
            ],
            'input' => [ 'shape' => 'DisablePolicyRequestShape', ],
            'output' => [ 'shape' => 'DisablePolicyResponseShape', ],
        ],
        'AssociateExecResource' => [
            'name' => 'AssociateExecResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}:associateExecResource',
            ],
            'input' => [ 'shape' => 'AssociateExecResourceRequestShape', ],
            'output' => [ 'shape' => 'AssociateExecResourceResponseShape', ],
        ],
        'DisassociateExecResource' => [
            'name' => 'DisassociateExecResource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/policy/{policyId}:disassociateExecResource',
            ],
            'input' => [ 'shape' => 'DisassociateExecResourceRequestShape', ],
            'output' => [ 'shape' => 'DisassociateExecResourceResponseShape', ],
        ],
    ],
    'shapes' => [
        'Config' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Log' => [
            'type' => 'structure',
            'members' => [
                'logState' => [ 'type' => 'string', 'locationName' => 'logState', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'ModifyPolicyDetailSpec' => [
            'type' => 'structure',
            'members' => [
                'fireTime' => [ 'type' => 'string', 'locationName' => 'fireTime', ],
                'fireCondition' => [ 'type' => 'string', 'locationName' => 'fireCondition', ],
                'execNumLimit' => [ 'type' => 'integer', 'locationName' => 'execNumLimit', ],
                'addExecConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'Config', ], ],
                'delExecConfig' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'log' =>  [ 'shape' => 'Log', ],
            ],
        ],
        'ModifyPolicySpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'policyDetailSpec' =>  [ 'shape' => 'ModifyPolicyDetailSpec', ],
            ],
        ],
        'Policy' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'policyDetail' =>  [ 'shape' => 'PolicyDetail', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'vm' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'PolicyDetail' => [
            'type' => 'structure',
            'members' => [
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
                'fireCondition' => [ 'type' => 'string', 'locationName' => 'fireCondition', ],
                'fireTime' => [ 'type' => 'string', 'locationName' => 'fireTime', ],
                'prevFireTime' => [ 'type' => 'string', 'locationName' => 'prevFireTime', ],
                'nextFireTime' => [ 'type' => 'string', 'locationName' => 'nextFireTime', ],
                'execNumLimit' => [ 'type' => 'integer', 'locationName' => 'execNumLimit', ],
                'execResource' =>  [ 'shape' => 'Resource', ],
                'execConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'Config', ], ],
                'log' =>  [ 'shape' => 'Log', ],
            ],
        ],
        'PolicyDetailSpec' => [
            'type' => 'structure',
            'members' => [
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
                'fireTime' => [ 'type' => 'string', 'locationName' => 'fireTime', ],
                'fireCondition' => [ 'type' => 'string', 'locationName' => 'fireCondition', ],
                'execNumLimit' => [ 'type' => 'integer', 'locationName' => 'execNumLimit', ],
                'execConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'Config', ], ],
                'log' =>  [ 'shape' => 'Log', ],
            ],
        ],
        'PolicySpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'policyDetailSpec' =>  [ 'shape' => 'PolicyDetailSpec', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'policyType' => [ 'type' => 'string', 'locationName' => 'policyType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'CreatePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policySpec' =>  [ 'shape' => 'PolicySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreatePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisassociateExecResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execResource' =>  [ 'shape' => 'Resource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'DisassociateExecResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateExecResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateExecResourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePoliciesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePoliciesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisablePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policy' =>  [ 'shape' => 'Policy', ],
            ],
        ],
        'ModifyPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CopyPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'CopyPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
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
        'DeletePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'ModifyPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateExecResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execResource' =>  [ 'shape' => 'Resource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'DeletePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreatePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'DisablePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'AssociateExecResourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CopyPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopyPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnablePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'EnablePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePoliciesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'ModifyPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'policySpec' =>  [ 'shape' => 'ModifyPolicySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'policyId' => [ 'type' => 'string', 'locationName' => 'policyId', ],
            ],
        ],
        'EnablePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisablePolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeletePolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePoliciesResultShape' => [
            'type' => 'structure',
            'members' => [
                'policies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
