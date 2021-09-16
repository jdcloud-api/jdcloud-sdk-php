<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'kms',
        'protocol' => 'json',
//        'serviceFullName' => 'kms',
//        'serviceId' => 'kms',
    ],
    'operations' => [
        'DescribeKeyList' => [
            'name' => 'DescribeKeyList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/key',
            ],
            'input' => [ 'shape' => 'DescribeKeyListRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeyListResponseShape', ],
        ],
        'CreateKey' => [
            'name' => 'CreateKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/key:create',
            ],
            'input' => [ 'shape' => 'CreateKeyRequestShape', ],
            'output' => [ 'shape' => 'CreateKeyResponseShape', ],
        ],
        'DescribeKey' => [
            'name' => 'DescribeKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/key/{keyId}',
            ],
            'input' => [ 'shape' => 'DescribeKeyRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeyResponseShape', ],
        ],
        'UpdateKeyDescription' => [
            'name' => 'UpdateKeyDescription',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}',
            ],
            'input' => [ 'shape' => 'UpdateKeyDescriptionRequestShape', ],
            'output' => [ 'shape' => 'UpdateKeyDescriptionResponseShape', ],
        ],
        'EnableKey' => [
            'name' => 'EnableKey',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}:enable',
            ],
            'input' => [ 'shape' => 'EnableKeyRequestShape', ],
            'output' => [ 'shape' => 'EnableKeyResponseShape', ],
        ],
        'DisableKey' => [
            'name' => 'DisableKey',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}:disable',
            ],
            'input' => [ 'shape' => 'DisableKeyRequestShape', ],
            'output' => [ 'shape' => 'DisableKeyResponseShape', ],
        ],
        'ScheduleKeyDeletion' => [
            'name' => 'ScheduleKeyDeletion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/key/{keyId}:delete',
            ],
            'input' => [ 'shape' => 'ScheduleKeyDeletionRequestShape', ],
            'output' => [ 'shape' => 'ScheduleKeyDeletionResponseShape', ],
        ],
        'CancelKeyDeletion' => [
            'name' => 'CancelKeyDeletion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}:cancelDelete',
            ],
            'input' => [ 'shape' => 'CancelKeyDeletionRequestShape', ],
            'output' => [ 'shape' => 'CancelKeyDeletionResponseShape', ],
        ],
        'KeyRotation' => [
            'name' => 'KeyRotation',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}:rotate',
            ],
            'input' => [ 'shape' => 'KeyRotationRequestShape', ],
            'output' => [ 'shape' => 'KeyRotationResponseShape', ],
        ],
        'Encrypt' => [
            'name' => 'Encrypt',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/key/{keyId}:Encrypt',
            ],
            'input' => [ 'shape' => 'EncryptRequestShape', ],
            'output' => [ 'shape' => 'EncryptResponseShape', ],
        ],
        'Decrypt' => [
            'name' => 'Decrypt',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/key/{keyId}:Decrypt',
            ],
            'input' => [ 'shape' => 'DecryptRequestShape', ],
            'output' => [ 'shape' => 'DecryptResponseShape', ],
        ],
        'GetPublicKey' => [
            'name' => 'GetPublicKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/key/{keyId}:GetPublicKey',
            ],
            'input' => [ 'shape' => 'GetPublicKeyRequestShape', ],
            'output' => [ 'shape' => 'GetPublicKeyResponseShape', ],
        ],
        'Sign' => [
            'name' => 'Sign',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/key/{keyId}:Sign',
            ],
            'input' => [ 'shape' => 'SignRequestShape', ],
            'output' => [ 'shape' => 'SignResponseShape', ],
        ],
        'Validate' => [
            'name' => 'Validate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/key/{keyId}:Validate',
            ],
            'input' => [ 'shape' => 'ValidateRequestShape', ],
            'output' => [ 'shape' => 'ValidateResponseShape', ],
        ],
        'GenerateDataKey' => [
            'name' => 'GenerateDataKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/key/{keyId}:GenerateDataKey',
            ],
            'input' => [ 'shape' => 'GenerateDataKeyRequestShape', ],
            'output' => [ 'shape' => 'GenerateDataKeyResponseShape', ],
        ],
        'DescribeKeyDetail' => [
            'name' => 'DescribeKeyDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/key/{keyId}:describeKeyDetail',
            ],
            'input' => [ 'shape' => 'DescribeKeyDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeKeyDetailResponseShape', ],
        ],
        'EnableKeyVersion' => [
            'name' => 'EnableKeyVersion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}/version/{version}:enable',
            ],
            'input' => [ 'shape' => 'EnableKeyVersionRequestShape', ],
            'output' => [ 'shape' => 'EnableKeyVersionResponseShape', ],
        ],
        'DisableKeyVersion' => [
            'name' => 'DisableKeyVersion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}/version/{version}:disable',
            ],
            'input' => [ 'shape' => 'DisableKeyVersionRequestShape', ],
            'output' => [ 'shape' => 'DisableKeyVersionResponseShape', ],
        ],
        'ScheduleKeyVersionDeletion' => [
            'name' => 'ScheduleKeyVersionDeletion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/key/{keyId}/version/{version}:delete',
            ],
            'input' => [ 'shape' => 'ScheduleKeyVersionDeletionRequestShape', ],
            'output' => [ 'shape' => 'ScheduleKeyVersionDeletionResponseShape', ],
        ],
        'CancelKeyVersionDeletion' => [
            'name' => 'CancelKeyVersionDeletion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/key/{keyId}/version/{version}:cancelDelete',
            ],
            'input' => [ 'shape' => 'CancelKeyVersionDeletionRequestShape', ],
            'output' => [ 'shape' => 'CancelKeyVersionDeletionResponseShape', ],
        ],
        'DescribeSecretList' => [
            'name' => 'DescribeSecretList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/secret',
            ],
            'input' => [ 'shape' => 'DescribeSecretListRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretListResponseShape', ],
        ],
        'CreateSecret' => [
            'name' => 'CreateSecret',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/secret:create',
            ],
            'input' => [ 'shape' => 'CreateSecretRequestShape', ],
            'output' => [ 'shape' => 'CreateSecretResponseShape', ],
        ],
        'ImportSecret' => [
            'name' => 'ImportSecret',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/secret:import',
            ],
            'input' => [ 'shape' => 'ImportSecretRequestShape', ],
            'output' => [ 'shape' => 'ImportSecretResponseShape', ],
        ],
        'DescribeSecretVersionList' => [
            'name' => 'DescribeSecretVersionList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/secret/{secretId}',
            ],
            'input' => [ 'shape' => 'DescribeSecretVersionListRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretVersionListResponseShape', ],
        ],
        'UpdateSecret' => [
            'name' => 'UpdateSecret',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/secret/{secretId}',
            ],
            'input' => [ 'shape' => 'UpdateSecretRequestShape', ],
            'output' => [ 'shape' => 'UpdateSecretResponseShape', ],
        ],
        'EnableSecret' => [
            'name' => 'EnableSecret',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/secret/{secretId}:enable',
            ],
            'input' => [ 'shape' => 'EnableSecretRequestShape', ],
            'output' => [ 'shape' => 'EnableSecretResponseShape', ],
        ],
        'DisableSecret' => [
            'name' => 'DisableSecret',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/secret/{secretId}:disable',
            ],
            'input' => [ 'shape' => 'DisableSecretRequestShape', ],
            'output' => [ 'shape' => 'DisableSecretResponseShape', ],
        ],
        'DeleteSecret' => [
            'name' => 'DeleteSecret',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/secret/{secretId}:delete',
            ],
            'input' => [ 'shape' => 'DeleteSecretRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecretResponseShape', ],
        ],
        'CreateSecretVersion' => [
            'name' => 'CreateSecretVersion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/secret/{secretId}:createSecretVersion',
            ],
            'input' => [ 'shape' => 'CreateSecretVersionRequestShape', ],
            'output' => [ 'shape' => 'CreateSecretVersionResponseShape', ],
        ],
        'ExportSecret' => [
            'name' => 'ExportSecret',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/secret/{secretId}:export',
            ],
            'input' => [ 'shape' => 'ExportSecretRequestShape', ],
            'output' => [ 'shape' => 'ExportSecretResponseShape', ],
        ],
        'DescribeSecretVersionInfo' => [
            'name' => 'DescribeSecretVersionInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/secret/{secretId}/version/{version}',
            ],
            'input' => [ 'shape' => 'DescribeSecretVersionInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretVersionInfoResponseShape', ],
        ],
        'UpdateSecretVersion' => [
            'name' => 'UpdateSecretVersion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/secret/{secretId}/version/{version}',
            ],
            'input' => [ 'shape' => 'UpdateSecretVersionRequestShape', ],
            'output' => [ 'shape' => 'UpdateSecretVersionResponseShape', ],
        ],
        'EnableSecretVersion' => [
            'name' => 'EnableSecretVersion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/secret/{secretId}/version/{version}:enable',
            ],
            'input' => [ 'shape' => 'EnableSecretVersionRequestShape', ],
            'output' => [ 'shape' => 'EnableSecretVersionResponseShape', ],
        ],
        'DisableSecretVersion' => [
            'name' => 'DisableSecretVersion',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/secret/{secretId}/version/{version}:disable',
            ],
            'input' => [ 'shape' => 'DisableSecretVersionRequestShape', ],
            'output' => [ 'shape' => 'DisableSecretVersionResponseShape', ],
        ],
        'DeleteSecretVersion' => [
            'name' => 'DeleteSecretVersion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/secret/{secretId}/version/{version}:delete',
            ],
            'input' => [ 'shape' => 'DeleteSecretVersionRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecretVersionResponseShape', ],
        ],
    ],
    'shapes' => [
        'KeyDetail' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'rotationCycle' => [ 'type' => 'integer', 'locationName' => 'rotationCycle', ],
                'keyVersionCount' => [ 'type' => 'integer', 'locationName' => 'keyVersionCount', ],
                'keyVersionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyVersionItem', ], ],
            ],
        ],
        'KeyDescCfg' => [
            'type' => 'structure',
            'members' => [
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyDesc' => [ 'type' => 'string', 'locationName' => 'keyDesc', ],
                'keyType' => [ 'type' => 'integer', 'locationName' => 'keyType', ],
            ],
        ],
        'KeyCfg' => [
            'type' => 'structure',
            'members' => [
                'keyDescCfg' =>  [ 'shape' => 'KeyDescCfg', ],
                'keyRotateCfg' =>  [ 'shape' => 'KeyRotateCfg', ],
            ],
        ],
        'KeyRotateCfg' => [
            'type' => 'structure',
            'members' => [
                'autoRotate' => [ 'type' => 'boolean', 'locationName' => 'autoRotate', ],
                'rotationCycle' => [ 'type' => 'integer', 'locationName' => 'rotationCycle', ],
            ],
        ],
        'KeyVersionItem' => [
            'type' => 'structure',
            'members' => [
                'keyVersion' => [ 'type' => 'string', 'locationName' => 'keyVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'keyStatus' => [ 'type' => 'integer', 'locationName' => 'keyStatus', ],
                'deleteTime' => [ 'type' => 'string', 'locationName' => 'deleteTime', ],
            ],
        ],
        'KeyInfo' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'keyStatus' => [ 'type' => 'integer', 'locationName' => 'keyStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'keyDesc' => [ 'type' => 'string', 'locationName' => 'keyDesc', ],
                'rotationCycle' => [ 'type' => 'integer', 'locationName' => 'rotationCycle', ],
                'deleteTime' => [ 'type' => 'string', 'locationName' => 'deleteTime', ],
            ],
        ],
        'SecretInfo' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
                'secretName' => [ 'type' => 'string', 'locationName' => 'secretName', ],
                'secretDesc' => [ 'type' => 'string', 'locationName' => 'secretDesc', ],
                'secretStatus' => [ 'type' => 'integer', 'locationName' => 'secretStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'SecretVersionItem' => [
            'type' => 'structure',
            'members' => [
                'secretVersion' => [ 'type' => 'string', 'locationName' => 'secretVersion', ],
                'secretStatus' => [ 'type' => 'integer', 'locationName' => 'secretStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'secretData' => [ 'type' => 'string', 'locationName' => 'secretData', ],
            ],
        ],
        'SecretTimeCfg' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
            ],
        ],
        'SecretCfg' => [
            'type' => 'structure',
            'members' => [
                'secretDescCfg' =>  [ 'shape' => 'SecretDescCfg', ],
                'secretTimeCfg' =>  [ 'shape' => 'SecretTimeCfg', ],
                'secretData' => [ 'type' => 'string', 'locationName' => 'secretData', ],
            ],
        ],
        'SecretVersionCfg' => [
            'type' => 'structure',
            'members' => [
                'secretData' => [ 'type' => 'string', 'locationName' => 'secretData', ],
                'secretTimeCfg' =>  [ 'shape' => 'SecretTimeCfg', ],
            ],
        ],
        'SecretDescCfg' => [
            'type' => 'structure',
            'members' => [
                'secretName' => [ 'type' => 'string', 'locationName' => 'secretName', ],
                'secretDesc' => [ 'type' => 'string', 'locationName' => 'secretDesc', ],
            ],
        ],
        'SecretDetail' => [
            'type' => 'structure',
            'members' => [
                'secretInfo' =>  [ 'shape' => 'SecretInfo', ],
                'secretVersionCount' => [ 'type' => 'integer', 'locationName' => 'secretVersionCount', ],
                'secretVersionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecretVersionItem', ], ],
            ],
        ],
        'KeyRotationResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'EnableKeyVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeKeyDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeyDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeyDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'DescribeKeyListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'GetPublicKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetPublicKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateKeyDescriptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyCfg' =>  [ 'shape' => 'KeyCfg', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'KeyRotationResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateKeyDescriptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ScheduleKeyDeletionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyInfo' =>  [ 'shape' => 'KeyInfo', ],
            ],
        ],
        'CancelKeyVersionDeletionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPublicKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicKeyBlob' => [ 'type' => 'string', 'locationName' => 'publicKeyBlob', ],
            ],
        ],
        'UpdateKeyDescriptionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ScheduleKeyDeletionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delayDays' => [ 'type' => 'integer', 'locationName' => 'delayDays', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'EnableKeyVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableKeyVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableKeyVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DecryptResultShape' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
            ],
        ],
        'GenerateDataKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
                'ciphertextBlob' => [ 'type' => 'string', 'locationName' => 'ciphertextBlob', ],
            ],
        ],
        'CancelKeyDeletionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeKeyListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeyListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CancelKeyVersionDeletionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'ScheduleKeyVersionDeletionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ValidateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ValidateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GenerateDataKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GenerateDataKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SignRequestShape' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'EncryptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EncryptResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CancelKeyDeletionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'CreateKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyCfg' =>  [ 'shape' => 'KeyCfg', ],
            ],
        ],
        'EnableKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EncryptResultShape' => [
            'type' => 'structure',
            'members' => [
                'ciphertextBlob' => [ 'type' => 'string', 'locationName' => 'ciphertextBlob', ],
            ],
        ],
        'DescribeKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeKeyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GenerateDataKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'DisableKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ScheduleKeyVersionDeletionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'delayDays' => [ 'type' => 'integer', 'locationName' => 'delayDays', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'ValidateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
                'signature' => [ 'type' => 'string', 'locationName' => 'signature', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'DisableKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'SignResultShape' => [
            'type' => 'structure',
            'members' => [
                'signature' => [ 'type' => 'string', 'locationName' => 'signature', ],
            ],
        ],
        'CancelKeyDeletionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EncryptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'plaintext' => [ 'type' => 'string', 'locationName' => 'plaintext', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'CancelKeyVersionDeletionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ScheduleKeyDeletionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'DescribeKeyListResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DisableKeyVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateResultShape' => [
            'type' => 'structure',
            'members' => [
                'validated' => [ 'type' => 'boolean', 'locationName' => 'validated', ],
            ],
        ],
        'DisableKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableKeyVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'KeyRotationRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'DescribeKeyDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'keyDetail' =>  [ 'shape' => 'KeyDetail', ],
            ],
        ],
        'ScheduleKeyVersionDeletionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'DecryptResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DecryptResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPublicKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'SignResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SignResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateKeyResultShape', ],
            ],
        ],
        'DecryptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ciphertextBlob' => [ 'type' => 'string', 'locationName' => 'ciphertextBlob', ],
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'ImportSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretPackage' => [ 'type' => 'string', 'locationName' => 'secretPackage', ],
            ],
        ],
        'CreateSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretCfg' =>  [ 'shape' => 'SecretCfg', ],
            ],
        ],
        'DeleteSecretVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSecretVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecretVersionListResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretDetail' =>  [ 'shape' => 'SecretDetail', ],
            ],
        ],
        'ImportSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSecretResultShape', ],
            ],
        ],
        'ImportSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExportSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretPackage' => [ 'type' => 'string', 'locationName' => 'secretPackage', ],
            ],
        ],
        'DescribeSecretListResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecretInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateSecretVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecretVersionInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretVersionInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableSecretVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeSecretListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ExportSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'UpdateSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretDescCfg' =>  [ 'shape' => 'SecretDescCfg', ],
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'DisableSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'CreateSecretVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSecretVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'EnableSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateSecretVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSecretVersionListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'DescribeSecretListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableSecretVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'UpdateSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSecretVersionInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretVersion' => [ 'type' => 'string', 'locationName' => 'secretVersion', ],
                'secretStatus' => [ 'type' => 'integer', 'locationName' => 'secretStatus', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'secretData' => [ 'type' => 'string', 'locationName' => 'secretData', ],
            ],
        ],
        'DeleteSecretVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'DescribeSecretVersionInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'EnableSecretVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableSecretVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableSecretVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableSecretVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'EnableSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'ExportSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExportSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecretVersionListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretVersionListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecretVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretVersionCfg' =>  [ 'shape' => 'SecretVersionCfg', ],
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
            ],
        ],
        'DeleteSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateSecretVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'secretTimeCfg' =>  [ 'shape' => 'SecretTimeCfg', ],
                'secretId' => [ 'type' => 'string', 'locationName' => 'secretId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
    ],
];
