<?php

namespace ContainerUXmovuF;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'TaxRuleService.php';
class TaxRuleService_289f969 extends \Eccube\Service\TaxRuleService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder83658 = null;
    private $initializer201d3 = null;
    private static $publicProperties56e02 = [
        
    ];
    public function getTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'getTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->getTax($price, $product, $productClass, $pref, $country);
    }
    public function getPriceIncTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'getPriceIncTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->getPriceIncTax($price, $product, $productClass, $pref, $country);
    }
    public function calcTax($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'calcTax', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->calcTax($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public function calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'calcTaxIncluded', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->BaseInfo, $instance->taxRuleRepository);
        $instance->initializer201d3 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;
        if (! $this->valueHolder83658) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\TaxRuleService');
            $this->valueHolder83658 = $reflection->newInstanceWithoutConstructor();
        unset($this->BaseInfo, $this->taxRuleRepository);
        }
        $this->valueHolder83658->__construct($taxRuleRepository, $baseInfoRepository);
    }
    public function & __get($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__get', ['name' => $name], $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        if (isset(self::$publicProperties56e02[$name])) {
            return $this->valueHolder83658->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83658;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder83658;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83658;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder83658;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__isset', array('name' => $name), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83658;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder83658;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__unset', array('name' => $name), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83658;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder83658;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__clone', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $this->valueHolder83658 = clone $this->valueHolder83658;
    }
    public function __sleep()
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__sleep', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return array('valueHolder83658');
    }
    public function __wakeup()
    {
        unset($this->BaseInfo, $this->taxRuleRepository);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer201d3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer201d3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'initializeProxy', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83658;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83658;
    }
}

if (!\class_exists('TaxRuleService_289f969', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleService_289f969', 'TaxRuleService_289f969', false);
}
