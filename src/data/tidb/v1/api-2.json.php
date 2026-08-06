<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'tidb',
        'protocol' => 'json',
//        'serviceFullName' => 'tidb',
//        'serviceId' => 'tidb',
    ],
    'operations' => [
        'DescribeAccounts' => [
            'name' => 'DescribeAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'DescribeAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'CreateAccountWithoutPrivilege' => [
            'name' => 'CreateAccountWithoutPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts:createAccountWithoutPrivilege',
            ],
            'input' => [ 'shape' => 'CreateAccountWithoutPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountWithoutPrivilegeResponseShape', ],
        ],
        'DescribeAccountList' => [
            'name' => 'DescribeAccountList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accountsList',
            ],
            'input' => [ 'shape' => 'DescribeAccountListRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountListResponseShape', ],
        ],
        'ShowAccountPrivilege' => [
            'name' => 'ShowAccountPrivilege',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}/privilege',
            ],
            'input' => [ 'shape' => 'ShowAccountPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'ShowAccountPrivilegeResponseShape', ],
        ],
        'ShowGrantablePrivileges' => [
            'name' => 'ShowGrantablePrivileges',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/privileges',
            ],
            'input' => [ 'shape' => 'ShowGrantablePrivilegesRequestShape', ],
            'output' => [ 'shape' => 'ShowGrantablePrivilegesResponseShape', ],
        ],
        'DeleteAccount' => [
            'name' => 'DeleteAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DeleteAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccountResponseShape', ],
        ],
        'GrantAccountPrivilege' => [
            'name' => 'GrantAccountPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:grantAccountPrivilege',
            ],
            'input' => [ 'shape' => 'GrantAccountPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'GrantAccountPrivilegeResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
        ],
        'DescribeBackups' => [
            'name' => 'DescribeBackups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'DescribeBackupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupsResponseShape', ],
        ],
        'CreateBackup' => [
            'name' => 'CreateBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'CreateBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupResponseShape', ],
        ],
        'DeleteBackup' => [
            'name' => 'DeleteBackup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupResponseShape', ],
        ],
        'DescribeOrderableInstanceType' => [
            'name' => 'DescribeOrderableInstanceType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/orderableInstanceType',
            ],
            'input' => [ 'shape' => 'DescribeOrderableInstanceTypeRequestShape', ],
            'output' => [ 'shape' => 'DescribeOrderableInstanceTypeResponseShape', ],
        ],
        'DescribeVersions' => [
            'name' => 'DescribeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/versions',
            ],
            'input' => [ 'shape' => 'DescribeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeVersionsResponseShape', ],
        ],
        'DescribeDatabases' => [
            'name' => 'DescribeDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'DescribeDatabasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatabasesResponseShape', ],
        ],
        'CreateDatabase' => [
            'name' => 'CreateDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'CreateDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateDatabaseResponseShape', ],
        ],
        'DeleteDatabase' => [
            'name' => 'DeleteDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'DeleteDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatabaseResponseShape', ],
        ],
        'ShowTables' => [
            'name' => 'ShowTables',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}/tables',
            ],
            'input' => [ 'shape' => 'ShowTablesRequestShape', ],
            'output' => [ 'shape' => 'ShowTablesResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstanceAttributes' => [
            'name' => 'DescribeInstanceAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAttributesResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeInstances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeInstanceClasses' => [
            'name' => 'DescribeInstanceClasses',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeInstanceClasses',
            ],
            'input' => [ 'shape' => 'DescribeInstanceClassesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceClassesResponseShape', ],
        ],
        'CreateInstanceByTime' => [
            'name' => 'CreateInstanceByTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createInstanceByTime',
            ],
            'input' => [ 'shape' => 'CreateInstanceByTimeRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceByTimeResponseShape', ],
        ],
        'CreateInstanceFromBackup' => [
            'name' => 'CreateInstanceFromBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances:createInstanceFromBackup',
            ],
            'input' => [ 'shape' => 'CreateInstanceFromBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceFromBackupResponseShape', ],
        ],
        'DescribeRestoreTimeInterval' => [
            'name' => 'DescribeRestoreTimeInterval',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeRestoreTimeInterval',
            ],
            'input' => [ 'shape' => 'DescribeRestoreTimeIntervalRequestShape', ],
            'output' => [ 'shape' => 'DescribeRestoreTimeIntervalResponseShape', ],
        ],
        'DescribeBackupPolicy' => [
            'name' => 'DescribeBackupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeBackupPolicy',
            ],
            'input' => [ 'shape' => 'DescribeBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPolicyResponseShape', ],
        ],
        'ModifyBackupPolicy' => [
            'name' => 'ModifyBackupPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyBackupPolicy',
            ],
            'input' => [ 'shape' => 'ModifyBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyBackupPolicyResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'ModifyNodeNum' => [
            'name' => 'ModifyNodeNum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyNodeNum',
            ],
            'input' => [ 'shape' => 'ModifyNodeNumRequestShape', ],
            'output' => [ 'shape' => 'ModifyNodeNumResponseShape', ],
        ],
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'DescribeNodes' => [
            'name' => 'DescribeNodes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/nodes',
            ],
            'input' => [ 'shape' => 'DescribeNodesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodesResponseShape', ],
        ],
        'DescribeParameters' => [
            'name' => 'DescribeParameters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'DescribeParametersRequestShape', ],
            'output' => [ 'shape' => 'DescribeParametersResponseShape', ],
        ],
        'ModifyParameters' => [
            'name' => 'ModifyParameters',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'ModifyParametersRequestShape', ],
            'output' => [ 'shape' => 'ModifyParametersResponseShape', ],
        ],
        'RebootPod' => [
            'name' => 'RebootPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootpod',
            ],
            'input' => [ 'shape' => 'RebootPodRequestShape', ],
            'output' => [ 'shape' => 'RebootPodResponseShape', ],
        ],
        'DescribeRebootPlan' => [
            'name' => 'DescribeRebootPlan',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeRebootPlan',
            ],
            'input' => [ 'shape' => 'DescribeRebootPlanRequestShape', ],
            'output' => [ 'shape' => 'DescribeRebootPlanResponseShape', ],
        ],
        'UpgradeEngineVersion' => [
            'name' => 'UpgradeEngineVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:upgradeEngineVersion',
            ],
            'input' => [ 'shape' => 'UpgradeEngineVersionRequestShape', ],
            'output' => [ 'shape' => 'UpgradeEngineVersionResponseShape', ],
        ],
        'DescribeUpgradeVersions' => [
            'name' => 'DescribeUpgradeVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeUpgradeVersions',
            ],
            'input' => [ 'shape' => 'DescribeUpgradeVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradeVersionsResponseShape', ],
        ],
        'DescribeUpgradePlan' => [
            'name' => 'DescribeUpgradePlan',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeUpgradePlan',
            ],
            'input' => [ 'shape' => 'DescribeUpgradePlanRequestShape', ],
            'output' => [ 'shape' => 'DescribeUpgradePlanResponseShape', ],
        ],
        'EnableInternetAccess' => [
            'name' => 'EnableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableInternetAccess',
            ],
            'input' => [ 'shape' => 'EnableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'EnableInternetAccessResponseShape', ],
        ],
        'DisableInternetAccess' => [
            'name' => 'DisableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableInternetAccess',
            ],
            'input' => [ 'shape' => 'DisableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'DisableInternetAccessResponseShape', ],
        ],
        'EnableSSL' => [
            'name' => 'EnableSSL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ssl:enableSSL',
            ],
            'input' => [ 'shape' => 'EnableSSLRequestShape', ],
            'output' => [ 'shape' => 'EnableSSLResponseShape', ],
        ],
        'DisableSSL' => [
            'name' => 'DisableSSL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ssl:disableSSL',
            ],
            'input' => [ 'shape' => 'DisableSSLRequestShape', ],
            'output' => [ 'shape' => 'DisableSSLResponseShape', ],
        ],
        'DescribeSSL' => [
            'name' => 'DescribeSSL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ssl',
            ],
            'input' => [ 'shape' => 'DescribeSSLRequestShape', ],
            'output' => [ 'shape' => 'DescribeSSLResponseShape', ],
        ],
        'DescribeDataMigration' => [
            'name' => 'DescribeDataMigration',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/migration',
            ],
            'input' => [ 'shape' => 'DescribeDataMigrationRequestShape', ],
            'output' => [ 'shape' => 'DescribeDataMigrationResponseShape', ],
        ],
        'CreateDataMigration' => [
            'name' => 'CreateDataMigration',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/migration',
            ],
            'input' => [ 'shape' => 'CreateDataMigrationRequestShape', ],
            'output' => [ 'shape' => 'CreateDataMigrationResponseShape', ],
        ],
        'VerifyFilefromOSS' => [
            'name' => 'VerifyFilefromOSS',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/migration:verifyFilefromOSS',
            ],
            'input' => [ 'shape' => 'VerifyFilefromOSSRequestShape', ],
            'output' => [ 'shape' => 'VerifyFilefromOSSResponseShape', ],
        ],
        'DescribeReplications' => [
            'name' => 'DescribeReplications',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications',
            ],
            'input' => [ 'shape' => 'DescribeReplicationsRequestShape', ],
            'output' => [ 'shape' => 'DescribeReplicationsResponseShape', ],
        ],
        'CreateReplication' => [
            'name' => 'CreateReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications',
            ],
            'input' => [ 'shape' => 'CreateReplicationRequestShape', ],
            'output' => [ 'shape' => 'CreateReplicationResponseShape', ],
        ],
        'DeleteReplication' => [
            'name' => 'DeleteReplication',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteReplicationRequestShape', ],
            'output' => [ 'shape' => 'DeleteReplicationResponseShape', ],
        ],
        'ResumeReplication' => [
            'name' => 'ResumeReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}:resumeReplication',
            ],
            'input' => [ 'shape' => 'ResumeReplicationRequestShape', ],
            'output' => [ 'shape' => 'ResumeReplicationResponseShape', ],
        ],
        'StopReplication' => [
            'name' => 'StopReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}:stopReplication',
            ],
            'input' => [ 'shape' => 'StopReplicationRequestShape', ],
            'output' => [ 'shape' => 'StopReplicationResponseShape', ],
        ],
        'ModifyReplication' => [
            'name' => 'ModifyReplication',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/replications/{taskId}:modifyReplication',
            ],
            'input' => [ 'shape' => 'ModifyReplicationRequestShape', ],
            'output' => [ 'shape' => 'ModifyReplicationResponseShape', ],
        ],
        'GetTemplate' => [
            'name' => 'GetTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/templates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetTemplateRequestShape', ],
            'output' => [ 'shape' => 'GetTemplateResponseShape', ],
        ],
        'ModifyTemplate' => [
            'name' => 'ModifyTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/templates/{templateId}',
            ],
            'input' => [ 'shape' => 'ModifyTemplateRequestShape', ],
            'output' => [ 'shape' => 'ModifyTemplateResponseShape', ],
        ],
        'DeleteTemplate' => [
            'name' => 'DeleteTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/templates/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteTemplateResponseShape', ],
        ],
        'GetTemplates' => [
            'name' => 'GetTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/templates',
            ],
            'input' => [ 'shape' => 'GetTemplatesRequestShape', ],
            'output' => [ 'shape' => 'GetTemplatesResponseShape', ],
        ],
        'CreateTemplate' => [
            'name' => 'CreateTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/templates',
            ],
            'input' => [ 'shape' => 'CreateTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateTemplateResponseShape', ],
        ],
        'ApplyTemplate' => [
            'name' => 'ApplyTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{gid}/templates/{id}',
            ],
            'input' => [ 'shape' => 'ApplyTemplateRequestShape', ],
            'output' => [ 'shape' => 'ApplyTemplateResponseShape', ],
        ],
        'ApplyTemplateBatch' => [
            'name' => 'ApplyTemplateBatch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/templates/{id}/apply',
            ],
            'input' => [ 'shape' => 'ApplyTemplateBatchRequestShape', ],
            'output' => [ 'shape' => 'ApplyTemplateBatchResponseShape', ],
        ],
        'GetConfigurableParameters' => [
            'name' => 'GetConfigurableParameters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/parameters',
            ],
            'input' => [ 'shape' => 'GetConfigurableParametersRequestShape', ],
            'output' => [ 'shape' => 'GetConfigurableParametersResponseShape', ],
        ],
        'GetInstanceParameterLog' => [
            'name' => 'GetInstanceParameterLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{id}/changeLog',
            ],
            'input' => [ 'shape' => 'GetInstanceParameterLogRequestShape', ],
            'output' => [ 'shape' => 'GetInstanceParameterLogResponseShape', ],
        ],
        'CloneTemplate' => [
            'name' => 'CloneTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/templates/{id}/clone',
            ],
            'input' => [ 'shape' => 'CloneTemplateRequestShape', ],
            'output' => [ 'shape' => 'CloneTemplateResponseShape', ],
        ],
        'CompareParameter' => [
            'name' => 'CompareParameter',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/templates/{tid}/instance/{gid}',
            ],
            'input' => [ 'shape' => 'CompareParameterRequestShape', ],
            'output' => [ 'shape' => 'CompareParameterResponseShape', ],
        ],
        'DescribeWhiteList' => [
            'name' => 'DescribeWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListResponseShape', ],
        ],
        'AddWhiteListGroup' => [
            'name' => 'AddWhiteListGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'AddWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'AddWhiteListGroupResponseShape', ],
        ],
        'ModifyWhiteList' => [
            'name' => 'ModifyWhiteList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListResponseShape', ],
        ],
        'DeleteWhiteListGroup' => [
            'name' => 'DeleteWhiteListGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DeleteWhiteListGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteWhiteListGroupResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccountPrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'Account' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
            ],
        ],
        'TablePrivileges' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privilege' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GrantablePrivilege' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DBPrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GlobalPrivilege' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AuditLog' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'userHost' => [ 'type' => 'string', 'locationName' => 'userHost', ],
                'event' => [ 'type' => 'string', 'locationName' => 'event', ],
                'cmd' => [ 'type' => 'string', 'locationName' => 'cmd', ],
            ],
        ],
        'AvaiableZoneInfo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupStatus' => [ 'type' => 'string', 'locationName' => 'backupStatus', ],
                'backupCreateTime' => [ 'type' => 'string', 'locationName' => 'backupCreateTime', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'backupMode' => [ 'type' => 'string', 'locationName' => 'backupMode', ],
                'backupSizeByte' => [ 'type' => 'long', 'locationName' => 'backupSizeByte', ],
                'backupDbVersion' => [ 'type' => 'string', 'locationName' => 'backupDbVersion', ],
                'backupPolicy' => [ 'type' => 'string', 'locationName' => 'backupPolicy', ],
                'backupDbs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BackupSpec' => [
            'type' => 'structure',
            'members' => [
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'dbName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ConnectionAddr' => [
            'type' => 'structure',
            'members' => [
                'addrType' => [ 'type' => 'string', 'locationName' => 'addrType', ],
                'internetAddr' => [ 'type' => 'string', 'locationName' => 'internetAddr', ],
                'intranetAddr' => [ 'type' => 'string', 'locationName' => 'intranetAddr', ],
                'manageAddr' => [ 'type' => 'string', 'locationName' => 'manageAddr', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
        'DBAccessPrivilege' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'Database' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'databaseStatus' => [ 'type' => 'string', 'locationName' => 'databaseStatus', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'accessPrivilege' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBAccessPrivilege', ], ],
            ],
        ],
        'DatabasePrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tablePrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'TablePrivilege', ], ],
            ],
        ],
        'TablePrivilege' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'currentValue' => [ 'type' => 'string', 'locationName' => 'currentValue', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'minValue' => [ 'type' => 'string', 'locationName' => 'minValue', ],
                'maxValue' => [ 'type' => 'string', 'locationName' => 'maxValue', ],
                'needRestart' => [ 'type' => 'string', 'locationName' => 'needRestart', ],
            ],
        ],
        'FilterGroup' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
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
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'classGroup' => [ 'type' => 'string', 'locationName' => 'classGroup', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'defaultStorageGB' => [ 'type' => 'integer', 'locationName' => 'defaultStorageGB', ],
                'storageGB' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'DefaultGroup' => [
            'type' => 'structure',
            'members' => [
                'basicConfig' => [ 'type' => 'string', 'locationName' => 'basicConfig', ],
                'standardConfig' => [ 'type' => 'string', 'locationName' => 'standardConfig', ],
                'enterpriseConfig' => [ 'type' => 'string', 'locationName' => 'enterpriseConfig', ],
            ],
        ],
        'FullImportTask' => [
            'type' => 'structure',
            'members' => [
                'ossLink' => [ 'type' => 'string', 'locationName' => 'ossLink', ],
                'dataSizeGB' => [ 'type' => 'integer', 'locationName' => 'dataSizeGB', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceNamespace' => [ 'type' => 'string', 'locationName' => 'instanceNamespace', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'totalNodeNum' => [ 'type' => 'integer', 'locationName' => 'totalNodeNum', ],
                'totalCPU' => [ 'type' => 'integer', 'locationName' => 'totalCPU', ],
                'totalMemoryGB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryGB', ],
                'totalStorageGB' => [ 'type' => 'integer', 'locationName' => 'totalStorageGB', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tikvNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'pdNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
            ],
        ],
        'NodeSpec' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeNum' => [ 'type' => 'integer', 'locationName' => 'nodeNum', ],
                'nodeClass' => [ 'type' => 'string', 'locationName' => 'nodeClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageGB' => [ 'type' => 'integer', 'locationName' => 'storageGB', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
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
        'InstanceParameterChangeLog' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'previousValue' => [ 'type' => 'string', 'locationName' => 'previousValue', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleteTime' => [ 'type' => 'string', 'locationName' => 'deleteTime', ],
                'deleted' => [ 'type' => 'integer', 'locationName' => 'deleted', ],
            ],
        ],
        'K8sServiceAddr' => [
            'type' => 'structure',
            'members' => [
                'addrType' => [ 'type' => 'string', 'locationName' => 'addrType', ],
                'accessType' => [ 'type' => 'string', 'locationName' => 'accessType', ],
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
        'MigrationTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'migrationType' => [ 'type' => 'string', 'locationName' => 'migrationType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'ModifyParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
            ],
        ],
        'NodeFlavor' => [
            'type' => 'structure',
            'members' => [
                'maxNum' => [ 'type' => 'integer', 'locationName' => 'maxNum', ],
                'minNum' => [ 'type' => 'integer', 'locationName' => 'minNum', ],
                'defaultGroup' =>  [ 'shape' => 'DefaultGroup', ],
                'flavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'OpsTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ProcesslistElem' => [
            'type' => 'structure',
            'members' => [
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'time' => [ 'type' => 'integer', 'locationName' => 'time', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'info' => [ 'type' => 'string', 'locationName' => 'info', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'mem' => [ 'type' => 'integer', 'locationName' => 'mem', ],
                'txnStart' => [ 'type' => 'string', 'locationName' => 'txnStart', ],
            ],
        ],
        'ReplicationModifySpec' => [
            'type' => 'structure',
            'members' => [
                'targetComment' => [ 'type' => 'string', 'locationName' => 'targetComment', ],
                'targetUser' => [ 'type' => 'string', 'locationName' => 'targetUser', ],
                'targetPassword' => [ 'type' => 'string', 'locationName' => 'targetPassword', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaVersion' => [ 'type' => 'string', 'locationName' => 'kafkaVersion', ],
                'replicationObjects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'partitionNum' => [ 'type' => 'string', 'locationName' => 'partitionNum', ],
                'maxMessageBytes' => [ 'type' => 'string', 'locationName' => 'maxMessageBytes', ],
                'dispatchers' => [ 'type' => 'string', 'locationName' => 'dispatchers', ],
            ],
        ],
        'ReplicationSpec' => [
            'type' => 'structure',
            'members' => [
                'startTS' => [ 'type' => 'string', 'locationName' => 'startTS', ],
                'startTsInt' => [ 'type' => 'integer', 'locationName' => 'startTsInt', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'replicationObjects' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'targetIP' => [ 'type' => 'string', 'locationName' => 'targetIP', ],
                'targetPort' => [ 'type' => 'string', 'locationName' => 'targetPort', ],
                'targetComment' => [ 'type' => 'string', 'locationName' => 'targetComment', ],
                'targetUser' => [ 'type' => 'string', 'locationName' => 'targetUser', ],
                'targetPassword' => [ 'type' => 'string', 'locationName' => 'targetPassword', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaVersion' => [ 'type' => 'string', 'locationName' => 'kafkaVersion', ],
                'kafkaProtocol' => [ 'type' => 'string', 'locationName' => 'kafkaProtocol', ],
                'dispatchers' => [ 'type' => 'string', 'locationName' => 'dispatchers', ],
                'partitionNum' => [ 'type' => 'integer', 'locationName' => 'partitionNum', ],
                'maxMessageBytes' => [ 'type' => 'integer', 'locationName' => 'maxMessageBytes', ],
            ],
        ],
        'ReplicationTask' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'targetType' => [ 'type' => 'string', 'locationName' => 'targetType', ],
                'replicationObjects' => [ 'type' => 'string', 'locationName' => 'replicationObjects', ],
                'targetIP' => [ 'type' => 'string', 'locationName' => 'targetIP', ],
                'targetPort' => [ 'type' => 'string', 'locationName' => 'targetPort', ],
                'targetUser' => [ 'type' => 'string', 'locationName' => 'targetUser', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaVersion' => [ 'type' => 'string', 'locationName' => 'kafkaVersion', ],
                'targetComment' => [ 'type' => 'string', 'locationName' => 'targetComment', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'checkpointTime' => [ 'type' => 'string', 'locationName' => 'checkpointTime', ],
                'checkpointLag' => [ 'type' => 'string', 'locationName' => 'checkpointLag', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'partitionNum' => [ 'type' => 'integer', 'locationName' => 'partitionNum', ],
                'dispatchers' => [ 'type' => 'string', 'locationName' => 'dispatchers', ],
                'maxMessageBytes' => [ 'type' => 'integer', 'locationName' => 'maxMessageBytes', ],
            ],
        ],
        'ResourceGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ruPerSecond' => [ 'type' => 'string', 'locationName' => 'ruPerSecond', ],
                'priority' => [ 'type' => 'string', 'locationName' => 'priority', ],
                'burstable' => [ 'type' => 'string', 'locationName' => 'burstable', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'SlowQuery' => [
            'type' => 'structure',
            'members' => [
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'connectionId' => [ 'type' => 'string', 'locationName' => 'connectionId', ],
                'timestamp' => [ 'type' => 'double', 'locationName' => 'timestamp', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'query' => [ 'type' => 'string', 'locationName' => 'query', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'queryTime' => [ 'type' => 'integer', 'locationName' => 'queryTime', ],
                'timeString' => [ 'type' => 'string', 'locationName' => 'timeString', ],
            ],
        ],
        'SlowQueryRow' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'SlowQueryTimeRow' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'percentage' => [ 'type' => 'float', 'locationName' => 'percentage', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowQueryTimeRow', ], ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageTypeStatus' => [ 'type' => 'integer', 'locationName' => 'storageTypeStatus', ],
                'orderableinstanceClasses' => [ 'type' => 'list', 'member' => [ 'shape' => 'Flavor', ], ],
            ],
        ],
        'Az' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azStatus' => [ 'type' => 'integer', 'locationName' => 'azStatus', ],
                'orderableStorageTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
            ],
        ],
        'Template' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateDescription' => [ 'type' => 'string', 'locationName' => 'templateDescription', ],
                'templateRegionId' => [ 'type' => 'string', 'locationName' => 'templateRegionId', ],
                'templateType' => [ 'type' => 'integer', 'locationName' => 'templateType', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateParameter', ], ],
                'databaseVersion' => [ 'type' => 'string', 'locationName' => 'databaseVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'needReboot' => [ 'type' => 'boolean', 'locationName' => 'needReboot', ],
            ],
        ],
        'SingleParameter' => [
            'type' => 'structure',
            'members' => [
                'parameterName' => [ 'type' => 'string', 'locationName' => 'parameterName', ],
                'parameterValue' => [ 'type' => 'string', 'locationName' => 'parameterValue', ],
            ],
        ],
        'TemplateBasic' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateDescription' => [ 'type' => 'string', 'locationName' => 'templateDescription', ],
                'databaseVersion' => [ 'type' => 'string', 'locationName' => 'databaseVersion', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'SingleParameter', ], ],
            ],
        ],
        'TemplateParameter' => [
            'type' => 'structure',
            'members' => [
                'parameterId' => [ 'type' => 'string', 'locationName' => 'parameterId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'parameterName' => [ 'type' => 'string', 'locationName' => 'parameterName', ],
                'parameterValue' => [ 'type' => 'string', 'locationName' => 'parameterValue', ],
                'parameterDescription' => [ 'type' => 'string', 'locationName' => 'parameterDescription', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'minValue' => [ 'type' => 'string', 'locationName' => 'minValue', ],
                'maxValue' => [ 'type' => 'string', 'locationName' => 'maxValue', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'needRestart' => [ 'type' => 'boolean', 'locationName' => 'needRestart', ],
            ],
        ],
        'ParameterSpec' => [
            'type' => 'structure',
            'members' => [
                'parameterId' => [ 'type' => 'string', 'locationName' => 'parameterId', ],
                'parameterName' => [ 'type' => 'string', 'locationName' => 'parameterName', ],
                'parameterDescription' => [ 'type' => 'string', 'locationName' => 'parameterDescription', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'restartRequired' => [ 'type' => 'boolean', 'locationName' => 'restartRequired', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'minSize' => [ 'type' => 'string', 'locationName' => 'minSize', ],
                'maxSize' => [ 'type' => 'string', 'locationName' => 'maxSize', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
            ],
        ],
        'ParameterCommon' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'dbVersion' => [ 'type' => 'string', 'locationName' => 'dbVersion', ],
                'templateValue' => [ 'type' => 'string', 'locationName' => 'templateValue', ],
                'instanceValue' => [ 'type' => 'string', 'locationName' => 'instanceValue', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ParameterComparison' => [
            'type' => 'structure',
            'members' => [
                'left' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterCommon', ], ],
                'right' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterCommon', ], ],
                'conflict' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterCommon', ], ],
            ],
        ],
        'ArchitectureVersion' => [
            'type' => 'structure',
            'members' => [
                'engineVersion' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'arch' => [ 'type' => 'string', 'locationName' => 'arch', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'TiDBNode' => [
            'type' => 'structure',
            'members' => [
                'nodeId' => [ 'type' => 'string', 'locationName' => 'nodeId', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'nodeStatus' => [ 'type' => 'string', 'locationName' => 'nodeStatus', ],
                'cpuUtil' => [ 'type' => 'float', 'locationName' => 'cpuUtil', ],
                'memeryUtil' => [ 'type' => 'float', 'locationName' => 'memeryUtil', ],
                'diskUsage' => [ 'type' => 'float', 'locationName' => 'diskUsage', ],
            ],
        ],
        'TidbInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceNamespace' => [ 'type' => 'string', 'locationName' => 'instanceNamespace', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'totalNodeNum' => [ 'type' => 'integer', 'locationName' => 'totalNodeNum', ],
                'classGroup' => [ 'type' => 'string', 'locationName' => 'classGroup', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tikvNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'pdNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'totalCPU' => [ 'type' => 'integer', 'locationName' => 'totalCPU', ],
                'totalMemoryGB' => [ 'type' => 'integer', 'locationName' => 'totalMemoryGB', ],
                'totalStorageGB' => [ 'type' => 'integer', 'locationName' => 'totalStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'connectionAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConnectionAddr', ], ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'monitorInternalDomainName' => [ 'type' => 'string', 'locationName' => 'monitorInternalDomainName', ],
                'monitorPublicDomainName' => [ 'type' => 'string', 'locationName' => 'monitorPublicDomainName', ],
                'pdInternalDomainName' => [ 'type' => 'string', 'locationName' => 'pdInternalDomainName', ],
                'pdPublicDomainName' => [ 'type' => 'string', 'locationName' => 'pdPublicDomainName', ],
                'dmsInternalDomainName' => [ 'type' => 'string', 'locationName' => 'dmsInternalDomainName', ],
                'dmsPublicDomainName' => [ 'type' => 'string', 'locationName' => 'dmsPublicDomainName', ],
                'ticdcInternalDomainName' => [ 'type' => 'string', 'locationName' => 'ticdcInternalDomainName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'monitorPort' => [ 'type' => 'string', 'locationName' => 'monitorPort', ],
                'pdPort' => [ 'type' => 'string', 'locationName' => 'pdPort', ],
                'dmsPort' => [ 'type' => 'string', 'locationName' => 'dmsPort', ],
                'ticdcPort' => [ 'type' => 'string', 'locationName' => 'ticdcPort', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'existBackup' => [ 'type' => 'boolean', 'locationName' => 'existBackup', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'TidbInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceNamespace' => [ 'type' => 'string', 'locationName' => 'instanceNamespace', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tikvNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'pdNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'ipv6Enable' => [ 'type' => 'boolean', 'locationName' => 'ipv6Enable', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'tagSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'DescribeAccountListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantAccountPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ShowGrantablePrivilegesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ShowAccountPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ShowAccountPrivilegeResultShape', ],
            ],
        ],
        'ShowGrantablePrivilegesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ShowGrantablePrivilegesResultShape', ],
            ],
        ],
        'ShowAccountPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dbPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBPrivilege', ], ],
                'tablePrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'TablePrivileges', ], ],
            ],
        ],
        'DeleteAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeAccountListResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAccountWithoutPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'bindResourceGroup' => [ 'type' => 'string', 'locationName' => 'bindResourceGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'bindResourceGroup' => [ 'type' => 'string', 'locationName' => 'bindResourceGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountListResultShape', ],
            ],
        ],
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'CreateAccountWithoutPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountWithoutPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantAccountPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ShowAccountPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GrantAccountPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountHost' => [ 'type' => 'string', 'locationName' => 'accountHost', ],
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'databasePrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabasePrivilege', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ShowGrantablePrivilegesResultShape' => [
            'type' => 'structure',
            'members' => [
                'globalPrivileges' =>  [ 'shape' => 'GrantablePrivilege', ],
                'dbPrivileges' =>  [ 'shape' => 'GrantablePrivilege', ],
                'tablePrivileges' =>  [ 'shape' => 'GrantablePrivilege', ],
            ],
        ],
        'DeleteBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'sortType' => [ 'type' => 'string', 'locationName' => 'sortType', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'canCreateBackup' => [ 'type' => 'boolean', 'locationName' => 'canCreateBackup', ],
                'backupMaxCount' => [ 'type' => 'integer', 'locationName' => 'backupMaxCount', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupSpec' =>  [ 'shape' => 'BackupSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeOrderableInstanceTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'engineStatus' => [ 'type' => 'integer', 'locationName' => 'engineStatus', ],
                'orderableAZs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Az', ], ],
            ],
        ],
        'DescribeOrderableInstanceTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOrderableInstanceTypeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeOrderableInstanceTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'versions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVersionsResultShape', ],
            ],
        ],
        'DeleteDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DeleteDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ShowTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'ShowTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tableNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDatabasesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'databases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Database', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ShowTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ShowTablesResultShape', ],
            ],
        ],
        'CreateDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRestoreTimeIntervalRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'opsTagSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'OpsTag', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeUpgradePlanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'TidbInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RebootPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nodeType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'timing' => [ 'type' => 'string', 'locationName' => 'timing', ],
                'cancel' => [ 'type' => 'boolean', 'locationName' => 'cancel', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpgradeEngineVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSSLResultShape', ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRebootPlanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRebootPlanResultShape', ],
            ],
        ],
        'DescribeUpgradeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceClassesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'classGroup' => [ 'type' => 'string', 'locationName' => 'classGroup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisableSSLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAttributesResultShape', ],
            ],
        ],
        'DescribeUpgradePlanResultShape' => [
            'type' => 'structure',
            'members' => [
                'newVersion' => [ 'type' => 'string', 'locationName' => 'newVersion', ],
                'upgradeTime' => [ 'type' => 'string', 'locationName' => 'upgradeTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyNodeNumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyNodeNumResultShape', ],
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSSLResultShape' => [
            'type' => 'structure',
            'members' => [
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
            ],
        ],
        'DescribeUpgradeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'versions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisableSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParametersResultShape', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'instanceSpec' =>  [ 'shape' => 'TidbInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradeVersionsResultShape', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRebootPlanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tikvNodeNum' => [ 'type' => 'integer', 'locationName' => 'tikvNodeNum', ],
                'pdNodeNum' => [ 'type' => 'integer', 'locationName' => 'pdNodeNum', ],
                'tidbNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'monitorNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableSSLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceByTimeResultShape', ],
            ],
        ],
        'DescribeNodesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNodesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
            ],
        ],
        'ModifyParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModifyParam', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'ModifyNodeNumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tidbNodeNum' => [ 'type' => 'integer', 'locationName' => 'tidbNodeNum', ],
                'tikvNodeNum' => [ 'type' => 'integer', 'locationName' => 'tikvNodeNum', ],
                'pdNodeNum' => [ 'type' => 'integer', 'locationName' => 'pdNodeNum', ],
                'tiflashNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'ticdcNodeSpec' =>  [ 'shape' => 'NodeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootPodResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceClassesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceClassesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'instanceSpec' =>  [ 'shape' => 'TidbInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUpgradePlanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradePlanResultShape', ],
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'autoIncBackup' => [ 'type' => 'boolean', 'locationName' => 'autoIncBackup', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceFromBackupResultShape', ],
            ],
        ],
        'DisableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpgradeEngineVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'timing' => [ 'type' => 'string', 'locationName' => 'timing', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceClassesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tidbFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'tikvFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'pdFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'monitorFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'tiflashFlavors' =>  [ 'shape' => 'NodeFlavor', ],
                'ticdcFlavors' =>  [ 'shape' => 'NodeFlavor', ],
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'retentionPeriod' => [ 'type' => 'integer', 'locationName' => 'retentionPeriod', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'autoIncBackup' => [ 'type' => 'boolean', 'locationName' => 'autoIncBackup', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'DescribeRestoreTimeIntervalResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRestoreTimeIntervalResultShape', ],
            ],
        ],
        'ModifyParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRestoreTimeIntervalResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'DescribeNodesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeNodesResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'TiDBNode', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateInstanceByTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DisableSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tidbInstanceAttributes' =>  [ 'shape' => 'TidbInstanceAttribute', ],
            ],
        ],
        'DescribeParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeParam', ], ],
            ],
        ],
        'UpgradeEngineVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'CreateInstanceFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'EnableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyNodeNumResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
            ],
        ],
        'ModifyParametersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeRebootPlanResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scheduledTime' => [ 'type' => 'string', 'locationName' => 'scheduledTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeDataMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryStartTime' => [ 'type' => 'string', 'locationName' => 'queryStartTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDataMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDataMigrationResultShape', ],
            ],
        ],
        'CreateDataMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDataMigrationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDataMigrationResultShape' => [
            'type' => 'structure',
            'members' => [
                'migrationTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'MigrationTask', ], ],
            ],
        ],
        'VerifyFilefromOSSResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'string', 'locationName' => 'success', ],
                'errMsg' => [ 'type' => 'string', 'locationName' => 'errMsg', ],
            ],
        ],
        'VerifyFilefromOSSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ossLink' => [ 'type' => 'string', 'locationName' => 'ossLink', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'VerifyFilefromOSSResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'VerifyFilefromOSSResultShape', ],
            ],
        ],
        'CreateDataMigrationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'migrationType' => [ 'type' => 'string', 'locationName' => 'migrationType', ],
                'importTask' =>  [ 'shape' => 'FullImportTask', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'replication' =>  [ 'shape' => 'ReplicationSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReplicationsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'StopReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateReplicationResultShape', ],
            ],
        ],
        'DeleteReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'replicationModify' =>  [ 'shape' => 'ReplicationModifySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
                'replicationId' => [ 'type' => 'string', 'locationName' => 'replicationId', ],
            ],
        ],
        'ResumeReplicationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResumeReplicationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeReplicationsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeReplicationsResultShape', ],
            ],
        ],
        'ResumeReplicationResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReplicationsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'replications' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReplicationTask', ], ],
            ],
        ],
        'GetTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetTemplateResultShape', ],
            ],
        ],
        'GetConfigurableParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetConfigurableParametersResultShape', ],
            ],
        ],
        'GetConfigurableParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'TemplateBasic', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ApplyTemplateBatchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'parameterTemplate' => [ 'type' => 'list', 'member' => [ 'shape' => 'Template', ], ],
            ],
        ],
        'GetTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'Template', ],
            ],
        ],
        'ApplyTemplateBatchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ApplyTemplateBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CloneTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'Template', ],
            ],
        ],
        'ApplyTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetInstanceParameterLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'changeLog' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceParameterChangeLog', ], ],
            ],
        ],
        'ApplyTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'Template', ],
            ],
        ],
        'CompareParameterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CompareParameterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetConfigurableParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterSpec', ], ],
            ],
        ],
        'CloneTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateDescription' => [ 'type' => 'string', 'locationName' => 'templateDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ModifyTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateDescription' => [ 'type' => 'string', 'locationName' => 'templateDescription', ],
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'SingleParameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'GetTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetTemplatesResultShape', ],
            ],
        ],
        'GetInstanceParameterLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'CompareParameterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'tid' => [ 'type' => 'string', 'locationName' => 'tid', ],
                'gid' => [ 'type' => 'string', 'locationName' => 'gid', ],
            ],
        ],
        'CloneTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CloneTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetInstanceParameterLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetInstanceParameterLogResultShape', ],
            ],
        ],
        'DeleteTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ApplyTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'gid' => [ 'type' => 'string', 'locationName' => 'gid', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'template' =>  [ 'shape' => 'Template', ],
            ],
        ],
        'GetTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateTemplateResultShape', ],
            ],
        ],
        'ModifyTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifyTemplateResultShape', ],
            ],
        ],
        'GetTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'desc' => [ 'type' => 'boolean', 'locationName' => 'desc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CompareParameterResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameterComparison' =>  [ 'shape' => 'ParameterComparison', ],
            ],
        ],
        'DeleteWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListResultShape', ],
            ],
        ],
        'DescribeWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'DeleteWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'AddWhiteListGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
    ],
];
