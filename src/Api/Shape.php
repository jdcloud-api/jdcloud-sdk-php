<?php
namespace Jdcloud\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, ShapeMap $shapeMap)
    {
        static $map = [
            'structure' => 'Jdcloud\Api\StructureShape',
            'map'       => 'Jdcloud\Api\MapShape',
            'list'      => 'Jdcloud\Api\ListShape',
            'timestamp' => 'Jdcloud\Api\TimestampShape',
            'integer'   => 'Jdcloud\Api\Shape',
            'double'    => 'Jdcloud\Api\Shape',
            'float'     => 'Jdcloud\Api\Shape',
            'long'      => 'Jdcloud\Api\Shape',
            'string'    => 'Jdcloud\Api\Shape',
            'object'    => 'Jdcloud\Api\Shape',
            'byte'      => 'Jdcloud\Api\Shape',
            'character' => 'Jdcloud\Api\Shape',
            'blob'      => 'Jdcloud\Api\Shape',
            'boolean'   => 'Jdcloud\Api\Shape'
        ];

        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }

        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: '
                . print_r($definition, true));
        }

        $type = $map[$definition['type']];

        return new $type($definition, $shapeMap);
    }

    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }

    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}
