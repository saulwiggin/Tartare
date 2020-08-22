<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderbe5d7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer64411 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese80b3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getConnection', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getMetadataFactory', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getExpressionBuilder', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'beginTransaction', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getCache', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'transactional', array('func' => $func), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->transactional($func);
    }

    public function commit()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'commit', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->commit();
    }

    public function rollback()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'rollback', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getClassMetadata', array('className' => $className), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createQuery', array('dql' => $dql), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createNamedQuery', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createQueryBuilder', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'flush', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'clear', array('entityName' => $entityName), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->clear($entityName);
    }

    public function close()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'close', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->close();
    }

    public function persist($entity)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'persist', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'remove', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'refresh', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'detach', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'merge', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'contains', array('entity' => $entity), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getEventManager', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getConfiguration', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'isOpen', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getUnitOfWork', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getProxyFactory', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'initializeObject', array('obj' => $obj), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getFilters', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'isFiltersStateClean', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'hasFilters', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->hasFilters();
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

        $instance->initializer64411 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbe5d7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbe5d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbe5d7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__get', ['name' => $name], $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        if (isset(self::$publicPropertiese80b3[$name])) {
            return $this->valueHolderbe5d7->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe5d7;

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

        $targetObject = $this->valueHolderbe5d7;
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
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe5d7;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderbe5d7;
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
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__isset', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe5d7;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbe5d7;
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
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__unset', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe5d7;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbe5d7;
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
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__clone', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $this->valueHolderbe5d7 = clone $this->valueHolderbe5d7;
    }

    public function __sleep()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__sleep', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return array('valueHolderbe5d7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer64411 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer64411;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'initializeProxy', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbe5d7;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderbe5d7;
    }


}
