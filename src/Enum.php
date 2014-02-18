<?php

/**
 * PHP abstract enum class
 *
 * PHP version 5.3
 */

/**
 * PHP abstract enum class
 *
 * @category    PHP
 * @package     Enum
 * @author      Jan Fischer, bitWorking <info@bitworking.de>
 * @copyright   2014 Jan Fischer
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 */
abstract class Enum
{
    const __default = null;

    private $_defaultName = '__default';
    private $_value;
    private $_constants;

    public function __construct($initialValue = null)
    {
        if (null === $initialValue) {
            $this->_value = static::__default;
        }
        else {
            if ($this->_hasValue($initialValue)) {
                $this->_value = $initialValue;
            }
            else {
                throw new \UnexpectedValueException('Value not a const in enum '.get_called_class());
            }
        }
    }

    private function _getConstants()
    {
        if (null === $this->_constants) {
            $class = new \ReflectionClass($this);
            $this->_constants = $class->getConstants();
        }
        return $this->_constants;
    }

    private function _hasValue($constantValue)
    {
        $constants = $this->_getConstants();
        foreach ($constants as $key => $value) {
            if ($value == $constantValue) {
                return true;
            }
        }
        return false;
    }

    public function getConstList($includeDefault = false)
    {
        $constants = $this->_getConstants();
        if ($includeDefault) {
            return $constants;
        }
        unset($constants[$this->_defaultName]);
        return $constants;
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function __invoke()
    {
        return $this->_value;
    }

    public function __toString()
    {
        return (string)$this->_value;
    }

}
