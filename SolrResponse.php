<?php

/**
 * Class SolrResponse
 */
abstract class SolrResponse
{
    /**
     * @var integer
     */
    const PARSE_SOLR_OBJ = 0 ;
    /**
     * @var integer
     */
    const PARSE_SOLR_DOC = 1 ;
    /**
     * @var integer
     */
    protected $http_status ;
    /**
     * @var integer
     */
    protected $parser_mode ;
    /**
     * @var bool
     */
    protected $success ;
    /**
     * @var string
     */
    protected $http_status_message ;
    /**
     * @var string
     */
    protected $http_request_url ;
    /**
     * @var string
     */
    protected $http_raw_request_headers ;
    /**
     * @var string
     */
    protected $http_raw_request ;
    /**
     * @var string
     */
    protected $http_raw_response_headers ;
    /**
     * @var string
     */
    protected $http_raw_response ;
    /**
     * @var string
     */
    protected $http_digested_response ;
    /**
     * @return string
     */
    public function getDigestedResponse()
    {
    }

    /**
     * @return int
     */
    public function getHttpStatus()
    {
    }

    /**
     * @return string
     */
    public function getHttpStatusMessage()
    {
    }

    /**
     * @return string
     */
    public function getRawRequest()
    {
    }

    /**
     * @return string
     */
    public function getRawRequestHeaders()
    {
    }

    /**
     * @return string
     */
    public function getRawResponse()
    {
    }

    /**
     * @return string
     */
    public function getRawResponseHeaders()
    {
    }

    /**
     * @return string
     */
    public function getRequestUrl()
    {
    }

    /**
     * @return SolrObject
     */
    public function getResponse()
    {
    }

    /**
     * @var int $parser_mode
     * @return bool
     */
    public function setParseMode($parser_mode = 0)
    {
    }

    /**
     * @return bool
     */
    public function success()
    {
    }

}