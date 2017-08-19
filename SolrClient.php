<?php

/**
 * Class SolrClient
 */
final class SolrClient
{
    /**
     * @var integer
     */
    const SEARCH_SERVLET_TYPE = 1;

    /**
     * @var integer
     */
    const UPDATE_SERVLET_TYPE = 2;

    /**
     * @var integer
     */
    const THREADS_SERVLET_TYPE = 4;

    /**
     * @var integer
     */
    const PING_SERVLET_TYPE = 8;

    /**
     * @var integer
     */
    const TERMS_SERVLET_TYPE = 16;

    /**
     * @var integer
     */
    const SYSTEM_SERVLET_TYPE = 32;

    /**
     * @var string
     */
    const DEFAULT_SEARCH_SERVLET = 'select';

    /**
     * @var string
     */
    const DEFAULT_UPDATE_SERVLET = 'update';

    /**
     * @var string
     */
    const DEFAULT_THREADS_SERVLET = 'admin/threads';

    /**
     * @var string
     */
    const DEFAULT_PING_SERVLET = 'admin/ping';

    /**
     * @var string
     */
    const DEFAULT_TERMS_SERVLET = 'terms';

    /**
     * @var string
     */
    const DEFAULT_SYSTEM_SERVLET = 'admin/system';

    /**
     * @var SolrInputDocument $doc
     * @var bool $overwrite
     * @var int $commitWithin
     * @return SolrUpdateResponse
     */
    public function addDocument($doc, $overwrite = true, $commitWithin = 0)
    {
    }

    /**
     * @var array $docs
     * @var bool $overwrite
     * @var int $commitWithin
     * @return void
     */
    public function addDocuments($docs, $overwrite = true, $commitWithin = 0)
    {
    }

    /**
     * @var bool $softCommit
     * @var bool $waitSearcher
     * @var bool $expungeDeletes
     * @return SolrUpdateResponse
     */
    public function commit($softCommit = false, $waitSearcher = true, $expungeDeletes = false)
    {
    }

    /**
     * @var array $clientOptions
     * @return void
     */
    public function __construct($clientOptions)
    {
    }

    /**
     * @var string $id
     * @return SolrUpdateResponse
     */
    public function deleteById($id)
    {
    }

    /**
     * @var array $ids
     * @return SolrUpdateResponse
     */
    public function deleteByIds($ids)
    {
    }

    /**
     * @var array $queries
     * @return SolrUpdateResponse
     */
    public function deleteByQueries($queries)
    {
    }

    /**
     * @var string $query
     * @return SolrUpdateResponse
     */
    public function deleteByQuery($query)
    {
    }

    /**
     * @return void
     */
    public function __destruct()
    {
    }

    /**
     * @var string $id
     * @return SolrQueryResponse
     */
    public function getById($id)
    {
    }

    /**
     * @var array $ids
     * @return SolrQueryResponse
     */
    public function getByIds($ids)
    {
    }

    /**
     * @return string
     */
    public function getDebug()
    {
    }

    /**
     * @return array
     */
    public function getOptions()
    {
    }

    /**
     * @var int $maxSegments
     * @var bool $softCommit
     * @var bool $waitSearcher
     * @return SolrUpdateResponse
     */
    public function optimize($maxSegments = 1, $softCommit = true, $waitSearcher = true)
    {
    }

    /**
     * @return SolrPingResponse
     */
    public function ping()
    {
    }

    /**
     * @var SolrParams $query
     * @return SolrQueryResponse
     */
    public function query($query)
    {
    }

    /**
     * @var string $raw_request
     * @return SolrUpdateResponse
     */
    public function request($raw_request)
    {
    }

    /**
     * @return SolrUpdateResponse
     */
    public function rollback()
    {
    }

    /**
     * @var string $responseWriter
     * @return void
     */
    public function setResponseWriter($responseWriter)
    {
    }

    /**
     * @var int $type
     * @var string $value
     * @return bool
     */
    public function setServlet($type, $value)
    {
    }

    /**
     * @return void
     */
    public function system()
    {
    }

    /**
     * @return void
     */
    public function threads()
    {
    }

}