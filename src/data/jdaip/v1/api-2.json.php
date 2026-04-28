<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'jdaip',
        'protocol' => 'json',
//        'serviceFullName' => 'jdaip',
//        'serviceId' => 'jdaip',
    ],
    'operations' => [
        'AdminDescribeAccountMembers' => [
            'name' => 'AdminDescribeAccountMembers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/api-regions/{regionId}/member:admin',
            ],
            'input' => [ 'shape' => 'AdminDescribeAccountMembersRequestShape', ],
            'output' => [ 'shape' => 'AdminDescribeAccountMembersResponseShape', ],
        ],
        'DescribeExperiments' => [
            'name' => 'DescribeExperiments',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments',
            ],
            'input' => [ 'shape' => 'DescribeExperimentsRequestShape', ],
            'output' => [ 'shape' => 'DescribeExperimentsResponseShape', ],
        ],
        'CreateExperiment' => [
            'name' => 'CreateExperiment',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments',
            ],
            'input' => [ 'shape' => 'CreateExperimentRequestShape', ],
            'output' => [ 'shape' => 'CreateExperimentResponseShape', ],
        ],
        'DescribeExperiment' => [
            'name' => 'DescribeExperiment',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}',
            ],
            'input' => [ 'shape' => 'DescribeExperimentRequestShape', ],
            'output' => [ 'shape' => 'DescribeExperimentResponseShape', ],
        ],
        'UpdateExperiment' => [
            'name' => 'UpdateExperiment',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}',
            ],
            'input' => [ 'shape' => 'UpdateExperimentRequestShape', ],
            'output' => [ 'shape' => 'UpdateExperimentResponseShape', ],
        ],
        'DeleteExperiment' => [
            'name' => 'DeleteExperiment',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}',
            ],
            'input' => [ 'shape' => 'DeleteExperimentRequestShape', ],
            'output' => [ 'shape' => 'DeleteExperimentResponseShape', ],
        ],
        'DescribeJobTypes' => [
            'name' => 'DescribeJobTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobTypes',
            ],
            'input' => [ 'shape' => 'DescribeJobTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeJobTypesResponseShape', ],
        ],
        'DescribeJobs' => [
            'name' => 'DescribeJobs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs',
            ],
            'input' => [ 'shape' => 'DescribeJobsRequestShape', ],
            'output' => [ 'shape' => 'DescribeJobsResponseShape', ],
        ],
        'CreateJob' => [
            'name' => 'CreateJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs',
            ],
            'input' => [ 'shape' => 'CreateJobRequestShape', ],
            'output' => [ 'shape' => 'CreateJobResponseShape', ],
        ],
        'DescribeJob' => [
            'name' => 'DescribeJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs/{jobId}',
            ],
            'input' => [ 'shape' => 'DescribeJobRequestShape', ],
            'output' => [ 'shape' => 'DescribeJobResponseShape', ],
        ],
        'DeleteJob' => [
            'name' => 'DeleteJob',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs/{jobId}',
            ],
            'input' => [ 'shape' => 'DeleteJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobResponseShape', ],
        ],
        'StopJob' => [
            'name' => 'StopJob',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs/{jobId}:stop',
            ],
            'input' => [ 'shape' => 'StopJobRequestShape', ],
            'output' => [ 'shape' => 'StopJobResponseShape', ],
        ],
        'GetJobEvents' => [
            'name' => 'GetJobEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs/{jobId}:events',
            ],
            'input' => [ 'shape' => 'GetJobEventsRequestShape', ],
            'output' => [ 'shape' => 'GetJobEventsResponseShape', ],
        ],
        'GetPodLogs' => [
            'name' => 'GetPodLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/jobs/{jobId}/pods/{podName}:logs',
            ],
            'input' => [ 'shape' => 'GetPodLogsRequestShape', ],
            'output' => [ 'shape' => 'GetPodLogsResponseShape', ],
        ],
        'DescribeRunConfigs' => [
            'name' => 'DescribeRunConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/runConfigs',
            ],
            'input' => [ 'shape' => 'DescribeRunConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRunConfigsResponseShape', ],
        ],
        'DescribeRuns' => [
            'name' => 'DescribeRuns',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs',
            ],
            'input' => [ 'shape' => 'DescribeRunsRequestShape', ],
            'output' => [ 'shape' => 'DescribeRunsResponseShape', ],
        ],
        'CreateRun' => [
            'name' => 'CreateRun',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs',
            ],
            'input' => [ 'shape' => 'CreateRunRequestShape', ],
            'output' => [ 'shape' => 'CreateRunResponseShape', ],
        ],
        'DescribeRun' => [
            'name' => 'DescribeRun',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs/{runId}',
            ],
            'input' => [ 'shape' => 'DescribeRunRequestShape', ],
            'output' => [ 'shape' => 'DescribeRunResponseShape', ],
        ],
        'UpdateRun' => [
            'name' => 'UpdateRun',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs/{runId}',
            ],
            'input' => [ 'shape' => 'UpdateRunRequestShape', ],
            'output' => [ 'shape' => 'UpdateRunResponseShape', ],
        ],
        'DeleteRun' => [
            'name' => 'DeleteRun',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs/{runId}',
            ],
            'input' => [ 'shape' => 'DeleteRunRequestShape', ],
            'output' => [ 'shape' => 'DeleteRunResponseShape', ],
        ],
        'StopRun' => [
            'name' => 'StopRun',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs/{runId}:stop',
            ],
            'input' => [ 'shape' => 'StopRunRequestShape', ],
            'output' => [ 'shape' => 'StopRunResponseShape', ],
        ],
        'GetRunEvents' => [
            'name' => 'GetRunEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs/{runId}:events',
            ],
            'input' => [ 'shape' => 'GetRunEventsRequestShape', ],
            'output' => [ 'shape' => 'GetRunEventsResponseShape', ],
        ],
        'GetPodLogs' => [
            'name' => 'GetPodLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/train/{regionId}/workspaces/{workspaceId}/experiments/{experimentId}/runs/{runId}/pods/{podName}:logs',
            ],
            'input' => [ 'shape' => 'GetPodLogsRequestShape', ],
            'output' => [ 'shape' => 'GetPodLogsResponseShape', ],
        ],
        'DescribeDatasets' => [
            'name' => 'DescribeDatasets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset',
            ],
            'input' => [ 'shape' => 'DescribeDatasetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatasetsResponseShape', ],
        ],
        'CreateDataset' => [
            'name' => 'CreateDataset',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset',
            ],
            'input' => [ 'shape' => 'CreateDatasetRequestShape', ],
            'output' => [ 'shape' => 'CreateDatasetResponseShape', ],
        ],
        'DescribeDataset' => [
            'name' => 'DescribeDataset',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}',
            ],
            'input' => [ 'shape' => 'DescribeDatasetRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatasetResponseShape', ],
        ],
        'UpdateDataset' => [
            'name' => 'UpdateDataset',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}',
            ],
            'input' => [ 'shape' => 'UpdateDatasetRequestShape', ],
            'output' => [ 'shape' => 'UpdateDatasetResponseShape', ],
        ],
        'DeleteDataset' => [
            'name' => 'DeleteDataset',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}',
            ],
            'input' => [ 'shape' => 'DeleteDatasetRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatasetResponseShape', ],
        ],
        'DescribeDatasetVersions' => [
            'name' => 'DescribeDatasetVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}/version',
            ],
            'input' => [ 'shape' => 'DescribeDatasetVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatasetVersionsResponseShape', ],
        ],
        'DescribeDatasetVersion' => [
            'name' => 'DescribeDatasetVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}/version/{version}',
            ],
            'input' => [ 'shape' => 'DescribeDatasetVersionRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatasetVersionResponseShape', ],
        ],
        'UpdateDatasetVersion' => [
            'name' => 'UpdateDatasetVersion',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}/version/{version}',
            ],
            'input' => [ 'shape' => 'UpdateDatasetVersionRequestShape', ],
            'output' => [ 'shape' => 'UpdateDatasetVersionResponseShape', ],
        ],
        'DeleteDatasetVersion' => [
            'name' => 'DeleteDatasetVersion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/ds-regions/{regionId}/workspace/{workspaceId}/dataset/{datasetId}/version/{version}',
            ],
            'input' => [ 'shape' => 'DeleteDatasetVersionRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatasetVersionResponseShape', ],
        ],
        'DescribeImages' => [
            'name' => 'DescribeImages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/img-regions/{regionId}/workspace/{workspaceId}/image',
            ],
            'input' => [ 'shape' => 'DescribeImagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImagesResponseShape', ],
        ],
        'CreateImage' => [
            'name' => 'CreateImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/img-regions/{regionId}/workspace/{workspaceId}/image',
            ],
            'input' => [ 'shape' => 'CreateImageRequestShape', ],
            'output' => [ 'shape' => 'CreateImageResponseShape', ],
        ],
        'DescribeImage' => [
            'name' => 'DescribeImage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/img-regions/{regionId}/workspace/{workspaceId}/image/{imageId}',
            ],
            'input' => [ 'shape' => 'DescribeImageRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageResponseShape', ],
        ],
        'UpdateImage' => [
            'name' => 'UpdateImage',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/img-regions/{regionId}/workspace/{workspaceId}/image/{imageId}',
            ],
            'input' => [ 'shape' => 'UpdateImageRequestShape', ],
            'output' => [ 'shape' => 'UpdateImageResponseShape', ],
        ],
        'DeleteImage' => [
            'name' => 'DeleteImage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/img-regions/{regionId}/workspace/{workspaceId}/image/{imageId}',
            ],
            'input' => [ 'shape' => 'DeleteImageRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageResponseShape', ],
        ],
        'GetPodLogs' => [
            'name' => 'GetPodLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/img-regions/{regionId}/workspace/{workspaceId}/image/{imageId}/pods/{podName}:logs',
            ],
            'input' => [ 'shape' => 'GetPodLogsRequestShape', ],
            'output' => [ 'shape' => 'GetPodLogsResponseShape', ],
        ],
        'RolloutInference' => [
            'name' => 'RolloutInference',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/rollout',
            ],
            'input' => [ 'shape' => 'RolloutInferenceRequestShape', ],
            'output' => [ 'shape' => 'RolloutInferenceResponseShape', ],
        ],
        'PauseRollout' => [
            'name' => 'PauseRollout',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/pause',
            ],
            'input' => [ 'shape' => 'PauseRolloutRequestShape', ],
            'output' => [ 'shape' => 'PauseRolloutResponseShape', ],
        ],
        'DescribeInferenceRollouts' => [
            'name' => 'DescribeInferenceRollouts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/rollouts',
            ],
            'input' => [ 'shape' => 'DescribeInferenceRolloutsRequestShape', ],
            'output' => [ 'shape' => 'DescribeInferenceRolloutsResponseShape', ],
        ],
        'DescribeInferences' => [
            'name' => 'DescribeInferences',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences',
            ],
            'input' => [ 'shape' => 'DescribeInferencesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInferencesResponseShape', ],
        ],
        'CreateInference' => [
            'name' => 'CreateInference',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences',
            ],
            'input' => [ 'shape' => 'CreateInferenceRequestShape', ],
            'output' => [ 'shape' => 'CreateInferenceResponseShape', ],
        ],
        'DescribeInference' => [
            'name' => 'DescribeInference',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}',
            ],
            'input' => [ 'shape' => 'DescribeInferenceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInferenceResponseShape', ],
        ],
        'UpdateInference' => [
            'name' => 'UpdateInference',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}',
            ],
            'input' => [ 'shape' => 'UpdateInferenceRequestShape', ],
            'output' => [ 'shape' => 'UpdateInferenceResponseShape', ],
        ],
        'DeleteInference' => [
            'name' => 'DeleteInference',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}',
            ],
            'input' => [ 'shape' => 'DeleteInferenceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInferenceResponseShape', ],
        ],
        'StartInference' => [
            'name' => 'StartInference',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/start',
            ],
            'input' => [ 'shape' => 'StartInferenceRequestShape', ],
            'output' => [ 'shape' => 'StartInferenceResponseShape', ],
        ],
        'StopInference' => [
            'name' => 'StopInference',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/stop',
            ],
            'input' => [ 'shape' => 'StopInferenceRequestShape', ],
            'output' => [ 'shape' => 'StopInferenceResponseShape', ],
        ],
        'DescribeInferenceEvents' => [
            'name' => 'DescribeInferenceEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/events',
            ],
            'input' => [ 'shape' => 'DescribeInferenceEventsRequestShape', ],
            'output' => [ 'shape' => 'DescribeInferenceEventsResponseShape', ],
        ],
        'DescribeServices' => [
            'name' => 'DescribeServices',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/services',
            ],
            'input' => [ 'shape' => 'DescribeServicesRequestShape', ],
            'output' => [ 'shape' => 'DescribeServicesResponseShape', ],
        ],
        'DescribeService' => [
            'name' => 'DescribeService',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'DescribeServiceRequestShape', ],
            'output' => [ 'shape' => 'DescribeServiceResponseShape', ],
        ],
        'UpdateService' => [
            'name' => 'UpdateService',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'UpdateServiceRequestShape', ],
            'output' => [ 'shape' => 'UpdateServiceResponseShape', ],
        ],
        'DeleteService' => [
            'name' => 'DeleteService',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'DeleteServiceRequestShape', ],
            'output' => [ 'shape' => 'DeleteServiceResponseShape', ],
        ],
        'DescribeInferencePods' => [
            'name' => 'DescribeInferencePods',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/pods',
            ],
            'input' => [ 'shape' => 'DescribeInferencePodsRequestShape', ],
            'output' => [ 'shape' => 'DescribeInferencePodsResponseShape', ],
        ],
        'DescribeInferenceScale' => [
            'name' => 'DescribeInferenceScale',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/autoscale',
            ],
            'input' => [ 'shape' => 'DescribeInferenceScaleRequestShape', ],
            'output' => [ 'shape' => 'DescribeInferenceScaleResponseShape', ],
        ],
        'CreateInferenceScale' => [
            'name' => 'CreateInferenceScale',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/autoscale',
            ],
            'input' => [ 'shape' => 'CreateInferenceScaleRequestShape', ],
            'output' => [ 'shape' => 'CreateInferenceScaleResponseShape', ],
        ],
        'UpdateInferenceScale' => [
            'name' => 'UpdateInferenceScale',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/autoscale',
            ],
            'input' => [ 'shape' => 'UpdateInferenceScaleRequestShape', ],
            'output' => [ 'shape' => 'UpdateInferenceScaleResponseShape', ],
        ],
        'DeleteInferenceScale' => [
            'name' => 'DeleteInferenceScale',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/inferences/{inferenceId}/autoscale',
            ],
            'input' => [ 'shape' => 'DeleteInferenceScaleRequestShape', ],
            'output' => [ 'shape' => 'DeleteInferenceScaleResponseShape', ],
        ],
        'DescribeNodeInstances' => [
            'name' => 'DescribeNodeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/nodes',
            ],
            'input' => [ 'shape' => 'DescribeNodeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeNodeInstancesResponseShape', ],
        ],
        'ListMetrics' => [
            'name' => 'ListMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/metrics:list',
            ],
            'input' => [ 'shape' => 'ListMetricsRequestShape', ],
            'output' => [ 'shape' => 'ListMetricsResponseShape', ],
        ],
        'DescribePrivateModels' => [
            'name' => 'DescribePrivateModels',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model',
            ],
            'input' => [ 'shape' => 'DescribePrivateModelsRequestShape', ],
            'output' => [ 'shape' => 'DescribePrivateModelsResponseShape', ],
        ],
        'CreateModel' => [
            'name' => 'CreateModel',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model',
            ],
            'input' => [ 'shape' => 'CreateModelRequestShape', ],
            'output' => [ 'shape' => 'CreateModelResponseShape', ],
        ],
        'UpdateModel' => [
            'name' => 'UpdateModel',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model/{modelId}',
            ],
            'input' => [ 'shape' => 'UpdateModelRequestShape', ],
            'output' => [ 'shape' => 'UpdateModelResponseShape', ],
        ],
        'DeleteModel' => [
            'name' => 'DeleteModel',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model/{modelId}',
            ],
            'input' => [ 'shape' => 'DeleteModelRequestShape', ],
            'output' => [ 'shape' => 'DeleteModelResponseShape', ],
        ],
        'DescribeModelVersions' => [
            'name' => 'DescribeModelVersions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model/{modelId}/version',
            ],
            'input' => [ 'shape' => 'DescribeModelVersionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeModelVersionsResponseShape', ],
        ],
        'DescribeModelVersion' => [
            'name' => 'DescribeModelVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model/{modelId}/version/{version}',
            ],
            'input' => [ 'shape' => 'DescribeModelVersionRequestShape', ],
            'output' => [ 'shape' => 'DescribeModelVersionResponseShape', ],
        ],
        'UpdateModelVersion' => [
            'name' => 'UpdateModelVersion',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model/{modelId}/version/{version}',
            ],
            'input' => [ 'shape' => 'UpdateModelVersionRequestShape', ],
            'output' => [ 'shape' => 'UpdateModelVersionResponseShape', ],
        ],
        'DeleteModelVersion' => [
            'name' => 'DeleteModelVersion',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/model-regions/{regionId}/workspace/{workspaceId}/model/{modelId}/version/{version}',
            ],
            'input' => [ 'shape' => 'DeleteModelVersionRequestShape', ],
            'output' => [ 'shape' => 'DeleteModelVersionResponseShape', ],
        ],
        'DescribePublicModels' => [
            'name' => 'DescribePublicModels',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/model-regions/{regionId}/publicModel',
            ],
            'input' => [ 'shape' => 'DescribePublicModelsRequestShape', ],
            'output' => [ 'shape' => 'DescribePublicModelsResponseShape', ],
        ],
        'DescribePublicModelVersion' => [
            'name' => 'DescribePublicModelVersion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/model-regions/{regionId}/publicModel/{modelId}/version/{version}',
            ],
            'input' => [ 'shape' => 'DescribePublicModelVersionRequestShape', ],
            'output' => [ 'shape' => 'DescribePublicModelVersionResponseShape', ],
        ],
        'DescribeAdminPublicModels' => [
            'name' => 'DescribeAdminPublicModels',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/model-regions/{regionId}/adminPublicModel',
            ],
            'input' => [ 'shape' => 'DescribeAdminPublicModelsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAdminPublicModelsResponseShape', ],
        ],
        'DescribeNotebooks' => [
            'name' => 'DescribeNotebooks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook',
            ],
            'input' => [ 'shape' => 'DescribeNotebooksRequestShape', ],
            'output' => [ 'shape' => 'DescribeNotebooksResponseShape', ],
        ],
        'CreateNotebook' => [
            'name' => 'CreateNotebook',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook',
            ],
            'input' => [ 'shape' => 'CreateNotebookRequestShape', ],
            'output' => [ 'shape' => 'CreateNotebookResponseShape', ],
        ],
        'DescribeNotebookCount' => [
            'name' => 'DescribeNotebookCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook:count',
            ],
            'input' => [ 'shape' => 'DescribeNotebookCountRequestShape', ],
            'output' => [ 'shape' => 'DescribeNotebookCountResponseShape', ],
        ],
        'DescribeNotebook' => [
            'name' => 'DescribeNotebook',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}',
            ],
            'input' => [ 'shape' => 'DescribeNotebookRequestShape', ],
            'output' => [ 'shape' => 'DescribeNotebookResponseShape', ],
        ],
        'UpdateNotebook' => [
            'name' => 'UpdateNotebook',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}',
            ],
            'input' => [ 'shape' => 'UpdateNotebookRequestShape', ],
            'output' => [ 'shape' => 'UpdateNotebookResponseShape', ],
        ],
        'DeleteNotebook' => [
            'name' => 'DeleteNotebook',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}',
            ],
            'input' => [ 'shape' => 'DeleteNotebookRequestShape', ],
            'output' => [ 'shape' => 'DeleteNotebookResponseShape', ],
        ],
        'StartNotebook' => [
            'name' => 'StartNotebook',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}:start',
            ],
            'input' => [ 'shape' => 'StartNotebookRequestShape', ],
            'output' => [ 'shape' => 'StartNotebookResponseShape', ],
        ],
        'StopNotebook' => [
            'name' => 'StopNotebook',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}:stop',
            ],
            'input' => [ 'shape' => 'StopNotebookRequestShape', ],
            'output' => [ 'shape' => 'StopNotebookResponseShape', ],
        ],
        'UpdateResourceProperties' => [
            'name' => 'UpdateResourceProperties',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}:updateResourceProperties',
            ],
            'input' => [ 'shape' => 'UpdateResourcePropertiesRequestShape', ],
            'output' => [ 'shape' => 'UpdateResourcePropertiesResponseShape', ],
        ],
        'GetNotebookEvents' => [
            'name' => 'GetNotebookEvents',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}:events',
            ],
            'input' => [ 'shape' => 'GetNotebookEventsRequestShape', ],
            'output' => [ 'shape' => 'GetNotebookEventsResponseShape', ],
        ],
        'GetNotebookPods' => [
            'name' => 'GetNotebookPods',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}:pods',
            ],
            'input' => [ 'shape' => 'GetNotebookPodsRequestShape', ],
            'output' => [ 'shape' => 'GetNotebookPodsResponseShape', ],
        ],
        'SaveImage' => [
            'name' => 'SaveImage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/image',
            ],
            'input' => [ 'shape' => 'SaveImageRequestShape', ],
            'output' => [ 'shape' => 'SaveImageResponseShape', ],
        ],
        'DescribeImageTasks' => [
            'name' => 'DescribeImageTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/imageTask',
            ],
            'input' => [ 'shape' => 'DescribeImageTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageTasksResponseShape', ],
        ],
        'DeleteImageTask' => [
            'name' => 'DeleteImageTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/imageTask/{taskId}',
            ],
            'input' => [ 'shape' => 'DeleteImageTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageTaskResponseShape', ],
        ],
        'CreateNotebookLogCollectConfig' => [
            'name' => 'CreateNotebookLogCollectConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/logCollectConfig',
            ],
            'input' => [ 'shape' => 'CreateNotebookLogCollectConfigRequestShape', ],
            'output' => [ 'shape' => 'CreateNotebookLogCollectConfigResponseShape', ],
        ],
        'DeleteNotebookLogCollectConfig' => [
            'name' => 'DeleteNotebookLogCollectConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/logCollectConfig:delete',
            ],
            'input' => [ 'shape' => 'DeleteNotebookLogCollectConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteNotebookLogCollectConfigResponseShape', ],
        ],
        'DescribeCodeRepoConfigs' => [
            'name' => 'DescribeCodeRepoConfigs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/repo-regions/{regionId}/workspace/{workspaceId}/codeRepoConfig',
            ],
            'input' => [ 'shape' => 'DescribeCodeRepoConfigsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeRepoConfigsResponseShape', ],
        ],
        'CreateCodeRepoConfig' => [
            'name' => 'CreateCodeRepoConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/repo-regions/{regionId}/workspace/{workspaceId}/codeRepoConfig',
            ],
            'input' => [ 'shape' => 'CreateCodeRepoConfigRequestShape', ],
            'output' => [ 'shape' => 'CreateCodeRepoConfigResponseShape', ],
        ],
        'DescribeCodeRepoConfig' => [
            'name' => 'DescribeCodeRepoConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/repo-regions/{regionId}/workspace/{workspaceId}/codeRepoConfig/{repoId}',
            ],
            'input' => [ 'shape' => 'DescribeCodeRepoConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeCodeRepoConfigResponseShape', ],
        ],
        'UpdateCodeRepoConfig' => [
            'name' => 'UpdateCodeRepoConfig',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/repo-regions/{regionId}/workspace/{workspaceId}/codeRepoConfig/{repoId}',
            ],
            'input' => [ 'shape' => 'UpdateCodeRepoConfigRequestShape', ],
            'output' => [ 'shape' => 'UpdateCodeRepoConfigResponseShape', ],
        ],
        'DeleteCodeRepoConfig' => [
            'name' => 'DeleteCodeRepoConfig',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/repo-regions/{regionId}/workspace/{workspaceId}/codeRepoConfig/{repoId}',
            ],
            'input' => [ 'shape' => 'DeleteCodeRepoConfigRequestShape', ],
            'output' => [ 'shape' => 'DeleteCodeRepoConfigResponseShape', ],
        ],
        'DescribeTensorBoards' => [
            'name' => 'DescribeTensorBoards',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/tb-regions/{regionId}/workspace/{workspaceId}/tensorBoard',
            ],
            'input' => [ 'shape' => 'DescribeTensorBoardsRequestShape', ],
            'output' => [ 'shape' => 'DescribeTensorBoardsResponseShape', ],
        ],
        'CreateTensorBoard' => [
            'name' => 'CreateTensorBoard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/tb-regions/{regionId}/workspace/{workspaceId}/tensorBoard',
            ],
            'input' => [ 'shape' => 'CreateTensorBoardRequestShape', ],
            'output' => [ 'shape' => 'CreateTensorBoardResponseShape', ],
        ],
        'DeleteTensorBoard' => [
            'name' => 'DeleteTensorBoard',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/tb-regions/{regionId}/workspace/{workspaceId}/tensorBoard/{tensorBoardId}',
            ],
            'input' => [ 'shape' => 'DeleteTensorBoardRequestShape', ],
            'output' => [ 'shape' => 'DeleteTensorBoardResponseShape', ],
        ],
        'StartTensorBoard' => [
            'name' => 'StartTensorBoard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/tb-regions/{regionId}/workspace/{workspaceId}/tensorBoard/{tensorBoardId}:start',
            ],
            'input' => [ 'shape' => 'StartTensorBoardRequestShape', ],
            'output' => [ 'shape' => 'StartTensorBoardResponseShape', ],
        ],
        'StopTensorBoard' => [
            'name' => 'StopTensorBoard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/tb-regions/{regionId}/workspace/{workspaceId}/tensorBoard/{tensorBoardId}:stop',
            ],
            'input' => [ 'shape' => 'StopTensorBoardRequestShape', ],
            'output' => [ 'shape' => 'StopTensorBoardResponseShape', ],
        ],
        'CreateWorkspace' => [
            'name' => 'CreateWorkspace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace',
            ],
            'input' => [ 'shape' => 'CreateWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'CreateWorkspaceResponseShape', ],
        ],
        'UpdateWorkspace' => [
            'name' => 'UpdateWorkspace',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}',
            ],
            'input' => [ 'shape' => 'UpdateWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'UpdateWorkspaceResponseShape', ],
        ],
        'AddQueues' => [
            'name' => 'AddQueues',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/queue',
            ],
            'input' => [ 'shape' => 'AddQueuesRequestShape', ],
            'output' => [ 'shape' => 'AddQueuesResponseShape', ],
        ],
        'RemoveQueues' => [
            'name' => 'RemoveQueues',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/queue',
            ],
            'input' => [ 'shape' => 'RemoveQueuesRequestShape', ],
            'output' => [ 'shape' => 'RemoveQueuesResponseShape', ],
        ],
        'CreateBindWorkspace' => [
            'name' => 'CreateBindWorkspace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/resources',
            ],
            'input' => [ 'shape' => 'CreateBindWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'CreateBindWorkspaceResponseShape', ],
        ],
        'UnbindWorkspaceResources' => [
            'name' => 'UnbindWorkspaceResources',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/resources',
            ],
            'input' => [ 'shape' => 'UnbindWorkspaceResourcesRequestShape', ],
            'output' => [ 'shape' => 'UnbindWorkspaceResourcesResponseShape', ],
        ],
        'DescribeWorkspaceResources' => [
            'name' => 'DescribeWorkspaceResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ws-regions/{regionId}/resources',
            ],
            'input' => [ 'shape' => 'DescribeWorkspaceResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeWorkspaceResourcesResponseShape', ],
        ],
    ],
    'shapes' => [
        'UpdateMemberPolicy' => [
            'type' => 'structure',
            'members' => [
                'memberPin' => [ 'type' => 'string', 'locationName' => 'memberPin', ],
                'memberPolicy' => [ 'type' => 'string', 'locationName' => 'memberPolicy', ],
            ],
        ],
        'AccountMember' => [
            'type' => 'structure',
            'members' => [
                'memberUser' => [ 'type' => 'string', 'locationName' => 'memberUser', ],
                'memberPin' => [ 'type' => 'string', 'locationName' => 'memberPin', ],
                'memberPolicy' => [ 'type' => 'string', 'locationName' => 'memberPolicy', ],
                'errMsg' => [ 'type' => 'string', 'locationName' => 'errMsg', ],
            ],
        ],
        'RelatedInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'relatedInfo' =>  [ 'shape' => 'RelatedInfo', ],
            ],
        ],
        'DescribeResources' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ExperimentDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'modelSeries' => [ 'type' => 'string', 'locationName' => 'modelSeries', ],
                'modelTemplate' => [ 'type' => 'string', 'locationName' => 'modelTemplate', ],
                'runTotal' => [ 'type' => 'integer', 'locationName' => 'runTotal', ],
                'baseModelVisibility' => [ 'type' => 'string', 'locationName' => 'baseModelVisibility', ],
                'baseModelId' => [ 'type' => 'string', 'locationName' => 'baseModelId', ],
                'baseModelName' => [ 'type' => 'string', 'locationName' => 'baseModelName', ],
                'baseModelVersion' => [ 'type' => 'string', 'locationName' => 'baseModelVersion', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ExperimentListInfo' => [
            'type' => 'structure',
            'members' => [
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'modelSeries' => [ 'type' => 'string', 'locationName' => 'modelSeries', ],
                'modelTemplate' => [ 'type' => 'string', 'locationName' => 'modelTemplate', ],
                'runTotal' => [ 'type' => 'integer', 'locationName' => 'runTotal', ],
                'baseModelVisibility' => [ 'type' => 'string', 'locationName' => 'baseModelVisibility', ],
                'baseModelId' => [ 'type' => 'string', 'locationName' => 'baseModelId', ],
                'baseModelName' => [ 'type' => 'string', 'locationName' => 'baseModelName', ],
                'baseModelVersion' => [ 'type' => 'string', 'locationName' => 'baseModelVersion', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ExperimentParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'modelSeries' => [ 'type' => 'string', 'locationName' => 'modelSeries', ],
                'modelTemplate' => [ 'type' => 'string', 'locationName' => 'modelTemplate', ],
                'baseModelVisibility' => [ 'type' => 'string', 'locationName' => 'baseModelVisibility', ],
                'baseModelId' => [ 'type' => 'string', 'locationName' => 'baseModelId', ],
                'baseModelVersion' => [ 'type' => 'string', 'locationName' => 'baseModelVersion', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'InstanceInfoForJobList' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'running' => [ 'type' => 'integer', 'locationName' => 'running', ],
                'failed' => [ 'type' => 'integer', 'locationName' => 'failed', ],
            ],
        ],
        'AdminJobListInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'failureType' => [ 'type' => 'string', 'locationName' => 'failureType', ],
                'failureReason' => [ 'type' => 'string', 'locationName' => 'failureReason', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorInfo' => [ 'type' => 'object', 'locationName' => 'flavorInfo', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'double', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'roleResource' =>  [ 'shape' => 'RoleResourceInfoForJobList', ],
                'instanceInfo' =>  [ 'shape' => 'InstanceInfoForJobList', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTag', ], ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AdminJobStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'RoleResourceInfoForJobList' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleResourceInfoForJob', ], ],
            ],
        ],
        'JobTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'RoleResourceInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorInfo' => [ 'type' => 'object', 'locationName' => 'flavorInfo', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'double', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
            ],
        ],
        'EnvParamForJob' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceListInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'terminalUrl' => [ 'type' => 'string', 'locationName' => 'terminalUrl', ],
            ],
        ],
        'OssParamForJob' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'DatasetParamForJob' => [
            'type' => 'structure',
            'members' => [
                'datasetVisibility' => [ 'type' => 'string', 'locationName' => 'datasetVisibility', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'ModelParamForJob' => [
            'type' => 'structure',
            'members' => [
                'modelVisibility' => [ 'type' => 'string', 'locationName' => 'modelVisibility', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'StorageSpaceDetailForJob' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
                'oss' =>  [ 'shape' => 'OssDetailForJob', ],
                'cfs' =>  [ 'shape' => 'CfsDetailForJob', ],
                'jpfs' =>  [ 'shape' => 'JpfsDetailForJob', ],
            ],
        ],
        'OssDetailForJob' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'HealthCheckPolicyParamForJob' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'timeoutAction' => [ 'type' => 'string', 'locationName' => 'timeoutAction', ],
            ],
        ],
        'RestartHistoryListForJob' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'triggerCondition' => [ 'type' => 'string', 'locationName' => 'triggerCondition', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'JobTagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JpfsDetailForJob' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'DatasetResultForJob' => [
            'type' => 'structure',
            'members' => [
                'datasetVisibility' => [ 'type' => 'string', 'locationName' => 'datasetVisibility', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
                'storage' =>  [ 'shape' => 'StorageSpaceParamForJob', ],
            ],
        ],
        'JobNodeAffinity' => [
            'type' => 'structure',
            'members' => [
                'affinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobAffinitity', ], ],
            ],
        ],
        'CodeResultForJob' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
                'repoName' => [ 'type' => 'string', 'locationName' => 'repoName', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
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
        'CfsParamForJob' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'JobResourceMetadata' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'podResourceMetadata' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodResourceMetadataForJob', ], ],
            ],
        ],
        'JobParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageVisibility' => [ 'type' => 'string', 'locationName' => 'imageVisibility', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvParamForJob', ], ],
                'resource' =>  [ 'shape' => 'ResourceParamForJob', ],
                'storageSpaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpaceParamForJob', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParamForJob', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelParamForJob', ], ],
                'roleResource' =>  [ 'shape' => 'RoleResourceParamForJob', ],
                'advancedConfig' => [ 'type' => 'string', 'locationName' => 'advancedConfig', ],
                'restartPolicy' =>  [ 'shape' => 'RestartPolicyParamForJob', ],
                'healthCheckPolicy' =>  [ 'shape' => 'HealthCheckPolicyParamForJob', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobNodeAffinity', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeParam', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'RestartPolicyParamForJob' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'triggerConditions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskHangTimeout' => [ 'type' => 'integer', 'locationName' => 'taskHangTimeout', ],
                'processInspectionStartDelay' => [ 'type' => 'integer', 'locationName' => 'processInspectionStartDelay', ],
                'maxRestartCount' => [ 'type' => 'integer', 'locationName' => 'maxRestartCount', ],
            ],
        ],
        'LogCollectConfigDetail' => [
            'type' => 'structure',
            'members' => [
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logSetName' => [ 'type' => 'string', 'locationName' => 'logSetName', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'logTopicName' => [ 'type' => 'string', 'locationName' => 'logTopicName', ],
                'standardLogConfig' =>  [ 'shape' => 'StandardLogConfig', ],
                'customLogConfig' =>  [ 'shape' => 'CustomLogConfig', ],
            ],
        ],
        'LogCollectConfig' => [
            'type' => 'structure',
            'members' => [
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'standardLogConfig' =>  [ 'shape' => 'StandardLogConfig', ],
                'customLogConfig' =>  [ 'shape' => 'CustomLogConfig', ],
            ],
        ],
        'JobListInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'failureType' => [ 'type' => 'string', 'locationName' => 'failureType', ],
                'failureReason' => [ 'type' => 'string', 'locationName' => 'failureReason', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorInfo' => [ 'type' => 'object', 'locationName' => 'flavorInfo', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'double', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'roleResource' =>  [ 'shape' => 'RoleResourceInfoForJobList', ],
                'instanceInfo' =>  [ 'shape' => 'InstanceInfoForJobList', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTag', ], ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RoleResourceForJob' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorInfo' => [ 'type' => 'object', 'locationName' => 'flavorInfo', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'double', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
            ],
        ],
        'CustomLogConfig' => [
            'type' => 'structure',
            'members' => [
                'paths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'HealthCheckPolicyInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'timeoutAction' => [ 'type' => 'string', 'locationName' => 'timeoutAction', ],
            ],
        ],
        'RoleResourceParamForJob' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'roles' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleResourceInfoForJob', ], ],
            ],
        ],
        'PodInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'terminalUrl' => [ 'type' => 'string', 'locationName' => 'terminalUrl', ],
            ],
        ],
        'JpfsParamForJob' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'EventInfoListForInstance' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
            ],
        ],
        'ModelResultForJob' => [
            'type' => 'structure',
            'members' => [
                'modelVisibility' => [ 'type' => 'string', 'locationName' => 'modelVisibility', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
                'storage' =>  [ 'shape' => 'StorageSpaceParamForJob', ],
            ],
        ],
        'JobAffinitity' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'EventInfoListForJob' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
            ],
        ],
        'DurationInfo' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'StorageSpaceParamForJob' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
                'oss' =>  [ 'shape' => 'OssParamForJob', ],
                'cfs' =>  [ 'shape' => 'CfsParamForJob', ],
                'jpfs' =>  [ 'shape' => 'JpfsParamForJob', ],
            ],
        ],
        'CodeParam' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'ResourceParamForJob' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorInfo' => [ 'type' => 'object', 'locationName' => 'flavorInfo', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'double', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
            ],
        ],
        'JobDetailInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'failureType' => [ 'type' => 'string', 'locationName' => 'failureType', ],
                'failureReason' => [ 'type' => 'string', 'locationName' => 'failureReason', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageVisibility' => [ 'type' => 'string', 'locationName' => 'imageVisibility', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageNameSnapshot' => [ 'type' => 'string', 'locationName' => 'imageNameSnapshot', ],
                'imageUrlSnapshot' => [ 'type' => 'string', 'locationName' => 'imageUrlSnapshot', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'envs' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvParamForJob', ], ],
                'resource' =>  [ 'shape' => 'ResourceParamForJob', ],
                'storageSpaces' => [ 'type' => 'string', 'locationName' => 'storageSpaces', ],
                'storageSpacesObject' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpaceDetailForJob', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetResultForJob', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelResultForJob', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeResultForJob', ], ],
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodInfoForJob', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfigDetail', ],
                'roleResource' =>  [ 'shape' => 'RoleResourceParamForJob', ],
                'advancedConfig' => [ 'type' => 'string', 'locationName' => 'advancedConfig', ],
                'restartPolicy' =>  [ 'shape' => 'RestartPolicyInfoForJob', ],
                'healthCheckPolicy' =>  [ 'shape' => 'HealthCheckPolicyInfoForJob', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'nodeAffinities' =>  [ 'shape' => 'JobNodeAffinity', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTag', ], ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'PodResourceMetadataForJob' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeIP' => [ 'type' => 'string', 'locationName' => 'nodeIP', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'podIP' => [ 'type' => 'string', 'locationName' => 'podIP', ],
                'podUID' => [ 'type' => 'string', 'locationName' => 'podUID', ],
                'gpu' =>  [ 'shape' => 'GpuInfo', ],
            ],
        ],
        'CfsDetailForJob' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'pseudo' => [ 'type' => 'string', 'locationName' => 'pseudo', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'StandardLogConfig' => [
            'type' => 'structure',
            'members' => [
                'stdout' => [ 'type' => 'boolean', 'locationName' => 'stdout', ],
            ],
        ],
        'GpuInfo' => [
            'type' => 'structure',
            'members' => [
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
            ],
        ],
        'RestartPolicyInfoForJob' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'triggerConditions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskHangTimeout' => [ 'type' => 'integer', 'locationName' => 'taskHangTimeout', ],
                'processInspectionStartDelay' => [ 'type' => 'integer', 'locationName' => 'processInspectionStartDelay', ],
                'maxRestartCount' => [ 'type' => 'integer', 'locationName' => 'maxRestartCount', ],
            ],
        ],
        'AdminRunListInfo' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'experimentName' => [ 'type' => 'string', 'locationName' => 'experimentName', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunTag', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RunTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'AdminRunStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'FinetuningParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'baseModelVisibility' => [ 'type' => 'string', 'locationName' => 'baseModelVisibility', ],
                'baseModelId' => [ 'type' => 'string', 'locationName' => 'baseModelId', ],
                'baseModelVersion' => [ 'type' => 'string', 'locationName' => 'baseModelVersion', ],
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigParamForDistill', ],
                'dataset' =>  [ 'shape' => 'StorageSpaceParamForDistill', ],
                'resource' =>  [ 'shape' => 'ResourceParamForDistill', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParamForDistill', ],
            ],
        ],
        'OssParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'FinetuningConfigParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'stage' => [ 'type' => 'string', 'locationName' => 'stage', ],
                'finetuningType' => [ 'type' => 'string', 'locationName' => 'finetuningType', ],
                'runConfigExtras' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunConfigExtraParamForDistill', ], ],
            ],
        ],
        'CfsParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'FinetuningDetailInfoForDistill' => [
            'type' => 'structure',
            'members' => [
                'finetuningId' => [ 'type' => 'string', 'locationName' => 'finetuningId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodInfoForDistill', ], ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'realPublicQueueId' => [ 'type' => 'string', 'locationName' => 'realPublicQueueId', ],
                'tokens' => [ 'type' => 'integer', 'locationName' => 'tokens', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'JpfsParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'RunConfigExtraParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'PodInfoForDistill' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
            ],
        ],
        'StorageSpaceParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'OssParamForDistill', ],
                'cfs' =>  [ 'shape' => 'CfsParamForDistill', ],
                'jpfs' =>  [ 'shape' => 'JpfsParamForDistill', ],
            ],
        ],
        'ResourceParamForDistill' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
            ],
        ],
        'PodInfoForExperiment' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'terminalUrl' => [ 'type' => 'string', 'locationName' => 'terminalUrl', ],
            ],
        ],
        'RunListInfoForExperiment' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigInfoForExperiment', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParamForExperiment', ], ],
                'resource' =>  [ 'shape' => 'ResourceParamForExperiment', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParamForExperiment', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunTag', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AffinitityForExperiment' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RunConfigExtraInfoForExperiment' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'NodeAffinityForExperiment' => [
            'type' => 'structure',
            'members' => [
                'affinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'AffinitityForExperiment', ], ],
            ],
        ],
        'FinetuningConfigParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'stage' => [ 'type' => 'string', 'locationName' => 'stage', ],
                'finetuningType' => [ 'type' => 'string', 'locationName' => 'finetuningType', ],
                'runConfigExtras' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunConfigExtraParamForExperiment', ], ],
            ],
        ],
        'OssParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'StorageSpaceParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'OssParamForExperiment', ],
                'cfs' =>  [ 'shape' => 'CfsParamForExperiment', ],
                'jpfs' =>  [ 'shape' => 'JpfsParamForExperiment', ],
            ],
        ],
        'FinetuningConfigInfoForExperiment' => [
            'type' => 'structure',
            'members' => [
                'stage' => [ 'type' => 'string', 'locationName' => 'stage', ],
                'finetuningType' => [ 'type' => 'string', 'locationName' => 'finetuningType', ],
                'runConfigExtras' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunConfigExtraInfoForExperiment', ], ],
            ],
        ],
        'EventInfoListForExperiment' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
            ],
        ],
        'DatasetParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'datasetVisibility' => [ 'type' => 'string', 'locationName' => 'datasetVisibility', ],
                'datasetUsage' => [ 'type' => 'string', 'locationName' => 'datasetUsage', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
            ],
        ],
        'RunParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigParamForExperiment', ],
                'evalDatasetSource' => [ 'type' => 'string', 'locationName' => 'evalDatasetSource', ],
                'evalDatasetSplitRatio' => [ 'type' => 'double', 'locationName' => 'evalDatasetSplitRatio', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParamForExperiment', ], ],
                'resource' =>  [ 'shape' => 'ResourceParamForExperiment', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParamForExperiment', ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeAffinityForExperiment', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunTag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'RunDetailInfoForExperiment' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigInfoForExperiment', ],
                'evalDatasetSource' => [ 'type' => 'string', 'locationName' => 'evalDatasetSource', ],
                'evalDatasetSplitRatio' => [ 'type' => 'double', 'locationName' => 'evalDatasetSplitRatio', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParamForExperiment', ], ],
                'resource' =>  [ 'shape' => 'ResourceParamForExperiment', ],
                'storageSpace' => [ 'type' => 'string', 'locationName' => 'storageSpace', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodInfoForExperiment', ], ],
                'tokens' => [ 'type' => 'integer', 'locationName' => 'tokens', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'nodeAffinities' =>  [ 'shape' => 'NodeAffinityForExperiment', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunTag', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'RunTagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RunConfigExtraParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CfsParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'JpfsParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'ResourceParamForExperiment' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorInfo' => [ 'type' => 'object', 'locationName' => 'flavorInfo', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'double', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
            ],
        ],
        'SubmissionHistoryForDescribeAnnotationTasks' => [
            'type' => 'structure',
            'members' => [
                'submissionSuccessCount' => [ 'type' => 'integer', 'locationName' => 'submissionSuccessCount', ],
            ],
        ],
        'AnnotationUserForCreateAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'AnnotationResultStorageForDescribeAnnotationTasks' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'Oss', ],
            ],
        ],
        'DatasetForDescribeAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
            ],
        ],
        'AnnotationObjectList' => [
            'type' => 'structure',
            'members' => [
                'annotationTaskId' => [ 'type' => 'string', 'locationName' => 'annotationTaskId', ],
                'annotationObjectId' => [ 'type' => 'string', 'locationName' => 'annotationObjectId', ],
                'dataTypeId' => [ 'type' => 'string', 'locationName' => 'dataTypeId', ],
                'taskTypeId' => [ 'type' => 'string', 'locationName' => 'taskTypeId', ],
                'dataset' =>  [ 'shape' => 'DatasetForDescribeAnnotationObjects', ],
                'annotationObjectStatus' => [ 'type' => 'string', 'locationName' => 'annotationObjectStatus', ],
                'annotationObjectStorage' =>  [ 'shape' => 'AnnotationObjectStorageForDescribeAnnotationObjects', ],
                'annotationResult' => [ 'type' => 'object', 'locationName' => 'annotationResult', ],
            ],
        ],
        'AnnotationUserForDescribeAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'SubmissionHistoryForDescribeAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'submissionSuccessCount' => [ 'type' => 'integer', 'locationName' => 'submissionSuccessCount', ],
            ],
        ],
        'AnnotationUserForDescribeAnnotationTasks' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'AnnotationTaskDetail' => [
            'type' => 'structure',
            'members' => [
                'annotationTaskId' => [ 'type' => 'string', 'locationName' => 'annotationTaskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dataTypeId' => [ 'type' => 'string', 'locationName' => 'dataTypeId', ],
                'taskTypeId' => [ 'type' => 'string', 'locationName' => 'taskTypeId', ],
                'dataset' =>  [ 'shape' => 'DatasetForDescribeAnnotationTask', ],
                'annotationUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnnotationUserForDescribeAnnotationTask', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'completedCount' => [ 'type' => 'integer', 'locationName' => 'completedCount', ],
                'annotationTaskStatus' => [ 'type' => 'string', 'locationName' => 'annotationTaskStatus', ],
                'annotationObjectStorage' =>  [ 'shape' => 'AnnotationObjectStorageForDescribeAnnotationTask', ],
                'annotationResultStorage' =>  [ 'shape' => 'AnnotationResultStorageForDescribeAnnotationTask', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagForDescribeAnnotationTask', ], ],
                'submissionHistory' =>  [ 'shape' => 'SubmissionHistoryForDescribeAnnotationTask', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'CreateAnnotationTaskParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dataTypeId' => [ 'type' => 'string', 'locationName' => 'dataTypeId', ],
                'taskTypeId' => [ 'type' => 'string', 'locationName' => 'taskTypeId', ],
                'dataset' =>  [ 'shape' => 'DatasetForCreateAnnotationTask', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'annotationUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnnotationUserForCreateAnnotationTask', ], ],
                'annotationResultStorage' =>  [ 'shape' => 'AnnotationResultStorageForCreateAnnotationTask', ],
            ],
        ],
        'AnnotationObjectStorageForDescribeAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'Oss', ],
            ],
        ],
        'AnnotationResultStorageForCreateAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'Oss', ],
            ],
        ],
        'DatasetForDescribeAnnotationObjects' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
            ],
        ],
        'AnnotationTaskList' => [
            'type' => 'structure',
            'members' => [
                'annotationTaskId' => [ 'type' => 'string', 'locationName' => 'annotationTaskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'dataTypeId' => [ 'type' => 'string', 'locationName' => 'dataTypeId', ],
                'taskTypeId' => [ 'type' => 'string', 'locationName' => 'taskTypeId', ],
                'dataset' =>  [ 'shape' => 'DatasetForDescribeAnnotationTasks', ],
                'annotationUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnnotationUserForDescribeAnnotationTasks', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'completedCount' => [ 'type' => 'integer', 'locationName' => 'completedCount', ],
                'annotationTaskStatus' => [ 'type' => 'string', 'locationName' => 'annotationTaskStatus', ],
                'annotationObjectStorage' =>  [ 'shape' => 'AnnotationObjectStorageForDescribeAnnotationTasks', ],
                'annotationResultStorage' =>  [ 'shape' => 'AnnotationResultStorageForDescribeAnnotationTasks', ],
                'submissionHistory' =>  [ 'shape' => 'SubmissionHistoryForDescribeAnnotationTasks', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'AnnotationObjectStorageForDescribeAnnotationObjects' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'Oss', ],
            ],
        ],
        'UpdateAnnotationTaskParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DatasetForCreateAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
            ],
        ],
        'DatasetForDescribeAnnotationTasks' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
            ],
        ],
        'Oss' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
            ],
        ],
        'AnnotationResultStorageForDescribeAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'Oss', ],
            ],
        ],
        'UpdateAnnotationObjectsParam' => [
            'type' => 'structure',
            'members' => [
                'annotationObjectId' => [ 'type' => 'string', 'locationName' => 'annotationObjectId', ],
                'annotationResult' => [ 'type' => 'object', 'locationName' => 'annotationResult', ],
            ],
        ],
        'AnnotationObjectStorageForDescribeAnnotationTasks' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'Oss', ],
            ],
        ],
        'TagForDescribeAnnotationTask' => [
            'type' => 'structure',
            'members' => [
                'tagId' => [ 'type' => 'string', 'locationName' => 'tagId', ],
                'tagName' => [ 'type' => 'string', 'locationName' => 'tagName', ],
                'usageCount' => [ 'type' => 'integer', 'locationName' => 'usageCount', ],
            ],
        ],
        'File' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileMD5' => [ 'type' => 'string', 'locationName' => 'fileMD5', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'fileSize' => [ 'type' => 'integer', 'locationName' => 'fileSize', ],
                'token' => [ 'type' => 'integer', 'locationName' => 'token', ],
                'sampleSize' => [ 'type' => 'integer', 'locationName' => 'sampleSize', ],
                'formatting' => [ 'type' => 'string', 'locationName' => 'formatting', ],
                'datasetInfoStr' => [ 'type' => 'string', 'locationName' => 'datasetInfoStr', ],
            ],
        ],
        'CreateDatasetParam' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetType' => [ 'type' => 'string', 'locationName' => 'datasetType', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageDomain' => [ 'type' => 'string', 'locationName' => 'storageDomain', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'markStatus' => [ 'type' => 'string', 'locationName' => 'markStatus', ],
                'markFile' => [ 'type' => 'string', 'locationName' => 'markFile', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'UpdateDatasetParam' => [
            'type' => 'structure',
            'members' => [
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
            ],
        ],
        'DatasetVersionToken' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'token' => [ 'type' => 'integer', 'locationName' => 'token', ],
            ],
        ],
        'CreatePublicDatasetParam' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetType' => [ 'type' => 'string', 'locationName' => 'datasetType', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'datasetIntroduction' => [ 'type' => 'string', 'locationName' => 'datasetIntroduction', ],
            ],
        ],
        'DataItem' => [
            'type' => 'structure',
            'members' => [
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdatePublicDatasetVersionParam' => [
            'type' => 'structure',
            'members' => [
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'datasetIntroduction' => [ 'type' => 'string', 'locationName' => 'datasetIntroduction', ],
            ],
        ],
        'DataInfo' => [
            'type' => 'structure',
            'members' => [
                'isFile' => [ 'type' => 'boolean', 'locationName' => 'isFile', ],
                'totalSize' => [ 'type' => 'integer', 'locationName' => 'totalSize', ],
                'totalToken' => [ 'type' => 'integer', 'locationName' => 'totalToken', ],
                'totalSampleSize' => [ 'type' => 'integer', 'locationName' => 'totalSampleSize', ],
                'totalMarked' => [ 'type' => 'integer', 'locationName' => 'totalMarked', ],
                'files' => [ 'type' => 'list', 'member' => [ 'shape' => 'File', ], ],
            ],
        ],
        'DatasetInfo' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetType' => [ 'type' => 'string', 'locationName' => 'datasetType', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'versionNum' => [ 'type' => 'long', 'locationName' => 'versionNum', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'DataToken' => [
            'type' => 'structure',
            'members' => [
                'jobCompleted' => [ 'type' => 'boolean', 'locationName' => 'jobCompleted', ],
                'token' => [ 'type' => 'integer', 'locationName' => 'token', ],
            ],
        ],
        'UpdateDatasetVersionParam' => [
            'type' => 'structure',
            'members' => [
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
            ],
        ],
        'DatasetVersionInfo' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetType' => [ 'type' => 'string', 'locationName' => 'datasetType', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageDomain' => [ 'type' => 'string', 'locationName' => 'storageDomain', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageUri' => [ 'type' => 'string', 'locationName' => 'storageUri', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'cfsVpcId' => [ 'type' => 'string', 'locationName' => 'cfsVpcId', ],
                'datasetIntroduction' => [ 'type' => 'string', 'locationName' => 'datasetIntroduction', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'labelList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'checkResult' => [ 'type' => 'string', 'locationName' => 'checkResult', ],
                'dataInfo' =>  [ 'shape' => 'DataInfo', ],
                'markStatus' => [ 'type' => 'string', 'locationName' => 'markStatus', ],
                'markFile' => [ 'type' => 'string', 'locationName' => 'markFile', ],
                'markTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dataExploration' => [ 'type' => 'string', 'locationName' => 'dataExploration', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'DatasetVersionKey' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DistillStorageInfo' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'ossInfo' =>  [ 'shape' => 'DistillOssInfo', ],
                'cfsInfo' =>  [ 'shape' => 'DistillCfsInfo', ],
                'jpfsInfo' =>  [ 'shape' => 'DistillJpfsInfo', ],
            ],
        ],
        'DistillOssInfo' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'object' => [ 'type' => 'string', 'locationName' => 'object', ],
            ],
        ],
        'AutoDeployStillModel' => [
            'type' => 'structure',
            'members' => [
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'AdminDistillTaskListInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'taskState' => [ 'type' => 'string', 'locationName' => 'taskState', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'DistillTag', ], ],
                'outputModel' =>  [ 'shape' => 'DistillStorageInfo', ],
                'autoDeploy' =>  [ 'shape' => 'AutoDeployStillModel', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'progress' =>  [ 'shape' => 'DistillLog', ],
            ],
        ],
        'DistillTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DistillJpfsInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'DistillLog' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'logLevel' => [ 'type' => 'string', 'locationName' => 'logLevel', ],
                'taskState' => [ 'type' => 'string', 'locationName' => 'taskState', ],
                'log' => [ 'type' => 'string', 'locationName' => 'log', ],
            ],
        ],
        'DistillCfsInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'ModelConfigFilter' => [
            'type' => 'structure',
            'members' => [
                'usage' => [ 'type' => 'string', 'locationName' => 'usage', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'billingCode' => [ 'type' => 'string', 'locationName' => 'billingCode', ],
            ],
        ],
        'ModelBillingConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'usage' => [ 'type' => 'string', 'locationName' => 'usage', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'maxTokens' => [ 'type' => 'integer', 'locationName' => 'maxTokens', ],
                'billingCode' => [ 'type' => 'string', 'locationName' => 'billingCode', ],
                'price' => [ 'type' => 'double', 'locationName' => 'price', ],
                'chargeDivisor' => [ 'type' => 'double', 'locationName' => 'chargeDivisor', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configId' => [ 'type' => 'integer', 'locationName' => 'configId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ModelBillingConfig' => [
            'type' => 'structure',
            'members' => [
                'usage' => [ 'type' => 'string', 'locationName' => 'usage', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'dataType' => [ 'type' => 'string', 'locationName' => 'dataType', ],
                'maxTokens' => [ 'type' => 'integer', 'locationName' => 'maxTokens', ],
                'billingCode' => [ 'type' => 'string', 'locationName' => 'billingCode', ],
                'price' => [ 'type' => 'double', 'locationName' => 'price', ],
                'chargeDivisor' => [ 'type' => 'double', 'locationName' => 'chargeDivisor', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DistillSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'teacherModelSpec' =>  [ 'shape' => 'TeacherModelSpec', ],
                'studentModelSpec' =>  [ 'shape' => 'StudentModelSpec', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'DistillTaskDetail' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'taskState' => [ 'type' => 'string', 'locationName' => 'taskState', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'DistillTag', ], ],
                'outputModel' =>  [ 'shape' => 'DistillStorageInfo', ],
                'autoDeploy' =>  [ 'shape' => 'AutoDeployStillModel', ],
                'distillStage' =>  [ 'shape' => 'DistillStageInfo', ],
                'traningStage' =>  [ 'shape' => 'TraningStageInfo', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'progress' =>  [ 'shape' => 'DistillLog', ],
            ],
        ],
        'DistillStageInfo' => [
            'type' => 'structure',
            'members' => [
                'teacherModel' =>  [ 'shape' => 'DistillModelInfo', ],
                'inputDsSource' => [ 'type' => 'string', 'locationName' => 'inputDsSource', ],
                'inputDsType' => [ 'type' => 'string', 'locationName' => 'inputDsType', ],
                'inputDsId' => [ 'type' => 'string', 'locationName' => 'inputDsId', ],
                'inputDsVersion' => [ 'type' => 'string', 'locationName' => 'inputDsVersion', ],
                'inputDsPath' => [ 'type' => 'string', 'locationName' => 'inputDsPath', ],
                'inputDsName' => [ 'type' => 'string', 'locationName' => 'inputDsName', ],
                'outputDsType' => [ 'type' => 'string', 'locationName' => 'outputDsType', ],
                'outputDsId' => [ 'type' => 'string', 'locationName' => 'outputDsId', ],
                'outputDsPath' => [ 'type' => 'string', 'locationName' => 'outputDsPath', ],
                'dataValidation' => [ 'type' => 'string', 'locationName' => 'dataValidation', ],
                'totalSample' => [ 'type' => 'integer', 'locationName' => 'totalSample', ],
                'completeSample' => [ 'type' => 'integer', 'locationName' => 'completeSample', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
            ],
        ],
        'StudentModelSpec' => [
            'type' => 'structure',
            'members' => [
                'modelSource' => [ 'type' => 'string', 'locationName' => 'modelSource', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
            ],
        ],
        'TraningStageSpec' => [
            'type' => 'structure',
            'members' => [
                'trainMethod' => [ 'type' => 'string', 'locationName' => 'trainMethod', ],
                'trainStrategy' => [ 'type' => 'string', 'locationName' => 'trainStrategy', ],
                'trainArgs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraningStageArgs', ], ],
                'outputModelType' => [ 'type' => 'string', 'locationName' => 'outputModelType', ],
                'outputModelId' => [ 'type' => 'string', 'locationName' => 'outputModelId', ],
                'outputModelPath' => [ 'type' => 'string', 'locationName' => 'outputModelPath', ],
                'autoDeployNewModel' =>  [ 'shape' => 'DeployStillNewModel', ],
                'autoDeployNewModelVersion' =>  [ 'shape' => 'DeployStillNewModelVersion', ],
            ],
        ],
        'DistillTaskInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'taskState' => [ 'type' => 'string', 'locationName' => 'taskState', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'DistillTag', ], ],
                'outputModel' =>  [ 'shape' => 'DistillStorageInfo', ],
                'autoDeploy' =>  [ 'shape' => 'AutoDeployStillModel', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'progress' =>  [ 'shape' => 'DistillLog', ],
            ],
        ],
        'DistillModelInfo' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'TeacherModelSpec' => [
            'type' => 'structure',
            'members' => [
                'modelSource' => [ 'type' => 'string', 'locationName' => 'modelSource', ],
                'modelServiceId' => [ 'type' => 'string', 'locationName' => 'modelServiceId', ],
            ],
        ],
        'DistillJobDetail' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'teacherModel' =>  [ 'shape' => 'DistillModelInfo', ],
                'studentModel' =>  [ 'shape' => 'DistillModelInfo', ],
                'taskCount' => [ 'type' => 'integer', 'locationName' => 'taskCount', ],
                'runningTaskCount' => [ 'type' => 'integer', 'locationName' => 'runningTaskCount', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
            ],
        ],
        'DistillPod' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'containerCount' => [ 'type' => 'integer', 'locationName' => 'containerCount', ],
                'readyContainerCount' => [ 'type' => 'integer', 'locationName' => 'readyContainerCount', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'readyTime' => [ 'type' => 'string', 'locationName' => 'readyTime', ],
            ],
        ],
        'DistillStageSpec' => [
            'type' => 'structure',
            'members' => [
                'inputDsSource' => [ 'type' => 'string', 'locationName' => 'inputDsSource', ],
                'inputDsType' => [ 'type' => 'string', 'locationName' => 'inputDsType', ],
                'inputDsId' => [ 'type' => 'string', 'locationName' => 'inputDsId', ],
                'inputDsVersion' => [ 'type' => 'string', 'locationName' => 'inputDsVersion', ],
                'inputDsPath' => [ 'type' => 'string', 'locationName' => 'inputDsPath', ],
                'outputDsType' => [ 'type' => 'string', 'locationName' => 'outputDsType', ],
                'outputDsId' => [ 'type' => 'string', 'locationName' => 'outputDsId', ],
                'outputDsPath' => [ 'type' => 'string', 'locationName' => 'outputDsPath', ],
                'dataValidation' => [ 'type' => 'string', 'locationName' => 'dataValidation', ],
            ],
        ],
        'DistillTagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TraningStageArgs' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DistillJobInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'teacherModel' =>  [ 'shape' => 'DistillModelInfo', ],
                'studentModel' =>  [ 'shape' => 'DistillModelInfo', ],
                'taskCount' => [ 'type' => 'integer', 'locationName' => 'taskCount', ],
                'runningTaskCount' => [ 'type' => 'integer', 'locationName' => 'runningTaskCount', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
            ],
        ],
        'DtTaskStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'DeployStillNewModel' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelDesc' => [ 'type' => 'string', 'locationName' => 'modelDesc', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'DeployStillNewModelVersion' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
            ],
        ],
        'TraningStageInfo' => [
            'type' => 'structure',
            'members' => [
                'studentModel' =>  [ 'shape' => 'DistillModelInfo', ],
                'trainMethod' => [ 'type' => 'string', 'locationName' => 'trainMethod', ],
                'trainStrategy' => [ 'type' => 'string', 'locationName' => 'trainStrategy', ],
                'trainArgs' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraningStageArgs', ], ],
                'outputModelType' => [ 'type' => 'string', 'locationName' => 'outputModelType', ],
                'outputModelId' => [ 'type' => 'string', 'locationName' => 'outputModelId', ],
                'outputModelPath' => [ 'type' => 'string', 'locationName' => 'outputModelPath', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'finishedTime' => [ 'type' => 'string', 'locationName' => 'finishedTime', ],
            ],
        ],
        'EsLogCollectConfig' => [
            'type' => 'structure',
            'members' => [
                'logSetId' => [ 'type' => 'string', 'locationName' => 'logSetId', ],
                'logSetName' => [ 'type' => 'string', 'locationName' => 'logSetName', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'logTopicName' => [ 'type' => 'string', 'locationName' => 'logTopicName', ],
                'standardLogConfig' =>  [ 'shape' => 'EsStandardLogConfig', ],
                'customLogConfig' =>  [ 'shape' => 'EsCustomLogConfig', ],
            ],
        ],
        'SimulationPod' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'podIp' => [ 'type' => 'string', 'locationName' => 'podIp', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'containerCount' => [ 'type' => 'integer', 'locationName' => 'containerCount', ],
                'readyContainerCount' => [ 'type' => 'integer', 'locationName' => 'readyContainerCount', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'readyTime' => [ 'type' => 'string', 'locationName' => 'readyTime', ],
            ],
        ],
        'SimulationEvent' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'EsStandardLogConfig' => [
            'type' => 'structure',
            'members' => [
                'stdout' => [ 'type' => 'boolean', 'locationName' => 'stdout', ],
            ],
        ],
        'SimulationSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'imageSpec' =>  [ 'shape' => 'EsImageSpec', ],
                'workloadSpec' =>  [ 'shape' => 'EsWorkloadSpec', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsStorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsDatasetSpec', ], ],
                'lbSpec' =>  [ 'shape' => 'EsLbSpec', ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsNodeAffinity', ], ],
            ],
        ],
        'SimulationDetail' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'simulationId' => [ 'type' => 'string', 'locationName' => 'simulationId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'terminalUrl' => [ 'type' => 'string', 'locationName' => 'terminalUrl', ],
                'imageInfo' =>  [ 'shape' => 'EsImage', ],
                'workloadInfo' =>  [ 'shape' => 'EsWorkloadSpec', ],
                'logCollect' =>  [ 'shape' => 'EsLogCollectConfig', ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsNodeAffinity', ], ],
                'lb' =>  [ 'shape' => 'EsLbSpec', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsStorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsDatasetSpec', ], ],
            ],
        ],
        'EsDatasetSpec' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'datasetUrl' => [ 'type' => 'string', 'locationName' => 'datasetUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'EsAffinity' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'EsStorageSpec' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'EsLbPortSpec' => [
            'type' => 'structure',
            'members' => [
                'lbPort' => [ 'type' => 'integer', 'locationName' => 'lbPort', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'backendPort' => [ 'type' => 'integer', 'locationName' => 'backendPort', ],
            ],
        ],
        'SimulationInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'simulationId' => [ 'type' => 'string', 'locationName' => 'simulationId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'imageInfo' =>  [ 'shape' => 'EsImage', ],
                'workloadInfo' =>  [ 'shape' => 'EsWorkloadSpec', ],
            ],
        ],
        'EsImage' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
            ],
        ],
        'EsLbSpec' => [
            'type' => 'structure',
            'members' => [
                'lbId' => [ 'type' => 'string', 'locationName' => 'lbId', ],
                'ports' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsLbPortSpec', ], ],
            ],
        ],
        'EsNodeAffinity' => [
            'type' => 'structure',
            'members' => [
                'affinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsAffinity', ], ],
            ],
        ],
        'EsCustomLogConfig' => [
            'type' => 'structure',
            'members' => [
                'paths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateSimulationSpec' => [
            'type' => 'structure',
            'members' => [
                'imageSpec' =>  [ 'shape' => 'EsImageSpec', ],
                'workloadSpec' =>  [ 'shape' => 'EsWorkloadSpec', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsStorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsDatasetSpec', ], ],
                'lbSpec' =>  [ 'shape' => 'EsLbSpec', ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsNodeAffinity', ], ],
            ],
        ],
        'EsImageSpec' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
            ],
        ],
        'EsWorkloadSpec' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'cpuM' => [ 'type' => 'integer', 'locationName' => 'cpuM', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'vcudaCore' => [ 'type' => 'string', 'locationName' => 'vcudaCore', ],
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
        'PublicImageWhitelist' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'whitelistPin' => [ 'type' => 'string', 'locationName' => 'whitelistPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
            ],
        ],
        'CreatePublicImageParam' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUsage' => [ 'type' => 'string', 'locationName' => 'imageUsage', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
            ],
        ],
        'CreatePublicImageWhitelistParm' => [
            'type' => 'structure',
            'members' => [
                'whitelistPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateImageParam' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUsage' => [ 'type' => 'string', 'locationName' => 'imageUsage', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
            ],
        ],
        'UpdatePrivateImageParam' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
            ],
        ],
        'PublicImageInfo' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUsage' => [ 'type' => 'string', 'locationName' => 'imageUsage', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'labelList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'ImageInfo' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUsage' => [ 'type' => 'string', 'locationName' => 'imageUsage', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'labelList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'baseImage' => [ 'type' => 'string', 'locationName' => 'baseImage', ],
                'dockerfile' => [ 'type' => 'string', 'locationName' => 'dockerfile', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'CreateImageParam' => [
            'type' => 'structure',
            'members' => [
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUsage' => [ 'type' => 'string', 'locationName' => 'imageUsage', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'dockerfile' => [ 'type' => 'string', 'locationName' => 'dockerfile', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'DeletePublicImageWhitelistParm' => [
            'type' => 'structure',
            'members' => [
                'whitelistPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isDelAll' => [ 'type' => 'boolean', 'locationName' => 'isDelAll', ],
            ],
        ],
        'RoleDeployScale' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
            ],
        ],
        'InferenceLocalStorage' => [
            'type' => 'structure',
            'members' => [
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'Service' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'running' => [ 'type' => 'integer', 'locationName' => 'running', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'innerAddress' => [ 'type' => 'string', 'locationName' => 'innerAddress', ],
                'vpcAddress' => [ 'type' => 'string', 'locationName' => 'vpcAddress', ],
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'ResourceGroupInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
            ],
        ],
        'PodsState' => [
            'type' => 'structure',
            'members' => [
                'totalPods' => [ 'type' => 'integer', 'locationName' => 'totalPods', ],
                'successPods' => [ 'type' => 'integer', 'locationName' => 'successPods', ],
                'failedPods' => [ 'type' => 'integer', 'locationName' => 'failedPods', ],
            ],
        ],
        'RoleSet' => [
            'type' => 'structure',
            'members' => [
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'roleDeploys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleDeploy', ], ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'roleGateway' =>  [ 'shape' => 'RoleGateway', ],
            ],
        ],
        'TrafficInfo' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'trafficPercent' => [ 'type' => 'integer', 'locationName' => 'trafficPercent', ],
            ],
        ],
        'HealthCheck' => [
            'type' => 'structure',
            'members' => [
                'probeType' => [ 'type' => 'string', 'locationName' => 'probeType', ],
                'probeMethod' => [ 'type' => 'string', 'locationName' => 'probeMethod', ],
                'probeUrl' => [ 'type' => 'string', 'locationName' => 'probeUrl', ],
                'probePort' => [ 'type' => 'integer', 'locationName' => 'probePort', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'initialDelay' => [ 'type' => 'integer', 'locationName' => 'initialDelay', ],
                'period' => [ 'type' => 'integer', 'locationName' => 'period', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'successThreshold' => [ 'type' => 'integer', 'locationName' => 'successThreshold', ],
                'failureThreshold' => [ 'type' => 'integer', 'locationName' => 'failureThreshold', ],
            ],
        ],
        'RoleGateway' => [
            'type' => 'structure',
            'members' => [
                'vpcProto' => [ 'type' => 'string', 'locationName' => 'vpcProto', ],
                'protoLevel' => [ 'type' => 'integer', 'locationName' => 'protoLevel', ],
                'vpcAccess' => [ 'type' => 'boolean', 'locationName' => 'vpcAccess', ],
                'albId' => [ 'type' => 'string', 'locationName' => 'albId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'listenPort' => [ 'type' => 'integer', 'locationName' => 'listenPort', ],
                'vpcAddress' => [ 'type' => 'string', 'locationName' => 'vpcAddress', ],
                'smartRouter' => [ 'type' => 'boolean', 'locationName' => 'smartRouter', ],
                'gatewayType' => [ 'type' => 'string', 'locationName' => 'gatewayType', ],
                'sessionPersistentHeader' => [ 'type' => 'string', 'locationName' => 'sessionPersistentHeader', ],
                'sessionPersistentEnabled' => [ 'type' => 'boolean', 'locationName' => 'sessionPersistentEnabled', ],
            ],
        ],
        'FailedItem' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Event' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
                'eventId' => [ 'type' => 'string', 'locationName' => 'eventId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'Model' => [
            'type' => 'structure',
            'members' => [
                'modelType' => [ 'type' => 'string', 'locationName' => 'modelType', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'modelPath' => [ 'type' => 'string', 'locationName' => 'modelPath', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'rdma' => [ 'type' => 'integer', 'locationName' => 'rdma', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'deviceMemory' => [ 'type' => 'integer', 'locationName' => 'deviceMemory', ],
                'vcudaCore' => [ 'type' => 'string', 'locationName' => 'vcudaCore', ],
            ],
        ],
        'ServiceInfo' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'innerAddress' => [ 'type' => 'string', 'locationName' => 'innerAddress', ],
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'vpcAddress' => [ 'type' => 'string', 'locationName' => 'vpcAddress', ],
            ],
        ],
        'InferenceData' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'trafficPercent' => [ 'type' => 'integer', 'locationName' => 'trafficPercent', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'service' =>  [ 'shape' => 'ServiceInfo', ],
                'metadata' =>  [ 'shape' => 'Metadata', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Code', ], ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
                'roleSet' =>  [ 'shape' => 'RoleSet', ],
                'runningPods' => [ 'type' => 'integer', 'locationName' => 'runningPods', ],
                'totalPods' => [ 'type' => 'integer', 'locationName' => 'totalPods', ],
                'failedPods' => [ 'type' => 'integer', 'locationName' => 'failedPods', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserTag', ], ],
                'resourceGroupInfo' =>  [ 'shape' => 'ResourceGroupInfo', ],
            ],
        ],
        'RoleSetScale' => [
            'type' => 'structure',
            'members' => [
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'roleDeploys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleDeployScale', ], ],
            ],
        ],
        'VPCInfo' => [
            'type' => 'structure',
            'members' => [
                'albId' => [ 'type' => 'string', 'locationName' => 'albId', ],
                'albReuse' => [ 'type' => 'boolean', 'locationName' => 'albReuse', ],
                'listenPort' => [ 'type' => 'integer', 'locationName' => 'listenPort', ],
                'vpcAccess' => [ 'type' => 'boolean', 'locationName' => 'vpcAccess', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcProto' => [ 'type' => 'string', 'locationName' => 'vpcProto', ],
                'protoLevel' => [ 'type' => 'integer', 'locationName' => 'protoLevel', ],
            ],
        ],
        'CustomService' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
            ],
        ],
        'UserTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Inference' => [
            'type' => 'structure',
            'members' => [
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'metadata' =>  [ 'shape' => 'Metadata', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
                'roleSet' =>  [ 'shape' => 'RoleSet', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserTag', ], ],
                'resourceGroupInfo' =>  [ 'shape' => 'ResourceGroupInfo', ],
            ],
        ],
        'InferenceStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'RoleDeploy' => [
            'type' => 'structure',
            'members' => [
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'podsState' =>  [ 'shape' => 'PodsState', ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'distributedNodeCount' => [ 'type' => 'integer', 'locationName' => 'distributedNodeCount', ],
                'affinity' =>  [ 'shape' => 'InferenceAffinity', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'registryUser' => [ 'type' => 'string', 'locationName' => 'registryUser', ],
                'registryPass' => [ 'type' => 'string', 'locationName' => 'registryPass', ],
                'healthChecks' => [ 'type' => 'list', 'member' => [ 'shape' => 'HealthCheck', ], ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'env' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'inferEngine' => [ 'type' => 'string', 'locationName' => 'inferEngine', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'routerPrefillPolicy' => [ 'type' => 'string', 'locationName' => 'routerPrefillPolicy', ],
                'routerDecodePolicy' => [ 'type' => 'string', 'locationName' => 'routerDecodePolicy', ],
            ],
        ],
        'RolloutInfo' => [
            'type' => 'structure',
            'members' => [
                'maxSurge' => [ 'type' => 'integer', 'locationName' => 'maxSurge', ],
                'maxUnavailable' => [ 'type' => 'integer', 'locationName' => 'maxUnavailable', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
            ],
        ],
        'PodInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'podIp' => [ 'type' => 'string', 'locationName' => 'podIp', ],
                'restarts' => [ 'type' => 'integer', 'locationName' => 'restarts', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'readyContainers' => [ 'type' => 'integer', 'locationName' => 'readyContainers', ],
                'totalContainers' => [ 'type' => 'integer', 'locationName' => 'totalContainers', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'updatedAt' => [ 'type' => 'string', 'locationName' => 'updatedAt', ],
                'isOldPod' => [ 'type' => 'boolean', 'locationName' => 'isOldPod', ],
            ],
        ],
        'InferenceAffinity' => [
            'type' => 'structure',
            'members' => [
                'maxSkew' => [ 'type' => 'integer', 'locationName' => 'maxSkew', ],
                'enableNodeLabels' => [ 'type' => 'boolean', 'locationName' => 'enableNodeLabels', ],
                'nodeLabels' => [ 'type' => 'list', 'member' => [ 'shape' => 'InferenceNodeLabels', ], ],
            ],
        ],
        'AdminInferenceInfo' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
            ],
        ],
        'InferenceNodeLabels' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ScaleInfo' => [
            'type' => 'structure',
            'members' => [
                'replicas' => [ 'type' => 'integer', 'locationName' => 'replicas', ],
                'roleSet' =>  [ 'shape' => 'RoleSetScale', ],
            ],
        ],
        'Metadata' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nodes' => [ 'type' => 'integer', 'locationName' => 'nodes', ],
                'replicas' => [ 'type' => 'integer', 'locationName' => 'replicas', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
            ],
        ],
        'InferenceSpec' => [
            'type' => 'structure',
            'members' => [
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'metadata' =>  [ 'shape' => 'Metadata', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
                'roleSet' =>  [ 'shape' => 'RoleSet', ],
            ],
        ],
        'Code' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'repoName' => [ 'type' => 'string', 'locationName' => 'repoName', ],
            ],
        ],
        'PodEvent' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'eventReason' => [ 'type' => 'string', 'locationName' => 'eventReason', ],
                'eventContent' => [ 'type' => 'string', 'locationName' => 'eventContent', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
            ],
        ],
        'Runtime' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'env' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'registryUser' => [ 'type' => 'string', 'locationName' => 'registryUser', ],
                'registryPass' => [ 'type' => 'string', 'locationName' => 'registryPass', ],
                'fileContent' => [ 'type' => 'string', 'locationName' => 'fileContent', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                'healthChecks' => [ 'type' => 'list', 'member' => [ 'shape' => 'HealthCheck', ], ],
                'privilege' => [ 'type' => 'boolean', 'locationName' => 'privilege', ],
                'fuse' => [ 'type' => 'boolean', 'locationName' => 'fuse', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'vpcInfo' =>  [ 'shape' => 'VPCInfo', ],
                'vpcProto' => [ 'type' => 'string', 'locationName' => 'vpcProto', ],
                'vpcAccess' => [ 'type' => 'boolean', 'locationName' => 'vpcAccess', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'localStorage' =>  [ 'shape' => 'InferenceLocalStorage', ],
                'affinity' =>  [ 'shape' => 'InferenceAffinity', ],
                'sessionPersistentEnabled' => [ 'type' => 'boolean', 'locationName' => 'sessionPersistentEnabled', ],
                'enableEngineMetrics' => [ 'type' => 'boolean', 'locationName' => 'enableEngineMetrics', ],
                'customServices' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomService', ], ],
            ],
        ],
        'UpdateInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'enableEngineMetrics' => [ 'type' => 'boolean', 'locationName' => 'enableEngineMetrics', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
            ],
        ],
        'InferenceBatchOp' => [
            'type' => 'structure',
            'members' => [
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'inferenceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Nlb' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Az' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Subnet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'bindType' => [ 'type' => 'string', 'locationName' => 'bindType', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
            ],
        ],
        'Vpc' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'InferenceDedicatedGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'replicas' => [ 'type' => 'integer', 'locationName' => 'replicas', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'internal' => [ 'type' => 'boolean', 'locationName' => 'internal', ],
                'vpc' =>  [ 'shape' => 'Vpc', ],
                'subnet' =>  [ 'shape' => 'Subnet', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Az', ], ],
                'retain' => [ 'type' => 'boolean', 'locationName' => 'retain', ],
                'reclaimPolicy' => [ 'type' => 'string', 'locationName' => 'reclaimPolicy', ],
            ],
        ],
        'CronScale' => [
            'type' => 'structure',
            'members' => [
                'cronExpr' => [ 'type' => 'string', 'locationName' => 'cronExpr', ],
                'desiredReplicas' => [ 'type' => 'integer', 'locationName' => 'desiredReplicas', ],
            ],
        ],
        'InferenceScaleSpec' => [
            'type' => 'structure',
            'members' => [
                'scaleType' => [ 'type' => 'string', 'locationName' => 'scaleType', ],
                'autoScale' =>  [ 'shape' => 'AutoScale', ],
                'cronScale' => [ 'type' => 'list', 'member' => [ 'shape' => 'CronScale', ], ],
            ],
        ],
        'AutoScale' => [
            'type' => 'structure',
            'members' => [
                'minReplicaCount' => [ 'type' => 'integer', 'locationName' => 'minReplicaCount', ],
                'maxReplicaCount' => [ 'type' => 'integer', 'locationName' => 'maxReplicaCount', ],
                'scaleUpDelay' => [ 'type' => 'integer', 'locationName' => 'scaleUpDelay', ],
                'scaleDownDelay' => [ 'type' => 'integer', 'locationName' => 'scaleDownDelay', ],
                'cpuThreshold' => [ 'type' => 'integer', 'locationName' => 'cpuThreshold', ],
                'gpuThreshold' => [ 'type' => 'integer', 'locationName' => 'gpuThreshold', ],
                'memoryThreshold' => [ 'type' => 'integer', 'locationName' => 'memoryThreshold', ],
            ],
        ],
        'UpdateInferenceServiceSpec' => [
            'type' => 'structure',
            'members' => [
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
            ],
        ],
        'ModelGPUResourceFloat' => [
            'type' => 'structure',
            'members' => [
                'gpu' => [ 'type' => 'float', 'locationName' => 'gpu', ],
                'ratio' => [ 'type' => 'float', 'locationName' => 'ratio', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'nmemory' => [ 'type' => 'float', 'locationName' => 'nmemory', ],
            ],
        ],
        'Common' => [
            'type' => 'structure',
            'members' => [
                'page' =>  [ 'shape' => 'ModelPageable', ],
                'orderBy' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppInfoOrder', ], ],
            ],
        ],
        'ModelAllocate' => [
            'type' => 'structure',
            'members' => [
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'deviceBrand' => [ 'type' => 'string', 'locationName' => 'deviceBrand', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'deviceIds' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'isRemote' => [ 'type' => 'boolean', 'locationName' => 'isRemote', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
            ],
        ],
        'ListAppInfoBaseReq' => [
            'type' => 'structure',
            'members' => [
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'instanceNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'onlyGpuApps' => [ 'type' => 'boolean', 'locationName' => 'onlyGpuApps', ],
                'onlyLiveMigrateApps' => [ 'type' => 'boolean', 'locationName' => 'onlyLiveMigrateApps', ],
                'aggregateByUid' => [ 'type' => 'boolean', 'locationName' => 'aggregateByUid', ],
                'aggregateByTask' => [ 'type' => 'boolean', 'locationName' => 'aggregateByTask', ],
                'common' =>  [ 'shape' => 'Common', ],
            ],
        ],
        'ListAppInfoResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'appInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'AppInfoModel', ], ],
            ],
        ],
        'ListAppInfoReq' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'base' =>  [ 'shape' => 'ListAppInfoBaseReq', ],
            ],
        ],
        'ModelPageable' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ModelInstanceFlavor' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'gpuType' => [ 'type' => 'string', 'locationName' => 'gpuType', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'vgpu' => [ 'type' => 'integer', 'locationName' => 'vgpu', ],
                'ratioPerVGpu' => [ 'type' => 'float', 'locationName' => 'ratioPerVGpu', ],
                'memoryPerVGpu' => [ 'type' => 'float', 'locationName' => 'memoryPerVGpu', ],
                'deviceTemplate' => [ 'type' => 'string', 'locationName' => 'deviceTemplate', ],
                'display' => [ 'type' => 'string', 'locationName' => 'display', ],
                'autoSelectDeviceModel' => [ 'type' => 'boolean', 'locationName' => 'autoSelectDeviceModel', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'estimatedCount' => [ 'type' => 'integer', 'locationName' => 'estimatedCount', ],
            ],
        ],
        'ModelAppOwner' => [
            'type' => 'structure',
            'members' => [
                'apiVersion' => [ 'type' => 'string', 'locationName' => 'apiVersion', ],
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'blockOwnerDeletion' => [ 'type' => 'string', 'locationName' => 'blockOwnerDeletion', ],
                'controller' => [ 'type' => 'string', 'locationName' => 'controller', ],
            ],
        ],
        'ListAppInfo3JReq' => [
            'type' => 'structure',
            'members' => [
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'filter' => [ 'type' => 'string', 'locationName' => 'filter', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'base' =>  [ 'shape' => 'ListAppInfoBaseReq', ],
            ],
        ],
        'AppInfoModel' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'noSchedule' => [ 'type' => 'boolean', 'locationName' => 'noSchedule', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'extendedField' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'queueName' => [ 'type' => 'string', 'locationName' => 'queueName', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'framework' => [ 'type' => 'string', 'locationName' => 'framework', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'runningPriority' => [ 'type' => 'integer', 'locationName' => 'runningPriority', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'gpuType' => [ 'type' => 'string', 'locationName' => 'gpuType', ],
                'startTimestamp' => [ 'type' => 'int64', 'locationName' => 'startTimestamp', ],
                'endTimestamp' => [ 'type' => 'int64', 'locationName' => 'endTimestamp', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'remoteNodeIp' => [ 'type' => 'string', 'locationName' => 'remoteNodeIp', ],
                'remoteNodeName' => [ 'type' => 'string', 'locationName' => 'remoteNodeName', ],
                'allocate' =>  [ 'shape' => 'ModelAllocate', ],
                'remoteAllocates' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'requestResource' =>  [ 'shape' => 'ModelGPUResourceFloat', ],
                'limitResource' =>  [ 'shape' => 'ModelGPUResourceFloat', ],
                'liveUsageRatio' => [ 'type' => 'float', 'locationName' => 'liveUsageRatio', ],
                'liveUsageMemory' => [ 'type' => 'float', 'locationName' => 'liveUsageMemory', ],
                'runningTime' => [ 'type' => 'int64', 'locationName' => 'runningTime', ],
                'ownerReferences' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelAppOwner', ], ],
                'appLabels' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'annotations' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'liveUsage' =>  [ 'shape' => 'ModelGPUResourceFloat', ],
                'instanceState' => [ 'type' => 'string', 'locationName' => 'instanceState', ],
                'flavor' =>  [ 'shape' => 'ModelInstanceFlavor', ],
            ],
        ],
        'AppInfoOrder' => [
            'type' => 'structure',
            'members' => [
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
            ],
        ],
        'ClusterSimple' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'Cluster' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'vpc' => [ 'type' => 'string', 'locationName' => 'vpc', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'zones' => [ 'type' => 'string', 'locationName' => 'zones', ],
                'podNets' => [ 'type' => 'string', 'locationName' => 'podNets', ],
                'serviceCIDR' => [ 'type' => 'string', 'locationName' => 'serviceCIDR', ],
                'serviceLB' => [ 'type' => 'string', 'locationName' => 'serviceLB', ],
                'managerCIDR' => [ 'type' => 'string', 'locationName' => 'managerCIDR', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
            ],
        ],
        'Error' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'PageInfo' => [
            'type' => 'structure',
            'members' => [
                'currentPage' => [ 'type' => 'long', 'locationName' => 'currentPage', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'FaultGPUStatistics' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'brand' => [ 'type' => 'string', 'locationName' => 'brand', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'RealTimeNodeStatistics' => [
            'type' => 'structure',
            'members' => [
                'idleNodes' => [ 'type' => 'integer', 'locationName' => 'idleNodes', ],
                'faultNodes' => [ 'type' => 'integer', 'locationName' => 'faultNodes', ],
                'runningNodes' => [ 'type' => 'integer', 'locationName' => 'runningNodes', ],
            ],
        ],
        'CPOverview' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'accuracy' => [ 'type' => 'string', 'locationName' => 'accuracy', ],
            ],
        ],
        'DashboardScheduleItems' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'SightSchedulingMetrics', ], ],
            ],
        ],
        'RealTimeResourceStatistics' => [
            'type' => 'structure',
            'members' => [
                'item' =>  [ 'shape' => 'RealTimeResourceStatisticsItem', ],
            ],
        ],
        'CPAnalysis' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'distribution' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'integer', ], ],
            ],
        ],
        'RealTimeQueueStatistics' => [
            'type' => 'structure',
            'members' => [
                'runningQueues' => [ 'type' => 'integer', 'locationName' => 'runningQueues', ],
                'idleQueues' => [ 'type' => 'integer', 'locationName' => 'idleQueues', ],
            ],
        ],
        'SightSchedulingMetrics' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'granularity' => [ 'type' => 'string', 'locationName' => 'granularity', ],
                'timeWindowStart' => [ 'type' => 'string', 'locationName' => 'timeWindowStart', ],
                'timeWindowEnd' => [ 'type' => 'string', 'locationName' => 'timeWindowEnd', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
                'failedCount' => [ 'type' => 'integer', 'locationName' => 'failedCount', ],
                'successRate' => [ 'type' => 'double', 'locationName' => 'successRate', ],
                'onlineCount' => [ 'type' => 'integer', 'locationName' => 'onlineCount', ],
                'onlineSuccessCount' => [ 'type' => 'integer', 'locationName' => 'onlineSuccessCount', ],
                'onlineSuccessRate' => [ 'type' => 'double', 'locationName' => 'onlineSuccessRate', ],
                'offlineCount' => [ 'type' => 'integer', 'locationName' => 'offlineCount', ],
                'offlineSuccessCount' => [ 'type' => 'integer', 'locationName' => 'offlineSuccessCount', ],
                'offlineSuccessRate' => [ 'type' => 'double', 'locationName' => 'offlineSuccessRate', ],
                'avgSchedulingLatencyMs' => [ 'type' => 'integer', 'locationName' => 'avgSchedulingLatencyMs', ],
                'p50SchedulingLatencyMs' => [ 'type' => 'integer', 'locationName' => 'p50SchedulingLatencyMs', ],
                'p95SchedulingLatencyMs' => [ 'type' => 'integer', 'locationName' => 'p95SchedulingLatencyMs', ],
                'maxSchedulingLatencyMs' => [ 'type' => 'integer', 'locationName' => 'maxSchedulingLatencyMs', ],
                'minSchedulingLatencyMs' => [ 'type' => 'integer', 'locationName' => 'minSchedulingLatencyMs', ],
                'avgWaitingDurationMs' => [ 'type' => 'integer', 'locationName' => 'avgWaitingDurationMs', ],
                'p50WaitingDurationMs' => [ 'type' => 'integer', 'locationName' => 'p50WaitingDurationMs', ],
                'p95WaitingDurationMs' => [ 'type' => 'integer', 'locationName' => 'p95WaitingDurationMs', ],
                'maxWaitingDurationMs' => [ 'type' => 'integer', 'locationName' => 'maxWaitingDurationMs', ],
                'minWaitingDurationMs' => [ 'type' => 'integer', 'locationName' => 'minWaitingDurationMs', ],
                'reasonStats' => [ 'type' => 'string', 'locationName' => 'reasonStats', ],
                'taskTypeMetrics' => [ 'type' => 'string', 'locationName' => 'taskTypeMetrics', ],
            ],
        ],
        'FaultNodeStatistics' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'brand' => [ 'type' => 'string', 'locationName' => 'brand', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'DashboardScheduleItem' => [
            'type' => 'structure',
            'members' => [
                'item' =>  [ 'shape' => 'SightSchedulingMetrics', ],
            ],
        ],
        'RealTimeGpuStatistics' => [
            'type' => 'structure',
            'members' => [
                'idleGPUs' => [ 'type' => 'integer', 'locationName' => 'idleGPUs', ],
                'faultGPUs' => [ 'type' => 'integer', 'locationName' => 'faultGPUs', ],
                'runningGPUs' => [ 'type' => 'integer', 'locationName' => 'runningGPUs', ],
            ],
        ],
        'RealTimeResourceStatisticsItem' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'idle' => [ 'type' => 'string', 'locationName' => 'idle', ],
                'allocated' => [ 'type' => 'string', 'locationName' => 'allocated', ],
                'capacity' => [ 'type' => 'string', 'locationName' => 'capacity', ],
                'allocatedRate' => [ 'type' => 'string', 'locationName' => 'allocatedRate', ],
                'usedUtilization' => [ 'type' => 'string', 'locationName' => 'usedUtilization', ],
            ],
        ],
        'FragmentStatistics' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'NodeLabelKeyValues' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'PatchNodeLabels' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeLabelKeyValue', ], ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'integer', 'locationName' => 'bandwidth', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'extraArgs' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'NetworkInfo' => [
            'type' => 'structure',
            'members' => [
                'podSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetInfo', ], ],
                'nodeSubnet' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetInfo', ], ],
                'serviceSubnet' =>  [ 'shape' => 'SubnetInfo', ],
            ],
        ],
        'NodeLabelKeyValue' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'SubnetInfo' => [
            'type' => 'structure',
            'members' => [
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'extraArgs' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'ClusterNetworkInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudNetwork' =>  [ 'shape' => 'NetworkInfo', ],
            ],
        ],
        'GPUResourceFloat' => [
            'type' => 'structure',
            'members' => [
                'gpu' => [ 'type' => 'float', 'locationName' => 'gpu', ],
                'ratio' => [ 'type' => 'float', 'locationName' => 'ratio', ],
                'memory' => [ 'type' => 'float', 'locationName' => 'memory', ],
                'cpu' => [ 'type' => 'float', 'locationName' => 'cpu', ],
                'nmemory' => [ 'type' => 'float', 'locationName' => 'nmemory', ],
            ],
        ],
        'GetLiveMigrateTaskOutput' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'task' =>  [ 'shape' => 'LiveMigrateTask', ],
            ],
        ],
        'CreateLiveMigrateTaskParams' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'afterNodeName' => [ 'type' => 'string', 'locationName' => 'afterNodeName', ],
                'afterNodeIp' => [ 'type' => 'string', 'locationName' => 'afterNodeIp', ],
                'devices' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceInfo', ], ],
                'systemRecommend' => [ 'type' => 'boolean', 'locationName' => 'systemRecommend', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'LiveMigrateNode' => [
            'type' => 'structure',
            'members' => [
                'mustDeviceCount' => [ 'type' => 'long', 'locationName' => 'mustDeviceCount', ],
                'node' =>  [ 'shape' => 'NodeInfo', ],
                'devices' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceInfo', ], ],
            ],
        ],
        'CreateLiveMigrateTaskOutput' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'ListLiveMigrateNodeAndGpuOutput' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'nodes' => [ 'type' => 'list', 'member' => [ 'shape' => 'LiveMigrateNode', ], ],
            ],
        ],
        'NodeConfig' => [
            'type' => 'structure',
            'members' => [
                'vgpu' => [ 'type' => 'integer', 'locationName' => 'vgpu', ],
                'gpuMemory' => [ 'type' => 'integer', 'locationName' => 'gpuMemory', ],
                'vgpuPerDevice' => [ 'type' => 'integer', 'locationName' => 'vgpuPerDevice', ],
                'memoryOvercommit' => [ 'type' => 'float', 'locationName' => 'memoryOvercommit', ],
                'coreOvercommit' => [ 'type' => 'float', 'locationName' => 'coreOvercommit', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'ratioSchdPolicy' => [ 'type' => 'integer', 'locationName' => 'ratioSchdPolicy', ],
                'hookMode' => [ 'type' => 'string', 'locationName' => 'hookMode', ],
            ],
        ],
        'DeviceInfo' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'deviceConfig' =>  [ 'shape' => 'DeviceConfig', ],
                'capacity' =>  [ 'shape' => 'GPUResourceFloat', ],
                'used' =>  [ 'shape' => 'GPUResourceFloat', ],
                'liveUsage' =>  [ 'shape' => 'GPUResourceFloat', ],
                'useStatus' => [ 'type' => 'string', 'locationName' => 'useStatus', ],
                'deviceStatus' => [ 'type' => 'string', 'locationName' => 'deviceStatus', ],
                'series' => [ 'type' => 'string', 'locationName' => 'series', ],
                'architecture' => [ 'type' => 'string', 'locationName' => 'architecture', ],
                'resourceGroup' => [ 'type' => 'string', 'locationName' => 'resourceGroup', ],
                'runningTaskCount' => [ 'type' => 'integer', 'locationName' => 'runningTaskCount', ],
                'available' =>  [ 'shape' => 'GPUResourceFloat', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
            ],
        ],
        'Allocate' => [
            'type' => 'structure',
            'members' => [
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'deviceBrand' => [ 'type' => 'string', 'locationName' => 'deviceBrand', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'template' => [ 'type' => 'string', 'locationName' => 'template', ],
                'deviceIds' => [ 'type' => 'string', 'locationName' => 'deviceIds', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
            ],
        ],
        'NodeInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'deviceNum' => [ 'type' => 'long', 'locationName' => 'deviceNum', ],
                'model' => [ 'type' => 'string', 'locationName' => 'model', ],
                'nodeConfig' =>  [ 'shape' => 'NodeConfig', ],
                'capacity' =>  [ 'shape' => 'GPUResourceFloat', ],
                'used' =>  [ 'shape' => 'GPUResourceFloat', ],
                'liveUsage' =>  [ 'shape' => 'GPUResourceFloat', ],
                'available' =>  [ 'shape' => 'GPUResourceFloat', ],
                'manufacturer' => [ 'type' => 'string', 'locationName' => 'manufacturer', ],
            ],
        ],
        'DeviceConfig' => [
            'type' => 'structure',
            'members' => [
                'virtualMode' => [ 'type' => 'string', 'locationName' => 'virtualMode', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
            ],
        ],
        'LiveMigrateTask' => [
            'type' => 'structure',
            'members' => [
                'migrateId' => [ 'type' => 'string', 'locationName' => 'migrateId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'subTaskId' => [ 'type' => 'string', 'locationName' => 'subTaskId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'beforeNode' =>  [ 'shape' => 'NodeInfo', ],
                'afterNode' =>  [ 'shape' => 'NodeInfo', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTimestamp' => [ 'type' => 'integer', 'locationName' => 'createTimestamp', ],
                'finishedTimestamp' => [ 'type' => 'integer', 'locationName' => 'finishedTimestamp', ],
                'taskCreator' => [ 'type' => 'string', 'locationName' => 'taskCreator', ],
                'nodeGroup' => [ 'type' => 'string', 'locationName' => 'nodeGroup', ],
                'startedTimestamp' => [ 'type' => 'integer', 'locationName' => 'startedTimestamp', ],
                'gpuUsage' =>  [ 'shape' => 'GPUResourceFloat', ],
                'usedSeconds' => [ 'type' => 'integer', 'locationName' => 'usedSeconds', ],
                'beforeAllocate' =>  [ 'shape' => 'Allocate', ],
                'afterAllocate' =>  [ 'shape' => 'Allocate', ],
            ],
        ],
        'NodeSimple' => [
            'type' => 'structure',
            'members' => [
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'nodeLabels' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeLabel', ], ],
            ],
        ],
        'NodeLabel' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CpuQuota' => [
            'type' => 'structure',
            'members' => [
                'cpu' =>  [ 'shape' => 'Quota', ],
                'memory' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'AddNodeParam' => [
            'type' => 'structure',
            'members' => [
                'nodePool' =>  [ 'shape' => 'NodePool', ],
                'nodeInfo' =>  [ 'shape' => 'Node', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'timeCount' => [ 'type' => 'integer', 'locationName' => 'timeCount', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'edge' => [ 'type' => 'boolean', 'locationName' => 'edge', ],
            ],
        ],
        'NodePool' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'poolType' => [ 'type' => 'string', 'locationName' => 'poolType', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'topology' => [ 'type' => 'integer', 'locationName' => 'topology', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'rdma' => [ 'type' => 'boolean', 'locationName' => 'rdma', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'hpcCluster' => [ 'type' => 'string', 'locationName' => 'hpcCluster', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'hpcZone' => [ 'type' => 'string', 'locationName' => 'hpcZone', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'gpuQuotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuQuota', ], ],
                'cpuQuota' =>  [ 'shape' => 'CpuQuota', ],
                'cluster' =>  [ 'shape' => 'Cluster', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'overview' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodePoolOverview', ], ],
            ],
        ],
        'Disk' => [
            'type' => 'structure',
            'members' => [
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'capacity' => [ 'type' => 'integer', 'locationName' => 'capacity', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'used' => [ 'type' => 'double', 'locationName' => 'used', ],
                'reserve' => [ 'type' => 'double', 'locationName' => 'reserve', ],
                'min' => [ 'type' => 'double', 'locationName' => 'min', ],
                'max' => [ 'type' => 'double', 'locationName' => 'max', ],
                'idle' => [ 'type' => 'double', 'locationName' => 'idle', ],
                'allocate' => [ 'type' => 'double', 'locationName' => 'allocate', ],
            ],
        ],
        'NodeInstance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'nodePoolName' => [ 'type' => 'string', 'locationName' => 'nodePoolName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'config' => [ 'type' => 'string', 'locationName' => 'config', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'NodeLoad' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'load' => [ 'type' => 'integer', 'locationName' => 'load', ],
            ],
        ],
        'GpuQuota' => [
            'type' => 'structure',
            'members' => [
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'gpu' =>  [ 'shape' => 'Quota', ],
                'vgpu' =>  [ 'shape' => 'Quota', ],
                'deviceMemory' => [ 'type' => 'long', 'locationName' => 'deviceMemory', ],
            ],
        ],
        'Node' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'nodeType' => [ 'type' => 'string', 'locationName' => 'nodeType', ],
                'chargeType' => [ 'type' => 'string', 'locationName' => 'chargeType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'config' => [ 'type' => 'string', 'locationName' => 'config', ],
                'zones' => [ 'type' => 'string', 'locationName' => 'zones', ],
                'hpcCluster' => [ 'type' => 'string', 'locationName' => 'hpcCluster', ],
                'hpcClusterName' => [ 'type' => 'string', 'locationName' => 'hpcClusterName', ],
                'subnet' => [ 'type' => 'string', 'locationName' => 'subnet', ],
                'subnetName' => [ 'type' => 'string', 'locationName' => 'subnetName', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'ipv4' => [ 'type' => 'string', 'locationName' => 'ipv4', ],
                'ipv6' => [ 'type' => 'string', 'locationName' => 'ipv6', ],
                'securityGroup' => [ 'type' => 'string', 'locationName' => 'securityGroup', ],
                'os' => [ 'type' => 'string', 'locationName' => 'os', ],
                'osTag' => [ 'type' => 'string', 'locationName' => 'osTag', ],
                'systemDisk' =>  [ 'shape' => 'Disk', ],
                'dataDisk' => [ 'type' => 'list', 'member' => [ 'shape' => 'Disk', ], ],
                'rootPwd' => [ 'type' => 'string', 'locationName' => 'rootPwd', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'gpuQuota' =>  [ 'shape' => 'GpuQuota', ],
                'cpuQuota' =>  [ 'shape' => 'CpuQuota', ],
                'nodeLabels' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeLabel', ], ],
                'deviceBrand' => [ 'type' => 'string', 'locationName' => 'deviceBrand', ],
            ],
        ],
        'NodePoolOverview' => [
            'type' => 'structure',
            'members' => [
                'capGpu' => [ 'type' => 'string', 'locationName' => 'capGpu', ],
                'capRatio' => [ 'type' => 'string', 'locationName' => 'capRatio', ],
                'capMemory' => [ 'type' => 'string', 'locationName' => 'capMemory', ],
                'capCpu' => [ 'type' => 'string', 'locationName' => 'capCpu', ],
                'capNMemory' => [ 'type' => 'string', 'locationName' => 'capNMemory', ],
                'usedGpu' => [ 'type' => 'string', 'locationName' => 'usedGpu', ],
                'usedRatio' => [ 'type' => 'string', 'locationName' => 'usedRatio', ],
                'usedMemory' => [ 'type' => 'string', 'locationName' => 'usedMemory', ],
                'usedCpu' => [ 'type' => 'string', 'locationName' => 'usedCpu', ],
                'usedNMemory' => [ 'type' => 'string', 'locationName' => 'usedNMemory', ],
                'idleGpu' => [ 'type' => 'string', 'locationName' => 'idleGpu', ],
                'idleRatio' => [ 'type' => 'string', 'locationName' => 'idleRatio', ],
                'idleMemory' => [ 'type' => 'string', 'locationName' => 'idleMemory', ],
                'idleCpu' => [ 'type' => 'string', 'locationName' => 'idleCpu', ],
                'idleNMemory' => [ 'type' => 'string', 'locationName' => 'idleNMemory', ],
            ],
        ],
        'NodePoolSimple' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'topology' => [ 'type' => 'integer', 'locationName' => 'topology', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'gpuQuotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuQuota', ], ],
                'cpuQuota' =>  [ 'shape' => 'CpuQuota', ],
                'cluster' =>  [ 'shape' => 'ClusterSimple', ],
                'nodeIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Status' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'validity' => [ 'type' => 'boolean', 'locationName' => 'validity', ],
            ],
        ],
        'CheckTagResourceResp' => [
            'type' => 'structure',
            'members' => [
                'validityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Status', ], ],
            ],
        ],
        'SelectDetailListResp' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
            ],
        ],
        'SchedulingPolicy' => [
            'type' => 'structure',
            'members' => [
                'nodeSchedulerStrategy' => [ 'type' => 'string', 'locationName' => 'nodeSchedulerStrategy', ],
                'deviceSchedulerStrategy' => [ 'type' => 'string', 'locationName' => 'deviceSchedulerStrategy', ],
            ],
        ],
        'StatsDetail' => [
            'type' => 'structure',
            'members' => [
                'num' => [ 'type' => 'double', 'locationName' => 'num', ],
                'dimensions' => [ 'type' => 'string', 'locationName' => 'dimensions', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'DeviceStatsDetail' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'double', 'locationName' => 'count', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
            ],
        ],
        'NodePoolCalcNodeUsage' => [
            'type' => 'structure',
            'members' => [
                'nodeNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'FragmentStatsDetail' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'schedulingStatus' => [ 'type' => 'string', 'locationName' => 'schedulingStatus', ],
                'readyStatus' => [ 'type' => 'string', 'locationName' => 'readyStatus', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'totalDevice' => [ 'type' => 'double', 'locationName' => 'totalDevice', ],
                'idleDevice' => [ 'type' => 'double', 'locationName' => 'idleDevice', ],
                'usedDevice' => [ 'type' => 'double', 'locationName' => 'usedDevice', ],
                'faultDevice' => [ 'type' => 'double', 'locationName' => 'faultDevice', ],
                'idleCpu' => [ 'type' => 'double', 'locationName' => 'idleCpu', ],
                'idleNMemory' => [ 'type' => 'double', 'locationName' => 'idleNMemory', ],
            ],
        ],
        'Queue' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'nodePoolInfo' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'gpuQuotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuQuota', ], ],
                'cpuQuota' =>  [ 'shape' => 'CpuQuota', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'priority' => [ 'type' => 'boolean', 'locationName' => 'priority', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'QueueWithDeleted' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'nodePoolInfo' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'gpuQuotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuQuota', ], ],
                'cpuQuota' =>  [ 'shape' => 'CpuQuota', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'priority' => [ 'type' => 'boolean', 'locationName' => 'priority', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'deleteTime' => [ 'type' => 'long', 'locationName' => 'deleteTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'Flavor' => [
            'type' => 'structure',
            'members' => [
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'gpu' => [ 'type' => 'integer', 'locationName' => 'gpu', ],
                'vgpu' => [ 'type' => 'integer', 'locationName' => 'vgpu', ],
                'ratioPerVGpu' => [ 'type' => 'float', 'locationName' => 'ratioPerVGpu', ],
                'memoryPerVGpu' => [ 'type' => 'float', 'locationName' => 'memoryPerVGpu', ],
            ],
        ],
        'CalculateInstanceFlavorResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'flavor' => [ 'type' => 'object', 'locationName' => 'flavor', ],
            ],
        ],
        'SubTaskFlavors' => [
            'type' => 'structure',
            'members' => [
                'replicas' => [ 'type' => 'integer', 'locationName' => 'replicas', ],
                'flavor' =>  [ 'shape' => 'Flavor', ],
            ],
        ],
        'CalculateTaskResourceResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'queueResourcesPassed' => [ 'type' => 'boolean', 'locationName' => 'queueResourcesPassed', ],
                'clusterResourcesPassed' => [ 'type' => 'boolean', 'locationName' => 'clusterResourcesPassed', ],
                'schedulerPassed' => [ 'type' => 'boolean', 'locationName' => 'schedulerPassed', ],
                'availableCount' => [ 'type' => 'long', 'locationName' => 'availableCount', ],
                'hostpathResourcePassed' => [ 'type' => 'boolean', 'locationName' => 'hostpathResourcePassed', ],
            ],
        ],
        'Metrics' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DeletePublicModelWhitelistParm' => [
            'type' => 'structure',
            'members' => [
                'whitelistPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isDelAll' => [ 'type' => 'boolean', 'locationName' => 'isDelAll', ],
            ],
        ],
        'PublicModelWhitelist' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'whitelistPin' => [ 'type' => 'string', 'locationName' => 'whitelistPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
            ],
        ],
        'UpdatePublicModelParm' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ModelPublicSpec' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'modelIntroduction' => [ 'type' => 'string', 'locationName' => 'modelIntroduction', ],
            ],
        ],
        'ModelsPrivate' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'versionNum' => [ 'type' => 'integer', 'locationName' => 'versionNum', ],
                'modelDescription' => [ 'type' => 'string', 'locationName' => 'modelDescription', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'CreatePublicModelWhitelistParm' => [
            'type' => 'structure',
            'members' => [
                'whitelistPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateModelVersionParm' => [
            'type' => 'structure',
            'members' => [
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
            ],
        ],
        'UpdatePublicModelVersionParm' => [
            'type' => 'structure',
            'members' => [
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'modelIntroduction' => [ 'type' => 'string', 'locationName' => 'modelIntroduction', ],
            ],
        ],
        'ModelVersionInfo' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelDescription' => [ 'type' => 'string', 'locationName' => 'modelDescription', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'baseModelId' => [ 'type' => 'string', 'locationName' => 'baseModelId', ],
                'baseModelName' => [ 'type' => 'string', 'locationName' => 'baseModelName', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageDomain' => [ 'type' => 'string', 'locationName' => 'storageDomain', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageUri' => [ 'type' => 'string', 'locationName' => 'storageUri', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'cfsVpcId' => [ 'type' => 'string', 'locationName' => 'cfsVpcId', ],
                'modelIntroduction' => [ 'type' => 'string', 'locationName' => 'modelIntroduction', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'modelType' => [ 'type' => 'string', 'locationName' => 'modelType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'experimentRunId' => [ 'type' => 'string', 'locationName' => 'experimentRunId', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'UpdateModelParm' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
            ],
        ],
        'ModelsPublic' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageDomain' => [ 'type' => 'string', 'locationName' => 'storageDomain', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageUri' => [ 'type' => 'string', 'locationName' => 'storageUri', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'labelsMap' => [ 'type' => 'object', 'locationName' => 'labelsMap', ],
                'labelsObject' =>  [ 'shape' => 'LabelsObject', ],
                'modelIntroduction' => [ 'type' => 'string', 'locationName' => 'modelIntroduction', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'ModelSpecPrivate' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageDomain' => [ 'type' => 'string', 'locationName' => 'storageDomain', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'basicModelId' => [ 'type' => 'string', 'locationName' => 'basicModelId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'experimentRunId' => [ 'type' => 'string', 'locationName' => 'experimentRunId', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'PublicModelVersionInfo' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'modelDescription' => [ 'type' => 'string', 'locationName' => 'modelDescription', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'baseModelId' => [ 'type' => 'string', 'locationName' => 'baseModelId', ],
                'baseModelName' => [ 'type' => 'string', 'locationName' => 'baseModelName', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageDomain' => [ 'type' => 'string', 'locationName' => 'storageDomain', ],
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageUri' => [ 'type' => 'string', 'locationName' => 'storageUri', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'cfsVpcId' => [ 'type' => 'string', 'locationName' => 'cfsVpcId', ],
                'modelIntroduction' => [ 'type' => 'string', 'locationName' => 'modelIntroduction', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
                'labelsMap' => [ 'type' => 'object', 'locationName' => 'labelsMap', ],
                'labelsObject' =>  [ 'shape' => 'LabelsObject', ],
                'modelType' => [ 'type' => 'string', 'locationName' => 'modelType', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'experimentRunId' => [ 'type' => 'string', 'locationName' => 'experimentRunId', ],
            ],
        ],
        'LabelsObject' => [
            'type' => 'structure',
            'members' => [
                'finetuneModelBillingItem' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'finetuneModelSeries' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'finetuneModelTemplate' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'supportTask' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'icon' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keyword' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parameterSize' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'license' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'provider' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'scenario' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ResourceOverview' => [
            'type' => 'structure',
            'members' => [
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'total' => [ 'type' => 'string', 'locationName' => 'total', ],
                'allocate' => [ 'type' => 'string', 'locationName' => 'allocate', ],
                'totalAllocateRate' => [ 'type' => 'string', 'locationName' => 'totalAllocateRate', ],
                'idle' => [ 'type' => 'string', 'locationName' => 'idle', ],
                'allocateUsed' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceActualUsedOverview', ], ],
                'totalUsed' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceActualUsedOverview', ], ],
            ],
        ],
        'TaskType' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'NodesResourceOverviewResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' =>  [ 'shape' => 'NodesResourceOverview', ],
            ],
        ],
        'TasksOverview' => [
            'type' => 'structure',
            'members' => [
                'task_type' => [ 'type' => 'string', 'locationName' => 'task_type', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'TasksOverviewResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TasksOverview', ], ],
            ],
        ],
        'ResourceActualUsedOverview' => [
            'type' => 'structure',
            'members' => [
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'rate' => [ 'type' => 'string', 'locationName' => 'rate', ],
            ],
        ],
        'NodesOverview' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'TaskTypeResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskType', ], ],
            ],
        ],
        'NodesQueueOverviewResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodesQueueOverview', ], ],
            ],
        ],
        'NodesResourceOverview' => [
            'type' => 'structure',
            'members' => [
                'nodeNum' => [ 'type' => 'integer', 'locationName' => 'nodeNum', ],
                'queueNum' => [ 'type' => 'integer', 'locationName' => 'queueNum', ],
                'gpuNum' => [ 'type' => 'integer', 'locationName' => 'gpuNum', ],
                'gpuMemNum' => [ 'type' => 'float', 'locationName' => 'gpuMemNum', ],
            ],
        ],
        'NodesQueueOverview' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ResourceOverviewResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceOverview', ], ],
            ],
        ],
        'NodesOverviewResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodesOverview', ], ],
            ],
        ],
        'NotebookNodeAffinity' => [
            'type' => 'structure',
            'members' => [
                'affinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookAffinity', ], ],
            ],
        ],
        'ModelSpec' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'modelUrl' => [ 'type' => 'string', 'locationName' => 'modelUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'NbDatasetDetail' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageName' => [ 'type' => 'string', 'locationName' => 'storageName', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'datasetUrl' => [ 'type' => 'string', 'locationName' => 'datasetUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'NbTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ImageTask' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'imgId' => [ 'type' => 'string', 'locationName' => 'imgId', ],
                'imgName' => [ 'type' => 'string', 'locationName' => 'imgName', ],
                'imgUsage' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imgArch' => [ 'type' => 'string', 'locationName' => 'imgArch', ],
                'imgLabels' => [ 'type' => 'string', 'locationName' => 'imgLabels', ],
                'imageRegistry' => [ 'type' => 'string', 'locationName' => 'imageRegistry', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'NbShutdownPolicy' => [
            'type' => 'structure',
            'members' => [
                'excluded' => [ 'type' => 'boolean', 'locationName' => 'excluded', ],
                'runtimeMinute' => [ 'type' => 'integer', 'locationName' => 'runtimeMinute', ],
                'expectedShutdownTime' => [ 'type' => 'string', 'locationName' => 'expectedShutdownTime', ],
                'idlePolicys' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbIdlePolicy', ], ],
            ],
        ],
        'DatasetSpec' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'datasetUrl' => [ 'type' => 'string', 'locationName' => 'datasetUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'NotebookSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'lbSpec' =>  [ 'shape' => 'LbSpec', ],
                'workloadSpec' =>  [ 'shape' => 'WorkloadSpec', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetSpec', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelSpec', ], ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookNodeAffinity', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbCodeConfig', ], ],
                'sshSpec' =>  [ 'shape' => 'SshSpec', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbTag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'NbCodeConfig' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'WorkloadSpec' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'cpuM' => [ 'type' => 'integer', 'locationName' => 'cpuM', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'vcudaCore' => [ 'type' => 'string', 'locationName' => 'vcudaCore', ],
            ],
        ],
        'NbIdlePolicy' => [
            'type' => 'structure',
            'members' => [
                'maxIdleTimeInMinutes' => [ 'type' => 'integer', 'locationName' => 'maxIdleTimeInMinutes', ],
                'cpuPercentThreshold' => [ 'type' => 'string', 'locationName' => 'cpuPercentThreshold', ],
                'memoryPercentThreshold' => [ 'type' => 'string', 'locationName' => 'memoryPercentThreshold', ],
                'gpuPercentThreshold' => [ 'type' => 'string', 'locationName' => 'gpuPercentThreshold', ],
                'idleStartTime' => [ 'type' => 'string', 'locationName' => 'idleStartTime', ],
                'idleTimeInMinutes' => [ 'type' => 'integer', 'locationName' => 'idleTimeInMinutes', ],
            ],
        ],
        'NbTagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NotebookEvent' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'SshSpec' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'publicKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'connectionUri' => [ 'type' => 'string', 'locationName' => 'connectionUri', ],
                'sshUser' => [ 'type' => 'string', 'locationName' => 'sshUser', ],
            ],
        ],
        'NotebookInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'vscodeUri' => [ 'type' => 'string', 'locationName' => 'vscodeUri', ],
                'customServiceUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'workload' =>  [ 'shape' => 'NbWorkloadDetail', ],
                'lb' =>  [ 'shape' => 'LbSpec', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'shutdownPolicy' =>  [ 'shape' => 'NbShutdownPolicy', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbTag', ], ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookNodeAffinity', ], ],
            ],
        ],
        'StorageSpec' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'NotebookDetail' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'resourceState' => [ 'type' => 'string', 'locationName' => 'resourceState', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'vscodeUri' => [ 'type' => 'string', 'locationName' => 'vscodeUri', ],
                'customServiceUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'workload' =>  [ 'shape' => 'NbWorkloadDetail', ],
                'lb' =>  [ 'shape' => 'LbSpec', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbDatasetDetail', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbModelDetail', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbCodeConfigInfo', ], ],
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfigDetail', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'shutdownPolicy' =>  [ 'shape' => 'NbShutdownPolicy', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'resourceGroupName' => [ 'type' => 'string', 'locationName' => 'resourceGroupName', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbTag', ], ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookNodeAffinity', ], ],
            ],
        ],
        'NbModelDetail' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageName' => [ 'type' => 'string', 'locationName' => 'storageName', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'modelUrl' => [ 'type' => 'string', 'locationName' => 'modelUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readonly' => [ 'type' => 'boolean', 'locationName' => 'readonly', ],
            ],
        ],
        'NbWorkloadDetail' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'cpuM' => [ 'type' => 'integer', 'locationName' => 'cpuM', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'vcudaCore' => [ 'type' => 'string', 'locationName' => 'vcudaCore', ],
                'vcudaMemory' => [ 'type' => 'integer', 'locationName' => 'vcudaMemory', ],
                'vcudaRatio' => [ 'type' => 'integer', 'locationName' => 'vcudaRatio', ],
            ],
        ],
        'NotebookPod' => [
            'type' => 'structure',
            'members' => [
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'podIp' => [ 'type' => 'string', 'locationName' => 'podIp', ],
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'containerCount' => [ 'type' => 'integer', 'locationName' => 'containerCount', ],
                'readyContainerCount' => [ 'type' => 'integer', 'locationName' => 'readyContainerCount', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'readyTime' => [ 'type' => 'string', 'locationName' => 'readyTime', ],
            ],
        ],
        'ImageSpec' => [
            'type' => 'structure',
            'members' => [
                'imgName' => [ 'type' => 'string', 'locationName' => 'imgName', ],
                'imgUsage' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imgArch' => [ 'type' => 'string', 'locationName' => 'imgArch', ],
                'imgLabels' => [ 'type' => 'string', 'locationName' => 'imgLabels', ],
                'imageRegistry' => [ 'type' => 'string', 'locationName' => 'imageRegistry', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'imageTag' => [ 'type' => 'string', 'locationName' => 'imageTag', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'LbSpec' => [
            'type' => 'structure',
            'members' => [
                'lbId' => [ 'type' => 'string', 'locationName' => 'lbId', ],
                'lbPort' => [ 'type' => 'integer', 'locationName' => 'lbPort', ],
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
            ],
        ],
        'UpdateResourcePropertiesParam' => [
            'type' => 'structure',
            'members' => [
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'lbSpec' =>  [ 'shape' => 'LbSpec', ],
                'workloadSpec' =>  [ 'shape' => 'WorkloadSpec', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetSpec', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelSpec', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbCodeConfig', ], ],
                'nodeAffinities' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookNodeAffinity', ], ],
                'sshSpec' =>  [ 'shape' => 'SshSpec', ],
            ],
        ],
        'NotebookStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'NbCodeConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'repoName' => [ 'type' => 'string', 'locationName' => 'repoName', ],
            ],
        ],
        'NotebookBaseInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'podIp' => [ 'type' => 'string', 'locationName' => 'podIp', ],
                'lb' =>  [ 'shape' => 'LbSpec', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'NotebookAffinity' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateUserAndAppSpec' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'oldOwner' => [ 'type' => 'string', 'locationName' => 'oldOwner', ],
                'newOwner' => [ 'type' => 'string', 'locationName' => 'newOwner', ],
            ],
        ],
        'ProductUpdateTag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ProductUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'updateType' => [ 'type' => 'string', 'locationName' => 'updateType', ],
                'publishDate' => [ 'type' => 'string', 'locationName' => 'publishDate', ],
                'displayOrder' => [ 'type' => 'integer', 'locationName' => 'displayOrder', ],
                'isSticky' => [ 'type' => 'boolean', 'locationName' => 'isSticky', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductUpdateTag', ], ],
            ],
        ],
        'UpdateProductUpdateSpec' => [
            'type' => 'structure',
            'members' => [
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'updateType' => [ 'type' => 'string', 'locationName' => 'updateType', ],
                'publishDate' => [ 'type' => 'string', 'locationName' => 'publishDate', ],
                'displayOrder' => [ 'type' => 'integer', 'locationName' => 'displayOrder', ],
                'isSticky' => [ 'type' => 'boolean', 'locationName' => 'isSticky', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductUpdateTag', ], ],
            ],
        ],
        'ProductUpdateInfo' => [
            'type' => 'structure',
            'members' => [
                'updateId' => [ 'type' => 'string', 'locationName' => 'updateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'updateType' => [ 'type' => 'string', 'locationName' => 'updateType', ],
                'publishDate' => [ 'type' => 'string', 'locationName' => 'publishDate', ],
                'displayOrder' => [ 'type' => 'integer', 'locationName' => 'displayOrder', ],
                'isSticky' => [ 'type' => 'boolean', 'locationName' => 'isSticky', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductUpdateTag', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
            ],
        ],
        'Rdma' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'bandwidthGbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthGbps', ],
            ],
        ],
        'Gpu' => [
            'type' => 'structure',
            'members' => [
                'gpuNumber' => [ 'type' => 'float', 'locationName' => 'gpuNumber', ],
                'gmemoryGiB' => [ 'type' => 'float', 'locationName' => 'gmemoryGiB', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
            ],
        ],
        'PublicQueue' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'flavorId' => [ 'type' => 'string', 'locationName' => 'flavorId', ],
                'flavorName' => [ 'type' => 'string', 'locationName' => 'flavorName', ],
                'cpuM' => [ 'type' => 'integer', 'locationName' => 'cpuM', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'gpu' =>  [ 'shape' => 'Gpu', ],
                'rdma' =>  [ 'shape' => 'Rdma', ],
            ],
        ],
        'CreateCodeRepoConfigParam' => [
            'type' => 'structure',
            'members' => [
                'repoName' => [ 'type' => 'string', 'locationName' => 'repoName', ],
                'repoType' => [ 'type' => 'string', 'locationName' => 'repoType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'projectId' => [ 'type' => 'string', 'locationName' => 'projectId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'branch' => [ 'type' => 'string', 'locationName' => 'branch', ],
                'commit' => [ 'type' => 'string', 'locationName' => 'commit', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'CodeRepoConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
                'repoName' => [ 'type' => 'string', 'locationName' => 'repoName', ],
                'repoType' => [ 'type' => 'string', 'locationName' => 'repoType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'projectId' => [ 'type' => 'string', 'locationName' => 'projectId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'branch' => [ 'type' => 'string', 'locationName' => 'branch', ],
                'commit' => [ 'type' => 'string', 'locationName' => 'commit', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
            ],
        ],
        'UpdateCodeRepoConfigParam' => [
            'type' => 'structure',
            'members' => [
                'repoName' => [ 'type' => 'string', 'locationName' => 'repoName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'projectId' => [ 'type' => 'string', 'locationName' => 'projectId', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'branch' => [ 'type' => 'string', 'locationName' => 'branch', ],
                'commit' => [ 'type' => 'string', 'locationName' => 'commit', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
            ],
        ],
        'StoragePathItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'isDir' => [ 'type' => 'boolean', 'locationName' => 'isDir', ],
                'isBucket' => [ 'type' => 'boolean', 'locationName' => 'isBucket', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'lastModified' => [ 'type' => 'string', 'locationName' => 'lastModified', ],
            ],
        ],
        'StorageInstanceItem' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'configs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItemValue', ], ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'ConfigItemValue' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'StorageTypeItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
            ],
        ],
        'ConfigItem' => [
            'type' => 'structure',
            'members' => [
                'displayName' => [ 'type' => 'string', 'locationName' => 'displayName', ],
                'keyName' => [ 'type' => 'string', 'locationName' => 'keyName', ],
                'componentType' => [ 'type' => 'string', 'locationName' => 'componentType', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
                'required' => [ 'type' => 'boolean', 'locationName' => 'required', ],
                'options' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DataSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'dataSourceType' => [ 'type' => 'string', 'locationName' => 'dataSourceType', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
            ],
        ],
        'TensorBoardInfo' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'tensorBoardId' => [ 'type' => 'string', 'locationName' => 'tensorBoardId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'dataSourceSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataSourceSpec', ], ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'runningTime' => [ 'type' => 'string', 'locationName' => 'runningTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'TensorBoardSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'dataSourceSpec' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataSourceSpec', ], ],
            ],
        ],
        'BindResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceIdVal' => [ 'type' => 'string', 'locationName' => 'resourceIdVal', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'BoundResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceIdVal' => [ 'type' => 'string', 'locationName' => 'resourceIdVal', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateNotebookOffPolicy' => [
            'type' => 'structure',
            'members' => [
                'maxRunningDuration' => [ 'type' => 'integer', 'locationName' => 'maxRunningDuration', ],
                'maxIdleDuration' => [ 'type' => 'integer', 'locationName' => 'maxIdleDuration', ],
                'minCpuUsageRate' => [ 'type' => 'double', 'locationName' => 'minCpuUsageRate', ],
                'minGpuUsageRate' => [ 'type' => 'double', 'locationName' => 'minGpuUsageRate', ],
                'minMemoryUsageRate' => [ 'type' => 'double', 'locationName' => 'minMemoryUsageRate', ],
                'excludedNotebookIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceInfoWithRole' => [
            'type' => 'structure',
            'members' => [
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceDesc' => [ 'type' => 'string', 'locationName' => 'workspaceDesc', ],
                'admins' => [ 'type' => 'string', 'locationName' => 'admins', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'resourceQueueId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'role' => [ 'type' => 'string', 'locationName' => 'role', ],
            ],
        ],
        'UpdateLogConfigs' => [
            'type' => 'structure',
            'members' => [
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'usages' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceRelatedQueue' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'allModuleSupported' => [ 'type' => 'boolean', 'locationName' => 'allModuleSupported', ],
                'queueModules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allMemberSupported' => [ 'type' => 'boolean', 'locationName' => 'allMemberSupported', ],
                'queueMemberPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RegionMember' => [
            'type' => 'structure',
            'members' => [
                'memberUser' => [ 'type' => 'string', 'locationName' => 'memberUser', ],
                'memberPin' => [ 'type' => 'string', 'locationName' => 'memberPin', ],
            ],
        ],
        'WorkspaceMemberQueue' => [
            'type' => 'structure',
            'members' => [
                'memberUser' => [ 'type' => 'string', 'locationName' => 'memberUser', ],
                'memberRole' => [ 'type' => 'string', 'locationName' => 'memberRole', ],
                'memberPin' => [ 'type' => 'string', 'locationName' => 'memberPin', ],
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceInfoWithoutRole' => [
            'type' => 'structure',
            'members' => [
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceDesc' => [ 'type' => 'string', 'locationName' => 'workspaceDesc', ],
                'admins' => [ 'type' => 'string', 'locationName' => 'admins', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'resourceQueueId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'memberRole' => [ 'type' => 'string', 'locationName' => 'memberRole', ],
            ],
        ],
        'UpdateWorkspaceRelatedQueue' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'allModuleSupported' => [ 'type' => 'boolean', 'locationName' => 'allModuleSupported', ],
                'queueModules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allMemberSupported' => [ 'type' => 'boolean', 'locationName' => 'allMemberSupported', ],
                'queueMemberPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateLogConfigs' => [
            'type' => 'structure',
            'members' => [
                'updateMethod' => [ 'type' => 'string', 'locationName' => 'updateMethod', ],
                'logConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateLogConfigs', ], ],
            ],
        ],
        'WorkspaceNotebookOffPolicy' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'maxRunningDuration' => [ 'type' => 'double', 'locationName' => 'maxRunningDuration', ],
                'maxIdleDuration' => [ 'type' => 'double', 'locationName' => 'maxIdleDuration', ],
                'minCpuUsageRate' => [ 'type' => 'double', 'locationName' => 'minCpuUsageRate', ],
                'minGpuUsageRate' => [ 'type' => 'double', 'locationName' => 'minGpuUsageRate', ],
                'minMemoryUsageRate' => [ 'type' => 'double', 'locationName' => 'minMemoryUsageRate', ],
                'excludedNotebookIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'MemberWorkspace' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'memberRole' => [ 'type' => 'string', 'locationName' => 'memberRole', ],
            ],
        ],
        'LogConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'logtopicName' => [ 'type' => 'string', 'locationName' => 'logtopicName', ],
                'usages' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceMember' => [
            'type' => 'structure',
            'members' => [
                'memberUser' => [ 'type' => 'string', 'locationName' => 'memberUser', ],
                'memberRole' => [ 'type' => 'string', 'locationName' => 'memberRole', ],
                'memberPin' => [ 'type' => 'string', 'locationName' => 'memberPin', ],
            ],
        ],
        'WorkspaceQueue' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'allModuleSupported' => [ 'type' => 'boolean', 'locationName' => 'allModuleSupported', ],
                'queueModules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allMemberSupported' => [ 'type' => 'boolean', 'locationName' => 'allMemberSupported', ],
                'queueMemberPins' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WorkspaceSpec' => [
            'type' => 'structure',
            'members' => [
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDesc' => [ 'type' => 'string', 'locationName' => 'workspaceDesc', ],
                'resourceQueue' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceRelatedQueue', ], ],
                'workspaceMember' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceMember', ], ],
                'logConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateLogConfigs', ], ],
            ],
        ],
        'AdminDescribeAccountMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'members' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountMember', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'AdminDescribeAccountMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AdminDescribeAccountMembersResultShape', ],
            ],
        ],
        'AdminDescribeAccountMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateExperimentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteExperimentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeExperimentsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'CreateExperimentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateExperimentResultShape', ],
            ],
        ],
        'DescribeExperimentsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeExperimentsResultShape', ],
            ],
        ],
        'DescribeExperimentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'CreateExperimentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'experimentParam' =>  [ 'shape' => 'ExperimentParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeExperimentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeExperimentResultShape', ],
            ],
        ],
        'DeleteExperimentResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateExperimentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'DescribeExperimentsResultShape' => [
            'type' => 'structure',
            'members' => [
                'experimentListInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExperimentListInfo', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeExperimentResultShape' => [
            'type' => 'structure',
            'members' => [
                'experimentDetailInfo' =>  [ 'shape' => 'ExperimentDetailInfo', ],
            ],
        ],
        'CreateExperimentResultShape' => [
            'type' => 'structure',
            'members' => [
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'UpdateExperimentResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteExperimentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'DescribeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'DescribeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobDetailInfo' =>  [ 'shape' => 'JobDetailInfoForJob', ],
            ],
        ],
        'DescribeJobsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeJobsResultShape', ],
            ],
        ],
        'GetJobEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'eventInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventInfoListForJob', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeJobResultShape', ],
            ],
        ],
        'DescribeJobsResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobListInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobListInfoForJob', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeJobTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeJobTypesResultShape', ],
            ],
        ],
        'CreateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobParam' =>  [ 'shape' => 'JobParam', ],
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeJobTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeJobsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'StopJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'CreateJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateJobResultShape', ],
            ],
        ],
        'GetJobEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetJobEventsResultShape', ],
            ],
        ],
        'StopJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'DeleteJobResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetPodLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tailLines' => [ 'type' => 'integer', 'locationName' => 'tailLines', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
            ],
        ],
        'DescribeJobTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'GetPodLogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'GetPodLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopJobResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetJobEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'DescribeRunConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modelTemplate' => [ 'type' => 'string', 'locationName' => 'modelTemplate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateRunResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetRunEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runEventInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventInfoListForExperiment', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateRunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteRunResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateRunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRunResultShape', ],
            ],
        ],
        'DescribeRunsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunTagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'DescribeRunConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRunConfigsResultShape', ],
            ],
        ],
        'DeleteRunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
            ],
        ],
        'GetRunEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
            ],
        ],
        'DeleteRunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateRunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'runParam' =>  [ 'shape' => 'RunParamForExperiment', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'DescribeRunsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runListInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunListInfoForExperiment', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeRunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
            ],
        ],
        'StopRunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
            ],
        ],
        'StopRunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetRunEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetRunEventsResultShape', ],
            ],
        ],
        'StopRunResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeRunResultShape' => [
            'type' => 'structure',
            'members' => [
                'runDetailInfo' =>  [ 'shape' => 'RunDetailInfoForExperiment', ],
            ],
        ],
        'DescribeRunResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRunResultShape', ],
            ],
        ],
        'DescribeRunConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runConfigInfo' => [ 'type' => 'object', 'locationName' => 'runConfigInfo', ],
            ],
        ],
        'DescribeRunsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeRunsResultShape', ],
            ],
        ],
        'UpdateRunRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
            ],
        ],
        'CreateRunResultShape' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
            ],
        ],
        'UpdateDatasetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDatasetVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetVersionInfo', ], ],
            ],
        ],
        'DescribeDatasetVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDatasetVersionsResultShape', ],
            ],
        ],
        'DescribeDatasetVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDatasetVersionResultShape', ],
            ],
        ],
        'DescribeDatasetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDatasetResultShape', ],
            ],
        ],
        'CreateDatasetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDatasetResultShape', ],
            ],
        ],
        'DeleteDatasetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDatasetVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDatasetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'datasetSpec' =>  [ 'shape' => 'CreateDatasetParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateDatasetVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateDatasetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateDatasetSpec' =>  [ 'shape' => 'UpdateDatasetParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
            ],
        ],
        'DescribeDatasetVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DatasetVersionInfo', ],
            ],
        ],
        'DeleteDatasetVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDatasetVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DeleteDatasetVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DeleteDatasetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDatasetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetInfo', ], ],
            ],
        ],
        'DescribeDatasetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeDatasetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeDatasetsResultShape', ],
            ],
        ],
        'CreateDatasetResultShape' => [
            'type' => 'structure',
            'members' => [
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeDatasetVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
            ],
        ],
        'UpdateDatasetVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateDatasetVersionSpec' =>  [ 'shape' => 'UpdateDatasetVersionParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DeleteDatasetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
            ],
        ],
        'UpdateDatasetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDatasetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
            ],
        ],
        'DescribeDatasetResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataset' =>  [ 'shape' => 'DatasetInfo', ],
            ],
        ],
        'UpdateDatasetVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ImageInfo', ],
            ],
        ],
        'CreateImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'UpdateImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
            ],
        ],
        'UpdateImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateImageSpec' =>  [ 'shape' => 'UpdatePrivateImageParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DescribeImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImageResultShape', ],
            ],
        ],
        'CreateImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createImageSpec' =>  [ 'shape' => 'CreateImageParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'UpdateImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
            ],
        ],
        'DeleteImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageInfo', ], ],
            ],
        ],
        'CreateImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateImageResultShape', ],
            ],
        ],
        'DescribeImagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'RolloutInferenceSpec' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'rolloutId' => [ 'type' => 'string', 'locationName' => 'rolloutId', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'maxSurge' => [ 'type' => 'integer', 'locationName' => 'maxSurge', ],
                'maxUnavailable' => [ 'type' => 'integer', 'locationName' => 'maxUnavailable', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
            ],
        ],
        'RolloutInferenceResponse' => [
            'type' => 'structure',
            'members' => [
                'rolloutId' => [ 'type' => 'string', 'locationName' => 'rolloutId', ],
            ],
        ],
        'RolloutInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RolloutInferenceResultShape', ],
            ],
        ],
        'DescribeInferenceRolloutsResultShape' => [
            'type' => 'structure',
            'members' => [
                'rollouts' => [ 'type' => 'list', 'member' => [ 'shape' => 'RolloutInfo', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'PauseRolloutRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'RolloutInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'rolloutId' => [ 'type' => 'string', 'locationName' => 'rolloutId', ],
            ],
        ],
        'PauseRolloutResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInferenceRolloutsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferenceRolloutsResultShape', ],
            ],
        ],
        'PauseRolloutResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PauseRolloutResultShape', ],
            ],
        ],
        'DescribeInferenceRolloutsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'RolloutInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rolloutInferenceSpec' =>  [ 'shape' => 'RolloutInferenceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'CreateInferenceScaleResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DescribeInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DescribeServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'StopInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DeleteInferenceScaleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteInferenceScaleResultShape', ],
            ],
        ],
        'DeleteInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInferenceEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInferenceScaleResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'scaleType' => [ 'type' => 'string', 'locationName' => 'scaleType', ],
                'autoScale' =>  [ 'shape' => 'AutoScale', ],
                'cronScale' => [ 'type' => 'list', 'member' => [ 'shape' => 'CronScale', ], ],
            ],
        ],
        'UpdateInferenceScaleResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'StopInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServiceResultShape', ],
            ],
        ],
        'DescribeInferenceScaleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DescribeServicesResultShape' => [
            'type' => 'structure',
            'members' => [
                'services' => [ 'type' => 'list', 'member' => [ 'shape' => 'Service', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DescribeInferencesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeServicesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'StartInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExtendInferenceRequest' => [
            'type' => 'structure',
            'members' => [
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserTag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'DeleteServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'CreateInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'inferenceSpec' =>  [ 'shape' => 'InferenceSpec', ],
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfig', ],
                'extend' =>  [ 'shape' => 'ExtendInferenceRequest', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateServiceResultShape', ],
            ],
        ],
        'CreateInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInferenceResultShape', ],
            ],
        ],
        'DeleteInferenceScaleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DescribeInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'trafficPercent' => [ 'type' => 'integer', 'locationName' => 'trafficPercent', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'service' =>  [ 'shape' => 'ServiceInfo', ],
                'metadata' =>  [ 'shape' => 'Metadata', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'codes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Code', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'roleSet' =>  [ 'shape' => 'RoleSet', ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfigDetail', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserTag', ], ],
                'resourceGroupInfo' =>  [ 'shape' => 'ResourceGroupInfo', ],
                'rolloutInfo' =>  [ 'shape' => 'RolloutInfo', ],
            ],
        ],
        'DescribeInferencePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferencePodsResultShape', ],
            ],
        ],
        'UpdateInferenceScaleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateInferenceScaleResultShape', ],
            ],
        ],
        'DescribeInferenceEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferenceEventsResultShape', ],
            ],
        ],
        'DeleteInferenceScaleResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInferenceScaleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInferenceScaleResultShape', ],
            ],
        ],
        'UpdateInferenceScaleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'inferenceScaleSpec' =>  [ 'shape' => 'InferenceScaleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'UpdateInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateSpec' =>  [ 'shape' => 'UpdateInfo', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'StopInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopInferenceResultShape', ],
            ],
        ],
        'DescribeInferencePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodInfo', ], ],
            ],
        ],
        'DescribeInferenceScaleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferenceScaleResultShape', ],
            ],
        ],
        'UpdateInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateInferenceResultShape', ],
            ],
        ],
        'DescribeServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deployType' => [ 'type' => 'string', 'locationName' => 'deployType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'running' => [ 'type' => 'integer', 'locationName' => 'running', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'gatewayType' => [ 'type' => 'string', 'locationName' => 'gatewayType', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'ownerUser' => [ 'type' => 'string', 'locationName' => 'ownerUser', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
            ],
        ],
        'DescribeInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferenceResultShape', ],
            ],
        ],
        'DescribeInferenceEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DeleteInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'StartInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartInferenceResultShape', ],
            ],
        ],
        'UpdateServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServicesResultShape', ],
            ],
        ],
        'UpdateServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateInferenceServiceSpec' =>  [ 'shape' => 'UpdateInferenceServiceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'serviceName' => [ 'type' => 'string', 'locationName' => 'serviceName', ],
            ],
        ],
        'DeleteInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteInferenceResultShape', ],
            ],
        ],
        'DescribeInferencePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'failedFirst' => [ 'type' => 'boolean', 'locationName' => 'failedFirst', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DescribeInferencesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferencesResultShape', ],
            ],
        ],
        'StartInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DeleteServiceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteServiceResultShape', ],
            ],
        ],
        'DescribeInferencesResultShape' => [
            'type' => 'structure',
            'members' => [
                'inferences' => [ 'type' => 'list', 'member' => [ 'shape' => 'InferenceData', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateInferenceScaleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'inferenceScaleSpec' =>  [ 'shape' => 'InferenceScaleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
            ],
        ],
        'DeleteServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PatchClusterNodeLabelsRequest' => [
            'type' => 'structure',
            'members' => [
                'nodeLabels' => [ 'type' => 'list', 'member' => [ 'shape' => 'PatchNodeLabels', ], ],
            ],
        ],
        'NodePatchLabelsResult' => [
            'type' => 'structure',
            'members' => [
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'errMsg' => [ 'type' => 'string', 'locationName' => 'errMsg', ],
                'isSuccess' => [ 'type' => 'boolean', 'locationName' => 'isSuccess', ],
            ],
        ],
        'PatchClusterNodeLabelsResult' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodePatchLabelsResult', ], ],
            ],
        ],
        'ListClusterNodeLabelsResult' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'labels' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeLabelKeyValues', ], ],
            ],
        ],
        'DescribeNodeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'nodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeInstance', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNodeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeNodeInstancesResultShape', ],
            ],
        ],
        'DescribeNodeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TaskIdsResult' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
            ],
        ],
        'DeviceModelsResult' => [
            'type' => 'structure',
            'members' => [
                'deviceModels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
            ],
        ],
        'SchedulingPolicyResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'data' =>  [ 'shape' => 'SchedulingPolicy', ],
            ],
        ],
        'FragmentStatsResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'FragmentStatsDetail', ], ],
            ],
        ],
        'NodePoolDeviceOverviewResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceStatsDetail', ], ],
            ],
        ],
        'StatsResult' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatsDetail', ], ],
            ],
        ],
        'CalculateTaskResourceRequest' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'subTaskFlavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubTaskFlavors', ], ],
            ],
        ],
        'ListMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ListMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListMetricsResultShape', ],
                'error' =>  [ 'shape' => 'ListMetricsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metrics', ], ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DescribeModelVersionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'versionResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelVersionInfo', ], ],
            ],
        ],
        'DescribePublicModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'CreateModelResultShape' => [
            'type' => 'structure',
            'members' => [
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'UpdateModelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePublicModelsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribeAdminPublicModelsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeModelVersionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeModelVersionsResultShape', ],
            ],
        ],
        'DescribeModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeModelVersionResultShape', ],
            ],
        ],
        'DescribeAdminPublicModelsResultShape' => [
            'type' => 'structure',
            'members' => [
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelsPublic', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateModelResultShape', ],
            ],
        ],
        'CreateModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modelSpec' =>  [ 'shape' => 'ModelSpecPrivate', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateModelResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePrivateModelsResultShape' => [
            'type' => 'structure',
            'members' => [
                'modelsPrivate' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelsPrivate', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePrivateModelsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribePublicModelVersionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribePublicModelVersionResultShape', ],
            ],
        ],
        'DeleteModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteModelResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'versionResult' =>  [ 'shape' => 'ModelVersionInfo', ],
            ],
        ],
        'UpdateModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateModelSpec' =>  [ 'shape' => 'UpdateModelParm', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
            ],
        ],
        'DescribeModelVersionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
            ],
        ],
        'DescribeAdminPublicModelsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAdminPublicModelsResultShape', ],
            ],
        ],
        'DeleteModelRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
            ],
        ],
        'UpdateModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateModelVersionSpec' =>  [ 'shape' => 'UpdateModelVersionParm', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribePublicModelsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribePublicModelsResultShape', ],
            ],
        ],
        'DescribePublicModelsResultShape' => [
            'type' => 'structure',
            'members' => [
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelsPublic', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeModelVersionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'DescribePrivateModelsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribePrivateModelsResultShape', ],
            ],
        ],
        'DescribePublicModelVersionResultShape' => [
            'type' => 'structure',
            'members' => [
                'versionResult' =>  [ 'shape' => 'PublicModelVersionInfo', ],
            ],
        ],
        'DescribeNotebookResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeNotebookResultShape', ],
            ],
        ],
        'DeleteNotebookRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'StopNotebookResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateNotebookLogCollectConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopNotebookResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateNotebookRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'notebookSpec' =>  [ 'shape' => 'NotebookSpec', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DeleteNotebookResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopNotebookRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'UpdateResourcePropertiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateResourcePropertiesParam' =>  [ 'shape' => 'UpdateResourcePropertiesParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
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
        'SaveImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'imageSpec' =>  [ 'shape' => 'ImageSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'UpdateResourcePropertiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImageTasksResultShape', ],
            ],
        ],
        'CreateNotebookLogCollectConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNotebooksResultShape' => [
            'type' => 'structure',
            'members' => [
                'notebooks' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookInfo', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeNotebookCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeImageTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageTask', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateNotebookResultShape' => [
            'type' => 'structure',
            'members' => [
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'DeleteNotebookLogCollectConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteNotebookLogCollectConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'DeleteImageTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SaveImageResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DeleteImageTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateNotebookRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'permission' => [ 'type' => 'string', 'locationName' => 'permission', ],
                'ownerUserPin' => [ 'type' => 'string', 'locationName' => 'ownerUserPin', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'DescribeNotebookRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'StartNotebookRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workloadSpec' =>  [ 'shape' => 'WorkloadSpec', ],
                'lbSpec' =>  [ 'shape' => 'LbSpec', ],
                'removeLb' => [ 'type' => 'boolean', 'locationName' => 'removeLb', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'UpdateResourcePropertiesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateNotebookResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateNotebookResultShape', ],
            ],
        ],
        'GetNotebookEventsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'CreateNotebookLogCollectConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'logCollectConfig' =>  [ 'shape' => 'LogCollectConfig', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'UpdateNotebookResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartNotebookResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNotebookCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'stateCount' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookStateCount', ], ],
            ],
        ],
        'DeleteNotebookLogCollectConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNotebooksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeNotebooksResultShape', ],
            ],
        ],
        'StartNotebookResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeImageTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'DeleteNotebookResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeNotebooksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'NbTagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeNotebookResultShape' => [
            'type' => 'structure',
            'members' => [
                'notebook' =>  [ 'shape' => 'NotebookDetail', ],
            ],
        ],
        'GetNotebookEventsResultShape' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookEvent', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetNotebookPodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetNotebookPodsResultShape', ],
            ],
        ],
        'GetNotebookPodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
            ],
        ],
        'SaveImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SaveImageResultShape', ],
            ],
        ],
        'UpdateNotebookResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeNotebookCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeNotebookCountResultShape', ],
            ],
        ],
        'DeleteImageTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetNotebookPodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotebookPod', ], ],
            ],
        ],
        'GetNotebookEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetNotebookEventsResultShape', ],
            ],
        ],
        'DeleteCodeRepoConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCodeRepoConfigsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeCodeRepoConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCodeRepoConfigResultShape', ],
            ],
        ],
        'UpdateCodeRepoConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateCodeRepoConfigParam' =>  [ 'shape' => 'UpdateCodeRepoConfigParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
            ],
        ],
        'CreateCodeRepoConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
            ],
        ],
        'UpdateCodeRepoConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCodeRepoConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateCodeRepoConfigResultShape', ],
            ],
        ],
        'UpdateCodeRepoConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCodeRepoConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'codeRepoConfig' =>  [ 'shape' => 'CodeRepoConfigInfo', ],
            ],
        ],
        'DeleteCodeRepoConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
            ],
        ],
        'DeleteCodeRepoConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCodeRepoConfigsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCodeRepoConfigsResultShape', ],
            ],
        ],
        'DescribeCodeRepoConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'repoId' => [ 'type' => 'string', 'locationName' => 'repoId', ],
            ],
        ],
        'DescribeCodeRepoConfigsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeRepoConfigInfo', ], ],
            ],
        ],
        'CreateCodeRepoConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createCodeRepoConfigParam' =>  [ 'shape' => 'CreateCodeRepoConfigParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'CreateTensorBoardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateTensorBoardResultShape', ],
            ],
        ],
        'DescribeTensorBoardsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTensorBoardsResultShape', ],
            ],
        ],
        'StartTensorBoardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'tensorBoardId' => [ 'type' => 'string', 'locationName' => 'tensorBoardId', ],
            ],
        ],
        'DescribeTensorBoardsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tensorBoards' => [ 'type' => 'list', 'member' => [ 'shape' => 'TensorBoardInfo', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'StopTensorBoardResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteTensorBoardResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartTensorBoardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StopTensorBoardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'tensorBoardId' => [ 'type' => 'string', 'locationName' => 'tensorBoardId', ],
            ],
        ],
        'DeleteTensorBoardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'tensorBoardId' => [ 'type' => 'string', 'locationName' => 'tensorBoardId', ],
            ],
        ],
        'DescribeTensorBoardsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'CreateTensorBoardResultShape' => [
            'type' => 'structure',
            'members' => [
                'tensorBoardId' => [ 'type' => 'string', 'locationName' => 'tensorBoardId', ],
            ],
        ],
        'CreateTensorBoardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'tensorBoardSpec' =>  [ 'shape' => 'TensorBoardSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'StopTensorBoardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteTensorBoardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartTensorBoardResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWorkspaceResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'resourceInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'BoundResourceInfo', ], ],
            ],
        ],
        'AddQueuesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddQueuesResultShape', ],
            ],
        ],
        'CreateWorkspaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateWorkspaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDesc' => [ 'type' => 'string', 'locationName' => 'workspaceDesc', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'AddQueuesResultShape' => [
            'type' => 'structure',
            'members' => [
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RemoveQueuesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UnbindWorkspaceResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBindWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWorkspaceResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWorkspaceResourcesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBindWorkspaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindResourceInfo', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UnbindWorkspaceResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RemoveQueuesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UnbindWorkspaceResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceIdVals' => [ 'type' => 'string', 'locationName' => 'resourceIdVals', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateWorkspaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RemoveQueuesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWorkspaceResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourceIdVals' => [ 'type' => 'string', 'locationName' => 'resourceIdVals', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateWorkspaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceSpec' =>  [ 'shape' => 'WorkspaceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddQueuesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'queueConfigs' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceRelatedQueue', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'CreateWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateWorkspaceResultShape', ],
            ],
        ],
        'CreateBindWorkspaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
