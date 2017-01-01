<?php

abstract class SolrParams implements Serializable
{
    /**
     * @param string $name
     * @param string $value
     * @return SolrParams
     */
    final public function add($name, $value)
    {

    }

    /**
     * @param string $name
     * @param string $value
     * @return SolrParams
     */
    public function addParam($name, $value)
    {

    }

    /**
     * @param string $param_name
     * @return mixed
     */
    final public function get($param_name)
    {

    }

    /**
     * @param string $param_name
     * @return mixed
     */
    final public function getParam($param_name = '')
    {

    }

    /**
     * @return array
     */
    final public function getParams()
    {

    }

    /**
     * @return array
     */
    final public function getPreparedParams()
    {
    }

    /**
     * @return string
     */
    final public function serialize()
    {
    }


    /**
     * @param string $name
     * @param string $value
     */
    final public function set($name, $value)
    {

    }

    /**
     * @param string $name
     * @param string $value
     * @return SolrParams
     */
    public function setParam($name, $value)
    {

    }

    /**
     * @param bool $url_encode
     * @return string
     */
    final public function toString($url_encode = false)
    {
    }

    /**
     * @param string $serialized
     */
    final public function unserialize($serialized)
    {

    }
}
