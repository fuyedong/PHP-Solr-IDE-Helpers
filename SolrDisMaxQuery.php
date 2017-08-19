<?php

class SolrDisMaxQuery extends SolrQuery implements Serializable
{
    /**
     * @var string $field
     * @var string $boost
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function addBigramPhraseField($field, $boost, $slop = '')
    {
    }

    /**
     * @var string $field
     * @var string $value
     * @var string $boost
     * @return SolrDisMaxQuery
     */
    public function addBoostQuery($field, $value, $boost = '')
    {
    }

    /**
     * @var string $field
     * @var string $boost
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function addPhraseField($field, $boost, $slop = '')
    {
    }

    /**
     * @var string $field
     * @var string $boost
     * @return SolrDisMaxQuery
     */
    public function addQueryField($field, $boost = '')
    {
    }

    /**
     * @var string $field
     * @var string $boost
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function addTrigramPhraseField($field, $boost, $slop = '')
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function addUserField($field)
    {
    }

    /**
     * @var string $q
     * @return void
     */
    public function __construct($q = '')
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function removeBigramPhraseField($field)
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function removeBoostQuery($field)
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function removePhraseField($field)
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function removeQueryField($field)
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function removeTrigramPhraseField($field)
    {
    }

    /**
     * @var string $field
     * @return SolrDisMaxQuery
     */
    public function removeUserField($field)
    {
    }

    /**
     * @var string $fields
     * @return SolrDisMaxQuery
     */
    public function setBigramPhraseFields($fields)
    {
    }

    /**
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function setBigramPhraseSlop($slop)
    {
    }

    /**
     * @var string $function
     * @return SolrDisMaxQuery
     */
    public function setBoostFunction($function)
    {
    }

    /**
     * @var string $q
     * @return SolrDisMaxQuery
     */
    public function setBoostQuery($q)
    {
    }

    /**
     * @var string $value
     * @return SolrDisMaxQuery
     */
    public function setMinimumMatch($value)
    {
    }

    /**
     * @var string $fields
     * @return SolrDisMaxQuery
     */
    public function setPhraseFields($fields)
    {
    }

    /**
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function setPhraseSlop($slop)
    {
    }

    /**
     * @var string $q
     * @return SolrDisMaxQuery
     */
    public function setQueryAlt($q)
    {
    }

    /**
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function setQueryPhraseSlop($slop)
    {
    }

    /**
     * @var string $tieBreaker
     * @return SolrDisMaxQuery
     */
    public function setTieBreaker($tieBreaker)
    {
    }

    /**
     * @var string $fields
     * @return SolrDisMaxQuery
     */
    public function setTrigramPhraseFields($fields)
    {
    }

    /**
     * @var string $slop
     * @return SolrDisMaxQuery
     */
    public function setTrigramPhraseSlop($slop)
    {
    }

    /**
     * @var string $fields
     * @return SolrDisMaxQuery
     */
    public function setUserFields($fields)
    {
    }

    /**
     * @return SolrDisMaxQuery
     */
    public function useDisMaxQueryParser()
    {
    }

    /**
     * @return SolrDisMaxQuery
     */
    public function useEDisMaxQueryParser()
    {
    }
}
