<?php

namespace ContainerVMVZ82G;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1ca38 = null;
    private $initializer8aebc = null;
    private static $publicProperties11abb = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findAllEnabled', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findByCode', array('code' => $code), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'delete', array('entity' => $entity), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->delete($entity);
    }
    public function save($entity)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'save', array('entity' => $entity), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'clear', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findAll', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'count', array('criteria' => $criteria), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'getClassName', array(), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, 'matching', array('criteria' => $criteria), $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        return $this->valueHolder1ca38->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer8aebc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;
        if (! $this->valueHolder1ca38) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolder1ca38 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder1ca38->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializer8aebc && ($this->initializer8aebc->__invoke($valueHolder1ca38, $this, '__get', ['name' => $name], $this->initializer8aebc) || 1) && $this->valueHolder1ca38 = $valueHolder1ca38;
        if (isset(self::$publicProperties11abb[$name])) {
            return $this->valueHolder1ca38->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}
