<?php
/**
 * BestSellingSearchItem
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

use \ArrayAccess;
use \AliseeksApi\ObjectSerializer;

/**
 * BestSellingSearchItem Class Doc Comment
 *
 * @category Class
 * @description A best selling item
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BestSellingSearchItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BestSellingSearchItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'title' => 'string',
        'image_url' => 'string',
        'ratings' => 'double',
        'orders' => 'int',
        'detail_url' => 'string',
        'store_detail_url' => 'string',
        'price_options' => '\AliseeksApi\Model\SearchPriceOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'image_url' => null,
        'ratings' => 'double',
        'orders' => 'int32',
        'detail_url' => null,
        'store_detail_url' => null,
        'price_options' => null
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
        'id' => 'id',
        'title' => 'title',
        'image_url' => 'imageUrl',
        'ratings' => 'ratings',
        'orders' => 'orders',
        'detail_url' => 'detailUrl',
        'store_detail_url' => 'storeDetailUrl',
        'price_options' => 'priceOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'image_url' => 'setImageUrl',
        'ratings' => 'setRatings',
        'orders' => 'setOrders',
        'detail_url' => 'setDetailUrl',
        'store_detail_url' => 'setStoreDetailUrl',
        'price_options' => 'setPriceOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'image_url' => 'getImageUrl',
        'ratings' => 'getRatings',
        'orders' => 'getOrders',
        'detail_url' => 'getDetailUrl',
        'store_detail_url' => 'getStoreDetailUrl',
        'price_options' => 'getPriceOptions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['ratings'] = isset($data['ratings']) ? $data['ratings'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['detail_url'] = isset($data['detail_url']) ? $data['detail_url'] : null;
        $this->container['store_detail_url'] = isset($data['store_detail_url']) ? $data['store_detail_url'] : null;
        $this->container['price_options'] = isset($data['price_options']) ? $data['price_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the product
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the product
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url The url of the product image
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets ratings
     *
     * @return double|null
     */
    public function getRatings()
    {
        return $this->container['ratings'];
    }

    /**
     * Sets ratings
     *
     * @param double|null $ratings The product ratings
     *
     * @return $this
     */
    public function setRatings($ratings)
    {
        $this->container['ratings'] = $ratings;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return int|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param int|null $orders The number of orders that the item has
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets detail_url
     *
     * @return string|null
     */
    public function getDetailUrl()
    {
        return $this->container['detail_url'];
    }

    /**
     * Sets detail_url
     *
     * @param string|null $detail_url The detail URL of the item
     *
     * @return $this
     */
    public function setDetailUrl($detail_url)
    {
        $this->container['detail_url'] = $detail_url;

        return $this;
    }

    /**
     * Gets store_detail_url
     *
     * @return string|null
     */
    public function getStoreDetailUrl()
    {
        return $this->container['store_detail_url'];
    }

    /**
     * Sets store_detail_url
     *
     * @param string|null $store_detail_url The store detail URL for the item
     *
     * @return $this
     */
    public function setStoreDetailUrl($store_detail_url)
    {
        $this->container['store_detail_url'] = $store_detail_url;

        return $this;
    }

    /**
     * Gets price_options
     *
     * @return \AliseeksApi\Model\SearchPriceOption[]|null
     */
    public function getPriceOptions()
    {
        return $this->container['price_options'];
    }

    /**
     * Sets price_options
     *
     * @param \AliseeksApi\Model\SearchPriceOption[]|null $price_options The price options of the item
     *
     * @return $this
     */
    public function setPriceOptions($price_options)
    {
        $this->container['price_options'] = $price_options;

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
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


