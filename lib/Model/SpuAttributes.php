<?php
/**
 * SpuAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * SpuAttributes Class Doc Comment
 *
 * @category Class
 * @description SPU属性字段
 * @package  Douyin\Open
 * @author   抖音小开
 */
class SpuAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'spu_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_1201' => '\Douyin\Open\Model\SpuAttributes1201[]',
'_1202' => 'string',
'_1203' => 'int',
'_1204' => 'float',
'_1205' => 'string',
'_1206' => 'string[]',
'_1207' => 'string',
'_1208' => 'string',
'_1209' => '\Douyin\Open\Model\SpuAttributes1209',
'_1210' => 'string',
'_1211' => '\Douyin\Open\Model\SpuAttributes1211',
'_1212' => '\Douyin\Open\Model\SpuAttributes1212',
'_1213' => '\Douyin\Open\Model\SpuAttributes1213',
'_1214' => 'int',
'_90201' => '\Douyin\Open\Model\SpuAttributes90201',
'_90202' => 'int',
'_90203' => 'int',
'_90204' => 'int',
'_90205' => '\Douyin\Open\Model\SpuAttributes90205',
'_4101' => '\Douyin\Open\Model\SpuAttributes4101'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_1201' => null,
'_1202' => null,
'_1203' => null,
'_1204' => null,
'_1205' => null,
'_1206' => null,
'_1207' => null,
'_1208' => null,
'_1209' => null,
'_1210' => null,
'_1211' => null,
'_1212' => null,
'_1213' => null,
'_1214' => null,
'_90201' => null,
'_90202' => null,
'_90203' => null,
'_90204' => null,
'_90205' => null,
'_4101' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_1201' => '1201',
'_1202' => '1202',
'_1203' => '1203',
'_1204' => '1204',
'_1205' => '1205',
'_1206' => '1206',
'_1207' => '1207',
'_1208' => '1208',
'_1209' => '1209',
'_1210' => '1210',
'_1211' => '1211',
'_1212' => '1212',
'_1213' => '1213',
'_1214' => '1214',
'_90201' => '90201',
'_90202' => '90202',
'_90203' => '90203',
'_90204' => '90204',
'_90205' => '90205',
'_4101' => '4101'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_1201' => 'set1201',
'_1202' => 'set1202',
'_1203' => 'set1203',
'_1204' => 'set1204',
'_1205' => 'set1205',
'_1206' => 'set1206',
'_1207' => 'set1207',
'_1208' => 'set1208',
'_1209' => 'set1209',
'_1210' => 'set1210',
'_1211' => 'set1211',
'_1212' => 'set1212',
'_1213' => 'set1213',
'_1214' => 'set1214',
'_90201' => 'set90201',
'_90202' => 'set90202',
'_90203' => 'set90203',
'_90204' => 'set90204',
'_90205' => 'set90205',
'_4101' => 'set4101'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_1201' => 'get1201',
'_1202' => 'get1202',
'_1203' => 'get1203',
'_1204' => 'get1204',
'_1205' => 'get1205',
'_1206' => 'get1206',
'_1207' => 'get1207',
'_1208' => 'get1208',
'_1209' => 'get1209',
'_1210' => 'get1210',
'_1211' => 'get1211',
'_1212' => 'get1212',
'_1213' => 'get1213',
'_1214' => 'get1214',
'_90201' => 'get90201',
'_90202' => 'get90202',
'_90203' => 'get90203',
'_90204' => 'get90204',
'_90205' => 'get90205',
'_4101' => 'get4101'    ];

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
        return self::$swaggerModelName;
    }

    const _1214_0 = 0;
