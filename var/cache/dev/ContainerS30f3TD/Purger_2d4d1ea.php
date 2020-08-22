<?php
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

class Purger_2d4d1ea extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->create($mode, $purger);
    }

    public function purge()
    {
        $this->initializer87632 && ($this->initializer87632->__invoke($valueHolder8dbe1, $this, 'purge', array(), $this->initializer87632) || 1) && $this->valueHolder8dbe1 = $valueHolder8dbe1;

        return $this->valueHolder8dbe1->purge();
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($instance);

        $instance->initializer87632 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHolder8dbe1) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHolder8dbe1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHolder8dbe1->__construct($manager, $purgeMode);
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
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
