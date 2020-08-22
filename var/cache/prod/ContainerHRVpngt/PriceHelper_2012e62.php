<?php

include_once\dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/HelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/Helper.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Templating/Helper/PriceHelper.php';
class PriceHelper_2012e62 extends \Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbe5d7 = null;
    private $initializer64411 = null;
    private static $publicPropertiese80b3 = [
        
    ];
    public function getPrice(\Sylius\Component\Core\Model\ProductVariantInterface $productVariant, array $context) : int
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getPrice', array('productVariant' => $productVariant, 'context' => $context), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->getPrice($productVariant, $context);
    }
    public function getName() : string
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getName', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->getName();
    }
    public function setCharset($charset)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'setCharset', array('charset' => $charset), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getCharset', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;
        return $this->valueHolderbe5d7->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper $instance) {
            unset($instance->productVariantPriceCalculator);
        }, $instance, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper')->__invoke($instance);
        $instance->initializer64411 = $initializer;
        return $instance;
    }
    public function __construct(\Sylius\Component\Core\Calculator\ProductVariantPriceCalculatorInterface $productVariantPriceCalculator)
    {
        static $reflection;
        if (! $this->valueHolderbe5d7) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper');
            $this->valueHolderbe5d7 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper $instance) {
            unset($instance->productVariantPriceCalculator);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper')->__invoke($this);
        }
        $this->valueHolderbe5d7->__construct($productVariantPriceCalculator);
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
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper $instance) {
            unset($instance->productVariantPriceCalculator);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper')->__invoke($this);
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
