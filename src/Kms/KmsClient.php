<?php
/**
 * Kms
 *
 * @category Jdcloud
 * @package  Jdcloud\Kms
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Kms;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with kms.
 *
 * @method \Jdcloud\Result describeKeyList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyListAsync(array $args = [])
 * @method \Jdcloud\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \Jdcloud\Result describeKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyAsync(array $args = [])
 * @method \Jdcloud\Result updateKeyDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyDescriptionAsync(array $args = [])
 * @method \Jdcloud\Result enableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyAsync(array $args = [])
 * @method \Jdcloud\Result disableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyAsync(array $args = [])
 * @method \Jdcloud\Result scheduleKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleKeyDeletionAsync(array $args = [])
 * @method \Jdcloud\Result cancelKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelKeyDeletionAsync(array $args = [])
 * @method \Jdcloud\Result keyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise keyRotationAsync(array $args = [])
 * @method \Jdcloud\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
 * @method \Jdcloud\Result decrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decryptAsync(array $args = [])
 * @method \Jdcloud\Result getPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPublicKeyAsync(array $args = [])
 * @method \Jdcloud\Result sign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signAsync(array $args = [])
 * @method \Jdcloud\Result validate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateAsync(array $args = [])
 * @method \Jdcloud\Result generateDataKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyAsync(array $args = [])
 * @method \Jdcloud\Result describeKeyDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyDetailAsync(array $args = [])
 * @method \Jdcloud\Result enableKeyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyVersionAsync(array $args = [])
 * @method \Jdcloud\Result disableKeyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyVersionAsync(array $args = [])
 * @method \Jdcloud\Result scheduleKeyVersionDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleKeyVersionDeletionAsync(array $args = [])
 * @method \Jdcloud\Result cancelKeyVersionDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelKeyVersionDeletionAsync(array $args = [])
 * @method \Jdcloud\Result describeSecretList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretListAsync(array $args = [])
 * @method \Jdcloud\Result createSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecretAsync(array $args = [])
 * @method \Jdcloud\Result describeSecretVersionList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretVersionListAsync(array $args = [])
 * @method \Jdcloud\Result updateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretAsync(array $args = [])
 * @method \Jdcloud\Result enableSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSecretAsync(array $args = [])
 * @method \Jdcloud\Result disableSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSecretAsync(array $args = [])
 * @method \Jdcloud\Result deleteSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecretAsync(array $args = [])
 * @method \Jdcloud\Result createSecretVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecretVersionAsync(array $args = [])
 * @method \Jdcloud\Result describeSecretVersionInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretVersionInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateSecretVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretVersionAsync(array $args = [])
 * @method \Jdcloud\Result enableSecretVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSecretVersionAsync(array $args = [])
 * @method \Jdcloud\Result disableSecretVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSecretVersionAsync(array $args = [])
 * @method \Jdcloud\Result deleteSecretVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecretVersionAsync(array $args = [])
 */
class KmsClient extends JdCloudClient
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
                        'service' => 'kms',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'kms'
            );
        };

        parent::__construct($args);
    }
}