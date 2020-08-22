<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder18e3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0990e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesca66a = [
        
    ];

    public function getConnection()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getConnection', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getMetadataFactory', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getExpressionBuilder', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'beginTransaction', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getCache', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'transactional', array('func' => $func), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->transactional($func);
    }

    public function commit()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'commit', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->commit();
    }

    public function rollback()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'rollback', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'createQuery', array('dql' => $dql), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'createQueryBuilder', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'flush', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'clear', array('entityName' => $entityName), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->clear($entityName);
    }

    public function close()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'close', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->close();
    }

    public function persist($entity)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'persist', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'remove', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'refresh', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'detach', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'merge', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'contains', array('entity' => $entity), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getEventManager', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getConfiguration', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'isOpen', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getUnitOfWork', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getProxyFactory', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getFilters', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'isFiltersStateClean', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'hasFilters', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0990e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder18e3a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder18e3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder18e3a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, '__get', ['name' => $name], $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        if (isset(self::$publicPropertiesca66a[$name])) {
            return $this->valueHolder18e3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e3a;

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

        $targetObject = $this->valueHolder18e3a;
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
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e3a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder18e3a;
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
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, '__isset', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e3a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder18e3a;
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
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, '__unset', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e3a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder18e3a;
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
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, '__clone', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        $this->valueHolder18e3a = clone $this->valueHolder18e3a;
    }

    public function __sleep()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, '__sleep', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return array('valueHolder18e3a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer0990e = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer0990e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'initializeProxy', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder18e3a;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder18e3a;
    }


}
