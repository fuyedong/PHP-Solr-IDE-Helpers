<?php
/**
 * Class SolrClient
 */
class SolrClient
{
    const SEARCH_SERVLET_TYPE = 1;
    const UPDATE_SERVLET_TYPE = 2;
    const THREADS_SERVLET_TYPE = 4;
    const PING_SERVLET_TYPE = 8;
    const TERMS_SERVLET_TYPE = 16;
    const SYSTEM_SERVLET_TYPE = 32;
    const DEFAULT_SEARCH_SERVLET = select;
    const DEFAULT_UPDATE_SERVLET = update;
    const DEFAULT_THREADS_SERVLET = admin / threads;
    const DEFAULT_PING_SERVLET = admin / ping;
    const DEFAULT_TERMS_SERVLET = terms;
    const DEFAULT_SYSTEM_SERVLET = system;

    public function __construct(array $clientOptions)
    {

    }

    public function __destruct()
    {

    }

    /**
     * @param SolrInputDocument $doc
     * @param bool $overwrite
     * @param int $commitWithin
     * @return SolrUpdateResponse
     */
    public function addDocument(SolrInputDocument $doc, bool $overwrite = true, int $commitWithin = 0)
    {

    }

    /**
     * @param array $docs
     * @param bool $overwrite
     * @param int $commitWithin
     */
    public function addDocuments(array $docs, bool $overwrite = true, int $commitWithin = 0)
    {
    }

    /**
     * @param bool $softCommit
     * @param bool $waitSearcher
     * @param bool $expungeDeletes
     * @return SolrUpdateResponse
     */
    public function commit(bool $softCommit = false, bool $waitSearcher = true, bool $expungeDeletes = false)
    {

    }

    /**
     * @param string $id
     * @return SolrUpdateResponse
     */
    public function deleteById(string $id)
    {

    }

    /**
     * @param array $ids
     * @return SolrUpdateResponse
     */
    public function deleteByIds(array $ids)
    {

    }

    /**
     * @param array $queries
     * @return SolrUpdateResponse
     */
    public function deleteByQueries(array $queries)
    {

    }

    /**
     * @param string $query
     * @return SolrUpdateResponse
     */
    public function deleteByQuery(string $query)
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
     * @return SolrUpdateResponse
     * @param int $maxSegments
     * @param bool $softCommit
     * @param bool $waitSearcher
     */
    public function optimize(int $maxSegments = 1, bool $softCommit = true, bool $waitSearcher = true)
    {

    }

    /**
     * @return SolrPingResponse
     */
    public function ping()
    {

    }

    /**
     * @param SolrParams $query
     * @return SolrQueryResponse
     */
    public function query(SolrParams $query)
    {

    }

    /**
     * @param string $raw_request
     * @return SolrUpdateResponse
     */
    public function request(string $raw_request)
    {

    }

    /**
     * @return SolrUpdateResponse
     */
    public function rollback()
    {

    }


    public function setResponseWriter(string $responseWriter)
    {

    }

    /**
     * Changes the specified servlet type to a new value
     *
     * @param int $type
     * @param string $value
     * @return bool
     */
    public function setServlet(int $type, string $value)
    {

    }

    /**
     * Retrieve Solr Server information
     *
     * @throws SolrClientException
     * @throws SolrServerException
     * @return SolrGenericResponse
     */
    public function system()
    {

    }

    /**
     * Checks the threads status
     *
     * @throws SolrClientException
     * @throws SolrServerException
     * @return SolrGenericResponse
     */
    public function threads()
    {

    }

}