<?php

/**
 * Class SolrCollapseFunction
 */
class SolrCollapseFunction
{

    /**
     * @var string
     */
    const NULLPOLICY_IGNORE = 'ignore';
    /**
     * @var string
     */
    const NULLPOLICY_EXPAND = 'expand';
    /**
     * @var string
     */
    const NULLPOLICY_COLLAPSE = 'collapse';

    /**
     * @var string $field
     * @return void
     */
    public function __construct($field = '')
    {
    }

    /**
     * @return string
     */
    public function getField()
    {
    }

    /**
     * @return string
     */
    public function getHint()
    {
    }

    /**
     * @return string
     */
    public function getMax()
    {
    }

    /**
     * @return string
     */
    public function getMin()
    {
    }

    /**
     * @return string
     */
    public function getNullPolicy()
    {
    }

    /**
     * @return integer
     */
    public function getSize()
    {
    }

    /**
     * @var string $fieldName
     * @return SolrCollapseFunction
     */
    public function setField($fieldName)
    {
    }

    /**
     * @var string $hint
     * @return SolrCollapseFunction
     */
    public function setHint($hint)
    {
    }

    /**
     * @var string $max
     * @return SolrCollapseFunction
     */
    public function setMax($max)
    {
    }

    /**
     * @var string $min
     * @return SolrCollapseFunction
     */
    public function setMin($min)
    {
    }

    /**
     * @var string $nullPolicy
     * @return SolrCollapseFunction
     */
    public function setNullPolicy($nullPolicy)
    {
    }

    /**
     * @var integer $size
     * @return SolrCollapseFunction
     */
    public function setSize($size)
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
    }

}