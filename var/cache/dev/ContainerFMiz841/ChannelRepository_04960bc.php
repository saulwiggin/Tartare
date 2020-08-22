<?php
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Repository/ChannelRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Doctrine/ORM/ChannelRepository.php';

class ChannelRepository_04960bc extends \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere0c4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9448e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4e81 = [
        
    ];

    public function findOneByHostname(string $hostname) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'findOneByHostname', array('hostname' => $hostname), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->findOneByHostname($hostname);
    }

    public function findOneByCode(string $code) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'findOneByCode', array('code' => $code), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->findOneByCode($code);
    }

    public function findByName(string $name) : iterable
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'findByName', array('name' => $name), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->findByName($name);
    }

    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'add', array('resource' => $resource), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        $this->valueHoldere0c4e->add($resource);
return;
    }

    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'remove', array('resource' => $resource), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        $this->valueHoldere0c4e->remove($resource);
return;
    }

    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->createPaginator($criteria, $sorting);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'clear', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'findAll', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'count', array('criteria' => $criteria), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getClassName', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'matching', array('criteria' => $criteria), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->matching($criteria);
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

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer9448e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldere0c4e->__construct($em, $class);
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
        unset($this->_entityName, $this->_em, $this->_class);
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
