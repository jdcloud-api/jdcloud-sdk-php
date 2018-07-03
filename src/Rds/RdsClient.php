<?php
namespace Jdcloud\Rds;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with rds.
 *
 * @method \Jdcloud\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAsync(array $args = [])
 * @method \Jdcloud\Result grantPrivilege(array $args = [])
 * @method \GuzzleHttp\Promise\Promise grantPrivilegeAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Jdcloud\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupDownloadURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupDownloadURLAsync(array $args = [])
 * @method \Jdcloud\Result createDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result deleteDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result restoreDatabaseFromBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDatabaseFromBackupAsync(array $args = [])
 * @method \Jdcloud\Result restoreDatabaseFromFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDatabaseFromFileAsync(array $args = [])
 * @method \Jdcloud\Result describeImportFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImportFilesAsync(array $args = [])
 */
class RdsClient extends JdcloudClient
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
                        'service' => 'rds',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'rds'
            );
        };

        parent::__construct($args);
    }
}