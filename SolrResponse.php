<?php

/**
 * Class SolrResponse
 *
 * @method string getDigestedResponse()
 * @method int getHttpStatus()
 * @method string getHttpStatusMessage()
 * @method string getRawRequest()
 * @method string getRawRequestHeaders()
 * @method string getRawResponse()
 * @method string getRawResponseHeaders()
 * @method string getRequestUrl()
 * @method SolrObject getResponse()
 * @method bool setParseMode(int $parser_mode = 0)
 * @method bool success()
 */
class SolrResponse
{

    const PARSE_SOLR_OBJ = 0;
    const PARSE_SOLR_DOC = 1;

    /**
     * SolrResponse constructor.
     */
    public function __construct()
    {
    }

    /**
     * SolrResponse desstructor.
     */
    public function __destruct()
    {
    }

}