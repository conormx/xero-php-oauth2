<?php
/**
 * BatchPaymentDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.4.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * BatchPaymentDetails Class Doc Comment
 *
 * @category Class
 * @description Bank details for use on a batch payment stored with each contact
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BatchPaymentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchPaymentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_account_number' => 'string',
        'bank_account_name' => 'string',
        'details' => 'string',
        'code' => 'string',
        'reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bank_account_number' => null,
        'bank_account_name' => null,
        'details' => null,
        'code' => null,
        'reference' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bank_account_number' => 'BankAccountNumber',
        'bank_account_name' => 'BankAccountName',
        'details' => 'Details',
        'code' => 'Code',
        'reference' => 'Reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_account_number' => 'setBankAccountNumber',
        'bank_account_name' => 'setBankAccountName',
        'details' => 'setDetails',
        'code' => 'setCode',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_account_number' => 'getBankAccountNumber',
        'bank_account_name' => 'getBankAccountName',
        'details' => 'getDetails',
        'code' => 'getCode',
        'reference' => 'getReference'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['bank_account_name'] = isset($data['bank_account_name']) ? $data['bank_account_name'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 12)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 12)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 12.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets bank_account_number
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string|null $bank_account_number Bank account number for use with Batch Payments
     *
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {

        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }



    /**
     * Gets bank_account_name
     *
     * @return string|null
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name
     *
     * @param string|null $bank_account_name Name of bank for use with Batch Payments
     *
     * @return $this
     */
    public function setBankAccountName($bank_account_name)
    {

        $this->container['bank_account_name'] = $bank_account_name;

        return $this;
    }



    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     *
     * @return $this
     */
    public function setDetails($details)
    {

        $this->container['details'] = $details;

        return $this;
    }



    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 12)) {
            throw new \InvalidArgumentException('invalid length for $code when calling BatchPaymentDetails., must be smaller than or equal to 12.');
        }


        $this->container['code'] = $code;

        return $this;
    }



    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 12)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling BatchPaymentDetails., must be smaller than or equal to 12.');
        }


        $this->container['reference'] = $reference;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


