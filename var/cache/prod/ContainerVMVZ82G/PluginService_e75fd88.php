<?php

namespace ContainerVMVZ82G;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1ca38 = null;
    private $initializer8aebc = null;
    private static $publicProperties11abb = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'installWithCode', array('code' => $code), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'preInstall', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'createTempDir', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'deleteDirs', array('arr' => $arr), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'checkSymbolName', array('string' => $string), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'deleteFile', array('path' => $path), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'checkSamePlugin', array('code' => $code), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'calcPluginDir', array('code' => $code), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'createPluginDir', array('d' => $d), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'unregisterPlugin', array('p' => $p), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'disable', array('plugin' => $plugin), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer8aebc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder1ca38) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder1ca38 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolder1ca38->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__get', ['name' => $name], $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        if (isset(self::$publicProperties11abb[$name])) {
            return $this->valueHolder1ca38->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
