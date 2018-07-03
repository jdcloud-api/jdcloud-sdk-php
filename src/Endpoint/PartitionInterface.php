<?php
namespace Jdcloud\Endpoint;

/**
 * Represents a section of the Jdcloud.
 */
interface PartitionInterface
{
    /**
     * Returns the partition's short name
     *
     * @return string
     */
    public function getName();

    /**
     * Determine if this partition contains the provided region. Include the
     * name of the service to inspect non-regional endpoints
     *
     * @param string $region
     * @param string $service
     *
     * @return bool
     */
    public function isRegionMatch($region, $service);

    /**
     * Return the endpoints supported by a given service.
     *
     * @param string    $service                    Identifier of the service
     *                                              whose endpoints should be
     *                                              listed (e.g., 's3' or 'ses')
     * 
     * @return string[]
     */
    public function getAvailableEndpoints(
        $service,
        $allowNonRegionalEndpoints = false
    );

    /**
     * A partition must be invokable as an endpoint provider.
     *
     * @see EndpointProvider
     * 
     * @param array $args
     * @return array
     */
    public function __invoke(array $args = []);
}
