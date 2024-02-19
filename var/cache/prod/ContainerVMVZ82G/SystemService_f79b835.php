<?php

namespace ContainerVMVZ82G;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1ca38 = null;
    private $initializer8aebc = null;
    private static $publicProperties11abb = [
        
    ];
    public function getDbversion()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'getDbversion', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'getMemoryLimit', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'getMaintenanceToken', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        $this->valueHolder1ca38->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        $this->valueHolder1ca38->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'isMaintenanceMode', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->isMaintenanceMode();
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
        $instance->initializer8aebc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolder1ca38) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder1ca38 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolder1ca38->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__get', ['name' => $name], $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        if (isset(self::$publicProperties11abb[$name])) {
            return $this->valueHolder1ca38->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca38;
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
        $targetObject = $this->valueHolder1ca38;
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
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca38;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1ca38;
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
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__isset', array('name' => $name), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca38;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1ca38;
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
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__unset', array('name' => $name), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca38;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1ca38;
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
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__clone', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        $this->valueHolder1ca38 = clone $this->valueHolder1ca38;
    }
    public function __sleep()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__sleep', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return array('valueHolder1ca38');
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
        $this->initializer8aebc = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8aebc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'initializeProxy', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ca38;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ca38;
    }
}

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
