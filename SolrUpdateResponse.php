<?php

/**
 * Class SolrUpdateResponse
 */
final class SolrUpdateResponse extends SolrResponse
{

    /**
     * @var integer
     */
    const PARSE_SOLR_OBJ = 0;
    /**
     * @var integer
     */
    const PARSE_SOLR_DOC = 1;
    /**
     * @var integer
     */
    protected $http_status;
    /**
     * @var integer
     */
    protected $parser_mode;
    /**
     * @var bool
     */
    protected $success;
    /**
     * @var string
     */
    protected $http_status_message;
    /**
     * @var string
     */
    protected $http_request_url;
    /**
     * @var string
     */
    protected $http_raw_request_headers;
    /**
     * @var string
     */
    protected $http_raw_request;
    /**
     * @var string
     */
    protected $http_raw_response_headers;
    /**
     * @var string
     */
    protected $http_raw_response;
    /**
     * @var string
     */
    protected $http_digested_response;

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