<?php
/**
 * NonRealtimeCurrency
 *
 * PHP version 5
 *
 * @category Class
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Aliseeks API
 *
 * AliExpress product searching and product details retrieval API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AliseeksApi\Model;
use \AliseeksApi\ObjectSerializer;

/**
 * NonRealtimeCurrency Class Doc Comment
 *
 * @category Class
 * @description Currencies supported by non realtime endpoints
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NonRealtimeCurrency
{
    /**
     * Possible values of this enum
     */
    const AUD = 'AUD';
    const BRL = 'BRL';
    const CAD = 'CAD';
    const CHF = 'CHF';
    const CLP = 'CLP';
    const CNY = 'CNY';
    const EUR = 'EUR';
    const GBP = 'GBP';
    const IDR = 'IDR';
    const JPY = 'JPY';
    const KRW = 'KRW';
    const MXN = 'MXN';
    const NZD = 'NZD';
    const PLN = 'PLN';
    const RUB = 'RUB';
    const SEK = 'SEK';
    const SGD = 'SGD';
    const _TRY = 'TRY';
    const UAH = 'UAH';
    const USD = 'USD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUD,
            self::BRL,
            self::CAD,
            self::CHF,
            self::CLP,
            self::CNY,
            self::EUR,
            self::GBP,
            self::IDR,
            self::JPY,
            self::KRW,
            self::MXN,
            self::NZD,
            self::PLN,
            self::RUB,
            self::SEK,
            self::SGD,
            self::_TRY,
            self::UAH,
            self::USD,
        ];
    }
}

