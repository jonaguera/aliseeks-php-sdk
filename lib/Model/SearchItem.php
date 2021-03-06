<?php
/**
 * SearchItem
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
 * SearchItem Class Doc Comment
 *
 * @category Class
 * @description Aliseeks search item
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'title' => 'string',
        'category_id' => 'int',
        'image_url' => 'string',
        'detail_url' => 'string',
        'lot_size' => 'int',
        'lot_unit' => 'string',
        'price' => '\AliseeksApi\Model\Amount',
        'ratings' => 'double',
        'orders' => 'double',
        'freight' => '\AliseeksApi\Model\SearchItemFreight',
        'seller' => '\AliseeksApi\Model\SearchItemSeller',
        'freight_types' => '\AliseeksApi\Model\SearchItemFreightType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'category_id' => 'int32',
        'image_url' => null,
        'detail_url' => null,
        'lot_size' => 'int32',
        'lot_unit' => null,
        'price' => null,
        'ratings' => 'double',
        'orders' => 'int32',
        'freight' => null,
        'seller' => null,
        'freight_types' => null
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
        'category_id' => 'categoryId',
        'image_url' => 'imageUrl',
        'detail_url' => 'detailUrl',
        'lot_size' => 'lotSize',
        'lot_unit' => 'lotUnit',
        'price' => 'price',
        'ratings' => 'ratings',
        'orders' => 'orders',
        'freight' => 'freight',
        'seller' => 'seller',
        'freight_types' => 'freightTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'category_id' => 'setCategoryId',
        'image_url' => 'setImageUrl',
        'detail_url' => 'setDetailUrl',
        'lot_size' => 'setLotSize',
        'lot_unit' => 'setLotUnit',
        'price' => 'setPrice',
        'ratings' => 'setRatings',
        'orders' => 'setOrders',
        'freight' => 'setFreight',
        'seller' => 'setSeller',
        'freight_types' => 'setFreightTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'category_id' => 'getCategoryId',
        'image_url' => 'getImageUrl',
        'detail_url' => 'getDetailUrl',
        'lot_size' => 'getLotSize',
        'lot_unit' => 'getLotUnit',
        'price' => 'getPrice',
        'ratings' => 'getRatings',
        'orders' => 'getOrders',
        'freight' => 'getFreight',
        'seller' => 'getSeller',
        'freight_types' => 'getFreightTypes'
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['detail_url'] = isset($data['detail_url']) ? $data['detail_url'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
        $this->container['lot_unit'] = isset($data['lot_unit']) ? $data['lot_unit'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['ratings'] = isset($data['ratings']) ? $data['ratings'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['freight'] = isset($data['freight']) ? $data['freight'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['freight_types'] = isset($data['freight_types']) ? $data['freight_types'] : null;
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
     * @param string|null $id AliExpress Product ID
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
     * @param string|null $title The subject / title of the product
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id The category of the item
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * @param string|null $image_url Image URL for the item
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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
     * Gets lot_size
     *
     * @return int|null
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int|null $lot_size The lot size that the item is sold in
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets lot_unit
     *
     * @return string|null
     */
    public function getLotUnit()
    {
        return $this->container['lot_unit'];
    }

    /**
     * Sets lot_unit
     *
     * @param string|null $lot_unit The unit when describing a lot for this item
     *
     * @return $this
     */
    public function setLotUnit($lot_unit)
    {
        $this->container['lot_unit'] = $lot_unit;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \AliseeksApi\Model\Amount|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \AliseeksApi\Model\Amount|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param double|null $ratings The ratings of this item
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
     * @return double|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param double|null $orders The number of orders of this item
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets freight
     *
     * @return \AliseeksApi\Model\SearchItemFreight|null
     */
    public function getFreight()
    {
        return $this->container['freight'];
    }

    /**
     * Sets freight
     *
     * @param \AliseeksApi\Model\SearchItemFreight|null $freight freight
     *
     * @return $this
     */
    public function setFreight($freight)
    {
        $this->container['freight'] = $freight;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \AliseeksApi\Model\SearchItemSeller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \AliseeksApi\Model\SearchItemSeller|null $seller seller
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets freight_types
     *
     * @return \AliseeksApi\Model\SearchItemFreightType[]|null
     */
    public function getFreightTypes()
    {
        return $this->container['freight_types'];
    }

    /**
     * Sets freight_types
     *
     * @param \AliseeksApi\Model\SearchItemFreightType[]|null $freight_types List of freight types available for this item
     *
     * @return $this
     */
    public function setFreightTypes($freight_types)
    {
        $this->container['freight_types'] = $freight_types;

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


