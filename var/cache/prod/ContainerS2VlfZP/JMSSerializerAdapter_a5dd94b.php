<?php

include_once\dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/Serializer.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/JMSSerializerAdapter.php';
class JMSSerializerAdapter_a5dd94b extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere0c4e = null;
    private $initializer9448e = null;
    private static $publicPropertiesf4e81 = [
        
    ];
    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->serialize($data, $format, $context);
    }
    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->deserialize($data, $type, $format, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);
        $instance->initializer9448e = $initializer;
        return $instance;
    }
    public function __construct(\JMS\Serializer\SerializerInterface $serializer, ?\JMS\Serializer\ContextFactory\SerializationContextFactoryInterface $serializationContextFactory = null, ?\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface $deserializationContextFactory = null)
    {
        static $reflection;
        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
        }
        $this->valueHoldere0c4e->__construct($serializer, $serializationContextFactory, $deserializationContextFactory);
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
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer, $instance->serializationContextFactory, $instance->deserializationContextFactory);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
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
