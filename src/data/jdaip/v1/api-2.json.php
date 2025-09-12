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
        'DeleteService' => [
            'name' => 'DeleteService',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/infer-regions/{regionId}/workspace/{workspaceId}/services/{serviceName}',
            ],
            'input' => [ 'shape' => 'DeleteServiceRequestShape', ],
            'output' => [ 'shape' => 'DeleteServiceResponseShape', ],
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
        'GetNotebookLogs' => [
            'name' => 'GetNotebookLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/pod/{podName}:logs',
            ],
            'input' => [ 'shape' => 'GetNotebookLogsRequestShape', ],
            'output' => [ 'shape' => 'GetNotebookLogsResponseShape', ],
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
        'DescribeImageTaskLog' => [
            'name' => 'DescribeImageTaskLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/nb-regions/{regionId}/workspace/{workspaceId}/notebook/{notebookId}/imageTask/{taskId}/log',
            ],
            'input' => [ 'shape' => 'DescribeImageTaskLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageTaskLogResponseShape', ],
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
        'CreateWorkspace' => [
            'name' => 'CreateWorkspace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace',
            ],
            'input' => [ 'shape' => 'CreateWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'CreateWorkspaceResponseShape', ],
        ],
        'DescribeWorkspaces' => [
            'name' => 'DescribeWorkspaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ws-regions/{regionId}/workspaces',
            ],
            'input' => [ 'shape' => 'DescribeWorkspacesRequestShape', ],
            'output' => [ 'shape' => 'DescribeWorkspacesResponseShape', ],
        ],
        'DescribeWorkspace' => [
            'name' => 'DescribeWorkspace',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}',
            ],
            'input' => [ 'shape' => 'DescribeWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'DescribeWorkspaceResponseShape', ],
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
        'DeleteWorkspace' => [
            'name' => 'DeleteWorkspace',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}',
            ],
            'input' => [ 'shape' => 'DeleteWorkspaceRequestShape', ],
            'output' => [ 'shape' => 'DeleteWorkspaceResponseShape', ],
        ],
        'DescribeMembers' => [
            'name' => 'DescribeMembers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/members',
            ],
            'input' => [ 'shape' => 'DescribeMembersRequestShape', ],
            'output' => [ 'shape' => 'DescribeMembersResponseShape', ],
        ],
        'AddMembers' => [
            'name' => 'AddMembers',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/members',
            ],
            'input' => [ 'shape' => 'AddMembersRequestShape', ],
            'output' => [ 'shape' => 'AddMembersResponseShape', ],
        ],
        'UpdateMembers' => [
            'name' => 'UpdateMembers',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/members',
            ],
            'input' => [ 'shape' => 'UpdateMembersRequestShape', ],
            'output' => [ 'shape' => 'UpdateMembersResponseShape', ],
        ],
        'RemoveMembers' => [
            'name' => 'RemoveMembers',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/ws-regions/{regionId}/workspace/{workspaceId}/members',
            ],
            'input' => [ 'shape' => 'RemoveMembersRequestShape', ],
            'output' => [ 'shape' => 'RemoveMembersResponseShape', ],
        ],
        'DescribeQueueIds' => [
            'name' => 'DescribeQueueIds',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ws-regions/{regionId}/queueIds',
            ],
            'input' => [ 'shape' => 'DescribeQueueIdsRequestShape', ],
            'output' => [ 'shape' => 'DescribeQueueIdsResponseShape', ],
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
    ],
    'shapes' => [
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
            ],
        ],
        'JobStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
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
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ResourceParam' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'gpuDeviceModel' => [ 'type' => 'string', 'locationName' => 'gpuDeviceModel', ],
                'vcudaCore' => [ 'type' => 'decimal', 'locationName' => 'vcudaCore', ],
                'cpuMilli' => [ 'type' => 'integer', 'locationName' => 'cpuMilli', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
            ],
        ],
        'EventInfoList' => [
            'type' => 'structure',
            'members' => [
                'eventType' => [ 'type' => 'string', 'locationName' => 'eventType', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'eventTime' => [ 'type' => 'string', 'locationName' => 'eventTime', ],
            ],
        ],
        'PodInfo' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'terminalUrl' => [ 'type' => 'string', 'locationName' => 'terminalUrl', ],
            ],
        ],
        'DatasetParam' => [
            'type' => 'structure',
            'members' => [
                'datasetVisibility' => [ 'type' => 'string', 'locationName' => 'datasetVisibility', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'ModelParam' => [
            'type' => 'structure',
            'members' => [
                'modelVisibility' => [ 'type' => 'string', 'locationName' => 'modelVisibility', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'StorageSpaceParam' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'oss' =>  [ 'shape' => 'OssParam', ],
                'cfs' =>  [ 'shape' => 'CfsParam', ],
                'jpfs' =>  [ 'shape' => 'JpfsParam', ],
            ],
        ],
        'CfsParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'OssParam' => [
            'type' => 'structure',
            'members' => [
                'endpoint' => [ 'type' => 'string', 'locationName' => 'endpoint', ],
                'bucket' => [ 'type' => 'string', 'locationName' => 'bucket', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
            ],
        ],
        'JobDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'imageVisibility' => [ 'type' => 'string', 'locationName' => 'imageVisibility', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
                'imageNameSnapshot' => [ 'type' => 'string', 'locationName' => 'imageNameSnapshot', ],
                'imageUrlSnapshot' => [ 'type' => 'string', 'locationName' => 'imageUrlSnapshot', ],
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'replica' => [ 'type' => 'integer', 'locationName' => 'replica', ],
                'resource' =>  [ 'shape' => 'ResourceParam', ],
                'storageSpaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpaceParam', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetResult', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelResult', ], ],
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodInfo', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'JobListInfo' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'jobType' => [ 'type' => 'string', 'locationName' => 'jobType', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'JpfsParam' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'sourcePath' => [ 'type' => 'string', 'locationName' => 'sourcePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
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
                'resource' =>  [ 'shape' => 'ResourceParam', ],
                'storageSpaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpaceParam', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParam', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelParam', ], ],
            ],
        ],
        'RunDetailInfo' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigParam', ],
                'evalDatasetSource' => [ 'type' => 'string', 'locationName' => 'evalDatasetSource', ],
                'evalDatasetSplitRatio' => [ 'type' => 'decimal', 'locationName' => 'evalDatasetSplitRatio', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParam', ], ],
                'resource' =>  [ 'shape' => 'ResourceParam', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParam', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodInfo', ], ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigParam', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParam', ], ],
                'resource' =>  [ 'shape' => 'ResourceParam', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParam', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'FinetuningConfigParam' => [
            'type' => 'structure',
            'members' => [
                'stage' => [ 'type' => 'string', 'locationName' => 'stage', ],
                'finetuningType' => [ 'type' => 'string', 'locationName' => 'finetuningType', ],
                'runConfigExtras' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunConfigExtraParam', ], ],
            ],
        ],
        'RunConfigInfo' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RunConfigExtraInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'defaultValue' => [ 'type' => 'string', 'locationName' => 'defaultValue', ],
            ],
        ],
        'RunConfigExtraParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'paramType' => [ 'type' => 'string', 'locationName' => 'paramType', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'RunListInfo' => [
            'type' => 'structure',
            'members' => [
                'runId' => [ 'type' => 'string', 'locationName' => 'runId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'finetuningConfig' =>  [ 'shape' => 'FinetuningConfigParam', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParam', ], ],
                'resource' =>  [ 'shape' => 'ResourceParam', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParam', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'runningTimeInSec' => [ 'type' => 'integer', 'locationName' => 'runningTimeInSec', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'FinetuningTypeInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RunParam' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'finetuningConfig' => [ 'type' => 'object', 'locationName' => 'finetuningConfig', ],
                'evalDatasetSource' => [ 'type' => 'string', 'locationName' => 'evalDatasetSource', ],
                'evalDatasetSplitRatio' => [ 'type' => 'decimal', 'locationName' => 'evalDatasetSplitRatio', ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetParam', ], ],
                'resource' =>  [ 'shape' => 'ResourceParam', ],
                'storageSpace' =>  [ 'shape' => 'StorageSpaceParam', ],
            ],
        ],
        'StageInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RunStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
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
                'storageBucket' => [ 'type' => 'string', 'locationName' => 'storageBucket', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'labels' => [ 'type' => 'string', 'locationName' => 'labels', ],
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
            ],
        ],
        'UpdateDatasetParam' => [
            'type' => 'structure',
            'members' => [
                'datasetName' => [ 'type' => 'string', 'locationName' => 'datasetName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'dependencyCmd' => [ 'type' => 'string', 'locationName' => 'dependencyCmd', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'jobName' => [ 'type' => 'string', 'locationName' => 'jobName', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
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
                'baseImage' => [ 'type' => 'string', 'locationName' => 'baseImage', ],
                'dockerfile' => [ 'type' => 'string', 'locationName' => 'dockerfile', ],
                'dependencyCmd' => [ 'type' => 'string', 'locationName' => 'dependencyCmd', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
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
                'accessToken' => [ 'type' => 'string', 'locationName' => 'accessToken', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
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
            ],
        ],
        'InferenceStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'TrafficInfo' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'trafficPercent' => [ 'type' => 'integer', 'locationName' => 'trafficPercent', ],
            ],
        ],
        'Event' => [
            'type' => 'structure',
            'members' => [
                'creatTime' => [ 'type' => 'string', 'locationName' => 'creatTime', ],
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
            ],
        ],
        'AdminInferenceInfo' => [
            'type' => 'structure',
            'members' => [
                'inferenceId' => [ 'type' => 'string', 'locationName' => 'inferenceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'appType' => [ 'type' => 'string', 'locationName' => 'appType', ],
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
            ],
        ],
        'ScaleInfo' => [
            'type' => 'structure',
            'members' => [
                'replicas' => [ 'type' => 'integer', 'locationName' => 'replicas', ],
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
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memory' => [ 'type' => 'integer', 'locationName' => 'memory', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'deviceMemory' => [ 'type' => 'integer', 'locationName' => 'deviceMemory', ],
                'vcudaCore' => [ 'type' => 'string', 'locationName' => 'vcudaCore', ],
                'vcudaMemory' => [ 'type' => 'string', 'locationName' => 'vcudaMemory', ],
                'vcudaRatio' => [ 'type' => 'string', 'locationName' => 'vcudaRatio', ],
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
                'service' =>  [ 'shape' => 'ServiceInfo', ],
                'metadata' =>  [ 'shape' => 'Metadata', ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
            ],
        ],
        'Runtime' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'env' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'imageUrl' => [ 'type' => 'string', 'locationName' => 'imageUrl', ],
                'imageSource' => [ 'type' => 'string', 'locationName' => 'imageSource', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'vpcProto' => [ 'type' => 'string', 'locationName' => 'vpcProto', ],
                'protoLevel' => [ 'type' => 'integer', 'locationName' => 'protoLevel', ],
                'vpcAccess' => [ 'type' => 'boolean', 'locationName' => 'vpcAccess', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
                'smartRouter' => [ 'type' => 'boolean', 'locationName' => 'smartRouter', ],
            ],
        ],
        'UpdateInfo' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
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
        'SecurityGroupSpec' => [
            'type' => 'structure',
            'members' => [
                'securityGroupId' => [ 'type' => 'string', 'locationName' => 'securityGroupId', ],
            ],
        ],
        'CniAddon' => [
            'type' => 'structure',
            'members' => [
                'installed' => [ 'type' => 'boolean', 'locationName' => 'installed', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'SubnetSpec' => [
            'type' => 'structure',
            'members' => [
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'extraArgs' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'routeTableId' => [ 'type' => 'string', 'locationName' => 'routeTableId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'ClusterNetwork' => [
            'type' => 'structure',
            'members' => [
                'apiServerPort' => [ 'type' => 'integer', 'locationName' => 'apiServerPort', ],
                'dnsDomain' => [ 'type' => 'string', 'locationName' => 'dnsDomain', ],
                'dualStack' => [ 'type' => 'boolean', 'locationName' => 'dualStack', ],
                'podSubnet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceNodePort' => [ 'type' => 'string', 'locationName' => 'serviceNodePort', ],
                'serviceSubnet' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NatGatewaySpec' => [
            'type' => 'structure',
            'members' => [
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'extraArgs' => [ 'type' => 'string', 'locationName' => 'extraArgs', ],
                'natGatewayId' => [ 'type' => 'string', 'locationName' => 'natGatewayId', ],
                'autoCreate' => [ 'type' => 'boolean', 'locationName' => 'autoCreate', ],
                'securityGroup' =>  [ 'shape' => 'SecurityGroupSpec', ],
                'subnet' =>  [ 'shape' => 'SubnetSpec', ],
            ],
        ],
        'Network' => [
            'type' => 'structure',
            'members' => [
                'machineSubnet' =>  [ 'shape' => 'SubnetSpec', ],
                'natGateway' =>  [ 'shape' => 'NatGatewaySpec', ],
                'podSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetSpec', ], ],
                'securityGroup' =>  [ 'shape' => 'SecurityGroupSpec', ],
                'vpc' =>  [ 'shape' => 'VpcSpec', ],
            ],
        ],
        'ClusterNetworkInfo' => [
            'type' => 'structure',
            'members' => [
                'cni' =>  [ 'shape' => 'CniAddon', ],
                'clusterNetwork' =>  [ 'shape' => 'ClusterNetwork', ],
                'cloudNetwork' =>  [ 'shape' => 'Network', ],
            ],
        ],
        'VpcSpec' => [
            'type' => 'structure',
            'members' => [
                'cidrBlock' => [ 'type' => 'string', 'locationName' => 'cidrBlock', ],
                'extraArgs' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'Node' => [
            'type' => 'structure',
            'members' => [
                'nodePoolId' => [ 'type' => 'string', 'locationName' => 'nodePoolId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'clusterId' => [ 'type' => 'string', 'locationName' => 'clusterId', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CpuQuota' => [
            'type' => 'structure',
            'members' => [
                'cpu' =>  [ 'shape' => 'Quota', ],
                'memory' =>  [ 'shape' => 'Quota', ],
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
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'rdma' => [ 'type' => 'boolean', 'locationName' => 'rdma', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'gpuQuotas' => [ 'type' => 'list', 'member' => [ 'shape' => 'GpuQuota', ], ],
                'cpuQuota' =>  [ 'shape' => 'CpuQuota', ],
                'cluster' =>  [ 'shape' => 'Cluster', ],
            ],
        ],
        'Disk' => [
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
        'GpuQuota' => [
            'type' => 'structure',
            'members' => [
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'gpu' =>  [ 'shape' => 'Quota', ],
                'vgpu' =>  [ 'shape' => 'Quota', ],
                'deviceMemory' => [ 'type' => 'long', 'locationName' => 'deviceMemory', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'used' => [ 'type' => 'double', 'locationName' => 'used', ],
                'reserve' => [ 'type' => 'double', 'locationName' => 'reserve', ],
                'min' => [ 'type' => 'double', 'locationName' => 'min', ],
                'max' => [ 'type' => 'double', 'locationName' => 'max', ],
            ],
        ],
        'NodePoolNetWork' => [
            'type' => 'structure',
            'members' => [
                'podSubnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetSpec', ], ],
                'nodeSubnet' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetSpec', ], ],
                'serviceSubnet' =>  [ 'shape' => 'SubnetSpec', ],
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
        'Metrics' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
            ],
        ],
        'UpdateModelParm' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'UpdatePublicModelParm' => [
            'type' => 'structure',
            'members' => [
                'modelName' => [ 'type' => 'string', 'locationName' => 'modelName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
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
                'modelIntroduction' => [ 'type' => 'string', 'locationName' => 'modelIntroduction', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
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
        'ModelSpecPrivate' => [
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
                'basicModelId' => [ 'type' => 'string', 'locationName' => 'basicModelId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
                'experimentRunId' => [ 'type' => 'string', 'locationName' => 'experimentRunId', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
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
            ],
        ],
        'UpdateModelVersionParm' => [
            'type' => 'structure',
            'members' => [
                'versionDesc' => [ 'type' => 'string', 'locationName' => 'versionDesc', ],
            ],
        ],
        'ResourceOverview' => [
            'type' => 'structure',
            'members' => [
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'allocate' => [ 'type' => 'integer', 'locationName' => 'allocate', ],
                'totalAllocateRate' => [ 'type' => 'string', 'locationName' => 'totalAllocateRate', ],
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
        'ResourceLogicOverview' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'allocate' => [ 'type' => 'integer', 'locationName' => 'allocate', ],
                'rate' => [ 'type' => 'string', 'locationName' => 'rate', ],
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
        'StorageSpec' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'storageId' => [ 'type' => 'string', 'locationName' => 'storageId', ],
                'storagePath' => [ 'type' => 'string', 'locationName' => 'storagePath', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
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
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
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
                'workload' =>  [ 'shape' => 'WorkloadSpec', ],
                'lb' =>  [ 'shape' => 'LbSpec', ],
                'storages' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageSpec', ], ],
                'datasets' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetSpec', ], ],
                'models' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelSpec', ], ],
            ],
        ],
        'ModelSpec' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageName' => [ 'type' => 'string', 'locationName' => 'storageName', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'modelUrl' => [ 'type' => 'string', 'locationName' => 'modelUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
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
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'updateUserPin' => [ 'type' => 'string', 'locationName' => 'updateUserPin', ],
                'updateUser' => [ 'type' => 'string', 'locationName' => 'updateUser', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'DatasetSpec' => [
            'type' => 'structure',
            'members' => [
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
                'storageName' => [ 'type' => 'string', 'locationName' => 'storageName', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'datasetUrl' => [ 'type' => 'string', 'locationName' => 'datasetUrl', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
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
            ],
        ],
        'LbSpec' => [
            'type' => 'structure',
            'members' => [
                'lbId' => [ 'type' => 'string', 'locationName' => 'lbId', ],
                'lbPort' => [ 'type' => 'integer', 'locationName' => 'lbPort', ],
            ],
        ],
        'WorkloadSpec' => [
            'type' => 'structure',
            'members' => [
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
                'cpuM' => [ 'type' => 'integer', 'locationName' => 'cpuM', ],
                'memoryMiB' => [ 'type' => 'integer', 'locationName' => 'memoryMiB', ],
                'deviceModel' => [ 'type' => 'string', 'locationName' => 'deviceModel', ],
                'vcudaCore' => [ 'type' => 'string', 'locationName' => 'vcudaCore', ],
                'vcudaMemory' => [ 'type' => 'integer', 'locationName' => 'vcudaMemory', ],
                'vcudaRatio' => [ 'type' => 'integer', 'locationName' => 'vcudaRatio', ],
            ],
        ],
        'NotebookStateCount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
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
                'state' => [ 'type' => 'string', 'locationName' => 'state', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
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
                'workload' =>  [ 'shape' => 'WorkloadSpec', ],
                'lb' =>  [ 'shape' => 'LbSpec', ],
            ],
        ],
        'AdminQueue' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
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
        'AdminCreatePublicQueueParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'queueId' => [ 'type' => 'string', 'locationName' => 'queueId', ],
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
        'WorkspaceMember' => [
            'type' => 'structure',
            'members' => [
                'memberUser' => [ 'type' => 'string', 'locationName' => 'memberUser', ],
                'memberRole' => [ 'type' => 'string', 'locationName' => 'memberRole', ],
                'memberPin' => [ 'type' => 'string', 'locationName' => 'memberPin', ],
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
            ],
        ],
        'WorkspaceSpec' => [
            'type' => 'structure',
            'members' => [
                'workspaceName' => [ 'type' => 'string', 'locationName' => 'workspaceName', ],
                'workspaceDesc' => [ 'type' => 'string', 'locationName' => 'workspaceDesc', ],
                'resourceQueue' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'workspaceMember' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceMember', ], ],
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
                'jobDetailInfo' =>  [ 'shape' => 'JobDetailInfo', ],
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
                'eventInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventInfoList', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DatasetResult' => [
            'type' => 'structure',
            'members' => [
                'datasetVisibility' => [ 'type' => 'string', 'locationName' => 'datasetVisibility', ],
                'datasetId' => [ 'type' => 'string', 'locationName' => 'datasetId', ],
                'datasetVersion' => [ 'type' => 'string', 'locationName' => 'datasetVersion', ],
                'storage' =>  [ 'shape' => 'StorageSpaceParam', ],
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
        'ModelResult' => [
            'type' => 'structure',
            'members' => [
                'modelVisibility' => [ 'type' => 'string', 'locationName' => 'modelVisibility', ],
                'modelId' => [ 'type' => 'string', 'locationName' => 'modelId', ],
                'modelVersion' => [ 'type' => 'string', 'locationName' => 'modelVersion', ],
                'storage' =>  [ 'shape' => 'StorageSpaceParam', ],
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
                'jobListInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobListInfo', ], ],
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
        'GetPodLogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobParam' =>  [ 'shape' => 'JobParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
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
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'GetPodLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
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
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'jobId' => [ 'type' => 'string', 'locationName' => 'jobId', ],
            ],
        ],
        'GetJobEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetJobEventsResultShape', ],
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
                'runEventInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventInfoList', ], ],
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
                'runParam' =>  [ 'shape' => 'RunParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'experimentId' => [ 'type' => 'string', 'locationName' => 'experimentId', ],
            ],
        ],
        'DescribeRunsResultShape' => [
            'type' => 'structure',
            'members' => [
                'runListInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunListInfo', ], ],
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
                'runDetailInfo' =>  [ 'shape' => 'RunDetailInfo', ],
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
        'DescribeImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'imageId' => [ 'type' => 'string', 'locationName' => 'imageId', ],
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
        'DescribeImagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImagesResultShape', ],
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
        'DescribeImageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImageResultShape', ],
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
        'CreateImageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createImageSpec' =>  [ 'shape' => 'CreateImageParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
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
        'DeleteServiceRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateInferenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'inferenceSpec' =>  [ 'shape' => 'InferenceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeInferencesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferencesResultShape', ],
            ],
        ],
        'CreateInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInferenceResultShape', ],
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
        'UpdateInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'runtime' =>  [ 'shape' => 'Runtime', ],
            ],
        ],
        'UpdateInferenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateInferenceResultShape', ],
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
        'StopInferenceRequestShape' => [
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
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'createUser' => [ 'type' => 'string', 'locationName' => 'createUser', ],
                'createUserPin' => [ 'type' => 'string', 'locationName' => 'createUserPin', ],
            ],
        ],
        'DescribeInferencesResultShape' => [
            'type' => 'structure',
            'members' => [
                'inferences' => [ 'type' => 'list', 'member' => [ 'shape' => 'InferenceData', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
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
        'DescribeInferenceEventsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInferenceEventsResultShape', ],
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
        'DescribeServicesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServicesResultShape', ],
            ],
        ],
        'DeleteServiceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartInferenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'versionResult' =>  [ 'shape' => 'ModelVersionInfo', ],
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
        'GetNotebookLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeImageTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImageTasksResultShape', ],
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
        'DeleteImageTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'GetNotebookLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tail' => [ 'type' => 'integer', 'locationName' => 'tail', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
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
        'DescribeImageTaskLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
                'notebookId' => [ 'type' => 'string', 'locationName' => 'notebookId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
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
        'GetNotebookLogsResultShape' => [
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
        'DescribeImageTaskLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'log' => [ 'type' => 'string', 'locationName' => 'log', ],
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
        'DescribeImageTaskLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeImageTaskLogResultShape', ],
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
        'DeleteWorkspaceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWorkspaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'workspaceInfo' =>  [ 'shape' => 'WorkspaceInfoWithRole', ],
            ],
        ],
        'DescribeWorkspacesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeWorkspacesResultShape', ],
            ],
        ],
        'AddMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'members' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceMember', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateMembersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWorkspaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeWorkspacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DeleteWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'RemoveMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQueueIdsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeQueueIdsResultShape', ],
            ],
        ],
        'UpdateWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWorkspaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeQueueIdsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'workspace' => [ 'type' => 'string', 'locationName' => 'workspace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RemoveMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memberUsers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateMembersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'memberUser' => [ 'type' => 'string', 'locationName' => 'memberUser', ],
                'memberRole' => [ 'type' => 'string', 'locationName' => 'memberRole', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'UpdateMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWorkspacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'workspaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceInfoWithoutRole', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'RemoveMembersResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'members' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceMember', ], ],
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
        'AddMembersResultShape' => [
            'type' => 'structure',
            'members' => [
                'members' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceMember', ], ],
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
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'workspaceId' => [ 'type' => 'string', 'locationName' => 'workspaceId', ],
            ],
        ],
        'DescribeWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeWorkspaceResultShape', ],
            ],
        ],
        'DescribeQueueIdsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'queueIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateWorkspaceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateWorkspaceResultShape', ],
            ],
        ],
        'DescribeMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMembersResultShape', ],
            ],
        ],
        'AddMembersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddMembersResultShape', ],
            ],
        ],
    ],
];
