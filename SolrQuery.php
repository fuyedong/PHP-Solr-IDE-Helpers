<?php

class SolrQuery extends SolrModifiableParams implements Serializable
{
    /* Constants */
    const ORDER_ASC = 0;
    const  ORDER_DESC = 1;
    const  FACET_SORT_INDEX = 0;
    const  FACET_SORT_COUNT = 1;
    const  TERMS_SORT_INDEX = 0;
    const  TERMS_SORT_COUNT = 1;
    /* Methods */
    /**
     * @param string $fq
     * @return SolrQuery
     */
    public function addExpandFilterQuery($fq)
    {
    }

    /**
     * @param string $field
     * @param string $order
     * @return SolrQuery
     */
    public function addExpandSortField($field, $order = SolrQuery::ORDER_DESC)
    {
    }

    /**
     * @param string $dateField
     * @return SolrQuery
     */
    public function addFacetDateField($dateField)
    {
    }

    /**
     * @param string $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function addFacetDateOther($value, $field_override = '')
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addFacetField($field)
    {
    }

    /**
     * @param string $facetQuery
     * @return SolrQuery
     */
    public function addFacetQuery($facetQuery)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addField($field)
    {
    }

    /**
     * @param string $fq
     * @return SolrQuery
     */
    public function addFilterQuery($fq)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function addGroupField($value)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function addGroupFunction($value)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function addGroupQuery($value)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addGroupSortField($field, $order = SolrQuery::ORDER_DESC)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addHighlightField($field)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addMltField($field)
    {
    }

    /**
     * @param string $field
     * @param float $boost
     * @return SolrQuery
     */
    public function addMltQueryField($field, float $boost)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addSortField($field, $order = SolrQuery::ORDER_DESC)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addStatsFacet($field)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function addStatsField($field)
    {
    }

    /**
     * @param SolrCollapseFunction $collapseFunction
     * @return SolrQuery
     */
    public function collapse($collapseFunction)
    {
    }


    /**
     * SolrQuery constructor.
     * @param string $q
     */
    public function __construct($q = '')
    {
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
    }

    /**
     * @return bool
     */
    public function getExpand()
    {
    }

    /**
     * @return array
     */
    public function getExpandFilterQueries()
    {
    }

    /**
     * @return array
     */
    public function getExpandQuery()
    {
    }

    /**
     * @return int
     */
    public function getExpandRows()
    {
    }

    /**
     * @return array
     */
    public function getExpandSortFields()
    {
    }

    /**
     * @return bool
     */
    public function getFacet()
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getFacetDateEnd($field_override = '')
    {
    }

