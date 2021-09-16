<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'userpool',
        'protocol' => 'json',
//        'serviceFullName' => 'userpool',
//        'serviceId' => 'userpool',
    ],
    'operations' => [
        'CreateUserPool' => [
            'name' => 'CreateUserPool',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/pool',
            ],
            'input' => [ 'shape' => 'CreateUserPoolRequestShape', ],
            'output' => [ 'shape' => 'CreateUserPoolResponseShape', ],
        ],
        'AssociateUserPoolClient' => [
            'name' => 'AssociateUserPoolClient',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/client/{clientId}',
            ],
            'input' => [ 'shape' => 'AssociateUserPoolClientRequestShape', ],
            'output' => [ 'shape' => 'AssociateUserPoolClientResponseShape', ],
        ],
        'DisassociateUserPoolClient' => [
            'name' => 'DisassociateUserPoolClient',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/poolName/{poolName}/client/{clientId}',
            ],
            'input' => [ 'shape' => 'DisassociateUserPoolClientRequestShape', ],
            'output' => [ 'shape' => 'DisassociateUserPoolClientResponseShape', ],
        ],
        'ListUserPoolClients' => [
            'name' => 'ListUserPoolClients',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/clients',
            ],
            'input' => [ 'shape' => 'ListUserPoolClientsRequestShape', ],
            'output' => [ 'shape' => 'ListUserPoolClientsResponseShape', ],
        ],
        'AdminCreateUser' => [
            'name' => 'AdminCreateUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user:create',
            ],
            'input' => [ 'shape' => 'AdminCreateUserRequestShape', ],
            'output' => [ 'shape' => 'AdminCreateUserResponseShape', ],
        ],
        'AdminGetUser' => [
            'name' => 'AdminGetUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}',
            ],
            'input' => [ 'shape' => 'AdminGetUserRequestShape', ],
            'output' => [ 'shape' => 'AdminGetUserResponseShape', ],
        ],
        'AdminUpdateUserAttribute' => [
            'name' => 'AdminUpdateUserAttribute',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}',
            ],
            'input' => [ 'shape' => 'AdminUpdateUserAttributeRequestShape', ],
            'output' => [ 'shape' => 'AdminUpdateUserAttributeResponseShape', ],
        ],
        'ListUsers' => [
            'name' => 'ListUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/poolName/{poolName}/user:list',
            ],
            'input' => [ 'shape' => 'ListUsersRequestShape', ],
            'output' => [ 'shape' => 'ListUsersResponseShape', ],
        ],
        'AdminSetUsersPassword' => [
            'name' => 'AdminSetUsersPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/poolName/{poolName}/user:adminSetUsersPassword',
            ],
            'input' => [ 'shape' => 'AdminSetUsersPasswordRequestShape', ],
            'output' => [ 'shape' => 'AdminSetUsersPasswordResponseShape', ],
        ],
        'AdminEnableUser' => [
            'name' => 'AdminEnableUser',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}:enable',
            ],
            'input' => [ 'shape' => 'AdminEnableUserRequestShape', ],
            'output' => [ 'shape' => 'AdminEnableUserResponseShape', ],
        ],
        'AdminDisableUser' => [
            'name' => 'AdminDisableUser',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}:disable',
            ],
            'input' => [ 'shape' => 'AdminDisableUserRequestShape', ],
            'output' => [ 'shape' => 'AdminDisableUserResponseShape', ],
        ],
        'AdminDeleteUser' => [
            'name' => 'AdminDeleteUser',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/poolName/{poolName}/user/{userName}:delete',
            ],
            'input' => [ 'shape' => 'AdminDeleteUserRequestShape', ],
            'output' => [ 'shape' => 'AdminDeleteUserResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
