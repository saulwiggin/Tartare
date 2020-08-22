<?php

class EntityRepository_afc836c extends \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8dbe1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer87632 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab76a = [
        
    ];

    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'add', array('resource' => $resource), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        $this->valueHolder8dbe1->add($resource);
return;
    }

    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'remove', array('resource' => $resource), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        $this->valueHolder8dbe1->remove($resource);
return;
    }

    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->createPaginator($criteria, $sorting);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'clear', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'findAll', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'count', array('criteria' => $criteria), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'getClassName', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'matching', array('criteria' => $criteria), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->matching($criteria);
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

        $instance->initializer87632 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolder8dbe1) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository');
            $this->valueHolder8dbe1 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder8dbe1->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__get', ['name' => $name], $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        if (isset(self::$publicPropertiesab76a[$name])) {
            return $this->valueHolder8dbe1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dbe1;

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

        $targetObject = $this->valueHolder8dbe1;
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
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dbe1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8dbe1;
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
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__isset', array('name' => $name), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dbe1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8dbe1;
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
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__unset', array('name' => $name), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dbe1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8dbe1;
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
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__clone', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        $this->valueHolder8dbe1 = clone $this->valueHolder8dbe1;
    }

    public function __sleep()
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, '__sleep', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return array('valueHolder8dbe1');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer87632 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer87632;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'initializeProxy', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8dbe1;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder8dbe1;
    }


}
