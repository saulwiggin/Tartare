<?php
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PersisterLoader.php';

class PersisterLoader_c8a8e24 extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PersisterLoader
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'withPersister', array('persister' => $persister), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($instance);

        $instance->initializer64411 = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister, ?\Psr\Log\LoggerInterface $logger = null, array $processors = [])
    {
        static $reflection;

        if (! $this->valueHolderbe5d7) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');
            $this->valueHolderbe5d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);

        }

        $this->valueHolderbe5d7->__construct($decoratedLoader, $persister, $logger, $processors);
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);
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
