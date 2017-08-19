<?php

/**
 * Class SolrDocument
 */
final class SolrDocument implements ArrayAccess , Iterator , Serializable
{

    /**
     * @var integer
     */
    const SORT_DEFAULT = 1 ;
    /**
     * @var integer
     */
    const SORT_ASC = 1 ;
    /**
     * @var integer
     */
    const SORT_DESC = 2 ;
    /**
     * @var integer
     */
    const SORT_FIELD_NAME = 1 ;
    /**
     * @var integer
     */
    const SORT_FIELD_VALUE_COUNT = 2 ;
    /**
     * @var integer
     */
    const SORT_FIELD_BOOST_VALUE = 4 ;

    /**
     * @var string $fieldName
     * @var string $fieldValue
     * @return bool
     */
    public function addField($fieldName, $fieldValue)
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
     * @return SolrDocumentField
     */
    public function current()
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
     * @var string $fieldName
     * @return SolrDocumentField
     */
    public function __get($fieldName)
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
     * @return SolrInputDocument
     */
    public function getInputDocument()
    {
    }

    /**
     * @return bool
     */
    public function hasChildDocuments()
    {
    }

    /**
     * @var string $fieldName
     * @return bool
     */
    public function __isset($fieldName)
    {
    }

    /**
     * @return string
     */
    public function key()
    {
    }

    /**
     * @var SolrDocument $sourceDoc
     * @var bool $overwrite
     * @return bool
     */
    public function merge($sourceDoc, $overwrite = true)
    {
    }

    /**
     * @return void
     */
    public function next()
    {
    }

    /**
     * @var string $fieldName
     * @return bool
     */
    public function offsetExists($fieldName)
    {
    }

    /**
     * @var string $fieldName
     * @return SolrDocumentField
     */
    public function offsetGet($fieldName)
    {
    }

    /**
     * @var string $fieldName
     * @var string $fieldValue
     * @return void
     */
    public function offsetSet($fieldName, $fieldValue)
    {
    }

    /**
     * @var string $fieldName
     * @return void
     */
    public function offsetUnset($fieldName)
    {
    }

    /**
     * @return bool
     */
    public function reset()
    {
    }

    /**
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * @return string
     */
    public function serialize()
    {
    }

    /**
     * @var string $fieldName
     * @var string $fieldValue
     * @return bool
     */
    public function __set($fieldName, $fieldValue)
    {
    }

    /**
     * @var int $sortOrderBy
     * @var int $sortDirection
     * @return bool
     */
    public function sort($sortOrderBy, $sortDirection = SolrDocument::SORT_ASC)
    {
    }

    /**
     * @return array
     */
    public function toArray()
    {
    }

    /**
     * @var string $serialized
     * @return void
     */
    public function unserialize($serialized)
    {
    }

    /**
     * @var string $fieldName
     * @return bool
     */
    public function __unset($fieldName)
    {
    }

    /**
     * @return bool
     */
    public function valid()
    {
    }

}