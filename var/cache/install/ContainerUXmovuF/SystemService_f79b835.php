<?php

namespace ContainerUXmovuF;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder83658 = null;
    private $initializer201d3 = null;
    private static $publicProperties56e02 = [
        
    ];
    public function getDbversion()
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'getDbversion', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'getMemoryLimit', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'getMaintenanceToken', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $this->valueHolder83658->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $this->valueHolder83658->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'isMaintenanceMode', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializer201d3 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolder83658) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder83658 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolder83658->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__get', ['name' => $name], $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        if (isset(self::$publicProperties56e02[$name])) {
            return $this->valueHolder83658->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
