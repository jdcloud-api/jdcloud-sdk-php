<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'compile',
        'protocol' => 'json',
//        'serviceFullName' => 'compile',
//        'serviceId' => 'compile',
    ],
    'operations' => [
        'CreateDemo' => [
            'name' => 'CreateDemo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/demo',
            ],
            'input' => [ 'shape' => 'CreateDemoRequestShape', ],
            'output' => [ 'shape' => 'CreateDemoResponseShape', ],
        ],
        'GetJobs' => [
            'name' => 'GetJobs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs',
            ],
            'input' => [ 'shape' => 'GetJobsRequestShape', ],
            'output' => [ 'shape' => 'GetJobsResponseShape', ],
        ],
        'CreateJob' => [
            'name' => 'CreateJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobs',
            ],
            'input' => [ 'shape' => 'CreateJobRequestShape', ],
            'output' => [ 'shape' => 'CreateJobResponseShape', ],
        ],
        'DeleteJobs' => [
            'name' => 'DeleteJobs',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/jobs',
            ],
            'input' => [ 'shape' => 'DeleteJobsRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobsResponseShape', ],
        ],
        'GetJob' => [
            'name' => 'GetJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}',
            ],
            'input' => [ 'shape' => 'GetJobRequestShape', ],
            'output' => [ 'shape' => 'GetJobResponseShape', ],
        ],
        'UpdateJob' => [
            'name' => 'UpdateJob',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}',
            ],
            'input' => [ 'shape' => 'UpdateJobRequestShape', ],
            'output' => [ 'shape' => 'UpdateJobResponseShape', ],
        ],
        'DeleteJob' => [
            'name' => 'DeleteJob',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}',
            ],
            'input' => [ 'shape' => 'DeleteJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobResponseShape', ],
        ],
        'StartJob' => [
            'name' => 'StartJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobs/{id}:start',
            ],
            'input' => [ 'shape' => 'StartJobRequestShape', ],
            'output' => [ 'shape' => 'StartJobResponseShape', ],
        ],
        'GetBuildLog' => [
            'name' => 'GetBuildLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}/log',
            ],
            'input' => [ 'shape' => 'GetBuildLogRequestShape', ],
            'output' => [ 'shape' => 'GetBuildLogResponseShape', ],
        ],
        'GetBuildStatus' => [
            'name' => 'GetBuildStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}/status',
            ],
            'input' => [ 'shape' => 'GetBuildStatusRequestShape', ],
            'output' => [ 'shape' => 'GetBuildStatusResponseShape', ],
        ],
        'GetExternalLink' => [
            'name' => 'GetExternalLink',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}/externalLink',
            ],
            'input' => [ 'shape' => 'GetExternalLinkRequestShape', ],
            'output' => [ 'shape' => 'GetExternalLinkResponseShape', ],
        ],
        'StopBuild' => [
            'name' => 'StopBuild',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/jobs/{jobid}/builds/{id}:stop',
            ],
            'input' => [ 'shape' => 'StopBuildRequestShape', ],
            'output' => [ 'shape' => 'StopBuildResponseShape', ],
        ],
    ],
    'shapes' => [
        'SimpleBuild' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'createdAt' => [ 'type' => 'integer', 'locationName' => 'createdAt', ],
                'compilerType' => [ 'type' => 'string', 'locationName' => 'compilerType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'ComputeTypeDefine' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'buildResourceMem' => [ 'type' => 'integer', 'locationName' => 'buildResourceMem', ],
                'buildResourceCpu' => [ 'type' => 'integer', 'locationName' => 'buildResourceCpu', ],
            ],
        ],
        'CodeTypeDefine' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'MailTypeDefine' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CompilerTypeDefine' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Config' => [
            'type' => 'structure',
            'members' => [
                'image' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageDefine', ], ],
                'codeType' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeTypeDefine', ], ],
                'oss' => [ 'type' => 'list', 'member' => [ 'shape' => 'OssDefine', ], ],
                'timeout' => [ 'type' => 'list', 'member' => [ 'shape' => 'TimeoutDefine', ], ],
                'computeType' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComputeTypeDefine', ], ],
                'mailType' => [ 'type' => 'list', 'member' => [ 'shape' => 'MailTypeDefine', ], ],
                'compilerType' => [ 'type' => 'list', 'member' => [ 'shape' => 'CompilerTypeDefine', ], ],
            ],
        ],
        'ImageDefine' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagDefine', ], ],
            ],
        ],
        'TagDefine' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'buildImage' => [ 'type' => 'string', 'locationName' => 'buildImage', ],
            ],
        ],
        'OssDefine' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ossHost' => [ 'type' => 'string', 'locationName' => 'ossHost', ],
            ],
        ],
        'TimeoutDefine' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
            ],
        ],
        'SimpleJob' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'buildStartAt' => [ 'type' => 'integer', 'locationName' => 'buildStartAt', ],
                'compilerType' => [ 'type' => 'string', 'locationName' => 'compilerType', ],
                'buildStatus' => [ 'type' => 'string', 'locationName' => 'buildStatus', ],
            ],
        ],
        'CompilerTypes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'compilerType' => [ 'type' => 'string', 'locationName' => 'compilerType', ],
            ],
        ],
        'Job' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'createdAt' => [ 'type' => 'integer', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'integer', 'locationName' => 'updatedAt', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'codeType' => [ 'type' => 'string', 'locationName' => 'codeType', ],
                'codeRepoUrl' => [ 'type' => 'string', 'locationName' => 'codeRepoUrl', ],
                'codeRepoUrlLabel' => [ 'type' => 'string', 'locationName' => 'codeRepoUrlLabel', ],
                'codeRepoBranch' => [ 'type' => 'string', 'locationName' => 'codeRepoBranch', ],
                'createUserName' => [ 'type' => 'string', 'locationName' => 'createUserName', ],
                'codeRepoPrivate' => [ 'type' => 'boolean', 'locationName' => 'codeRepoPrivate', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'ossPath' => [ 'type' => 'string', 'locationName' => 'ossPath', ],
                'ossHost' => [ 'type' => 'string', 'locationName' => 'ossHost', ],
                'ossBucket' => [ 'type' => 'string', 'locationName' => 'ossBucket', ],
                'buildImage' => [ 'type' => 'string', 'locationName' => 'buildImage', ],
                'buildImageLabel' => [ 'type' => 'string', 'locationName' => 'buildImageLabel', ],
                'isUserBuildSetConfig' => [ 'type' => 'boolean', 'locationName' => 'isUserBuildSetConfig', ],
                'buildSetConfig' => [ 'type' => 'string', 'locationName' => 'buildSetConfig', ],
                'buildTimeOut' => [ 'type' => 'integer', 'locationName' => 'buildTimeOut', ],
                'buildResourceCpu' => [ 'type' => 'integer', 'locationName' => 'buildResourceCpu', ],
                'buildResourceMem' => [ 'type' => 'integer', 'locationName' => 'buildResourceMem', ],
                'noticeMail' => [ 'type' => 'string', 'locationName' => 'noticeMail', ],
                'noticeType' => [ 'type' => 'string', 'locationName' => 'noticeType', ],
                'compilerType' => [ 'type' => 'string', 'locationName' => 'compilerType', ],
                'dockerRegistry' => [ 'type' => 'string', 'locationName' => 'dockerRegistry', ],
                'dockerRepository' => [ 'type' => 'string', 'locationName' => 'dockerRepository', ],
                'dockerRegistryUri' => [ 'type' => 'string', 'locationName' => 'dockerRegistryUri', ],
            ],
        ],
        'RegionTypeDefine' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateHookParams' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'ssl' => [ 'type' => 'boolean', 'locationName' => 'ssl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'CreateDemoResultShape' => [
            'type' => 'structure',
            'members' => [
                'job' =>  [ 'shape' => 'Job', ],
            ],
        ],
        'CreateDemoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDemoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDemoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetExternalLinkResultShape' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'GetBuildStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBuildStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'JobRequest' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'codeType' => [ 'type' => 'string', 'locationName' => 'codeType', ],
                'codeRepoUrl' => [ 'type' => 'string', 'locationName' => 'codeRepoUrl', ],
                'codeRepoBranch' => [ 'type' => 'string', 'locationName' => 'codeRepoBranch', ],
                'ossPath' => [ 'type' => 'string', 'locationName' => 'ossPath', ],
                'ossHost' => [ 'type' => 'string', 'locationName' => 'ossHost', ],
                'ossBucket' => [ 'type' => 'string', 'locationName' => 'ossBucket', ],
                'buildImage' => [ 'type' => 'string', 'locationName' => 'buildImage', ],
                'isUserBuildSetConfig' => [ 'type' => 'boolean', 'locationName' => 'isUserBuildSetConfig', ],
                'buildSetConfig' => [ 'type' => 'string', 'locationName' => 'buildSetConfig', ],
                'buildTimeOut' => [ 'type' => 'integer', 'locationName' => 'buildTimeOut', ],
                'buildResourceCpu' => [ 'type' => 'integer', 'locationName' => 'buildResourceCpu', ],
                'buildResourceMem' => [ 'type' => 'integer', 'locationName' => 'buildResourceMem', ],
                'noticeMail' => [ 'type' => 'string', 'locationName' => 'noticeMail', ],
                'noticeType' => [ 'type' => 'string', 'locationName' => 'noticeType', ],
                'compilerType' => [ 'type' => 'string', 'locationName' => 'compilerType', ],
                'dockerRegistry' => [ 'type' => 'string', 'locationName' => 'dockerRegistry', ],
                'dockerRepository' => [ 'type' => 'string', 'locationName' => 'dockerRepository', ],
                'dockerRegistryUri' => [ 'type' => 'string', 'locationName' => 'dockerRegistryUri', ],
            ],
        ],
        'StartJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'commitresult' => [ 'type' => 'boolean', 'locationName' => 'commitresult', ],
                'buildUuid' => [ 'type' => 'string', 'locationName' => 'buildUuid', ],
            ],
        ],
        'DeleteJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteJobsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBuildStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createdAt' => [ 'type' => 'integer', 'locationName' => 'createdAt', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'completionRate' => [ 'type' => 'float', 'locationName' => 'completionRate', ],
            ],
        ],
        'GetJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetJobsResultShape', ],
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
        'UpdateJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'codeRepoUrlLabel' => [ 'type' => 'string', 'locationName' => 'codeRepoUrlLabel', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'DeleteJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBuildLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'log' => [ 'type' => 'string', 'locationName' => 'log', ],
                'offsetNumber' => [ 'type' => 'integer', 'locationName' => 'offsetNumber', ],
            ],
        ],
        'CreateJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'codeRepoUrlLabel' => [ 'type' => 'string', 'locationName' => 'codeRepoUrlLabel', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'GetExternalLinkResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetExternalLinkResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBuildLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBuildLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
            ],
        ],
        'GetJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'StopBuildResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'CreateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'JobRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'JobRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'job' =>  [ 'shape' => 'Job', ],
            ],
        ],
        'StopBuildResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopBuildResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => '', 'locationName' => 'category', ],
                'branch' => [ 'type' => '', 'locationName' => 'branch', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetExternalLinkRequestShape' => [
            'type' => 'structure',
            'members' => [
                'expires' => [ 'type' => 'integer', 'locationName' => 'expires', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobid' => [ 'type' => 'string', 'locationName' => 'jobid', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'commitresult' => [ 'type' => 'boolean', 'locationName' => 'commitresult', ],
            ],
        ],
        'GetBuildLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'offsetNumber' => [ 'type' => 'integer', 'locationName' => 'offsetNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobid' => [ 'type' => 'string', 'locationName' => 'jobid', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StopBuildRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobid' => [ 'type' => 'string', 'locationName' => 'jobid', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'jobs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleJob', ], ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBuildStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'jobid' => [ 'type' => 'string', 'locationName' => 'jobid', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'DeleteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteJobResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
