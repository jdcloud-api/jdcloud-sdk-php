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
    ],
];
