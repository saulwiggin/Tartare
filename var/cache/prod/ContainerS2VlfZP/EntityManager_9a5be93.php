<?php

include_once\dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere0c4e = null;
    private $initializer9448e = null;
    private static $publicPropertiesf4e81 = [
        
    ];
    public function getConnection()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getConnection', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getMetadataFactory', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getExpressionBuilder', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'beginTransaction', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getCache', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'transactional', array('func' => $func), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->transactional($func);
    }
    public function commit()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'commit', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->commit();
    }
    public function rollback()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'rollback', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getClassMetadata', array('className' => $className), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createQuery', array('dql' => $dql), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createNamedQuery', array('name' => $name), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createQueryBuilder', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'flush', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'clear', array('entityName' => $entityName), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->clear($entityName);
    }
    public function close()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'close', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->close();
    }
    public function persist($entity)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'persist', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'remove', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'refresh', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'detach', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'merge', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'contains', array('entity' => $entity), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getEventManager', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getConfiguration', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'isOpen', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getUnitOfWork', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getProxyFactory', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'initializeObject', array('obj' => $obj), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getFilters', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'isFiltersStateClean', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'hasFilters', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9448e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere0c4e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__get', ['name' => $name], $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        if (isset(self::$publicPropertiesf4e81[$name])) {
            return $this->valueHoldere0c4e->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c4e;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHoldere0c4e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c4e;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldere0c4e;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__isset', array('name' => $name), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c4e;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere0c4e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__unset', array('name' => $name), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c4e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere0c4e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__clone', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        $this->valueHoldere0c4e = clone $this->valueHoldere0c4e;
    }
    public function __sleep()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__sleep', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return array('valueHoldere0c4e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9448e = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer9448e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'initializeProxy', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere0c4e;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHoldere0c4e;
    }
}
