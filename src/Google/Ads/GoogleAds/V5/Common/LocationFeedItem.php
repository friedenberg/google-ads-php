<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/extensions.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a location extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.LocationFeedItem</code>
 */
class LocationFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     */
    protected $business_name = null;
    /**
     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_1 = 2;</code>
     */
    protected $address_line_1 = null;
    /**
     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_2 = 3;</code>
     */
    protected $address_line_2 = null;
    /**
     * City of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 4;</code>
     */
    protected $city = null;
    /**
     * Province of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province = 5;</code>
     */
    protected $province = null;
    /**
     * Postal code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 6;</code>
     */
    protected $postal_code = null;
    /**
     * Country code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 7;</code>
     */
    protected $country_code = null;
    /**
     * Phone number of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 8;</code>
     */
    protected $phone_number = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $business_name
     *           The name of the business.
     *     @type \Google\Protobuf\StringValue $address_line_1
     *           Line 1 of the business address.
     *     @type \Google\Protobuf\StringValue $address_line_2
     *           Line 2 of the business address.
     *     @type \Google\Protobuf\StringValue $city
     *           City of the business address.
     *     @type \Google\Protobuf\StringValue $province
     *           Province of the business address.
     *     @type \Google\Protobuf\StringValue $postal_code
     *           Postal code of the business address.
     *     @type \Google\Protobuf\StringValue $country_code
     *           Country code of the business address.
     *     @type \Google\Protobuf\StringValue $phone_number
     *           Phone number of the business.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBusinessName()
    {
        return isset($this->business_name) ? $this->business_name : null;
    }

    public function hasBusinessName()
    {
        return isset($this->business_name);
    }

    public function clearBusinessName()
    {
        unset($this->business_name);
    }

    /**
     * Returns the unboxed value from <code>getBusinessName()</code>

     * The name of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @return string|null
     */
    public function getBusinessNameUnwrapped()
    {
        return $this->readWrapperValue("business_name");
    }

    /**
     * The name of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBusinessNameUnwrapped($var)
    {
        $this->writeWrapperValue("business_name", $var);
        return $this;}

    /**
     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_1 = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAddressLine1()
    {
        return isset($this->address_line_1) ? $this->address_line_1 : null;
    }

    public function hasAddressLine1()
    {
        return isset($this->address_line_1);
    }

    public function clearAddressLine1()
    {
        unset($this->address_line_1);
    }

    /**
     * Returns the unboxed value from <code>getAddressLine1()</code>

     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_1 = 2;</code>
     * @return string|null
     */
    public function getAddressLine1Unwrapped()
    {
        return $this->readWrapperValue("address_line_1");
    }

    /**
     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_1 = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAddressLine1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->address_line_1 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_1 = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAddressLine1Unwrapped($var)
    {
        $this->writeWrapperValue("address_line_1", $var);
        return $this;}

    /**
     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_2 = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAddressLine2()
    {
        return isset($this->address_line_2) ? $this->address_line_2 : null;
    }

    public function hasAddressLine2()
    {
        return isset($this->address_line_2);
    }

    public function clearAddressLine2()
    {
        unset($this->address_line_2);
    }

    /**
     * Returns the unboxed value from <code>getAddressLine2()</code>

     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_2 = 3;</code>
     * @return string|null
     */
    public function getAddressLine2Unwrapped()
    {
        return $this->readWrapperValue("address_line_2");
    }

    /**
     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_2 = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAddressLine2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->address_line_2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue address_line_2 = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAddressLine2Unwrapped($var)
    {
        $this->writeWrapperValue("address_line_2", $var);
        return $this;}

    /**
     * City of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }

    public function hasCity()
    {
        return isset($this->city);
    }

    public function clearCity()
    {
        unset($this->city);
    }

    /**
     * Returns the unboxed value from <code>getCity()</code>

     * City of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 4;</code>
     * @return string|null
     */
    public function getCityUnwrapped()
    {
        return $this->readWrapperValue("city");
    }

    /**
     * City of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * City of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCityUnwrapped($var)
    {
        $this->writeWrapperValue("city", $var);
        return $this;}

    /**
     * Province of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getProvince()
    {
        return isset($this->province) ? $this->province : null;
    }

    public function hasProvince()
    {
        return isset($this->province);
    }

    public function clearProvince()
    {
        unset($this->province);
    }

    /**
     * Returns the unboxed value from <code>getProvince()</code>

     * Province of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province = 5;</code>
     * @return string|null
     */
    public function getProvinceUnwrapped()
    {
        return $this->readWrapperValue("province");
    }

    /**
     * Province of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setProvince($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->province = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Province of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setProvinceUnwrapped($var)
    {
        $this->writeWrapperValue("province", $var);
        return $this;}

    /**
     * Postal code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPostalCode()
    {
        return isset($this->postal_code) ? $this->postal_code : null;
    }

    public function hasPostalCode()
    {
        return isset($this->postal_code);
    }

    public function clearPostalCode()
    {
        unset($this->postal_code);
    }

    /**
     * Returns the unboxed value from <code>getPostalCode()</code>

     * Postal code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 6;</code>
     * @return string|null
     */
    public function getPostalCodeUnwrapped()
    {
        return $this->readWrapperValue("postal_code");
    }

    /**
     * Postal code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Postal code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPostalCodeUnwrapped($var)
    {
        $this->writeWrapperValue("postal_code", $var);
        return $this;}

    /**
     * Country code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : null;
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Returns the unboxed value from <code>getCountryCode()</code>

     * Country code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 7;</code>
     * @return string|null
     */
    public function getCountryCodeUnwrapped()
    {
        return $this->readWrapperValue("country_code");
    }

    /**
     * Country code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Country code of the business address.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryCodeUnwrapped($var)
    {
        $this->writeWrapperValue("country_code", $var);
        return $this;}

    /**
     * Phone number of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPhoneNumber()
    {
        return isset($this->phone_number) ? $this->phone_number : null;
    }

    public function hasPhoneNumber()
    {
        return isset($this->phone_number);
    }

    public function clearPhoneNumber()
    {
        unset($this->phone_number);
    }

    /**
     * Returns the unboxed value from <code>getPhoneNumber()</code>

     * Phone number of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 8;</code>
     * @return string|null
     */
    public function getPhoneNumberUnwrapped()
    {
        return $this->readWrapperValue("phone_number");
    }

    /**
     * Phone number of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Phone number of the business.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 8;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPhoneNumberUnwrapped($var)
    {
        $this->writeWrapperValue("phone_number", $var);
        return $this;}

}

