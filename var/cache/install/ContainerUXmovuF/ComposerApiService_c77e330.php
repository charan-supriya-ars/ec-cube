<?php

namespace ContainerUXmovuF;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder83658 = null;
    private $initializer201d3 = null;
    private static $publicProperties56e02 = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null, $from = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output, 'from' => $from), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->execRequire($packageName, $output, $from);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0) : void
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $this->valueHolder83658->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
return;
    }
    public function execConfig($key, $value = null)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'getConfig', array(), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        return $this->valueHolder83658->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo) : void
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        $this->valueHolder83658->configureRepository($BaseInfo);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializer201d3 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder83658) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolder83658 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHolder83658->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer201d3 && ($this->initializer201d3->__invoke($valueHolder83658, $this, '__get', ['name' => $name], $this->initializer201d3) || 1) && $this->valueHolder83658 = $valueHolder83658;
        if (isset(self::$publicProperties56e02[$name])) {
            return $this->valueHolder83658->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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

if (!\class_exists('ComposerApiService_c77e330', false)) {
    \class_alias(__NAMESPACE__.'\\ComposerApiService_c77e330', 'ComposerApiService_c77e330', false);
}
