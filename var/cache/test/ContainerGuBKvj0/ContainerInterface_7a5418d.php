<?php
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerInterface.php';

class ContainerInterface_7a5418d implements \ProxyManager\Proxy\VirtualProxyInterface, \Symfony\Component\DependencyInjection\ContainerInterface
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

    public function set($id, $service)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'set', array('id' => $id, 'service' => $service), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->set($id, $service);
    }

    public function get($id, $invalidBehavior = 1)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'get', array('id' => $id, 'invalidBehavior' => $invalidBehavior), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->get($id, $invalidBehavior);
    }

    public function has($id)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'has', array('id' => $id), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->has($id);
    }

    public function initialized($id)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'initialized', array('id' => $id), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->initialized($id);
    }

    public function getParameter($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getParameter', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getParameter($name);
    }

    public function hasParameter($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'hasParameter', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->hasParameter($name);
    }

    public function setParameter($name, $value)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'setParameter', array('name' => $name, 'value' => $value), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->setParameter($name, $value);
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

        $instance->initializer64411 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderbe5d7) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');
            $this->valueHolderbe5d7 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__get', ['name' => $name], $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        if (isset(self::$publicPropertiese80b3[$name])) {
            return $this->valueHolderbe5d7->$name;
        }

        $targetObject = $this->valueHolderbe5d7;

        $backtrace = debug_backtrace(false);
        trigger_error(
            sprintf(
                'Undefined property: %s::$%s in %s on line %s',
                'Symfony\\Component\\DependencyInjection\\ContainerInterface',
                $name,
                $backtrace[0]['file'],
                $backtrace[0]['line']
            ),
            \E_USER_NOTICE
        );
        return $targetObject->$name;
    }

    public function __set($name, $value)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $targetObject = $this->valueHolderbe5d7;

        return $targetObject->$name = $value;
    }

    public function __isset($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__isset', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $targetObject = $this->valueHolderbe5d7;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, '__unset', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        $targetObject = $this->valueHolderbe5d7;

        unset($targetObject->$name);
return;
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
