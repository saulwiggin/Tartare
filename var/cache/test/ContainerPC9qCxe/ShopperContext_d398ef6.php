<?php
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContextInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContext.php';

class ShopperContext_d398ef6 extends \Sylius\Component\Core\Context\ShopperContext implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getChannel() : \Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getChannel', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getChannel();
    }

    public function getCurrencyCode() : string
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getCurrencyCode', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getCurrencyCode();
    }

    public function getLocaleCode() : string
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getLocaleCode', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getLocaleCode();
    }

    public function getCustomer() : ?\Sylius\Component\Customer\Model\CustomerInterface
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getCustomer', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getCustomer();
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

        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $instance, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($instance);

        $instance->initializer0990e = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Channel\Context\ChannelContextInterface $channelContext, \Sylius\Component\Currency\Context\CurrencyContextInterface $currencyContext, \Sylius\Component\Locale\Context\LocaleContextInterface $localeContext, \Sylius\Component\Customer\Context\CustomerContextInterface $customerContext)
    {
        static $reflection;

        if (! $this->valueHolder18e3a) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Component\\Core\\Context\\ShopperContext');
            $this->valueHolder18e3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $this, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($this);

        }

        $this->valueHolder18e3a->__construct($channelContext, $currencyContext, $localeContext, $customerContext);
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
        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $this, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($this);
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
