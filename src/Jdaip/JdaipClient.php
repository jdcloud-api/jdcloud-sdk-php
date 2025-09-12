<?php
/**
 * Jdaip
 *
 * @category Jdcloud
 * @package  Jdcloud\Jdaip
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jdaip;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jdaip.
 *
 * @method \Jdcloud\Result describeExperiments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExperimentsAsync(array $args = [])
 * @method \Jdcloud\Result createExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExperimentAsync(array $args = [])
 * @method \Jdcloud\Result describeExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExperimentAsync(array $args = [])
 * @method \Jdcloud\Result updateExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateExperimentAsync(array $args = [])
 * @method \Jdcloud\Result deleteExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteExperimentAsync(array $args = [])
 * @method \Jdcloud\Result describeJobTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \Jdcloud\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Jdcloud\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Jdcloud\Result stopJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopJobAsync(array $args = [])
 * @method \Jdcloud\Result getJobEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobEventsAsync(array $args = [])
 * @method \Jdcloud\Result getPodLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPodLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeRunConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRunConfigsAsync(array $args = [])
 * @method \Jdcloud\Result describeRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRunsAsync(array $args = [])
 * @method \Jdcloud\Result createRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRunAsync(array $args = [])
 * @method \Jdcloud\Result describeRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRunAsync(array $args = [])
 * @method \Jdcloud\Result updateRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRunAsync(array $args = [])
 * @method \Jdcloud\Result deleteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRunAsync(array $args = [])
 * @method \Jdcloud\Result stopRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRunAsync(array $args = [])
 * @method \Jdcloud\Result getRunEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRunEventsAsync(array $args = [])
 * @method \Jdcloud\Result getPodLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPodLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetsAsync(array $args = [])
 * @method \Jdcloud\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \Jdcloud\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \Jdcloud\Result updateDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatasetAsync(array $args = [])
 * @method \Jdcloud\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \Jdcloud\Result describeDatasetVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetVersionsAsync(array $args = [])
 * @method \Jdcloud\Result describeDatasetVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetVersionAsync(array $args = [])
 * @method \Jdcloud\Result updateDatasetVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatasetVersionAsync(array $args = [])
 * @method \Jdcloud\Result deleteDatasetVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetVersionAsync(array $args = [])
 * @method \Jdcloud\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Jdcloud\Result createImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageAsync(array $args = [])
 * @method \Jdcloud\Result describeImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageAsync(array $args = [])
 * @method \Jdcloud\Result deleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageAsync(array $args = [])
 * @method \Jdcloud\Result getPodLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPodLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeInferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInferencesAsync(array $args = [])
 * @method \Jdcloud\Result createInference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInferenceAsync(array $args = [])
 * @method \Jdcloud\Result describeInference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInferenceAsync(array $args = [])
 * @method \Jdcloud\Result updateInference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInferenceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInferenceAsync(array $args = [])
 * @method \Jdcloud\Result startInference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInferenceAsync(array $args = [])
 * @method \Jdcloud\Result stopInference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInferenceAsync(array $args = [])
 * @method \Jdcloud\Result describeInferenceEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInferenceEventsAsync(array $args = [])
 * @method \Jdcloud\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \Jdcloud\Result describeService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceAsync(array $args = [])
 * @method \Jdcloud\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \Jdcloud\Result listMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \Jdcloud\Result describePrivateModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePrivateModelsAsync(array $args = [])
 * @method \Jdcloud\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \Jdcloud\Result updateModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelAsync(array $args = [])
 * @method \Jdcloud\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Jdcloud\Result describeModelVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelVersionsAsync(array $args = [])
 * @method \Jdcloud\Result describeModelVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelVersionAsync(array $args = [])
 * @method \Jdcloud\Result updateModelVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelVersionAsync(array $args = [])
 * @method \Jdcloud\Result deleteModelVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelVersionAsync(array $args = [])
 * @method \Jdcloud\Result describePublicModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePublicModelsAsync(array $args = [])
 * @method \Jdcloud\Result describePublicModelVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePublicModelVersionAsync(array $args = [])
 * @method \Jdcloud\Result describeNotebooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotebooksAsync(array $args = [])
 * @method \Jdcloud\Result createNotebook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotebookAsync(array $args = [])
 * @method \Jdcloud\Result describeNotebookCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotebookCountAsync(array $args = [])
 * @method \Jdcloud\Result describeNotebook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotebookAsync(array $args = [])
 * @method \Jdcloud\Result updateNotebook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotebookAsync(array $args = [])
 * @method \Jdcloud\Result deleteNotebook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotebookAsync(array $args = [])
 * @method \Jdcloud\Result startNotebook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startNotebookAsync(array $args = [])
 * @method \Jdcloud\Result stopNotebook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopNotebookAsync(array $args = [])
 * @method \Jdcloud\Result getNotebookEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotebookEventsAsync(array $args = [])
 * @method \Jdcloud\Result getNotebookPods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotebookPodsAsync(array $args = [])
 * @method \Jdcloud\Result getNotebookLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotebookLogsAsync(array $args = [])
 * @method \Jdcloud\Result saveImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise saveImageAsync(array $args = [])
 * @method \Jdcloud\Result describeImageTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageTasksAsync(array $args = [])
 * @method \Jdcloud\Result describeImageTaskLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageTaskLogAsync(array $args = [])
 * @method \Jdcloud\Result deleteImageTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageTaskAsync(array $args = [])
 * @method \Jdcloud\Result createWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceAsync(array $args = [])
 * @method \Jdcloud\Result describeWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \Jdcloud\Result describeWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceAsync(array $args = [])
 * @method \Jdcloud\Result updateWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceAsync(array $args = [])
 * @method \Jdcloud\Result deleteWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceAsync(array $args = [])
 * @method \Jdcloud\Result describeMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMembersAsync(array $args = [])
 * @method \Jdcloud\Result addMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addMembersAsync(array $args = [])
 * @method \Jdcloud\Result updateMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMembersAsync(array $args = [])
 * @method \Jdcloud\Result removeMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeMembersAsync(array $args = [])
 * @method \Jdcloud\Result describeQueueIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQueueIdsAsync(array $args = [])
 * @method \Jdcloud\Result addQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addQueuesAsync(array $args = [])
 * @method \Jdcloud\Result removeQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeQueuesAsync(array $args = [])
 */
class JdaipClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'jdaip',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jdaip'
            );
        };

        parent::__construct($args);
    }
}