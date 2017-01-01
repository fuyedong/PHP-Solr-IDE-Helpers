<?php

/**
 * Class SolrInputDocument
 *
 * @method addChildDocument(SolrInputDocument $child)
 * @method addChildDocuments(array &$docs)
 * @method bool addField(string $fieldName, string $fieldValue, float $fieldBoostValue = 0.0)
 * @method bool clear()
 * @method bool deleteField(string $fieldName)
 * @method bool fieldExists(string $fieldName)
 * @method float getBoost()
 * @method array getChildDocuments()
 * @method integer getChildDocumentsCount()
 * @method SolrDocumentField getField(string $fieldName)
 * @method float getFieldBoost(string $fieldName)
 * @method int getFieldCount()
 * @method array getFieldNames()
 * @method boolean hasChildDocuments()
 * @method bool merge(SolrInputDocument $sourceDoc, bool $overwrite = true)
 * @method bool reset()
 * @method bool setBoost(float $documentBoostValue)
 * @method bool setFieldBoost(string $fieldName, float $fieldBoostValue)
 * @method bool sort(int $sortOrderBy, int $sortDirection = SolrInputDocument::SORT_ASC)
 * @method array toArray()
 */
class SolrInputDocument
{

    const SORT_DEFAULT = 1;
    const SORT_ASC = 1;
    const SORT_DESC = 2;
    const SORT_FIELD_NAME = 1;
    const SORT_FIELD_VALUE_COUNT = 2;
    const SORT_FIELD_BOOST_VALUE = 4;

}