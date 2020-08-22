<?php
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Templating/Helper/CheckoutStepsHelper.php';

class CheckoutStepsHelper_87a88b2 extends \Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function isShippingRequired(\Sylius\Component\Core\Model\OrderInterface $order) : bool
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'isShippingRequired', array('order' => $order), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->isShippingRequired($order);
    }

    public function isPaymentRequired(\Sylius\Component\Core\Model\OrderInterface $order) : bool
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'isPaymentRequired', array('order' => $order), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->isPaymentRequired($order);
    }

    public function getName() : string
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getName', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->getName();
    }

    public function setCharset($charset)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'setCharset', array('charset' => $charset), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getCharset', array(), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;

        return $this->valueHoldere0c4e->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $instance, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($instance);

        $instance->initializer9448e = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Core\Checker\OrderPaymentMethodSelectionRequirementCheckerInterface $orderPaymentMethodSelectionRequirementChecker, \Sylius\Component\Core\Checker\OrderShippingMethodSelectionRequirementCheckerInterface $orderShippingMethodSelectionRequirementChecker)
    {
        static $reflection;

        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($this);

        }

        $this->valueHoldere0c4e->__construct($orderPaymentMethodSelectionRequirementChecker, $orderShippingMethodSelectionRequirementChecker);
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
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($this);
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
