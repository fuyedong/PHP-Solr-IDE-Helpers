<?php

/**
 * Class SolrInputDocument
 */
final class SolrInputDocument
{

    /**
     * @var integer
     */
    const SORT_DEFAULT = 1;
    /**
     * @var integer
     */
    const SORT_ASC = 1;
    /**
     * @var integer
     */
    const SORT_DESC = 2;
    /**
     * @var integer
     */
    const SORT_FIELD_NAME = 1;
    /**
     * @var integer
     */
    const SORT_FIELD_VALUE_COUNT = 2;
    /**
     * @var integer
     */
    const SORT_FIELD_BOOST_VALUE = 4;

    /**
     * @var SolrInputDocument $child
     * @return void
     */
    public function addChildDocument($child)
    {
    }

    /**
     * @var array &$docs
     * @return void
     */
    public function addChildDocuments(&$docs)
    {
    }

    /**
     * @var string $fieldName
     * @var string $fieldValue
     * @var float $fieldBoostValue = 0.0
     * @return bool
     */
    public function addField($fieldName, $fieldValue, $fieldBoostValue = 0.0)
    {
    }

    /**
     * @return bool
     */
    public function clear()
    {
    }

    /**
     * @return void
     */
    public function __clone()
    {
    }

    /**
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * @var string $fieldName
     * @return bool
     */
    public function deleteField($fieldName)
    {
    }

    /**
     * @return void
     */
    public function __destruct()
    {
    }

    /**
     * @var string $fieldName
     * @return bool
     */
    public function fieldExists($fieldName)
    {
    }

    /**
     * @return float
     */
    public function getBoost()
    {
    }

    /**
     * @return array
     */
    public function getChildDocuments()
    {
    }

    /**
     * @return integer
     */
    public function getChildDocumentsCount()
    {
    }

    /**
     * @var string $fieldName
     * @return SolrDocumentField
     */
    public function getField($fieldName)
    {
    }

    /**
     * @var string $fieldName
     * @return float
     */
    public function getFieldBoost($fieldName)
    {
    }

    /**
     * @return int
     */
    public function getFieldCount()
    {
    }

    /**
     * @return array
     */
    public function getFieldNames()
    {
    }

    /**
     * @return boolean
     */
    public function hasChildDocuments()
    {
    }

    /**
     * @var SolrInputDocument $sourceDoc
     * @var bool $overwrite = true
     * @return bool
     */
    public function merge($sourceDoc, $overwrite = true)
    {
    }

    /**
     * @return bool
     */
    public function reset()
    {
    }

    /**
     * @var float $documentBoostValue
     * @return bool
     */
    public function setBoost($documentBoostValue)
    {
    }

    /**
     * @var string $fieldName
     * @var float $fieldBoostValue
     * @return bool
     */
    public function setFieldBoost($fieldName, $fieldBoostValue)
    {
    }

    /**
     * @var int $sortOrderBy
     * @var int $sortDirection
     * @return bool
     */
    public function sort($sortOrderBy, $sortDirection = SolrInputDocument::SORT_ASC)
    {
    }

    /**
     * @return array
     */
    public function toArray()
    {
    }

}