const _1214_1 = 1;
const _1214_2 = 2;
const _1214_3 = 3;
const _1214_4 = 4;
const _1214_5 = 5;
const _1214_6 = 6;
const _1214_7 = 7;
const _1214_8 = 8;
const _1214_9 = 9;
const _1214_10 = 10;
const _90202_1 = 1;
const _90202_2 = 2;
const _90202_3 = 3;
const _90203_1 = 1;
const _90203_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function get1214AllowableValues()
    {
        return [
            self::_1214_0,
self::_1214_1,
self::_1214_2,
self::_1214_3,
self::_1214_4,
self::_1214_5,
self::_1214_6,
self::_1214_7,
self::_1214_8,
self::_1214_9,
self::_1214_10,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function get90202AllowableValues()
    {
        return [
            self::_90202_1,
self::_90202_2,
self::_90202_3,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function get90203AllowableValues()
    {
        return [
            self::_90203_1,
self::_90203_2,        ];
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
        $this->container['_1201'] = isset($data['_1201']) ? $data['_1201'] : null;
        $this->container['_1202'] = isset($data['_1202']) ? $data['_1202'] : null;
        $this->container['_1203'] = isset($data['_1203']) ? $data['_1203'] : null;
        $this->container['_1204'] = isset($data['_1204']) ? $data['_1204'] : null;
        $this->container['_1205'] = isset($data['_1205']) ? $data['_1205'] : null;
        $this->container['_1206'] = isset($data['_1206']) ? $data['_1206'] : null;
        $this->container['_1207'] = isset($data['_1207']) ? $data['_1207'] : null;
        $this->container['_1208'] = isset($data['_1208']) ? $data['_1208'] : null;
        $this->container['_1209'] = isset($data['_1209']) ? $data['_1209'] : null;
        $this->container['_1210'] = isset($data['_1210']) ? $data['_1210'] : null;
        $this->container['_1211'] = isset($data['_1211']) ? $data['_1211'] : null;
        $this->container['_1212'] = isset($data['_1212']) ? $data['_1212'] : null;
        $this->container['_1213'] = isset($data['_1213']) ? $data['_1213'] : null;
        $this->container['_1214'] = isset($data['_1214']) ? $data['_1214'] : null;
        $this->container['_90201'] = isset($data['_90201']) ? $data['_90201'] : null;
        $this->container['_90202'] = isset($data['_90202']) ? $data['_90202'] : null;
        $this->container['_90203'] = isset($data['_90203']) ? $data['_90203'] : null;
        $this->container['_90204'] = isset($data['_90204']) ? $data['_90204'] : null;
        $this->container['_90205'] = isset($data['_90205']) ? $data['_90205'] : null;
        $this->container['_4101'] = isset($data['_4101']) ? $data['_4101'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->get1214AllowableValues();
        if (!is_null($this->container['_1214']) && !in_array($this->container['_1214'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for '_1214', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->get90202AllowableValues();
        if (!is_null($this->container['_90202']) && !in_array($this->container['_90202'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for '_90202', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->get90203AllowableValues();
        if (!is_null($this->container['_90203']) && !in_array($this->container['_90203'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for '_90203', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets _1201
     *
     * @return \Douyin\Open\Model\SpuAttributes1201[]
     */
    public function get1201()
    {
        return $this->container['_1201'];
    }

    /**
     * Sets _1201
     *
     * @param \Douyin\Open\Model\SpuAttributes1201[] $_1201 设施列表
     *
     * @return $this
     */
    public function set1201($_1201)
    {
        $this->container['_1201'] = $_1201;

        return $this;
    }

    /**
     * Gets _1202
     *
     * @return string
     */
    public function get1202()
    {
        return $this->container['_1202'];
    }

    /**
     * Sets _1202
     *
     * @param string $_1202 床型名称
     *
     * @return $this
     */
    public function set1202($_1202)
    {
        $this->container['_1202'] = $_1202;

        return $this;
    }

    /**
     * Gets _1203
     *
     * @return int
     */
    public function get1203()
    {
        return $this->container['_1203'];
    }

    /**
     * Sets _1203
     *
     * @param int $_1203 可住人数
     *
     * @return $this
     */
    public function set1203($_1203)
    {
        $this->container['_1203'] = $_1203;

        return $this;
    }

    /**
     * Gets _1204
     *
     * @return float
     */
    public function get1204()
    {
        return $this->container['_1204'];
    }

    /**
     * Sets _1204
     *
     * @param float $_1204 面积(平方米)
     *
     * @return $this
     */
    public function set1204($_1204)
    {
        $this->container['_1204'] = $_1204;

        return $this;
    }

    /**
     * Gets _1205
     *
     * @return string
     */
    public function get1205()
    {
        return $this->container['_1205'];
    }

    /**
     * Sets _1205
     *
     * @param string $_1205 房型封面图
     *
     * @return $this
     */
    public function set1205($_1205)
    {
        $this->container['_1205'] = $_1205;

        return $this;
    }

    /**
     * Gets _1206
     *
     * @return string[]
     */
    public function get1206()
    {
        return $this->container['_1206'];
    }

    /**
     * Sets _1206
     *
     * @param string[] $_1206 房型相册
     *
     * @return $this
     */
    public function set1206($_1206)
    {
        $this->container['_1206'] = $_1206;

        return $this;
    }

    /**
     * Gets _1207
     *
     * @return string
     */
    public function get1207()
    {
        return $this->container['_1207'];
    }

    /**
     * Sets _1207
     *
     * @param string $_1207 房型简介
     *
     * @return $this
     */
    public function set1207($_1207)
    {
        $this->container['_1207'] = $_1207;

        return $this;
    }

    /**
     * Gets _1208
     *
     * @return string
     */
    public function get1208()
    {
        return $this->container['_1208'];
    }

    /**
     * Sets _1208
     *
     * @param string $_1208 相关政策
     *
     * @return $this
     */
    public function set1208($_1208)
    {
        $this->container['_1208'] = $_1208;

        return $this;
    }

    /**
     * Gets _1209
     *
     * @return \Douyin\Open\Model\SpuAttributes1209
     */
    public function get1209()
    {
        return $this->container['_1209'];
    }

    /**
     * Sets _1209
     *
     * @param \Douyin\Open\Model\SpuAttributes1209 $_1209 _1209
     *
     * @return $this
     */
    public function set1209($_1209)
    {
        $this->container['_1209'] = $_1209;

        return $this;
    }

    /**
     * Gets _1210
     *
     * @return string
     */
    public function get1210()
    {
        return $this->container['_1210'];
    }

    /**
     * Sets _1210
     *
     * @param string $_1210 景观
     *
     * @return $this
     */
    public function set1210($_1210)
    {
        $this->container['_1210'] = $_1210;

        return $this;
    }

    /**
     * Gets _1211
     *
     * @return \Douyin\Open\Model\SpuAttributes1211
     */
    public function get1211()
    {
        return $this->container['_1211'];
    }

    /**
     * Sets _1211
     *
     * @param \Douyin\Open\Model\SpuAttributes1211 $_1211 _1211
     *
     * @return $this
     */
    public function set1211($_1211)
    {
        $this->container['_1211'] = $_1211;

        return $this;
    }

    /**
     * Gets _1212
     *
     * @return \Douyin\Open\Model\SpuAttributes1212
     */
    public function get1212()
    {
        return $this->container['_1212'];
    }

    /**
     * Sets _1212
     *
     * @param \Douyin\Open\Model\SpuAttributes1212 $_1212 _1212
     *
     * @return $this
     */
    public function set1212($_1212)
    {
        $this->container['_1212'] = $_1212;

        return $this;
    }

    /**
     * Gets _1213
     *
     * @return \Douyin\Open\Model\SpuAttributes1213
     */
    public function get1213()
    {
        return $this->container['_1213'];
    }

    /**
     * Sets _1213
     *
     * @param \Douyin\Open\Model\SpuAttributes1213 $_1213 _1213
     *
     * @return $this
     */
    public function set1213($_1213)
    {
        $this->container['_1213'] = $_1213;

        return $this;
    }

    /**
     * Gets _1214
     *
     * @return int
     */
    public function get1214()
    {
        return $this->container['_1214'];
    }

    /**
     * Sets _1214
     *
     * @param int $_1214 早餐; 0 - 无早餐; 1~9 - n份早餐; 10 - 多份早餐
     *
     * @return $this
     */
    public function set1214($_1214)
    {
        $allowedValues = $this->get1214AllowableValues();
        if (!is_null($_1214) && !in_array($_1214, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for '_1214', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['_1214'] = $_1214;

        return $this;
    }

    /**
     * Gets _90201
     *
     * @return \Douyin\Open\Model\SpuAttributes90201
     */
    public function get90201()
    {
        return $this->container['_90201'];
    }

    /**
     * Sets _90201
     *
     * @param \Douyin\Open\Model\SpuAttributes90201 $_90201 _90201
     *
     * @return $this
     */
    public function set90201($_90201)
    {
        $this->container['_90201'] = $_90201;

        return $this;
    }

    /**
     * Gets _90202
     *
     * @return int
     */
    public function get90202()
    {
        return $this->container['_90202'];
    }

    /**
     * Sets _90202
     *
     * @param int $_90202 是否可退 1- 随时退，2-不可退, 3-有条件退
     *
     * @return $this
     */
    public function set90202($_90202)
    {
        $allowedValues = $this->get90202AllowableValues();
        if (!is_null($_90202) && !in_array($_90202, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for '_90202', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['_90202'] = $_90202;

        return $this;
    }

    /**
     * Gets _90203
     *
     * @return int
     */
    public function get90203()
    {
        return $this->container['_90203'];
    }

    /**
     * Sets _90203
     *
     * @param int $_90203 取票信息 1-需要取票 2-无需取票
     *
     * @return $this
     */
    public function set90203($_90203)
    {
        $allowedValues = $this->get90203AllowableValues();
        if (!is_null($_90203) && !in_array($_90203, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for '_90203', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['_90203'] = $_90203;

        return $this;
    }

    /**
     * Gets _90204
     *
     * @return int
     */
    public function get90204()
    {
        return $this->container['_90204'];
    }

    /**
     * Sets _90204
     *
     * @param int $_90204 门票价格(展示最近7日最低价，精确到分)
     *
     * @return $this
     */
    public function set90204($_90204)
    {
        $this->container['_90204'] = $_90204;

        return $this;
    }

    /**
     * Gets _90205
     *
     * @return \Douyin\Open\Model\SpuAttributes90205
     */
    public function get90205()
    {
        return $this->container['_90205'];
    }

    /**
     * Sets _90205
     *
     * @param \Douyin\Open\Model\SpuAttributes90205 $_90205 _90205
     *
     * @return $this
     */
    public function set90205($_90205)
    {
        $this->container['_90205'] = $_90205;

        return $this;
    }

    /**
     * Gets _4101
     *
     * @return \Douyin\Open\Model\SpuAttributes4101
     */
    public function get4101()
    {
        return $this->container['_4101'];
    }

    /**
     * Sets _4101
     *
     * @param \Douyin\Open\Model\SpuAttributes4101 $_4101 _4101
     *
     * @return $this
     */
    public function set4101($_4101)
    {
        $this->container['_4101'] = $_4101;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
