<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rds',
        'protocol' => 'json',
//        'serviceFullName' => 'rds',
//        'serviceId' => 'rds',
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
        'DescribeAccountPrivilege' => [
            'name' => 'DescribeAccountPrivilege',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DescribeAccountPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountPrivilegeResponseShape', ],
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
        'GrantPrivilege' => [
            'name' => 'GrantPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:grantPrivilege',
            ],
            'input' => [ 'shape' => 'GrantPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'GrantPrivilegeResponseShape', ],
        ],
        'RevokePrivilege' => [
            'name' => 'RevokePrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:revokePrivilege',
            ],
            'input' => [ 'shape' => 'RevokePrivilegeRequestShape', ],
            'output' => [ 'shape' => 'RevokePrivilegeResponseShape', ],
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
        'CreateSuperAccount' => [
            'name' => 'CreateSuperAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts:createSuperAccount',
            ],
            'input' => [ 'shape' => 'CreateSuperAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateSuperAccountResponseShape', ],
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
        'DescribeAccountsForOps' => [
            'name' => 'DescribeAccountsForOps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accountsForOps',
            ],
            'input' => [ 'shape' => 'DescribeAccountsForOpsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsForOpsResponseShape', ],
        ],
        'CreateAccountForOps' => [
            'name' => 'CreateAccountForOps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accountsForOps',
            ],
            'input' => [ 'shape' => 'CreateAccountForOpsRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountForOpsResponseShape', ],
        ],
        'ModifyAccountForOps' => [
            'name' => 'ModifyAccountForOps',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accountsForOps',
            ],
            'input' => [ 'shape' => 'ModifyAccountForOpsRequestShape', ],
            'output' => [ 'shape' => 'ModifyAccountForOpsResponseShape', ],
        ],
        'DescribeAudit' => [
            'name' => 'DescribeAudit',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'DescribeAuditRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditResponseShape', ],
        ],
        'CreateAudit' => [
            'name' => 'CreateAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'CreateAuditRequestShape', ],
            'output' => [ 'shape' => 'CreateAuditResponseShape', ],
        ],
        'DeleteAudit' => [
            'name' => 'DeleteAudit',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'DeleteAuditRequestShape', ],
            'output' => [ 'shape' => 'DeleteAuditResponseShape', ],
        ],
        'DescribeAuditOptions' => [
            'name' => 'DescribeAuditOptions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditOptions',
            ],
            'input' => [ 'shape' => 'DescribeAuditOptionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditOptionsResponseShape', ],
        ],
        'ModifyAudit' => [
            'name' => 'ModifyAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:modifyAudit',
            ],
            'input' => [ 'shape' => 'ModifyAuditRequestShape', ],
            'output' => [ 'shape' => 'ModifyAuditResponseShape', ],
        ],
        'DescribeAuditFiles' => [
            'name' => 'DescribeAuditFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditFiles',
            ],
            'input' => [ 'shape' => 'DescribeAuditFilesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditFilesResponseShape', ],
        ],
        'DescribeAuditDownloadURL' => [
            'name' => 'DescribeAuditDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeAuditDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditDownloadURLResponseShape', ],
        ],
        'EnableAudit' => [
            'name' => 'EnableAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:enableAudit',
            ],
            'input' => [ 'shape' => 'EnableAuditRequestShape', ],
            'output' => [ 'shape' => 'EnableAuditResponseShape', ],
        ],
        'DisableAudit' => [
            'name' => 'DisableAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:disableAudit',
            ],
            'input' => [ 'shape' => 'DisableAuditRequestShape', ],
            'output' => [ 'shape' => 'DisableAuditResponseShape', ],
        ],
        'DescribeAuditResult' => [
            'name' => 'DescribeAuditResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditResult',
            ],
            'input' => [ 'shape' => 'DescribeAuditResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditResultResponseShape', ],
        ],
        'DescribeAzs' => [
            'name' => 'DescribeAzs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/azs',
            ],
            'input' => [ 'shape' => 'DescribeAzsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAzsResponseShape', ],
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
        'DescribeBackupDownloadURL' => [
            'name' => 'DescribeBackupDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}:describeBackupDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeBackupDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupDownloadURLResponseShape', ],
        ],
        'DescribeBackupSynchronicities' => [
            'name' => 'DescribeBackupSynchronicities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities',
            ],
            'input' => [ 'shape' => 'DescribeBackupSynchronicitiesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupSynchronicitiesResponseShape', ],
        ],
        'CreateBackupSynchronicity' => [
            'name' => 'CreateBackupSynchronicity',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities',
            ],
            'input' => [ 'shape' => 'CreateBackupSynchronicityRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupSynchronicityResponseShape', ],
        ],
        'DeleteBackupSynchronicity' => [
            'name' => 'DeleteBackupSynchronicity',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities/{serviceId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupSynchronicityRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupSynchronicityResponseShape', ],
        ],
        'CreateInstanceByTimeInCrossRegion' => [
            'name' => 'CreateInstanceByTimeInCrossRegion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities:createInstanceByTimeInCrossRegion',
            ],
            'input' => [ 'shape' => 'CreateInstanceByTimeInCrossRegionRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceByTimeInCrossRegionResponseShape', ],
        ],
        'DescribeBinlogs' => [
            'name' => 'DescribeBinlogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/binlogs',
            ],
            'input' => [ 'shape' => 'DescribeBinlogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBinlogsResponseShape', ],
        ],
        'DescribeBinlogDownloadURL' => [
            'name' => 'DescribeBinlogDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/binlogs/{binlogBackupId}:describeBinlogDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeBinlogDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeBinlogDownloadURLResponseShape', ],
        ],
        'ClearBinlogs' => [
            'name' => 'ClearBinlogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/binlogs:clearBinlogs',
            ],
            'input' => [ 'shape' => 'ClearBinlogsRequestShape', ],
            'output' => [ 'shape' => 'ClearBinlogsResponseShape', ],
        ],
        'AlterTableWithOnlineDDL' => [
            'name' => 'AlterTableWithOnlineDDL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:alterTableWithOnlineDDL',
            ],
            'input' => [ 'shape' => 'AlterTableWithOnlineDDLRequestShape', ],
            'output' => [ 'shape' => 'AlterTableWithOnlineDDLResponseShape', ],
        ],
        'DescribePrivilege' => [
            'name' => 'DescribePrivilege',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/common:describePrivilege',
            ],
            'input' => [ 'shape' => 'DescribePrivilegeRequestShape', ],
            'output' => [ 'shape' => 'DescribePrivilegeResponseShape', ],
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
        'RestoreDatabaseFromBackup' => [
            'name' => 'RestoreDatabaseFromBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromBackup',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromBackupRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromBackupResponseShape', ],
        ],
        'RestoreDatabaseFromFile' => [
            'name' => 'RestoreDatabaseFromFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromFile',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromFileRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromFileResponseShape', ],
        ],
        'RestoreDatabaseFromOSS' => [
            'name' => 'RestoreDatabaseFromOSS',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromOSS',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromOSSRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromOSSResponseShape', ],
        ],
        'ModifyDatabaseComment' => [
            'name' => 'ModifyDatabaseComment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:modifyDatabaseComment',
            ],
            'input' => [ 'shape' => 'ModifyDatabaseCommentRequestShape', ],
            'output' => [ 'shape' => 'ModifyDatabaseCommentResponseShape', ],
        ],
        'DescribeErrorLogs' => [
            'name' => 'DescribeErrorLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/errorLogs',
            ],
            'input' => [ 'shape' => 'DescribeErrorLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeErrorLogsResponseShape', ],
        ],
        'DescribeImportFiles' => [
            'name' => 'DescribeImportFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles',
            ],
            'input' => [ 'shape' => 'DescribeImportFilesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImportFilesResponseShape', ],
        ],
        'GetUploadKey' => [
            'name' => 'GetUploadKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles:getUploadKey',
            ],
            'input' => [ 'shape' => 'GetUploadKeyRequestShape', ],
            'output' => [ 'shape' => 'GetUploadKeyResponseShape', ],
        ],
        'SetImportFileShared' => [
            'name' => 'SetImportFileShared',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles/{fileName}:setShared',
            ],
            'input' => [ 'shape' => 'SetImportFileSharedRequestShape', ],
            'output' => [ 'shape' => 'SetImportFileSharedResponseShape', ],
        ],
        'DeleteImportFile' => [
            'name' => 'DeleteImportFile',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles/{fileName}',
            ],
            'input' => [ 'shape' => 'DeleteImportFileRequestShape', ],
            'output' => [ 'shape' => 'DeleteImportFileResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
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
        'EnableEnhancedBackup' => [
            'name' => 'EnableEnhancedBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableEnhancedBackup',
            ],
            'input' => [ 'shape' => 'EnableEnhancedBackupRequestShape', ],
            'output' => [ 'shape' => 'EnableEnhancedBackupResponseShape', ],
        ],
        'DescribeBackupSpace' => [
            'name' => 'DescribeBackupSpace',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeBackupSpace',
            ],
            'input' => [ 'shape' => 'DescribeBackupSpaceRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupSpaceResponseShape', ],
        ],
        'DescribeBackupCharge' => [
            'name' => 'DescribeBackupCharge',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances:describeBackupCharge',
            ],
            'input' => [ 'shape' => 'DescribeBackupChargeRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupChargeResponseShape', ],
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
        'FailoverInstance' => [
            'name' => 'FailoverInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:failoverInstance',
            ],
            'input' => [ 'shape' => 'FailoverInstanceRequestShape', ],
            'output' => [ 'shape' => 'FailoverInstanceResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootInstance',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
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
        'RestoreInstance' => [
            'name' => 'RestoreInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:restoreInstance',
            ],
            'input' => [ 'shape' => 'RestoreInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestoreInstanceResponseShape', ],
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
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
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
        'CreateROInstance' => [
            'name' => 'CreateROInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createROInstance',
            ],
            'input' => [ 'shape' => 'CreateROInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateROInstanceResponseShape', ],
        ],
        'ModifyConnectionMode' => [
            'name' => 'ModifyConnectionMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyConnectionMode',
            ],
            'input' => [ 'shape' => 'ModifyConnectionModeRequestShape', ],
            'output' => [ 'shape' => 'ModifyConnectionModeResponseShape', ],
        ],
        'DescribeLatestRestoreTime' => [
            'name' => 'DescribeLatestRestoreTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeLatestRestoreTime',
            ],
            'input' => [ 'shape' => 'DescribeLatestRestoreTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeLatestRestoreTimeResponseShape', ],
        ],
        'ModifyParameterGroup' => [
            'name' => 'ModifyParameterGroup',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyParameterGroup',
            ],
            'input' => [ 'shape' => 'ModifyParameterGroupRequestShape', ],
            'output' => [ 'shape' => 'ModifyParameterGroupResponseShape', ],
        ],
        'ExchangeInstanceDns' => [
            'name' => 'ExchangeInstanceDns',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:exchangeInstanceDns',
            ],
            'input' => [ 'shape' => 'ExchangeInstanceDnsRequestShape', ],
            'output' => [ 'shape' => 'ExchangeInstanceDnsResponseShape', ],
        ],
        'ModifyInstanceAz' => [
            'name' => 'ModifyInstanceAz',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceAz',
            ],
            'input' => [ 'shape' => 'ModifyInstanceAzRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceAzResponseShape', ],
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
        'RestoreInstanceByTime' => [
            'name' => 'RestoreInstanceByTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:restoreInstanceByTime',
            ],
            'input' => [ 'shape' => 'RestoreInstanceByTimeRequestShape', ],
            'output' => [ 'shape' => 'RestoreInstanceByTimeResponseShape', ],
        ],
        'ModifyActiveDirectory' => [
            'name' => 'ModifyActiveDirectory',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyActiveDirectory',
            ],
            'input' => [ 'shape' => 'ModifyActiveDirectoryRequestShape', ],
            'output' => [ 'shape' => 'ModifyActiveDirectoryResponseShape', ],
        ],
        'ModifyInstanceMaintainTime' => [
            'name' => 'ModifyInstanceMaintainTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceMaintainTime',
            ],
            'input' => [ 'shape' => 'ModifyInstanceMaintainTimeRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceMaintainTimeResponseShape', ],
        ],
        'DescribeInstanceMaintainTime' => [
            'name' => 'DescribeInstanceMaintainTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceMaintainTime',
            ],
            'input' => [ 'shape' => 'DescribeInstanceMaintainTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceMaintainTimeResponseShape', ],
        ],
        'SwitchForModifyingInstanceSpec' => [
            'name' => 'SwitchForModifyingInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:switchForModifyingInstanceSpec',
            ],
            'input' => [ 'shape' => 'SwitchForModifyingInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'SwitchForModifyingInstanceSpecResponseShape', ],
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
        'UpgradeEngineVersion' => [
            'name' => 'UpgradeEngineVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:upgradeEngineVersion',
            ],
            'input' => [ 'shape' => 'UpgradeEngineVersionRequestShape', ],
            'output' => [ 'shape' => 'UpgradeEngineVersionResponseShape', ],
        ],
        'EnableIntercept' => [
            'name' => 'EnableIntercept',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/intercept:enableIntercept',
            ],
            'input' => [ 'shape' => 'EnableInterceptRequestShape', ],
            'output' => [ 'shape' => 'EnableInterceptResponseShape', ],
        ],
        'DisableIntercept' => [
            'name' => 'DisableIntercept',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/intercept:disableIntercept',
            ],
            'input' => [ 'shape' => 'DisableInterceptRequestShape', ],
            'output' => [ 'shape' => 'DisableInterceptResponseShape', ],
        ],
        'DescribeInterceptResult' => [
            'name' => 'DescribeInterceptResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/intercept:describeInterceptResult',
            ],
            'input' => [ 'shape' => 'DescribeInterceptResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeInterceptResultResponseShape', ],
        ],
        'DescribeIntercept' => [
            'name' => 'DescribeIntercept',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/intercept',
            ],
            'input' => [ 'shape' => 'DescribeInterceptRequestShape', ],
            'output' => [ 'shape' => 'DescribeInterceptResponseShape', ],
        ],
        'DescribeLogs' => [
            'name' => 'DescribeLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/log:describeLogs',
            ],
            'input' => [ 'shape' => 'DescribeLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogsResponseShape', ],
        ],
        'UpdateLogDownloadURLInternal' => [
            'name' => 'UpdateLogDownloadURLInternal',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/log/{logId}:updateLogDownloadURLInternal',
            ],
            'input' => [ 'shape' => 'UpdateLogDownloadURLInternalRequestShape', ],
            'output' => [ 'shape' => 'UpdateLogDownloadURLInternalResponseShape', ],
        ],
        'DescribeLogDownloadURL' => [
            'name' => 'DescribeLogDownloadURL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/log/{logId}:describeLogDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeLogDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogDownloadURLResponseShape', ],
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
        'DeleteParameterGroup' => [
            'name' => 'DeleteParameterGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteParameterGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteParameterGroupResponseShape', ],
        ],
        'ModifyParameterGroupAttribute' => [
            'name' => 'ModifyParameterGroupAttribute',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}:modifyParameterGroupAttribute',
            ],
            'input' => [ 'shape' => 'ModifyParameterGroupAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyParameterGroupAttributeResponseShape', ],
        ],
        'DescribeParameterGroups' => [
            'name' => 'DescribeParameterGroups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups',
            ],
            'input' => [ 'shape' => 'DescribeParameterGroupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeParameterGroupsResponseShape', ],
        ],
        'CreateParameterGroup' => [
            'name' => 'CreateParameterGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups',
            ],
            'input' => [ 'shape' => 'CreateParameterGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateParameterGroupResponseShape', ],
        ],
        'DescribeParameterGroupParameters' => [
            'name' => 'DescribeParameterGroupParameters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}/parameters',
            ],
            'input' => [ 'shape' => 'DescribeParameterGroupParametersRequestShape', ],
            'output' => [ 'shape' => 'DescribeParameterGroupParametersResponseShape', ],
        ],
        'ModifyParameterGroupParameters' => [
            'name' => 'ModifyParameterGroupParameters',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}/parameters',
            ],
            'input' => [ 'shape' => 'ModifyParameterGroupParametersRequestShape', ],
            'output' => [ 'shape' => 'ModifyParameterGroupParametersResponseShape', ],
        ],
        'DescribeParameterModifyRecords' => [
            'name' => 'DescribeParameterModifyRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}/records',
            ],
            'input' => [ 'shape' => 'DescribeParameterModifyRecordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeParameterModifyRecordsResponseShape', ],
        ],
        'CopyParameterGroup' => [
            'name' => 'CopyParameterGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups:copyParameterGroup',
            ],
            'input' => [ 'shape' => 'CopyParameterGroupRequestShape', ],
            'output' => [ 'shape' => 'CopyParameterGroupResponseShape', ],
        ],
        'DescribeParameterGroupAttachedInstances' => [
            'name' => 'DescribeParameterGroupAttachedInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeParameterGroupAttachedInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeParameterGroupAttachedInstancesResponseShape', ],
        ],
        'DescribeIndexPerformance' => [
            'name' => 'DescribeIndexPerformance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeIndexPerformance',
            ],
            'input' => [ 'shape' => 'DescribeIndexPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeIndexPerformanceResponseShape', ],
        ],
        'DescribeQueryPerformance' => [
            'name' => 'DescribeQueryPerformance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeQueryPerformance',
            ],
            'input' => [ 'shape' => 'DescribeQueryPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeQueryPerformanceResponseShape', ],
        ],
        'DescribeSlowLogAttributes' => [
            'name' => 'DescribeSlowLogAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeSlowLogAttributes',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogAttributesResponseShape', ],
        ],
        'DescribeSlowLogs' => [
            'name' => 'DescribeSlowLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeSlowLogs',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogsResponseShape', ],
        ],
        'DescribeActiveQueryPerformance' => [
            'name' => 'DescribeActiveQueryPerformance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeActiveQueryPerformance',
            ],
            'input' => [ 'shape' => 'DescribeActiveQueryPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeActiveQueryPerformanceResponseShape', ],
        ],
        'DescribeErrorLog' => [
            'name' => 'DescribeErrorLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeErrorLog',
            ],
            'input' => [ 'shape' => 'DescribeErrorLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeErrorLogResponseShape', ],
        ],
        'DescribeReadWriteProxies' => [
            'name' => 'DescribeReadWriteProxies',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy',
            ],
            'input' => [ 'shape' => 'DescribeReadWriteProxiesRequestShape', ],
            'output' => [ 'shape' => 'DescribeReadWriteProxiesResponseShape', ],
        ],
        'CreateReadWriteProxy' => [
            'name' => 'CreateReadWriteProxy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy',
            ],
            'input' => [ 'shape' => 'CreateReadWriteProxyRequestShape', ],
            'output' => [ 'shape' => 'CreateReadWriteProxyResponseShape', ],
        ],
        'DescribeReadWriteProxyAttribute' => [
            'name' => 'DescribeReadWriteProxyAttribute',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy/{readWriteProxyId}',
            ],
            'input' => [ 'shape' => 'DescribeReadWriteProxyAttributeRequestShape', ],
            'output' => [ 'shape' => 'DescribeReadWriteProxyAttributeResponseShape', ],
        ],
        'DeleteReadWriteProxy' => [
            'name' => 'DeleteReadWriteProxy',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy/{readWriteProxyId}',
            ],
            'input' => [ 'shape' => 'DeleteReadWriteProxyRequestShape', ],
            'output' => [ 'shape' => 'DeleteReadWriteProxyResponseShape', ],
        ],
        'EnableReadWriteProxyInternetAccess' => [
            'name' => 'EnableReadWriteProxyInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy/{readWriteProxyId}:enableReadWriteProxyInternetAccess',
            ],
            'input' => [ 'shape' => 'EnableReadWriteProxyInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'EnableReadWriteProxyInternetAccessResponseShape', ],
        ],
        'DisableReadWriteProxyInternetAccess' => [
            'name' => 'DisableReadWriteProxyInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy/{readWriteProxyId}:disableReadWriteProxyInternetAccess',
            ],
            'input' => [ 'shape' => 'DisableReadWriteProxyInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'DisableReadWriteProxyInternetAccessResponseShape', ],
        ],
        'ModifyReadWriteProxy' => [
            'name' => 'ModifyReadWriteProxy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/readWriteProxy/{readWriteProxyId}:modifyReadWriteProxy',
            ],
            'input' => [ 'shape' => 'ModifyReadWriteProxyRequestShape', ],
            'output' => [ 'shape' => 'ModifyReadWriteProxyResponseShape', ],
        ],
        'DescribeTables' => [
            'name' => 'DescribeTables',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}/tables',
            ],
            'input' => [ 'shape' => 'DescribeTablesRequestShape', ],
            'output' => [ 'shape' => 'DescribeTablesResponseShape', ],
        ],
        'DescribeTde' => [
            'name' => 'DescribeTde',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/tde',
            ],
            'input' => [ 'shape' => 'DescribeTdeRequestShape', ],
            'output' => [ 'shape' => 'DescribeTdeResponseShape', ],
        ],
        'EnableTde' => [
            'name' => 'EnableTde',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/tde:enableTde',
            ],
            'input' => [ 'shape' => 'EnableTdeRequestShape', ],
            'output' => [ 'shape' => 'EnableTdeResponseShape', ],
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
        'ModifyWhiteList' => [
            'name' => 'ModifyWhiteList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListResponseShape', ],
        ],
    ],
    'shapes' => [
        'ADService' => [
            'type' => 'structure',
            'members' => [
                'adResourceId' => [ 'type' => 'string', 'locationName' => 'adResourceId', ],
                'adStatus' => [ 'type' => 'string', 'locationName' => 'adStatus', ],
            ],
        ],
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
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'accountType' => [ 'type' => 'string', 'locationName' => 'accountType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'notes' => [ 'type' => 'string', 'locationName' => 'notes', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
            ],
        ],
        'AttachedDBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
                'parameterStatus' => [ 'type' => 'string', 'locationName' => 'parameterStatus', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'AuditFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupStatus' => [ 'type' => 'string', 'locationName' => 'backupStatus', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'backupMode' => [ 'type' => 'string', 'locationName' => 'backupMode', ],
                'backupMethod' => [ 'type' => 'string', 'locationName' => 'backupMethod', ],
                'backupUnit' => [ 'type' => 'string', 'locationName' => 'backupUnit', ],
                'backupFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'backupSizeByte' => [ 'type' => 'long', 'locationName' => 'backupSizeByte', ],
            ],
        ],
        'BackupSpec' => [
            'type' => 'structure',
            'members' => [
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'dbNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BackupSynchronicity' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'serviceStatus' => [ 'type' => 'string', 'locationName' => 'serviceStatus', ],
                'srcRegion' => [ 'type' => 'string', 'locationName' => 'srcRegion', ],
                'destRegion' => [ 'type' => 'string', 'locationName' => 'destRegion', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'newestDataTime' => [ 'type' => 'string', 'locationName' => 'newestDataTime', ],
            ],
        ],
        'BackupSynchronicityAbstract' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'destRegion' => [ 'type' => 'string', 'locationName' => 'destRegion', ],
            ],
        ],
        'Binlog' => [
            'type' => 'structure',
            'members' => [
                'binlogBackupId' => [ 'type' => 'string', 'locationName' => 'binlogBackupId', ],
                'binlogName' => [ 'type' => 'string', 'locationName' => 'binlogName', ],
                'binlogSizeKB' => [ 'type' => 'long', 'locationName' => 'binlogSizeKB', ],
                'binlogStartTime' => [ 'type' => 'string', 'locationName' => 'binlogStartTime', ],
                'binlogEndTime' => [ 'type' => 'string', 'locationName' => 'binlogEndTime', ],
            ],
        ],
        'DBAccessPrivilege' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'backupSynchronicity' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupSynchronicityAbstract', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'sourceInstanceId' => [ 'type' => 'string', 'locationName' => 'sourceInstanceId', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
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
        'DBInstanceAccountForOps' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expiredTime' => [ 'type' => 'string', 'locationName' => 'expiredTime', ],
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DBInstanceNode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DBInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'minorVersion' => [ 'type' => 'string', 'locationName' => 'minorVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
                'parameterGroupName' => [ 'type' => 'string', 'locationName' => 'parameterGroupName', ],
                'parameterStatus' => [ 'type' => 'string', 'locationName' => 'parameterStatus', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'sourceInstanceId' => [ 'type' => 'string', 'locationName' => 'sourceInstanceId', ],
                'roInstanceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'primaryNode' =>  [ 'shape' => 'DBInstanceNode', ],
                'secondaryNode' =>  [ 'shape' => 'DBInstanceNode', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'activeDirectory' =>  [ 'shape' => 'ADService', ],
                'roInstanceProxyID' => [ 'type' => 'string', 'locationName' => 'roInstanceProxyID', ],
                'roInstanceProxyName' => [ 'type' => 'string', 'locationName' => 'roInstanceProxyName', ],
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
                'syncTaskId' => [ 'type' => 'string', 'locationName' => 'syncTaskId', ],
                'instanceVip' => [ 'type' => 'string', 'locationName' => 'instanceVip', ],
            ],
        ],
        'DBInstanceInternal' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'accessibleStatus' => [ 'type' => 'integer', 'locationName' => 'accessibleStatus', ],
            ],
        ],
        'DBInstanceParameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configureValue' => [ 'type' => 'string', 'locationName' => 'configureValue', ],
                'runningValue' => [ 'type' => 'string', 'locationName' => 'runningValue', ],
                'range' => [ 'type' => 'string', 'locationName' => 'range', ],
                'needRestart' => [ 'type' => 'string', 'locationName' => 'needRestart', ],
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
        'DBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroup' => [ 'type' => 'string', 'locationName' => 'parameterGroup', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'tagSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'DBInstanceSpecWithoutCharge' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroup' => [ 'type' => 'string', 'locationName' => 'parameterGroup', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
            ],
        ],
        'Database' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbStatus' => [ 'type' => 'string', 'locationName' => 'dbStatus', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'accessPrivilege' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBAccessPrivilege', ], ],
            ],
        ],
        'TablePrivilege' => [
            'type' => 'structure',
            'members' => [
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'privileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DigestData' => [
            'type' => 'structure',
            'members' => [
                'pct95' => [ 'type' => 'float', 'locationName' => 'pct95', ],
                'max' => [ 'type' => 'float', 'locationName' => 'max', ],
                'avg' => [ 'type' => 'float', 'locationName' => 'avg', ],
                'min' => [ 'type' => 'float', 'locationName' => 'min', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
            ],
        ],
        'ErrorLog' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'ErrorLogDigest' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbNameAccount' => [ 'type' => 'string', 'locationName' => 'dbNameAccount', ],
                'errorLogInformation' => [ 'type' => 'string', 'locationName' => 'errorLogInformation', ],
                'errorSeverity' => [ 'type' => 'string', 'locationName' => 'errorSeverity', ],
            ],
        ],
        'File' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
            ],
        ],
        'FileDownloadURL' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'HealthCheck' => [
            'type' => 'structure',
            'members' => [
                'monitorInterval' => [ 'type' => 'integer', 'locationName' => 'monitorInterval', ],
                'backendConnectTimeout' => [ 'type' => 'integer', 'locationName' => 'backendConnectTimeout', ],
                'backendConnectAttempts' => [ 'type' => 'integer', 'locationName' => 'backendConnectAttempts', ],
            ],
        ],
        'HealthCheckSpec' => [
            'type' => 'structure',
            'members' => [
                'monitorInterval' => [ 'type' => 'integer', 'locationName' => 'monitorInterval', ],
                'backendConnectTimeout' => [ 'type' => 'integer', 'locationName' => 'backendConnectTimeout', ],
                'backendConnectAttempts' => [ 'type' => 'integer', 'locationName' => 'backendConnectAttempts', ],
            ],
        ],
        'ImportFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sharedFileGid' => [ 'type' => 'string', 'locationName' => 'sharedFileGid', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'isLocal' => [ 'type' => 'string', 'locationName' => 'isLocal', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'importTime' => [ 'type' => 'string', 'locationName' => 'importTime', ],
            ],
        ],
        'K8SServiceAddr' => [
            'type' => 'structure',
            'members' => [
                'addrType' => [ 'type' => 'string', 'locationName' => 'addrType', ],
                'accessType' => [ 'type' => 'string', 'locationName' => 'accessType', ],
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
            ],
        ],
        'Log' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
                'lastModified' => [ 'type' => 'string', 'locationName' => 'lastModified', ],
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'OrderableAZ' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'azStatus' => [ 'type' => 'integer', 'locationName' => 'azStatus', ],
            ],
        ],
        'OrderableInstanceClass' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanCluster' => [ 'type' => 'string', 'locationName' => 'instanCluster', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'instanceStorageFieldType' => [ 'type' => 'integer', 'locationName' => 'instanceStorageFieldType', ],
                'instanceStorageGB' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'OrderableStorageType' => [
            'type' => 'structure',
            'members' => [
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'storageTypeStatus' => [ 'type' => 'integer', 'locationName' => 'storageTypeStatus', ],
                'orderableInstanceClasses' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderableInstanceClass', ], ],
            ],
        ],
        'OrderableInstanceType' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'engineStatus' => [ 'type' => 'integer', 'locationName' => 'engineStatus', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'orderableAZs' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderableAZ', ], ],
                'orderableStorageTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrderableStorageType', ], ],
            ],
        ],
        'Parameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ParameterGroup' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
                'parameterGroupName' => [ 'type' => 'string', 'locationName' => 'parameterGroupName', ],
                'parameterGroupStatus' => [ 'type' => 'string', 'locationName' => 'parameterGroupStatus', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ParameterGroupParameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configureValue' => [ 'type' => 'string', 'locationName' => 'configureValue', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'range' => [ 'type' => 'string', 'locationName' => 'range', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'needRestart' => [ 'type' => 'string', 'locationName' => 'needRestart', ],
            ],
        ],
        'ParameterModifyRecords' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'preModify' => [ 'type' => 'string', 'locationName' => 'preModify', ],
                'postModify' => [ 'type' => 'string', 'locationName' => 'postModify', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'QuotaList' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
            ],
        ],
        'RoInstanceList' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ROInstanceProxyAttribute' => [
            'type' => 'structure',
            'members' => [
                'roInstanceProxyID' => [ 'type' => 'string', 'locationName' => 'roInstanceProxyID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'strategy' => [ 'type' => 'string', 'locationName' => 'strategy', ],
                'roInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'roInstanceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoInstanceList', ], ],
            ],
        ],
        'ReadWriteProxy' => [
            'type' => 'structure',
            'members' => [
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'delayThreshold' => [ 'type' => 'integer', 'locationName' => 'delayThreshold', ],
                'loadBalancerPolicy' => [ 'type' => 'string', 'locationName' => 'loadBalancerPolicy', ],
                'healthCheck' =>  [ 'shape' => 'HealthCheck', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceInfo', ], ],
            ],
        ],
        'RestoredNewDBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroup' => [ 'type' => 'string', 'locationName' => 'parameterGroup', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'tagSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Schema' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'newDBName' => [ 'type' => 'string', 'locationName' => 'newDBName', ],
                'tableName' => [ 'type' => 'string', 'locationName' => 'tableName', ],
                'newTableName' => [ 'type' => 'string', 'locationName' => 'newTableName', ],
            ],
        ],
        'SlowLogAttributes' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'elapsedTime' => [ 'type' => 'float', 'locationName' => 'elapsedTime', ],
                'lockTime' => [ 'type' => 'float', 'locationName' => 'lockTime', ],
                'rowsExamined' => [ 'type' => 'integer', 'locationName' => 'rowsExamined', ],
                'rowsReturned' => [ 'type' => 'integer', 'locationName' => 'rowsReturned', ],
            ],
        ],
        'SlowLogDigest' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'executionCount' => [ 'type' => 'integer', 'locationName' => 'executionCount', ],
                'executionTimeSum' => [ 'type' => 'float', 'locationName' => 'executionTimeSum', ],
                'rowsExaminedSum' => [ 'type' => 'integer', 'locationName' => 'rowsExaminedSum', ],
                'rowsSentSum' => [ 'type' => 'integer', 'locationName' => 'rowsSentSum', ],
                'lockTimeSum' => [ 'type' => 'float', 'locationName' => 'lockTimeSum', ],
                'elapsedTime' =>  [ 'shape' => 'DigestData', ],
                'lockTime' =>  [ 'shape' => 'DigestData', ],
                'sqlLength' =>  [ 'shape' => 'DigestData', ],
                'rowsExamined' =>  [ 'shape' => 'DigestData', ],
                'rowsReturned' =>  [ 'shape' => 'DigestData', ],
            ],
        ],
        'SoldOut' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StatusDetail' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'tdeStatus' => [ 'type' => 'string', 'locationName' => 'tdeStatus', ],
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'GrantPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RevokePrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'notes' => [ 'type' => 'string', 'locationName' => 'notes', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
                'databasePrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabasePrivilege', ], ],
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateAccountForOpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantAccountPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAccountPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GrantPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountForOpsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RevokePrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsForOpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsForOpsResultShape', ],
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GrantAccountPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'RevokePrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAccountForOpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expiredTime' => [ 'type' => 'string', 'locationName' => 'expiredTime', ],
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantAccountPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'databasePrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabasePrivilege', ], ],
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountForOpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expiredTime' => [ 'type' => 'string', 'locationName' => 'expiredTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAccountForOpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSuperAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateSuperAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountPrivilegeResultShape', ],
            ],
        ],
        'DescribeAccountsForOpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstanceAccountForOps', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAccountsForOpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAccountForOpsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSuperAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => 'string', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
            ],
        ],
        'DescribeAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditDownloadURLResultShape', ],
            ],
        ],
        'DeleteAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAuditFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditFile', ], ],
            ],
        ],
        'EnableAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditResultShape', ],
            ],
        ],
        'AuditResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'threadId' => [ 'type' => 'string', 'locationName' => 'threadId', ],
                'processId' => [ 'type' => 'string', 'locationName' => 'processId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
            ],
        ],
        'DescribeAuditOptionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'disabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditResultResultShape', ],
            ],
        ],
        'CreateAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditOptionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditOptionsResultShape', ],
            ],
        ],
        'ModifyAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'add' => [ 'type' => 'string', 'locationName' => 'add', ],
                'drop' => [ 'type' => 'string', 'locationName' => 'drop', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'DescribeAuditOptionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditFilesResultShape', ],
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
        'DescribeAzsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAzsResultShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAzsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAzsResultShape', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backup' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'auto' => [ 'type' => 'integer', 'locationName' => 'auto', ],
                'backupTypeFilter' => [ 'type' => 'string', 'locationName' => 'backupTypeFilter', ],
                'dbNameFilter' => [ 'type' => 'string', 'locationName' => 'dbNameFilter', ],
                'backupTimeRangeStartFilter' => [ 'type' => 'string', 'locationName' => 'backupTimeRangeStartFilter', ],
                'backupTimeRangeEndFilter' => [ 'type' => 'string', 'locationName' => 'backupTimeRangeEndFilter', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
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
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
            ],
        ],
        'DeleteBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupDownloadURLResultShape', ],
            ],
        ],
        'DescribeBackupDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'urlExpirationSecond' => [ 'type' => 'string', 'locationName' => 'urlExpirationSecond', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
            ],
        ],
        'DescribeBackupSynchronicitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceByTimeInCrossRegionResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupSynchronicities' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupSynchronicity', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteBackupSynchronicityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'DeleteBackupSynchronicityResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackupSynchronicityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'destRegion' => [ 'type' => 'string', 'locationName' => 'destRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBackupSynchronicityResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeInCrossRegionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceByTimeInCrossRegionResultShape', ],
            ],
        ],
        'CreateInstanceByTimeInCrossRegionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'instanceSpec' =>  [ 'shape' => 'RestoredNewDBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateBackupSynchronicityResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'CreateBackupSynchronicityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupSynchronicityResultShape', ],
            ],
        ],
        'DescribeBackupSynchronicitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupSynchronicitiesResultShape', ],
            ],
        ],
        'DescribeBinlogDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'ClearBinlogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBinlogDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'seconds' => [ 'type' => 'integer', 'locationName' => 'seconds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'binlogBackupId' => [ 'type' => 'string', 'locationName' => 'binlogBackupId', ],
            ],
        ],
        'ClearBinlogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBinlogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBinlogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBinlogsResultShape', ],
            ],
        ],
        'DescribeBinlogDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBinlogDownloadURLResultShape', ],
            ],
        ],
        'ClearBinlogsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBinlogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'binlogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Binlog', ], ],
            ],
        ],
        'AlterTableWithOnlineDDLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AlterTableWithOnlineDDLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AlterTableWithOnlineDDLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'database' => [ 'type' => 'string', 'locationName' => 'database', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribePrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
                'globalPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'databasePrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tablePrivileges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribePrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'allAdminPrivileges' => [ 'type' => 'boolean', 'locationName' => 'allAdminPrivileges', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePrivilegeResultShape', ],
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
        'CreateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sharedFileGid' => [ 'type' => 'string', 'locationName' => 'sharedFileGid', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'ModifyDatabaseCommentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'RestoreDatabaseFromFileResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyDatabaseCommentResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromOSSResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'RestoreDatabaseFromOSSResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupFileName' => [ 'type' => 'string', 'locationName' => 'backupFileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DescribeDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDatabasesResultShape', ],
            ],
        ],
        'DescribeDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'databases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Database', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'RestoreDatabaseFromFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromOSSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ossURL' => [ 'type' => 'string', 'locationName' => 'ossURL', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'RestoreDatabaseFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyDatabaseCommentResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeErrorLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeErrorLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorLog', ], ],
            ],
        ],
        'DescribeErrorLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeErrorLogsResultShape', ],
            ],
        ],
        'GetUploadKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'SetImportFileSharedResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetImportFileSharedResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteImportFileResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImportFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'importFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImportFile', ], ],
            ],
        ],
        'DeleteImportFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sharedFileGid' => [ 'type' => 'string', 'locationName' => 'sharedFileGid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'DeleteImportFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImportFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImportFilesResultShape', ],
            ],
        ],
        'SetImportFileSharedRequestShape' => [
            'type' => 'structure',
            'members' => [
                'shared' => [ 'type' => 'string', 'locationName' => 'shared', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'DescribeImportFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'GetUploadKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'GetUploadKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetUploadKeyResultShape', ],
            ],
        ],
        'DescribeInstanceAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParameterGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceAzRequestShape' => [
            'type' => 'structure',
            'members' => [
                'newAzId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpgradeEngineVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'upgradeSchedule' => [ 'type' => 'integer', 'locationName' => 'upgradeSchedule', ],
                'newVersion' => [ 'type' => 'string', 'locationName' => 'newVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'FailoverInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreInstanceByTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'DBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAttributesResultShape', ],
            ],
        ],
        'CreateInstanceFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeUpgradeVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
            ],
        ],
        'CreateInstanceByTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceByTimeResultShape', ],
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
        'DescribeLatestRestoreTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'latestRestoreTime' => [ 'type' => 'string', 'locationName' => 'latestRestoreTime', ],
            ],
        ],
        'ModifyInstanceMaintainTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradePlanResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradePlanResultShape', ],
            ],
        ],
        'ExchangeInstanceDnsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'targetInstanceId' => [ 'type' => 'string', 'locationName' => 'targetInstanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SwitchForModifyingInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rebootMaster' => [ 'type' => 'boolean', 'locationName' => 'rebootMaster', ],
                'rebootSlave' => [ 'type' => 'boolean', 'locationName' => 'rebootSlave', ],
                'force' => [ 'type' => 'boolean', 'locationName' => 'force', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DescribeUpgradeVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'versions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceFromBackupResultShape', ],
            ],
        ],
        'RestoreInstanceByTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'restoreSchema' => [ 'type' => 'list', 'member' => [ 'shape' => 'Schema', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'SwitchForModifyingInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SwitchForModifyingInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'retentionPeriod' => [ 'type' => 'integer', 'locationName' => 'retentionPeriod', ],
                'binlogRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'binlogRetentionPeriod', ],
                'binlogUsageLimit' => [ 'type' => 'integer', 'locationName' => 'binlogUsageLimit', ],
                'binlogSpaceProtection' => [ 'type' => 'string', 'locationName' => 'binlogSpaceProtection', ],
                'cycleMode' => [ 'type' => 'integer', 'locationName' => 'cycleMode', ],
                'backupBinlog' => [ 'type' => 'string', 'locationName' => 'backupBinlog', ],
                'enhancedBackup' => [ 'type' => 'string', 'locationName' => 'enhancedBackup', ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
            ],
        ],
        'DescribeInstanceMaintainTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceAzResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupChargeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupChargeResultShape', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUpgradeVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUpgradeVersionsResultShape', ],
            ],
        ],
        'EnableEnhancedBackupResultShape' => [
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
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
            ],
        ],
        'CreateROInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateROInstanceResultShape', ],
            ],
        ],
        'ModifyInstanceMaintainTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'maintainTime' => [ 'type' => 'string', 'locationName' => 'maintainTime', ],
                'maintainPeriod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableSSLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupChargeResultShape' => [
            'type' => 'structure',
            'members' => [
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'DisableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceMaintainTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'instanceSpec' =>  [ 'shape' => 'RestoredNewDBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSSLResultShape', ],
            ],
        ],
        'UpgradeEngineVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLatestRestoreTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableEnhancedBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'newInstanceClass' => [ 'type' => 'string', 'locationName' => 'newInstanceClass', ],
                'newInstanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'newInstanceStorageGB', ],
                'newInstanceStorageType' => [ 'type' => 'string', 'locationName' => 'newInstanceStorageType', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'effectiveTime' => [ 'type' => 'string', 'locationName' => 'effectiveTime', ],
                'postponeTime' => [ 'type' => 'integer', 'locationName' => 'postponeTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'UpgradeEngineVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceMaintainTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'maintainTime' => [ 'type' => 'string', 'locationName' => 'maintainTime', ],
                'maintainPeriod' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeUpgradePlanRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBackupChargeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLatestRestoreTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLatestRestoreTimeResultShape', ],
            ],
        ],
        'ExchangeInstanceDnsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'instanceSpec' =>  [ 'shape' => 'RestoredNewDBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'FailoverInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupSpaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupSpaceResultShape', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'FailoverInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUpgradePlanResultShape' => [
            'type' => 'structure',
            'members' => [
                'newVersion' => [ 'type' => 'string', 'locationName' => 'newVersion', ],
                'upgradeSchedule' => [ 'type' => 'integer', 'locationName' => 'upgradeSchedule', ],
            ],
        ],
        'RestoreInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreInstanceByTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstanceAttributes' =>  [ 'shape' => 'DBInstanceAttribute', ],
            ],
        ],
        'ModifyParameterGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParameterGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyActiveDirectoryResponseShape' => [
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
        'DescribeBackupSpaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyActiveDirectoryResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableSSLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyConnectionModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBackupSpaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalFreeSpace' => [ 'type' => 'double', 'locationName' => 'totalFreeSpace', ],
                'totalUsedSpace' => [ 'type' => 'double', 'locationName' => 'totalUsedSpace', ],
                'current' => [ 'type' => 'double', 'locationName' => 'current', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
            ],
        ],
        'EnableEnhancedBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceMaintainTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceMaintainTimeResultShape', ],
            ],
        ],
        'RestoreInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateROInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'roInstanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'CreateROInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageType' => [ 'type' => 'string', 'locationName' => 'instanceStorageType', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroup' => [ 'type' => 'string', 'locationName' => 'parameterGroup', ],
                'storageEncrypted' => [ 'type' => 'boolean', 'locationName' => 'storageEncrypted', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'roInstanceProxy' => [ 'type' => 'string', 'locationName' => 'roInstanceProxy', ],
                'tagSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyConnectionModeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableSSLResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'binlogRetentionPeriod' => [ 'type' => 'integer', 'locationName' => 'binlogRetentionPeriod', ],
                'binlogUsageLimit' => [ 'type' => 'integer', 'locationName' => 'binlogUsageLimit', ],
                'binlogSpaceProtection' => [ 'type' => 'string', 'locationName' => 'binlogSpaceProtection', ],
                'retentionPeriod' => [ 'type' => 'integer', 'locationName' => 'retentionPeriod', ],
                'cycleMode' => [ 'type' => 'integer', 'locationName' => 'cycleMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ExchangeInstanceDnsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DisableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceAzResultShape' => [
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
        'ModifyConnectionModeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyActiveDirectoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'adResourceId' => [ 'type' => 'string', 'locationName' => 'adResourceId', ],
                'forceRestart' => [ 'type' => 'string', 'locationName' => 'forceRestart', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInterceptResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInterceptResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInterceptResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInterceptResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInterceptResultShape' => [
            'type' => 'structure',
            'members' => [
                'available' => [ 'type' => 'boolean', 'locationName' => 'available', ],
            ],
        ],
        'DisableInterceptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInterceptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInterceptResultShape', ],
            ],
        ],
        'EnableInterceptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInterceptResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInterceptResultResultShape', ],
            ],
        ],
        'InterceptResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'threadId' => [ 'type' => 'string', 'locationName' => 'threadId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
            ],
        ],
        'DescribeInterceptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInterceptResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'interceptResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'InterceptResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'EnableInterceptResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeLogDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLogDownloadURLResultShape', ],
            ],
        ],
        'DescribeLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLogsResultShape', ],
            ],
        ],
        'UpdateLogDownloadURLInternalResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'UpdateLogDownloadURLInternalResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateLogDownloadURLInternalResultShape', ],
            ],
        ],
        'DescribeLogDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'DescribeLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Log', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateLogDownloadURLInternalRequestShape' => [
            'type' => 'structure',
            'members' => [
                'seconds' => [ 'type' => 'integer', 'locationName' => 'seconds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
            ],
        ],
        'DescribeLogDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'seconds' => [ 'type' => 'integer', 'locationName' => 'seconds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
            ],
        ],
        'ModifyParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstanceParameter', ], ],
            ],
        ],
        'DescribeParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParametersResultShape', ],
            ],
        ],
        'ModifyParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyParametersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParameterGroupParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyParameterGroupAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParameterGroupAttachedInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instances' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttachedDBInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyParameterGroupAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupName' => [ 'type' => 'string', 'locationName' => 'parameterGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'DescribeParameterModifyRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'CreateParameterGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'parameterGroupName' => [ 'type' => 'string', 'locationName' => 'parameterGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyParameterGroupAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParameterGroupParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterGroupParameter', ], ],
            ],
        ],
        'DescribeParameterGroupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeParameterGroupParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParameterGroupParametersResultShape', ],
            ],
        ],
        'DeleteParameterGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteParameterGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParameterGroupAttachedInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParameterGroupAttachedInstancesResultShape', ],
            ],
        ],
        'ModifyParameterGroupParametersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateParameterGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'CopyParameterGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'DescribeParameterModifyRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'records' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterModifyRecords', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CopyParameterGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
                'parameterGroupName' => [ 'type' => 'string', 'locationName' => 'parameterGroupName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeParameterGroupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParameterGroup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeParameterGroupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParameterGroupsResultShape', ],
            ],
        ],
        'ModifyParameterGroupParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Parameter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'DescribeParameterGroupParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'CopyParameterGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CopyParameterGroupResultShape', ],
            ],
        ],
        'DeleteParameterGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'CreateParameterGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateParameterGroupResultShape', ],
            ],
        ],
        'DescribeParameterGroupAttachedInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'DescribeParameterModifyRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParameterModifyRecordsResultShape', ],
            ],
        ],
        'DescribeIndexPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeErrorLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeErrorLogResultShape', ],
            ],
        ],
        'IndexPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'sizeKB' => [ 'type' => 'integer', 'locationName' => 'sizeKB', ],
                'userSeeks' => [ 'type' => 'integer', 'locationName' => 'userSeeks', ],
                'userScans' => [ 'type' => 'integer', 'locationName' => 'userScans', ],
                'userUpdates' => [ 'type' => 'integer', 'locationName' => 'userUpdates', ],
                'lastUserSeek' => [ 'type' => 'string', 'locationName' => 'lastUserSeek', ],
                'lastUserScan' => [ 'type' => 'string', 'locationName' => 'lastUserScan', ],
                'lastUserUpdate' => [ 'type' => 'string', 'locationName' => 'lastUserUpdate', ],
            ],
        ],
        'DescribeQueryPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeQueryPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'queryPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeActiveQueryPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ActiveQueryPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'elapsedTime' => [ 'type' => 'integer', 'locationName' => 'elapsedTime', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeIndexPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'missingIndexResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'MissingIndexResult', ], ],
                'indexPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeActiveQueryPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'activeQueryPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActiveQueryPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'DescribeSlowLogAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogsAttributes' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLogAttributes', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeErrorLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorLogDigest', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'MissingIndexResult' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'equalityColumns' => [ 'type' => 'string', 'locationName' => 'equalityColumns', ],
                'inequalityColumns' => [ 'type' => 'string', 'locationName' => 'inequalityColumns', ],
                'includedColumns' => [ 'type' => 'string', 'locationName' => 'includedColumns', ],
                'avgUserImpact' => [ 'type' => 'float', 'locationName' => 'avgUserImpact', ],
                'userScans' => [ 'type' => 'integer', 'locationName' => 'userScans', ],
                'userSeeks' => [ 'type' => 'integer', 'locationName' => 'userSeeks', ],
            ],
        ],
        'DescribeIndexPerformanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIndexPerformanceResultShape', ],
            ],
        ],
        'QueryPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'lastExecutionTime' => [ 'type' => 'string', 'locationName' => 'lastExecutionTime', ],
                'elapsedTime' => [ 'type' => 'integer', 'locationName' => 'elapsedTime', ],
                'executionCount' => [ 'type' => 'integer', 'locationName' => 'executionCount', ],
                'workerTime' => [ 'type' => 'integer', 'locationName' => 'workerTime', ],
                'logicalReads' => [ 'type' => 'integer', 'locationName' => 'logicalReads', ],
                'logicalWrites' => [ 'type' => 'integer', 'locationName' => 'logicalWrites', ],
                'physicalReads' => [ 'type' => 'integer', 'locationName' => 'physicalReads', ],
                'lastRows' => [ 'type' => 'integer', 'locationName' => 'lastRows', ],
            ],
        ],
        'DescribeActiveQueryPerformanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeActiveQueryPerformanceResultShape', ],
            ],
        ],
        'DescribeSlowLogAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogAttributesResultShape', ],
            ],
        ],
        'DescribeSlowLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogsResultShape', ],
            ],
        ],
        'DescribeSlowLogAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeQueryPerformanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQueryPerformanceResultShape', ],
            ],
        ],
        'DescribeSlowLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLogDigest', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSlowLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeErrorLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeReadWriteProxyAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
                'readWriteProxy' =>  [ 'shape' => 'ReadWriteProxy', ],
            ],
        ],
        'DeleteReadWriteProxyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
            ],
        ],
        'CreateReadWriteProxyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateReadWriteProxyResultShape', ],
            ],
        ],
        'ModifyReadWriteProxyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delayThreshold' => [ 'type' => 'integer', 'locationName' => 'delayThreshold', ],
                'loadBalancerPolicy' => [ 'type' => 'string', 'locationName' => 'loadBalancerPolicy', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
            ],
        ],
        'EnableReadWriteProxyInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteReadWriteProxyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableReadWriteProxyInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReadWriteProxiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateReadWriteProxyResultShape' => [
            'type' => 'structure',
            'members' => [
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
            ],
        ],
        'DisableReadWriteProxyInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
            ],
        ],
        'DescribeReadWriteProxyAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
            ],
        ],
        'DescribeReadWriteProxiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeReadWriteProxiesResultShape', ],
            ],
        ],
        'ModifyReadWriteProxyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeReadWriteProxyAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeReadWriteProxyAttributeResultShape', ],
            ],
        ],
        'DeleteReadWriteProxyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateReadWriteProxyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'delayThreshold' => [ 'type' => 'integer', 'locationName' => 'delayThreshold', ],
                'loadBalancerPolicy' => [ 'type' => 'string', 'locationName' => 'loadBalancerPolicy', ],
                'healthCheckSpec' =>  [ 'shape' => 'HealthCheckSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyReadWriteProxyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableReadWriteProxyInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableReadWriteProxyInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'readWriteProxyId' => [ 'type' => 'string', 'locationName' => 'readWriteProxyId', ],
            ],
        ],
        'DescribeReadWriteProxiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'readWriteProxies' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReadWriteProxy', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'EnableReadWriteProxyInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTablesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DescribeTablesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTablesResultShape', ],
            ],
        ],
        'DescribeTablesResultShape' => [
            'type' => 'structure',
            'members' => [
                'tables' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeTdeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableTdeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableTdeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeTdeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTdeResultShape', ],
            ],
        ],
        'DescribeTdeResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'statusDetail' =>  [ 'shape' => 'StatusDetail', ],
            ],
        ],
        'EnableTdeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListResultShape', ],
            ],
        ],
        'ModifyWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'ModifyWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