    /**
     * @return array
     */
    public function getFacetDateFields()
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getFacetDateGap($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getFacetDateHardEnd($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return array
     */
    public function getFacetDateOther($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getFacetDateStart($field_override = '')
    {
    }

    /**
     * @return array
     */
    public function getFacetFields()
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getFacetLimit($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getFacetMethod($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getFacetMinCount($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return bool
     */
    public function getFacetMissing($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getFacetOffset($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getFacetPrefix($field_override = '')
    {
    }

    /**
     * @return array
     */
    public function getFacetQueries()
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getFacetSort($field_override = '')
    {
    }

    /**
     * @return array
     */
    public function getFields()
    {
    }

    /**
     * @return array
     */
    public function getFilterQueries()
    {
    }

    /**
     * @return bool
     */
    public function getGroup()
    {
    }

    /**
     * @return int
     */
    public function getGroupCachePercent()
    {
    }

    /**
     * @return bool
     */
    public function getGroupFacet()
    {
    }

    /**
     * @return array
     */
    public function getGroupFields()
    {
    }

    /**
     * @return string
     */
    public function getGroupFormat()
    {
    }

    /**
     * @return array
     */
    public function getGroupFunctions()
    {
    }

    /**
     * @return int
     */
    public function getGroupLimit()
    {
    }

    /**
     * @return bool
     */
    public function getGroupMain()
    {
    }

    /**
     * @return bool
     */
    public function getGroupNGroups()
    {
    }

    /**
     * @return int
     */
    public function getGroupOffset()
    {
    }

    /**
     * @return array
     */
    public function getGroupQueries()
    {
    }

    /**
     * @return array
     */
    public function getGroupSortFields()
    {
    }

    /**
     * @return bool
     */
    public function getGroupTruncate()
    {
    }

    /**
     * @return bool
     */
    public function getHighlight()
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getHighlightAlternateField($field_override = '')
    {
    }

    /**
     * @return array
     */
    public function getHighlightFields()
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getHighlightFormatter($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getHighlightFragmenter($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getHighlightFragsize($field_override = '')
    {
    }

    /**
     * @return bool
     */
    public function getHighlightHighlightMultiTerm()
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getHighlightMaxAlternateFieldLength($field_override = '')
    {
    }

    /**
     * @return int
     */
    public function getHighlightMaxAnalyzedChars()
    {
    }

    /**
     * @param string $field_override
     * @return bool
     */
    public function getHighlightMergeContiguous($field_override = '')
    {
    }

    /**
     * @return int
     */
    public function getHighlightRegexMaxAnalyzedChars()
    {
    }

    /**
     * @return string
     */
    public function getHighlightRegexPattern()
    {
    }

    /**
     * @return float
     */
    public function getHighlightRegexSlop()
    {
    }

    /**
     * @return bool
     */
    public function getHighlightRequireFieldMatch()
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getHighlightSimplePost($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return string
     */
    public function getHighlightSimplePre($field_override = '')
    {
    }

    /**
     * @param string $field_override
     * @return int
     */
    public function getHighlightSnippets($field_override = '')
    {
    }

    /**
     * @return bool
     */
    public function getHighlightUsePhraseHighlighter()
    {
    }

    /**
     * @return bool
     */
    public function getMlt()
    {
    }

    /**
     * @return bool
     */
    public function getMltBoost()
    {
    }

    /**
     * @return int
     */
    public function getMltCount()
    {
    }

    /**
     * @return array
     */
    public function getMltFields()
    {
    }

    /**
     * @return int
     */
    public function getMltMaxNumQueryTerms()
    {
    }

    /**
     * @return int
     */
    public function getMltMaxNumTokens()
    {
    }

    /**
     * @return int
     */
    public function getMltMaxWordLength()
    {
    }

    /**
     * @return int
     */
    public function getMltMinDocFrequency()
    {
    }

    /**
     * @return int
     */
    public function getMltMinTermFrequency()
    {
    }

    /**
     * @return int
     */
    public function getMltMinWordLength()
    {
    }

    /**
     * @return array
     */
    public function getMltQueryFields()
    {
    }

    /**
     * @return string
     */
    public function getQuery()
    {
    }

    /**
     * @return int
     */
    public function getRows()
    {
    }

    /**
     * @return array
     */
    public function getSortFields()
    {
    }

    /**
     * @return int
     */
    public function getStart()
    {
    }

    /**
     * @return bool
     */
    public function getStats()
    {
    }

    /**
     * @return array
     */
    public function getStatsFacets()
    {
    }

    /**
     * @return array
     */
    public function getStatsFields()
    {
    }

    /**
     * @return bool
     */
    public function getTerms()
    {
    }

    /**
     * @return string
     */
    public function getTermsField()
    {
    }

    /**
     * @return bool
     */
    public function getTermsIncludeLowerBound()
    {
    }

    /**
     * @return bool
     */
    public function getTermsIncludeUpperBound()
    {
    }

    /**
     * @return int
     */
    public function getTermsLimit()
    {
    }

    /**
     * @return string
     */
    public function getTermsLowerBound()
    {
    }

    /**
     * @return int
     */
    public function getTermsMaxCount()
    {
    }

    /**
     * @return int
     */
    public function getTermsMinCount()
    {
    }

    /**
     * @return string
     */
    public function getTermsPrefix()
    {
    }

    /**
     * @return bool
     */
    public function getTermsReturnRaw()
    {
    }

    /**
     * @return int
     */
    public function getTermsSort()
    {
    }

    /**
     * @return string
     */
    public function getTermsUpperBound()
    {
    }

    /**
     * @return int
     */
    public function getTimeAllowed()
    {
    }

    /**
     * @param string $fq
     * @return SolrQuery
     */
    public function removeExpandFilterQuery($fq)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeExpandSortField($field)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeFacetDateField($field)
    {
    }

    /**
     * @param string $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function removeFacetDateOther($value, $field_override = '')
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeFacetField($field)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function removeFacetQuery($value)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeField($field)
    {
    }

    /**
     * @param string $fq
     * @return SolrQuery
     */
    public function removeFilterQuery($fq)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeHighlightField($field)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeMltField($field)
    {
    }

    /**
     * @param string $queryField
     * @return SolrQuery
     */
    public function removeMltQueryField($queryField)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeSortField($field)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function removeStatsFacet($value)
    {
    }

    /**
     * @param string $field
     * @return SolrQuery
     */
    public function removeStatsField($field)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setEchoHandler($flag)
    {
    }

    /**
     * @param string $type
     * @return SolrQuery
     */
    public function setEchoParams($type)
    {
    }

    /**
     * @param bool $value
     * @return SolrQuery
     */
    public function setExpand($value)
    {
    }

    /**
     * @param string $q
     * @return SolrQuery
     */
    public function setExpandQuery($q)
    {
    }

    /**
     * @param int $value
     * @return SolrQuery
     */
    public function setExpandRows($value)
    {
    }

    /**
     * @param string $query
     * @return SolrQuery
     */
    public function setExplainOther($query)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setFacet($flag)
    {
    }

    /**
     * @param string $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetDateEnd($value, $field_override = '')
    {
    }

    /**
     * @param string $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetDateGap($value, $field_override = '')
    {
    }

    /**
     * @param string $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetDateHardEnd($value, $field_override = '')
    {
    }

    /**
     * @param string $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetDateStart($value, $field_override = '')
    {
    }

    /**
     * @param int $frequency
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetEnumCacheMinDefaultFrequency($frequency, $field_override = '')
    {
    }

    /**
     * @param int $limit
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetLimit($limit, $field_override = '')
    {
    }

    /**
     * @param string $method
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetMethod($method, $field_override = '')
    {
    }

    /**
     * @param int $mincount
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetMinCount($mincount, $field_override = '')
    {
    }

    /**
     * @param bool $flag
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetMissing($flag, $field_override = '')
    {
    }

    /**
     * @param int $offset
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetOffset($offset, $field_override = '')
    {
    }

    /**
     * @param string $prefix
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetPrefix($prefix, $field_override = '')
    {
    }

    /**
     * @param int $facetSort
     * @param string $field_override
     * @return SolrQuery
     */
    public function setFacetSort($facetSort, $field_override = '')
    {
    }
    /**
     * @return SolrQuery
     */
    /**
     * @param bool $value
     * @return SolrQuery
     */
    public function setGroup($value)
    {
    }

    /**
     * @param int $percent
     * @return SolrQuery
     */
    public function setGroupCachePercent($percent)
    {
    }

    /**
     * @param bool $value
     * @return SolrQuery
     */
    public function setGroupFacet($value)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function setGroupFormat($value)
    {
    }

    /**
     * @param int $value
     * @return SolrQuery
     */
    public function setGroupLimit($value)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function setGroupMain($value)
    {
    }

    /**
     * @param bool $value
     * @return SolrQuery
     */
    public function setGroupNGroups($value)
    {
    }

    /**
     * @param int $value
     * @return SolrQuery
     */
    public function setGroupOffset($value)
    {
    }

    /**
     * @param bool $value
     * @return SolrQuery
     */
    public function setGroupTruncate($value)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setHighlight($flag)
    {
    }

    /**
     * @param string $field
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightAlternateField($field, $field_override = '')
    {
    }

    /**
     * @param string $formatter
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightFormatter($formatter, $field_override = '')
    {
    }

    /**
     * @param string $fragmenter
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightFragmenter($fragmenter, $field_override = '')
    {
    }

    /**
     * @param int $size
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightFragsize($size, $field_override = '')
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setHighlightHighlightMultiTerm($flag)
    {
    }

    /**
     * @param int $fieldLength
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightMaxAlternateFieldLength($fieldLength, $field_override = '')
    {
    }

    /**
     * @param int $value
     * @return SolrQuery
     */
    public function setHighlightMaxAnalyzedChars($value)
    {
    }

    /**
     * @param bool $flag
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightMergeContiguous($flag, $field_override = '')
    {
    }

    /**
     * @param int $maxAnalyzedChars
     * @return SolrQuery
     */
    public function setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars)
    {
    }

    /**
     * @param string $value
     * @return SolrQuery
     */
    public function setHighlightRegexPattern($value)
    {
    }

    /**
     * @param float $factor
     * @return SolrQuery
     */
    public function setHighlightRegexSlop($factor)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setHighlightRequireFieldMatch($flag)
    {
    }

    /**
     * @param string $simplePost
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightSimplePost($simplePost, $field_override = '')
    {
    }

    /**
     * @param string $simplePre
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightSimplePre($simplePre, $field_override = '')
    {
    }

    /**
     * @param int $value
     * @param string $field_override
     * @return SolrQuery
     */
    public function setHighlightSnippets($value, $field_override = '')
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setHighlightUsePhraseHighlighter($flag)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setMlt($flag)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setMltBoost($flag)
    {
    }

    /**
     * @param int $count
     * @return SolrQuery
     */
    public function setMltCount($count)
    {
    }

    /**
     * @param int $value
     * @return SolrQuery
     */
    public function setMltMaxNumQueryTerms($value)
    {
    }

    /**
     * @param int $value
     * @return SolrQuery
     */
    public function setMltMaxNumTokens($value)
    {
    }

    /**
     * @param int $maxWordLength
     * @return SolrQuery
     */
    public function setMltMaxWordLength($maxWordLength)
    {
    }

    /**
     * @param int $minDocFrequency
     * @return SolrQuery
     */
    public function setMltMinDocFrequency($minDocFrequency)
    {
    }

    /**
     * @param int $minTermFrequency
     * @return SolrQuery
     */
    public function setMltMinTermFrequency($minTermFrequency)
    {
    }

    /**
     * @param int $minWordLength
     * @return SolrQuery
     */
    public function setMltMinWordLength($minWordLength)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setOmitHeader($flag)
    {
    }

    /**
     * @param string $query
     * @return SolrQuery
     */
    public function setQuery($query)
    {
    }

    /**
     * @param int $rows
     * @return SolrQuery
     */
    public function setRows($rows)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setShowDebugInfo($flag)
    {
    }

    /**
     * @param int $start
     * @return SolrQuery
     */
    public function setStart($start)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setStats($flag)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setTerms($flag)
    {
    }

    /**
     * @param string $fieldname
     * @return SolrQuery
     */
    public function setTermsField($fieldname)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setTermsIncludeLowerBound($flag)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setTermsIncludeUpperBound($flag)
    {
    }

    /**
     * @param int $limit
     * @return SolrQuery
     */
    public function setTermsLimit($limit)
    {
    }

    /**
     * @param string $lowerBound
     * @return SolrQuery
     */
    public function setTermsLowerBound($lowerBound)
    {
    }

    /**
     * @param int $frequency
     * @return SolrQuery
     */
    public function setTermsMaxCount($frequency)
    {
    }

    /**
     * @param int $frequency
     * @return SolrQuery
     */
    public function setTermsMinCount($frequency)
    {
    }

    /**
     * @param string $prefix
     * @return SolrQuery
     */
    public function setTermsPrefix($prefix)
    {
    }

    /**
     * @param bool $flag
     * @return SolrQuery
     */
    public function setTermsReturnRaw($flag)
    {
    }

    /**
     * @param int $sortType
     * @return SolrQuery
     */
    public function setTermsSort($sortType)
    {
    }

    /**
     * @param string $upperBound
     * @return SolrQuery
     */
    public function setTermsUpperBound($upperBound)
    {
    }

    /**
     * @param int $timeAllowed
     * @return SolrQuery
     */
    public function setTimeAllowed($timeAllowed)
    {
    }
}
