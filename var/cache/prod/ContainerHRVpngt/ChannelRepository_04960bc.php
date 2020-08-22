<?php

include_once\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Repository/ChannelRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Doctrine/ORM/ChannelRepository.php';
class ChannelRepository_04960bc extends \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbe5d7 = null;
    private $initializer64411 = null;
    private static $publicPropertiese80b3 = [
        
    ];
    public function findOneByHostname(string $hostname) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'findOneByHostname', array('hostname' => $hostname), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->findOneByHostname($hostname);
    }
    public function findOneByCode(string $code) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'findOneByCode', array('code' => $code), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->findOneByCode($code);
    }
    public function findByName(string $name) : iterable
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'findByName', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->findByName($name);
    }
    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'add', array('resource' => $resource), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        $this->valueHolderbe5d7->add($resource);
return;
    }
    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'remove', array('resource' => $resource), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        $this->valueHolderbe5d7->remove($resource);
return;
    }
    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->createPaginator($criteria, $sorting);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'clear', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'findAll', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'count', array('criteria' => $criteria), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getClassName', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'matching', array('criteria' => $criteria), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        unset($instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer64411 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;
        if (! $this->valueHolderbe5d7) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository');
            $this->valueHolderbe5d7 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolderbe5d7->__construct($em, $class);
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
        unset($this->_entityName, $this->_em, $this->_class);
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
