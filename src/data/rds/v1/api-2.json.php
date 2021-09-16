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
    ],
];
