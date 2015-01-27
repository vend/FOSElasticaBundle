<?php

namespace FOS\ElasticaBundle\Exception;

class MissingObjectsException extends \RuntimeException
{
    /**
     * @var array
     */
    protected $expectedIds;

    /**
     * @param string $message The exception message
     * @param array $expectedIds The array of identifiers which could not be fetched
     */
    public function __construct($message, array $expectedIds)
    {
        parent::__construct($message);
        $this->expectedIds = $expectedIds;
    }

    /**
     * Get the identifiers which could not be fetched
     *
     * @return array
     */
    public function getExpectedIds()
    {
        return $this->expectedIds;
    }
}
