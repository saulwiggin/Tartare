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

    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->create($mode, $purger);
    }

    public function purge()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'purge', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->purge();
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

        $instance->initializer9448e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHoldere0c4e->__construct($manager, $purgeMode);
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
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
