<?php

/**
 * Class SolrException
 */
class SolrException extends Exception
{
    /**
     * @var integer
     */
    protected $sourceline;
    /**
     * @var string
     */
    protected $sourcefile;
    /**
     * @var string
     */
    protected $zif_name;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var int
     */
    protected $code;
    /**
     * @var string
     */
    protected $file;
    /**
     * @var int
     */
    protected $line;

    /**
     * @return array
     */
    public function getInternalInfo()
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
    }

}