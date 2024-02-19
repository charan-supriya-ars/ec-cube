<?php

namespace ContainerUXmovuF;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';
class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder83658 = null;
    private $initializer201d3 = null;
    private static $publicProperties56e02 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        if ($this->valueHolder83658 === $returnValue = $this->valueHolder83658->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer201d3 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder83658) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder83658 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__get', ['name' => $name], $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        if (isset(self::$publicProperties56e02[$name])) {
            return $this->valueHolder83658->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
