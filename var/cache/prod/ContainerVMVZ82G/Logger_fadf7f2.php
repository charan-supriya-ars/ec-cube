<?php

namespace ContainerVMVZ82G;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1ca38 = null;
    private $initializer8aebc = null;
    private static $publicProperties11abb = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializer8aebc = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolder1ca38) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder1ca38 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolder1ca38->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__get', ['name' => $name], $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        if (isset(self::$publicProperties11abb[$name])) {
            return $this->valueHolder1ca38->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
