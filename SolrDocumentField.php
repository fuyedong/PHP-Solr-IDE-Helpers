<?php

/**
 * Class SolrDocumentField
 */
final class SolrDocumentField
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $boost;

    /**
     * @var array
     */
    public $values;

    /**
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * @return void
     */
    public function __destruct()
    {
    }
}