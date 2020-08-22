<?php
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

class CsvFileLoader_5cc7c8f extends \Symfony\Component\Translation\Loader\CsvFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function setCsvControl($delimiter = ';', $enclosure = '"', $escape = '\\')
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'setCsvControl', array('delimiter' => $delimiter, 'enclosure' => $enclosure, 'escape' => $escape), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->setCsvControl($delimiter, $enclosure, $escape);
    }

    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->load($resource, $locale, $domain);
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

        \Closure::bind(function (\Symfony\Component\Translation\Loader\CsvFileLoader $instance) {
            unset($instance->delimiter, $instance->enclosure, $instance->escape);
        }, $instance, 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader')->__invoke($instance);

        $instance->initializer0990e = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder18e3a) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\CsvFileLoader');
            $this->valueHolder18e3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Symfony\Component\Translation\Loader\CsvFileLoader $instance) {
            unset($instance->delimiter, $instance->enclosure, $instance->escape);
        }, $this, 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader')->__invoke($this);

        }
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
        \Closure::bind(function (\Symfony\Component\Translation\Loader\CsvFileLoader $instance) {
            unset($instance->delimiter, $instance->enclosure, $instance->escape);
        }, $this, 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader')->__invoke($this);
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
