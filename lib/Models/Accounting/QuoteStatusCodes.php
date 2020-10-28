<?php
/**
 * QuoteStatusCodes
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
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * QuoteStatusCodes Class Doc Comment
 *
 * @category Class
 * @description The status of the quote.
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QuoteStatusCodes
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'DRAFT';
    const SENT = 'SENT';
    const DECLINED = 'DECLINED';
    const ACCEPTED = 'ACCEPTED';
    const INVOICED = 'INVOICED';
    const DELETED = 'DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::SENT,
            self::DECLINED,
            self::ACCEPTED,
            self::INVOICED,
            self::DELETED,
        ];
    }
}


