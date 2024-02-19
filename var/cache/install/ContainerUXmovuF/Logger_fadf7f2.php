<?php

namespace ContainerUXmovuF;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder83658 = null;
    private $initializer201d3 = null;
    private static $publicProperties56e02 = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializer201d3 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolder83658) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder83658 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolder83658->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__get', ['name' => $name], $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        if (isset(self::$publicProperties56e02[$name])) {
            return $this->valueHolder83658->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}