<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingValue extends \Google\AdsApi\AdManager\v201811\ObjectValue
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\Targeting $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\Targeting $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\Targeting
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\Targeting $value
     * @return \Google\AdsApi\AdManager\v201811\TargetingValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
