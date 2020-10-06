<?php
/**
 * Created by PhpStorm.
 * User: xwsoul
 * Date: 2017/8/19
 * Time: 上午11:02
 */

abstract class SolrUtils
{

    /**
     * @var string $xmlresponse
     * @var int $parse_mode
     * @return static
     */
    public function digestXmlResponse($xmlresponse, $parse_mode = 0)
    {
    }

    /**
     * @var string $str
     * @return static
     */
    public function escapeQueryChars($str)
    {
    }

    /**
     * @return static
     */
    public function getSolrVersion()
    {
    }

    /**
     * @var string $str
     * @return static
     */
    public function queryPhrase($str)
    {
    }

}