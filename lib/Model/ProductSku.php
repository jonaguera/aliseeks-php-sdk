<?php
/**
 * ProductSku
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
 * ProductSku Class Doc Comment
 *
 * @category Class
 * @description The pricing option of the product
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductSku implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductSku';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_identifiers' => '\AliseeksApi\Model\ProductPropertyVariationIdentifier[]',
        'property_value_ids' => 'int[]',
        'product_id' => 'string',
        'price' => '\AliseeksApi\Model\Amount',
        'discounted_price' => '\AliseeksApi\Model\Amount',
        'bulk_price' => '\AliseeksApi\Model\Amount',
        'bulk_quantity' => 'int',
        'stock' => 'int',
        'image_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'property_identifiers' => null,
        'property_value_ids' => 'int32',
        'product_id' => null,
        'price' => null,
        'discounted_price' => null,
        'bulk_price' => null,
        'bulk_quantity' => 'int32',
        'stock' => 'int32',
        'image_url' => null
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
        'property_identifiers' => 'propertyIdentifiers',
        'property_value_ids' => 'propertyValueIds',
        'product_id' => 'productId',
        'price' => 'price',
        'discounted_price' => 'discountedPrice',
        'bulk_price' => 'bulkPrice',
        'bulk_quantity' => 'bulkQuantity',
        'stock' => 'stock',
        'image_url' => 'imageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_identifiers' => 'setPropertyIdentifiers',
        'property_value_ids' => 'setPropertyValueIds',
        'product_id' => 'setProductId',
        'price' => 'setPrice',
        'discounted_price' => 'setDiscountedPrice',
        'bulk_price' => 'setBulkPrice',
        'bulk_quantity' => 'setBulkQuantity',
        'stock' => 'setStock',
        'image_url' => 'setImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_identifiers' => 'getPropertyIdentifiers',
        'property_value_ids' => 'getPropertyValueIds',
        'product_id' => 'getProductId',
        'price' => 'getPrice',
        'discounted_price' => 'getDiscountedPrice',
        'bulk_price' => 'getBulkPrice',
        'bulk_quantity' => 'getBulkQuantity',
        'stock' => 'getStock',
        'image_url' => 'getImageUrl'
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
        $this->container['property_identifiers'] = isset($data['property_identifiers']) ? $data['property_identifiers'] : null;
        $this->container['property_value_ids'] = isset($data['property_value_ids']) ? $data['property_value_ids'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['discounted_price'] = isset($data['discounted_price']) ? $data['discounted_price'] : null;
        $this->container['bulk_price'] = isset($data['bulk_price']) ? $data['bulk_price'] : null;
        $this->container['bulk_quantity'] = isset($data['bulk_quantity']) ? $data['bulk_quantity'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
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
     * Gets property_identifiers
     *
     * @return \AliseeksApi\Model\ProductPropertyVariationIdentifier[]|null
     */
    public function getPropertyIdentifiers()
    {
        return $this->container['property_identifiers'];
    }

    /**
     * Sets property_identifiers
     *
     * @param \AliseeksApi\Model\ProductPropertyVariationIdentifier[]|null $property_identifiers List of property variation identifiers
     *
     * @return $this
     */
    public function setPropertyIdentifiers($property_identifiers)
    {
        $this->container['property_identifiers'] = $property_identifiers;

        return $this;
    }

    /**
     * Gets property_value_ids
     *
     * @return int[]|null
     */
    public function getPropertyValueIds()
    {
        return $this->container['property_value_ids'];
    }

    /**
     * Sets property_value_ids
     *
     * @param int[]|null $property_value_ids List of property value IDs
     *
     * @return $this
     */
    public function setPropertyValueIds($property_value_ids)
    {
        $this->container['property_value_ids'] = $property_value_ids;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id The ID of the product
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets discounted_price
     *
     * @return \AliseeksApi\Model\Amount|null
     */
    public function getDiscountedPrice()
    {
        return $this->container['discounted_price'];
    }

    /**
     * Sets discounted_price
     *
     * @param \AliseeksApi\Model\Amount|null $discounted_price discounted_price
     *
     * @return $this
     */
    public function setDiscountedPrice($discounted_price)
    {
        $this->container['discounted_price'] = $discounted_price;

        return $this;
    }

    /**
     * Gets bulk_price
     *
     * @return \AliseeksApi\Model\Amount|null
     */
    public function getBulkPrice()
    {
        return $this->container['bulk_price'];
    }

    /**
     * Sets bulk_price
     *
     * @param \AliseeksApi\Model\Amount|null $bulk_price bulk_price
     *
     * @return $this
     */
    public function setBulkPrice($bulk_price)
    {
        $this->container['bulk_price'] = $bulk_price;

        return $this;
    }

    /**
     * Gets bulk_quantity
     *
     * @return int|null
     */
    public function getBulkQuantity()
    {
        return $this->container['bulk_quantity'];
    }

    /**
     * Sets bulk_quantity
     *
     * @param int|null $bulk_quantity The quantity required to use the bulk quantity price
     *
     * @return $this
     */
    public function setBulkQuantity($bulk_quantity)
    {
        $this->container['bulk_quantity'] = $bulk_quantity;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return int|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int|null $stock The stock of the product variation
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

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
     * @param string|null $image_url The image URL of the product variation
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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


